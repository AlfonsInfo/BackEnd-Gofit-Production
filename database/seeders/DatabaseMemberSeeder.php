<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User\member;
use Carbon\Carbon;
use Faker;
use Illuminate\Support\Facades\DB;
use App\Models\transaksi_member;

class DatabaseMemberSeeder extends Seeder
{
    public function run()
    {
        //dummy 15 nama
        $namaMember = ['Alfonsus Member','Casey Andreas','Harley Patterson','Nadya Nixon','Alan Vega','Alanna Hill','Boone Wall','King Duran','Dior Wyatt','Jonss','Slamet'];
        $jalanMember = ['Jalan Merdeka', 'Jalan Raya', 'Jalan Mawar', 'Jalan Surya', 'Jalan Pahlawan', 'Jalan Anggrek', 'Jalan Jati', 'Jalan Kenari', 'Jalan Flamboyan', 'Jalan Cempaka','Jalan Sumberan'];
        

        //* Untuk Tanggal Lah   ir
        $startDateBorn = '1995-01-01';
        $endDateBorn = '2002-12-21';
        $startDateBornCarbon = new Carbon($startDateBorn);
        $endDateBornCarbon = new Carbon($endDateBorn);
        
        //* Untuk Join
        $startDate = '1995-01-01';
        $endDate = '2002-12-21';
        $startDateBornCarbon2 = new Carbon($startDate);
        $endDateBornCarbon2 = new Carbon($endDate);
        
        //* Akun Aing
        DB::table('member')->insert([
            'id_pengguna' => 1,
            'nama_member' => $namaMember[0],
            'tgl_lahir_member' => '2002-05-21',
            'no_telp_member' => '082284990864',
            'alamat_member' => 'yadara',
            'created_at' => '2022-01-01 00:00:00',
        ]); 

        $startDateAktivasi = '2023-01-01';
        $endDateAktivasi = '2023-05-01';
        $startDateAktivasiCarbon = new Carbon($startDateAktivasi);
        $endDateAktivasiCarbon= new Carbon($endDateAktivasi);

        $randomAktivasi = Carbon::createFromTimestamp(rand($startDateAktivasiCarbon->timestamp, $endDateAktivasiCarbon->timestamp));
        $kadeluarsa = clone $randomAktivasi;
        $kadeluarsa = $kadeluarsa->addYear();
        $activedDate = Carbon::parse('2022-01-01')->setTime(rand(8, 20), rand(0, 59), rand(0, 59));
        // $deactivated = $activedDate->addYear(1);
        // $deactivated = Carbon::parse('2023-01-01')->setTime(rand(8, 20), rand(0, 59), rand(0, 59));

        $member = member::where('nama_member', $namaMember[0])
            ->first();
        DB::table('transaksi_member')->insert([
            'id_pegawai' => 'P04' ,
            'id_member' => $member->id_member,
            'jenis_transaksi' => 'transaksi-aktivasi',
            'created_at' => $activedDate,
        ]);

        $dataTerakhir = DB::table('transaksi_member')
        ->latest('created_at')
        ->first();
        DB::table('transaksi_aktivasi')->insert([
            'tanggal_aktivasi' => $randomAktivasi,
            'tanggal_kadeluarsa' => $kadeluarsa,
            'nominal_aktivasi' => '3000000',
            'no_struk' => $dataTerakhir->no_struk_transaksi,
            'created_at' => $activedDate,
        ]);

        $member->tgl_kadeluarsa_aktivasi = $kadeluarsa;
        $member->save();

        for($id = 1 ; $id<count($namaMember); $id++){
            $bornDateRand = Carbon::createFromTimestamp(rand($startDateBornCarbon->timestamp, $endDateBornCarbon->timestamp));
            $joinDateRand = Carbon::createFromTimestamp(rand($startDateBornCarbon2->timestamp, $endDateBornCarbon2->timestamp));
            $phoneNumberRand = '08';

            $randomAktivasi = Carbon::createFromTimestamp(rand($startDateAktivasiCarbon->timestamp, $endDateAktivasiCarbon->timestamp));
            $kadeluarsa = clone $randomAktivasi;
            $kadeluarsa = $kadeluarsa->addYear();
            $activedDate = Carbon::parse('2022-01-01')->setTime(rand(8, 20), rand(0, 59), rand(0, 59));

            
            $randomDeposit = clone $randomAktivasi;
            $randomDeposit = $randomAktivasi->addDays(rand(0,100));

            for ($i = 0; $i < 8; $i++) {
                $phoneNumberRand .= rand(0, 9);
            }
            DB::table('member')->insert([
                'id_pengguna' => $id+1,
                'nama_member' => $namaMember[$id],
                'tgl_lahir_member' => $bornDateRand,
                'no_telp_member' => $phoneNumberRand,
                'alamat_member' => $jalanMember[$id],
                'created_at' => $joinDateRand,
            ]); 
            $member = member::where('nama_member', $namaMember[$id])
            ->first();
            //* Ngeloop untuk aktivasi setiap member geess
            DB::table('transaksi_member')->insert([
                'id_pegawai' => 'P04' ,
                'id_member' => $member->id_member,
                'jenis_transaksi' => 'transaksi-aktivasi',
                'created_at' => $activedDate,
            ]);

            $dataTerakhir = DB::table('transaksi_member')
                    ->latest('created_at')
                    ->first();
            DB::table('transaksi_aktivasi')->insert([
                'tanggal_aktivasi' => $randomAktivasi,
                'tanggal_kadeluarsa' => $kadeluarsa,
                'nominal_aktivasi' => '3000000',
                'no_struk' => $dataTerakhir->no_struk_transaksi,
                'created_at' => $activedDate,
            ]);
            $member->tgl_kadeluarsa_aktivasi = $kadeluarsa;
            $member->save();
    
            //* Ngeloop Deposit Reguler setiap member

            DB::table('transaksi_member')->insert([
                'id_pegawai' => 'P04' ,
                'id_member' => $member->id_member,
                'jenis_transaksi' => 'transaksi-deposit-reguler',
                // 'created_at' => $randomDeposit,
            ]);

            $dataTerakhir =  transaksi_member::where('jenis_transaksi', '=', 'transaksi-deposit-reguler')
            ->where('id_pegawai', '=', 'P04')
            ->where('id_member', '=', $member->id_member)
            ->orderBy('created_at', 'desc')
            ->first();

                DB::table('transaksi_deposit_reguler')->insert([
                'tanggal_deposit' => $randomDeposit,
                'sisa_deposit' => 0,
                'nominal_deposit' => '3000000',
                'nominal_total' => '3300000',
                'id_promo'=> 1,
                'no_struk' => $dataTerakhir->no_struk_transaksi,
                // 'created_at' => $activedDate,
            ]);
            $member->total_deposit_uang = 3300000;
            $member->save();

            //* Kondisi Dia punya Depo Paket atau tidak
            $randomDepoOrNot = rand(0,1);
            if($randomDepoOrNot == 1){
                $randomDepositPaket = clone $randomAktivasi;
                $randomDepositPaket = $randomAktivasi->addDays(rand(0,100));
                $tanggalKadeluarsa = clone $randomDepositPaket;
                $kelas = rand(1,20);
                DB::table('transaksi_member')->insert([
                    'id_pegawai' => 'P04' ,
                    'id_member' => $member->id_member,
                    'jenis_transaksi' => 'transaksi-deposit-paket',
                    // 'created_at' => $randomDepositPaket,
                ]);
                $dataTerakhir =  transaksi_member::where('jenis_transaksi', '=', 'transaksi-deposit-reguler')
                ->where('id_pegawai', '=', 'P04')
                ->where('id_member', '=', $member->id_member)
                ->orderBy('created_at', 'desc')
                ->first();
    
                DB::table('transaksi_deposit_paket')->insert([
                    'tanggal_deposit' => $randomDepositPaket,
                    'nominal_deposit_kelas' => 6,
                    'nominal_uang' => '750000',
                    'tanggal_kadeluarsa' => $tanggalKadeluarsa->addMonths(1),
                    'id_promo'=> 2,
                    'no_struk' => $dataTerakhir->no_struk_transaksi,
                    'id_kelas' => $kelas,
                    // 'created_at' => $randomDepositPaket,
                ]);
                $member->id_kelas = $kelas;
                $member->total_deposit_paket = 6;
                $member->tgl_kadeluarsa_paket = $tanggalKadeluarsa->addMonths(1);
                $member->save();

            }


            




        }
    }
}