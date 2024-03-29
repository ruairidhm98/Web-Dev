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

// home page
Route::get('/index', 'IndexController@index');

// movies page
Route::get('/movies', 'MovieController@index');

// chocolates page
Route::get('/chocolates', 'ChocolateController@index');

// user authentication
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


