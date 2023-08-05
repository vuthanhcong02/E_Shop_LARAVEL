@extends('Frontend.layouts.base')
@section('title', 'Shop')
@section('body')
<!--Product Shop Section Begin-->
<section class="product-shop spad page-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                @include('Frontend.components.filterOptions')
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product-pic-zoom">
                            <img class="product-big-img" src="Frontend/img/products/{{$product->productImages[0]->path ?? ' '}}" alt="">
                            <div class="zoom-icon">
                                <i class="fa fa-search-plus"></i>
                            </div>
                        </div>
                        <div class="product-thumbs">
                            <div class="product-thumbs-track ps-slider owl-carousel">
                                @foreach($product->productImages as $productImage)
                                <div class="pt active" data-imgbigurl="Frontend/img/products/{{$productImage->path}}">
                                    <img src="Frontend/img/products/{{$productImage->path}}" alt="">
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-details">
                        
                            <div class="pd-title">
                                <span>{{$product->tag}}</span>
                                <h3>{{$product->name}}</h3>
                                <a href="#" class="heart-icon"><i class="icon_heart_alt"></i></a>
                            </div>
                            <div class="pd-rating">
                                @for($i=1;$i<=5;$i++) @if($i<=$product->avgRating)
                                    <i class="fa fa-star"></i>
                                    @else
                                    <i class="fa fa-star-o"></i>
                                    @endif
                                    @endfor
                                    <span>({{count($product->productComments)}})</span>
                            </div>
                            <div class="pd-desc">
                                <p>{{$product->content}}</p>
                                @if($product->discount !=null)
                                <h4>${{number_format($product->discount,2)}}<span>${{number_format($product->price,2)}}</span></h4>
                                @else
                                <h4>${{number_format($product->price,2)}}</h4>
                                @endif
                            </div>
                            <div class="pd-color">
                                <h6>Color:</h6>
                                <div class="pd-color-choose">
                                    @foreach(array_unique(array_column($product->productDetails->toArray(), 'color')) as $productColor)
                                    <div class="cc-item">
                                        <input required type="radio" id="cc-{{$productColor}}"name="color">
                                        <label class="cc-{{$productColor}}" for="cc-{{$productColor}}">
                                        </label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="pd-size-choose">
                                @foreach(array_unique(array_column($product->productDetails->toArray(), 'size')) as $productSize)
                                <div class="sc-item">
                                    <input required type="radio" id="sm-{{$productSize}}" name="size">
                                    <label for="sm-{{$productSize}}-size">
                                        {{$productSize}}
                                    </label>
                                </div>
                                @endforeach
                            </div> 
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" value="1" name="qty" data-productid = "{{$product->id}}">
                                </div>
                                <a href="javascript:addToCart({{$product->id}})" class="primary-btn pd-cart">Add to cart</a>
                            </div>
                            <ul class="pd-tags">
                                <li><span>CATEGORIES</span> : {{$product->productCategory->name}}</li>
                                <li><span>TAGS</span> : {{$product->productTag->name}}</li>
                            </ul>
                            <div class="pd-share">
                                <div class="p-code">Sku : {{$product->sku}}</div>
                                <div class="pd-social">
                                    <a href="#"><i class="ti-facebook"></i></a>
                                    <a href="#"><i class="ti-twitter"></i></a>
                                    <a href="#"><i class="ti-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-tab">
                    <div class="tab-item">
                        <ul class="nav" role="tablist">
                            <li><a class="" href="#tab-1" role="tab" data-toggle="tab">DESCRIPTION</a></li>
                            <li><a class="" href="#tab-2" role="tab" data-toggle="tab">SPECIFICATIONS</a></li>
                            <li><a class="" href="#tab-3" role="tab" data-toggle="tab">REVIEWS ({{count($product->productComments)}})</a></li>
                        </ul>
                    </div>
                    <div class="tab-item-content">
                        <div class="tab-content">
                            <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                                <div class="product-content">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <h5>Product Description</h5>
                                            <p>{!!$product->description!!}</p>
                                            <!-- <h5>Product Features</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p> -->
                                        </div>
                                        <div class="col-lg-5">
                                            <img src="Frontend/img/product-single/tab-desc.jpg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-2" role="tabpanel">
                                <div class="specification-table">
                                    <table>
                                        <tr>
                                            <td class="p-category">Customer Rating</td>
                                            <td>
                                                <div class="pd-rating">
                                                    @for($i=1;$i<=5;$i++) @if($i<=$product->avgRating)
                                                        <i class="fa fa-star"></i>
                                                        @else
                                                        <i class="fa fa-star-o"></i>
                                                        @endif
                                                        @endfor
                                                        <span>({{count($product->productComments)}})</span>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="p-category">
                                                Price
                                            </td>
                                            <td>
                                                <div class="p-price">
                                                    ${{number_format($product->discount??$product->price, 2)}}
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="p-category">
                                                Add To Cart
                                            </td>
                                            <td>
                                                <a href="#" class="primary-btn pd-cart">
                                                    Add to cart
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-category">Availability</td>
                                            <td>
                                                <div class="p-stock">{{$product->qty}} in Stock</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-category">Size</td>
                                            <td>
                                                @foreach(array_unique(array_column($product->productDetails->toArray(), 'size')) as $productSize)
                                                @if($productSize !=null)
                                                <div class="p-{{$productSize}}">
                                                    {{$productSize}}
                                                </div>
                                                @endif
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-category">Color</td>
                                            <td>
                                                @foreach(array_unique(array_column($product->productDetails->toArray(), 'color')) as $productColor)
                                                @if($productColor !=null)
                                                <div class="p-{{$productColor}}">
                                                    {{$productColor}}
                                                </div>
                                                @endif
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-category">Sku</td>
                                            <td>
                                                <div class="p-sku">
                                                    {{$product->sku}}
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-3" role="tabpanel">
                                <div class="customer-review-option">
                                    <h4>{{count($product->productComments)}} Comments</h4>
                                    <div class="comment-option">
                                        @foreach($product->productComments as $productComment)
                                        <div class="co-item">
                                            <div class="avatar-pic">
                                                <img src="Frontend/img/user/{{$productComment->user->avatar ?? 'avatar-default.jpeg'}}" alt="">
                                            </div>
                                            <div class="avatar-text">
                                                <div class="at-rating">
                                                    @for($i=1;$i<=5;$i++) @if($i<=$productComment->rating)
                                                        <i class="fa fa-star"></i>
                                                        @else
                                                        <i class="fa fa-star-o"></i>
                                                        @endif
                                                        @endfor
                                                </div>
                                                <h5>{{$productComment->name}}</h5><span>{{date('m,d,Y' ,strtotime($productComment->created_at))}}</span>
                                                <div class="at-reply">{{$productComment->messages}}</div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="leave-comment">
                                        <h4>Leave a Comment</h4>
                                        <form class="comment-form" action="" method="post">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{$product->id}}">
                                            <input type="hidden" name="user_id" value="{{Illuminate\Support\Facades\Auth::user()->id ?? null }}">
                                            <!-- Đây là một lời gọi đến lớp "Auth" trong Laravel để lấy thông tin người dùng đang được xác thực. Lớp "Auth" cung cấp các phương thức để xác thực và quản lý người dùng trong ứng dụng Laravel. -->
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <input type="text" placeholder="Name" name="name" required>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" placeholder="Email" name="email" required>
                                                </div>
                                                <div class="col-lg-12">
                                                    <textarea placeholder="Comment" name="messages" required></textarea>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="personal-rating">
                                                        <h6>Your Rating</h6>
                                                        <div class="rate">
                                                            <input type="radio" id="star5" name="rating" value="5" />
                                                            <label for="star5" title="text">5 stars</label>
                                                            <input type="radio" id="star4" name="rating" value="4" />
                                                            <label for="star4" title="text">4 stars</label>
                                                            <input type="radio" id="star3" name="rating" value="3" />
                                                            <label for="star3" title="text">3 stars</label>
                                                            <input type="radio" id="star2" name="rating" value="2" />
                                                            <label for="star2" title="text">2 stars</label>
                                                            <input type="radio" id="star1" name="rating" value="1" />
                                                            <label for="star1" title="text">1 star</label>
                                                        </div>
                                                    </div><br>
                                                    <button type="submit" class="site-btn">Send Comment</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Product Details Section End-->

<!--Product Related Section-->
<div class="related-products spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Related Products</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($relatedProducts as $relatedProduct)
            <div class="col-lg-3 col-md-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="Frontend/img/products/{{$relatedProduct->productImages[0]->path}}" alt="">
                        <div class="sale pp-sale">Sale</div>
                        <div class="icon">
                            <i class="icon_heart_alt"></i>
                        </div>
                        <ul>
                            <li class="w-icon active"><a href="javascript:addToCart({{$relatedProduct->id}})"><i class="icon_bag_alt"></i></a></li>
                            <li class="quick-view"><a href="/shop/product/{{$relatedProduct->id}}">+ Quick View</a></li>
                            <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                        </ul>
                    </div>
                    <div class="pi-text">
                        <div class="catagory-name">{{$relatedProduct->productTag->name}}</div>
                        <a href="#">
                            <h5>{{$relatedProduct->name}}</h5>
                        </a>
                        <div class="product-price">
                            ${{number_format($relatedProduct->discount ?? $relatedProduct->price,2)}}
                            <span>${{number_format($relatedProduct->price,2)}}</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!--Partner Logo Section End-->


@endsection