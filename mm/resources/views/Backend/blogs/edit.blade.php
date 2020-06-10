@extends('Backend.layout')
@section('content')
   
<div class="content" style="width:70%;margin-left: 20%;">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title"></h4>
                  <p class="card-category">Xəbəri redaktə et</p>
                  
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
                <form action="{{route('blog.update')}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                 

                    @isset($blogs->blog_file)
                    <div class="row">
               
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Yüklü Görsel</label>
                          <img width="100" src="{{url('/')}}/images/blogs/{{$blogs->blog_file}}" alt="">
                        </div>
                      </div>
                   
                    @endisset<div class="row">
                      <input type="hidden" name="id" value="{{$blogs->id}}">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Başlıq</label>
                          <input type="text" class="form-control" name="blog_title" value="{{$blogs->blog_title}}">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Slug</label>
                          <input type="text" class="form-control" name="blog_slug" value="{{$blogs->blog_slug}}">
                        </div>
                      </div>
                    </div>
                   
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">İçərik</label>
                          <textarea class="" id="editor1"
                                              name="blog_content">{{$blogs->blog_content}}</textarea>
                                <script>
                                    CKEDITOR.replace('editor1');
                                </script>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Status</label>
                          <select name="blog_status" class="form-control">
                                        <option {{$blogs->blog_status=="1" ? "selected=''" : ""}} value="1">Aktiv</option>
                                        <option {{$blogs->blog_status=="0" ? "selected=''" : ""}} value="0">Deaktiv</option>
                                    </select>
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
