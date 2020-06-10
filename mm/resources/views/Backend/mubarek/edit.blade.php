@extends('Backend.layout')
@section('content')
<div class="content" style="width: 60%;margin-left: 25%;">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title"></h4>
                  <p class="card-category">Redaktə et</p>
                  
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
                <form action="{{route('mubarek.update')}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                 
<input type="hidden"  value="{{$mubarek->id}}" name="id">
                <div class="row">
                      <input type="hidden" >
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Tarix</label>
                          <input type="date" class="form-control" name="date" value="{{$mubarek->date}}"  value="{{date('d-m-Y',$mubarek->date)}}">
                        </div>
                      </div>
                    
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Başlıq</label>
                          <input type="text" class="form-control" name="title" value="{{$mubarek->title}}" >
                        </div>
                      </div>
                    <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Açıqlama</label>
                          <textarea name="description" id="" cols="30" rows="10" class="form-control">{{$mubarek->description}}</textarea>
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
