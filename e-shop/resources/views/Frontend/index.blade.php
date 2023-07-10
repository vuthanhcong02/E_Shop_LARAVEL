<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="codelean Template">
    <meta name="keywords" content="codelean, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CodeLean | Template</title>

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
                    <a class="login-panel" href="login.html"><i class="fa fa-user"></i>Login</a>
                    <div class="lan-selector">
                        <select class="language_drop" name="countries" id="countries" style="width: 300px;">
                            <option value="yt" data-image ="Frontend/img/flag-1.jpg" data-imagecss="flag yt" data-title="English">English</option>
                            <option value="yu" data-image ="Frontend/img/flag-2.jpg" data-imagecss="flag yu" data-title="Bangladesh">German</option>
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
                            <a href="index.html">
                                <img src="Frontend/img/logo.png" height="25" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                            <button type="button" class="category-btn">All Categories</button>
                            <div class="input-group">
                                <input type="text" placeholder="What do you need?">
                                <button type="button"><i class="ti-search"></i></button>
                            </div>
                        </div>
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
                                <a href="#">
                                    <i class="icon_bag_alt"></i>
                                    <span>3</span>
                                </a>
                                <div class="cart-hover">
                                    <div class="select-items">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="si-pic"><img src="Frontend/img/select-product-1.jpg" alt=""></td>
                                                    <td class="si-text">
                                                        <div class="producr-selected">
                                                            <p>$60.00 x 1</p>
                                                            <h6>Kabino Bedside Table</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-close"></i>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="select-total">
                                        <span>total:</span>
                                        <h5>$120.00</h5>
                                    </div>
                                    <div class="select-button">
                                        <a href="shopping-cart.html" class="primary-btn view-card">VIEW CARD</a>
                                        <a href="check-out.html" class="primary-btn checkout-btn">CHECK OUT</a>
                                    </div>
                                </div>
                            </li>
                            <li class="cart-price">
                                $150.00
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
                            <li class="active"><a href="#">All Department</a></li>
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Pants</a></li>
                            <li><a href="#">Shirts</a></li>
                            <li><a href="#">Jackets & Coats</a></li>
                            <li><a href="#">Sweaters</a></li>
                            <li><a href="#">Hoodies & Sweatshirts</a></li>
                            <li><a href="#">Jackets</a></li>
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="shop.html">Shop</a></li>
                        <li><a href="">Colections</a>
                            <ul class="dropdown">
                                <li><a href="">Men's</a></li>
                                <li><a href="">Women's</a></li>
                                <li><a href="">Kid's</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="">Pages</a>
                            <ul class="dropdown">
                                <li><a href="blog-details.html">Blog Details</a></li>
                                <li><a href="shopping-cart.html">Shoping Cart</a></li>
                                <li><a href="check-out.html">Checkout</a></li>
                                <li><a href="faq.html">Faq</a></li>
                                <li><a href="register.html">Register</a></li>
                                <li><a href="login.html">Login</a></li>
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
    <!--Hero Section Begin-->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="Frontend/img/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="hero-text">
                                <span>Summer Sale</span>
                                <h1>Up to 70% Off</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a class="primary-btn" href="shop">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="off-card">
                      <h2>Sale<span>50%</span></h2>
                   </div>
                </div>
            </div>
            <div class="single-hero-items set-bg" data-setbg="Frontend/img/hero-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="hero-text">
                                <span>Summer Sale</span>
                                <h1>Up to 70% Off</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a class="primary-btn" href="shop">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="off-card">
                      <h2>Sale<span>50%</span></h2>
                   </div>
                </div>
            </div>
        </div>
    </section>
    <!--Hero Section End-->
    <!--Banner Section Begin-->
    <div class="banner-section spad">
        <div class="container-fluid"> 
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="Frontend/img/banner-1.jpg" alt="">
                        <div class="inner-text">
                            <h4>Women's</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="Frontend/img/banner-2.jpg" alt="">
                        <div class="inner-text">
                            <h4>Men's</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="Frontend/img/banner-3.jpg" alt="">
                        <div class="inner-text">
                            <h4>Kid's</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Banner Section End-->
    <!--Women's Banner Section Begin-->
    <div class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="Frontend/img/products/women-large.jpg">
                        <h2>Women's</h2>
                        <a>Discover More</a>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <li class="active">Clothings</li>
                            <li>HandBag</li>
                            <li>Shoes</li>
                            <li>Accessories</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="Frontend/img/products/women-1.jpg" alt="">
                                <div class="sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="product.html">Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Coat</div>
                                <a href="#">
                                    <h5>Pure Pimeapples</h5>
                                </a>
                                <div class="product-price">
                                    $14.00
                                    <span>$29.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="Frontend/img/products/women-2.jpg" alt="">
                                <div class="sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="product.html">Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Coat</div>
                                <a href="#">
                                    <h5>Pure Pimeapples</h5>
                                </a>
                                <div class="product-price">
                                    $14.00
                                    <span>$29.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="Frontend/img/products/women-2.jpg" alt="">
                                <div class="sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="product.html">Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Coat</div>
                                <a href="#">
                                    <h5>Pure Pimeapples</h5>
                                </a>
                                <div class="product-price">
                                    $14.00
                                    <span>$29.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="Frontend/img/products/women-3.jpg" alt="">
                                <div class="sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="product.html">Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Coat</div>
                                <a href="#">
                                    <h5>Pure Pimeapples</h5>
                                </a>
                                <div class="product-price">
                                    $14.00
                                    <span>$29.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="Frontend/img/products/women-4.jpg" alt="">
                                <div class="sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="product.html">Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Coat</div>
                                <a href="#">
                                    <h5>Pure Pimeapples</h5>
                                </a>
                                <div class="product-price">
                                    $14.00
                                    <span>$29.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Women's Banner Section End-->

    <!-- Deal of the Week Section Begin -->
    <section class="deal-of-the-week set-bg spad" data-setbg="Frontend/img/time-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h2>Deal of the Week</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
                        <div class="product-price">
                            $150.00
                            <span>HandBag</span>
                        </div>
                    </div>
                    <div class="countdown-timer" id="countdown">
                        <div class="cd-item">
                            <span>50</span>
                            <p>Days</p>
                        </div>
                        <div class="cd-item">
                            <span>20</span>
                            <p>Hours</p>
                        </div>
                        <div class="cd-item">
                            <span>10</span>
                            <p>Minutes</p>
                        </div>
                        <div class="cd-item">
                            <span>5</span>
                            <p>Seconds</p>
                        </div>
                    </div>
                    <a class="primary-btn" href="#">Shop Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Deal of the Week Section End -->
    <!--Man Banner Section Begin-->
    <div class="man-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="filter-control">
                        <ul>
                            <li class="active">Clothings</li>
                            <li>HandBag</li>
                            <li>Shoes</li>
                            <li>Accessories</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="Frontend/img/products/man-1.jpg" alt="">
                                <div class="sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="product.html">Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Coat</div>
                                <a href="#">
                                    <h5>Pure Pimeapples</h5>
                                </a>
                                <div class="product-price">
                                    $14.00
                                    <span>$29.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="Frontend/img/products/man-2.jpg" alt="">
                                <div class="sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="product.html">Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Coat</div>
                                <a href="#">
                                    <h5>Pure Pimeapples</h5>
                                </a>
                                <div class="product-price">
                                    $14.00
                                    <span>$29.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="Frontend/img/products/man-2.jpg" alt="">
                                <div class="sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="product.html">Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Coat</div>
                                <a href="#">
                                    <h5>Pure Pimeapples</h5>
                                </a>
                                <div class="product-price">
                                    $14.00
                                    <span>$29.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="Frontend/img/products/man-3.jpg" alt="">
                                <div class="sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="product.html">Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Coat</div>
                                <a href="#">
                                    <h5>Pure Pimeapples</h5>
                                </a>
                                <div class="product-price">
                                    $14.00
                                    <span>$29.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="Frontend/img/products/man-4.jpg" alt="">
                                <div class="sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="product.html">Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Coat</div>
                                <a href="#">
                                    <h5>Pure Pimeapples</h5>
                                </a>
                                <div class="product-price">
                                    $14.00
                                    <span>$29.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="col-lg-3 offset-lg-1">
                    <div class="product-large set-bg" data-setbg="Frontend/img/products/man-large.jpg">
                        <h2>Men</h2>
                        <a>Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Man Banner Section End-->

    <!--Instagram Section Begin-->
    <div class="instagram-photo">
        <div class="insta-item set-bg" data-setbg="Frontend/img/insta-1.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="https://www.instagram.com">CodeLean_Colection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="Frontend/img/insta-2.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="https://www.instagram.com">CodeLean_Colection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="Frontend/img/insta-3.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="https://www.instagram.com">CodeLean_Colection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="Frontend/img/insta-4.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="https://www.instagram.com">CodeLean_Colection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="Frontend/img/insta-5.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="https://www.instagram.com">CodeLean_Colection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="Frontend/img/insta-6.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="https://www.instagram.com">CodeLean_Colection</a></h5>
            </div>
        </div>
    </div>
    <!--Instagram Section End-->

    <!--Lastest Blog Section Begin-->
    <section class="latest-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>From The Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-blog">
                        <img src="Frontend/img/latest-1.jpg">
                        <div class="latest-text">
                            <div class="tag-list">
                               <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i>
                                    May 15, 2022
                               </div>
                               <div class="tag-item">
                                    <i class="fa fa-comment-o"></i>
                                    5
                               </div>
                            </div>
                            <a href="#">
                                <h4>The best Street Style for Spring</h4>
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-blog">
                        <img src="Frontend/img/latest-2.jpg">
                        <div class="latest-text">
                            <div class="tag-list">
                               <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i>
                                    May 15, 2022
                               </div>
                               <div class="tag-item">
                                    <i class="fa fa-comment-o"></i>
                                    5
                               </div>
                            </div>
                            <a href="#">
                                <h4>The best Street Style for Spring</h4>
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-blog">
                        <img src="Frontend/img/latest-3.jpg">
                        <div class="latest-text">
                            <div class="tag-list">
                               <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i>
                                    May 15, 2022
                               </div>
                               <div class="tag-item">
                                    <i class="fa fa-comment-o"></i>
                                    5
                               </div>
                            </div>
                            <a href="#">
                                <h4>The best Street Style for Spring</h4>
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="benefit-items">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-benefit">
                           <div class="sb-icon">
                                <img src="Frontend/img/icon-1.png">
                           </div>
                           <div class="sb-text">
                                <h6>FREE SHIPPING</h6>
                                <p>For all orders over $100</p>
                           </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="Frontend/img/icon-2.png">
                           </div>
                           <div class="sb-text">
                                <h6>DELIVERY ON Time</h6>
                                <p>If good have problems</p>
                           </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="Frontend/img/icon-3.png">
                           </div>
                           <div class="sb-text">
                                <h6>SECURE PAYMENT</h6>
                                <p>100% secure payment</p>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Lastest Blog Section End-->
                
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
                            Copyright @<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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
</body>

</html>