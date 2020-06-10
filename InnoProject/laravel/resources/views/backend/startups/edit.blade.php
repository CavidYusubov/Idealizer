@extends('backend.layout')
@section('content')
<script src="../../js/jquery.borderradiusinset.min.js"></script>

<script type="text/javascript" src="https://foliotek.github.io/Croppie/croppie.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/0.8.1/cropper.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://foliotek.github.io/Croppie/croppie.css">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/cropper/2.3.4/cropper.min.css">
<style type="text/css">
  textarea[name=startup_description] {
  resize: none;
}

.page {
  margin: 1em auto;
  max-width: 768px;
  display: flex;
  align-items: flex-start;
  flex-wrap: wrap;
  height: 100%;
}

.box {
  padding: 0.5em;
  width: 100%;
  margin:0.5em;
}

.box-2 {
  padding: 0.5em;
  width: calc(100%/2 - 1em);
}

.options label,
.options input{
  width:4em;
  padding:0.5em 1em;
}
.btn{
  background:white;
  color:black;
  border:1px solid black;
  padding: 0.5em 1em;
  text-decoration:none;
  margin:0.8em 0.3em;
  display:inline-block;
  cursor:pointer;
}

.hide {
  display: none;
}

img {
  max-width: 100%;
}

  label.cabinet {
      margin-top:10px;
      display: block;
      cursor: pointer;
      position: relative;
    }

    label.cabinet input.file {
      position: absolute;
      height: 100%;
      width: auto;
      opacity: 0;
      -moz-opacity: 0;
      filter: progid:DXImageTransform.Microsoft.Alpha(opacity=0);
      margin-top: -30px;
    }

    #upload-demo {
      width: 250px;
      height: 250px;
      padding-bottom: 25px;
    }

    figure figcaption {
      position: absolute;
      bottom: -17px;
      color: #fff;
      width: 100%;
      padding-left: 9px;
      padding-bottom: 5px;
      text-shadow: 0 0 10px #000;
    }

    figure img {
      width: 125px !important;
      height: 125px !important;
      border: 1px solid;
         
    }
    .cr-vp-square{
      border-radius: 15px;
    }
</style>
     <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Settings</h3>
              </div>

             
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Redaktə et</h2>
                    <div align="right">
                    <!-- <a href="{{route('startups.create')}}"><button class="btn btn-success">Əlavə et</button></a> -->
                  
                </div>
                    <ul class="nav navbar-right panel_toolbox">
                      
                      <li><a href="{{  route('startups')  }}"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
            <div class="box-body">
                <form action="{{route('startups.update',$startup->id)}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                   
          <input type="hidden" name="old_file_logo" value="{{$startup->startup_logo}}">
          <input type="hidden" name="oldimages" value="{{$startup->startup_image}}">
              
          <div class="col-xs-6">
                                  <div class="form-group">
                        <label>İstifadəçi məlumatları</label>
                        <div class="row">
                            <div class="col-xs-12">
                            {{$startup->name}} {{$startup->surname}}<br>{{$startup->email}}
                            <br>{{$startup->user_phone}}
                                </div>
                        </div>
                    </div>
                   
</div>
                        
          <div class="col-xs-6">
                                  <div class="form-group">
                        <label>Kateqoriya</label>
                        <div class="row">
                            <div class="col-xs-6">
                            <span style="font-size:35px; weight:700;">{{$startup->category}}</span>
                                </div>
                        </div>
                    </div>

                            
                                <div class="col-xs-6">
                                  <div class="form-group">
                        <label>Startup Şəkil</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" name="startup_images"  type="file">
                                </div>
                        </div>
                    </div>
                       
                 

  @isset($startup->startup_image)
  <div class="col-xs-6">
                    <div class="form-group">
                        <label>Mövcud Şəkil</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <img width="100" src="{{$startup->startup_image}}" alt="">
                            </div>
                        </div>
                    </div>
                    </div>
                    @endisset
