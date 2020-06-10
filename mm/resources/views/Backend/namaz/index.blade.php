@extends('Backend.layout')
@section('content')



      <!-- End Navbar -->
      <div class="content" style="width: 80%;margin-left: 10%;">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Namaz vaxtları</h4>
                  <p class="card-category"style="float:left"> Redaktə et və ya sil</p>
                      
        @if(Session::has('error'))
            <div class="alert alert-danger">
                {{session('error')}}
            </div>
            @elseif(Session::has('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
        @endif
                  
                  <p class="card-category" style="float:right"> <a href="{{url('/')}}/admin/namaz/file/add">
                 
              

                  <Button class="btn btn-primary">Camaat namaz vaxtları Faylı Əlavə et</Button>
                 
                  </a></p>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                <h3>Camaat namaz vaxtları</h3>
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                         Fayl adı
                        </th>
                        <th>
                        Fayl
                        </th>
                       
                        
                      </thead>
                      <tbody>
                        <?php $n=1;?>
@foreach( $namaz_fayllar['namaz_fayli'] as $namaz_f)
                        <tr id="item-">
                        <td >{{$namaz_f->title}}</td>    
                        <td class="sortable"><a href="{{url('/')}}/images/namaz/files/{{$namaz_f->file}}" download>Yuklə</a></td>
                           
                          
                            <td width="5">

                                <a href="{{route('namaz_f.delete',$namaz_f->id)}}"><i id="@php echo $namaz_f->id @endphp"
                                                                class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                    @endforeach
               
                      </tbody>
                    </table>
                    <table>
                  <tr>{{  $namaz_fayllar['namaz_fayli']->links() }}<td ></td></tr>
                </table>

                  </div>
                  <h3>Aylıq namaz vaxtları</h3>
                <hr>
                  <div class="table-responsive">
                  <form method="get" action="{{url('/')}}/admin/namaz/create">
                  <select class="form-control " name="date">
    <?php 
      for ($m=1; $m<=12; $m++) {
        $month = date('m', mktime(0,0,0,$m, 1, date('Y')));
        echo '<option  data-price="'.$month. '.'.date('Y'). '">'.$month. '.'.date('Y'). '</option>';
        }
        $nexty=date('Y')+1;
        for ($m=1; $m<=12; $m++) {
        $month = date('m', mktime(0,0,0,$m, 1, date('Y')));
        echo '<option data-price="'.$month. '.'.$nexty. '">'.$month. '.'.$nexty. '</option>';
        }
        ?>
</select>
<Button class="btn btn-primary">Tarix Seç və  tarixə uyğun aylıq namaz vaxtı əlavə et</Button>
</form>

                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                         Tarix
                        </th>
                        <th>
                        İmsak
                        </th>
                        <th>
                        Sübh
                        </th>
                        <th>
                        Gün çıxır
                        </th>
                        <th>
                        Zöhr  
                        </th>
                        <th>
                        Əsr
                        </th>
                        <th>
                        Gün batır
                        </th>
                        <th>
                        Məğrib
                        </th>
                        <th>
                        İşa
                        </th>
                       
                        
                      </thead>
                      <tbody>
                        <?php $n=1;?>
@foreach($data['namaz'] as $namaz)
                        <tr id="item-{{$namaz->id}}">
                        <td >{{$namaz->date}}</td>    
                        <td class="sortable">{{$namaz->imsak}}</td>
                        <td >{{$namaz->subh}}</td>   
                        <td >{{$namaz->gun_cixir}}</td>
                        <td >{{$namaz->zohr}}</td>
                        <td >{{$namaz->esr}}</td>
                        <td >{{$namaz->gun_batir}}</td>
                      
                        <td >{{$namaz->megrib}}</td>
                        <td >{{$namaz->isha}}</td>
                       					
                           
                            <td width="5"><a href="{{route('namaz.edit',$namaz->id)}}"><i class="fa fa-pencil-square"></i></a></td>
                          
                            <td width="5">

                                <a href="{{route('namaz.delete',$namaz->id)}}"><i id="@php echo $namaz->id @endphp"
                                                                class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                    @endforeach
               
                      </tbody>
                    </table>
                    <table>
                  <tr><td >{{ $data['namaz']->links() }}</td></tr>
                </table>
                  </div>
                </div>
              </div>
            </div>
           

<script>
 
</script>
@endsection
@section('css')@endsection
@section('js')@endsection