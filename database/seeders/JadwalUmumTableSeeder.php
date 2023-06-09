<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JadwalUmumTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('jadwal_umum')->delete();
        
        \DB::table('jadwal_umum')->insert(array (
            0 => 
            array (
                'id_jadwal_umum' => 1,
                'hari' => 'Senin',
                'id_instruktur' => 'ins-1',
                'id_kelas' => 1,
                'jam_mulai' => '08:00:00',
                'jam_selesai' => '09:29:00',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-23 20:22:18',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id_jadwal_umum' => 2,
                'hari' => 'Senin',
                'id_instruktur' => 'ins-2',
                'id_kelas' => 2,
                'jam_mulai' => '09:30:00',
                'jam_selesai' => '09:30:00',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id_jadwal_umum' => 3,
                'hari' => 'Selasa',
                'id_instruktur' => 'ins-3',
                'id_kelas' => 3,
                'jam_mulai' => '08:00:00',
                'jam_selesai' => '09:00:00',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id_jadwal_umum' => 4,
                'hari' => 'Selasa',
                'id_instruktur' => 'ins-4',
                'id_kelas' => 4,
                'jam_mulai' => '09:30:00',
                'jam_selesai' => '10:30:00',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id_jadwal_umum' => 5,
                'hari' => 'Rabu',
                'id_instruktur' => 'ins-5',
                'id_kelas' => 5,
                'jam_mulai' => '08:00:00',
                'jam_selesai' => '09:00:00',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id_jadwal_umum' => 6,
                'hari' => 'Rabu',
                'id_instruktur' => 'ins-6',
                'id_kelas' => 6,
                'jam_mulai' => '08:00:00',
                'jam_selesai' => '08:00:00',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id_jadwal_umum' => 7,
                'hari' => 'Rabu',
                'id_instruktur' => 'ins-7',
                'id_kelas' => 10,
                'jam_mulai' => '09:30:00',
                'jam_selesai' => '09:30:00',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id_jadwal_umum' => 8,
                'hari' => 'Kamis',
                'id_instruktur' => 'ins-11',
                'id_kelas' => 8,
                'jam_mulai' => '08:00:00',
                'jam_selesai' => '08:00:00',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id_jadwal_umum' => 9,
                'hari' => 'Kamis',
                'id_instruktur' => 'ins-8',
                'id_kelas' => 9,
                'jam_mulai' => '09:30:00',
                'jam_selesai' => '09:30:00',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id_jadwal_umum' => 10,
                'hari' => 'Jumat',
                'id_instruktur' => 'ins-9',
                'id_kelas' => 10,
                'jam_mulai' => '08:00:00',
                'jam_selesai' => '09:00:00',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id_jadwal_umum' => 11,
                'hari' => 'Jumat',
                'id_instruktur' => 'ins-9',
                'id_kelas' => 11,
                'jam_mulai' => '09:30:00',
                'jam_selesai' => '10:30:00',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id_jadwal_umum' => 12,
                'hari' => 'Sabtu',
                'id_instruktur' => 'ins-10',
                'id_kelas' => 12,
                'jam_mulai' => '08:00:00',
                'jam_selesai' => '10:00:00',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id_jadwal_umum' => 13,
                'hari' => 'Sabtu',
                'id_instruktur' => 'ins-3',
                'id_kelas' => 13,
                'jam_mulai' => '09:30:00',
                'jam_selesai' => '09:30:00',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id_jadwal_umum' => 14,
                'hari' => 'Sabtu',
                'id_instruktur' => 'ins-2',
                'id_kelas' => 14,
                'jam_mulai' => '09:30:00',
                'jam_selesai' => '09:30:00',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id_jadwal_umum' => 15,
                'hari' => 'Minggu',
                'id_instruktur' => 'ins-1',
                'id_kelas' => 15,
                'jam_mulai' => '09:00:00',
                'jam_selesai' => '09:00:00',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id_jadwal_umum' => 16,
                'hari' => 'Senin',
                'id_instruktur' => 'ins-9',
                'id_kelas' => 11,
                'jam_mulai' => '17:00:00',
                'jam_selesai' => '18:00:00',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id_jadwal_umum' => 17,
                'hari' => 'Senin',
                'id_instruktur' => 'ins-4',
                'id_kelas' => 16,
                'jam_mulai' => '18:30:00',
                'jam_selesai' => '18:30:00',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id_jadwal_umum' => 18,
                'hari' => 'Selasa',
                'id_instruktur' => 'ins-1',
                'id_kelas' => 15,
                'jam_mulai' => '17:00:00',
                'jam_selesai' => '17:00:00',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id_jadwal_umum' => 19,
                'hari' => 'Selasa',
                'id_instruktur' => 'ins-7',
                'id_kelas' => 1,
                'jam_mulai' => '17:00:00',
                'jam_selesai' => '17:00:00',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id_jadwal_umum' => 20,
                'hari' => 'Selasa',
                'id_instruktur' => 'ins-11',
                'id_kelas' => 17,
                'jam_mulai' => '18:00:00',
                'jam_selesai' => '18:00:00',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id_jadwal_umum' => 21,
                'hari' => 'Rabu',
                'id_instruktur' => 'ins-12',
                'id_kelas' => 18,
                'jam_mulai' => '18:30:00',
                'jam_selesai' => '18:30:00',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id_jadwal_umum' => 22,
                'hari' => 'Rabu',
                'id_instruktur' => 'ins-8',
                'id_kelas' => 8,
                'jam_mulai' => '17:00:00',
                'jam_selesai' => '17:00:00',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id_jadwal_umum' => 24,
                'hari' => 'Kamis',
                'id_instruktur' => 'ins-6',
                'id_kelas' => 20,
                'jam_mulai' => '17:00:00',
                'jam_selesai' => '18:00:00',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id_jadwal_umum' => 25,
                'hari' => 'Kamis',
                'id_instruktur' => 'ins-9',
                'id_kelas' => 5,
                'jam_mulai' => '18:30:00',
                'jam_selesai' => '19:30:00',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id_jadwal_umum' => 26,
                'hari' => 'Jumat',
                'id_instruktur' => 'ins-6',
                'id_kelas' => 6,
                'jam_mulai' => '17:00:00',
                'jam_selesai' => '18:00:00',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id_jadwal_umum' => 27,
                'hari' => 'Jumat',
                'id_instruktur' => 'ins-2',
                'id_kelas' => 2,
                'jam_mulai' => '18:30:00',
                'jam_selesai' => '18:30:00',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id_jadwal_umum' => 28,
                'hari' => 'sabtu',
                'id_instruktur' => 'ins-12',
                'id_kelas' => 19,
                'jam_mulai' => '17:00:00',
                'jam_selesai' => '17:00:00',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id_jadwal_umum' => 29,
                'hari' => 'sabtu',
                'id_instruktur' => 'ins-10',
                'id_kelas' => 12,
                'jam_mulai' => '17:00:00',
                'jam_selesai' => '17:00:00',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id_jadwal_umum' => 30,
                'hari' => 'sabtu',
                'id_instruktur' => 'ins-11',
                'id_kelas' => 17,
                'jam_mulai' => '18:30:00',
                'jam_selesai' => '18:30:00',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id_jadwal_umum' => 31,
                'hari' => 'Selasa',
                'id_instruktur' => 'ins-4',
                'id_kelas' => 4,
                'jam_mulai' => '09:30:00',
                'jam_selesai' => '09:30:00',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id_jadwal_umum' => 32,
                'hari' => 'Kamis',
                'id_instruktur' => 'ins-11',
                'id_kelas' => 8,
                'jam_mulai' => '08:00:00',
                'jam_selesai' => '08:00:00',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id_jadwal_umum' => 33,
                'hari' => 'Jumat',
                'id_instruktur' => 'ins-9',
                'id_kelas' => 10,
                'jam_mulai' => '08:00:00',
                'jam_selesai' => '09:00:00',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id_jadwal_umum' => 34,
                'hari' => 'sabtu',
                'id_instruktur' => 'ins-2',
                'id_kelas' => 14,
                'jam_mulai' => '09:30:00',
                'jam_selesai' => '09:30:00',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id_jadwal_umum' => 35,
                'hari' => 'Selasa',
                'id_instruktur' => 'ins-1',
                'id_kelas' => 15,
                'jam_mulai' => '17:00:00',
                'jam_selesai' => '17:00:00',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id_jadwal_umum' => 36,
                'hari' => 'sabtu',
                'id_instruktur' => 'ins-12',
                'id_kelas' => 19,
                'jam_mulai' => '17:00:00',
                'jam_selesai' => '17:00:00',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id_jadwal_umum' => 37,
                'hari' => 'Selasa',
                'id_instruktur' => 'ins-4',
                'id_kelas' => 4,
                'jam_mulai' => '09:30:00',
                'jam_selesai' => '09:30:00',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id_jadwal_umum' => 38,
                'hari' => 'Rabu',
                'id_instruktur' => 'ins-7',
                'id_kelas' => 10,
                'jam_mulai' => '09:30:00',
                'jam_selesai' => '09:30:00',
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id_jadwal_umum' => 42,
                'hari' => 'Senin',
                'id_instruktur' => 'ins-1',
                'id_kelas' => 20,
                'jam_mulai' => '09:30:00',
                'jam_selesai' => '10:30:00',
                'created_at' => '2023-04-23 18:57:38',
                'updated_at' => '2023-04-23 18:57:38',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id_jadwal_umum' => 43,
                'hari' => 'senin',
                'id_instruktur' => 'ins-2',
                'id_kelas' => 15,
                'jam_mulai' => '10:30:00',
                'jam_selesai' => '11:45:00',
                'created_at' => '2023-04-23 18:59:25',
                'updated_at' => '2023-06-07 18:37:56',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id_jadwal_umum' => 44,
                'hari' => 'Jumat',
                'id_instruktur' => 'ins-1',
                'id_kelas' => 1,
                'jam_mulai' => '13:00:00',
                'jam_selesai' => '14:00:00',
                'created_at' => '2023-04-23 19:07:58',
                'updated_at' => '2023-04-28 14:11:56',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id_jadwal_umum' => 49,
                'hari' => 'Minggu',
                'id_instruktur' => 'ins-15',
                'id_kelas' => 20,
                'jam_mulai' => '13:00:00',
                'jam_selesai' => '15:00:00',
                'created_at' => '2023-05-05 13:23:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id_jadwal_umum' => 55,
                'hari' => 'Senin',
                'id_instruktur' => 'ins-16',
                'id_kelas' => 5,
                'jam_mulai' => '09:00:00',
                'jam_selesai' => '10:00:00',
                'created_at' => '2023-06-07 19:00:23',
                'updated_at' => '2023-06-07 19:00:23',
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id_jadwal_umum' => 56,
                'hari' => 'Senin',
                'id_instruktur' => 'ins-1',
                'id_kelas' => 5,
                'jam_mulai' => '09:29:00',
                'jam_selesai' => '10:00:00',
                'created_at' => '2023-06-07 19:00:57',
                'updated_at' => '2023-06-07 19:00:57',
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id_jadwal_umum' => 57,
                'hari' => 'Senin',
                'id_instruktur' => 'ins-14',
                'id_kelas' => 3,
                'jam_mulai' => '08:00:00',
                'jam_selesai' => '10:00:00',
                'created_at' => '2023-06-07 19:06:06',
                'updated_at' => '2023-06-07 19:06:06',
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id_jadwal_umum' => 58,
                'hari' => 'Jumat',
                'id_instruktur' => 'ins-8',
                'id_kelas' => 4,
                'jam_mulai' => '08:00:00',
                'jam_selesai' => '10:00:00',
                'created_at' => '2023-06-07 19:12:48',
                'updated_at' => '2023-06-07 19:12:48',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}