@extends('layouts.app')
@section('content')
    <section class="inner-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-banner-content">
                        <h1 class="inner-banner-title">Meet Our Team</h1>
                        <ul class="breadcumbs list-inline">
                            <li><a href="{{route('index')}}">Home</a></li>
                            <li>Our Team</li>
                        </ul>
                        <span class="border-divider style-white"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-image" style="background-image:url('assets/images/backgrounds/background-1.jpg')"></div>
    </section>
    <!--breadcumb end here--><!-- inner banenr end -->
    
    <!-- team section -->
    <section class="xs-section-padding">
        <div class="container">
            <div class="row team-inner-style">
                <div class="col-lg-3 col-md-6">
                    <div class="single-box text-center">
                        <div class="image">
                            <img src="{{asset('assets/images/team/team-5.jpg')}}" alt="">
                            <div class="hover-area">
                                <h2 class="title"><a href="#">Name</a></h2>
                                <p class="description">Position</p>
                                <span class="line"></span>
                                <ul class="xs-list list-inline">
                                    <li><a href="https://www.facebook.com/"><i class="icon icon-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/"><i class="icon icon-twitter"></i></a></li>
                                    <li><a href="https://plus.google.com/discover"><i class="icon icon-google-plus"></i></a></li>
                                    <li><a href="https://bd.linkedin.com/"><i class="icon icon-linkedin"></i></a></li>
                                </ul>
                            </div><!-- .hover-area END -->
                        </div><!-- .image END -->
                        <div class="box-footer">
                            <h2 class="title"><a href="#">Name</a></h2>
                        </div><!-- .box-footer END -->
                    </div><!-- .single-box END -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-box text-center">
                        <div class="image">
                            <img src="{{asset('assets/images/team/team-6.jpg')}}" alt="">
                            <div class="hover-area">
                                <h2 class="title"><a href="#">Name</a></h2>
                                <p class="description">Position</p>
                                <span class="line"></span>
                                <ul class="xs-list list-inline">
                                    <li><a href="https://www.facebook.com/"><i class="icon icon-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/"><i class="icon icon-twitter"></i></a></li>
                                    <li><a href="https://plus.google.com/discover"><i class="icon icon-google-plus"></i></a></li>
                                    <li><a href="https://bd.linkedin.com/"><i class="icon icon-linkedin"></i></a></li>
                                </ul>
                            </div><!-- .hover-area END -->
                        </div><!-- .image END -->
                        <div class="box-footer">
                            <h2 class="title"><a href="#">Name</a></h2>
                        </div><!-- .box-footer END -->
                    </div><!-- .single-box END -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-box text-center">
                        <div class="image">
                            <img src="{{asset('assets/images/team/team-7.jpg')}}" alt="">
                            <div class="hover-area">
                                <h2 class="title"><a href="#">Name</a></h2>
                                <p class="description">Position</p>
                                <span class="line"></span>
                                <ul class="xs-list list-inline">
                                    <li><a href="https://www.facebook.com/"><i class="icon icon-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/"><i class="icon icon-twitter"></i></a></li>
                                    <li><a href="https://plus.google.com/discover"><i class="icon icon-google-plus"></i></a></li>
                                    <li><a href="https://bd.linkedin.com/"><i class="icon icon-linkedin"></i></a></li>
                                </ul>
                            </div><!-- .hover-area END -->
                        </div><!-- .image END -->
                        <div class="box-footer">
                            <h2 class="title"><a href="#">Name</a></h2>
                        </div><!-- .box-footer END -->
                    </div><!-- .single-box END -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-box text-center">
                        <div class="image">
                            <img src="{{asset('assets/images/team/team-8.jpg')}}" alt="">
                            <div class="hover-area">
                                <h2 class="title"><a href="#">Name</a></h2>
                                <p class="description">Position</p>
                                <span class="line"></span>
                                <ul class="xs-list list-inline">
                                    <li><a href="https://www.facebook.com/"><i class="icon icon-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/"><i class="icon icon-twitter"></i></a></li>
                                    <li><a href="https://plus.google.com/discover"><i class="icon icon-google-plus"></i></a></li>
                                    <li><a href="https://bd.linkedin.com/"><i class="icon icon-linkedin"></i></a></li>
                                </ul>
                            </div><!-- .hover-area END -->
                        </div><!-- .image END -->
                        <div class="box-footer">
                            <h2 class="title"><a href="#">Name</a></h2>
                        </div><!-- .box-footer END -->
                    </div><!-- .single-box END -->
                </div>
                
            </div><!-- .row END -->
        </div><!-- .container END -->
    </section><!-- END team section -->
    
    <!-- we are hiring section -->
    <section class="xs-section-padding pt-0">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="hiring-image">
                        <img src="assets/images/man-with-phone.jpg" alt="">
                    </div>
                </div>
                <div class="hiring-content getSupport-content">
                    <h2><span>Don’t get any?</span> Our support team will assist you</h2>
                    <a href="tel:+1%20(854)%20254-4527" class="btn btn-primary style2 icon-left"><i class="icon icon-phone3"></i> + (234) 803 573 5599</a>
                </div>
            </div><!-- .row END -->
        </div><!-- .container END -->
    </section><!-- end we are hiring section -->
@endsection