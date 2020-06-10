@extends('layouts.app')

@section('content')
<div id="content" class="col-md-8" style="min-height:400px">
<div class="main-content">

<div class="container">
   
    <div class="content container" >
    <form action="{{url('/')}}/faq/search" method="post">
  @csrf
<h2 class="about-title">Sual Cavab</h2>
<p>  <input type="text" id="search" name="search" placeholder="Açar söz" required><input type="submit" value="Axtar"></p>
</form>
<div>
@if(!empty($result))
<h2>{{$result}}: üçün  nəticələr.</h2> <a href="{{url('/')}}/faq">Sual cavaba qayıt</a>
@endif
</div>

@foreach($data['faq'] as $faq)

<button class="accordion">{{$faq->question}}</button>
<div class="panel">
  <p>{{$faq->answer}}</p>
</div>
@endforeach
{{ $data['faq']->links() }}
        </div>
</div>
</div>
</div>

 
<div id="content" class="col-md-4" style="min-height:400px">

<h2 class="about-title">Sual ver</h2>

<div class="containers">
  <form action="{{url('/')}}/faq/question">
  @csrf
    <input type="email" id="fname" name="email" placeholder="Email ünvanınızı qeyd edin" required>


  
    <textarea id="subject" name="question" placeholder="Sual ver.." style="height:200px" required></textarea>

    <input type="submit" value="Göndər">
  </form>
  @if(session()->has('success'))
  <div class="alert alert-success" role="alert">
  {{session('success')}}

</div>
@endif
@if(session()->has('error'))
<div class="alert alert-danger" role="alert">
{{session('error')}}
  
</div>
@endif
</div>
</div>
</div>
<br><br>
@endsection
