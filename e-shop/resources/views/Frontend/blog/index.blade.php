@extends('Frontend.layouts.base')
@section('title','Blog')
@section('body')
    <!--Breadcrumb Section Begin-->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="/"><i class="fa fa-home"></i> Home</a>
                        <span>Blog</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcrumb Section End-->
    <!--Blog Section Begin-->
    <section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2">
                        <div class="blog-sidebar">
                            <div class="search-form">
                                <h4>Search</h4>
                                <form action="#">
                                    <input type="text" placeholder="Search...">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                            <div class="blog-catagory">
                                <h4>Categories</h4>
                                <ul>
                                    <li><a href="#">Fashion</a></li>
                                    <li><a href="#">Travel</a></li>
                                    <li><a href="#">Picnic</a></li>
                                    <li><a href="#">Model</a></li>
                                </ul>
                            </div>
                            <div class="recent-post">
                                <h4>Recent Blog</h4>
                                <div class="recent-blog">
                                    @foreach($listBlogRecents as $blog)
                                    <a href="/blog/details/{{$blog->id}}" class="rb-item">
                                        <div class="rb-pic">
                                            <img src="Frontend/img/blog/{{$blog->image}}" alt="">
                                        </div>
                                        <div class="rb-text">
                                            <h6>{{$blog->title}}</h6>
                                            <p>{{$blog->category}}<span> {{date('d-m-Y',strtotime($blog->created_at)) ?? ''}}</span></p>
                                        </div>
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                            <div class="blog-tags">
                                <h4>Product Tags</h4>
                                <div class="tag-item">
                                    <a href="#">Fashion</a>
                                    <a href="#">Travel</a>
                                    <a href="#">Picnic</a>
                                    <a href="#">Model</a>
                                    <a href="#">Design</a>
                                    <a href="#">Creative</a>
                                    <a href="#">Photography</a>
                                    <a href="#">Fashion</a>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                        <div class="row">
                            @foreach($listBlogs as $blog)
                            <div class="col-lg-6 col-sm-6">
                                <div class="blog-item">
                                    <div class="bi-pic">
                                        <img src="Frontend/img/blog/{{$blog->image}}" alt="">
                                    </div>
                                    <div class="bi-text">
                                        <a href="/blog/details/{{$blog->id}}">
                                            <h4>{{$blog->title}}</h4>
                                        </a>
                                        <p>{{$blog->category}}<span> {{date('d-m-Y',strtotime($blog->created_at)) ?? ''}}</span></p>
                                    </div>
                                </div>
                            </div>
                           @endforeach
                            <div class="col-lg-12">
                                {{$listBlogs->links('pagination::bootstrap-5')}}
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
@endsection
 