@extends('layouts.app')
@section('content')
    @include('layouts.slider')

   <!-- why choose section -->
<section class="why-choose-section xs-section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mx-auto">
                <div class="xs-heading text-center">
                    <h2 class="section-subtitle">Best SEO</h2>
                    <h3 class="section-title ">Why Choose us</h3>
                </div><!-- .xs-heading END -->
            </div>
        </div><!-- .row END -->
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="why-choose-us-block wow fadeInUp">
                    <div class="choose-us-img">
                        <img src="{{asset('assets/images/features/features-1.png')}}" alt="hostinza hosting image">
                    </div>
                    <h4 class="xs-content-title">High-End Anaylizing</h4>
                    <p>Share processes and data secure <br> lona need to know basis</p>
                </div><!-- .why-choose-us-block END -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="why-choose-us-block wow fadeInUp" data-wow-duration="1.5s">
                    <div class="choose-us-img">
                        <img src="{{asset('assets/images/features/features-2.png')}}" alt="hostinza hosting image">
                    </div>
                    <h4 class="xs-content-title">Excellence Track Record</h4>
                    <p>Our team assured your web site is always safe and secure</p>
                </div><!-- .why-choose-us-block END -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="why-choose-us-block wow fadeInUp" data-wow-duration="2s">
                    <div class="choose-us-img">
                        <img src="{{asset('assets/images/features/features-3.png')}}" alt="hostinza hosting image">
                    </div>
                    <h4 class="xs-content-title">Our Dedicated Support</h4>
                    <p>We finally found a host that truly understood the unique</p>
                </div><!-- .why-choose-us-block END -->
            </div>
        </div>
    </div><!-- .container END -->
</section><!-- END why choose section -->

<!-- get free quote section -->
<section class="primary-bg xs-section-padding free-quote-area" data-delighter="start:0.3">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="xs-heading text-center">
                    <h2 class="section-subtitle">Ready to grow</h2>
                    <h3 class="section-title ">Get your free quote today</h3>
                </div><!-- .xs-heading END -->
            </div>
        </div><!-- .row END -->
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <form action="#" class="xs-inline-form" method="post">
                    <div class="row no-gutters">
                        <div class="col-lg-6">
                            <input type="url" name="website" id="website" placeholder="Web URL" class="form-control">
                        </div>
                        <div class="col-lg-6">
                            <input type="email" name="email" id="emails" placeholder="Email Address" class="form-control">
                        </div>
                    </div>
                    <input type="submit" name="submit" value="Check" class="check-btn">
                </form>
            </div>
        </div><!-- .row END -->
    </div><!-- .container END -->
    <div class="parallax-icon-wraper">
        <img src="{{asset('assets/images/hand-bloom.png')}}" class="parallax-icon icon-one" alt="">
        <img src="{{asset('assets/images/chart.png')}}" class="parallax-icon icon-two" alt="">
    </div>
</section><!-- end get free quote section -->

<!-- seo info section -->
<section class="xs-section-padding xs-seo-info" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="xs-info-img">
                    <img src="{{asset('assets/images/info/info-1.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="xs-info-wraper wow fadeInUp">
                    <div class="xs-heading">
                        <h3 class="section-title">Get best plans for more Power</h3>
                        <span class="line"></span>
                    </div>
                    <p>Our best-in-class WordPress solution, with additional optimization to make running a WooCommerce online store easy. Our prices are clear and straight forward so you can</p>
                    <ul class="xs-list check">
                        <li>We've been supporting WordPress since the beginning.</li>
                        <li>Perfect for large sites or agencies managing multiple clients.</li>
                        <li>Our easy-to-use control panel and API let you spend</li>
                    </ul>
                    <a href="#" class="btn btn-secondary">Get Started</a>
                </div><!-- .xs-info-wraper END -->
            </div>
        </div><!-- .row END -->
    </div><!-- .container END -->
</section><!-- END seo info section -->

