@extends('Frontend.layouts.base')
@section('title','Cart')
@section('body')
    <!--Breadcrumb Section Begin-->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="/"><i class="fa fa-home"></i> Home</a>
                        <span>Shopping Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcrumb Section End-->

    <!--Shopping Cart Section Begin-->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th class="p-name">Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th><i class="ti-close" onclick="confirm('Bạn có chắc muốn xóa toàn bộ giỏ hàng không?') ? destroyCart() : ''"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(Cart::count() > 0)
                                    @foreach($carts as $cart)
                                    <tr data-rowId = "{{$cart->rowId}}">
                                        <td class="cart-pic first-row">
                                            <img src="Frontend/img/products/{{$cart->options->images[0]->path}}" alt="" style="width: 100px;">
                                        </td>
                                        <td class="cart-title first-row">
                                            <h5>{{$cart->name}}</h5>
                                        </td>
                                        <td class="p-price first-row">${{number_format($cart->price,2)}}</td>
                                        <td class="qua-col first-row">
                                        <div class="quantity">
                                                <div class="pro-qty">
                                                    <input type="text" value="{{$cart->qty}}" data-rowid="{{$cart->rowId}}">
                                                </div>
                                        </div>
                                        </td>
                                        <td class="total-price first-row">${{number_format($cart->price * $cart->qty,2)}}</td>
                                        <td class="close-td first-row"><i onclick="deleteCart('{{$cart->rowId}}')" class="ti-close"></i></td>
                                    </tr>
                                    @endforeach
                                    @else
                                        <tr>
                                            <td colspan="6" class="cart-empty" style="padding-top: 34px"><h4>Cart is empty</h4></td>
                                        </tr>
                                    @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="cart-buttons">
                                <a href="/shop" class="primary-btn continue-shop">Continue shopping</a>
                                <!-- <a href="javascript:updateCart()" class="primary-btn up-cart">Update Cart</a> -->
                            </div>
                            <div class="discount-coupon">
                                <h6>Discount Codes</h6>
                                <form class="coupon-form">
                                    <input type="text" placeholder="Enter your coupon code">
                                    <button type="submit" class="site-btn coupon-btn">Aplly</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 offset-lg-4">
                            <div class="proceed-checkout">
                                <ul>
                                    <li class="subtotal">Subtotal:<span>${{number_format(Cart::subtotal(),2)}}</span></li>
                                    <li class="cart-total">Total:<span>${{number_format(Cart::total(),2)}}</span></li>
                                </ul>
                                @if(Cart::count() > 0)
                                    <a href="/checkout" class="proceed-btn">PROCEED TO CHECKOUT</a>
                                @else
                                    <div class="proceed-btn disabled" >PROCEED TO CHECKOUT</div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Shopping Cart Section End-->
@endsection

 