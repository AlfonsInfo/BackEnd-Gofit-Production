<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Database\Seeders\DatabaseSesiGymSeeder;
use App\Models\ijin_instruktur;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

// import jadwal;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            
            DatabasePromoSeeder::class,
            DatabaseSesiGymSeeder::class,
            DatabaseKelasSeeder::class,
            DatabasePenggunaSeeder::class,
            DatabasePegawaiSeeder::class,
            DatabaseMemberSeeder::class,
            DatabaseInstrukturSeeder::class,
            JadwalUmumTableSeeder::class,
            JadwalHarianTableSeeder::class,
            DatabaseBookingKelasSeeder::class,
            // SesiGymTableSeeder::class,

            // PenggunaTableSeeder::class,
            // KelasTableSeeder::class,
            // MemberTableSeeder::class,
            // InstrukturTableSeeder::class,
            // PegawaiTableSeeder::class,
            // PromoTableSeeder::class,
            // JadwalUmumTableSeeder::class,
            // JadwalHarianTableSeeder::class,
            // IjinInstrukturTableSeeder::class,
            // TransaksiMemberTableSeeder::class,
            // // BookingGymTableSeeder::class,
            // BookingKelasTableSeeder::class,
            // PresensiInstrukturTableSeeder::class,
            // TransaksiAktivasiTableSeeder::class,
            // TransaksiDepositRegulerTableSeeder::class,
            // TransaksiDepositPaketTableSeeder::class,
        ]);

    


    }

}

