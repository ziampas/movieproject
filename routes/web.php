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

Route::get('/genre/', function () {
    return view('genre/view');
});


//Routes för movies
Route::get('/movies', function () {
    return view('movies/index');
});

//Routes för actors (Kristian)
Route::resource('actors', 'ActorsController');

//Routes för genres
Route::get('/genre/add', function () {
    return view('genre/add');
});
Route::get('/genre/edit', function () {
    return view('genre/edit');
});
Route::get('/genre/remove', function () {
    return view('genre/remove');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
