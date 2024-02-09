@extends('layouts.frontend')

@section('page-content')

<!--********************************
  Code Start From Here 
	******************************** -->

<!-- Hero Area Start -->
<div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Sign Up</h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li>Sign Up</li>
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
                    <h2 class="form-title text-center mb-lg-35">Create an account</h2>
                    <div class="form-group">
                        <label for="signUpUserName" class="sr-only">Username</label>
                        <input type="text" class="form-control" placeholder="Username*" id="signUpUserName" name="signUpUserName" required>
                    </div>
                    <div class="form-group">
                        <label for="signUpUserEmail" class="sr-only">Email address</label>
                        <input type="text" class="form-control" placeholder="Email address*" id="signUpUserEmail" name="signUpUserEmail" required>
                    </div>
                    <div class="form-group">
                        <label for="signUpUserPass" class="sr-only">Password</label>
                        <input type="password" class="form-control" placeholder="Password*" id="signUpUserPass" name="signUpUserPass" required>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="signUpTerms" id="signUpTerms">
                        <label for="signUpTerms">I have read and agree to the website terms and conditions</label>
                    </div>
                    <div class="form-group mb-0 text-center">
                        <button class="vs-btn w-100 style4" type="submit">Register</button>
                        <div class="bottom-links link-inherit pt-3">
                            <span>Already have account? <a class="text-theme" href="/login">Sign in</a></span>
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