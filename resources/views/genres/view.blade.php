@extends('template')

@section('content')
<div class="columns">
  <div class="column">
    <h1 class="title is-4">Genres:</h1>
    <table class="table">
      <tr>
        <th>Genrename</th>
      </tr>
      <tr>
        @foreach ($genres as $genre)
        <td>{{$genre->genrename}}</td>
      </tr>
        @endforeach
    </table>
  </div>
  <div class="column">
    <h1 class="title is-4">Add genres:</h1>
    <a href="/genres/create">Log in to add genre</a>
  </div>
 </div>
@endsection
