@extends('layouts.layout')

@section('content')

        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->

<link rel="stylesheet" href="/css/welcome.css">

<div class="welcome-contain">
<section class="carousel" aria-label="Gallery">
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
    <!-- <li id="carousel__slide4"
        tabindex="0"
        class="carousel__slide">
      <div class="carousel__snapper"></div>
      <a href="#carousel__slide3"
         class="carousel__prev">
         <i class="arrow left"></i></a>
      <a href="#carousel__slide1"
         class="carousel__next">
         <i class="arrow right"></i></a>
    </li> -->
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
      <!-- <li class="carousel__navigation-item">
        <a href="#carousel__slide4"
           class="carousel__navigation-button">Go to slide 4</a>
      </li> -->
    </ol>
  </aside>
</section>

    <div class="most-liked">
      <h1>Most Liked by Users</h1>
    </div>

      <div class="pcards">

        <div class="pcard1">
          <div class="prod-card">
              <div class="image">
              <i class="fa fa-heart-o" #id="heart"></i>
              </div>
            <div class="prod-contain">
                <p id="card-text"><b>Product Name</b></p>
                <p class="price" id="card-text"><b>$19.99</b></p>
                <div class="rating-stars">
                  <span id="star-icon">&star;</span>
                  <span id="star-icon">&star;</span>
                  <span id="star-icon">&star;</span>
                  <span id="star-icon">&star;</span>
                  <span id="star-icon">&star;</span><b>(0)<b>
                </div>
                <div class="p-button">
                  <!-- <p>Add to basket</p>
                  <input type="submit" id="p-button" value="Add to basket"> -->
                  <p><button><i class="material-symbols-outlined">shopping_bag</i><weak>Add to basket</weak></button></p>
                </div>
            </div>
          </div>
        </div>

        <div class="pcard2">
          <div class="prod-card">
              <div class="image">
              <i class="fa fa-heart-o" #id="heart"></i>
              </div>
            <div class="prod-contain">
                <p id="card-text"><b>Product Name</b></p>
                <p class="price" id="card-text"><b>$19.99</b></p>
                <div class="rating-stars">
                  <span id="star-icon">&star;</span>
                  <span id="star-icon">&star;</span>
                  <span id="star-icon">&star;</span>
                  <span id="star-icon">&star;</span>
                  <span id="star-icon">&star;</span><b>(0)<b>
                </div>
                <div class="p-button">
                  <!-- <p>Add to basket</p>
                  <input type="submit" id="p-button" value="Add to basket"> -->
                  <p><button><i class="material-symbols-outlined">shopping_bag</i><weak>Add to basket</weak></button></p>
                </div>
            </div>
          </div>
        </div>

        <div class="pcard3">
          <div class="prod-card">
              <div class="image">
              <i class="fa fa-heart-o" #id="heart"></i>
              </div>
            <div class="prod-contain">
                <p id="card-text"><b>Product Name</b></p>
                <p class="price" id="card-text"><b>$19.99</b></p>
                <div class="rating-stars">
                  <span id="star-icon">&star;</span>
                  <span id="star-icon">&star;</span>
                  <span id="star-icon">&star;</span>
                  <span id="star-icon">&star;</span>
                  <span id="star-icon">&star;</span><b>(0)<b>
                </div>
                <div class="p-button">
                  <!-- <p>Add to basket</p>
                  <input type="submit" id="p-button" value="Add to basket"> -->
                  <p><button><i class="material-symbols-outlined">shopping_bag</i><weak>Add to basket</weak></button></p>
                </div>
            </div>
          </div>
        </div>

        <div class="pcard4">
          <div class="prod-card">
              <div class="image">
              <i class="fa fa-heart-o" #id="heart"></i>
              </div>
            <div class="prod-contain">
                <p id="card-text"><b>Product Name</b></p>
                <p class="price" id="card-text"><b>$19.99</b></p>
                <div class="rating-stars">
                  <span id="star-icon">&star;</span>
                  <span id="star-icon">&star;</span>
                  <span id="star-icon">&star;</span>
                  <span id="star-icon">&star;</span>
                  <span id="star-icon">&star;</span><b>(0)<b>
                </div>
                <div class="p-button">
                  <!-- <p>Add to basket</p>
                  <input type="submit" id="p-button" value="Add to basket"> -->
                  <p><button><i class="material-symbols-outlined">shopping_bag</i><weak>Add to basket</weak></button></p>
                </div>
            </div>
          </div>
        </div>


        <!-- <div class="pcard2">
          <div class="prod-card">
              <div class="image">
              <i class="fa fa-heart-o" #id="heart"></i>
              </div>
            <div class="prod-contain">
                <p id="card-text"><b>Product Name</b></p>
                <p class="price" id="card-text"><b>$19.99</b></p>
                <div class="rating-stars">
                  <span id="star-icon">&star;</span>
                  <span id="star-icon">&star;</span>
                  <span id="star-icon">&star;</span>
                  <span id="star-icon">&star;</span>
                  <span id="star-icon">&star;</span><b>(0)<b>
                </div>
                <p><button><i class="material-symbols-outlined">shopping_bag</i>Add to basket</button></p>
            </div>
          </div>
        </div>

        <div class="pcard3">
          <div class="prod-card">
              <div class="image">
              <i class="fa fa-heart-o" #id="heart"></i>
              </div>
            <div class="prod-contain">
                <p id="card-text"><b>Product Name</b></p>
                <p class="price" id="card-text"><b>$19.99</b></p>
                <div class="rating-stars">
                  <span id="star-icon">&star;</span>
                  <span id="star-icon">&star;</span>
                  <span id="star-icon">&star;</span>
                  <span id="star-icon">&star;</span>
                  <span id="star-icon">&star;</span><b>(0)<b>
                </div>
                <p><button><i class="material-symbols-outlined">shopping_bag</i>Add to basket</button></p>
            </div>
          </div>
        </div>

        <div class="pcard4">
          <div class="prod-card">
              <div class="image">
              <i class="fa fa-heart-o" #id="heart"></i>
              </div>
            <div class="prod-contain">
                <p id="card-text"><b>Product Name</b></p>
                <p class="price" id="card-text"><b>$19.99</b></p>
                <div class="rating-stars">
                  <span id="star-icon">&star;</span>
                  <span id="star-icon">&star;</span>
                  <span id="star-icon">&star;</span>
                  <span id="star-icon">&star;</span>
                  <span id="star-icon">&star;</span><b>(0)<b>
                </div>
                <p><button><i class="material-symbols-outlined">shopping_bag</i>Add to basket</button></p>
            </div>
          </div>
        </div> -->

      </div>

<script>
$("#heart").click(function() {
  $(this).toggleClass('fa-heart-o');
  $(this).toggleClass('fa-heart');
});
</script>
    </div>



</div>


@endsection
