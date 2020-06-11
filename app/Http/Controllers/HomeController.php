<?php

namespace App\Http\Controllers;

use App\Jobs;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $job = Jobs::all()->sortBy('deadline')->take('6');
        $total_jobs = Jobs::all()->count();
        $total_users = User::all()->count();

        return view('home', compact('job', 'total_jobs', 'total_users'));
    }
}
