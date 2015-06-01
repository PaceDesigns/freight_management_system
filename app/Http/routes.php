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

	Route::get('/', function(){
		return view('auth.login');
	});

	Route::get('/home', ['as'=>'home', 'uses'=>'HomeController@index']);
	Route::get('/freights', ['as'=>'freights', 'uses'=>'HomeController@freights']);
	Route::get('/freight', ['as'=>'freight', 'uses'=>'HomeController@freight']);



	Route::controllers([
		'auth' => 'Auth\AuthController',
		'password' => 'Auth\PasswordController',
	]);

	Route::resource('/admin/users', 'UsersController');

	Route::resource('clients', 'ClientsController');

	// Route::resource('products', 'ProductsController');

	Route::get('/products/add', ['as'=>'add_product', 'uses'=>'ProductsController@create']);
	Route::post('/products/add', ['as'=>'save_product', 'uses'=>'ProductsController@store']);

	Route::get('/mails', ['as'=>'mails', 'uses'=>'MailsController@index']);


	Route::get('/show', function(){
		return view('home.customers.show');
	});



