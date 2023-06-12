<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
class DatabasePegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
            //dummy 15 nama
            $namaPegawai = ['Alfons Admin','Alfons MO','Alfons Kasir','Yuna'];
            $jalanMember = ['Jalan Sumberan', 'Jalan Seturan', 'Jalan Wahid Hasyim', 'Jalan Babarsari'];
            $jabatanPegawai = ['Admin', 'MO', 'kasir', 'kasir'];
            
    
            //* Untuk Tanggal Lahir 
            $startDateBorn = '1995-01-01';
            $endDateBorn = '2002-12-21';
            $startDateBornCarbon = new Carbon($startDateBorn);
            $endDateBornCarbon = new Carbon($endDateBorn);
            
            //* Untuk Join
            $startDateBorn2 = '2010-01-01';
            $endDateBorn2 = '2022-12-21';
            $startDateBornCarbon2 = new Carbon($startDateBorn);
            $endDateBornCarbon2 = new Carbon($endDateBorn);
            

            // DB::table('pegawai')->insert([
            //     'id_pegawai' => 'P01',
            //     'id_pengguna' => 13,
            //     'nama_pegawai' => 'ucup',
            //     'jabatan_pegawai' => 'Admin',
            //     'tgl_lahir_pegawai' => '2002-05-21',
            //     'no_telp_pegawai' => '082172804015',
            //     'alamat_pegawai' => 'alamat',
            //     // 'created_at' => $joinDateRand,
            // ]); 
            for($id = 12 ; $id<count($namaPegawai)+12; $id++){
                $bornDateRand = Carbon::createFromTimestamp(rand($startDateBornCarbon->timestamp, $endDateBornCarbon->timestamp));
                $joinDateRand = Carbon::createFromTimestamp(rand($startDateBornCarbon2->timestamp, $endDateBornCarbon2->timestamp));
                $phoneNumberRand = '08';
                $indexNama = $id-12;
                $indexPegawai = $indexNama+1;
                for ($i = 0; $i < 8; $i++) {
                    $phoneNumberRand .= rand(0, 9);
                }
                DB::table('pegawai')->insert([
                    'id_pegawai' => 'P0'.$indexPegawai,
                    'id_pengguna' => $id,
                    'nama_pegawai' => $namaPegawai[$indexNama],
                    'jabatan_pegawai' => $jabatanPegawai[$indexNama],
                    'tgl_lahir_pegawai' => $bornDateRand,
                    'no_telp_pegawai' => $phoneNumberRand,
                    'alamat_pegawai' => $jalanMember[$indexNama],
                    'created_at' => $joinDateRand,
                ]); 
            }
    }
}
