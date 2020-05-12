@extends('layouts.pages')

@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header">
                        <h3>Login</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section id="content" class="section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6 col-xs-12">
                    <div class="page-login-form box">
                        <h3>
                            Login
                        </h3>
                        <form class="login-form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <div class="input-icon">
                                    <i class="lni-user"></i>
                                    <input id="sender-email email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Username">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-icon">
                                    <i class="lni-lock"></i>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                            </div>
                            <button type="submit" class="btn btn-common log-btn">
                                {{ __('Login') }}
                            </button>
                        </form>
                        <p class="text-center">Don't have an account?<a href="{{ route('register') }}"> Register</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
