@extends('backend.layout')
@section('content')
<style>.checkbox {width: 20px; height: 20px;}</style>
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script src="{{url('/')}}/js/jquery.datetimepicker.js" type="text/javascript"></script>
<link rel="stylesheet" href="{{url('/')}}/css/jquery.datetimepicker.min.css">
  <div class="right_col" role="main">
          <div class="">
            <div class="konkurs-title">
              <div class="title_left">
                <h3>Müsabiqə</h3>
              </div>

             
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Redaktə et</h2>
                    <div align="right">
                    <!-- <a href="{{route('konkurs.create')}}"><button class="btn btn-success">Əlavə et</button></a> -->
                  
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                    Sistemi sıfırla
</button>
                        <div class="modal fade"  id="exampleModal" tabindex="-1" role="dialog">
                     
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="text-align:left">  Sistemi sıfırla</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('remove_all')}}" method="POST">
      <div class="modal-body" style="text-align:left">
      <div class="alert alert-danger" role="alert">
  Diqqət bu saytda İstifadəçilər bildirişlər, startaplar və onlar barədə bütün informasiyaları siləcək!
</div>
        <h4>Admin parolunu daxil et</h4>
        <p><input type="password" required class="form-control" name="admin_pass" placeholder="Parol"></p>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>
                 </div>
                    <ul class="nav navbar-right panel_toolbox">
                     
                      <li><a href="{{   url()->previous()   }}"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                <form action="{{route('konkurs.update',$konkurs->id)}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
@method('PUT')

                    @isset($konkurs->konkurs_image)
                    <div class="form-group">
                        <label>Yüklü Şəkil</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <img width="100" src="{{$konkurs->konkurs_image}}" alt="">
                            </div>
                        </div>
                    </div>
                    @endisset
                    <div class="form-group">
                        <label>Şəkil Seç</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" name="konkurs_image"  type="file">
                                <input class="form-control" name="old_image"  type="hidden" value="{{$konkurs->konkurs_image}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Video Url</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" name="konkurs_video"  type="text" value="{{$konkurs->konkurs_video}}">
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label>Başlıq</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" value="{{$konkurs->konkurs_title}}" name="konkurs_title">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Uduş Məbləği</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" value="{{$konkurs->konkurs_prize}}" name="konkurs_prize">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Səsvermə limiti</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" value="{{$konkurs->voice_limit}}" name="voice_limit">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Qısa məlumat (Azərbaycan dili)</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <textarea class="form-control" id="editor33" value=""
                                              name="konkurs_description">{{$konkurs->konkurs_description}}</textarea>
                                <script>
                                    CKEDITOR.replace('editor33');
                                </script>

                                    </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Qısa məlumat (İngilis dili)</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <textarea class="form-control" id="editor343" value=""
                                              name="konkurs_description_en">{{$konkurs->konkurs_description_en}}</textarea>
                                <script>
                                    CKEDITOR.replace('editor343');
                                </script>

                                    </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label>İştirak şərtləri (Azərbaycan dili)</label>
                        <div class="row">
                            <div class="col-xs-12">
                                    <textarea class="form-control" id="editor4488"
                                    value=""
                                              name="konkurs_terms_of_participation">{{$konkurs->konkurs_terms_of_participation}}</textarea>
                                <script>
                                    CKEDITOR.replace('editor4488');
                                </script>

                            </div>
                        </div>
                        <div class="form-group">
                        <label>İştirak şərtləri (İngilis dili)</label>
                        <div class="row">
                            <div class="col-xs-12">
                                    <textarea class="form-control" id="editor448"
                                    value=""
                                              name="konkurs_terms_of_participation_en">{{$konkurs->konkurs_terms_of_participation_en}}</textarea>
                                <script>
                                    CKEDITOR.replace('editor448');
                                </script>

                            </div>
                        </div>

                         <div class="form-group">
                        <label>Tədbirlər planı</label>
                        <div class="row">
                            <div class="col-xs-12">
                            @php $n=0; @endphp
                                @foreach($Actionplan as $Actionplans)
                               
                                <div class="row" id="p_scents">
                       <p style=";border:1px solid blue;padding: 39px;"> <label>Tədbir adı</label>
                       <input type="hidden" value="{{$Actionplans->id}}" name="action_id[]">
                            <input type="text" name="tedbir_adi[]" readonly value="{{$Actionplans->action_title}}" id="tedbir_adi0" class="form-control" placeholder="Tədbir adı">
                            
                            <label>Tədbir iconu</label>
                            <input type="file" name="tedbir_icon[{{$Actionplans->id}}]" id="tedbir_icon0" class="form-control">
                            <label>Youtube url</label>
                            <input type="text" name="tedbir_video[{{$Actionplans->id}}]" id="tedbir_video0" value="{{$Actionplans->action_video}}"class="form-control">
                            @isset($Actionplans->action_icon)
                
                        <label>Yüklü icon</label>
                     
                           
                                <img width="50" src="{{$Actionplans->action_icon}}" alt="">
                           <br><br>
                    @endisset
                  
               
                  
                           <span class="addon"><span class="glyphicon "></span>  
                         
                 @if ($Actionplans->status =='none')
                 @endif
                 </span>
                 @php $n++ @endphp
                              <label>Tədbirin Başlama tarixi</label>
                           
                              <span class="addon"><span class="glyphicon glyphicon-calendar"></span>  
                    <input type='text'  id='datetimepicker20' class="form-control date1" name="konkurs_start_date[]"  value="<?php print date('d-m-Y h:i',$Actionplans->action_start_day)?>" />
                   
                    </span>
         
                         
                         
                            <label>Tədbirin bitmə tarixi</label>
                          
                            <span class="addon"><span class="glyphicon glyphicon-calendar"></span>            
                    <input type='text' id='datetimepicker20' class="form-control date1" name="konkurs_end_date[]" value="<?php print date('d-m-Y h:i',$Actionplans->action_end_day)?>"/>
                   
                    </span>
                
                            <label>Tədbir Haqqında ətraflı məlumat (Azərbaycan dili)</label>
                            
 <textarea class="form-control" id="editor{{$n}}" name="konkurs_action_plan_description[]"> {{$Actionplans->action_description}} </textarea>
