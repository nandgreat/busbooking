<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin panel</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{url('Backend/css/styles.css')}}" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <style>
            .navbar-dark, .bg-dark{
                background-color:#fff;
            }
        </style>

    </head>

    <body class="sb-nav-fixed">
        @include('admin.partials.header')
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            
                            <a class="nav-link" href="{{route('dashboard')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            

                            <a class="nav-link collapsed" href="{{route('userform')}}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-user-check"></i></div>
                                User List
                                
                            </a>
                                 
                            </a>
                            <a class="nav-link collapsed" href="{{route('routelist')}}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Route 
                                
                            </a>
                            <a class="nav-link collapsed" href="{{route('bus')}}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-bus-alt"></i></div>
                                Bus
                                
                            </a>
                            <a class="nav-link collapsed" href="{{route('counter')}}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-bus-alt"></i></div>
                                Counter
                                                            
                             </a>
                                <a class="nav-link collapsed" href="{{route('trip.details')}}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-bus-alt"></i></div>
                                Trip
                                
                            </a>
                             </a>
                                <a class="nav-link collapsed" href="{{route('seat.details')}}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-bus-alt"></i></div>
                                Seat
                                
                            </a>
                              
                            <a class="nav-link collapsed" href="{{route('bookinginfo')}}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Booking Info
                                
                            </a>
                               
                            <a class="nav-link collapsed" href="{{route('payment')}}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-wallet"></i></div>
                                Payment
                                
                            </a>
                            <a class="nav-link collapsed" href="{{route('reportlist')}}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-wallet"></i></div>
                                User bookings record
                                
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Admin
                    </div>
                </nav>
            </div>

            <div id="layoutSidenav_content">
               
               <main>
                    @yield('content')
                </main>
            </div>
        </div>
        @include('admin.partials.footer')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{url('Backend/js/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{url('Backend/assets/demo/chart-area-demo.js')}}"></script>
        <script src="{[url('Backend/assets/demo/chart-bar-demo.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{url('Backend/js/datatables-simple-demo.js')}}"></script>
    </body>
</html>
