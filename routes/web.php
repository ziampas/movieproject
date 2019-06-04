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

Route::get('/movies', function () {
    return view('movies/view');
});

Route::get('/actors', function () {
    return view('actors/view');
});

Route::get('/genre/', function () {
    return view('genre/view');
});


//Routes för movies

//Routes för actors

//Routes för genres


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
