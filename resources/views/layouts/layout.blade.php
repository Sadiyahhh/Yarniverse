
  
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

        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <!-- <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script> -->

        <title>Yarniverse</title>
        <link rel="icon" type="image/x-icon" href="/site-images/icon-nobg.png">

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>

            <!-- Authentication Links -->
            <!-- @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif -->
            <!-- @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest -->
 
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

    <!-- <div class="footer">
        <div class="footer-content">
            <div class="footer-logo">
                <a href="/welcome" class="logo"><img src="/site-images/lightvert-nobg.png" alt="" /></a>
            </div>

            <div class="footer-links" id="foot-content-box">
                    <a href="/faqs">FAQs</a><br>
                    <a href="/contactus">Contact Us</a><br>
                    <a href="/about">About Yarniverse</a><br>
                    <a href="/shop">Shop</a><br>
            </div>
        </div>
        <div class="newsletter" id="foot-content-box">
                <form action="/" method="post" >
                @csrf
                    <div class="news-text">
                        <h3>Sign up to our weekly newsletter</h3>
                        <p>Be the first to hear about our latest deals and more!</p>
                    </div>

                    <br>

                    <div class="news-email">
                        <input type="text" id="news-email" placeholder="Email address" name="email" required><br>
                    </div>

                    <br>

                    <div class="news-submit">
                        <input type="submit" id="news-submit" value="Submit">
                    </div>
                </form>
        </div>
        <br>
        <br>
        <br>
        <br>
        <hr>
        
        <div class="footer-bottom">
          <div class="d-flex justify-content-between my-4">
            <div class="col-md-4 d-flex align-items-center" style="width: 31%;">
              <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
              </a>
              <p class= "mb-md-0 text-muted" style="color: #D0B7B4; margin-top:3%;">&copy; Copyright Yarniverse LTD, 2023</p>
            </div>

            <div class="social">
                <div class="facebook">
                    <a href="https://www.facebook.com/" target="_blank">
                        <i class='bx bxl-facebook  bx-sm'></i>
                    </a>
                </div>
                <div class="instagram">
                    <a href="https://www.instagram.com/" target="_blank">
                        <i class='bx bxl-instagram bx-sm'></i>
                    </a>
                </div>
                <div class="tiktok">
                    <a href="https://www.tiktok.com/" target="_blank">
                        <i class='bx bxl-tiktok bx-sm'></i>
                    </a>
                </div>
                  <div class="twitter">
                    <a href="https://www.twitter.com/" target="_blank">
                        <i class='bx bxl-twitter bx-sm'></i>
                    </a>
                </div>
            </div>
          </div>
        </div>
    </div>   -->

    <footer class="footer">
        <div class="foot-contain">
            <div class="foot-row">
                <div class="footer-col">
                    <h4>Support</h4>
                    <ul>
                    <!-- @guest
                    @if (Route::has('login'))
                        <li><a href="{{route('login')}}">My Account</a></li>
                    @else
                        <li><a href="{{route('myprojects')}}">My Account</a></li>
                    @endif
                    @endguest -->
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
                        <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://www.tiktok.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.tiktok.com/"><i class="fab fa-pinterest"></i></a>
                    </div>
                </div>
                <div class="footer-logo">
                    <a href="/welcome" class="logo"><img src="/site-images/lightvert-nobg.png" alt="" /></a>
                    </div>
                </div>
        </div>
    </footer>

</html>
