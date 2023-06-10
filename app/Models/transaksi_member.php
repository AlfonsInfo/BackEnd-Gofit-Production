<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi_member extends Model
{
    use HasFactory;
    protected $table = 'transaksi_member';  
    protected $guarded = ['no_struk_transaksi'];  
    protected $primaryKey = 'no_struk_transaksi';
    
    protected $casts = [
        'no_struk_transaksi' => 'string'
    ];


    public function pegawai(){
        return $this->hasOne('App\Models\User\pegawai','id_pegawai','id_pegawai');
    }
    public function member(){
        return $this->hasOne('App\Models\User\member','id_member','id_member');
    }
    public function aktivasi(){
        return $this->belongsTo('App\Models\transaksi_aktivasi','no_struk_transaksi','no_struk');
    }
    public function deposit_uang(){
        return $this->belongsTo('App\Models\transaksi_deposit_reguler','no_struk_transaksi','no_struk');
    }
    public function deposit_kelas_paket(){
        return $this->belongsTo('App\Models\transaksi_deposit_paket','no_struk_transaksi','no_struk');
    }

}
