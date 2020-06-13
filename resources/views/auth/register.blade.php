@extends('layouts.pages')
@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header">
                        <h3>Create Your account</h3>
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
                            Create Your account
                        </h3>
                        <form class="login-form" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <div class="input-icon">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input id="employer" type="radio"  class=" @error('role_id') is-invalid @enderror" name="role_id" value="2" checked required > Employer
                                        </div>
                                        <div class="col-md-6">
                                            <input id="candidate" type="radio" class=" @error('role_id') is-invalid @enderror" name="role_id" value="3" required> Candidate
                                        </div>
                                    </div>
                                    @error('role_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div><div class="form-group">
                                <div class="input-icon">
                                    <i class="lni-user"></i>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-icon">
                                    <i class="lni-envelope"></i>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" name="email" placeholder="Email Address">
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
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-icon">
                                    <i class="lni-unlock"></i>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Retype Password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-common log-btn mt-3">
                                {{ __('Register') }}
                            </button>
                            <p class="text-center">Already have an account?<a href="{{ route('login') }}"> Login</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
