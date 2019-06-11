@extends('template')

@section('content')
<h1 class="title">My Profile:</h1>
<h1 class="subtitle"> <strong>DI: </strong> {{ $user->id}}</h1>
<h1 class="subtitle"><strong>Email: </strong> {{ $user->email}}</h1>
<h1 class="subtitle"><strong>Username: </strong>{{ $user->name}}</h1>
<br>
<h1 class="title">Movies Added by me:</h1>
<div class="columns">
  @foreach($user->movies as $movie)

<div class="column">


    <div class="box">
      <img src="{{ $movie->moviepicture }}" width="200px" alt=""><br>
       <a href="/movies/{{ $movie->id }}"><strong>{{ $movie->moviesname }}</strong></a><br>
      <strong>{{ $movie->movieyear }}</strong>
      <br>
    </div>
    </div>


  @endforeach
</div>

@endsection
