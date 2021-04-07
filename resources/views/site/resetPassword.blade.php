@extends('site.layouts.site')

@section('title', 'Reset Password')

@section('content')
    
    
    <section id="contact-map" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-header text-center">
                        <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Reset Password</h2>
                        {{-- <p class="wow fadeInDown" data-wow-delay="0.2s">Join us now <br>Subscribe to get the latest halls, events, breaks and all things subscription! --}}
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12 col-xs-12">
                    <div class="container-form wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="form-wrapper">
                            <form role="form" method="post" id="contactForm" name="contact-form" data-toggle="validator">
                                <div class="row">
                                   
                                    <div class="col-md-12 form-line">
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="phone" name="password" placeholder="password" required data-error="Please enter your password" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 form-line">
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="confirm-password" name="confirm-password" placeholder="Confirm Password" required data-error="Please enter confirm-password" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                  
                                   <div class="col-md-12">
                                        <div class="form-submit">
                                            <button type="submit" class="btn btn-common" id="form-submit"><i class="fa fa-paper-plane" aria-hidden="true"></i> Save Password</button>
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
    
    
@endsection