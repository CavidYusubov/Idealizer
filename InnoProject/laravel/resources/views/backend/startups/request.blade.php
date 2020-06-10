@extends('backend.layout')
@section('content')


 <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Təstiq Gözləyən Startuplar</h3>
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
                        <th>#</th>
                        <th>Başlıq</th>
                       
                        <th>Logo</th>
                  
                        <th>Sayt</th>
                        
                        <th>Şəkil</th>
                        <th>Video</th>
                        <th>İstifadəçi</th>
                    </tr>
                    <tbody id="sortable">
                        <?php $n=1;?>
                   @foreach($data['startups'] as $startups)
                        <tr id="item-{{$startups->id}}">
                            <td width="5"><?php echo $n++;?></td>
                            <td width="5">{{$startups->startup_title}}</td>
                            <!-- <td width="5">{{$startups->startup_description}}</td> -->
                           <td class="sortable" width="50"><img width="50" src="{{$startups->startup_logo}}" alt=""></td>
                       
                           <!-- <td width="5" style="background:  #{{$startups->startup_color}}"></td> -->
                            <td width="5">{{$startups->startup_pitch}}</td>
                             <td class="sortable" width="50"><img width="50" src="{{$startups->startup_image}}" alt=""></td>
                             <td width="5">{{$startups->startup_video}}</td>
                             <td width="5">{{$startups->name}} {{$startups->surname}}<br>{{$startups->email}}</td>
                             @if($startups->startup_check == 0) 
                             
                             <td width="5">
                             <!-- <a href="javascript:void(0)" title="Təstiq et"><button id="@php echo $startups->id @endphp"  class="btn btn-primary" aria-hidden="true"> Təstiq et</button></a>   -->
                          </td>
                               @endif
                                 <td width="5">
                                <a href="{{route('startups.edit',$startups->id)}}"><i class="fa fa-eye fa-2x" ></i></a></td>
                            <td width="5">
                                <a href="javascript:void(0)"><i id="@php echo $startups->id @endphp" class="fa fa-trash-o fa-2x" style="color: red;"></i></a>
                            </td>
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
         $(".btn-primary").click(function () {
            destroy_id = $(this).attr('id');

            alertify.confirm('Təstiq prosesini təstiqləyin!', 'Bu proses geri alına bilməz',
                function () {
                    location.href = "{{url('')}}/startup/approve/" + destroy_id;
                },
                function () {
                    alertify.error('Təstiq Prosesindən imtina edildi')
                }
            )

        });
          $(".btn-danger").click(function () {
            destroy_id = $(this).attr('id');

            alertify.confirm('Silmə prosesini təstiqləyin!', 'Bu proses geri alına bilməz',
                function () {
                    location.href = "{{url('')}}/startups/delete/" + destroy_id;
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
                    location.href = "{{url('')}}/startups/delete/" + destroy_id;
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