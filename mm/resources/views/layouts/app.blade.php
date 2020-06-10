<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<link rel="stylesheet" href="{{ asset('src/hes-gallery.css') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{$settings->site_header}}|{{$settings->site_description}}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>
    <meta name="description" content="{{$settings->site_description}}">
  <meta name="keywords" content="{{$settings->site_keys}}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>


    /* width */
    .wantscroll::-webkit-scrollbar {
  width: 15px;
}

/* Track */
.wantscroll::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
.wantscroll::-webkit-scrollbar-thumb {
  background: #2ba4ac; 
  border-radius: 10px;
}

/* Handle on hover */
.wantscroll::-webkit-scrollbar-thumb:hover {
  background: #2ba4ac; 
}
#elm{
    display:none
}
input[type=email], [type=text],select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
#search{
  width: 40%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  margin-right: 10px;
  resize: vertical;
}

input[type=submit] {
  background-color:#2ba4ac;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #2ba4ac;
}

.containers {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
.accordion{
    color:#165059!important
}

.wantscroll {
    /* direction: rtl;
  overflow:   auto; */
  height:650px;
  margin-left:5%;
  text-align:left
}

.calendar {
	width: 700px;
}
.calendar, .calendar table {
	border: 0;
	margin: 0;
}
.calendar, .calendar table, .calendar td {
	text-align: center;
}
.calendar .year{
	font-family:Verdana; 
	font-size:18pt; 
	color:#ff9900;
}
.calendar .month{
	width: 25%;
	vertical-align: top;
}
.calendar .month table{
	font-size:8pt;
	font-family:Verdana;
}
.calendar .month th{
	text-align: center;
	font-size:12pt;
	font-family:Arial;
	color:#666699;
}
.calendar .month td{
	font-size:8pt;
	font-family:Verdana;
}
.calendar .month .days td{
	color:#666666;
	font-weight: bold;
}
.calendar .month .sat{
	color:#0000cc;
}
.calendar .month .sun{
	color:#cc0000;
}
.calendar .month .today{
	background:#ff0000;
	color: #ffffff;
}
.navbar-light{
    background: url('{{url("/")}}/images/cover-header.png');
    background-position: center;
    background-size: contain;
}
#blink{

animation:1s blinker linear infinite;
-webkit-animation:1s blinker linear infinite;
-moz-animation:1s blinker linear infinite;

 color: #2ba4ac;
}

@-moz-keyframes blinker {  
 0% { opacity: 1.0; }
 50% { opacity: 0.0; }
 100% { opacity: 1.0; }
 }

@-webkit-keyframes blinker {  
 0% { opacity: 1.0; }
 50% { opacity: 0.0; }
 100% { opacity: 1.0; }
 }

