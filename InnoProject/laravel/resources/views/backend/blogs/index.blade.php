@extends('backend.layout')
@section('content')
   <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Xəbərlər</h3>
              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Siyahı</h2>
                
                <div align="right">
                    <a href="{{route('news.create')}}"><button class="btn btn-success">Əlavə et</button></a>
                  </div>
                </div>
                <div align="left">
                
                    <ul class="nav navbar-right panel_toolbox">
                  
                      <li><a href="{{   url()->previous()   }}"><i class="fa fa-close"></i></a>
                      </li>
                      <li>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Başlıq</th>
                        <th>Link</th>
                        <th>Status</th>
                    </tr>
                    <tbody id="sortable">
                    @foreach($data['blog'] as $blog)
                        <tr id="item-{{$blog->id}}">
                            <td class="sortable">{{$blog['blog_title']}}</td>
                            <td>{{$blog->blog_slug}}</td>
                            <td>@if($blog->blog_status == '1') Aktiv @else Deaktiv @endif </td>
                            <td width="5"> @if($blog->blog_status == '1') 
                             <a href="javascript:void(0)" title="Deaktiv et"><i id="@php echo $blog->id @endphp" style="color:red;" class="fa fa-ban" aria-hidden="true"></i></a>

                              @else 
                              <a href="javascript:void(0)" title="Aktiv et"><i id="@php echo $blog->id @endphp" style="color:green;" class="fa fa-unlock" aria-hidden="true"></i></a>
                              @endif  </td>
                            <td width="5"><a href="{{route('blog.edit',$blog->id)}}"><i class="fa fa-pencil-square"></i></a></td>
                            <td width="5">
           <a href="javascript:void(0)"><i id="@php echo $blog->id @endphp" class="fa fa-trash-o"></i></a>
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
                        url: "{{route('blog.Sortable')}}",
                        success: function (msg) {
                            // console.log(msg);
                            if (msg) {
                                alertify.success("Uğurlu");
                            } else {
                                alertify.error("uğrursuz");
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

                $.ajax({
                    type:"DELETE",
                    url:"blog/"+destroy_id,
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
                    location.href = "{{url('')}}/news/block/" + destroy_id;
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
                    location.href = "{{url('')}}/news/unblock/" + destroy_id;
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