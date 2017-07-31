    @extends('layouts.app')
    
        <br>
        @section('content')
        <!--Content-->
        <div class="container">
        <br><br>
        <img src="{{asset('img/iklan-olx-atas.jpg')}}" class="img-fluid" alt="iklan" style="width: 100%;"><br>
            <li class="nav nav-item">
                <form class="nav-link" action="{{ url('search') }}" method="post" style="margin: 0px; padding: 0px;">
                    {{ csrf_field() }}
                    <input type="search" style="background: #ededed url('{{ asset('theme/img/sprite-hm.png') }}') no-repeat 8px -58px;"
" id="search1" name="search" placeholder="Semua Provinsi"  data-toggle="modal" data-target="#myModal">
                    <input type="search" name="search" placeholder="2.569.870 Iklan di Sekitar Anda">
                </form>
             </li>
            <br>

                <example> 
                </example>
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                    <?php 
                       foreach ($category as $value) {  
                    ?>
                        <div class="col-lg-3" >
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



  <!-- Modal -->
    <div id="myModal" class="modal fade location-modal" role="dialog">
      <div class="modal-dialog" style="align-content: center;">

        <!-- Modal content-->
        <div class="modal-content" style="width: 800px; height: 400px; ">
          <div class="modal-header">
            <!-- <h4 class="modal-title">Search Location</h4> -->
            <div class="col-lg-10 location-modal-search">
              <input type="search"  placeholder="Location" style="background: #ededed url('{{ asset('theme/img/sprite-hm.png') }}') no-repeat 8px -58px; width: 300px;">
            </div>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-3">
                        <ul>
                            <li><b><strong>Semua Provinsi</strong></b></li>
                            <li><a href="#">Abbottabad</a></li>
                            <li><a href="#">Abbottabad</a></li>
                            <li><a href="#">Abbottabad</a></li>
                            <li><a href="#">Abbottabad</a></li>
                            <li><a href="#">Abbottabad</a></li>
                            <li><a href="#">Abbottabad</a></li>
                            <li><a href="#">Abbottabad</a></li>
                            <li><a href="#">Abbottabad</a></li>
                            <li><a href="#">Abbottabad</a></li>
                        </ul>

                    </div>
                     <div class="col-lg-3">
                        <ul>
                            <li><a href="#">Abbottabad</a></li>
                            <li><a href="#">Abbottabad</a></li>
                            <li><a href="#">Abbottabad</a></li>
                            <li><a href="#">Abbottabad</a></li>
                            <li><a href="#">Abbottabad</a></li>
                            <li><a href="#">Abbottabad</a></li>
                            <li><a href="#">Abbottabad</a></li>
                            <li><a href="#">Abbottabad</a></li>
                            <li><a href="#">Abbottabad</a></li>
                            <li><a href="#">Abbottabad</a></li>
                        </ul>

                    </div>
                     <div class="col-lg-3">
                        <ul>
                            <li><a href="#">Abbottabad</a></li>
                            <li><a href="#">Abbottabad</a></li>
                            <li><a href="#">Abbottabad</a></li>
                            <li><a href="#">Abbottabad</a></li>
                            <li><a href="#">Abbottabad</a></li>
                            <li><a href="#">Abbottabad</a></li>
                            <li><a href="#">Abbottabad</a></li>
                            <li><a href="#">Abbottabad</a></li>
                            <li><a href="#">Abbottabad</a></li>
                            <li><a href="#">Abbottabad</a></li>
                        </ul>

                    </div>
                     <div class="col-lg-3">
                        <ul>
                            <li><a href="#">Abbottabad</a></li>
                            <li><a href="#">Abbottabad</a></li>
                            <li><a href="#">Abbottabad</a></li>
                            <li><a href="#">Abbottabad</a></li>
                            <li><a href="#">Abbottabad</a></li>
                            <li><a href="#">Abbottabad</a></li>
                            <li><a href="#">Abbottabad</a></li>
                            <li><a href="#">Abbottabad</a></li>
                            <li><a href="#">Abbottabad</a></li>
                            <li><a href="#">Abbottabad</a></li>
                        </ul>

                    </div>
                </div>
   
              
            </div><!--/popular-cities-box-->
            <div class="regions-main">
              
            </div>


          </div>
<!--           <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div> -->
        </div>

      </div><!-- /Modal content-->
    </div><!-- /Modal -->
@endsection

