@extends('template')

@section('content')
<h1 class="title is-4">Add New Movie:</h1>
<form method="post" action="/movies">
  {{ csrf_field() }}

  <label class="label">Movie Title:<input class="input" type="text" name="moviesname"></input></label>
    <label class="label">Movie Cover (url):<input class="input" type="text" name="moviepicture"></input></label>
  <label class="label">Movie Plot:<input class="input" type="text" name="movieplot"></input></label>
  <label class="label">Movie Release Year:<input class="input" type="date" name ="movieyear"></input></label>
  <button class="button is-success" type="submit">Add</button>
  <a href="/actors" class="button is-info">Go back</a>
</form>
@endsection
