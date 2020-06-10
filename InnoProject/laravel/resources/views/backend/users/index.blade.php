@extends('backend.layout')
@section('content')
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

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
                <h3 class="box-title"><a href="{{route('user.requests')}}" style="color:blue">Təstiq gözləyənlər ( {{$count}} )</a></h3>

                <div align="right">
                    <a href="{{route('user.create')}}"><button class="btn btn-success">Əlavə et</button></a>
                  
                </div>

                <div align="right">
                <div class="form-group col-md-2">
   
    <div class="controls">
        <div class="form-group">
                        <label style="float:left">İstifadəçi rolu</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <select class="form-control user_role" name="user_role" id="user_role">
                                  <option value="">Hamısı</option>
                                  <option value="admin">Admin</option>
                                  <option value="user">Sayt İstifadəçisi</option>
                                  <option value="juri">Jüri</option>
                                  <option value="tournament_member">Müsabiqə İştirakçısı</option>
                                  <option value="statistik">Statistik</option>
                                </select>
                            </div>
                        </div>
                    </div>


         <div class="help-block"></div></div>
    </div>
    <div class="form-group col-md-4">
    
                        <div class="form-group">
                            <label style="float:left">Status</label>
                            <div class="row" style="clear:both">
                                <div class="col-xs-4">
                                <input type="checkbox" id="user_status" class="user_status"  data-toggle="toggle" data-on="Aktiv" data-off="Deaktiv" data-onstyle="success" value="Aktiv" data-offstyle="danger">
                                    <!-- <select name="user_status" id="user_status" class="form-control">
                                        <option value="">Hamısı</option>
                                        <option value="1">Aktiv</option>
                                        <option value="0">Deaktiv</option>
                                    </select> -->
                                </div>
                            </div>
    </div>
    <div class="text-left" style="
    margin-left: 15px;
    ">
    <!-- <button type="submit" id="search-form" class="btn btn-info">Submit</button> -->
     </div>
                
            </div>
            <div class="box-body">
              <!--   <table id="laravel_datatable" class="table table-striped">
                    <thead>
                    <tr>
                        <th>Şəkil</th>
                        <th>Ad Soyad</th>
                        <th>Rolu</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                    <tbody id="sortable">
                    @foreach($data['user'] as $user)
                        <tr id="item-{{$user->id}}">
                            <td class="sortable" width="100"><img width="100" src="{{url('')}}/images/users/{{$user->user_file}}" alt=""></td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->user_role}}</td>
                            <td>
                                @if($user->user_status == 1) Aktiv @else Deaktiv @endif</td>
                            <td width="5">
                             @if($user->user_status == 1) 
                             <a href="javascript:void(0)" title="Blok et"><i id="@php echo $user->id @endphp" style="color:red;" class="fa fa-ban" aria-hidden="true"></i></a>

                              @else 
                              <a href="javascript:void(0)" title="Aktiv et"><i id="@php echo $user->id @endphp" style="color:green;" class="fa fa-unlock" aria-hidden="true"></i></a>
                              @endif  
                            </td>
                            <td width="5"><a href="{{route('user.edit',$user->id)}}"><i class="fa fa-pencil-square" title="Redaktə et"></i></a></td>
                            <td width="5">
                                <a href="javascript:void(0)" title="Sil"><i id="@php echo $user->id @endphp"class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    </thead>
                </table> -->
                  <table class="table table-bordered responsive " id="laravel_datatable">
       <thead>
          <tr>
             <th>Id</th>
             <th>Name</th>
             <th>User Email</th>
             <th>User Status</th>
             <th>User Role</th>
             <th>User actions</th>
          </tr>
       </thead>

                           
    </table>
 </div>
 <div class="modal fade" id="ajax-product-modal" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title" id="productCrudModal"></h4>
    </div>
    <div class="modal-body">
        <form id="productForm" name="productForm" class="form-horizontal">
           <input type="hidden" name="product_id" id="product_id">
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Ad</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Tilte" value="" maxlength="50" required="">
                </div>
            </div> 
             <div class="form-group">
                <label for="name" class="col-sm-2 control-label">User Email</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control email" id="email" name="email" placeholder="Enter Tilte" value="" maxlength="50" required="">
                </div>
            </div>
         <!--    <div class="form-group">
                <label for="name" class="col-sm-2 control-label">User Role</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control user_role" id="user_role" name="user_role" placeholder="Enter Tilte" value="" maxlength="50" required="">
                    <select class="user_role">
                      <option>
                        Aktiv
                      </option>
                       <option>
                        Deaktiv
                      </option>
                    </select>
                </div>
            </div> -->
   <!-- <div class="form-group">
                      <label for="name" class="col-sm-2 control-label">User Role</label>
                        <input type="text" readonly="" class="user_role" name=""> 
                        <div class="row">
                            <div class="col-xs-12">
                                <select class="form-control" class="user_role" name="user_role">
                                  <option value="" class="user_role"></option>
                                  <option value="admin" selected="">Admin</option>
                                  <option value="user">Sayt İstifadəçisi</option>
                                  <option value="juri">Jüri</option>
                                  <option value="statistik">Statistik</option>
                                </select>
                            </div>
                        </div>
                    </div> -->
            <div class="form-group">
                <label class="col-sm-2 control-label">User Status</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control user_status" id="user_status" name="user_status" placeholder="Enter Description" value="" required="">
                    <select>
                      
                    </select>
                </div>
            </div>
            <div class="col-sm-offset-2 col-sm-10">
             <button type="submit" class="btn btn-primary" id="btn-save" value="create">Save changes
             </button>
            </div>
        </form>
    </div>
    <div class="modal-footer">
         
    </div>
