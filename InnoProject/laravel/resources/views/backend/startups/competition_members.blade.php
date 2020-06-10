@extends('backend.layout')
@section('content')
<style>
label{
    font-size: larger;
}


.fa-star:hover{
    color:#b9a307;
    cursor: pointer;
}
</style>

 <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Müsabiqə iştirakçıları</h3>
              </div>

             
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Siyahı</h2>
                    <div align="right">
              
                  
                </div>
                    <ul class="nav navbar-right panel_toolbox">
                     
                      <li><a href="{{   route('startups')   }}"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                <div class="">
            <div class="box-header with-border">
                <h3 class="box-title"></h3>

                <div align="right">
                    <a href="{{route('startups.create')}}"><button class="btn btn-success">Əlavə et</button></a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th  >#</th>
                       
                        <th  >Startup adı</th>
                       
                    
                        <!-- <th>Logo</th> -->
                        <!-- <th>Sayt</th>
                        
                        <th>Şəkil</th> -->
                        <th  >Startup səsi</th>
                        <th  >Juri səsi</th>
                        
                        <th  > Startup sahibi</th>
                        <th  > Admin və Moderator səsləri</th>
                        <th  > Kriteriyalar</th>
                        <th style="text-align:center" >Top 20  (Seçilmiş: {{$count_top_20}})</th>
                    </tr>
                    <tbody id="sortable">
                        <?php $n=1;?>
                   @foreach($data['startups'] as $startups)
                        <tr id="item-{{$startups->id}}">
                            <td ><?php echo $n++;?></td>
                        
                       
                       
                              
                            <td width="5">{{$startups->startup_title}}</td>
                            <!-- <td width="5">{{$startups->startup_description}}</td> -->
                           <!-- <td class="sortable" width="50"><img width="50" src="{{$startups->startup_logo}}" alt=""></td>
                        -->
                           <!-- <td width="5" style="background:  #{{$startups->startup_color}}"></td> -->
                            <!-- <td width="5">{{$startups->startup_pitch}}</td>
                             <td class="sortable" width="50"><img width="50" src="{{$startups->startup_image}}" alt=""></td> -->
                             <td >                           
                             <a href="javascript.void();" class="btn btn-info btn-sm" style="float:left"   data-toggle="modal" data-target="#myListUsers{{$startups->id }}">Siyahıya bax <span class="badge badge-dark">{{$startups->startup_voice}} </span> </a>
                             <div id="myListUsers{{$startups->id }}" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Səs vermiş istifadəçilər</h4>
      </div>
      <div class="modal-body">
      <form action="{{route('startups.userpointsupdate',$startups->startup_id)}}" method="post">
                        <label>Səsi dəyiş</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" type="number" name="new_user_point" value="{{$startups->startup_voice}}">
                            </div>
                        </div>
                    
                    <input type="submit" class="btn btn-default" value="Yenilə">
                    <input type="hidden" name="startup_id_voice" value="{{$startups->startup_id}}" >
       </form>             
      @foreach($users as $user)
      @if( $user->startup_id == $startups->startup_id)
        <label>  {{$user->name}} {{$user->surname}} <br>
        {{$user->email}} <br> {{$user->user_phone}} 
        </label><br>
        @endif
      @endforeach
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Bağla</button>
      </div>
    </div>

  </div>
                             </td>
                            
                             <td  >
                             
                            

                             <a href="javascript.void();" class="btn btn-info btn-sm" style="float:left"   data-toggle="modal" data-target="#myListJuri{{$startups->id }}">Siyahıya bax <span class="badge badge-dark">{{$startups->juri_voice}} </span> </a>
                             <div id="myListJuri{{$startups->id }}" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Səs vermiş Jürilər</h4>
      </div>
      <div class="modal-body">
      <div class="form-group">
      <form action="{{route('startups.juripointsupdate',$startups->startup_id)}}" method="post">
                        <label>Səsi dəyiş</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" type="number" name="new_juri" value="{{$startups->juri_voice}}">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-default" >Yenilə</button>
                    <input type="hidden" name="startup_id_voice" value="{{$startups->startup_id}}" >
       </form>             <br><br>
      @foreach($find_juri as $user)
      @if( $user->startup_id == $startups->startup_id)
        <label>  {{$user->name}} {{$user->surname}} <br>
        {{$user->email}} <br> {{$user->user_phone}} 
        </label><br>
        </label>Verilmiş ümumi səs sayı {{$user->overall}}<br><hr>
        @endif
      @endforeach
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Bağla</button>
      </div>
    </div>

  </div>

                             </td>
                           
                             <td >{{$startups->name}} {{$startups->surname}}<br>{{$startups->email}} <br> {{$startups->user_phone}}</td>

                             <!-- <td >
                                @if($startups->startup_check == 0) <a href="javascript:void(0)" title="Təstiq et"><button id="@php echo $startups->id @endphp"  class="btn btn-primary" aria-hidden="true"> Təstiq et</button></a>  
                                @endif
                          </td> -->
                              
                          <td>{{$startups->admin_voice}}
                             </td>
                               <td>
                               
                             @foreach($criteria as $criter)
                             
                            
                               @if($startups->startup_id ==$criter->startup_id )
                               <button class="btn btn-info "  data-toggle="modal" data-target="#myModal{{$startups->startup_id}}"> Səslərə bax  <span class="badge badge-dark">{{$criter->overall}} </span></button>
                               <br> Səs verdi: {{$criter->name}}  {{$criter->surname}}<br> {{$criter->email}}
                           
 
 <br>                          

