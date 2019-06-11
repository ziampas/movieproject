@extends('template')

@section('content')
<form method="POST" action="{{ action('MoviesController@update', $movie->id) }}">
  {{ method_field('PATCH') }}
  {{ csrf_field() }}


<div class="field">
  <h1 class="title is-4">Edit Movie</h1>
  <label class="label">Movie Title</label>
  <div class="control">
    <input class="input" type="text" name="moviesname" value="{{$movie->moviesname}}">
  </div>
  <div class="field">
    <label class="label">Movie Year</label>
    <div class="control">
      <input class="input" type="text" name="moviepicture"  value="{{$movie->moviepicture}}">
    </div>
  </div>
  <div class="field">
    <label class="label">Movie Plot</label>
    <div class="control">
      <input class="input" type="text" name="movieplot"  value="{{$movie->movieplot}}">
    </div>
  </div>
  <div class="field">
    <label class="label">Movie Year</label>
    <div class="control">
      <input class="input" type="date" name="movieyear" value="{{$movie->movieyear}}">
    </div>
  </div>
  <button class="button is-success" type="submit">Update</button>
</div>
</form>

<form method="POST" action="{{ action('MoviesController@update', $movie->id) }}">
  {{ method_field('DELETE') }}
  {{ csrf_field() }}
  <div class="control" style="margin-top: 1rem;">
    <div class="field">
      <div class="control">
        <button type="submit" class="button is-danger">Delete movie</button>
        <a href="/movies" class="button is-info">Go back</a>
      </div>
    </div>
</div>
</form>

@endsection
