@extends('template')

@section('content')
<div class="column">
    <div class="container">
      <div class="hero">
        <div class="level">
            <div class="level-left">
              <div class="level-item">
                <div class="title">
                  {{ $movie->moviesname}}
                </div>
              </div>
            </div>
            <div class="level-right">
              <div class="level-item">
              <div class="tags">
                <a href="/movies/{{ $movie-> id}}/edit" class="tag is-info" style="margin-top: 1rem;">Edit</a>
                <a href="/movies" class="tag is-light" style="margin-top: 1rem;">Go back</a>
              </div>
              </div>
            </div>
          </div>
      </div>
    </div>
</div>
<div class="column">
    <div class="container">
<div class="tile is-ancestor">
  <div class="tile is-4 is-vertical is-parent">
    <div class="tile is-child box">
      <p class="subtitle">Title: {{ $movie->moviesname}}</p>
      <p class="subtitle">Release Year: {{ $movie->movieyear}}</p>
      <div class="content">
        <p class="subtitle">Plot:</p>
          {{ $movie->movieplot}}
      </div>
    </div>
    <div class="tile is-child box">
      <p class="subtitle">Cast:</p>
          <ul class="tags">
          @foreach($movie->actors as $actor)
              <li class="tag is-medium"> <a href="/actors/{{$actor->id}}">{{$actor->firstname}} {{$actor->lastname}}</a> </li>
          @endforeach
            </ul>
    </div>
  </div>
  <div class="tile is-parent">
    <div class="tile is-child box">
      <figure class="image is-square">
        <img src="{{ $movie->moviepicture}}" alt="{{ $movie->moviesname}}">
      </figure>
    </div>
  </div>
</div>




<h3 class="tag">Comments <small>{{ $movie->comments()->count() }} total</small></h3>
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

<h4 class="tag">Add comment</h4>
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
</div>
</div>
@endsection
