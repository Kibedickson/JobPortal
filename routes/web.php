<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::post('addjob', 'JobsController@store');

Route::group(['middleware' => ['auth']], function (){
    Route::get('about', function (){
        return view('pages.about');
    });
    Route::get('job-page', function (){
       return view('pages.job-page');
    });
    Route::get('browse-jobs', function (){
        return view('pages.browse-jobs');
    });
    Route::get('job-details', function (){
        return view('pages.job-details');
    });
    Route::get('contact', function (){
        return view('pages.contact');
    });
    Route::get('post-job', function (){
        return view('pages.post-job');
    });
    Route::get('manage-jobs', function (){
        return view('pages.manage-jobs');
    });
    Route::get('manage-applications', function (){
        return view('pages.manage-applications');
    });
});
