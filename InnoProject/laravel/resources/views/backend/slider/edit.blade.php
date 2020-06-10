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
                    <h2>Slideri redaktə et</h2>
                    <div align="right">
                    <a href="{{route('slider.create')}}"><button class="btn btn-success">Əlavə et</button></a>
                  </div>
                </div>
                    <ul class="nav navbar-right panel_toolbox">
                      
                      <li><a href="{{   url()->previous()   }}"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                <form action="{{route('sliders.updates',['id' => $slider->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @isset($slider->layout_image)
                    <div class="form-group">
                        <label>Mövcud Şəkil</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <img width="100" src="{{$slider->layout_image}}" alt="">
                            </div>
                        </div>
                    </div>
                    @endisset
                    <div class="form-group">
                            <label>Şəkil</label>
                            <div class="row">
                                <div class="col-xs-12">
                                    <input class="form-control" name="layout_image"  type="file" >
                                    <input class="form-control" name="layout_image_old" value="{{$slider->layout_image}}" type="hidden" >
                                </div>
                            </div>
                        </div>
                    <div class="form-group">
                        <label>Başlıq (Azərbaycan dili)</label>
                        <div class="row">
                            <div class="col-xs-12">
                            <input type="text" class="form-control" value="{{$slider->title}}" name="title">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Başlıq (İngilis dili)</label>
                        <div class="row">
                            <div class="col-xs-12">
                            <input type="text" class="form-control" value="{{$slider->title_en}}" name="title_en">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Açıqlama (Azərbaycan dili)</label>
                        <div class="row">
                            <div class="col-xs-12">
                            <textarea name="description" id="" cols="30" rows="10" class=" form-control">{{$slider->description}}</textarea>
                             
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Açıqlama (İngilis dili)</label>
                        <div class="row">
                            <div class="col-xs-12">
                            <textarea name="description_en" id="" cols="30" rows="10" class=" form-control" >{{$slider->description_en}}</textarea>
                             
                            </div>
                        </div>
                    </div>
                   
                 
                        <div class="form-group">
                            <label>Button mətni (Azərbaycan dili)</label>
                            <div class="row">
                                <div class="col-xs-12">
                                    <input class="form-control" name="button_text"  type="text" value="{{$slider->button_text}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Button mətni (İngilis dili)</label>
                            <div class="row">
                                <div class="col-xs-12">
                                    <input class="form-control" name="button_text_en"  type="text" value="{{$slider->button_text_en}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Button mətin rəngi</label>
                            <div class="row">
                                <div class="col-xs-2">
                                    <input class="form-control" name="button_color"  type="color" value="{{$slider->button_color}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Button arxafon rəngi</label>
                            <div class="row">
                                <div class="col-xs-2">
                                    <input class="form-control" name="button_background_color"  type="color" value="{{$slider->button_background_color}}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Button linki</label>
                            <div class="row">
                                <div class="col-xs-12">
                                    <input class="form-control" name="button_url"  type="text" value="{{$slider->button_url}}">
                                </div>
                            </div>
                        </div>
                      
                        <div class="form-group">
                            <label>Dairəvi Layout rəngi </label>
                            <div class="row">
                                <div class="col-xs-2">
                                    <input class="form-control" name="front_circle_color"  type="color" value="{{$slider->front_circle_color}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label> Arxafon Dairəvi Layout rəngi </label>
                            <div class="row">
                                <div class="col-xs-2">
                                    <input class="form-control" name="back_circle_color"  type="color" value="{{$slider->back_circle_color}}">
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