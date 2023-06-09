<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BookingKelasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('booking_kelas')->delete();
        
        \DB::table('booking_kelas')->insert(array (
            0 => 
            array (
                'no_booking' => 1,
                'tanggal_booking' => '2023-06-07 23:14:26',
                'is_canceled' => 0,
                'status_kehadiran' => 1,
                'metode_pembayaran' => 'Deposit Reguler',
                'no_struk' => NULL,
                'id_jadwal_harian' => 576,
                'id_member' => '23.05.046',
                'created_at' => '2023-05-30 15:04:04',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'no_booking' => 13,
                'tanggal_booking' => '2023-06-07 23:14:21',
                'is_canceled' => 0,
                'status_kehadiran' => 1,
                'metode_pembayaran' => 'Deposit Paket',
                'no_struk' => '23.05.312',
                'id_jadwal_harian' => 523,
                'id_member' => '23.05.042',
                'created_at' => '2023-05-18 21:58:57',
                'updated_at' => '2023-05-20 16:54:59',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'no_booking' => 14,
                'tanggal_booking' => '2023-06-07 23:14:39',
                'is_canceled' => 0,
                'status_kehadiran' => 1,
                'metode_pembayaran' => 'Deposit Paket',
                'no_struk' => '23.05.313',
                'id_jadwal_harian' => 532,
                'id_member' => '23.05.043',
                'created_at' => '2023-05-19 10:46:15',
                'updated_at' => '2023-05-23 16:13:32',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'no_booking' => 15,
                'tanggal_booking' => '2023-06-07 23:14:37',
                'is_canceled' => 0,
                'status_kehadiran' => 1,
                'metode_pembayaran' => 'Deposit Paket',
                'no_struk' => '23.05.310',
                'id_jadwal_harian' => 532,
                'id_member' => '23.05.044',
                'created_at' => '2023-05-19 10:46:23',
                'updated_at' => '2023-05-19 14:51:54',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'no_booking' => 16,
                'tanggal_booking' => '2023-06-07 23:14:36',
                'is_canceled' => 0,
                'status_kehadiran' => 1,
                'metode_pembayaran' => 'Deposit Paket',
                'no_struk' => NULL,
                'id_jadwal_harian' => 530,
                'id_member' => '23.05.044',
                'created_at' => '2023-05-20 16:21:56',
                'updated_at' => '2023-05-20 16:23:14',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'no_booking' => 17,
                'tanggal_booking' => '2023-06-07 23:14:34',
                'is_canceled' => 0,
                'status_kehadiran' => 1,
                'metode_pembayaran' => 'Deposit Paket',
                'no_struk' => NULL,
                'id_jadwal_harian' => 576,
                'id_member' => '23.05.046',
                'created_at' => '2023-05-27 14:34:24',
                'updated_at' => '2023-05-27 14:36:26',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'no_booking' => 19,
                'tanggal_booking' => '2023-06-09 12:08:15',
                'is_canceled' => 0,
                'status_kehadiran' => 0,
                'metode_pembayaran' => 'Deposit Paket',
                'no_struk' => NULL,
                'id_jadwal_harian' => 616,
                'id_member' => '23.05.044',
                'created_at' => '2023-06-09 12:08:15',
                'updated_at' => '2023-06-09 12:08:15',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'no_booking' => 20,
                'tanggal_booking' => '2023-06-09 12:08:53',
                'is_canceled' => 0,
                'status_kehadiran' => 0,
                'metode_pembayaran' => 'Deposit Paket',
                'no_struk' => NULL,
                'id_jadwal_harian' => 617,
                'id_member' => '23.05.044',
                'created_at' => '2023-06-09 12:08:53',
                'updated_at' => '2023-06-09 12:08:53',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'no_booking' => 21,
                'tanggal_booking' => '2023-06-09 14:21:53',
                'is_canceled' => 0,
                'status_kehadiran' => 0,
                'metode_pembayaran' => 'Deposit Paket',
                'no_struk' => NULL,
                'id_jadwal_harian' => 624,
                'id_member' => '23.05.044',
                'created_at' => '2023-06-09 14:21:53',
                'updated_at' => '2023-06-09 14:21:53',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'no_booking' => 22,
                'tanggal_booking' => '2023-06-09 14:25:00',
                'is_canceled' => 0,
                'status_kehadiran' => 0,
                'metode_pembayaran' => 'Deposit Reguler',
                'no_struk' => NULL,
                'id_jadwal_harian' => 624,
                'id_member' => '23.05.043',
                'created_at' => '2023-06-09 14:25:00',
                'updated_at' => '2023-06-09 14:25:00',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}