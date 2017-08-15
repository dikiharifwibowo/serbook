<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon-32x32.png') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Serbook</title>



    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('theme/css/font-awesome.min.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('theme/css/bootstrap.min.css') }}" rel="stylesheet">
    @yield('login')
    <!-- Material Design Bootstrap -->
    <link href="{{ asset('theme/css/mdb.min.css') }}" rel="stylesheet">
    <!-- Template styles -->
     <style rel="stylesheet">
        /* TEMPLATE STYLES */
        /* Necessary for full page carousel*/
        .sf-back-to-top {
    background-color: #50A1CB; /* button color */
    color: white; /* text/arrow color */ 
    display: none;
    z-index: 999;
    /* float in bottom right corner */
    /* 20 pixels from edge */
    position: fixed;
    right: 20px;
    bottom: 20px;
    /* size of button is 50 pixels*/
    width: 50px;
    height: 50px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box; 
    /* round button */
    -webkit-border-radius: 50%;
    border-radius: 50%;
}

a.sf-back-to-top {
    font-weight: 600;
    letter-spacing: 2px;
    font-size: 12px;
    text-transform: uppercase;
    text-align: center;
    line-height: 1.6;
    padding-left: 2px;
    padding-top: 4px;    
}

a.sf-back-to-top .arrow:before {
    content: "\e02d";
    font-family: 'squarespace-ui-font';
    font-style: normal;
    font-weight: 600;
    font-size: 18px;
    line-height: 1;
    speak: none;
    -webkit-font-smoothing: antialiased;
    content: "\e02d";
    text-align: center;
    display: block;
    vertical-align: middle;
    transform: rotate(-90deg);
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    cursor: pointer;
    margin-left: -4px;
}

        html,
        body {
            height: 100%;
        }
        /* Navigation*/
        
        .navbar {
            background-color: #33b5e5;
        }
        
        .top-nav-collapse {
            background-color: #33b5e5;
        }
        
        footer.page-footer {
            background-color: #33b5e5;
        }
        
        @media only screen and (max-width: 768px) {
            .navbar {
                background-color: #4285F4;
            }
        }
        
        .scrolling-navbar {
            -webkit-transition: background .5s ease-in-out, padding .5s ease-in-out;
            -moz-transition: background .5s ease-in-out, padding .5s ease-in-out;
            transition: background .5s ease-in-out, padding .5s ease-in-out;
        }
        /* Carousel*/
        
        .carousel {
            height: 50%;
        }
        
        @media (max-width: 776px) {
            .carousel {
                height: 100%;
            }
            
        }
        #map {  
                max-width: 100%;
                height: 200px;
                width: 100%;
        }
        .carousel-item,
        .active {
            height: 100%;
        }
        
        .carousel-inner {
            height: 100%;
        }
        
        /*Caption*/
        
        .flex-center {
            color: #fff;
        }
input {
    outline: none;
}
input[type=search] {
    -webkit-appearance: textfield;
    -webkit-box-sizing: content-box;
    font-family: inherit;
    font-size: 100%;
}
input[type=search1] {
    -webkit-appearance: textfield;
    -webkit-box-sizing: content-box;
    font-family: inherit;
    font-size: 100%;
}
input::-webkit-search-decoration,
input::-webkit-search-cancel-button {
    display: none; 
}

#search1 {
    background: #ededed url() no-repeat 9px center;
     width: 300px;
}

input[type=search] {
    background: #ededed url(https://static.tumblr.com/ftv85bp/MIXmud4tx/search-icon.png) no-repeat 9px center;
    border: solid 1px #ccc;
    padding: 9px 10px 9px 32px;
     width: 700px;
    -webkit-border-radius: 10em;
    -moz-border-radius: 10em;
    border-radius: 10em;
    
    -webkit-transition: all .5s;
    -moz-transition: all .5s;
    transition: all .5s;
}

input[type=search]:focus {
   /* width: 130px; di klik nanti jadi pendek */  
    background-color: #fff;
    border-color: #66CC75;
    
    -webkit-box-shadow: 0 0 5px rgba(109,207,246,.5);
    -moz-box-shadow: 0 0 5px rgba(109,207,246,.5);
    box-shadow: 0 0 5px rgba(109,207,246,.5);
}


input:-moz-placeholder {
    color: #999;
}
input::-webkit-input-placeholder {
    color: #999;
}

/*untuk tabs*/

.hide {
        display: none;
}

.tab-content {
        padding:25px;
}

#material-tabs {
        position: relative;
        display: block;
      padding:0;
        border-bottom: 1px solid #e0e0e0;
}

#material-tabs>a#tab2-tab,a#tab3-tab,a#tab4-tab,a#tab1-tab {
        position: relative;
     display:inline-block;
        text-decoration: none;
        padding: 22px;
        text-transform: uppercase;
        font-size: 14px;
        font-weight: 600;
        color: #424f5a;
        text-align: center;
        outline:;
}

#material-tabs>a.active {
        font-weight: 700;
        outline:none;
}

#material-tabs>a:not(.active):hover {
        background-color: inherit;
        color: #7c848a;
}


.yellow-bar {
        position: absolute;
        z-index: 10;
        bottom: 0;
        height: 3px;
        background: #458CFF;
        display: block;
        left: 0;
        transition: left .2s ease;
        -webkit-transition: left .2s ease;
}

