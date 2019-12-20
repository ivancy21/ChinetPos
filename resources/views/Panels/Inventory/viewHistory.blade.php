@extends('Layouts.sidebar')
@section('contents')


      
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
                                                @if ($medicine->medicinePhoto != null)
                                                <img src="{{ asset('images/medicinePhotos/'.$medicine->medicinePhoto) }}" size="250px"  class="img-fluid img-sizes img-shadow" alt="">
                                                @else
                                                <img src="{{ asset('images/medicineicon.png') }}" size="250px"  class="img-fluid img-sizes img-shadow" alt="" >
                                                @endif 
                                            </div>
                                     <p style="margin-top:5px; color:black;" class="text-center"><b><b> {{ucfirst(trans($medicine->name))}}</b> ({{$medicine->genericName}})</b></p>
                                     <p style="margin-top:-17px; color:black;" class="text-center">{{$medicine->companyName}}</p>                
                                   </div>
                           </form>
                       </div>
               </div>
    

    <div class="col-sm-8">
                    <div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
                            <span class="HeaderBannerText">History</span>
                            <a  style="float:right;" onclick="window.location='{{route('pharmacyMedicine.show', $medicine->id)}}'"  data-toggle="tooltip" title="Add Medicine"><i class="fas fa-plus fa-lg zoom"></i></a>                                           
     
                    </div>
                    <div class="flex HeaderBody"> 
                            <div class="table-responsive">
                                    <table class="table table-image table-hover" id="TblSorter1" cellspacing="0" width="100%">
                                        <thead  class="thead-bg table-bordered">
                                            <tr class="text-center">
                                                    <th class="th-sm tblheadfont1"> Supplier </th>
                                                    <th class="th-sm tblheadfont1"> Received Date </th>
                                                    <th class="th-sm tblheadfont1">Purchased Price </th>
                                                    <th class="th-sm tblheadfont1">Manufactured Date </th>
                                                    <th class="th-sm tblheadfont1">Expiration Date </th>
                                                    <th class="th-sm tblheadfont1" >Quantity </th>
                                            </tr>
                                        </thead>
                                            <tbody>
                                                @foreach($pharmacyMedicines as $pharmacyMedicine)
                                                <tr class="text-center highlight">                                 
                                                        <td class="cnterAlgn">{{$pharmacyMedicine->supplier}}</td>
                                                        <td class="cnterAlgn">{{$pharmacyMedicine->receivedMonth}}-{{$pharmacyMedicine->receivedDay}}-{{$pharmacyMedicine->receivedYear}}</td>
                                                        <td class="cnterAlgn">&#8369;{{ number_format($pharmacyMedicine->medicine->price,2)}}</td>
                                                        <td class="cnterAlgn">{{$pharmacyMedicine->manufacturedMonth}}-{{$pharmacyMedicine->manufacturedDay}}-{{$pharmacyMedicine->manufacturedYear}}</td>
                                                        <td class="cnterAlgn">{{$pharmacyMedicine->expirationMonth}}-{{$pharmacyMedicine->expirationDay}}-{{$pharmacyMedicine->expirationYear}}</td>
                                                        <td class="cnterAlgn">{{$pharmacyMedicine->quantity}}</td>
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
        </div>
    

<script>

    $(document).ready( function () {
    $('#TblSorter1').DataTable();
    });

</script>

@endsection