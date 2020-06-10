@extends('backend.layout')
@section('content')
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
     <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Settings</h3>
              </div>

             
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Redaktə et</h2>
                    <div align="right">
                    <a href="{{route('user.create')}}"><button class="btn btn-success">Əlavə et</button></a>
                  
                </div>
                    <ul class="nav navbar-right panel_toolbox">
                      
                      <li><a href="{{   url()->previous()   }}"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
            <div class="box-body">
                <form action="{{route('user.update',$users->id)}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    @isset($users->user_file)
                    <div class="form-group">
                        <label>Mövcud Şəkil</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <img width="100" src="{{$users->user_file}}" alt="">
                            </div>
                        </div>
                    </div>
                    @endisset

                    <div class="form-group">
                        <label>Şəkil seç</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" name="user_file"  type="file">
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label>Ad </label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="name" value="{{$users->name}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Soyad </label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="surname"  value="{{$users->surname}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label> Email</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" type="email" name="email" value="{{$users->email}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Ətraflı məulmat (Juri)</label>
                        <div class="row">
                            <div class="col-xs-12">
                              <textarea name="user_info" class="form-control" cols="30" rows="10">{{$users->user_info}}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Şifrə</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" name="password" >
                                <small>Şifrəni dəyişdirmək istəmirsinizssə, bu xananı boş buraxın!</small>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Cins</label>
                        <div class="row">
                            <div class="col-xs-12">
                            <select class="form-control" name="user_gender">
                           
                            <option {{$users->user_gender =="null" ? "selected=''" : ""}}  value="female">-- Seç --</option>
                                  <option {{$users->user_gender =="female" ? "selected=''" : ""}}  value="female">Qadın</option>
                                  <option {{$users->user_gender =="male" ? "selected=''" : ""}}  value="male">Kişi</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    @if(!empty($users->user_birthday))
                    @php
                 
                    $datetoformat=date('d-m-Y',$users->user_birthday);
                   $birthdays= explode('-',$datetoformat);
                   @endphp
                    <div class="form-group">
                        <label>Doğum tarixi</label>
                        <div class="row">
                            <div class="col-xs-4">
                            <span>
      <select name="birth_day" class="form-control">
        <option selected value="@php echo $birthdays[0]; @endphp">@php echo intval($birthdays[0]); @endphp</option>
        <?php 
          $start_date = 1;
          $end_date   = 31;
          for( $j=$start_date; $j<=$end_date; $j++ ) {
            echo '<option value='.$j.'>'.$j.'</option>';
          }
        ?>
      </select>
    </span>
    </div>
    <div class="col-xs-4">
                            <select name="birth_month" class="form-control">
                            <option selected value="@php echo $birthdays[1]; @endphp" style="background:darkred;color:silver;">@php echo date('F', mktime(0, 0, 0, intval($birthdays[1]), 1)); @endphp</option>
        <?php for( $m=1; $m<=12; ++$m ) { 
          $month_label = date('F', mktime(0, 0, 0, $m, 1));
        ?>
<?php if(date('F', mktime(0, 0, 0, intval($birthdays[1]), 1)) != $month_label) {?>
          <option value="<?php echo $month_label; ?>"><?php echo $month_label; ?></option>
          <?php } ?>?>
        <?php } ?>
      </select> 
    </span>
    </div>
    <div class="col-xs-4">
    <span>
      <select name="birth_year" class="form-control">
      <option selected value="@php echo $birthdays[2]; @endphp">@php echo $birthdays[2]; @endphp</option>
        <?php 
          $year = date('Y');
          $min = $year - 60;
          $max = $year-10;
          for( $i=$max; $i>=$min; $i-- ) {
            echo '<option value='.$i.'>'.$i.'</option>';
          }
        ?>
      </select>
      </span>
      </div>
                             
                            </div>
                        </div>
                    </div>
                   @else

                   <div class="form-group">
                        <label>Doğum tarixi</label>
                        <div class="row">
                            <div class="col-xs-4">
                            <span>
      <select name="birth_day" class="form-control">
        <?php 
          $start_date = 1;
          $end_date   = 31;
          for( $j=$start_date; $j<=$end_date; $j++ ) {
            echo '<option value='.$j.'>'.$j.'</option>';
          }
        ?>
      </select>
    </span>
    </div>
    <div class="col-xs-4">
                            <select name="birth_month" class="form-control">
        <?php for( $m=1; $m<=12; ++$m ) { 
        
          $month_label = date('F', mktime(0, 0, 0, $m, 1));
        
        ?>
          <option value="<?php echo $month_label; ?>"><?php echo $month_label; ?></option>
        <?php } ?>
      </select> 
    </span>
    </div>
    <div class="col-xs-4">
    <span>
      <select name="birth_year" class="form-control">
        <?php 
          $year = date('Y');
          $min = $year - 60;
          $max = $year;
          for( $i=$max; $i>=$min; $i-- ) {
            echo '<option value='.$i.'>'.$i.'</option>';
          }
        ?>
      </select>
      </span>
      </div>
                             
                            </div>
                        </div>
                    </div>
                   @endif
 <div class="form-group">
                        <label>İstifadəçi rolu</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <select class="form-control" name="user_role">
                                 
                                  <option {{$users->user_role =="admin" ? "selected=''" : ""}}  value="admin">Admin</option>
                                  <option {{$users->user_role =="user" ? "selected=''" : ""}}  value="user">Sayt İstifadəçisi</option>
                                   <option {{$users->user_role =="tournament_member" ? "selected=''" : ""}} value="tournament_member">Müsabiqə İştirakçısı</option>
                                  
                                  <option {{$users->user_role =="juri" ? "selected=''" : ""}}  value="juri">Jüri</option>
                                  <option  {{$users->user_role =="statistik" ? "selected=''" : ""}} value="statistik">Statistik</option>
                                </select>
                            </div>
                        </div>
                    </div>
                 


                        <div class="form-group">
                            <label>Status</label>
                            <div class="row">
                                <div class="col-xs-12">
                                    <!-- <select name="user_status" class="form-control"> -->
<input type="checkbox" id="status"  {{$users->user_status=="1" ? "checked value=1 " : ""}}  {{$users->user_status=="0" ? " value=0  " : ""}}   data-toggle="toggle" data-on="Aktiv" data-off="Deaktiv" data-onstyle="success" data-offstyle="danger">
                                        <!-- <option {{$users->user_status=="1" ? "selected=''" : ""}} value="1">Aktiv</option>
                                        <option {{$users->user_status=="0" ? "selected=''" : ""}} value="0">Deaktiv</option> -->
                                    <!-- </select> -->
                                </div>
                            </div>


                            <input type="hidden" name="old_file" value="{{$users->user_file}}">

                            <input type="hidden" id="status1"  name="user_status" value="{{$users->user_status}}">

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