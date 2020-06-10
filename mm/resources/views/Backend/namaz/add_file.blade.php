@extends('Backend.layout')
@section('content')
<div class="content" style="width: 60%;margin-left: 25%;">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title"></h4>
                  <p class="card-category">Yenisini Əlavə et</p>
                  
        @if(Session::has('error'))
            <div class="alert alert-danger">
                {{session('error')}}
            </div>
            @elseif(Session::has('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
        @endif
                </div>
                <div class="card-body">
                <form action="{{route('namaz.file_adds')}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                 

                <div class="row">
                      <input type="hidden" >
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Faylın Adı</label>
                          <input type="text" class="form-control" name="title" >
                        </div>
                      </div>
                    
                   
                    <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Fayl</label>
                          <input class="form-control" name="file"  type="file" style="z-index: 0!important;    opacity: 1!important;">
                        </div>
                      </div>
                    
                    <button type="submit" class="btn btn-primary pull-right">Əlavə et</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
</div>
     </div></div>
     <script>
 
 

</script>
@endsection
@section('css')@endsection
@section('js')@endsection
