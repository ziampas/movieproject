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

//Kristian
Route::resource('/actors', 'ActorsController');

//Zeena
Route::resource('/genres', 'GenresController');
//Route::post('/genres', 'GenresController');

//Routes för movies (jan)
Route::get('/movies', function () {
    return view('movies/index');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
