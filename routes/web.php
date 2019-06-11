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
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/', function () {
    return view('index');
});

//Zeena
Route::resource('/genres', 'GenresController');

//Kristian
Route::resource('/actors', 'ActorsController');

//Jan
Route::resource('movies', 'MoviesController');
Route::resource('/profile', 'UserController');

//Annat
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/comment/store', 'CommentsController@store')->name('comment.add');
Route::post('/actor/store', 'ActorsController@store')->name('actor.add');
