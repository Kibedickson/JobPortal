<?php

namespace App\Http\Controllers;

use App\Resume;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $resume = Resume::where();
        return view('candidates.profiles.index', compact('resume'));
    }

    public function create()
    {
        return view('candidates.create');
    }

    public function store(Request $request)
    {
        $data= $request->validate([
            'title' => 'required',
            'location' => 'required',
            'age' => 'required',
            'degree' => 'required',
            'field' => 'required',
            'school' => 'required',
            'year' => 'required',
            'skill' => 'required'
        ]);
        $data['user_id'] = auth()->id();

        Resume::create($data);
        return redirect()->route('home');
    }
}
