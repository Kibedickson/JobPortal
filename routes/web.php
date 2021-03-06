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

Route::get('jobs', 'JobController@index')->name('jobs');
Route::get('jobs/create', 'JobController@create')->name('jobs/create');
Route::post('jobs', 'JobController@store');
Route::get('jobs/{job}', 'JobController@show');
Route::get('jobs/{job}/edit', 'JobController@edit');
Route::patch('jobs/{job}', 'JobController@update');
Route::delete('jobs/{job}', 'JobController@destroy');

Route::post('proposals', 'ProposalController@store');
Route::put('proposals/{proposal}', 'ProposalController@update');
Route::delete('proposals', 'ProposalController@destroy');

Route::get('profiles', 'ResumeController@index')->name('profiles');
Route::get('profiles/create', 'ResumeController@create')->name('profiles/create');
Route::get('profiles/applications', 'ResumeController@show')->name('applications');
Route::post('profiles', 'ResumeController@store');
Route::get('profiles/{resume}/edit', 'ResumeController@edit');
Route::patch('profiles/{resume}', 'ResumeController@update');
