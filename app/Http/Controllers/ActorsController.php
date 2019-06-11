<?php
//Kristian

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Actor;
use \App\Movies;


class ActorsController extends Controller
{

  //Add auth
  public function __construct(){
    $this->middleware('auth')->except(['index','show']);
  }

    public function index()
    {
      $actors = Actor::all();

      return view('actors/view', compact('actors'));
    }

    public function create()
    {
      $movies = Movies::all();
      return view('actors/create', compact('movies'));    }

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


//     public function store()
//     {
//       // request()->validate([
//       //   'firstname' => 'required',
//       //   'lastname' => 'required',
//       //   'birthdate' => 'required'
//       // ]);
//
// Actor::create(request(['firstname', 'lastname', 'birthdate']));
//       return redirect('/actors');
//     }

    public function store(Request $request)
    {
        $actor = new Actor;
        $actor->firstname = $request->get('firstname');
        $actor->lastname = $request->get('lastname');
        $actor->birthdate = $request->get('birthdate');
        $actor->movies_id = $request->get('movies_id');
        // $movie = Movies::find($request->get('moviesname'));
        $actor->save();
        return redirect('/actors');
    }
}
