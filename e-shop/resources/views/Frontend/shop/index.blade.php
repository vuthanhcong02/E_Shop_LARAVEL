@extends('Frontend.layouts.base')
@section('title','Shop')
@section('body')
<!--Product Section Begin-->
<section class="product-shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 products-sidebar-filter">
                @include('Frontend.components.filterOptions')
            </div>
            <div class="col-lg-9 order-1 order-lg-2">
                <div class="product-show-option">
                    <div class="row">
                        <div class="col-lg-7 col-md-7">
                            <form action="">
                                <div class="select-option">
                                    <input type="hidden" name="search" value="{{request('search')??''}}">
                                    <select class="sorting" name="sort_by" onchange="this.form.submit()">
                                        <option {{request('sort_by') == 'lasted' ? 'selected' : ''}} value="lasted">Sort By Lasted</option>
                                        <option {{request('sort_by') == 'oldest' ? 'selected' : ''}} value="oldest">Sort By Oldest</option>
                                        <option {{request('sort_by') == 'name' ? 'selected' : ''}} value="name">Sort By Name A-Z</option>
                                        <option {{request('sort_by') == 'name-desc' ? 'selected' : ''}} value="name-desc">Sort By Name Z-A</option>
                                        <option {{request('sort_by') == 'price' ? 'selected' : ''}} value="price">Sort By Price Low-High</option>
                                        <option {{request('sort_by') == 'price-desc' ? 'selected' : ''}} value="price-desc">Sort By Price High-Low</option>
                                    </select>
                                    <select class="p-show" onchange="this.form.submit()" name="show">
                                        <option {{request('show') == '3' ? 'selected' : ''}} value="3">Show: 3</option>
                                        <option {{request('show') == '6' ? 'selected' : ''}} value="6">Show: 6</option>
                                        <option {{request('show') == '9' ? 'selected' : ''}} value="9">Show: 9</option>
                                        <option {{request('show') == '12' ? 'selected' : ''}} value="12">Show: 12</option>
                                    </select>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="product-list">
                    <div class="row">
                        @foreach($listProducts as $product)
                        <div class="col-lg-4 col-md-6">
                            <div class="product-item">
                                <div class="pi-pic">
                                    <img src="Frontend/img/products/{{$product->productImages[0]->path}}" alt="">
                                    @if($product->discount!=null)
                                    <div class="sale pp-sale">Sale</div>
                                    @endif
                                    <div class="icon">
                                        <i class="icon_heart_alt"></i>
                                    </div>
                                    <ul>
                                        <li class="w-icon active"><a href="javascript:addToCart({{$product->id}})"><i class="icon_bag_alt"></i></a></li>
                                        <li class="quick-view"><a href="/shop/product/{{$product->id}}">+ Quick View</a></li>
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
                                        @endif
                                        <span>${{number_format($product->price,2)}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                {{$listProducts->links('pagination::bootstrap-5')}}
            </div>

        </div>
    </div>
</section>
<!-- End Product Section-->

@endsection