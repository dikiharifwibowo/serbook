<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tb_category;

class Welcome extends Controller
{
    public function index() {
		// Game::limit(30)->offset(30)->get();
		$category = Tb_category::all();
	    return view('welcome', ['category' => $category]);
	}

}
