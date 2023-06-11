<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabasePromoSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('promo')->delete();
        
        \DB::table('promo')->insert(array (
            0 => 
            array (
                'id_promo' => 1,
                'nama_promo' => 'Promo Reguler A',
                'jenis_promo' => 'promo_reguler',
                'minimal_deposit' => 3000000.0,
                'bonus_promo' => 300000.0,
                'masa_berlaku' => NULL,
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id_promo' => 2,
                'nama_promo' => 'Promo Paket A',
                'jenis_promo' => 'promo_paket',
                'minimal_deposit' => 5.0,
                'bonus_promo' => 1.0,
                'masa_berlaku' => 1,
                'created_at' => '2023-04-02 00:54:35',
                'updated_at' => '2023-04-02 00:54:35',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id_promo' => 4,
                'nama_promo' => 'Promo Reguler Premium',
                'jenis_promo' => 'promo_reguler',
                'minimal_deposit' => 8000000.0,
                'bonus_promo' => 800000.0,
                'masa_berlaku' => NULL,
                'created_at' => '2023-04-27 23:59:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id_promo' => 5,
                'nama_promo' => 'Promo Paket Premium',
                'jenis_promo' => 'promo_paket',
                'minimal_deposit' => 10.0,
                'bonus_promo' => 3.0,
                'masa_berlaku' => 3,
                'created_at' => '2023-05-05 13:46:01',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}