</main>
                       
                                </div>
                        </div>
                    </div>
                
                    <div class="form-group">
                        <label>Startup Logo</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" name="startup_logo"  type="file">
                               <br> 
                                @isset($startup->startup_logo)
                 
                    <img src="{{$startup->startup_logo}}" width="100">
                    @endisset
                            </div>
                        </div>
                    </div>
 <div class="form-group">
                        <label>Startupın adı </label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="startup_title" value="{{$startup->startup_title}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Startup Açıqlama</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <textarea class="form-control"  name="startup_description">{{$startup->startup_description}}</textarea>
                            </div>
                        </div>
                    </div>

                     <div class="form-group">
                        <label>Startupın ideyası</label>
                        <div class="row">
                            <div class="col-xs-12">
                            <textarea  class="form-control"  rows="4" cols="50" name="startup_idea" id="editor44">{{$startup->startup_idea}}</textarea>
                          <script>  CKEDITOR.replace('editor44');</script>
                            </div>
                        </div>
                    </div>
                     <div class="form-group">
                              <label>Komanda üzvləri</label>
                              <div class="row">
                                  <div class="col-xs-12">
                                     
                                  <textarea  class="form-control"   rows="4" cols="50" name="startup_team">{{$startup->startup_team}}</textarea>


                                  </div>
                              </div>
                          </div>

                    <!-- <div class="form-group">
                        <label>Startup Rənglər</label>
                        <div class="row">
                            <div class="col-xs-12">
                               
                           <input type="text" id="colorpicker-full" name="color" value="{{$startup->startup_color}}">
                           
                          
                            <td width="5" style="background:  {{$startup->startup_color}}  "></td>
                            </div>
                        </div>
                    </div> -->
                     <div class="form-group">
                        <label>Startup Sayt</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="startup_pitch" value="{{$startup->startup_pitch}}">
                            </div>
                        </div>
                    </div>
                    <!-- <div class="form-group">
                              <label>Ölkə seç</label>
                              <div class="row">
                                  <div class="col-xs-5">
                                     
                                 <select name="country" id="" class="form-control">
                                 
                                 @foreach($country as $countries)
                                 @if($countries->country_code == $startup->country)
                                 <option selected style="background:silver">{{$countries->country_name}}</option>
                                 @else
                                <option value="{{$countries->country_code}}">{{$countries->country_name}}</option>
                                 @endif
                                 @endforeach
                                 </select>


                                  </div>
                              </div>
                          </div> -->
                          <!-- <div class="form-group">
                              <label>İnnovasiya sahəsi</label>
                              <div class="row">
                                  <div class="col-xs-5">
                                     
                                 <select name="startup_direction" id="" class="form-control">
                                 
                                 @foreach($directions as $direction)
                                 @if($direction->title == $startup->startup_direction)
                                 <option selected style="background:silver">{{$direction->title}}</option>
                                 @else
                                <option value="{{$countries->country_name}}">{{$direction->title}}</option>
                                 @endif
                                 @endforeach
                                 </select>


                                  </div>
                              </div>
                          </div> -->

            
             
 <!-- <embed src="{{url('/')}}/images/startups/files/{{$startup->startup_documents}}" width="150x" height="100" /> -->
 <div class="form-group">
                        <label>Fayllar</label>
                        <div class="row">
                            
                            @foreach( $files as $filess)
                            <div class="col-xs-2">
 <a href="{{$filess->file}}"  download> <h2>{{$filess->title}}</a> - Yuklə <br><a href="{{url('/')}}/startup/file/{{$filess->id}}/delete" style="color:darkred">- Sil</a></h2>

 </div>

 
 @endforeach   
   
                        </div>
                    </div>
                  
                    <div class="row">
      <div class="control-group" id="fields">
          <label class="control-label" for="field1">
           Faylları seç (icazə verilən fayl növləri. doc,docx,txt)
          </label>
          <div class="controls">
           
              <div class="entry input-group col-xs-3">
                
             
                <input class="btn btn-success" name="all_file[]" type="file" multiple>
               
              </div>
           
          </div>
          
        </div>
      </div>
                 <!--    <div class="form-group">
                        <label>Startup Şəkil</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" name="startup_images"  type="file">
                                
                            </div>
                        </div>
                    </div> -->
                      <div class="form-group">
                        <label>Startup Video</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" name="startup_video" placeholder="Url əlavə et" value="{{$startup->startup_video}}" type="text">
                                @isset($startup->startup_video)
                                <?php   $vidolength=substr($startup->startup_video, 0, 24); ?>
                                @if( $vidolength != 'https://www.youtube.com/')
                                @else
                                <iframe width="253" height="180" src="{{$startup->startup_video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                              @endif
                                @endisset
                            </div>
                        </div>
                    </div>
                    <label>Sual və Cavablar</label>
                    @foreach($questions as $question)
                    <div class="form-group">
                        <label>{{$question->question}}</label>
                        <div class="row">
                            <div class="col-xs-6">
                            {{$question->answer}}
                            </div>
                        </div>
                    </div>
                  
                    @endforeach

                       

                        <div class="form-group">
                            <label>Status</label>
                            <div class="row">
                                <div class="col-xs-12">
                                    <select name="user_status" class="form-control">
                                        <option {{$startup->startup_status=="1" ? "selected=''" : ""}} value="1">Aktiv</option>
                                        <option {{$startup->startup_status=="0" ? "selected=''" : ""}} value="0">Passiv</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                            <label>Kateqoriya seç</label>
                            <div class="row">
                                <div class="col-xs-12">
                                    <select name="category" class="form-control">
                                        <option {{$startup->category=="A" ? "selected=''" : ""}}  value="A">A</option>
                                        <option {{$startup->category=="B" ? "selected=''" : ""}}  value="B">B</option>
                                        <option {{$startup->category=="C" ? "selected=''" : ""}}  value="C">C</option>
                                        <option {{$startup->category=="D" ? "selected=''" : ""}}  value="D">D</option>
                                        <option {{$startup->category=="E" ? "selected=''" : ""}}  value="E">E</option>
                                    </select>
                                </div>
                            </div>
                            <input type="hidden" name="old_file_logo" value="{{$startup->startup_logo}}">

                                <input type="hidden" name="old_file_images" value="{{$startup->startup_image}}">


                            <div align="right" class="box-footer">
                            @if($startup->startup_check == 0 || $startup->startup_check == 2) <a href="javascript:void(0)" title="Təstiq et"><button type="button"  id="@php echo $startup->id @endphp"  class="btn btn-secondary that" aria-hidden="true"> Təstiq et</button></a>@endif
                            @if($startup->startup_check != 2) <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">İmtina et</button>@else <button type="button" class="btn btn-danger" data-toggle="#" data-target="#">İmtina edildi</button> @endif
                                <button type="submit" class="btn btn-success">Yenilə</button>
                            </div>
                        </div>


                </form>
           </div>
        </div>
    </section>
    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Səbəbləri qeyd et</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{route('startups.comment',$startup->id)}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
 
      <label for="" >Mətin</label>
      <p><textarea name="comment" id="" cols="30" rows="10" required class="form-control"></textarea></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Bağla</button>
        
        <button type="submit" class="btn btn-primary">Göndər</button>
        </form>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(function() {
  $('#colorpicker-full').colorpicker({
    parts:      'full',
    alpha:      true,
    showOn:     'both',
    buttonColorize: true,
    showNoneButton: true
  });
});
    $(document).ready(function() {
        $('#multiple-checkboxes').multiselect({
          includeSelectAllOption: true,
        });
    });
