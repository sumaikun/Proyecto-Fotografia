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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', function () {
    return view('User.login');
});


Route::get('inicio','AllowedController@index');


Route::get('user/create', function () {
    return view('User.Create');
});

Route::Resource('User','UserController');

Route::resource('Login','LogController');


Route::get('auth/login',function(){
	return view('User.login');
});

Route::get('logout','LogController@logout');
