@extends('Backend.layout')
@section('content')



      <!-- End Navbar -->
      <div class="content" style="width: 80%;margin-left: 10%;">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">İstifadəçilərin Siyahısı</h4>
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
                  <p class="card-category" style="float:right"> <a href="{{url('/')}}/admin/profile/add"><Button class="btn btn-primary">Əlavə et</Button></a></p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                         Ad Soyad
                        </th>
                        <th>
                        Email
                        </th>
                        
                        <th>
                        Alətlər  
                        </th>
                        
                      </thead>
                      <tbody>
                        <?php $n=1;?>
@foreach($data['users'] as $list)
                        <tr id="item-{{$list->id}}">
                        <td >{{$list->name}}</td>    
                        <td class="sortable">{{$list->email}}</td>
                           
                            
                           
                           
                            
                            <td width="5">

                                <a href="{{route('profile.delete',$list->id)}}"><i id="@php echo $list->id @endphp"
                                                                class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                    @endforeach
               
                      </tbody>
                    </table>
                    <table>
                  <tr><td >{{ $data['users']->links() }}</td></tr>
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