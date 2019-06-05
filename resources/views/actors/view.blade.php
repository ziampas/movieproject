@extends('template')

@section('content')
<div class="columns">
  <div class="column">

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
</div>


<div class="column">
  <h1 class="title is-4">Add actors:</h1>
  <a href="/actors/add">Log in to add actors</a>
</div>

</div>
@endsection
