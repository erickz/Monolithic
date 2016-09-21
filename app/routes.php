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

Route::get('/usuarios/login', [
	'as'			=> 'users.login',
	'uses'		=> 'UsersController@login'
]);

//Posts
Route::get('/posts', [
	'as'			=> 'posts.get',
	'uses'		=> 'PostsController@get'
]);

Route::post('/posts', [
	'as'			=> 'posts.post',
	'uses'		=> 'PostsController@store'
]);

Route::put('/posts/{id}', [
	'as'			=> 'posts.put',
	'uses'		=> 'PostsController@update'
]);

Route::delete('/posts/{id}', [
	'as'			=> 'posts.delete',
	'uses'		=> 'PostsController@delete'
]);

//Comments
Route::get('/comentarios', [
	'as'			=> 'comments.get',
	'uses'		=> 'CommentsController@get'
]);

Route::get('/comentarios/{postId}', [
	'as'			=> 'comments.getByPost',
	'uses'		=> 'CommentsController@getByPost'
]);

Route::get('/comentarios-criar', [
	'as'			=> 'comments.store',
	'uses'		=> 'CommentsController@store'
]);
//
// Route::post('/comments', [
// 	'as'			=> 'comments.post',
// 	'uses'		=> 'CommentsController@store'
// ]);
//
// Route::put('/comments/{id}', [
// 	'as'			=> 'comments.put',
// 	'uses'		=> 'CommentsController@update'
// ]);
//
// Route::delete('/comments/{id}', [
// 	'as'			=> 'comments.delete',
// 	'uses'		=> 'CommentsController@delete'
// ]);
