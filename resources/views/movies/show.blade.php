@extends('template')

@section('content')
<h1 class="title is-4">{{ $movie->moviesname}}</h1>

<ul>
    <li><img src="{{ $movie->moviepicture}}" alt=""></li>
    <div class="box">
    <li><h1 class="title is-4">{{ $movie->moviesname}}</h1></li>
    <li><strong>{{ $movie->movieyear}}</strong></li>
    <li>{{ $movie->movieplot}}</li>
</ul>
</div>
<div class="box" style="margin-top: 1rem;">
<h1 class="title is-4">Cast:</h1>
<table class="table">
  <tr>
    <th>First name:</th>
    <th>Last name:</th>
  </tr>
  <tr>
    @foreach($movie->actors as $actor)
      <td>{{$actor->firstname}}</td>
      <td>{{$actor->lastname}}</td>
    </tr>
    @endforeach
</table>
</div>
<a href="/movies/{{ $movie-> id}}/edit" class="button is-success" style="margin-top: 1rem;">Edit</a>
<a href="/movies" class="button is-success" style="margin-top: 1rem;">Go back</a>
<h3>Comments <small>{{ $movie->comments()->count() }} total</small></h3>
<article class="media">
  <div class="media-content">
    <div class="content">
      @foreach($movie->comments as $comment)
      <p class="notification is-light">
        <strong>{{ $comment->name }}:</strong> <small>{{ date('F dS, Y - g:iA' ,strtotime($comment->created_at)) }}</small>
        <br>
        {{ $comment->comment }}
      </p>

      @endforeach

    </div>
  </div>
</article>
<br>

<h4>Add comment</h4>
<form method="post" action="{{ route('comment.add') }}">
    {{ csrf_field() }}
    <div class="field">
    <label class="label">Name</label>
    <div class="control">
      <input type="text" name="name" class="input" />
    </div>
  </div>
  <div class="field">
  <label class="label">Comment</label>
  <div class="control">
      <input type="text" name="comment" class="textarea" />
      <input type="hidden" name="movie_id" value="{{ $movie->id }}" />
  </div>
</div>
<div class="field is-grouped">
  <div class="control">
    <input type="submit" class="button is-light" value="Add Comment" />
  </div>
</div>
</form>
@endsection
