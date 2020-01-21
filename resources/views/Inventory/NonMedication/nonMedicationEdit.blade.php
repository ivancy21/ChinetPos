
@extends('Inventory.InventoryMaster.inventoryMaster')
@section('Inventory')
       
<div class="CardDiv">
    <div style="background-color:#C4DBE0; width:100%;height:50px; border-radius:5px; padding-top:6px;">
    <div class="row">
          <div class="col-sm-8 schposi2">
            <div class="row ml-1">
                            {{-- latest --}}
                                <button type="submit" name="latest" class="btn btn-primary ml-1">Latest</button>

                            {{-- oldest --}}
                                <button type="submit" name="oldest" class="btn btn-sm btn-primary ml-1">Oldest </button>

                            {{-- Active --}}
                                   
                                          <button type="submit" name="Active" class="btn btn-primary ml-1 dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" value="Active" >Active</button>
                                        <div class="dropdown-menu">
                                           
                                               <input type="submit" class="dropdown-item" name="activeAll" class="btn btn-sm btn-primary ml-1" value="All" />
                                          
                                           
                                                <input type="submit" class="dropdown-item" name="activeTablets" class="btn btn-sm btn-primary ml-1" value="Tablets" >
                                          
                                               <input type="submit" class="dropdown-item" name="activeBottles" class="btn btn-sm btn-primary ml-1" value="Bottles" >
                                        
                                                <input type="submit" class="dropdown-item" name="activeDrops" class="btn btn-sm btn-primary ml-1" value="Drops" />
                                           
                                                <input type="submit" class="dropdown-item" name="activeInhalers" class="btn btn-sm btn-primary ml-1" value="Inhalers" >
                                          
                                                <input type="submit" class="dropdown-item" name="activeInjections" class="btn btn-sm btn-primary ml-1" value="Injections" >
                                        
                                               <input type="submit" class="dropdown-item" name="activeCapsules" class="btn btn-sm btn-primary ml-1" value="Capsules" >
                                        
                                        </div>
                                   
                     
                                      {{-- InActive --}}
                                    
                                        <button type="submit" name="Active" class="btn btn-sm btn-primary ml-1 dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" value="Active" >Inactive</button>
                                         <div class="dropdown-menu">
                                         
                                                <input type="submit" class="dropdown-item" name="inactiveAll" class="btn btn-sm btn-primary ml-1" value="All" />
                                        
                                                <input type="submit" class="dropdown-item" name="inactiveTablets" class="btn btn-sm btn-primary ml-1" value="Tablets" >
                                          
                                                <input type="submit" class="dropdown-item" name="inactiveBottles" class="btn btn-sm btn-primary ml-1" value="Bottles" >
                                          
                                                <input type="submit" class="dropdown-item" name="inactiveDrops" class="btn btn-sm btn-primary ml-1" value="Drops" />
                                          
                                                <input type="submit" class="dropdown-item" name="inactiveInhalers" class="btn btn-sm btn-primary ml-1" value="Inhalers" >
                                         
                                                <input type="submit" class="dropdown-item" name="inactiveInjections" class="btn btn-sm btn-primary ml-1" value="Injections" >
                                          
                                                <input type="submit" class="dropdown-item" name="inactiveCapsules" class="btn btn-sm btn-primary ml-1" value="Capsules" >
                                           
                                          </div>  
                                       
                                      </div>
           </div>
                                          
                                        
           <div class="col-sm-4">       
                  <div class="schposi">
          <a  style="float:right; color:#059DC0; margin-right:5px;margin-top:3px; cursor: pointer;" href="/nonmedicationCreate" data-toggle="tooltip" title="Add Medicine"><i class="fas fa-plus fa-2x zoom"></i></a>                                           
                    <input type="text" name="search" placeholder="Search.." >
                        <button type="submit" class="sc"><i class="fa fa-search"></i></button>
                             
                </div>
                 </div>
                </div>    
            </div>               
          
               

<div style="width:100%;height:100%;" >

  
    <div class="cards zoom"  style="cursor: pointer;">
          <div class="image">
            
           
              <img src="{{ asset('images/medicineicon.png') }}" height="50px" width="90px" alt="" class="img-shadow card-img">
            
          </div>
        <div class="container" >
              <div class="table-responsive" >
                <center>
                            
                              <h6 style="color:black;" class="fnt mt-2"><b> uiiui</b></h6>
                              <h6 style="color:black;" class="fnt">uiyiui</h6>
                              <h6 style="color:green;" class="fnt">Avail: uyiyu left   </h6>
                           
                </center>                                                   
               </div>
          </div>
      </div>
        <!--cards -->
      
</div>
 
</div>

@endSection