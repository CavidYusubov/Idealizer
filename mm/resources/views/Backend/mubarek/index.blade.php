@extends('Backend.layout')
@section('content')



      <!-- End Navbar -->
      <div class="content" style="width: 80%;margin-left: 10%;">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Mübarək ay və günlər</h4>
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
                  <p class="card-category" style="float:right"> <a href="{{url('/')}}/admin/mubarek/create"><Button class="btn btn-primary">Əlavə et</Button></a></p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                         Tarix
                        </th>
                        <th>
                        Başlıq
                        </th>
                        <th>
                        Açıqlama
                        </th>
                        
                        <th>
                        Alətlər  
                        </th>
                        
                      </thead>
                      <tbody>
                        <?php $n=1;?>
@foreach($data['mubarek'] as $mubarek)
                        <tr id="item-{{$mubarek->id}}">
                        <td width="15">{{date('d-m-Y',$mubarek->date)}}</td>    
                        <td width="15">{{$mubarek->title}}</td>
                           
                            <td >{{substr($mubarek->description, 0, 200)}}...</td>
                           
                         
                            <td width="5"><a href="{{route('mubarek.edit',$mubarek->id)}}"><i class="fa fa-pencil-square"></i></a></td>
                          
                            <td width="5">

                                <a href="{{route('mubarek.delete',$mubarek->id)}}"><i id="@php echo $mubarek->id @endphp"
                                                                class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                    @endforeach
               
                      </tbody>
                    </table>
                    <table>
                  <tr><td >{{ $data['mubarek']->links() }}</td></tr>
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