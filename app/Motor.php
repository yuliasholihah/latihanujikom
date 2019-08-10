<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Motor;
use Session;

class Motor extends Model
{
    protected $table="motors";
    protected $primaryKey="motor_kode";
    protected $fillable=['motor_kode','motor_merk','motor_warna_pilihan',
                         'motor_harga','motor_gambar'];
    public $timestamps = true;  
    
    public function belikridit()
    {
        return $this->hasMany('App\BeliKridit','id_beli_kridits');
    }

    public function belicash()
    {
        return $this->hasMany('App\BeliCash','id_beli_cashes');
    }
                         
}
