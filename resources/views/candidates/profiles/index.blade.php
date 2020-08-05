@extends('layouts.pages')
@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header">
                        <h3>Profile</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section">
        <div class="container">
            <div class="row">
                @include('layouts.sidebar')
                @foreach($resumes as $resume)
                    <div class="col-lg-8 col-md-8 col-xs-12">
                        <div class="inner-box my-resume">
                            <div class="author-resume">
                                <div class="thumb">
                                    <img src="assets/img/resume/img-1.png" alt="">
                                </div>
                                <div class="btn float-right">
                                    <a href="/profiles/{{$resume->id}}/edit">Edit</a>
                                </div>
                                <div class="author-info">
                                    <h3>{{ auth()->user()->name }}</h3>
                                    <p>{{ $resume->age }} years</p>
                                    <p class="sub-title">{{ $resume->title }}</p>
                                    <p><span class="address"><i class="lni-map-marker"></i>{{ $resume->location }} </span> </p>
                                    <div class="social-link">
                                        <ul>
                                            <li>{{ $resume->skill }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="education item">
                                <h3>Education</h3>
                                <h4>{{ $resume->school }}</h4>
                                <p>{{ $resume->degree }} of {{ $resume->field }}</p>
                                <span class="date">{{ $resume->year }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
