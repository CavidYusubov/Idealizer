@extends('backend.layout')
@section('content')
    <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Xəbərlər</h3>
              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Əlavə et</h2>
                    <div align="right">
                   
                   </div>
                </div>
                    <ul class="nav navbar-right panel_toolbox">
                     
                     
                      <li><a href="{{   url()->previous()   }}"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                
                  
                  <div class="x_content">
            <div class="box-body">
                <form action="{{route('blog.store')}}" method="post"
                      enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label>Şəkil Seç</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" name="blog_file"  type="file">
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label>Başlıq  (Azərbaycan dili)</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="blog_title">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Başlıq  (İngilis dili)</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="blog_title_en">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Slug</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="blog_slug">
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label>Mətin  (Azərbaycan dili)</label>
                        <div class="row">
                            <div class="col-xs-12">
                                    <textarea class="form-control" id="editor1"
                                              name="blog_content"></textarea>
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
                                              name="blog_content_en"></textarea>
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
                                        <option value="1">Aktiv</option>
                                        <option value="0">Deaktiv</option>
                                    </select>
                                </div>
                            </div>


                            <div align="right" class="box-footer">
                                <button type="submit" class="btn btn-success">Əlavə et</button>
                            </div>
                        </div>


                </form>
            </div>
       </div>
    </section>
    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection
@section('css')@endsection
@section('js')@endsection