@extends('backend.layout')
@section('content')
<style>

iframe
    {
        width:500px;
        max-width:500px;
        max-height: 300px;
        height:300px;
    }
</style>
   <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Haqqımızda</h3>
              </div>

      
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Haqqımızda səhifəsini redaktə et</h2>
                    
                    <ul class="nav navbar-right panel_toolbox">
                      <li></a>
                      </li>
                     
                      <li><a href="{{   url()->previous()   }}"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
            <div class="box-body">
                <form action="{{route('abouts.updates',$data->id)}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    @isset($data->video)
                    <div class="form-group">
                        <label>Yüklü video</label>
                        <div class="row">
                            <center><div class="col-xs-6">
                            <iframe width="853" height="480" src="https://www.youtube.com/embed/{!!$data->video!!}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                
                            </div></center>
                        </div>
                    </div>
                    @endisset

                    <div class="form-group">
                        <label>Video kodu (youtube.com/watch?v= qarşısındakı kodu kopyalayıb aşağıdakı inputa yapışdırın)</label>
                        <div class="row">
                            <div class="col-xs-12">
                               <textarea name="about_video"class="form-control" id="" cols="30" rows="10">{{$data->video}}</textarea>
                               
                            </div>
                        </div>
                    </div>
                    


                    <div class="form-group">
                        <label>Səhifə Başlığı (Azərbaycan dili)</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="about_title" value="{{$data->title}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Səhifə Başlığı (ingilis dili)</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="about_title_en" value="{{$data->title_en}}">
                            </div>
                        </div>
                    </div>
                   

                    <div class="form-group">
                        <label>Səhifə açıqlaması (Azərbaycan dili)</label>
                        <div class="row">
                            <div class="col-xs-12">
                                    <textarea class="form-control" id="editor1" name="about_description">{{$data->Description}}</textarea>
                                

                            </div>
                        </div>
                        <div class="form-group">
                        <label>Səhifə açıqlaması (ingilis dili)</label>
                        <div class="row">
                            <div class="col-xs-12">
                                    <textarea class="form-control" id="editor1" name="about_description_en">{{$data->description_en}}</textarea>
                                

                            </div>
                        </div>
        @foreach($about_content as $content)

     

                    <hr> <center><h2>Səhifə Kontenti</h2></center>

                    @isset($content->image)
                    <div class="form-group">
                        <label>Yüklü Şəkil</label>
                        <div class="row">
                            <div class="col-xs-6">
                                <img src="{!!$content->image!!}" alt="" width="100">
                            </div>
                        </div>
                    </div>
                    @endisset
                    <div class="form-group">
                        <label>Şəkil seç</label>
                        <div class="row">
                            <div class="col-xs-12">
                               
                               <input type="file" class="form-control" name="content_image_{{$content->id}}">
                            </div>
                        </div>
                    </div>
                    


                    <div class="form-group">
                        <label>Kontent Başlığı (Azərbaycan dili)</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="content_title_{{$content->id}}" value="{{$content->title}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Kontent Başlığı (ingilis dili)</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="content_title_en_{{$content->id}}" value="{{$content->title_en}}">
                            </div>
                        </div>
                    </div>
                   

                    <div class="form-group">
                        <label>Kontent açıqlaması (Azərbaycan dili)</label>
                        <div class="row">
                            <div class="col-xs-12">
                                    <textarea class="form-control" id="editor1"
                                              name="content_description_{{$content->id}}">{{$content->description}}</textarea>
                                

                            </div>
                        </div>
</div>

<div class="form-group">
                        <label>Kontent açıqlaması (ingilis dili)</label>
                        <div class="row">
                            <div class="col-xs-12">
                                    <textarea class="form-control" id="editor1"
                                              name="content_description_en_{{$content->id}}">{{$content->description_en}}</textarea>
                                

                            </div>
                        </div>
</div>
                            <input type="hidden" name="old_file_{{$content->id}}" value="{{$content->image}}">

@endforeach

                            <div align="right" class="box-footer">
                                <button type="submit" class="btn btn-success">Yenilə</button>
                            </div>
                        </div>


                </form>
             </div>
              </div>
            </div>
          </div>
        </div>


@endsection
@section('css')@endsection
@section('js')@endsection