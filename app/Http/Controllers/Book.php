<?php

namespace App\Http\Controllers;
use App\Tb_buku;
use App\Tb_category;
use Illuminate\Http\Request;

class Book extends Controller
{
    public function detailbook($slug)
    {
    	$categorynav = Tb_category::all();
        $tampilkan = Tb_buku::where('judul', $slug)->first();
        return view('front.detail',['data' => $tampilkan,'categorynav' => $categorynav]);
    }
}
