<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="HVAC Template">
    <meta name="keywords" content="HVAC, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Showroom Mobil</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('css/hvac/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/hvac/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/hvac/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/hvac/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/hvac/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/hvac/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/hvac/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/hvac/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/hvac/style.css') }}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__logo">
            <a href="./index.html"><img src="{{ asset('img/logo.png') }}" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <ul class="offcanvas__widget__add">
            <li><i class="fa fa-clock-o"></i> Week day: 08:00 am to 18:00 pm</li>
            <li><i class="fa fa-envelope-o"></i> Info.colorlib@gmail.com</li>
        </ul>
        <div class="offcanvas__phone__num">
            <i class="fa fa-phone"></i>
            <span>(+12) 345 678 910</span>
        </div>
        <div class="offcanvas__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <ul class="header__top__widget">
                            <li><i class="fa fa-clock-o"></i> Week day: 08:00 am to 18:00 pm</li>
                            <li><i class="fa fa-envelope-o"></i> info.grain-showroom@gmail.com</li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="header__top__right">
                            <div class="header__top__phone">
                                <i class="fa fa-phone"></i>
                                <span>(+62) 858 8224 5529</span>
                            </div>
                            <div class="header__top__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="./index.html"><img src="{{ asset('img/logo.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <span class="fa fa-bars"></span>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Content -->
    @yield('content')
    <!-- Content End -->

    <!-- Footer Section Begin -->
    <footer class="footer set-bg" data-setbg="{{ asset('img/footer-bg.jpg') }}">
        <div class="container">
            <div class="footer__contact">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__contact__title">
                            <h2>Contact Us Now!</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__contact__option">
                            <div class="option__item"><i class="fa fa-phone"></i> (+62) 858 8224 5529</div>
                            <div class="option__item email"><i class="fa fa-envelope-o"></i> grain-showroom@gmail.com</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="{{ asset('img/footer-hvac.png') }}" alt=""></a>
                        </div>
                        <p>Kunjungi showroom kami di Jalanin Aja Yuk, Siapa Tau Jodoh.</p>
                        <div class="footer__social">
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="google"><i class="fa fa-google"></i></a>
                            <a href="#" class="skype"><i class="fa fa-skype"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <div class="footer__copyright__text">
                <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
            </div>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{ asset('js/hvac/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/hvac/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/hvac/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/hvac/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/hvac/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/hvac/mixitup.min.js') }}"></script>
    <script src="{{ asset('js/hvac/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('js/hvac/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/hvac/main.js') }}"></script>
</body>

</html>