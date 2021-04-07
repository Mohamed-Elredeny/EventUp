@extends('site.layouts.homeSite')

@section('title', 'Home')

@section('content')
    
    
<header id="header-wrap">

    <nav class="navbar navbar-expand-lg bg-inverse fixed-top scrolling-navbar">
        <div class="container">
            <div class="theme-header clearfix">

                {{-- <a href="index.html" class="navbar-brand"><img src="../assets/site/img/logo.png" alt=""></a> --}}
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="lni-menu"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto w-100 justify-content-center">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">
                                Home
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="/allHalls" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Halls
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="/eventSchedules">
                                Events Schedules
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/allRests">
                                Rests Places
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/allOrganizers">
                                Organizers
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="/contactUs">
                                Contact Us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/aboutUs">
                                About Us
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Sign In
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/signIn">User</a></li>
                                <li><a class="dropdown-item" href="/signInOrganizer">Organizer</a></li>
                                <li><a class="dropdown-item" href="/signInAdmin">Admin</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                sign Up
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/signUp">user</a></li>
                                <li><a class="dropdown-item" href="/signUpOrganizer">Organizer</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                My Name
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/profile">Profile</a></li>
                                <li><a class="dropdown-item" href="/myRequest">My Requests</a></li>
                                <li><a class="dropdown-item" href="/favorateHalls">My Favorate Halls</a></li>
                                <li><a class="dropdown-item" href="/favorateResets">My Favorate Resets</a></li>
                                <li><a class="dropdown-item" href="/followingOrganizer">My Following Organizer</a></li>
                                <li><a class="dropdown-item" href="/updateProfile">Update My Profile</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="mobile-menu" data-logo="../assets/site/img/logo.png"></div>
    </nav>


    <div id="hero-area" class="hero-area-bg">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-sm-12">
                    <div class="contents text-center">
                        <p class="banner-info">Nearly Event</p>
                        <div class="icon">
                            <i class="lni-mic"></i>
                        </div>
                        <p class="banner-info">15, Oct 2020 - Maria Hall, NY, United states</p>
                        <h2 class="head-title">Developers Conference</h2>
                        <p class="banner-desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, nobis nesciunt atque
                            perferendis, ipsa doloremque deserunt cum qui.</p>
                        <div class="banner-btn">
                            <a href="#" class="btn btn-common">Get Ticket</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>


<section id="count">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="count-wrapper text-center">
                    <div class="time-countdown wow fadeInUp" data-wow-delay="0.2s">
                        <div id="clock" class="time-count"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="about" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-xs-12">
                <div class="img-thumb">
                    <img class="img-fluid" src="../assets/site/img/about/img1.png" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-xs-12">
                <div class="about-content">
                    <div>
                        <div class="about-text">
                            <h2>About The Conference</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod ncididunt
                                ametfh consectetur dolore magna aliqua. Ut enim ad minim veniam dolor sitame
                                magnaelit ate consectetur adipisicing. Lorem ipsum dolor sit amet consectetur
                                adipisicing elit sed do eiusmod.</p>
                        </div>
                        <ul class="stylish-list mb-3">
                            <li><i class="lni-check-mark-circle"></i>We are providing different services</li>
                            <li><i class="lni-check-mark-circle"></i>We are one of leading company</li>
                            <li><i class="lni-check-mark-circle"></i>Profitability is the primary goal of all
                                business</li>
                            <li><i class="lni-check-mark-circle"></i>Learn how to grow your Business </li>
                            <li><i class="lni-check-mark-circle"></i>Professional solutions for your business</li>
                        </ul>
                        <a class="btn btn-common" href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="ready-to-play">
    <video id="bgvid"  loop controls>
        <source src="{{URL::asset('../assets/site/video/event1.mp4')}}" type="video/mp4">
    </video>
    <div id="polina" class="video-text">
        <div class="tb-t">
            <div class="tb-c">
                <div class="polina"><button><i class='lni-play'></i></button></div>
            </div>
        </div>
    </div>
