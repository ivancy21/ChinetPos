@extends('Layouts.sidebar')
@include('Layouts.cropImageModal')
@section('contents')
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>

<form class="form-horizontal" method="POST" action="{{route('medicine.update',$medicine->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
        <div class="container">
                 <div class="row">
                    <div class="col-sm-4">
                            <div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
                                    <span class="HeaderBannerText">Insert Picture</span>
                            </div>
                        <div class="flex HeaderBody">
                                <form class="md-form">
                                        <div class="file-field">
                                            <div class="z-depth-1-half mb-4">
                                                    @if ($medicine->medicinePhoto != null)
                                                    <img src="{{ asset('images/medicinePhotos/'.$medicine->medicinePhoto) }}" size="250px"  id="Photo" class="img-fluid img-sizes img-shadow" alt="">
                                                    @else
                                                    <img src="{{ asset('images/medicineicon.png') }}" size="250px" id="Photo" class="img-fluid img-sizes img-shadow" alt="" >
                                                    @endif 
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                    <div class="btn btn-mdb-color btn-rounded float-left">
                                                        <span>Choose file</span>         
                                                        <input type="file" id='medicinePhoto'
                                                        class="form-con{{ $errors->has('medicinePhoto') ? ' is-invalid' : '' }}"
                                                        name='medicinePic' style="border: none" />
                                                        <input type="hidden" id="medicinePhotos" name="medicinePhoto">
                
                                                    </div>
                                            </div>
                                        </div>
                                </form>
                        </div>
                    </div>
            
                   <div class="col-sm-8">
                                <div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
                                        <span class="HeaderBannerText">Details</span>
                                </div>
                                <div class="flex HeaderBody">
                                    <div class="row  mb-2">
                                        <div class="col-sm-6">
                                            <label  class="fnt">Medicine Code</label>
                                            <input type="text" required class="form-control input{{ $errors->has('productCode') ? ' is-invalid' : '' }}"value="{{$medicine->productCode}}" name="productCode" tabindex="14">
                                            @if ($errors->has('productCode'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>The Product Code is already Existed!</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="col-sm-6">
                                            <label  class="fnt">Medicine Name</label>
                                            <input type="text" required class="form-control"  value="{{$medicine->brandName}}" name="brandName" >
                                        </div> 
                                    </div>
                                    <div class="row  mb-2">
                                        <div class="col-sm-6">
                                            <label  class="fnt">Dosage</label>
                                            <input type="text" id="dosage" required class="form-control"  name="dosage" value="{{$medicine->dosage}}">
                                        </div>
                                        <div class="col-sm-6">
                                            <label  class="fnt" >Retail Price</label>       
                                            <input type='text' id="retailPrice" required class="form-control"  name="retailPrice" value="{{$medicine->retailPrice}}">
                                        </div> 
                                    </div>    
                                    <div class="row  mb-2">
                                        <div class="col-sm-6">
                                                <label  class="fnt">Formulations</label>
                                                        <select type="text" id="formulationId" class="form-control" name="formulationId" >
                                                            @foreach($formulations as $formulation)
                                                                    @foreach ($formulation->medicines as $item)
                                                                    <option @if($item->id == $medicine->id) {!! 
                                                                            'selected = "selected" ' !!} @endif 
                                                                    @endforeach
                                                                    value={{$formulation->id}}>{!!$formulation->formulation !!}</option>
                                                                    @endforeach
                                                                    @foreach($formulations as $formulation)
                                                                    <option value={{$formulation->id}}>{{$formulation->formulation}}</option>
                                                            @endforeach
                                                         </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <label  class="fnt">Generic Name</label>
                                            <input type="text" id="genericName" class="form-control" name="genericName"  value="{{$medicine->genericName}}"  >
                                        </div>
                                    </div>
                                    <div class="row  mb-2">
                                        <div class="col-sm-6">
                                            <label  class="fnt">Side Effect</label>       
                                            <select id="sideEffectsId" class="js-example-basic-multiple form-control" multiple="multiple" name="sideEffectsId[]" rows='1'>
                                                    @foreach($sideEffects as $sideEffect)
                                                    @foreach ($sideEffect->medicineSideEffects as $item)
                                                    <option @if($item->medicineId == $medicine->id) {!! 
                                                            'selected = "selected" ' !!} @endif 
                                                    @endforeach
                                                    value={{$sideEffect->id}}>{!!$sideEffect->sideEffect !!}</option>
                                                    @endforeach
                                                    
                                                    @foreach($sideEffects as $sideEffect)
                                                    <option value={{$sideEffect->id}}>{{$sideEffect->sideEffect}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-sm-6">
                                                <label  class="fnt" >Diagnosis</label>       
                                                <select id="diagnosisId" class="form-control"  name="diagnosisId" required>
                                                @foreach($diagnosiss as $diagnosis)
                                                    @foreach ($diagnosis->medicineUses as $item)
                                                    <option @if($item->id == $medicine->id) {!! 
                                                             'selected = "selected" ' !!} @endif 
                                                    @endforeach
                                                    value={{$diagnosis->id}}>{!!$diagnosis->diagnosis !!}</option>
                                                    @endforeach
                                                    @foreach($diagnosiss as $diagnosis)
                                                    <option value={{$diagnosis->id}}>{{$diagnosis->diagnosis}}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                        </div>     
                                            <div class="col-sm-6 offset-sm-6">
                                                <div class="form-row">
                                                    <div class="form-group ml-5 mt-3">
                                                        <center>
                                                        <label class="input-label">STATUS</label><br>
                                                        <div class="form-check form-check-inline ml-4">
                                                            <input type='radio' class="form-check-input" name='medicine_status' id="emptyStatusActive" value='1' @if ($medicine->medicine_status == 1) checked @endif>
                                                            <label class="form-check-label" for="emptyStatusActive">Active</label>
                                                        </div>
                                                        <div class="form-check form-check-inline ml-4">
                                                            <input type='radio' class="form-check-input" name='medicine_status' id="statusInactive" value='0' @if ($medicine->medicine_status == 0) checked @endif>
                                                            <label class="form-check-label" for="statusInactive">Inactive</label> 
                                                        </div>
                                                        </center>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                  
                                <div class="DivTemplate">
                                    <p class='DivHeaderText' style="font-size:9px;">ACTIONS</p>
                                    <div class="hr mb-2"></div> 
                                    <button type="submit" class="btn btn-primary btn-sm">SAVE</button>
                                    <button class="btn btn-outline-info waves-effect float-right btn-sm" type="button" onclick="window.location='{{route('medicine.show',$medicine->id)}}'">BACK</button>    
                                </div>
                            </div> 

                    </div>
                </div>              
         
      

      <script>
            $(document).ready(function () {
                //Crop image
                $image_crop = $('#image_demo').croppie({
                        enableExif: true,
                        viewport: {
                        width:200,
                        height:200,
                        type:'square' //circle
                        },
                        boundary:{
                        width:300,
                        height:300
                        }
                    });
                            
                    $('#medicinePhoto').on('change', function(){
                        var reader = new FileReader();
                        reader.onload = function (event) {
                        $image_crop.croppie('bind', {
                            url: event.target.result
                        }).then(function(){
                            console.log('jQuery bind complete');
                        });
                        }
                        reader.readAsDataURL(this.files[0]);
                        $('#uploadimageModal').modal('show');
                    });
                    
                    $('.crop_image').click(function(event){
                        $image_crop.croppie('result', {
                        type: 'canvas',
                        size: 'viewport'
                        }).then(function(response){
                        $('#Photo').attr('src', response);
                        $("#medicinePhotos").val(response);
                        $('#uploadimageModal').modal('hide');
                        })
                    });
           
            });
          
            $(function () {
                  $("#medicinePhoto").change(function () {
                      readURL(this);
                  });
              });
             
              function readURL(input) {
                  if (input.files && input.files[0]) {
                      var reader = new FileReader();
                      reader.onload = function (e) {
                          //alert(e.target.result);
                          $('#Photo').attr('src', e.target.result);
                      };
                      
                      reader.readAsDataURL(input.files[0]);
                  }
              }
          
              $(document).on('keydown', 'input[pattern]', function(e){
            var input = $(this);
            var oldVal = input.val();
            var regex = new RegExp(input.attr('pattern'), 'g');
          
            setTimeout(function(){
              var newVal = input.val();
              if(!regex.test(newVal)){
                input.val(oldVal); 
              }
            }, 0);
          });

            $(function()
            {
            $(".js-example-basic-multiple").select2();
            });

          </script>
@endsection