<!-- working process section -->
<section class="xs-section-padding primary-bg working-process-anim">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="xs-heading text-center">
                    <h2 class="section-subtitle">Work Flow</h2>
                    <h3 class="section-title ">Our Working Process</h3>
                </div><!-- .xs-heading END -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="row no-gutters working-process-group">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-work-process">
                            <div class="work-process-icon">
                                <img src="{{asset('assets/images/work-process/1.png')}}" alt="">
                            </div>
                            <h4 class="small">Planning</h4>
                        </div><!-- .single-work-process END -->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-work-process">
                            <div class="work-process-icon">
                                <img src="{{asset('assets/images/work-process/2.png')}}" alt="">
                            </div>
                            <h4 class="small">Research</h4>
                        </div><!-- .single-work-process END -->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-work-process">
                            <div class="work-process-icon">
                                <img src="{{asset('assets/images/work-process/3.png')}}" alt="">
                            </div>
                            <h4 class="small">Optimizing</h4>
                        </div><!-- .single-work-process END -->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-work-process">
                            <div class="work-process-icon">
                                <img src="{{asset('assets/images/work-process/4.png')}}" alt="">
                            </div>
                            <h4 class="small">Results</h4>
                        </div><!-- .single-work-process END -->
                    </div>
                </div><!-- .row end -->
            </div>
        </div><!-- .row END -->
    </div><!-- .container END -->
</section><!-- END working process section -->

