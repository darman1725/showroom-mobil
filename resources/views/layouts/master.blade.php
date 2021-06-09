<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->
    <title>Sistem Showroom Mobil</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">


    <!-- DEMO CHARTS -->
    <link rel="stylesheet" href="{{ asset('css/grains/chartist.css') }}">
    <link rel="stylesheet" href="{{ asset('css/grains/chartist-plugin-tooltip.css') }}">

    <!-- Template -->
    <link rel="stylesheet" href="{{ asset('css/grains/graindashboard.css') }}">

</head>

<body class="has-sidebar has-fixed-sidebar-and-header">
<!-- Header -->
@section('header')
    <header class="header bg-body">
        <nav class="navbar flex-nowrap p-0">
            <div class="navbar-brand-wrapper d-flex align-items-center col-auto">
                <!-- Logo For Mobile View -->
                <a class="navbar-brand navbar-brand-mobile" href="/">
                    <img class="img-fluid w-100" src="{{ asset('img/logo-mini.png') }}" alt="Graindashboard">
                </a>
                <!-- End Logo For Mobile View -->

                <!-- Logo For Desktop View -->
                <a class="navbar-brand navbar-brand-desktop" href="/">
                    <img class="side-nav-show-on-closed" src="{{ asset('img/logo-mini.png') }}" alt="Graindashboard" style="width: auto; height: 33px;">
                    <img class="side-nav-hide-on-closed" src="{{ asset('img/logo.png') }}" alt="Graindashboard" style="width: auto; height: 33px;">
                </a>
                <!-- End Logo For Desktop View -->
            </div>

            <div class="header-content col px-md-3">
                <div class="d-flex align-items-center">
                    <!-- Side Nav Toggle -->
                    <a  class="js-side-nav header-invoker d-flex mr-md-2" href="#"
                        data-close-invoker="#sidebarClose"
                        data-target="#sidebar"
                        data-target-wrapper="body">
                        <i class="gd-align-left"></i>
                    </a>
                    <!-- End Side Nav Toggle -->

                    <!-- User Notifications -->
                    <div class="dropdown ml-auto">
                        <a id="notificationsInvoker" class="header-invoker" href="#" aria-controls="notifications" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-target="#notifications" data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-animation-in="fadeIn" data-unfold-animation-out="fadeOut">
                            <span class="indicator indicator-bordered indicator-top-right indicator-primary rounded-circle"></span>
                            <i class="gd-bell"></i>
                        </a>

                        <div id="notifications" class="dropdown-menu dropdown-menu-center py-0 mt-4 w-18_75rem w-md-22_5rem unfold-css-animation unfold-hidden" aria-labelledby="notificationsInvoker" style="animation-duration: 300ms;">
                            <div class="card">
                                <div class="card-header d-flex align-items-center border-bottom py-3">
                                    <h5 class="mb-0">Notifications</h5>
                                    <a class="link small ml-auto" href="#">Clear All</a>
                                </div>

                                <div class="card-body p-0">
                                    <div class="list-group list-group-flush">
                                        <div class="list-group-item list-group-item-action">
                                            <div class="d-flex align-items-center text-nowrap mb-2">
                                                <i class="gd-info-alt icon-text text-primary mr-2"></i>
                                                <h6 class="font-weight-semi-bold mb-0">New Update</h6>
                                                <span class="list-group-item-date text-muted ml-auto">just now</span>
                                            </div>
                                            <p class="mb-0">
                                                Order <strong>#10000</strong> has been updated.
                                            </p>
                                            <a class="list-group-item-closer text-muted" href="#"><i class="gd-close"></i></a>
                                        </div>
                                        <div class="list-group-item list-group-item-action">
                                            <div class="d-flex align-items-center text-nowrap mb-2">
                                                <i class="gd-info-alt icon-text text-primary mr-2"></i>
                                                <h6 class="font-weight-semi-bold mb-0">New Update</h6>
                                                <span class="list-group-item-date text-muted ml-auto">just now</span>
                                            </div>
                                            <p class="mb-0">
                                                Order <strong>#10001</strong> has been updated.
                                            </p>
                                            <a class="list-group-item-closer text-muted" href="#"><i class="gd-close"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End User Notifications -->
                    <!-- User Avatar -->
                    <div class="dropdown mx-3 dropdown ml-2">
                        <a id="profileMenuInvoker" class="header-complex-invoker" href="#" aria-controls="profileMenu" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-target="#profileMenu" data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-animation-in="fadeIn" data-unfold-animation-out="fadeOut">
                            <span class="mr-md-2 avatar-placeholder">{{ Auth::user()->name[0] }}</span>
                            <span class="d-none d-md-block">{{ Auth::user()->name }}</span>
                            <i class="gd-angle-down d-none d-md-block ml-2"></i>
                        </a>

                        <ul id="profileMenu" class="unfold unfold-user unfold-light unfold-top unfold-centered position-absolute pt-2 pb-1 mt-4 unfold-css-animation unfold-hidden fadeOut" aria-labelledby="profileMenuInvoker" style="animation-duration: 300ms;">
                            <li class="unfold-item">
                                <a class="unfold-link d-flex align-items-center text-nowrap" href="#">
                        <span class="unfold-item-icon mr-3">
                        <i class="gd-user"></i>
                        </span>
                                    My Profile
                                </a>
                            </li>
                            <li class="unfold-item unfold-item-has-divider">
                                <a class="unfold-link d-flex align-items-center text-nowrap" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <span class="unfold-item-icon mr-3">
                                    <i class="gd-power-off"></i>
                                    </span>
                                    Sign Out
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                    <!-- End User Avatar -->
                </div>
            </div>
        </nav>
    </header> 
