@extends('layouts.pages')
@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header">
                        <h3>Browse Job</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="job-browse section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <div class="wrap-search-filter row">
                        <div class="col-lg-5 col-md-5 col-xs-12">
                            <input type="text" class="form-control" placeholder="Keyword: Name, Tag">
                        </div>
                        <div class="col-lg-5 col-md-5 col-xs-12">
                            <input type="text" class="form-control" placeholder="Location: City, State, Zip">
                        </div>
                        <div class="col-lg-2 col-md-2 col-xs-12">
                            <button type="submit" class="btn btn-common float-right">Filter</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-xs-12">
                            <div class="job-details">
                                <h6>Job Title</h6>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-xs-12 text-center">
                            <h6>Job Tag</h6>
                        </div>
                        <div class="col-lg-2 col-md-2 col-xs-12 text-right">
                            <h6>Location</h6>
                        </div>
                        <div class="col-lg-2 col-md-2 col-xs-12 text-right">
                            <h6>Closing Date</h6>
                        </div>
                    </div>
                    @foreach($job as $jobs)
                        <a class="job-listings" href="job-details.html">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-xs-12">
                                    <div class="job-company-logo">
                                        <img src="assets/img/features/img1.png" alt="">
                                    </div>
                                    <div class="job-details">
                                        <h3>{{ $jobs->job_title }}</h3>
                                        <span class="company-neme">
                                        {{ $jobs->owner }}
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-xs-12 text-center">
                                <span class="btn-open">
                                {{ $jobs->job_tag }}
                                </span>
                                </div>
                                <div class="col-lg-2 col-md-2 col-xs-12 text-right">
                                    <div class="location">
                                        <i class="lni-map-marker"></i> {{ $jobs->location }}
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-xs-12 text-right">
                                    <span class="btn-full-time">{{ $jobs->closing_date }}</span>
                                </div>
                                <div class="col-lg-2 col-md-2 col-xs-12 text-right">
                                    <span class="btn-apply">Apply Now</span>
                                </div>
                            </div>
                        </a>
                    @endforeach

                    <ul class="pagination">
                       <li>{{ $job->links() }}</li>
                    </ul>

                </div>
            </div>
        </div>
    </section>
@endsection