<!-- services section -->
<section class="xs-section-padding" id="service">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="xs-heading text-center style2">
                    <h2 class="section-subtitle">BEST SEO</h2>
                    <h3 class="section-title">Services We Provide</h3>
                    <span class="line"></span>
                </div><!-- .xs-heading END -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav nav-tabs main-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="tab-one-area" data-toggle="tab" href="#tab-one" role="tab" aria-controls="tab-one" aria-selected="true"><span class="icon-holder"><img src="{{asset('assets/images/service-tab/icon-1.png')}}" alt=""></span> Real Time Analytics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tab-two-area" data-toggle="tab" href="#tab-two" role="tab" aria-controls="tab-two" aria-selected="false"><span class="icon-holder"><img src="{{asset('assets/images/service-tab/icon-2.png')}}" alt=""></span> Online Marketing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tab-three-area" data-toggle="tab" href="#tab-three" role="tab" aria-controls="tab-three" aria-selected="false"><span class="icon-holder"><img src="{{asset('assets/images/service-tab/icon-3.png')}}" alt=""></span> Pay Per Click</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tab-four-area" data-toggle="tab" href="#tab-four" role="tab" aria-controls="tab-four" aria-selected="false"><span class="icon-holder"><img src="{{asset('assets/images/service-tab/icon-4.png')}}" alt=""></span> Email Marketing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tab-five-area" data-toggle="tab" href="#tab-five" role="tab" aria-controls="tab-five" aria-selected="false"><span class="icon-holder"><img src="{{asset('assets/images/service-tab/icon-5.png')}}" alt=""></span> Social Marketing</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fadeInRight animated show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one-area">
                        <div class="single-service-preview">
                            <div class="row">
                                <div class="col-lg-5 col-md-6">
                                    <div class="service-preview-img">
                                        <img src="{{asset('assets/images/service-tab/preview-1.png')}}" alt="">
                                    </div><!-- .service-preview-img END -->
                                </div>
                                <div class="col-lg-7 col-md-6">
                                    <div class="service-preview-content">
                                        <h4 class="xs-content-title">Real Time Analytics</h4>
                                        <p>We work systematically to integrate corporate responsibility in our core business and make our expertise available for the benefit of the societies where we operate. </p>
                                        <p>A successful website obviously needs great design to be one of the top 10 IT companies in India, but the web design is not enough.</p>
                                        <div class="btn-wraper">
                                            <a href="#" class="btn btn-primary">Know more</a>
                                        </div>
                                    </div><!-- .service-preview-content END -->
                                </div>
                            </div><!-- .row END -->
                        </div><!-- .single-service-preview END -->
                    </div><!-- #tab-one END -->

                    <div class="tab-pane fadeInRight animated" id="tab-two" role="tabpanel" aria-labelledby="tab-two-area">
                        <div class="single-service-preview">
                            <div class="row">
                                <div class="col-lg-5 col-md-6">
                                    <div class="service-preview-img">
                                        <img src="{{asset('assets/images/service-tab/preview-2.png')}}" alt="">
                                    </div><!-- .service-preview-img END -->
                                </div>
                                <div class="col-lg-7 col-md-6">
                                    <div class="service-preview-content">
                                        <h4 class="xs-content-title">Online Marketing</h4>
                                        <p>We work systematically to integrate corporate responsibility in our core business and make our expertise available for the benefit of the societies where we operate. </p>
                                        <p>A successful website obviously needs great design to be one of the top 10 IT companies in India, but the web design is not enough.</p>
                                        <div class="btn-wraper">
                                            <a href="#" class="btn btn-primary">Know more</a>
                                        </div>
                                    </div><!-- .service-preview-content END -->
                                </div>
                            </div><!-- .row END -->
                        </div><!-- .single-service-preview END -->
                    </div><!-- #tab-two END -->

                    <div class="tab-pane fadeInRight animated" id="tab-three" role="tabpanel" aria-labelledby="tab-three-area">
                        <div class="single-service-preview">
                            <div class="row">
                                <div class="col-lg-5 col-md-6">
                                    <div class="service-preview-img">
                                        <img src="{{asset('assets/images/service-tab/preview-3.png')}}" alt="">
                                    </div><!-- .service-preview-img END -->
                                </div>
                                <div class="col-lg-7 col-md-6">
                                    <div class="service-preview-content">
                                        <h4 class="xs-content-title">Pay Per Click</h4>
                                        <p>We work systematically to integrate corporate responsibility in our core business and make our expertise available for the benefit of the societies where we operate. </p>
                                        <p>A successful website obviously needs great design to be one of the top 10 IT companies in India, but the web design is not enough.</p>
                                        <div class="btn-wraper">
                                            <a href="#" class="btn btn-primary">Know more</a>
                                        </div>
                                    </div><!-- .service-preview-content END -->
                                </div>
                            </div><!-- .row END -->
                        </div><!-- .single-service-preview END -->
                    </div><!-- #tab-three END -->

                    <div class="tab-pane fadeInRight animated" id="tab-four" role="tabpanel" aria-labelledby="tab-four-area">
                        <div class="single-service-preview">
                            <div class="row">
                                <div class="col-lg-5 col-md-6">
                                    <div class="service-preview-img">
                                        <img src="{{asset('assets/images/service-tab/preview-4.png')}}" alt="">
                                    </div><!-- .service-preview-img END -->
                                </div>
                                <div class="col-lg-7 col-md-6">
                                    <div class="service-preview-content">
                                        <h4 class="xs-content-title">Email Marketing</h4>
                                        <p>We work systematically to integrate corporate responsibility in our core business and make our expertise available for the benefit of the societies where we operate. </p>
                                        <p>A successful website obviously needs great design to be one of the top 10 IT companies in India, but the web design is not enough.</p>
                                        <div class="btn-wraper">
                                            <a href="#" class="btn btn-primary">Know more</a>
                                        </div>
                                    </div><!-- .service-preview-content END -->
                                </div>
                            </div><!-- .row END -->
                        </div><!-- .single-service-preview END -->
                    </div><!-- #tab-four END -->

                    <div class="tab-pane fadeInRight animated" id="tab-five" role="tabpanel" aria-labelledby="tab-five-area">
                        <div class="single-service-preview">
                            <div class="row">
                                <div class="col-lg-5 col-md-6">
                                    <div class="service-preview-img">
                                        <img src="{{asset('assets/images/service-tab/preview-5.png')}}" alt="">
                                    </div><!-- .service-preview-img END -->
                                </div>
                                <div class="col-lg-7 col-md-6">
                                    <div class="service-preview-content">
                                        <h4 class="xs-content-title">Social Marketing  </h4>
                                        <p>We work systematically to integrate corporate responsibility in our core business and make our expertise available for the benefit of the societies where we operate. </p>
                                        <p>A successful website obviously needs great design to be one of the top 10 IT companies in India, but the web design is not enough.</p>
                                        <div class="btn-wraper">
                                            <a href="#" class="btn btn-primary">Know more</a>
                                        </div>
                                    </div><!-- .service-preview-content END -->
                                </div>
                            </div><!-- .row END -->
                        </div><!-- .single-service-preview END -->
                    </div><!-- #tab-five END -->
                </div>
            </div>
        </div><!-- .row END -->
    </div><!-- .container END -->
</section><!-- END services section -->

