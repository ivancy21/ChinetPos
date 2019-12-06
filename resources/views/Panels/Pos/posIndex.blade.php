@extends('Layouts.master')
@section('content')

<div style="padding:2%;">
       <div class="row">
         <div class="col-sm-8">
    <div class="d-flex flex-column">
            <div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
            <span class="HeaderBannerText">POS</span>
            </div>

{{-- Table 1 --}}
<div class="flex HeaderBody"> 
    <div class="table-responsive">
          
      <table class="table table-image table-hover" id="TblSorter1" cellspacing="0" width="100%">
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
       
          <tr class="text-center highlight">
          <td id="name0">Cetirizine</td>
            <td>A115A1558</td>
            <td id="price0">&#8369; 20</td>
            <td>50</td>
            <td><button class="btn btn-sm btn-info">Select</button></td>
        </tr>
        <tr class="text-center highlight">
            <td id="name1">Biogesic</td>
            <td>A115A1558</td>
            <td id="price1">&#8369; 30</td>
            <td>50</td>
            <td><button class="btn btn-sm btn-info">Select</button></td>
           
        </tr>
        <tr class="text-center highlight">
            <td id="name2">Neozep</td>
            <td>A115A1558</td>
            <td id="price2">&#8369; 100</td>
            <td >50</td>
            <td><button class="btn btn-sm btn-info">Select</button></td>
           
        </tr>
        <tr class="text-center highlight">
            <td id="name3">Medicol</td>
            <td>A115A1558</td>
            <td id="price3">&#8369; 150</td>
            <td>50</td>
            <td><button class="btn btn-sm btn-info">Select</button></td>
           
        </tr>

      
       
        </tbody>
      </table> 
    </div>  
  </div>
</div>
</div>


{{-- TABLE 2 --}}
<div class="col-sm-4">
<div class="posTemplate"> 
    <div class="table-responsive"> 
      <table id='table2' class="table table-borderless" cellspacing="0" width="100%">
          <thead>
              <tr>
               <th width="200px" class="posheadfnt">Medicine Name</th>
                <th width="100px" class="posheadfnt">Quantity</th>
                <th width="100px" class="posheadfnt text-center ">Price</th>
              </tr>
            </thead>
        <tbody id="table2tbody">
          {{-- <tr>
            <td class="posfnt">Cetirizine</td>
            <td> <input type="number" class="form-control posfnt form-control-sm" value="1" /></td>
            <td class="text-center posfnt">&#8369; 20</td>
          </tr> --}}
        {{-- <tr>
            <td class="posfnt">Biogesic</td>
            <td> <input type="number" class="form-control posfnt form-control-sm" value="1" /></td>
            <td class="text-center posfnt">&#8369; 20</td>
        </tr>
        <tr>
            <td class="posfnt">Neozep</td>
            <td> <input type="number" class="form-control posfnt form-control-sm" value="1" /></td>
            <td class="text-center posfnt">&#8369; 20</td>
        </tr> --}}
       </tbody>   
      </table>  
      
      <div class="hr mb-2"></div> 
      <p class="split-para"><b>Total:</b> <span>&#8369; 2000000</span></p>
    
    </div> 
  </div>

  <div class="DivTemplate">
      <p class='DivHeaderText' style="font-size:9px;">ACTIONS</p>
      <div class="hr mb-2"></div> 
      <button type="submit" class="btn btn-primary btn-sm float-right">PAYMENT</button>
      <button class="btn btn-outline-info waves-effect  btn-sm" type="button" onclick="window.location = '{{ route('pharmacyMedicine.index') }}'">EXIT POS</button>    
  </div>



</div>




</div>


</div>
</div>



<script>
 
    $(document).ready( function () {
       $('#TblSorter1').DataTable();
      
       btnselect();
    });
   

    function btnselect(){
        var select = $('.btn-info');

        var table2 = $('#table2tbody');

        var count = -1;

        select.each( function(){
          // var test = $(this).closest('.text-center highlight').find('td[]');
          
          $(this).click(function(){
            count+=1;
            var name = $(this).closest('.highlight').find('td[id^=name]').html();
            var price = $(this).closest('.highlight').find('td[id^=price]').html();
            clone(table2,name,price,count);
          });
        }); 
    }

    function clone(table2,name,price,count){
      $('#table2').find('tbody').append($('<tr>',{
        class:'trClass',
        html: '<td class="posfnt">'+name+'</td><td><input type="number" min="1" class="form-control posfnt form-control-sm" value="1" /></td><td class="text-center posfnt">'+price+'</td> <td><button id="deletelist'+count+'" style="color:red;border:0;background:transparent;" class="far fa-trash-alt"></button></td>'
      }))
      removetable();
    }

    function removetable(){
        var deleteList = $('button[id^=deletelist]');
        deleteList.each(function(){
          $(this).click(function(){
            $(this).closest('tr').remove();
          });
        });
    }


   </script>
@endsection