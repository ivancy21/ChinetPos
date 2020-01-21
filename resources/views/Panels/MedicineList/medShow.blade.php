@extends('Layouts.sidebar')
@section('contents')


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
                                    </div>
                                    <div class="flex HeaderBody">
                                           
                                      
                                        <div class="table-responsive">
                                                <table class="table table-borderless dataDisplayer">
                                                    <tbody>
                                                        
                                                        <tr class="fnt">
                                                            <td class>Medicine Name</td>
                                                        <td>{{ucfirst(trans($medicine->brandName))}} ({{$medicine->dosage}})</td>
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
                                                            <td>Retail Price</td>
                                                        <td>&#8369;{{ number_format($medicine->retailPrice,2)}}</td>
                                                        </tr>
                                                        
                                                        <tr class="fnt">
                                                            <td>Side Effects</td>
                                                            <td>@foreach($medicine->medicineSideEffects as $sideEffect)
                                                            {{$sideEffect->sideEffect->sideEffect}},
                                                            @endforeach</td>
                                                        </tr>
                                                        <tr class="fnt">
                                                            <td>Formulation</td>
                                                        <td>{{$medicine->formulation->formulation}}</td>
                                                        </tr>
                                                        </tr>
                                                        <tr class="fnt">
                                                            <td>Diagnosis</td>@foreach($medicineUse as $medicineUses)
                                                        <td>{{$medicineUses->diagnosis->diagnosis}}@endforeach</td>
                                                        </tr>
                                                        <tr class="fnt">
                                                                <td>Quantity</td>
                                                        <td>{{$medicine->medicineSuppliers->sum('quantity')}}</td>
                                                        </tr>
                                                        <tr class="fnt">
                                                            <td>Status</td>
                                                            @if($medicine->medicine_status == 1)
                                                            <td>Active</td>
                                                            @elseif($medicine->medicine_status == 0)
                                                            <td>Inactive</td>
                                                            @endif
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                            <div class="DivTemplate">
                                <p class='DivHeaderText' style="font-size:9px;">ACTIONS</p>
                                <div class="hr mb-2"></div> 
                                <div class="row">
                                <div class="col-sm-6 mt-1"> <button type="submit" class="btn btn-info btn-sm btn-block" onclick="window.location='{{route('suppliers.show', $medicine->id)}}'"><i class="fas fa-plus"></i> Add Stock</button></div>
                                <div class="col-sm-6 mt-1"> <button type="submit" class="btn btn-info btn-sm btn-block" onclick="window.location='{{route('medicineSuppliers.show', $medicine->id)}}'"><i class="far fa-eye"></i> View History</button></div>
                                </div>
    
                                <div class="row">
                                    <div class="col-sm-6 mt-1">  <button type="submit" class="btn btn-info btn-sm btn-block" onclick="window.location='{{route('medicine.edit',$medicine->id)}}'"><i class="fa fa-edit"></i> EDIT</button></div>
                                    <div class="col-sm-6 mt-1">   <button class="btn btn-outline-info waves-effect btn-sm btn-block" type="submit" onclick="window.location='{{route('medicine.index')}}'">BACK</button></div>
                                    </div>
                                {{-- <button type="submit" class="btn btn-info btn-sm" onclick="window.location='{{route('inventory.show', $medicine->id)}}'"> <i class="fa fa-edit"></i>Stock Management</button> --}}
                            </div>
                    </div>    
                </div>
                          
        </div>


@endsection