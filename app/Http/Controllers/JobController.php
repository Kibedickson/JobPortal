<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JobController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::with('proposals')->where('employer_id', auth()->id())->paginate(3);

        return view('pages.manage-jobs', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.add-job');
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
        return view('pages.proposals', compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Job $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        return view('pages.edit-job', compact('job'));
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
