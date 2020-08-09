<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class JobController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (auth()->user()->isEmployer()){

            $jobs = Job::with('proposals')->where('employer_id', auth()->id())->paginate(3);

            return view('employers.index', compact('jobs'));

        }elseif (auth()->user()->isCandidate()){

            $jobs = Job::with('proposals')->paginate(5);

            return view('candidates.index', compact('jobs'));

        }
    }

    public function create()
    {
        if (Gate::allows('isEmployer')){
            return view('employers.create');
        }else{
            $notification = array(
                'message' => 'No Permission!',
                'alert-type' => 'error'
            );
            return redirect('/')->with($notification);
        }

    }

    public function store(Request $request)
    {

        $data = $request->validate([

            'title' => 'required',
            'location' => 'required',
            'description' => 'required',
            'category' => 'required',
            'deadline' => 'required',
        ]);

        $data['employer_id'] = auth()->id();

        Job::create($data);

        $notification = array(
            'message' => 'Job Added Successfully!',
            'alert-type' => 'success'
        );

        return redirect(route('jobs'))->with($notification);

    }

    public function show(Job $job)
    {
        $job->load(['proposals', 'candidate']);

        return view('candidates.show', compact('job'));

    }

    public function edit(Job $job)
    {

        return view('employers.edit', compact('job'));

    }

    public function update(Request $request, Job $job)
    {

        $data = $request->validate([
            'title' => 'required',
            'location' => 'required',
            'description' => 'required',
            'category' => 'required',
            'deadline' => 'required',
        ]);

        $data['employer_id'] = auth()->id();

        $job->slug = null;

        $job->update($data);

        $notification = array(
            'message' => 'Job Updated Successfully!',
            'alert-type' => 'success'
        );

        return redirect(route('jobs'))->with($notification);
    }

    public function destroy(Job $job)
    {

        $job->delete();

        $notification = array(
            'message' => 'Job Deleted Successfully!',
            'alert-type' => 'success'
        );

        return back()->with($notification);

    }
}
