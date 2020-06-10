@extends('backend.layout')
@section('content')

 <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Settings</h3>
              </div>

             
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Settings</h2>
                    <div align="right">
                  
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
                        <th>Title</th>
                        <th>Description</th>
                        <th>keywords</th>
                        <th>Type</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tbody id="sortable">
                    @foreach($data['adminSettings'] as $adminSettings)
                        <tr id="item-{{$adminSettings->id}}">
                            <td>{{$adminSettings->id}}</td>
                            <td class="sortable">{{$adminSettings['settings_description']}}</td>
                            <td>

                                @if($adminSettings['settings_type']=="file")
                                    <img width="100" src="{{$adminSettings['settings_value']}}" alt="">
                                @else
                                    {{$adminSettings->settings_value}}
                                @endif
                            </td>
                            <td>{{$adminSettings->settings_key}}</td>
                            <td>{{$adminSettings->settings_type}}</td>
                            <td width="5"><a href="{{route('settings.Edit',['id' => $adminSettings->id])}}"><i class="fa fa-pencil-square"></i></a></td>
                            <td width="5">
                                @if ($adminSettings->settings_delete)
                                    <a href="javascript:void(0)"><i id="@php echo $adminSettings->id @endphp"><i  class="fa fa-trash-o"></i></a>
                                @endif
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

            alertify.confirm('Silmə prosesini təstiqləyin!', 'Bu proses geri alına bilməz',
                function () {
                    location.href = "{{url('')}}/settings/delete/" + destroy_id;
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