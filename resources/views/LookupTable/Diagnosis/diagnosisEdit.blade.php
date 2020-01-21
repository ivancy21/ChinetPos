@extends('Layouts.sidebar')
@section('contents')
       
<div class="container">
    <form class="form-horizontal" method="POST" action="{{route('diagnosis.update',$diagnosis->id)}}">
        @csrf
        @method('PUT')
           
            <div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
                <span class="HeaderBannerText">Details</span>
        </div>
        <div class="flex HeaderBody">
           <div class="form-row">
               <div class="form-group col-sm-12">
                    <label>Diagnosis</label> 
               <input name='diagnosis' type='text' class="form-control" value="{{$diagnosis->diagnosis}}" required >  
                        <span class="invalid-feedback" role="alert">
                        </span>
               </div>
               <div class="form-group col-sm-12">
                <label>ICD CODE</label> 
               <input name='icdCode' type='text' class="form-control" value="{{$diagnosis->icdCode}}" required >  
                    <span class="invalid-feedback" role="alert">
                    </span>
           </div>
           </div>
    </div>
    
    <!--Saving -->
    <div class="DivTemplate" id="div_Actions">
        <p class="DivHeaderText">ACTIONS</p>
        <div class="hr mb-2"></div>
        <input type="submit" class="btn btn-primary" value="SAVE"/>
        <input  class="btn btn-outline-info waves-effect float-right" type="button" onclick="window.location='{{route('diagnosis.index')}}'" value="BACK">
    </div>
    </form>
    



@endsection