<!-- Modal -->
<div class="modal fade" id="myModal{{$startups->startup_id}}" role="dialog">

  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Kriteriya üzrə səslər </h4>
      </div>
      <div class="modal-body">
      <div style="height:100px;width:100%; background-image:url('{{$startups->startup_image}}');background-position: center;
    background-repeat: no-repeat;"></div>
           <div style="height:50px;width:10%; background-image:url('{{$startups->startup_logo}}');background-position: center;
    background-repeat: no-repeat;background-size: cover;border: 1px solid #51a9c3;"></div>
       <h2 style="text-align:center"> {{$startups->startup_title}}</h2>
       <form action="{{route('startups.giveCriteriaVoice_update',$startups->startup_id)}}" method="post">
       <input type="hidden" name="startup_id_voice" value="{{$startups->startup_id}}" >
       <?php $old_voice_count=$criter->criteria1+$criter->criteria2+$criter->criteria3+$criter->criteria4+$criter->criteria5; ?>
       <input type="hidden" name="old_count_voice" value="{{$old_voice_count}}" >
       <div class="form-group">
                        <label>Customer</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <select name="criteria1" id="" class="form-control">
                                <option {{$criter->criteria1=="1" ? "selected=''" : ""}}  >1</option>
                                <option {{$criter->criteria1=="2" ? "selected=''" : ""}}  >2</option>
                                <option {{$criter->criteria1=="3" ? "selected=''" : ""}}  >3</option>
                                <option {{$criter->criteria1=="4" ? "selected=''" : ""}}  >4</option>
                                <option {{$criter->criteria1=="5" ? "selected=''" : ""}}  >5</option>
                                </select>
                                </div>
                        </div>
                          <label>Product</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <select name="criteria2" id="" class="form-control">
                                <option {{$criter->criteria2=="1" ? "selected=''" : ""}}  >1</option>
                                <option {{$criter->criteria2=="2" ? "selected=''" : ""}}  >2</option>
                                <option {{$criter->criteria2=="3" ? "selected=''" : ""}}  >3</option>
                                <option {{$criter->criteria2=="4" ? "selected=''" : ""}}  >4</option>
                                <option {{$criter->criteria2=="5" ? "selected=''" : ""}}  >5</option>
                             
                                </select>
                                </div>
                        </div>
                        <label>Competition</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <select name="criteria3" id="" class="form-control">
                                <option {{$criter->criteria3=="1" ? "selected=''" : ""}}  >1</option>
                                <option {{$criter->criteria3=="2" ? "selected=''" : ""}}  >2</option>
                                <option {{$criter->criteria3=="3" ? "selected=''" : ""}}  >3</option>
                                <option {{$criter->criteria3=="4" ? "selected=''" : ""}}  >4</option>
                                <option {{$criter->criteria3=="5" ? "selected=''" : ""}}  >5</option>
                              
                                </select>
                                </div>
                        </div>
                        <label>Finance</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <select name="criteria4" id="" class="form-control">
                                <option {{$criter->criteria4=="1" ? "selected=''" : ""}}  >1</option>
                                <option {{$criter->criteria4=="2" ? "selected=''" : ""}}  >2</option>
                                <option {{$criter->criteria4=="3" ? "selected=''" : ""}}  >3</option>
                                <option {{$criter->criteria4=="4" ? "selected=''" : ""}}  >4</option>
                                <option {{$criter->criteria4=="5" ? "selected=''" : ""}}  >5</option>
                              
                                </select>
                                </div>
                        </div>
                        <label>Team</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <select name="criteria5" id="" class="form-control">
                                <option {{$criter->criteria5=="1" ? "selected=''" : ""}}  >1</option>
                                <option {{$criter->criteria5=="2" ? "selected=''" : ""}}  >2</option>
                                <option {{$criter->criteria5=="3" ? "selected=''" : ""}}  >3</option>
                                <option {{$criter->criteria5=="4" ? "selected=''" : ""}}  >4</option>
                                <option {{$criter->criteria5=="5" ? "selected=''" : ""}}  >5</option>
                              
                                </select>
                                </div>
                        </div>
                       
  
      </div>
      <div class="modal-footer">
      <input type="submit" class="btn btn-default" value="Yenilə"></button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Bağla</button>
      </div>
    </div>
    </form>
  </div>
