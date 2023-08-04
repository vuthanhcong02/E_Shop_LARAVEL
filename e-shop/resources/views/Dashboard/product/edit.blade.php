@extends('Dashboard.layouts.base')
@section('title','Product-Edit')
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
                    Product
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
                    <form method="post" enctype="multipart/form-data" action="{{route('product.update',$product->id)}}">
                        @csrf
                        @method('PUT')
                    <div class="position-relative row form-group">
                        <label for="brand_id" class="col-md-3 text-md-right col-form-label">Brand</label>
                        <div class="col-md-9 col-xl-8">
                            <select  name="brand_id" id="brand_id" class="form-control">
                                <option value="">-- Brand --</option>
                                @foreach($brands as $brand)
                                <option value="{{ $brand->id }}" {{ $product->brand_id == $brand->id ? 'selected' : '' }}>
                                    {{ $brand->name }}
                                </option>
                                @endforeach
                            </select>
                            @error('brand_id')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="product_category_id" class="col-md-3 text-md-right col-form-label">Category</label>
                        <div class="col-md-9 col-xl-8">
                            <select  name="product_category_id" id="product_category_id" class="form-control">
                                <option value="">-- Category --</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}" {{ $product->product_category_id == $category->id ? 'selected' : '' }}>
                                    Men
                                </option>
                                @endforeach
                            </select>
                            @error('product_category_id')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="name" class="col-md-3 text-md-right col-form-label">Name</label>
                        <div class="col-md-9 col-xl-8">
                            <input  name="name" id="name" placeholder="Name" type="text" class="form-control" value="{{$product->name}}">
                            @error('name')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="content" class="col-md-3 text-md-right col-form-label">Content</label>
                        <div class="col-md-9 col-xl-8">
                            <input  name="content" id="content" placeholder="Content" type="text" class="form-control" value="{{$product->content ?? ''}}">
                            @error('content')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="price" class="col-md-3 text-md-right col-form-label">Price</label>
                        <div class="col-md-9 col-xl-8">
                            <input  name="price" id="price" placeholder="Price" type="text" class="form-control" value="{{$product->price}}">
                            @error('price')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="discount" class="col-md-3 text-md-right col-form-label">Discount</label>
                        <div class="col-md-9 col-xl-8">
                            <input  name="discount" id="discount" placeholder="Discount" type="text" class="form-control" value="{{$product->discount ?? ''}}">
                            @error('discount')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="weight" class="col-md-3 text-md-right col-form-label">Weight</label>
                        <div class="col-md-9 col-xl-8">
                            <input  name="weight" id="weight" placeholder="Weight" type="text" class="form-control" value="{{$product->weight ?? ''}}">
                            @error('weight')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="sku" class="col-md-3 text-md-right col-form-label">SKU</label>
                        <div class="col-md-9 col-xl-8">
                            <input name="sku" id="sku" placeholder="SKU" type="text" class="form-control" value="{{$product->sku ?? ''}}">
                            
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="tag" class="col-md-3 text-md-right col-form-label">Tag</label>
                        <div class="col-md-9 col-xl-8">
                            <select  name="tag_id" id="tag_id" class="form-control">
                                <option value="">-- Tag --</option>
                                @foreach($tags as $tag)
                                <option value="{{$tag->id}}" {{ $product->tag_id == $tag->id ? 'selected' : '' }}>
                                    {{ $tag->name }}
                                </option>
                                @endforeach
                            </select>
                            @error('tag_id')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="featured" class="col-md-3 text-md-right col-form-label">Featured</label>
                        <div class="col-md-9 col-xl-8">
                            <div class="position-relative form-check pt-sm-2">
                                <input name="featured" id="featured" type="checkbox" value="{{ $product->featured }}" {{ $product->featured == 1 ? 'checked' : '' }} class="form-check-input">
                                <label for="featured" class="form-check-label">Featured</label>
                            </div>
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="description" class="col-md-3 text-md-right col-form-label">Description</label>
                        <div class="col-md-9 col-xl-8">
                            <textarea class="form-control" name="description" id="description" placeholder="Description">{{$product->description ?? ''}}</textarea>
                            @error('description')
                            <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>

                    <div class="position-relative row form-group mb-1">
                        <div class="col-md-9 col-xl-8 offset-md-2">
                            <a href="/admin/product" class="border-0 btn btn-outline-danger mr-1">
                                <span class="btn-icon-wrapper pr-1 opacity-8">
                                    <i class="fa fa-times fa-w-20"></i>
                                </span>
                                <span>Cancel</span>
                            </a>

                            <button type="submit" class="btn-shadow btn-hover-shine btn btn-primary">
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

<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'description' );
</script>
@endsection