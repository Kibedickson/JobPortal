<?php

namespace App\Http\Controllers;

use App\Job;
use App\Proposal;
use Illuminate\Http\Request;

class ProposalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'job_id' => 'required',
        ]);
        $data['candidate_id'] = auth()->id();
        Proposal::create($data);

        return redirect(route('jobs'));
    }

    public function update(Request $request, $slug)
    {
        $data = $request->validate([
            'candidate_id' => 'required',
        ]);
        Job::where('slug', $slug)->update($data);

        return redirect(route('jobs'));

    }
}
