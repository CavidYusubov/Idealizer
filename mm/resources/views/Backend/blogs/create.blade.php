

@extends('Backend.layout')
@section('content')


<div class="content" style="width: 60%;margin-left: 25%;">
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
               
                <form action="{{route('blog.store')}}" method="post"
                      enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label>Resim Seç</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" name="blog_file"  type="file" style="    z-index: 0!important;
    opacity: 1!important;">
                            </div>
                        </div>
                    </div>


                <div class="row">
                      <input type="hidden" name="id">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Başlıq</label>
                          <input type="text" class="form-control" name="blog_title" >
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Slug</label>
                          <input type="text" class="form-control" name="blog_slug" >
                        </div>
                      </div>
                    </div>
                   
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">İçərik</label>
                          <textarea class="" id="editor1"
                                              name="blog_content"></textarea>
                                <script>
                                    CKEDITOR.replace('editor1');
                                </script>
                        </div>
                      </div>
                    </div>
               
                    <div class="frow">
                            <label class="bmd-label-floating">Status</label>
                            <div class="row">
                                <div class="col-xs-12">
                                    <select name="blog_status" class="form-control">
                                        <option value="1">Aktiv</option>
                                        <option  value="0">Deaktiv</option>
                                    </select>
                                </div>
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


   @endsection
@section('css')@endsection
@section('js')@endsection
