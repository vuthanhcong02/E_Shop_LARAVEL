@extends('Dashboard.layouts.base')
@section('tilte','Dashboard')
@section('body')
<div class="app-main__inner">
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <div class="progress-box">
                    <h4>User Online</h4>
                    <p style=" font-size:25px">10</p>
                </div>
            </div>
            <div class="col">
                <div class="progress-box">
                    <a href="/admin/order/"><h4>Số lượng đơn hàng</h4></a>
                    
                    <p style=" font-size:25px">{{$count_order ?? ''}}</p>
                </div>
            </div>
            <div class="col">
                <div class="progress-box">
                    <h4>Doanh Thu</h4>
                    
                   <p style=" font-size:25px">${{number_format($total_order,2)}}</p>
                </div>
            </div>
        </div>
        <div class="divider"></div>
        <div class="mt-5">
            <h5 class="text-center card-title">Live Statistics</h5>
            <div id="sparkline-carousel-3"></div>
            <div class="row">
                <div class="col">
                    <div class="widget-chart p-0">
                        <div class="widget-chart-content">
                            <div class="widget-numbers text-warning fsize-3">43</div>
                            <div class="widget-subheading pt-1">Packages</div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="widget-chart p-0">
                        <div class="widget-chart-content">
                            <div class="widget-numbers text-danger fsize-3">65</div>
                            <div class="widget-subheading pt-1">Dropped</div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="widget-chart p-0">
                        <div class="widget-chart-content">
                            <div class="widget-numbers text-success fsize-3">18</div>
                            <div class="widget-subheading pt-1">Invalid</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
            <div class="text-center mt-2 d-block">
                <button class="mr-2 border-0 btn-transition btn btn-outline-danger">Escalate Issue</button>
                <button class="border-0 btn-transition btn btn-outline-success">Support Center</button>
            </div>
        </div>
    </div>
</div>
@endsection