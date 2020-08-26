<?php

use App\Http\Controllers\Auth\HomeController;

Auth::routes();

Route::get('/', 'WelcomeController@index'); //route to landing page

Route::get('logout', 'Auth\LoginController@logout');
Route::get('home', 'HomeController@successlogin');

Route::post('checklogin', 'LoginController@login');

//route to edit user details 
Route::get('edit_details/{id}', 'UsersController@select');

//route to update user details 
Route::get('update_details', 'UsersController@update');

//route to listed jobs
Route::get('listed_jobs', 'JobsController@select');

//route to edit user details 
Route::get('jobposting/{id}', 'UsersController@select');