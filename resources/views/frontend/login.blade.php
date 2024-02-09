@extends('layouts.frontend')

@section('page-content')

<!--********************************
  Code Start From Here 
	******************************** -->

<!-- Hero Area Start -->
<div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Sign In</h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li>Sign In</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Hero Area End -->

<!-- Sign Up Area Start -->
<div class="signup-wrapper  space">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 ">
                <form action="#" class="signup-form bg-smoke">
                    <h2 class="form-title text-center mb-lg-35">Sign In</h2>
                    <div class="form-group">
                        <label for="loginUserId" class="sr-only">Username or email address*</label>
                        <input type="text" class="form-control" placeholder="Username or email address*" id="loginUserId" name="loginUserId" required>
                    </div>
                    <div class="form-group">
                        <label for="loginUserPass" class="sr-only">Password*</label>
                        <input type="password" class="form-control" placeholder="Password*" id="loginUserPass" name="loginUserPass" required>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="loginRemember" id="loginRemember">
                        <label for="loginRemember">Remember Me</label>
                    </div>
                    <div class="form-group mb-0 text-center">
                        <button class="vs-btn mask-style1 w-100 style4" type="submit">Login</button>
                        <div class="bottom-links link-inherit d-md-flex justify-content-between mt-3">
                            <a href="#" class="recovery-link mb-2 mb-md-0">Forgot your password?</a>
                            <a href="sign-up.html">Or Create Account</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Sign Up Area End -->

<!--********************************
  Code Ends Here 
	******************************** -->

@endsection