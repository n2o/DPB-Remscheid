<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function() {
	return View::make('master');
});

Route::get('info', function() {
    return View::make('info');
});

Route::get('users', function() {
	$users = User::all();

	return View::make('master')->with('users', $users);
});

Route::get('admin/logout',  array('as' => 'admin.logout',      'uses' => '\Admin\AuthController@getLogout'));
Route::get('admin/login',   array('as' => 'admin.login',       'uses' => '\Admin\AuthController@getLogin'));
Route::post('admin/login',  array('as' => 'admin.login.post',  'uses' => '\Admin\AuthController@postLogin'));

Route::group(array('prefix' => 'admin', 'before' => 'auth.admin'), function()
{
	Route::any('/',                '\Admin\PagesController@index');
	Route::resource('articles',    '\Admin\ArticlesController');
	Route::resource('pages',       '\Admin\PagesController');
});
