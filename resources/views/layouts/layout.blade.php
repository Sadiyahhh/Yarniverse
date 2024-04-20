
  
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/layout.css">

          <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

        <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  

        <title>Yarniverse</title>
        <link rel="icon" type="image/x-icon" href="/site-images/icon-nobg.png">

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>

 
    <div class="header">
        <div class="header-logo" id="header-logo">
            <a href="/welcome"><img src="/site-images/y-nobg.png" alt=""></a>
        </div>
      
        <div class="search-container">
            <form action="{{ route('search') }}">
                <button type="submit" id="search-icon"><iconify-icon icon="heroicons:magnifying-glass"></iconify-icon></button>
                <input type="text" id="search-input" placeholder="Search our patterns" name="search">
            </form>
        </div>

        @guest
            @if (Route::has('login'))
            <div class="header-items"> 
                <!-- Whilst user is not logged in -->
                <a href="{{ route('login') }}" i class="material-symbols-outlined" id="header-icons">person</i></a>
                <a href="{{ route('login') }}" i class="material-symbols-outlined" id="header-icons">favorite</i></a>                
                <a href="{{ route('login') }}" i class="material-symbols-outlined" id="header-icons">shopping_bag</i></a>
            </div>
            <div class="icon-text">
                <a href="{{ route('login') }}" id="text-a-u">Sign In</a>
                <a href="{{ route('login') }}" id="text-w-u">Wishlist</a>
                <a href="{{ route('login') }}" id="text-b-u">Basket</a>
            </div>
            @endif
        @else
                <!-- Once user is logged in -->
            <div class="header-items"> 
                <a href="/myprojects" i class="material-symbols-outlined" id="header-icons">person</i></a>
                <a href="/wishlist" i class="material-symbols-outlined" id="header-icons">favorite</i></a>                
                <a href="/basket" i class="material-symbols-outlined" id="header-icons">shopping_bag</i></a>
            </div>
            <div class="icon-text">
                <a href="/myprojects" class="loggedin-icons" id="text-a">My Account</a>
                <a href="/wishlist" class="loggedin-icons" id="text-w">Wishlist</a>
                <a href="/basket" class="loggedin-icons" id="text-b">Basket</a>
            </div>

        @endguest

    </div>

    <div class="navigation" id="navigation">
        <a href="{{route('amigurumi')}}" id="amigurumi">Amigurumi</a>
        <a href="{{route('clothing')}}" id="clothing">Clothing</a>
        <a href="{{route('accessories')}}" id="accessories">Accessories</a>
        <a href="{{route('pets')}}" id="pets">Pets</a>
        <a href="{{route('homedecor')}}" id="homedecor">Home Decor</a>
    </div>

<div class="container">
@yield('content')
</div>

    <footer class="footer">
        <div class="foot-contain">
            <div class="foot-row">
                <div class="footer-col">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="/shop">Shop</a></li>
                        <li><a href="/faqs">FAQs</a></li>
                        <li><a href="/contactus">Contact</a></li>
                        <li><a href="/about">About Yarniverse</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Patterns</h4>
                    <ul>
                        <li><a href="{{route('amigurumi')}}">Amigurumi</a></li>
                        <li><a href="{{route('clothing')}}">Clothing</a></li>
                        <li><a href="{{route('accessories')}}">Accessories</a></li>
                        <li><a href="{{route('pets')}}">Pets</a></li>
                        <li><a href="{{route('homedecor')}}">Home Decor</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Follow Us</h4>
                    <div class="social-links">
                        <a href="https://www.facebook.com/"><img src="/site-images/facebook.png" alt="fb"></a>
                        <a href="https://www.instagram.com/"><img src="/site-images/instagram.png" alt="ig"></a>
                        <a href="https://www.pinterest.com/"><img src="/site-images/pinterest.png" alt="pin"></a>
                        <a href="https://www.twitter.com/"><img src="/site-images/twitter.png" alt="twitter"></a>
                    </div>
                </div>
                <div class="footer-logo">
                    <a href="/welcome" class="logo"><img src="/site-images/lightvert-nobg.png" alt="" /></a>
                    </div>
                </div>
        </div>
    </footer>

</html>
