<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('page-title', 'Rental App')</title>

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicons/favicon.png')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet">

    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <!-- <link rel="stylesheet" href="assets/css/app.min.css"> -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css')}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.min.css')}}">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="{{asset('assets/css/slick.min.css')}}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>

<body>

    <!--********************************
  Code Start From Here 
	******************************** -->

    @include('frontend.partials.header')

    @yield('page-content')

    @include('frontend.partials.footer')

    <!-- Scroll To Top -->
    <a href="#" class="scrollToTop scroll-btn"><i class="far fa-arrow-up"></i></a>

    <!-- ==============================
  All Js File
================================ -->
    <!-- Jquery -->
    <script src="{{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <!-- Slick Slider -->
    <script src="{{asset('assets/js/slick.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- Magnific Popup -->
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- jquery Ui -->
    <script src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
    <!-- Circle Progress -->
    <script src="{{asset('assets/js/circle-progress.min.js')}}"></script>
    <!-- isotope -->
    <script src="{{asset('assets/js/imagesLoaded.js')}}"></script>
    <script src="{{asset('assets/js/isotope.js')}}"></script>
    <!-- Wow.js -->
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <!-- Main Js File -->
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>