</div>


<section id="information-bar">
    <div class="container">
        <div class="row inforation-wrapper">
            <div class="col-lg-3 col-md-6 col-xs-12">
                <ul>
                    <li>
                        <i class="lni-map-marker"></i>
                    </li>
                    <li><span><b>Rest Places</b> 50 Rest Places</span></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12">
                <ul>
                    <li>
                        <i class="lni-calendar"></i>
                    </li>
                    <li><span><b>Halls</b> 10 Hall</span></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12">
                <ul>
                    <li>
                        <i class="lni-mic"></i>
                    </li>
                    <li><span><b>Events</b> 25 event</span></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12">
                <ul>
                    <li>
                        <i class="lni-user"></i>
                    </li>
                    <li><span><b>Organizers</b> 25 Professionals</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>


<section id="intro" class="intro section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title-header text-center">
                    <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Why You Join?</h2>
                    <p class="wow fadeInDown" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, in quodsi vulputate
                        pro. Ius illum vocent mediocritatem an <br> cule dicta iriure at phaedrum.</p>
                </div>
            </div>
        </div>
        <div class="row intro-wrapper">
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="single-intro-text mb-70">
                    <i class="lni-microphone"></i>
                    <h3>Great Speakers</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus mollitia, excepturi.
                    </p>
                    <span class="count-number">01</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="single-intro-text">
                    <i class="lni-users"></i>
                    <h3 class="ts-title">New People</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus mollitia, excepturi.
                    </p>
                    <span class="count-number">02</span>
                </div>
                <div class="border-shap left"></div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="single-intro-text mb-70">
                    <i class="lni-bullhorn"></i>
                    <h3>Global Event</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus mollitia, excepturi.
                    </p>
                    <span class="count-number">03</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="single-intro-text mb-70">
                    <i class="lni-heart"></i>
                    <h3>Get Inspired</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus mollitia, excepturi.
                    </p>
                    <span class="count-number">04</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="single-intro-text mb-70">
                    <i class="lni-cup"></i>
                    <h3>Networking Session</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus mollitia, excepturi.
                    </p>
                    <span class="count-number">05</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="single-intro-text mb-70">
                    <i class="lni-gallery"></i>
                    <h3>Meet New Faces</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus mollitia, excepturi.
                    </p>
                    <span class="count-number">06</span>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="counter-section section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-6 col-xs-12 work-counter-widget">
                <div class="counter">
                    <div class="icon">
                        <i class="lni-mic"></i>
                    </div>
                    <div class="counter-content">
                        <div class="counterUp">43</div>
                        <p>Organizers</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-xs-12 work-counter-widget">
                <div class="counter">
                    <div class="icon">
                        <i class="lni-bulb"></i>
                    </div>
                    <div class="counter-content">
                        <div class="counterUp">800</div>
                        <p>Events</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-xs-12 work-counter-widget">
                <div class="counter">
                    <div class="icon">
                        <i class="lni-briefcase"></i>
                    </div>
                    <div class="counter-content">
                        <div class="counterUp">24</div>
                        <p>Halls</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-xs-12 work-counter-widget">
                <div class="counter">
                    <div class="icon">
                        <i class="lni-coffee-cup"></i>
                    </div>
                    <div class="counter-content">
                        <div class="counterUp">34</div>
                        <p>Rest Places</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="schedules" class="schedule section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title-header text-center">
                    <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Event Schedules</h2>
                    <p class="wow fadeInDown" data-wow-delay="0.2s">Nearly Event for three days</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mb-5 text-center">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="monday-tab" data-toggle="tab" href="#monday" role="tab"
                            aria-controls="monday" aria-expanded="true">
                            <div class="item-text">
                                <h4>Day 01</h4>
                                <h5>5 April 2021</h5>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tuesday-tab" data-toggle="tab" href="#tuesday" role="tab"
                            aria-controls="tuesday">
                            <div class="item-text">
                                <h4>Day 02</h4>
                                <h5>6 April 2021</h5>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="wednesday-tab" data-toggle="tab" href="#wednesday" role="tab"
                            aria-controls="wednesday">
                            <div class="item-text">
                                <h4>Day 03</h4>
                                <h5>7 April 2021</h5>
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
                                            <div class="schedule-slot-time">
                                                <span> 9.30 - 10.30 AM</span>
                                                Workshop
                                            </div>
                                            <div class="collapsed card-header" data-toggle="collapse"
                                                data-target="#collapseOne" aria-expanded="false"
                                                aria-controls="collapseOne">
                                                <div class="images-box">
                                                    <img class="img-fluid" src="../assets/site/img/speaker/speakers-1.jpg"
                                                        alt="">
                                                </div>
                                                <h4><a href="/eventDetails">Web Design Principles and Best Practices</a></h4>
                                                <h5 class="name">David Warner</h5>
                                            </div>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet
                                                    minima dolores rerum maiores qui at commodi quas, reprehenderit
                                                    eius consectetur quae magni molestias veniam, provident illum
                                                    facere iure libero asperiores! Lorem ipsum dolor sit amet,
                                                    consectetur adipisicing elit. Veniam earum nihil ex ipsa magni
                                                    eligendi fugiat assumenda suscipit, accusantium, necessitatibus
                                                    reiciendis odit sed, vero amet blanditiis?</p>
                                                <div class="location">
                                                    <span>Location:</span> Hall 1 , Building A, Golden Street,
                                                    Southafrica
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div id="headingTwo">
                                            <div class="schedule-slot-time">
                                                <span> 10.30 - 11.30 AM</span>
                                                Workshop
                                            </div>
                                            <div class="collapsed card-header" data-toggle="collapse"
                                                data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                                <div class="images-box">
                                                    <img class="img-fluid" src="../assets/site/img/speaker/speakers-2.jpg"
                                                        alt="">
                                                </div>
                                                <h4><a href="/eventDetails">15 Free Productive Design Tools</a></h4>
                                                <h5 class="name">David Warner</h5>
                                            </div>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet
                                                    minima dolores rerum maiores qui at commodi quas, reprehenderit
                                                    eius consectetur quae magni molestias veniam, provident illum
                                                    facere iure libero asperiores! Lorem ipsum dolor sit amet,
                                                    consectetur adipisicing elit. Veniam earum nihil ex ipsa magni
                                                    eligendi fugiat assumenda suscipit, accusantium, necessitatibus
                                                    reiciendis odit sed, vero amet blanditiis?</p>
                                                <div class="location">
                                                    <span>Location:</span> Hall 1 , Building A, Golden Street,
                                                    Southafrica
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div id="headingThree">
                                            <div class="schedule-slot-time">
                                                <span> 11.30 - 12.30 AM</span>
                                                Workshop
                                            </div>
                                            <div class="collapsed card-header" data-toggle="collapse"
                                                data-target="#collapseThree" aria-expanded="false"
                                                aria-controls="collapseThree">
                                                <div class="images-box">
                                                    <img class="img-fluid" src="../assets/site/img/speaker/speakers-3.jpg"
                                                        alt="">
                                                </div>
                                                <h4><a href="/eventDetails">Getting Started With SketchApp</a></h4>
                                                <h5 class="name">David Warner</h5>
                                            </div>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet
                                                    minima dolores rerum maiores qui at commodi quas, reprehenderit
                                                    eius consectetur quae magni molestias veniam, provident illum
                                                    facere iure libero asperiores! Lorem ipsum dolor sit amet,
                                                    consectetur adipisicing elit. Veniam earum nihil ex ipsa magni
                                                    eligendi fugiat assumenda suscipit, accusantium, necessitatibus
                                                    reiciendis odit sed, vero amet blanditiis?</p>
                                                <div class="location">
                                                    <span>Location:</span> Hall 1 , Building A, Golden Street,
                                                    Southafrica
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
                                            <div class="schedule-slot-time">
                                                <span> 1.30 - 2.30 AM</span>
                                                Workshop
                                            </div>
                                            <div class="collapsed card-header" data-toggle="collapse"
                                                data-target="#collapseTwo2" aria-expanded="false"
                                                aria-controls="collapseTwo2">
                                                <div class="images-box">
                                                    <img class="img-fluid" src="../assets/site/img/speaker/speakers-2.jpg"
                                                        alt="">
                                                </div>
                                                <h4><a href="/eventDetails">Web Design Principles and Best Practices</a></h4>
                                                <h5 class="name">David Warner</h5>
                                            </div>
                                        </div>
                                        <div id="collapseOne1" class="collapse show" aria-labelledby="headingOne1"
                                            data-parent="#accordion2">
                                            <div class="card-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet
                                                    minima dolores rerum maiores qui at commodi quas, reprehenderit
                                                    eius consectetur quae magni molestias veniam, provident illum
                                                    facere iure libero asperiores! Lorem ipsum dolor sit amet,
                                                    consectetur adipisicing elit. Veniam earum nihil ex ipsa magni
                                                    eligendi fugiat assumenda suscipit, accusantium, necessitatibus
                                                    reiciendis odit sed, vero amet blanditiis?</p>
                                                <div class="location">
                                                    <span>Location:</span> Hall 1 , Building A, Golden Street,
                                                    Southafrica
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div id="headingTwo2">
                                            <div class="schedule-slot-time">
                                                <span> 9.30 - 10.30 AM</span>
                                                Workshop
                                            </div>
                                            <div class="collapsed card-header" data-toggle="collapse"
                                                data-target="#collapseOne1" aria-expanded="false"
                                                aria-controls="collapseOne1">
                                                <div class="images-box">
                                                    <img class="img-fluid" src="../assets/site/img/speaker/speakers-1.jpg"
                                                        alt="">
                                                </div>
                                                <h4><a href="/eventDetails">Web Design Principles and Best Practices</a></h4>
                                                <h5 class="name">David Warner</h5>
                                            </div>
                                        </div>
                                        <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo2"
                                            data-parent="#accordion2">
                                            <div class="card-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet
                                                    minima dolores rerum maiores qui at commodi quas, reprehenderit
                                                    eius consectetur quae magni molestias veniam, provident illum
                                                    facere iure libero asperiores! Lorem ipsum dolor sit amet,
                                                    consectetur adipisicing elit. Veniam earum nihil ex ipsa magni
                                                    eligendi fugiat assumenda suscipit, accusantium, necessitatibus
                                                    reiciendis odit sed, vero amet blanditiis?</p>
                                                <div class="location">
                                                    <span>Location:</span> Hall 1 , Building A, Golden Street,
                                                    Southafrica
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="wednesday" role="tabpanel"
                                aria-labelledby="wednesday-tab">
                                <div id="accordion3">
                                    <div class="card">
                                        <div id="headingOne3">
                                            <div class="schedule-slot-time">
                                                <span> 10.30 - 11.30 AM</span>
                                                Workshop
                                            </div>
                                            <div class="collapsed card-header" data-toggle="collapse"
                                                data-target="#collapseOne3" aria-expanded="false"
                                                aria-controls="collapseOne3">
                                                <div class="images-box">
                                                    <img class="img-fluid" src="../assets/site/img/speaker/speakers-1.jpg"
                                                        alt="">
                                                </div>
                                                <h4><a href="/eventDetails">Web Design Principles and Best Practices</a></h4>
                                                <h5 class="name">David Warner</h5>
                                            </div>
                                        </div>
                                        <div id="collapseOne3" class="collapse show" aria-labelledby="headingOne3"
                                            data-parent="#accordion3">
                                            <div class="card-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet
                                                    minima dolores rerum maiores qui at commodi quas, reprehenderit
                                                    eius consectetur quae magni molestias veniam, provident illum
                                                    facere iure libero asperiores! Lorem ipsum dolor sit amet,
                                                    consectetur adipisicing elit. Veniam earum nihil ex ipsa magni
                                                    eligendi fugiat assumenda suscipit, accusantium, necessitatibus
                                                    reiciendis odit sed, vero amet blanditiis?</p>
                                                <div class="location">
                                                    <span>Location:</span> Hall 1 , Building A, Golden Street,
                                                    Southafrica
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div id="headingTwo3">
                                            <div class="schedule-slot-time">
                                                <span> 11.30 - 12.30 AM</span>
                                                Workshop
                                            </div>
                                            <div class="collapsed card-header" data-toggle="collapse"
                                                data-target="#collapseTwo3" aria-expanded="false"
                                                aria-controls="collapseTwo3">
                                                <div class="images-box">
                                                    <img class="img-fluid" src="../assets/site/img/speaker/speakers-2.jpg"
                                                        alt="">
                                                </div>
                                                <h4><a href="/eventDetails">Web Design Principles and Best Practices</a></h4>
                                                <h5 class="name">David Warner</h5>
                                            </div>
                                        </div>
                                        <div id="collapseTwo3" class="collapse" aria-labelledby="headingTwo3"
                                            data-parent="#accordion3">
                                            <div class="card-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet
                                                    minima dolores rerum maiores qui at commodi quas, reprehenderit
                                                    eius consectetur quae magni molestias veniam, provident illum
                                                    facere iure libero asperiores! Lorem ipsum dolor sit amet,
                                                    consectetur adipisicing elit. Veniam earum nihil ex ipsa magni
                                                    eligendi fugiat assumenda suscipit, accusantium, necessitatibus
                                                    reiciendis odit sed, vero amet blanditiis?</p>
                                                <div class="location">
                                                    <span>Location:</span> Hall 1 , Building A, Golden Street,
                                                    Southafrica
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div id="headingThree3">
                                            <div class="schedule-slot-time">
                                                <span> 1.30 - 2.30 AM</span>
                                                Workshop
                                            </div>
                                            <div class="collapsed card-header" data-toggle="collapse"
                                                data-target="#collapseThree3" aria-expanded="false"
                                                aria-controls="collapseThree3">
                                                <div class="images-box">
                                                    <img class="img-fluid" src="../assets/site/img/speaker/speakers-3.jpg"
                                                        alt="">
                                                </div>
                                                <h4><a href="/eventDetails">Web Design Principles and Best Practices</a></h4>
                                                <h5 class="name">David Warner</h5>
                                            </div>
                                        </div>
                                        <div id="collapseThree3" class="collapse" aria-labelledby="headingThree3"
                                            data-parent="#accordion3">
                                            <div class="card-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet
                                                    minima dolores rerum maiores qui at commodi quas, reprehenderit
                                                    eius consectetur quae magni molestias veniam, provident illum
                                                    facere iure libero asperiores! Lorem ipsum dolor sit amet,
                                                    consectetur adipisicing elit. Veniam earum nihil ex ipsa magni
                                                    eligendi fugiat assumenda suscipit, accusantium, necessitatibus
                                                    reiciendis odit sed, vero amet blanditiis?</p>
                                                <div class="location">
                                                    <span>Location:</span> Hall 1 , Building A, Golden Street,
                                                    Southafrica
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


