@extends('Layouts.sidebar')
@section('contents')

<div class="container">

    <div class="d-flex flex-column mb-4">
        <div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
             <span class="HeaderBannerText">Medicines</span>
              
        </div>
        <div class="flex HeaderBody2">
            <a class="ml-3" href="{{route('inventory.index')}}" >History</a>                                            
                <a  style="float:right; color:#059DC0; margin-right:4px;" onclick="window.location='{{route('medicine.create')}}'"  data-toggle="tooltip" title="Add Medicine"><i class="fas fa-plus fa-lg zoom"></i></a>                                           
        </div>       
         
       <div class="CardDiv">
  
        <div class="row">
          <div class="col-sm-4 schposi2">
              <div class="row ml-1">
            <form action="{{route('medicine.index')}}" method="GET" >
              <input type="submit" name="latest" class="btn btn-sm btn-primary ml-1" value="Latest" />
          </form>
          <form action="{{route('medicine.index')}}" method="GET">
            <input type="submit" name="oldest" class="btn btn-sm btn-primary ml-1" value="Oldest" />
        </form>
        <form action="{{route('medicine.index')}}" method="GET">
          <input type="submit" name="A-Z" class="btn btn-sm btn-primary ml-1" value="A-Z" />
        </form>
        <form action="{{route('medicine.index')}}" method="GET">
          <input type="submit" name="Z-A" class="btn btn-sm btn-primary ml-1" value="Z-A" >
        </form>
      </div>
            </div>
      
        
              <div class="schposi">
                  <form action="{{route('medicine.index')}}" method="GET">
                      <input type="text" name="search" style="width:190px;" value='{{ request()->input('search') }}'/>
                      <input type="submit" class="btn btn-sm btn-primary float-right" value="Search"/>
                  </form>
              </div>
          
         </div>


     <div style="width:100%;height:100%;">
  @foreach($medicines as $medicine)
      <div class="cards zoom"  onclick="window.location='{{route('medicine.show', $medicine->id)}}'" style="cursor: pointer;">
          <div class="image">
            @if ($medicine->medicinePhoto != null)
            <img src="{{ asset('images/medicinePhotos/'.$medicine->medicinePhoto) }}" height="50px" width="90px" alt="" class="img-shadow card-img">
            @else
            <img src="{{ asset('images/medicineicon.png') }}" height="50px" width="90px" alt="" class="img-shadow card-img">
            @endif
          </div>
         <div class="container">
           <div class="table-responsive">
           <center>
           <h6 style="color:black;" class="fnt mt-2"><b> {{ucfirst(trans($medicine->name))}}</b></h6>
                    <h6 style="color:black;" class="fnt"> {{$medicine->genericName}}</h6>
                    @if($medicine->pharmacyMedicines->sum('quantity')>0)
                    @if($medicine->medicine_status==1)
                    <h6 style="color:green;" class="fnt">Stocks: {{$medicine->pharmacyMedicines->sum('quantity')}} ( Active )</h6>
                    @elseif($medicine->medicine_status==0)
                    <h6 style="color:red;" class="fnt">Stocks: {{$medicine->pharmacyMedicines->sum('quantity')}} ( Inactive )</h6>
                    @endif
                    @endif


                    @if($medicine->pharmacyMedicines->sum('quantity')<=0)
                    @if($medicine->medicine_status==1)
                    <h6 style="color:red;" class="fnt">Stocks: {{$medicine->pharmacyMedicines->sum('quantity')}} ( Active )</h6>
                    @elseif($medicine->medicine_status==0)
                    <h6 style="color:red;" class="fnt">Stocks: {{$medicine->pharmacyMedicines->sum('quantity')}} ( Inactive )</h6>
                    @endif
                    @endif
    
            </center>    
          </div>
          </div>
        </div>
          <!--cards -->
          @endforeach
      </div>
          <div class="float-right">
              {!! $medicines->appends(\Request::except('page'))->render() !!}
            </div>
          

         
  </div>
      </div>
    </div>
@endsection