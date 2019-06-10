<?php
//Kristian

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

    public function create()
    {
      return view('actors/create');
    }

    public function edit(Actor $actor)
    {
return view('actors/edit', compact('actor'));
    }

    public function update(Actor $actor)
    {
      $actor->update(request(['firstname', 'lastname', 'birthdate']));
      return redirect('/actors');
    }

    public function delete()
    {
      return view('actors/delete');
    }

    public function destroy(Actor $actor)
    {
    $actor->delete();
    return redirect('/actors');
    }

   public function show(Actor $actor)
        {
          return view('actors/show', compact('actor'));
        }

    public function store()
    {
      request()->validate([
        'firstname' => 'required',
        'lastname' => 'required',
        'birthdate' => 'required'
      ]);

Actor::create(request(['firstname', 'lastname', 'birthdate']));
      return redirect('/actors');
    }
}