<section id="team" class="section-padding text-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title-header text-center">
                    <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Our Organizers</h2>
                </div>
            </div>
            <br>
        </div>
        <div class="row justify-content-bt">
            <br>
            <div class="col-lg-3 col-md-6 col-xs-12">

                <div class="team-item wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-img">
                        <img class="img-fluid" src="assets/site/img/team/team-01.jpg" alt="">
                        <div class="team-overlay">
                            <div class="overlay-social-icon text-center">
                                <ul class="social-icons">
                                    <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="lni-google" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="lni-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="info-text">
                        <h3><a href="#">JONATHON DOE</a></h3>
                        <a href="/organizerEvents" class="heartSearch"><i class="lni lni-search" style="font-size: xxx-large; padding-right: 34px;"></i></a>
                        <a href="#"><i class="lni lni-heart heart" style="font-size: xxx-large;"></i></a>

                    </div>
                </div>

            </div>


            <div class="col-lg-3 col-md-6 col-xs-12">

                <div class="team-item wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-img">
                        <img class="img-fluid" src="assets/site/img/team/team-02.jpg" alt="">
                        <div class="team-overlay">
                            <div class="overlay-social-icon text-center">
                                <ul class="social-icons">
                                    <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="lni-google" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="lni-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="info-text">
                        <h3><a href="#">JONATHON DOE</a></h3>
                        <a href="/organizerEvents" class="heartSearch"><i class="lni lni-search" style="font-size: xxx-large; padding-right: 34px;"></i></a>
                        <a href="#"><i  class="lni lni-heart heart" style="font-size: xxx-large;"></i></a>
                    </div>
                </div>

            </div>
           
            <div class="col-lg-3 col-md-6 col-xs-12">

                <div class="team-item wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-img">
                        <img class="img-fluid" src="assets/site/img/team/team-03.jpg" alt="">
                        <div class="team-overlay">
                            <div class="overlay-social-icon text-center">
                                <ul class="social-icons">
                                    <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="lni-google" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="lni-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="info-text">
                        <h3><a href="#">JONATHON DOE</a></h3>
                        <a href="/organizerEvents" class="heartSearch"><i class="lni lni-search" style="font-size: xxx-large; padding-right: 34px;"></i></a>
                        <a href="#"><i class="lni lni-heart heart" style="font-size: xxx-large;"></i></a>
                    </div>
                </div>

            </div>
        </div>
        
    </div>
