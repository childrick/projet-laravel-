<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from template.hasthemes.com/flone/flone/index-24.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Dec 2021 08:49:36 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('titre')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/icons.min.css') }}">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
<header class="header-area clearfix">
    <div class="header-top-area border-none header-padding-2">
        <div class="container-fluid">
            <div class="header-top-wap border-bottom-1">
                @include('layouts.language')
                <div class="header-offer">
                    <p>Free delivery on order over <span>$200</span></p>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom sticky-bar header-res-padding header-padding-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-6 col-4">
                    <div class="logo">
                        <a href="index.html">
                            <img alt="" src="assets/img/logo/logo.png">
                        </a>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 d-none d-lg-block">
                    <div class="main-menu">
@include('layouts.navbar')
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-6 col-8">
@include('layouts.headerright')
                </div>
            </div>
@include('layouts.menumobile')
        </div>
    </div>
</header>
<!-- debut slider -->
@include('layouts.slider')
<!-- fin slider -->

<!-- debut banner -->
{{-- <div class="banner-area pb-70 pt-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="single-banner mb-30">
                    <a href="product-details.html"><img src="assets/img/banner/banner-54.png" alt=""></a>
                    <div class="banner-content">
                        <h3>Dog Food</h3>
                        <h4>Starting at <span>$99.00</span></h4>
                        <a href="product-details.html"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="single-banner mb-30">
                    <a href="product-details.html"><img src="assets/img/banner/banner-55.png" alt=""></a>
                    <div class="banner-content">
                        <h3>Fish Food</h3>
                        <h4>Starting at <span>$79.00</span></h4>
                        <a href="product-details.html"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="single-banner mb-30">
                    <a href="product-details.html"><img src="assets/img/banner/banner-56.png" alt=""></a>
                    <div class="banner-content">
                        <h3>Cat Food</h3>
                        <h4>Starting at <span>$79.00</span></h4>
                        <a href="product-details.html"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- fin banner -->

<!-- debut suppoer -->
<!-- fin suppoer -->

<!-- debut contenu -->
@yield("contenu")
<!-- fin contenu -->

<footer class="footer-area bg-gray pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-4">
                <div class="copyright mb-30">
                    <div class="footer-logo">
                        <a href="index.html">
                            <img alt="" src="assets/img/logo/logo.png">
                        </a>
                    </div>
                    <p>© 2021 <a href="#">Flone</a>.<br> All Rights Reserved</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4">
                <div class="footer-widget mb-30 ml-30">
                    <div class="footer-title">
                        <h3>ABOUT US</h3>
                    </div>
                    <div class="footer-list">
                        <ul>
                            <li><a href="about.html">About us</a></li>
                            <li><a href="#">Store location</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="#">Orders tracking</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4">
                <div class="footer-widget mb-30 ml-50">
                    <div class="footer-title">
                        <h3>USEFUL LINKS</h3>
                    </div>
                    <div class="footer-list">
                        <ul>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Support Policy</a></li>
                            <li><a href="#">Size guide</a></li>
                            <li><a href="#">FAQs</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="footer-widget mb-30 ml-75">
                    <div class="footer-title">
                        <h3>FOLLOW US</h3>
                    </div>
                    <div class="footer-list">
                        <ul>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Instagram</a></li>
                            <li><a href="#">Youtube</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="footer-widget mb-30 ml-70">
                    <div class="footer-title">
                        <h3>SUBSCRIBE</h3>
                    </div>
                    <div class="subscribe-style">
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <div id="mc_embed_signup" class="subscribe-form">
                            <form id="mc-embedded-subscribe-form" class="validate" novalidate="" target="_blank" name="mc-embedded-subscribe-form" method="post" action="https://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                                <div id="mc_embed_signup_scroll" class="mc-form">
                                    <input class="email" type="email" required="" placeholder="Enter your email here.." name="EMAIL" value="">
                                    <div class="mc-news" aria-hidden="true">
                                        <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                                    </div>
                                    <div class="clear">
                                        <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe" value="Subscribe">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="assets/js/vendor/modernizr-3.11.7.min.js"></script>
<script src="assets/js/vendor/jquery-v3.6.0.min.js"></script>
<script src="assets/js/vendor/jquery-migrate-v3.3.2.min.js"></script>
<script src="assets/js/vendor/popper.min.js"></script>
<script src="assets/js/vendor/bootstrap.min.js"></script>
<script src="assets/js/plugins.js"></script>
<!-- Ajax Mail -->
<script src="assets/js/ajax-mail.js"></script>
<!-- Main JS -->
<script src="assets/js/main.js"></script>
</body>
</html>
