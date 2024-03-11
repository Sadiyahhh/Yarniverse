@extends('layouts.layout')

@section('content')
<link rel="stylesheet" href="/css/purchasehistory.css">

<div class="ph-contain">

        <div class="account-nav">
                <div class="user-info">
                    <span class="dot"></span>
                    <div class="userinfo-t">
                        <div class="user"> 
                        <p> Hello, <b>[user]<b>! <i class="fa fa-pencil"></i></p>
                        </div>
                                <!-- Sign out function -->
                        <div class="user-signout"> 
                        <p><a href="/login"><u>Sign out</u></a></p>
                        </div>
                    </div>
                </div>

                <div class="acc-tab">
                    <div class="myprojects">
                        <img src="/site-images/yarn-removebg-preview.png"><p><a href="/myprojects">My Projects</a></p>
                    </div>
                </div>

                
                <div class="acc-tab">
                    <div class="accountdetails">
                        <i class="material-symbols-outlined" id="account-icons">person</i><p><a href="/details">Account Details</a></p>
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
            <h1>Purchase History</h1>
            <div class="purchase-card">
                <div class="ph-img"></div>
                <div class="ph-text">
                    <h1>Pattern Title</h1>
                    <hr>
                    <div class="ph-text-content">
                        <p>Creator: <b>Creator</b> <h1>£0.00</h1></p>
                        <p>Category: <b>Category</b></p>
                        <p>Quantity: <b>Quantity</b></p>
                        <p class="ph-det"><u><b>View Details</b></u></p>
                    </div>
                </div>
            </div>
        </div>
        

</div>

@endsection
