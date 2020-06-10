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
                <form action="{{route('Khutba.update')}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                 

                <div class="row">
                      <input type="hidden" name="id" value="{{$khutbas->id}}">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Mövzu</label>
                          <input type="text" class="form-control" name="subject" value="{{$khutbas->subject}}">
                        </div>
                      </div>
                    
                   
                    <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">İmam</label>
                          <input type="text" class="form-control" name="imam" value="{{$khutbas->imam}}">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Link</label>
                          <input type="text" class="form-control" name="url" value="{{$khutbas->url}}">
                        </div>
                      </div>
                    <button type="submit" class="btn btn-primary pull-right">Yenilə</button>
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
