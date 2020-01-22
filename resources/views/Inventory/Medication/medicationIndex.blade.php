
@extends('Inventory.InventoryMaster.inventoryMaster')
@section('Inventory')
       
<div class="CardDiv">
    <div style="background-color:#C4DBE0; width:100%;height:50px; border-radius:5px; padding-top:6px;">
    <div class="row">
          <div class="col-sm-8 schposi2">
            <div class="row ml-1">
                            {{-- latest --}}
                            <form action="{{route('medicine.index')}}" method="GET" > <input type="submit" name="latest" class="btn btn-sm btn-primary ml-1" value="Latest" /> </form>
    
                            {{-- oldest --}}
                            <form action="{{route('medicine.index')}}" method="GET"> <input type="submit" name="oldest" class="btn btn-sm btn-primary ml-1" value="Oldest" /> </form>

                            {{-- Active --}}
                            <form action="{{route('medicine.index')}}" method="GET"><input type="submit" name="Active" class="btn btn-sm btn-primary ml-1"  value="Active" ></form>
                            
                            {{-- Inactive --}}
                            <form action="{{route('medicine.index')}}" method="GET"><input type="submit" name="Inactive" class="btn btn-sm btn-primary ml-1"  value="Inactive" ></form>
                                       
                                       
                                      </div>
           </div>
                                          
                                        
           <div class="col-sm-4">       
                  <div class="schposi">
          <a  style="float:right; color:#059DC0; margin-right:5px;margin-top:3px; cursor: pointer;"  onclick="window.location='{{route('medicine.create')}}'" data-toggle="tooltip" title="Add Medicine"><i class="fas fa-plus fa-2x zoom"></i></a>                                           
                    <input type="text" name="search" placeholder="Search.." >
                        <button type="submit" class="sc" style="color:#059DC0;"><i class="fa fa-search"></i></button>
                             
                </div>
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

@endSection