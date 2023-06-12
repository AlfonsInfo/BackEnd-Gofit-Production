<?php

namespace App\Http\Controllers;

use App\Models\booking_gym;
use App\Models\User\instruktur;
use App\Models\presensi_instruktur;
use App\Models\booking_kelas;
use App\Models\ijin_instruktur;
use App\Models\jadwal_harian;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

use function Database\Seeders\presensiInstruktur;

class laporanController extends Controller
{
    public function laporanPendapatanPerTahun(Request $request)
    {
        //* Cek Tahun
        $year = Carbon::now()->year;
        $tanggalCetak = Carbon::now();
    
        if ($request->has('year') && !empty($request->year)) {
            $year = $request->year;
        }
    
        $pendapatanPerTahun = DB::select("
            SELECT
                bulan.nama_bulan,
                COALESCE(SUM(nominal_aktivasi), 0) AS total_pendapatan_aktivasi,
                COALESCE(SUM(nominal_deposit_reguler + nominal_deposit_paket), 0) AS total_pendapatan_deposit,
                COALESCE(SUM(nominal_aktivasi + nominal_deposit_reguler + nominal_deposit_paket), 0) AS total_pendapatan
            FROM (
                SELECT 1 AS bulan_id, 'January' AS nama_bulan UNION ALL
                SELECT 2 AS bulan_id, 'February' AS nama_bulan UNION ALL
                SELECT 3 AS bulan_id, 'March' AS nama_bulan UNION ALL
                SELECT 4 AS bulan_id, 'April' AS nama_bulan UNION ALL
                SELECT 5 AS bulan_id, 'May' AS nama_bulan UNION ALL
                SELECT 6 AS bulan_id, 'June' AS nama_bulan UNION ALL
                SELECT 7 AS bulan_id, 'July' AS nama_bulan UNION ALL
                SELECT 8 AS bulan_id, 'August' AS nama_bulan UNION ALL
                SELECT 9 AS bulan_id, 'September' AS nama_bulan UNION ALL
                SELECT 10 AS bulan_id, 'October' AS nama_bulan UNION ALL
                SELECT 11 AS bulan_id, 'November' AS nama_bulan UNION ALL
                SELECT 12 AS bulan_id, 'December' AS nama_bulan
            ) AS bulan
            LEFT JOIN (
                SELECT
                    MONTH(tanggal_aktivasi) AS bulan_id,
                    nominal_aktivasi,
                    0 AS nominal_deposit_reguler,
                    0 AS nominal_deposit_paket
                FROM transaksi_aktivasi
                WHERE YEAR(tanggal_aktivasi) = $year
                UNION ALL
                SELECT
                    MONTH(tanggal_deposit) AS bulan_id,
                    0 AS nominal_aktivasi,
                    nominal_deposit AS nominal_deposit_reguler,
                    0 AS nominal_deposit_paket
                FROM transaksi_deposit_reguler
                WHERE YEAR(tanggal_deposit) = $year
                UNION ALL
                SELECT
                    MONTH(tanggal_deposit) AS bulan_id,
                    0 AS nominal_aktivasi,
                    0 AS nominal_deposit_reguler,
                    nominal_uang AS nominal_deposit_paket
                FROM transaksi_deposit_paket
                WHERE YEAR(tanggal_deposit) = $year
            ) AS transaksi ON bulan.bulan_id = transaksi.bulan_id
            GROUP BY bulan.bulan_id, bulan.nama_bulan
            ORDER BY bulan.bulan_id;
        ");
    
        return response([
            'data' => $pendapatanPerTahun,
            'tanggal_cetak' => $tanggalCetak,
        ]);
    }
    

    
    public function aktivitasKelasBulanan(Request $request)
    {
        $bulan = Carbon::now()->month;
        if ($request->has('month') && !empty($request->month)) {
            $bulan = $request->month;
        }
        // dd($bulan);
        //* Tanggal Cetak
        $tanggalCetak = Carbon::now();
        $dataKelasInstruktur = DB::select("
        SELECT
        k.jenis_kelas AS kelas,
        i.nama_instruktur AS instruktur,
        COUNT(DISTINCT bk.no_booking) AS jumlah_peserta_kelas,
        COUNT(DISTINCT CASE WHEN jh.status = 'diliburkan' THEN jh.id_jadwal_harian END) AS jumlah_libur
    FROM
        booking_kelas AS bk
        JOIN jadwal_harian AS jh ON bk.id_jadwal_harian = jh.id_jadwal_harian
        JOIN jadwal_umum AS ju ON jh.id_jadwal_umum = ju.id_jadwal_umum
        LEFT JOIN instruktur AS i ON ju.id_instruktur = i.id_instruktur
        LEFT JOIN kelas AS k ON ju.id_kelas = k.id_kelas
    WHERE
        MONTH(jh.tanggal_jadwal_harian) = ?
        AND bk.is_canceled = 0
    GROUP BY
        k.jenis_kelas, i.nama_instruktur;
    ", [$bulan]);

        //akumulasi terlambat direset tiap bulan jam mulai tiap bulan - jam selesai bulan 
        
        return response([
            'data' => $dataKelasInstruktur,
            'tanggal_cetak' => $tanggalCetak,
        ]);
        
    }
    
    public function aktivitasGymBulanan(Request $request){
        //* date
        $bulan = Carbon::now()->month;
        if ($request->has('month') && !empty($request->month)) {
            $bulan = $request->month;
        }


        //* Tanggal Cetak
        $tanggalCetak = Carbon::now();
        $aktivitasGym = booking_gym::where('tanggal_sesi_gym','<',$tanggalCetak)
        ->where('status_kehadiran', 1 )
        ->where('is_canceled', 0)
        ->whereMonth('tanggal_sesi_gym', $bulan) //* lewat parmas
        ->get()
        ->groupBy(function ($item) {
            //*group by tanggal
            $carbonDate = Carbon::createFromFormat('Y-m-d', $item->tanggal_sesi_gym);
            return $carbonDate->format('Y-m-d');
        });
        //* Data yang diambil data booking gym yang udah lewat(tanggal sesi gymnya status kehadiran 1) dan tidak dibatalin
        
        
        //* Count 
        $responseData = [];
        
        foreach ($aktivitasGym as $tanggal => $grup) {
            $count = $grup->count();
            $responseData[] = [
                'tanggal' => $tanggal,
                'count' => $count,
            ];
        }
        
        
        
        return response([
            'data' => $responseData,
            'tanggal_cetak' => $tanggalCetak
        ]);
    }
    
    public function kinerjaInstrukturBulanan(Request $request)    {
        $bulan = Carbon::now()->month;
        if ($request->has('month') && !empty($request->month)) {
            $bulan = $request->month;
        }
        $dataInstruktur = Instruktur::orderBy('akumulasi_terlambat', 'asc')->get();
        foreach($dataInstruktur as $d){
            $presensi = presensi_instruktur::where('id_instruktur',$d->id_instruktur)->whereMonth('waktu_presensi', $bulan)->count();
            $ijin = ijin_instruktur::where('id_instruktur', $d->id_instruktur)->whereMonth('tanggal_pengajuan', $bulan)->where('status_ijin', 'Perijinan dikonfirmasi')->count();
            $d->presensi = $presensi;
            $d->ijin = $ijin;
        }

        return response([
            'data' => $dataInstruktur,            // 'tanggal_cetak' => $tanggalCetak,
        ]);
}

}

