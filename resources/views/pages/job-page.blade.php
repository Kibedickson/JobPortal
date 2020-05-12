@extends('layouts.pages')
@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header">
                        <h3>Find Job</h3>
                    </div>
                    <div class="job-search-form bg-cyan job-featured-search">
                        <form>
                            <div class="row justify-content-center">
                                <div class="col-lg-5 col-md-5 col-xs-12">
                                    <div class="form-group">
                                        <form action="">
                                            <label class="styled-select">
                                                <select name="location_id" id="location_id">
                                                    @foreach($job as $jobs)
                                                        <option value="{{ $jobs->id }}">{{ $jobs->job_title }}</option>
                                                    @endforeach
                                                </select>
                                            </label>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-xs-12">
                                    <div class="form-group">
                                        <div class="search-category-container">
                                            <form action="">
                                                <label class="styled-select">
                                                    <select name="locaion_id" id="location_id">
                                                        @foreach($job as $jobs)
                                                            <option value="{{ $jobs->id }}">{{ $jobs->location }}</option>
                                                        @endforeach
                               b                     </select>
                                                </label>
                                            </form>
                                        </div>
                                        <i class="lni-map-marker"></i>
                                    </div>
                                </div>
                                <div class="col-lg-1 col-md-1 col-xs-12">
                                    <button type="submit" class="button"><i class="lni-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section id="featured" class="section bg-cyan">
        <div class="container">
            <div class="row">
                @foreach($job as $jobs)
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <div class="job-featured">
                            <div class="icon">
                                <img src="assets/img/features/img1.png" alt="">
                            </div>
                            <div class="content">
                                <h3>{{ $jobs->job_title }}</h3>
                                <p class="brand">{{ $jobs->job_tag }}</p>
                                <div class="tags">
                                    <span><i class="lni-map-marker"></i> {{ $jobs->location }}</span>
                                    <span><i class="lni-user"></i>{{ $jobs->owner }}</span>
                                </div>
                                <span class="full-time">{{ $jobs->closing_date }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-12 text-center mt-4">
                    {{ $job->links() }}
                </div>
                <div class="col-12 text-center mt-4">
                    <a href="#" class="btn btn-common">Browse All Jobs</a>
                </div>
            </div>
        </div>
    </section>

@endsection
