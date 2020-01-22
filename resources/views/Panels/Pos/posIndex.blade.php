@extends('Layouts.master')
@section('content')


{{-- Modal --}}

<div class="modal fade PaymentModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Payment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <label  class="fnt">Total:</label>
        
        <h1  class="text-center" style="font-size:78px;"> &#8369; 0</h1>   
     
   
   
   
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<button class="btn btn-outline-info waves-effect  btn-sm" type="button" onclick="window.location = '{{ route('medicine.index') }}'">EXIT POS</button>    

 {{-- Start --}}
<div style="padding:1%;">
       <div class="row">
         <div class="col-sm-8">
    <div class="d-flex flex-column">
            <div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
            <span class="HeaderBannerText">POS</span>
            </div>

{{-- Table 1 --}}
<div class="flex HeaderBody"> 
    <div class="table-responsive">
          
      <table class="table table-hover table1" id="TblSorter1" cellspacing="0" width="100%">
        <thead class="thead-bg table-bordered">
          <tr class="text-center">
           <th class="th-sm tblheadfont1">Medicine Name</th>
            <th class="th-sm tblheadfont1">Code</th>
            <th class="th-sm tblheadfont1">Price</th>
            <th class="th-sm tblheadfont1">Quantity</th>
            <th class="th-sm tblheadfont1 tbw">Action</th>
          </tr>
        </thead>
        <tbody>       
          @foreach($medicineSuppliers as $medicine)
            @if($medicine->medicine->medicine_status==1)
            @if($medicine->medicine->medicineSuppliers->sum('quantity')>0)
          <tr class="text-center highlight">
          <td id="name{{$medicine->medicine->count}}">{{$medicine->medicine->brandName}} ({{$medicine->medicine->dosage}})</td>
            <td>{{$medicine->medicine->productCode}}</td> 
          <td id="price{{$medicine->medicine->count}}">&#8369;{{ number_format($medicine->medicine->retailPrice,2)}}</td>
            <td>{{$medicine->medicine->medicineSuppliers->sum('quantity')}}</td>
            <td><button class="btn btn-sm btn-info">Select</button></td>
            @endif
            @endif
            @endforeach

            @foreach($nonMedicationSuppliers as $nonMedication)
            @if($nonMedication->nonMedication->nonMedication_status==1)
            @if($nonMedication->nonMedication->nonMedicationSuppliers->sum('quantity')>0)
          <tr class="text-center highlight">
          <td id="name{{$nonMedication->nonMedication->count}}">{{$nonMedication->nonMedication->brandName}} </td>
            <td>{{$nonMedication->nonMedication->productCode}}</td> 
          <td id="price{{$nonMedication->nonMedication->count}}">&#8369;{{ number_format($nonMedication->nonMedication->retailPrice,2)}}</td>
            <td>{{$nonMedication->nonMedication->nonMedicationSuppliers->sum('quantity')}}</td>
            <td><button class="btn btn-sm btn-info">Select</button></td>
            @endif
            @endif
            @endforeach
         
            </tr>
        </tbody>
      </table> 
    </div>  
  </div>
</div>
</div>


{{-- TABLE 2 --}}
<div class="col-sm-4">
<div class="DivTemplate"> 
    <div class="table-responsive"> 
      <div class="scrollit">
      <table id='table2' class="table table-borderless" cellspacing="0" width="100%">
          <thead>
              <tr>
               <th class="posheadfnt">Medicine Name</th>
                <th width="100px" class="posheadfnt">Quantity</th>
                <th width="100px" class="posheadfnt text-center ">Price</th>
                <th width="50px" class="posheadfnt text-center "></th>
              </tr>
            </thead>
        <tbody id="table2tbody">
       </tbody>   
      </table>  
    </div>
     
      
  </div> 
    </div> 
 
    <div class="DivTemplate"> 
    <h1 class="split-para"><b>Total:</b> <span id="total">&#8369;0 </span></h1>
      <h6 class="split-para"><b>Tax:</b> <span >&#8369;0 </span></h6>
      <h6 class="split-para"><b>Discounts:</b> <span >&#8369;0 </span></h6>
      <h6 class="split-para"><b>Items:</b> <span id="NoItems" >0</span></h6>
      <label  class="fnt" >Amount tender</label>       
      <input type='number'  class="form-control" >
      <button type="submit" class="btn btn-warning form-control mt-2" id="paymentbtn" data-toggle="modal" data-target=".PaymentModal" >Discounts</button>
      <button type="submit" class="btn btn-primary form-control mt-2" id="paymentbtn" data-toggle="modal" data-target=".PaymentModal" >PAYMENT</button>
  </div>


</div>

</div>

</div>



<script>
 
$(document).ready( function () {
      var table =  $('#TblSorter1').DataTable({
              scrollY: 500,
              scrollX: 500,
              paging: false
          });

      $('#myModal').modal('toggle');

       btnselect();
     
});
var ItemVal = 0;
var count = -1;
// when button select or click
    function btnselect(){
        var select = $('.btn-info');
        var table2 = $('#table2tbody');
        var noItem = $('#NoItems');
       
       
         select.each( function(){
              $(this).click(function() {
                  count+=1;
                      var name = $(this).closest('.highlight').find('td[id^=name]').html();
                      var price = $(this).closest('.highlight').find('td[id^=price]').html();
                      
           $(this).closest('tr').hide();

                ItemVal++;
                noItem.html(ItemVal);   

            clone(table2,name,price,count);
            Total();
              });
          }); 
     }

// data clone to table 2
    function clone(table2,name,price,count){
      $('#table2').find('tbody').append($('<tr>',{
        class:'trClass',
        html: '<td class="posfnt nameClass">'+name+'</td><td><input type="number" min="1" class="form-control posfnt form-control-sm qtyClass" value="1" /></td><td class="text-center posfnt priceClass">'+price+'</td><td class="text-center posfnt" id="SumPrice" style="display:none;">'+price+'</td> <td><button id="deletelist'+count+'" style="color:red;border:0;background:transparent;" class="far fa-trash-alt"></button></td>'
      }));
         removetable();
         Quantity();
    }

// delete the data on table 2
    function removetable(){
     
        var deleteList = $('button[id^=deletelist]');
        var difference = 0;
        var total = $('#total');
      
        deleteList.each(function(){
          $(this).click(function(){
            var Name1 = $(this).closest('tr').find('.nameClass').html();
          
                        $('.sorting_1').each(function(){
                            var Name2 = $(this).html();
                            if(Name1 == Name2){
                              $(this).closest('tr').show();
                            }
                      });

            $(this).closest('tr').remove();
            Total();
           
          }); 
        });
    }
    
//Total output
    function Total(){
      var price = $('.priceClass');
      var total = $('#total');
      var sum = 0;

      price.each(function(){
        var textPrice = $(this).html();
        sum += parseFloat(textPrice.replace(/[^\d.-]/g, ''));
      });
      total.html('&#8369; ' + sum);
    }
   
// Quantity total
   function Quantity(){
      var sum = 0;
      $('.nameClass').each(function(){
         $('.qtyClass').change(function(){ 
               
                  var price = $(this).closest('tr').find('.priceClass');
                  var qty = $(this).closest('tr').find('.qtyClass').val();
                 
                   var pricesum = $(this).closest('tr').find('#SumPrice').html();
                   var priceConverted = parseFloat(pricesum.replace(/[^\d.-]/g, ''));

                  sum = priceConverted  * qty;
                       
                  price.html('&#8369; ' + sum);   
                  Total();
         });
      });
   }

  

   </script>
@endsection