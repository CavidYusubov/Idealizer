@extends('backend.layout')
@section('content')
  <script src="../js/jquery.borderradiusinset.min.js"></script>

<script type="text/javascript" src="https://foliotek.github.io/Croppie/croppie.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/0.8.1/cropper.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://foliotek.github.io/Croppie/croppie.css">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/cropper/2.3.4/cropper.min.css">
<style type="text/css">
  textarea[name=startup_description] {
  resize: none;
}
input[type=checkbox], input[type=radio] {
    margin: 4px 4px 0!important;
    margin-top: 1px\9;
    line-height: normal;
    width: 24px;
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
                <h3>Startup'lar</h3>
              </div>

             
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Əlavə et</h2>
                    <div align="right">
                  
                </div>
                    <ul class="nav navbar-right panel_toolbox">
                      
                      <li><a href="{{   url()->previous()   }}"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
            <div class="box-body">
                <form action="{{route('startups.store')}}" method="post"
                      enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label>Startup Logo</label>
                        <div class="row">
                     
                                <input class="form-control" name="startup_logo"  type="file">
   

                            
                               

                                </div>
                        </div>
                   
              
                                  <div class="form-group">
                        <label>Startup Şəkil</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" name="startup_images"  type="file">
                               
                                </div>
                        </div>
                    </div>
                    <!-- <div class="form-group">
                        <label>Rəng Seç</label>
                        <div class="row">
                            <div class="col-xs-12">
                          
                           <input type="text" id="colorpicker-full" name="color"value="fe9810">
                            </div>
                        </div>
                    </div> -->
                     <div class="form-group">
                        <label>Startup Sayt</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="startup_pitch">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Startupın adı </label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="startup_title">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Startup Açıqlama</label>
                        <div class="row">
                            <div class="col-xs-12">
                               
                                <textarea maxlength="135 " class="form-control"  rows="2" cols="50" name="startup_description"></textarea>
                            </div>
                        </div>
                    </div>
                     <div class="form-group">
                        <label>Startupın ideyası </label>
                        <div class="row">
                            <div class="col-xs-12">
                               
                            <textarea  class="form-control"  rows="4" cols="50" id="editor44" name="startup_idea"></textarea>
                            <script>  CKEDITOR.replace('editor44');</script>

                            </div>
                        </div>
                    </div>
       <div class="form-group">
                              <label>Komanda üzvləri</label>
                              <div class="row">
                                  <div class="col-xs-12">
                                     
                                  <textarea  class="form-control"  rows="4" cols="50" name="startup_team"></textarea>


                                  </div>
                              </div>
                          </div>
                          <label>Facebook linki</label>
                              <div class="row">
                                  <div class="col-xs-12">
                                     
                                  <input type="text" name="facebook" class="form-control">


                                  </div>
                              </div>
                          </div>
                          <label>Twitter linki</label>
                              <div class="row">
                                  <div class="col-xs-12">
                                     
                                  <input type="text" name="twitter" class="form-control">


                                  </div>
                              </div>
                          </div>
                          <!-- <div class="form-group">
                              <label>Ölkə seç</label>
                              <div class="row">
                                  <div class="col-xs-12">
                                     
                                 <select name="country" id="" class="form-control">
                                 <option selected>--Seç--</option>
                                 @foreach($country as $countries)
                                <option value="{{$countries->country_code}}">{{$countries->country_name}}</option>
                                 @endforeach
                                 </select>


                                  </div>
                              </div>
                          </div> -->
                          <!-- <div class="form-group">
                              <label>İnnovasiya sahəsi</label>
                              <div class="row">
                                  <div class="col-xs-12">
                                     
                                 <select name="startup_direction" id="" class="form-control">
                                 <option selected>--Seç--</option>
                                 @foreach($directions as $direction)
                                <option value="{{$direction->title}}">{{$direction->title}}</option>
                                 @endforeach
                                 </select>


                                  </div>
                              </div>
                          </div> -->


                    

                    <div class="row">
      <div class="control-group" id="fields">
          <label class="control-label" for="field1">
           Faylları seç (icazə verilən fayl növləri. doc,docx,txt)
          </label>
          <div class="controls">
           
          <div class="entry input-group col-xs-3">
                
             
                <input class="btn btn-success" name="all_file[]" type="file" multiple>
                <span class="input-group-btn">
             
                </span>
              </div>
        </div>
      </div>
                      <div class="form-group">
                        <label>Startup Video</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" name="startup_video" placeholder="Url əlavə et" type="text">
                            </div>
                        </div>
                    </div>
                      <!-- <div class="form-group">
                        <label>Komanda üzvləri</label>
                        <div class="row">
                            <div class="col-xs-12">
                          <select id="multiple-checkboxes" multiple="multiple" name="startup_team">
                 @foreach($users as $user) 
               <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach -->
                       <!--     </select>
                            </div>
                        </div>
                    </div> -->


                  @foreach($questions as $question)
                  @if($question->title === 'Komandanın ölçüsü ' ||$question->title === 'Layihənin / biznesin inkişaf mərhələsi ' )
                  <div class="form-group" style="border:1px solid red; padding:5px">
                 
                 @else
                 <div class="form-group">
                  @endif
                            <label>{{$question->title}}</label>
                            <div class="row">
                                <div class="col-xs-12">
                                @foreach($answers as $answer)
                                    @if($question->id == $answer->q_id)
                                    @if($question->id == 12 || $question->id == 2)
                                    <input  type="checkbox" value="{{$answer->title}}" name="answer{{$question->id}}[]" >{{ $answer->title}} <br>
                                    @else
                                    <input type="radio" value="{{$answer->title}}" name="answer{{$question->id}}" >{{ $answer->title}} <br>
                                    @endif
                                    @endif
                                 @endforeach   
                                </div>
                            </div>
</div>
                  @endforeach

                        <div class="form-group">
                            <label>Status</label>
                            <div class="row">
                                <div class="col-xs-12">
                                    <select name="startup_status" class="form-control">
                                        <option value="1">Aktiv</option>
                                        <option value="0">Passiv</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                            <label>Kateqoriya seç</label>
                            <div class="row">
                                <div class="col-xs-12">
                                    <select name="category" class="form-control">
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                        <option value="E">E</option>
                                    </select>
                                </div>
                            </div>

                            <div align="right" class="box-footer">
                                <button type="submit" class="btn btn-success">Əlavə et</button>
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
    $(".gambar").attr("src", "../images/icon-cam.png");
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

</script>
@endsection
@section('css')@endsection
@section('js')@endsection