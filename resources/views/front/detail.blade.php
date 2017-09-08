@extends('layouts.app')
@extends('layouts.modal')
<br><br><br>
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
        <li class="nav nav-item">
                <form class="nav-link" action="{{ url('search') }}" method="post" style="margin: 0px; padding: 0px;">
                    {{ csrf_field() }}
                    <input type="search" style="background: #ededed url('{{ asset('theme/img/sprite-hm.png') }}') no-repeat 8px -58px;" id="search1" name="provinsi" placeholder="Semua Provinsi"  data-toggle="modal" data-target="#myModal">
                    <input type="search" id="search2" name="search" placeholder="2.569.870 Buku di Sekitar Anda">
                    <button class="btn btn-primary" style="height: 50px; -webkit-border-radius: 10em;
                        -moz-border-radius: 10em;
                        border-radius: 10em;">Cari</button>
                </form>
             </li>
    </li>
	<br>
	<div class="row">
		<div class="col-lg-12">
			<div class="row">
			<div class="col-lg-8" style="padding-right: 0px; display: inline;">
				<div class="card">
					<div class="card-block">
						<h2><strong>{{ $data->judul }}</strong></h2>
						<i class="large material-icons">location_on</i> {{ $data->provinsi }}   <i class="large material-icons">access_time</i> via HP {{ \Carbon\Carbon::parse($data->updated_at)->format('d M Y H:i:s')}}, ID iklan: 17682 <i class="large material-icons">stars</i> Favorit    <i class="large material-icons">remove_red_eye</i> dilihat : 1.239 </b>
					</div>
					<div class="card-block">
						<div class="row">
							<div class="col-lg-5">
							<img src="{{ asset('img/iklan/'.$data->cover)  }}" style="width: 100%; height: 400px;">
							</div>
							<div class="col-lg-7">
								<table>
									<tr>
										<td>Penulis</td>
										<td> : </td>
										<td>{{ $data->penulis }}</td>
									</tr>
									<tr>
										<td>Penerbit</td>
										<td> : </td>
										<td>{{ $data->penerbit }}</td>
									</tr>
								</table>
								<br>
								{{ $data->isi }}

							</div>
						</div>

					</div>
					<div class="card-block">
						<div id="disqus_thread"></div>
					</div>
					
				</div>
			</div>
			<div class="col-lg-4"  style="padding-left: : 0px;">
				<div class="card">
					<div class="card-block">
						<div class="card-block" style="background-color: #27A5D7; margin-bottom: 3px;">
							<h4> RP. {{ $data->harga }} </h4>
						</div>
						<div class="card-block" style="background-color: #D9DFE1; margin-bottom: 3px;">
							<h4> <i class="large material-icons">person_pin</i> {{ $data->user->name }} </h4>
						</div>
						<div class="card-block" style="background-color: #D9DFE1; margin-bottom: 3px;">
							<h4> <i class="large material-icons">phone</i> 
							{{ $data->handphone }}</h4>
						</div>
						<div class="card-block" style="background-color: #D9DFE1;margin-bottom: 3px; ">
							<h4> <i class="large material-icons">flag</i> Laporkan iklan ini</h4>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://sourcetika.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
<script id="dsq-count-scr" src="//sourcetika.disqus.com/count.js" async></script>