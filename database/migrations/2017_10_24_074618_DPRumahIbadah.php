<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DPRumahIbadah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * 
     * FIELD SAMA.
     * PERBEDAAN DI NAMA PENGURUS
     * DAFTAR PENGURUS :
     *  1.NAZIR MESJID, 2.NAZIR MUSHOLLA, 3.PENGURUS GEREJA,
     *  4.PENGURUS KELENTENG/KUIL/VIHARA,
     *  5.IMAM MESJID
     *  => MASING MASING MEMILIKI FIELD DIBAWAH.
     */
    public function up()
    {
        Schema::create('prumahibadahs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('nik');
            $table->string('jkelamin');
            $table->string('ttl');
            $table->string('alamat');
            $table->string('namatempatibadah');
            $table->string('alamattempatibadah');
            $table->string('norekbanksumut');
            $table->string('kantorcbgbanksumut');
            $table->string('nohp');
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
        Schema::dropIfExists('prumahibadahs');
    }
}
