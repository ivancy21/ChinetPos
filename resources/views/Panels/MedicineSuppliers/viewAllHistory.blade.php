@extends('Layouts.sidebar')
@section('contents')

     
            <div class="d-flex flex-column">
                    <div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
                    <span class="HeaderBannerText">Medicine History</span>
                    <a  style="float:right;"   data-toggle="tooltip" title="Add Medicine"><i class="fas fa-plus fa-lg zoom"></i></a>                                           
     
                    </div>
       <div class="flex HeaderBody"> 
            <div class="table-responsive">
                  
              <table class="table table-image table-hover" id="TblSorter1" cellspacing="0" width="100%">
                <thead class="thead-bg table-bordered">
                  <tr class="text-center">
                   <th class="th-sm tblheadfont1">Medicine Name</th>
                    <th class="th-sm tblheadfont1">Supplier </th>
                    <th class="th-sm tblheadfont1">Purchased Price</th>
                    <th class="th-sm tblheadfont1">Received Date</th>
                    <th class="th-sm tblheadfont1">Manufactured Date</th>
                    <th class="th-sm tblheadfont1">Expiration Date</th>
                    <th class="th-sm tblheadfont1">Quantity</th>
                   </tr>
                </thead>
                <tbody>
                  
               
                 <tr class="text-center highlight">
                  @foreach($medicineSuppliers as $medicineSupplier)
                  <tr class="text-center highlight">                                 
                    <td class="cnterAlgn">{{$medicineSupplier->medicine->brandName}}</td>
                    <td class="cnterAlgn">{{$medicineSupplier->supplier->suppliersName}}</td>
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
          <button class="btn btn-outline-info waves-effect float-right btn-sm" type="submit" onclick="window.location='{{route('medicine.index')}}'">BACK</button>           
      </div>   
      </div>
    

<script>
 
 $(document).ready( function () {
    $('#TblSorter1').DataTable();
 });

</script>





@endsection