<!-- @extends('layouts.layout')

@section('content')

<link rel="stylesheet" href="/css/login.css">

<div class="login-contain">
    <div class="form-box">
        <div class="box-button">
            <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Sign In</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
        </div>
            <form id="login" action="/myprojects" class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" class="input-field" placeholder="Your username">

                <label for="password">Password</label>
                <input type="password" id="password" class="input-field" placeholder="Your password">
                Add forgot password link later.
                <br>

                <input type="checkbox" id="checkbox" value="checkbox">
                <label for="checkbox" id="label-v"><span> Remember me <span></label><br>

                <input type="submit" id="login_submit" value="Sign In">
            </form>
            <form id="register" class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" class="input-field" placeholder="Enter a username">

                <label for="email">Email address</label>
                <input type="text" id="email" class="input-field" placeholder="Enter your email address">
                
                <label for="emailc">Confirm email address</label>
                <input type="text" id="emailc" class="input-field" placeholder="Confirm your email address">
                
                <label for="password">Password</label>
                <input type="password" id="password" class="input-field" placeholder="Your password">

                <label for="passwordc">Confirm password</label>
                <input type="passwordc" id="passwordc" class="input-field" placeholder="Confirm your password">
                <br>

                <input type="checkbox" id="checkbox" name="checkbox" value="checkbox">
                <label for="checkbox" id="label-v"><span> I agree to the <u>Yarniverse Terms and Conditions.<u></span></label><br>

                <input type="submit" id="login_submit" value="Register">
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

 -->
