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

//Kristian
Route::get('/actors', 'ActorsController@index');

//Zeena
Route::get('/genres', 'GenresController@index');



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
Route::get('/genres/add', function () {
    return view('genre/add');
});
Route::get('/genres/edit', function () {
    return view('genres/edit');
});
Route::get('/genres/remove', function () {
    return view('genres/remove');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
