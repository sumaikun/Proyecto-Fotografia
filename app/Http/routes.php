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

Route::resource('Message','MessageController');

Route::get('Fotos',array('as'=>'ventas', 'uses'=>'SalesController@index'));

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

Route::get('logout',array('as'=>'logout','uses'=>'LogController@logout'));

Route::get('/gPaymentform/{id}','CostumerController@PaymentForm');

Route::post('newUser','UserController@createclient');

Route::get('perfiles',array( 'as'=>'allprofiles','uses'=>'ProfileController@allprofiles'));

Route::get('perfil/{id}',array( 'as'=>'profile.edit','uses'=>'ProfileController@edit'));

Route::post('perfil/cover',array( 'as'=>'profile.cover','uses'=>'ProfileController@cover'));

Route::post('perfil/info',array( 'as'=>'profile.info','uses'=>'ProfileController@info'));

Route::post('perfil/pic1',array( 'as'=>'profile.pic1','uses'=>'ProfileController@pic1'));

Route::post('perfil/audio',array( 'as'=>'profile.audio','uses'=>'ProfileController@audio'));

Route::post('perfil/info2',array( 'as'=>'profile.info2','uses'=>'ProfileController@info2'));

Route::post('perfil/pic2',array( 'as'=>'profile.pic2','uses'=>'ProfileController@pic2'));

Route::get('perfil',array('as'=>'profile', 'uses'=>'ProfileController@index'));

Route::get('perfilusuario/{id}',array('as'=>'profile.user', 'uses'=>'ProfileController@specificprofile'));

Route::get('correo/{id}',array('as'=>'mail', 'uses'=>'MessageController@index'));

Route::get('leer/{id}',array('as'=>'reademail', 'uses'=>'MessageController@read'));


//Route::post('/Costumer/purchase','CostumerController@purchase');