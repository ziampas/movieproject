@extends('template')


@section('content')

<h1 class="title is-4">Add a genre:</h1>
<form method="post" action="/genres">
  {{ csrf_field() }}
  <label class="label"><input class="input" type="text" name="genrename" value="GengerName"></input></label>
  <button class="button is-success" type="submit">Add</button>
  <a href="/genres" class="button is-success">Go back</a>
</form>

@endsection
