<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IjinInstrukturTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ijin_instruktur')->delete();
        
        \DB::table('ijin_instruktur')->insert(array (
            0 => 
            array (
                'id_ijin' => 12,
                'id_jadwal_harian' => 583,
                'status_ijin' => 'Perijinan dikonfirmasi',
                'tanggal_pengajuan' => '2023-05-12',
                'id_instruktur' => 'ins-3',
                'id_instruktur_pengganti' => 'ins-9',
                'created_at' => '2023-05-12 11:18:33',
                'updated_at' => '2023-06-06 22:03:34',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id_ijin' => 13,
                'id_jadwal_harian' => 482,
                'status_ijin' => 'Perijinan ditolak',
                'tanggal_pengajuan' => '2023-05-12',
                'id_instruktur' => 'ins-4',
                'id_instruktur_pengganti' => 'ins-9',
                'created_at' => '2023-05-12 11:20:08',
                'updated_at' => '2023-06-06 22:03:41',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id_ijin' => 14,
                'id_jadwal_harian' => 456,
                'status_ijin' => 'Belum dikonfirmasi',
                'tanggal_pengajuan' => '2023-05-12',
                'id_instruktur' => 'ins-6',
                'id_instruktur_pengganti' => 'ins-9',
                'created_at' => '2023-05-12 14:52:38',
                'updated_at' => '2023-06-06 21:57:32',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id_ijin' => 15,
                'id_jadwal_harian' => 481,
                'status_ijin' => 'belum-dikonfirmasi',
                'tanggal_pengajuan' => '2023-05-12',
                'id_instruktur' => 'ins-7',
                'id_instruktur_pengganti' => 'ins-3',
                'created_at' => '2023-05-12 14:53:39',
                'updated_at' => '2023-05-12 14:53:39',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id_ijin' => 17,
                'id_jadwal_harian' => 482,
                'status_ijin' => 'belum-dikonfirmasi',
                'tanggal_pengajuan' => '2023-05-16',
                'id_instruktur' => 'ins-9',
                'id_instruktur_pengganti' => 'ins-6',
                'created_at' => '2023-05-16 07:29:19',
                'updated_at' => '2023-05-16 07:29:19',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id_ijin' => 18,
                'id_jadwal_harian' => 482,
                'status_ijin' => 'belum-dikonfirmasi',
                'tanggal_pengajuan' => '2023-05-17',
                'id_instruktur' => 'ins-9',
                'id_instruktur_pengganti' => 'ins-1',
                'created_at' => '2023-05-17 21:01:10',
                'updated_at' => '2023-05-17 21:01:10',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id_ijin' => 19,
                'id_jadwal_harian' => 523,
                'status_ijin' => 'dikonfirmasi',
                'tanggal_pengajuan' => '2023-05-11',
                'id_instruktur' => 'ins-5',
                'id_instruktur_pengganti' => 'ins-9',
                'created_at' => '2023-05-18 20:13:50',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id_ijin' => 20,
                'id_jadwal_harian' => 618,
                'status_ijin' => 'Belum dikonfirmasi',
                'tanggal_pengajuan' => '2023-06-09',
                'id_instruktur' => 'ins-9',
                'id_instruktur_pengganti' => 'ins-4',
                'created_at' => '2023-06-09 07:46:07',
                'updated_at' => '2023-06-09 07:46:07',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}