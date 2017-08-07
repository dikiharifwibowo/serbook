@extends('layouts.app')
@extends('layouts.modal')

<br><br><br>
    @section('content')
    <!--Content-->
    <div class="container">
        <div class="row">
            <div class="card" style="display: inline; height: 50px; width: 100%; padding: 5px;">
                <a href="#">
                <b> Novel <strong> / </strong></b> <b> Agama <strong> / </strong></b> <b> Technology <strong> / </strong></b> <b> Sains <strong> / </strong></b><b> Sejarah <strong> / </strong></b> <b> Komik <strong> / </strong></b> 
                </a>
            </div>
        </div>
        <br>
        <li class="nav nav-item">
            <form class="nav-link" action="{{ url('search') }}" method="post" style="margin: 0px; padding: 0px;">
                        {{ csrf_field() }}
                <input type="search" style="background: #ededed url('{{ asset('theme/img/sprite-hm.png') }}') no-repeat 8px -58px;"
    " id="search1" name="search" placeholder="Semua Provinsi"  data-toggle="modal" data-target="#myModal">
                <input type="search" name="search" placeholder="Cari Judul, Pengarang ...">
            </form>
        </li>
        <hr> 
        @if (Request::segment(2) === null)
            <h2 align="center">Pencarian berdasarkan "{{ $cari }}"</h2>
        @else
            <h2 align="center">Buku Berdasarkan Kategori "{{ Request::segment(2) }}"</h2>
        @endif  
        <hr>
        <div class="row">
             <div class="col-lg-12">
                <div class="row">
                   <?php foreach ($category as $post) { ?>
                    <div class="col-lg-3" style="margin-bottom: 20px;">
                        <div class="card" style="height: 400px;">

                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                        	<a href="{{ url('/'.$post['judul']) }}">
	                            <img style="height: 280px; width: 100%;" src="http://i.imgur.com/eQh9otF.png" class="img-fluid" alt="">
	                            <p align="center" style="margin: 10px;">
	                            <b style="" class="card-title"><strong><?php echo substr(strip_tags($post['judul']),0,100); ?></strong></b>
	                            <p style="margin: 2px;" align="center">Rp. 70.000</p>
                            </a>
                        </p>
                        </div>
  						
                        </div>
                        <!--/.Card-->
                    </div>
                    <?php } ?>
                </div>
             </div>
        </div>
    
    </div>
    <!--/.Content-->