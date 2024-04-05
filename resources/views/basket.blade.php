@extends('layouts.layout')

@section('content')

<link rel="stylesheet" href="css/basket.css">

@if(!isset($basket))

<div class="basket-title">
    <h2>Your Basket (0)</h2>
</div>


@else

<h1>Your Basket</h1>

<div class="basket-contain">
    <!-- Insert function to automatically fetch no. of items from basket table -->

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
                        <!-- <div class="ph-pencil">
                            <i class="fa fa-pencil" id="pencil"></i>
                        </div> -->
                    </div>
                    <hr>
                    <div class="ph-text-content">
                        <div class="ph-grid">
                            <div class="ph-creator"> <p>Creator: <b>{{ $product->productCreator }}</b></p></div>
                            <div class="ph-empty"> </div>
                            <div class="ph-price"> <h2>£{{ $product->productPrice }}</h></div>
                        </div>
                        <p>Category: <b>{{ $product->productCategory }}</b></p>
                        <!-- <p class="ph-det"><u><b>View Details</b></u></p> -->
                        <form action="{{ route('basket.remove') }}" method="POST">
                            <input type="hidden" name="basketID" id="basketID" value="{{ $product->basketID }}">
                            @csrf
                            <button class="btn btn-danger" id = "remove_button">Remove</button>
                        </form>
                    </div>
                </div>
            </div>
    @endforeach
    </div>

    <div class="order-summary">
        <p>Subtotal:&nbsp;£{{ $total }}</p>
        <hr>
        <p><b>Subtotal:&nbsp;£{{ $total }}</b></p>
        <form action="{{ route ('basket.checkout') }}" method="POST">
            @csrf
            <input type="submit" id="basket_submit" value="Checkout">
        </form>
        

    </div>

</div>
@endif
@endsection