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
                <form action="{{route('faq.update')}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                 

                <div class="row">
                      <input type="hidden" name="id" value="{{$faq->id}}">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="text" class="form-control" name="email" value="{{$faq->email}}">
                          <!-- <button class="btn btn-danger"> Bu Emaili blok et (bu email ilə sual verə bilməyəcək)</button> -->
                        </div>
                      </div>
                   
                    
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Sual</label>
                          <input type="text" class="form-control" name="question" value="{{$faq->question}}">
                        </div>
                      </div>
                  
                    <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Cavab</label>
                          
                          <textarea name="answer" id="" cols="30" rows="10" class="form-control">{{$faq->answer}}</textarea>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Status</label>
                          <select name="status" class="form-control">
                          <option {{$faq->status=="0" ? "selected=''" : ""}} value="0">Sual gözləmədədir</option>
                                        <option {{$faq->status=="1" ? "selected=''" : ""}} value="1">Aktiv</option>
                                        <option {{$faq->status=="2" ? "selected=''" : ""}} value="2">Imtina et (yayımlanmasın)</option>
                                    </select>
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
