@extends('Backend.layout')
@section('content')


<div class="content" style="width: 95%;margin-left: 5%;">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title"></h4>
                  <p class="card-category">Redaktə et</p>
                  
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
                <form action="{{route('namaz.update')}}" method="post"
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
                       
           

                        <tr id="">
                   

                        <td ><input type="text" class="form-control " name="date" value="{{$namaz->date}}"></td>    
                        <td class="sortable"><input type="text" class="form-control " name="imsak"value="{{$namaz->imsak}}" placeholder="07:00"></td>
                        <td ><input type="text" class="form-control " name="subh"value="{{$namaz->subh}}"placeholder="07:00"></td>   
                        <td ><input type="text" class="form-control " name="gun_cixir"value="{{$namaz->gun_cixir}}"placeholder="07:00"></td>
                        <td ><input type="text" class="form-control " name="zohr"value="{{$namaz->zohr}}"placeholder="07:00"></td>
                        <td ><input type="text" class="form-control " name="esr"value="{{$namaz->esr}}"placeholder="07:00"></td>
                        <td ><input type="text" class="form-control " name="gun_batir"value="{{$namaz->gun_batir}}"placeholder="07:00"></td>
                      
                        <td ><input type="text" class="form-control " name="megrib"value="{{$namaz->megrib}}"placeholder="07:00"></td>
                        <td ><input type="text" class="form-control " name="isha"value="{{$namaz->isha}}"placeholder="07:00"></td>
                       					<input type="hidden" value="{{$namaz->id}}" name="id">
                       

                         
                        </tr>
                      
               
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

@endsection
@section('css')@endsection
@section('js')@endsection
