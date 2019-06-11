@extends('template')

@section('content')
<form method="POST" action="{{ action('GenresController@update', $genre->id) }}">

  {{ method_field('PATCH') }}
  {{ csrf_field() }}


<div class="field">
  <h1 class="title is-4">Edit gengre</h1>
  <label class="label">Gengre Name</label>
  <div class="control">
    <input class="input" type="text" name="genrename" placeholder="Gengre Name" value="{{$genre->genrename}}">
  </div>

  <button class="button is-success" type="submit">Update</button>
</div>
</form>

<form method="POST" action="{{ action('GenresController@update', $genre->id) }}">
  {{ method_field('DELETE') }}
  {{ csrf_field() }}
  <div class="control" style="margin-top: 1rem;">
    <div class="field">
      <div class="control">
        <button type="submit" class="button is-danger">Delete genre</button>
        <a href="/genres" class="button is-link">Go back</a>
      </div>
    </div>
</div>
</form>

@endsection