<!-- services section -->
<section class="xs-section-padding gray-bg" id="case">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mx-auto">
                <div class="xs-heading text-center">
                    <h2 class="section-subtitle">Previous Projects</h2>
                    <h3 class="section-title ">Our Case Studies</h3>
                </div><!-- .xs-heading END -->
            </div>
        </div><!-- .row END -->
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-case-studies text-center wow fadeInUp">
                    <div class="image">
                        <img src="{{asset('assets/images/case/case-1.png')}}" alt="">
                    </div>
                    <div class="case-body">
                        <h4 class="small"><a href="case-details.html">Million visitor growth</a></h4>
                        <p>Visitor, Sales</p>
                    </div>
                </div><!-- .single-case-studies END -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-case-studies text-center wow fadeInUp" data-wow-duration="1.2s">
                    <div class="image">
                        <img src="{{asset('assets/images/case/case-2.png')}}" alt="">
                    </div>
                    <div class="case-body">
                        <h4 class="small"><a href="case-details.html">Twice profit than before</a></h4>
                        <p>Marketing, SEO</p>
                    </div>
                </div><!-- .single-case-studies END -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-case-studies text-center wow fadeInUp" data-wow-duration="1.4s">
                    <div class="image">
                        <img src="{{asset('assets/images/case/case-3.png')}}" alt="">
                    </div>
                    <div class="case-body">
                        <h4 class="small"><a href="case-details.html">Built web faster & better</a></h4>
                        <p>Marketing, Web</p>
                    </div>
                </div><!-- .single-case-studies END -->
            </div>
        </div><!-- .row END -->
    </div><!-- .container END -->
</section><!-- END services section -->

