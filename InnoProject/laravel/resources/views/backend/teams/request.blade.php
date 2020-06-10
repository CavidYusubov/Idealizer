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
                    <a href="{{route('teams.create')}}"><button class="btn btn-success">Əlavə et</button></a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                     <thead>
                    <tr>
                        <th>Logo</th>
                        <th>Komanda adı</th>
                        <th>Komanda açıqlaması</th>
                        <th>Üzv Sayı</th>

                        <th>Status</th>
                        <th></th>
                    </tr>
                    <tbody id="sortable">
                    @foreach($data['teams'] as $teams)
                        <tr id="item-{{$teams->id}}">
                            <td class="sortable" width="100"><img width="100" src="{{url('')}}/images/teams/{{$teams->teams_logo}}" alt=""></td>
                            <td>{{$teams->teams_title}}</td>
                            <td>{{$teams->teams_description}}</td>
                            <td>
                                <?php $membs= explode(',', $teams->teams_members);?>
                                {{count ($membs)}}
                           

                            </td>
                            <td>
                                @if($teams->teams_status == 1) Aktiv @else Deaktiv @endif</td>
                            <td width="5">
                             @if($teams->teams_status == 1) 
                             <a href="javascript:void(0)" title="Blok et"><i id="@php echo $teams->id @endphp" style="color:red;" class="fa fa-ban" aria-hidden="true"></i></a>

                              @else 
                             
                              @endif  
                            </td>
                             <td width="5">
                                @if($teams->teams_check == 0) <a href="javascript:void(0)" title="Blok et"><button id="@php echo $teams->id @endphp"  class="btn btn-primary" aria-hidden="true"> Təstiq et</button></a>  
                          </td><td width="5">
                             
                             <a href="javascript:void(0)" title="Blok et"><button id="@php echo $teams->id @endphp"  class="btn btn-danger" aria-hidden="true"> Sil</button></a>  
                           
                            
                            </td>@endif
                            <td width="5"><a href="{{route('teams.edit',$teams->id)}}"><i class="fa fa-pencil-square" title="Redaktə et"></i></a></td>
                            <td width="5">
                                <a href="javascript:void(0)" title="Sil"><i id="@php echo $teams->id @endphp"class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    </thead>
                  
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
                    location.href = "{{url('')}}/teams/approve/" + destroy_id;
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
                    location.href = "{{url('')}}/teams/delete/" + destroy_id;
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
                    location.href = "{{url('')}}/teams/block/" + destroy_id;
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
                    location.href = "{{url('')}}/teams/unblock/" + destroy_id;
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