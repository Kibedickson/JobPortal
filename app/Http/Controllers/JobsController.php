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

    public function show($id){
        $job = Jobs::all()->where('id', $id)->first();
      return view('pages.job-details', compact('job'));
    }

}
