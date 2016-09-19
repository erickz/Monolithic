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

Route::get('/', function()
{
	return View::make('hello');
});

//Users
Route::get('/usuarios', [
	'as'			=> 'users.get',
	'uses'		=> 'UsersController@get'
]);

Route::post('/usuarios', [
	'as'			=> 'users.post',
	'uses'		=> 'UsersController@store'
]);

Route::put('/usuarios/{id}', [
	'as'			=> 'users.put',
	'uses'		=> 'UsersController@update'
]);

Route::delete('/usuarios/{id}', [
	'as'			=> 'users.delete',
	'uses'		=> 'UsersController@delete'
]);

//Posts
Route::get('/posts', [
	'as'			=> 'users.get',
	'uses'		=> 'UsersController@get'
]);

Route::post('/posts', [
	'as'			=> 'users.post',
	'uses'		=> 'UsersController@store'
]);

Route::put('/posts/{id}', [
	'as'			=> 'users.put',
	'uses'		=> 'UsersController@update'
]);

Route::delete('/posts/{id}', [
	'as'			=> 'users.delete',
	'uses'		=> 'UsersController@delete'
]);
