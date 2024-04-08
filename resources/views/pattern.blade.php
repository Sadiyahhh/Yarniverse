@extends ('layouts.layout')

@section('content')

<link rel="stylesheet" href="/css/pattern.css">

<div class="prod-body">

        <div class="pattern-left">
                <div class="pattern-img-cont"><img src="{{ $item->productImage }}" alt="Image"></div>
            <div class="pattern-rec">
            </div>
        </div>
        <div class="pattern-desc"> 
            <div class="pattern-text">
                <h2>{{$item->productName}}</h2>
                <p>Skill Level: <b>{{$item->productLevel}}</b></p>
                <h4>£{{$item->productPrice}}</h4>
            </div>
            <div class="rating-stars">
                <span id="star-icon">&star;</span>
                <span id="star-icon">&star;</span>
                <span id="star-icon">&star;</span>
                <span id="star-icon">&star;</span>
                <!-- Reviews function/link will be inserted here -->
                <span id="star-icon">&star;</span><b><u>Read all reviews</u></b>
            </div>
            <br>
            <br>
            @if (Auth::check())
            <form action="{{ route ('basket.add') }}" method="POST">
            <input type="hidden" name="product" id="product" value="{{ $item->productID }}">
                @csrf
                <button type="submit" class="addto-basket"><i class="material-symbols-outlined">shopping_bag</i><span>Add to basket</span></button>
                <!-- <button type="submit">Add to Basket</button> -->
            </form>
            @else
            <form action="/login" class="form-group">
                <button type="submit" class="addto-basket"><i class="material-symbols-outlined">shopping_bag</i><span>Add to basket</span></button>
            <!-- <button type="submit" class="addto-basket"><i class="material-symbols-outlined">shopping_bag</i><span>Add to basket</span></button> -->
            </form>
            @endif
            <br>
            @if (session('add'))
            <div class="alert alert-success" role="alert">
                <p>{{ session('add') }} <a href="{{ route('basket', auth()->user()->id) }}">View basket</a>
            </div>
            @endif
            <h1>space</h1>
            @if (Auth::check())
            <form action="{{ route ('wishlist.addToWishlist') }}" method="POST">
            <input type="hidden" name="product" id="product" value="{{ $item->productID }}">
                @csrf
                <button type="submit" class="addto-basket"><i class="material-symbols-outlined">shopping_bag</i><span>Add to Wishlist</span></button>
                <!-- <button type="submit">Add to Basket</button> -->
            </form>
            @else
            <form action="/login" class="form-group">
                <button type="submit" class="addto-basket"><i class="material-symbols-outlined">shopping_bag</i><span>Add to Wishlist</span></button>
            <!-- <button type="submit" class="addto-basket"><i class="material-symbols-outlined">shopping_bag</i><span>Add to basket</span></button> -->
            </form>
            @endif
            <br>
            @if (session('wishlist-add'))
            <div class="alert alert-success" role="alert">
                <p>{{ session('wishlist-add') }} <a href="{{ route('wishlist', auth()->user()->id) }}">View wishlist</a>
            </div>
            @endif
            <button class="accordion" id="dd-start">Pattern Description</button>
                <div class="panel">
                    <p>{{$item->productDescription}}</p>
                </div>
            <button class="accordion" id="dd-start">Materials Needed</button>
            <div class="panel">
                <p>{{$item->productMaterials}}</p>
            </div>
        </div>
</div>

<!-- <h1>Pattern page</h1>
<p>{{$item->productDescription}}</p> -->

@endsection