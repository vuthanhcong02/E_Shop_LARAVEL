@extends('Frontend.layouts.base')
@section('title','Login')
@section('body')
    <!--Breadcrumb Section Begin-->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="index.html"><i class="fa fa-home"></i> Home</a>
                        <span>Login</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcrumb Section End-->

    <!--Login Section Begin-->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="login-form">
                        <h2>Login</h2>
                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{session('error')}}
                            </div>
                        @endif
                        <form action="" method="post">
                            @csrf
                            <div class="group-input">
                                <label for="email">Email address *</label>
                                <input type="email" placeholder="Email" id="email" name="email">
                            </div>
                            <div class="group-input">
                                <label for="password">Password *</label>  
                                <input type="password" placeholder="Password" id="password" name="password">
                            </div>
                            <div class="group-input gi-check">
                               <div class="gi-more">
                                   <label class="save-pass">
                                    Save Password
                                        <input type="checkbox" id="save-pass" name="save-pass">
                                        <span class="checkmark"></span>
                                   </label>
                                   <a class="forget-pass" href="#">Forget Your Password</a>
                               </div>
                            </div>
                            <button type="submit" class="site-btn login-btn">Login</button>
                        </form>
                        <div class="switch-login">
                            <a href="account/register" class="or-login">Or Create An Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection