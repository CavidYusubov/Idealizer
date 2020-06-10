@extends('Backend.layout')
@section('content')



      <!-- End Navbar -->
      <div class="content" style="width: 80%;margin-left: 10%;">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Xütbə və mövzələr</h4>
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
                  <p class="card-category" style="float:right"> <a href="{{url('/')}}/admin/khutba/create"><Button class="btn btn-primary">Əlavə et</Button></a></p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                         Tarix
                        </th>
                        <th>
                        Mövzu
                        </th>
                        <th>
                        Link
                        </th>
                        <th>
                        Imam
                        </th>
                        <th>
                        Alətlər  
                        </th>
                        
                      </thead>
                      <tbody>
                        <?php $n=1;?>
@foreach($data['khutbas'] as $khutba)
                        <tr id="item-{{$khutba->id}}">
                        <td >{{$khutba->date}}</td>    
                        <td class="sortable">{{$khutba->subject}}</td>
                           
                            <td ><a href="{{$khutba->url}}" target="_blank"><img src="{{url('/')}}/images/logo/youtube-khutba.png" alt="" width="40px" class="src"></a></td>
                           
                            <td >{{$khutba->imam}}</td>
                            <td width="5"><a href="{{route('Khutba.edit',$khutba->id)}}"><i class="fa fa-pencil-square"></i></a></td>
                          
                            <td width="5">

                                <a href="{{route('Khutba.delete',$khutba->id)}}"><i id="@php echo $khutba->id @endphp"
                                                                class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                    @endforeach
               
                      </tbody>
                    </table>
                    <table>
                  <tr><td >{{ $data['khutbas']->links() }}</td></tr>
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