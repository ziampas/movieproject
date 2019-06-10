<?php

namespace App\Http\Controllers;
use App\Movies;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
  // display all movies
  public function index()
  {
    $movies = Movies::all();
    return view('movies/index', compact('movies'));

  }
}
