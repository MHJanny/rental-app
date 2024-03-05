@extends('frontend.layout.app')

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
                <form action="{{route('user.login')}}" method="POST" class="signup-form bg-smoke">
                    @csrf
                    <h2 class="form-title text-center mb-lg-35">Sign In</h2>
                    @foreach ($errors->all() as $error)
                        <li class="text-danger">{{ $error }}</li>
                    @endforeach
                
                    <div class="form-group">
                        <label for="loginUserId" class="sr-only">Email address*</label>
                        <input type="email" class="form-control" placeholder="Email address*" id="loginUserId" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="loginUserPass" class="sr-only">Password*</label>
                        <input type="password" class="form-control" placeholder="Password*" id="loginUserPass"  name="password" required>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="remember" id="loginRemember">
                        <label for="loginRemember">Remember Me</label>
                    </div>
                    <div class="form-group mb-0 text-center">
                        <button class="vs-btn mask-style1 w-100 style4" type="submit">Login</button>
                        <div class="bottom-links link-inherit d-md-flex justify-content-between mt-3">
                            <a href="/forgot-password" class="recovery-link mb-2 mb-md-0">Forgot your password?</a>
                            <a href="{{route('user.register')}}">Or Create Account</a>
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