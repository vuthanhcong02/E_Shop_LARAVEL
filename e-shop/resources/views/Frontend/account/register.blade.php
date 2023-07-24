 @extends('Frontend.layouts.base')
 @section('title','Register')
 @section('body')
    <!-- Header End -->
    <!--Breadcrumb Section Begin-->
     <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="/"><i class="fa fa-home"></i> Home</a>
                        <span>Register</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcrumb Section End-->
    <!--Register Section Begin-->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="login-form">
                        <h2>Register</h2>
                        @if(session('error'))
                            <div class="alert alert-danger">        
                                {{session('error')}}
                            </div>
                        @endif
                        <form action="" method="post">
                            @csrf
                            <div class="group-input">
                                <label for="name">Name <span style="color: red;">*</span></label>
                                <input type="text" placeholder="Name" id="name" name="name" required>
                            </div>
                            <div class="group-input">
                                <label for="email">Email address <span style="color: red;">*</span></label>
                                <input type="email" placeholder="Email" id="email" name="email" required>
                            </div>
                            <div class="group-input">
                                <label for="password">Password <span style="color: red;">*</span></label>  
                                <input type="password" placeholder="Password" id="password" name="password" required>
                            </div>
                            <div class="group-input">
                                <label for="con-pass">Confirm Password <span style="color: red;">*</span></label>
                                <input type="password" placeholder="Confirm Password" id="con-pass" name="con_pass" required>
                            </div>
                            <button type="submit" class="site-btn login-btn">Register</button>
                        </form>
                        <div class="switch-login">
                            <a href="/account/login" class="or-login">Or Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection