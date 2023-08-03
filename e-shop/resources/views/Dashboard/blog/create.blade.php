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
                    Blog
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
                    <form method="post" enctype="multipart/form-data" action="{{route('blog.store')}}">
                        @csrf
                        <div class="position-relative row form-group">
                            <label for="image" class="col-md-3 text-md-right col-form-label">Image</label>
                            <div class="col-md-9 col-xl-8">
                                <img required style="height: 100px; cursor: pointer; object-fit: cover;" class="thumbnail rounded-circle" data-toggle="tooltip" title="Click to change the image" data-placement="bottom" src="Frontend/img/blog/default_blog.jpeg" alt="Image">
                                <input required name="image" type="file" onchange="changeImg(this)" class="image form-control-file" style="display: none;" value="">
                                <input type="hidden" name="image_old" value="">
                                <small class="form-text text-muted">
                                    Click on the image to change (required)
                                </small>
                            </div>
                        </div>
                        <div class="position-relative row form-group">
                            <label for="title" class="col-md-3 text-md-right col-form-label">Title</label>
                            <div class="col-md-9 col-xl-8">
                                <input required name="title" id="title" placeholder="Title.." type="text" class="form-control" value="">
                            </div>
                        </div>
                        <div class="position-relative row form-group">
                            <label for="subtitle" class="col-md-3 text-md-right col-form-label">SubTitle</label>
                            <div class="col-md-9 col-xl-8">
                                <input required name="subtitle" id="subtitle" placeholder="Subtitle.." type="text" class="form-control" value="">
                            </div>
                        </div>
                        <div class="position-relative row form-group">
                            <label for="content" class="col-md-3 text-md-right col-form-label">Content</label>
                            <div class="col-md-9 col-xl-8">
                                <textarea class="form-control" name="content" id="content" placeholder="Content"></textarea>
                            </div>
                        </div>
                        <div class="position-relative row form-group">
                            <label for="category" class="col-md-3 text-md-right col-form-label">Category</label>
                            <div class="col-md-9 col-xl-8">
                                <input required name="category" id="category" placeholder="Category" type="text" class="form-control" value="">
                            </div>
                        </div>
                        <div class="position-relative row form-group">
                            <label for="author" class="col-md-3 text-md-right col-form-label">Author</label>
                            <div class="col-md-9 col-xl-8">
                                <select required name="author" id="author" class="form-control">
                                    <option value="">-- Author --</option>
                                    @foreach($authors as $author)
                                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="position-relative row form-group">
                            <label for="created_at" class="col-md-3 text-md-right col-form-label">Created At</label>
                            <div class="col-md-9 col-xl-8">
                                <input required name="created_at" id="created_at" placeholder="Created At" type="datetime-local" class="form-control" value="">
                            </div>
                        </div>

                        <div class="position-relative row form-group mb-1">
                            <div class="col-md-9 col-xl-8 offset-md-2">
                                <a href="/admin/blog" class="border-0 btn btn-outline-danger mr-1">
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
    CKEDITOR.replace('content');
</script>
@endsection