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

Route::get('/actors', 'ActorsController@index');

Route::get('/genre/', function () {
    return view('genre/view');
});


//Routes för movies

//Routes för actors

Route::get('/actors/add', function () {
    return view('actors/add');
});

Route::get('/actors/edit', function () {
    return view('actors/edit');
});

Route::get('/actors/remove', function () {
    return view('actors/remove');
});

//Routes för genres


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
