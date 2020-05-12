@extends('layouts.pages')
@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header">
                        <h3>Post A Job</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-12 col-xs-12">
                    <div class="post-job box">
                        <h3 class="job-title">Post a new Job</h3>
                        <form class="form-ad" action="/addjob" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="control-label"><strong>Job Title</strong></label>
                                <input type="text" name="job_title" id="job_title" class="form-control" placeholder="Write job title" value="{{old('job_title')}}">
                                @error('job_title')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label"><strong>Owner/Company</strong></label>
                                <input type="text" name="owner" id="owner" class="form-control" placeholder="Name of Owner/Company" value="{{old('owner')}}">
                                @error('owner')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label"><strong>Location</strong></label>
                                <input type="text" name="location" id="location" class="form-control" placeholder="e.g.Ruiru, Kimbo" value="{{old('location')}}">
                                @error('location')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label"><strong>Category</strong></label>
                                <div class="search-category-container">
                                    <label class="styled-select">
                                        <select name="category" id="category" class="dropdown-product selectpicker">
                                            <option>All Categories</option>
                                            <option>Finance</option>
                                            <option>IT & Engineering</option>
                                            <option>Education/Training</option>
                                            <option>Art/Design</option>
                                            <option>Sale/Markting</option>
                                            <option>Healthcare</option>
                                            <option>Science</option>
                                            <option>Food Services</option>
                                        </select>
                                    </label>
                                </div>
                                @error('category')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label"><strong>Job Tags</strong> <span>(optional)</span></label>
                                <input type="text" name="job_tag" id="job_tag" class="form-control" placeholder="e.g.PHP,Social Media,Management" value="{{old('job_tag')}}">
                                <p class="note">Comma separate tags, such as required skills or technologies, for this job.</p>
                                @error('job_tag')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label"><strong>Job Description</strong></label>
                                <input type="text" name="description" id="description" class="form-control" placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem quia aut modi fugit, ratione saepe perferendis odio optio repellat dolorum voluptas excepturi possimus similique veritatis nobis. Provident cupiditate delectus, optio?" value="{{old('description')}}">
                                @error('description')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label"><strong>Contact</strong></label>
                                <input type="number" name="contact" id="contact" class="form-control" placeholder="Enter Your Phone Number" value="{{old('contact')}}">
                                @error('contact')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label"><strong>Closing Date</strong></label>
                                <input type="date" name="closing_date" id="closing_date" class="form-control" placeholder="yyyy-mm-dd" value="{{old('closing_date')}}">
                                @error('closing_date')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-common">Submit your job</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
