@extends('layouts.app')
@section('dtcss')
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="">
 
@endsection

@section('content')
<br><br>

<div class="container" style="padding-top: 10px;">
    <img src="{{asset('img/iklan-olx-atas.jpg')}}" class="img-fluid" alt="iklan" style="width: 100%;"><br>
    <div class="row card">
        <header>
        <div id="material-tabs">
            <a id="tab1-tab" href="#tab1" class="active">IKLAN</a>
            <a id="tab2-tab" href="#tab2">BUKU</a>
            <a id="tab3-tab" href="#tab3">PESAN</a>
            <a id="tab4-tab" href="#tab4">PENGATURAN</a>
            <span class="yellow-bar"></span>
            <a href="#" style="margin: 20px;  float: right;">Saldo Akun Rp. 0 </a>
        </div>
    </header>

    <div class="tab-content">
        <div id="tab1">
            @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @endif
            <table class="display" cellspacing="0" width="100%" id="table">
                <thead>
                    <tr>
                        <th >Tanggal</th>
                        <th >Judul</th>
                        <th >Harga</th>
                        <th></th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($data as $item)
                    <tr>
                        <td>{{ $item->created_at}}</td>
                        <td>{{ $item->judul }}</td>
                        <td>Rp. {{ $item->harga }}</td>
                        <td><a href="" class="btn btn-success">Sundul Iklan</a></td>
                        <td><a href="{{ url($item->slug_judul ) }}"><i class="large material-icons">remove_red_eye</i> View</a> &nbsp &nbsp&nbsp  <a href="{{ url('/iklan/disable/'.$item->id) }}"><i class="large material-icons">delete</i> Nonaktifkan </a>@if($item->status=='off')<i class="large material-icons">highlight_off</i>off @endif</td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div id="tab2">
             <p>There are three basic ideas invoved in creating these tabs:</p>
            <ol>
                <li>Use anchor tags as tabs.</li>
                <li>Use a span class for the tab highlight.</li>
              <li>In your CSS, adjust the <strong>position</strong> of the highlight, as well as it's <strong>width</strong>, by detecting the anchor tag with an 'active' class. Then adjust its left property and width property. Add a transition in your CSS, <em>et voil&agrave;</em>.</li>
            </ol>
        </div>
        <div id="tab3">
            <p>Third tab content.</p>
             <ol>
                <li>Use anchor tags as tabs.</li>
                <li>Use a span class for the tab highlight.</li>
              <li>In your CSS, adjust the <strong>position</strong> of the highlight, as well as it's <strong>width</strong>, by detecting the anchor tag with an 'active' class. Then adjust its left property and width property. Add a transition in your CSS, <em>et voil&agrave;</em>.</li>
            </ol>
        </div>
              <div id="tab4">
            <p>empat tab content.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>
    </div>
</div>

@endsection
@section('dtjs')
    <!-- jQuery -->
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
 
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        } );
     </script>
@endsection