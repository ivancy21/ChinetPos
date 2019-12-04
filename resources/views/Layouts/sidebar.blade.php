@extends('Layouts.master')
@section('content')

<div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header" style=" position: relative;">
                    <div class="z-depth-1-half cntr">
                      <img src="{{ asset('images/chinet.png/')}}" class="img-fluid side-icon mt-2" alt="">
                    </div>
                <div style="  position: absolute; bottom: 0;" class="ml-3 mb-2">
                <h6>Rex Ivan Cy</h6>
                <h6 style="font-size:10px;">Admin</h6>
                </div>
            </div>

            <ul class="sidebar-navigation list-unstyled components">
                    <li class="header">Navigation</li>
                    <li>
                            <a href="/">
                              <i class="fa fa-home" aria-hidden="true"></i> Homepage
                            </a>
                          </li>
                          <li>
                            <a  href="{{route('medicine.index')}}">
                               <i class="fa fa-capsules" aria-hidden="true"></i> Medicine List
                            </a>
                          </li>
                           <li>
                            <a href="{{route('pharmacyMedicine.index')}}">
                               <i class="fa fa-capsules" aria-hidden="true"></i> Pharmacy Inventory
                            </a>
                          </li>
                          <li>
                            <a href="/posIndex">
                                <i class="fa fa-align-justify" aria-hidden="true"></i> Pos
                            </a>
                        </li>
                          <li class="headers">Another Menu</li>
                          <li>
                            <a href="#">
                              <i class="fa fa-cog" aria-hidden="true"></i> Settings
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <i class="fa fa-info-circle" aria-hidden="true"></i> Information
                            </a>
                          </li>
            </ul>

           
        </nav>

        <!-- Page Content Holder -->
        <div id="content">
                <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                </button>

            @yield('contents')

        </div> 
          






<script type="text/javascript">
$(document).ready(function () {
$('#sidebarCollapse').on('click', function () {
$('#sidebar').toggleClass('active');
$(this).toggleClass('active');
});
});
</script>

@endsection