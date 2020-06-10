@extends('Backend.layout')
@section('content')



      <!-- End Navbar -->
      <div class="content" style="width: 80%;margin-left: 10%;">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Xəbərlər</h4>
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
                  <p class="card-category" style="float:right"> <a href="{{url('/')}}/admin/blogs/create"><Button class="btn btn-primary">Yeni xəbər əlavə et</Button></a></p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Başlıq
                        </th>
                        <th>
                        Alətlər  
                        </th>
                        
                      </thead>
                      <tbody>
                        <?php $n=1;?>
@foreach($data['blog'] as $blog)
                        <tr id="item-{{$blog->id}}">
                        <td >{{$n++}}</td>    
                        <td class="sortable">{{$blog->blog_title}}</td>
                            <td width="5"><a href="{{route('blog.edit',$blog->id)}}"><i class="fa fa-pencil-square"></i></a></td>
                            <td width="5">
                                <a href="{{route('blog.delete',$blog->id)}}"><i id="@php echo $blog->id @endphp"
                                                                class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                    @endforeach
               
                      </tbody>
                    </table>
                    <table>
                  <tr><td >{{ $data['blog']->links() }}</td></tr>
                </table>
                  </div>
                </div>
              </div>
            </div>
           

<script>
  $(".fa-trash-o").click(function () {
            destroy_id = $(this).attr('id');

            alert('Silme işlemini onaylayın!', 'Bu işlem geri alınamaz',
                function () {

                $.ajax({
                    type:"DELETE",
                    url:"blog/"+destroy_id,
                    success: function (msg) {
                        if (msg)
                        {
                            $("#item-"+destroy_id).remove();
                            alert("Silme İşlemi Başarılı");

                        } else {
                            alertify.error("İşlem Tamamlanamadı");
                        }
                    }
                });

                },
                function () {
                    alertify.error('Silme işlemi iptal edildi')
                }
            )

        });
</script>
@endsection
@section('css')@endsection
@section('js')@endsection