#tab1-tab.active ~ span.yellow-bar {
        left: 0;
        width: 80px;
}

#tab2-tab.active ~ span.yellow-bar {
        left:84px;
        width: 82px;
}

#tab3-tab.active ~ span.yellow-bar {
        left: 170px;
        width: 95px;
}

#tab4-tab.active ~ span.yellow-bar {
        left:280px;
        width: 105px;
}
    </style>
</head>


<body>
<div id=app>

    <!--Navbar-->
    <nav class="navbar navbar-toggleable-md navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>
         
            </button>
               <a class="navbar-brand"  href="{{url('/')}}">

                <strong><img src="#" style="width: 80px; height: 30px;" ></strong>

            </a>
            <div class="collapse navbar-collapse" id="navbarNav1">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="navbar-brand" href="{{url('/')}}">SerBoOk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Cari Buku Cepat Beli Dekat</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                        @if (Auth::guest())
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}"><i class="small material-icons">perm_identity</i> Akun Saya</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('iklan') }}"><i class="small material-icons">add</i> Pasang Iklan</a></li>
                        @else
                        <li class="nav-item dropdown btn-group">
                            <a class="nav-link" href="{{ url('iklan') }}"><i class="small material-icons">add</i> Pasang Iklan</a>
                            <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} </a>

                            <div class="dropdown-menu dropdown" aria-labelledby="dropdownMenu1">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout
                                </a>
                                <a class="dropdown-item" href="{{ url('home') }}">Dashboard
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                </form>
                            </div>
                        </li>
                        @endif
                    </ul>
                    @yield('search')
              
            </div>
        </div>
    </nav>
    @yield('caroseal')
    <!--/.Navbar-->    
    @yield('content')

    <div class="container-fluid" >
     <img src="{{ asset('/img/ftr-top-bg.png') }}">
      <a href="#" class="sf-back-to-top"><span class="arrow"></span>Top</a>
    </div>
   
<!--Footer-->
    <footer class="page-footer center-on-small-only" style="margin-top: 0px;">
        
        <!--Footer Links-->
        <div class="container-fluid">
            <div class="row">

                <!--First column-->
                <div class="col-lg-3 offset-lg-1 hidden-lg-down">
                    <h5 class="title">ABOUT MATERIAL DESIGN</h5>
                    <p>Material Design (codenamed Quantum Paper) is a design language developed by Google. </p>
                </div>
                <!--/.First column-->

                <hr class="hidden-md-up">

                <!--Second column-->
                <div class="col-lg-2 col-md-4 offset-lg-1">
                    <h5 class="title">Pusat Bantuan</h5>
                    <ul>
                        <li><a href="#!">Syarat & Ketentuan</a></li>
                        <li><a href="#!">Kebijakan Privasi</a></li>
                        <li><a href="#!">Cara Menggunakan Serbook</a></li>
                        <li><a href="#!">Tips Jual Beli Aman</a></li>
                    </ul>
                </div>
                <!--/.Second column-->

                <hr class="hidden-md-up">

                <!--Third column-->
                <div class="col-lg-2 col-md-4">
                    <h5 class="title">Peta Situs</h5>
                    <ul>
                        <li><a href="#!">Iklan Berdasarkan Lokasi</a></li>
                        <li><a href="#!">Pencarian Populer</a></li>
                        <li><a href="#!">Join Serbook</a></li>
                    </ul>
                </div>
                <!--/.Third column-->

                <hr class="hidden-md-up">

                <!--Fourth column-->
                <div class="col-lg-2 col-md-4">
                    <h5 class="title">Follow me on</h5>
                    <ul>
                        <li><a href="#!">Facebook</a></li>
                        <li><a href="#!">Instagram</a></li>
                        <li><a href="#!">Twitter</a></li>
                        <li><a href="#!">Pinterest</a></li>
                    </ul>
                </div>
                <!--/.Fourth column-->

            </div>
        </div>
        <!--/.Footer Links-->

        <hr>
         <!--Copyright-->
        <div class="copyright">
            <div class="container-fluid" align="center" style="height: 40px;">
                © 2017 Copyright: <a href="http://www.MDBootstrap.com" rel="nofollow"> Serbook.com </a><br>

            </div>
        </div>
        <!--/.Copyright-->

    </footer>
</div>
    <!--/.Footer-->

    <!-- SCRIPTS -->

   <!-- JQuery -->

     <script type="text/javascript" src="{{ asset('theme/js/jquery-2.2.3.min.js') }}"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{ asset('theme/js/tether.min.js') }}"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ asset('theme/js/bootstrap.min.js') }}"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{ asset('theme/js/mdb.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    
    <script>
    new WOW().init();
    </script>
    @yield('modal')
    <script type="text/javascript">
        $(document).ready(function() {
        $('#material-tabs').each(function() {

                var $active, $content, $links = $(this).find('a');

                $active = $($links[0]);
                $active.addClass('active');

                $content = $($active[0].hash);

                $links.not($active).each(function() {
                        $(this.hash).hide();
                });

                $(this).on('click', 'a', function(e) {

                        $active.removeClass('active');
                        $content.hide();

                        $active = $(this);
                        $content = $(this.hash);

                        $active.addClass('active');
                        $content.show();

                        e.preventDefault();
                });
        });
});
    </script>
</body>

</html>