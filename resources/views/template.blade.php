<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Movie Database</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
<style>

.article {
  margin-bottom: 1rem;
}

</style>
  </head>
  <body>

<!-- Hero börjar -->

<section class="hero is-dark" >
  <div class="hero-body">
    <div class="container">
<!-- <img src="{{ URL::to('/') }}/img/logo.png" alt=""> -->
<h1 class="title is-2">Movie DB</h1>
    </div>
  </div>

<!-- Navigation -->

<div class="hero-foot">
  <nav class="tabs is-boxed is-fullwidth">
    <div class="container">
      <ul>
        <li class="is-active"><a href="/">Homepage</a></li>
        <li><a href="/movies">Movies</a></li>
        <li><a href="/actors">Actors</a></li>
        <li><a href="/genres">Genres</a></li>
      </ul>
    </div>
  </nav>
</div>
</section>

<!-- Hero slutar -->


  <div class="navbar-end">
    <!-- navbar items -->
  </div>
</div>

<section class="section">
    @yield('content')
</section>

<!--Footer börjar -->
<footer class="footer">
  <div class="columns">
    <div class="column">
      <h1 class="title is-6">Copyright 2019</h1>
      <img src="https://static1.squarespace.com/static/55e50bdfe4b0a8e8abf3e82c/t/5b57434ef950b7329f3f65f0/1532445581749/global-playstore.png" alt="googleplay" style="width: 200px;">
    </div>
    <div class="column">
      <h1 class="title is-6">Links</h1>
      <ul>
        <li class="is-active"><a href="/">Homepage</a></li>
        <li><a href="/movies">Movies</a></li>
        <li><a href="/actors">Actors</a></li>
        <li><a href="/genre">Genre</a></li>
      </ul>
    </div>
    <div class="column">
      <h1 class="title is-6">Follow us:</h1>
      <ul>
        <li><i class="fab fa-facebook-square fa-5x"></i></li>
      </ul>
    </div>
  </div>
</footer>
<!--Footer slutar -->

  </body>
</html>
