@extends('Layouts.sidebar')
@section('contents')
       


  <div class="d-flex flex-column">
    <div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
        <span class="HeaderBannerText">LOOKUP TABLE</span>
   </div>
   <div class="flex HeaderBody2">   
    <div class="tab tabsc pb-2">
        <button class="tablinks active" onclick="window.location.href = '/SideEffectIndex'">Side Effect</button>
        <button class="tablinks" onclick="window.location.href = '/DiagnosisIndex'">Diagnosis</button>
        <button class="tablinks" onclick="window.location.href = '/SupplierIndex'">Supplier</button>
     </div>                                     
   </div>       
</div>

 
    @yield('lookup')


@endsection