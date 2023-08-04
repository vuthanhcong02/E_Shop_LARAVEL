@extends('Dashboard.layouts.base')
@section('title','Dashboard VTC-eshop')
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
                    Blog Comments
                    <div class="page-title-subheading">
                        View delete and manage.
                    </div>
                </div>
            </div>

        </div>
    </div>
    @include('Dashboard.notice.notice')
    <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
        <li class="nav-item delete">
            <form action="{{route('blog-comment.destroy',$comment->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="nav-link btn" type="submit" onclick="return confirm('Do you really want to delete this item?')">
                    <span class="btn-icon-wrapper pr-2 opacity-8">
                        <i class="fa fa-trash fa-w-20"></i>
                    </span>
                    <span>Delete</span>
                </button>
            </form>
        </li>
    </ul>

    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-body display_data">

                    <div class="position-relative row form-group">
                        <label for="description" class="col-md-3 text-md-right col-form-label">Message : </label>
                        <div class="col-md-9 col-xl-8">
                            <p>{{$comment->messages ?? ''}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main -->
@endsection