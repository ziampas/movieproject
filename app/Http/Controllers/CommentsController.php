<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Movies;
class CommentsController extends Controller
{
  public function __construct()
 {
     $this->middleware('auth', ['except' => 'store']);
 }

public function store(Request $request)
{
    $comment = new Comment;
    $comment->name = $request->get('name');
    $comment->comment = $request->get('comment');
    $movie = Movies::find($request->get('movie_id'));
    $movie->comments()->save($comment);
    return back();
}
}
