@extends('layouts.layout')

<link rel="stylesheet" href="/css/login.css">

@section('content')



<div class="login-contain">
    <div class="login-box">
            <form method="POST" id="login" action="{{ route('login') }}" class="form-group">
                @csrf
                <h2>Sign In</h2>
                <label for="email">{{ __('Email Address') }}</label>
                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror input-field" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>Oops! That doesn't match, please try again.</strong>
                        </span>
                    @enderror

                <label for="password">{{ __('Password') }}</label>

                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror input-field" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" id="login-error" role="alert">
                        <strong>Oops! That doesn't match, please try again.</strong>
                    </span>
                @enderror
                <br>


                <input class="form-check-input" type="checkbox" name="remember" id="remember checkbox label-v" value="checkbox" {{ old('remember') ? 'checked' : '' }}>
                <span>
                    {{ __('Remember Me') }}
                </span>
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
                            <span class="invalid-feedback" id="register-error" role="alert">
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
                <label for="checkbox" id="label-v"><span> I agree to the Yarniverse Terms and Conditions.</span></label><br>

                <input type="submit" id="login_submit" value="Register"></input>

            </form>
    </div>
 
</div>


@endsection
