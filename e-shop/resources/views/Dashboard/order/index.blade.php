@extends('Dashboard.layouts.base')
@section('title','Admin-VTC eShop')
@section('body')
<!-- Main -->
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-ticket icon-gradient bg-mean-fruit"></i>
                </div>
                <div>
                    Order
                    <div class="page-title-subheading">
                        View, create, update, delete and manage.
                    </div>
                </div>
            </div>

        </div>
    </div>
    @include('Dashboard.notice.notice')
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">

                <div class="card-header">

                    <form>
                        @csrf
                        <div class="input-group">
                            <input type="search" name="search" id="search" value="{{request('search')}}" placeholder="Search everything" class="form-control">
                            <span class="input-group-append">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-search"></i>&nbsp;
                                    Search
                                </button>
                            </span>
                        </div>
                    </form>

                    <div class="btn-actions-pane-right">
                        <div role="group" class="btn-group-sm btn-group">
                            <button class="btn btn-focus">This week</button>
                            <button class="active btn btn-focus">Anytime</button>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th>Customer / Products</th>
                                <th class="text-center">Address</th>
                                <th class="text-center">Amount</th>
                                <th class="text-center">Status (Có thể update)</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                            <tr>
                                <td class="text-center text-muted">#{{$order->id}}</td>
                                <td>
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="widget-content-left">
                                                    <img style="height: 60px;" data-toggle="tooltip" title="Image" data-placement="bottom" src="Frontend/img/products/{{$order->orderDetails[0]->product->productImages[0]->path ?? ''}}" alt="">
                                                </div>
                                            </div>
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading">{{$order->first_name ?? ''}} {{$order->last_name ?? ''}}</div>
                                                <div class="widget-subheading opacity-7">
                                                    {{$order->orderDetails[0]->product->name ?? ''}}
                                                    @if(count($order->orderDetails)>1)
                                                    ({{count($order->orderDetails)-1}}) other products
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    {{$order->address ?? ''}}-{{$order->city ?? ''}}
                                </td>
                                <td class="text-center">${{number_format(array_sum(array_column($order->orderDetails->toArray(), 'total')), 2)}}</td>
                                <td class="text-center">
                                    <form action="{{route('order.update',$order->id)}}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        @php
                                            $statusClass = '';
                                            if($order->status == 7){
                                                $statusClass = 'bg-success';
                                            }
                                            if($order->status == 0){
                                                $statusClass = 'bg-danger';
                                            }
                                            if($order->status == 1 || $order->status == 2 || $order->status == 3 || $order->status == 4 || $order->status == 5 || $order->status == 6){
                                                $statusClass = 'bg-warning';
                                            }
                                        @endphp
                                        <select class="badge badge-dark {{$statusClass}}" name="status" required name="status" id="status" class="form-control" onchange="this.form.submit()">
                                            <option value="">-- Status --</option>
                                            @foreach(App\Utilities\Constant::$order_status as $key => $value)
                                            <option value="{{ $key }}" {{ $order->status == $key ? 'selected' : ''}}>
                                                {{ $value }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </form>
                                </td>
                                <td class="text-center">
                                    <a href="{{route('order.show',$order->id)}}" class="btn btn-hover-shine btn-outline-primary border-0 btn-sm">
                                        Details
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="d-block card-footer">
                    {{$orders->links()}}
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Main -->

@endsection