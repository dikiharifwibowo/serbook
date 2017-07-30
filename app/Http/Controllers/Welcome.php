<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_category;

class Welcome extends Controller
{
    public function index() {
		// Game::limit(30)->offset(30)->get();
		$category = tb_category::all();
	    return view('welcome', ['category' => $category]);
	}

}
