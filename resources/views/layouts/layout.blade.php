<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/layout.css">

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

        <title>Yarniverse</title>
        <link rel="icon" type="image/x-icon" href="/site-images/icon-nobg.png">
    </head>

    <!-- <div class="navigation">
        <div class="nav-logo">
            <a class="li" href="/myaccount"><img src="/site-images/y-nobg.png" alt="" ></a></img>
        </div>
        <span class="material-symbols-outlined" id="account-icon" href="/myaccount">person</span>
        <span class="material-symbols-outlined" id="heart-icon" href="/wishlist">favorite</span>                
        <span class="material-symbols-outlined" id="shopping-icon" href="/basket">shopping_bag</span>
        <a class="active" href="/">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
    </div> -->

    <div class="navigation">
        <div class="nav-logo" id="nav-logo"><img src="/site-images/y-nobg.png" alt="" href="/"></img>
        </div>
        <div class="nav-search"> 

        </div>
        <div class="nav-items"> 
            <span class="material-symbols-outlined" id="account-icon" href="/myaccount">person</span>
            <span class="material-symbols-outlined" id="heart-icon" href="/wishlist">favorite</span>                
            <span class="material-symbols-outlined" id="shopping-icon" href="/basket">shopping_bag</span>
        </div>
    </div>

