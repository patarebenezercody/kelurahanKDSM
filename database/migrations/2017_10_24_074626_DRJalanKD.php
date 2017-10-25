<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DRJalanKD extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dataruasjalans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namajalan');
            $table->string('pangkaljalan');
            $table->string('ujungjalan');
            $table->string('badanjalan');//Punya cucu : panjang(m),lebar(m),kondisi,konstruksi
            
            $table->string('bermjalan');//Punya cucu : panjang(m), lebar berm kiri jalan, lebar berm kanan jalan, kondisi, konstruksi
            
            $table->string('drainase');//Punya cucu : panjang(m), lebar drainase kiri(m), lebar drainase kanan(m), kondisi, konstruksi
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
        Schema::dropIfExists('dataruasjalans');
    }
}
