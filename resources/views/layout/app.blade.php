<!DOCTYPE html>
<html lang="eng">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Awaiken">
    <!-- Page Title -->
    <title>Notam - @yield('title')</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    <!-- Google Fonts Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="{{ url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&amp;display=swap') }}"
        rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
    <!-- SlickNav Css -->
    <link href="{{ asset('assets/css/slicknav.min.css') }}" rel="stylesheet">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <!-- Font Awesome Icon Css-->
    <link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet" media="screen">
    <!-- Animated Css -->
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!-- Mouse Cursor Css File -->
    <link rel="stylesheet" href="{{ asset('assets/css/mousecursor.css') }}">
    <!-- Main Custom Css -->
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" media="screen">
</head>

<body>

    <!-- Preloader Start -->
    {{-- <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="images/loader.svg" alt=""></div>
        </div>
    </div> --}}
    <!-- Preloader End -->

    <!-- Header Start -->
    @include('layout.header')
    <!-- Header End -->

    <!-- Hero Section Start -->
    @yield('content')

    <!-- Footer Section Start -->
    <footer class="footer-section">
        <div class="footer-box bg-section">
            <div class="footer-title">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Footer Title Content Start -->
                            <div class="footer-title-content">
                                <h2><a href="contact.html">Let's Connect</a></h2>
                            </div>
                            <!-- Footer Title Content End -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Footer Start -->
            <div class="main-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <!-- About Footer Start -->
                            <div class="about-footer">
                                <!-- Footer Logo Start -->
                                <div class="footer-logo">
                                    <img src="images/footer-logo.svg" alt="">
                                </div>
                                <!-- Footer Logo End -->

                                <!-- About Footer Content Start -->
                                <div class="about-footer-content">
                                    <p>The creativity and professionalism shown by Rovex exceeded our expectations.
                                        Their design transformed our brand, and the results speak for themselves.</p>
                                </div>
                                <!-- Footer Social Links Start -->
                                <div class="footer-social-links">
                                    <ul>
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                                <!-- Footer Social Links End -->

                            </div>
                            <!-- About Footer End -->
                        </div>

                        <div class="col-lg-2 col-md-3 col-6">
                            <!-- About Links Start -->
                            <div class="footer-links">
                                <h3>quick links</h3>
                                <ul>
                                    <li><a href="index-2.html">home</a></li>
                                    <li><a href="about.html">about us</a></li>
                                    <li><a href="team.html">team</a></li>
                                    <li><a href="portfolio.html">our portfolio</a></li>
                                </ul>
                            </div>
                            <!-- About Links End -->
                        </div>

                        <div class="col-lg-3 col-md-4 col-6">
                            <!-- About Links Start -->
                            <div class="footer-links">
                                <h3>our services</h3>
                                <ul>
                                    <li><a href="service-single.html">UI/UX Design</a></li>
                                    <li><a href="service-single.html">3D Designs</a></li>
                                    <li><a href="service-single.html">Web Development</a></li>
                                    <li><a href="service-single.html">Motion Graphics</a></li>
                                </ul>
                            </div>
                            <!-- About Links End -->
                        </div>

                        <div class="col-lg-3 col-md-5">
                            <!-- About Links Start -->
                            <div class="footer-contact">
                                <h3>contact info</h3>
                                <!-- Footer Contact Details Start -->
                                <div class="footer-contact-details">
                                    <!-- Footer Info Box Start -->
                                    <div class="footer-info-box">
                                        <div class="icon-box">
                                            <i class="fa-solid fa-phone"></i>
                                        </div>
                                        <div class="footer-info-box-content">
                                            <p><a href="tel:456852789">+01 456-852-789</a></p>
                                        </div>
                                    </div>
                                    <!-- Footer Info Box End -->

                                    <!-- Footer Info Box Start -->
                                    <div class="footer-info-box">
                                        <div class="icon-box">
                                            <i class="fa-solid fa-envelope"></i>
                                        </div>
                                        <div class="footer-info-box-content">
                                            <p><a href="#">info@domainname.com</a></p>
                                        </div>
                                    </div>
                                    <!-- Footer Info Box End -->

                                    <!-- Footer Info Box Start -->
                                    <div class="footer-info-box">
                                        <div class="icon-box">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </div>
                                        <div class="footer-info-box-content">
                                            <p>843, Apple LanePeoria</p>
                                        </div>
                                    </div>
                                    <!-- Footer Info Box End -->
                                </div>
                                <!-- Footer Contact Details End -->
                            </div>
                            <!-- About Links End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Footer End -->

            <!-- Footer Copyright Section Start -->
            <div class="footer-copyright">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <!-- Footer Copyright Start -->
                            <div class="footer-copyright-text">
                                <p>Copyright © 2025 All Rights Reserved.</p>
                            </div>
                            <!-- Footer Copyright End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Copyright Section End -->
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Jquery Library File -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <!-- Bootstrap js file -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Validator js file -->
    <script src="{{ asset('assets/js/validator.min.js') }}"></script>
    <!-- SlickNav js file -->
    <script src="{{ asset('assets/js/jquery.slicknav.js') }}"></script>
    <!-- Swiper js file -->
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <!-- Counter js file -->
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <!-- Isotop js file -->
    <script src="{{ asset('assets/js/isotope.min.js') }}"></script>
    <!-- Magnific js file -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- SmoothScroll -->
    <script src="{{ asset('assets/js/SmoothScroll.js') }}"></script>
    <!-- Parallax js -->
    <script src="{{ asset('assets/js/parallaxie.js') }}"></script>
    <!-- MagicCursor js file -->
    <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/magiccursor.js') }}"></script>
    <!-- Text Effect js file -->
    <script src="{{ asset('assets/js/SplitText.js') }}"></script>
    <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
    <!-- YTPlayer js File -->
    <script src="{{ asset('assets/js/jquery.mb.YTPlayer.min.js') }}"></script>
    <!-- Wow js file -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <!-- Main Custom js file -->
    <script src="{{ asset('assets/js/function.js') }}"></script>
</body>


</html>
