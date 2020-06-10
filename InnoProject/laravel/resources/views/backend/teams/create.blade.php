@extends('backend.layout')
@section('content')
   <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Komanda</h3>
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
                    <ul class="nav navbar-right panel_toolbox">
                      
                      <li><a href="{{   url()->previous()   }}"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
            <div class="box-body">
                <form action="{{route('teams.store')}}" method="post"
                      enctype="multipart/form-data">
                    @csrf

                 

                   
                    </div>
                    <div class="form-group">
                        <label>Ad, Soyad</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="teams_title">
                            </div>
                        </div>
                    </div>

                <div class="form-group">
                        <label>Açıqlama</label>
                        <div class="row">
                            <div class="col-xs-12">
                            <textarea class="form-control" cols="30" rows="10" name="teams_description"></textarea>
                              
                            </div>
                        </div>
                    </div>
                <div class="form-group">
                        <label>Şəkil Seç</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" name="file"  type="file">
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