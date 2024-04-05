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
            @if (Auth::check())                        
                <h2>{{ Auth::user()->name }}'s Wishlist</h2><p>4 items</p>
            @endif
            <div class="pcards">

                <div class="pcard1">
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

                <div class="pcard2">
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
        </div>

</div>

@endsection