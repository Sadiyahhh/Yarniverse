@extends ('layouts.layout')

@section('content')

<link rel="stylesheet" href="/css/pattern.css">

<div class="prod-body">

        <div class="pattern-left">
            @if (Auth::check())
            <form action="{{ route ('wishlist.addToWishlist') }}" method="POST">
            <input type="hidden" name="product" id="product" value="{{ $item->productID }}">
                @csrf
                <button type="submit" class="wishlist-btn"><span class="material-symbols-outlined">favorite</span></button>
            </form>
            @else
            <form action="/login" class="form-group">
                <button type="submit" class="wishlist-btn"><span class="material-symbols-outlined">favorite</span></button>
            </form>
            @endif
            <div class="pattern-img-cont"><img src="{{ $item->productImage }}" alt="Image"></div>
        </div>
        <div class="pattern-desc"> 
            <div class="pattern-text">
                <h2>{{$item->productName}}</h2>
                <p>Skill Level: <b>{{$item->productLevel}}</b></p>
                <h3>£{{$item->productPrice}}</h3>
            </div>
            <div class="rating-stars">
                <span id="star-icon">&star;</span>
                <span id="star-icon">&star;</span>
                <span id="star-icon">&star;</span>
                <span id="star-icon">&star;</span>
                <span id="star-icon">&star;</span><span class="reviews"><u><b>Reviews coming soon!</b></u></span>
            </div>
            <br>
            <br>
            @if (Auth::check())
            <form action="{{ route ('basket.add') }}" method="POST">
            <input type="hidden" name="product" id="product" value="{{ $item->productID }}">
                @csrf
                <button type="submit" class="addto-basket"><i class="material-symbols-outlined">shopping_bag</i><span>Add to basket</span></button>
            </form>
            @else
            <form action="/login" class="form-group">
                <button type="submit" class="addto-basket"><i class="material-symbols-outlined">shopping_bag</i><span>Add to basket</span></button>
            </form>
            @endif
            <br>
            @if (session('add'))
            <div class="alert alert-success" role="alert">
                <p>{{ session('add') }} <a href="{{ route('basket', auth()->user()->id) }}">View basket</a>
            </div>
            @endif
            <br>
            @if (session('wishlist-add'))
            <div class="alert alert-success" role="alert">
                <p>{{ session('wishlist-add') }} <a href="{{ route('wishlist', auth()->user()->id) }}">View wishlist</a>
            </div>
            @endif
            <button class="accordion">Pattern Description</button>
                <div class="panel">
                    <p>{{$item->productDescription}}</p>
                </div>
            <button class="accordion">Materials Needed</button>
                <div class="panel">
                    <p>{{$item->productMaterials}}</p>
                </div>
        </div>
</div>

    <script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
        } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
        } 
    });
    }
    </script>


@endsection