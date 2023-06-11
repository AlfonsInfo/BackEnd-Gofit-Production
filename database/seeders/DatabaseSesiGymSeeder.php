<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSesiGymSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sesi_gym')->delete();
        
        \DB::table('sesi_gym')->insert(array (
            0 => 
            array (
                'id_sesi' => 1,
                'waktu_mulai' => '07:00:00',
                'waktu_selesai' => '09:00:00',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id_sesi' => 2,
                'waktu_mulai' => '09:00:00',
                'waktu_selesai' => '11:00:00',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id_sesi' => 3,
                'waktu_mulai' => '11:00:00',
                'waktu_selesai' => '13:00:00',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id_sesi' => 4,
                'waktu_mulai' => '13:00:00',
                'waktu_selesai' => '15:00:00',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id_sesi' => 5,
                'waktu_mulai' => '15:00:00',
                'waktu_selesai' => '17:00:00',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id_sesi' => 6,
                'waktu_mulai' => '17:00:00',
                'waktu_selesai' => '19:00:00',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id_sesi' => 7,
                'waktu_mulai' => '19:00:00',
                'waktu_selesai' => '21:00:00',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}