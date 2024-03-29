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

Route::get('/about', function(){
	return ('Hello World!');
});

Route::get('/books', 'BookController@index');
Route::get('/book/{id}', 'BookController@show');
Route::post('/store', 'BookController@store');
Route::get('/create', 'BookController@create');

Route::post('/user', 'UserController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
