<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tb_buku extends Model
{
    //relasi ke table kategori
	public function categori() {

    	return $this->belongsTo(Tb_category::class);
    	//hasOne
    	//hasMany
    	//HASmANYtHROUGJ
    	//belongsTo
    	//belingsMany
    }
}