@keyframes blinker {  
 0% { opacity: 1.0; }
 50% { opacity: 0.0; }
 100% { opacity: 1.0; }
 }
 </style>

    

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" >
            <div class="container" style="padding-left: 2.8%;">
                <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ url('/') }}/images/logo/logos.png" alt="" class="src" width="50px">
                   
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                                <a class="nav-link {{ request()->is('about*') ? 'actives' : '' }}" href="{{url('/')}}/about">Haqqımızda</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('xutbe*') ? 'actives' : '' }}" href="{{url('/')}}/xutbe">Xütbə və mövzələr</a>
                            </li>  

                                <li class="nav-item">
                                <a class="nav-link {{ request()->is('holy-days*') ? 'actives' : '' }}" href="{{url('/')}}/holy-days">Mübarək ay və günlər</a>
                            </li>    
                        
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('faq*') ? 'actives' : '' }}" href="{{url('/')}}/faq">Sual cavab</a>
                            </li>      
                    </ul>
                
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto" style="margin-right: 5.5%!important;">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item" style="margin-right: 0%;">
                            
                                <a class="nav-link " id="header-hour"style="font-family: Montserrat;" >  <span id="hours"></span> <span id="blink">:</span> <span id="elms"></span><span id="hminutes"></span></a>
                            </li>
                        <!-- <li class="nav-item" style="margin-right: 5%;">
                            
                                <a class="nav-link" > <img src="images/logo/calendar.png" alt="" class="src" width="40px"></a>
                            </li>
                            <li class="nav-item" style="margin-right: 5%;">
                            
                                <a class="nav-link" > <img src="images/logo/heart.png" alt="" class="src" width="40px"></a>
                            </li> -->
                            <!-- <li class="nav-item">

                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li> -->
                            @if (Route::has('register'))
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li> -->
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('dashboard.Index') }}">
                                     Admin Panel
                                     </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                   
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

    
          
          <div id="main" class="row" >

         
        @yield('content')
      
        

 
      
    </div>
 
    <footer style="margin-top:11px;
    background-image: url(http://onsideball.com/mm/public/images/cover-header.png);
    background-position: center;
    background-size: contain;">
    <div  class="row" >
  
    <div id="footer-1" class="col-md-9 container">
          <span class="footer-text-1">Ünvan: {{$settings->address}}<img src="{{url('/')}}/images/location.png" alt="" width="25px" class="src" style="margin-top: -11px;"></span>
          <br>
          <a href="{{$settings->fb_url}}" target="blank"><img src="{{url('/')}}/images/face.png" alt="" width="35px" class="src"></a>
           <a href="{{$settings->ytb_url}}" target="blank"> <img src="{{url('/')}}/images/logo/youtube.png" alt="" width="50px" class="src"></a>
           <a href="https://www.google.com/maps/place/Ilahiyyat+Mosque/@40.375571,49.8076159,15z/data=!4m2!3m1!1s0x0:0x6caf84652558a590?sa=X&ved=2ahUKEwi91-_KhJjoAhXSG5oKHULHB00Q_BIwFXoECBcQCA" target="blank"> <img src="{{url('/')}}/images/819865 (1).png" alt="" width="40px" class="src"></a>
           
        </div>
        <div id="footer-2" class="col-md-2 container" style="text-align:center;padding-right: 4%;">
         <span class="footer-text-2">  Müraciət üçün</span><br>
         <a href="mailto:{{$settings->email}}"><img src="{{url('/')}}/images/mail.png" alt="" width="50px" class="src"></a>
        </div>

</div>
    </footer>
    </div>
    <script type="text/javascript">
     var acc = document.getElementsByClassName("accordion");
var i;
 
for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else{
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
     </script>
  
  @if(request()->is('/*') )
  <script>
    document.getElementById("header-hour").style.display = "none";

    </script>
   @else
   <script>
    document.getElementById("header-hour").style.display = "block";
    </script>
   @endif

   <script src="{{url('/')}}/dist/hes-gallery.js"></script>
    <script>

        HesGallery.setOptions({
            disableScrolling: false,
            hostedStyles: false,
            animations: true,

            showImageCount: true,
            wrapAround: true
        });



      
doBoxBlinkks = setInterval(blnks, 1000);
function blinks() {
    $('#elems').toggle();

}
function blnks() {
    $('#elems').toggle();

}
var timeDisplays = document.getElementById("hours");


function refreshTimes() {
    var d = new Date();
  var n = d.getHours();
  var m = {{date('i',time())}};
  var dateStrings = new Date().toLocaleString("az-AZ", {timeZone: "Asia/Baku"});
  var formattedString = dateStrings.replace(", ", " - ");
 
 
}

setInterval(refreshTimes, 1000);
   
$(document).ready(function() {
  clockUpdates();
  setInterval(clockUpdates, 1000);
})

function clockUpdates() {
  var date = new Date();
 
  function addZeros(x) {
    if (x < 10) {
      return x = '0' + x;
    } else {
      return x;
    }
  }

  function twelveHours(x) {
    if (x > 12) {
      return x = x - 12;
    } else if (x == 0) {
      return x = 12;
    } else {
      return x;
    }
  }

  var hs = addZeros(date.getHours());
  var ms = addZeros(date.getMinutes());
  var ss = addZeros(date.getSeconds());

  $('#hminutes').text( ms );
  $('#hours').text( hs );
  
  
}

    </script>
</body>
</html>
