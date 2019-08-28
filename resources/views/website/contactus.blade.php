@extends('layouts.app')
@section('content')
<section class="inner-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-banner-content">
                        <h1 class="inner-banner-title">Get in Touch</h1>
                        <ul class="breadcumbs list-inline">
                            <li><a href="{{route('index')}}">Home</a></li>
                            <li>Contact</li>
                        </ul>
                        <span class="border-divider style-white"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-image" style="background-image:url('assets/images/backgrounds/background-1.jpg')"></div>
    </section>
    <!--breadcumb end here--><!-- inner banenr end -->
    
    <!-- contact info strart -->
    <section class="xs-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="xs-heading text-center style4">
                        <h2 class="section-title">Get in Touch</h2>
                        <span class="line"></span>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, 
                            there live the blind texts. Separated they live in Bookmarksgrove right</p>
                    </div><!-- .xs-heading END -->
                </div>
            </div><!-- .row END -->
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="contact-info-wraper">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="single-contact-info">
                                    <div class="round-icon">
                                        <i class="icon icon-map-marker2"></i>
                                    </div><!-- .round-icon END -->
                                    <a href="https://www.google.com/maps/place/New+York,+NY,+USA/@40.6971494,-74.25987
                                    12,10z/data=!3m1!4b1!4m5!3m4!1s0x89c24fa5d33f083b:0xc80b8f06e177fe62!8m2!3d40.7127753!4d
                                    -74.0059728" target="_blank" class="info-content"> 2 Jonathan Coker Road  New Oko Oba Lagos State, Nigeria</a>
                                </div><!-- .single-contact-info END -->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-contact-info">
                                    <div class="round-icon">
                                        <i class="icon icon-phone-call3"></i>
                                    </div><!-- .round-icon END -->
                                    <a href="callto:+1%20(254)%20878-2354" class="info-content">+1 (234) 803 573 5599</a>
                                    <a href="callto:+1%20(259)%20235-3898" class="info-content">+1 (234) 803 573 5599</a>
                                </div><!-- .single-contact-info END -->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-contact-info">
                                    <div class="round-icon">
                                        <i class="icon icon-envelope4"></i>
                                    </div><!-- .round-icon END -->
                                    <a href="mailto:info@website.com" class="info-content">info@website.com</a>
                                    <a href="mailto:sales@website.com" class="info-content">sales@website.com</a>
                                </div><!-- .single-contact-info END -->
                            </div>
                        </div><!-- .row END -->
                    </div><!-- .contact-info-wraper END -->
                </div>
            </div><!-- .row END -->
        </div><!-- .container END -->
    </section><!-- end contact info -->
    
    <!-- map area strart -->
    <div class="map-area">
        <div class="container">
            <div class="xs-map map" id="map-1"></div>
        </div><!-- .container END -->
    </div><!-- end map area -->
    
    <!-- contact strart -->
    <section class="xs-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-8 mx-auto">
                    <div class="xs-heading text-center style4">
                        <h3 class="section-title">Drop us a Line</h3>
                        <span class="line"></span>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, 
                            there live the blind texts. Separated they live in Bookmarksgrove right</p>
                    </div><!-- .xs-heading END -->
                </div>
            </div><!-- .row END -->
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="contact-from-wraper wow fadeIn">
                        <form action="#" class="xs-from" method="post" id="xs-contact-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="xs_contact_name" class="form-control" placeholder="Name *">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="xs_contact_email" class="form-control" placeholder="Mail *">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="number" name="phone" id="xs_contact_phone" class="form-control" placeholder="Phone *">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="subject" id="xs_contact_subject" class="form-control" placeholder="Subject">
                                    </div>
                                </div>
                            </div><!-- .row END -->
                            <div class="form-group">
                                <textarea name="massage" id="x_contact_massage" class="form-control" placeholder="Your Message *" cols="30" rows="10"></textarea>
                            </div>
                            <div class="text-center">
                                <input type="submit" name="submit" value="Submit" class="btn btn-primary style2" id="xs_contact_submit">
                            </div>
                        </form><!-- .xs-from 3xs-contact-form END -->
                    </div><!-- .contact-from-wraper END -->
                </div>
            </div><!-- .row END -->
        </div><!-- .container END -->
    </section><!-- end contact -->
    
    <!-- call to action section -->
    <section class="call-to-action-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="call-to-action-content">
                        <h2>Interested To Get Our Featured Service</h2>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="btn-wraper">
                        <a href="{{route('services')}}" class="btn btn-info icon-right"><i class="icon icon-arrow-right"></i>Get Started Now</a>
                    </div>
                </div>
            </div><!-- .row END -->
        </div><!-- .container END -->
    </section><!-- end call to action section -->
@endsection