@extends('Layouts.sidebar')
@section('contents')

      <div class="container">
            <div class="d-flex flex-column">
                    <div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
                    <span class="HeaderBannerText">Medicines Inventory</span>
                    <button class="btn zoom float-right btn-sm" type="button"  onclick="window.location='{{route('inventory.index')}}'" > <i class="fas fa-history"></i> History</button>                                         
                   
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
                  
               
                 @foreach($medicines as $medicine)
                  <tr class="text-center highlight">
                    <td>{{$medicine->name}}</td>
                    <td>{{$medicine->productCode}}</td>
                    <td>&#8369; {{ number_format($medicine->price,2) }}</td>
                    <td>{{$medicine->pharmacymedicines->sum('quantity')}}</td>
                    <td class="cnterAlgn"><div class="btn-group">
                        <button type="button" class="btn btn-info dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                        </button>
                        <div class="dropdown-menu">
                            <button type="submit" class="dropdown-item" onclick="window.location='{{route('pharmacyMedicine.show', $medicine->id)}}'"> <i class="fa fa-edit"></i> Add Quantity</button>
                            <button type="submit"class="dropdown-item" onclick="window.location='{{route('inventory.show', $medicine->id)}}'">  <i class="fa fa-eye"></i> View History</button>
                        </div>
                    </td>
                </tr>
                @endforeach
                </tbody>
              </table>   
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