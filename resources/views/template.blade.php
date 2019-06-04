<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Movie Database</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <body>

<!-- Hero börjar -->

<section class="hero is-dark" >
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
Movie Database
</h1>
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
        <li><a href="/add">Add movie</a></li>
      </ul>
    </div>
  </nav>
</div>
</section>

<!-- Hero slutar -->

<section class="section">
    @yield('content')
</section>

<!--Footer börjar -->
<footer class="footer">
  <div class="content has-text-centered">
  <strong>Copyright 2019</strong>
  </div>
</footer>
<!--Footer slutar -->

  </body>
</html>
