@extends('backend.layout')
@section('content')

<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
  <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>How it works</h3>
              </div>

              
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>How it works</h2>
                    <div align="right">
                    
               </div>
                    <ul class="nav navbar-right panel_toolbox">
                    
                      <li><a href="{{   url()->previous()   }}"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                <form action="{{route('howitworks.update',['id' => $howitworks->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @isset($howitworks->icon)
                    <div class="form-group">
                        <label>Mövcud Şəkil</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <img width="100" src="{{$howitworks->icon}}" alt="">
                            </div>
                        </div>
                    </div>
                    @endisset

                    <div class="form-group">
                        <label>Şəkil seç</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" name="icon"  type="file">
                            </div>
                        </div>
                    </div>
                      <div class="form-group">
                        <label>Başlıq (Azərbaycan dili)</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control"  type="text"
                                       value="{{$howitworks->title}}" name="title">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Başlıq (ingilis dili)</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control"  type="text"
                                       value="{{$howitworks->title_en}}" name="title_en">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Mətin (Azərbaycan dili)</label>
                        <div class="row">
                            <div class="col-xs-12">
                               
                                       <textarea name="description" class="form-control" id="editor1" cols="30" rows="10">{{$howitworks->description}}</textarea>
                         
                                       <script>
                                        CKEDITOR.replace('editor1');
                                    </script>
   </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Mətin (ingilis dili)</label>
                        <div class="row">
                            <div class="col-xs-12">
                               
                                       <textarea name="description_en" class="form-control" id="editor41" cols="30" rows="10">{{$howitworks->description_en}}</textarea>
                         
                                       <script>
                                        CKEDITOR.replace('editor41');
                                    </script>
   </div>
                        </div>
                    </div>
                    <div class="form-group">
                            <label>Status</label>
                            <div class="row">
                                <div class="col-xs-12">
                               
<input type="checkbox" id="status"  {{$howitworks->status=="1" ? "checked value=1 " : ""}}  {{$howitworks->status=="0" ? " value=0  " : ""}}   data-toggle="toggle" data-on="Aktiv" data-off="Deaktiv" data-onstyle="success" data-offstyle="danger">
                                       
                                </div>
                            </div>
                  


                            <input type="hidden" name="old_file" value="{{$howitworks->icon}}">

<input type="hidden" id="status1"  name="status" value="{{$howitworks->status}}">


                                   
                            </div>
                        </div>

                      
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
        <script>
 $('#status').change(function(){
  if($(this).prop('checked'))
  {
   $('#status1').val('1');
  }
  else
  {
   $('#status1').val('0');
  }
 });
</script>

@endsection
@section('css')@endsection
@section('js')@endsection