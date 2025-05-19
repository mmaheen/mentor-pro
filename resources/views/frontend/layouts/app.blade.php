<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mentor Pro - @yield('title') </title>
    <link rel="icon" href="{{ asset('assets/frontend/img/favicon.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.css') }}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.carousel.min.css') }}">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/themify-icons.css') }}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/flaticon.css') }}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/magnific-popup.css') }}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/slick.css') }}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
    <!-- custom CSS -->
    @yield('style')
</head>

<body>
    <!--::header part start::-->
    @include('frontend.layouts.header')
    <!-- Header part end-->

    @yield('content')

    <!-- footer part start-->
    @include('frontend.layouts.footer')
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="{{ asset('assets/frontend/js/jquery-1.12.1.min.js') }}"></script>
    <!-- popper js -->
    <script src="{{ asset('assets/frontend/js/popper.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
    <!-- easing js -->
    <script src="{{ asset('assets/frontend') }}/js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="{{ asset('assets/frontend') }}/js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="{{ asset('assets/frontend') }}/js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="{{ asset('assets/frontend') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('assets/frontend') }}/js/jquery.nice-select.min.js"></script>
    <!-- swiper js -->
    <script src="{{ asset('assets/frontend') }}/js/slick.min.js"></script>
    <script src="{{ asset('assets/frontend') }}/js/jquery.counterup.min.js"></script>
    <script src="{{ asset('assets/frontend') }}/js/waypoints.min.js"></script>
    <!-- custom js -->
    <script src="{{ asset('assets/frontend') }}/js/custom.js"></script>

    @yield('script')
</body>

</html>