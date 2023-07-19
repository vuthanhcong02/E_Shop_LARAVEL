@extends('Frontend.layouts.base')

@section('title', 'Home')
@section('body')
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
                            <li class="active item" data-tag="*" data-category="women">All</li>
                            <li class="item" data-tag=".Clothing" data-category="women" >Clothings</li>
                            <li class="item" data-tag=".HandBag" data-category="women">HandBag</li>
                            <li class="item" data-tag=".Shoe" data-category="women">Shoes</li>
                            <li class="item" data-tag=".Accessory" data-category="women">Accessories</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel women">
                        @foreach($featured_Products_Women as $product)
                        <div class="product-item item {{$product->tag}}">
                            <div class="pi-pic">
                                <img src="Frontend/img/products/{{$product->productImages[0]->path}}" alt="">
                                @if($product->discount!=null)
                                <div class="sale">Sale</div>
                                @endif
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="javascript:addToCart({{$product->id}})"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="/shop/product/{{$product->id}}">Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">{{$product->tag}}</div>
                                <a href="/shop/product/{{$product->id}}">
                                    <h5>{{$product->name}}</h5>
                                </a>
                                <div class="product-price">
                                    @if($product->discount!=null)
                                        ${{number_format($product->discount,2)}}
                                    <span>${{number_format($product->price,2)}}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
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
                            <li class="active item " data-tag="*" data-category="men">All</li>
                            <li class="item" data-tag=".Clothing" data-category="men">Clothings</li>
                            <li class="item" data-tag=".HandBag" data-category="men">HandBag</li>
                            <li class="item" data-tag=".Shoe" data-category="men">Shoes</li>
                            <li class="item" data-tag=".Accessory" data-category="men">Accessories</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel men">
                        @foreach($featured_Products_Man as $product)
                        <div class="product-item item {{$product->tag}}">
                            <div class="pi-pic">
                                <img src="Frontend/img/products/{{$product->productImages[0]->path}}" alt="">
                                @if($product->discount!=null)
                                    <div class="sale">Sale</div>
                                @endif
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="javascript:addToCart({{$product->id}})"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="/shop/product/{{$product->id}}">Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">{{$product->tag}}</div>
                                <a href="/shop/product/{{$product->id}}">
                                    <h5>{{$product->name}}</h5>
                                </a>
                                <div class="product-price">
                                    @if($product->discount!=null)
                                        ${{number_format($product->discount,2)}}
                                    <span>${{number_format($product->price,2)}}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
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
                @foreach($newBlogs as $blog)
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-blog">
                        <img src="Frontend/img/blog/{{$blog->image}}">
                        <div class="latest-text">
                            <div class="tag-list">
                               <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i>
                                    {{date('d-m-Y',strtotime($blog->created_at))}}
                               </div>
                               <div class="tag-item">
                                    <i class="fa fa-comment-o"></i>
                                    {{count($blog->BlogComments)}}
                               </div>
                            </div>
                            <a href="#">
                                <h4>{{$blog->title}}</h4>
                            </a>
                            <p>{{$blog->subtitle}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
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
@endsection