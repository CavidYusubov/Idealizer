@extends('layouts.app')

@section('content')
<div id="content" class="col-md-6" style="min-height:415px">
<div class="main-content">

<div class="container " >
   
    <div class=" container" >
    <h2 class="about-title ">{{$blog->blog_title}}</h2>
        <p >
       
       <?php echo htmlspecialchars_decode($blog->blog_content); ?>
         </p>
        

  <div class="hes-gallery">
       
        </div>
</div>


    </div>
</div>


        </div>
         <!-- sidebar content -->
          <div id="sidebar" class="col-md-6">
          <div class="container">
  <br> <br>
  @if(!empty($blog->blog_file))
  <img src="{{url('/')}}/images/blogs/{{$blog->blog_file}}" style="width:100%;float:left">
@endif
</div>
        </div>




@endsection
