@extends('Layouts.sidebar')
@section('contents')
       
<div class="container">
  
    
            <div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
                <span class="HeaderBannerText">Details</span>
        </div>
        <div class="flex HeaderBody">
           <div class="form-row">
               <div class="form-group col-sm-12">
                    <label>FORMULATION</label> 
                    <input name='NAME' type='text' class="form-control" placeholder="Formulation" required >  
                        <span class="invalid-feedback" role="alert">
                        </span>
               </div>
           </div>
    </div>
    
    <!--Saving -->
    <div class="DivTemplate" id="div_Actions">
        <p class="DivHeaderText">ACTIONS</p>
        <div class="hr mb-2"></div>
        <input type="submit" class="multipurpose-button" value="SAVE"/>
        <input type="button" class="back-button float-right"  value="BACK">
    </div>
    </form>
    



@endsection