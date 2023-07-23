@extends('Frontend.layouts.base')
@section('title','Details')
@section('body')
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="/"><i class="fa fa-home"></i> Home</a>
                        <a href="/blog">Blog</a>
                        <span>Details</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->
    <!-- Blog Details Section Begin -->

    <div class="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-details-inner">
                        <div class="blog-detail-title">
                            <h2>Blog Details</h2>
                            <p>{{$blog->category}}<span> {{date('d-m-Y',strtotime($blog->created_at)) ?? ''}}</span></p>
                        </div>
                        <div class="blog-large-pic">
                            <img src="Frontend/img/blog/{{$blog->image}}" alt="">
                        </div>
                        <div class="blog-detail-desc">
                            <p>{{$blog->title}}</p>
                        </div>
                        <div class="blog-quote">
                            <p>{{$blog->subtitle}}<span>- John Doe</span></p>
                        </div>
                        <div class="blog-more">
                            <div class="row">
                                @foreach($listBlog as $blog)
                                <div class="col-sm-4">
                                    <img src="Frontend/img/blog/{{$blog->image}}">
                                </div>
                                @endforeach
                                <!-- <div class="col-sm-4">
                                    <img src="Frontend/img/blog/blog-detail-2.jpg">
                                </div>
                                <div class="col-sm-4">
                                    <img src="Frontend/img/blog/blog-detail-3.jpg">
                                </div> -->
                            </div>
                        </div>
                        <div class="tag-share">
                            <div class="details-tag">
                                <ul>
                                    <li><i class="fa fa-tag"></i></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">Fashion</a></li>
                                    <li><a href="#">Photography</a></li>
                                    <li><a href="#">Technology</a></li>
                                </ul>
                            </div>
                            <div class="blog-share">
                                <span>Share</span>
                                <div class="social-links">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-post">
                            <div class="row">
                                <div class="col-lg-5 col-md-6">
                                    <a class="prev-blog" href="/blog/details/{{$previousBlog->id}}">
                                        <div class="pb-pic">
                                            <i class="ti-arrow-left"></i>
                                            <img src="Frontend/img/blog/{{$previousBlog->image}}">
                                        </div>
                                        <div class="pb-text">
                                            <span>Previous Post</span>
                                            <h5>Travel</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-5 col-md-6 offset-lg-2">
                                    <a class="next-blog" href="/blog/details/{{$nextBlog->id}}">
                                        <div class="nb-pic">
                                            <img src="Frontend/img/blog/{{$nextBlog->image}}">
                                            <i class="ti-arrow-right"></i>
                                        </div>
                                        <div class="nb-text">
                                            <span>Next Post</span>
                                            <h5>Travel</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="posted-by">
                            <div class="pb-pic">
                                <img src="Frontend/img/blog/post-by.png">
                            </div>
                            <div class="pb-text">
                               <a> <h5>John Doe</h5></a>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>  
                        <div class="leave-comment">
                            <h4>Leave a comment</h4>
                            <form class="comment-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Name">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Email">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea placeholder="Message"></textarea>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class ="site-btn" >Post Comment</button>
                                    </div>
                                </div>  
                            </form>                                  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
    <!-- Blog Details Section End -->
  