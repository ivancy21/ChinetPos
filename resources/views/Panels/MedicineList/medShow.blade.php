@extends('Layouts.master')
@section('content')


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
                                              </td>
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
                                                            <td>Cetirizine</td>
                                                        </tr>
                                                        
                                                        <tr class="fnt">
                                                            <td width="130px">Medicine Code</td>
                                                            <td>A115A1558</td>
                                                        </tr>
                                                    
                                                        <tr class="fnt">
                                                            <td>Generic Name</td>
                                                            <td>Cetiri</td>
                                                        </tr>
                                                        
                                                        <tr class="fnt">
                                                            <td>Company Name</td>
                                                            <td>ivanSolution</td>
                                                        </tr>
                                                            
                                                        <tr class="fnt">
                                                            <td>Category</td>
                                                            <td>Allergy</td>
                                                        </tr>
                                                        
                                                        <tr class="fnt">
                                                            <td>Selling Price</td>
                                                            <td>20</td>
                                                        </tr>
                                                        
                                                        <tr class="fnt">
                                                            <td>Side Effect</td>
                                                            <td>none</td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                              
                           
                            

                        <div class="DivTemplate">
                            <p class='DivHeaderText' style="font-size:9px;">ACTIONS</p>
                            <div class="hr mb-2"></div> 
                            <a type="submit" class="btn btn-info btn-sm" href="/medEdit">EDIT</a>
                            <input class="btn btn-outline-info waves-effect float-right btn-sm" type="button"  value="BACK">           
                        </div>
                    </div>    
                </div>
                          
        </div>


@endsection