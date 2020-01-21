@extends('Layouts.sidebar')
@section('contents')
    <div class="d-flex flex-column mb-4">
          <div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
              <span class="HeaderBannerText">Medicines</span>    
              
              
          </div>
          <div class="flex HeaderBody2">                                        
               <a  style="float:right; color:#059DC0; margin-right:4px; cursor: pointer;"  onclick="window.location='{{route('medicine.create')}}'"  data-toggle="tooltip" title="Add Medicine"><i class="fas fa-plus fa-2x zoom"></i></a>                                           
          </div>       
         
          <div class="CardDiv">
            <div class="row">
                  <div class="col-sm-8 schposi2">
                    <div class="row ml-1">
                                    {{-- latest --}}
                                        <form action="{{route('medicine.index')}}" method="GET" > <input type="submit" name="latest" class="btn btn-sm btn-primary ml-1" value="Latest" /> </form>
    
                                    {{-- oldest --}}
                                        <form action="{{route('medicine.index')}}" method="GET"> <input type="submit" name="oldest" class="btn btn-sm btn-primary ml-1" value="Oldest" /> </form>
    
                                    {{-- Active --}}
                                            <form action="{{route('medicine.index')}}" method="GET">
                                                  <button type="submit" name="Active" class="btn btn-sm btn-primary ml-1 dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" value="Active" >Active</button>
                                                <div class="dropdown-menu">
                                                    <form action="{{route('medicine.index')}}" method="GET">
                                                       <input type="submit" class="dropdown-item" name="activeAll" class="btn btn-sm btn-primary ml-1" value="All" />
                                                    </form>
                                                    <form action="{{route('medicine.index')}}" method="GET">
                                                        <input type="submit" class="dropdown-item" name="activeTablets" class="btn btn-sm btn-primary ml-1" value="Tablets" >
                                                    </form>
                                                    <form action="{{route('medicine.index')}}" method="GET">
                                                       <input type="submit" class="dropdown-item" name="activeBottles" class="btn btn-sm btn-primary ml-1" value="Bottles" >
                                                    </form>
                                                    <form action="{{route('medicine.index')}}" method="GET">
                                                        <input type="submit" class="dropdown-item" name="activeDrops" class="btn btn-sm btn-primary ml-1" value="Drops" />
                                                    </form>
                                                    <form action="{{route('medicine.index')}}" method="GET">
                                                        <input type="submit" class="dropdown-item" name="activeInhalers" class="btn btn-sm btn-primary ml-1" value="Inhalers" >
                                                    </form>
                                                    <form action="{{route('medicine.index')}}" method="GET">
                                                        <input type="submit" class="dropdown-item" name="activeInjections" class="btn btn-sm btn-primary ml-1" value="Injections" >
                                                    </form>
                                                    <form action="{{route('medicine.index')}}" method="GET">
                                                       <input type="submit" class="dropdown-item" name="activeCapsules" class="btn btn-sm btn-primary ml-1" value="Capsules" >
                                                    </form>
                                                </div>
                                              </form>
                             
                                              {{-- InActive --}}
                                              <form action="{{route('medicine.index')}}" method="GET">
                                                <button type="submit" name="Active" class="btn btn-sm btn-primary ml-1 dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" value="Active" >Inactive</button>
                                                 <div class="dropdown-menu">
                                                    <form action="{{route('medicine.index')}}" method="GET">
                                                        <input type="submit" class="dropdown-item" name="inactiveAll" class="btn btn-sm btn-primary ml-1" value="All" />
                                                    </form>
                                                    <form action="{{route('medicine.index')}}" method="GET">
                                                        <input type="submit" class="dropdown-item" name="inactiveTablets" class="btn btn-sm btn-primary ml-1" value="Tablets" >
                                                    </form>
                                                    <form action="{{route('medicine.index')}}" method="GET">
                                                        <input type="submit" class="dropdown-item" name="inactiveBottles" class="btn btn-sm btn-primary ml-1" value="Bottles" >
                                                    </form>
                                                    <form action="{{route('medicine.index')}}" method="GET">
                                                        <input type="submit" class="dropdown-item" name="inactiveDrops" class="btn btn-sm btn-primary ml-1" value="Drops" />
                                                    </form>
                                                    <form action="{{route('medicine.index')}}" method="GET">
                                                        <input type="submit" class="dropdown-item" name="inactiveInhalers" class="btn btn-sm btn-primary ml-1" value="Inhalers" >
                                                    </form>
                                                    <form action="{{route('medicine.index')}}" method="GET">
                                                        <input type="submit" class="dropdown-item" name="inactiveInjections" class="btn btn-sm btn-primary ml-1" value="Injections" >
                                                    </form>
                                                    <form action="{{route('medicine.index')}}" method="GET">
                                                        <input type="submit" class="dropdown-item" name="inactiveCapsules" class="btn btn-sm btn-primary ml-1" value="Capsules" >
                                                    </form>
                                                  </div>  
                                                </form>
                                              </div>
                   </div>
                                                  
                                                
                   <div class="col-sm-4">       
                          <div class="schposi">
                              <form action="{{route('medicine.index')}}" method="GET">
                                  <input type="text" name="search" placeholder="Search.." value='{{ request()->input('search') }}'>
                                  <button type="submit" class="sc"><i class="fa fa-search"></i></button>
                              </form>
                          </div>
                        </div>
                        </div>                   
                  
                       
    <div style="width:100%;height:100%;" >
        @foreach($pharmacyMedicine as $medicine)
        @if($medicine->medicine->medicine_status==1||$medicine->medicine->medicine_status==0)          
            <div class="cards zoom"  onclick="window.location='{{route('medicine.show', $medicine->medicine->id)}}'" style="cursor: pointer;">
                  <div class="image">
                      @if ($medicine->medicine->medicinePhoto != null)
                      <img src="{{ asset('images/medicinePhotos/'.$medicine->medicine->medicinePhoto) }}" height="50px" width="90px" alt="" class="img-shadow card-img">
                      @else
                      <img src="{{ asset('images/medicineicon.png') }}" height="50px" width="90px" alt="" class="img-shadow card-img">
                      @endif
                  </div>
                <div class="container" >
                      <div class="table-responsive" >
                        <center>
                                      @if($medicine->medicine->medicineSuppliers->sum('quantity')>0)
                                      @if($medicine->medicine->medicine_status==1)
                                      <h6 style="color:black;" class="fnt mt-2"><b> {{ucfirst(trans($medicine->medicine->brandName))}} ({{$medicine->medicine->dosage}})</b></h6>
                                      <h6 style="color:black;" class="fnt"> {{ucfirst(trans($medicine->medicine->genericName))}}</h6>
                                      <h6 style="color:green;" class="fnt">Avail: {{$medicine->medicine->medicineSuppliers->sum('quantity')}} {{$medicine->medicine->formulation->formulation}} left   </h6>
                                      @elseif($medicine->medicine->medicine_status==0)
                                      <h6 style="color:red;" class="fnt mt-2"><b> {{ucfirst(trans($medicine->medicine->brandName))}} ({{$medicine->medicine->dosage}})</b></h6>
                                      <h6 style="color:black;" class="fnt"> {{ucfirst(trans($medicine->medicine->genericName))}}</h6>
                                        <h6 style="color:green;" class="fnt">Avail: {{$medicine->medicine->medicineSuppliers->sum('quantity')}} {{$medicine->medicine->formulation->formulation}} left   </h6>      
                                      @endif
                                      @endif
                                      @if($medicine->medicine->medicineSuppliers->sum('quantity')<=0)
                                      @if($medicine->medicine->medicine_status==1)
                                      <h6 style="color:black;" class="fnt mt-2"><b> {{ucfirst(trans($medicine->medicine->brandName))}} ({{$medicine->medicine->dosage}})</b></h6>
                                      <h6 style="color:black;" class="fnt"> {{ucfirst(trans($medicine->medicine->genericName))}}</h6>
                                        <h6 style="color:red;" class="fnt">Avail: {{$medicine->medicine->medicineSuppliers->sum('quantity')}} </h6>
                                      @elseif($medicine->medicine->medicine_status==0)
                                      <h6 style="color:red;" class="fnt mt-2"><b> {{ucfirst(trans($medicine->medicine->brandName))}} ({{$medicine->medicine->dosage}})</b></h6>
                                      <h6 style="color:black;" class="fnt"> {{ucfirst(trans($medicine->medicine->genericName))}}</h6>
                                        <h6 style="color:red;" class="fnt">Avail: {{$medicine->medicine->medicineSuppliers->sum('quantity')}} </h6>
                                      @endif
                                      @endif   
                        </center>                                                   
                       </div>
                  </div>
              </div>
                <!--cards -->
                @endif
                @endforeach
    </div>
          <div class="float-right">
              {!! $medicines->appends(\Request::except('page'))->render() !!}
          </div> 
        </div>
 
@endsection