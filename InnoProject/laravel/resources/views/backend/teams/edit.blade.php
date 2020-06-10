@extends('backend.layout')
@section('content')
  <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Redaktə et</h3>
              </div>

             
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Redaktə et</h2>
                    <div align="right">
                    <a href="{{route('teams.create')}}"><button class="btn btn-success">Əlavə et</button></a>
                  
                </div>
                    <ul class="nav navbar-right panel_toolbox">
                      
                      <li><a href="{{   url()->previous()   }}"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                <form action="{{route('teams.update',$teams->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                     <div class="form-group">
                        <label>Mövcud şəkil</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <img src="{{$teams->teams_logo}}" width="100" alt="team">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Şəkil Seç</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" name="file"  type="file">
                                <input class="form-control"  value="{{$teams->teams_logo}}" name="old_file"  type="hidden">

                            </div>
                        </div>
                    </div>
                      <div class="form-group">
                        <label>Başlıq</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control"  type="text"
                                       value="{{$teams->teams_title}}" name="teams_title">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Açıqlama</label>
                        <div class="row">
                            <div class="col-xs-12">
                            <textarea class="form-control" cols="10" rows="5" name="teams_description">{{$teams->teams_description}}</textarea>
                             
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