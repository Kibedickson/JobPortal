<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>JobHunt</title>

    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/line-icons.css') }}">
    <link rel="stylesheet" href="https://cdn.lineicons.com/2.0/LineIcons.css">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/owl.theme.default.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/slicknav.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/responsive.css') }}">
</head>
<body>

<header id="home" class="hero-area">

    @include('layouts.nav')
</header>
@yield('content')

<footer>
    <div id="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="site-info text-center">
                        <p>Designed and Developed by <a href="https://uideck.com" rel="nofollow">Dickson</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>


<a href="#" class="back-to-top">
    <i class="lni lni-arrow-up"></i>
</a>

<div id="preloader">
    <div class="loader" id="loader-1"></div>
</div>


<script src="{{ URL::asset('assets/js/jquery-min.js') }}"></script>
<script src="{{ URL::asset('assets/js/popper.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/jquery.slicknav.js') }}"></script>
<script src="{{ URL::asset('assets/js/jquery.counterup.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/waypoints.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/form-validator.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/main.js') }}"></script>
</body>
</html>
