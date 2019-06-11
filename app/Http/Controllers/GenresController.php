<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Genre;

class GenresController extends Controller
{
  public function index()
  {
    $genres = Genre::all();

    return view('genres/view', compact('genres'));
  }

  public function create()
  {
    return view('genres/create');
  }

  public function store()
  {
    Genre::create(request(['genrename']));
          return redirect('/genres');
  }






}
