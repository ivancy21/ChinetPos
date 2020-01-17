@extends('Layouts.master')
@section('content')


    <div class="container">
        <div class="d-flex flex-column mb-4">
            <div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
                <span class="HeaderBannerText">PHARMACY</span>       
            </div>
                    <div class="flex HeaderBody2">
                        <div class="container mt-4 mb-4">
                            <div class="row">
                                <div class="col">
                                    <label  class="fnt">PHARMACY</label>
                                    <input type="text" required class="form-control input"  name="pharmacy" tabindex="14">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label  class="fnt">ADDRESS</label>
                                    <input type="text" required class="form-control input"  name="address" tabindex="14">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label  class="fnt">CITY</label>
                                    <input type="text" required class="form-control input"  name="city" tabindex="14">
                                </div>

                                <div class="col">
                                    <label  class="fnt">STATE/PROVINCE</label>
                                        <select name='state' class="form-control input" required tabindex="4">
                                            <option value="Ilocos Region (REGION I)"                         >Ilocos Region (REGION I)</option>    
                                            <option value="Cagayan Valley (REGION II)"                         >Cagayan Valley (REGION II)</option>    
                                            <option value="Central Luzon (REGION III)"                         >Central Luzon (REGION III)</option>    
                                            <option value="CALABARZON (REGION IV-A)"                         >CALABARZON (REGION IV-A)</option>    
                                            <option value="MIMAROPA (REGION IV-B)"                         >MIMAROPA (REGION IV-B)</option>    
                                            <option value="Bicol Region (REGION V)"                         >Bicol Region (REGION V)</option>    
                                            <option value="Western Visayas (REGION VI)"                         >Western Visayas (REGION VI)</option>    
                                            <option value="Central Visayas (REGION VII)"                         >Central Visayas (REGION VII)</option>    
                                            <option value="Eastern Visayas (REGION VIII)"                         >Eastern Visayas (REGION VIII)</option>    
                                            <option value="Zamboanga Peninsula (REGION IX)"                         >Zamboanga Peninsula (REGION IX)</option>    
                                            <option value="Northern Mindanao (REGION X)"                         >Northern Mindanao (REGION X)</option>    
                                            <option value="Davao Region (REGION XI)"                         >Davao Region (REGION XI)</option>    
                                            <option value="SOCCSKSARGEN (REGION XII)"                         >SOCCSKSARGEN (REGION XII)</option>    
                                            <option value="CARAGA Region (REGION XIII)"                         >CARAGA Region (REGION XIII)</option>    
                                            <option value="National Capital Region (NCR) (REGION XIV)"                         >National Capital Region (NCR) (REGION XIV)</option>    
                                            <option value="Cordillera Administrative Region (CAR) (REGION XV)"                         >Cordillera Administrative Region (CAR) (REGION XV)</option>    
                                            <option value="Autonomous Region in Muslim Mindanao (ARMM) (REGION XVI)"                         >Autonomous Region in Muslim Mindanao (ARMM) (REGION XVI)</option>    
                                        </select>
                                </div>

                                <div class="col">
                                    <label  class="fnt">ZIP CODE</label>
                                    <input name='zipCode' type="number" class="form-control input"  value='' required tabindex="5">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label  class="fnt">EMAIL</label>
                                    <input type="text" required class="form-control input"  name="email" tabindex="14">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label  class="fnt">MOBILE NUMBER</label>
                                    <input type="text" required class="form-control input"  name="mobileNumber" tabindex="14">
                                </div>

                                <div class="col">
                                    <label  class="fnt">CONTACT NO.</label>
                                    <input type="text" required class="form-control input"  name="contactNumber" tabindex="14">
                                </div>

                                <div class="col">
                                    <label  class="fnt">FAX</label>
                                    <input type="text" required class="form-control input"  name="fax" tabindex="14">
                                </div>
                            </div>

                            
                            <div class="row">
                                <div class="form-group col-sm-12">
                                    <label class="input-label">STATUS</label><br>
                                        <div class="form-check form-check-inline ml-4">
                                            <input type='radio' class="form-check-input" name='medicine_status' id="emptyStatusActive" value='1'>
                                            <label class="form-check-label" for="emptyStatusActive">Active</label>
                                        </div>
                                        <div class="form-check form-check-inline ml-4">
                                            <input type='radio' class="form-check-input" name='medicine_status' id="statusInactive" value='0'>
                                            <label class="form-check-label" for="statusInactive">Inactive</label> 
                                        </div>
                                </div>
                            </div>
                        
                        </div>
                    </div>  
                    
                    <div class="DivTemplate">
                        <p class='DivHeaderText' style="font-size:9px;">ACTIONS</p>
                        <div class="hr mb-2"></div> 
                        <button type="submit" class="btn btn-primary" >SAVE</button>
                        <input class="btn btn-outline-info waves-effect float-right" type="button" onclick="window.location='http://inventory.local/pharmacy'" value="BACK">    
                    </div>
        </div>                     
    </div>
                    
@endsection