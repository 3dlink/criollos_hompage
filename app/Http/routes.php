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

Route::get('/', [
	'uses'	=>	'mainController@index',
    'as'    =>  'index'
]);

Route::get('/clients/{id}', [
    'uses'  =>  'ClientsController@get'
]);

Route::get('/works/{id}', [
    'uses'  =>  'WorksController@get'
]);

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
	Route::get('/', [
		'uses' 	=>	'HomeController@index',
		'as'	=>	'admin.index'
	]);

	Route::get('password', [
    	'uses' 	=> 	'PasswordChangeController@index',
    	'as'	=>	'admin.password'
    ]);

    Route::resource('clients', 'ClientsController');

    Route::get('clients/{id}/index', [
        'uses'  =>  'ClientsController@index',
        'as'    =>  'admin.clients.index'
    ]);

    Route::get('clients/{id}/destroy', [
    	'uses'	=>	'ClientsController@destroy',
    	'as'	=>	'admin.clients.destroy'
    ]);

    Route::resource('works', 'WorksController');

    Route::get('works/{id}/index', [
        'uses'  =>  'WorksController@index',
        'as'    =>  'admin.works.index'
    ]);

    Route::get('works/{id}/destroy', [
        'uses'  =>  'WorksController@destroy',
        'as'    =>  'admin.works.destroy'
    ]);


});

Route::auth();

Route::get('/register', [
	'uses'	=>	'Auth\AuthController@showLoginForm'
]);