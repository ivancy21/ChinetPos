@extends('Layouts.master')
@section('content')

  <div class="container">
    <div class="col-sm-12">
        <div class="HeaderBanner rounded p-3" style="">
             <span class="HeaderBannerText">Pharmacy</span>
             <a  style="float:right; color:white; margin-right:4px; cursor: pointer;"  onclick="window.location='http://inventory.local/pharmacy/create'"  data-toggle="tooltip" title="ADD NEW PHARMACY"><i class="fas fa-plus fa-lg zoom"></i></a>                                          
             
        </div>

    

         
      <div class="CardDiv">
        <div class="row">
          <div class="col-sm-4 schposi2">
            <div class="row ml-1">

                <div style="width:100%;height:100%;">
                  <div class="cards zoom"  onclick="" style="cursor: pointer;">
                    <div class="image">
                      <img src="{{asset('images/1.jpg')}}" height="50px" width="90px" alt="" class="img-shadow card-img" style="border-radius: 10%;">
                      <img src="" height="50px" width="90px" alt="" class="img-shadow card-img">
                    </div>

                      <div class="container">
                        <div class="table-responsive">
                          <center>
                            <h6 style="color:green;" class="fnt">Pharma Reyes </h6>
                            <button type="submit" class="btn btn-primary btn-sm">Select</button>
                            <button type="submit" class="btn btn-primary btn-sm" onclick="window.location='http://inventory.local/pharmacy/edit'">Edit</button>   
                          </center>          
                        </div>  
                      </div>
                  </div>
                          <!--cards -->    
                </div>
                  <div class="float-right"> 
                  </div>
            </div>    
          </div>
        </div> 
      </div>
    </div>
  </div>
@endsection