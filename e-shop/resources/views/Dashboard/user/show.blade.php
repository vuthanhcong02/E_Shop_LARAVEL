@extends('Dashboard.layouts.base')
@section('title','User-Show')
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
                    User
                    <div class="page-title-subheading">
                        View, create, update, delete and manage.
                    </div>
                </div>
            </div>

        </div>
    </div>
    @include('Dashboard.notice.notice')
    <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
        <li class="nav-item">
            <a href="/admin/user/{{$user->id}}/edit" class="nav-link">
                <span class="btn-icon-wrapper pr-2 opacity-8">
                    <i class="fa fa-edit fa-w-20"></i>
                </span>
                <span>Edit</span>
            </a>
        </li>

        <li class="nav-item delete">
            <form action="" method="post">
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
                        <label for="image" class="col-md-3 text-md-right col-form-label">Avatar</label>
                        <div class="col-md-9 col-xl-8">
                            <p>
                                <img style="height: 100px;object-fit: cover" class="rounded-circle" data-toggle="tooltip" title="Avatar" data-placement="bottom" src="Frontend/img/user/{{$user->avatar ?? 'avatar-default.jpeg'}}" alt="Avatar">
                            </p>
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="name" class="col-md-3 text-md-right col-form-label">
                            Name
                        </label>
                        <div class="col-md-9 col-xl-8">
                            <p>{{$user->name ?? ''}}</p>
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="email" class="col-md-3 text-md-right col-form-label">Email</label>
                        <div class="col-md-9 col-xl-8">
                            <p>{{$user->email ?? ''}}</p>
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="street_address" class="col-md-3 text-md-right col-form-label">
                            Street Address</label>
                        <div class="col-md-9 col-xl-8">
                            <p>{{$user->address ?? ''}}</p>
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="town_city" class="col-md-3 text-md-right col-form-label">
                            City</label>
                        <div class="col-md-9 col-xl-8">
                            <p>{{$user->city ?? ''}}</p>
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="phone" class="col-md-3 text-md-right col-form-label">Phone</label>
                        <div class="col-md-9 col-xl-8">
                            <p>{{$user->phone ?? ''}}</p>
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="level" class="col-md-3 text-md-right col-form-label">Level</label>
                        <div class="col-md-9 col-xl-8">
                            <p>{{App\Utilities\Constant::$user_level[$user->level ?? 2] ?? ''}}</p>
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="description" class="col-md-3 text-md-right col-form-label">Description</label>
                        <div class="col-md-9 col-xl-8">
                            <p>{{$user->description ?? ''}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main -->
@endsection