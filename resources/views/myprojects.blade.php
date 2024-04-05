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
                                <p> Hello, <b>{{ Auth::user()->name }}<b>!</p>
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
                    <span class="material-symbols-outlined" id="account-icons">edit_square</span><p><a href="/myprojects">My Projects</a></p>
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
</div>

<!-- Old download file  -->
    
    
    <div class="projects">

        <form action="{{ route('addproject') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-control">
                <label>Project Title</label>
                <input type="text" name="projectTitle" required class="form-control" placeholder="Enter a title">
            </div>

            <div class="form-control">
                <label>Project Description</label>
                <textarea id="projectDescription" name="projectDescription" required class="form-control" placeholder="Enter a description:"></textarea>
            </div>

            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="image" class="custom-file-input">
                    <label class="custom-file-label">Upload Image</label>
                </div>
            </div>

            <div class="form-control">
                <label>Notes</label>
                <!-- <input type="text" name="notes" required class="form-control" placeholder="Your notes:"> -->
                <textarea id="notes" name="notes" placeholder="Your notes:"></textarea>
                <!-- <input type="submit" value="Submit"> -->
            </div>
                <button type="submit" class="btn btn-primary">Save</button>
        </form>

    </div>

    <!-- <div class="projects"> -->
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
    <!-- </div> -->


@endsection