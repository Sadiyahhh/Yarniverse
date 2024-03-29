@extends('layouts.layout')

@section('content')

<link rel="stylesheet" href="css/shop.css">

<div class="shop-title">
    <div class="shop-title-text">
        <h3>Shop our Products</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
            Duis aute irure dolor in reprehenderit in voluptate veli</p>
    </div>
</div>

    <div class="shop-main">

        <div class="shop-sidebar">
            <h3>Filter:</h3>
            <hr>
            <h3>Skill level:&nbsp;<i class="fa-solid fa-caret-down"></i></h3>
            <label for="checkbox" id="label-v"><span>Beginner (0)</span></label><br>
            <label for="checkbox" id="label-v"><span>Intermediate (0)</span></label><br>
            <label for="checkbox" id="label-v"><span>Expert (0)</span></label><br>
        </div>

        <div class="shop-body">
            <!-- <div class="pcards"> -->

                <!-- <div class="pcard1"> -->
                    @foreach ($products as $product)

                        <div class="prod-card">
                            <div class="image"><img src="{{ $product->productImage }}" alt="Image">
                            <i class="fa fa-heart-o"></i>
                            </div>
                            <div class="prod-contain">
                            <a href="/pattern/{{$product->productID}}"><h1>{{ $product->productName }}</h1></a>
                            <p class="price">£{{ $product->productPrice }}
                                <div class="rating-stars">
                                    <span id="star-icon">&star;</span>
                                    <span id="star-icon">&star;</span>
                                    <span id="star-icon">&star;</span>
                                    <span id="star-icon">&star;</span>
                                    <span id="star-icon">&star;</span><b>(0)</b>
                                </div>
                            </p>
                            </div>
                            <button><i class="material-symbols-outlined">shopping_bag</i><span>Add to basket</span></button>
                        </div>
                    @endforeach 
                <!-- </div> -->
                <!-- <div class="pcard2">
                    <div class="prod-card">
                        <div class="image">
                        <i class="fa fa-heart-o"></i>
                        </div>
                        <div class="prod-contain">
                        <h1>Tailored Jeans</h1>
                        <p class="price">£9.99
                            <div class="rating-stars">
                                <span id="star-icon">&star;</span>
                                <span id="star-icon">&star;</span>
                                <span id="star-icon">&star;</span>
                                <span id="star-icon">&star;</span>
                                <span id="star-icon">&star;</span><b>(0)</b>
                            </div>
                        </p>
                        </div>
                        <button><i class="material-symbols-outlined">shopping_bag</i><span>Add to basket</span></button>
                    </div>
                </div>

                <div class="pcard3">
                    <div class="prod-card">
                        <div class="image">
                        <i class="fa fa-heart-o"></i>
                        </div>
                        <div class="prod-contain">
                        <h1>Tailored Jeans</h1>
                        <p class="price">£9.99
                            <div class="rating-stars">
                                <span id="star-icon">&star;</span>
                                <span id="star-icon">&star;</span>
                                <span id="star-icon">&star;</span>
                                <span id="star-icon">&star;</span>
                                <span id="star-icon">&star;</span><b>(0)</b>
                            </div>
                        </p>
                        </div>
                        <button><i class="material-symbols-outlined">shopping_bag</i><span>Add to basket</span></button>
                    </div>
                </div>

                <div class="pcard4">
                    <div class="prod-card">
                        <div class="image">
                        <i class="fa fa-heart-o"></i>
                        </div>
                        <div class="prod-contain">
                        <h1>Tailored Jeans</h1>
                        <p class="price">£9.99
                            <div class="rating-stars">
                                <span id="star-icon">&star;</span>
                                <span id="star-icon">&star;</span>
                                <span id="star-icon">&star;</span>
                                <span id="star-icon">&star;</span>
                                <span id="star-icon">&star;</span><b>(0)</b>
                            </div>
                        </p>
                        </div>
                        <button><i class="material-symbols-outlined">shopping_bag</i><span>Add to basket</span></button>
                    </div>
                </div>

            </div>

           
            -->
        </div>

    </div>

@endsection
 
