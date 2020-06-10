		@extends('backend.layout')
		@section('content')
     <style type="text/css">
       
       .cards{
        border: 1px solid silver;
        padding: 10px;
        min-height: 250px;
        cursor: pointer; 
        margin: 15px;
       }
       .cards:hover {
    border: 1px solid green;
    padding: 10px;
    background-color: #1e6db1;
    color: azure;
}
       .cards-title{
        text-align: center;
        padding: 5px;
       }
        .cards-text{
          padding: 5px;
       }
     </style>
   <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Əsas Səhifə</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li>
                      </li>
                   
                      <li>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row mb-5">
                      <a href="{{route('users')}}" class="" > <div class="col-md-4">
     
        <div class="cards">
         
          <div class="cards-body">
            <h4 class="cards-title"><i class="fa fa-user fa-5x"></i><br><br> İstifadəçilər </h4>
            <p class="cards-text">İstifadəçilərin redaktəsi, təstiqlənməsi və silinməsi</p>
        
          </div>
      
        </div>
        
      </div></a>
      <div class="col-md-4">
       <a href="{{route('startups')}}" class="stretched-link"> 
        <div class="cards">
         
          <div class="cards-body">
            <h4 class="cards-title"><i class="fa fa-users fa-5x"></i><br><br> Startup'lar </h4>
            <p class="cards-text">Startup'lar redaktəsi, təstiqlənməsi və silinməsi</p>
        
          </div>
      
        </div>
      </a>
      </div>  
               <div class="col-md-4">
               <a href="{{route('konkurs.index')}}" class="stretched-link"> 
        <div class="cards">
      
          <div class="cards-body">
            <h4 class="cards-title"><i class="fa fa-trophy fa-5x"></i><br><br> Müsabiqə </h4>
            <p class="cards-text">İnnovativ İstiqamətlər redaktəsi, təstiqlənməsi və silinməsi</p>
     
          </div>
        
        </div>
        </a>
      </div> 
      <div class="col-md-4">
               <a href="{{route('programs.Index')}}" class="stretched-link"> 
        <div class="cards">
      
          <div class="cards-body">
            <h4 class="cards-title"><i class="fa fa-trophy fa-5x"></i><br><br> Proqramlar </h4>
            <p class="cards-text">Proqramların redaktəsi, təstiqlənməsi və silinməsi</p>
     
          </div>
        
        </div>
        </a>
      </div>    
       <div class="col-md-4">
         <a href="{{route('news')}}">
        <div class="cards">
        
          <div class="cards-body">
            <h4 class="cards-title"><i class="fa fa-file-text-o fa-5x"></i><br><br> Xəbərlər </h4>
            <p class="cards-text">Xəbər əlavə et, sil və redaktə et</p>
         
          </div>
        
        </div>
        </a>
      </div>  
        <!-- <div class="col-md-4">
        <a href="{{route('InnovDirect.Index')}}">
        <div class="cards">
      
          <div class="cards-body">
            <h4 class="cards-title"><i class="fa fa-file fa-5x"></i><br><br> İnnovativ İstiqamətlər </h4>
            <p class="cards-text">İnnovativ İstiqamətlər redaktəsi, təstiqlənməsi və silinməsi</p>
           </div>
       
        </div>
        </a>
      </div>  -->
      <div class="col-md-4">
        <a href="{{route('about')}}">
        <div class="cards">
      
          <div class="cards-body">
            <h4 class="cards-title"><i class="fa fa-file fa-5x"></i><br><br> Haqqımızda </h4>
            <p class="cards-text">Haqqımızda səhifəsinin redaktəsi</p>
           </div>
       
        </div>
        </a>
      </div> 
        <div class="col-md-4">
      <a href="{{route('Partners.Index')}}">
        <div class="cards">
          
          <div class="cards-body">
            <h4 class="cards-title"><i class="fa fa-trello fa-5x"></i><br><br> Partnyorlar</h4>
            <p class="cards-text">Partnyorlar redaktəsi, təstiqlənməsi və silinməsi</p>
           </div>
      
        </div>
        </a>
      </div>
       
      <div class="col-md-4">
      <a href="{{route('Pages.Index')}}">
        <div class="cards">
         
          <div class="cards-body">
            <h4 class="cards-title"><i class="fa fa-file-text-o fa-5x"></i><br><br> Səhifələr</h4>
            <p class="cards-text">Səhifələrin redaktəsi, təstiqlənməsi və silinməsi</p>
           </div>
      
        </div>
        </a>
      </div>
      <div class="col-md-4">
      <a href="{{route('teams.index')}}">
        <div class="cards">
         
          <div class="cards-body">
            <h4 class="cards-title"><i class="fa fa-users fa-5x"></i><br><br> Komanda</h4>
            <p class="cards-text" style="text-align:center">Komanda redaktəsi</p>
           </div>
      
        </div>
        </a>
      </div>
      
       <!-- <div class="col-md-4">
       <a href="{{route('Category.Index')}}">
        <div class="cards">
        
          <div class="cards-body">
            <h4 class="cards-title"><i class="fa fa-file-text-o fa-5x"></i><br><br> Kateqoriya</h4>
            <p class="cards-text">Kateqoriyaların redaktəsi, təstiqlənməsi və silinməsi</p>
          </div>
      
        </div>
        </a>
        </div> -->
     
      <div class="col-md-4">
      <a href="{{route('subs')}}">
       <div class="cards">
       
         <div class="cards-body">
           <h4 class="cards-title"><i class="fa fa-file-text-o fa-5x"></i><br><br> Abunəçilər</h4>
           <p class="cards-text">Abunəçilərin siyahısı, və toplu mail göndərmək</p>
          </div>
     
       </div>
     </a>
     </div> 

     <div class="col-md-4">
      <a href="{{route('terms.Index')}}">
       <div class="cards">
       
         <div class="cards-body">
           <h4 class="cards-title"><i class="fa fa-file-text-o fa-5x"></i><br><br> Qayda və şərtlər</h4>
           <p class="cards-text">Qayda və şərtlər redaktəsi.</p>
          </div>
     
       </div>
     </a>
     </div> 
     
     <div class="col-md-4">
     <a href="{{route('slider')}}">
       <div class="cards">
       
         <div class="cards-body">
           <h4 class="cards-title"><i class="fa fa-file-text-o fa-5x"></i><br><br> Slayder</h4>
           <p class="cards-text">Slayder siyahısı, və redaktəsi.</p>
          </div>
     
       </div>
     </a>
     </div> 
       <div class="col-md-4">
       <a href="{{route('settings.Index')}}">
        <div class="cards">
        
          <div class="cards-body">
            <h4 class="cards-title"><i class="fa fa-cog fa-5x"></i><br><br> Ayarlar</h4>
            <p class="cards-text">Ayarlar redaktəsi, təstiqlənməsi və silinməsi</p>
          </div>
      
        </div>
      </a>
      </div>  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <script>
     </script>
        @endsection
		@section('css')@endsection
		@section('js')@endsection