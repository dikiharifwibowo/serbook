    @extends('layouts.app')
    @extends('layouts.modal')
        <br>
        @section('content')
        <!--Content-->
        <div class="container">
        <br><br>
        <img src="{{asset('img/iklan-olx-atas.jpg')}}" class="img-fluid" alt="iklan" style="width: 100%;"><br>
            <li class="nav nav-item">
                <form class="nav-link" action="{{ url('search') }}" method="post" style="margin: 0px; padding: 0px;">
                    {{ csrf_field() }}
                    <input type="search" style="background: #ededed url('{{ asset('theme/img/sprite-hm.png') }}') no-repeat 8px -58px;" id="search1" name="search" placeholder="Semua Provinsi"  data-toggle="modal" data-target="#myModal">
                    <input type="search" name="search" placeholder="2.569.870 Buku di Sekitar Anda">
                </form>
             </li>
            <br>
          <div id=app>
        <template>
            <example>
            </example>
        </template>
    </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                    <?php 
                       foreach ($category as $value) {  
                    ?>
                        <div class="col-lg-2" >
                            <div style="border: none; margin-bottom: 0px; padding-bottom: 0px;">
                                <!--Card image-->
                                <div class="view overlay hm-white-slight">
                                    <a href="{{ url('/category/'.$value->category) }}">
                                    <img src="{{asset('img/buku.png')}}" class="img-fluid" alt="">
                                    <p align="center"><b>{{ $value->category }}</b></p>
                                    </a>
                                </div>                       
                          </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>


                <div class="col-lg-4">
                    <img src="{{asset('img/iklan-olx.png')}}" class="img-fluid" alt="">
               </div>
            </div>
        </div>
     
 </div>
</div>
<!--/.Content-->



  
@endsection

