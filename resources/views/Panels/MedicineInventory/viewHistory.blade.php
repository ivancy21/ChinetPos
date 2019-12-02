@extends('Layouts.master')
@section('content')


      
<div class="container">
        <div class="row">
               <div class="col-sm-4">
                   <div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
                           <span class="HeaderBannerText">Picture</span>
                   </div>
   
                   <div class="flex HeaderBody"> 
                           <form class="md-form">
                                   <div class="file-field">
                                     <div class="z-depth-1-half mb-1">
                                       {{-- Photo Insertion --}}
                                         
                                           <img src="{{ asset('images/chinet.png') }}" size="200px" class="img-fluid img-sizes img-shadow" alt="">
                                         
                                     </div>      
                                     <p style="margin-top:5px; color:black;" class="text-center"><b>Cetirizine</b></p>
                                     <p style="margin-top:-17px; color:black;" class="text-center">A115A1558</p>                
                                   </div>
                           </form>
                       </div>
               </div>
    

    <div class="col-sm-8">
                    <div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
                            <span class="HeaderBannerText">History</span>
                    </div>
                    <a  style="float:right; color:#00a1db;"  data-toggle="tooltip" title="Add Medicine"><i class="fas fa-plus fa-2x mt-1 mr-2 "></i></a>                                            
        
                    <div class="flex HeaderBody"> 
                            <div class="table-responsive">
                                    <table class="table table-image table-hover" id="TblSorter1" cellspacing="0" width="100%">
                                        <thead  class="thead-bg table-bordered">
                                            <tr class="text-center">
                                                    <th class="th-sm tblheadfont1">Purchased Price </th>
                                                    <th class="th-sm tblheadfont1">Manufactured Date </th>
                                                    <th class="th-sm tblheadfont1">Expiration Date </th>
                                                    <th class="th-sm tblheadfont1"> Received Date </th>
                                                    <th class="th-sm tblheadfont1" >Quantity </th>
                                            </tr>
                                        </thead>
                    
                                            <tbody>
                                     
                                                <tr class="text-center highlight">                                 
                                                        <td class="cnterAlgn">&#8369; 20</td>
                                                        <td class="cnterAlgn">dec 31 1998</td>
                                                        <td class="cnterAlgn">dec 31 1998</td>
                                                        <td class="cnterAlgn">dec 31 1998</td>
                                                        <td class="cnterAlgn">500</td>
                                                </tr>
                                              
                                     
                                            </tbody>
                                            
                                        </table>
                                    </div>


                    </div>



                <div class="DivTemplate">
                        <p class='DivHeaderText' style="font-size:9px;">ACTIONS</p>
                        <div class="hr mb-2"></div> 
                        <input class="btn btn-outline-info waves-effect float-right" type="button" value="BACK">    
                    </div>
                </div>
            </div>
        </div>
    

<script>

    $(document).ready( function () {
    $('#TblSorter1').DataTable();
    });

</script>

@endsection