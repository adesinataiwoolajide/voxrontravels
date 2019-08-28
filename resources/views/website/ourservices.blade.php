@extends('layouts.app')
@section('content')
    <section class="inner-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-banner-content">
                        <h1 class="inner-banner-title">Our Services</h1>
                        <ul class="breadcumbs list-inline">
                            <li><a href="{{route('index')}}">Home</a></li>
                            <li>Our Services</li>
                        </ul>
                        <span class="border-divider style-white"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-image" style="background-image:url('assets/images/backgrounds/background-1.jpg')"></div>
    </section>
    
    
    <!-- service info block section start -->
    <section class="xs-section-padding gray-bg service-info-block-area">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="xs-heading text-center">
                        <h2 class="section-title">Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast</h2>
                    </div><!-- .xs-heading END -->
                </div>
            </div><!-- .row END -->
            <div class="row service-block-group">
                <div class="col-md-6 col-lg-3">
                    <div class="service-info-block text-center">
                        <div class="info-block-header">
                            <img src="assets/images/visa 2.png" alt="">
                        </div>
                        <h3 class="service-info-title">Visa Processing</h3>
                        <p>We process visa to the following countries.</p>
                    </div><!-- .service-info-block END -->
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-info-block text-center">
                        <div class="info-block-header">
                            <img src="assets/images/airline-ticketing.jpg" alt="" style="width:250px; height:220px">
                        </div>
                        <h3 class="service-info-title">Airline Ticket</h3>
                        <p>We help by booking your flight ticket.</p>
                    </div><!-- .service-info-block END -->
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-info-block text-center">
                        <div class="info-block-header">
                            <img src="assets/images/application.jpg" alt=""  style="width:250px; height:220px">
                        </div>
                        <h3 class="service-info-title">Travelling Consultant</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div><!-- .service-info-block END -->
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="service-info-block text-center">
                        <div class="info-block-header">
                            <img src="assets/images/hotel booking.jpg" alt="" style="width:250px; height:220px">
                        </div>
                        <h3 class="service-info-title">Hotel Booking</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div><!-- .service-info-block END -->
                </div>
            </div><!-- .row .service-block-group END -->
            
        </div><!-- .container END -->
    </section><!-- end service info block section -->
    
    <!-- our security section start -->
    <section class="xs-section-padding our-security-section waypoint-tigger" data-scrollax-parent="true">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="service-summary-img">
                        <img src="assets/images/visa.jpg" data-scrollax="properties: { translateY: '-20%' }" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-summary-text">
                        <div class="xs-heading">
                            <h2 class="section-title">Visa <span>Processing</span></h2>
                            <span class="line"></span>
                        </div><!-- .xs-heading END -->        
                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed</p>
                        <div class="piechats-wraper clearfix">
                            <div class="single-piechart">
                                <div class="chart" data-percent="76">
                                    <div class="chart-content"> 
                                        <p>Achieved</p>
                                    </div>
                                </div>
                            </div><!-- .single-piechart END -->
                            <div class="single-piechart">
                                <div class="chart" data-percent="93">
                                    <div class="chart-content"> 
                                        <p>Loaded</p>
                                    </div>
                                </div>
                            </div><!-- .single-piechart END -->
                            <div class="single-piechart">
                                <div class="chart" data-percent="85">
                                    <div class="chart-content"> 
                                        <p>Done</p>  
                                    </div>
                                </div>
                            </div><!-- .single-piechart END -->
                        </div>    
                    </div>
                </div>
            </div><!-- .row END -->
        </div><!-- .container END -->
    </section><!-- end our security section -->
    
    <!-- boosting section start -->
    <section class="xs-section-padding boosting-section waypoint-tigger" data-scrollax-parent="true">
        <div class="container">
            <div class="row service-info-wraper">
                <div class="col-lg-6">
                    <div class="service-summary-text service-summary-2">
                        <div class="xs-heading">
                            <h2 class="section-title">Travel  <span>Ticketing</span></h2>
                            <span class="line"></span>
                        </div><!-- .xs-heading END -->        
                        <div class="boosting-lists">
                            <div class="boosting-list">
                                <span class="count-number"></span>
                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet <a href="#">mornings</a> of spring which I enjoy with my whole heart. I am alone, and feel the charm</p>
                            </div><!-- .boosting-list END -->
                            <div class="boosting-list">
                                <span class="count-number"></span>
                                <p>I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a <a href="#">thousand unknown</a> plants are noticed by me: when I hear</p>
                            </div><!-- .boosting-list END -->
                        </div><!-- .boosting-lists END -->
                        <div class="btn-wraper">
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-summary-img">
                        <img src="assets/images/ticket 2.png" data-scrollax="properties: { translateY: '20%' }" alt="">
                    </div>
                </div>
            </div><!-- .row END -->
        </div><!-- .container END -->
    </section><!-- end boosting section -->
    
     <!-- our security section start -->
     <section class="xs-section-padding our-security-section waypoint-tigger" data-scrollax-parent="true">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="service-summary-img">
                            <img src="assets/images/service-summary-1.png" data-scrollax="properties: { translateY: '-20%' }" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="service-summary-text">
                            <div class="xs-heading">
                                <h2 class="section-title">Travelling  <span>Consultant</span></h2>
                                <span class="line"></span>
                            </div><!-- .xs-heading END -->        
                            <p>
                                Few details here
                            </p>
                            <div class="piechats-wraper clearfix">
                                <div class="single-piechart">
                                    <div class="chart" data-percent="76">
                                        <div class="chart-content"> 
                                            <p>Achieved</p>
                                        </div>
                                    </div>
                                </div><!-- .single-piechart END -->
                                <div class="single-piechart">
                                    <div class="chart" data-percent="93">
                                        <div class="chart-content"> 
                                            <p>Loaded</p>
                                        </div>
                                    </div>
                                </div><!-- .single-piechart END -->
                                <div class="single-piechart">
                                    <div class="chart" data-percent="85">
                                        <div class="chart-content"> 
                                            <p>Done</p>  
                                        </div>
                                    </div>
                                </div><!-- .single-piechart END -->
                            </div>    
                        </div>
                    </div>
                </div><!-- .row END -->
            </div><!-- .container END -->
        </section><!-- end our security section -->
        
        <!-- boosting section start -->
        <section class="xs-section-padding boosting-section waypoint-tigger" data-scrollax-parent="true">
            <div class="container">
                <div class="row service-info-wraper">
                    <div class="col-lg-6">
                        <div class="service-summary-text service-summary-2">
                            <div class="xs-heading">
                                <h2 class="section-title">Hotel <span> Booking</span></h2>
                                <span class="line"></span>
                            </div><!-- .xs-heading END -->        
                            <div class="boosting-lists">
                                <div class="boosting-list">
                                    <span class="count-number"></span>
                                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet <a href="#">mornings</a> of spring which I enjoy with my whole heart. I am alone, and feel the charm</p>
                                </div><!-- .boosting-list END -->
                                <div class="boosting-list">
                                    <span class="count-number"></span>
                                    <p>I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a <a href="#">thousand unknown</a> plants are noticed by me: when I hear</p>
                                </div><!-- .boosting-list END -->
                            </div><!-- .boosting-lists END -->
                            <div class="btn-wraper">
                                <a href="#" class="btn btn-primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="service-summary-img">
                            <img src="assets/images/hotel.png" data-scrollax="properties: { translateY: '20%' }" alt="">
                        </div>
                    </div>
                </div><!-- .row END -->
            </div><!-- .container END -->
        </section><!-- end boosting section -->
    
    <!-- testimonials section -->
    <section class="xs-section-padding testimonial-section" id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mx-auto">
                    <div class="xs-heading text-center">
                        <h2 class="section-subtitle">Client’s love</h2>
                        <h3 class="section-title ">Love from Clients</h3>
                    </div><!-- .xs-heading END -->
                </div>
            </div><!-- .row END -->
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="testimonial-slider-preview owl-carousel" id="sync3">
                        <div class="single-testimonial-preview">
                            <p>“ We work systematically to integrated corporate responsibility in our corein business and make our expertise available for the benefit ”</p>
                            <span class="border-line"></span>
                        </div><!-- .single-testimonial-preview END -->
                        <div class="single-testimonial-preview">
                            <p>“ We work systematically to integrated corporate responsibility in our corein business and make our expertise available for the benefit We work systematically to integrated corporate responsibility in our corein business and make our expertise available for the benefit ”</p>
                            <span class="border-line"></span>
                        </div><!-- .single-testimonial-preview END -->
                        <div class="single-testimonial-preview">
                            <p>“ We work systematically to integrated corporate responsibility in our corein business and make our expertise available for the benefit ”</p>
                            <span class="border-line"></span>
                        </div><!-- .single-testimonial-preview END -->
                        <div class="single-testimonial-preview">
                            <p>“ We work systematically to integrated corporate responsibility in our corein business and make our expertise available for the benefit We work systematically to integrated corporate responsibility in our corein business and make our expertise available for the benefit ”</p>
                            <span class="border-line"></span>
                        </div><!-- .single-testimonial-preview END -->
                    </div>
                    <div class="testimonial-slider-thumb owl-carousel" id="sync4">
                        <div class="single-bio-thumb">
                            <div class="bio-image">
                                <img src="assets/images/testimonial/testimonial-1.jpg" alt="">
                            </div>
                            <div class="bio-info">
                                <h4 class="small">Sir Pobon</h4>
                                <p>Finance Head</p>
                            </div>
                        </div><!-- .single-bio-thumb END -->
                        <div class="single-bio-thumb">
                            <div class="bio-image">
                                <img src="assets/images/testimonial/testimonial-2.jpg" alt="">
                            </div>
                            <div class="bio-info">
                                <h4 class="small">Sir Pobon</h4>
                                <p>Finance Head</p>
                            </div>
                        </div><!-- .single-bio-thumb END -->
                        <div class="single-bio-thumb">
                            <div class="bio-image">
                                <img src="assets/images/testimonial/testimonial-3.jpg" alt="">
                            </div>
                            <div class="bio-info">
                                <h4 class="small">Sir Pobon</h4>
                                <p>Finance Head</p>
                            </div>
                        </div><!-- .single-bio-thumb END -->
                        <div class="single-bio-thumb">
                            <div class="bio-image">
                                <img src="assets/images/testimonial/testimonial-4.jpg" alt="">
                            </div>
                            <div class="bio-info">
                                <h4 class="small">Sir Pobon</h4>
                                <p>Finance Head</p>
                            </div>
                        </div><!-- .single-bio-thumb END -->
                    </div>
                </div>
            </div><!-- .row END -->
        </div><!-- .container END -->
        <div class="big-watermark-icon small-version">
            <i class="icon icon-quote"></i>
        </div>
    </section><!-- END testimonials section -->
    
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
                        <a href="contact.html" class="btn btn-info icon-right"><i class="icon icon-arrow-right"></i>Get Started Now</a>
                    </div>
                </div>
            </div><!-- .row END -->
        </div><!-- .container END -->
    </section><!-- end call to action section -->
@endsection