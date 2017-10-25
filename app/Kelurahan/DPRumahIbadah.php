<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DPRumahIbadah extends Model
{
    // Daftar Pengurus Rumah Ibadah Dan Imam MESJID Penerima Bantuan
    // Pemerintah Kota MEDAN Tahun 2017
    protected $table = 'prumahibadahs';
	protected $fillable = ['nama', 'nik'];
}
