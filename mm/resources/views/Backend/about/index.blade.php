@extends('Backend.layout')
@section('content')
   
<div class="content" style="width: 60%;margin-left: 25%;">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title"></h4>
                  <p class="card-category">Haqqımızda səhifəsini redaktə et</p>
                  
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
                <form action="{{route('about.update')}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                 

                    @isset($about->file)
                    <div class="form-group">
                        <label>Yüklü Görsel</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <img width="100" src="{{url('/')}}/{{$about->file}}" alt="">
                            </div>
                        </div>
                    </div>
                    @endisset
                    <div class="row">
                      <div class="col-md-12">
                      <div class="form-group">
                        <label>Şəkil Seç</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="" name="file"  type="file" style="z-index: 0!important;    opacity: 1!important;">
                            </div>
                        </div>
                    </div>
                      </div>
                    </div>
               
                
                    <div class="row">
                      <input type="hidden" name="id" value="{{$about->id}}">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Başlıq</label>
                          <input type="text" class="form-control" name="title" value="{{$about->title}}">
                        </div>
                      </div>
                     
                   
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">İçərik</label>
                          <textarea class="" id="editor1"
                                              name="content">{{$about->content}}</textarea>
                                <script>
                                    CKEDITOR.replace('editor1');
                                </script>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <label></label>
                        <div class="row">
                            <div class="col-xs-12">
                            <div class="row">
                        @foreach($filess as $files)    
                        <div class="col-xs-3">  <img width="100px" style="padding-left:25px" src="{{url('/')}}/{{$files->file}}" alt=""><a href="{{url('/')}}/admin/about/delete/file/{{$files->id}}"  class="btn btn-danger" style="width:15px">sil</a></div>
                          @endforeach  

                        </div>
                        </div>
                        </div>
                    </div>
                
                
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Yeni Şəkil</label>
                          <input class="form-control" name="filess"  type="file" style="z-index: 0!important;    opacity: 1!important;">
                        
                        </div>
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

@endsection
@section('css')@endsection
@section('js')@endsection
