@extends('backend.layout')
@section('content')
  <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Settings</h3>
              </div>

             
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Ayarı redaktə et</h2>
                    <div align="right">
                  
                </div>
                    <ul class="nav navbar-right panel_toolbox">
                      
                      <li><a href="{{   url()->previous()   }}"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                <form action="{{route('settings.Update',['id' => $settings->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Açıqlama</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" readonly type="text"
                                       value="{{$settings->settings_description}}">
                            </div>
                        </div>
                    </div>

                    @if($settings->settings_type=="file")
                        <div class="form-group">
                            <label>Şəkil Seç</label>
                            <div class="row">
                                <div class="col-xs-12">
                                    <input class="form-control" name="settings_value" required type="file">
                                </div>
                            </div>
                        </div>
                    @endif


                    <div class="form-group">
                        <label>Kontent</label>
                        <div class="row">
                            <div class="col-xs-12">

                                @if($settings->settings_type=="text")
                                    <input class="form-control" type="text" name="settings_value" required
                                           value="{{$settings->settings_value}}">
                                @endif

                                @if($settings->settings_type=="textarea")
                                    <textarea class="form-control"
                                              name="settings_value">{{$settings->settings_value}}</textarea>
                                @endif

                                @if($settings->settings_type=="ckeditor")
                                    <textarea class="form-control" id="editor1"
                                              name="settings_value">{{$settings->settings_value}}</textarea>
                                @endif

                                    @if($settings->settings_type=="file")
                                        <img width="100" src="{{url('')}}/images/settings/{{$settings->settings_value}}" alt="">
                                    @endif

                                    <script>
                                        CKEDITOR.replace('editor1');
                                    </script>

                            </div>
                        </div>

                        @if($settings->settings_type=="file")
                            <input type="hidden" name="old_file" value="{{$settings->settings_value}}">
                        @endif

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