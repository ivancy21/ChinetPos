<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Inventory</title>
 <!-- Bootstrap Scripts -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <!-- FontAwesome for Icons -->
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
     integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
 <!-- CSS File -->
 <link href="{{ asset('css/master.css') }}" rel="stylesheet" />  
 <link href="{{ asset('css/tableSorter.css') }}" rel="stylesheet" />
 <link href="{{ asset('css/croppie.css') }}" rel="stylesheet" />
 <!-- JS File -->
 <script defer src="{{ asset('js/tableSorter.js') }}"></script>
 <script defer src="{{ asset('js/croppie.js') }}"></script>
 <!-- Jquery Steps -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.js"></script>

    </head>
    <body>
            
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
                                        <a href="#">
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

                        @yield('content')

                    </div> 
                      
            





<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
            $(this).toggleClass('active');
        });
    });
</script>


        
    </body>
</html>
