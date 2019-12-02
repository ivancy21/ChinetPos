@extends('Layouts.master')
@section('content')

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
                                                <img src="{{ asset('images/medicineicon.png') }}" size="250px"  id="Photo" class="img-fluid img-sizes img-shadow" alt="">
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                    <div class="btn btn-mdb-color btn-rounded float-left">
                                                        <span>Choose file</span>
                                                            
                                                        <input type="file" id='medicinePhoto' 
                                                        class="form-control"
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
                                        <div class="col">
                                            <label  class="fnt">Medicine Code</label>
                                        <input type="text" id="productCode" class="form-control" name="productCode"  required>
                                        </div>
                                
                                        <div class="col">
                                            <label  class="fnt">Medicine Name</label>
                                            <input type="text" id="name" class="form-control" name="name"  required>
                                        </div>
                                    </div>
                                    <div class="row  mb-2">
                                        <div class="col">
                                                <label  class="fnt">Category</label>
                                                <input type="text" id="category" class="form-control" name="category"  >
                                        </div>
                                
                                        <div class="col">
                                                <label  class="fnt">Selling Price</label>
                                                <input type="text" id="sellingPrice" class="form-control" name="price" pattern="^\d*(\.\d{0,2})?$" required >
                                        </div>
                                    </div>
                                    <div class="row  mb-2">
                                        <div class="col">
                                                <label  class="fnt">Generic Name</label>
                                                <input type="text" id="genericName" class="form-control" name="genericName"  >
                                        </div>
                                
                                    <div class="col">
                                            <label  class="fnt">Company Name</label>
                                            <input type="text" id="companyName" class="form-control" name="companyName"  >
                                        </div>
                                    </div>
                                    <div class="row  mb-2">
                                    <div class="col-sm-6">
                                            <label  class="fnt">Side Effect</label>       
                                            <input type="text" id="effects" class="form-control" name="sideEffects"  >
                                    </div>
                                    </div>
                            </div>
                        
                                <div class="DivTemplate">
                                    <p class='DivHeaderText' style="font-size:9px;">ACTIONS</p>
                                    <div class="hr mb-2"></div> 
                                    <button type="submit" class="btn btn-primary btn-sm">SAVE</button>
                                    <input class="btn btn-outline-info waves-effect float-right btn-sm" type="button"  value="BACK">    
                                </div>

                    </div>



                </div>              
         </div>
      </div>



@endsection