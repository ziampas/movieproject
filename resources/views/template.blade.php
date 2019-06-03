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

<section class="hero is-dark">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
Movie Database
</h1>
    </div>
  </div>
</section>

<!-- Hero slutar -->

<!-- Meny -->

<nav class="navbar is-light" role="navigation" aria-label="main navigation">

  <a href="/" class="navbar-item">Home</a>
  <a href="/movies" class="navbar-item">Movies</a>
  <a href="/actors" class="navbar-item">Actors</a>

  </nav>

    <!-- Meny slutar -->

<section class="section">
  <div class="columns">
    @yield('content')
  </div>
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