</section>


<section id="gallery" class="section-padding">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="section-title-header text-center">
                    <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s"> Reasts Places </h2>
                </div>
            </div>
        </div>
        <br><br>
        <div class="row">
            {{-- <div class="col-md-6 col-sm-6 col-lg-3">
                <div class="gallery-box">
                    <div class="img-thumb">
                        <img class="img-fluid" src="assets/site/img/gallery/img-1.jpg" alt="">
                    </div>
                    <div class="overlay-box text-center" style="padding-top: 30px">
                        <ul class="social-icons">
                            <li><a href="#"><i class="lni-plus" aria-hidden="true"><p style="color: white">Name</p>
                                <p style="color: white">Address</p></i></a></li>
                            </ul><a href="#"><i class="lni lni-heart-filled disHeart" style="font-size: xx-large;"></i></a>
                    </div>
                </div>
            </div> --}}
            
            {{-- <div class="col-md-6 col-sm-6 col-lg-3">
                <div class="gallery-box">
                    <div class="img-thumb">
                        <img class="img-fluid" src="assets/site/img/gallery/img-2.jpg" alt="">
                    </div>
                    <div class="overlay-box text-center" style="padding-top: 30px">
                        <ul class="social-icons"> --}}
                            {{-- <li><a href="#"><i class="lni-plus" aria-hidden="true"></i></a></li> --}}
                            {{-- <li>
                                <a href="#"><i class="lni lni-heart-filled disHeart" style="font-size: xx-large;">
                                <p style="color: white">Name</p>
                                <p style="color: white">Address</p></i></a>
                            </li> --}}
                            
                            {{-- </ul><a href="#"><i class="lni lni-heart-filled"></i></a> --}}
                            {{-- <li><a href="#"><i class="lni lni-heart" aria-hidden="true"><p style="color: white">Name</p> --}}
                    {{-- </div>
                </div>
            </div> --}}
            <div class="col-md-6 col-sm-6 col-lg-3">
                <div class="gallery-box">
                    <div class="img-thumb">
                        <img class="img-fluid" src="assets/site/img/gallery/img-3.jpg" alt="">
                    </div>
                    <div class="overlay-box text-center">
                        <a class="lightbox" href="">
                            <i class="lni lni-heart-filled disHeart" style="font-size: xx-large;"></i>
                            </a>
                            <a class="lightbox" href="/restDetails"> 
                                <p style="color: white">Name</p>
                                <p style="color: white">Address</p>
                            
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-3">
                <div class="gallery-box">
                    <div class="img-thumb">
                        <img class="img-fluid" src="assets/site/img/gallery/img-1.jpg" alt="">
                    </div>
                    <div class="overlay-box text-center">
                        <a class="lightbox" href="">
                            <i class="lni lni-heart-filled disHeart" style="font-size: xx-large;"></i>
                            </a>
                            <a class="lightbox" href="/restDetails"> 
                                <p style="color: white">Name</p>
                                <p style="color: white">Address</p>
                            
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-3">
                <div class="gallery-box">
                    <div class="img-thumb">
                        <img class="img-fluid" src="assets/site/img/gallery/img-2.jpg" alt="">
                    </div>
                    <div class="overlay-box text-center">
                        <a class="lightbox" href="">
                            <i class="lni lni-heart-filled disHeart" style="font-size: xx-large;"></i>
                            </a>
                            <a class="lightbox" href="/restDetails"> 
                                <p style="color: white">Name</p>
                                <p style="color: white">Address</p>
                            
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="gallery" class="section-padding" style="background: #fff;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="section-title-header text-center">
                    <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s"> Halls </h2>
                </div>
            </div>
        </div>
        <br><br>
        <div class="row">
            {{-- <div class="col-md-6 col-sm-6 col-lg-3">
                <div class="gallery-box">
                    <div class="img-thumb">
                        <img class="img-fluid" src="assets/site/img/gallery/img-1.jpg" alt="">
                    </div>
                    <div class="overlay-box text-center" style="padding-top: 30px">
                        <ul class="social-icons">
                            <li><a href="#"><i class="lni-plus" aria-hidden="true"><p style="color: white">Name</p>
                                <p style="color: white">Address</p></i></a></li>
                            </ul><a href="#"><i class="lni lni-heart-filled disHeart" style="font-size: xx-large;"></i></a>
                    </div>
                </div>
            </div> --}}
            
            {{-- <div class="col-md-6 col-sm-6 col-lg-3">
                <div class="gallery-box">
                    <div class="img-thumb">
                        <img class="img-fluid" src="assets/site/img/gallery/img-2.jpg" alt="">
                    </div>
                    <div class="overlay-box text-center" style="padding-top: 30px">
                        <ul class="social-icons"> --}}
                            {{-- <li><a href="#"><i class="lni-plus" aria-hidden="true"></i></a></li> --}}
                            {{-- <li>
                                <a href="#"><i class="lni lni-heart-filled disHeart" style="font-size: xx-large;">
                                <p style="color: white">Name</p>
                                <p style="color: white">Address</p></i></a>
                            </li> --}}
                            
                            {{-- </ul><a href="#"><i class="lni lni-heart-filled"></i></a> --}}
                            {{-- <li><a href="#"><i class="lni lni-heart" aria-hidden="true"><p style="color: white">Name</p> --}}
                    {{-- </div>
                </div>
            </div> --}}
            <div class="col-md-6 col-sm-6 col-lg-3" >
                <div class="gallery-box" style="width: 300px;">
                    <div class="img-thumb">
                        <img class="img-fluid" src="assets/site/img/gallery/img-3.jpg" alt="" >
                    </div>
                    <div class="overlay-box text-center">
                        <a class="lightbox" href="/hallDetails">
                            <i class="lni lni-heart-filled heart" style="font-size: xx-large;">
                                {{-- <a href="/hallDetails"> --}}
                                <p style="color: white">Name</p>
                                <p style="color: white">Address</p>
                                {{-- </a> --}}
                            </i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-3">
                <div class="gallery-box" style="width: 300px;">
                    <div class="img-thumb">
                        <img class="img-fluid" src="assets/site/img/gallery/img-4.jpg" alt="" >
                    </div>
                    <div class="overlay-box text-center">
                        <a class="lightbox" href="/hallDetails">
                            <i class="lni lni-heart-filled disHeart" style="font-size: xx-large;">
                                {{-- <a href="/hallDetails"> --}}
                                    <p style="color: white">Name</p>
                                    <p style="color: white">Address</p>
                                    {{-- </a> --}}
                            </i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-3">
                <div class="gallery-box" style="width: 300px;">
                    <div class="img-thumb">
                        <img class="img-fluid" src="assets/site/img/gallery/img-5.jpg" alt="" >
                    </div>
                    <div class="overlay-box text-center">
                        <a class="lightbox" href="/hallDetails">
                            <i class="lni lni-heart-filled disHeart" style="font-size: xx-large;">
                                {{-- <a href="/hallDetails"> --}}
                                    <p style="color: white">Name</p>
                                    <p style="color: white">Address</p>
                                    {{-- </a> --}}
                            </i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="sponsors" class="section-padding">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title-header text-center">
                    <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Sponsors</h2>
                    <p class="wow fadeInDown" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, in quodsi vulputate
                        pro. Ius illum vocent mediocritatem an <br> cule dicta iriure at phaedrum.</p>
                </div>
            </div>
        </div>
        <div class="row mb-30 text-center wow fadeInDown" data-wow-delay="0.3s">
            <div class="col-lg-12">
                <div class="sponsors-logo text-center">
                    <a href=""><img src="../assets/site/img/sponsors/logo-1.png" alt=""></a>
                    <a href=""><img src="../assets/site/img/sponsors/logo-2.png" alt=""></a>
                    <a href=""><img src="../assets/site/img/sponsors/logo-3.png" alt=""></a>
                    <a href=""><img src="../assets/site/img/sponsors/logo-4.png" alt=""></a>
                    <a href=""><img src="../assets/site/img/sponsors/logo-5.png" alt=""></a>
                    <a href=""><img src="../assets/site/img/sponsors/logo-6.png" alt=""></a>
                    <a href=""><img src="../assets/site/img/sponsors/logo-7.png" alt=""></a>
                    <a href=""><img src="../assets/site/img/sponsors/logo-8.png" alt=""></a>
                    <a href=""><img src="../assets/site/img/sponsors/logo-9.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="contact-map" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title-header text-center">
                    <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Contact Us</h2>
                    <p class="wow fadeInDown" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, in quodsi vulputate
                        pro. Ius illum vocent mediocritatem an <br> cule dicta iriure at phaedrum.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12 col-xs-12">
                <div class="container-form wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="form-wrapper">
                        <form role="form" method="post" id="contactForm" name="contact-form"
                            data-toggle="validator">
                            <div class="row">
                                <div class="col-md-6 form-line">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="email"
                                            placeholder="First Name" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6 form-line">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Email" required data-error="Please enter your Email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12 form-line">
                                    <div class="form-group">
                                        <input type="tel" class="form-control" id="msg_subject" name="subject"
                                            placeholder="Subject" required
                                            data-error="Please enter your message subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" rows="4" id="message" name="message" required
                                            data-error="Write your message"></textarea>
                                    </div>
                                    <div class="form-submit">
                                        <button type="submit" class="btn btn-common" id="form-submit"><i
                                                class="fa fa-paper-plane" aria-hidden="true"></i> Send
                                            Message</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="contact-text">
    <div class="container">
        <div class="row contact-wrapper">
            <div class="col-lg-4 col-md-5 col-xs-12">
                <ul>
                    <li>
                        <i class="lni-home"></i>
                    </li>
                    <li><span>Cesare Rosaroll, 118 80139 Eventine</li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-3 col-xs-12">
                <ul>
                    <li>
                        <i class="lni-phone"></i>
                    </li>
                    <li><span>+789 123 456 79</span></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-3 col-xs-12">
                <ul>
                    <li>
                        <i class="lni-envelope"></i>
                    </li>
                    <li><span><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                data-cfemail="174462676778656357726f767a677b723974787a">[email&#160;protected]</a></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
    
    
    

@endsection