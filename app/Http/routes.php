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

Route::get('500', function()
{
    abort(500);
});

Route::get('404', function()
{
    abort(404);
});

Route::get('inicio','AllowedController@index');



Route::Resource('User','UserController');

Route::resource('Login','LogController');

Route::get('Ventas','SalesController@index');

Route::post('Sales/store','SalesController@store');



Route::get('auth/login',function(){
	return view('User.login');
});

Route::get('logout','LogController@logout');

Route::post('newUser','UserController@createclient');