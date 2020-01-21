@extends('LookupTable.LookupTableIndex.lookupIndex')
@section('lookup')
       
        <!--SIDE EFFECTLAYOUT-->
        <div class="DivTemplate">
            <a style="float:right; color:#059DC0; margin-right:5px;  cursor: pointer;" class="zoom"  onclick="window.location='{{route('sideEffects.create')}}'" data-toggle="tooltip" title="Add Medicine"><i class="fas fa-plus fa-lg "></i> Add new</a>                                           
            <p class='DivHeaderText'>SIDE EFFECTS</p>
            
            <div class="hr mb-2"></div>
            <div class="table-responsive">
                <table class="table table-image table-hover" id="TblSorter1" cellspacing="0" width="100%">
                 
                    <thead class="thead-bg table-bordered">
                        <tr class="text-center">
                        <th class="th-sm tblheadfont1">SIDE EFFECTS</th>
                        <th class="th-sm tblheadfont1" width="230px">Action</th>
                        </tr>
                    </thead>
        
                    <tbody>
                    <tr >
                        @foreach($sideEffects as $sideEffect)
                    
                    <td class="highlight">{{$sideEffect->sideEffect}}</td>
                    <td class="highlight">
                        <div class="form-inline d-flex justify-content-center">
                            <input type="submit" class="update-button ml-1 btn-sm" value="EDIT" onclick="window.location='{{route('sideEffects.edit',$sideEffect->id)}}'">
                                      
                            <form  method='POST' action='{{ route('sideEffects.destroy',$sideEffect->id) }}'>
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="delete-button ml-1 btn-sm" value="DELETE" >    
                            </form>
                            </div>
                        
                    </td>
                    </tr>
                    @endforeach
                    </tbody>
        
                </table>
            </div>
            </div>



    
<script>
  $(document).ready(function () {
  
    $('#TblSorter1').DataTable();
  
});


</script>


@endsection