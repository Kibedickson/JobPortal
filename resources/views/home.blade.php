@extends('layouts.pages')
@section('content')
    <header>
    <div id="carousel-area">
        <div id="carousel-slider" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-slider" data-slide-to="1"></li>
                <li data-target="#carousel-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="{{ URL::asset('assets/img/slider/bg-1.jpg') }}" alt="">
                    <div class="carousel-caption text-left">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <h2 class="wow fadeInRight" data-wow-delay="0.4s">Find the job you <br> deserve</h2>
                                <p class="wow fadeInRight" data-wow-delay="0.6s">Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. <br> Vestibulum congue posuere lacus, id tincidunt nisi porta sit amet.</p>
                                <a href="job-page" class="btn btn-lg btn-common btn-effect wow fadeInRight" data-wow-delay="0.9s">See our jobs</a>
                                <a href="job-page" class="btn btn-lg btn-border wow fadeInRight" data-wow-delay="1.2s">Search jobs</a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
                                <div class="img-wrapper wow fadeInUp" data-wow-delay="0.6s">
                                    <img src="{{ URL::asset('assets/img/slider/img-1.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ URL::asset('assets/img/slider/bg-1.jpg') }}" alt="">
                    <div class="carousel-caption text-left">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <h2 class="wow fadeInUp" data-wow-delay="0.4s">100+ Jobs waiting <br>for you!</h2>
                                <p class="wow fadeInUp" data-wow-delay="0.6s">Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. <br> Vestibulum congue posuere lacus, id tincidunt nisi porta sit amet.</p>
                                <a href="job-page" class="btn btn-lg btn-common btn-effect wow fadeInUp" data-wow-delay="0.9s">See our jobs</a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
                                <div class="img-wrapper wow fadeInUp" data-wow-delay="0.6s">
                                    <img src="{{ URL::asset('assets/img/slider/img-2.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ URL::asset('assets/img/slider/bg-1.jpg') }}" alt="">
                    <div class="carousel-caption text-left">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <h2 class="wow fadeInRight" data-wow-delay="0.4s">Post a job and hunt <br> amazing talents</h2>
                                <p class="wow fadeInRight" data-wow-delay="0.6s">Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. <br> Vestibulum congue posuere lacus, id tincidunt nisi porta sit amet.</p>
                                <a href="#" class="btn btn-lg btn-common btn-effect wow fadeInRight" data-wow-delay="0.9s">Create Account</a>
                                <a href="post-job" class="btn btn-lg btn-border wow fadeInRight" data-wow-delay="1.2s">Post Job</a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
                                <div class="img-wrapper wow fadeInUp" data-wow-delay="0.6s">
                                    <img src="{{ URL::asset('assets/img/slider/img-3.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel-slider" role="button" data-slide="prev">
                <span class="carousel-control" aria-hidden="true"><i class="lni lni-chevron-left"></i></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-slider" role="button" data-slide="next">
                <span class="carousel-control" aria-hidden="true"><i class="lni lni-chevron-right"></i></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    </header>
<div id="apply">
    <div class="container-fulid">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-xs-12 no-padding">
                <div class="recruiter item-box">
                    <div class="content-inner">
                        <h5>I'm</h5>
                        <h3>Employer!</h3>
                        <p>Post a job to tell us about your project. We'll quickly match you with <br> the right jobseeker.</p>
                        <a href="post-job" class="btn btn-border-filled">Post a Job</a>
                    </div>
                    <div class="img-thumb">
                        <i class="lni lni-users"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-xs-12 no-padding">
                <div class="jobseeker item-box">
                    <div class="content-inner">
                        <h5>I'm</h5>
                        <h3>Jobseeker!</h3>
                            <p>Search the job you deserve. We'll quickly match you with <br> the right employer.</p>
                        <a href="browse-jobs" class="btn btn-border-filled">Browser Jobs</a>
                    </div>
                    <div class="img-thumb">
                        <i class="lni lni-leaf"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="browse-catagories section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Browse by Catagories</h2>
            <p></p>
        </div>


        <div class="row">
            @foreach($job as $jobs)
                <div class="col-lg-3 col-md-4 col-xs-12">
                    <a href="browse-categories.html" class="img-box">
                        <div class="img-box-content">
                            <h4>{{ $jobs->category }}</h4>
                            <span>2379 Jobs</span>
                        </div>
                        <div class="img-box-background">
                            <img class="img-fluid" src="{{ URL::asset('assets/img/categories/img2.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>


