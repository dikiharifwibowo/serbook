@extends('layouts.app')
<br><br><br>
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
	<br>
	<div class="row">
		<div class="col-lg-12">
			<div class="row">
			<div class="col-lg-8" style="padding-right: 0px; display: inline;">
				<div class="card">
					<div class="card-block">
						<h2><strong>Allah, Please Forgive Me</strong></h2>
						<i class="large material-icons">location_on</i> Jakarta Timur, Jakarta D.K.I. <i class="large material-icons">access_time</i> via HP 12-07-2017 10:15:00, ID iklan: 17682 <i class="large material-icons">stars</i> Favorit
					</div>
					<div class="card-block">
							<img src="http://i.imgur.com/eQh9otF.png" style="width: 100%; height: 400px;">

					</div>
					<div class="card-block">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</div>
					 <b style="display: inline;">dilihat : 1.239 </b>
				</div>
			</div>
			<div class="col-lg-4"  style="padding-left: : 0px;">
				<div class="card">
					<div class="card-block">
						<div class="card-block" style="background-color: #27A5D7; margin-bottom: 3px;">
							<h4> RP. 40.300 </h4>
						</div>
						<div class="card-block" style="background-color: #D9DFE1; margin-bottom: 3px;">
							<h4> <i class="large material-icons">person_pin</i> Dikih Arif </h4>
						</div>
						<div class="card-block" style="background-color: #D9DFE1; margin-bottom: 3px;">
							<h4> <i class="large material-icons">phone</i> +628-23287.....</h4>
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