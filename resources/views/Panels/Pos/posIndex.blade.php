@extends('Layouts.master')
@section('content')

<div style="padding:2%;">
       <div class="row">
         <div class="col-sm-8">
    <div class="d-flex flex-column">
            <div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
            <span class="HeaderBannerText">POS</span>
            </div>

<div class="flex HeaderBody"> 
    <div class="table-responsive">
          
      <table class="table table-image table-hover" id="TblSorter1" cellspacing="0" width="100%">
        <thead class="thead-bg table-bordered">
          <tr class="text-center">
           <th class="th-sm tblheadfont1">Medicine Name</th>
            <th class="th-sm tblheadfont1">Code</th>
            <th class="th-sm tblheadfont1">Price</th>
            <th class="th-sm tblheadfont1">Quantity</th>
            <th class="th-sm tblheadfont1 tbw">Option</th>
          </tr>
        </thead>
        <tbody>
          
       
         
          <tr class="text-center highlight">
            <td>Cetirizine</td>
            <td>A115A1558</td>
            <td>&#8369; 20</td>
            <td>50</td>
            <td>50</td>
           
        </tr>
      
       
        </tbody>
      </table> 
    </div>  
  </div>
</div>
</div>

<div class="col-sm-4">
    <div class="d-flex flex-column">
            <div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
            <span class="HeaderBannerText">POS</span>
            </div>

<div class="flex HeaderBody"> 
    <div class="table-responsive">
          
      <table class="table" cellspacing="0" width="100%">
        <thead class="thead-bg">
          <tr class="text-center">
           <th class="th-sm tblheadfont1">Medicine Name</th>
            <th class="th-sm tblheadfont1">Code</th>
            <th class="th-sm tblheadfont1">Price</th>
            <th class="th-sm tblheadfont1">Quantity</th>
            <th class="th-sm tblheadfont1 tbw">Option</th>
          </tr>
        </thead>
        <tbody>
          
       
         
          <tr class="text-center">
            <td>Cetirizine</td>
            <td>A115A1558</td>
            <td>&#8369; 20</td>
            <td>50</td>
            <td>50</td>
           
        </tr>
      
       
        </tbody>
      </table>  
    </div> 
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