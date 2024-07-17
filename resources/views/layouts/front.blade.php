<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ninico - Minimal eCommerce HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('front/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/swiper-bundle.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/spacing.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/main.css')}}">
</head>
<body>


<!--------------- header-section --------------->
@include('layouts.front.nav')
<!--------------- header-section-end --------------->

<main>
    @yield('content')
</main>

<!--------------- footer-section--------------->
@include('layouts.front.footer')
<!--------------- footer-section-end--------------->




    <!-- JS here -->
    <script src="{{asset('front/assets/js/jquery.js')}}"></script>
    <script src="{{asset('front/assets/js/waypoints.js')}}"></script>
    <script src="{{asset('front/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('front/assets/js/swiper-bundle.js')}}"></script>
    <script src="{{asset('front/assets/js/slick.js')}}"></script>
    <script src="{{asset('front/assets/js/magnific-popup.js')}}"></script>
    <script src="{{asset('front/assets/js/nice-select.js')}}"></script>
    <script src="{{asset('front/assets/js/counterup.js')}}"></script>
    <script src="{{asset('front/assets/js/wow.js')}}"></script>
    <script src="{{asset('front/assets/js/isotope-pkgd.js')}}"></script>
    <script src="{{asset('front/assets/js/imagesloaded-pkgd.js')}}"></script>
    <script src="{{asset('front/assets/js/countdown.js')}}"></script>
    <script src="{{asset('front/assets/js/ajax-form.js')}}"></script>
    <script src="{{asset('front/assets/js/meanmenu.js')}}"></script>
    <script src="{{asset('front/assets/js/jquery.knob.js')}}"></script>
    <script src="{{asset('front/assets/js/main.js')}}"></script>
</body>

</html>
