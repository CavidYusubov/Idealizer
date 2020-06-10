@extends('backend.layout')
@section('content')

 <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Müsabiqə reklam banneri</h3>
              </div>

             
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2></h2>
                 
                <div align="right">
                    <a href="{{route('konkurs_banners.create')}}"><button class="btn btn-success">Əlavə et</button></a>
                  
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
                        <th>Id</th>
                        <th>Başlıq</th>
                        <th>Şəkil</th>
         
                   
                     
                        <th></th>
                        <th></th>
                    </tr>
                    <tbody id="sortable">
                      <?php $a=1;?>
                    @foreach($data['konkurs_banners'] as $konkurs_banners)
                        <tr id="item-{{$konkurs_banners->id}}">
                            <td> <?php echo $a++;?></td>
                            <td class="sortable">{{$konkurs_banners->title}}</td>
                            <td><img src="{{$konkurs_banners->file}}" width="50" alt="image"></td>
                         
                            <td width="5"><a href="{{route('konkurs_banners.edit',$konkurs_banners->id)}}"><i class="fa fa-pencil-square"></i></a></td>
                            <td width="5">
                              
                                    <a href="javascript:void(0)"><i id="@php echo $konkurs_banners->id @endphp" class="fa fa-trash-o"></i></a>
                             
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
                        url: "{{route('settings.Sortable')}}",
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

        $(".fa-trash-o").click(function () {
            destroy_id = $(this).attr('id');

            alertify.confirm('Silme prosesini təstiqləyin!', 'Bu proses geri alına bilməz',
                function () {
                    location.href = "{{url('')}}/konkurs/banners/delete/" + destroy_id;
                },
                function () {
                    alertify.error('Silmə prosesindən imtina edildi')
                }
            )

        });
    </script>



@endsection
@section('css')@endsection
@section('js')@endsection