<!-- pricing section -->
<section class="pricing-section xs-section-padding" id="pricing">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mx-auto">
                <div class="xs-heading text-center">
                    <h2 class="section-subtitle">Best Pricing</h2>
                    <h3 class="section-title ">Our Pricing Plans</h3>
                </div><!-- .xs-heading END -->
            </div>
        </div><!-- .row END -->
        <div class="row">
            <div class="col-md-12 xs-pricing-group">
                <ul class="nav nav-tabs main-nav-tab tab-swipe wow fadeIn" role="tablist">
                    <li>
                        <a id="monthly-tab" class="active show" data-toggle="tab" href="#monthly" role="tab" aria-controls="monthly" aria-selected="true">Monthly</a>
                    </li>
                    <li>
                        <a id="yearly-tab" data-toggle="tab" href="#yearly" role="tab" aria-controls="yearly" aria-selected="false">Yearly</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fadeIn animated show active" id="monthly" role="tabpanel" aria-labelledby="monthly-tab">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="xs-single-pricing">
                                    <div class="pricing-header">
                                        <h3 class="xs-content-title">Starter Plan</h3>
                                        <div class="pricing-img-block">
                                            <img src="{{asset('assets/images/pricing/pricing-1.png')}}" alt="hostinza pricing image">
                                        </div>
                                        <h2 class="price-table"><sup>$</sup>49.99 <sub>/mo</sub></h2>
                                    </div><!-- .pricing-header END -->
                                    <div class="pricing-body">
                                        <ul class="xs-list">
                                            <li>Increase traffic 130%</li>
                                            <li>Backlink analysis</li>
                                            <li>Organic traffic 215%</li>
                                            <li>10 Free Optimization</li>
                                            <li>24/7 support</li>
                                        </ul>
                                    </div><!-- .pricing-body END -->
                                    <div class="pricing-footer">
                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                    </div><!-- .pricing-footer END -->
                                    <div class="pulse-anim"></div>
                                </div><!-- .xs-single-pricing END -->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="xs-single-pricing active">
                                    <div class="pricing-header">
                                        <h3 class="xs-content-title">Basic Plan</h3>
                                        <div class="pricing-img-block">
                                            <img src="{{asset('assets/images/pricing/pricing-2.png')}}" alt="hostinza pricing image">
                                        </div>
                                        <h2 class="price-table"><sup>$</sup>69.99 <sub>/mo</sub></h2>
                                    </div><!-- .pricing-header END -->
                                    <div class="pricing-body">
                                        <ul class="xs-list">
                                            <li>25 Analytics Compaign</li>
                                            <li>1,300 Keywords</li>
                                            <li>25 social media reviews</li>
                                            <li>1 Free Optimization</li>
                                            <li>24/7 support</li>
                                        </ul>
                                    </div><!-- .pricing-body END -->
                                    <div class="pricing-footer">
                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                    </div><!-- .pricing-footer END -->
                                    <div class="pulse-anim"></div>
                                </div><!-- .xs-single-pricing END -->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="xs-single-pricing">
                                    <div class="pricing-header">
                                        <h3 class="xs-content-title">Business Plan</h3>
                                        <div class="pricing-img-block">
                                            <img src="{{asset('assets/images/pricing/pricing-3.png')}}" alt="hostinza pricing image">
                                        </div>
                                        <h2 class="price-table"><sup>$</sup>49.99 <sub>/mo</sub></h2>
                                    </div><!-- .pricing-header END -->
                                    <div class="pricing-body">
                                        <ul class="xs-list">
                                            <li>Increase traffic 130%</li>
                                            <li>Backlink analysis</li>
                                            <li>Organic traffic 215%</li>
                                            <li>10 Free Optimization</li>
                                            <li>24/7 support</li>
                                        </ul>
                                    </div><!-- .pricing-body END -->
                                    <div class="pricing-footer">
                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                    </div><!-- .pricing-footer END -->
                                    <div class="pulse-anim"></div>
                                </div><!-- .xs-single-pricing END -->
                            </div>
                        </div>
                    </div><!-- #monthly END -->
                    <div class="tab-pane fadeIn animated" id="yearly" role="tabpanel" aria-labelledby="yearly-tab">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="xs-single-pricing">
                                    <div class="pricing-header">
                                        <h3 class="xs-content-title">Basic Plan</h3>
                                        <div class="pricing-img-block">
                                            <img src="{{asset('assets/images/pricing/pricing-1.png')}}" alt="hostinza pricing image">
                                        </div>
                                        <h2 class="price-table"><sup>$</sup>10.99 <sub>/mo</sub></h2>
                                    </div><!-- .pricing-header END -->
                                    <div class="pricing-body">
                                        <ul class="xs-list">
                                            <li>Increase traffic 130%</li>
                                            <li>Backlink analysis</li>
                                            <li>Organic traffic 215%</li>
                                            <li>10 Free Optimization</li>
                                            <li>24/7 support</li>
                                        </ul>
                                    </div><!-- .pricing-body END -->
                                    <div class="pricing-footer">
                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                    </div><!-- .pricing-footer END -->
                                    <div class="pulse-anim"></div>
                                </div><!-- .xs-single-pricing END -->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="xs-single-pricing active">
                                    <div class="pricing-header">
                                        <h3 class="xs-content-title">Advanced Plan</h3>
                                        <div class="pricing-img-block">
                                            <img src="{{asset('assets/images/pricing/pricing-2.png')}}" alt="hostinza pricing image">
                                        </div>
                                        <h2 class="price-table"><sup>$</sup>30.99 <sub>/mo</sub></h2>
                                    </div><!-- .pricing-header END -->
                                    <div class="pricing-body">
                                        <ul class="xs-list">
                                            <li>25 Analytics Compaign</li>
                                            <li>1,300 Keywords</li>
                                            <li>25 social media reviews</li>
                                            <li>1 Free Optimization</li>
                                            <li>24/7 support</li>
                                        </ul>
                                    </div><!-- .pricing-body END -->
                                    <div class="pricing-footer">
                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                    </div><!-- .pricing-footer END -->
                                    <div class="pulse-anim"></div>
                                </div><!-- .xs-single-pricing END -->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="xs-single-pricing">
                                    <div class="pricing-header">
                                        <h3 class="xs-content-title">Business Plan</h3>
                                        <div class="pricing-img-block">
                                            <img src="{{asset('assets/images/pricing/pricing-3.png')}}" alt="hostinza pricing image">
                                        </div>
                                        <h2 class="price-table"><sup>$</sup>50.00 <sub>/mo</sub></h2>
                                    </div><!-- .pricing-header END -->
                                    <div class="pricing-body">
                                        <ul class="xs-list">
                                            <li>Increase traffic 130%</li>
                                            <li>Backlink analysis</li>
                                            <li>Organic traffic 215%</li>
                                            <li>10 Free Optimization</li>
                                            <li>24/7 support</li>
                                        </ul>
                                    </div><!-- .pricing-body END -->
                                    <div class="pricing-footer">
                                        <a href="#" class="btn btn-primary">Buy Now</a>
                                    </div><!-- .pricing-footer END -->
                                    <div class="pulse-anim"></div>
                                </div><!-- .xs-single-pricing END -->
                            </div>
                        </div>
                    </div><!-- #yearly END -->
                </div>
            </div>
        </div><!-- .row END -->
    </div><!-- .container END -->
