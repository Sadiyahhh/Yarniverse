@extends('layouts.layout')

@section('content')

<link rel="stylesheet" href="/css/login.css">

<div class="login-contain">
    <div class="form-box">
        <div class="box-button">
            <div id="btn"></div>
                <button type="button" id="login" class="toggle-btn">Sign In</button>
                <button type="button" id="register" class="toggle-btn">Register</button>
        </div>
            <form id="loginform" action="/myaccount">
                <label for="email">Email address</label>
                <input type="text" id="email" name="email" placeholder="Your email address">

                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Your password">
                <!-- Add forgot password hyperlink for later function -->
                <br>

                <input type="checkbox" id="checkbox" name="checkbox" value="checkbox">
                <label for="checkbox" id="label-v"> Remember me </label><br>

                <input type="submit" id="login_submit" value="Sign In">
            </form>

            <form id="registerform" action="/login">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter a username">

                <label for="email">Email address</label>
                <input type="text" id="email" name="email" placeholder="Enter your email address" required>
                
                <label for="emailc">Confirm email address</label>
                <input type="text" id="emailc" name="emailc" placeholder="Confirm your email address" required>
                <br>

                <input type="checkbox" id="checkbox" name="checkbox" value="checkbox">
                <label for="checkbox" id="label-v"> I agree to the <u>Yarniverse Terms and Conditions<u></label><br>

                <input type="submit" id="login_submit" value="Sign In">
            </form>
    </div>
 
</div>

@endsection


