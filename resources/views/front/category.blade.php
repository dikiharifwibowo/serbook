@extends('layouts.app')
@extends('layouts.modal')

<br><br><br>
    @section('content')
    <!--Content-->
    <div class="container">
        <div class="row" id="catnav">
            <div class="card"  style="display: inline;  width: 100%; padding: 5px;">
             
                <?php foreach ($categorynav as $cat) { ?>
              
                    <b> <a href="{{ url('category/'.$cat->category) }}"> {{ $cat->category }} </a> / </b>

                <?php } ?>
            
            </div>
        </div>
        <br>
        <li class="nav nav-item">
            <form class="nav-link" action="{{ url('search') }}" method="post" style="margin: 0px; padding: 0px;">
                    {{ csrf_field() }}
            <input type="search" style="background: #ededed url('{{ asset('theme/img/sprite-hm.png') }}') no-repeat 8px -58px;" id="search1" name="provinsi" placeholder="Semua Provinsi"  data-toggle="modal" data-target="#myModal">
            <input type="search" name="search" id="search2" placeholder="2.569.870 Buku di Sekitar Anda">
            <button class="btn btn-primary" style="height: 50px; -webkit-border-radius: 10em;
                        -moz-border-radius: 10em;
                        border-radius: 10em;">Cari</button>
            </form>
        </li>
        <hr> 
        @if (Request::segment(2) === null)
            <h2 align="center">Pencarian berdasarkan Provinsi</h2>
        @else
            <h2 align="center">Buku Berdasarkan  "{{ $cari }}"</h2>
        @endif  
        <hr>
        <div class="row">
             <div class="col-lg-12">
                <div class="row">
                   <?php foreach ($category as $post) { ?>
                    <div class="col-lg-2" style="margin-bottom: 20px;">
                        <div class="card" style="height: 400px;">

                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                        	<a href="{{ url('/'.$post['judul']) }}">
	                            <img style="height: 230px; width: 100%;" src="{{ asset('img/iklan/'.$post['cover']) }}" class="img-fluid" alt="">
	                            <p style="height: 50px;" align="center">
	                            <b><strong><?php echo substr(strip_tags($post['judul']),0,100); ?></strong></b>
                                </p>
	                            <p align="center" style="padding-bottom: 0px; margin-bottom: 0px;">Rp. {{ $post['harga'] }}</p>
                                @if ($post['harga']==15000)
                                <p align="center" style="padding-top: 0px; margin-top: 0px;">
                                    <img src="{{ asset('img/premium.png') }}" height="30px" width="30px">
                                </p>
                                @else 
                                <p align="center" style="padding-top: 30px; margin-top: 0px;"></p>
                                @endif
                                <p style="margin: 0px;" align="center">{{$post['provinsi']}}</p>
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