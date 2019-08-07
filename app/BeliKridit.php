<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BeliKridit extends Model
{
    protected $table="beli_kridits";
    protected $primaryKey="kridit_kode";
    protected $fillable=['kridit_kode','pembeli_no_ktp','paket_kode','motor_kode',
                         'kridit_tanggal','fotokopi_ktp','fotolopi_kk',
                         'fotokopi_slip_gaji'];
   
}
