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

use Illuminate\Http\Request;

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::post('add-job', 'JobsController@store')->name('add-job');

Route::get('manage-jobs', 'JobsController@show')->name('manage-jobs');

Route::delete('/manage-jobs/{id}', 'JobsController@destroy');

Route::get('/manage-jobs/{job}/edit', 'JobsController@edit')->name('edit-job');
Route::patch('/manage-jobs/{job}', 'JobsController@update');

Route::group(['middleware' => ['auth']], function (){
    Route::get('about', function (){
        return view('pages.about');
    })->name('about');
    Route::get('job-details', function (){
        return view('pages.job-details');
    })->name('job-details');
    Route::get('job-page', function (){
       return view('pages.job-page');
    })->name('job-page');
    Route::get('browse-jobs', function (){
        return view('pages.browse-jobs');
    })->name('browse-jobs');
    Route::get('contact', function (){
        return view('pages.contact');
    })->name('contact');
    Route::get('post-job', function (){
        return view('pages.post-job');
    })->name('post-job');
    Route::get('manage-applications', function (){
        return view('pages.manage-applications');
    })->name('manage-applications');
});