<section id="featured" class="section bg-cyan">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Featured Jobs</h2>
            <p></p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="job-featured">
                    <div class="icon">
                        <img src="{{ URL::asset('assets/img/features/img1.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h3><a href="job-details.html">Software Engineer</a></h3>
                        <p class="brand">MizTech</p>
                        <div class="tags">
                            <span><i class="lni lni-map-marker"></i> New York</span>
                            <span><i class="lni lni-user"></i>John Smith</span>
                        </div>
                        <span class="full-time">Full Time</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="job-featured">
                    <div class="icon">
                        <img src="{{ URL::asset('assets/img/features/img2.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h3><a href="job-details.html">Graphic Designer</a></h3>
                        <p class="brand">Hunter Inc.</p>
                        <div class="tags">
                            <span><i class="lni lni-map-marker"></i> New York</span>
                            <span><i class="lni lni-user"></i>John Smith</span>
                        </div>
                        <span class="part-time">Part Time</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="job-featured">
                    <div class="icon">
                        <img src="{{ URL::asset('assets/img/features/img3.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h3><a href="job-details.html">Managing Director</a></h3>
                        <p class="brand">MagNews</p>
                        <div class="tags">
                            <span><i class="lni lni-map-marker"></i> New York</span>
                            <span><i class="lni lni-user"></i>John Smith</span>
                        </div>
                        <span class="full-time">Full Time</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="job-featured">
                    <div class="icon">
                        <img src="{{ URL::asset('assets/img/features/img4.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h3><a href="job-details.html">Software Engineer</a></h3>
                        <p class="brand">AmazeSoft</p>
                        <div class="tags">
                            <span><i class="lni lni-map-marker"></i> New York</span>
                            <span><i class="lni lni-user"></i>John Smith</span>
                        </div>
                        <span class="full-time">Full Time</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="job-featured">
                    <div class="icon">
                        <img src="{{ URL::asset('assets/img/features/img5.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h3><a href="job-details.html">Graphic Designer</a></h3>
                        <p class="brand">Bingo</p>
                        <div class="tags">
                            <span><i class="lni lni-map-marker"></i> New York</span>
                            <span><i class="lni lni-user"></i>John Smith</span>
                        </div>
                        <span class="part-time">Part Time</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="job-featured">
                    <div class="icon">
                        <img src="{{ URL::asset('assets/img/features/img6.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h3><a href="job-details.html">Managing Director</a></h3>
                        <p class="brand">MagNews</p>
                        <div class="tags">
                            <span><i class="lni lni-map-marker"></i> New York</span>
                            <span><i class="lni lni-user"></i>John Smith</span>
                        </div>
                        <span class="full-time">Full Time</span>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center mt-4">
                <a href="job-page.html" class="btn btn-common">Browse All Jobs</a>
            </div>
        </div>
    </div>
</section>


<section id="job-listings" class="section bg-cyan">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Recent Job Post</h2>
            <p></p>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <a class="job-listings" href="job-details.html">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-xs-12">
                            <div class="job-company-logo">
                                <img src="{{ URL::asset('assets/img/features/img1.png') }}" alt="">
                            </div>
                            <div class="job-details">
                                <h3>App Developer</h3>
                                <span class="company-neme">
AmazeSoft
</span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-xs-12 text-center">
<span class="btn-open">
7 Open Jobs
</span>
                        </div>
                        <div class="col-lg-2 col-md-2 col-xs-12 text-right">
                            <div class="location">
                                <i class="lni lni-map-marker"></i> New Yourk, US
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-xs-12 text-right">
                            <span class="btn-full-time">Full Time</span>
                        </div>
                        <div class="col-lg-2 col-md-2 col-xs-12 text-right">
                            <span class="btn-apply">Apply Now</span>
                        </div>
                    </div>
                </a>
                <a class="job-listings" href="job-details.html">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-xs-12">
                            <div class="job-company-logo">
                                <img src="{{ URL::asset('assets/img/features/img2.png') }}" alt="">
                            </div>
                            <div class="job-details">
                                <h3>App Developer</h3>
                                <span class="company-neme">
AmazeSoft
</span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-xs-12 text-center">
<span class="btn-open">
7 Open Jobs
</span>
                        </div>
                        <div class="col-lg-2 col-md-2 col-xs-12 text-right">
                            <div class="location">
                                <i class="lni lni-map-marker"></i> New Yourk, US
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-xs-12 text-right">
                            <span class="btn-full-time">Full Time</span>
                        </div>
                        <div class="col-lg-2 col-md-2 col-xs-12 text-right">
                            <span class="btn-apply">Apply Now</span>
                        </div>
                    </div>
                </a>
                <a class="job-listings" href="job-details.html">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-xs-12">
                            <div class="job-company-logo">
                                <img src="{{ URL::asset('assets/img/features/img3.png') }}" alt="">
                            </div>
                            <div class="job-details">
                                <h3>App Developer</h3>
                                <span class="company-neme">
AmazeSoft
</span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-xs-12 text-center">
<span class="btn-open">
7 Open Jobs
</span>
                        </div>
                        <div class="col-lg-2 col-md-2 col-xs-12 text-right">
                            <div class="location">
                                <i class="lni lni-map-marker"></i> New Yourk, US
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-xs-12 text-right">
                            <span class="btn-full-time">Full Time</span>
                        </div>
                        <div class="col-lg-2 col-md-2 col-xs-12 text-right">
                            <span class="btn-apply">Apply Now</span>
                        </div>
                    </div>
                </a>
                <a class="job-listings" href="job-details.html">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-xs-12">
                            <div class="job-company-logo">
                                <img src="{{ URL::asset('assets/img/features/img4.png') }}" alt="">
                            </div>
                            <div class="job-details">
                                <h3>App Developer</h3>
                                <span class="company-neme">
