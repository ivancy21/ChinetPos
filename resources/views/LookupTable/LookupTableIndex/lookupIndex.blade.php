@extends('Layouts.sidebar')
@section('contents')
       


  <div class="d-flex flex-column">
    <div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
        <span class="HeaderBannerText">LOOKUP TABLE</span>
   </div>
   <div class="flex HeaderBody2">   
    <div class="tab tabsc pb-2">
        <button class="tablinks active" onclick="openCity(event, 'Formulation')">Formulation</button>
        <button class="tablinks" onclick="openCity(event, 'SideEffect')">Side Effect</button>
        <button class="tablinks" onclick="openCity(event, 'Category')">Category</button>
        <button class="tablinks" onclick="openCity(event, 'Supplier')">Supplier</button>
     </div>                                     
   </div>       
</div>

 <!--FORMULATIONLAYOUT-->
 <div class="DivTemplate tabcontent" id='Formulation'>
    <a style="float:right; color:#059DC0; margin-right:5px;  cursor: pointer;" class="zoom" href="/formulationCreate" data-toggle="tooltip" title="Add Medicine"><i class="fas fa-plus fa-lg "></i> Add new</a>                                           
    <p class='DivHeaderText'>FORMULATION</p>
    
    <div class="hr mb-2"></div>
    <div class="table-responsive">
        <table class="table table-image table-hover" id="TblSorter1" cellspacing="0" width="100%">
         
            <thead class="thead-bg table-bordered">
                <tr class="text-center">
                <th class="th-sm tblheadfont1">FORMULATION</th>
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

        <!--SIDE EFFECTLAYOUT-->
        <div class="DivTemplate tabcontent" id='SideEffect'>
            <a style="float:right; color:#059DC0; margin-right:5px; cursor: pointer;" class="zoom" href="/sideEffectCreate"  data-toggle="tooltip" title="Add Medicine"><i class="fas fa-plus fa-lg "></i> Add new</a>                                           
            <p class='DivHeaderText'>SIDE EFFECT</p>
            <div class="hr mb-2"></div>
            <div class="table-responsive">
                <table class="table table-image table-hover" id="TblSorter2" cellspacing="0" width="100%">
                 
                    <thead class="thead-bg table-bordered">
                        <tr class="text-center">
                        <th class="th-sm tblheadfont1">SIDE EFFECT</th>
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


  <!--CATEGORY LAYOUT-->
  <div class="DivTemplate tabcontent" id='Category'>
    <a style="float:right; color:#059DC0; margin-right:5px; cursor: pointer;" class="zoom" href="/categoryCreate"  data-toggle="tooltip" title="Add Medicine"><i class="fas fa-plus fa-lg"></i> Add new</a>                                           
    <p class='DivHeaderText'>CATEGORY</p>
    <div class="hr mb-2"></div>
    <div class="table-responsive">
        <table class="table table-image table-hover" id="TblSorter3" cellspacing="0" width="100%">
         
            <thead class="thead-bg table-bordered">
                <tr class="text-center">
                <th class="th-sm tblheadfont1">CATEGORY</th>
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

            <!--SUPPLIER LAYOUT-->
  <div class="DivTemplate tabcontent" id='Supplier'>
    <a style="float:right;color:#059DC0; margin-right:5px; cursor: pointer;" class="zoom" href="/supplierCreate" data-toggle="tooltip" title="Add Medicine"><i class="fas fa-plus fa-lg "></i> Add new</a>                                           
    <p class='DivHeaderText'>SUPPLIER</p>
    <div class="hr mb-2"></div>
    <div class="table-responsive">
        <table class="table table-image table-hover" id="TblSorter4" cellspacing="0" width="100%">
         
            <thead class="thead-bg table-bordered">
                <tr class="text-center">
                <th class="th-sm tblheadfont1">SUPPLIER</th>
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
    $('#TblSorter2').DataTable();
    $('#TblSorter3').DataTable();
    $('#TblSorter4').DataTable();
    $('#TblSorter5').DataTable();
});

function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
  $('#Formulation').show();
</script>


@endsection