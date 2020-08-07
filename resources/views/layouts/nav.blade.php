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
                    @if(Gate::allows('isCandidate'))
                        <li class="nav-item dropdown {{ (request()->is('browse-jobs','job-details')) ? 'active' : '' }}">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Candidates
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item {{ (request()->is('browse-jobs')) ? 'active' : '' }}" href="{{ route('jobs') }}">Browse Jobs</a></li>
                                <li><a class="dropdown-item {{ (request()->is('job-details')) ? 'active' : '' }}" href="">Job Details</a></li>
                            </ul>
                        </li>
                    @endif
                    @if(Gate::allows('isEmployer'))
                        <li class="nav-item dropdown {{ (request()->is('jobs/create', 'jobs','manage-applications')) ? 'active' : '' }}">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Employer
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item{{ (request()->is('jobs/create')) ? 'active' : '' }}" href="{{ route('jobs/create') }}">Add Job</a></li>
                                <li><a class="dropdown-item{{ (request()->is('jobs')) ? 'active' : '' }}" href="{{ route('jobs') }}">Manage Jobs</a></li>
                                <li><a class="dropdown-item{{ (request()->is('manage-applications')) ? 'active' : '' }}" href="">Manage Applications</a></li>
                            </ul>
                        </li>
                    @endif
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
                    @if(Gate::allows('isCandidate'))
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Profile
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('profiles') }}">My Resume</a></li>
                                <li><a class="dropdown-item" href="{{ route('applications') }}">Manage Applications</a></li>
                            </ul>
                        </li>
                    @endif
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
