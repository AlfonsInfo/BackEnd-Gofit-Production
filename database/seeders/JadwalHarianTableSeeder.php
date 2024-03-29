<?php

namespace Database\Seeders;

use App\Models\jadwal_umum; 
use App\Models\jadwal_harian; 
use App\Models\User\instruktur; 
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class JadwalHarianTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $start_date = Carbon::parse('2023-01-01')->startOfWeek(Carbon::SUNDAY)->addDay(); // Mengatur tanggal awal sebagai hari Minggu terdekat setelah 1 Januari
$end_date = Carbon::parse('2023-06-11')->startOfWeek(Carbon::SUNDAY)->addDays(7); // Mengatur tanggal akhir sebagai hari Minggu terdekat setelah 11 Juni

$mapHari = [
    'monday' => 'Senin',
    'tuesday' => 'Selasa',
    'wednesday' => 'Rabu',
    'thursday' => 'Kamis',
    'friday' => 'Jumat',
    'saturday' => 'Sabtu',
    'sunday' => 'Minggu'
];

for ($date = $start_date; $date->lte($end_date); $date->addDay()) {
    $hari = Carbon::parse($date)->format('l');
    $jadwalUmum = DB::table('jadwal_umum')
        ->where('jadwal_umum.hari', '=', $mapHari[strtolower($hari)])
        ->get();

    // Menyimpan data ke tabel jadwal_harian
    foreach ($jadwalUmum as $jadwal) {
        $jadwalHarian = DB::table('jadwal_harian')
            ->where('tanggal_jadwal_harian', '=', $date->toDateString())
            ->where('id_jadwal_umum', '=', $jadwal->id_jadwal_umum)
            ->first();

        // Jika belum ada, maka dilakukan insert
        if (!$jadwalHarian) {
            $stringDate = $date->toDateString();
            $randomEvent = rand(0,20);
            if($randomEvent != 8 && $randomEvent != 9){
                DB::table('jadwal_harian')->insert([
                    'tanggal_jadwal_harian' => $stringDate,
                    'status' => 'berjalan',
                    'id_jadwal_umum' => $jadwal->id_jadwal_umum,
                ]);

                $jadwalHarian = jadwal_harian::where('tanggal_jadwal_harian', '=', $stringDate)->where('id_jadwal_umum','=',$jadwal->id_jadwal_umum)->orderBy('created_at', 'desc')->first();

                DB::table('presensi_instruktur')->insert([
                    'id_jadwal_harian' => $jadwalHarian->id_jadwal_harian,
                    'waktu_presensi' =>  $stringDate . ' '  . $jadwal->jam_mulai,
                    'waktu_selesai' => $stringDate . ' '  . $jadwal->jam_selesai,
                    'status_presensi' => 'hadir',
                    'id_instruktur' => $jadwal->id_instruktur
                ]);
            }
        }
        if($randomEvent == 8){
            DB::table('jadwal_harian')->insert([
                'tanggal_jadwal_harian' => $date->toDateString(),
                'status' => 'instruktur pengganti',
                'id_jadwal_umum' => $jadwal->id_jadwal_umum,
            ]);

            $jadwalHarian = jadwal_harian::where('tanggal_jadwal_harian', '=', $stringDate)->where('id_jadwal_umum','=',$jadwal->id_jadwal_umum)->orderBy('created_at', 'desc')->first();
            $tanggalPengajuan = Carbon::parse($jadwalHarian->tanggal_jadwal_harian)->subDays(2); 
            $instrukturLain = Instruktur::whereNotIn('id_instruktur', [$jadwal->id_instruktur])->pluck('id_instruktur')->first();


            DB::table('ijin_instruktur')->insert([
                'id_jadwal_harian' => $jadwalHarian->id_jadwal_harian,
                'status_ijin' => 'Perijinan dikonfirmasi',
                'tanggal_pengajuan' => $tanggalPengajuan,
                'id_instruktur' => $jadwal->id_instruktur,
                'id_instruktur_pengganti' => $instrukturLain
            ]);
            

            DB::table('presensi_instruktur')->insert([
                'id_jadwal_harian' => $jadwalHarian->id_jadwal_harian,
                'waktu_presensi' => $stringDate . ' ' . $jadwal->jam_mulai,
                'waktu_selesai' => $stringDate . ' ' . $jadwal->jam_selesai,
                'status_presensi' => 'hadir',
                'id_instruktur' => $instrukturLain
            ]);
            
        }
        if($randomEvent == 9){
            DB::table('jadwal_harian')->insert([
                'tanggal_jadwal_harian' => $date->toDateString(),
                'status' => 'diliburkan',
                'id_jadwal_umum' => $jadwal->id_jadwal_umum,
            ]);

            $jadwalHarian = jadwal_harian::where('tanggal_jadwal_harian', '=', $stringDate)->where('id_jadwal_umum','=',$jadwal->id_jadwal_umum)->orderBy('created_at', 'desc')->first();
            $tanggalPengajuan = Carbon::parse($jadwalHarian->tanggal_jadwal_harian)->subDays(2); 
            $instrukturLain = Instruktur::whereNotIn('id_instruktur', [$jadwal->id_instruktur])->pluck('id_instruktur')->first();
            $rand = rand(0,1);

            if($rand == 0){
                DB::table('ijin_instruktur')->insert([
                    'id_jadwal_harian' => $jadwalHarian->id_jadwal_harian,
                    'status_ijin' => 'Perijinan ditolak',
                    'tanggal_pengajuan' => $tanggalPengajuan,
                    'id_instruktur' => $jadwal->id_instruktur,
                    'id_instruktur_pengganti' => $instrukturLain
                ]);
            }
        }
    }
}

        

        // \DB::table('jadwal_harian')->delete();
        
        // \DB::table('jadwal_harian')->insert(array (
        //     0 => 
        //     array (
        //         'id_jadwal_harian' => 454,
        //         'tanggal_jadwal_harian' => '2023-05-08',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 1,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-09 10:43:44',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     1 => 
        //     array (
        //         'id_jadwal_harian' => 455,
        //         'tanggal_jadwal_harian' => '2023-05-08',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 2,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-09 10:43:44',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     2 => 
        //     array (
        //         'id_jadwal_harian' => 456,
        //         'tanggal_jadwal_harian' => '2023-05-08',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 16,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-09 10:43:44',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     3 => 
        //     array (
        //         'id_jadwal_harian' => 457,
        //         'tanggal_jadwal_harian' => '2023-05-08',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 17,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-09 10:43:44',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     4 => 
        //     array (
        //         'id_jadwal_harian' => 458,
        //         'tanggal_jadwal_harian' => '2023-05-08',
        //         'status' => 'diliburkan',
        //         'id_jadwal_umum' => 42,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-09 10:43:44',
        //         'updated_at' => '2023-05-09 10:44:24',
        //         'deleted_at' => NULL,
        //     ),
        //     5 => 
        //     array (
        //         'id_jadwal_harian' => 459,
        //         'tanggal_jadwal_harian' => '2023-05-08',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 43,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-09 10:43:44',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     6 => 
        //     array (
        //         'id_jadwal_harian' => 461,
        //         'tanggal_jadwal_harian' => '2023-05-09',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 3,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-09 10:43:44',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     7 => 
        //     array (
        //         'id_jadwal_harian' => 462,
        //         'tanggal_jadwal_harian' => '2023-05-09',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 4,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-09 10:43:44',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     8 => 
        //     array (
        //         'id_jadwal_harian' => 463,
        //         'tanggal_jadwal_harian' => '2023-05-09',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 18,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-09 10:43:44',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     9 => 
        //     array (
        //         'id_jadwal_harian' => 464,
        //         'tanggal_jadwal_harian' => '2023-05-09',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 19,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-09 10:43:44',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     10 => 
        //     array (
        //         'id_jadwal_harian' => 465,
        //         'tanggal_jadwal_harian' => '2023-05-09',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 20,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-09 10:43:44',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     11 => 
        //     array (
        //         'id_jadwal_harian' => 466,
        //         'tanggal_jadwal_harian' => '2023-05-09',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 31,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-09 10:43:44',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     12 => 
        //     array (
        //         'id_jadwal_harian' => 467,
        //         'tanggal_jadwal_harian' => '2023-05-09',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 35,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-09 10:43:44',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     13 => 
        //     array (
        //         'id_jadwal_harian' => 468,
        //         'tanggal_jadwal_harian' => '2023-05-09',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 37,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-09 10:43:44',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     14 => 
        //     array (
        //         'id_jadwal_harian' => 469,
        //         'tanggal_jadwal_harian' => '2023-05-10',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 5,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-09 10:43:44',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     15 => 
        //     array (
        //         'id_jadwal_harian' => 470,
        //         'tanggal_jadwal_harian' => '2023-05-10',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 6,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-09 10:43:44',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     16 => 
        //     array (
        //         'id_jadwal_harian' => 471,
        //         'tanggal_jadwal_harian' => '2023-05-10',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 7,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-09 10:43:44',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     17 => 
        //     array (
        //         'id_jadwal_harian' => 472,
        //         'tanggal_jadwal_harian' => '2023-05-10',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 21,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-09 10:43:44',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     18 => 
        //     array (
        //         'id_jadwal_harian' => 473,
        //         'tanggal_jadwal_harian' => '2023-05-10',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 22,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-09 10:43:44',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     19 => 
        //     array (
        //         'id_jadwal_harian' => 475,
        //         'tanggal_jadwal_harian' => '2023-05-10',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 38,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-09 10:43:44',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     20 => 
        //     array (
        //         'id_jadwal_harian' => 476,
        //         'tanggal_jadwal_harian' => '2023-05-11',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 8,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-09 10:43:44',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     21 => 
        //     array (
        //         'id_jadwal_harian' => 477,
        //         'tanggal_jadwal_harian' => '2023-05-11',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 9,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-09 10:43:44',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     22 => 
        //     array (
        //         'id_jadwal_harian' => 478,
        //         'tanggal_jadwal_harian' => '2023-05-11',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 24,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-09 10:43:44',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     23 => 
        //     array (
        //         'id_jadwal_harian' => 479,
        //         'tanggal_jadwal_harian' => '2023-05-11',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 25,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-09 10:43:44',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     24 => 
        //     array (
        //         'id_jadwal_harian' => 480,
        //         'tanggal_jadwal_harian' => '2023-05-11',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 32,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-09 10:43:44',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     25 => 
        //     array (
        //         'id_jadwal_harian' => 481,
        //         'tanggal_jadwal_harian' => '2023-05-12',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 10,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-09 10:43:44',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     26 => 
        //     array (
        //         'id_jadwal_harian' => 482,
        //         'tanggal_jadwal_harian' => '2023-05-12',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 11,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-09 10:43:44',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     27 => 
        //     array (
        //         'id_jadwal_harian' => 483,
        //         'tanggal_jadwal_harian' => '2023-05-12',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 26,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-09 10:43:44',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     28 => 
        //     array (
        //         'id_jadwal_harian' => 484,
        //         'tanggal_jadwal_harian' => '2023-05-12',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 27,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-09 10:43:44',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     29 => 
        //     array (
        //         'id_jadwal_harian' => 485,
        //         'tanggal_jadwal_harian' => '2023-05-12',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 33,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-09 10:43:44',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     30 => 
        //     array (
        //         'id_jadwal_harian' => 486,
        //         'tanggal_jadwal_harian' => '2023-05-12',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 44,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-09 10:43:44',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     31 => 
        //     array (
        //         'id_jadwal_harian' => 487,
        //         'tanggal_jadwal_harian' => '2023-05-13',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 12,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-09 10:43:44',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     32 => 
        //     array (
        //         'id_jadwal_harian' => 488,
        //         'tanggal_jadwal_harian' => '2023-05-13',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 13,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-09 10:43:44',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     33 => 
        //     array (
        //         'id_jadwal_harian' => 489,
        //         'tanggal_jadwal_harian' => '2023-05-13',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 14,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-09 10:43:44',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     34 => 
        //     array (
        //         'id_jadwal_harian' => 490,
        //         'tanggal_jadwal_harian' => '2023-05-13',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 28,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-09 10:43:44',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     35 => 
        //     array (
        //         'id_jadwal_harian' => 491,
        //         'tanggal_jadwal_harian' => '2023-05-13',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 29,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-09 10:43:44',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     36 => 
        //     array (
        //         'id_jadwal_harian' => 492,
        //         'tanggal_jadwal_harian' => '2023-05-13',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 30,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-09 10:43:44',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     37 => 
        //     array (
        //         'id_jadwal_harian' => 493,
        //         'tanggal_jadwal_harian' => '2023-05-13',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 34,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-09 10:43:44',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     38 => 
        //     array (
        //         'id_jadwal_harian' => 494,
        //         'tanggal_jadwal_harian' => '2023-05-13',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 36,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-09 10:43:44',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     39 => 
        //     array (
        //         'id_jadwal_harian' => 495,
        //         'tanggal_jadwal_harian' => '2023-05-14',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 15,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-09 10:43:44',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     40 => 
        //     array (
        //         'id_jadwal_harian' => 496,
        //         'tanggal_jadwal_harian' => '2023-05-14',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 49,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-09 10:43:44',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     41 => 
        //     array (
        //         'id_jadwal_harian' => 497,
        //         'tanggal_jadwal_harian' => '2023-05-15',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 1,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-15 14:45:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     42 => 
        //     array (
        //         'id_jadwal_harian' => 498,
        //         'tanggal_jadwal_harian' => '2023-05-15',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 2,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-15 14:45:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     43 => 
        //     array (
        //         'id_jadwal_harian' => 499,
        //         'tanggal_jadwal_harian' => '2023-05-15',
        //         'status' => 'diliburkan',
        //         'id_jadwal_umum' => 16,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-15 14:45:29',
        //         'updated_at' => '2023-05-15 14:47:56',
        //         'deleted_at' => NULL,
        //     ),
        //     44 => 
        //     array (
        //         'id_jadwal_harian' => 500,
        //         'tanggal_jadwal_harian' => '2023-05-15',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 17,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-15 14:45:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     45 => 
        //     array (
        //         'id_jadwal_harian' => 501,
        //         'tanggal_jadwal_harian' => '2023-05-15',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 42,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-15 14:45:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     46 => 
        //     array (
        //         'id_jadwal_harian' => 502,
        //         'tanggal_jadwal_harian' => '2023-05-15',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 43,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-15 14:45:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     47 => 
        //     array (
        //         'id_jadwal_harian' => 504,
        //         'tanggal_jadwal_harian' => '2023-05-16',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 3,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-15 14:45:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     48 => 
        //     array (
        //         'id_jadwal_harian' => 505,
        //         'tanggal_jadwal_harian' => '2023-05-16',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 4,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-15 14:45:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     49 => 
        //     array (
        //         'id_jadwal_harian' => 506,
        //         'tanggal_jadwal_harian' => '2023-05-16',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 18,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-15 14:45:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     50 => 
        //     array (
        //         'id_jadwal_harian' => 507,
        //         'tanggal_jadwal_harian' => '2023-05-16',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 19,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-15 14:45:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     51 => 
        //     array (
        //         'id_jadwal_harian' => 508,
        //         'tanggal_jadwal_harian' => '2023-05-16',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 20,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-15 14:45:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     52 => 
        //     array (
        //         'id_jadwal_harian' => 509,
        //         'tanggal_jadwal_harian' => '2023-05-16',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 31,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-15 14:45:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     53 => 
        //     array (
        //         'id_jadwal_harian' => 510,
        //         'tanggal_jadwal_harian' => '2023-05-16',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 35,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-15 14:45:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     54 => 
        //     array (
        //         'id_jadwal_harian' => 511,
        //         'tanggal_jadwal_harian' => '2023-05-16',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 37,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-15 14:45:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     55 => 
        //     array (
        //         'id_jadwal_harian' => 512,
        //         'tanggal_jadwal_harian' => '2023-05-17',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 5,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-15 14:45:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     56 => 
        //     array (
        //         'id_jadwal_harian' => 513,
        //         'tanggal_jadwal_harian' => '2023-05-17',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 6,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-15 14:45:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     57 => 
        //     array (
        //         'id_jadwal_harian' => 514,
        //         'tanggal_jadwal_harian' => '2023-05-17',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 7,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-15 14:45:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     58 => 
        //     array (
        //         'id_jadwal_harian' => 515,
        //         'tanggal_jadwal_harian' => '2023-05-17',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 21,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-15 14:45:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     59 => 
        //     array (
        //         'id_jadwal_harian' => 516,
        //         'tanggal_jadwal_harian' => '2023-05-17',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 22,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-15 14:45:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     60 => 
        //     array (
        //         'id_jadwal_harian' => 518,
        //         'tanggal_jadwal_harian' => '2023-05-17',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 38,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-15 14:45:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     61 => 
        //     array (
        //         'id_jadwal_harian' => 519,
        //         'tanggal_jadwal_harian' => '2023-05-18',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 8,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-15 14:45:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     62 => 
        //     array (
        //         'id_jadwal_harian' => 520,
        //         'tanggal_jadwal_harian' => '2023-05-18',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 9,
        //         'jam_mulai' => '14:37:55',
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-15 14:45:29',
        //         'updated_at' => '2023-05-18 14:37:55',
        //         'deleted_at' => NULL,
        //     ),
        //     63 => 
        //     array (
        //         'id_jadwal_harian' => 521,
        //         'tanggal_jadwal_harian' => '2023-05-18',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 24,
        //         'jam_mulai' => '14:37:20',
        //         'jam_selesai' => '14:40:15',
        //         'created_at' => '2023-05-15 14:45:29',
        //         'updated_at' => '2023-05-18 14:40:15',
        //         'deleted_at' => NULL,
        //     ),
        //     64 => 
        //     array (
        //         'id_jadwal_harian' => 522,
        //         'tanggal_jadwal_harian' => '2023-05-19',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 25,
        //         'jam_mulai' => '13:33:17',
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-15 14:45:29',
        //         'updated_at' => '2023-05-18 13:33:17',
        //         'deleted_at' => NULL,
        //     ),
        //     65 => 
        //     array (
        //         'id_jadwal_harian' => 523,
        //         'tanggal_jadwal_harian' => '2023-05-19',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 32,
        //         'jam_mulai' => '20:00:00',
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-15 14:45:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     66 => 
        //     array (
        //         'id_jadwal_harian' => 524,
        //         'tanggal_jadwal_harian' => '2023-05-19',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 10,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-15 14:45:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     67 => 
        //     array (
        //         'id_jadwal_harian' => 525,
        //         'tanggal_jadwal_harian' => '2023-05-19',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 11,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-15 14:45:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     68 => 
        //     array (
        //         'id_jadwal_harian' => 526,
        //         'tanggal_jadwal_harian' => '2023-05-19',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 26,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-15 14:45:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     69 => 
        //     array (
        //         'id_jadwal_harian' => 527,
        //         'tanggal_jadwal_harian' => '2023-05-19',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 27,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-15 14:45:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     70 => 
        //     array (
        //         'id_jadwal_harian' => 528,
        //         'tanggal_jadwal_harian' => '2023-05-19',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 33,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-15 14:45:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     71 => 
        //     array (
        //         'id_jadwal_harian' => 529,
        //         'tanggal_jadwal_harian' => '2023-05-19',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 44,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-15 14:45:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     72 => 
        //     array (
        //         'id_jadwal_harian' => 530,
        //         'tanggal_jadwal_harian' => '2023-05-20',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 12,
        //         'jam_mulai' => '16:16:24',
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-15 14:45:29',
        //         'updated_at' => '2023-05-20 16:16:24',
        //         'deleted_at' => NULL,
        //     ),
        //     73 => 
        //     array (
        //         'id_jadwal_harian' => 531,
        //         'tanggal_jadwal_harian' => '2023-05-20',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 13,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-15 14:45:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     74 => 
        //     array (
        //         'id_jadwal_harian' => 532,
        //         'tanggal_jadwal_harian' => '2023-05-19',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 14,
        //         'jam_mulai' => '14:39:08',
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-15 14:45:29',
        //         'updated_at' => '2023-05-19 14:39:08',
        //         'deleted_at' => NULL,
        //     ),
        //     75 => 
        //     array (
        //         'id_jadwal_harian' => 533,
        //         'tanggal_jadwal_harian' => '2023-05-20',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 28,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-15 14:45:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     76 => 
        //     array (
        //         'id_jadwal_harian' => 534,
        //         'tanggal_jadwal_harian' => '2023-05-20',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 29,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-15 14:45:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     77 => 
        //     array (
        //         'id_jadwal_harian' => 535,
        //         'tanggal_jadwal_harian' => '2023-05-20',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 30,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-15 14:45:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     78 => 
        //     array (
        //         'id_jadwal_harian' => 536,
        //         'tanggal_jadwal_harian' => '2023-05-20',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 34,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-15 14:45:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     79 => 
        //     array (
        //         'id_jadwal_harian' => 537,
        //         'tanggal_jadwal_harian' => '2023-05-20',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 36,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-15 14:45:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     80 => 
        //     array (
        //         'id_jadwal_harian' => 538,
        //         'tanggal_jadwal_harian' => '2023-05-21',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 15,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-15 14:45:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     81 => 
        //     array (
        //         'id_jadwal_harian' => 539,
        //         'tanggal_jadwal_harian' => '2023-05-21',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 49,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-15 14:45:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     82 => 
        //     array (
        //         'id_jadwal_harian' => 540,
        //         'tanggal_jadwal_harian' => '2023-05-22',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 1,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-23 20:01:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     83 => 
        //     array (
        //         'id_jadwal_harian' => 541,
        //         'tanggal_jadwal_harian' => '2023-05-22',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 2,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-23 20:01:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     84 => 
        //     array (
        //         'id_jadwal_harian' => 542,
        //         'tanggal_jadwal_harian' => '2023-05-22',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 16,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-23 20:01:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     85 => 
        //     array (
        //         'id_jadwal_harian' => 543,
        //         'tanggal_jadwal_harian' => '2023-05-22',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 17,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-23 20:01:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     86 => 
        //     array (
        //         'id_jadwal_harian' => 544,
        //         'tanggal_jadwal_harian' => '2023-05-22',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 42,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-23 20:01:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     87 => 
        //     array (
        //         'id_jadwal_harian' => 545,
        //         'tanggal_jadwal_harian' => '2023-05-22',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 43,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-23 20:01:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     88 => 
        //     array (
        //         'id_jadwal_harian' => 547,
        //         'tanggal_jadwal_harian' => '2023-05-23',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 3,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-23 20:01:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     89 => 
        //     array (
        //         'id_jadwal_harian' => 548,
        //         'tanggal_jadwal_harian' => '2023-05-23',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 4,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-23 20:01:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     90 => 
        //     array (
        //         'id_jadwal_harian' => 549,
        //         'tanggal_jadwal_harian' => '2023-05-23',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 18,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-23 20:01:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     91 => 
        //     array (
        //         'id_jadwal_harian' => 550,
        //         'tanggal_jadwal_harian' => '2023-05-23',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 19,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-23 20:01:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     92 => 
        //     array (
        //         'id_jadwal_harian' => 551,
        //         'tanggal_jadwal_harian' => '2023-05-23',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 20,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-23 20:01:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     93 => 
        //     array (
        //         'id_jadwal_harian' => 552,
        //         'tanggal_jadwal_harian' => '2023-05-23',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 31,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-23 20:01:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     94 => 
        //     array (
        //         'id_jadwal_harian' => 553,
        //         'tanggal_jadwal_harian' => '2023-05-23',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 35,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-23 20:01:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     95 => 
        //     array (
        //         'id_jadwal_harian' => 554,
        //         'tanggal_jadwal_harian' => '2023-05-23',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 37,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-23 20:01:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     96 => 
        //     array (
        //         'id_jadwal_harian' => 555,
        //         'tanggal_jadwal_harian' => '2023-05-24',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 5,
        //         'jam_mulai' => '12:45:20',
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-23 20:01:29',
        //         'updated_at' => '2023-05-24 12:45:20',
        //         'deleted_at' => NULL,
        //     ),
        //     97 => 
        //     array (
        //         'id_jadwal_harian' => 556,
        //         'tanggal_jadwal_harian' => '2023-05-24',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 6,
        //         'jam_mulai' => '12:46:23',
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-23 20:01:29',
        //         'updated_at' => '2023-05-24 12:46:23',
        //         'deleted_at' => NULL,
        //     ),
        //     98 => 
        //     array (
        //         'id_jadwal_harian' => 557,
        //         'tanggal_jadwal_harian' => '2023-05-24',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 7,
        //         'jam_mulai' => '12:48:40',
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-23 20:01:29',
        //         'updated_at' => '2023-05-24 12:48:40',
        //         'deleted_at' => NULL,
        //     ),
        //     99 => 
        //     array (
        //         'id_jadwal_harian' => 558,
        //         'tanggal_jadwal_harian' => '2023-05-24',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 21,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-23 20:01:29',
        //         'updated_at' => '2023-05-24 12:14:25',
        //         'deleted_at' => NULL,
        //     ),
        //     100 => 
        //     array (
        //         'id_jadwal_harian' => 559,
        //         'tanggal_jadwal_harian' => '2023-05-24',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 22,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-23 20:01:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     101 => 
        //     array (
        //         'id_jadwal_harian' => 561,
        //         'tanggal_jadwal_harian' => '2023-05-24',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 38,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-23 20:01:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     102 => 
        //     array (
        //         'id_jadwal_harian' => 562,
        //         'tanggal_jadwal_harian' => '2023-05-25',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 8,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-23 20:01:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     103 => 
        //     array (
        //         'id_jadwal_harian' => 563,
        //         'tanggal_jadwal_harian' => '2023-05-25',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 9,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-23 20:01:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     104 => 
        //     array (
        //         'id_jadwal_harian' => 564,
        //         'tanggal_jadwal_harian' => '2023-05-25',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 24,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-23 20:01:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     105 => 
        //     array (
        //         'id_jadwal_harian' => 565,
        //         'tanggal_jadwal_harian' => '2023-05-25',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 25,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-23 20:01:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     106 => 
        //     array (
        //         'id_jadwal_harian' => 566,
        //         'tanggal_jadwal_harian' => '2023-05-25',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 32,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-23 20:01:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     107 => 
        //     array (
        //         'id_jadwal_harian' => 567,
        //         'tanggal_jadwal_harian' => '2023-05-26',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 10,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-23 20:01:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     108 => 
        //     array (
        //         'id_jadwal_harian' => 568,
        //         'tanggal_jadwal_harian' => '2023-05-26',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 11,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-23 20:01:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     109 => 
        //     array (
        //         'id_jadwal_harian' => 569,
        //         'tanggal_jadwal_harian' => '2023-05-26',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 26,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-23 20:01:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     110 => 
        //     array (
        //         'id_jadwal_harian' => 570,
        //         'tanggal_jadwal_harian' => '2023-05-26',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 27,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-23 20:01:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     111 => 
        //     array (
        //         'id_jadwal_harian' => 571,
        //         'tanggal_jadwal_harian' => '2023-05-26',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 33,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-23 20:01:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     112 => 
        //     array (
        //         'id_jadwal_harian' => 572,
        //         'tanggal_jadwal_harian' => '2023-05-26',
        //         'status' => 'diliburkan',
        //         'id_jadwal_umum' => 44,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-23 20:01:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     113 => 
        //     array (
        //         'id_jadwal_harian' => 573,
        //         'tanggal_jadwal_harian' => '2023-05-27',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 12,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-23 20:01:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     114 => 
        //     array (
        //         'id_jadwal_harian' => 574,
        //         'tanggal_jadwal_harian' => '2023-05-27',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 13,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-23 20:01:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     115 => 
        //     array (
        //         'id_jadwal_harian' => 575,
        //         'tanggal_jadwal_harian' => '2023-05-27',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 14,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-23 20:01:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     116 => 
        //     array (
        //         'id_jadwal_harian' => 576,
        //         'tanggal_jadwal_harian' => '2023-05-27',
        //         'status' => 'diliburkan',
        //         'id_jadwal_umum' => 28,
        //         'jam_mulai' => '14:31:16',
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-23 20:01:29',
        //         'updated_at' => '2023-05-27 14:31:16',
        //         'deleted_at' => NULL,
        //     ),
        //     117 => 
        //     array (
        //         'id_jadwal_harian' => 577,
        //         'tanggal_jadwal_harian' => '2023-05-27',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 29,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-23 20:01:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     118 => 
        //     array (
        //         'id_jadwal_harian' => 578,
        //         'tanggal_jadwal_harian' => '2023-05-27',
        //         'status' => 'diliburkan',
        //         'id_jadwal_umum' => 30,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-23 20:01:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     119 => 
        //     array (
        //         'id_jadwal_harian' => 579,
        //         'tanggal_jadwal_harian' => '2023-05-27',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 34,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-23 20:01:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     120 => 
        //     array (
        //         'id_jadwal_harian' => 580,
        //         'tanggal_jadwal_harian' => '2023-05-27',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 36,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-23 20:01:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     121 => 
        //     array (
        //         'id_jadwal_harian' => 581,
        //         'tanggal_jadwal_harian' => '2023-05-28',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 15,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-23 20:01:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     122 => 
        //     array (
        //         'id_jadwal_harian' => 582,
        //         'tanggal_jadwal_harian' => '2023-05-28',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 49,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-05-23 20:01:29',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     123 => 
        //     array (
        //         'id_jadwal_harian' => 583,
        //         'tanggal_jadwal_harian' => '2023-06-05',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 1,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-06-06 17:04:14',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     124 => 
        //     array (
        //         'id_jadwal_harian' => 584,
        //         'tanggal_jadwal_harian' => '2023-06-05',
        //         'status' => 'diliburkan',
        //         'id_jadwal_umum' => 2,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-06-06 17:04:14',
        //         'updated_at' => '2023-06-07 19:43:16',
        //         'deleted_at' => NULL,
        //     ),
        //     125 => 
        //     array (
        //         'id_jadwal_harian' => 585,
        //         'tanggal_jadwal_harian' => '2023-06-05',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 16,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-06-06 17:04:14',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     126 => 
        //     array (
        //         'id_jadwal_harian' => 586,
        //         'tanggal_jadwal_harian' => '2023-06-05',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 17,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-06-06 17:04:14',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     127 => 
        //     array (
        //         'id_jadwal_harian' => 587,
        //         'tanggal_jadwal_harian' => '2023-06-05',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 42,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-06-06 17:04:14',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     128 => 
        //     array (
        //         'id_jadwal_harian' => 588,
        //         'tanggal_jadwal_harian' => '2023-06-05',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 43,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-06-06 17:04:14',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     129 => 
        //     array (
        //         'id_jadwal_harian' => 590,
        //         'tanggal_jadwal_harian' => '2023-06-06',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 3,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-06-06 17:04:14',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     130 => 
        //     array (
        //         'id_jadwal_harian' => 591,
        //         'tanggal_jadwal_harian' => '2023-06-06',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 4,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-06-06 17:04:14',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     131 => 
        //     array (
        //         'id_jadwal_harian' => 592,
        //         'tanggal_jadwal_harian' => '2023-06-06',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 18,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-06-06 17:04:14',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     132 => 
        //     array (
        //         'id_jadwal_harian' => 593,
        //         'tanggal_jadwal_harian' => '2023-06-06',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 19,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-06-06 17:04:14',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     133 => 
        //     array (
        //         'id_jadwal_harian' => 594,
        //         'tanggal_jadwal_harian' => '2023-06-06',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 20,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-06-06 17:04:14',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     134 => 
        //     array (
        //         'id_jadwal_harian' => 595,
        //         'tanggal_jadwal_harian' => '2023-06-06',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 31,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-06-06 17:04:14',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     135 => 
        //     array (
        //         'id_jadwal_harian' => 596,
        //         'tanggal_jadwal_harian' => '2023-06-06',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 35,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-06-06 17:04:14',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     136 => 
        //     array (
        //         'id_jadwal_harian' => 597,
        //         'tanggal_jadwal_harian' => '2023-06-06',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 37,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-06-06 17:04:14',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     137 => 
        //     array (
        //         'id_jadwal_harian' => 598,
        //         'tanggal_jadwal_harian' => '2023-06-07',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 5,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-06-06 17:04:14',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     138 => 
        //     array (
        //         'id_jadwal_harian' => 599,
        //         'tanggal_jadwal_harian' => '2023-06-07',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 6,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-06-06 17:04:14',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     139 => 
        //     array (
        //         'id_jadwal_harian' => 600,
        //         'tanggal_jadwal_harian' => '2023-06-07',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 7,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-06-06 17:04:14',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     140 => 
        //     array (
        //         'id_jadwal_harian' => 601,
        //         'tanggal_jadwal_harian' => '2023-06-07',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 21,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-06-06 17:04:14',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     141 => 
        //     array (
        //         'id_jadwal_harian' => 602,
        //         'tanggal_jadwal_harian' => '2023-06-07',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 22,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-06-06 17:04:14',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     142 => 
        //     array (
        //         'id_jadwal_harian' => 604,
        //         'tanggal_jadwal_harian' => '2023-06-07',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 38,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-06-06 17:04:14',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     143 => 
        //     array (
        //         'id_jadwal_harian' => 605,
        //         'tanggal_jadwal_harian' => '2023-06-08',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 8,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-06-06 17:04:14',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     144 => 
        //     array (
        //         'id_jadwal_harian' => 606,
        //         'tanggal_jadwal_harian' => '2023-06-08',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 9,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-06-06 17:04:14',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     145 => 
        //     array (
        //         'id_jadwal_harian' => 607,
        //         'tanggal_jadwal_harian' => '2023-06-08',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 24,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-06-06 17:04:14',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     146 => 
        //     array (
        //         'id_jadwal_harian' => 608,
        //         'tanggal_jadwal_harian' => '2023-06-08',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 25,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-06-06 17:04:14',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     147 => 
        //     array (
        //         'id_jadwal_harian' => 609,
        //         'tanggal_jadwal_harian' => '2023-06-08',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 32,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-06-06 17:04:14',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     148 => 
        //     array (
        //         'id_jadwal_harian' => 610,
        //         'tanggal_jadwal_harian' => '2023-06-09',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 10,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-06-06 17:04:14',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     149 => 
        //     array (
        //         'id_jadwal_harian' => 611,
        //         'tanggal_jadwal_harian' => '2023-06-09',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 11,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-06-06 17:04:14',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     150 => 
        //     array (
        //         'id_jadwal_harian' => 612,
        //         'tanggal_jadwal_harian' => '2023-06-09',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 26,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-06-06 17:04:14',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     151 => 
        //     array (
        //         'id_jadwal_harian' => 613,
        //         'tanggal_jadwal_harian' => '2023-06-09',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 27,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-06-06 17:04:14',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     152 => 
        //     array (
        //         'id_jadwal_harian' => 614,
        //         'tanggal_jadwal_harian' => '2023-06-09',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 33,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-06-06 17:04:14',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     153 => 
        //     array (
        //         'id_jadwal_harian' => 615,
        //         'tanggal_jadwal_harian' => '2023-06-09',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 44,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-06-06 17:04:14',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     154 => 
        //     array (
        //         'id_jadwal_harian' => 616,
        //         'tanggal_jadwal_harian' => '2023-06-10',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 12,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-06-06 17:04:14',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     155 => 
        //     array (
        //         'id_jadwal_harian' => 617,
        //         'tanggal_jadwal_harian' => '2023-06-10',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 13,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-06-06 17:04:14',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     156 => 
        //     array (
        //         'id_jadwal_harian' => 618,
        //         'tanggal_jadwal_harian' => '2023-06-10',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 14,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-06-06 17:04:14',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     157 => 
        //     array (
        //         'id_jadwal_harian' => 619,
        //         'tanggal_jadwal_harian' => '2023-06-10',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 28,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-06-06 17:04:14',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     158 => 
        //     array (
        //         'id_jadwal_harian' => 620,
        //         'tanggal_jadwal_harian' => '2023-06-10',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 29,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-06-06 17:04:14',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     159 => 
        //     array (
        //         'id_jadwal_harian' => 621,
        //         'tanggal_jadwal_harian' => '2023-06-10',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 30,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-06-06 17:04:14',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     160 => 
        //     array (
        //         'id_jadwal_harian' => 622,
        //         'tanggal_jadwal_harian' => '2023-06-10',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 34,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-06-06 17:04:14',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     161 => 
        //     array (
        //         'id_jadwal_harian' => 623,
        //         'tanggal_jadwal_harian' => '2023-06-10',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 36,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-06-06 17:04:14',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     162 => 
        //     array (
        //         'id_jadwal_harian' => 624,
        //         'tanggal_jadwal_harian' => '2023-06-11',
        //         'status' => 'berjalan',
        //         'id_jadwal_umum' => 15,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-06-06 17:04:14',
        //         'updated_at' => NULL,
        //         'deleted_at' => NULL,
        //     ),
        //     163 => 
        //     array (
        //         'id_jadwal_harian' => 625,
        //         'tanggal_jadwal_harian' => '2023-06-11',
        //         'status' => 'diliburkan',
        //         'id_jadwal_umum' => 49,
        //         'jam_mulai' => NULL,
        //         'jam_selesai' => NULL,
        //         'created_at' => '2023-06-06 17:04:14',
        //         'updated_at' => '2023-06-07 19:43:35',
        //         'deleted_at' => NULL,
        //     ),
        // ));
        
        
    }
}