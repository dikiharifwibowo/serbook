@extends('layouts.app')
@extends('layouts.modal')
<br><br><br>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
            <div class="col-lg-8" style="padding-right: 0px; display: inline;">
                <div class="card">
                    <div class="card-block">
                        <h6 class="alert alert-danger"><b>Simbol dengan tanda bintang (*) wajib diisi</b></h6><br>
                            @if(count($errors)>0)
                            <div class="alert alert-danger">
                              <ul>
                                @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                              </ul>
                            </div>
                            @endif

                            @if(session('success'))
                            <div class="alert alert-success">
                              {{session('success')}}
                            </div>
                            @endif

                            @if(session('error'))
                            <div class="alert alert-danger">
                              {{session('error')}}
                            </div>
                            @endif
                        <form action="" method="post" enctype="multipart/form-data">

                           {{ csrf_field() }}
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input placeholder="Judul Buku" name="judul" type="text" class="validate">
                                    </div>
                                </div>
                               
                                <select name="kategori_id" class="form-control">
                                   <option value="" disabled selected>Pilih Kategori Buku</option>
                                    <option value="3">Novel</option>
                                    <option value="5">Biograpi</option>
                                    <option value="4">Agama</option>
                                </select>   
                                 <div class="form-group form-float">
                                    <div class="form-line">
                                         <textarea name="isi" placeholder="Deskripsi Iklan" style="height: 120px;"></textarea> 
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                <div class="form-line">
                                    <div class="row">
                                        <div class="col s6">
                                            <img src="http://placehold.it/100x100" id="showgambar" style="max-width:200px;max-height:200px;float:left;" />
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="input-field col s6">
                                          <input type="file" id="inputgambar" name="gambar" class="validate"/ >
                                        </div>
                                    </div>
                                    <div class="helf-info"> <small>Tambah foto dan dapatkan respon 5X lebih banyak</small> </div>
                                </div>
                                </div>
                                 <select name="provinsi" class="form-control">
                                   <option value="" disabled selected>Pilih Provinsi</option>
                                    <option value="aceh">DI Aceh</option>
                                    <option value="sumut">Sumatera Utara</option>
                                    <option value="sumbar">Sumatera Barat</option>
                                    <option value="riau">Riau</option>
                                    <option value="kepriau">Kepulauan Riau</option>
                                    <option value="kepbangka">Kepulauan Bangka Belitung</option>
                                    <option value="jambi">Jambi</option>
                                    <option value="bengkulu">Bengkulu</option>
                                    <option value="lampung">Lampung</option>
                                    <option value="jakarta">DKI Jakarta</option>
                                    <option value="jabar">Jawa Barat</option>
                                    <option value="banten">Banten</option>
                                    <option value="jateng">Jawa Tengah</option>
                                    <option value="yogyakarta">DI Yogyakarta</option>
                                    <option value="jatim">Jawa Timur</option>
                                    <option value="kalbar">Kalimantan Barat</option>
                                    <option value="kalteng">Kalimantan Tengah</option>
                                    <option value="kalut">Kalimantan Utara</option>
                                    <option value="kaltim">Kalimantan Timur</option>
                                    <option value="kalsel">Kalimantan Selatan</option>
                                    <option value="bali">Bali</option>
                                    <option value="ntb">Nusa Tenggara Barat</option>
                                    <option value="ntt">Nusa Tenggara Timur</option>
                                    <option value="sulut">Sulawesi Utara</option>
                                    <option value="gorontalo">Gorontalo</option>
                                    <option value="sulteng">Sulawesi Tengah</option>
                                    <option value="sulbar">Sulawesi Barat</option>
                                    <option value="sulteng">Sulawesi Tenggara</option>
                                    <option value="malut">Maluku Utara</option>
                                    <option value="maluku">Maluku</option>
                                    <option value="pabar">Papua Barat</option>
                                    <option value="irianjaya">Papua/Irian Jaya</option>
                                </select> 
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input placeholder="Penulis" name="penulis" type="text" class="validate">
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input placeholder="Penerbit" name="penerbit" type="text" class="validate">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <button class="btn btn-success" type="submit">SUBMIT</button>
                                        <button class="btn btn-default" type="reset">Reset</button>
                                    </div>
                                </div> 
                            </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4"  style="padding-left: : 0px;">
                <div class="card">
                    <div class="card-block">
                        <ul>
                     <li style="margin: 20px;"><a href="{{ url('iklan') }}"><font>   Iklan</font></a></li> 
                     <li style="margin: 20px;"><a href="{{ url('pesan') }}"><font>   Pesan</font></a></li> 
                     <li style="margin: 20px;"><a href="{{ url('pengaturan') }}"><font>   Pengaturan</font></a></li> 
                     
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>