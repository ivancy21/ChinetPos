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
                                                @if ($medicine->medicinePhoto != null)
                                                <img src="{{ asset('images/medicinePhotos/'.$medicine->medicinePhoto) }}" size="250px"  class="img-fluid img-sizes img-shadow" alt="">
                                                @else
                                                <img src="{{ asset('images/medicineicon.png') }}" size="250px"  class="img-fluid img-sizes img-shadow" alt="" >
                                                @endif 
                                            </div>
                                            <div class="table-responsive">
                                                <p style="margin-top:5px; color:black;" class="text-center"><b><b> {{ucfirst(trans($medicine->brandName))}}</b> ({{$medicine->genericName}})</b></p>
                                            </div>
                                    </div>
                           </form>
                       </div>
               </div>
    

    <div class="col-sm-9">
                    <div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
                            <span class="HeaderBannerText">History</span>
                            <a  style="float:right;" onclick="window.location='{{route('suppliers.show', $medicine->id)}}'" class="zoom" data-toggle="tooltip" title="Add Medicine"><i class="fas fa-plus fa-lg "></i> Add Stocks</a>                                           
     
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
                                                @foreach($medicineSuppliers as $medicineSupplier)
                                                <tr class="text-center highlight">                                 
                                                <td class="cnterAlgn">{{$medicineSupplier->supplier->suppliersName}}</td>
                                                <td class="cnterAlgn">{{$medicineSupplier->lotNumber}}</td>
                                                <td class="cnterAlgn">&#8369;{{ number_format($medicineSupplier->purchasedPrice,2)}}</td>
                                                <td class="cnterAlgn">{{$medicineSupplier->receivedMonth}}-{{$medicineSupplier->receivedDay}}-{{$medicineSupplier->receivedYear}}</td>
                                                <td class="cnterAlgn">{{$medicineSupplier->manufacturedMonth}}-{{$medicineSupplier->manufacturedDay}}-{{$medicineSupplier->manufacturedYear}}</td>
                                                <td class="cnterAlgn">{{$medicineSupplier->expirationMonth}}-{{$medicineSupplier->expirationDay}}-{{$medicineSupplier->expirationYear}}</td>
                                                    <td class="cnterAlgn">{{$medicineSupplier->quantity}}</td>
                                                </tr>
                                               @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                    </div>
                <div class="DivTemplate">
                        <p class='DivHeaderText' style="font-size:9px;">ACTIONS</p>
                        <div class="hr mb-2"></div> 
                        <button class="btn btn-outline-info waves-effect float-right btn-sm" type="submit" onclick="window.location='{{route('medicine.show',$medicine->id)}}'">BACK</button>           
                    </div>
                </div>
            </div>
      
    

<script>

    $(document).ready( function () {
    $('#TblSorter1').DataTable();
    });

</script>

@endsection