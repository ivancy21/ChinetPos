@extends('Layouts.sidebar')
@section('contents')

<form class="form-horizontal" method="POST" action="{{route('sideEffects.store')}}">
    @csrf
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

        <div class="container">         
            <div class="row">
                <div class="col-sm-4">
                        <div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
                                <span class="HeaderBannerText">Picture</span>
                        </div>
                        <div class="flex HeaderBody">
                                <div class="file-field">
                                        <div class="z-depth-1-half mb-1">
                                            @if ($medicine->medicinePhoto != null)
                                            <img src="{{ asset('images/medicinePhotos/'.$medicine->medicinePhoto) }}" size="250px"  class="img-fluid img-sizes img-shadow" alt="">
                                            @else
                                            <img src="{{ asset('images/medicineicon.png') }}" size="250px"  class="img-fluid img-sizes img-shadow" alt="" >
                                            @endif 
                                        </div>
                                </div>  
                         </div>
                </div>
                <div class="col-sm-8">
                                    <div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
                                            <span class="HeaderBannerText">Details</span>
                                            <button type="submit" class="btn btn-success btn-sm HeaderBannerText" style="margin-left:480px; background-color:#7BA098;" onclick="window.location='{{route('inventory.show', $medicine->id)}}'"> <i class="fa fa-edit"></i> Stock Management</button>
                 
                                    </div>
                                    <div class="flex HeaderBody">
                                           
                                      
                                        <div class="table-responsive">
                                                <table class="table table-borderless dataDisplayer">
                                                    <tbody>
                                                        
                                                        <tr class="fnt">
                                                            <td class>Medicine Name</td>
                                                            <td>{{ucfirst(trans($medicine->name))}}</td>
                                                        </tr>
                                                        
                                                        <tr class="fnt">
                                                            <td width="130px">Medicine Code</td>
                                                            <td>{{$medicine->productCode}}</td>
                                                        </tr>
                                                    
                                                        <tr class="fnt">
                                                            <td>Generic Name</td>
                                                            <td>{{ucfirst(trans($medicine->genericName))}}</td>
                                                        </tr>
                                                            
                                                        <tr class="fnt">
                                                            <td>Category</td>
                                                            <td>{{$medicine->category}}</td>
                                                        </tr>
                                                        
                                                        <tr class="fnt">
                                                            <td>Selling Price</td>
                                                            <td>&#8369;{{ number_format($medicine->price,2)}}</td>
                                                        </tr>
                                                        
                                                        
                                                        <tr class="fnt">
                                                                <td>Quantity</td>
                                                        <td>{{$medicine->pharmacyMedicines->sum('quantity')}} {{$medicine->type}}</td>
                                                        </tr>
                                                        <tr class="fnt">
                                                            <td>Status</td>
                                                            @if($medicine->medicine_status == 1)
                                                            <td>Active</td>
                                                            @elseif($medicine->medicine_status == 0)
                                                            <td>Inactive</td>
                                                            @endif
                                                        </tr>
                                                        <label  class="fnt" >Side Effect</label>       
                                                        <input type="hidden" id="medicineId" class="form-control" value="{{$medicine->id}}" name="medicineId">
                                               
                                                        <select id="sideEffectsId" class="form-control"  name="sideEffectsId">
                                                        @foreach($sideEffects as $sideEffect)
                                                        <option value="{{$sideEffect->id}}">{{$sideEffect->sideEffects}}</option>
                                                                @endforeach
                                                    
                                                        </select>
                                                    
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="DivTemplate">
                                            <p class='DivHeaderText' style="font-size:9px;">ACTIONS</p>
                                            <div class="hr mb-2"></div> 
                                            <button type="submit" class="btn btn-primary" >SAVE</button>
                                            <input class="btn btn-outline-info waves-effect float-right" type="button" onclick="window.location='{{route('medicine.index')}}'" value="BACK">    
                                        </div>
                                            </div>    
                </div>
                           
        </div>
        


@endsection