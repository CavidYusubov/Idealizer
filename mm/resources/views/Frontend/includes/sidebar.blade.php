  <!-- sidebar nav -->
 
  <nav id="sidebar-nav">
  <h2 class="sidebar-header-1"> @if(date('H:i',time()) == '05:51')  @else  @endif
  
  <?php
   $today= strtotime(date('d.m.Y H:i',time()));
  if(!empty($namaz_times->date)){
   $nextimsak=explode('.',$namaz_times->date);

$nextdayimsak =$nextimsak[0]+1 .'.'.$nextimsak[1].'.'.$nextimsak[2];
$imsak=strtotime($nextdayimsak.' '.$next_imsak);
  }
  if(!empty($last_isha)){
    $lastisha=explode('.',$namaz_times->date);

    $lastdayisha =$lastisha[0]-1 .'.'.$lastisha[1].'.'.$lastisha[2];
    $ishalast=strtotime($lastdayisha.' '.$last_isha);

  }

$isha=strtotime($namaz_times->date.' '.$namaz_times->isha);
 if(($today >= $ishalast) && ($today < strtotime($namaz_times->date.' '.$namaz_times->imsak))){
   
    echo 'İşa';
    echo "<style>
    .isha{
        background-color: lightblue;

    }
    </style>
    ";
    
}else if(($today >=  strtotime($namaz_times->date.' '.$namaz_times->imsak)) && ($today <  strtotime($namaz_times->date.' '.$namaz_times->subh))){
   
    echo 'İmsak';
    echo "<style>
    .imsak{
        background-color: lightblue;

    }
    </style>
    ";
    
}else if(($today >=  strtotime($namaz_times->date.' '.$namaz_times->subh)) && ($today <  strtotime($namaz_times->date.' '.$namaz_times->zohr))){
   
    echo 'Sübh';
    echo "<style>
    .subh{
        background-color: lightblue;

    }
    </style>
    ";
    
}
else if(($today >=  strtotime($namaz_times->date.' '.$namaz_times->zohr)) && ($today <  strtotime($namaz_times->date.' '.$namaz_times->esr))){
   
    echo 'Zöhr';
    echo "<style>
    .zohr{
        background-color: lightblue;

    }
    </style>
    ";
    
}else if(($today >= strtotime($namaz_times->date.' '.$namaz_times->esr)) && ($today < strtotime($namaz_times->date.' '.$namaz_times->megrib))){
   
    echo 'Əsr';
    echo "<style>
    .esr{
        background-color: lightblue;

    }
    </style>
    ";
    
}else if(($today >= strtotime($namaz_times->date.' '.$namaz_times->megrib)) && ($today <  strtotime($namaz_times->date.' '.$namaz_times->isha))){
   
    echo 'Məğrib';
    echo "<style>
    .megrib{
        background-color: lightblue;

    }
    </style>
    ";
    
}else{
     
    echo 'İşa';
    echo "<style>
    .isha{
        background-color: lightblue;

    }
    </style>
    ";
}
  ?>
  </h2>
        <div class="sidebar-date" > <span id="hour"></span><span id="elem">:</span><span id="elm"> </span><span id="minute"></span></div>
        <!-- <ul class="nav nav-pills nav-stacked">

            <li><a class="nav-link"></a></li>
            <li><a href="#">Dig to China</a></li>
            <li><a href="#">Swim Across the Sea</a></li>
        </ul> -->
        <h2 class="sidebar-header-2" >Namaz vaxtları</h2>
        <table class="table-sidebar-namaz" style="width: 51%;"> 
        <tr class="imsak">
        <td>İmsak</td>
        <td style="text-align: right;">{{$namaz_times->imsak}}</td>
        </tr>
        <tr  class="subh">
        <td>Sübh</td>
        <td style="text-align: right;">{{$namaz_times->subh}}</td>
        </tr>
        <tr >
        <td>Gün çıxır</td>
        <td style="text-align: right;">{{$namaz_times->gun_cixir}}</td>
        </tr>
        <tr class="zohr">
        <td>Zöhr</td>
        <td style="text-align: right;">{{$namaz_times->zohr}}</td>
        </tr>
        <tr class="esr">
        <td >Əsr</td>
        <td style="text-align: right;">{{$namaz_times->esr}}</td>
        </tr>
        <tr>
        <td>Gün batır</td>
        <td style="text-align: right;">{{$namaz_times->gun_batir}}</td>
        </tr>
        <tr class="megrib">
        <td>Məğrib</td>
        <td style="text-align: right;">{{$namaz_times->megrib}}</td>
        </tr>
        <tr class="isha">
        <td>İşa</td>
        <td style="text-align: right;">{{$namaz_times->isha}}</td>
        </tr>
        </table>
        <br>
        <h2 class="sidebar-header-3">Camaat namaz vaxtları</h2>
        
        <table class="table-sidebar-namaz" style="width:51%"> 
      @foreach($next_files as $files)
        <tr>
        <td >{{$files->title}}</td>
        <td style="text-align:right"> <a href="images/namaz/files/{{$files->file}}" download class="href"><img src="images/logo/Download.png" alt="" width='30px' class="src"></a></td>
        </tr>
      @endforeach
        </table>
    </nav>
    <script>
    
doBoxBlink = setInterval(blink, 1000);
doBoxBlinkk = setInterval(blnk, 1000);
function blink() {
    $('#elem').toggle(


  );

}
function blnk() {
    $('#elm').toggle(
   

  );

}
var timeDisplay = document.getElementById("hour");


function refreshTime() {
    var d = new Date();
  var n = d.getHours();
  var m = {{date('i',time())}};
  var dateString = new Date().toLocaleString("az-AZ", {timeZone: "Asia/Baku"});
  var formattedString = dateString.replace(", ", " - ");
  
 
}

setInterval(refreshTime, 1000);
   
$(document).ready(function() {
  clockUpdate();
  setInterval(clockUpdate, 1000);
})

function clockUpdate() {
  var date = new Date();
 
  function addZero(x) {
    if (x < 10) {
      return x = '0' + x;
    } else {
      return x;
    }
  }

  function twelveHour(x) {
    if (x > 12) {
      return x = x - 12;
    } else if (x == 0) {
      return x = 12;
    } else {
      return x;
    }
  }

  var h = addZero(date.getHours());
  var m = addZero(date.getMinutes());
  var s = addZero(date.getSeconds());

  $('#minute').text( m )
  $('#hour').text( h );
}


    </script>