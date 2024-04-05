@extends('layouts.layout')

@section('content')

<link rel="stylesheet" href="css/shop.css">

<div class="shop-title">
    <div class="shop-title-text">
        <h3><a href="/shop">Shop our Products</a></h3>
        <p>Explore our collection of handcrafted patterns and unique finds below. From artisanal goods to one-of-a-kind creations,
            we have something special for everyone. Browse our categories and discover the perfect addition to your home, wardrobe,
            or gift list. Can't find what you're looking for? Don't hesitate to reach out if you have any questions – check out our
            FAQs or contact us via our form.</p>
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
            <div class="cards-contain">
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
                        <button><a href="/pattern/{{$product->productID}}"i class="material-symbols-outlined">shopping_bag</i><span>Add to basket</span></a></button>
                    </div>
                @endforeach 
            </div>
        </div>
        {{ $products->links() }}
    </div>

@endsection
 
