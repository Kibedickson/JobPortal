@extends('layouts.pages')
@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header">
                        <h3>Manage Proposals</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-header">
                            <p>Job Details</p>
                        </div>
                        <div class="panel-body">
                            <table class="table table-borderless">
                                <tbody>
                                <tr>
                                    <th>Candidate</th>
                                    <td>{{ $job->candidate->name ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Title</th>
                                    <td>{{ $job->title }}</td>
                                </tr>
                                <tr>
                                    <th>Location</th>
                                    <td>{{ $job->location }}</td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td>{{ $job->description }}</td>
                                </tr>
                                <tr>
                                    <th>Deadline</th>
                                    <td>{{ $job->deadline }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-header">Proposals</div>
                        <div class="panel-body">
                            <table class="table table-borderless">
                                <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($job->proposals as $key => $proposal)
                                    <tr>
                                        <td>{{ $proposal->candidate->name ?? ''}}</td>
                                        <td>{{ $proposal->candidate->email ?? ''}}</td>
                                        <td>
                                            @if($job->candidate_id === $proposal->candidate_id)
                                                <button class="btn btn-common" style="font-size: 10px; padding: 3px 10px; text-transform: capitalize;">Selected</button>
                                            @endif
                                            <form action="/proposals/{{ $job->slug }}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="candidate_id" value="{{ $proposal->candidate_id }}">
                                                @if($job->candidate_id !== $proposal->candidate_id)
                                                    <button type="submit" class="btn btn-common" style="font-size: 10px; padding: 3px 10px; text-transform: capitalize;">Select</button>
                                                @endif
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection