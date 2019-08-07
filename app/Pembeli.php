<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    protected $table="pembelis";
    protected $primaryKey="pembeli_no_ktp";
    protected $fillable=['pembeli_no_ktp','pembeli_nama','pembeli_alamat',
                         'pembeli_telpon','pembeli_hp'];
   
}
