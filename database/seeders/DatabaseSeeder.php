<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User\pengguna;
use App\Models\User\instruktur;
use App\Models\User\pegawai;
use App\Models\User\member;
use App\Models\promo;
use App\Models\sesi_gym;
use App\Models\kelas;
use App\Models\transaksi_member;
use App\Models\transaksi_aktivasi;
use App\Models\transaksi_deposit_reguler;
use App\Models\transaksi_deposit_paket;
use App\Models\jadwal_harian;
use App\Models\presensi_instruktur;
use App\Models\booking_gym;
use App\Models\booking_kelas;
use App\Models\ijin_instruktur;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

// import jadwal;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            PenggunaTableSeeder::class,
            KelasTableSeeder::class,
            SesiGymTableSeeder::class,
            MemberTableSeeder::class,
            InstrukturTableSeeder::class,
            PegawaiTableSeeder::class,
            PromoTableSeeder::class,
            JadwalUmumTableSeeder::class,
            JadwalHarianTableSeeder::class,
            IjinInstrukturTableSeeder::class,
            TransaksiMemberTableSeeder::class,
            BookingGymTableSeeder::class,
            // BookingKelasTableSeeder::class,
            PresensiInstrukturTableSeeder::class,
            // TransaksiAktivasiTableSeeder::class,
            // TransaksiDepositRegulerTableSeeder::class,
            // TransaksiDepositPaketTableSeeder::class,
        ]);

    


    }

}

