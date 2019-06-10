@extends('template')

@section('content')
<h1 class="title is-4">Add an actor:</h1>
<div class="box">
<form method="post" action="/actors">
  {{ csrf_field() }}

  <label class="label"><input class="input" type="text" name="firstname" value="First name"></input></label>
  <label class="label"><input class="input" type="text" name="lastname" value="Last name"></input></label>
  <label class="label"><input class="input" type="date" name ="birthdate" value="Birthday"></input></label>
  <button class="button is-success" type="submit">Add</button>
  <a href="/actors" class="button is-link">Go back</a>
</form>
</div>
<!-- @if ($errors->any())
<div class="notification is-danger" style="margin-top: 1rem;">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif -->
@endsection
