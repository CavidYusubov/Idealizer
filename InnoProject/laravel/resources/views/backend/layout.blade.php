<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Idealizer | Content Manager </title>
     <style>
     .left_col {
    background: #fff!important;
}
.nav_title {
    background: #fff!important;
}
.nav.child_menu>li>a, .nav.side-menu>li>a {
    color: #3664e7!important;
}
.nav.side-menu>li>a:hover {
    color: #5a738e!important;
}
.profile_info h2 {
    
    color: #375ee3!important;

}
.profile_info span {
    font-size: 18px!important;
    line-height: 30px;
    color: #3669ea!important;
}
.nav.child_menu>li>a, .nav.side-menu>li>a {
   
    font-weight: 700!important;
}
body {
    background: #ffffff!important;
  
  }
     </style>
    <!-- Bootstrap --> <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.24/jquery-ui.js"></script>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.24/themes/ui-lightness/jquery-ui.css" rel="stylesheet" type="text/css"/>

    <!-- Markdown parser -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pagedown/1.0/Markdown.Converter.min.js"></script>

    <!-- Prettyprint -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/prettify/r298/prettify.min.css" rel="stylesheet" type="text/css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prettify/r298/prettify.min.js"></script>

    <link href="{{url('/')}}/backend/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{url('/')}}/css/jquery.colorpicker.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{url('/')}}/backend/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{url('/')}}/backend/vendors/nprogress/nprogress.css" rel="stylesheet">
    <link href='//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pagedown/1.0/Markdown.Converter.min.js"></script>

    <!-- Prettyprint -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/prettify/r298/prettify.min.css" rel="stylesheet" type="text/css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prettify/r298/prettify.min.js"></script>

<!-- jQuery Library -->

    <!-- Custom Theme Style -->
    <link href="{{url('/')}}/backend/build/css/custom.min.css" rel="stylesheet">
     
          <script src="{{url('/')}}/backend/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{url('/')}}/backend/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="{{url('/')}}/backend/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="{{url('/')}}/backend/vendors/nprogress/nprogress.js"></script>
    
    <!-- Custom Theme Scripts -->
    
   <link href="{{url('/')}}/jquery.colorpicker.css" rel="stylesheet" type="text/css"/>
    <script src="{{url('/')}}/backend/js/jquery-ui/jquery-ui.js"></script>

    <!-- Bootstrap 3.3.7 -->
  
    <!-- AdminLTE App -->
    <script src="{{url('/')}}/backend/js/adminlte.min.js"></script>
 <script src="{{url('/')}}/js/bootstrap-datetimepicker.js"></script>
    <script src="{{url('/')}}/js/bootstrap-datetimepicker.min.js"></script>
    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/alertify.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.12.0/build/css/themes/bootstrap.min.css"/>

 <script src="{{url('/')}}/backend/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
   
    <!-- Custom Theme Scripts -->
    <script src="{{url('/')}}/backend/build/js/custom.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js"></script>
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/js/bootstrap-datetimepicker.min.js"></script>
    <!-- CKEditör -->
    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
     <link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">
<style type="text/css">
  
  .fa-trash-o{
       font-size: 20px;
    }
    .fa-pencil-square{
       font-size: 20px;
    }
    .fa-ban{
      font-size: 20px;
    }

</style>
 
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
         <!-- <div class="navbar nav_title" style="border: 0;">
              <a href="{{route('dashboard')}}" class="site_title" style="height: 65px;padding-left: 25%;margin-top: 6px;"><img src="/assets/images/idealizerr_logo.svg" width="100"></a>
            </div> -->
   <!-- 
            <div class="clearfix"></div>

            menu profile quick info -->
            <!-- <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{Auth::guard('web')->user()->user_file}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>{{Auth::guard('web')->user()->name}}</span>
                <h2>Admin</h2>
              </div>
              <div class="clearfix"></div>
            </div>  -->
            <!-- /menu profile quick info -->
            
           
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3></h3>
                <ul class="nav side-menu  ">
                  <li><a href="{{route('dashboard')}}"><i class="fa fa-home"></i> Əsas Səhifə</a></a>
                    <!-- <ul class="nav child_menu">
                      <li><a href="index.html">Dashboard</a></li>
                      <li><a href="index2.html">Dashboard2</a></li>
                      <li><a href="index3.html">Dashboard3</a></li>
                    </ul> -->
                  </li> 
                   <li><a href="{{route('users')}}"><i class="fa fa-user"></i> İstifadəçilər </a></li>
                   <li><a href="{{route('programs.Index')}}"><i class="fa fa-user"></i> Proqramlar </a></li>
                   <li><a href="{{route('news')}}"><i class="fa fa-file-o"></i> Xəbərlər </a></li>
                   <li><a href="{{route('howitworks.Index')}}"><i class="fa fa-file-o"></i> How it works </a></li>
                   <li><a href="{{route('about')}}"><i class="fa fa-file-o"></i> Haqqımızda </a></li>
                   <li><a href="{{route('subs')}}"><i class="fa fa-user"></i> Abunəçilər </a></li>
                   <li><a href="{{route('slider')}}"><i class="fa fa-user"></i> Slayder </a></li>
                   <!-- <span class="fa fa-chevron-down"></span></a>
    <ul class="nav child_menu">
                      <li><a href="{{route('users')}}">Siyahı</a></li>
                      <li><a href="{{route('user.create')}}">Yenisini əlavə et</a></li>
                      <li><a href="{{route('user.requests')}}">Təstiq gözləyənlər</a></li>
                      
                    </ul> 
 -->
