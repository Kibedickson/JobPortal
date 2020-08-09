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

        $notification = array(
            'message' => 'Job Applied Successfully!',
            'alert-type' => 'success'
        );

        return redirect(route('jobs'))->with($notification);
    }

    public function update(Request $request, $slug)
    {
        $data = $request->validate([
            'candidate_id' => 'required',
        ]);
        Job::where('slug', $slug)->update($data);

        $notification = array(
            'message' => 'Candidate Selected Successfully!',
            'alert-type' => 'success'
        );

        return redirect(route('jobs'))->with($notification);

    }
    public function destroy(Request $request)
    {

        $proposals = Proposal::where('job_id', $request['job_id'])->where('candidate_id', auth()->id());
        $proposals->delete();
        $data = [
            'candidate_id' => null
        ];

        Job::where('id', $request['job_id'])->update($data);

        $notification = array(
            'message' => 'Proposal Cancelled Successfully!',
            'alert-type' => 'success'
        );


        return redirect(route('jobs'))->with($notification);

    }
}