</div>

                <style>
                .seconds{{$startups->startup_id}}{
                  display:none
                }
                </style>
                             @else
                             
 

                               
                              @endif 
                               @endforeach
                               <button type="button" class="btn btn-info seconds{{$startups->startup_id}}" data-toggle="modal" data-target="#myModal{{$startups->startup_id}}">Kriteriya üzrə səs ver</button>

                               
<!-- Modal -->
<div class="modal fade " id="myModal{{$startups->startup_id}}" role="dialog">
  <div class="modal-dialog">
 
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Kriteriya üzrə səs ver </h4>
      </div>
      <div class="modal-body">
      <div style="height:100px;width:100%; background-image:url('{{$startups->startup_image}}');background-position: center;
    background-repeat: no-repeat;"></div>
           <div style="height:50px;width:10%; background-image:url('{{$startups->startup_logo}}');background-position: center;
    background-repeat: no-repeat;background-size: cover;border: 1px solid #51a9c3;"></div>
       <h2 style="text-align:center"> {{$startups->startup_title}}</h2>
       <form action="{{route('startups.giveCriteriaVoice',$startups->startup_id)}}" method="post">
       <input type="hidden" name="startup_id_voice" value="{{$startups->startup_id}}" >
       <div class="form-group">
                        <label>Customer</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <select name="criteria1" id="" class="form-control">
                                <option>--Bal seç--</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                </select>
                                </div>
                        </div>
                          <label>Product</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <select name="criteria2" id="" class="form-control">
                                <option>--Bal seç--</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                </select>
                                </div>
                        </div>
                        <label>Competition</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <select name="criteria3" id="" class="form-control">
                                <option>--Bal seç--</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                </select>
                                </div>
                        </div>
                        <label>Finance</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <select name="criteria4" id="" class="form-control">
                                <option>--Bal seç--</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                </select>
                                </div>
                        </div>
                        <label>Team</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <select name="criteria5" id="" class="form-control">
                                <option>--Bal seç--</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                </select>
                                </div>
                        </div>
                       
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Bağla</button>
        <button type='submit' class='btn btn-info'>Səs ver</button>
        </form>
      </div>
    </div>
    
  </div>
