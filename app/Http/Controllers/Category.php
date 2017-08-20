<?php

namespace App\Http\Controllers;
use App\Tb_buku;
use App\Tb_category;
use Illuminate\Http\Request;

class Category extends Controller
{
	
	public function slugcategory($category) {
        $categorynav = Tb_category::all();
		$result = Tb_buku::join('tb_categories', 'tb_categories.id', '=', 'tb_bukus.category_id')
		->where('tb_categories.category', 'like', "%$category%")
        ->orwhere('tb_bukus.provinsi', 'like', "%$category%")
		->paginate(8);
        return view('front.category',['category' => $result,'categorynav' => $categorynav]);
    }

    //  public function slugcategory($tech) {
    //     $hasil = Tb_buku::where('category', 'like', "%$tech%")
    //     ->paginate(8); //or where atau and 
    //     //member::where('nim','15.01.3482')->first() ada juga pake get();
    //     // return view('front.tech',['tech' => $hasil, 'cari' => $tech]);
    //     return view('front.category',['category' => $hasil]);
    // }
}
