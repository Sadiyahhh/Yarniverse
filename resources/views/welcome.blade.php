@extends('layouts.layout')

@section('content')

        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->

<link rel="stylesheet" href="/css/welcome.css">

<div class="welcome-contain">
  <!-- <section class="carousel" aria-label="Gallery">
    <ol class="carousel__viewport">
      <li id="carousel__slide1"
          tabindex="0"
          class="carousel__slide">
        <div class="carousel__snapper">
          <a href="#carousel__slide3"
            class="carousel__prev">
            <i class="arrow left"></i></a>
          <a href="#carousel__slide2"
            class="carousel__next">
            <i class="arrow right"></i></a>
        </div>
      </li>
      <li id="carousel__slide2"
          tabindex="0"
          class="carousel__slide">
        <div class="carousel__snapper"></div>
        <a href="#carousel__slide1"
          class="carousel__prev">
          <i class="arrow left"></i></a>
        <a href="#carousel__slide3"
          class="carousel__next">
          <i class="arrow right"></i></a>
      </li>
      <li id="carousel__slide3"
          tabindex="0"
          class="carousel__slide">
        <div class="carousel__snapper"></div>
        <a href="#carousel__slide2"
          class="carousel__prev">
          <i class="arrow left"></i></a>
        <a href="#carousel__slide1"
          class="carousel__next">
          <i class="arrow right"></i></a>
      </li>
    </ol>
    <aside class="carousel__navigation">
      <ol class="carousel__navigation-list">
        <li class="carousel__navigation-item">
          <a href="#carousel__slide1"
            class="carousel__navigation-button">Go to slide 1</a>
        </li>
        <li class="carousel__navigation-item">
          <a href="#carousel__slide2"
            class="carousel__navigation-button">Go to slide 2</a>
        </li>
        <li class="carousel__navigation-item">
          <a href="#carousel__slide3"
            class="carousel__navigation-button">Go to slide 3</a>
        </li>
      </ol>
    </aside>
  </section> -->
  <div class="welcome-gif">
    <img src="/site-images/about1.jpeg" alt="gif">
    <div class="welcome-text">
    <h1>Track your Project Progress</h1>
    <p>Browse through our pattern range to find your next project - sign up with us to monitor your creations!</p>
    </div>
    <a href="/shop"><input type="submit" id="shop" value="Browse Patterns"></a>
  </div>

  <div class="welcome-section">
    <div class="sect1">
      <div class="section-img">
      <img src="/site-images/yarn-ball.png" alt="yarn">
      </div>
      <h2>Creative Craft</h2>
      <p>Yarniverse is designed to fit your crafting needs</p>
      <a href="/about"><input type="submit" id="sect" value="Read More"></a>
    </div>
    <div class="sect2">
      <div class="section-img">
      <img src="/site-images/diary.png" alt="diary">
      </div>
      <h2>Progress Planning</h2>
      <p>Monitor and update the progress of crochet projects</p>
      @if (Route::has('login'))
      <a href="{{route('login')}}"><input type="submit" id="sect" value="View Profile"></a>
      @else
      <a href="{{route('myprojects')}}"><input type="submit" id="sect" value="View Profile"></a>
      @endif
    </div>
    <div class="sect3">
      <div class="section-img">
      <img src="/site-images/knitting.png" alt="knit">
      </div>
      <h2>Craft your Own</h2>
      <p>Shop patterns and form your perfect craft</p>
      <a href="/shop"><input type="submit" id="sect" value="Shop Now"></a>
    </div>
  </div>

  <div class="inno-sect">
    <div class="inno-img">
    <img src="/site-images/cookies.png" alt="cookies">
    </div>
    <div class="text-sect">
    <h2>Innovation starts today</h2>
    <p>Here at Yarniverse, we appreciate the effort put into every stitch of your crochet creations.
      Our tailor-made project management features allow you to keep on top of your projects when life
      gets a little busy.
    </p>
    </div>
  </div>


</div>


@endsection