</div>
                               </td>
                               <td style="    width: 110px;text-align:center"><i class="fa fa-star fa-2x" id="@php echo $startups->startup_id @endphp" @if($startups->favor == 1 ) style="color:#b9a307;"  @endif aria-hidden="true"></i></td>
                               
                                 <!-- <td width="5">
                                <a href="{{route('startups.edit',$startups->id)}}"><i class="fa fa-eye fa-2x" ></i></a></td>
                            <td width="5">
                                <a href="javascript:void(0)"><i id="@php echo $startups->memb_id @endphp" class="fa fa-trash-o fa-2x" style="color: red;"></i></a>
                            </td> -->
                        </tr>
                    @endforeach
                    </tbody>
                    </thead>
                </table>
                 <table>
                  <tr><td >{{ $data['startups']->links() }}</td></tr>
                </table>
            </div>
        </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

    <script type="text/javascript">
 
        $(function () {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#sortable').sortable({
                revert: true,
                handle: ".sortable",
                stop: function (event, ui) {
                    var data = $(this).sortable('serialize');
                    $.ajax({
                        type: "POST",
                        data: data,
                        url: "{{route('user.Sortable')}}",
                        success: function (msg) {
                            // console.log(msg);
                            if (msg) {
                                alertify.success("Uğurlu");
                            } else {
                                alertify.error("Uğursuz");
                            }
                        }
                    });

                }
            });
            $('#sortable').disableSelection();

        });

        // $(".fa-trash-o").click(function () {
        //     destroy_id = $(this).attr('id');

        //     alertify.confirm('Silme işlemini onaylayın!', 'Bu işlem geri alınamaz',
        //         function () {

        //         $.ajax({
        //             type:"DELETE",
        //             url:"{{url('')}}/user/delete/"+destroy_id,
        //             success: function (msg) {
        //                 if (msg)
        //                 {
        //                     $("#item-"+destroy_id).remove();
        //                     alertify.success("Silme İşlemi Başarılı");

        //                 } else {
        //                     alertify.error("İşlem Tamamlanamadı");
        //                 }
        //             }
        //         });

        //         },
        //         function () {
        //             alertify.error('Silme işlemi iptal edildi')
        //         }
        //     )

        // });

        $(".fa-star").click(function () {
            destroy_id = $(this).attr('id');

            alertify.confirm('Top 20 yə seç!', '',
                function () {
                    location.href = "{{url('')}}/startups/topTwenty/" + destroy_id;
                },
                function () {
                    alertify.error('BuTop 20 dən çıxarıldı')
                }
            )

        });

         $(".btn-primary").click(function () {
            destroy_id = $(this).attr('id');

            alertify.confirm('Təstiq prosesini təstiqləyin!', 'Bu proses geri alına bilməz',
                function () {
                    location.href = "{{url('/')}}/startup/approve_applicants/" + destroy_id;
                },
                function () {
                    alertify.error('Təstiq Prosesindən imtina edildi')
                }
            )

        });
          $(".btn-warning").click(function () {
            destroy_id = $(this).attr('id');

            alertify.confirm('İmtina prosesini təstiqləyin!', 'Bu proses geri alına bilməz',
                function () {
                    location.href = "{{url('/')}}/startup/unapproovevideo/" + destroy_id;
                },
                function () {
                    alertify.error('Silmə Prosesindən imtina edildi')
                }
            )

        });
     $(".fa-ban").click(function () {
            destroy_id = $(this).attr('id');

            alertify.confirm('Blok etmək prosesini təstiqləyin!', '',
                function () {
                    location.href = "{{url('')}}/user/block/" + destroy_id;
                },
                function () {
                    alertify.error('Blok etmək prosesindən imtina edildi')
                }
            )

        });
      $(".fa-unlock").click(function () {
            destroy_id = $(this).attr('id');

            alertify.confirm('Aktiv etmək prosesini təstiqləyin!', '',
                function () {
                    location.href = "{{url('')}}/user/unblock/" + destroy_id;
                },
                function () {
                    alertify.error('Aktiv etmək prosesindən imtina edildi')
                }
            )

        });
      $(".fa-trash-o").click(function () {
            destroy_id = $(this).attr('id');

            alertify.confirm('Silmə prosesini təstiqləyin!', 'Bu proses geri alına bilməz',
                function () {
                    location.href = "{{url('')}}/startups/applicants/delete/" + destroy_id;
                },
                function () {
                    alertify.error('Silmə Prosesindən imtina edildi')
                }
            )

        });
    </script>



@endsection
@section('css')@endsection
@section('js')@endsection