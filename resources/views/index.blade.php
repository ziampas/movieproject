@extends('template')

@section('content')
<div class="columns">
  <div class ="column">
    <h1 class="title is-4">Welcome to Movie DB</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
  </div>
  <div class ="column">
    <h1 class="title is-4">Trending movies:</h1>
    <div class="video-container">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/QkZxoko_HC0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
</div>

@endsection
