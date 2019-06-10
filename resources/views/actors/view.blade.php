@extends('template')

@section('content')
<div class="columns">
  <div class="column">

<h1 class="title is-4">Actors:</h1>
<table class="table">
  <tr>
    <th>First name</th>
    <th>Last name</th>
    <th>Date of birth</th>
    <th></th>
  </tr>
  <tr>
    @foreach ($actors as $actor)
    <td>{{$actor->firstname}}</td>
    <td>{{$actor->lastname}}</td>
    <td>{{$actor->birthdate}}</td>
    <td><a href="actors/{{ $actor->id }}"><button class="button is-small is-success">View</button></a></td>
  </tr>
  @endforeach
</table>
</div>


<div class="column">
  <h1 class="title is-4">Add actors:</h1>
  <a href="/actors/create">Add actors</a>
</div>

</div>
@endsection
