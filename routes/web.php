<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/tasks', 'TaskController@index');

Route::get('/task/{taskid}', 'TaskController@show');

Route::get('/','PostController@index')->name('home');

Route::get('/post/create','PostController@create');

Route::post('/posts','PostController@store');

Route::get('/post/{post}','PostController@show');

Route::post('/posts/{post}/comments','CommentsController@store');

Route::get('/login',[ 'as' => 'login', 'uses' => 'SessionController@create']);

Route::get('/register','RegisterController@create');

Route::post('/register','RegisterController@store');

Route::get('/logout','SessionController@destroy');

Route::post('/login',[ 'as' => 'login', 'uses' => 'SessionController@store']);