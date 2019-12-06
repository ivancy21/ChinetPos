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
                                                            <td>{{$medicine->name}}</td>
                                                        </tr>
                                                        
                                                        <tr class="fnt">
                                                            <td width="130px">Medicine Code</td>
                                                            <td>{{$medicine->productCode}}</td>
                                                        </tr>
                                                    
                                                        <tr class="fnt">
                                                            <td>Generic Name</td>
                                                            <td>{{$medicine->genericName}}</td>
                                                        </tr>
                                                        
                                                        <tr class="fnt">
                                                            <td>Company Name</td>
                                                            <td>{{$medicine->companyName}}</td>
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
                                                            <td>Side Effect</td>
                                                            <td>{{$medicine->sideEffects}}</td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                              
                           
                            

                        <div class="DivTemplate">
                            <p class='DivHeaderText' style="font-size:9px;">ACTIONS</p>
                            <div class="hr mb-2"></div> 
                            <button type="submit" class="btn btn-info btn-sm" onclick="window.location='{{route('medicine.edit',$medicine->id)}}'">EDIT</button>
                            <button class="btn btn-outline-info waves-effect float-right btn-sm" type="submit" onclick="window.location='{{route('medicine.index')}}'">BACK</button>           
                        </div>
                    </div>    
                </div>
                          
        </div>


@endsection