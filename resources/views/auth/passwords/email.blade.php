@extends('layouts.layout')

@section('content')

<link rel="stylesheet" href="/css/login.css">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}" class="reset-pass">
                        @csrf
                        <h2 id="reset-head">Reset Password</h2>

                        <div class="reset-box">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror input-field" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        <!-- <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div> -->

                        <input type="submit" id="reset_submit" value="Send Password Reset Link"></input>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
