<?php

namespace App\Http\Controllers;
use App\Tb_buku;
use Illuminate\Http\Request;

class Book extends Controller
{
    public function detailbook($slug)
    {
        $tampilkan = Tb_buku::where('judul', $slug)->first();
        return view('front.detail',['data' => $tampilkan]);
    }
}
