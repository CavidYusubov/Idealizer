@extends('Backend.layout')
@section('content')



      <!-- End Navbar -->
      <div class="content" style="width: 80%;margin-left: 10%;">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Sual və cavablar</h4>
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
                  <p class="card-category" style="float:right"> <a href="{{url('/')}}/admin/faq/create"><Button class="btn btn-primary">Əlavə et</Button></a></p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                         Email
                        </th>
                        <th>
                        Sual
                        </th>
                        <th>
                        Cavab
                        </th>
                        <th>
                        Status
                        </th>
                        <th>
                        Alətlər  
                        </th>
                        
                      </thead>
                      <tbody>
                        <?php $n=1;?>
@foreach($data['faqs'] as $faq)
                        <tr id="item-{{$faq->id}}"  @if($faq->status==0) style="background-color:#66bb6a"@endif>
                        <td @if($faq->status==0) style="color:#fff"@endif>{{$faq->email}}</td>    
                        <td @if($faq->status==0) style="color:#fff"@endif>{{$faq->question}}</td>
                           
                            <td @if($faq->status==0) style="color:#fff"@endif>{{$faq->answer}}</td>
                           
                            <td @if($faq->status==0) style="color:#fff"@endif>@if($faq->status == '0')Gözləmədədir @elseif($faq->status == '1')Aktiv @else Imtina edilib @endif</td>
                            <td width="5" @if($faq->status==0) style="color:#fff"@endif><a href="{{route('faq.edit',$faq->id)}}"><i class="fa fa-pencil-square" @if($faq->status==0) style="color:#fff"@endif></i></a></td>
                          
                            <td width="5" @if($faq->status==0) style="color:#fff"@endif>

                                <a href="{{route('faq.delete',$faq->id)}}"><i @if($faq->status==0) style="color:#fff"@endif id="@php echo $faq->id @endphp"
                                                                class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                    @endforeach
               
                      </tbody>
                    </table>
                    <table>
                  <tr><td >{{ $data['faqs']->links() }}</td></tr>
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