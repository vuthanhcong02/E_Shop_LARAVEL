<!DOCTYPE html>
<html lang="zxx">

<head>
    <base href="{{asset('/')}}">
    <meta charset="UTF-8">
    <meta name="description" content="codelean Template">
    <meta name="keywords" content="codelean, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('Frontend/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('Frontend/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('Frontend/css/themify-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('Frontend/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('Frontend/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('Frontend/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('Frontend/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('Frontend/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('Frontend/css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- Start coding here -->
    <!--Page Preloder-->
    <div id="preloder">
        <div class="loader"></div>
    </div>
   
    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class="fa fa-envelope"></i>
                        congvtc02@gmail.com
                    </div>
                    <div class="phone-service">
                        <i class="fa fa-phone"></i>
                        0971765824
                    </div>
                </div>
                <div class="ht-right">
                    @if(Auth::check())
                        <a class="login-panel" href="/account/logout"><i class="fa fa-user"></i> 
                        {{Auth::user()->name}} - Logout
                        </a>
                    @else
                        <a class="login-panel" href="/account/login"><i class="fa fa-user"></i>Login</a>
                    @endif
                    <div class="lan-selector">
                        <select class="language_drop" name="countries" id="countries" style="width: 300px;">
                            <option value="yt" data-image="Frontend/img/flag-1.jpg" data-imagecss="flag yt" data-title="English">English</option>
                            <option value="yu" data-image="Frontend/img/flag-2.jpg" data-imagecss="flag yu" data-title="Bangladesh">German</option>
                        </select>
                    </div>
                    <div class="top-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                        <a href="#"><i class="ti-linkedin"></i></a>
                        <a href="#"><i class="ti-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="/">
                                <img src="Frontend/img/logo.png" height="25" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <form action="{{ (request()->segment(2) !== 'category') ? url('/shop') : url('/shop/category/'.request()->segment(3)) }}">
                            <div class="advanced-search">
                                <button type="button" class="category-btn">All Categories</button>
                                <div class="input-group">
                                    <input name="search" value="{{request('search') ?? ''}}" type="text" placeholder="What do you need?">
                                    <button type="submit"><i class="ti-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 col-md-3 text-right">
                        <ul class="nav-right">
                            <li class="heart-icon">
                                <a href="#">
                                    <i class="icon_heart_alt"></i>
                                    <span>1</span>
                                </a>
                            </li>
                            <li class="cart-icon">
                                <a href="/cart">
                                    <i class="icon_bag_alt"></i>
                                    <span class="cart-count">{{Cart::count()}}</span>
                                </a>
                                <div class="cart-hover">
                                    <div class="select-items">
                                        <table>
                                            <tbody>
                                                @foreach(Cart::content() as $cart)
                                                <tr data-rowId="{{$cart->rowId}}">
                                                    <td class="si-pic"><img src="Frontend/img/products/{{$cart->options->images[0]->path}}" style="width: 60px;" alt=""></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>${{number_format($cart->price,2)}} x {{$cart->qty}}</p>
                                                            <h6>{{$cart->name}}</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-close" onclick="deleteCart('{{$cart->rowId}}')"></i>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="select-total">
                                        <span>total:</span>
                                        <h5 >${{number_format(Cart::total(),2)}}</h5>
                                    </div>
                                    <div class="select-button">
                                        <a href="/cart" class="primary-btn view-card">VIEW CARD</a>
                                        <a href="/checkout" class="primary-btn checkout-btn">CHECK OUT</a>
                                    </div>
                                </div>
                            </li>
                            <li class="cart-price">
                                ${{number_format(Cart::total(),2)}}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>All Department</span>
                        <ul class="depart-hover">
                            <li class="{{request()->segment(1) =='shop' && request()->segment(2) =='' ? 'active' : ''}}"><a href="/shop">All Department</a></li>
                            @foreach ($tags as $tag)
                                <li class="{{request()->segment(3)==$tag->name ? 'active' : ''}}"><a href="/shop/tag/{{$tag->name}}">{{$tag->name}}</a></li>
                            @endforeach
                            <!-- <li><a href="#">Dresses</a></li>
                            <li><a href="#">Pants</a></li>
                            <li><a href="#">Shirts</a></li>
                            <li><a href="#">Jackets & Coats</a></li>
                            <li><a href="#">Sweaters</a></li>
                            <li><a href="#">Hoodies & Sweatshirts</a></li>
                            <li><a href="#">Jackets</a></li> -->
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="{{request()->segment(1)=='' ? 'active' :''}}"><a href="/">Home</a></li>
                        <li class="{{request()->segment(1)=='shop' ? 'active' :''}}"><a href="/shop">Shop</a></li>
                        <li class="{{request()->segment(1)=='category' ? 'active' :''}}"><a href="/shop">Categories</a>
                            <ul class="dropdown">
                                @foreach($categories_name as $category)
                                <li><a href="/shop/category/{{request()->segment(3) == $category->name ? 'all' : $category->name}}">{{$category->name}}</a></li>
                                @endforeach
                                <!-- <li><a href="/shop/category/Women">Women's</a></li>
                                <li><a href="/shop/category/Kids">Kid's</a></li> -->
                            </ul>
                        </li>
                        <li class="{{request()->segment(1)=='blog' ? 'active' :''}}"><a href="/blog">Blog</a></li>
                        <li class="{{request()->segment(1)=='contact' ? 'active' :''}}"><a href="/contact">Contact</a></li>
                        <li><a href="">Pages</a>
                            <ul class="dropdown">
                                <li><a href="/blog-details.html">Blog Details</a></li>
                                <li><a href="/cart">Shoping Cart</a></li>
                                <li><a href="/checkout">Checkout</a></li>
                                <li><a href="/register">Register</a></li>
                                <li><a href="/account/login">Login</a></li>
                            </ul>
                        </li>

                    </ul>
                </nav>
                <div id="mobile-menu-wrap">

                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Body Section Begin -->
    @yield('body')
    <!-- Body Section End -->
    <!--Partner Logo Section Begin-->
    <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="Frontend/img/logo-carousel/logo-1.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="Frontend/img/logo-carousel/logo-2.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="Frontend/img/logo-carousel/logo-3.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="Frontend/img/logo-carousel/logo-4.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="Frontend/img/logo-carousel/logo-5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Partner Logo Section End-->

    <!-- Footer Section-->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="#">
                                <img src="Frontend/img/logo.png" alt="">
                            </a>
                        </div>
                        <ul>
                            <li>Address: 123 Main Street, Anytown, CA 12345</li>
                            <li>Phone: +123 456 7890</li>
                            <li>Email: 5xq8v@example.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Information</h5>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Checkout</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Serivces</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>My Account</h5>
                        <ul>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Shoping Cart</a></li>
                            <li><a href="#">Shop</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>Join Our Newsletter Now</h5>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Enter Your Mail">
                            <button type="button">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright @<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                        <div class="payment-pic">
                            <img src="Frontend/img/payment-method.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->
    <!-- Js Plugins -->
    <script src="{{asset('Frontend/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('Frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('Frontend/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('Frontend/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('Frontend/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('Frontend/js/jquery.zoom.min.js')}}"></script>
    <script src="{{asset('Frontend/js/jquery.dd.min.js')}}"></script>
    <script src="{{asset('Frontend/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('Frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('Frontend/js/main.js')}}"></script>
    <script src="{{asset('Frontend/js/owlcarousel2-filter.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @if(session()->has('success'))
    <script>
        toastr.option=
            {
                "closeButton":true,
                "debug":false,
            }
        toastr.success('Cảm ơn vì góp ý của bạn. Chúng tôi sẽ liên lạc lại sớm nhất có thể', { timeOut: 5000 });
    </script>
    @endif
</body>

</html>