$(function()
{
    $(document).on('click', '.btn-add', function(e)
    {
        e.preventDefault();

        var controlForm = $('.controls:first'),
            currentEntry = $(this).parents('.entry:first'),
            newEntry = $(currentEntry.clone()).appendTo(controlForm);

        newEntry.find('input').val('');
        controlForm.find('.entry:not(:last) .btn-add')
            .removeClass('btn-add').addClass('btn-remove')
            .removeClass('btn-success').addClass('btn-danger')
            .html('<span class="glyphicon glyphicon-minus"></span>');
    }).on('click', '.btn-remove', function(e)
    {
      $(this).parents('.entry:first').remove();

    e.preventDefault();
    return false;
  });


  $(function() {
  $('#colorpicker-full').colorpicker({
    parts:      'full',
    alpha:      true,
    showOn:     'both',
    buttonColorize: true,
    showNoneButton: true
  });
});
    $(document).ready(function() {
        $('#multiple-checkboxes').multiselect({
          includeSelectAllOption: true,
        });
    });
$(function()
{
    $(document).on('click', '.btn-add', function(e)
    {
        e.preventDefault();

        var controlForm = $('.controls:first'),
            currentEntry = $(this).parents('.entry:first'),
            newEntry = $(currentEntry.clone()).appendTo(controlForm);

   
        controlForm.find('.entry:not(:last) .btn-add')
            .removeClass('btn-add').addClass('btn-remove')
            .removeClass('btn-success').addClass('btn-danger')
            .html('<span class="glyphicon glyphicon-minus"></span>');
    }).on('click', '.btn-remove', function(e)
    {
      $(this).parents('.entry:first').remove();

    e.preventDefault();
    return false;
  });
});
// Start upload preview image
    $(".gambar").attr("src", "{{url('/')}}/images/icon-cam.png");
    var $uploadCrop,
      tempFilename,
      rawImg,
      imageId;
    function readFile(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
          $('.upload-demo').addClass('ready');
          $('#cropImagePop').modal('show');
          rawImg = e.target.result;
        }
        reader.readAsDataURL(input.files[0]);
      }
      else {
        swal("Sorry - you're browser doesn't support the FileReader API");
      }
    }

    $uploadCrop = $('#upload-demo').croppie({
      viewport: {
        width: 200,
        height: 200,
        type: 'square'
      },
      enforceBoundary: false,
      enableExif: true
    });
    $('#cropImagePop').on('shown.bs.modal', function () {
      // alert('Shown pop');
      $uploadCrop.croppie('bind', {
        url: rawImg
      }).then(function () {
        console.log('jQuery bind complete');
      });
    });

    $('.item-img').on('change', function () {
      imageId = $(this).data('id'); tempFilename = $(this).val();
      $('#cancelCropBtn').data('id', imageId); readFile(this);
    });
    $('#cropImageBtn').on('click', function (ev) {
      

      $uploadCrop.croppie('result', {
        type: 'base64',
        format: 'png',
        size: { width: 200, height: 200 }
      }).then(function (resp) {
        
        $('#item-img-output').attr('src', resp);

        $('#filess').attr('value', resp);
        $('#cropImagePop').modal('hide');
      });
    });
        // End upload preview image

        // vars
