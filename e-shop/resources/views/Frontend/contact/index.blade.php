@extends('Frontend.layouts.base')
@section('title','Contact')
@section('body')
   <!--Breadcrumb Section Begin-->
  
   <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="/"><i class="fa fa-home"></i> Home</a>
                        <span>Contact</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcrumb Section End-->

    <!--Map Section Begin-->
    <div class="map spad">
        <div class="container">
            <div class="map-inner">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59826.45851118885!2d106.16689685000003!3d20.41775705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135e0adb8d5f1cd%3A0xb5f4baba00e67462!2zVHAuIE5hbSDEkOG7i25oLCBOYW0gxJDhu4tuaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1688911593425!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <!--Map Section End-->
    <!--Contact Section Begin-->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact-title">
                        <h4>Contact us</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                        </p>
                    </div>
                    <div class="contact-widget">
                       <div class="cw-item">
                            <div class="cw-icon">
                                <i class="ti-location-pin"></i>
                            </div>
                            <div class="cw-text">
                                <span>Address</span>
                                <p>123 Main Street, Anytown, CA 12345</p>    
                            </div>
                       </div>
                       <div class="cw-item">
                            <div class="cw-icon">
                                <i class="ti-mobile"></i>
                            </div>
                            <div class="cw-text">
                                <span>Phone Number</span>
                                <p>097 1765 824</p>    
                            </div>
                        </div>
                        <div class="cw-item">
                            <div class="cw-icon">
                                <i class="ti-email"></i>
                            </div>
                            <div class="cw-text">
                                <span>Email</span>
                                <p>congvtc02@.gmail.com</p>    
                            </div>
                       </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="contact-form">
                        <div class="leave-comment">
                            <h4>Leave a comment</h4>
                            <p>Our staff will call back later and answer your question</p>
                            <form class="comment-form" action="" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Your Name" name="name" required>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="email" placeholder="Your Email" name="email" required>
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea placeholder="Your message" name="message" required></textarea>
                                        <button type="submit" class="site-btn">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Section End-->
@endsection