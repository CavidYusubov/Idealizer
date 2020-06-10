@extends('backend.layout')
@section('content')
   <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>İstifadəçilər</h3>
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
                <form action="{{route('user.store')}}" method="post"
                      enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label>Şəkil Seç</label>
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
                                <input class="form-control" type="text" name="name">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Soyad </label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="surname">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" type="email" name="email">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Ətraflı məulmat (Juri)</label>
                        <div class="row">
                            <div class="col-xs-12">
                              <textarea name="user_info" class="form-control" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Şifrə</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" name="password">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Cins</label>
                        <div class="row">
                            <div class="col-xs-12">
                            <select class="form-control" name="user_gender">
                            <option value="">--Seç--</option>
                                  <option value="female">Qadın</option>
                                  <option value="male">Kişi</option>
                                  
                                </select>
                            </div>
                        </div>
                    </div>
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
                   
                      <div class="form-group">
                        <label>İstifadəçi rolu</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <select class="form-control" name="user_role">
                                  <option value="admin">Admin</option>
                                  <option value="user">Sayt İstifadəçisi</option>
                                  <option value="tournament_member">Müsabiqə İştirakçısı</option>
                                  <option value="juri">Jüri</option>
                                  <option value="statistik">Statistik</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">


                        <div class="form-group">
                            <label>Status</label>
                            <div class="row">
                                <div class="col-xs-12">
                                    <select name="user_status" class="form-control">
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
</script>
@endsection
@section('css')@endsection
@section('js')@endsection