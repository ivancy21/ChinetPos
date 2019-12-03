@extends('Layouts.master')
@include('Layouts.cropImageModal')
@section('content')

  
<form class="form-horizontal" method="POST" action="{{route('medicine.store')}}">
    @csrf
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
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
                                                <img src="{{ asset('images/chinet.png') }}" size="250px" id="Photo"  alt="" class="img-fluid img-sizes img-shadow"
                                                alt="example placeholder">
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
                                        <div class="row mb-2">
                                            <div class="col">
                                                <label  class="fnt">Medicine Code</label>
                                                <input type="text" id="productCode" class="form-control" name="productCode" required>
                                            </div>
                                    
                                            <div class="col">
                                                <label  class="fnt">Medicine Name</label>
                                                <input type="text" id="name" class="form-control" name="name" required>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col">
                                                    <label  class="fnt">Category</label>
                                                    <input type="text" id="category" class="form-control" name="category" >
                                            </div>
                                    
                                            <div class="col">
                                                    <label  class="fnt">Selling Price</label>
                                                    <input type="text" id="sellingPrice" class="form-control" name="price"   pattern="^\d*(\.\d{0,2})?$"  title="Number only">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col">
                                                    <label  class="fnt">Generic Name</label>
                                                    <input type="text" id="genericName" class="form-control" name="genericName" required>
                                            </div>
                                    
                                        <div class="col">
                                                <label  class="fnt">Company Name</label>
                                                <input type="text" id="companyName" class="form-control" name="companyName" required >
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                        <div class="col-sm-6">
                                                <label  class="fnt">Side Effect</label>       
                                                <input type="text" id="effects" class="form-control" name="sideEffects" >
                                            </div> 
                                        </div>
                                </div>
                             
                            <div class="DivTemplate">
                                <p class='DivHeaderText' style="font-size:9px;">ACTIONS</p>
                                <div class="hr mb-2"></div> 
                                <button type="submit" class="btn btn-primary btn-sm" >SAVE</button>
                                <button class="btn btn-outline-info waves-effect float-right btn-sm" type="submit" onclick="window.location='{{route('medicine.index')}}'" >BACK</button>    
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