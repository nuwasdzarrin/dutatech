<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('content-title') - {{config('app.name', 'Laravel')}}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('vesper') }}/assets/img/favicon.png" rel="icon">
    <link href="{{ asset('vesper') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vesper') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('vesper') }}/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="{{ asset('vesper') }}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ asset('vesper') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('vesper') }}/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{ asset('vesper') }}/assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="{{ asset('vesper') }}/assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('vesper') }}/assets/css/style.css" rel="stylesheet">
    @stack('head')

    <!-- =======================================================
    * Template Name: Vesperr - v2.3.1
    * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

        <div class="logo mr-auto">
{{--            <h1 class="text-light"><a href="index.html"><span>Vesperr</span></a></h1>--}}
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="/"><img src="{{ asset('vesper') }}/assets/img/logo/logo-dutatech.png" alt="" class="img-fluid"></a>
        </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="#intro">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="article">Artikel</a></li>
                <li><a href="#contact">Contact</a></li>
{{--                <li><a href="#team">Team</a></li>--}}
{{--                <li><a href="#pricing">Pricing</a></li>--}}
{{--                <li class="drop-down"><a href="">Drop Down</a>--}}
{{--                    <ul>--}}
{{--                        <li><a href="#">Drop Down 1</a></li>--}}
{{--                        <li class="drop-down"><a href="#">Drop Down 2</a>--}}
{{--                            <ul>--}}
{{--                                <li><a href="#">Deep Drop Down 1</a></li>--}}
{{--                                <li><a href="#">Deep Drop Down 2</a></li>--}}
{{--                                <li><a href="#">Deep Drop Down 3</a></li>--}}
{{--                                <li><a href="#">Deep Drop Down 4</a></li>--}}
{{--                                <li><a href="#">Deep Drop Down 5</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li><a href="#">Drop Down 3</a></li>--}}
{{--                        <li><a href="#">Drop Down 4</a></li>--}}
{{--                        <li><a href="#">Drop Down 5</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

                <li class="get-started"><a href="#">Mulai Sekarang</a></li>
            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->

@yield('content')

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6 text-lg-left text-center">
                <div class="copyright">
                    &copy; Copyright {{ date("Y") }} <strong>Duta Tech</strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/vesperr-free-bootstrap-template/ -->
                    Powered by <strong><a href="https://dua-tangan.com/" style="color: #fffb79;">PT Dua Tangan Indonesia</a></strong>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
                    <a href="/#intro" class="scrollto">Home</a>
                    <a href="/#about" class="scrollto">About</a>
                    <a href="/#">Privacy Policy</a>
                    <a href="/#">Terms of Use</a>
                </nav>
            </div>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('vesper') }}/assets/vendor/jquery/jquery.min.js"></script>
<script src="{{ asset('vesper') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('vesper') }}/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="{{ asset('vesper') }}/assets/vendor/php-email-form/validate.js"></script>
<script src="{{ asset('vesper') }}/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="{{ asset('vesper') }}/assets/vendor/counterup/counterup.min.js"></script>
<script src="{{ asset('vesper') }}/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="{{ asset('vesper') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="{{ asset('vesper') }}/assets/vendor/venobox/venobox.min.js"></script>
<script src="{{ asset('vesper') }}/assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="{{ asset('vesper') }}/assets/js/main.js"></script>
@stack('footer-script')
</body>

</html>
