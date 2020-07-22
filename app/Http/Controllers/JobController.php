<?php

namespace App\Http\Controllers;

use App\Job;
use App\Proposal;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class JobController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('employers.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

        return redirect(route('jobs.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param Job $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        $job->load(['proposals', 'candidate']);

        return view('candidates.show', compact('job'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Job $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {

        return view('employers.edit', compact('job'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param Job $job
     * @return \Illuminate\Http\Response
     */
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

        return redirect(route('jobs.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Job $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {

        $job->delete();

        return back();
        
    }
}
