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
    return view('index');
});

//Routes för actors (Kristian)
Route::resource('actors', 'ActorsController');

//Routes för genres (Zeena)
Route::resource('genres', 'GenresController');

//Routes för movies
Route::get('/movies', function () {
    return view('movies/index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
