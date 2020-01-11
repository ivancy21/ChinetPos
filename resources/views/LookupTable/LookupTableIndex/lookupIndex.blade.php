@extends('Layouts.sidebar')
@section('contents')
       


  <div class="d-flex flex-column">
    <div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
        <span class="HeaderBannerText">CUSTOM SETTINGS</span>
   </div>
   <div class="flex HeaderBody2">   
    <div class="tab tabsc pb-2">
        <button class="tablinks active" onclick="window.location='{{route('sideEffects.index')}}'">Side Effect</button>
        <button class="tablinks" onclick="window.location='{{route('suppliers.index')}}'">Supplier</button>
        <button class="tablinks" onclick="window.location='{{route('diagnosis.index')}}'">Diagnosis</button>
     </div>                                     
   </div>       
</div>

 
    @yield('lookup')


@endsection