<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InstrukturTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('instruktur')->delete();
        
        \DB::table('instruktur')->insert(array (
            0 => 
            array (
                'id_instruktur' => 'ins-1',
                'id_pengguna' => 7,
                'nama_instruktur' => 'Alfonsus Setiawan J - Instruktur',
                'tanggal_lahir_instruktur' => '2023-04-02 00:54:34',
                'alamat_instruktur' => 'Yadara Blok 27 Yogya',
                'no_telp_instruktur' => '0828332813213',
                'akumulasi_terlambat' => 0,
                'created_at' => '2023-04-02 00:54:34',
                'updated_at' => '2023-04-02 00:54:34',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id_instruktur' => 'ins-10',
                'id_pengguna' => 16,
                'nama_instruktur' => 'Park Jiminnn',
                'tanggal_lahir_instruktur' => '2023-05-12 15:04:16',
                'alamat_instruktur' => 'Amarta no 14Y,Condong Catur, Jogja',
                'no_telp_instruktur' => '+62 880-0828-3863',
                'akumulasi_terlambat' => 0,
                'created_at' => '2023-04-02 00:54:34',
                'updated_at' => '2023-05-12 15:04:16',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id_instruktur' => 'ins-11',
                'id_pengguna' => 17,
                'nama_instruktur' => 'Rosieee Rose',
                'tanggal_lahir_instruktur' => '2023-04-02 00:54:34',
                'alamat_instruktur' => 'Amarta no 21Y,Condong Catur, Jogja',
                'no_telp_instruktur' => '+62 880-021-0002',
                'akumulasi_terlambat' => 0,
                'created_at' => '2023-04-02 00:54:34',
                'updated_at' => '2023-04-02 00:54:34',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id_instruktur' => 'ins-12',
                'id_pengguna' => 18,
                'nama_instruktur' => 'Jessii',
                'tanggal_lahir_instruktur' => '2023-05-12 15:04:16',
                'alamat_instruktur' => 'Amarta no 21Y,Condong Catur, Jogja',
                'no_telp_instruktur' => '+62 880-021-0002',
                'akumulasi_terlambat' => 0,
                'created_at' => '2023-04-02 00:54:34',
                'updated_at' => '2023-05-12 15:04:16',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id_instruktur' => 'ins-14',
                'id_pengguna' => 138,
                'nama_instruktur' => 'Lisa Blackpink',
                'tanggal_lahir_instruktur' => '2002-02-02 00:00:00',
                'alamat_instruktur' => 'padang',
                'no_telp_instruktur' => '072372',
                'akumulasi_terlambat' => 0,
                'created_at' => '2023-04-28 13:46:06',
                'updated_at' => '2023-04-28 13:47:53',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id_instruktur' => 'ins-15',
                'id_pengguna' => 140,
                'nama_instruktur' => 'Jametbanget23',
                'tanggal_lahir_instruktur' => '2002-09-29 00:00:00',
                'alamat_instruktur' => 'Padang',
                'no_telp_instruktur' => '082172804015',
                'akumulasi_terlambat' => 0,
                'created_at' => '2023-04-29 21:36:56',
                'updated_at' => '2023-05-27 21:16:07',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id_instruktur' => 'ins-16',
                'id_pengguna' => 171,
                'nama_instruktur' => 'Alfonsus Setiawan Jacub',
                'tanggal_lahir_instruktur' => '2002-05-21 00:00:00',
                'alamat_instruktur' => 'Padang',
                'no_telp_instruktur' => '082172804015',
                'akumulasi_terlambat' => NULL,
                'created_at' => '2023-06-02 13:56:09',
                'updated_at' => '2023-06-02 13:56:09',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id_instruktur' => 'ins-2',
                'id_pengguna' => 8,
                'nama_instruktur' => 'JK Bagaskara',
                'tanggal_lahir_instruktur' => '2023-04-02 00:00:00',
                'alamat_instruktur' => 'Bekasi',
                'no_telp_instruktur' => '+62 894-2212-919',
                'akumulasi_terlambat' => 0,
                'created_at' => '2023-04-02 00:54:34',
                'updated_at' => '2023-05-27 18:46:37',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id_instruktur' => 'ins-3',
                'id_pengguna' => 9,
                'nama_instruktur' => 'Lisa Blackpink',
                'tanggal_lahir_instruktur' => '2023-04-02 00:54:34',
                'alamat_instruktur' => 'Amarta no 4Y,Condong Catur, Jogja',
                'no_telp_instruktur' => '+62 874-3379-57385',
                'akumulasi_terlambat' => 0,
                'created_at' => '2023-04-02 00:54:34',
                'updated_at' => '2023-04-02 00:54:34',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id_instruktur' => 'ins-4',
                'id_pengguna' => 10,
                'nama_instruktur' => 'Hobby Sanjaya',
                'tanggal_lahir_instruktur' => '2023-04-02 00:54:34',
                'alamat_instruktur' => 'Amarta no 6Y,Condong Catur, Jogja',
                'no_telp_instruktur' => '+62 815-2075-864',
                'akumulasi_terlambat' => 0,
                'created_at' => '2023-04-02 00:54:34',
                'updated_at' => '2023-04-02 00:54:34',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id_instruktur' => 'ins-5',
                'id_pengguna' => 11,
                'nama_instruktur' => 'Veeee Putra',
                'tanggal_lahir_instruktur' => '2023-04-02 00:54:34',
                'alamat_instruktur' => 'Amarta no 7Y,Condong Catur, Jogja',
                'no_telp_instruktur' => '+62 853-8762-203',
                'akumulasi_terlambat' => 0,
                'created_at' => '2023-04-02 00:54:34',
                'updated_at' => '2023-04-02 00:54:34',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id_instruktur' => 'ins-6',
                'id_pengguna' => 12,
                'nama_instruktur' => 'Jenny Mullen',
                'tanggal_lahir_instruktur' => '2023-04-02 00:54:34',
                'alamat_instruktur' => 'Amarta no 3Y,Condong Catur, Jogja',
                'no_telp_instruktur' => '+62 856-6734-887',
                'akumulasi_terlambat' => 0,
                'created_at' => '2023-04-02 00:54:34',
                'updated_at' => '2023-04-02 00:54:34',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id_instruktur' => 'ins-7',
                'id_pengguna' => 13,
                'nama_instruktur' => 'Suga Yudhistira',
                'tanggal_lahir_instruktur' => '2023-05-26 13:48:55',
                'alamat_instruktur' => 'Amarta no 1Y,Condong Catur, Jogja',
                'no_telp_instruktur' => '+62 825-8689-211',
                'akumulasi_terlambat' => 1299,
                'created_at' => '2023-04-02 00:54:34',
                'updated_at' => '2023-05-03 16:01:00',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id_instruktur' => 'ins-8',
                'id_pengguna' => 14,
                'nama_instruktur' => 'Jin Winoto',
                'tanggal_lahir_instruktur' => '2023-05-26 13:48:50',
                'alamat_instruktur' => 'Amarta no 42Y,Condong Catur, Jogja',
                'no_telp_instruktur' => '+62 821-7559-145',
                'akumulasi_terlambat' => 188,
                'created_at' => '2023-04-02 00:54:34',
                'updated_at' => '2023-04-02 00:54:34',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id_instruktur' => 'ins-9',
                'id_pengguna' => 15,
                'nama_instruktur' => 'Kim Ji Soo',
                'tanggal_lahir_instruktur' => '2023-05-26 13:48:46',
                'alamat_instruktur' => 'Amarta no 41Y,Condong Catur, Jogja',
                'no_telp_instruktur' => '+62 858-436-596',
                'akumulasi_terlambat' => 300,
                'created_at' => '2023-04-02 00:54:34',
                'updated_at' => '2023-04-02 00:54:34',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}