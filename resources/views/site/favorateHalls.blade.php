@extends('site.layouts.site')

@section('title', 'My favorite Halls')

@section('content')

<section id="gallery" class="section-padding">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="section-title-header text-center">
                    <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">My favorite Halls </h2>
                </div>
            </div>
        </div>
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
                        <a class="lightbox" href="/hallDetails">
                            <i class="lni lni-heart-filled disHeart" style="font-size: xx-large;">
                                <p style="color: white">Name</p>
                                <p style="color: white">Address</p>
                            </i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-3">
                <div class="gallery-box">
                    <div class="img-thumb">
                        <img class="img-fluid" src="assets/site/img/gallery/img-3.jpg" alt="">
                    </div>
                    <div class="overlay-box text-center">
                        <a class="lightbox" href="/hallDetails">
                            <i class="lni lni-heart-filled disHeart" style="font-size: xx-large;">
                                <p style="color: white">Name</p>
                                <p style="color: white">Address</p>
                            </i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-3">
                <div class="gallery-box">
                    <div class="img-thumb">
                        <img class="img-fluid" src="assets/site/img/gallery/img-3.jpg" alt="">
                    </div>
                    <div class="overlay-box text-center">
                        <a class="lightbox" href="/hallDetails">
                            <i class="lni lni-heart-filled disHeart" style="font-size: xx-large;">
                                <p style="color: white">Name</p>
                                <p style="color: white">Address</p>
                            </i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection