@extends('layouts.app')

@section('content')
<style>
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
<div id="content" class="col-md-8">
<div class="main-content">

<div class="container wantscroll">
   
    <div class="content  " style="direction: ltr;    padding-left: 0px;" >
    <h1 class="homepage-title ">Xəbərlər</h1>

    <br>
    <br>
    <br>
   
    </div>
   

    
<div class="slideshow-container">

<div class="mySlides ">
@foreach($blogs as $blog)
  <div class="numbertext"></div>
 
        <span class="blog-date">{{date('d.m.Y',$blog->date)}}</span>
      <a href="{{url('/')}}/blog/{{$blog->blog_slug}}" class="href">

        <h3 style="color:#165059;font-weight:600">{{$blog->blog_title}}</h3>
        <p ><?php echo substr( htmlspecialchars_decode($blog->blog_content), 0, 200);?>...
        
        </p>
        </a>        
   
  <div class="text"></div>
  @endforeach  
</div>
<div class="mySlides ">
@foreach($blogs1 as $blog1)
<span class="blog-date">{{date('d.m.Y',$blog1->date)}}</span>
<a href="{{url('/')}}/blog/{{$blog1->blog_slug}}" class="href">
<h3 style="color:#165059;font-weight:600">{{$blog1->blog_title}}</h3>

<p ><?php echo substr( htmlspecialchars_decode($blog1->blog_content), 0, 200);?>...
</p> </a>        

  @endforeach  
</div>
<div class="mySlides ">
@foreach($blogs2 as $blog2)
<span class="blog-date">{{date('d.m.Y',$blog2->date)}}</span>
<a href="{{url('/')}}/blog/{{$blog2->blog_slug}}" class="href">
<h3 style="color:#165059;font-weight:600">{{$blog2->blog_title}}</h3>
<p ><?php echo substr( htmlspecialchars_decode($blog2->blog_content), 0, 200);?>...</p> </a>        

  @endforeach  
</div>
<div class="mySlides ">
@foreach($blogs3 as $blog3)
<span class="blog-date">{{date('d.m.Y',$blog3->date)}}</span>
<a href="{{url('/')}}/blog/{{$blog3->blog_slug}}" class="href">
<h3 style="color:#165059;font-weight:600">{{$blog3->blog_title}}</h3>
<p ><?php echo substr( htmlspecialchars_decode($blog3->blog_content), 0, 200);?>...</p> </a>        

  @endforeach  
</div>
<div class="mySlides ">
@foreach($blogs4 as $blog4)
<span class="blog-date">{{date('d.m.Y',$blog4->date)}}</span>
<a href="{{url('/')}}/blog/{{$blog4->blog_slug}}" class="href">
<h3 style="color:#165059;font-weight:600">{{$blog4->blog_title}}</h3>
<p ><?php echo substr( htmlspecialchars_decode($blog4->blog_content), 0, 200);?>... </p></a>        

  @endforeach  
</div>
<div class="mySlides ">
@foreach($blogs5 as $blog5)
<span class="blog-date">{{date('d.m.Y',$blog5->date)}}</span>
<a href="{{url('/')}}/blog/{{$blog5->blog_slug}}" class="href">
<h3 style="color:#165059;font-weight:600">{{$blog5->blog_title}}</h3>
<p ><?php echo substr( htmlspecialchars_decode($blog5->blog_content), 0, 200);?>...</p> </a>        

  @endforeach  
</div>
<div class="mySlides ">
@foreach($blogs6 as $blog6)
<span class="blog-date">{{date('d.m.Y',$blog6->date)}}</span>
<a href="{{url('/')}}/blog/{{$blog6->blog_slug}}" class="href">
<h3 style="color:#165059;font-weight:600">{{$blog6->blog_title}}</h3>
<p ><?php echo substr( htmlspecialchars_decode($blog6->blog_content), 0, 200);?>...</p> </a>        

  @endforeach  
</div>
<div class="mySlides ">
@foreach($blogs7 as $blog7)
<span class="blog-date">{{date('d.m.Y',$blog7->date)}}</span>
<a href="{{url('/')}}/blog/{{$blog7->blog_slug}}" class="href">
<h3 style="color:#165059;font-weight:600">{{$blog7->blog_title}}</h3>
<p ><?php echo substr( htmlspecialchars_decode($blog7->blog_content), 0, 200);?>... </p></a>        

  @endforeach  
</div>

<div class="mySlides ">
@foreach($blogs8 as $blog8)
<span class="blog-date">{{date('d.m.Y',$blog8->date)}}</span>
<a href="{{url('/')}}/blog/{{$blog8->blog_slug}}" class="href">
<h3 style="color:#165059;font-weight:600">{{$blog8->blog_title}}</h3>
<p ><?php echo substr( htmlspecialchars_decode($blog8->blog_content), 0, 200);?>... </p></a>        

  @endforeach  
</div>
<div class="mySlides ">
@foreach($blogs9 as $blog9)
<span class="blog-date">{{date('d.m.Y',$blog9->date)}}</span>
<a href="{{url('/')}}/blog/{{$blog9->blog_slug}}" class="href">
<h3 style="color:#165059;font-weight:600">{{$blog9->blog_title}}</h3>
<p ><?php echo substr( htmlspecialchars_decode($blog9->blog_content), 0, 200);?>... </p></a>        

  @endforeach  
</div>

</div>
<br>

<div style="text-align:center">
<?php $b=1;?>
@if($blog)
  <span class="dot" onclick="currentSlide(1)"></span> 

  @endif
  <?php foreach($blogs1 as $blog){if(!empty($blog->blog_title)){$cblog1 = 1;}}?>
  @if($cblog1 != 0)
  <span class="dot" onclick="currentSlide(2)"></span> 
 
  @endif
  <?php $cblog2 = 0; foreach($blogs2 as $blog){if(!empty($blog->blog_title)){$cblog2 = 1;}else{$cblog2 = 0;}}?>
  @if($cblog2 != 0)
  <span class="dot" onclick="currentSlide(3)"></span> 

  @endif
  <?php $cblog3 = 0; foreach($blogs3 as $blog){if(!empty($blog->blog_title)){$cblog3 = 1;}else{$cblog3 = 0;}}?>
  @if($cblog3 != 0)
  <span class="dot" onclick="currentSlide(4)"></span> 

  @endif
  <?php $cblog4 = 0; foreach($blogs4 as $blog){if(!empty($blog->blog_title)){$cblog4 = 1;}else{$cblog4 = 0;}}?>
  @if($cblog4 != 0)
  <span class="dot" onclick="currentSlide(5)"></span> 
  @endif
  <?php $cblog5 = 0; foreach($blogs5 as $blog){if(!empty($blog->blog_title)){$cblog5 = 1;}else{$cblog5 = 0;}}?>

  @if($cblog5 != 0)
  <span class="dot" onclick="currentSlide(6)"></span> 

  @endif
  <?php $cblog6 = 0; foreach($blogs6 as $blog){if(!empty($blog->blog_title)){$cblog6 = 1;}else{$cblog6 = 0;}}?>
  @if($cblog6 != 0)
  <span class="dot" onclick="currentSlide(7)"></span> 

  @endif
  <?php $cblog7 = 0; foreach($blogs7 as $blog){if(!empty($blog->blog_title)){$cblog7 = 1;}else{$cblog7 = 0;}}?>
  @if($cblog7 != 0)
  <span class="dot" onclick="currentSlide(8)"></span> 

  @endif
  <?php $cblog8 = 0; foreach($blogs8 as $blog){if(!empty($blog->blog_title)){$cblog8 = 1;}else{$cblog8 = 0;}}?>
  @if($cblog8 != 0)
  <span class="dot" onclick="currentSlide(9)"></span> 

  @endif
  <?php $cblog9 = 0; foreach($blogs9 as $blog){if(!empty($blog->blog_title)){$cblog9 = 1;}else{$cblog9 = 0;}}?>
  @if($cblog9 != 0)
  <span class="dot" onclick="currentSlide(10)"></span> 

  @endif
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</div>
</div>

        </div>
         <!-- sidebar content -->
          <div id="sidebar" class="col-md-4">
            @include('Frontend.includes.sidebar')
        </div>



@endsection
