@extends('Frontend.layouts.base')
@section('title','Checkout-result')
@section('body')
    <!--Breadcrumb Section Begin-->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="/"><i class="fa fa-home"></i> Home</a>
                        <a href="/shop">Shop</a>
                        <span>Checkout-Result</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcrumb Section End-->
    <!--Checkout Secsion Begin-->
    <div class="checkout-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="checkout-content">
                        <h4>{{$notify}}</h4>
                    </div>
                    <a class="primary-btn" href="/shop">Continue Shopping</a>
                </div>
            </div>
        </div>
    </div>
@endsection