@extends('site.layouts.site')

@section('title', 'Event Details')

@section('content')
    
    
<section id="content" class="section">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-md-12 col-xs-12">

                <div class="blog-post single-gallery">

                    <div class="feature-inner">
                        <a class="lightbox" href="../assets/site/img/blog/bloglarge-1.jpg"><img
                                src="../assets/site/img/blog/bloglarge-1.jpg" alt=""></a>
                    </div>


                    <div class="post-content">
                        <div class="meta">
                            {{-- <span class="meta-part"><a href="#"><i class="lni-user"></i> Admin</a></span> --}}
                            {{-- <span class="meta-part"><a href="#"><i class="lni-calendar"></i> Fabruary 25,
                                    2020</a></span>
                            <span class="meta-part"><a href="#"><i class="lni-ticket-alt"></i> Events</a></span>
                            <span class="meta-part"><a href="#"><i class="lni-comment"></i> John Doe</a></span> --}}
                        </div>
                        <h3 class="post-title">
                            Get Your Mobile Site Ready For The 2020 Holiday Seasion
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem facilis possimus quo cum
                            delectus itaque! Soluta id a laudantium error omnis totam suscipit doloremque quam
                            nostrum provident minus consectetur, debitis! Itaque ipsam consequuntur minus aut iusto,
                            in earum dolores adipisci quis rerum, cum animi voluptate provident deserunt assumenda
                            sequi pariatur molestias commodi.
                        </p>

                      
                        <div id="comments">
                            <h2 class="comments-title"><i class="icon-bubbles"></i> Organizer</h2>
                            <ol class="comments-list">
                                <li>
                                    <div class="">
                                        <div class="avatar"><a href="#"><img alt="" src="../assets/site/img/blog/user1.jpg" /></a>
                                        </div>
                                        <div class="comment-content">
                                            <div class="comment-meta">
                                                <h5 class="comment-by">
                                                    <a href="#">John Doe</a>
                                                </h5>
                                                <span class="comment-date">toty@yahoo.com</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </div>

                        <h3 class="post-title">
                            Details
                        </h3>
                        <p>
                            <p class="meta-part"><a href="#"><i class="lni-calendar"></i> </a> Fabruary 25,
                                2020</p>
                            <p class="meta-part"><a href="#"><i class="lni-ticket-alt"></i> </a> 23 ticket available</p>
                            <p class="meta-part"><a href="#"><i class="lni lni-dollar"></i> </a> 50$ per Ticket</p>
                            <p class="meta-part"><a href="#"><i class="lni lni-heart"></i> </a> 50</p>

                        </p>

                        <a class="btn btn-common" href="#">Buy Ticket</a>
                        
                    </div>

                </div>


                <div id="comments">
                    <h2 class="comments-title"><i class="icon-bubbles"></i> Comments</h2>
                    <ol class="comments-list">
                        <li>
                            <div class="comment-box clearfix">
                                <div class="avatar"><a href="#"><img alt="" src="../assets/site/img/blog/user1.jpg" /></a>
                                </div>
                                <div class="comment-content">
                                    <div class="comment-meta">
                                        <h4 class="comment-by">
                                            <a href="#">John Doe</a>
                                        </h4>
                                        <span class="comment-date">August 27,2016 at 02:30am | <a href="#"
                                                class="reply-link"><i class="lni-reply"></i></a></span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                            <ul>
                                <li>
                                    <div class="comment-box clearfix">
                                        <div class="avatar">
                                            <a href="#"><img alt="" src="../assets/site/img/blog/user2.jpg" /></a>
                                        </div>
                                        <div class="comment-content">
                                            <div class="comment-meta">
                                                <h4 class="comment-by">
                                                    <a href="#">Jane Smith</a>
                                                </h4>
                                                <span class="comment-date">May 15, 2020 at 7:39 pm | <a href="#"
                                                        class="reply-link"><i class="lni-reply"></i></a></span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. sed do
                                                eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <div class="comment-box clearfix">
                                <div class="avatar"><a href="#"><img alt="" src="../assets/site/img/blog/user3.jpg" /></a>
                                </div>
                                <div class="comment-content">
                                    <div class="comment-meta">
                                        <h4 class="comment-by">
                                            <a href="#">Jane Smith</a>
                                        </h4>
                                        <span class="comment-date">May 15, 2020 at 7:39 pm | <a href="#"
                                                class="reply-link"><i class="lni-reply"></i></a></span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </li>
                    </ol>

                    <div id="respond">
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-4 col-md-12 col-xs-12 mb-4">
                                    <input id="author" class="form-control" name="author" type="text" value=""
                                        placeholder="Full Name">
                                </div>
                                <div class="col-lg-4 col-md-12 col-xs-12 mb-4">
                                    <input id="email" class="form-control" name="author" type="text" value=""
                                        placeholder="Email Address">
                                </div>
                                <div class="col-lg-4 col-md-12 col-xs-12 mb-4">
                                    <input id="url" class="form-control" name="url" type="text" value=""
                                        placeholder="Website">
                                </div>
                                <div class="col-12">
                                    <textarea id="comment" class="form-control mb-3" name="comment" cols="102"
                                        rows="8" placeholder="Messages"></textarea>
                                    <button type="submit" id="submit" class="btn btn-common">Submit Review</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>

            </div>



            <aside id="sidebar" class="col-lg-4 col-md-12 col-xs-12 right-sidebar">

                <div class="widget widget-popular-posts">
                    <h5 class="widget-title">Recent Events</h5>
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

                <div class="widget widget-popular-posts">
                    <h5 class="widget-title">Recent Halls</h5>
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