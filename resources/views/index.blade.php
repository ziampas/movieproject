@extends('template')

@section('content')
<div class="columns">
  <div class ="column is-two-thirds">
<!-- Nyheter -->
    <article class="media">
      <figure class="media-left">
        <p class="image is-128x128">
          <img src="https://nnimgt-a.akamaihd.net/transform/v1/crop/frm/hjGLvKmBu3FndBd8dEiKQr/4dc1a731-03dc-4820-b441-ebb9072a5e5c.jpg/r0_138_1920_1218_w1200_h678_fmax.jpg">
        </p>
      </figure>
      <div class="media-content">
        <div class="content">
<h1 class="title is-4">Green Book</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<a href="#">>> Read more</a>
        </div>
      </div>
    </article>

    <article class="media">
      <figure class="media-left">
        <p class="image is-128x128">
          <img src="https://www.indiewire.com/wp-content/uploads/2019/03/Screen-Shot-2019-03-14-at-12.26.00-PM.png?w=780">
        </p>
      </figure>
      <div class="media-content">
        <div class="content">
<h1 class="title is-4">Avengers: Endgame</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<a href="#">>> Read more</a>
        </div>
      </div>
    </article>
<!-- End of Nyheter -->
  </div>
  <div class ="column has-text-right">
      <h1 class="title">Trending movies:</h1>
<iframe src="https://www.youtube.com/embed/1roy4o4tqQM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
</div>

@endsection
