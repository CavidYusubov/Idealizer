@extends('Backend.layout')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


<div class="content" style="width: 95%;margin-left: 5%;">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title"></h4>
                  <p class="card-category">Yenisini Əlavə et</p>
                  
        @if(Session::has('error'))
            <div class="alert alert-danger">
                {{session('error')}}
            </div>
            @elseif(Session::has('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
        @endif
                </div>
                <form action="{{route('namaz.store')}}" method="post"
enctype="multipart/form-data">
@csrf
                <div class="card-body">
                  <div class="table-responsive">
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
                      


                 <?php 
               if($_GET['date']==true){
  $day_array=explode('.',$_GET['date']);
                $d=cal_days_in_month(CAL_GREGORIAN,$day_array[0],$day_array[1]);
       for( $i=1;$i <= $d;$i++)
{

  
    
    
?>  

                        <tr id="">
                   

                        <td ><input type="text" class="form-control " name="date[]" value="{{$i}}.{{$_GET['date']}}"></td>    
                        <td class="sortable"><input type="text" class="form-control " name="imsak[]" placeholder="07:00"></td>
                        <td ><input type="text" class="form-control " name="subh[]"placeholder="07:00"></td>   
                        <td ><input type="text" class="form-control " name="gun_cixir[]"placeholder="07:00"></td>
                        <td ><input type="text" class="form-control " name="zohr[]"placeholder="07:00"></td>
                        <td ><input type="text" class="form-control " name="esr[]"placeholder="07:00"></td>
                        <td ><input type="text" class="form-control " name="gun_batir[]"placeholder="07:00"></td>
                      
                        <td ><input type="text" class="form-control " name="megrib[]"placeholder="07:00"></td>
                        <td ><input type="text" class="form-control " name="isha[]"placeholder="07:00"></td>
                       					
                       

                         
                        </tr>
                        <?php }}

?>
               
                      </tbody>
                    </table>
                 <button type="submit" class="btn btn-primary pull-right">Əlavə et</button>
                    <table>
                  <tr><td ></td></tr>
                </table>
                  </div>
                </div>
              </div>
            </div>
</div></form>
     </div></div>
     <script>
 $(".this").change(function () {
    newPrice = $(this).children(':selected').data('price');
    console.log(newPrice);
    /*
    $(".one option:selected").each(function () {
        Price = newPrice*$(".unit").val();
    });*/
    
    $('.that').focus().val(newPrice);    
});

</script>
@endsection
@section('css')@endsection
@section('js')@endsection
