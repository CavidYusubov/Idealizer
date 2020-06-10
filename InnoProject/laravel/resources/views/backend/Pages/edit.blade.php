@extends('backend.layout')
@section('content')
  <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Səhifələr</h3>
              </div>

             
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Redaktə et</h2>
                    <div align="right">
                    <a href="{{route('Pages.create')}}"><button class="btn btn-success">Əlavə et</button></a>
                  
                </div>
                    <ul class="nav navbar-right panel_toolbox">
                      
                      <li><a href="{{   url()->previous()   }}"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                <form action="{{route('Pages.update',$pages->id)}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    @isset($pages->page_file)
                    <div class="form-group">
                        <label>Yüklü Şəkil</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <img width="100" src="{{url('')}}/images/pages/{{$pages->page_file}}" alt="">
                            </div>
                        </div>
                    </div>
                    @endisset

                    <div class="form-group">
                        <label>Şəkil Seç</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" name="page_file"  type="file">
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label>Başlıq</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="page_title" value="{{$pages->page_title}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Slug</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="page_slug" value="{{$pages->page_slug}}">
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label>İçərik</label>
                        <div class="row">
                            <div class="col-xs-12">
                                    <textarea class="form-control" id="editor1"
                                              name="page_content">{{$pages->page_title}}</textarea>
                                <script>
                                    CKEDITOR.replace('editor1');
                                </script>

                            </div>
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <div class="row">
                                <div class="col-xs-12">
                                    <select name="page_status" class="form-control">
                                        <option {{$pages->page_status=="1" ? "selected=''" : ""}} value="1">Aktif</option>
                                        <option {{$pages->page_status=="0" ? "selected=''" : ""}} value="0">Pasif</option>
                                    </select>
                                </div>
                            </div>

                            <input type="hidden" name="old_file" value="{{$pages->page_file}}">



                            <div align="right" class="box-footer">
                                <button type="submit" class="btn btn-success">Redaktə et</button>
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