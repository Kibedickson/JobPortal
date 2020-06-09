@extends('layouts.pages')
@section('content')
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-6 col-xs-12">
                        <div class="breadcrumb-wrapper">
                            <div class="img-wrapper">
                                <img src="assets/img/about/company-logo.png" alt="">
                            </div>
                            <div class="content">
                                <h3 class="product-title">{{ $job->job_title }}</h3>
                                <p class="brand">{{ $job->owner }}</p>
                                <div class="tags">
                                    <span><i class="lni-map-marker"></i> {{ $job->location }}</span>
                                    <span><i class="lni-calendar"></i> {{ $job->closing_date }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <div class="month-price">
                            <span class="year">Yearly</span>
                            <div class="price">$65,000</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="job-detail section">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-8 col-md-12 col-xs-12">
                    </div>
                    <div class="col-lg-6 col-md-12 col-xs-12">
                        <div class="sideber">
                            <div class="widghet">
                                <h4>Job Description</h4>
                                <h6>{{ $job->description }}</h6>
                                <h5>What You Need for this Position</h5>
                                <ul>
                                    <li>{{ $job->job_tag }}</li>
                                </ul>
                                <a href="#" class="btn btn-common">Apply job</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
