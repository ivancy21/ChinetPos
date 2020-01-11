@extends('LookupTable.LookupTableIndex.lookupIndex')
@section('lookup')
       

 <!--DIAGNOSIS LAYOUT-->
 <div class="DivTemplate">
    <a style="float:right; color:#059DC0; margin-right:5px; cursor: pointer;" class="zoom" href="/diagnosisCreate"  data-toggle="tooltip" title="Add Medicine"><i class="fas fa-plus fa-lg"></i> Add new</a>                                           
    <p class='DivHeaderText'>DIAGNOSIS</p>
    <div class="hr mb-2"></div>
    <div class="table-responsive">
        <table class="table table-image table-hover" id="TblSorter1" cellspacing="0" width="100%">
         
            <thead class="thead-bg table-bordered">
                <tr class="text-center">
                <th class="th-sm tblheadfont1">DIAGNOSIS</th>
                <th class="th-sm tblheadfont1" width="230px">Action</th>
                </tr>
            </thead>

            <tbody>
                <tr class="highlight">
                    <td>sdas</td>
                    <td>
                        <div class="form-inline d-flex justify-content-center">
                            <input type='button' class="update-button ml-1 btn-sm" value='UPDATE'>              
                            <input type="submit" class="delete-button ml-1 btn-sm" value="DELETE">    
                        </div>
                    </td>
                    </tr>
                    <tr class="highlight">
                        <td>sdas</td>
                        <td>
                            <div class="form-inline d-flex justify-content-center">
                                <input type='button' class="update-button ml-1 btn-sm" value='UPDATE'>              
                                <input type="submit" class="delete-button ml-1 btn-sm" value="DELETE">    
                            </div>
                        </td>
                        </tr>
                        <tr class="highlight">
                            <td>sdas</td>
                            <td>
                                <div class="form-inline d-flex justify-content-center">
                                    <input type='button' class="update-button ml-1 btn-sm" value='UPDATE'>              
                                    <input type="submit" class="delete-button ml-1 btn-sm" value="DELETE">    
                                </div>
                            </td>
                         </tr>
                         <tr class="highlight">
                            <td>sdas</td>
                            <td>
                                <div class="form-inline d-flex justify-content-center">
                                    <input type='button' class="update-button ml-1 btn-sm" value='UPDATE'>              
                                    <input type="submit" class="delete-button ml-1 btn-sm" value="DELETE">    
                                </div>
                            </td>
                         </tr>
                         <tr class="highlight">
                            <td>sdas</td>
                            <td>
                                <div class="form-inline d-flex justify-content-center">
                                    <input type='button' class="update-button ml-1 btn-sm" value='UPDATE'>              
                                    <input type="submit" class="delete-button ml-1 btn-sm" value="DELETE">    
                                </div>
                            </td>
                         </tr>
                         <tr class="highlight">
                            <td>sdas</td>
                            <td>
                                <div class="form-inline d-flex justify-content-center">
                                    <input type='button' class="update-button ml-1 btn-sm" value='UPDATE'>              
                                    <input type="submit" class="delete-button ml-1 btn-sm" value="DELETE">    
                                </div>
                            </td>
                         </tr>
                         <tr class="highlight">
                            <td>sdas</td>
                            <td>
                                <div class="form-inline d-flex justify-content-center">
                                    <input type='button' class="update-button ml-1 btn-sm" value='UPDATE'>              
                                    <input type="submit" class="delete-button ml-1 btn-sm" value="DELETE">    
                                </div>
                            </td>
                         </tr>
                         <tr class="highlight">
                            <td>sdas</td>
                            <td>
                                <div class="form-inline d-flex justify-content-center">
                                    <input type='button' class="update-button ml-1 btn-sm" value='UPDATE'>              
                                    <input type="submit" class="delete-button ml-1 btn-sm" value="DELETE">    
                                </div>
                            </td>
                         </tr>
                         <tr class="highlight">
                            <td>sdas</td>
                            <td>
                                <div class="form-inline d-flex justify-content-center">
                                    <input type='button' class="update-button ml-1 btn-sm" value='UPDATE'>              
                                    <input type="submit" class="delete-button ml-1 btn-sm" value="DELETE">    
                                </div>
                            </td>
                         </tr>

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