@extends('template')

@section('content')
<h1 class="title is-4">Add an actor:</h1>
<div class="box">
<form method="post" action="{{ route('actor.add') }}">
  {{ csrf_field() }}

  <label class="label"><input class="input" type="text" name="firstname" value="First name"></input></label>
  <label class="label"><input class="input" type="text" name="lastname" value="Last name"></input></label>
  <label class="label"><input class="input" type="date" name ="birthdate" value="Birthday"></input></label>

<div class="control">
  <div class="select">
    <select name="movies_id">
      @foreach ($movies as $movie)
      <option value="{{ $movie->id }}">{{ $movie->moviesname }}</option>
      @endforeach
    </select>
  </div>
</div>

<div class="div" style="margin-top: 1rem;">
  <button class="button is-success" type="submit">Add</button>
  <a href="/actors" class="button is-link">Go back</a>
</div>
</form>
</div>
@endsection
