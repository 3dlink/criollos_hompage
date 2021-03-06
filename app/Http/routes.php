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

Route::post('contact', [
    'uses'  =>  'mainController@contact'
]);

Route::post('cv', [
    'uses'  =>  'mainController@cv',
    'as'    =>  'cv'
]);

Route::get('/clients/{id}', [
    'uses'  =>  'ClientsController@get'
]);

Route::get('/works/{id}', [
    'uses'  =>  'WorksController@get'
]);

// Route::get('/clientv', [
//     'uses'  =>  'ClientVsController@get'
// ]);

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
	Route::get('/', [
		'uses' 	=>	'HomeController@index',
		'as'	=>	'admin.index'
	]);

	Route::get('password', [
    	'uses' 	=> 	'PasswordChangeController@index',
    	'as'	=>	'admin.password'
    ]);

    Route::post('password', [
        'uses'  =>  'PasswordChangeController@setPassword',
        'as'    =>  'admin.setpwd'
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

    Route::get('works/{id}/create', [
        'uses'  =>  'WorksController@create',
        'as'    =>  'admin.works.create'
    ]);

    Route::get('works/{id}/destroy', [
        'uses'  =>  'WorksController@destroy',
        'as'    =>  'admin.works.destroy'
    ]);

    Route::get('works/{id}/destroyI', [
        'uses'  =>  'WorksController@destroyImg',
        'as'    =>  'admin.works.destroyImg'
    ]);

    Route::get('works/{id}/editI', [
        'uses'  =>  'WorksController@editImg',
        'as'    =>  'admin.works.editImg'
    ]);

    Route::put('works/updateI/{image}', [
        'uses'  =>  'WorksController@updateImg',
        'as'    =>  'admin.works.updateImg'
    ]);

    Route::get('works/{id}/addI', [
        'uses'  =>  'WorksController@addImg',
        'as'    =>  'admin.works.addI'
    ]);

    Route::post('works/storeI', [
        'uses'  =>  'WorksController@storeImg',
        'as'    =>  'admin.works.storeI'
    ]);

    Route::resource('quotes', 'QuotesController');

    Route::get('quotes/{id}/destroy', [
        'uses'  =>  'QuotesController@destroy',
        'as'    =>  'admin.quotes.destroy'
    ]);

    Route::resource('seo', 'SeosController');

    Route::get('seo/{id}/destroy', [
        'uses'  =>  'SeosController@destroy',
        'as'    =>  'admin.seo.destroy'
    ]);

    Route::resource('clientv', 'ClientVsController');

    Route::get('clientv/{id}/destroy', [
        'uses'  =>  'ClientVsController@destroy',
        'as'    =>  'admin.clientv.destroy'
    ]);
});

Route::auth();

Route::get('/register', [
	'uses'	=>	'Auth\AuthController@showLoginForm'
]);