let result = document.querySelector(".result"),
  img_result = document.querySelector(".img-result"),
  img_w = document.querySelector(".img-w"),
  img_h = document.querySelector(".img-h"),
  options = document.querySelector(".options"),
  save = document.querySelector(".save"),
  cropped = document.querySelector(".cropped"),
  dwn = document.querySelector(".download"),
  upload = document.querySelector("#file-input"),
  cropper = "";

// on change show image with crop options
upload.addEventListener("change", e => {
  if (e.target.files.length) {
    // start file reader
    const reader = new FileReader();
    reader.onload = e => {
      if (e.target.result) {
        // create new image
        let img = document.createElement("img");
        img.id = "image";
        img.src = e.target.result;
        // clean result before
        result.innerHTML = "";
        // append new image
        result.appendChild(img);
        // show save btn and options
        save.classList.remove("hide");
        options.classList.remove("hide");
        // init cropper
        cropper = new Cropper(img);
      }
    };
    reader.readAsDataURL(e.target.files[0]);
  }
});

// save on click
save.addEventListener("click", e => {
  e.preventDefault();
  // get result to data uri
  let imgSrc = cropper
    .getCroppedCanvas({
      width: img_w.value // input value
    })
    .toDataURL();
  // remove hide class of img
  cropped.classList.remove("hide");
  img_result.classList.remove("hide");
  // show image cropped
  cropped.src = imgSrc;
  dwn.classList.remove("hide");
  dwn.download = "imagename.png";
  dwn.setAttribute("href", imgSrc);
  $('#filess_images').attr('value', imgSrc);
});
 tee = $('.cropped').attr('src');


});
$(".that").click(function () {
            destroy_id = $(this).attr('id');

            alertify.confirm('Təstiq prosesini təstiqləyin!', 'Bu proses geri alına bilməz',
                function () {
                    location.href = "{{url('/')}}/startup/approve/" + destroy_id;
                },
                function () {
                    alertify.error('Təstiq Prosesindən imtina edildi')
                }
            )

        });

</script>
@endsection
@section('css')@endsection
@section('js')@endsection