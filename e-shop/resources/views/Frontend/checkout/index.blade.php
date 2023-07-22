@extends('Frontend.layouts.base')
@section('title','Checkout')
@section('body')
    <!--Breadcrumb Section Begin-->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="index.html"><i class="fa fa-home"></i> Home</a>
                        <a href="shop.html">Shop</a>
                        <span>Checkout</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcrumb Section End-->

    <!--Checkout Secsion Begin-->
    <div class="checkout-section spad">
        <div class="container">
            <form class="checkout-form" action="" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="checkout-content">
                            <a href="login.html" class="content-btn">Click Here To Login</a>
                        </div>
                        <h4>Billing Details</h4>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="fir">First Name<span>*</span></label>
                                <input type="text" id="fir" name="first_name" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="las">Last Name<span>*</span></label>
                                <input type="text" id="las" name="last_name" required>
                            </div>
                            <div class="col-lg-12">
                                <label for="add">Address<span>*</span></label>
                                <input type="text" id="add" name="address" required>
                            </div>
                            <div class="col-lg-12">
                                <label for="city">City<span>*</span></label>
                                <input type="text" id="city" name="city" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="email">Email<span>*</span></label>
                                <input type="email" id="email" name="email" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="phone">Phone<span>*</span></label>
                                <input type="text" id="phone" name="phone" required>
                            </div>
                            <div class="col-lg-12">
                                <div class="create-item">
                                    <label for="acc-create">
                                        Create an account?
                                        <input type="checkbox" id="acc-create">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="checkout-content">
                            <input type="text" placeholder="Enter Your Coupon Code" readonly>
                        </div>
                        <div class="place-order">
                            <h4>Your Order</h4>
                            <div class="order-total">
                                <ul class="order-table">
                                    <li>Product <span>Total</span></li>
                                    @foreach($carts as $cart)
                                    <li class="fw-normal">{{$cart->name}} x {{$cart->qty}}<span>${{number_format($cart->price*$cart->qty,2)}}</span></li>
                                    @endforeach
                                    <li class="fw-normal">SubTotal <span>${{number_format($subtotal,2)}}</span></li>
                                    <li class="total-price">Total<span>${{number_format($total,2)}}</span></li>
                                </ul>
                                <div class="payment-check">
                                    <div class="pc-item">
                                        <label for="pc-check">Pay Later
                                            <input type="radio" name="payment" id="pc-check" value="pay_later" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="pc-item">
                                        <label for="pc-paypal">Online Pay
                                            <input type="radio" id="pc-paypal" name="payment" value="online_pay">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="order-btn">
                                    @if(Cart::count() > 0)
                                    <button type="submit" class="site-btn place-btn">Place Order</button>
                                    @else
                                    <div class="site-btn place-btn disabled">Place Order</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <!--Checkout Secsion End-->
@endsection