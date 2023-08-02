@extends('Frontend.layouts.base')
@section('title','My Order')
@section('body')
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="/"><i class="fa fa-home"></i> Home</a>
                    <span>My Order</span>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="shopping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cart-table">
                    <table>
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th class="p-3">#</th>
                                <th class="p-name">Products</th>
                                <th>Total</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                            <tr>

                                <td class="cart-pic first-row">
                                    @if(isset($order->orderDetails[0]->product->productImages[0]->path))
                                    <img src="Frontend/img/products/{{$order->orderDetails[0]->product->productImages[0]->path ?? ''}}" alt="" style="width: 100px;">
                                    @endif
                                </td>
                                <td class="first-row">#{{$order->id}}</td>
                                <td class="cart-title first-row">
                                    @if(isset($order->orderDetails[0]->product->name))
                                    <h5>{{$order->orderDetails[0]->product->name}}</h5>
                                    @endif
                                    @if(count($order->orderDetails) > 1)
                                    and {{count($order->orderDetails)-1}} other products</h5>
                                    @endif
                                </td>
                                <td class="total-price first-row">${{number_format(array_sum(array_column($order->orderDetails->toArray(),'total')),2)}}</td>
                                <td class="first-row">
                                    <a class="btn" href="/account/my-order/{{$order->id}}">Details</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection