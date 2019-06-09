@extends('template')

@section('content')
<h1 class="title is-4">Movies:</h1>

<ul>
   <li>{{ $movie->moviesid}}</li>
  <li>{{ $movie->moviesname}}</li>
</ul>
@endsection
