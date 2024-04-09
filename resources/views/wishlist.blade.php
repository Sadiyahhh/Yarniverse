@extends('layouts.layout')

@section('content')
<link rel="stylesheet" href="css/wishlist.css">

<div class="wishlist-contain">
        <div class="account-nav">
                <div class="user-info">
                    <span class="dot"></span>
                    <div class="userinfo-t">
                        <div class="user"> 
                            @if (Auth::check())
                                <p> Hello, <b>{{ Auth::user()->name }}<b>!</p>
                            @endif                        
                        </div>
                                <!-- Sign out function -->
                        <div class="user-signout"> 
                        <p><a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <u>{{ __('Sign Out') }}</u>
                        </a></p>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                            <!-- <p><u> {{ __('Sign Out') }}</u></p> -->
                        </form>
                        </div>
                    </div>
                </div>

                <div class="acc-tab">
                    <div class="myprojects">
                    <span class="material-symbols-outlined" id="account-icons">edit_square</span><p><a href="/myprojects">My Projects</a></p>
                    </div>
                </div>
                
                <div class="acc-tab-active">
                    <div class="mywishlist">
                        <i class="material-symbols-outlined" id="account-icons">favorite</i><p><a href="/wishlist">My Wishlist</a></p>
                    </div>
                </div>

                
                <div class="acc-tab">
                    <div class="purchasehistory">
                    <span class="material-symbols-outlined" id="account-icons">package_2</span><p><a href="/purchasehistory">Purchase History</a></p>
                    </div>
                </div>
        </div>

        <div class="wishlist">

            @if($wishlist->count()==0)
            <div class="wishlist-empty">
                <h4>Your wishlist is currently empty.</h4>
                <!-- <p>Have a look at our pattern range</p>
                <div class="ew-icon">
                    <img src="/site-images/love.png" alt="icon">
                </div> -->
            </div>
            @else
                <h2>{{ Auth::user()->name }}'s Wishlist</h2>

                <div class="wcards-contain">
                    @foreach ($wishlist as $product)

                        <div class="prod-card">
                            <div class="image"><img src="{{ $product->productImage }}" alt="Image">
                            <form action="{{ route('wishlist.removeFromWishlist') }}" method="POST">
                                <input type="hidden" name="wishlistID" id="wishlistID" value="{{ $product->wishlistID }}">
                                @csrf
                                <button class="btn btn-danger" id = "wishlist-remove">✕</button>
                            </form>
                            </div>
                            <div class="prod-contain">
                            <a href="/pattern/{{$product->productID}}"><h1>{{ $product->productName }}</h1></a>
                            <p class="price">£{{ $product->productPrice }}
                                <div class="rating-stars">
                                    <a href="/pattern/{{$product->productID}}">
                                        <span id="star-icon">&star;</span>
                                        <span id="star-icon">&star;</span>
                                        <span id="star-icon">&star;</span>
                                        <span id="star-icon">&star;</span>
                                        <span id="star-icon">&star;</span><b>(0)</b>
                                    </a>
                                </div>
                            </p>
                            </div>
                            <button><a href="/pattern/{{$product->productID}}"i class="material-symbols-outlined">shopping_bag</i><span>Add to basket</span></a></button>
                        </div>
                    @endforeach 
                </div>
            @endif

        </div>

</div>

@endsection