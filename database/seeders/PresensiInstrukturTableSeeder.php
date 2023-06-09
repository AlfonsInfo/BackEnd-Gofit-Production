<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PresensiInstrukturTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('presensi_instruktur')->delete();
        
        \DB::table('presensi_instruktur')->insert(array (
            0 => 
            array (
                'id_presensi' => 148,
                'waktu_presensi' => '2023-05-24 12:04:45',
                'waktu_selesai' => NULL,
                'status_presensi' => 'hadir',
                'id_instruktur' => 'ins-5',
                'id_jadwal_harian' => 555,
                'created_at' => '2023-05-24 12:04:45',
                'updated_at' => '2023-05-24 12:04:45',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id_presensi' => 151,
                'waktu_presensi' => '2023-05-24 12:45:20',
                'waktu_selesai' => NULL,
                'status_presensi' => 'hadir',
                'id_instruktur' => 'ins-5',
                'id_jadwal_harian' => 555,
                'created_at' => '2023-05-24 12:45:20',
                'updated_at' => '2023-05-24 12:45:20',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id_presensi' => 152,
                'waktu_presensi' => '2023-05-24 12:46:23',
                'waktu_selesai' => NULL,
                'status_presensi' => 'hadir',
                'id_instruktur' => 'ins-6',
                'id_jadwal_harian' => 556,
                'created_at' => '2023-05-24 12:46:23',
                'updated_at' => '2023-05-24 12:46:23',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id_presensi' => 153,
                'waktu_presensi' => '2023-05-24 12:48:40',
                'waktu_selesai' => NULL,
                'status_presensi' => 'hadir',
                'id_instruktur' => 'ins-7',
                'id_jadwal_harian' => 557,
                'created_at' => '2023-05-24 12:48:40',
                'updated_at' => '2023-05-24 12:48:40',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id_presensi' => 154,
                'waktu_presensi' => '2023-05-27 14:31:16',
                'waktu_selesai' => NULL,
                'status_presensi' => 'hadir',
                'id_instruktur' => 'ins-12',
                'id_jadwal_harian' => 576,
                'created_at' => '2023-05-27 14:31:16',
                'updated_at' => '2023-05-27 14:31:16',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}