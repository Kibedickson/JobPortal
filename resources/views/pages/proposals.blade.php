@extends('layouts.pages')
@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header">
                        <h3>Manage Proposals</h3>
                        <p> Job Title: {{ $job->title }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
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
                                <td>{{ $proposal->candidate->name }}</td>
                                <td>{{ $proposal->candidate->email }}</td>
                                <td>
                                    <form action="" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-common" style="font-size: 10px; padding: 3px 10px; text-transform: capitalize;">Accept</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <ul class="pagination">
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection