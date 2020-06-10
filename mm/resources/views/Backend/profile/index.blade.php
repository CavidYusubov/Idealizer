@extends('Backend.layout')

@section('content')




      <!-- End Navbar -->
    <div class="content" style="width: 60%;margin-left: 25%;">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                <p class="card-category" style="float:right"> <a href="{{url('/')}}/admin/profile/add"style="color:#fff" class="btn btn-primary" >Admin Əlavə et</a><a href="{{url('/')}}/admin/profile/list"style="color:#fff" class="btn btn-primary" >İstifadəçilərin siyahısı</a></p>
                  <h4 class="card-title">Edit Profile</h4>
                  <p class="card-category">Profili redaktə et</p>
                          
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
                
                <div class="card-body">
               
                 

                
                <form action="{{route('profile.update')}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                      
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Ad Soyad</label>
                          <input type="text"  name="name"  class="form-control" autocomplete="false"  value="{{Auth::user()->name}}" onfocus="javascript: this.removeAttribute('readonly')">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email address</label>
                          <input type="email" name="email" class="form-control"readonly="readonly" onfocus="javascript: this.removeAttribute('readonly')" value="{{Auth::user()->email}}">
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