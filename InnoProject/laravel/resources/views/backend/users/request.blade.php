@extends('backend.layout')
@section('content')


 <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Təstiq Gözləyən İstifadəçilər</h3>
              </div>

             
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Siyahı</h2>
                    <ul class="nav navbar-right panel_toolbox">
                     
                      <li><a href="{{   url()->previous()   }}"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                <div class="">
            <div class="box-header with-border">
                <h3 class="box-title"></h3>

                <div align="right">

                    <a href="{{route('user.create')}}"><button class="btn btn-success">Əlavə et</button></a>
                  
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Şəkil</th>
                        <th>Ad Soyad</th>
                        <th>Rolu</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                    <tbody id="sortable">
                    @foreach($userss as $user)
                        <tr id="item-{{$user->id}}">
                            <td class="sortable" width="100"><img width="50" src="{{$user->user_file}}" alt=""></td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->user_role}}</td>
                            <td width="5">
                                @if($user->user_check == 0) <a href="javascript:void(0)" title="Blok et"><button id="@php echo $user->id @endphp"  class="btn btn-primary" aria-hidden="true"> Təstiq et</button></a>  
                          </td><td width="5">
                             
                             <a href="javascript:void(0)" title="Blok et"><button id="@php echo $user->id @endphp"  class="btn btn-danger" aria-hidden="true"> Sil</button></a>  
                           
                            
                            </td>
                              @endif
                               <td width="5">
                                <a href="{{route('user.edit',$user->id)}}"><i class="fa fa-eye fa-2x" ></i></a></td>
                        </tr>
                    @endforeach
                
                
                    </tbody>
                    </thead>
                </table>
                {{$userss->links()}}
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
                    location.href = "{{url('')}}/user/approve/" + destroy_id;
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
                    location.href = "{{url('')}}/user/delete/" + destroy_id;
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
   
    </script>



@endsection
@section('css')@endsection
@section('js')@endsection