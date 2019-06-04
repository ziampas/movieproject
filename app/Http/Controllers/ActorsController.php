<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Actor;

class ActorsController extends Controller
{
    public function index()
    {
      $actors = Actor::all();

      return view('actors/view', compact('actors'));
    }
}