AmazeSoft
</span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-xs-12 text-center">
<span class="btn-open">
7 Open Jobs
</span>
                        </div>
                        <div class="col-lg-2 col-md-2 col-xs-12 text-right">
                            <div class="location">
                                <i class="lni lni-map-marker"></i> New Yourk, US
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-xs-12 text-right">
                            <span class="btn-full-time">Full Time</span>
                        </div>
                        <div class="col-lg-2 col-md-2 col-xs-12 text-right">
                            <span class="btn-apply">Apply Now</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 text-center mt-4">
                <a href="#" class="btn btn-common">Load more listing</a>
            </div>
        </div>
    </div>
</section>


<section class="how-it-works section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">How It Works?</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ellentesque dignissim quam et <br> metus effici turac fringilla lorem facilisis.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                <div class="work-process">
<span class="process-icon">
<i class="lni lni-user"></i>
</span>
                    <h4>Create an Account</h4>
                    <p>Post a job to tell us about your project. We'll quickly match you with the right freelancers find place best.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="work-process step-2">
<span class="process-icon">
<i class="lni lni-search"></i>
</span>
                    <h4>Search Jobs</h4>
                    <p>Post a job to tell us about your project. We'll quickly match you with the right freelancers find place best.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="work-process step-3">
<span class="process-icon">
<i class="lni lni-cup"></i>
</span>
                    <h4>Apply</h4>
                    <p>Post a job to tell us about your project. We'll quickly match you with the right freelancers find place best.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<div id="pricing" class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Pricing Plan</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ellentesque dignissim quam et <br> metus effici turac fringilla lorem facilisis.</p>
        </div>
        <div class="row pricing-tables">
            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="pricing-table border-color-defult">
                    <div class="pricing-details">
                        <div class="icon">
                            <i class="lni lni-rocket"></i>
                        </div>
                        <h2>Professional</h2>
                        <ul>
                            <li>Post 1 Job</li>
                            <li>No Featured Job</li>
                            <li>Edit Your Job Listing</li>
                            <li>Manage Application</li>
                            <li>30-day Expired</li>
                        </ul>
                        <div class="price"><span>$</span>0<span>/Month</span></div>
                    </div>
                    <div class="plan-button">
                        <a href="#" class="btn btn-border">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="pricing-table pricing-active border-color-red">
                    <div class="pricing-details">
                        <div class="icon">
                            <i class="lni lni-drop"></i>
                        </div>
                        <h2>Advance</h2>
                        <ul>
                            <li>Post 1 Job</li>
                            <li>No Featured Job</li>
                            <li>Edit Your Job Listing</li>
                            <li>Manage Application</li>
                            <li>30-day Expired</li>
                        </ul>
                        <div class="price"><span>$</span>20<span>/Month</span></div>
                    </div>
                    <div class="plan-button">
                        <a href="#" class="btn btn-border">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="pricing-table border-color-green">
                    <div class="pricing-details">
                        <div class="icon">
                            <i class="lni lni-briefcase"></i>
                        </div>
                        <h2>Premium</h2>
                        <ul>
                            <li>Post 1 Job</li>
                            <li>No Featured Job</li>
                            <li>Edit Your Job Listing</li>
                            <li>Manage Application</li>
                            <li>30-day Expired</li>
                        </ul>
                        <div class="price"><span>$</span>40<span>/Month</span></div>
                    </div>
                    <div class="plan-button">
                        <a href="#" class="btn btn-border">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<section id="counter" class="section bg-gray">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="counter-box">
                    <div class="icon"><i class="lni lni-home"></i></div>
                    <div class="fact-count">
                        <h3><span class="counter">800</span></h3>
                        <p>Jobs Posted</p>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="counter-box">
                    <div class="icon"><i class="lni lni-briefcase"></i></div>
                    <div class="fact-count">
                        <h3><span class="counter">80</span></h3>
                        <p>All Companies</p>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="counter-box">
                    <div class="icon"><i class="lni lni-pencil-alt"></i></div>
                    <div class="fact-count">
                        <h3><span class="counter">900</span></h3>
                        <p>Resumes</p>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="counter-box">
                    <div class="icon"><i class="lni lni-save"></i></div>
                    <div class="fact-count">
                        <h3><span class="counter">1200</span></h3>
                        <p>Applications</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<div id="subscribe" class="section bg-cyan">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="subscribe-form">
                    <div class="form-wrapper">
                        <div class="sub-title">
                            <h3>Subscribe Our Newsletter</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ellentesque dignissim quam et metus dolor sit amet,.</p>
                        </div>
                        <form>
                            <div class="row">
                                <div class="col-12 form-line">
                                    <div class="form-group form-search">
                                        <input type="email" class="form-control" name="email" placeholder="Enter Your Email">
                                        <button type="submit" class="btn btn-common btn-search">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="img-sub">
                    <img class="img-fluid" src="{{ URL::asset('assets/img/sub.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

