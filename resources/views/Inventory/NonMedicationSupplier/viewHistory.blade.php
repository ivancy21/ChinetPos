@extends('Layouts.sidebar')
@section('contents')


      

        <div class="row">
               <div class="col-sm-3">
                   <div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
                           <span class="HeaderBannerText">Picture</span>
                   </div>
                   <div class="flex HeaderBody "> 
                           <form class="md-form">
                                   <div class="file-field ml-2">
                                        <div class="z-depth-1-half mb-1">
                                                @if ($nonMedication->nonMedicationPhoto != null)
                                                <img src="{{ asset('images/medicinePhotos/'.$nonMedication->nonMedicationPhoto) }}" size="250px"  class="img-fluid img-sizes img-shadow" alt="">
                                                @else
                                                <img src="{{ asset('images/medicineicon.png') }}" size="250px"  class="img-fluid img-sizes img-shadow" alt="" >
                                                @endif 
                                            </div>
                                            <div class="table-responsive">
                                                <p style="margin-top:5px; color:black;" class="text-center"><b><b> {{ucfirst(trans($nonMedication->brandName))}}</b></b></p>
                                            </div>
                                    </div>
                           </form>
                       </div>
               </div>
    

    <div class="col-sm-9">
                    <div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
                            <span class="HeaderBannerText">Inventory</span>
                            <a  style="float:right;" onclick="window.location='{{route('suppliers.show', $nonMedication->id)}}'" class="zoom" data-toggle="tooltip" title="Add nonMedication"><i class="fas fa-plus fa-lg "></i> Add Stocks</a>                                           
     
                    </div>
                    <div class="flex HeaderBody">   
                            <div class="table-responsive">
                                    <table class="table table-hover" id="TblSorter1" cellspacing="0" width="100%">
                                        <thead  class="thead-bg table-bordered">
                                            <tr class="text-center">
                                                    <th class="th-sm tblheadfont1"> Supplier </th>
                                                    <th class="th-sm tblheadfont1">Lot Number </th>
                                                    <th class="th-sm tblheadfont1">Purchased Price </th>
                                                    <th class="th-sm tblheadfont1"> Received Date </th>
                                                    <th class="th-sm tblheadfont1">Manufactured Date </th>
                                                    <th class="th-sm tblheadfont1">Expiration Date </th>
                                                    <th class="th-sm tblheadfont1" >Quantity </th>
                                            </tr>
                                        </thead>
                                            <tbody>
                                                @foreach($nonMedicationSuppliers as $nonMedicationSupplier)
                                                <tr class="text-center highlight">                                 
                                                <td class="cnterAlgn">{{$nonMedicationSupplier->supplier->suppliersName}}</td>
                                                <td class="cnterAlgn">{{$nonMedicationSupplier->lotNumber}}</td>
                                                <td class="cnterAlgn">&#8369;{{ number_format($nonMedicationSupplier->purchasedPrice,2)}}</td>
                                                <td class="cnterAlgn">{{$nonMedicationSupplier->receivedMonth}}-{{$nonMedicationSupplier->receivedDay}}-{{$nonMedicationSupplier->receivedYear}}</td>
                                                <td class="cnterAlgn">{{$nonMedicationSupplier->manufacturedMonth}}-{{$nonMedicationSupplier->manufacturedDay}}-{{$nonMedicationSupplier->manufacturedYear}}</td>
                                                <td class="cnterAlgn">{{$nonMedicationSupplier->expirationMonth}}-{{$nonMedicationSupplier->expirationDay}}-{{$nonMedicationSupplier->expirationYear}}</td>
                                                    <td class="cnterAlgn">{{$nonMedicationSupplier->quantity}}</td>
                                                </tr>
                                               @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                    </div>
                <div class="DivTemplate">
                        <p class='DivHeaderText' style="font-size:9px;">ACTIONS</p>
                        <div class="hr mb-2"></div> 
                        <button class="btn btn-outline-info waves-effect float-right btn-sm" type="submit" onclick="window.location='{{route('nonMedication.show',$nonMedication->id)}}'">BACK</button>           
                    </div>
                </div>
            </div>
      
    

<script>

    $(document).ready( function () {
    $('#TblSorter1').DataTable();
    });

</script>

@endsection