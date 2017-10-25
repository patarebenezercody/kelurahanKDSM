<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DRJalanKD extends Model
{
    //Daftar Ruas Jalan Kelurahan Darat
    protected $table = 'dataruasjalans';
	protected $fillable = ['namajalan', 'pangkaljalan'];
}
