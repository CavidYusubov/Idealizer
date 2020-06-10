@extends('backend.layout')
@section('content')
  <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Qayda və şərtlər redaktə et</h3>
              </div>

             
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Qayda və şərtlər redaktə et</h2>
                    <div align="right">
                    
              </div>
                    <ul class="nav navbar-right panel_toolbox">
                      
                      <li><a href="{{   url()->previous()   }}"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                <form action="{{route('terms.update',['id' => $terms->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                      <div class="form-group">
                        <label>Başlıq (Azərbaycan dili</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control"  type="text"
                                       value="{{$terms->title}}" name="title">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Başlıq (İngilis dili)</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control"  type="text"
                                       value="{{$terms->title_en}}" name="title_en">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Mətin (Azərbaycan dili)</label>
                        <div class="row">
                            <div class="col-xs-12">
                               
                                       <textarea name="description" class="form-control" id="editor1" cols="30" rows="10">{{$terms->description}}</textarea>
                         
                                       <script>
                                        CKEDITOR.replace('editor1');
                                    </script>
   </div>
                        </div>
                    </div>

                  
                    <div class="form-group">
                        <label>Mətin (İngilis dili)</label>
                        <div class="row">
                            <div class="col-xs-12">
                               
                                       <textarea name="description_en" class="form-control" id="editor11" cols="30" rows="10">{{$terms->description_en}}</textarea>
                         
                                       <script>
                                        CKEDITOR.replace('editor11');
                                    </script>
   </div>
                        </div>
                    </div>


                    

                                   
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


@endsection
@section('css')@endsection
@section('js')@endsection