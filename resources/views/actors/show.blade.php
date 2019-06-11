@extends('template')

@section('content')
<div class="box">
<h1 class="title is-4">{{$actor->firstname}}&nbsp;{{$actor->lastname}}</h1>
<p><strong style="margin-right: 1rem;">Born:</strong>{{$actor->birthdate}}</p>
<a href="/actors/{{ $actor-> id}}/edit" class="button is-success" style="margin-top: 1rem;">Edit</a>
</div>

<a href="/actors" class="button is-link">Go back</a>
@endsection
