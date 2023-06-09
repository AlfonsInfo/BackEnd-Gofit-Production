<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TransaksiDepositRegulerTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('transaksi_deposit_reguler')->delete();
        
        \DB::table('transaksi_deposit_reguler')->insert(array (
            0 => 
            array (
                'id_deposit_reguler' => 110,
                'tanggal_deposit' => '2023-06-06 14:24:36',
                'sisa_deposit' => NULL,
                'nominal_deposit' => 3000000.0,
                'nominal_total' => 3300000.0,
                'id_promo' => 1,
                'created_at' => '2023-06-06 14:24:36',
                'updated_at' => '2023-06-06 14:24:36',
                'deleted_at' => NULL,
                'no_struk' => '23.06.423',
            ),
            1 => 
            array (
                'id_deposit_reguler' => 111,
                'tanggal_deposit' => '2023-06-06 15:48:35',
                'sisa_deposit' => NULL,
                'nominal_deposit' => 3500000.0,
                'nominal_total' => 7100000.0,
                'id_promo' => 1,
                'created_at' => '2023-06-06 15:48:35',
                'updated_at' => '2023-06-06 15:48:35',
                'deleted_at' => NULL,
                'no_struk' => '23.06.424',
            ),
            2 => 
            array (
                'id_deposit_reguler' => 112,
                'tanggal_deposit' => '2023-06-06 15:56:25',
                'sisa_deposit' => 7100000.0,
                'nominal_deposit' => 3000000.0,
                'nominal_total' => 10400000.0,
                'id_promo' => 1,
                'created_at' => '2023-06-06 15:56:25',
                'updated_at' => '2023-06-06 15:56:25',
                'deleted_at' => NULL,
                'no_struk' => '23.06.425',
            ),
            3 => 
            array (
                'id_deposit_reguler' => 113,
                'tanggal_deposit' => '2023-06-06 16:40:28',
                'sisa_deposit' => 10400000.0,
                'nominal_deposit' => 3000000.0,
                'nominal_total' => 13700000.0,
                'id_promo' => 1,
                'created_at' => '2023-06-06 16:40:28',
                'updated_at' => '2023-06-06 16:40:28',
                'deleted_at' => NULL,
                'no_struk' => '23.06.427',
            ),
            4 => 
            array (
                'id_deposit_reguler' => 114,
                'tanggal_deposit' => '2023-06-06 16:41:37',
                'sisa_deposit' => 13700000.0,
                'nominal_deposit' => 3000000.0,
                'nominal_total' => 17000000.0,
                'id_promo' => 1,
                'created_at' => '2023-06-06 16:41:37',
                'updated_at' => '2023-06-06 16:41:37',
                'deleted_at' => NULL,
                'no_struk' => '23.06.428',
            ),
            5 => 
            array (
                'id_deposit_reguler' => 115,
                'tanggal_deposit' => '2023-06-06 16:47:56',
                'sisa_deposit' => 17000000.0,
                'nominal_deposit' => 3000000.0,
                'nominal_total' => 20300000.0,
                'id_promo' => 1,
                'created_at' => '2023-06-06 16:47:56',
                'updated_at' => '2023-06-06 16:47:56',
                'deleted_at' => NULL,
                'no_struk' => '23.06.429',
            ),
            6 => 
            array (
                'id_deposit_reguler' => 116,
                'tanggal_deposit' => '2023-06-06 16:48:39',
                'sisa_deposit' => 20300000.0,
                'nominal_deposit' => 3000000.0,
                'nominal_total' => 23600000.0,
                'id_promo' => 1,
                'created_at' => '2023-06-06 16:48:39',
                'updated_at' => '2023-06-06 16:48:39',
                'deleted_at' => NULL,
                'no_struk' => '23.06.430',
            ),
            7 => 
            array (
                'id_deposit_reguler' => 117,
                'tanggal_deposit' => '2023-06-06 16:49:15',
                'sisa_deposit' => 38700050.0,
                'nominal_deposit' => 3000000.0,
                'nominal_total' => 42000050.0,
                'id_promo' => 1,
                'created_at' => '2023-06-06 16:49:15',
                'updated_at' => '2023-06-06 16:49:15',
                'deleted_at' => NULL,
                'no_struk' => '23.06.431',
            ),
            8 => 
            array (
                'id_deposit_reguler' => 118,
                'tanggal_deposit' => '2023-06-06 16:50:04',
                'sisa_deposit' => 3300050.0,
                'nominal_deposit' => 3000000.0,
                'nominal_total' => 6600050.0,
                'id_promo' => 1,
                'created_at' => '2023-06-06 16:50:04',
                'updated_at' => '2023-06-06 16:50:04',
                'deleted_at' => NULL,
                'no_struk' => '23.06.432',
            ),
        ));
        
        
    }
}