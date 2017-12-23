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



Route::get('/', 'MoviesController@index')->name('movies');

Route::get('/movies', 'MoviesController@index')->name('movies');

Route::get('/movie/{id}', 'MoviesController@show')->name('movie');

Route::get('/movies/create', 'MoviesController@create')->name('create');


Route::post('/movies/create', 'MoviesController@store')->name('store');



