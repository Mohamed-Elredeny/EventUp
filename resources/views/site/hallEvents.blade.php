@extends('site.layouts.site')

@section('title', 'Hall\'s Events')

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
                            <span class="meta-part"><a href="#"><i class="lni lni-calendar"></i>20-2-2020</a></span>
                            <span class="meta-part"><a href="#"><i class="lni lni-dollar"></i> 70 </a></span>
                        </div>
                        <h3 class="post-title"><a href="/eventDetails">Get Your Mobile Site Ready For The 2020
                                Holiday Seasion</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem facilis possimus quo cum
                            delectus itaque! Soluta id a laudantium error omnis totam suscipit doloremque quam
                            nostrum provident minus consectetur, debitis! Itaque ipsam consequuntur minus aut iusto,
                            in earum dolores adipisci quis rerum, cum animi voluptate provident deserunt assumenda
                            sequi pariatur molestias commodi.</p>
                        <div class="text-center" >
                            <a class="btn btn-common" href="/eventDetails" style="margin-right: 45px;">Show Details</a>
                            <a class="btn btn-common" href="#" >Buy ticket</a>
                        </div>
                        
                    </div>

                </div>

                <div class="blog-post">

                    <div class="feature-inner">
                        <a class="lightbox" href="assets/site/img/blog/bloglarge-1.jpg"><img
                                src="assets/site/img/blog/bloglarge-1.jpg" alt=""></a>
                    </div>


                    <div class="post-content">
                        <div class="meta">
                            {{-- <span class="meta-part"><a href="#"><i class="lni-user"></i> Admin</a></span> --}}
                            <span class="meta-part"><a href="#"><i class="lni lni-world"></i> Alex</a></span>
                            <span class="meta-part"><a href="#"><i class="lni lni-calendar"></i>20-2-2020</a></span>
                            <span class="meta-part"><a href="#"><i class="lni lni-dollar"></i> 70 </a></span>
                        </div>
                        <h3 class="post-title"><a href="/eventDetails">Get Your Mobile Site Ready For The 2020
                                Holiday Seasion</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem facilis possimus quo cum
                            delectus itaque! Soluta id a laudantium error omnis totam suscipit doloremque quam
                            nostrum provident minus consectetur, debitis! Itaque ipsam consequuntur minus aut iusto,
                            in earum dolores adipisci quis rerum, cum animi voluptate provident deserunt assumenda
                            sequi pariatur molestias commodi.</p>
                        <div class="text-center" >
                            <a class="btn btn-common" href="/eventDetails" style="margin-right: 45px;">Show Details</a>
                            <a class="btn btn-common" href="#" >Buy ticket</a>
                        </div>
                        
                    </div>

                </div>

            </div>


            <aside id="sidebar" class="col-lg-4 col-md-12 col-xs-12 right-sidebar">

                <div class="widget widget-popular-posts">
                    <h5 class="widget-title">Recent Halls</h5>
                    <ul class="posts-list">
                        <li>
                            <div class="widget-thumb">
                                <a href="/eventDetails"><img src="assets/site/img/blog/p1.jpg" alt="" /></a>
                            </div>
                            <div class="widget-content">
                                <a href="/eventDetails">Brooklyn beta was the most</a>
                                <span><i class="icon-calendar"></i>2020/10/28</span>
                                <span><i class="icon-folder"></i>Blog</span>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <div class="widget-thumb">
                                <a href="/eventDetails"><img src="assets/site/img/blog/p2.jpg" alt="" /></a>
                            </div>
                            <div class="widget-content">
                                <a href="/eventDetails">Brooklyn beta was the most</a>
                                <span><i class="icon-calendar"></i>2020/10/28</span>
                                <span><i class="icon-folder"></i>Blog</span>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <div class="widget-thumb">
                                <a href="/eventDetails"><img src="assets/site/img/blog/p3.jpg" alt="" /></a>
                            </div>
                            <div class="widget-content">
                                <a href="/eventDetails">Brooklyn beta was the most</a>
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