<?php

namespace Database\Seeders;

use App\Models\booking_kelas;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;


class DatabaseBookingKelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $dataMember = DB::table('member')->get()->toArray();
        $dataJadwalHarian = DB::table('jadwal_harian')->get();
        $randomJumlahPeserta = rand(5, 10);

        foreach ($dataJadwalHarian as $kelas) {
            $tanggalBooking = Carbon::parse($kelas->tanggal_jadwal_harian)->subDays(rand(1, 7));
            $rand_is_canceled = 0;
            if (rand(1, 10) == 1) {
                $rand_is_canceled = 1;
            }

            $rand_status_kehadiran = 1;
            if (rand(1, 10) == 1) {
                $rand_status_kehadiran = 0;
            }
            $deposit = rand(0, 1) ? "Deposit Reguler" : "Deposit Paket";

            $members = collect($dataMember)->random($randomJumlahPeserta);

            foreach ($members as $member) {
                DB::table('booking_kelas')->insert([
                    'tanggal_booking' => $tanggalBooking,
                    'is_canceled' => $rand_is_canceled,
                    'status_kehadiran' => $rand_status_kehadiran,
                    'metode_pembayaran' => $deposit,
                    'no_struk' => null,
                    'id_jadwal_harian' => $kelas->id_jadwal_harian,
                    'id_member' => $member->id_member,
                ]);
            
                DB::table('transaksi_member')->insert([
                    'jenis_transaksi' => 'transaksi-booking-kelas',
                    'id_pegawai' => 'P04',
                    'id_member' => $member->id_member,
                ]);
                            
                $dataTerakhirTransaksi = DB::table('transaksi_member')
                    ->latest('created_at')
                    ->first();
            
                $dataTerakhirBooking = booking_kelas::latest('created_at')->first();
                $dataTerakhirBooking->no_struk = $dataTerakhirTransaksi->no_struk_transaksi;
                $dataTerakhirBooking->save();
            }
            
        }


    }
}
