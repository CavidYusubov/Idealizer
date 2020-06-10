@extends('backend.layout')
@section('content')
   <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Xəbərlər</h3>
              </div>

            
      

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Xəbəri redaktə et</h2>
                    <div align="right">
                    <a href="{{route('news.create')}}"><button class="btn btn-success">Əlavə et</button></a>
                   </div>
                </div>
                    <ul class="nav navbar-right panel_toolbox">
                      
                      <li><a href="{{   url()->previous()   }}"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                
                  <div class="x_content">
            <div class="box-body">
                <form action="{{route('blog.update',$blogs->id)}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    @isset($blogs->blog_file)
                    <div class="form-group">
                        <label>Yüklü Şəkil</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <img width="100" src="{{$blogs->blog_file}}" alt="">
                            </div>
                        </div>
                    </div>
                    @endisset

                    <div class="form-group">
                        <label>Şəkil Seç</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" name="blog_file"  type="file">
                                <input class="form-control" name="blog_file_old"  type="hidden" name="{{$blogs->blog_file}}">
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label>Başlıq (Azərbaycan dili)</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="blog_title" value="{{$blogs->blog_title}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Başlıq (İngilis dili)</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="blog_title_en" value="{{$blogs->blog_title_en}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Slug</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="blog_slug" value="{{$blogs->blog_slug}}">
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label>Mətin (Azərbaycan dili)</label>
                        <div class="row">
                            <div class="col-xs-12">
                                    <textarea class="form-control" id="editor1"
                                              name="blog_content">{{$blogs->blog_content}}</textarea>
                                <script>
                                    CKEDITOR.replace('editor1');
                                </script>

                            </div>
                        </div>
                        <div class="form-group">
                        <label>Mətin (İngilis dili)</label>
                        <div class="row">
                            <div class="col-xs-12">
                                    <textarea class="form-control" id="editor2"
                                              name="blog_content_en">{{$blogs->blog_content_en}}</textarea>
                                <script>
                                    CKEDITOR.replace('editor2');
                                </script>

                            </div>
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <div class="row">
                                <div class="col-xs-12">
                                    <select name="blog_status" class="form-control">
                                        <option {{$blogs->blog_status=="1" ? "selected=''" : ""}} value="1">Aktif</option>
                                        <option {{$blogs->blog_status=="0" ? "selected=''" : ""}} value="0">Pasif</option>
                                    </select>
                                </div>
                            </div>

                            <input type="hidden" name="old_file" value="{{$blogs->blog_file}}">



                            <div align="right" class="box-footer">
                                <button type="submit" class="btn btn-success">Yenilə</button>
                            </div>
                        </div>


                </form>
             </div>
              </div>
            </div>
          </div>
        </div>


@endsection
@section('css')@endsection
@section('js')@endsection