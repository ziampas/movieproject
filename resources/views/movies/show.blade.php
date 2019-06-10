@extends('template')

@section('content')
<h1 class="title is-4">Movie: {{ $movie->moviesname}}</h1>

<ul>
    <li>{{ $movie->id}}</li>
    <li><img src="{{ $movie->moviepicture}}" alt=""></li>
    <li>{{ $movie->moviesname}}</li>
    <li>{{ $movie->movieyear}}</li>
    <li>{{ $movie->movieplot}}</li>
</ul>
<a href="/movies/{{ $movie-> id}}/edit" class="button is-success" style="margin-top: 1rem;">Edit</a>
<a href="/movies" class="button is-success" style="margin-top: 1rem;">Go back</a>
@endsection
