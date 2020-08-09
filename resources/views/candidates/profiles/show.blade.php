@extends('layouts.pages')
@section('content')

    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header">
                        <h3>Manage Applications</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="content">
        <div class="container">
            <div class="row">
                @include('layouts.sidebar')
                <div class="col-lg-8 col-md-12 col-xs-12">
                    <div class="job-alerts-item">
                        <h3 class="alerts-title">Manage applications</h3>
                        @foreach($applications as $application)
                            <div class="applications-content">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="thumb">
                                            <img src="{{ url('assets/img/jobs/img-1.jpg') }}" alt="">
                                        </div>
                                        <h3>{{ $application->job->title }}</h3>
                                        <span>{{ $application->job->location }}</span>
                                    </div>
                                    <div class="col-md-3">
                                        <p><span>{{ $application->job->category }}</span></p>
                                    </div>
                                    <div class="col-md-3">
                                        <p>{{\Carbon\Carbon::parse($application->job->deadline)->diffForHumans()}}</p>
                                    </div>
                                    <div class="col-md-2">
                                        @if($application->job->candidate_id === $application->candidate_id)
                                        <p class="text-success">Accepted</p>
                                        @else
                                        <p class="text-danger">Processing</p>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
