@extends('template')

@section('content')

<nav class="level">
    <!-- Left side -->
    <div class="level-left">
      <div class="level-item">
          <h1 class="title is-4">Movies:</h1>
      </div>
    </div>
    <div class="level-right">
      <div class="level-item">
        <a href="movies/create" class="button is-info">Add New</a>
      </div>
    </div>
  </nav>
  <div class="column">
  <div class="container">

<table class="table is-striped is-narrow is-fullwidth">
  <tr>
    <th>ID</th>
    <th>Cover</th>
    <th>Title</th>
    <th>Year</th>
    <th>Plot</th>
    <th>View</th>
  </tr>
  <tr>
    @foreach ($movies as $movie)
    <td>{{$movie->id}}</td>
    <td> <img src="{{$movie->moviepicture}}" width="150px" height="150px" alt=""></td>
    <td>{{$movie->moviesname}}</td>
    <td>{{$movie->movieyear}}</td>
    <td>{{$movie->movieplot}}</td>
    <td><a href="movies/{{ $movie->id }}"><button class="button is-small is-success">View</button></a></td>
</tr>
    @endforeach

</table>
</div>
</div>
@endsection
