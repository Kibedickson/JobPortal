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
                        <form class="form-ad" action="{{ route('jobs.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="control-label"><strong>Job Title</strong></label>
                                <input type="text" name="title" id="title" class="form-control" placeholder="Write job title" value="{{old('title')}}">
                                @error('title')
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
                                <label class="control-label"><strong>Job Description</strong></label>
                                <textarea type="text" rows="4" name="description" id="description" class="form-control" placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem quia aut modi fugit, ratione saepe perferendis odio optio repellat dolorum voluptas excepturi possimus similique veritatis nobis. Provident cupiditate delectus, optio?" value="{{old('description')}}"></textarea>
                                @error('description')
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
                                <label class="control-label"><strong>Deadline</strong></label>
                                <input type="date" name="deadline" id="deadline" data-provide="datepicker" data-date-end-date="0d" class="form-control" placeholder="yyyy-mm-dd" value="{{old('deadline')}}">
                                @error('deadline')
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
