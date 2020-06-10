@extends('backend.layout')
@section('content')
<script src="{{url('/')}}/js/jquery.datetimepicker.js" type="text/javascript"></script>
<link rel="stylesheet" href="{{url('/')}}/css/jquery.datetimepicker.min.css">
   <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Konkurs</h3>
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
                <form action="{{route('konkurs.store')}}" method="post"
                      enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label>Şəkil Seç</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" name="konkurs_image"  type="file">
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label>Başlıq</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="konkurs_title">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Səsvermə limiti</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" type="text"  name="voice_limit">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Uduş Məbləği</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="konkurs_prize">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Qısa məlumat</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <textarea class="form-control" id="editor7854"
                                              name="konkurs_description"></textarea>
                                <script>
                                    CKEDITOR.replace('editor7854');
                                </script>

                                    </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Video Url</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" name="konkurs_video"  type="text">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>İştirak şərtləri</label>
                        <div class="row">
                            <div class="col-xs-12">
                                    <textarea class="form-control" id="editor44"
                                              name="konkurs_terms_of_participation"></textarea>
                                <script>
                                    CKEDITOR.replace('editor44');
                                </script>

                            </div>
                        </div>

                     
                        <div class="form-group">
                        <br><br>
                        <label>Tədbirlər planı</label>
                        <div class="row" id="p_scents">
                       <p style="padding:20px;border:1px solid blue"> <label>Tədbir adı</label>
                            <input type="text" name="tedbir_adi[]" id="tedbir_adi0" class="form-control" placeholder="Tədbir adı">
                            <label>Tədbir iconu</label>
                            <input type="file" name="tedbir_icon[]" id="tedbir_icon0" class="form-control">
                              <label>Tədbirin Başlama tarixi</label>
                           
                              <span class="addon"><span class="glyphicon glyphicon-calendar"></span>  
                    <input type='text'  id='datetimepicker20' class="form-control date1" name="konkurs_start_date[]"  value="<?php print date('d-m-Y h:i')?>" />
                   
                    </span>
         
                         
                         
                            <label>Tədbirin bitmə tarixi</label>
                          
                            <span class="addon"><span class="glyphicon glyphicon-calendar"></span>            
                    <input type='text' id='datetimepicker20' class="form-control date1" name="konkurs_end_date[]" value="<?php print date('d-m-Y h:i')?>"/>
                   
                    </span>
                
                            <label>Tədbir Haqqında ətraflı məlumat</label>
                            
 <textarea class="form-control" id="editor0" name="konkurs_action_plan_description[]"></textarea>
                                <script>
                                    CKEDITOR.replace('editor0');
                                </script> 
                                         
                          
                            
                      </p>

                        </div>
                        </div>
                        <h2><a  href="#" class="btn btn-success"id="addScnt"> Yeni Tədbir Planı Əlavə et</a></h2>
                        <div ></div>
                       
              
                        <div class="form-group">
                            <label>Status</label>
                            <div class="row">
                                <div class="col-xs-12">
                                    <select name="konkurs_status" class="form-control">
                                        <option value="1">Aktiv</option>
                                        <option value="0">Passiv</option>
                                    </select>
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
<script>

$(function() {
        var scntDiv = $('#p_scents');
        var i = $('#p_scents p').size() + 1;
        var b = 1;
        $(document).on('click', '#addScnt', function() {
        if($('#p_scents p').size()<=4){
                $('<p id="p_scnt_'+ i +'" class="col-xs-12" style="padding:20px;border:1px solid blue"><label>Tədbir adı</label><input type="text" name="tedbir_adi[]" id="tedbir_adi'+ i +'" class="form-control" placeholder="Tədbir adı"><label>Tədbir iconu</label> <input type="file" name="tedbir_icon[]" id="tedbir_icon'+ i +'" class="form-control"> <label>Tədbirin Başlama tarixi</label><span class="addon" ><span class="glyphicon glyphicon-calendar"></span> <input type="text" data-date-format="DD-MM-YYYY"  id="datetimepicker'+ i +'" class="form-control date1" name="konkurs_start_date[]"  value="<?php print date('d-m-Y h:i')?>" /> </span><label>Tədbirin bitmə tarixi</label><span class="addon"><span class="glyphicon glyphicon-calendar"></span><input type="text" id=datetimepicker'+ i +' class="form-control date1" name="konkurs_end_date[]" value="<?php print date('d-m-Y H:i')?>"/> </span> <label>Tədbir Haqqında ətraflı məlumat</label> <textarea class="form-control" id="editor'+ i +'_m" name="konkurs_action_plan_description[]"></textarea> <a href="#"  class="btn btn-danger"id="remScnt">Remove</a></p>').appendTo(scntDiv);
                var m = 'editor'+i+'_m';
            CKEDITOR.replace('editor'+ i +'_m');
            i++;
            b++;
            $('.date1').datetimepicker({
            format:'d-m-Y H:i',

});

if($('#p_scents p').size() == '5'){
  $('#addScnt').hide();
}else{
  $('#addScnt').show();
}

         
                return false;
        }

        });
        
        $(document).on('click', '#remScnt', function() { 
                if( i > 2 ) {
                  $(this).parents('p').remove();
                  $('#addScnt').show();
                  
                }
                return false;
        });
});
$('.date1').datetimepicker({
    format:'d-m-Y H:i',

});


</script>


@endsection
@section('css')@endsection
@section('js')@endsection