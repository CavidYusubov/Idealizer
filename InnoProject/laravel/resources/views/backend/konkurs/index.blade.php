@extends('backend.layout')
@section('content')

 <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Səhifələr</h3>
              </div>

             
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Siyahı</h2>

                <div align="right">
                    <!-- <a href="{{route('konkurs.create')}}"><button class="btn btn-success">Əlavə et</button></a>
                   -->
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
                        <th>Başlıq</th>
                        <th>Şəkil</th>
                        <th>Başlama Tarixi</th>
                        <th>Bitmə Tarixi</th>
                        <th>İştirakçı sayı</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                    <tbody id="sortable">
                   
                    @foreach($data['konkurs'] as $konkurs)
                        <tr id="item-{{$konkurs->id}}">
                            <td class="sortable">{{$konkurs['konkurs_title']}}</td>
                            <td > @isset($konkurs->konkurs_image) <img width="50" src="{{$konkurs->konkurs_image}}" alt="">@endisset</td> 
                            <td >
                            @foreach($start_time as $actionplan)
                            @if($actionplan->konkurs_id == $konkurs->id)
                         
                           <?php print date('d-m-Y h:i',$actionplan->action_start_day)?>
                           @endif
                          @endforeach

                            </td>
                            <td >  
                            @foreach($end_time as $actionplans)
                            @if($actionplans->konkurs_id == $konkurs->id)
                         
                           <?php print date('d-m-Y h:i',$actionplans->action_end_day)?>
                           @endif
                          @endforeach
                           
                           </td>

                              <td >
                              0
                              
                              </td> 
                              <td >@if($konkurs->konkurs_status == '1') Aktiv @else Deaktiv @endif</td>
                               <td width="5">
                             @if($konkurs->konkurs_status == '1') 
                             <a href="javascript:void(0)" title="Deaktiv et"><i id="@php echo $konkurs->id @endphp" style="color:red;" class="fa fa-ban" aria-hidden="true"></i></a>

                              @else 
                              <a href="javascript:void(0)" title="Aktiv et"><i id="@php echo $konkurs->id @endphp" style="color:green;" class="fa fa-unlock" aria-hidden="true"></i></a>
                              @endif  
                            </td>
                            <td width="5"><a href="{{route('konkurs.edit',$konkurs->id)}}"><i class="fa fa-pencil-square"></i></a></td>
                             <!-- <td width="5">
                                <a href="javascript:void(0)"><i id="@php echo $konkurs->id @endphp"  class="fa fa-trash-o"></i></a>
                            </td> -->
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
        
      $(".fa-trash-o").click(function () {
            destroy_id = $(this).attr('id');

            alertify.confirm('Silme prosesini təstiqləyin!', 'Bu proses geri alına bilməz',
                function () {
                    location.href = "{{url('')}}/konkurs/delete/" + destroy_id;
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
                    location.href = "{{url('')}}/konkurs/block/" + destroy_id;
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
                    location.href = "{{url('')}}/konkurs/unblock/" + destroy_id;
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