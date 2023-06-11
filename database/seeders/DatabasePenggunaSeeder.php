<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabasePenggunaSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pengguna')->delete();
        
        \DB::table('pengguna')->insert(array (
            0 => 
            array (
                'username' => '23.03.001',
                'password' => bcrypt('0541'),
                'role' => 'member',
                'remember_token' => NULL,
                'created_at' => '2023-06-02 13:56:09',
                'updated_at' => '2023-06-02 13:56:09',
                'deleted_at' => NULL,
            ),
            array (
                'username' => '23.03.002',
                'password' => bcrypt('0541'),
                'role' => 'member',
                'remember_token' => NULL,
                'created_at' => '2023-06-02 13:56:09',
                'updated_at' => '2023-06-02 13:56:09',
                'deleted_at' => NULL,
            ),
            array (
                'username' => '23.03.003',
                'password' => bcrypt('0541'),
                'role' => 'member',
                'remember_token' => NULL,
                'created_at' => '2023-06-02 13:56:09',
                'updated_at' => '2023-06-02 13:56:09',
                'deleted_at' => NULL,
            ),
            array (
                'username' => '23.03.004',
                'password' => bcrypt('0541'),
                'role' => 'member',
                'remember_token' => NULL,
                'created_at' => '2023-06-02 13:56:09',
                'updated_at' => '2023-06-02 13:56:09',
                'deleted_at' => NULL,
            ),
            array (
                'username' => '23.03.005',
                'password' => bcrypt('0541'),
                'role' => 'member',
                'remember_token' => NULL,
                'created_at' => '2023-06-02 13:56:09',
                'updated_at' => '2023-06-02 13:56:09',
                'deleted_at' => NULL,
            ),
            array (
                'username' => '23.04.006',
                'password' => bcrypt('0541'),
                'role' => 'member',
                'remember_token' => NULL,
                'created_at' => '2023-06-02 13:56:09',
                'updated_at' => '2023-06-02 13:56:09',
                'deleted_at' => NULL,
            ),
            array (
                'username' => '23.04.007',
                'password' => bcrypt('0541'),
                'role' => 'member',
                'remember_token' => NULL,
                'created_at' => '2023-06-02 13:56:09',
                'updated_at' => '2023-06-02 13:56:09',
                'deleted_at' => NULL,
            ),
            array (
                'username' => '23.04.008',
                'password' => bcrypt('0541'),
                'role' => 'member',
                'remember_token' => NULL,
                'created_at' => '2023-06-02 13:56:09',
                'updated_at' => '2023-06-02 13:56:09',
                'deleted_at' => NULL,
            ),
            array (
                'username' => '23.05.009',
                'password' => bcrypt('0541'),
                'role' => 'member',
                'remember_token' => NULL,
                'created_at' => '2023-06-02 13:56:09',
                'updated_at' => '2023-06-02 13:56:09',
                'deleted_at' => NULL,
            ),
            array (
                'username' => '23.05.010',
                'password' => bcrypt('0541'),
                'role' => 'member',
                'remember_token' => NULL,
                'created_at' => '2023-06-02 13:56:09',
                'updated_at' => '2023-06-02 13:56:09',
                'deleted_at' => NULL,
            ),
            array (
                'username' => '23.05.011',
                'password' => bcrypt('0541'),
                'role' => 'member',
                'remember_token' => NULL,
                'created_at' => '2023-06-02 13:56:09',
                'updated_at' => '2023-06-02 13:56:09',
                'deleted_at' => NULL,
            ),
            array (
                'username' => 'Admin_Ganteng',
                'password' => bcrypt('admin0541'),
                'role' => 'pegawai',
                'remember_token' => NULL,
                'created_at' => '2023-06-02 13:56:09',
                'updated_at' => '2023-06-02 13:56:09',
                'deleted_at' => NULL,
            ),
            array (
                'username' => 'mo_Ganteng',
                'password' => bcrypt('mo0541'),
                'role' => 'pegawai',
                'remember_token' => NULL,
                'created_at' => '2023-06-02 13:56:09',
                'updated_at' => '2023-06-02 13:56:09',
                'deleted_at' => NULL,
            ),
            array (
                'username' => 'kasir_Ganteng',
                'password' => bcrypt('kasir0541'),
                'role' => 'pegawai',
                'remember_token' => NULL,
                'created_at' => '2023-06-02 13:56:09',
                'updated_at' => '2023-06-02 13:56:09',
                'deleted_at' => NULL,
            ),
            array (
                'username' => 'yuna',
                'password' => bcrypt('kasir0541'),
                'role' => 'pegawai',
                'remember_token' => NULL,
                'created_at' => '2023-06-02 13:56:09',
                'updated_at' => '2023-06-02 13:56:09',
                'deleted_at' => NULL,
            ),
            array (
                'username' => 'Alfonsus',
                'password' => bcrypt('0541'),
                'role' => 'instruktur',
                'remember_token' => NULL,
                'created_at' => '2023-04-02 00:54:34',
                'updated_at' => '2023-04-02 00:54:34',
                'deleted_at' => NULL,
            ),
            array (
                'username' => 'JK',
                'password' => bcrypt('0541'),
                'role' => 'instruktur',
                'remember_token' => NULL,
                'created_at' => '2023-04-02 00:54:34',
                'updated_at' => '2023-04-02 00:54:34',
                'deleted_at' => NULL,
            ),
            array (
                'username' => 'Lisa',
                'password' => bcrypt('0541'),
                'role' => 'instruktur',
                'remember_token' => NULL,
                'created_at' => '2023-04-02 00:54:34',
                'updated_at' => '2023-04-02 00:54:34',
                'deleted_at' => NULL,
            ),
            array (
                'username' => 'Hobby',
                'password' => bcrypt('0541'),
                'role' => 'instruktur',
                'remember_token' => NULL,
                'created_at' => '2023-04-02 00:54:34',
                'updated_at' => '2023-04-02 00:54:34',
                'deleted_at' => NULL,
            ),
            array (
                'username' => 'V',
                'password' => bcrypt('0541'),
                'role' => 'instruktur',
                'remember_token' => NULL,
                'created_at' => '2023-04-02 00:54:34',
                'updated_at' => '2023-04-02 00:54:34',
                'deleted_at' => NULL,
            ),
            array (
                'username' => 'Jenny',
                'password' => bcrypt('0541'),
                'role' => 'instruktur',
                'remember_token' => NULL,
                'created_at' => '2023-04-02 00:54:34',
                'updated_at' => '2023-04-02 00:54:34',
                'deleted_at' => NULL,
            ),
            array (
                'username' => 'Suga',
                'password' => bcrypt('0541'),
                'role' => 'instruktur',
                'remember_token' => NULL,
                'created_at' => '2023-04-02 00:54:34',
                'updated_at' => '2023-04-02 00:54:34',
                'deleted_at' => NULL,
            ),
            array (
                'username' => 'Jin',
                'password' => bcrypt('0541'),
                'role' => 'instruktur',
                'remember_token' => NULL,
                'created_at' => '2023-04-02 00:54:34',
                'updated_at' => '2023-04-02 00:54:34',
                'deleted_at' => NULL,
            ),
            array (
                'username' => 'Jiso',
                'password' => bcrypt('0541'),
                'role' => 'instruktur',
                'remember_token' => NULL,
                'created_at' => '2023-04-02 00:54:34',
                'updated_at' => '2023-05-16 01:18:00',
                'deleted_at' => NULL,
            ),
            array (
                'username' => 'Jimin',
                'password' => bcrypt('0541'),
                'role' => 'instruktur',
                'remember_token' => NULL,
                'created_at' => '2023-04-02 00:54:34',
                'updated_at' => '2023-04-02 00:54:34',
                'deleted_at' => NULL,
            ),
            array (
                'username' => 'Rose',
                'password' => bcrypt('0541'),
                'role' => 'instruktur',
                'remember_token' => NULL,
                'created_at' => '2023-04-02 00:54:34',
                'updated_at' => '2023-04-02 00:54:34',
                'deleted_at' => NULL,
            ),
            array (
                'username' => 'Jessi',
                'password' => bcrypt('0541'),
                'role' => 'instruktur',
                'remember_token' => NULL,
                'created_at' => '2023-04-02 00:54:34',
                'updated_at' => '2023-04-02 00:54:34',
                'deleted_at' => NULL,
            ),
        
        ));
        
        
    }
}