@extends('Layouts.master')
@section('content')

<div class="container">

    <div class="d-flex flex-column mb-4">
        <div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
             <span class="HeaderBannerText">Medicines</span>
              
        </div>
        <div class="flex HeaderBody2">
                <a  style="float:right; color:#059DC0; margin-right:4px;" href="/medCreate"  data-toggle="tooltip" title="Add Medicine"><i class="fas fa-plus fa-lg "></i></a>                                           
        </div>       
         
       <div class="CardDiv">
  
        <div class="row">
          <div class="col-sm-4">
               <input type="submit" name="latest" class="btn btn-sm btn-primary" value="Latest" />
               <input type="submit" name="oldest" class="btn btn-sm btn-primary" value="Oldest" />
             <input type="submit" name="A-Z" class="btn btn-sm btn-primary" value="A-Z" />
             <input type="submit" name="Z-A" class="btn btn-sm btn-primary" value="Z-A" >
            </div>
      
        
              <div class="col-sm-4" style="margin-left: 0.5em;">
                 <input type="text" name="search"/>
                 <input type="submit" class="btn btn-sm btn-primary" value="Search"/>
              </div>
          
         </div>




      <div class="cards">
          <div class="image">
              <img src="{{ asset('images/medicineicon.png') }}" height="50px" width="90px" alt="" class="img-shadow card-img">
          </div>
         <div class="container">
           <div class="table-responsive">
           <center>
           <h6 style="color:black;" class="fnt mt-2"><b>Biogesic</h6>
                    <h6 style="color:black;" class="fnt">12312321</h6>
                    <a type="button" class="btn btn-info btn-sm" href="/medShow">Select</a>
           </center>  
          </div>
          </div>
        </div>
          <!--cards -->
          
            
  </div>
      </div>
    </div>
@endsection