@extends('backend.layout')
@section('content')
   <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Abunəçilər</h3>
              </div>

             
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Siyahı</h2>

                <div align="right">
                
                  <button class="btn btn-success"  data-toggle="modal" data-target="#exampleModal">Mail göndər</button>
                  
                </div>
                    <ul class="nav navbar-right panel_toolbox">
                     
                      <li><a href="{{   url()->previous()   }}"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Email</th>
                        
                    </tr>
                    <tbody id="sortable">
                    @foreach($data['subscribers'] as $subs)
                        <tr id="item-{{$subs->id}}">
                        <td class="sortable">{{$subs['id']}}</td>
                            <td class="sortable">{{$subs['email']}}</td>
                           
                              <td width="5">
           <a href="javascript:void(0)"><i id="@php echo $subs->id @endphp" class="fa fa-trash-o"></i></a>
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


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Toplu Email göndər</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <label for="" >Başlıq</label>
      <p><input type="text" class=" form-control"></p>
      <label for="" >Mətin</label>
      <p><textarea name="" id="" cols="30" rows="10" class="form-control"></textarea></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Bağla</button>
        
        <button type="button" class="btn btn-primary">Göndər</button>
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

        //     $('#sortable').sortable({
        //         revert: true,
        //         handle: ".sortable",
        //         stop: function (event, ui) {
        //             var data = $(this).sortable('serialize');
        //             $.ajax({
        //                 type: "POST",
        //                 data: data,
        //                 url: "",
        //                 success: function (msg) {
        //                     // console.log(msg);
        //                     if (msg) {
        //                         alertify.success("Uğurlu");
        //                     } else {
        //                         alertify.error("uğrursuz");
        //                     }
        //                 }
        //             });

        //         }
        //     });
        //     $('#sortable').disableSelection();

        // });
        $('#myModal').modal('toggle');
        $(".fa-trash-o").click(function () {
            destroy_id = $(this).attr('id');

            alertify.confirm('Silme prosesini təstiqləyin!', 'Bu proses geri alına bilməz',
                function () {

                $.ajax({
                    type:"DELETE",
                    url:"subs/"+destroy_id,
                    success: function (msg) {
                        if (msg)
                        {
                            $("#item-"+destroy_id).remove();
                            alertify.success("Silme İşlemi Başarılı");

                        } else {
                            alertify.error("İşlem Tamamlanamadı");
                        }
                    }
                });

                },
                function () {
                    alertify.error('Silmə prosesindən imtina edildi')
                }
            )

        });
        $(".fa-ban").click(function () {
            destroy_id = $(this).attr('id');

            alertify.confirm('Deaktiv etmək prosesini təstiqləyin!', '',
                function () {
                    location.href = "{{url('')}}/subs/block/" + destroy_id;
                },
                function () {
                    alertify.error('Deaktiv etmək prosesindən imtina edildi')
                }
            )

        });
$(".fa-unlock").click(function () {
            destroy_id = $(this).attr('id');

            alertify.confirm('Aktiv etmək prosesini təstiqləyin!', '',
                function () {
                    location.href = "{{url('')}}/subs/unblock/" + destroy_id;
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