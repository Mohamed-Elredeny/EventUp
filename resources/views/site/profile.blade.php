@extends('site.layouts.site')

@section('title', 'My Profile')

@section('content')
    <section id="contact-map" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-header text-center">
                        <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">My Profile Information</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-12 col-xs-12 text-center">
                    <div class="container-form wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="form-wrapper">
                            <img style="border-radius: 50%; width: 150px; height:150px" alt="" src="assets/site/img/blog/user1.jpg" />
                            <br><br>
                                <table class="table table-borderless" style="    width: auto;
                                margin: auto;
                                text-align: -webkit-right;" >
                                    <tbody>
                                    <tr>
                                        <th scope="row">First Name</th>
                                        <td>Martina</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Last Name</th>
                                        <td>Girgis</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Email</th>
                                        <td>toty@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Phone</th>
                                        <td>01212121212</td>
                                    </tr>
                                    </tbody>
                              </table>
                        </div>
                    </div>
                </div>
             </div>
        </div>
    </section>


@endsection
