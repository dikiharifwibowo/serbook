@section('modal')
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
                            <li><a href="#">DI Aceh</a></li>
                            <li><a href="#">Sumatera Utara</a></li>
                            <li><a href="#">Sumatera Barat</a></li>
                            <li><a href="#">Riau</a></li>
                            <li><a href="#">Kepulauan Riau</a></li>
                            <li><a href="#">Kepulauan Bangka Belitung</a></li>
                            <li><a href="#">Jambi</a></li>
                            <li><a href="#">Bengkulu</a></li>
                           
                        </ul>

                    </div>
                     <div class="col-lg-3">
                        <ul>
                            <li><a href="#">Lampung</a></li>
                            <li><a href="#">DKI Jakarta</a></li>
                            <li><a href="#">Jawa Barat</a></li>
                            <li><a href="#">Banten</a></li>
                            <li><a href="#">Jawa Tengah</a></li>
                            <li><a href="#">DI Yogyakarta</a></li>
                            <li><a href="#">Jawa Timur</a></li>
                            <li><a href="#">Kalimantan Barat</a></li>
                            <li><a href="#">Kalimantan Tengah</a></li>
                            <li><a href="#">Kalimantan Utara</a></li>
                        </ul>

                    </div>
                     <div class="col-lg-3">
                        <ul>
                            <li><a href="#">Kalimantan Timur</a></li>
                            <li><a href="#">Kalimantan Selatan</a></li>
                            <li><a href="#">Bali</a></li>
                            <li><a href="#">Nusa Tenggara Barat</a></li>
                            <li><a href="#">Nusa Tenggara Timur</a></li>
                            <li><a href="#">Sulawesi Utara</a></li>
                            <li><a href="#">Gorontalo</a></li>
                            <li><a href="#">Sulawesi Tengah</a></li>
                            <li><a href="#">Sulawesi Barat</a></li>
                            <li><a href="#">Sulawesi Tenggara</a></li>
                        </ul>

                    </div>
                     <div class="col-lg-3">
                        <ul>
                            <li><a href="#">Maluku Utara</a></li>
                            <li><a href="#">Maluku</a></li>
                            <li><a href="#">Papua Barat</a></li>
                            <li><a href="#">Papua/Irian Jaya</a></li>
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