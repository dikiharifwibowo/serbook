<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Tb_buku;
use App\Tb_category;
use Image;
use Illuminate\Support\Str; //manggil str utk details artikel

class IklanController extends Controller
{
    public function save(Request $request) {
    	//$request->nim;
    	//dd($request->all()); //sama ky print
    	$this->validate($request,[
    		'judul' => 'required|unique:Tb_bukus',
    		'kategori_id' => 'required',
    		'isi' => 'required',
    		'gambar' => 'required',
    		'provinsi' => 'required',
    		'penulis' => 'required',
    		'penerbit' => 'required'
    	]);


    	//$dicari = Post::where('id',$request->id)->first();
    	$member = new Tb_buku();
    	$member->user_id = Auth::id();
    	$member->category_id = $request->kategori_id;

        //upload gambar (belum di resize)
        $file       = $request->file('gambar');
        $fileName   = $file->getClientOriginalName();
        $request->file('gambar')->move("img/iklan", $fileName);

        $member->cover = $fileName;
        $member->penerbit = $request->penerbit;
        $member->penulis = $request->penulis;
        $member->provinsi = $request->provinsi;
    	$member->judul = $request->judul;
        $member->slug_judul = Str::slug($request->judul);
    	$member->isi = $request->isi;

        if (Auth::user()->level == 'admin') {
            $member->status = 'acc';
        }

    	if ($member->save()) {
    		return redirect('iklan')->with('success','Iklan berhasil di tambahkan'); //sesion
    	} //jika true maka di bawah tdk di jalankan

    	return redirect('iklan')->with('error','Terjadi Kesalahan');
    }

    public function search(Request $request) {
        //$request->nim;
        //dd($request->all()); //sama ky print
        // $this->validate($request,[
        //     'search' => '',
        //     'provinsi' => ''
        // ]);
        $categorynav = Tb_category::all();
        $hasil = Tb_buku::where('provinsi', 'like', "%$request->provinsi%")
        ->orWhere([
                    ['judul', 'like', "%$request->search%"],
                    ['penulis', 'like', "%$request->search%"],
                    ['penerbit', 'like', "%$request->search%"]
                    ])
        ->paginate(8); //or where atau and 
        //member::where('nim','15.01.3482')->first() ada juga pake get();
        // return view('front.tech',['tech' => $hasil, 'cari' => $tech]);
        return view('front.category',['category' => $hasil, 'cari' => $request->search,'categorynav' => $categorynav]);
    }
}
