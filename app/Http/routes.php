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
	return view('Costumers.code');
    
});

Route::get('500', function()
{
    abort(500);
});

Route::get('test',function(){
	return view('Costumers.Confirm');
});

Route::get('404', function()
{
    abort(404);
});

Route::get('inicio','AllowedController@index');



Route::Resource('User','UserController');

Route::resource('Login','LogController');

Route::resource('Sales','SalesController');

Route::resource('Costumer','CostumerController');

Route::get('Ventas','SalesController@index');

Route::get('SisFot',function()
	{
		return view('User.login');	
	});

Route::post('Sales/store','SalesController@store');

Route::post('Costumer/download','CostumerController@download');

Route::post('Costumer/getinfo','CostumerController@getinfo');

Route::get('auth/login',function(){
	return view('User.login');
});

Route::get('logout','LogController@logout');

Route::get('/gPaymentform/{id}','CostumerController@PaymentForm');

Route::post('newUser','UserController@createclient');

//Route::post('/Costumer/purchase','CostumerController@purchase');