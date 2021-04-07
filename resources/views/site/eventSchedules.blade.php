@extends('site.layouts.site')

@section('title', 'Events Schedules')

@section('content')
    
    
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

@endsection