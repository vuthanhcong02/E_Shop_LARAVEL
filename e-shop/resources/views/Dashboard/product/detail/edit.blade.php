@extends('Dashboard.layouts.base')
@section('title','Admin-VTC eShop')
@section('body')
<div class="app-main__inner">

<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-ticket icon-gradient bg-mean-fruit"></i>
            </div>
            <div>
                Product deatil
                <div class="page-title-subheading">
                    View, create, update, delete and manage.
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <form method="post" enctype="multipart/form-data" action="/admin/product/{{$product->id}}/detail/{{$productDetail->id}}">
                    @csrf
                    @method('PUT')

                    <div class="position-relative row form-group">
                        <label class="col-md-3 text-md-right col-form-label">Product Name</label>
                        <div class="col-md-9 col-xl-8">
                            <input disabled placeholder="Product Name" type="text"
                                class="form-control" value="{{$product->name}}">
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="color" class="col-md-3 text-md-right col-form-label">Color</label>
                        <div class="col-md-9 col-xl-8">
                            <input  name="color" id="color" placeholder="Color" type="text"
                                class="form-control" value="{{$productDetail->color}}">
                            @error('color')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="size" class="col-md-3 text-md-right col-form-label">Size</label>
                        <div class="col-md-9 col-xl-8">
                            <input  name="size" id="size" placeholder="Size" type="text"
                                class="form-control" value="{{$productDetail->size}}">
                            @error('size')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="qty" class="col-md-3 text-md-right col-form-label">Qty</label>
                        <div class="col-md-9 col-xl-8">
                            <input  name="qty" id="qty" placeholder="Qty" type="text"
                                class="form-control" value="{{$productDetail->qty}}">
                            @error('qty')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="position-relative row form-group mb-1">
                        <div class="col-md-9 col-xl-8 offset-md-2">
                            <a href="/admin/product/{{$product->id}}/detail" class="border-0 btn btn-outline-danger mr-1">
                                <span class="btn-icon-wrapper pr-1 opacity-8">
                                    <i class="fa fa-times fa-w-20"></i>
                                </span>
                                <span>Cancel</span>
                            </a>

                            <button type="submit"
                                class="btn-shadow btn-hover-shine btn btn-primary">
                                <span class="btn-icon-wrapper pr-2 opacity-8">
                                    <i class="fa fa-download fa-w-20"></i>
                                </span>
                                <span>Save</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<!-- End Main -->
@endsection