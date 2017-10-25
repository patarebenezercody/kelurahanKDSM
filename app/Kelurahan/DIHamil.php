<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DIHamil extends Model
{
    //Daftar Ibu Hamil Kelurahan Darat KEC.Medan Baru Tahun 2017
    protected $table = 'ibuhamils';
	protected $fillable = ['namaibuhamil', 'namasuami'];
}
