<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/layout.css">

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

        <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>


        <title>Yarniverse</title>
        <link rel="icon" type="image/x-icon" href="/site-images/icon-nobg.png">
    </head>

    <div class="header">
        <div class="header-logo" id="header-logo">
            <img src="/site-images/y-nobg.png" alt="" href="/welcome"></img>
        </div>
      
        <div class="search-container">
            <form action="/action_page.php">
                <button type="submit" id="search-icon"><iconify-icon icon="heroicons:magnifying-glass"></iconify-icon></button>
                <input type="text" id="search-input" placeholder="Search our patterns" name="search">
            </form>
        </div>

        <div class="header-items"> 
            <!-- Whilst user is not logged in -->
            <a href="/login" i class="material-symbols-outlined" id="account-icon">person</i></a>
            <a href="/login" i class="material-symbols-outlined" id="heart-icon">favorite</i></a>                
            <a href="/login" i class="material-symbols-outlined" id="shopping-icon">shopping_bag</i>
            <!-- Once user is logged in -->
            <!-- <a href="/myaccount" i class="material-symbols-outlined" id="account-icon">person</i></a>
            <a href="/wishlist" i class="material-symbols-outlined" id="heart-icon">favorite</i></a>                
            <a href="/basket" i class="material-symbols-outlined" id="shopping-icon">shopping_bag</i> -->
        </div>
    </div>

    <div class="navigation" id="navigation">
        <a href="#amigurumi" id="amigurumi">Amigurumi</a>
        <a href="#clothing" id="clothing">Clothing</a>
        <a href="#accessories" id="accessories">Accessories</a>
        <a href="#pets" id="pets">Pets</a>
        <a href="#homedecor" id="homedecor">Home Decor</a>
    </div>

<div class="container">
@yield('content')

</div>

    <div class="footer">
        <div class="footer-content">
            <div class="footer-logo">
                <a href="/welcome" class="logo"><img src="/site-images/lightvert-nobg.png" alt="" /></a>
            </div>

            <div class="footer-links" id="foot-content-box">
                    <a href="/faqs">FAQs</a><br>
                    <a href="/contactus">Contact Us</a><br>
                    <a href="/tc">T&Cs</a><br>
                    <a href="/privacy">Privacy Policy</a><br>
            </div>
        </div>
        <div class="newsletter" id="foot-content-box" style="width:20%; margin-left: 75%; margin-top:-10%;">
                <form action="/" method="post" >
                @csrf
                    <div class="news-text">
                        <h3>Get 20% off your next pattern purchase</h3>
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
        <hr>
        
        <div class="footer-bottom">
          <div class="d-flex justify-content-between my-4">
            <div class="col-md-4 d-flex align-items-center" style="width: 31%;">
              <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
              </a>
              <br>
              <span class= "mb-md-0 text-muted" style="color: #D0B7B4;">&copy; Copyright Yarniverse LTD, 2023</span>
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
    </div>  