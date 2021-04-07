@extends('site.layouts.site')

@section('title', 'My Requests')

@section('content')
    
    
    
<section id="schedules" class="schedule section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title-header text-center">
                    <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">My Requests</h2>
                    {{-- <p class="wow fadeInDown" data-wow-delay="0.2s">Nearly Event for three days</p> --}}
                </div>
            </div>
            
        </div>
        <br><br>
        <div class="row">
            <div class="col-12 mb-5 text-center">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="monday-tab" data-toggle="tab" href="#monday" role="tab"
                            aria-controls="monday" aria-expanded="true">
                            <div class="item-text">
                                <h4>Accepted</h4>
                                {{-- <h5>5 April 2021</h5> --}}
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tuesday-tab" data-toggle="tab" href="#tuesday" role="tab"
                            aria-controls="tuesday">
                            <div class="item-text">
                                <h4>Rejected</h4>
                                {{-- <h5>6 April 2021</h5> --}}
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-12">
                <div class="schedule-area row wow fadeInDown" data-wow-delay="0.3s">
                    <div class="schedule-tab-content col-12 clearfix">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="monday" role="tabpanel"
                                aria-labelledby="monday-tab">
                                <div id="accordion">
                                    <div class="card">
                                        <div id="headingOne">
                                            <div class="schedule-slot-time" style="height: 100px;width:200px">
                                                {{-- <span> 9.30 - 10.30 AM</span> --}}
                                                Events
                                            </div>
                                            <div class="collapsed card-header" data-toggle="collapse"
                                                data-target="#collapseOne" aria-expanded="false"
                                                aria-controls="collapseOne" style="height: 100px;">
                                                {{-- <div class="images-box">
                                                    <img class="img-fluid" src="../assets/site/img/speaker/speakers-1.jpg"
                                                        alt="">
                                                </div> --}}
                                                {{-- <h4><a href="/eventDetails">Web Design Principles and Best Practices</a></h4> --}}
                                                {{-- <h5 class="name">David Warner</h5> --}}
                                            </div>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                            data-parent="#accordion" >
                                            <div class="card-body" style="background-color: #fff !important">
                                                <div id="comments">
                                                    {{-- <h2 class="comments-title"><i class="icon-bubbles"></i> Organizer</h2> --}}
                                                    <ol class="comments-list">
                                                        <li>
                                                            <div class="">
                                                                <div class="avatar"><a href="#"><img alt="" src="../assets/site/img/blog/bloglarge-1.jpg" style="width: 100%;
                                                                    height: 100%;"/></a>
                                                                </div>
                                                                <div class="comment-content">
                                                                    <div class="comment-meta">
                                                                        <h5 class="comment-by">
                                                                            <a href="#">Event Name</a>
                                                                        </h5>
                                                                        <span class="meta-part"><a href="#"><i class="lni lni-calendar"> </i> 20-2-2020</a></span>
                                                                    </div>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. sed do eiusmod
                                                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ol>
                                                </div>
                                            </div>

                                            <div class="card-body" style="background-color: #fff !important">
                                                <div id="comments">
                                                    {{-- <h2 class="comments-title"><i class="icon-bubbles"></i> Organizer</h2> --}}
                                                    <ol class="comments-list">
                                                        <li>
                                                            <div class="">
                                                                <div class="avatar"><a href="#"><img alt="" src="../assets/site/img/blog/p1.jpg" style="width: 100%;
                                                                    height: 100%;"/></a>
                                                                </div>
                                                                <div class="comment-content">
                                                                    <div class="comment-meta">
                                                                        <h5 class="comment-by">
                                                                            <a href="#">Event Name</a>
                                                                        </h5>
                                                                        <span class="meta-part"><a href="#"><i class="lni lni-calendar"> </i> 20-2-2020</a></span>
                                                                    </div>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. sed do eiusmod
                                                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ol>
                                                </div>
                                            </div>
                                       
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div id="headingTwo">
                                            <div class="schedule-slot-time" style="height: 100px; width:200px">
                                                {{-- <span> 10.30 - 11.30 AM</span> --}}
                                                Rest Places
                                            </div>
                                            <div class="collapsed card-header" data-toggle="collapse"
                                                data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo" style="height: 100px; ">
                                                {{-- <div class="images-box">
                                                    <img class="img-fluid" src="../assets/site/img/speaker/speakers-2.jpg"
                                                        alt="">
                                                </div>
                                                <h4><a href="/eventDetails">15 Free Productive Design Tools</a></h4>
                                                <h5 class="name">David Warner</h5> --}}
                                            </div>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                            data-parent="#accordion">
                                            <div class="card-body" style="background-color: #fff !important">
                                                <div id="comments">
                                                    {{-- <h2 class="comments-title"><i class="icon-bubbles"></i> Organizer</h2> --}}
                                                    <ol class="comments-list">
                                                        <li>
                                                            <div class="">
                                                                <div class="avatar"><a href="#"><img alt="" src="../assets/site/img/blog/bloglarge-1.jpg" style="width: 100%;
                                                                    height: 100%;"/></a>
                                                                </div>
                                                                <div class="comment-content">
                                                                    <div class="comment-meta">
                                                                        <h5 class="comment-by">
                                                                            <a href="/restDetails">Rest Place Name</a>
                                                                        </h5>
                                                                        <span class="meta-part"><a href="#"><i class="lni lni-calendar"> </i> 20-2-2020</a></span>
                                                                    </div>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. sed do eiusmod
                                                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ol>
                                                </div>
                                            </div>

                                            <div class="card-body" style="background-color: #fff !important">
                                                <div id="comments">
                                                    {{-- <h2 class="comments-title"><i class="icon-bubbles"></i> Organizer</h2> --}}
                                                    <ol class="comments-list">
                                                        <li>
                                                            <div class="">
                                                                <div class="avatar"><a href="#"><img alt="" src="../assets/site/img/blog/p1.jpg" style="width: 100%;
                                                                    height: 100%;"/></a>
                                                                </div>
                                                                <div class="comment-content">
                                                                    <div class="comment-meta">
                                                                        <h5 class="comment-by">
                                                                            <a href="/restDetails">Rest Place Name</a>
                                                                        </h5>
                                                                        <span class="meta-part"><a href="#"><i class="lni lni-calendar"> </i> 20-2-2020</a></span>
                                                                    </div>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. sed do eiusmod
                                                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tuesday" role="tabpanel" aria-labelledby="tuesday-tab">
                                <div id="accordion2">
                                    <div class="card">
                                        <div id="headingOne1">
                                            <div class="schedule-slot-time" style="height: 100px;width:200px">
                                                {{-- <span> 1.30 - 2.30 AM</span> --}}
                                                Events
                                            </div>
                                            <div class="collapsed card-header" data-toggle="collapse"
                                                data-target="#collapseOne1" aria-expanded="false"
                                                aria-controls="collapseOne1" style="height: 100px;">
                                                {{-- <div class="images-box">
                                                    <img class="img-fluid" src="../assets/site/img/speaker/speakers-2.jpg"
                                                        alt="">
                                                </div>
                                                <h4><a href="/eventDetails">Web Design Principles and Best Practices</a></h4>
                                                <h5 class="name">David Warner</h5> --}}
                                            </div>
                                        </div>
                                        <div id="collapseOne1" class="collapse show" aria-labelledby="headingOne1"
                                            data-parent="#collapseOne1">
                                            <div class="card-body" style="background-color: #fff !important">
                                                <div id="comments">
                                                    {{-- <h2 class="comments-title"><i class="icon-bubbles"></i> Organizer</h2> --}}
                                                    <ol class="comments-list">
                                                        <li>
                                                            <div class="">
                                                                <div class="avatar"><a href="#"><img alt="" src="../assets/site/img/blog/bloglarge-1.jpg" style="width: 100%;
                                                                    height: 100%;"/></a>
                                                                </div>
                                                                <div class="comment-content">
                                                                    <div class="comment-meta">
                                                                        <h5 class="comment-by">
                                                                            <a href="#">Event Reject Name</a>
                                                                        </h5>
                                                                        <span class="meta-part"><a href="#"><i class="lni lni-calendar"> </i> 20-2-2020</a></span>
                                                                    </div>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. sed do eiusmod
                                                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ol>
                                                </div>
                                            </div>

                                            <div class="card-body" style="background-color: #fff !important">
                                                <div id="comments">
                                                    {{-- <h2 class="comments-title"><i class="icon-bubbles"></i> Organizer</h2> --}}
                                                    <ol class="comments-list">
                                                        <li>
                                                            <div class="">
                                                                <div class="avatar"><a href="#"><img alt="" src="../assets/site/img/blog/p1.jpg" style="width: 100%;
                                                                    height: 100%;"/></a>
                                                                </div>
                                                                <div class="comment-content">
                                                                    <div class="comment-meta">
                                                                        <h5 class="comment-by">
                                                                            <a href="#">Event Reject Name </a>
                                                                        </h5>
                                                                        <span class="meta-part"><a href="#"><i class="lni lni-calendar"> </i> 20-2-2020</a></span>
                                                                    </div>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. sed do eiusmod
                                                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div id="headingTwo2">
                                            <div class="schedule-slot-time" style="height: 100px;width:200px">
                                                {{-- <span> 9.30 - 10.30 AM</span> --}}
                                                Rest Places
                                            </div>
                                            <div class="collapsed card-header" data-toggle="collapse"
                                                data-target="#collapseTwo2" aria-expanded="false"
                                                aria-controls="collapseTwo2" style="height: 100px;">
                                                {{-- <div class="images-box">
                                                    <img class="img-fluid" src="../assets/site/img/speaker/speakers-1.jpg"
                                                        alt="">
                                                </div>
                                                <h4><a href="/eventDetails">Web Design Principles and Best Practices</a></h4>
                                                <h5 class="name">David Warner</h5> --}}
                                            </div>
                                        </div>
                                        <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo2"
                                            data-parent="#accordion2">
                                            <div class="card-body" style="background-color: #fff !important">
                                                <div id="comments">
                                                    {{-- <h2 class="comments-title"><i class="icon-bubbles"></i> Organizer</h2> --}}
                                                    <ol class="comments-list">
                                                        <li>
                                                            <div class="">
                                                                <div class="avatar"><a href="#"><img alt="" src="../assets/site/img/blog/bloglarge-1.jpg" style="width: 100%;
                                                                    height: 100%;"/></a>
                                                                </div>
                                                                <div class="comment-content">
                                                                    <div class="comment-meta">
                                                                        <h5 class="comment-by">
                                                                            <a href="/restDetails">Rest Place Name</a>
                                                                        </h5>
                                                                        <span class="meta-part"><a href="#"><i class="lni lni-calendar"> </i> 20-2-2020</a></span>
                                                                    </div>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. sed do eiusmod
                                                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ol>
                                                </div>
                                            </div>

                                            <div class="card-body" style="background-color: #fff !important">
                                                <div id="comments">
                                                    {{-- <h2 class="comments-title"><i class="icon-bubbles"></i> Organizer</h2> --}}
                                                    <ol class="comments-list">
                                                        <li>
                                                            <div class="">
                                                                <div class="avatar"><a href="#"><img alt="" src="../assets/site/img/blog/p1.jpg" style="width: 100%;
                                                                    height: 100%;"/></a>
                                                                </div>
                                                                <div class="comment-content">
                                                                    <div class="comment-meta">
                                                                        <h5 class="comment-by">
                                                                            <a href="/restDetails">Rest Place Name</a>
                                                                        </h5>
                                                                        <span class="meta-part"><a href="#"><i class="lni lni-calendar"> </i> 20-2-2020</a></span>
                                                                    </div>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. sed do eiusmod
                                                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection