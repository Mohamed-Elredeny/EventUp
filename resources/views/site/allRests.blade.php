@extends('site.layouts.site')

@section('title', 'Our Rests')

@section('content')
    
    
<section id="gallery" class="section-padding">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="section-title-header text-center">
                    <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Our Rests </h2>
                </div>
            </div>
        </div>
        <div class="row">
            
            <div class="col-md-6 col-sm-6 col-lg-3">
                <div class="gallery-box">
                    <div class="img-thumb">
                        <img class="img-fluid" src="assets/site/img/gallery/img-2.jpg" alt="">
                    </div>
                    <div class="overlay-box text-center">
                        <a class="lightbox" href="/restDetails">
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
                <div class="gallery-box">
                    <div class="img-thumb">
                        <img class="img-fluid" src="assets/site/img/gallery/img-3.jpg" alt="">
                    </div>
                    <div class="overlay-box text-center">
                        <a class="lightbox" href="/restDetails">
                            <i class="lni lni-heart heart" style="font-size: xx-large;">
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
                <div class="gallery-box">
                    <div class="img-thumb">
                        <img class="img-fluid" src="assets/site/img/gallery/img-2.jpg" alt="">
                    </div>
                    <div class="overlay-box text-center">
                        <a class="lightbox" href="/restDetails">
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
                <div class="gallery-box">
                    <div class="img-thumb">
                        <img class="img-fluid" src="assets/site/img/gallery/img-2.jpg" alt="">
                    </div>
                    <div class="overlay-box text-center">
                        <a class="lightbox" href="/restDetails">
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
                <div class="gallery-box">
                    <div class="img-thumb">
                        <img class="img-fluid" src="assets/site/img/gallery/img-3.jpg" alt="">
                    </div>
                    <div class="overlay-box text-center">
                        <a class="lightbox" href="/restDetails">
                            <i class="lni lni-heart heart" style="font-size: xx-large;">
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
</section>
    
    
@endsection