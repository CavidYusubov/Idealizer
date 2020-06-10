@extends('Backend.layout')

@section('content')




      <!-- End Navbar -->
    <div class="content" style="width: 60%;margin-left: 25%;">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Profile</h4>
                  <p class="card-category">Profil Əlavə et</p>
                          
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
                <form action="{{route('profile.create')}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                <div class="card-body">
               
                 

                <!-- <p class="card-category" style="float:right"> <a href="{{url('/')}}/admin/profile/create"><Button class="btn btn-primary">Admin Əlavə et</Button></a></p> -->
                    <div class="row">
                      
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Ad Soyad</label>
                          <input type="text"  name="name"  class="form-control" autocomplete="false"   onfocus="javascript: this.removeAttribute('readonly')">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email address</label>
                          <input type="email" name="email" class="form-control"readonly="readonly" onfocus="javascript: this.removeAttribute('readonly')">
                        </div>
                      </div>
                    </div>
                   
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="password"  name="password" autocomplete="false" readonly="readonly"  class="form-control" onfocus="javascript: this.removeAttribute('readonly')">
                        </div>
                      </div>
                    </div>
               
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Yenilə</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
</div>
     </div></div>
      </form>
   
      @endsection