@extends('layouts.layout')

@section('content')

<link rel="stylesheet" href="css/basket.css">

    @if(!isset($basket))
    <div class="checkout-screen" style="text-align:center;">
        <div class="checkout-icon" style="position: relative; left: 29rem; height: 15rem; width: 15rem;">
            <img src="/site-images/purchase.png" style="height: 100%; width: 100%; object-fit: fill;" alt="icon">
        </div>
        <h2>Thank you for your purchase!</h2>
        <p>Navigate to your purchase history to view and download your new pattern's PDF. Get stitching!</p>
        <a href="/purchasehistory"><input type="submit" id="purchase-shop" 
        style="background-color: #7A524E;
        border: 1px solid #573B38;
        color: #D0B7B4;
        font-weight: bold;
        padding: 1% 2%;
        margin-top: 2%;
        margin-left: 1rem;
        outline: none;
        border-radius: 20px;
        cursor: pointer;" value="View Purchase"></input></a>
    </div>

    @elseif($basket->count()==0)
    <div class="empty-basket">
        <div class="eb-icon">
            <img src="/site-images/shopping.png" alt="icon">
        </div>
        <h2>Your basket is currently empty.</h2>
        <p>Looks like you've not added any patterns to your cart just yet. Browse our patterns and start your next crafty creation!</p>
        <a href="/shop"><input type="submit" id="bask-shop" value="Browse Patterns"></input></a>
    </div>
    @else

        <h1>Your Basket</h1>

        <div class="basket-contain">

            <div class="basket-card">
            <?php 
                $total = 0;
            ?> 
        
            @foreach ($basket as $product)
                <?php 
                    $total += $product->productPrice;
                ?>
                    <div class="purchase-card">
                        <div class="ph-img"><img src="{{ $product->productImage }}" alt="Image"></div>
                        <div class="ph-text">
                            <div class="ph-head">
                                <div class="ph-title">
                                    <h2>{{ $product->productName }}&nbsp;</h2>
                                </div>
                                <div class="ph-empty"></div>
                            </div>
                            <hr>
                            <div class="ph-text-content">
                                <div class="ph-grid">
                                    <div class="ph-creator"> <p>Creator: <b>{{ $product->productCreator }}</b></p></div>
                                    <div class="ph-empty"> </div>
                                    <div class="ph-price"> <h2>£{{ $product->productPrice }}</h></div>
                                </div>
                                <p>Category: <b>{{ $product->productCategory }}</b></p>
                                <form action="{{ route('basket.remove') }}" method="POST">
                                    <input type="hidden" name="basketID" id="basketID" value="{{ $product->basketID }}">
                                    @csrf
                                    <button class="btn btn-danger" id = "remove_button"><span class="material-symbols-outlined">delete</span></button>
                                </form>
                            </div>
                        </div>
                    </div>
            @endforeach
            </div>

            <div class="order-summary">
                <h3>Order Summary</h3>
                <p>Subtotal:</p><span>£{{ $total }}</span>
                <hr>
                <p><b>Subtotal:</p><span>£{{ $total }}</b></span>
                <form action="{{ route ('basket.checkout') }}" method="POST">
                    @csrf
                    <input type="submit" id="basket_submit" value="Checkout">
                </form>
            </div>

        </div>
    @endif
@endsection