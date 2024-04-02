@extends('layouts.layout')

@section('content')

<link rel="stylesheet" href="css/basket.css">

<div class="basket-title">
    <h2>Your Basket (0)</h2>
</div>

<div class="basket-contain">
    <!-- Insert function to automatically fetch no. of items from basket table -->

    <div class="basket-card">

 
  
    @foreach ($basket as $product)
            <div class="purchase-card">
                <div class="ph-img"><img src="{{ $product->productImage }}" alt="Image"></div>
                <div class="ph-text">
                    <div class="ph-head">
                        <div class="ph-title">
                            <h2>{{ $product->productName }}&nbsp;</h2>
                        </div>
                        <div class="ph-empty"></div>
                        <div class="ph-pencil">
                            <i class="fa fa-pencil" id="pencil"></i>
                        </div>
                    </div>
                    <hr>
                    <div class="ph-text-content">
                        <div class="ph-grid">
                            <div class="ph-creator"> <p>Creator: <b>{{ $product->productCreator }}</b></p></div>
                            <div class="ph-empty"> </div>
                            <div class="ph-price"> <h2>£{{ $product->productPrice }}</h></div>
                        </div>
                        <!-- <p>Category: <b>{{ $product->basketID }}</b></p> -->
                        <p>Category: <b>{{ $product->productCategory }}</b></p>
                        <p class="ph-det"></p>
                        <form action="{{ route('basket.remove') }}" method="POST">
                            <input type="hidden" name="basketID" id="basketID" value="{{ $product->basketID }}">
                            @csrf
                            <button class="btn btn-danger" id = "remove_button">Remove</button>
                        </form>
                    </div>
                </div>
            </div>
    @endforeach

            <!-- <div class="purchase-card">
                <div class="ph-img"></div>
                <div class="ph-text">
                    <div class="ph-head">
                        <div class="ph-title">
                            <h2>Pattern Title&nbsp;</h2>
                        </div>
                        <div class="ph-empty"></div>
                        <div class="ph-pencil">
                            <i class="fa fa-pencil" id="pencil"></i>
                        </div>
                    </div>
                    <hr>
                    <div class="ph-text-content">
                        <div class="ph-grid">
                            <div class="ph-creator"> <p>Creator: <b>Creator</b></p></div>
                            <div class="ph-empty"> </div>
                            <div class="ph-price"> <h2>£0.00</h></div>
                        </div>
                        <p>Category: <b>Category</b></p>
                        <p>Quantity: <b>Quantity</b></p>
                        <p class="ph-det"><u><b>View Details</b></u></p>
                    </div>
                </div>
            </div>

            <div class="purchase-card">
                <div class="ph-img"></div>
                <div class="ph-text">
                    <div class="ph-head">
                        <div class="ph-title">
                            <h2>Pattern Title&nbsp;</h2>
                        </div>
                        <div class="ph-empty"></div>
                        <div class="ph-pencil">
                            <i class="fa fa-pencil" id="pencil"></i>
                        </div>
                    </div>
                    <hr>
                    <div class="ph-text-content">
                        <div class="ph-grid">
                            <div class="ph-creator"> <p>Creator: <b>Creator</b></p></div>
                            <div class="ph-empty"> </div>
                            <div class="ph-price"> <h2>£0.00</h></div>
                        </div>
                        <p>Category: <b>Category</b></p>
                        <p>Quantity: <b>Quantity</b></p>
                        <p class="ph-det"><u><b>View Details</b></u></p>
                    </div>
                </div>
            </div> -->

    </div>

    <div class="order-summary">
        <p>Subtotal:&nbsp;£0.00</p>
        <hr>
        <p><b>Subtotal:&nbsp;£0.00</b></p>
        <input type="submit" id="basket_submit" value="Checkout">
    </div>

</div>

@endsection