</li> 
  <li><a href="{{route('startups')}}"><i class="fa fa-users"></i> Startup'lar </a></li><!-- <span class="fa fa-chevron-down"></span> --></a>
   <!--  <ul class="nav child_menu">
                      <li><a href="{{route('startups')}}">Siyahı</a></li>
                      <li><a href="{{route('startups.create')}}">Yenisini əlavə et</a></li>
                        <li><a href="{{route('startup.requests')}}">Təstiq gözləyənlər</a></li>
                    </ul>  -->

</li> 
<li ><a href="{{route('teams.index')}}"><i class="fa fa-users"></i> Komanda </a></li><!-- <span class="fa fa-chevron-down"></span></a>
    <ul class="nav child_menu">
                      <li><a href="{{route('teams.index')}}">Siyahı</a></li>
                      <li><a href="{{route('teams.create')}}">Yenisini əlavə et</a></li>
                        <li><a href="{{route('teams.requests')}}">Təstiq gözləyənlər</a></li>
                    </ul> 
 -->
</li> 
 <li><a href="{{route('konkurs.index')}}"><i class="fa fa-trophy" aria-hidden="true"></i> Müsabiqə</a></li>
 <li><a href="{{route('konkurs.banners')}}"><i class="fa fa-trophy" aria-hidden="true"></i> Müsabiqə Banner</a></li>
<!-- <li><a href="{{route('InnovDirect.Index')}}"><i class="fa fa-file"></i> İnnovativ İstiqamətlər </a></li><!-- <span class="fa fa-chevron-down"></span></a>
    <ul class="nav child_menu">
                      <li><a href="{{route('InnovDirect.Index')}}">Siyahı</a></li>
                      <li><a href="{{route('InnovDirect.create')}}">Yenisini əlavə et</a></li>
                      
                    </ul> 
</li> -->

<li><a href="{{route('Partners.Index')}}"><i class="fa fa-trello"></i> Partnyorlar </a></li><!-- <span class="fa fa-chevron-down"></span></a>
    <ul class="nav child_menu">
                      <li><a href="{{route('Partners.Index')}}">Siyahı</a></li>
                      <li><a href="{{route('Partners.create')}}">Yenisini əlavə et</a></li>
                      
                    </ul>  -->
</li>

<!-- <li><a href="{{route('Pages.Index')}}"><i class="fa fa-file-text-o"></i> Səhifələr </a></li> -->
<!-- <span class="fa fa-chevron-down"></span></a>
    <ul class="nav child_menu">
                      <li><a href="{{route('Pages.Index')}}">Siyahı</a></li>
                      <li><a href="{{route('Pages.create')}}">Yenisini əlavə et</a></li>
                      
                    </ul>  -->
