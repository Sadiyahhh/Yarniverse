@extends('layouts.layout')

@section('content')
<link rel="stylesheet" href="/css/myprojects.css">


<div class="account-contain">
    <div class="account-title">
        <h1>My Projects</h1>
    </div>

        <div class="account-nav">
                <div class="user-info">
                    <span class="dot"></span>
                    <div class="userinfo-t">
                        <div class="user"> 
                            @if (Auth::check())
                                <p> Hello, <b>{{ Auth::user()->name }}<b>! <i class="fa fa-pencil"></i></p>
                            @endif
                        </div>
                                <!-- Sign out function -->
                        <div class="user-signout"> 
                        <p><a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            <u>{{ __('Sign Out') }}</u>
                        </a></p>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                            <!-- <p><u> {{ __('Sign Out') }}</u></p> -->
                        </form>
                        </div>
                    </div>
                </div>

                <div class="acc-tab-active">
                    <div class="myprojects">
                        <img src="/site-images/yarn-removebg-preview.png"><p><a href="/myprojects">My Projects</a></p>
                    </div>
                </div>

                
                <div class="acc-tab">
                    <div class="accountdetails">
                        <i class="material-symbols-outlined" id="account-icons">person</i><p><a href="/details">Account Details</a></p>
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

        <div class="projects">
        @foreach ($purchases as $product)
        <div class="project">
            <h1>{{ $product->productName }}&nbsp<i class="fa fa-pencil" id="pencil"></i></h1>
            <!-- <a href="{{ route('download', ['filename' => 'test.pdf']) }}" target="_blank">Download</a> -->
            <form action="{{ route('download') }}" method="GET">
                <input type="hidden" name="filename" id="filename" value="{{ $product->location }}">
                @csrf
                <button class="btn btn-danger" id = "download_button">Download</button>
            </form>
            <div class="p-desc">
                <p><b>Project Description</b></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                     et dolore magna aliqua. Ut enim ad minim veniam, </p>
                <p><b>My Progress</b></p>
                <div class="progress-bar"></div>
                <div class="progress-tabs">
                    <div class="tab1">
                        <p>Starting Slipknot</p>
                    </div>
                    <div class="tab2">
                        <p>In the Loop</p>
                    </div>
                    <div class="tab3">
                        <p>Halfway Hooked</p>
                    </div>
                    <div class="tab4">
                        <p>Final Stitches</p>
                    </div>
                    <div class="tab5">
                        <p>Complete!</p>
                    </div>
                </div>

            </div>
        </div>
        @endforeach

    <div class="projects">

    

        
        <!-- <div class="project">
            <h1>Project Name&nbsp<i class="fa fa-pencil" id="pencil"></i></h1>
            <div class="p-desc">
                <p><b>Project Description</b></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                     et dolore magna aliqua. Ut enim ad minim veniam, </p>
                <p><b>My Progress</b></p>
                <div class="progress-bar"></div>
                <div class="progress-tabs">
                    <div class="tab1">
                        <p>Starting Slipknot</p>
                    </div>
                    <div class="tab2">
                        <p>In the Loop</p>
                    </div>
                    <div class="tab3">
                        <p>Halfway Hooked</p>
                    </div>
                    <div class="tab4">
                        <p>Final Stitches</p>
                    </div>
                    <div class="tab5">
                        <p>Complete!</p>
                    </div>
                </div>

            </div>
        </div> -->

        <!-- <div class="project1">
            <h1>Project Name&nbsp<i class="fa fa-pencil" id="pencil"></i></h1>
            <div class="p-desc">
                <p><b>Project Description</b></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                     et dolore magna aliqua. Ut enim ad minim veniam, </p>
                <p><b>My Progress</b></p>
                <div class="progress-bar"></div>
                <div class="progress-tabs">
                    <div class="tab1">
                        <p>Starting Slipknot</p>
                    </div>
                    <div class="tab2">
                        <p>In the Loop</p>
                    </div>
                    <div class="tab3">
                        <p>Halfway Hooked</p>
                    </div>
                    <div class="tab4">
                        <p>Final Stitches</p>
                    </div>
                    <div class="tab5">
                        <p>Complete!</p>
                    </div>
                </div>

            </div>
        </div> -->
    </div>

</div>

@endsection