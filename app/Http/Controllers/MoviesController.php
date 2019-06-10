<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movies;
class MoviesController extends Controller
{
  // add auth to some pages
  public function __construct(){
    $this->middleware('auth')->except(['index','show']);
  }
  // display all movies
  public function index()
  {
    $movies = Movies::all();
    return view('movies/index', compact('movies'));

  }
  public function show(Movies $movie)
       {
         return view('movies/show', compact('movie'));
       }
       public function edit(Movies $movie)
       {
   return view('movies/edit', compact('movie'));
       }

       public function update(Movies $movie)
       {
         $movie->update(request(['moviesname', 'moviepicture', 'movieplot', 'movieyear']));
         return redirect('/movies');
       }
       public function create()
       {
         return view('movies/create');
       }
       public function store()
       {
         Movies::create(request(['moviesname', 'moviepicture', 'movieplot', 'movieyear']));
         return redirect('/movies');
       }
       public function delete()
       {
         return view('movie/delete');
       }

       public function destroy(Movies $movie)
       {
       $movie->delete();
       return redirect('/movies');
       }
}
