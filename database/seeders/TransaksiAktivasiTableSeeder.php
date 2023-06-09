<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TransaksiAktivasiTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('transaksi_aktivasi')->delete();
        
        \DB::table('transaksi_aktivasi')->insert(array (
            0 => 
            array (
                'id_aktivasi' => 145,
                'tanggal_aktivasi' => '2023-06-06 12:29:39',
                'tanggal_kadeluarsa' => '2029-06-04 11:08:57',
                'nominal_aktivasi' => 3000000.0,
                'no_struk' => '23.06.422',
                'created_at' => '2023-06-06 12:29:39',
                'updated_at' => '2023-06-06 12:29:39',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}