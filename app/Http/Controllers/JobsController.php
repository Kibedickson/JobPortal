<?php

namespace App\Http\Controllers;

use App\Jobs;
use Illuminate\Http\Request;

class JobsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function store(){
        $data = request()->validate([
            'title' => 'required',
            'location' => 'required',
            'description' => 'required',
            'category' => 'required',
            'deadline' => 'required',
        ]);
        $data['employer_id'] = auth()->id();

        Jobs::create($data);
        return redirect('manage-jobs');
    }

    public function show(){
        $jobs = Jobs::where('employer_id', auth()->id())->paginate(3);
        $jobs_count = Jobs::where('employer_id', auth()->id())->where('candidate_id',!null)->count();

        return view('pages.manage-jobs', compact('jobs', 'jobs_count'));
    }

    public function edit(Jobs $job){
        return view('pages.edit-job', compact('job'));
    }
    public function update(Jobs $job){
        $data = request()->validate([
            'title' => 'required',
            'location' => 'required',
            'description' => 'required',
            'category' => 'required',
            'deadline' => 'required',
        ]);
        $data['employer_id'] = auth()->id();

        $job->update($data);
        return redirect('manage-jobs');
    }

    public function destroy(Jobs $id){
        $id->delete();
        return back();
    }

}
