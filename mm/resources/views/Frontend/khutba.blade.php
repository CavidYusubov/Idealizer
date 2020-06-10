@extends('layouts.app')

@section('content')
<div id="content" class="col-md-2"></div>
<div id="content" class="col-md-8">
<div class="main-content">

<div class="container">
   
    <div class="content container" >
   

    <br>
    <br>
    <br>
 <table class="khutba table table-bordered ">
 <thead class="thead-light">
 <tr>
 <th scope="col">Tarix</th>
 <th scope="col">Mövzu</th>
 <th scope="col">Link</th>
 <th scope="col">İmam</th>
 </tr>
 </thead>
 <tbody>@foreach($khutbas as $khutba)

 <tr scope="row">
 <td>{{$khutba->date}}</td>
 <td>{{$khutba->subject}}</td>
 <td><a href="{{$khutba->url}}" target="blank"><img src="images/logo/youtube-khutba.png" alt="" width="40px" class="src"></td></td>
 <td>
 {{$khutba->imam}}
 </td>
 </tr>
 @endforeach
 </tbody>
 </table>
 <br>
    <br>
    <br><br>
    <br>
  
    </div>
</div>
</div>

        </div>
         <!-- sidebar content -->
          <div id="sidebar" class="col-md-2">
          
        </div>



@endsection
