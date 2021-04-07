@extends('site.layouts.site')

@section('title', 'Rest Details')

@section('content')
    
    
<section id="content" class="section">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-md-12 col-xs-12">

                <div class="blog-post">

                    <div class="feature-inner">
                        <a class="lightbox" href="assets/site/img/blog/bloglarge-1.jpg"><img
                                src="assets/site/img/blog/bloglarge-1.jpg" alt=""></a>
                    </div>


                    <div class="post-content">
                        <div class="meta">
                            {{-- <span class="meta-part"><a href="#"><i class="lni-user"></i> Admin</a></span> --}}
                            <span class="meta-part"><a href="#"><i class="lni lni-world"></i> Alex</a></span>
                            {{-- <span class="meta-part"><a href="#"><i class="lni-ticket-alt"></i> Events</a></span> --}}
                            <span class="meta-part"><a href="#"><i class="lni lni-dollar"></i> 70$ per day</a></span>
                            <span class="meta-part"><a href="#"><i class="lni lni-heart"></i>  50 </a></span>
                        </div>
                        <h3 class="post-title"><a href="single-post.html">Get Your Mobile Site Ready For The 2020
                                Holiday Seasion</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem facilis possimus quo cum
                            delectus itaque! Soluta id a laudantium error omnis totam suscipit doloremque quam
                            nostrum provident minus consectetur, debitis! Itaque ipsam consequuntur minus aut iusto,
                            in earum dolores adipisci quis rerum, cum animi voluptate provident deserunt assumenda
                            sequi pariatur molestias commodi.</p>

                        <h3 class="post-title"><a href="single-post.html">Features</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        {{-- <a class="btn btn-common" href="#">Show It's Events</a> --}}
                    </div>

                </div>

                <div id="comments">
                    <h2 class="comments-title"><i class="icon-bubbles"></i> Booking Ticket</h2>
                    <ol class="comments-list">
                        <li>
                            <div class="comment-box clearfix">
                                <form role="form" method="post" id="contactForm" name="contact-form" data-toggle="validator">
                                    <div class="row">
                                        <div class="col-md-12 form-line">
                                            <div class="form-group">
                                                <label>From Date Time:</label>
                                                <input type="datetime-local" class="form-control" id="fname" name="fname" placeholder="From Date Time" required data-error="Please enter your from Date Time" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 form-line">
                                            <div class="form-group">
                                                <label>To Date Time:</label>
                                                <input type="datetime-local" class="form-control" id="fname" name="fname" placeholder="To Date Time" required data-error="Please enter your to Date Time" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-submit">
                                                <button type="submit" class="btn btn-common" id="form-submit"><i class="fa fa-paper-plane" aria-hidden="true"></i> Validate Is Vailed</button>
                                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                
                            </div>
                          
                        </li>
                      
                    </ol>

                </div>

            </div>


            <aside id="sidebar" class="col-lg-4 col-md-12 col-xs-12 right-sidebar">

                <div class="widget widget-popular-posts">
                    <h5 class="widget-title">Recent Rests</h5>
                    <ul class="posts-list">
                        <li>
                            <div class="widget-thumb">
                                <a href="#"><img src="assets/site/img/blog/p1.jpg" alt="" /></a>
                            </div>
                            <div class="widget-content">
                                <a href="single-post.html">Brooklyn beta was the most</a>
                                <span><i class="icon-calendar"></i>2020/10/28</span>
                                <span><i class="icon-folder"></i>Blog</span>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <div class="widget-thumb">
                                <a href="#"><img src="assets/site/img/blog/p2.jpg" alt="" /></a>
                            </div>
                            <div class="widget-content">
                                <a href="single-post.html">Brooklyn beta was the most</a>
                                <span><i class="icon-calendar"></i>2020/10/28</span>
                                <span><i class="icon-folder"></i>Blog</span>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <div class="widget-thumb">
                                <a href="single-post.html"><img src="assets/site/img/blog/p3.jpg" alt="" /></a>
                            </div>
                            <div class="widget-content">
                                <a href="#">Brooklyn beta was the most</a>
                                <span><i class="icon-calendar"></i>2020/10/28</span>
                                <span><i class="icon-folder"></i>Blog</span>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        
                    </ul>
                </div>

                <div class="widget widget-social">
                    <h5 class="widget-title">Share Social Media</h5>
                    <div class="social-link">
                        <div class="sharethis-inline-share-buttons"></div>
                        {{-- <a class="twitter" target="_blank" href="#"><i class="lni-twitter"></i></a>
                        <a class="facebook" target="_blank" href="#"><i class="lni-facebook"></i></a> --}}
                    </div>
                </div>

            </aside>

        </div>
    </div>
</section>
    
    

@endsection