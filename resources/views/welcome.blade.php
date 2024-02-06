@extends('layouts.layout')

@section('content')

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<div class="carousel-contain">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="/site-images/carousel1.jpeg" alt="Chania">
        <div class="carousel-caption">
          <h3>Collaborative Craft</h3>
        </div>
      </div>

      <div class="item">
        <img src="/site-images/carousel2.jpg" alt="Chicago">
        <div class="carousel-caption">
          <h3>Build an Online Community</h3>
        </div>
      </div>

      <div class="item">
        <img src="/site-images/carousel3.jpg" alt="New York">
        <div class="carousel-caption">
          <h3>Track Project Progress</h3>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  
</div>


@endsection
