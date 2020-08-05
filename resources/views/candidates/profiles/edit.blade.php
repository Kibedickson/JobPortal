@extends('layouts.pages')
@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header">
                        <h3>Edit Resume</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section id="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-12 col-xs-12">
                    <div class="add-resume box">
                        <form class="form-ad" action="/profiles/{{ $resume->id }}" method="POST">
                            @method('PATCH')
                            @csrf
                            <h3>Basic information</h3>
                            <div class="form-group">
                                <label class="control-label"><strong>Profession Title</strong></label>
                                <input type="text" name="title" class="form-control" placeholder="Headline (e.g. Front-end developer)" value="{{ $resume->title}}" autofocus>
                                @error('title')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label"><strong>Location</strong></label>
                                <input type="text" name="location" class="form-control" placeholder="Location, e.g" value="{{ $resume->location }}">
                                @error('location')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label"><strong>Age</strong></label>
                                <input type="text" name="age" class="form-control" placeholder="Years old" value="{{ $resume->age }}">
                                @error('age')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <h3>Education</h3>
                            <div class="form-group">
                                <label class="control-label"><strong>Degree</strong></label>
                                <input type="text" name="degree" class="form-control" placeholder="Degree, e.g. Bachelor" value="{{ $resume->degree }}">
                                @error('degree')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label"><strong>Field of Study</strong></label>
                                <input type="text" name="field" class="form-control" placeholder="Major, e.g Computer Science" value="{{ $resume->field }}">
                                @error('field')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label"><strong>School</strong></label>
                                <input type="text" name="school" class="form-control" placeholder="School name, e.g. Maseno University" value="{{ $resume->school }}">
                                @error('school')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label"><strong>Year of Completion</strong></label>
                                <input type="text" name="year" class="form-control" placeholder="e.g 2014" value="{{ $resume->year }}">
                                @error('year')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="divider"><h3>Skills</h3></div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="control-label"><strong>Skill Name</strong></label>
                                        <input class="form-control" name="skill" placeholder="Skill name, e.g. HTML, CSS, PHP" type="text" value="{{ $resume->skill }}">
                                        @error('skill')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-common">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
