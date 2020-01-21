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
                                            <img src="{{ asset('images/medicineicon.png') }}" size="250px"  class="img-fluid img-sizes img-shadow" alt="" >
                                          
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
                                                        <td>asd</td>
                                                        </tr>
                                                        
                                                        <tr class="fnt">
                                                            <td width="130px">Medicine Code</td>
                                                            <td>asd</td>
                                                        </tr>
                                                    
                                                        <tr class="fnt">
                                                            <td>Generic Name</td>
                                                            <td>asd</td>
                                                        </tr>
                                                        
                                                        <tr class="fnt">
                                                            <td>Retail Price</td>
                                                        <td>&#8369;asd</td>
                                                        </tr>
                                                        
                                                        <tr class="fnt">
                                                            <td>Side Effects</td>
                                                            <td>asdasd</td>
                                                        </tr>
                                                        <tr class="fnt">
                                                            <td>Formulation</td>
                                                        <td>asd</td>
                                                        </tr>
                                                        </tr>
                                                        <tr class="fnt">
                                                            <td>Diagnosis</td>
                                                        <td>asd@endforeach</td>
                                                        </tr>
                                                        <tr class="fnt">
                                                                <td>Quantity</td>
                                                        <td>asd</td>
                                                        </tr>
                                                        <tr class="fnt">
                                                            <td>Status</td>
                                                          
                                                            <td>Active</td>    
                                                            <td>Inactive</td>
                                                           
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                            <div class="DivTemplate">
                                <p class='DivHeaderText' style="font-size:9px;">ACTIONS</p>
                                <div class="hr mb-2"></div> 
                                <div class="row">
                                <div class="col-sm-6 mt-1"> <button type="submit" class="btn btn-info btn-sm btn-block" ><i class="fas fa-plus"></i> Add Stock</button></div>
                                <div class="col-sm-6 mt-1"> <button type="submit" class="btn btn-info btn-sm btn-block" ><i class="far fa-eye"></i> View History</button></div>
                                </div>
    
                                <div class="row">
                                    <div class="col-sm-6 mt-1">  <button type="submit" class="btn btn-info btn-sm btn-block" ><i class="fa fa-edit"></i> EDIT</button></div>
                                    <div class="col-sm-6 mt-1">   <button class="btn btn-outline-info waves-effect btn-sm btn-block" type="submit" >BACK</button></div>
                                    </div>
                                {{-- <button type="submit" class="btn btn-info btn-sm" onclick="window.location='{{route('inventory.show', $medicine->id)}}'"> <i class="fa fa-edit"></i>Stock Management</button> --}}
                            </div>
                    </div>    
                </div>
                          
        </div>


@endsection