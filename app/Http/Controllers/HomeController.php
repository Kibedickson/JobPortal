<?php

namespace App\Http\Controllers;

use App\Job;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $job = Job::all()->sortBy('deadline')->take(6);
        $total_jobs = Job::all()->count();
        $total_users = User::all()->count();

        return view('home', compact('job', 'total_jobs' , 'total_users'));

    }
}
