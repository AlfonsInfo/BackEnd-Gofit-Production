<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KelasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('kelas')->delete();
        
        \DB::table('kelas')->insert(array (
            0 => 
            array (
                'id_kelas' => 1,
                'jenis_kelas' => 'SPINE Corrector',
                'harga_kelas' => 150000.0,
                'deskripsi_kelas' => '-',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id_kelas' => 2,
                'jenis_kelas' => 'MUAYTHAI',
                'harga_kelas' => 150000.0,
                'deskripsi_kelas' => '-',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id_kelas' => 3,
                'jenis_kelas' => 'PILATES',
                'harga_kelas' => 150000.0,
                'deskripsi_kelas' => '-',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id_kelas' => 4,
                'jenis_kelas' => 'ASTHANGA',
                'harga_kelas' => 150000.0,
                'deskripsi_kelas' => '-',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id_kelas' => 5,
                'jenis_kelas' => 'Body Combat',
                'harga_kelas' => 150000.0,
                'deskripsi_kelas' => '-',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id_kelas' => 6,
                'jenis_kelas' => 'Zumba',
                'harga_kelas' => 150000.0,
                'deskripsi_kelas' => '-',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id_kelas' => 7,
                'jenis_kelas' => 'Suga',
                'harga_kelas' => 150000.0,
                'deskripsi_kelas' => '-',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id_kelas' => 8,
                'jenis_kelas' => 'Wall Swing',
                'harga_kelas' => 150000.0,
                'deskripsi_kelas' => '-',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id_kelas' => 9,
                'jenis_kelas' => 'Basic Swing',
                'harga_kelas' => 150000.0,
                'deskripsi_kelas' => '-',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id_kelas' => 10,
                'jenis_kelas' => 'HATHA',
                'harga_kelas' => 150000.0,
                'deskripsi_kelas' => '-',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id_kelas' => 11,
                'jenis_kelas' => 'Bellydance',
                'harga_kelas' => 150000.0,
                'deskripsi_kelas' => '-',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id_kelas' => 12,
                'jenis_kelas' => 'BUNGEE',
                'harga_kelas' => 200000.0,
                'deskripsi_kelas' => '-',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id_kelas' => 13,
                'jenis_kelas' => 'Yogalates',
                'harga_kelas' => 150000.0,
                'deskripsi_kelas' => '-',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id_kelas' => 14,
                'jenis_kelas' => 'BOXING',
                'harga_kelas' => 150000.0,
                'deskripsi_kelas' => '-',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id_kelas' => 15,
                'jenis_kelas' => 'Calistenic',
                'harga_kelas' => 150000.0,
                'deskripsi_kelas' => '-',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id_kelas' => 16,
                'jenis_kelas' => 'Pound Fit',
                'harga_kelas' => 150000.0,
                'deskripsi_kelas' => '-',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id_kelas' => 17,
                'jenis_kelas' => 'Trampoline Workout',
                'harga_kelas' => 200000.0,
                'deskripsi_kelas' => '-',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id_kelas' => 18,
                'jenis_kelas' => 'Yoga For Kids',
                'harga_kelas' => 150000.0,
                'deskripsi_kelas' => '-',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id_kelas' => 19,
                'jenis_kelas' => 'ABS Pilates',
                'harga_kelas' => 150000.0,
                'deskripsi_kelas' => '-',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id_kelas' => 20,
                'jenis_kelas' => 'Swing For Kids',
                'harga_kelas' => 150000.0,
                'deskripsi_kelas' => '-',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}