@extends('layouts.layout')

@section('content')
<link rel="stylesheet" href="/css/myprojects.css">


<div class="account-contain">
    <div class="account-title">
        <h1>My Projects</h1>
    </div>

        <div class="account-nav">
                <div class="user-info">
                    <div class="dot"><img src="/site-images/userprofile.avif" alt="img"></div>
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

<div class="project-body">
    @if($projects->count()==0)
        <div class="add-project">
            <h3>Add a new Project:</h3>
            <form action="{{ route('addproject') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-control">
                    <label>Project Title</label>
                    <input type="text" name="projectTitle" required class="form-control add-field" placeholder="Enter a title">
                </div>

                <div class="form-control">
                    <label>Project Description</label>
                    <textarea id="projectDescription" name="projectDescription" required class="form-control add-field" placeholder="Enter a description:"></textarea>
                </div>

                <div class="form-control">
                    <label>Materials</label>
                    <textarea id="notes" name="notes" required class="form-control add-field" placeholder="Your notes:"></textarea>
                </div>

                <div class="input-group">
                    <div class="custom-file">
                        <label class="custom-file-label" id="login-submit" >Upload Image</label>
                        <input type="file" name="image" required class="custom-file-input">
                    </div>
                </div>

                    <button type="submit" id="add-project" class="btn btn-primary">Add Project</button>
            </form>
        </div>
    @else

            @foreach ($projects as $project)
                <div class="project">
                        <form action="{{ route('removeproject') }}" method="POST">
                            <input type="hidden" name="projectID" id="projectID" value="{{ $project->projectID }}">
                            @csrf
                            <button class="btn btn-danger" id = "project-remove"><span class="remove-icon">✕</span></button>
                        </form>
                        <h1>{{$project->projectTitle}}&nbsp;</h1>

                        <form action="{{ route('editproject', $project->projectID) }}" method="POST">
                            <input type="hidden" name="projectID" id="projectID" value="{{ $project->projectID }}">
                            @csrf
                            <button class="btn btn-danger" id="edit_button"><span class="material-symbols-outlined" id="pencil">edit</span></button>
                        </form>

                    <div class="p-desc">
                        <p><b>Project Description</b></p>
                        <p>{{$project->projectDescription}}</p>
                        <p><b>Materials Needed</b></p>
                        <p>{{$project->notes}}</p>
                        <div class="project-img">
                        <img src="/uploads/project/{{$project->image}}" alt="image">
                        </div>

                        <div class="progress">
                            <p><b>My Progress</b></p>
                            <div class="progress-slider">
                                <input type="range" class="range" id="range">
                                <div class="project-progress"></div>
                            </div>

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
                </div>
            @endforeach

    <div class="add-project">
        <h3>Add a new Project:</h3>
        <form action="{{ route('addproject') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-control">
                <label>Project Title</label>
                <input type="text" name="projectTitle" required class="form-control add-field" placeholder="Enter a title">
            </div>

            <div class="form-control">
                <label>Project Description</label>
                <textarea id="projectDescription" name="projectDescription" required class="form-control add-field" placeholder="Enter a description:"></textarea>
            </div>

            <div class="form-control">
                <label>Materials</label>
                <textarea id="notes" name="notes" required class="form-control add-field" placeholder="Your notes:"></textarea>
            </div>

            <div class="input-group">
                <div class="custom-file">
                    <label class="custom-file-label" id="login-submit" >Upload Image</label>
                    <input type="file" name="image" required class="custom-file-input">
                </div>
            </div>

                <button type="submit" id="add-project" class="btn btn-primary">Add Project</button>
        </form>
    </div>
    @endif
</div>

@endsection