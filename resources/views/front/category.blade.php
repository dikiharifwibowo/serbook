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