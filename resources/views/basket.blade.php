@extends('layouts.layout')

@section('content')

<link rel="stylesheet" href="css/basket.css">

    @if($basket->count()==0)
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