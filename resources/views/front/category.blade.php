@extends('layouts.app')

<br><br>
    @section('content')
    <!--Content-->
    <div class="container">
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
                    <div class="col-lg-2" style="margin-bottom: 20px;">
                        <div class="card" style="height: 300px;">

                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img style="height: 250px; width: 100%;" src="https://ssvr.bukukita.com/babacms/displaybuku/101468_f.jpg" class="img-fluid" alt="">
                        </div>
  					<!-- 	<p align="center">
                            <h4 style="" class="card-title"><a href="{{ url('/'.$post->slug_judul) }}"><strong>lroem ipsuasdnasdas asdbasdkasd asdaskdas as asdas</strong></a> </h4>
                            <p style="margin: 2px;">Rp. 70.000</p>
                        </p> -->
                        </div>
                        <!--/.Card-->
                    </div>
                    <?php } ?>
                </div>
             </div>
        </div>
    
    </div>
    <!--/.Content-->