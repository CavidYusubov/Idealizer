@extends('backend.layout')
@section('content')
<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<style type="text/css">

    .fa-star:hover{
        color:#b9a307;
        cursor: pointer;
    }
</style>
@php
function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'il',
        'm' => 'ay',
        'w' => 'həftə',
        'd' => 'gün',
        'h' => 'saat',
        'i' => 'dəqiqə',
        's' => 'saniyə',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? '' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' əvvəl' : 'indicə';
}

@endphp
 <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Bildirişlər</h3>
              </div>

             
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Bildirişlər</h2>
                    <ul class="nav navbar-right panel_toolbox">
                     
                      <li><a href="{{   url()->previous()   }}"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                <div class="">
            <div class="box-header with-border">
                <h3 class="box-title"> <h3 class="box-title"></h3></h3>

                <div align="right">
                    
                    <a href="{{url('/')}}/notify/all/delete"><button class="btn btn-default" >Hamısını Sil</button></a>
                </div>

            </div>
            <div class="box-body">

              

                <table class="table table-striped table-bordered  table-sm"  id="tablestip">
                    <thead>
                    <tr>
                        <th class="th-sm">#</th>
                        <th class="th-sm">Mətin</th>
                        <th class="th-sm">Vaxt</th>
                     
                    </tr>
                    <tbody id="sortable">
                        <?php $n=1;?>
                    @foreach($data['notify'] as $notify)
                        <tr >
                            <td width="5"><?php echo $n++;?></td>
                            <td  class="sortable"><a href="{{$notify->url}}">{{$notify->text}}</td>
                            <td width="5"class="sortable">{{time_elapsed_string('@'.$notify->created_at)}}</td>
                            <td width="5"> <a href="javascript:void(0)"><i id="@php echo $notify->id @endphp" class="fa fa-trash-o"></i></a></td>
                           
                        </tr>
                    @endforeach

                    </tbody>
                    </thead>
                </table>
                <table>
                  <tr><td >{{ $data['notify']->links() }}</td></tr>
                </table>
            </div>
        </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
<script type="text/javascript" src="{{url('/')}}/js/addons/datatables.min.js"></script>
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
                        url: "{{route('startups.Sortable')}}",
                        success: function (msg) {
                             console.log(msg);
                            if (msg) {
                                alertify.success("Uğurlu");
                            } else {
                                alertify.error("Uğursuz");
                            }
                        }
                    });

                }
            });
           

        });

       
        // $(".fa-trash-o").click(function () {
        //     destroy_id = $(this).attr('id');

        //     alertify.confirm('Silme işlemini onaylayın!', 'Bu işlem geri alınamaz',
        //         function () {

        //         $.ajax({
        //             type:"DELETE",
        //             url:"{{url('')}}/startups/delete/"+destroy_id,
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
         $(".fa-trash-o").click(function () {
            destroy_id = $(this).attr('id');

            alertify.confirm('Silmə prosesini təstiqləyin!', 'Bu proses geri alına bilməz',
                function () {
                    location.href = "{{url('/')}}/notify/delete/" + destroy_id;
                },
                function () {
                    alertify.error('Silmə Prosesindən imtina edildi')
                }
            )

        });
//          $(".fa-ban").click(function () {
//             destroy_id = $(this).attr('id');

//             alertify.confirm('Blok etmək prosesini təstiqləyin!', '',
//                 function () {
//                     location.href = "{{url('')}}/startups/block/" + destroy_id;
//                 },
//                 function () {
//                     alertify.error('Blok etmək prosesindən imtina edildi')
//                 }
//             )

//         });
//          $(".fa-star").click(function () {
//             destroy_id = $(this).attr('id');

//             alertify.confirm('Favorit etmək prosesini təstiqləyin!', '',
//                 function () {
//                     location.href = "{{url('')}}/startups/favor/" + destroy_id;
//                 },
//                 function () {
//                     alertify.error('Favorit etmək prosesindən imtina edildi')
//                 }
//             )

//         });
//       $(".fa-unlock").click(function () {
//             destroy_id = $(this).attr('id');

//             alertify.confirm('Aktiv etmək prosesini təstiqləyin!', '',
//                 function () {
//                     location.href = "{{url('')}}/startups/unblock/" + destroy_id;
//                 },
//                 function () {
//                     alertify.error('Aktiv etmək prosesindən imtina edildi')
//                 }
//             )

//         });
//    $(document).ready(function () {
// $('#tablestip').DataTable();
// $('.dataTables_length').addClass('bs-select');
// });

    </script>



@endsection
@section('css')@endsection
@section('js')@endsection