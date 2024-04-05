@extends('layouts.layout')

<link rel="stylesheet" href="/css/login.css">

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->


<div class="login-contain">
    <div class="login-box">
        <!-- <div class="box-button">
            <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Sign In</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
        </div> -->
            <form method="POST" id="login" action="{{ route('login') }}" class="form-group">
                @csrf
                <h2>Sign In</h2>
                <label for="email">{{ __('Email Address') }}</label>
                <!-- <input type="text" id="username" class="input-field" placeholder="Your username"> -->
                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror input-field" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>Oops! That doesn't match, please try again.</strong>
                        </span>
                    @enderror

                <label for="password">{{ __('Password') }}</label>
                <!-- <input type="password" id="password" class="input-field" placeholder="Your password"> -->

                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror input-field" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" id="login-error" role="alert">
                        <strong>Oops! That doesn't match, please try again.</strong>
                    </span>
                @enderror

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" id="forgotpass">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
                <br>

                <!-- <input type="checkbox" id="checkbox" value="checkbox">
                <label for="checkbox" id="label-v"><span> {{ __('Remember Me') }} <span></label><br> -->

                <input class="form-check-input" type="checkbox" name="remember" id="remember checkbox label-v" value="checkbox" {{ old('remember') ? 'checked' : '' }}>
                <!-- <label class="form-check-label" id="label-v" for="checkbox"> -->
                <span>
                    {{ __('Remember Me') }}
                </span>
                <!-- </label> -->
                <br>

                <input type="submit" id="login_submit" value="Sign In"></input>
                
            </form>
    </div>

    <div class="register-box">
            <form method="POST" action="{{ route('register') }}" id="register" class="form-group">
                        @csrf
                <h2>Register</h2>
                <div class="row mb-3">
                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror input-field" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror input-field" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror input-field" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control input-field" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <input type="checkbox" id="checkbox" name="checkbox" value="checkbox">
                <label for="checkbox" id="label-v"><span> I agree to the <u>Yarniverse Terms and Conditions.<u></span></label><br>

                <input type="submit" id="login_submit" value="Sign In"></input>

            </form>
    </div>
 
</div>

    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register(){
            x.style.left = "-500px";
            y.style.left = "100px";
            z.style.left = "110px";
        }

        function login(){
            x.style.left = "100px";
            y.style.left = "650px";
            z.style.left = "0";        
        }
    
    </script>
@endsection
