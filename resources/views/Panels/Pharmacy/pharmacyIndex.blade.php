@extends('Layouts.master')
@section('content')
  <div class="container">
    <div class="col-sm-12">
        <div class="HeaderBanner rounded p-3" style="">
             <span class="HeaderBannerText">Pharmacy</span>
             <a  style="float:right; color:white; margin-right:4px; cursor: pointer;"  onclick="window.location='{{route('pharmacy.create')}}'"  data-toggle="tooltip" title="ADD NEW PHARMACY"><i class="fas fa-plus fa-lg zoom"></i></a>                                          
             
        </div>
        <div style="width:100%;height:100%;" >
          @foreach($pharmacys as $pharmacy)
        <form action="{{route('selectPharmacy')}}" method="get">
          @if($pharmacy->pharmacy_status==1||$pharmacy->pharmacy_status==0)          
              <div class="cards zoom"   style="cursor: pointer;">
                    <div class="image">
                      @if ($pharmacy->pharmacyPhoto != null)  
                      <img src="{{ asset('images/pharmacyPhotos/'.$pharmacy->pharmacyPhoto) }}" height="50px" width="90px" alt="" class="img-shadow card-img">
                      @else
                      <img src="{{ asset('images/chinet.png') }}" height="50px" width="90px" alt="" class="img-shadow card-img">
                      @endif
                    </div>
                  <div class="container" >
                        <div class="table-responsive" >
                          <center>
                          <input type="hidden" name="pharmacyId" value="{{$pharmacy->id}}">
                            <h6 style="color:green;" class="fnt">{{$pharmacy->pharmacyName}} </h6>
                            <button type="submit" class="btn btn-primary btn-sm">Select</button>
                            <button type="submit" class="btn btn-primary btn-sm" >Edit</button>   
                          </center>                                                   
                         </div>
                    </div>
                </div>
                  <!--cards -->
                  @endif
                </form>         
                  @endforeach
      </div>
      

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