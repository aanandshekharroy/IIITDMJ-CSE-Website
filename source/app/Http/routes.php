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

Route::resource('projects','FacultyProjectsController');

Route::get("/about-us",'ExtrasController@about_us');
Route::get("/facilities",'ExtrasController@facilities');
Route::get("/contact-us",'ExtrasController@contact_us');
Route::post('/contact-us','ExtrasController@post_contact_us');
Route::get("/gallery",'ExtrasController@gallery');
Route::auth();
Route::get('/home', 'HomeController@index');
Route::get('/web-team','ExtrasController@webteam');
Route::get('/staff', 'StaffController@index');

