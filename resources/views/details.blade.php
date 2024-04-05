@extends('layouts.layout')

@section('content')

<link rel="stylesheet" href="css/details.css">

<div class="details-contain">
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
                        <p><a href="/login"><u>Sign out</u></a></p>
                        </div>
                    </div>
                </div>

                <div class="acc-tab">
                    <div class="myprojects">
                    <span class="material-symbols-outlined" id="account-icons">edit_square</span><p><a href="/myprojects">My Projects</a></p>
                    </div>
                </div>

                <div class="acc-tab">
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

        <div class="accountoverview">
            <h1>Account Overview</h1>
            <div class="profile-det">
            <!-- Profile details table, will be fetched from database -->
                <p id="prof-det">Profile Details</p>
                <br>
                <p><b>Name: </b>name</p>
                <p><b>Username: </b>username</p>
                <p><b>Email address: </b>email address</p>
                <p><b>Subscribed to emails: </b>Y/N</p>
            </div>
            <hr>
            <div class="billing-address">
                <p id="bill-add">Billing Address</p>
                <br>
                <p><b>Name: </b>name</p>
                <p><b>Address Line 1: </b>address</p>
                <p><b>Address Line 2: </b>address</p>
                <p><b>City: </b>city</p>
                <p><b>Country: </b>city</p>
                <p><b>Postcode: </b>postcode</p>
            </div>
            <hr>
            <div class="payment-details">
                <p id="pay-det">Payment Details</p>
                <br>
                <p><b>Banking group: </b>bank</p>
                <p><b>Name on card: </b>name</p>
                <p><b>Card number: </b>**** **** **** 0000</p>
                <p><b>Expiry date: </b>**/00</p>
            </div>
        </div>
</div>

@endsection