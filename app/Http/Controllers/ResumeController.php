<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResumeStoreRequest;
use App\Proposal;
use App\Resume;
use Illuminate\Support\Facades\Gate;

class ResumeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $resumes = Resume::where('user_id', auth()->id())->get();

        return view('candidates.profiles.index', compact('resumes'));
    }

    public function create()
    {
        if (Gate::allows('isCandidate')){
            return view('candidate.create');
        }else{
            return "No Permission";
        }
    }

    public function store(ResumeStoreRequest $request)
    {

        $request['user_id'] = auth()->id();

        Resume::create($request->all());
        return redirect()->route('profiles');
    }

    public function edit(Resume $resume){

        return view('candidates.profiles.edit', compact('resume'));

    }

    public function update(ResumeStoreRequest $request, Resume $resume){

        $request['user_id'] = auth()->id();

        $resume->update($request->all());

        return redirect(route('profiles'));

    }

    public function show(){

        $applications = Proposal::where('candidate_id', auth()->id())->get();

        return view('candidates.profiles.show', compact('applications'));
    }

}
