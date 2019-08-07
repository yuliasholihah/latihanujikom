<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BeliCash extends Model
{
    
    protected $table="beli_cashes";
    protected $primaryKey="cash_kode";
    protected $fillable=['cash_kode','pembeli_no_ktp','motor_kode','cash_tanggal',
                         'cash_bayar'];
   
}




