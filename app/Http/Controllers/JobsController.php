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
            'job_title' => 'required',
            'owner' => 'required',
            'location' => 'required',
            'category' => 'required',
            'job_tag' => 'required',
            'description' => 'required',
            'contact' => 'required',
            'closing_date' => 'required',
        ]);

        Jobs::create($data);
        return redirect('manage-jobs');
    }

    public function show($id){
        $job = Jobs::all()->where('id', $id)->first();
      return view('pages.job-details', compact('job'));
    }

}
