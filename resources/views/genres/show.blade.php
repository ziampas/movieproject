@extends('template')

@section('content')
<div class="box">
<h1 class="title is-4">{{$genre->genrename}}</h1>
<a href="/genres/{{ $genre-> id}}/edit" class="button is-success" style="margin-top: 1rem;">Edit</a>
</div>

<div class="box">
  <h1 class="title is-4">Filmography:</h1>
<table class="table">
  <tr>
    <th>Title:</th>
    <th>Release year:</th>
  </tr>
  <tr>
    <td><a href="">Good Will Hunting</a></td>
    <td>1994</td>
  </tr>
</table>
</div>

<a href="/actors" class="button is-link">Go back</a>
@endsection
