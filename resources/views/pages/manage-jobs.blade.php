@extends('layouts.pages')
@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header">
                        <h3>Manage Jobs</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-xs-12">
                    <div class="right-sideabr">
                        <h4>Manage Account</h4>
                        <ul class="list-item">
                            <li><a href="resume.html">My Resume</a></li>
                            <li><a href="bookmarked.html">Bookmarked Jobs</a></li>
                            <li><a href="notifications.html">Notifications <span class="notinumber">2</span></a></li>
                            <li><a class="active" href="job-alerts.html">Manage Jobs</a></li>
                            <li><a href="manage-applications.html">Manage Applications</a></li>
                            <li><a href="change-password.html">Change Password</a></li>
                            <li><a href="index.html">Sing Out</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-10 col-md-8 col-xs-12">
                    <div class="job-alerts-item candidates">
                        <h3 class="alerts-title">Manage Jobs</h3>
                        <div class="alerts-list">
                            <div class="table-responsive">
                                <table class="table table-borderless table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">
                                                Title
                                            </th>
                                            <th scope="col">
                                                Description
                                            </th>
                                            <th scope="col">
                                                Deadline
                                            </th>
                                            <th scope="col">
                                                Candidate
                                            </th>
                                            <th>

                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($jobs as $job)
                                        <tr style="text-transform: capitalize;">
                                            <td>
                                                <p>{{ $job->title }}</p>
                                            </td>
                                            <td>
                                                <p>{{ $job->description }}</p>
                                            </td>
                                            <td>
                                                <p>{{ $job->deadline }}</p>
                                            </td>
                                            <td>
                                                <p>{{ $job->candidate }}</p>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <a class=" btn btn-sm btn-common" href="">
                                                            Prop({{ $jobs_count }})
                                                        </a>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <a class="btn btn-sm btn-common" href="">
                                                            Edit
                                                        </a>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <form action="/manage-jobs/{{$job->id}}" method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="submit" class="btn btn-sm btn-common">Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <br>

                        <ul class="pagination">
                            <li>{{ $jobs->links() }}</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
