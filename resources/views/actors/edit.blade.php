@extends('template')

@section('content')
<form method="POST" action="{{ action('ActorsController@update', $actor->id) }}">
  <!-- <form method="POST" action="actors/{{ $actor->id }}"> -->
  <!-- Såhär skulle det se ut
  men det verkar vara problem med routing tillsammans med WAMP, fick googla lösning -->

  {{ method_field('PATCH') }}
  {{ csrf_field() }}


<div class="field">
  <h1 class="title is-4">Edit actor</h1>
  <label class="label">First name</label>
  <div class="control">
    <input class="input" type="text" name="firstname" placeholder="First name" value="{{$actor->firstname}}">
  </div>
  <div class="field">
    <label class="label">Last name</label>
    <div class="control">
      <input class="input" type="text" name="lastname" placeholder="Last name" value="{{$actor->lastname}}">
    </div>
  </div>
  <div class="field">
    <label class="label">Birthdate</label>
    <div class="control">
      <input class="input" type="date" name="birthdate" placeholder="Birthdate" value="{{$actor->birthdate}}">
    </div>
  </div>
  <button class="button is-success" type="submit">Update</button>
</div>
</form>

<form method="POST" action="{{ action('ActorsController@update', $actor->id) }}">
  {{ method_field('DELETE') }}
  {{ csrf_field() }}
  <div class="control" style="margin-top: 1rem;">
    <div class="field">
      <div class="control">
        <button type="submit" class="button is-success">Delete actor</button>
        <a href="/actors" class="button is-success">Go back</a>
      </div>
    </div>
</div>
</form>

@endsection
