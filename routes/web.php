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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/index', 'IndexController@index')->name('index');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::group(['middleware' => 'auth'], function(){
	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/hasil', 'HasilController@create')->name('hasil');
	Route::get('/post', 'PostController@index')->name('post.index');
	Route::get('/post/create', 'PostController@create')->name('post.create');
	Route::post('/post/create', 'PostController@store')->name('post.store');
	Route::get('/post/{id}/edit', 'PostController@edit')->name('post.edit');
	Route::patch('/post/{id}/edit', 'PostController@update')->name('post.update');
	Route::delete('/post/{id}/delete', 'PostController@destroy')->name('post.destroy');	
});

