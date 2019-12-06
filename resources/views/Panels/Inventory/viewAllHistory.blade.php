@extends('Layouts.sidebar')
@section('contents')

      <div class="container">
            <div class="d-flex flex-column">
                    <div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
                    <span class="HeaderBannerText">Medicine History</span>
                    </div>
       <div class="flex HeaderBody"> 
            <div class="table-responsive">
                  
              <table class="table table-image table-hover" id="TblSorter1" cellspacing="0" width="100%">
                <thead class="thead-bg table-bordered">
                  <tr class="text-center">
                   <th class="th-sm tblheadfont1">Medicine Name</th>
                    <th class="th-sm tblheadfont1">Code</th>
                    <th class="th-sm tblheadfont1">Purchased Price</th>
                    <th class="th-sm tblheadfont1">Received Date</th>
                    <th class="th-sm tblheadfont1">Manufactured Date</th>
                    <th class="th-sm tblheadfont1">Expiration Date</th>
                    <th class="th-sm tblheadfont1">Quantity</th>
                   </tr>
                </thead>
                <tbody>
                  
               
                 @foreach($pharmacyMedicines as $pharmacyMedicine)
                 <tr class="text-center highlight">
                    <td>{{$pharmacyMedicine->medicine->name}}</td>
                    <td>{{$pharmacyMedicine->medicine->productCode}}</td>
                    <td>&#8369;{{ number_format($pharmacyMedicine->purchasedPrice,2)}}</td>
                    <td>{{$pharmacyMedicine->manufacturedMonth}}-{{$pharmacyMedicine->manufacturedDay}}-{{$pharmacyMedicine->manufacturedYear}}<td>
                    {{$pharmacyMedicine->expirationMonth}}-{{$pharmacyMedicine->expirationDay}}-{{$pharmacyMedicine->expirationYear}}</td>
                    <td>{{$pharmacyMedicine->receivedMonth}}-{{$pharmacyMedicine->receivedDay}}-{{$pharmacyMedicine->receivedYear}}</td>
                    <td>{{$pharmacyMedicine->sum('quantity')}}</td>
                 </tr>
                @endforeach
                
               
                </tbody>
              </table>
              <div class="DivTemplate">
                  <p class='DivHeaderText' style="font-size:9px;">ACTIONS</p>
                  <div class="hr mb-2"></div> 
                  <input class="btn btn-outline-info waves-effect float-right" type="button"  onclick="window.location='{{route('pharmacyMedicine.index')}}'" value="BACK">    
              </div>   
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