</div>
</div>
</div>
 <script>
 $('.user_status').change(function(){
  if($(this).prop('checked'))
  {
   $('.user_status').val('1');
  }
  else
  {
   $('.user_status').val('0');
  }
 });
 var SITEURL = "{{url('/')}}";

 $(document).ready( function () {
   $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });
  $('#laravel_datatable').DataTable({
         processing: true,
         serverSide: true,
         ajax: {
          url: SITEURL + "/user/ajaxSearch",
          type: 'GET',
          
         },
         columns: [
                  {data: 'id', name: 'id', 'visible': false},
                  {data: 'name', name: 'name', orderable: false,},
                  { data: 'email', name: 'email' },
                  { data: 'user_status', name: 'user_status' },
                  { data: 'user_role', name: 'user_role' },
                 
                  {data: 'user_action', name: 'user_action', orderable: false},
               ],
        

      });
  
  $(document).ready(function() {
      $("#laravel_datatable").dataTable({
        "sPaginationType": "full_numbers",
        "paging": true,
        "retrieve": true,
    
      // default is lfrtip, where the f is the filter
       });
      var oTable;

      $('#user_role').change( function() { 
            oTable.fnFilter( $(this).val() ); 
       }); 
        $('.user_role_edit').change( function() { 
            oTable.fnFilter( $(this).val() ); 
       });
      oTable = $('#laravel_datatable').dataTable();


   });
   $(document).ready(function() {
      $("#laravel_datatable").dataTable({
        "sPaginationType": "full_numbers",
         "paging": false,
         "retrieve": true,
      // default is lfrtip, where the f is the filter
       });
      var oTable;
      oTable = $('#laravel_datatable').dataTable();

      $('#user_status').change( function() { 
          
            oTable.fnFilter( $(this).val() ); 
       });

   });
 /*  When user click add user button */
    $('#create-new-product').click(function () {
        $('#btn-save').val("create-product");
        $('#product_id').val('');
        $('#productForm').trigger("reset");
        $('#productCrudModal').html("Add New Product");
        $('#ajax-product-modal').modal('show');
    });
  
   /* When click edit user */
    $('body').on('click', '.edit-product', function () {
      var product_id = $(this).data('id');
      $.get('user/Ajax/edit/' + product_id +'', function (data) {
         $('#title-error').hide();
         $('#product_code-error').hide();
         $('#description-error').hide();
         $('#productCrudModal').html("Edit Product");
          $('#btn-save').val("edit-product");
          $('#ajax-product-modal').modal('show');
          $('#id').val(data.id);
          $('#name').val(data.name);
          $('.user_role').val(data.user_role);
          $('.email').val(data.email);
          $('#user_status').val(data.user_status);
      })
   });
 
    // $('body').on('click', '.sil', function () {
  
    //     var product_id = $(this).data("id");
        
    //     if(confirm("Silinsin ?!")){
    //       $.ajax({
    //           type: "get",
    //           url: SITEURL + "/user/delete/"+product_id,
    //           success: function (data) {
    //           var oTable = $('#laravel_datatable').dataTable(); 
    //           oTable.fnDraw(false);
    //           },
    //           error: function (data) {
    //               console.log('Error:', data);
    //           }
    //       });
    //     }
    // }); 
   
   });
 $('body').on('click', '.blokla', function () {
  
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

 $('body').on('click', '.unblokla', function () {
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
   
 $('body').on('click', '.sil', function () {
    destroy_id = $(this).attr('id');

alertify.confirm('Aktiv etmək prosesini təstiqləyin!', '',
    function () {
        location.href = "{{url('')}}/user/delete/" + destroy_id;
    },
    function () {
        alertify.error('Aktiv etmək prosesindən imtina edildi')
    }
)
    }); 

  
  
if ($("#productForm").length > 0) {
      $("#productForm").validate({
  
     submitHandler: function(form) {
  
      var actionType = $('#btn-save').val();
      $('#btn-save').html('Sending..');
       
      $.ajax({
          data: $('#productForm').serialize(),
          url: SITEURL + "product-list/store",
          type: "POST",
          dataType: 'json',
          success: function (data) {
  
              $('#productForm').trigger("reset");
              $('#ajax-product-modal').modal('hide');
              $('#btn-save').html('Save Changes');
              var oTable = $('#laravel_datatable').dataTable();
              oTable.fnDraw(false);
               
          },
          error: function (data) {
              console.log('Error:', data);
              $('#btn-save').html('Save Changes');
          }
      });
    }
  })
}
</script>
</script>
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

            $('#laravel_datatable').sortable({
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

            jQuery('#laravel_datatable').on('change','.user_role_edit',
    function(){ 
      alertify.success("Uğurlu");
         $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

           
            
          
                stop: function (event, ui) {
                    var data = jQuery(this).val();
                    $.ajax({
                        type: "POST",
                        data: data,
                        url: "{{route('user.AjaxRole')}}",
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
         $(".fa-trash-o").click(function () {
            destroy_id = $(this).attr('id');

            alertify.confirm('Silmə prosesini təstiqləyin!', 'Bu proses geri alına bilməz',
                function () {
                    location.href = "{{url('/')}}/user/delete/" + destroy_id;
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
   
// $(document).ready( function () {
//      $.ajaxSetup({
//           headers: {
//               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//           }
//       });
//   $('#laravel_datatable').DataTable({
//          processing: true,
//          serverSide: true,
//          ajax: {
//           url:"{{url('')}}/user/ajaxSearch",
//           type: 'GET',
//           data: function (d) {
//           d.user_role = $('.user_role').val();
//           d.user_status = $('.user_status').val();
//           }
//          },
//          columns: [
//                   { data: 'id', name: 'id' },
//                   { data: 'name', name: 'name' },
//                   { data: 'user_role', name: 'user_role' },
//                   { data: 'user_status', name: 'user_status' }
//                ]
//       });
//    });
 
//   $('#btnFiterSubmitSearch').click(function(){
//      $('#laravel_datatable').DataTable().draw(true);
//   });
// $('#laravel_datatable').DataTable().draw(true);
// $('#btnFiterSubmitSearch').click(function(){
//      $('#laravel_datatable').DataTable().draw(true);
//   });
$("td").addClass("sortable");

    </script>



@endsection
@section('css')@endsection
@section('js')@endsection