</section><!-- END pricing section -->

<!-- testimonials section -->
<section class="xs-section-padding primary-bg testimonial-section" id="testimonial">
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
                <div class="testimonial-slider-preview owl-carousel" id="sync1">
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
                <div class="testimonial-slider-thumb owl-carousel" id="sync2">
                    <div class="single-bio-thumb">
                        <div class="bio-image">
                            <img src="{{asset('assets/images/testimonial/testimonial-1.jpg')}}" alt="">
                        </div>
                        <div class="bio-info">
                            <h4 class="small">Sir Pobon</h4>
                            <p>Finance Head</p>
                        </div>
                    </div><!-- .single-bio-thumb END -->
                    <div class="single-bio-thumb">
                        <div class="bio-image">
                            <img src="{{asset('assets/images/testimonial/testimonial-2.jpg')}}" alt="">
                        </div>
                        <div class="bio-info">
                            <h4 class="small">Sir Pobon</h4>
                            <p>Finance Head</p>
                        </div>
                    </div><!-- .single-bio-thumb END -->
                    <div class="single-bio-thumb">
                        <div class="bio-image">
                            <img src="{{asset('assets/images/testimonial/testimonial-3.jpg')}}" alt="">
                        </div>
                        <div class="bio-info">
                            <h4 class="small">Sir Pobon</h4>
                            <p>Finance Head</p>
                        </div>
                    </div><!-- .single-bio-thumb END -->
                    <div class="single-bio-thumb">
                        <div class="bio-image">
                            <img src="{{asset('assets/images/testimonial/testimonial-4.jpg')}}" alt="">
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
    <div class="big-watermark-icon">
        <i class="icon icon-quote"></i>
    </div>
</section><!-- END testimonials section -->

<!-- latest media section -->
<section class="xs-section-padding gray-bg" id="blogs">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mx-auto">
                <div class="xs-heading text-center">
                    <h2 class="section-subtitle">Latest News</h2>
                    <h3 class="section-title ">Our Latest Media</h3>
                </div><!-- .xs-heading END -->
            </div>
        </div><!-- .row END -->
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post-thumb">
                    <div class="post-image">
                        <img src="{{asset('assets/images/blog/blog-1.jpg')}}" alt="">
                    </div>
                    <div class="post-body">
                        <div class="entry-header">
                            <h4 class="entry-title"><a href="blog-single.html">Twice profit than before you ever got in business</a></h4>
                            <div class="entry-content">
                                <p>Join our award winning teams thats enjoy </p>
                            </div>
                            <div class="entry-meta">
                                <span class="meta-date"><i class="icon icon-clock"></i> January 14, 2018</span>
                            </div>
                        </div>
                    </div>
                </div><!-- .single-blog-post-thumb END -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post-thumb">
                    <div class="post-image">
                        <img src="{{asset('assets/images/blog/blog-2.jpg')}}" alt="">
                    </div>
                    <div class="post-body">
                        <div class="entry-header">
                            <h4 class="entry-title"><a href="blog-single.html">Twice profit than before you ever got in business</a></h4>
                            <div class="entry-content">
                                <p>Join our award winning teams thats enjoy </p>
                            </div>
                            <div class="entry-meta">
                                <span class="meta-date"><i class="icon icon-clock"></i> January 14, 2018</span>
                            </div>
                        </div>
                    </div>
                </div><!-- .single-blog-post-thumb END -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="newsletter-thumb-wraper">
                    <i class="icon icon-message fly-icons"></i>
                    <div class="newsletter-thumb-content">
                        <h4 class=xs-content-title>Get Newsletter</h4>
                        <p>Enter your email in the box below to receive latest news and information about our activities</p>
                        <form action="#" method="POST" class="subscribe-form2">
                            <input type="email" class="form-control" name="email" placeholder="Email" id="newsletter-thumb">
                            <label for="newsletter-thumb"></label>
                            <input type="submit" class="submit-btn" value="Submit now">
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- .row END -->
    </div><!-- .container END -->
</section><!-- END latest media section -->
@endsection