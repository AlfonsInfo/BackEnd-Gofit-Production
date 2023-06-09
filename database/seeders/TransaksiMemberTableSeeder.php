<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TransaksiMemberTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('transaksi_member')->delete();
        
        \DB::table('transaksi_member')->insert(array (
            0 => 
            array (
                'no_struk_transaksi' => '23.04.013',
                'jenis_transaksi' => 'transaksi-booking-gym',
                'id_pegawai' => 'P03',
                'id_member' => '23.06.001',
                'created_at' => '2023-04-02 00:54:36',
                'updated_at' => '2023-04-02 00:54:36',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'no_struk_transaksi' => '23.04.014',
                'jenis_transaksi' => 'transaksi-booking-gym',
                'id_pegawai' => 'P03',
                'id_member' => '23.06.002',
                'created_at' => '2023-04-02 00:54:36',
                'updated_at' => '2023-04-02 00:54:36',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'no_struk_transaksi' => '23.04.015',
                'jenis_transaksi' => 'transaksi-booking-gym',
                'id_pegawai' => 'P03',
                'id_member' => '23.06.003',
                'created_at' => '2023-04-02 00:54:36',
                'updated_at' => '2023-04-02 00:54:36',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'no_struk_transaksi' => '23.04.016',
                'jenis_transaksi' => 'transaksi-booking-gym',
                'id_pegawai' => 'P03',
                'id_member' => '23.06.005',
                'created_at' => '2023-04-02 00:54:36',
                'updated_at' => '2023-04-02 00:54:36',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'no_struk_transaksi' => '23.04.017',
                'jenis_transaksi' => 'transaksi-booking-gym',
                'id_pegawai' => 'P03',
                'id_member' => '23.06.006',
                'created_at' => '2023-04-02 00:54:36',
                'updated_at' => '2023-04-02 00:54:36',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'no_struk_transaksi' => '23.04.018',
                'jenis_transaksi' => 'transaksi-booking-gym',
                'id_pegawai' => 'P03',
                'id_member' => '23.06.001',
                'created_at' => '2023-04-02 00:54:36',
                'updated_at' => '2023-04-02 00:54:36',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'no_struk_transaksi' => '23.04.019',
                'jenis_transaksi' => 'transaksi-booking-gym',
                'id_pegawai' => 'P03',
                'id_member' => '23.06.002',
                'created_at' => '2023-04-02 00:54:36',
                'updated_at' => '2023-04-02 00:54:36',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'no_struk_transaksi' => '23.04.020',
                'jenis_transaksi' => 'transaksi-booking-gym',
                'id_pegawai' => 'P03',
                'id_member' => '23.06.003',
                'created_at' => '2023-04-02 00:54:36',
                'updated_at' => '2023-04-02 00:54:36',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'no_struk_transaksi' => '23.04.021',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P03',
                'id_member' => '23.06.007',
                'created_at' => '2023-04-02 00:54:36',
                'updated_at' => '2023-04-02 00:54:36',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'no_struk_transaksi' => '23.04.022',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P01',
                'id_member' => '23.06.008',
                'created_at' => '2023-04-02 00:54:36',
                'updated_at' => '2023-04-02 00:54:36',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'no_struk_transaksi' => '23.04.023',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P02',
                'id_member' => '23.06.007',
                'created_at' => '2023-04-02 00:54:36',
                'updated_at' => '2023-04-02 00:54:36',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'no_struk_transaksi' => '23.04.024',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P01',
                'id_member' => '23.06.008',
                'created_at' => '2023-04-02 00:54:36',
                'updated_at' => '2023-04-02 00:54:36',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'no_struk_transaksi' => '23.04.025',
                'jenis_transaksi' => 'transaksi-booking-kelas',
                'id_pegawai' => 'P01',
                'id_member' => '23.06.001',
                'created_at' => '2023-04-02 00:54:36',
                'updated_at' => '2023-04-02 00:54:36',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'no_struk_transaksi' => '23.04.026',
                'jenis_transaksi' => 'transaksi-booking-kelas',
                'id_pegawai' => 'P01',
                'id_member' => '23.06.002',
                'created_at' => '2023-04-02 00:54:36',
                'updated_at' => '2023-04-02 00:54:36',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'no_struk_transaksi' => '23.04.027',
                'jenis_transaksi' => 'transaksi-booking-kelas',
                'id_pegawai' => 'P01',
                'id_member' => '23.06.003',
                'created_at' => '2023-04-02 00:54:36',
                'updated_at' => '2023-04-02 00:54:36',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'no_struk_transaksi' => '23.04.028',
                'jenis_transaksi' => 'transaksi-booking-kelas',
                'id_pegawai' => 'P01',
                'id_member' => '23.06.004',
                'created_at' => '2023-04-02 00:54:36',
                'updated_at' => '2023-04-02 00:54:36',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'no_struk_transaksi' => '23.04.029',
                'jenis_transaksi' => 'transaksi-booking-kelas',
                'id_pegawai' => 'P01',
                'id_member' => '23.06.005',
                'created_at' => '2023-04-02 00:54:36',
                'updated_at' => '2023-04-02 00:54:36',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'no_struk_transaksi' => '23.04.030',
                'jenis_transaksi' => 'transaksi-booking-kelas',
                'id_pegawai' => 'P01',
                'id_member' => '23.06.006',
                'created_at' => '2023-04-02 00:54:36',
                'updated_at' => '2023-04-02 00:54:36',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'no_struk_transaksi' => '23.04.031',
                'jenis_transaksi' => 'transaksi-booking-kelas',
                'id_pegawai' => 'P01',
                'id_member' => '23.06.001',
                'created_at' => '2023-04-02 00:54:36',
                'updated_at' => '2023-04-02 00:54:36',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'no_struk_transaksi' => '23.04.032',
                'jenis_transaksi' => 'transaksi-booking-kelas',
                'id_pegawai' => 'P01',
                'id_member' => '23.06.001',
                'created_at' => '2023-04-02 00:54:36',
                'updated_at' => '2023-04-02 00:54:36',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'no_struk_transaksi' => '23.04.033',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-04-25 16:40:20',
                'updated_at' => '2023-04-25 16:40:20',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'no_struk_transaksi' => '23.04.034',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-04-25 16:42:44',
                'updated_at' => '2023-04-25 16:42:44',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'no_struk_transaksi' => '23.04.035',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-04-25 16:46:12',
                'updated_at' => '2023-04-25 16:46:12',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'no_struk_transaksi' => '23.04.036',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-04-25 16:49:29',
                'updated_at' => '2023-04-25 16:49:29',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'no_struk_transaksi' => '23.04.037',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-04-25 16:50:21',
                'updated_at' => '2023-04-25 16:50:21',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'no_struk_transaksi' => '23.04.038',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-04-25 16:52:02',
                'updated_at' => '2023-04-25 16:52:02',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'no_struk_transaksi' => '23.04.039',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-04-25 16:52:21',
                'updated_at' => '2023-04-25 16:52:21',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'no_struk_transaksi' => '23.04.040',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-04-25 16:52:27',
                'updated_at' => '2023-04-25 16:52:27',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'no_struk_transaksi' => '23.04.041',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-04-25 16:53:30',
                'updated_at' => '2023-04-25 16:53:30',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'no_struk_transaksi' => '23.04.042',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-04-25 16:55:34',
                'updated_at' => '2023-04-25 16:55:34',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'no_struk_transaksi' => '23.04.043',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-04-25 16:57:37',
                'updated_at' => '2023-04-25 16:57:37',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'no_struk_transaksi' => '23.04.044',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-04-25 16:57:57',
                'updated_at' => '2023-04-25 16:57:57',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'no_struk_transaksi' => '23.04.045',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-04-25 17:03:05',
                'updated_at' => '2023-04-25 17:03:05',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'no_struk_transaksi' => '23.04.046',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-04-25 17:03:57',
                'updated_at' => '2023-04-25 17:03:57',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'no_struk_transaksi' => '23.04.047',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-04-25 17:04:42',
                'updated_at' => '2023-04-25 17:04:42',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'no_struk_transaksi' => '23.04.048',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-04-25 17:06:02',
                'updated_at' => '2023-04-25 17:06:02',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'no_struk_transaksi' => '23.04.049',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-04-25 17:07:27',
                'updated_at' => '2023-04-25 17:07:27',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'no_struk_transaksi' => '23.04.050',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-04-25 17:08:06',
                'updated_at' => '2023-04-25 17:08:06',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'no_struk_transaksi' => '23.04.051',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-04-25 17:10:07',
                'updated_at' => '2023-04-25 17:10:07',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'no_struk_transaksi' => '23.04.052',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-04-25 17:10:30',
                'updated_at' => '2023-04-25 17:10:30',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'no_struk_transaksi' => '23.04.053',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-04-25 17:10:43',
                'updated_at' => '2023-04-25 17:10:43',
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'no_struk_transaksi' => '23.04.054',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-04-25 17:12:01',
                'updated_at' => '2023-04-25 17:12:01',
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'no_struk_transaksi' => '23.04.055',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-04-25 17:12:11',
                'updated_at' => '2023-04-25 17:12:11',
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'no_struk_transaksi' => '23.04.056',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-04-25 17:15:34',
                'updated_at' => '2023-04-25 17:15:34',
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'no_struk_transaksi' => '23.04.057',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-04-25 17:17:20',
                'updated_at' => '2023-04-25 17:17:20',
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'no_struk_transaksi' => '23.04.058',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-04-25 17:17:48',
                'updated_at' => '2023-04-25 17:17:48',
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'no_struk_transaksi' => '23.04.059',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-04-25 17:19:02',
                'updated_at' => '2023-04-25 17:19:02',
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'no_struk_transaksi' => '23.04.060',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-04-25 17:19:06',
                'updated_at' => '2023-04-25 17:19:06',
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'no_struk_transaksi' => '23.04.061',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-04-25 17:19:36',
                'updated_at' => '2023-04-25 17:19:36',
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'no_struk_transaksi' => '23.04.062',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-04-25 18:44:22',
                'updated_at' => '2023-04-25 18:44:22',
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'no_struk_transaksi' => '23.04.063',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-04-25 18:48:50',
                'updated_at' => '2023-04-25 18:48:50',
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'no_struk_transaksi' => '23.04.064',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-04-25 18:57:37',
                'updated_at' => '2023-04-25 18:57:37',
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'no_struk_transaksi' => '23.04.065',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.035',
                'created_at' => '2023-04-25 18:59:55',
                'updated_at' => '2023-04-25 18:59:55',
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'no_struk_transaksi' => '23.04.066',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-04-25 19:00:23',
                'updated_at' => '2023-04-25 19:00:23',
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'no_struk_transaksi' => '23.04.067',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-04-25 19:00:57',
                'updated_at' => '2023-04-25 19:00:57',
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'no_struk_transaksi' => '23.04.068',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-04-25 19:00:57',
                'updated_at' => '2023-04-25 19:00:57',
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'no_struk_transaksi' => '23.04.069',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.035',
                'created_at' => '2023-04-25 21:09:38',
                'updated_at' => '2023-04-25 21:09:38',
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'no_struk_transaksi' => '23.04.070',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-04-25 22:40:09',
                'updated_at' => '2023-04-25 22:40:09',
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'no_struk_transaksi' => '23.04.071',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.035',
                'created_at' => '2023-04-25 22:40:22',
                'updated_at' => '2023-04-25 22:40:22',
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'no_struk_transaksi' => '23.04.072',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.035',
                'created_at' => '2023-04-25 22:40:40',
                'updated_at' => '2023-04-25 22:40:40',
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'no_struk_transaksi' => '23.04.073',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.001',
                'created_at' => '2023-04-26 09:32:40',
                'updated_at' => '2023-04-26 09:32:40',
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'no_struk_transaksi' => '23.04.074',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-04-26 10:07:58',
                'updated_at' => '2023-04-26 10:07:58',
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'no_struk_transaksi' => '23.04.075',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-04-26 10:08:25',
                'updated_at' => '2023-04-26 10:08:25',
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'no_struk_transaksi' => '23.04.076',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-04-27 11:12:05',
                'updated_at' => '2023-04-27 11:12:05',
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'no_struk_transaksi' => '23.04.077',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-04-30 23:19:26',
                'updated_at' => '2023-04-30 23:19:26',
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'no_struk_transaksi' => '23.04.078',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.013',
                'created_at' => '2023-04-30 23:59:15',
                'updated_at' => '2023-04-30 23:59:15',
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'no_struk_transaksi' => '23.05.079',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.013',
                'created_at' => '2023-05-01 00:00:08',
                'updated_at' => '2023-05-01 00:00:08',
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'no_struk_transaksi' => '23.05.080',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.016',
                'created_at' => '2023-05-01 00:00:18',
                'updated_at' => '2023-05-01 00:00:18',
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'no_struk_transaksi' => '23.05.081',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.032',
                'created_at' => '2023-05-01 00:00:30',
                'updated_at' => '2023-05-01 00:00:30',
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'no_struk_transaksi' => '23.05.082',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.033',
                'created_at' => '2023-05-01 00:01:46',
                'updated_at' => '2023-05-01 00:01:46',
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'no_struk_transaksi' => '23.05.083',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.033',
                'created_at' => '2023-05-01 00:01:54',
                'updated_at' => '2023-05-01 00:01:54',
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'no_struk_transaksi' => '23.05.084',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.028',
                'created_at' => '2023-05-01 00:02:09',
                'updated_at' => '2023-05-01 00:02:09',
                'deleted_at' => NULL,
            ),
            72 => 
            array (
                'no_struk_transaksi' => '23.05.085',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.021',
                'created_at' => '2023-05-01 00:02:18',
                'updated_at' => '2023-05-01 00:02:18',
                'deleted_at' => NULL,
            ),
            73 => 
            array (
                'no_struk_transaksi' => '23.05.086',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.029',
                'created_at' => '2023-05-01 15:54:26',
                'updated_at' => '2023-05-01 15:54:26',
                'deleted_at' => NULL,
            ),
            74 => 
            array (
                'no_struk_transaksi' => '23.05.087',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P01',
                'id_member' => '23.06.002',
                'created_at' => '2023-05-01 17:45:38',
                'updated_at' => '2023-05-01 17:45:38',
                'deleted_at' => NULL,
            ),
            75 => 
            array (
                'no_struk_transaksi' => '23.05.088',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P01',
                'id_member' => '23.06.002',
                'created_at' => '2023-05-01 17:46:09',
                'updated_at' => '2023-05-01 17:46:09',
                'deleted_at' => NULL,
            ),
            76 => 
            array (
                'no_struk_transaksi' => '23.05.089',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P01',
                'id_member' => '23.06.005',
                'created_at' => '2023-05-01 17:46:28',
                'updated_at' => '2023-05-01 17:46:28',
                'deleted_at' => NULL,
            ),
            77 => 
            array (
                'no_struk_transaksi' => '23.05.090',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P01',
                'id_member' => '23.06.003',
                'created_at' => '2023-05-01 17:46:33',
                'updated_at' => '2023-05-01 17:46:33',
                'deleted_at' => NULL,
            ),
            78 => 
            array (
                'no_struk_transaksi' => '23.05.091',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P01',
                'id_member' => '23.06.003',
                'created_at' => '2023-05-01 17:49:11',
                'updated_at' => '2023-05-01 17:49:11',
                'deleted_at' => NULL,
            ),
            79 => 
            array (
                'no_struk_transaksi' => '23.05.092',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P01',
                'id_member' => '23.06.003',
                'created_at' => '2023-05-01 17:58:57',
                'updated_at' => '2023-05-01 17:58:57',
                'deleted_at' => NULL,
            ),
            80 => 
            array (
                'no_struk_transaksi' => '23.05.093',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P01',
                'id_member' => '23.06.003',
                'created_at' => '2023-05-01 18:00:17',
                'updated_at' => '2023-05-01 18:00:17',
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                'no_struk_transaksi' => '23.05.094',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P01',
                'id_member' => '23.06.003',
                'created_at' => '2023-05-01 18:24:49',
                'updated_at' => '2023-05-01 18:24:49',
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'no_struk_transaksi' => '23.05.095',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.025',
                'created_at' => '2023-05-01 18:37:20',
                'updated_at' => '2023-05-01 18:37:20',
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                'no_struk_transaksi' => '23.05.096',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.019',
                'created_at' => '2023-05-01 18:38:37',
                'updated_at' => '2023-05-01 18:38:37',
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'no_struk_transaksi' => '23.05.097',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.037',
                'created_at' => '2023-05-01 18:39:06',
                'updated_at' => '2023-05-01 18:39:06',
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'no_struk_transaksi' => '23.05.098',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.032',
                'created_at' => '2023-05-01 18:39:35',
                'updated_at' => '2023-05-01 18:39:35',
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                'no_struk_transaksi' => '23.05.099',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P01',
                'id_member' => '23.06.003',
                'created_at' => '2023-05-01 18:56:45',
                'updated_at' => '2023-05-01 18:56:45',
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                'no_struk_transaksi' => '23.05.100',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P01',
                'id_member' => '23.06.003',
                'created_at' => '2023-05-01 18:57:04',
                'updated_at' => '2023-05-01 18:57:04',
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                'no_struk_transaksi' => '23.05.101',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P01',
                'id_member' => '23.06.003',
                'created_at' => '2023-05-01 19:03:54',
                'updated_at' => '2023-05-01 19:03:54',
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                'no_struk_transaksi' => '23.05.102',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P01',
                'id_member' => '23.06.003',
                'created_at' => '2023-05-01 19:04:45',
                'updated_at' => '2023-05-01 19:04:45',
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                'no_struk_transaksi' => '23.05.103',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P01',
                'id_member' => '23.06.003',
                'created_at' => '2023-05-01 19:10:23',
                'updated_at' => '2023-05-01 19:10:23',
                'deleted_at' => NULL,
            ),
            91 => 
            array (
                'no_struk_transaksi' => '23.05.104',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.018',
                'created_at' => '2023-05-01 20:35:33',
                'updated_at' => '2023-05-01 20:35:33',
                'deleted_at' => NULL,
            ),
            92 => 
            array (
                'no_struk_transaksi' => '23.05.105',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.032',
                'created_at' => '2023-05-01 20:59:20',
                'updated_at' => '2023-05-01 20:59:20',
                'deleted_at' => NULL,
            ),
            93 => 
            array (
                'no_struk_transaksi' => '23.05.106',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.031',
                'created_at' => '2023-05-01 21:01:42',
                'updated_at' => '2023-05-01 21:01:42',
                'deleted_at' => NULL,
            ),
            94 => 
            array (
                'no_struk_transaksi' => '23.05.107',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.032',
                'created_at' => '2023-05-01 21:02:20',
                'updated_at' => '2023-05-01 21:02:20',
                'deleted_at' => NULL,
            ),
            95 => 
            array (
                'no_struk_transaksi' => '23.05.108',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.032',
                'created_at' => '2023-05-01 21:02:51',
                'updated_at' => '2023-05-01 21:02:51',
                'deleted_at' => NULL,
            ),
            96 => 
            array (
                'no_struk_transaksi' => '23.05.109',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.032',
                'created_at' => '2023-05-01 21:08:07',
                'updated_at' => '2023-05-01 21:08:07',
                'deleted_at' => NULL,
            ),
            97 => 
            array (
                'no_struk_transaksi' => '23.05.110',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.032',
                'created_at' => '2023-05-01 21:08:40',
                'updated_at' => '2023-05-01 21:08:40',
                'deleted_at' => NULL,
            ),
            98 => 
            array (
                'no_struk_transaksi' => '23.05.111',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.032',
                'created_at' => '2023-05-01 21:09:15',
                'updated_at' => '2023-05-01 21:09:15',
                'deleted_at' => NULL,
            ),
            99 => 
            array (
                'no_struk_transaksi' => '23.05.112',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.023',
                'created_at' => '2023-05-01 21:29:36',
                'updated_at' => '2023-05-01 21:29:36',
                'deleted_at' => NULL,
            ),
            100 => 
            array (
                'no_struk_transaksi' => '23.05.113',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.024',
                'created_at' => '2023-05-01 21:30:11',
                'updated_at' => '2023-05-01 21:30:11',
                'deleted_at' => NULL,
            ),
            101 => 
            array (
                'no_struk_transaksi' => '23.05.114',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.036',
                'created_at' => '2023-05-01 21:35:47',
                'updated_at' => '2023-05-01 21:35:47',
                'deleted_at' => NULL,
            ),
            102 => 
            array (
                'no_struk_transaksi' => '23.05.115',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-05-03 13:00:52',
                'updated_at' => '2023-05-03 13:00:52',
                'deleted_at' => NULL,
            ),
            103 => 
            array (
                'no_struk_transaksi' => '23.05.116',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.018',
                'created_at' => '2023-05-03 13:10:45',
                'updated_at' => '2023-05-03 13:10:45',
                'deleted_at' => NULL,
            ),
            104 => 
            array (
                'no_struk_transaksi' => '23.05.117',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.036',
                'created_at' => '2023-05-03 13:39:05',
                'updated_at' => '2023-05-03 13:39:05',
                'deleted_at' => NULL,
            ),
            105 => 
            array (
                'no_struk_transaksi' => '23.05.118',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.013',
                'created_at' => '2023-05-03 13:40:03',
                'updated_at' => '2023-05-03 13:40:03',
                'deleted_at' => NULL,
            ),
            106 => 
            array (
                'no_struk_transaksi' => '23.05.119',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.036',
                'created_at' => '2023-05-03 14:28:53',
                'updated_at' => '2023-05-03 14:28:53',
                'deleted_at' => NULL,
            ),
            107 => 
            array (
                'no_struk_transaksi' => '23.05.120',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.032',
                'created_at' => '2023-05-03 16:28:19',
                'updated_at' => '2023-05-03 16:28:19',
                'deleted_at' => NULL,
            ),
            108 => 
            array (
                'no_struk_transaksi' => '23.05.121',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.032',
                'created_at' => '2023-05-03 16:29:06',
                'updated_at' => '2023-05-03 16:29:06',
                'deleted_at' => NULL,
            ),
            109 => 
            array (
                'no_struk_transaksi' => '23.05.122',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.023',
                'created_at' => '2023-05-03 16:29:30',
                'updated_at' => '2023-05-03 16:29:30',
                'deleted_at' => NULL,
            ),
            110 => 
            array (
                'no_struk_transaksi' => '23.05.123',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.032',
                'created_at' => '2023-05-03 16:29:52',
                'updated_at' => '2023-05-03 16:29:52',
                'deleted_at' => NULL,
            ),
            111 => 
            array (
                'no_struk_transaksi' => '23.05.124',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.032',
                'created_at' => '2023-05-03 20:06:19',
                'updated_at' => '2023-05-03 20:06:19',
                'deleted_at' => NULL,
            ),
            112 => 
            array (
                'no_struk_transaksi' => '23.05.125',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.032',
                'created_at' => '2023-05-03 20:20:28',
                'updated_at' => '2023-05-03 20:20:28',
                'deleted_at' => NULL,
            ),
            113 => 
            array (
                'no_struk_transaksi' => '23.05.126',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P01',
                'id_member' => '23.06.032',
                'created_at' => '2023-05-03 20:20:46',
                'updated_at' => '2023-05-03 20:20:46',
                'deleted_at' => NULL,
            ),
            114 => 
            array (
                'no_struk_transaksi' => '23.05.127',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P01',
                'id_member' => '23.06.032',
                'created_at' => '2023-05-03 20:21:26',
                'updated_at' => '2023-05-03 20:21:26',
                'deleted_at' => NULL,
            ),
            115 => 
            array (
                'no_struk_transaksi' => '23.05.128',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P01',
                'id_member' => '23.06.032',
                'created_at' => '2023-05-03 20:21:48',
                'updated_at' => '2023-05-03 20:21:48',
                'deleted_at' => NULL,
            ),
            116 => 
            array (
                'no_struk_transaksi' => '23.05.129',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P01',
                'id_member' => '23.06.032',
                'created_at' => '2023-05-03 20:22:42',
                'updated_at' => '2023-05-03 20:22:42',
                'deleted_at' => NULL,
            ),
            117 => 
            array (
                'no_struk_transaksi' => '23.05.130',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P01',
                'id_member' => '23.06.032',
                'created_at' => '2023-05-03 20:23:06',
                'updated_at' => '2023-05-03 20:23:06',
                'deleted_at' => NULL,
            ),
            118 => 
            array (
                'no_struk_transaksi' => '23.05.131',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P01',
                'id_member' => '23.06.032',
                'created_at' => '2023-05-03 20:24:34',
                'updated_at' => '2023-05-03 20:24:34',
                'deleted_at' => NULL,
            ),
            119 => 
            array (
                'no_struk_transaksi' => '23.05.132',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P01',
                'id_member' => '23.06.032',
                'created_at' => '2023-05-03 20:24:52',
                'updated_at' => '2023-05-03 20:24:52',
                'deleted_at' => NULL,
            ),
            120 => 
            array (
                'no_struk_transaksi' => '23.05.133',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P01',
                'id_member' => '23.06.032',
                'created_at' => '2023-05-03 20:25:03',
                'updated_at' => '2023-05-03 20:25:03',
                'deleted_at' => NULL,
            ),
            121 => 
            array (
                'no_struk_transaksi' => '23.05.134',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P01',
                'id_member' => '23.06.037',
                'created_at' => '2023-05-03 20:25:39',
                'updated_at' => '2023-05-03 20:25:39',
                'deleted_at' => NULL,
            ),
            122 => 
            array (
                'no_struk_transaksi' => '23.05.135',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P01',
                'id_member' => '23.06.037',
                'created_at' => '2023-05-03 20:25:46',
                'updated_at' => '2023-05-03 20:25:46',
                'deleted_at' => NULL,
            ),
            123 => 
            array (
                'no_struk_transaksi' => '23.05.136',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.036',
                'created_at' => '2023-05-03 20:27:25',
                'updated_at' => '2023-05-03 20:27:25',
                'deleted_at' => NULL,
            ),
            124 => 
            array (
                'no_struk_transaksi' => '23.05.137',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.032',
                'created_at' => '2023-05-03 22:01:36',
                'updated_at' => '2023-05-03 22:01:36',
                'deleted_at' => NULL,
            ),
            125 => 
            array (
                'no_struk_transaksi' => '23.05.138',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-05-03 22:02:24',
                'updated_at' => '2023-05-03 22:02:24',
                'deleted_at' => NULL,
            ),
            126 => 
            array (
                'no_struk_transaksi' => '23.05.139',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-05-03 22:02:34',
                'updated_at' => '2023-05-03 22:02:34',
                'deleted_at' => NULL,
            ),
            127 => 
            array (
                'no_struk_transaksi' => '23.05.140',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.017',
                'created_at' => '2023-05-03 22:08:04',
                'updated_at' => '2023-05-03 22:08:04',
                'deleted_at' => NULL,
            ),
            128 => 
            array (
                'no_struk_transaksi' => '23.05.141',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-05-04 06:47:46',
                'updated_at' => '2023-05-04 06:47:46',
                'deleted_at' => NULL,
            ),
            129 => 
            array (
                'no_struk_transaksi' => '23.05.142',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-05-04 06:50:06',
                'updated_at' => '2023-05-04 06:50:06',
                'deleted_at' => NULL,
            ),
            130 => 
            array (
                'no_struk_transaksi' => '23.05.143',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-05-04 06:51:04',
                'updated_at' => '2023-05-04 06:51:04',
                'deleted_at' => NULL,
            ),
            131 => 
            array (
                'no_struk_transaksi' => '23.05.144',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-05-04 07:02:13',
                'updated_at' => '2023-05-04 07:02:13',
                'deleted_at' => NULL,
            ),
            132 => 
            array (
                'no_struk_transaksi' => '23.05.145',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-05-04 07:02:58',
                'updated_at' => '2023-05-04 07:02:58',
                'deleted_at' => NULL,
            ),
            133 => 
            array (
                'no_struk_transaksi' => '23.05.146',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.018',
                'created_at' => '2023-05-04 07:08:07',
                'updated_at' => '2023-05-04 07:08:07',
                'deleted_at' => NULL,
            ),
            134 => 
            array (
                'no_struk_transaksi' => '23.05.147',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.024',
                'created_at' => '2023-05-04 07:08:52',
                'updated_at' => '2023-05-04 07:08:52',
                'deleted_at' => NULL,
            ),
            135 => 
            array (
                'no_struk_transaksi' => '23.05.148',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.025',
                'created_at' => '2023-05-04 07:09:52',
                'updated_at' => '2023-05-04 07:09:52',
                'deleted_at' => NULL,
            ),
            136 => 
            array (
                'no_struk_transaksi' => '23.05.149',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.027',
                'created_at' => '2023-05-04 07:13:10',
                'updated_at' => '2023-05-04 07:13:10',
                'deleted_at' => NULL,
            ),
            137 => 
            array (
                'no_struk_transaksi' => '23.05.150',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.018',
                'created_at' => '2023-05-04 07:26:38',
                'updated_at' => '2023-05-04 07:26:38',
                'deleted_at' => NULL,
            ),
            138 => 
            array (
                'no_struk_transaksi' => '23.05.151',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.028',
                'created_at' => '2023-05-04 07:27:06',
                'updated_at' => '2023-05-04 07:27:06',
                'deleted_at' => NULL,
            ),
            139 => 
            array (
                'no_struk_transaksi' => '23.05.152',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.021',
                'created_at' => '2023-05-04 07:28:23',
                'updated_at' => '2023-05-04 07:28:23',
                'deleted_at' => NULL,
            ),
            140 => 
            array (
                'no_struk_transaksi' => '23.05.153',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.028',
                'created_at' => '2023-05-04 07:29:28',
                'updated_at' => '2023-05-04 07:29:28',
                'deleted_at' => NULL,
            ),
            141 => 
            array (
                'no_struk_transaksi' => '23.05.154',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.027',
                'created_at' => '2023-05-04 07:30:19',
                'updated_at' => '2023-05-04 07:30:19',
                'deleted_at' => NULL,
            ),
            142 => 
            array (
                'no_struk_transaksi' => '23.05.155',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.028',
                'created_at' => '2023-05-04 07:32:05',
                'updated_at' => '2023-05-04 07:32:05',
                'deleted_at' => NULL,
            ),
            143 => 
            array (
                'no_struk_transaksi' => '23.05.156',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.028',
                'created_at' => '2023-05-04 07:32:37',
                'updated_at' => '2023-05-04 07:32:37',
                'deleted_at' => NULL,
            ),
            144 => 
            array (
                'no_struk_transaksi' => '23.05.157',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.028',
                'created_at' => '2023-05-04 07:33:37',
                'updated_at' => '2023-05-04 07:33:37',
                'deleted_at' => NULL,
            ),
            145 => 
            array (
                'no_struk_transaksi' => '23.05.158',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.024',
                'created_at' => '2023-05-04 07:36:53',
                'updated_at' => '2023-05-04 07:36:53',
                'deleted_at' => NULL,
            ),
            146 => 
            array (
                'no_struk_transaksi' => '23.05.159',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.025',
                'created_at' => '2023-05-04 07:47:39',
                'updated_at' => '2023-05-04 07:47:39',
                'deleted_at' => NULL,
            ),
            147 => 
            array (
                'no_struk_transaksi' => '23.05.160',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.036',
                'created_at' => '2023-05-04 07:50:37',
                'updated_at' => '2023-05-04 07:50:37',
                'deleted_at' => NULL,
            ),
            148 => 
            array (
                'no_struk_transaksi' => '23.05.161',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.036',
                'created_at' => '2023-05-04 07:52:56',
                'updated_at' => '2023-05-04 07:52:56',
                'deleted_at' => NULL,
            ),
            149 => 
            array (
                'no_struk_transaksi' => '23.05.162',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.028',
                'created_at' => '2023-05-04 07:54:12',
                'updated_at' => '2023-05-04 07:54:12',
                'deleted_at' => NULL,
            ),
            150 => 
            array (
                'no_struk_transaksi' => '23.05.163',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.024',
                'created_at' => '2023-05-04 10:08:13',
                'updated_at' => '2023-05-04 10:08:13',
                'deleted_at' => NULL,
            ),
            151 => 
            array (
                'no_struk_transaksi' => '23.05.164',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.028',
                'created_at' => '2023-05-04 10:22:32',
                'updated_at' => '2023-05-04 10:22:32',
                'deleted_at' => NULL,
            ),
            152 => 
            array (
                'no_struk_transaksi' => '23.05.165',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.028',
                'created_at' => '2023-05-04 10:23:16',
                'updated_at' => '2023-05-04 10:23:16',
                'deleted_at' => NULL,
            ),
            153 => 
            array (
                'no_struk_transaksi' => '23.05.166',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.027',
                'created_at' => '2023-05-04 10:24:03',
                'updated_at' => '2023-05-04 10:24:03',
                'deleted_at' => NULL,
            ),
            154 => 
            array (
                'no_struk_transaksi' => '23.05.167',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.025',
                'created_at' => '2023-05-04 10:25:47',
                'updated_at' => '2023-05-04 10:25:47',
                'deleted_at' => NULL,
            ),
            155 => 
            array (
                'no_struk_transaksi' => '23.05.168',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.016',
                'created_at' => '2023-05-04 11:05:51',
                'updated_at' => '2023-05-04 11:05:51',
                'deleted_at' => NULL,
            ),
            156 => 
            array (
                'no_struk_transaksi' => '23.05.169',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.033',
                'created_at' => '2023-05-04 11:06:44',
                'updated_at' => '2023-05-04 11:06:44',
                'deleted_at' => NULL,
            ),
            157 => 
            array (
                'no_struk_transaksi' => '23.05.170',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.016',
                'created_at' => '2023-05-04 11:08:40',
                'updated_at' => '2023-05-04 11:08:40',
                'deleted_at' => NULL,
            ),
            158 => 
            array (
                'no_struk_transaksi' => '23.05.171',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.033',
                'created_at' => '2023-05-04 11:09:37',
                'updated_at' => '2023-05-04 11:09:37',
                'deleted_at' => NULL,
            ),
            159 => 
            array (
                'no_struk_transaksi' => '23.05.172',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.036',
                'created_at' => '2023-05-04 11:13:07',
                'updated_at' => '2023-05-04 11:13:07',
                'deleted_at' => NULL,
            ),
            160 => 
            array (
                'no_struk_transaksi' => '23.05.173',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.036',
                'created_at' => '2023-05-04 11:17:01',
                'updated_at' => '2023-05-04 11:17:01',
                'deleted_at' => NULL,
            ),
            161 => 
            array (
                'no_struk_transaksi' => '23.05.174',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.013',
                'created_at' => '2023-05-04 11:19:26',
                'updated_at' => '2023-05-04 11:19:26',
                'deleted_at' => NULL,
            ),
            162 => 
            array (
                'no_struk_transaksi' => '23.05.175',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.013',
                'created_at' => '2023-05-04 11:20:51',
                'updated_at' => '2023-05-04 11:20:51',
                'deleted_at' => NULL,
            ),
            163 => 
            array (
                'no_struk_transaksi' => '23.05.176',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.013',
                'created_at' => '2023-05-04 11:23:27',
                'updated_at' => '2023-05-04 11:23:27',
                'deleted_at' => NULL,
            ),
            164 => 
            array (
                'no_struk_transaksi' => '23.05.177',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.013',
                'created_at' => '2023-05-04 11:23:51',
                'updated_at' => '2023-05-04 11:23:51',
                'deleted_at' => NULL,
            ),
            165 => 
            array (
                'no_struk_transaksi' => '23.05.178',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.013',
                'created_at' => '2023-05-04 11:24:12',
                'updated_at' => '2023-05-04 11:24:12',
                'deleted_at' => NULL,
            ),
            166 => 
            array (
                'no_struk_transaksi' => '23.05.179',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.013',
                'created_at' => '2023-05-04 11:25:43',
                'updated_at' => '2023-05-04 11:25:43',
                'deleted_at' => NULL,
            ),
            167 => 
            array (
                'no_struk_transaksi' => '23.05.180',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.013',
                'created_at' => '2023-05-04 11:26:08',
                'updated_at' => '2023-05-04 11:26:08',
                'deleted_at' => NULL,
            ),
            168 => 
            array (
                'no_struk_transaksi' => '23.05.181',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.013',
                'created_at' => '2023-05-04 11:29:11',
                'updated_at' => '2023-05-04 11:29:11',
                'deleted_at' => NULL,
            ),
            169 => 
            array (
                'no_struk_transaksi' => '23.05.182',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.021',
                'created_at' => '2023-05-04 12:28:51',
                'updated_at' => '2023-05-04 12:28:51',
                'deleted_at' => NULL,
            ),
            170 => 
            array (
                'no_struk_transaksi' => '23.05.183',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.016',
                'created_at' => '2023-05-04 12:37:28',
                'updated_at' => '2023-05-04 12:37:28',
                'deleted_at' => NULL,
            ),
            171 => 
            array (
                'no_struk_transaksi' => '23.05.184',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.018',
                'created_at' => '2023-05-04 12:43:16',
                'updated_at' => '2023-05-04 12:43:16',
                'deleted_at' => NULL,
            ),
            172 => 
            array (
                'no_struk_transaksi' => '23.05.185',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-05-04 12:44:41',
                'updated_at' => '2023-05-04 12:44:41',
                'deleted_at' => NULL,
            ),
            173 => 
            array (
                'no_struk_transaksi' => '23.05.186',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-05-04 12:45:09',
                'updated_at' => '2023-05-04 12:45:09',
                'deleted_at' => NULL,
            ),
            174 => 
            array (
                'no_struk_transaksi' => '23.05.187',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.017',
                'created_at' => '2023-05-04 12:46:16',
                'updated_at' => '2023-05-04 12:46:16',
                'deleted_at' => NULL,
            ),
            175 => 
            array (
                'no_struk_transaksi' => '23.05.188',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-05-04 12:48:23',
                'updated_at' => '2023-05-04 12:48:23',
                'deleted_at' => NULL,
            ),
            176 => 
            array (
                'no_struk_transaksi' => '23.05.189',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.013',
                'created_at' => '2023-05-04 12:50:05',
                'updated_at' => '2023-05-04 12:50:05',
                'deleted_at' => NULL,
            ),
            177 => 
            array (
                'no_struk_transaksi' => '23.05.190',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.016',
                'created_at' => '2023-05-04 12:51:24',
                'updated_at' => '2023-05-04 12:51:24',
                'deleted_at' => NULL,
            ),
            178 => 
            array (
                'no_struk_transaksi' => '23.05.191',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.016',
                'created_at' => '2023-05-04 12:52:18',
                'updated_at' => '2023-05-04 12:52:18',
                'deleted_at' => NULL,
            ),
            179 => 
            array (
                'no_struk_transaksi' => '23.05.192',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.019',
                'created_at' => '2023-05-04 12:57:43',
                'updated_at' => '2023-05-04 12:57:43',
                'deleted_at' => NULL,
            ),
            180 => 
            array (
                'no_struk_transaksi' => '23.05.193',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.019',
                'created_at' => '2023-05-04 13:01:36',
                'updated_at' => '2023-05-04 13:01:36',
                'deleted_at' => NULL,
            ),
            181 => 
            array (
                'no_struk_transaksi' => '23.05.194',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.018',
                'created_at' => '2023-05-04 13:04:18',
                'updated_at' => '2023-05-04 13:04:18',
                'deleted_at' => NULL,
            ),
            182 => 
            array (
                'no_struk_transaksi' => '23.05.195',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.025',
                'created_at' => '2023-05-04 13:07:31',
                'updated_at' => '2023-05-04 13:07:31',
                'deleted_at' => NULL,
            ),
            183 => 
            array (
                'no_struk_transaksi' => '23.05.196',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.025',
                'created_at' => '2023-05-04 13:07:51',
                'updated_at' => '2023-05-04 13:07:51',
                'deleted_at' => NULL,
            ),
            184 => 
            array (
                'no_struk_transaksi' => '23.05.197',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.019',
                'created_at' => '2023-05-05 00:28:34',
                'updated_at' => '2023-05-05 00:28:34',
                'deleted_at' => NULL,
            ),
            185 => 
            array (
                'no_struk_transaksi' => '23.05.198',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.019',
                'created_at' => '2023-05-05 00:30:23',
                'updated_at' => '2023-05-05 00:30:23',
                'deleted_at' => NULL,
            ),
            186 => 
            array (
                'no_struk_transaksi' => '23.05.199',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.013',
                'created_at' => '2023-05-05 00:31:41',
                'updated_at' => '2023-05-05 00:31:41',
                'deleted_at' => NULL,
            ),
            187 => 
            array (
                'no_struk_transaksi' => '23.05.200',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.019',
                'created_at' => '2023-05-05 00:31:57',
                'updated_at' => '2023-05-05 00:31:57',
                'deleted_at' => NULL,
            ),
            188 => 
            array (
                'no_struk_transaksi' => '23.05.201',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.023',
                'created_at' => '2023-05-05 00:32:18',
                'updated_at' => '2023-05-05 00:32:18',
                'deleted_at' => NULL,
            ),
            189 => 
            array (
                'no_struk_transaksi' => '23.05.202',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.021',
                'created_at' => '2023-05-05 00:33:48',
                'updated_at' => '2023-05-05 00:33:48',
                'deleted_at' => NULL,
            ),
            190 => 
            array (
                'no_struk_transaksi' => '23.05.203',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.017',
                'created_at' => '2023-05-05 00:35:14',
                'updated_at' => '2023-05-05 00:35:14',
                'deleted_at' => NULL,
            ),
            191 => 
            array (
                'no_struk_transaksi' => '23.05.204',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.017',
                'created_at' => '2023-05-05 00:39:43',
                'updated_at' => '2023-05-05 00:39:43',
                'deleted_at' => NULL,
            ),
            192 => 
            array (
                'no_struk_transaksi' => '23.05.205',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.016',
                'created_at' => '2023-05-05 00:41:45',
                'updated_at' => '2023-05-05 00:41:45',
                'deleted_at' => NULL,
            ),
            193 => 
            array (
                'no_struk_transaksi' => '23.05.206',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.017',
                'created_at' => '2023-05-05 00:49:36',
                'updated_at' => '2023-05-05 00:49:36',
                'deleted_at' => NULL,
            ),
            194 => 
            array (
                'no_struk_transaksi' => '23.05.207',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.017',
                'created_at' => '2023-05-05 00:50:17',
                'updated_at' => '2023-05-05 00:50:17',
                'deleted_at' => NULL,
            ),
            195 => 
            array (
                'no_struk_transaksi' => '23.05.208',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.017',
                'created_at' => '2023-05-05 00:53:14',
                'updated_at' => '2023-05-05 00:53:14',
                'deleted_at' => NULL,
            ),
            196 => 
            array (
                'no_struk_transaksi' => '23.05.209',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.017',
                'created_at' => '2023-05-05 00:57:56',
                'updated_at' => '2023-05-05 00:57:56',
                'deleted_at' => NULL,
            ),
            197 => 
            array (
                'no_struk_transaksi' => '23.05.210',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.032',
                'created_at' => '2023-05-05 01:02:31',
                'updated_at' => '2023-05-05 01:02:31',
                'deleted_at' => NULL,
            ),
            198 => 
            array (
                'no_struk_transaksi' => '23.05.211',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.026',
                'created_at' => '2023-05-05 13:28:38',
                'updated_at' => '2023-05-05 13:28:38',
                'deleted_at' => NULL,
            ),
            199 => 
            array (
                'no_struk_transaksi' => '23.05.212',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.026',
                'created_at' => '2023-05-05 13:28:58',
                'updated_at' => '2023-05-05 13:28:58',
                'deleted_at' => NULL,
            ),
            200 => 
            array (
                'no_struk_transaksi' => '23.05.213',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.023',
                'created_at' => '2023-05-05 13:29:15',
                'updated_at' => '2023-05-05 13:29:15',
                'deleted_at' => NULL,
            ),
            201 => 
            array (
                'no_struk_transaksi' => '23.05.214',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.033',
                'created_at' => '2023-05-05 13:31:21',
                'updated_at' => '2023-05-05 13:31:21',
                'deleted_at' => NULL,
            ),
            202 => 
            array (
                'no_struk_transaksi' => '23.05.215',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.030',
                'created_at' => '2023-05-05 13:33:07',
                'updated_at' => '2023-05-05 13:33:07',
                'deleted_at' => NULL,
            ),
            203 => 
            array (
                'no_struk_transaksi' => '23.05.216',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.026',
                'created_at' => '2023-05-05 13:36:41',
                'updated_at' => '2023-05-05 13:36:41',
                'deleted_at' => NULL,
            ),
            204 => 
            array (
                'no_struk_transaksi' => '23.05.217',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.026',
                'created_at' => '2023-05-05 13:37:37',
                'updated_at' => '2023-05-05 13:37:37',
                'deleted_at' => NULL,
            ),
            205 => 
            array (
                'no_struk_transaksi' => '23.05.218',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.026',
                'created_at' => '2023-05-05 13:40:53',
                'updated_at' => '2023-05-05 13:40:53',
                'deleted_at' => NULL,
            ),
            206 => 
            array (
                'no_struk_transaksi' => '23.05.219',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.026',
                'created_at' => '2023-05-05 13:42:45',
                'updated_at' => '2023-05-05 13:42:45',
                'deleted_at' => NULL,
            ),
            207 => 
            array (
                'no_struk_transaksi' => '23.05.220',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.033',
                'created_at' => '2023-05-05 13:46:45',
                'updated_at' => '2023-05-05 13:46:45',
                'deleted_at' => NULL,
            ),
            208 => 
            array (
                'no_struk_transaksi' => '23.05.221',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.027',
                'created_at' => '2023-05-05 13:50:27',
                'updated_at' => '2023-05-05 13:50:27',
                'deleted_at' => NULL,
            ),
            209 => 
            array (
                'no_struk_transaksi' => '23.05.222',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.017',
                'created_at' => '2023-05-05 13:53:27',
                'updated_at' => '2023-05-05 13:53:27',
                'deleted_at' => NULL,
            ),
            210 => 
            array (
                'no_struk_transaksi' => '23.05.223',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.017',
                'created_at' => '2023-05-05 13:53:43',
                'updated_at' => '2023-05-05 13:53:43',
                'deleted_at' => NULL,
            ),
            211 => 
            array (
                'no_struk_transaksi' => '23.05.224',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.019',
                'created_at' => '2023-05-05 13:54:06',
                'updated_at' => '2023-05-05 13:54:06',
                'deleted_at' => NULL,
            ),
            212 => 
            array (
                'no_struk_transaksi' => '23.05.225',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.037',
                'created_at' => '2023-05-05 13:54:24',
                'updated_at' => '2023-05-05 13:54:24',
                'deleted_at' => NULL,
            ),
            213 => 
            array (
                'no_struk_transaksi' => '23.05.226',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.018',
                'created_at' => '2023-05-05 13:55:45',
                'updated_at' => '2023-05-05 13:55:45',
                'deleted_at' => NULL,
            ),
            214 => 
            array (
                'no_struk_transaksi' => '23.05.227',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.018',
                'created_at' => '2023-05-05 13:55:55',
                'updated_at' => '2023-05-05 13:55:55',
                'deleted_at' => NULL,
            ),
            215 => 
            array (
                'no_struk_transaksi' => '23.05.228',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.019',
                'created_at' => '2023-05-05 13:59:15',
                'updated_at' => '2023-05-05 13:59:15',
                'deleted_at' => NULL,
            ),
            216 => 
            array (
                'no_struk_transaksi' => '23.05.229',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.019',
                'created_at' => '2023-05-05 13:59:27',
                'updated_at' => '2023-05-05 13:59:27',
                'deleted_at' => NULL,
            ),
            217 => 
            array (
                'no_struk_transaksi' => '23.05.230',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.019',
                'created_at' => '2023-05-05 14:02:08',
                'updated_at' => '2023-05-05 14:02:08',
                'deleted_at' => NULL,
            ),
            218 => 
            array (
                'no_struk_transaksi' => '23.05.231',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.019',
                'created_at' => '2023-05-05 14:02:18',
                'updated_at' => '2023-05-05 14:02:18',
                'deleted_at' => NULL,
            ),
            219 => 
            array (
                'no_struk_transaksi' => '23.05.232',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.016',
                'created_at' => '2023-05-05 14:04:33',
                'updated_at' => '2023-05-05 14:04:33',
                'deleted_at' => NULL,
            ),
            220 => 
            array (
                'no_struk_transaksi' => '23.05.233',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.018',
                'created_at' => '2023-05-05 14:05:37',
                'updated_at' => '2023-05-05 14:05:37',
                'deleted_at' => NULL,
            ),
            221 => 
            array (
                'no_struk_transaksi' => '23.05.234',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.018',
                'created_at' => '2023-05-05 14:05:48',
                'updated_at' => '2023-05-05 14:05:48',
                'deleted_at' => NULL,
            ),
            222 => 
            array (
                'no_struk_transaksi' => '23.05.235',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.018',
                'created_at' => '2023-05-05 14:08:12',
                'updated_at' => '2023-05-05 14:08:12',
                'deleted_at' => NULL,
            ),
            223 => 
            array (
                'no_struk_transaksi' => '23.05.236',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.018',
                'created_at' => '2023-05-05 14:08:22',
                'updated_at' => '2023-05-05 14:08:22',
                'deleted_at' => NULL,
            ),
            224 => 
            array (
                'no_struk_transaksi' => '23.05.237',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.018',
                'created_at' => '2023-05-05 14:19:00',
                'updated_at' => '2023-05-05 14:19:00',
                'deleted_at' => NULL,
            ),
            225 => 
            array (
                'no_struk_transaksi' => '23.05.238',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.018',
                'created_at' => '2023-05-05 14:19:16',
                'updated_at' => '2023-05-05 14:19:16',
                'deleted_at' => NULL,
            ),
            226 => 
            array (
                'no_struk_transaksi' => '23.05.239',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.002',
                'created_at' => '2023-05-05 14:23:23',
                'updated_at' => '2023-05-05 14:23:23',
                'deleted_at' => NULL,
            ),
            227 => 
            array (
                'no_struk_transaksi' => '23.05.240',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.002',
                'created_at' => '2023-05-05 14:23:34',
                'updated_at' => '2023-05-05 14:23:34',
                'deleted_at' => NULL,
            ),
            228 => 
            array (
                'no_struk_transaksi' => '23.05.241',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.002',
                'created_at' => '2023-05-05 14:36:39',
                'updated_at' => '2023-05-05 14:36:39',
                'deleted_at' => NULL,
            ),
            229 => 
            array (
                'no_struk_transaksi' => '23.05.242',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.002',
                'created_at' => '2023-05-05 14:36:53',
                'updated_at' => '2023-05-05 14:36:53',
                'deleted_at' => NULL,
            ),
            230 => 
            array (
                'no_struk_transaksi' => '23.05.243',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.002',
                'created_at' => '2023-05-05 23:05:48',
                'updated_at' => '2023-05-05 23:05:48',
                'deleted_at' => NULL,
            ),
            231 => 
            array (
                'no_struk_transaksi' => '23.05.244',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.002',
                'created_at' => '2023-05-05 23:06:23',
                'updated_at' => '2023-05-05 23:06:23',
                'deleted_at' => NULL,
            ),
            232 => 
            array (
                'no_struk_transaksi' => '23.05.245',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.002',
                'created_at' => '2023-05-05 23:06:58',
                'updated_at' => '2023-05-05 23:06:58',
                'deleted_at' => NULL,
            ),
            233 => 
            array (
                'no_struk_transaksi' => '23.05.246',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.002',
                'created_at' => '2023-05-06 20:53:23',
                'updated_at' => '2023-05-06 20:53:23',
                'deleted_at' => NULL,
            ),
            234 => 
            array (
                'no_struk_transaksi' => '23.05.247',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.002',
                'created_at' => '2023-05-06 22:21:16',
                'updated_at' => '2023-05-06 22:21:16',
                'deleted_at' => NULL,
            ),
            235 => 
            array (
                'no_struk_transaksi' => '23.05.248',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.013',
                'created_at' => '2023-05-07 22:01:25',
                'updated_at' => '2023-05-07 22:01:25',
                'deleted_at' => NULL,
            ),
            236 => 
            array (
                'no_struk_transaksi' => '23.05.249',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.002',
                'created_at' => '2023-05-08 11:12:47',
                'updated_at' => '2023-05-08 11:12:47',
                'deleted_at' => NULL,
            ),
            237 => 
            array (
                'no_struk_transaksi' => '23.05.250',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.025',
                'created_at' => '2023-05-08 17:00:39',
                'updated_at' => '2023-05-08 17:00:39',
                'deleted_at' => NULL,
            ),
            238 => 
            array (
                'no_struk_transaksi' => '23.05.251',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.002',
                'created_at' => '2023-05-08 17:31:43',
                'updated_at' => '2023-05-08 17:31:43',
                'deleted_at' => NULL,
            ),
            239 => 
            array (
                'no_struk_transaksi' => '23.05.252',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.025',
                'created_at' => '2023-05-08 17:32:03',
                'updated_at' => '2023-05-08 17:32:03',
                'deleted_at' => NULL,
            ),
            240 => 
            array (
                'no_struk_transaksi' => '23.05.253',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-05-09 10:25:41',
                'updated_at' => '2023-05-09 10:25:41',
                'deleted_at' => NULL,
            ),
            241 => 
            array (
                'no_struk_transaksi' => '23.05.254',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.010',
                'created_at' => '2023-05-09 10:30:05',
                'updated_at' => '2023-05-09 10:30:05',
                'deleted_at' => NULL,
            ),
            242 => 
            array (
                'no_struk_transaksi' => '23.05.255',
                'jenis_transaksi' => 'transaksi-presensi-gym',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.034',
                'created_at' => '2023-05-19 07:48:19',
                'updated_at' => '2023-05-19 07:48:19',
                'deleted_at' => NULL,
            ),
            243 => 
            array (
                'no_struk_transaksi' => '23.05.256',
                'jenis_transaksi' => 'transaksi-presensi-gym',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.034',
                'created_at' => '2023-05-19 07:52:58',
                'updated_at' => '2023-05-19 07:52:58',
                'deleted_at' => NULL,
            ),
            244 => 
            array (
                'no_struk_transaksi' => '23.05.257',
                'jenis_transaksi' => 'transaksi-presensi-gym',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.034',
                'created_at' => '2023-05-19 07:55:09',
                'updated_at' => '2023-05-19 07:55:09',
                'deleted_at' => NULL,
            ),
            245 => 
            array (
                'no_struk_transaksi' => '23.05.258',
                'jenis_transaksi' => 'transaksi-presensi-gym',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.004',
                'created_at' => '2023-05-19 08:05:08',
                'updated_at' => '2023-05-19 08:05:08',
                'deleted_at' => NULL,
            ),
            246 => 
            array (
                'no_struk_transaksi' => '23.05.259',
                'jenis_transaksi' => 'transaksi-presensi-gym',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.006',
                'created_at' => '2023-05-19 08:05:35',
                'updated_at' => '2023-05-19 08:05:35',
                'deleted_at' => NULL,
            ),
            247 => 
            array (
                'no_struk_transaksi' => '23.05.260',
                'jenis_transaksi' => 'transaksi-presensi-gym',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.004',
                'created_at' => '2023-05-19 08:10:28',
                'updated_at' => '2023-05-19 08:10:28',
                'deleted_at' => NULL,
            ),
            248 => 
            array (
                'no_struk_transaksi' => '23.05.261',
                'jenis_transaksi' => 'transaksi-presensi-gym',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.005',
                'created_at' => '2023-05-19 08:13:11',
                'updated_at' => '2023-05-19 08:13:11',
                'deleted_at' => NULL,
            ),
            249 => 
            array (
                'no_struk_transaksi' => '23.05.262',
                'jenis_transaksi' => 'transaksi-presensi-gym',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.034',
                'created_at' => '2023-05-19 08:20:07',
                'updated_at' => '2023-05-19 08:20:07',
                'deleted_at' => NULL,
            ),
            250 => 
            array (
                'no_struk_transaksi' => '23.05.263',
                'jenis_transaksi' => 'transaksi-presensi-gym',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.034',
                'created_at' => '2023-05-19 08:22:05',
                'updated_at' => '2023-05-19 08:22:05',
                'deleted_at' => NULL,
            ),
            251 => 
            array (
                'no_struk_transaksi' => '23.05.264',
                'jenis_transaksi' => 'transaksi-presensi-gym',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.006',
                'created_at' => '2023-05-19 08:24:45',
                'updated_at' => '2023-05-19 08:24:45',
                'deleted_at' => NULL,
            ),
            252 => 
            array (
                'no_struk_transaksi' => '23.05.265',
                'jenis_transaksi' => 'transaksi-presensi-gym',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.005',
                'created_at' => '2023-05-19 08:29:58',
                'updated_at' => '2023-05-19 08:29:58',
                'deleted_at' => NULL,
            ),
            253 => 
            array (
                'no_struk_transaksi' => '23.05.266',
                'jenis_transaksi' => 'transaksi-presensi-gym',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.005',
                'created_at' => '2023-05-19 08:30:21',
                'updated_at' => '2023-05-19 08:30:21',
                'deleted_at' => NULL,
            ),
            254 => 
            array (
                'no_struk_transaksi' => '23.05.267',
                'jenis_transaksi' => 'transaksi-presensi-gym',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.034',
                'created_at' => '2023-05-19 08:35:32',
                'updated_at' => '2023-05-19 08:35:32',
                'deleted_at' => NULL,
            ),
            255 => 
            array (
                'no_struk_transaksi' => '23.05.268',
                'jenis_transaksi' => 'transaksi-presensi-gym',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.006',
                'created_at' => '2023-05-19 08:37:22',
                'updated_at' => '2023-05-19 08:37:22',
                'deleted_at' => NULL,
            ),
            256 => 
            array (
                'no_struk_transaksi' => '23.05.269',
                'jenis_transaksi' => 'transaksi-presensi-gym',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.034',
                'created_at' => '2023-05-19 08:39:57',
                'updated_at' => '2023-05-19 08:39:57',
                'deleted_at' => NULL,
            ),
            257 => 
            array (
                'no_struk_transaksi' => '23.05.270',
                'jenis_transaksi' => 'transaksi-presensi-gym',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.006',
                'created_at' => '2023-05-19 08:40:52',
                'updated_at' => '2023-05-19 08:40:52',
                'deleted_at' => NULL,
            ),
            258 => 
            array (
                'no_struk_transaksi' => '23.05.271',
                'jenis_transaksi' => 'transaksi-presensi-gym',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.034',
                'created_at' => '2023-05-19 08:42:18',
                'updated_at' => '2023-05-19 08:42:18',
                'deleted_at' => NULL,
            ),
            259 => 
            array (
                'no_struk_transaksi' => '23.05.272',
                'jenis_transaksi' => 'transaksi-presensi-gym',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.032',
                'created_at' => '2023-05-19 08:43:35',
                'updated_at' => '2023-05-19 08:43:35',
                'deleted_at' => NULL,
            ),
            260 => 
            array (
                'no_struk_transaksi' => '23.05.273',
                'jenis_transaksi' => 'transaksi-presensi-gym',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.004',
                'created_at' => '2023-05-19 08:46:17',
                'updated_at' => '2023-05-19 08:46:17',
                'deleted_at' => NULL,
            ),
            261 => 
            array (
                'no_struk_transaksi' => '23.05.274',
                'jenis_transaksi' => 'transaksi-presensi-gym',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.034',
                'created_at' => '2023-05-19 08:46:33',
                'updated_at' => '2023-05-19 08:46:33',
                'deleted_at' => NULL,
            ),
            262 => 
            array (
                'no_struk_transaksi' => '23.05.275',
                'jenis_transaksi' => 'transaksi-presensi-gym',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.034',
                'created_at' => '2023-05-19 08:47:34',
                'updated_at' => '2023-05-19 08:47:34',
                'deleted_at' => NULL,
            ),
            263 => 
            array (
                'no_struk_transaksi' => '23.05.276',
                'jenis_transaksi' => 'transaksi-presensi-gym',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.032',
                'created_at' => '2023-05-19 08:48:36',
                'updated_at' => '2023-05-19 08:48:36',
                'deleted_at' => NULL,
            ),
            264 => 
            array (
                'no_struk_transaksi' => '23.05.277',
                'jenis_transaksi' => 'transaksi-presensi-gym',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.034',
                'created_at' => '2023-05-19 09:01:02',
                'updated_at' => '2023-05-19 09:01:02',
                'deleted_at' => NULL,
            ),
            265 => 
            array (
                'no_struk_transaksi' => '23.05.278',
                'jenis_transaksi' => 'transaksi-presensi-gym',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.034',
                'created_at' => '2023-05-19 09:01:18',
                'updated_at' => '2023-05-19 09:01:18',
                'deleted_at' => NULL,
            ),
            266 => 
            array (
                'no_struk_transaksi' => '23.05.279',
                'jenis_transaksi' => 'transaksi-presensi-gym',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.032',
                'created_at' => '2023-05-19 09:02:11',
                'updated_at' => '2023-05-19 09:02:11',
                'deleted_at' => NULL,
            ),
            267 => 
            array (
                'no_struk_transaksi' => '23.05.280',
                'jenis_transaksi' => 'transaksi-presensi-gym',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.034',
                'created_at' => '2023-05-19 09:03:18',
                'updated_at' => '2023-05-19 09:03:18',
                'deleted_at' => NULL,
            ),
            268 => 
            array (
                'no_struk_transaksi' => '23.05.281',
                'jenis_transaksi' => 'transaksi-presensi-kelas',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.032',
                'created_at' => '2023-05-19 09:10:38',
                'updated_at' => '2023-05-19 09:10:38',
                'deleted_at' => NULL,
            ),
            269 => 
            array (
                'no_struk_transaksi' => '23.05.282',
                'jenis_transaksi' => 'transaksi-presensi-kelas',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.032',
                'created_at' => '2023-05-19 09:24:27',
                'updated_at' => '2023-05-19 09:24:27',
                'deleted_at' => NULL,
            ),
            270 => 
            array (
                'no_struk_transaksi' => '23.05.283',
                'jenis_transaksi' => 'transaksi-presensi-kelas',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.033',
                'created_at' => '2023-05-19 10:15:29',
                'updated_at' => '2023-05-19 10:15:29',
                'deleted_at' => NULL,
            ),
            271 => 
            array (
                'no_struk_transaksi' => '23.05.284',
                'jenis_transaksi' => 'transaksi-presensi-kelas-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.034',
                'created_at' => '2023-05-19 10:21:25',
                'updated_at' => '2023-05-19 10:21:25',
                'deleted_at' => NULL,
            ),
            272 => 
            array (
                'no_struk_transaksi' => '23.05.285',
                'jenis_transaksi' => 'transaksi-presensi-kelas',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.033',
                'created_at' => '2023-05-19 10:24:11',
                'updated_at' => '2023-05-19 10:24:11',
                'deleted_at' => NULL,
            ),
            273 => 
            array (
                'no_struk_transaksi' => '23.05.286',
                'jenis_transaksi' => 'transaksi-presensi-kelas-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.034',
                'created_at' => '2023-05-19 10:26:00',
                'updated_at' => '2023-05-19 10:26:00',
                'deleted_at' => NULL,
            ),
            274 => 
            array (
                'no_struk_transaksi' => '23.05.287',
                'jenis_transaksi' => 'transaksi-presensi-kelas',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.033',
                'created_at' => '2023-05-19 10:34:21',
                'updated_at' => '2023-05-19 10:34:21',
                'deleted_at' => NULL,
            ),
            275 => 
            array (
                'no_struk_transaksi' => '23.05.288',
                'jenis_transaksi' => 'transaksi-presensi-kelas',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.032',
                'created_at' => '2023-05-19 10:47:50',
                'updated_at' => '2023-05-19 10:47:50',
                'deleted_at' => NULL,
            ),
            276 => 
            array (
                'no_struk_transaksi' => '23.05.289',
                'jenis_transaksi' => 'transaksi-presensi-kelas',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.033',
                'created_at' => '2023-05-19 10:49:28',
                'updated_at' => '2023-05-19 10:49:28',
                'deleted_at' => NULL,
            ),
            277 => 
            array (
                'no_struk_transaksi' => '23.05.290',
                'jenis_transaksi' => 'transaksi-presensi-kelas-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.034',
                'created_at' => '2023-05-19 10:50:40',
                'updated_at' => '2023-05-19 10:50:40',
                'deleted_at' => NULL,
            ),
            278 => 
            array (
                'no_struk_transaksi' => '23.05.291',
                'jenis_transaksi' => 'transaksi-presensi-kelas',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.032',
                'created_at' => '2023-05-19 10:53:38',
                'updated_at' => '2023-05-19 10:53:38',
                'deleted_at' => NULL,
            ),
            279 => 
            array (
                'no_struk_transaksi' => '23.05.292',
                'jenis_transaksi' => 'transaksi-presensi-kelas',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.033',
                'created_at' => '2023-05-19 10:54:00',
                'updated_at' => '2023-05-19 10:54:00',
                'deleted_at' => NULL,
            ),
            280 => 
            array (
                'no_struk_transaksi' => '23.05.293',
                'jenis_transaksi' => 'transaksi-presensi-kelas-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.034',
                'created_at' => '2023-05-19 10:54:21',
                'updated_at' => '2023-05-19 10:54:21',
                'deleted_at' => NULL,
            ),
            281 => 
            array (
                'no_struk_transaksi' => '23.05.294',
                'jenis_transaksi' => 'transaksi-presensi-kelas-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.034',
                'created_at' => '2023-05-19 10:55:04',
                'updated_at' => '2023-05-19 10:55:04',
                'deleted_at' => NULL,
            ),
            282 => 
            array (
                'no_struk_transaksi' => '23.05.295',
                'jenis_transaksi' => 'transaksi-presensi-kelas',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.033',
                'created_at' => '2023-05-19 10:58:13',
                'updated_at' => '2023-05-19 10:58:13',
                'deleted_at' => NULL,
            ),
            283 => 
            array (
                'no_struk_transaksi' => '23.05.296',
                'jenis_transaksi' => 'transaksi-presensi-kelas-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.034',
                'created_at' => '2023-05-19 10:58:30',
                'updated_at' => '2023-05-19 10:58:30',
                'deleted_at' => NULL,
            ),
            284 => 
            array (
                'no_struk_transaksi' => '23.05.297',
                'jenis_transaksi' => 'transaksi-presensi-kelas',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.032',
                'created_at' => '2023-05-19 11:40:32',
                'updated_at' => '2023-05-19 11:40:32',
                'deleted_at' => NULL,
            ),
            285 => 
            array (
                'no_struk_transaksi' => '23.05.298',
                'jenis_transaksi' => 'transaksi-presensi-kelas',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.032',
                'created_at' => '2023-05-19 11:41:45',
                'updated_at' => '2023-05-19 11:41:45',
                'deleted_at' => NULL,
            ),
            286 => 
            array (
                'no_struk_transaksi' => '23.05.299',
                'jenis_transaksi' => 'transaksi-presensi-kelas-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.034',
                'created_at' => '2023-05-19 11:42:09',
                'updated_at' => '2023-05-19 11:42:09',
                'deleted_at' => NULL,
            ),
            287 => 
            array (
                'no_struk_transaksi' => '23.05.300',
                'jenis_transaksi' => 'transaksi-presensi-kelas',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.033',
                'created_at' => '2023-05-19 11:43:30',
                'updated_at' => '2023-05-19 11:43:30',
                'deleted_at' => NULL,
            ),
            288 => 
            array (
                'no_struk_transaksi' => '23.05.301',
                'jenis_transaksi' => 'transaksi-presensi-kelas',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.032',
                'created_at' => '2023-05-19 11:44:28',
                'updated_at' => '2023-05-19 11:44:28',
                'deleted_at' => NULL,
            ),
            289 => 
            array (
                'no_struk_transaksi' => '23.05.302',
                'jenis_transaksi' => 'transaksi-presensi-kelas',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.032',
                'created_at' => '2023-05-19 11:46:47',
                'updated_at' => '2023-05-19 11:46:47',
                'deleted_at' => NULL,
            ),
            290 => 
            array (
                'no_struk_transaksi' => '23.05.303',
                'jenis_transaksi' => 'transaksi-presensi-kelas-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.034',
                'created_at' => '2023-05-19 11:48:41',
                'updated_at' => '2023-05-19 11:48:41',
                'deleted_at' => NULL,
            ),
            291 => 
            array (
                'no_struk_transaksi' => '23.05.304',
                'jenis_transaksi' => 'transaksi-presensi-kelas',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.033',
                'created_at' => '2023-05-19 11:52:04',
                'updated_at' => '2023-05-19 11:52:04',
                'deleted_at' => NULL,
            ),
            292 => 
            array (
                'no_struk_transaksi' => '23.05.305',
                'jenis_transaksi' => 'transaksi-presensi-kelas',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.033',
                'created_at' => '2023-05-19 11:54:30',
                'updated_at' => '2023-05-19 11:54:30',
                'deleted_at' => NULL,
            ),
            293 => 
            array (
                'no_struk_transaksi' => '23.05.306',
                'jenis_transaksi' => 'transaksi-presensi-kelas',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.032',
                'created_at' => '2023-05-19 11:54:41',
                'updated_at' => '2023-05-19 11:54:41',
                'deleted_at' => NULL,
            ),
            294 => 
            array (
                'no_struk_transaksi' => '23.05.307',
                'jenis_transaksi' => 'transaksi-presensi-kelas-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.034',
                'created_at' => '2023-05-19 12:09:29',
                'updated_at' => '2023-05-19 12:09:29',
                'deleted_at' => NULL,
            ),
            295 => 
            array (
                'no_struk_transaksi' => '23.05.308',
                'jenis_transaksi' => 'transaksi-presensi-kelas',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.033',
                'created_at' => '2023-05-19 12:09:43',
                'updated_at' => '2023-05-19 12:09:43',
                'deleted_at' => NULL,
            ),
            296 => 
            array (
                'no_struk_transaksi' => '23.05.309',
                'jenis_transaksi' => 'transaksi-presensi-gym',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.034',
                'created_at' => '2023-05-19 14:33:50',
                'updated_at' => '2023-05-19 14:33:50',
                'deleted_at' => NULL,
            ),
            297 => 
            array (
                'no_struk_transaksi' => '23.05.310',
                'jenis_transaksi' => 'transaksi-presensi-kelas-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.034',
                'created_at' => '2023-05-19 14:51:54',
                'updated_at' => '2023-05-19 14:51:54',
                'deleted_at' => NULL,
            ),
            298 => 
            array (
                'no_struk_transaksi' => '23.05.311',
                'jenis_transaksi' => 'transaksi-presensi-gym',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.033',
                'created_at' => '2023-05-20 15:56:09',
                'updated_at' => '2023-05-20 15:56:09',
                'deleted_at' => NULL,
            ),
            299 => 
            array (
                'no_struk_transaksi' => '23.05.312',
                'jenis_transaksi' => 'transaksi-presensi-kelas',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.032',
                'created_at' => '2023-05-20 16:54:59',
                'updated_at' => '2023-05-20 16:54:59',
                'deleted_at' => NULL,
            ),
            300 => 
            array (
                'no_struk_transaksi' => '23.05.313',
                'jenis_transaksi' => 'transaksi-presensi-kelas',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.033',
                'created_at' => '2023-05-23 16:13:32',
                'updated_at' => '2023-05-23 16:13:32',
                'deleted_at' => NULL,
            ),
            301 => 
            array (
                'no_struk_transaksi' => '23.05.314',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.036',
                'created_at' => '2023-05-24 07:41:46',
                'updated_at' => '2023-05-24 07:41:46',
                'deleted_at' => NULL,
            ),
            302 => 
            array (
                'no_struk_transaksi' => '23.05.315',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.036',
                'created_at' => '2023-05-24 07:45:37',
                'updated_at' => '2023-05-24 07:45:37',
                'deleted_at' => NULL,
            ),
            303 => 
            array (
                'no_struk_transaksi' => '23.05.316',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.036',
                'created_at' => '2023-05-24 07:45:55',
                'updated_at' => '2023-05-24 07:45:55',
                'deleted_at' => NULL,
            ),
            304 => 
            array (
                'no_struk_transaksi' => '23.05.317',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.036',
                'created_at' => '2023-05-24 07:46:36',
                'updated_at' => '2023-05-24 07:46:36',
                'deleted_at' => NULL,
            ),
            305 => 
            array (
                'no_struk_transaksi' => '23.05.318',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.036',
                'created_at' => '2023-05-24 07:47:43',
                'updated_at' => '2023-05-24 07:47:43',
                'deleted_at' => NULL,
            ),
            306 => 
            array (
                'no_struk_transaksi' => '23.05.319',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.036',
                'created_at' => '2023-05-24 07:49:26',
                'updated_at' => '2023-05-24 07:49:26',
                'deleted_at' => NULL,
            ),
            307 => 
            array (
                'no_struk_transaksi' => '23.05.320',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.036',
                'created_at' => '2023-05-24 07:51:32',
                'updated_at' => '2023-05-24 07:51:32',
                'deleted_at' => NULL,
            ),
            308 => 
            array (
                'no_struk_transaksi' => '23.05.321',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.036',
                'created_at' => '2023-05-24 07:51:47',
                'updated_at' => '2023-05-24 07:51:47',
                'deleted_at' => NULL,
            ),
            309 => 
            array (
                'no_struk_transaksi' => '23.05.322',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.036',
                'created_at' => '2023-05-24 07:52:07',
                'updated_at' => '2023-05-24 07:52:07',
                'deleted_at' => NULL,
            ),
            310 => 
            array (
                'no_struk_transaksi' => '23.05.323',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.036',
                'created_at' => '2023-05-24 08:01:19',
                'updated_at' => '2023-05-24 08:01:19',
                'deleted_at' => NULL,
            ),
            311 => 
            array (
                'no_struk_transaksi' => '23.05.324',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.036',
                'created_at' => '2023-05-24 08:02:50',
                'updated_at' => '2023-05-24 08:02:50',
                'deleted_at' => NULL,
            ),
            312 => 
            array (
                'no_struk_transaksi' => '23.05.325',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.036',
                'created_at' => '2023-05-24 08:02:57',
                'updated_at' => '2023-05-24 08:02:57',
                'deleted_at' => NULL,
            ),
            313 => 
            array (
                'no_struk_transaksi' => '23.05.326',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.036',
                'created_at' => '2023-05-24 08:03:09',
                'updated_at' => '2023-05-24 08:03:09',
                'deleted_at' => NULL,
            ),
            314 => 
            array (
                'no_struk_transaksi' => '23.05.327',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.036',
                'created_at' => '2023-05-24 08:04:36',
                'updated_at' => '2023-05-24 08:04:36',
                'deleted_at' => NULL,
            ),
            315 => 
            array (
                'no_struk_transaksi' => '23.06.328',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.002',
                'created_at' => '2023-06-04 11:08:57',
                'updated_at' => '2023-06-04 11:08:57',
                'deleted_at' => NULL,
            ),
            316 => 
            array (
                'no_struk_transaksi' => '23.06.329',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.031',
                'created_at' => '2023-06-04 11:10:56',
                'updated_at' => '2023-06-04 11:10:56',
                'deleted_at' => NULL,
            ),
            317 => 
            array (
                'no_struk_transaksi' => '23.06.330',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.016',
                'created_at' => '2023-06-04 21:24:06',
                'updated_at' => '2023-06-04 21:24:06',
                'deleted_at' => NULL,
            ),
            318 => 
            array (
                'no_struk_transaksi' => '23.06.331',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.016',
                'created_at' => '2023-06-04 21:25:17',
                'updated_at' => '2023-06-04 21:25:17',
                'deleted_at' => NULL,
            ),
            319 => 
            array (
                'no_struk_transaksi' => '23.06.332',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.031',
                'created_at' => '2023-06-04 21:41:08',
                'updated_at' => '2023-06-04 21:41:08',
                'deleted_at' => NULL,
            ),
            320 => 
            array (
                'no_struk_transaksi' => '23.06.333',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.018',
                'created_at' => '2023-06-04 21:55:36',
                'updated_at' => '2023-06-04 21:55:36',
                'deleted_at' => NULL,
            ),
            321 => 
            array (
                'no_struk_transaksi' => '23.06.334',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.036',
                'created_at' => '2023-06-04 21:59:44',
                'updated_at' => '2023-06-04 21:59:44',
                'deleted_at' => NULL,
            ),
            322 => 
            array (
                'no_struk_transaksi' => '23.06.335',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.016',
                'created_at' => '2023-06-04 22:02:00',
                'updated_at' => '2023-06-04 22:02:00',
                'deleted_at' => NULL,
            ),
            323 => 
            array (
                'no_struk_transaksi' => '23.06.336',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.036',
                'created_at' => '2023-06-04 22:16:16',
                'updated_at' => '2023-06-04 22:16:16',
                'deleted_at' => NULL,
            ),
            324 => 
            array (
                'no_struk_transaksi' => '23.06.337',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.036',
                'created_at' => '2023-06-04 22:16:16',
                'updated_at' => '2023-06-04 22:16:16',
                'deleted_at' => NULL,
            ),
            325 => 
            array (
                'no_struk_transaksi' => '23.06.338',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.034',
                'created_at' => '2023-06-04 22:17:46',
                'updated_at' => '2023-06-04 22:17:46',
                'deleted_at' => NULL,
            ),
            326 => 
            array (
                'no_struk_transaksi' => '23.06.339',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.036',
                'created_at' => '2023-06-04 22:20:34',
                'updated_at' => '2023-06-04 22:20:34',
                'deleted_at' => NULL,
            ),
            327 => 
            array (
                'no_struk_transaksi' => '23.06.340',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.036',
                'created_at' => '2023-06-04 22:21:43',
                'updated_at' => '2023-06-04 22:21:43',
                'deleted_at' => NULL,
            ),
            328 => 
            array (
                'no_struk_transaksi' => '23.06.341',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.036',
                'created_at' => '2023-06-04 22:23:44',
                'updated_at' => '2023-06-04 22:23:44',
                'deleted_at' => NULL,
            ),
            329 => 
            array (
                'no_struk_transaksi' => '23.06.342',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.036',
                'created_at' => '2023-06-04 22:24:18',
                'updated_at' => '2023-06-04 22:24:18',
                'deleted_at' => NULL,
            ),
            330 => 
            array (
                'no_struk_transaksi' => '23.06.343',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.036',
                'created_at' => '2023-06-04 22:24:46',
                'updated_at' => '2023-06-04 22:24:46',
                'deleted_at' => NULL,
            ),
            331 => 
            array (
                'no_struk_transaksi' => '23.06.344',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.036',
                'created_at' => '2023-06-04 22:25:02',
                'updated_at' => '2023-06-04 22:25:02',
                'deleted_at' => NULL,
            ),
            332 => 
            array (
                'no_struk_transaksi' => '23.06.345',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.036',
                'created_at' => '2023-06-04 22:25:14',
                'updated_at' => '2023-06-04 22:25:14',
                'deleted_at' => NULL,
            ),
            333 => 
            array (
                'no_struk_transaksi' => '23.06.346',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.018',
                'created_at' => '2023-06-04 22:28:45',
                'updated_at' => '2023-06-04 22:28:45',
                'deleted_at' => NULL,
            ),
            334 => 
            array (
                'no_struk_transaksi' => '23.06.347',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.024',
                'created_at' => '2023-06-04 22:29:51',
                'updated_at' => '2023-06-04 22:29:51',
                'deleted_at' => NULL,
            ),
            335 => 
            array (
                'no_struk_transaksi' => '23.06.348',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.024',
                'created_at' => '2023-06-04 22:30:21',
                'updated_at' => '2023-06-04 22:30:21',
                'deleted_at' => NULL,
            ),
            336 => 
            array (
                'no_struk_transaksi' => '23.06.349',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.034',
                'created_at' => '2023-06-04 22:31:46',
                'updated_at' => '2023-06-04 22:31:46',
                'deleted_at' => NULL,
            ),
            337 => 
            array (
                'no_struk_transaksi' => '23.06.350',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.031',
                'created_at' => '2023-06-04 22:32:25',
                'updated_at' => '2023-06-04 22:32:25',
                'deleted_at' => NULL,
            ),
            338 => 
            array (
                'no_struk_transaksi' => '23.06.351',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.018',
                'created_at' => '2023-06-05 11:37:13',
                'updated_at' => '2023-06-05 11:37:13',
                'deleted_at' => NULL,
            ),
            339 => 
            array (
                'no_struk_transaksi' => '23.06.352',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.036',
                'created_at' => '2023-06-05 12:35:50',
                'updated_at' => '2023-06-05 12:35:50',
                'deleted_at' => NULL,
            ),
            340 => 
            array (
                'no_struk_transaksi' => '23.06.353',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.033',
                'created_at' => '2023-06-05 12:40:43',
                'updated_at' => '2023-06-05 12:40:43',
                'deleted_at' => NULL,
            ),
            341 => 
            array (
                'no_struk_transaksi' => '23.06.354',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.034',
                'created_at' => '2023-06-05 12:55:51',
                'updated_at' => '2023-06-05 12:55:51',
                'deleted_at' => NULL,
            ),
            342 => 
            array (
                'no_struk_transaksi' => '23.06.355',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.034',
                'created_at' => '2023-06-05 12:58:49',
                'updated_at' => '2023-06-05 12:58:49',
                'deleted_at' => NULL,
            ),
            343 => 
            array (
                'no_struk_transaksi' => '23.06.356',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.034',
                'created_at' => '2023-06-05 13:07:56',
                'updated_at' => '2023-06-05 13:07:56',
                'deleted_at' => NULL,
            ),
            344 => 
            array (
                'no_struk_transaksi' => '23.06.357',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.018',
                'created_at' => '2023-06-05 13:09:02',
                'updated_at' => '2023-06-05 13:09:02',
                'deleted_at' => NULL,
            ),
            345 => 
            array (
                'no_struk_transaksi' => '23.06.358',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.016',
                'created_at' => '2023-06-05 13:10:04',
                'updated_at' => '2023-06-05 13:10:04',
                'deleted_at' => NULL,
            ),
            346 => 
            array (
                'no_struk_transaksi' => '23.06.359',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.018',
                'created_at' => '2023-06-05 13:10:49',
                'updated_at' => '2023-06-05 13:10:49',
                'deleted_at' => NULL,
            ),
            347 => 
            array (
                'no_struk_transaksi' => '23.06.360',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.018',
                'created_at' => '2023-06-05 13:11:06',
                'updated_at' => '2023-06-05 13:11:06',
                'deleted_at' => NULL,
            ),
            348 => 
            array (
                'no_struk_transaksi' => '23.06.361',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.018',
                'created_at' => '2023-06-05 13:18:09',
                'updated_at' => '2023-06-05 13:18:09',
                'deleted_at' => NULL,
            ),
            349 => 
            array (
                'no_struk_transaksi' => '23.06.362',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.017',
                'created_at' => '2023-06-06 06:31:10',
                'updated_at' => '2023-06-06 06:31:10',
                'deleted_at' => NULL,
            ),
            350 => 
            array (
                'no_struk_transaksi' => '23.06.363',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.035',
                'created_at' => '2023-06-06 10:21:15',
                'updated_at' => '2023-06-06 10:21:15',
                'deleted_at' => NULL,
            ),
            351 => 
            array (
                'no_struk_transaksi' => '23.06.364',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.033',
                'created_at' => '2023-06-06 10:22:09',
                'updated_at' => '2023-06-06 10:22:09',
                'deleted_at' => NULL,
            ),
            352 => 
            array (
                'no_struk_transaksi' => '23.06.365',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.016',
                'created_at' => '2023-06-06 10:26:43',
                'updated_at' => '2023-06-06 10:26:43',
                'deleted_at' => NULL,
            ),
            353 => 
            array (
                'no_struk_transaksi' => '23.06.366',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.033',
                'created_at' => '2023-06-06 10:27:14',
                'updated_at' => '2023-06-06 10:27:14',
                'deleted_at' => NULL,
            ),
            354 => 
            array (
                'no_struk_transaksi' => '23.06.367',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.017',
                'created_at' => '2023-06-06 10:38:41',
                'updated_at' => '2023-06-06 10:38:41',
                'deleted_at' => NULL,
            ),
            355 => 
            array (
                'no_struk_transaksi' => '23.06.368',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.033',
                'created_at' => '2023-06-06 10:39:16',
                'updated_at' => '2023-06-06 10:39:16',
                'deleted_at' => NULL,
            ),
            356 => 
            array (
                'no_struk_transaksi' => '23.06.369',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.034',
                'created_at' => '2023-06-06 10:41:18',
                'updated_at' => '2023-06-06 10:41:18',
                'deleted_at' => NULL,
            ),
            357 => 
            array (
                'no_struk_transaksi' => '23.06.370',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.034',
                'created_at' => '2023-06-06 10:42:12',
                'updated_at' => '2023-06-06 10:42:12',
                'deleted_at' => NULL,
            ),
            358 => 
            array (
                'no_struk_transaksi' => '23.06.371',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.034',
                'created_at' => '2023-06-06 10:43:28',
                'updated_at' => '2023-06-06 10:43:28',
                'deleted_at' => NULL,
            ),
            359 => 
            array (
                'no_struk_transaksi' => '23.06.372',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.033',
                'created_at' => '2023-06-06 10:44:38',
                'updated_at' => '2023-06-06 10:44:38',
                'deleted_at' => NULL,
            ),
            360 => 
            array (
                'no_struk_transaksi' => '23.06.373',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.033',
                'created_at' => '2023-06-06 10:45:13',
                'updated_at' => '2023-06-06 10:45:13',
                'deleted_at' => NULL,
            ),
            361 => 
            array (
                'no_struk_transaksi' => '23.06.374',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.033',
                'created_at' => '2023-06-06 10:45:48',
                'updated_at' => '2023-06-06 10:45:48',
                'deleted_at' => NULL,
            ),
            362 => 
            array (
                'no_struk_transaksi' => '23.06.375',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.033',
                'created_at' => '2023-06-06 10:47:40',
                'updated_at' => '2023-06-06 10:47:40',
                'deleted_at' => NULL,
            ),
            363 => 
            array (
                'no_struk_transaksi' => '23.06.376',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.034',
                'created_at' => '2023-06-06 10:48:27',
                'updated_at' => '2023-06-06 10:48:27',
                'deleted_at' => NULL,
            ),
            364 => 
            array (
                'no_struk_transaksi' => '23.06.377',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.033',
                'created_at' => '2023-06-06 10:50:17',
                'updated_at' => '2023-06-06 10:50:17',
                'deleted_at' => NULL,
            ),
            365 => 
            array (
                'no_struk_transaksi' => '23.06.378',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.033',
                'created_at' => '2023-06-06 10:56:19',
                'updated_at' => '2023-06-06 10:56:19',
                'deleted_at' => NULL,
            ),
            366 => 
            array (
                'no_struk_transaksi' => '23.06.379',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.033',
                'created_at' => '2023-06-06 10:58:49',
                'updated_at' => '2023-06-06 10:58:49',
                'deleted_at' => NULL,
            ),
            367 => 
            array (
                'no_struk_transaksi' => '23.06.380',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.033',
                'created_at' => '2023-06-06 11:00:03',
                'updated_at' => '2023-06-06 11:00:03',
                'deleted_at' => NULL,
            ),
            368 => 
            array (
                'no_struk_transaksi' => '23.06.381',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.033',
                'created_at' => '2023-06-06 11:10:51',
                'updated_at' => '2023-06-06 11:10:51',
                'deleted_at' => NULL,
            ),
            369 => 
            array (
                'no_struk_transaksi' => '23.06.382',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.033',
                'created_at' => '2023-06-06 11:12:09',
                'updated_at' => '2023-06-06 11:12:09',
                'deleted_at' => NULL,
            ),
            370 => 
            array (
                'no_struk_transaksi' => '23.06.383',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.033',
                'created_at' => '2023-06-06 11:13:33',
                'updated_at' => '2023-06-06 11:13:33',
                'deleted_at' => NULL,
            ),
            371 => 
            array (
                'no_struk_transaksi' => '23.06.384',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.033',
                'created_at' => '2023-06-06 11:14:08',
                'updated_at' => '2023-06-06 11:14:08',
                'deleted_at' => NULL,
            ),
            372 => 
            array (
                'no_struk_transaksi' => '23.06.385',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.034',
                'created_at' => '2023-06-06 11:15:11',
                'updated_at' => '2023-06-06 11:15:11',
                'deleted_at' => NULL,
            ),
            373 => 
            array (
                'no_struk_transaksi' => '23.06.386',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.034',
                'created_at' => '2023-06-06 11:15:32',
                'updated_at' => '2023-06-06 11:15:32',
                'deleted_at' => NULL,
            ),
            374 => 
            array (
                'no_struk_transaksi' => '23.06.387',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.034',
                'created_at' => '2023-06-06 11:15:42',
                'updated_at' => '2023-06-06 11:15:42',
                'deleted_at' => NULL,
            ),
            375 => 
            array (
                'no_struk_transaksi' => '23.06.388',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.034',
                'created_at' => '2023-06-06 11:16:12',
                'updated_at' => '2023-06-06 11:16:12',
                'deleted_at' => NULL,
            ),
            376 => 
            array (
                'no_struk_transaksi' => '23.06.389',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.034',
                'created_at' => '2023-06-06 11:17:45',
                'updated_at' => '2023-06-06 11:17:45',
                'deleted_at' => NULL,
            ),
            377 => 
            array (
                'no_struk_transaksi' => '23.06.390',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.033',
                'created_at' => '2023-06-06 11:18:42',
                'updated_at' => '2023-06-06 11:18:42',
                'deleted_at' => NULL,
            ),
            378 => 
            array (
                'no_struk_transaksi' => '23.06.391',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.033',
                'created_at' => '2023-06-06 11:19:26',
                'updated_at' => '2023-06-06 11:19:26',
                'deleted_at' => NULL,
            ),
            379 => 
            array (
                'no_struk_transaksi' => '23.06.392',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.034',
                'created_at' => '2023-06-06 11:20:11',
                'updated_at' => '2023-06-06 11:20:11',
                'deleted_at' => NULL,
            ),
            380 => 
            array (
                'no_struk_transaksi' => '23.06.393',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.033',
                'created_at' => '2023-06-06 11:21:33',
                'updated_at' => '2023-06-06 11:21:33',
                'deleted_at' => NULL,
            ),
            381 => 
            array (
                'no_struk_transaksi' => '23.06.394',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.033',
                'created_at' => '2023-06-06 11:22:32',
                'updated_at' => '2023-06-06 11:22:32',
                'deleted_at' => NULL,
            ),
            382 => 
            array (
                'no_struk_transaksi' => '23.06.395',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.033',
                'created_at' => '2023-06-06 11:23:56',
                'updated_at' => '2023-06-06 11:23:56',
                'deleted_at' => NULL,
            ),
            383 => 
            array (
                'no_struk_transaksi' => '23.06.396',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.033',
                'created_at' => '2023-06-06 11:24:41',
                'updated_at' => '2023-06-06 11:24:41',
                'deleted_at' => NULL,
            ),
            384 => 
            array (
                'no_struk_transaksi' => '23.06.397',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.033',
                'created_at' => '2023-06-06 11:25:31',
                'updated_at' => '2023-06-06 11:25:31',
                'deleted_at' => NULL,
            ),
            385 => 
            array (
                'no_struk_transaksi' => '23.06.398',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.033',
                'created_at' => '2023-06-06 11:55:26',
                'updated_at' => '2023-06-06 11:55:26',
                'deleted_at' => NULL,
            ),
            386 => 
            array (
                'no_struk_transaksi' => '23.06.399',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.033',
                'created_at' => '2023-06-06 11:56:56',
                'updated_at' => '2023-06-06 11:56:56',
                'deleted_at' => NULL,
            ),
            387 => 
            array (
                'no_struk_transaksi' => '23.06.400',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.036',
                'created_at' => '2023-06-06 11:58:15',
                'updated_at' => '2023-06-06 11:58:15',
                'deleted_at' => NULL,
            ),
            388 => 
            array (
                'no_struk_transaksi' => '23.06.401',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.036',
                'created_at' => '2023-06-06 11:59:31',
                'updated_at' => '2023-06-06 11:59:31',
                'deleted_at' => NULL,
            ),
            389 => 
            array (
                'no_struk_transaksi' => '23.06.402',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.034',
                'created_at' => '2023-06-06 12:00:22',
                'updated_at' => '2023-06-06 12:00:22',
                'deleted_at' => NULL,
            ),
            390 => 
            array (
                'no_struk_transaksi' => '23.06.403',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.036',
                'created_at' => '2023-06-06 12:01:20',
                'updated_at' => '2023-06-06 12:01:20',
                'deleted_at' => NULL,
            ),
            391 => 
            array (
                'no_struk_transaksi' => '23.06.404',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.036',
                'created_at' => '2023-06-06 12:03:18',
                'updated_at' => '2023-06-06 12:03:18',
                'deleted_at' => NULL,
            ),
            392 => 
            array (
                'no_struk_transaksi' => '23.06.405',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.036',
                'created_at' => '2023-06-06 12:04:08',
                'updated_at' => '2023-06-06 12:04:08',
                'deleted_at' => NULL,
            ),
            393 => 
            array (
                'no_struk_transaksi' => '23.06.406',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.036',
                'created_at' => '2023-06-06 12:06:26',
                'updated_at' => '2023-06-06 12:06:26',
                'deleted_at' => NULL,
            ),
            394 => 
            array (
                'no_struk_transaksi' => '23.06.407',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.036',
                'created_at' => '2023-06-06 12:07:49',
                'updated_at' => '2023-06-06 12:07:49',
                'deleted_at' => NULL,
            ),
            395 => 
            array (
                'no_struk_transaksi' => '23.06.408',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.036',
                'created_at' => '2023-06-06 12:10:24',
                'updated_at' => '2023-06-06 12:10:24',
                'deleted_at' => NULL,
            ),
            396 => 
            array (
                'no_struk_transaksi' => '23.06.409',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.036',
                'created_at' => '2023-06-06 12:10:50',
                'updated_at' => '2023-06-06 12:10:50',
                'deleted_at' => NULL,
            ),
            397 => 
            array (
                'no_struk_transaksi' => '23.06.410',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.036',
                'created_at' => '2023-06-06 12:11:20',
                'updated_at' => '2023-06-06 12:11:20',
                'deleted_at' => NULL,
            ),
            398 => 
            array (
                'no_struk_transaksi' => '23.06.411',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.002',
                'created_at' => '2023-06-06 12:12:21',
                'updated_at' => '2023-06-06 12:12:21',
                'deleted_at' => NULL,
            ),
            399 => 
            array (
                'no_struk_transaksi' => '23.06.412',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.036',
                'created_at' => '2023-06-06 12:14:11',
                'updated_at' => '2023-06-06 12:14:11',
                'deleted_at' => NULL,
            ),
            400 => 
            array (
                'no_struk_transaksi' => '23.06.413',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.036',
                'created_at' => '2023-06-06 12:16:51',
                'updated_at' => '2023-06-06 12:16:51',
                'deleted_at' => NULL,
            ),
            401 => 
            array (
                'no_struk_transaksi' => '23.06.414',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.002',
                'created_at' => '2023-06-06 12:18:17',
                'updated_at' => '2023-06-06 12:18:17',
                'deleted_at' => NULL,
            ),
            402 => 
            array (
                'no_struk_transaksi' => '23.06.415',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.002',
                'created_at' => '2023-06-06 12:18:56',
                'updated_at' => '2023-06-06 12:18:56',
                'deleted_at' => NULL,
            ),
            403 => 
            array (
                'no_struk_transaksi' => '23.06.416',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.002',
                'created_at' => '2023-06-06 12:19:32',
                'updated_at' => '2023-06-06 12:19:32',
                'deleted_at' => NULL,
            ),
            404 => 
            array (
                'no_struk_transaksi' => '23.06.417',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.002',
                'created_at' => '2023-06-06 12:20:11',
                'updated_at' => '2023-06-06 12:20:11',
                'deleted_at' => NULL,
            ),
            405 => 
            array (
                'no_struk_transaksi' => '23.06.418',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.036',
                'created_at' => '2023-06-06 12:20:28',
                'updated_at' => '2023-06-06 12:20:28',
                'deleted_at' => NULL,
            ),
            406 => 
            array (
                'no_struk_transaksi' => '23.06.419',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.036',
                'created_at' => '2023-06-06 12:21:07',
                'updated_at' => '2023-06-06 12:21:07',
                'deleted_at' => NULL,
            ),
            407 => 
            array (
                'no_struk_transaksi' => '23.06.420',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.036',
                'created_at' => '2023-06-06 12:22:01',
                'updated_at' => '2023-06-06 12:22:01',
                'deleted_at' => NULL,
            ),
            408 => 
            array (
                'no_struk_transaksi' => '23.06.421',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.036',
                'created_at' => '2023-06-06 12:23:14',
                'updated_at' => '2023-06-06 12:23:14',
                'deleted_at' => NULL,
            ),
            409 => 
            array (
                'no_struk_transaksi' => '23.06.422',
                'jenis_transaksi' => 'transaksi-aktivasi',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.002',
                'created_at' => '2023-06-06 12:29:39',
                'updated_at' => '2023-06-06 12:29:39',
                'deleted_at' => NULL,
            ),
            410 => 
            array (
                'no_struk_transaksi' => '23.06.423',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.002',
                'created_at' => '2023-06-06 14:24:36',
                'updated_at' => '2023-06-06 14:24:36',
                'deleted_at' => NULL,
            ),
            411 => 
            array (
                'no_struk_transaksi' => '23.06.424',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.002',
                'created_at' => '2023-06-06 15:48:35',
                'updated_at' => '2023-06-06 15:48:35',
                'deleted_at' => NULL,
            ),
            412 => 
            array (
                'no_struk_transaksi' => '23.06.425',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.002',
                'created_at' => '2023-06-06 15:56:25',
                'updated_at' => '2023-06-06 15:56:25',
                'deleted_at' => NULL,
            ),
            413 => 
            array (
                'no_struk_transaksi' => '23.06.426',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.002',
                'created_at' => '2023-06-06 16:39:01',
                'updated_at' => '2023-06-06 16:39:01',
                'deleted_at' => NULL,
            ),
            414 => 
            array (
                'no_struk_transaksi' => '23.06.427',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.002',
                'created_at' => '2023-06-06 16:40:28',
                'updated_at' => '2023-06-06 16:40:28',
                'deleted_at' => NULL,
            ),
            415 => 
            array (
                'no_struk_transaksi' => '23.06.428',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.002',
                'created_at' => '2023-06-06 16:41:37',
                'updated_at' => '2023-06-06 16:41:37',
                'deleted_at' => NULL,
            ),
            416 => 
            array (
                'no_struk_transaksi' => '23.06.429',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.002',
                'created_at' => '2023-06-06 16:47:56',
                'updated_at' => '2023-06-06 16:47:56',
                'deleted_at' => NULL,
            ),
            417 => 
            array (
                'no_struk_transaksi' => '23.06.430',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.002',
                'created_at' => '2023-06-06 16:48:39',
                'updated_at' => '2023-06-06 16:48:39',
                'deleted_at' => NULL,
            ),
            418 => 
            array (
                'no_struk_transaksi' => '23.06.431',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.036',
                'created_at' => '2023-06-06 16:49:15',
                'updated_at' => '2023-06-06 16:49:15',
                'deleted_at' => NULL,
            ),
            419 => 
            array (
                'no_struk_transaksi' => '23.06.432',
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.016',
                'created_at' => '2023-06-06 16:50:04',
                'updated_at' => '2023-06-06 16:50:04',
                'deleted_at' => NULL,
            ),
            420 => 
            array (
                'no_struk_transaksi' => '23.06.433',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.002',
                'created_at' => '2023-06-06 21:08:48',
                'updated_at' => '2023-06-06 21:08:48',
                'deleted_at' => NULL,
            ),
            421 => 
            array (
                'no_struk_transaksi' => '23.06.434',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.016',
                'created_at' => '2023-06-06 21:10:24',
                'updated_at' => '2023-06-06 21:10:24',
                'deleted_at' => NULL,
            ),
            422 => 
            array (
                'no_struk_transaksi' => '23.06.435',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.017',
                'created_at' => '2023-06-06 21:11:09',
                'updated_at' => '2023-06-06 21:11:09',
                'deleted_at' => NULL,
            ),
            423 => 
            array (
                'no_struk_transaksi' => '23.06.436',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.018',
                'created_at' => '2023-06-06 21:17:11',
                'updated_at' => '2023-06-06 21:17:11',
                'deleted_at' => NULL,
            ),
            424 => 
            array (
                'no_struk_transaksi' => '23.06.437',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.031',
                'created_at' => '2023-06-06 21:18:56',
                'updated_at' => '2023-06-06 21:18:56',
                'deleted_at' => NULL,
            ),
            425 => 
            array (
                'no_struk_transaksi' => '23.06.438',
                'jenis_transaksi' => 'transaksi-deposit-paket',
                'id_pegawai' => 'P06',
                'id_member' => '23.06.009',
                'created_at' => '2023-06-06 21:21:09',
                'updated_at' => '2023-06-06 21:21:09',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}