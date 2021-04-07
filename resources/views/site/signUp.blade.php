@extends('site.layouts.site')

@section('title', 'Sign Up')

@section('content')
    
    
    <section id="contact-map" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-header text-center">
                        <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Sign Up</h2>
                        <p class="wow fadeInDown" data-wow-delay="0.2s">Join us now <br>Subscribe to get the latest halls, events, breaks and all things subscription!
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12 col-xs-12">
                    <div class="container-form wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="form-wrapper">
                            <form role="form" method="post" id="contactForm" name="contact-form" data-toggle="validator">
                                <div class="row">
                                    <div class="col-md-6 form-line">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" required data-error="Please enter your first name" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-line">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" required data-error="Please enter your last name" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 form-line">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required data-error="Please enter your Email" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 form-line">
                                        <div class="form-group">
                                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone" required data-error="Please enter your phone" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
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
                                    <div class="col-md-12 form-line">
                                        <div class="form-group">
                                            <input type="file" id="file" style="width: 100%" accept="image/*" name="img"/>
                                            <label for="file" class="btn-3" style="width: -webkit-fill-available;
                                            border-radius: 35px;">
                                                <span>select Image</span>
                                            </label>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                
                                   <div class="col-md-12">
                                        <div class="form-submit">
                                            <button type="submit" class="btn btn-common" id="form-submit"><i class="fa fa-paper-plane" aria-hidden="true"></i> Sign Up</button>
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