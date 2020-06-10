@extends('backend.layout')
@section('content')
  <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Proqramlar</h3>
              </div>

             
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Proqramı redaktə et</h2>
                    <div align="right">
                    <a href="{{route('programs.create')}}"><button class="btn btn-success">Əlavə et</button></a>
                  
                </div>
                    <ul class="nav navbar-right panel_toolbox">
                      
                      <li><a href="{{   url()->previous()   }}"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                <form action="{{route('programs.update',['id' => $programs->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                      <div class="form-group">
                        <label>Başlıq</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control"  type="text"
                                       value="{{$programs->title}}" name="title">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Açıqlama</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control"  type="text"
                                       value="{{$programs->description}}" name="description">
                            </div>
                        </div>
                    </div>

                  


                    

                                    <script>
                                        CKEDITOR.replace('editor1');
                                    </script>

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