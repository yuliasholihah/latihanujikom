<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    protected $table="pembelis";
    protected $primaryKey="pembeli_no_ktp";
    protected $fillable=['pembeli_no_ktp','pembeli_nama','pembeli_alamat',
                         'pembeli_telpon','pembeli_hp'];
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
