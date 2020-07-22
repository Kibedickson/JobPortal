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
                    <div class="col-lg-12 col-md-12 col-xs-10">
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                <tr>
                                    <th scope="col">Title</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">Deadline</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($jobs as $job)
                                    <tr>
                                        <td>{{ $job->title }}</td>
                                        <td>{{ $job->category }}</td>
                                        <td>{{ $job->description }}</td>
                                        <td>{{ $job->location }}</td>
                                        <td>{{ $job->deadline }}</td>
                                        <td>
                                            <form action="/proposals" method="post">
                                                @csrf
                                                <input type="hidden" name="job_id" value="{{ $job->id }}">
                                                @if(\App\Proposal::HasApplied()->where('job_id', $job->id)->count())
                                                    <button class="btn btn-common" disabled>Applied</button>
                                                @else
                                                <button type="submit" class="btn btn-common">Apply</button>
                                                @endif
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <ul class="pagination">
                            <li>{{ $jobs->appends(request()->except('page'))->links() }}</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
