@extends('backend.layout')
@section('content')
  <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Slider</h3>
              </div>

             
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Slider əlavə et</h2>
                    <div align="right">
                    
                  </div>
                </div>
                    <ul class="nav navbar-right panel_toolbox">
                      
                      <li><a href="{{   url()->previous()   }}"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                <form action="{{url('/')}}/sliders/stores" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                            <label>Şəkil</label>
                            <div class="row">
                                <div class="col-xs-12">
                                    <input class="form-control" name="layout_image"  type="file" >
                                </div>
                            </div>
                        </div>
                    <div class="form-group">
                        <label>Başlıq (Azərbaycan dili)</label>
                        <div class="row">
                            <div class="col-xs-12">
                            <input type="text" class="form-control" name="title">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Başlıq (İngilis dili)</label>
                        <div class="row">
                            <div class="col-xs-12">
                            <input type="text" class="form-control" name="title_en">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Duration (millisaniyə)</label>
                        <div class="row">
                            <div class="col-xs-12">
                            <input type="text" class="form-control" name="duration" placeholder="misal: 5000">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Açıqlama (Azərbaycan dili)</label>
                        <div class="row">
                            <div class="col-xs-12">
                            <textarea name="description" id="" cols="30" rows="10" class=" form-control"></textarea>
                             
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Açıqlama  (İngilis dili)</label>
                        <div class="row">
                            <div class="col-xs-12">
                            <textarea name="description_en" id="" cols="30" rows="10" class=" form-control"></textarea>
                             
                            </div>
                        </div>
                    </div>
                  
                 
                        <div class="form-group">
                            <label>Button mətni (Azərbaycan dili)</label>
                            <div class="row">
                                <div class="col-xs-12">
                                    <input class="form-control" name="button_text"  type="text" >
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label>Button mətni  (İngilis dili)</label>
                            <div class="row">
                                <div class="col-xs-12">
                                    <input class="form-control" name="button_text_en"  type="text" >
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Button mətin rəngi</label>
                            <div class="row">
                                <div class="col-xs-2">
                                    <input class="form-control" name="button_color"  type="color" >
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Button arxafon rəngi</label>
                            <div class="row">
                                <div class="col-xs-2">
                                    <input class="form-control" name="button_background_color"  type="color" >
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Button linki</label>
                            <div class="row">
                                <div class="col-xs-12">
                                    <input class="form-control" name="button_url"  type="text" >
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label>Dairəvi Layout rəngi </label>
                            <div class="row">
                                <div class="col-xs-2">
                                    <input class="form-control" name="front_circle_color"  type="color" >
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label> Arxafon Dairəvi Layout rəngi </label>
                            <div class="row">
                                <div class="col-xs-2">
                                    <input class="form-control" name="back_circle_color"  type="color" >
                                </div>
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