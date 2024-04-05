@extends('layouts.layout')

@section('content')
<link rel="stylesheet" href="/css/purchasehistory.css">

<div class="ph-contain">

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
                        <!-- <img src="/site-images/yarn-removebg-preview.png"><p><a href="/myprojects">My Projects</a></p> -->
                        <span class="material-symbols-outlined" id="account-icons">edit_square</span><p><a href="/myprojects">My Projects</a></p>
                    </div>
                </div>
                
                <div class="acc-tab">
                    <div class="mywishlist">
                        <i class="material-symbols-outlined" id="account-icons">favorite</i><p><a href="/wishlist">My Wishlist</a></p>
                    </div>
                </div>

                
                <div class="acc-tab-active">
                    <div class="purchasehistory">
                    <span class="material-symbols-outlined" id="account-icons">package_2</span><p><a href="/purchasehistory">Purchase History</a></p>
                    </div>
                </div>
        </div>

        <div class="ph">
            <h2>Purchase History</h2>
            @foreach ($purchases as $product)
                <div class="purchase-card">
                    <div class="ph-img">
                            <img src="{{ $product->productImage }}" alt="Image">
                    </div>
                    <div class="ph-text">
                        <h1>{{ $product->productName }}</h1>
                        <hr>
                        <div class="ph-text-content">
                            <div class="ph-grid">
                                <div class="ph-creator"> <p>Creator: <b>{{ $product->productCreator }}</b></p></div>
                                <div class="ph-empty"> </div>
                                <div class="ph-price"> <h1>{{ $product->productPrice }}</h1></div>
                            </div>
                            <p>Category: <b>{{ $product->productCategory }}</b></p>
                            <form action="{{ route('download') }}" method="GET">
                                <input type="hidden" name="filename" id="filename" value="{{ $product->location }}">
                                @csrf
                                <button class="btn btn-danger" id = "download_button"><span class="material-symbols-outlined">download</span></button><span>Download</span>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        

</div>

@endsection
