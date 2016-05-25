<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

Route::resource('news-and-events', 'NewsAndEventsController');

Route::resource('students', 'StudentsController');

Route::resource('research','ResearchController');

Route::resource('research-group','ResearchGroupController');

Route::resource('programme','ProgrammeController');

Route::resource('faculty', 'FacultyController');
Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/staff', 'StaffController@index');

