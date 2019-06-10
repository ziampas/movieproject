@extends('template')

@section('content')
<h1 class="title is-4">Movies:</h1>
<table border="1" width="100%">
  <tr>
    <th>ID</th>
    <th>Cover</th>
    <th>Title</th>
    <th>Year</th>
    <th>Plot</th>
    <th>View</th>
    <th>Edit</th>
    <th>Remove</th>
  </tr>
  <tr>
    @foreach ($movies as $movie)
    <td>{{$movie->moviesid}}</td>
    <td> <img src="{{$movie->moviepicture}}" width="150px" height="150px" alt=""></td>
    <td>{{$movie->moviesname}}</td>
    <td>{{$movie->movieyear}}</td>
    <td>{{$movie->movieplot}}</td>

</tr>
    @endforeach

</table>

@endsection
