@extends('Layouts.sidebar')
@section('contents')
       


  <div class="d-flex flex-column">
    <div class="HeaderBanner p-2 px-3" style="border-radius: .75rem .75rem 0rem 0rem; letter-spacing: 1px;">
        <span class="HeaderBannerText">Inventory</span>
   </div>
   <div class="flex HeaderBody2">   
    <div class="tab tabsc pb-2">
        <button   onclick="window.location='/medication'">Medication</button>
        <button   onclick="window.location='/nonmedication'">NonMedication</button>
     </div>                                     
   </div>       
</div>

 
    @yield('Inventory')


@endsection