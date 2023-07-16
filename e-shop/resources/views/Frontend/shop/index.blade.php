@extends('Frontend.layouts.base')
@section('title','Shop')
@section('body')
<!--Product Section Begin-->
<section class="product-shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 products-sidebar-filter">
                <form action="">
                    <div class="filter-widget">
                        <h4 class="fw-title">Categories</h4>
                        <ul class="filter-catagories">
                            @foreach($categories_name as $category)
                                <li class="{{request()->categoryName == $category->name ? 'active-category' : ''}}"><a href="/shop/category/{{$category->name}}">{{$category->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Brand</h4>
                        <div class="fw-brand-check">
                            @foreach($brands as $brand)
                            <div class="bc-item">
                                <label for="bc-{{$brand->name}}">
                                    {{$brand->name}}
                                    <input type="checkbox" id="bc-{{$brand->name}}" 
                                    {{(request('brand')[$brand->id] ?? '') == 'on' ? 'checked' : ''}}
                                    name="brand[{{$brand->id}}]" 
                                    onchange="this.form.submit()">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Price</h4>
                        <div class="filter-range-wrap">
                            <div class="range-slider">
                                <div class="price-input">
                                    <input type="text" id="minamount" name="p_min">
                                    <input type="text" id="maxamount" name="p_max">
                                </div>
                            </div>
                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" 
                            data-min="10" data-max="999"
                            data-min-value = "{{str_replace('$','',request('p_min'))}}"
                            data-max-value = "{{str_replace('$','',request('p_max'))}}"
                            >
                                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                            </div>
                        </div>
                        <button class="filter-btn" type="submit">Filter</button>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Color</h4>
                        <div class="fw-color-choose">
                            <div class="cs-item">
                                <input type="radio" id="cs-black">
                                <label class="cs-black" for="cs-black">
                                    Black
                                </label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-violet">
                                <label class="cs-violet" for="cs-violet">
                                    Violet
                                </label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-blue">
                                <label class="cs-blue" for="cs-blue">
                                    Blue
                                </label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-yellow">
                                <label class="cs-yellow" for="cs-yellow">
                                    Yellow
                                </label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-green">
                                <label class="cs-green" for="cs-green">
                                    Green
                                </label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-red">
                                <label class="cs-red" for="cs-red">
                                    Red
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Size</h4>
                        <div class="fw-size-choose">
                            <div class="sc-item">
                                <input type="radio" id="s-size">
                                <label class="s-size" for="s-size">
                                    S
                                </label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" id="m-size">
                                <label class="m-size" for="m-size">
                                    M
                                </label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" id="l-size">
                                <label class="l-size" for="l-size">
                                    L
                                </label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" id="xs-size">
                                <label class="xs-size" for="xs-size">
                                    XS
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Tags</h4>
                        <div class="fw-tags">
                            <a href="#">coat</a>
                            <a href="#">dress</a>
                            <a href="#">jacket</a>
                            <a href="#">pants</a>
                            <a href="#">shirt</a>
                        </div>
                    </div>
                </form>
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
                                        <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
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
                                        ${{$product->discount}}
                                        @endif
                                        <span>${{$product->price}}</span>
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