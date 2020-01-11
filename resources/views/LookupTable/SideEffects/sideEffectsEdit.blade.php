@extends('Layouts.sidebar')
@section('contents')
<div class="container">
  
    <form class="form-horizontal" method="POST" action="{{route('sideEffects.update',$sideEffect->id)}}">
        @csrf
        @method('PUT')
            <div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
                <span class="HeaderBannerText">Details</span>
        </div>
        <div class="flex HeaderBody">
           <div class="form-row">
               <div class="form-group col-sm-12">
                    <label>SIDE EFFECT</label> 
               <input name='sideEffect' type='text' class="form-control" value="{{$sideEffect->sideEffect}}" required >  
                        <span class="invalid-feedback" role="alert">
                        </span>
               </div>
           </div>
    </div>
    
    <!--Saving -->
    <div class="DivTemplate" id="div_Actions">
        <p class="DivHeaderText">ACTIONS</p>
        <div class="hr mb-2"></div>
        <button type="submit" class="btn btn-primary" >SAVE</button>
        <input type="button" class="back-button float-right" onclick="window.location='{{route('sideEffects.index')}}'" value="BACK">
    </div>
   
    



@endsection