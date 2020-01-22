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
                                            @if ($nonMedication->nonMedicationPhoto != null)
                                            <img src="{{ asset('images/medicinePhotos/'.$nonMedication->nonMedicationPhoto) }}" size="250px"  class="img-fluid img-sizes img-shadow" alt="">
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
                                                            <td class> Name</td>
                                                        <td>{{ucfirst(trans($nonMedication->brandName))}}</td>
                                                        </tr>
                                                        
                                                        <tr class="fnt">
                                                            <td width="130px">Product Code</td>
                                                            <td>{{$nonMedication->productCode}}</td>
                                                        </tr>
                                                    
                                                        
                                                        <tr class="fnt">
                                                            <td>Retail Price</td>
                                                        <td>&#8369;{{ number_format($nonMedication->retailPrice,2)}}</td>
                                                        </tr>
                                                        
                                                        <tr class="fnt">
                                                            <td>Status</td>
                                                            @if($nonMedication->nonMedication_status == 1)
                                                            <td>Active</td>
                                                            @elseif($nonMedication->nonMedication_status == 0)
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
                                <div class="col-sm-6 mt-1"> <button type="submit" class="btn btn-info btn-sm btn-block" onclick="window.location='{{route('suppliers.show', $nonMedication->id)}}'"><i class="fas fa-plus"></i> Add Stock</button></div>
                                <div class="col-sm-6 mt-1"> <button type="submit" class="btn btn-info btn-sm btn-block" onclick="window.location='{{route('nonMedicationSuppliers.show', $nonMedication->id)}}'"><i class="far fa-eye"></i> View History</button></div>
                                </div>
    
                                <div class="row">
                                    <div class="col-sm-6 mt-1">  <button type="submit" class="btn btn-info btn-sm btn-block" onclick="window.location='{{route('nonMedication.edit',$nonMedication->id)}}'"><i class="fa fa-edit"></i> EDIT</button></div>
                                    <div class="col-sm-6 mt-1">   <button class="btn btn-outline-info waves-effect btn-sm btn-block" type="submit" onclick="window.location='{{route('nonMedication.index')}}'">BACK</button></div>
                                    </div>
                                {{-- <button type="submit" class="btn btn-info btn-sm" onclick="window.location='{{route('inventory.show', $nonMedication->id)}}'"> <i class="fa fa-edit"></i>Stock Management</button> --}}
                            </div>
                    </div>    
                </div>
                          
        </div>


@endsection