</li>
<!-- <li><a href="{{route('Category.Index')}}"><i class="fa fa-file-text-o"></i> Kateqoriya </a></li> -->
<!--  <span class="fa fa-chevron-down"></span></a>
    <ul class="nav child_menu">
                      <li><a href="{{route('Category.Index')}}">Siyahı</a></li>
                      <li><a href="{{route('Category.create')}}">Yenisini əlavə et</a></li>
                      
                    </ul>  -->
                    <li><a href="{{route('terms.Index')}}"><i class="fa fa-cog"></i> Qayda və şərtlər</a></a>
                  <li><a href="{{route('settings.Index')}}"><i class="fa fa-cog"></i> Settings</a></a>
                 
                  </li>
          
          
                </ul>
              </div>
            
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a  href="{{route('settings.Index')}}" data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a href="{{route('startups')}}" data-placement="top" title="Startup'lar">
              <i class="fa fa-users" aria-hidden="true"></i>
              </a>
              <a href="{{route('konkurs.index')}}"  data-placement="top" title="Müsabiqə">
              <i class="fa fa-trophy" aria-hidden="true"></i>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{route('Logout')}}">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <div class="navbar nav_title" style="border: 0;">
              <a href="{{route('dashboard')}}" class="site_title" style="padding-left: 5%;margin-top: 0px;"><img src="/assets/images/idealizerr_logo.svg" style="width: 60px;"></a>
            </div>
              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{Auth::guard('web')->user()->user_file}}" alt="">{{Auth::guard('web')->user()->name}}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="{{url('/')}}/user/{{Auth::guard('web')->user()->id}}/edit"> Şəxsi kabinet</a></li>
                  
                    
                    <li><a href="{{route('Logout')}}"><i class="fa fa-sign-out pull-right"></i> Çıxış</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green count_notify" id="sample">{{$count_n}}</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                  @foreach($notifications as $notifi) 
                    <li @if($notifi->read == 0)style="background:silver;color:#fff"@endif>
                   <a href="{{url('/')}}/notifications">
                       
                        <span >
                          <span >{{ $notifi->text}}</span>
                          
                        </span>
                        
                      </a>
                     
                    </li>
                    @endforeach
                    <li>
                      <div class="text-center">
                        <a href="{{url('/')}}/notifications">
                          <strong>Hamısına bax</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
     @yield('content')
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Created By Laluna
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
@if(session()->has('success'))
    <script>alertify.success('{{session('success')}}')</script>
@endif
@if(session()->has('error'))
    <script>alertify.error('{{session('error')}}')</script>
@endif

@foreach($errors->all() as $error)
    <script>
        alertify.error('{{$error}}');
    </script>
@endforeach

<script>


  $(".info-number").click(function () {
     $(".count_notify").text(0);
      /* Get from elements values */
 

$.ajax({
       url: " {{url('/')}}/notifications/read/all",
       type: "post",
       data: id="1",
       success: function (response) {

          // You will get response from your PHP page (what you echo or print)
       },
       error: function(jqXHR, textStatus, errorThrown) {
          console.log(textStatus, errorThrown);
       }
   });
  });


$('#menu_toggle').click(function() {
   
    $('body').toggleClass('nav-md');
    $('body').toggleClass('nav-sm');
});
$(document).ready(
 function() {
 setInterval(function() {
//  var someval = Math.floor(Math.random() * 100);
//   $('#sample').text('{{$count_n}}' );
 }, 5000);  //Delay here = 5 seconds 
});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
 <script src="{{url('/')}}/jquery.colorpicker.js"></script>
  

    <!-- Plugin extensions -->
    <script src="{{url('/')}}/i18n/jquery.ui.colorpicker-nl.js"></script>
    <script src="{{url('/')}}/parts/jquery.ui.colorpicker-rgbslider.js"></script>
    <script src="{{url('/')}}/parts/jquery.ui.colorpicker-memory.js"></script>
    </head>


<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="{{url('/')}}/backend/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="{{url('/')}}/backend/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{url('/')}}/backend/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="{{url('/')}}/backend/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="{{url('/')}}/backend/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="{{url('/')}}/backend/vendors/Flot/jquery.flot.js"></script>
    <script src="{{url('/')}}/backend/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="{{url('/')}}/backend/vendors/Flot/jquery.flot.time.js"></script>
    <script src="{{url('/')}}/backend/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="{{url('/')}}/backend/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="{{url('/')}}/backend/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="{{url('/')}}/backend/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="{{url('/')}}/backend/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="{{url('/')}}/backend/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="{{url('/')}}/backend/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="{{url('/')}}/backend/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="{{url('/')}}/backend/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{url('/')}}/backend/vendors/moment/min/moment.min.js"></script>
    <script src="{{url('/')}}/backend/vendors/bootstrap-daterangepicker/daterangepicker.js"></script> 
    <script src="{{url('/')}}/js/jquery.colorpicker.js"></script>
   
    <!-- Custom Theme Scripts -->
    <script src="{{url('/')}}/backend/build/js/custom.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js"></script>
    
    
   
  </body>
</html>
