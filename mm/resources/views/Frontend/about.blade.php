@extends('layouts.app')

@section('content')
<div id="content" class="col-md-8">
<div class="main-content">

<div class="container">
   
    <div class="content container" >
    <h2 class="about-title ">{{$abouts->title}}</h2>
        <p >
       
    
        <?php echo  htmlspecialchars_decode($abouts->content);?>
         </p>
        

  <div class="hes-gallery">
  @foreach($abouts_files as $files)
   <img src="{{ $files->file}}" style=" width: 150px;height: 100px; cursor:pointer" alt="image1" data-fullsize="{{ $files->file}}" data-subtext=''>
   @endforeach       
        </div>
</div>


    </div>
</div>


        </div>
         <!-- sidebar content -->
          <div id="sidebar" class="col-md-4">
          <div class="container">
  <br> <br>
  <img src="{{$abouts->file}}" style="width:100%">

</div>
        </div>




@endsection
