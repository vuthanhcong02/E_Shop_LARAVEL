@extends('Frontend.layouts.base')
@section('title','Order-Details')
@section('body')
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="/"><i class="fa fa-home"></i> Home</a>
                    <a href="/account/my-order">My-Order</a>
                    <span>My Order</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Checkout Secsion Begin-->
<div class="checkout-section spad">
    <div class="container">
        <form class="checkout-form" action="" method="post">
            @csrf
            <input type="hidden" name="user_id" value="">
            <div class="row">
                <div class="col-lg-6">
                    <div class="checkout-content">
                        <a class="content-btn" disabled>Show Details ID: {{$order->id}}</a>
                    </div>
                    <h4>Billing Details</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="fir">First Name<span>*</span></label>
                            <input type="text" id="fir" name="first_name" required value="{{$order->first_name}}" disabled>
                        </div>
                        <div class="col-lg-6">
                            <label for="las">Last Name<span>*</span></label>
                            <input type="text" id="las" name="last_name" required value="{{$order->last_name}}" disabled>
                        </div>
                        <div class="col-lg-12">
                            <label for="add">Address<span>*</span></label>
                            <input type="text" id="add" name="address" required value="{{$order->address}}" disabled>
                        </div>
                        <div class="col-lg-12">
                            <label for="city">City<span>*</span></label>
                            <input type="text" id="city" name="city" required value="{{$order->city}}" disabled>
                        </div>
                        <div class="col-lg-6">
                            <label for="email">Email<span>*</span></label>
                            <input type="email" id="email" name="email" required value="{{Auth::user()->email ?? ''}}" disabled>
                        </div>
                        <div class="col-lg-6">
                            <label for="phone">Phone<span>*</span></label>
                            <input type="text" id="phone" name="phone" required value="{{$order->phone}}" disabled>
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
                        <input type="text" placeholder="" value="Trạng thái : {{App\Utilities\Constant::$order_status[$order->status]}}" readonly>
                    </div>
                    <div class="place-order">
                        <h4>Your Order</h4>
                        <div class="order-total">
                            <ul class="order-table">
                                <li>Product <span>Total</span></li>
                                @foreach($orderDetails as $orderDetail)
                                <li class="fw-normal">{{$orderDetail->product->name}} x {{$orderDetail->qty}}<span>${{number_format($orderDetail->total,2)}}</span></span></li>
                                @endforeach
                                <li class="total-price">
                                    Total
                                    <span>${{number_format(array_sum(array_column($orderDetails->toArray(),'total')),2)}}</span>
                                </li>
                            </ul>
                            <div class="payment-check">
                                <div class="pc-item">
                                    <label for="pc-check">Pay Later
                                        <input type="radio" name="payment" id="pc-check" value="pay_later" {{$order->payment=='pay_later'?'checked':''}}>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="pc-item">
                                    <label for="pc-paypal">Online Pay
                                        <input type="radio" id="pc-paypal" name="payment" value="online_pay" {{$order->payment=='online_pay'?'checked':''}}>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

</div>
@endsection