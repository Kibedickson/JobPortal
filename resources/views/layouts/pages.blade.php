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

    <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar">
        <div class="container">
            <div class="theme-header clearfix">

                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        <span class="lni lni-menu"></span>
                        <span class="lni lni-menu"></span>
                        <span class="lni lni-menu"></span>
                    </button>
                    <a href="/" class="navbar-brand"><img src="{{ URL::asset('assets/img/logo.png') }}" alt=""></a>
                </div>
                <div class="collapse navbar-collapse" id="main-navbar">
                    <ul class="navbar-nav mr-auto w-100 justify-content-end">
                        <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}">
                            <a class="nav-link" href="/">
                                Home
                            </a>
                        </li>
                        <li class="nav-item dropdown {{ (request()->is('browse-jobs','job-details')) ? 'active' : '' }}">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Candidates
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item {{ (request()->is('browse-jobs')) ? 'active' : '' }}" href="">Browse Jobs</a></li>
                                <li><a class="dropdown-item {{ (request()->is('job-details')) ? 'active' : '' }}" href="">Job Details</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown {{ (request()->is('jobs/create', 'jobs','manage-applications')) ? 'active' : '' }}">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Employer
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item{{ (request()->is('jobs/create')) ? 'active' : '' }}" href="{{ route('jobs.create') }}">Add Job</a></li>
                                <li><a class="dropdown-item{{ (request()->is('jobs')) ? 'active' : '' }}" href="{{ route('jobs.index') }}">Manage Jobs</a></li>
                                <li><a class="dropdown-item{{ (request()->is('manage-applications')) ? 'active' : '' }}" href="">Manage Applications</a></li>
                            </ul>
                        </li>
                        <li class="nav-item {{ (request()->is('contact')) ? 'active' : '' }}">
                            <a class="nav-link" href="">
                                Contact
                            </a>
                        </li>
                        <li class="nav-item {{ (request()->is('about')) ? 'active' : '' }}">
                            <a class="nav-link" href="">
                                About
                            </a>
                        </li>
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        <li class="button-group">
                            <a href="post-job" class="button btn btn-common">Post a Job</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="mobile-menu" data-logo="{{ URL::asset('assets/img/logo-mobile.png') }}"></div>
    </nav>
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
