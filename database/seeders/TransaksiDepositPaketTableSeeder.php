<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TransaksiDepositPaketTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('transaksi_deposit_paket')->delete();
        
        \DB::table('transaksi_deposit_paket')->insert(array (
            0 => 
            array (
                'id_deposit_paket' => 26,
                'tanggal_deposit' => '2023-05-05 00:50:17',
                'nominal_deposit_kelas' => 5.0,
                'nominal_uang' => 750000.0,
                'tanggal_kadeluarsa' => '2023-06-05 00:50:17',
                'id_promo' => 2,
                'no_struk' => '23.05.207',
                'id_kelas' => 18,
                'created_at' => '2023-05-05 00:50:17',
                'updated_at' => '2023-05-05 00:50:17',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id_deposit_paket' => 27,
                'tanggal_deposit' => '2023-05-05 00:53:14',
                'nominal_deposit_kelas' => 5.0,
                'nominal_uang' => 750000.0,
                'tanggal_kadeluarsa' => '2023-06-05 00:53:14',
                'id_promo' => 2,
                'no_struk' => '23.05.208',
                'id_kelas' => 18,
                'created_at' => '2023-05-05 00:53:14',
                'updated_at' => '2023-05-05 00:53:14',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id_deposit_paket' => 28,
                'tanggal_deposit' => '2023-05-05 00:57:56',
                'nominal_deposit_kelas' => 5.0,
                'nominal_uang' => 750000.0,
                'tanggal_kadeluarsa' => '2023-06-05 00:57:56',
                'id_promo' => 2,
                'no_struk' => '23.05.209',
                'id_kelas' => 18,
                'created_at' => '2023-05-05 00:57:56',
                'updated_at' => '2023-05-05 00:57:56',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id_deposit_paket' => 29,
                'tanggal_deposit' => '2023-05-05 01:02:31',
                'nominal_deposit_kelas' => 6.0,
                'nominal_uang' => 900000.0,
                'tanggal_kadeluarsa' => '2023-06-05 01:02:31',
                'id_promo' => 2,
                'no_struk' => '23.05.210',
                'id_kelas' => 18,
                'created_at' => '2023-05-05 01:02:31',
                'updated_at' => '2023-05-05 01:02:31',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id_deposit_paket' => 30,
                'tanggal_deposit' => '2023-05-05 13:42:45',
                'nominal_deposit_kelas' => 5.0,
                'nominal_uang' => 750000.0,
                'tanggal_kadeluarsa' => '2023-06-05 13:42:45',
                'id_promo' => 2,
                'no_struk' => '23.05.219',
                'id_kelas' => 14,
                'created_at' => '2023-05-05 13:42:45',
                'updated_at' => '2023-05-05 13:42:45',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id_deposit_paket' => 31,
                'tanggal_deposit' => '2023-05-05 13:46:45',
                'nominal_deposit_kelas' => 10.0,
                'nominal_uang' => 1500000.0,
                'tanggal_kadeluarsa' => '2023-08-05 13:46:45',
                'id_promo' => 5,
                'no_struk' => '23.05.220',
                'id_kelas' => 11,
                'created_at' => '2023-05-05 13:46:45',
                'updated_at' => '2023-05-05 13:46:45',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id_deposit_paket' => 32,
                'tanggal_deposit' => '2023-05-05 13:50:27',
                'nominal_deposit_kelas' => 3.0,
                'nominal_uang' => 450000.0,
                'tanggal_kadeluarsa' => '2023-06-05 13:50:27',
                'id_promo' => NULL,
                'no_struk' => '23.05.221',
                'id_kelas' => 10,
                'created_at' => '2023-05-05 13:50:27',
                'updated_at' => '2023-05-05 13:50:27',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id_deposit_paket' => 33,
                'tanggal_deposit' => '2023-05-08 17:00:39',
                'nominal_deposit_kelas' => 11.0,
                'nominal_uang' => 2200000.0,
                'tanggal_kadeluarsa' => '2023-08-08 17:00:39',
                'id_promo' => 5,
                'no_struk' => '23.05.250',
                'id_kelas' => 17,
                'created_at' => '2023-05-08 17:00:39',
                'updated_at' => '2023-05-08 17:00:39',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id_deposit_paket' => 34,
                'tanggal_deposit' => '2023-05-09 10:25:41',
                'nominal_deposit_kelas' => 5.0,
                'nominal_uang' => 750000.0,
                'tanggal_kadeluarsa' => '2023-06-09 10:25:41',
                'id_promo' => 2,
                'no_struk' => '23.05.253',
                'id_kelas' => 9,
                'created_at' => '2023-05-09 10:25:41',
                'updated_at' => '2023-05-09 10:25:41',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id_deposit_paket' => 35,
                'tanggal_deposit' => '2023-05-24 08:03:09',
                'nominal_deposit_kelas' => 4.0,
                'nominal_uang' => 750000.0,
                'tanggal_kadeluarsa' => '2023-06-24 08:03:09',
                'id_promo' => NULL,
                'no_struk' => '23.05.326',
                'id_kelas' => 3,
                'created_at' => '2023-05-24 08:03:09',
                'updated_at' => '2023-05-24 08:03:09',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id_deposit_paket' => 36,
                'tanggal_deposit' => '2023-05-24 08:04:36',
                'nominal_deposit_kelas' => 5.0,
                'nominal_uang' => 1000000.0,
                'tanggal_kadeluarsa' => '2023-06-24 08:04:36',
                'id_promo' => 2,
                'no_struk' => '23.05.327',
                'id_kelas' => 12,
                'created_at' => '2023-05-24 08:04:36',
                'updated_at' => '2023-05-24 08:04:36',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id_deposit_paket' => 37,
                'tanggal_deposit' => '2023-06-04 22:25:14',
                'nominal_deposit_kelas' => 10.0,
                'nominal_uang' => 750000.0,
                'tanggal_kadeluarsa' => '2023-06-04 22:25:14',
                'id_promo' => 4,
                'no_struk' => '23.06.345',
                'id_kelas' => 5,
                'created_at' => '2023-06-04 22:25:14',
                'updated_at' => '2023-06-04 22:25:14',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id_deposit_paket' => 38,
                'tanggal_deposit' => '2023-06-04 22:31:46',
                'nominal_deposit_kelas' => 10.0,
                'nominal_uang' => 750000.0,
                'tanggal_kadeluarsa' => '2023-06-04 22:31:46',
                'id_promo' => 4,
                'no_struk' => '23.06.349',
                'id_kelas' => 5,
                'created_at' => '2023-06-04 22:31:46',
                'updated_at' => '2023-06-04 22:31:46',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id_deposit_paket' => 39,
                'tanggal_deposit' => '2023-06-05 12:55:51',
                'nominal_deposit_kelas' => 5.0,
                'nominal_uang' => 750000.0,
                'tanggal_kadeluarsa' => '2023-07-05 12:55:51',
                'id_promo' => 2,
                'no_struk' => '23.06.354',
                'id_kelas' => 11,
                'created_at' => '2023-06-05 12:55:51',
                'updated_at' => '2023-06-05 12:55:51',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id_deposit_paket' => 40,
                'tanggal_deposit' => '2023-06-05 12:58:49',
                'nominal_deposit_kelas' => 10.0,
                'nominal_uang' => 1500000.0,
                'tanggal_kadeluarsa' => '2023-09-05 12:58:49',
                'id_promo' => 5,
                'no_struk' => '23.06.355',
                'id_kelas' => 2,
                'created_at' => '2023-06-05 12:58:50',
                'updated_at' => '2023-06-05 12:58:50',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id_deposit_paket' => 41,
                'tanggal_deposit' => '2023-06-05 13:07:56',
                'nominal_deposit_kelas' => 5.0,
                'nominal_uang' => 750000.0,
                'tanggal_kadeluarsa' => '2023-07-05 13:07:56',
                'id_promo' => 2,
                'no_struk' => '23.06.356',
                'id_kelas' => 3,
                'created_at' => '2023-06-05 13:07:56',
                'updated_at' => '2023-06-05 13:07:56',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id_deposit_paket' => 42,
                'tanggal_deposit' => '2023-06-06 16:39:01',
                'nominal_deposit_kelas' => 5.0,
                'nominal_uang' => 750000.0,
                'tanggal_kadeluarsa' => '2023-07-06 16:39:01',
                'id_promo' => 2,
                'no_struk' => '23.06.426',
                'id_kelas' => 16,
                'created_at' => '2023-06-06 16:39:01',
                'updated_at' => '2023-06-06 16:39:01',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id_deposit_paket' => 43,
                'tanggal_deposit' => '2023-06-06 21:08:48',
                'nominal_deposit_kelas' => 5.0,
                'nominal_uang' => 750000.0,
                'tanggal_kadeluarsa' => '2023-07-06 21:08:48',
                'id_promo' => 2,
                'no_struk' => '23.06.433',
                'id_kelas' => 1,
                'created_at' => '2023-06-06 21:08:48',
                'updated_at' => '2023-06-06 21:08:48',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id_deposit_paket' => 44,
                'tanggal_deposit' => '2023-06-06 21:10:24',
                'nominal_deposit_kelas' => 10.0,
                'nominal_uang' => 1500000.0,
                'tanggal_kadeluarsa' => '2023-09-06 21:10:24',
                'id_promo' => 5,
                'no_struk' => '23.06.434',
                'id_kelas' => 14,
                'created_at' => '2023-06-06 21:10:24',
                'updated_at' => '2023-06-06 21:10:24',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id_deposit_paket' => 45,
                'tanggal_deposit' => '2023-06-06 21:11:09',
                'nominal_deposit_kelas' => 5.0,
                'nominal_uang' => 750000.0,
                'tanggal_kadeluarsa' => '2023-07-06 21:11:09',
                'id_promo' => 2,
                'no_struk' => '23.06.435',
                'id_kelas' => 4,
                'created_at' => '2023-06-06 21:11:09',
                'updated_at' => '2023-06-06 21:11:09',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id_deposit_paket' => 46,
                'tanggal_deposit' => '2023-06-06 21:17:11',
                'nominal_deposit_kelas' => 10.0,
                'nominal_uang' => 1500000.0,
                'tanggal_kadeluarsa' => '2023-09-06 21:17:11',
                'id_promo' => 5,
                'no_struk' => '23.06.436',
                'id_kelas' => 3,
                'created_at' => '2023-06-06 21:17:11',
                'updated_at' => '2023-06-06 21:17:11',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id_deposit_paket' => 47,
                'tanggal_deposit' => '2023-06-06 21:18:56',
                'nominal_deposit_kelas' => 5.0,
                'nominal_uang' => 750000.0,
                'tanggal_kadeluarsa' => '2023-07-06 21:18:56',
                'id_promo' => 2,
                'no_struk' => '23.06.437',
                'id_kelas' => 1,
                'created_at' => '2023-06-06 21:18:56',
                'updated_at' => '2023-06-06 21:18:56',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id_deposit_paket' => 48,
                'tanggal_deposit' => '2023-06-06 21:21:09',
                'nominal_deposit_kelas' => 5.0,
                'nominal_uang' => 750000.0,
                'tanggal_kadeluarsa' => '2023-07-06 21:21:09',
                'id_promo' => 2,
                'no_struk' => '23.06.438',
                'id_kelas' => 6,
                'created_at' => '2023-06-06 21:21:09',
                'updated_at' => '2023-06-06 21:21:09',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}