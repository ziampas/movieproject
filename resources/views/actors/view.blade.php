@extends('template')

@section('content')
<div class="columns">
  <div class="column is-two-thirds">
<div class="content">
 <p class="title">Actors:<p>
</div>
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

<div class="column has-text-centered">
  <img src="{{url('/img/button_add-actor.png')}}" alt="Image"/>
<p>  <a class="button is-success" href="/actors/create">Click here</a></p>
</div>

</div>
@endsection
