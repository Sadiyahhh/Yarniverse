@extends ('layouts.layout')

@section('content')

<link rel="stylesheet" href="/css/pattern.css">

<div class="prod-body">
    <div class="pattern-left">
        <div class="pattern-img"> 
            <div class="pattern-img-cont"><img src="{{ $item->productImage }}" alt="Image"></div>
        </div>
        <div class="pattern-rec">
        </div>
    </div>
    <div class="pattern-desc"> 
        <div class="pattern-text">
            <h2>{{$item->productName}}</h2>
            <h4>£{{$item->productPrice}}</h4>
        </div>
        <div class="rating-stars">
            <span id="star-icon">&star;</span>
            <span id="star-icon">&star;</span>
            <span id="star-icon">&star;</span>
            <span id="star-icon">&star;</span>
            <!-- Reviews function/link will be inserted here -->
            <span id="star-icon">&star;</span><b><u>Read all reviews</u></b>
        </div>
        <br>
        <button type="submit" class="addto-basket"><i class="material-symbols-outlined">shopping_bag</i><span>Add to basket</span></button>
        <br>
        <button class="accordion" id="dd-start">Pattern Description</button>
            <div class="panel">
                <p>{{$item->productDescription}}</p>
            </div>
        <button class="accordion" id="dd-start">Materials Needed</button>
        <div class="panel">
            <p>{{$item->productMaterials}}</p>
        </div>
    </div>
</div>

<!-- <h1>Pattern page</h1>
<p>{{$item->productDescription}}</p> -->

@endsection