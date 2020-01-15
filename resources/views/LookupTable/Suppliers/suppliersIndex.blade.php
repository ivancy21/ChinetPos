@extends('LookupTable.LookupTableIndex.lookupIndex')
@section('lookup')

    <!--SUPPLIER LAYOUT-->
      <div class="DivTemplate">
        <a style="float:right;color:#059DC0; margin-right:5px; cursor: pointer;" class="zoom" onclick="window.location='{{route('suppliers.create')}}'" data-toggle="tooltip" title="Add Medicine"><i class="fas fa-plus fa-lg "></i> Add new</a>                                           
        <p class='DivHeaderText'>SUPPLIER</p>
        <div class="hr mb-2"></div>
        <div class="table-responsive">
            <table class="table table-image table-hover" id="TblSorter1" cellspacing="0" width="100%">
             
                <thead class="thead-bg table-bordered">
                    <tr class="text-center">
                    <th class="th-sm tblheadfont1"  width="400px">SUPPLIER</th>
                    <th class="th-sm tblheadfont1">ADDRESS</th>
                    <th class="th-sm tblheadfont1">STATUS</th>
                    <th class="th-sm tblheadfont1" width="230px">Action</th>
                    </tr>
                </thead>
    
                <tbody>
                    <tr>
                        @foreach($suppliers as $supplier)
                    
                    <td class="highlight">{{$supplier->suppliersName}}</td>
                    <td class="highlight">{{$supplier->address}}</td>
                    @if($supplier->supplier_status==1)
                    <td class="highlight">Active</td>
                    @else
                    <td class="highlight">Inactive</td>
                    @endif
                    <td class="highlight">
                        <div class="form-inline d-flex justify-content-center">
                            <input type="submit" class="update-button ml-1 btn-sm" value="EDIT" onclick="window.location='{{route('suppliers.edit',$supplier->id)}}'">
                            </div>
                        
                    </td>
                    </tr>
                    @endforeach
                            
    
                </tbody>
    
            </table>
        </div>
        </div>
    <!-- end of DivTemplate -->

    <script>
        $(document).ready(function () {
        
          $('#TblSorter1').DataTable();
        
      });
      </script>

    @endsection