@extends('Layouts.sidebar')
@include('Layouts.cropImageModal')
@section('contents')



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
                                        <span class="HeaderBannerText">Edit Details</span>
                                </div>
                                <div class="flex HeaderBody">
                                    <div class="row  mb-2">
                                        <div class="col">
                                            <label  class="fnt">Medicine Code</label>
                                            <input type="text" required class="form-control input{{ $errors->has('productCode') ? ' is-invalid' : '' }}"value="{{$medicine->productCode}}" name="productCode" tabindex="14">
                                            @if ($errors->has('productCode'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>The Product Code is already Existed!</strong>
                                            </span>
                                            @endif
                                        </div>
                                
                                        <div class="col">
                                            <label  class="fnt">Medicine Name</label>
                                            <input type="text" required class="form-control input{{ $errors->has('name') ? ' is-invalid' : '' }}"  value="{{$medicine->name}}" name="name" tabindex="14">
                                            @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>The Medicine Name is already Existed!</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row  mb-2">
                                        <div class="col">
                                                <label  class="fnt">Category</label>
                                                <input type="text" id="category" class="form-control"  value="{{$medicine->category}}" name="category"  >
                                        </div>
                                        <div class="col">
                                                <label  class="fnt">Medicine Type</label>
                                        <select type="text" id="type" class="form-control" name="type" >
                                                        <option>{{$medicine->type}}</option>
                                                        <option>Tablets</option>
                                                        <option>Bottles</option>
                                                        <option>Drops</option>
                                                        <option>Inhalers</option>
                                                        <option>Injections</option>
                                                        <option>Capsules</option>
                                                </select>
                                        </div>
                                        </div>
                                    <div class="row  mb-2">
                                        <div class="col">
                                                <label  class="fnt">Generic Name</label>
                                                <input type="text" id="genericName" class="form-control" name="genericName"  value="{{$medicine->genericName}}"  >
                                        </div>
                                        <div class="col-sm-6">
                                                <label  class="fnt">Side Effect</label>       
                                                <select type="text" id="sideEffects" class="form-control" name="sideEffects">
                                                        <option>Constipation</option>
                                                        <option>Skin Rashes</option>
                                                        <option>Diarrhea</option>
                                                        <option>Dizziness</option>
                                                        <option>Dry mouth</option>
                                                        <option>Headache</option>
                                                        <option>Insomnia</option>
                                                        <option>Nausea</option>
                                                        
                                                </select>
                                        </div> 
                                   </div>
                                    <div class="row mb-2">
                                            <div class="col-sm-6">
                                                    <label  class="fnt">Selling Price</label>
                                                    <input type="text" id="sellingPrice" class="form-control" name="price"   pattern="^\d*(\.\d{0,2})?$"  value="{{$medicine->price}}" title="Number only">
                                                </div>
                                            </div>
                                    
                                    <center>
                                    <div class="form-row">
                                        <div class="form-group col-sm-12">
                                            <label class="input-label">STATUS</label><br>
                                            <div class="form-check form-check-inline ml-4">
                                                <input type='radio' class="form-check-input" name='medicine_status' id="emptyStatusActive" value='1' @if ($medicine->medicine_status == 1) checked @endif>
                                                <label class="form-check-label" for="emptyStatusActive">Active</label>
                                            </div>
                                            <div class="form-check form-check-inline ml-4">
                                                <input type='radio' class="form-check-input" name='medicine_status' id="statusInactive" value='0' @if ($medicine->medicine_status == 0) checked @endif>
                                                <label class="form-check-label" for="statusInactive">Inactive</label> 
                                            </div>
                                        </div>
                                    </div>
                                    </center>
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
          </script>
@endsection