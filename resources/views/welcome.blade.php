    @extends('layouts.app')
    
        <br>
        @section('content')
        <!--Content-->
        <div class="container">
            <hr>
            <h2 align="center">ARTIKEL TERBARU</h2>
            <hr>
            <div class="row">
               <div class="col-lg-9">
                <div class="row">
                 <div class="col-lg-4" style="margin-bottom: 20px;">
                    <div class="card" style="height: 360px;">

                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img style="height: 160px; width: 100%;" src="" class="img-fluid" alt="">
                        </div>
                        <!--/.Card image-->

                        <!--Card content-->
                        <div class="card-block">
                            <p></p>
                            <!--Title-->
                            <h4 style="height: 100px;" class="card-title"><a href=""><strong></strong></a> </h4>
                            <p style="margin: 2px;"></p>
                        </div>
                        <!--/.Card content-->

                    </div>
                    <!--/.Card-->
                </div>
            </div>
        </div>


        <div class="col-lg-3">
            <div class="card">
                <!--Card content-->
                <div class="card-block">
                    <!--Text-->
                    <p class="card-title" align="center"></strong><strong>Technology</strong></p>
                    <ul>
                     <li style="margin: 20px;"><a href="{{ url('/tech/'.'html') }}"><img style="display: inline-block;" src="{{asset('img/sidebar-logo-html.png')}}"><font>   HTML</font></a></li> 
                     <li style="margin: 20px;"><a href="{{ url('tech/'.'javascript') }}"><img style="display: inline-block;" src="{{asset('img/sidebar-logo-js.png')}}"><font>   JavaScript</font></a></li> 
                     <li style="margin: 20px;"><a href="{{ url('tech/'.'node') }}"><img style="display: inline-block;" src="{{asset('img/sidebar-logo-nodejs.png')}}"><font>   Node.Js</font></a></li> 
                     <li style="margin: 20px;"><a href="{{ url('tech/'.'php') }}"><img style="display: inline-block;" src="{{asset('img/sidebar-logo-php.png')}}"><font>   PHP</font></a></li> 
                 </ul>
             </div>
             <!--/.Card content-->

         </div>
         <!--/.Card-->
     </div>
     
 </div>
</div>
<!--/.Content-->

@endsection

