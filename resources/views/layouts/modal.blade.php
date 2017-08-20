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
                <template>
                    <div class="panel-body">
                        <autocomplete></autocomplete>
                    </div>
                </template>
            </div>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-3">
                        <ul>
                            <li><b><strong>Semua Provinsi</strong></b></li>
                            <li ><a href="#" data-dismiss="modal" class="recipient-name" at="aceh">DI Aceh</a></li>
                            <li><a href="#" data-dismiss="modal" class="recipient-name" at="sumut">Sumatera Utara</a></li>
                            <li><a href="#" data-dismiss="modal" class="recipient-name" at="sumbar">Sumatera Barat</a></li>
                            <li><a href="#" data-dismiss="modal" class="recipient-name" at="riau">Riau</a></li>
                            <li><a href="#" data-dismiss="modal" class="recipient-name" at="kepriau">Kepulauan Riau</a></li>
                            <li><a href="#" data-dismiss="modal" class="recipient-name" at="kepbangka">Kepulauan Bangka Belitung</a></li>
                            <li><a href="#" data-dismiss="modal" class="recipient-name" at="jambi">Jambi</a></li>
                            <li><a href="#" data-dismiss="modal" class="recipient-name" at="bengkulu">Bengkulu</a></li>
                           
                        </ul>

                    </div>
                     <div class="col-lg-3">
                        <ul>
                            <li><a href="#" data-dismiss="modal" class="recipient-name" at="lampung">Lampung</a></li>
                            <li><a href="#" data-dismiss="modal" class="recipient-name" at="jakarta">DKI Jakarta</a></li>
                            <li><a href="#" data-dismiss="modal" class="recipient-name" at="jabar">Jawa Barat</a></li>
                            <li><a href="#" data-dismiss="modal" class="recipient-name" at="banten">Banten</a></li>
                            <li><a href="#" data-dismiss="modal" class="recipient-name" at="jateng">Jawa Tengah</a></li>
                            <li><a href="#" data-dismiss="modal" class="recipient-name" at="yogyakarta">DI Yogyakarta</a></li>
                            <li><a href="#" data-dismiss="modal" class="recipient-name" at="jatim">Jawa Timur</a></li>
                            <li><a href="#" data-dismiss="modal" class="recipient-name" at="kalbar">Kalimantan Barat</a></li>
                            <li><a href="#" data-dismiss="modal" class="recipient-name" at="kalteng">Kalimantan Tengah</a></li>
                            <li><a href="#" data-dismiss="modal" class="recipient-name" at="kalut">Kalimantan Utara</a></li>
                        </ul>

                    </div>
                     <div class="col-lg-3">
                        <ul>
                            <li><a href="#" data-dismiss="modal" class="recipient-name" at="kaltim">Kalimantan Timur</a></li>
                            <li><a href="#" data-dismiss="modal" class="recipient-name" at="kalsem">Kalimantan Selatan</a></li>
                            <li><a href="#" data-dismiss="modal" class="recipient-name" at="bali">Bali</a></li>
                            <li><a href="#" data-dismiss="modal" class="recipient-name" at="ntb">Nusa Tenggara Barat</a></li>
                            <li><a href="#" data-dismiss="modal" class="recipient-name" at="ntt">Nusa Tenggara Timur</a></li>
                            <li><a href="#" data-dismiss="modal" class="recipient-name" at="sulut">Sulawesi Utara</a></li>
                            <li><a href="#" data-dismiss="modal" class="recipient-name" at="gorontalo">Gorontalo</a></li>
                            <li><a href="#" data-dismiss="modal" class="recipient-name" at="sulteng">Sulawesi Tengah</a></li>
                            <li><a href="#" data-dismiss="modal" class="recipient-name" at="sulbar">Sulawesi Barat</a></li>
                            <li><a href="#" data-dismiss="modal" class="recipient-name" at="sultenggara">Sulawesi Tenggara</a></li>
                        </ul>

                    </div>
                     <div class="col-lg-3">
                        <ul>
                            <li><a href="#" data-dismiss="modal" class="recipient-name" at="maluk">Maluku Utara</a></li>
                            <li><a href="#" data-dismiss="modal" class="recipient-name" at="maluku">Maluku</a></li>
                            <li><a href="#" data-dismiss="modal" class="recipient-name" at="pabar">Papua Barat</a></li>
                            <li><a href="#" data-dismiss="modal" class="recipient-name" at="irianjaya">Papua/Irian Jaya</a></li>
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