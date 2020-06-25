<?php

namespace App\Http\Controllers;

use App\Jobs;
use App\Proposals;
use Illuminate\Http\Request;

class ProposalsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store($job, $employer){
        $data = [];
        $data['user_id'] = auth()->id();
        $data['job_id'] = $job;
        $data['employer_id'] = $employer;

        Proposals::create($data);
        return redirect('browse-jobs');
    }

    public function show(){
        return view('pages.proposals');
    }
}
