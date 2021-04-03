<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ayurveda Admin Login Page</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css">

    <!-- Start WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/engine1/style.css') }}" />
    <script type="text/javascript" src="{{ asset('assets/engine1/jquery.js') }}"></script>
    <!-- End WOWSlider.com HEAD section -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    @yield('mycss')

</head>

<body>
    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__close">+</div>
        <ul class="offcanvas__widget">
            <li><span class="icon_search search-switch"></span></li>
            <li><a href="#"><span class="icon_heart_alt"></span>
                    <div class="tip">2</div>
                </a></li>
            <li><a href="shop-cart.html"><span class="icon_bag_alt"></span>
                    <div class="tip">3</div>
                </a></li>
        </ul>
        <div class="offcanvas__logo">
            <a href="/"><img src="{{ asset('assets/img/logo.png') }}" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__auth">
            <a href="myaccount.html">Login</a>
            <a href="#">Register</a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <div class="container-fluid fixed-top bg-white">
        <div class="row">
            <div class="col-xl-3 col-lg-2">
                <div class="header__logo">
                    <a href="/"><img src="{{ asset('assets/img/ayulogo.jpg') }}" alt="main"></a>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <nav class="header__menu ">
                    <ul>
                        <li class="active"><a href="/">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="/shop">Shop</a></li>
                        <li><a href="#">Products</a>
                            <ul class="dropdown">
                                <li><a href="capsule.html">Capsule</a></li>
                                <li><a href="cream.html">Cream</a></li>
                                <li><a href="juice.html">Juice</a></li>
                                <li><a href="oil.html">Oil</a></li>
                                <li><a href="shampoo.html">Shampoo</a></li>
                                <li><a href="soaps.html">Soap</a></li>
                                <li><a href="syrup.html">Syrup</a></li>
                                <li><a href="powder.html">Powder</a></li>
                                <li><a href="#">Tablets</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Contact Us </a></li>
                        <li><a href="#">Blog </a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-4 mt-3">
                <div class="header__right ">

                    <div class="row justify-content-center">

                        @if (Session::has('USER_LOGIN'))
                            <ul class="header__right__widget">
                                <li><span class="icon_search search-switch"></span></li>
                                <li>
                                    <div class="w3-dropdown-hover" style="font-size: 15px;">
                                        <button class="w3-button"
                                            style="background-color: white;">{{ $data->name }}</button>
                                        <input type="hidden" name="user_id" value="{{ $data->id }}">
                                        <div class="w3-dropdown-content w3-bar-block w3-border">
                                            <a href="/logout" class="w3-bar-item w3-button"
                                                style="font-size: 15px;">Logout</a>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="/user/dashboard" style="font-size: 15px;">Dashboard</a></li>
                                <li><a href="#"><span class="icon_heart_alt"></span>
                                        <div class="tip">2</div>
                                    </a></li>
                                <li><a href="/shopcart"><span class="icon_bag_alt"></span>
                                        <div class="tip">{{ $c }}</div>
                                    </a></li>
                            </ul>

                        @else
                            <ul class="header__right__widget">
                                <li><span class="icon_search search-switch"></span></li>
                                <li><a href="{{ route('userlogin') }}">Login</a></li>
                                <li><a href="/register">Register</a></li>
                            </ul>
                        @endif

                    </div>

                </div>
            </div>
        </div>
        <div class="canvas__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
    <!-- Header Section End -->
    {{-- spacing --}}
    <div class="" style="margin-top: 120px;"></div>


    @yield('mybody')



    <div class="instagram">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-4 col-md-6 col-sm-6 p-0">
                    <div class="instagram__item set-bg"
                        data-setbg="{{ asset('assets/img/instagram/aloevera-juice.jpg') }}">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ ayuveda_herbs</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-md-6 col-sm-6 p-0">
                    <div class="instagram__item set-bg"
                        data-setbg="{{ asset('assets/img/instagram/braino-fit-syrup.png') }}">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ ayuveda_herbs</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-md-6 col-sm-6 p-0">
                    <div class="instagram__item set-bg"
                        data-setbg="{{ asset('assets/img/instagram/natulooz-powder.png') }}">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ ayuveda_herbs</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-md-6 col-sm-6 p-0">
                    <div class="instagram__item set-bg"
                        data-setbg="{{ asset('assets/img/instagram/neem-alovera-soap.png') }}">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ ayuveda_herbs</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-md-6 col-sm-6 p-0">
                    <div class="instagram__item set-bg"
                        data-setbg="{{ asset('assets/img/instagram/oliade-oil.jpg') }}">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ ayuveda_herbs</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-md-6 col-sm-6 p-0">
                    <div class="instagram__item set-bg"
                        data-setbg="{{ asset('assets/img/instagram/natulooz-powder.png') }}">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ ayuveda_herbs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Instagram End -->



    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-7">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="./index.html"><img src="{{ asset('assets/img/ayulogo.jpg') }}" alt=""></a>
                        </div>
                        <p>
                            An Ayurvedic Webstore of Ind Swift Ltd. Ayurvedic division.</p>
                        <div class="footer__payment">
                            <a href="#"><img src="{{ asset('assets/img/payment/payment-1.png') }}" alt=""></a>
                            <a href="#"><img src="{{ asset('assets/img/payment/payment-2.png') }}" alt=""></a>
                            <a href="#"><img src="{{ asset('assets/img/payment/payment-3.png') }}" alt=""></a>
                            <a href="#"><img src="{{ asset('assets/img/payment/payment-4.png') }}" alt=""></a>
                            <a href="#"><img src="{{ asset('assets/img/payment/payment-5.png') }}" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-5">
                    <div class="footer__widget">
                        <h6>Policies</h6>
                        <ul>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Return & Refund Policy</a></li>
                            <li><a href="#">Shipping Policy</a></li>
                            <li><a href="#">Terms and Conditions</a></li>
                            <li><a href="#">Wishlist</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="footer__widget">
                        <h6>Account</h6>
                        <ul>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Orders Tracking</a></li>
                            <li><a href="#">Checkout</a></li>
                            <li><a href="#">Wishlist</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-8">
                    <div class="footer__newslatter">
                        <h6>Contact Us</h6>
                        <p>Ind-Swift Ltd 781, Industrial Area Phase II Chandigarh-160 002 (India)</p>
                        <p> Phone Number:-0172-4680800, 8288814523<br>
                            E-mail: - marketing@indswift.com
                        </p>
                        <div class="footer__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <div class="footer__copyright__text">
                        <p>Copyright &copy; <script>
                                document.write(new Date().getFullYear());

                            </script> All rights reserved | Designed & Devloped by <a href="https://confianzamedia.com/"
                                target="_blank">Confianzamedia.com</a></p>
                    </div>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @yield('myjs')
</body>

</html>