<br> <label>Tədbir Haqqında ətraflı məlumat (İngilis dili</label>
                            
                            <textarea class="form-control" id="editor{{$n}}100" name="konkurs_action_plan_description_en[]"> {{$Actionplans->action_description_en}} </textarea>
                                                           
                                         <script>
                                          CKEDITOR.replace('editor{{$n}}100');
                                         </script>
 <label>Aktiv et (işarələ və aktiv et)</label><br>
                    <input style="float:left" type="radio" name= "status" id="status_{{$n}}"  {{$Actionplans->status=="1" ? " checked  " : ""}}  {{$Actionplans->status=="0" ? "   " : ""}} value='{{$Actionplans->id}}'  data-toggle="toggle" data-on="Tamamlandı" data-off="Davam edir" data-onstyle="success" data-offstyle="danger">
                           <input type="hidden" id="status_F{{$n}}"  name="" value="{{$Actionplans->status}}">
 
 <!-- <a href="#" style="float:right"  class="btn btn-danger trash" id="@php echo $Actionplans->id @endphp">Sil</a> -->
                      </p>
                       
                        </div>
                    
                        @endforeach
                              
                      
                            </div>
                        </div>
                        <div id="that">
                        
                        </div>
                        <!-- <h2><a  href="#" class="btn btn-success"id="addScnt"> Yeni Tədbir Planı Əlavə et</a></h2> -->
                                </div>
                            </div>
                          </div>
                        <div class="form-group">
                            <label>Status</label>
                            <div class="row">
                                <div class="col-xs-12">
                                    <!-- <select name="konkurs_status" class="form-control"> -->
                                    <input type="checkbox" id="status"  {{$konkurs->konkurs_status=="1" ? "checked value=1 " : ""}}  {{$konkurs->konkurs_status=="0" ? " value=0  " : ""}}   data-toggle="toggle" data-on="Aktiv" data-off="Deaktiv" data-onstyle="success" data-offstyle="danger">
                                        <!-- <option value="1">Aktiv</option>
                                        <option value="0">Deaktiv</option>
                                    </select> -->
                                </div>
                            </div>


                            <div align="right" class="box-footer">
                                <button type="submit" class="btn btn-success">Yadda saxla</button>
                            </div>
                        </div>

                        <input type="hidden" id="status1"  name="konkurs_status" value="{{$konkurs->konkurs_status}}">

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
        @for($i=0; $i<10; $i++ )
                                @php echo "<script>
                                    CKEDITOR.replace('editor".$i."');
                                </script>";
                                @endphp
                                @endfor
<script type="text/javascript">
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
$(function() {
        var scntDiv = $('#p_scents');
        var i = $('#p_scents p').size() ;
        var qr = $('#p_scents p').size() ;
        var b = 1;
        var br=  parseInt(5) - parseInt($('#p_scents p').size()) ;
        var st = parseInt(qr) + parseInt($('#that p').size()) ;
        
      
        $(document).on('click', '#addScnt', function() {
        if($('#that p').size() <= br){
  
                $('#that').append('<p id="p_scnt_'+ i +'" class="col-xs-12" style="padding:20px;border:1px solid blue"><label>Tədbir adı</label><input type="text" name="tedbir_adi_yeni[]" id="tedbir_adi'+ i +'" class="form-control" placeholder="Tədbir adı"><label>Tədbir iconu</label> <input type="file" name="tedbir_icon_yeni[]" id="tedbir_icon'+ i +'" class="form-control"> <label>Tədbirin Başlama tarixi</label><span class="addon" ><span class="glyphicon glyphicon-calendar"></span> <input type="text" data-date-format="DD-MM-YYYY"  id="datetimepicker'+ i +'" class="form-control date1" name="konkurs_start_date_yeni[]"  value="<?php print date('d-m-Y h:i')?>" /> </span><label>Tədbirin bitmə tarixi</label><span class="addon"><span class="glyphicon glyphicon-calendar"></span><input type="text" id=datetimepicker'+ i +' class="form-control date1" name="konkurs_end_date_yeni[]" value="<?php print date('d-m-Y H:i')?>"/> </span> <label>Tədbir Haqqında ətraflı məlumat</label> <textarea class="form-control" id="editor'+ i +'_m" name="konkurs_action_plan_description_yeni[]"></textarea> <a href="#"  class="btn btn-danger"id="remScnt">Sil</a></p>');
                var m = 'editor'+i+'_m';
            CKEDITOR.replace('editor'+ i +'_m');
            i++;
            b++;
            $('.date1').datetimepicker({
            format:'d-m-Y H:i',

});

if($('#that p').size() == br){
  $('#addScnt').hide();
}else{
  $('#addScnt').show();
}

         
                return false;
        }else{
          $('#addScnt').hide();
        }

        });
        
        $(document).on('click', '#remScnt', function() { 
                if( i > 0 ) {
                  $(this).parents('p').remove();
                  $('#addScnt').show();
                  
                }
                return false;
        });
});
 $('.date1').datetimepicker({
    format:'d-m-Y H:i',

});
$(".trash").click(function () {
            destroy_id = $(this).attr('id');

            alertify.confirm('Silme prosesini təstiqləyin!', 'Bu proses geri alına bilməz',
                function () {
                    location.href = "{{url('')}}/action_plan/delete/" + destroy_id;
                },
                function () {
                    alertify.error('Silmə prosesindən imtina edildi')
                }
            )

        });
      

     
</script>
  <script>
             
  
 $('#status_1').change(function(){
  if($(this).prop('checked'))
  {
   $('#status_F1').val('1');
  }
  else
  {
   $('#status_F1').val('0');
  }
 });
 
 $('#status_2').change(function(){
  if($(this).prop('checked'))
  {
   $('#status_F2').val('1');
  }
  else
  {
   $('#status_F2').val('0');
  }
 });
 
 $('#status_3').change(function(){
  if($(this).prop('checked'))
  {
   $('#status_F3').val('1');
  }
  else
  {
   $('#status_F3').val('0');
  }
 });
 
 $('#status_4').change(function(){
  if($(this).prop('checked'))
  {
   $('#status_F4').val('1');
  }
  else
  {
   $('#status_F4').val('0');
  }
 });
 
 $('#status_5').change(function(){
  if($(this).prop('checked'))
  {
   $('#status_F5').val('1');
  }
  else
  {
   $('#status_F5').val('0');
  }
 });
</script>
@endsection
@section('css')@endsection
@section('js')@endsection