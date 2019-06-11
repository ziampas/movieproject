@extends('template')

@section('content')
<div class="columns">
  <div class="column is-two-thirds">
    <h1 class="title is-4">Genres:</h1>
    <table class="table">
      <tr>
        <th>Genrename</th>
      </tr>
      <tr>
        @foreach ($genres as $genre)
        <td>{{$genre->genrename}}</td>

        <td><a class="button is-small is-success" href="/genres/{{$genre->id}}/edit">View</a></td>

      </tr>
        @endforeach
    </table>
  </div>
  <div class="column has-text-centered">
    <img src="{{url('/img/button_add-genre.png')}}" alt="Image"/>
    <p><a class="button is-success" href="/genres/create">Click here</a></p>
  </div>
 </div>
@endsection
