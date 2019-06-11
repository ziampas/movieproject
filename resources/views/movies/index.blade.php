@extends('template')

@section('content')

  <div class="columns">
    <div class="column is-two-thirds">
      <h1 class="title is-4">Movies:</h1>
      <table class="table is-striped is-narrow is-fullwidth">
        <tr>
          <th>Cover</th>
          <th>Title</th>
          <th>Year</th>
          <th>Plot</th>
          <th></th>
        </tr>
        <tr>
          @foreach ($movies as $movie)
          <td> <img src="{{$movie->moviepicture}}" width="150px" height="150px" alt=""></td>
          <td>{{$movie->moviesname}}</td>
          <td>{{$movie->movieyear}}</td>
          <td>{{$movie->movieplot}}</td>
          <td><a href="movies/{{ $movie->id }}"><button class="button is-small is-success">View</button></a></td>
      </tr>
          @endforeach
      </table>
</div>
<div class="column">
  <div class="column has-text-centered">
    <img src="{{url('/img/button_add-movie.png')}}" alt="Image"/>
    <p><a class="button is-success" href="/movies/create">Click here</a></p>
  </div>

</div>
</div>
@endsection
