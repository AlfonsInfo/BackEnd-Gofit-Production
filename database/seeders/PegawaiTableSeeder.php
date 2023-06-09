<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PegawaiTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pegawai')->delete();
        
        \DB::table('pegawai')->insert(array (
            0 => 
            array (
                'id_pegawai' => 'P01',
                'id_pengguna' => 19,
                'nama_pegawai' => 'Alfonsus Setiawan J - Pegawai',
                'jabatan_pegawai' => 'Admin',
                'tgl_lahir_pegawai' => '1995-03-21 00:00:00',
                'no_telp_pegawai' => '08123456789',
                'alamat_pegawai' => 'Tambak Bayan no 41 Yogya',
                'created_at' => '2023-04-02 00:54:34',
                'updated_at' => '2023-04-02 00:54:34',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id_pegawai' => 'P02',
                'id_pengguna' => 20,
                'nama_pegawai' => 'Mamang',
                'jabatan_pegawai' => 'Admin',
                'tgl_lahir_pegawai' => '1996-01-22 00:00:00',
                'no_telp_pegawai' => '08213232321',
                'alamat_pegawai' => 'Tambak Bayan no 42 Yogya',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id_pegawai' => 'P03',
                'id_pengguna' => 21,
                'nama_pegawai' => 'Adee',
                'jabatan_pegawai' => 'MO',
                'tgl_lahir_pegawai' => '1998-01-22 00:00:00',
                'no_telp_pegawai' => '20',
                'alamat_pegawai' => '0811123232321',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id_pegawai' => 'P04',
                'id_pengguna' => 22,
                'nama_pegawai' => 'Yunita',
                'jabatan_pegawai' => 'kasir',
                'tgl_lahir_pegawai' => '2000-01-21 00:00:00',
                'no_telp_pegawai' => '082132133213',
                'alamat_pegawai' => 'Seturan no 42 Yogya',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id_pegawai' => 'P05',
                'id_pengguna' => 23,
                'nama_pegawai' => 'Putri',
                'jabatan_pegawai' => 'kasir',
                'tgl_lahir_pegawai' => '2003-05-23 00:00:00',
                'no_telp_pegawai' => '08212121312',
                'alamat_pegawai' => 'Tambak Boyo no 42 Yogya',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id_pegawai' => 'P06',
                'id_pengguna' => 24,
                'nama_pegawai' => 'Yuna',
                'jabatan_pegawai' => 'kasir',
                'tgl_lahir_pegawai' => '2001-03-24 00:00:00',
                'no_telp_pegawai' => '085398244443',
                'alamat_pegawai' => 'Sergodadi no 42 Yogya',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}