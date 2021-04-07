@extends('site.layouts.site')

@section('title', 'Update Profile')

@section('content')
    
    
    <section id="contact-map" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-header text-center">
                        <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Update Profile</h2>
                        {{-- <p class="wow fadeInDown" data-wow-delay="0.2s">Join us now <br>Subscribe to get the latest halls, events, breaks and all things subscription! --}}
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="container-form wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="form-wrapper">
                            <form role="form" method="post" id="contactForm" name="contact-form" data-toggle="validator">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="section-title-header text-center">
                                            <h6 class="section-title wow fadeInUp" data-wow-delay="0.2s">Update Profile Info</h6>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-12 form-line text-center">
                                            <div class="form-group">
                                                <input type="file" id="file" style="width: 100%" accept="image/*" name="img" onchange="imgchange()"/>
                                                <label for="file" class="btn-3" style="
                                                border-radius: 35px; background-color:#fff">
                                                    <span>    
                                                        <img style="border-radius: 50%; width: 150px; height:150px" alt="" src="assets/site/img/blog/user1.jpg" />
                                                    </span>
                                                </label>
                                                <div>Update Image</div>
                                                <div id="msgImg" class="help-block with-errors"></div>
                                            </div>
                                       
                                    </div>
                                    <div class="col-md-6 form-line">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" required data-error="Please enter your first name" value="Martina" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-line">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" required data-error="Please enter your last name" value="Girgis" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 form-line">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required data-error="Please enter your Email" value="martina@gmail.com" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 form-line">
                                        <div class="form-group">
                                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone" required data-error="Please enter your phone" value="01212121212" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                  
                                   <div class="col-md-12">
                                        <div class="form-submit">
                                            <button type="submit" class="btn btn-common" id="form-submit"><i class="fa fa-paper-plane" aria-hidden="true"></i> Update</button>
                                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="container-form wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="form-wrapper">
                            <form role="form" method="post" id="contactForm" name="contact-form" data-toggle="validator">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <div class="section-title-header text-center">
                                            <h6 class="section-title wow fadeInUp" data-wow-delay="0.2s">Change Password</h6>
                                        </div>
                                        <br>
                                        <br>
                                    </div>
                                    
                                    <div class="col-md-12 form-line">
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="phone" name="current-password" placeholder="Current Password" required data-error="Please enter your current password" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 form-line">
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="phone" name="new-password" placeholder="New Password" required data-error="Please enter new password" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 form-line">
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="confirm-password" name="confirm-password" placeholder="Confirm New Password" required data-error="Please enter confirm new password" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-submit">
                                            <button type="submit" class="btn btn-common" id="form-submit"><i class="fa fa-paper-plane" aria-hidden="true"></i> Update</button>
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
    <script>
        function imgchange()
        {
            document.getElementById("msgImg").innerHTML = "OK your Image changed";
        }
    </script>
    
@endsection