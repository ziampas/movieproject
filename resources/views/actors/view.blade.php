@extends('template')

@section('content')

<h1 class="title is-4">Actors:</h1>
<table class="table">
  <tr>
    <th>First name</th>
    <th>Last name</th>
    <th>Age</th>
  </tr>
  <tr>
    @foreach ($actors as $actor)
    <td>{{$actor->firstname}}</td>
    <td>{{$actor->lastname}}</td>
    <td>{{$actor->birthdate}}</td>
  </tr>
  @endforeach
</table>

@endsection
