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
 <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Startup'lar</h3>
              </div>

             
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Siyahı</h2>
                    <ul class="nav navbar-right panel_toolbox">
                     
                      <li><a href="{{   route('dashboard')  }}"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                <div class="">
            <div class="box-header with-border">
                <a href="{{route('startup.requests')}}" class="btn btn-info" style="float:left"  >Təstiq gözləyənlər <span class="badge badge-dark">{{$count}}</span> </a>
                <a href="{{route('startup.videorequests')}}" class="btn btn-info" style="float:left" >Video Təstiq gözləyənlər   <span class="badge badge-dark">{{$countvideo}}</span> </a>
                <a href="{{route('startup.applicants')}}" class="btn btn-info" style="float:left" >Proqramlar və Müsabiqə üzrə müraciətlər   <span class="badge badge-dark">{{$countcomp}}</span> </a>
                <a href="{{route('startup.competition_members')}}" class="btn btn-info" style="float:left" >Müsabiqə iştirakçıları   <span class="badge badge-dark">{{$competition_members}}</span> </a>
                <div align="right">
                    <a href="{{route('startups.create')}}"><button class="btn btn-success">Əlavə et</button></a>
                    
                </div>

            </div>
            <div class="box-body">

              

                <table class="table  table-bordered  table-sm"  id="">
                    <thead>
                    <tr>
                        <th class="th-sm">#</th>
                        <th class="th-sm">Başlıq</th>
                        <!-- <th class="th-sm">Açıqlama</th> -->
                        <th>Logo</th>
                        <!-- <th>Rənglər</th> -->
                        <th>Sayt</th>
                        <!-- <th>Şəkil</th> -->
                        <!-- <th>Video</th> -->
                        <th>İstifadəçi</th>
                        <!-- <th>Favorit</th> -->
                    </tr>
                    <tbody id="sortable">
                        <?php $n=1;?>
                    @foreach($data['startups'] as $startups)
                        <tr id="item-{{$startups->id}}">
                            <td width="5"><?php echo $n++;?></td>
                            <td width="5" class="sortable">{{$startups->startup_title}}</td>
                            <!-- <td width="5"class="sortable">{{ Illuminate\Support\Str::limit($startups->startup_description, 20)}}...</td>
                             -->
                           <td  width="50"><img width="50" src="{{$startups->startup_logo}}" alt=""></td>
                           
                            <!-- <td width="5" style="background:  #{{$startups->startup_color}}"></td>-->
                            <td width="5">{{$startups->startup_pitch}}</td> 
                            <!-- <td width="50"><img width="50" src="{{$startups->startup_image}}" alt=""></td> -->
                            <!-- <td width="5">{{$startups->startup_video}}</td> -->
                            <td width="5">{{$startups->name}} {{$startups->surname}}<br>{{$startups->email}}</td>
                            <!-- <td width="5"><i class="fa fa-star fa-2x" id="@php echo $startups->id @endphp" @if($startups->favor == 1 ) style="color:#b9a307;"  @endif aria-hidden="true"></i></td> -->
                            <td width="5">
                                
                             @if($startups->startup_status == 'aktiv') 
                             <a href="javascript:void(0)" title="Blok et"><i id="@php echo $startups->id @endphp" style="color:red;" class="fa fa-ban" aria-hidden="true"></i></a>

                              @else 
                              <a href="javascript:void(0)" title="Aktiv et"><i id="@php echo $startups->id @endphp" style="color:green;" class="fa fa-unlock" aria-hidden="true"></i></a>
                              @endif  
                          </td>
                           <td width="5">
                                <a href="{{route('startups.edit',$startups->id)}}"><i class="fa fa-pencil-square"></i></a></td>
                            <td width="5">
                                <a href="javascript:void(0)"><i id="@php echo $startups->id @endphp" class="fa fa-trash-o"></i></a>
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
 
$('#menu_toggle').click(function() {
   
   $('body').toggleClass('nav-md');
   $('body').toggleClass('nav-sm');
});
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
                    location.href = "{{url('')}}/startups/block/" + destroy_id;
                },
                function () {
                    alertify.error('Blok etmək prosesindən imtina edildi')
                }
            )

        });
         $(".fa-star").click(function () {
            destroy_id = $(this).attr('id');

            alertify.confirm('Favorit etmək prosesini təstiqləyin!', '',
                function () {
                    location.href = "{{url('')}}/startups/favor/" + destroy_id;
                },
                function () {
                    alertify.error('Favorit etmək prosesindən imtina edildi')
                }
            )

        });
      $(".fa-unlock").click(function () {
            destroy_id = $(this).attr('id');

            alertify.confirm('Aktiv etmək prosesini təstiqləyin!', '',
                function () {
                    location.href = "{{url('')}}/startups/unblock/" + destroy_id;
                },
                function () {
                    alertify.error('Aktiv etmək prosesindən imtina edildi')
                }
            )

        });
   $(document).ready(function () {
$('#tablestip').DataTable();
$('.dataTables_length').addClass('bs-select');
});

    </script>



@endsection
@section('css')@endsection
@section('js')@endsection