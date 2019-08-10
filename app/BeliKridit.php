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
    public $timestamps = true;


    public function motor()
    {
        return $this->belongsTo('App\Motor','id_motor');
    }
    public function user()
    {
        return $this->belongsTo('App\User','id_user');
    }
    public function pembeli()
    {
        return $this->belongsTo('App\Pembeli','id_pembeli');
    }
    public function kriditpaket()
    {
        return $this->belongsTo('App\KriditPaket','id_kridit_pakets');
    }
    
}