@show
<!-- End Header -->

<main class="main">
    <!-- Sidebar Nav -->
    @section('sidebar')
        <aside id="sidebar" class="js-custom-scroll side-nav">
            <ul id="sideNav" class="side-nav-menu side-nav-menu-top-level mb-0">
                <!-- Title -->
                <li class="sidebar-heading h6">Menu Navigation</li>
                <!-- End Title -->

                <!-- Dashboard -->
                <li class="side-nav-menu-item">
                    <a class="side-nav-menu-link media align-items-center" href="{{ route('dashboard') }}">
                <span class="side-nav-menu-icon d-flex mr-3">
                    <i class="gd-dashboard"></i>
                </span>
                        <span class="side-nav-fadeout-on-closed media-body">Dashboard</span>
                    </a>
                </li>
                <!-- End Dashboard -->

                <!-- Data Merk Mobil -->
                <li class="side-nav-menu-item">
                    <a class="side-nav-menu-link media align-items-center" href="{{ route('brands.index') }}">
                <span class="side-nav-menu-icon d-flex mr-3">
                    <i class="gd-tag"></i>
                </span>
                        <span class="side-nav-fadeout-on-closed media-body">Data Merk</span>
                    </a>
                </li>
                <!-- End Data Merk Mobil -->

                <!-- Data Mobil -->
                <li class="side-nav-menu-item">
                    <a class="side-nav-menu-link media align-items-center" href="{{ route('cars.index') }}">
                <span class="side-nav-menu-icon d-flex mr-3">
                    <i class="gd-car"></i>
                </span>
                        <span class="side-nav-fadeout-on-closed media-body">Data Mobil</span>
                    </a>
                </li>
                <!-- End Data Mobil -->

                <!-- Transaksi -->
                <li class="side-nav-menu-item side-nav-has-menu">
                    <a class="side-nav-menu-link media align-items-center" href="#"
                       data-target="#subUsers">
                      <span class="side-nav-menu-icon d-flex mr-3">
                        <i class="gd-credit-card"></i>
                      </span>
                        <span class="side-nav-fadeout-on-closed media-body">Transaksi</span>
                        <span class="side-nav-control-icon d-flex">
                    <i class="gd-angle-right side-nav-fadeout-on-closed"></i>
                  </span>
                        <span class="side-nav__indicator side-nav-fadeout-on-closed"></span>
                    </a>
    
                    <!-- Transaksi: subTransaksi -->
                    <ul id="subUsers" class="side-nav-menu side-nav-menu-second-level mb-0">
                        <li class="side-nav-menu-item">
                            <a class="side-nav-menu-link" href="#">Data Pesanan</a>
                        </li>
                        <li class="side-nav-menu-item">
                            <a class="side-nav-menu-link" href="#">Riwayat Transaksi</a>
                        </li>
                    </ul>
                    <!-- End Transaksi: subTransaksi -->
                </li>
                <!-- End Transaksi -->
            </ul>
        </aside>   
    @show
    <!-- End Sidebar Nav -->

    <div class="content">
        @yield('content')

        <!-- Footer -->
        @section('footer')
            <footer class="small p-3 px-md-4 mt-auto">
                <div class="row justify-content-between">
                    <div class="col-lg text-center text-lg-left mb-3 mb-lg-0">
                        <ul class="list-dot list-inline mb-0">
                            <li class="list-dot-item list-dot-item-not list-inline-item mr-lg-2"><a class="link-dark" href="#">FAQ</a></li>
                            <li class="list-dot-item list-inline-item mr-lg-2"><a class="link-dark" href="#">Support</a></li>
                            <li class="list-dot-item list-inline-item mr-lg-2"><a class="link-dark" href="#">Contact us</a></li>
                        </ul>
                    </div>

                    <div class="col-lg text-center mb-3 mb-lg-0">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item mx-2"><a class="link-muted" href="#"><i class="gd-twitter-alt"></i></a></li>
                            <li class="list-inline-item mx-2"><a class="link-muted" href="#"><i class="gd-facebook"></i></a></li>
                            <li class="list-inline-item mx-2"><a class="link-muted" href="#"><i class="gd-github"></i></a></li>
                        </ul>
                    </div>

                    <div class="col-lg text-center text-lg-right">
                        &copy; 2019 Graindashboard. All Rights Reserved.
                    </div>
                </div>
            </footer>
        @show
        <!-- End Footer -->
    </div>
</main>


<script src="{{ asset('js/grains/graindashboard.js') }}"></script>
<script src="{{ asset('js/grains/graindashboard.vendor.js') }}"></script>

<!-- DEMO CHARTS -->
<script src="{{ asset('js/grains/resizeSensor.js') }}"></script>
<script src="{{ asset('js/grains/chartist.js') }}"></script>
<script src="{{ asset('js/grains/chartist-plugin-tooltip.js') }}"></script>
<script src="{{ asset('js/grains/gd.chartist-area.js') }}"></script>
<script src="{{ asset('js/grains/gd.chartist-bar.js') }}"></script>
<script src="{{ asset('js/grains/gd.chartist-donut.js') }}"></script>
<script>
    $.GDCore.components.GDChartistArea.init('.js-area-chart');
    $.GDCore.components.GDChartistBar.init('.js-bar-chart');
    $.GDCore.components.GDChartistDonut.init('.js-donut-chart');
</script>
</body>
</html>