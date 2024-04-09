@extends ('layouts.layout')

@section('content')

<link rel="stylesheet" href="/css/edit.css">

<div class="edit-contain">
    <div class="edit-title">
        <h2>Edit your Project</h2>
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

    <div class="update-project">
        <form action="{{ route ('updateproject', $proj->projectID) }}" method="POST" enctype="multipart/form-data">
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
                <textarea id="notes" name="notes" placeholder="Your notes:"></textarea>
            </div>
                <button type="submit" id="update-submit" class="btn btn-primary">Update</button>
        </form>
    </div>

@endsection