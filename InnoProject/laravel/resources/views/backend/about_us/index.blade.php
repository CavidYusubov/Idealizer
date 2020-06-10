@extends('backend.layout')
@section('content')
<style>
iframe
    {
        width:200px;
        max-width:200px;
        max-height: 200vh;
        height:100px;
    }
</style>
 <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Kateqoriya</h3>
              </div>

           
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Siyahı</h2>

                <div align="right">
                    <a href="{{route('Category.create')}}"><button class="btn btn-success">Əlavə et</button></a>
                </div>
                    <ul class="nav navbar-right panel_toolbox">
                      <li>
                      </li>
                     
                      <li><a href="{{   url()->previous()   }}"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      
                <table class="table table-striped">
                    <thead>
                    <tr>
                        
                        <th>Title</th>
                        <th>Description</th>
                   
                     
                        <th></th>
                        <th></th>
                    </tr>
                    <tbody id="sortable">
                    @foreach($data['about'] as $about)
                        <tr id="item-{{$about->id}}">
                           
                            <td class="sortable">{{$about->title}}</td>
                           
                            <td>{{ Illuminate\Support\Str::limit($about->Description, 20)}}</td>
                            <td style="width:100px">{!!$about->video!!}</td>
                          
                            <td width="5"><a href="{{route('about.Edit',$about->id)}}"><i class="fa fa-pencil-square"></i></a></td>
                            
                        </tr>
                    @endforeach
                    <!-- @foreach($about_content as $about_contents)
                          <tr>
                    <td class="sortable">{{$about_contents->title}}</td>
                           
                           <td>{{ Illuminate\Support\Str::limit($about_contents->description, 20)}}</td>
                           <td> <img src="{{$about_contents->image}}" width="100" ></td>
                           <td width="5"><a href="{{route('about.Edit',$about_contents->id)}}"><i class="fa fa-pencil-square"></i></a></td>
                          <tr>
                    @endforeach -->
                    </tbody>
                    </thead>
                </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

    <script type="text/javascript">
   
    
    </script>



@endsection
@section('css')@endsection
@section('js')@endsection