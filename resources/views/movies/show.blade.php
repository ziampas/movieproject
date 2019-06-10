@extends('template')

@section('content')
<h1 class="title is-4">{{ $movie->moviesname}}</h1>

<ul>
    <li><img src="{{ $movie->moviepicture}}" alt=""></li>
    <div class="box">
    <li><h1 class="title is-4">{{ $movie->moviesname}}</h1></li>
    <li><strong>{{ $movie->movieyear}}</strong></li>
    <li>{{ $movie->movieplot}}</li>
</ul>
</div>
<div class="box" style="margin-top: 1rem;">
<h1 class="title is-4">Casting:</h1>
<table class="table">
  <tr>
    <th>Actors</th>
  </tr>
  <tr>
    <td>Mark Wahlberg</td>
  </tr>
</table>
</div>
<a href="/movies/{{ $movie-> id}}/edit" class="button is-success" style="margin-top: 1rem;">Edit</a>
<a href="/movies" class="button is-link" style="margin-top: 1rem;">Go back</a>
@endsection
