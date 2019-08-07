<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeliKriditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beli_kridits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('kridit_kode');
            $table->Integer('pembeli_no_ktp');
            $table->Integer('paket_kode');
            $table->Integer('motor_kode');
            $table->Date('kridit_tanggal');
            $table->String('fotkopi_ktp');
            $table->String('fotokopi_kk');
            $table->String('fotokopi_slip_gaji');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beli_kridits');
    }
}
