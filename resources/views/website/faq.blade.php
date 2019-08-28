@extends('layouts.app')
@section('content')
    <section class="inner-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-banner-content">
                        <h1 class="inner-banner-title">Frequently Asked Questions</h1>
                        <ul class="breadcumbs list-inline">
                            <li><a href="{{route('index')}}">Home</a></li>
                            <li>FAQ</li>
                        </ul>
                        <span class="border-divider style-white"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-image" style="background-image:url('assets/images/backgrounds/background-1.jpg')"></div>
    </section>
    <div class="faq-accordion-area xs-section-padding pb-0" data-scrollax-parent="true">
        <div class="container">
            <div class="faq-accordion-group">
                <div class="row">
                    <div class="col-md-6 align-self-center">
                        <div class="accordion-wraper">
                            <!-- faq accordion strart -->
                            <div class="accordion faqAccordion" id="faqAccordion">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                    <a class="btn-link" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Question 1 ?
                                    </a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqAccordion">
                                    <div class="card-body">
                                        <p>Answer One</p>
                                    </div>
                                    </div>
                                </div><!-- question one -->
    
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                    <a class="btn-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                       Question 2
                                    </a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                                    <div class="card-body">
                                        <p>
                                            Question 2
                                        </p>
                                    </div>
                                    </div>
                                </div><!-- question two -->
    
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                    <a class="btn-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                       Question 3 ?
                                    </a>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqAccordion">
                                    <div class="card-body">
                                        <p>
                                            Answer 3
                                        </p>
                                    </div>
                                    </div>
                                </div><!-- question three -->
                            </div>                        <!-- end faq accordion -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="faq-img-wraper text-center">
                            <img src="assets/images/faq-people.png" alt="">
                        </div>
                    </div>
                </div><!-- .row END -->
            </div><!-- .faq-accordion-group END -->
        </div><!-- .container END -->
        <div class="doodle-parallax">
            <img src="assets/images/doodle/doodle-2.png" data-scrollax="properties: { translateY: '-100%' }" class="single-doodle one" alt="">
            <img src="assets/images/doodle/doodle-1.png" data-scrollax="properties: { translateY: '100%' }" class="single-doodle two" alt="">
            <img src="assets/images/doodle/doodle-1.png" data-scrollax="properties: { translateY: '-100%' }" class="single-doodle three" alt="">
        </div>
    </div><!-- end faq accordion -->
    
    <!-- faq question strart -->
    <div class="faq-question-area xs-section-padding pb-0" data-scrollax-parent="true">
        <div class="container">
            <div class="faq-question-wraper">
                <div class="row xs-faq-group">
                    <div class="col-md-6">
                        <div class="xs-single-faq">
                            <h2 class="faq-question">How long does it takes to process Dubai Visa ??</h2>
                            <p>
                                    The Processing of Dubai Visa usually take 3-4 days. you dont have to go to Abuja for thumbprinting
                            </p>
                        </div><!-- .xs-single-faq END -->
                        <div class="xs-single-faq">
                            <h2 class="faq-question">Do You offer Dubai Jobs ?</h2>
                            <p>
                                We do not offer jobs. However , we do have an 
                                agency that helps in sourcing jobs over there in Dubai and it usually take about 
                                a month to get the jobs suited for you
                            </p>
                        </div><!-- .xs-single-faq END -->
                        <div class="xs-single-faq">
                            <h2 class="faq-question">Do you have where i can stay when i get to Dubai ?</h2>
                            <p>
                                    Yes, we offer temporal accommodation in Dubai until you get your job and 
                                    accommodation. However, it comes with a monthly fee.
                            </p>
                        </div><!-- .xs-single-faq END -->
                        <div class="xs-single-faq">
                            <h2 class="faq-question">What other countries offers Jobs ?</h2>
                            <p>
                                Lebanon and Oman both offer jobs, but they are restricted 
                                to ladies only. Most of the jobs are house keeping jobs.
                            </p>
                        </div><!-- .xs-single-faq END -->
                    </div>
                    <div class="col-md-6">
                        <div class="xs-single-faq">
                            <h2 class="faq-question">What Other Countries do you process visa to ?</h2>
                            <p>
                                We also help you you process visa to the United States of America, Canada, Scheghen countries and South Africa..
                            </p>
                        </div><!-- .xs-single-faq END -->
                        <div class="xs-single-faq">
                            <h2 class="faq-question">How do I create an marketpress.com account?</h2>
                            <p>marketpress is the leading Business to Consumer e-commerce site. It is an online retail that enables anyone from anywhere in Bangladesh and from around the world to purchase different items/products through online.</p>
                        </div><!-- .xs-single-faq END -->
                        <div class="xs-single-faq">
                            <h2 class="faq-question">Am I billed as soon as I join marketpress.com?</h2>
                            <p>marketpress is the leading Business to Consumer e-commerce site. It is an online retail that enables anyone from anywhere in Bangladesh and from around the world to purchase different items/products through online.</p>
                        </div><!-- .xs-single-faq END -->
                        <div class="xs-single-faq">
                            <h2 class="faq-question">Why should I subscribe newsletter?</h2>
                            <p>marketpress is the leading Business to Consumer e-commerce site. It is an online retail that enables anyone from anywhere in Bangladesh and from around the world to purchase different items/products through online.</p>
                        </div><!-- .xs-single-faq END -->
                    </div>
                </div><!-- .faq-question-wraperrow END -->
            </div><!-- . END -->
        </div><!-- .container END -->
        <div class="doodle-parallax">
            <img src="assets/images/doodle/2.html" data-scrollax="properties: { translateY: '-100%' }" class="single-doodle one" alt="">
        </div>
    </div><!-- end faq question -->
    
    <!-- get support section -->
    <section class="xs-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="hiring-image">
                        <img src="assets/images/man-with-phone.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="hiring-content getSupport-content">
                        <h2><span>Don’t get any?</span> Our support team will assist you</h2>
                        <a href="tel:+1%20(854)%20254-4527" class="btn btn-primary style2 icon-left"><i class="icon icon-phone3"></i> + (234) 803 573 5599</a>
                    </div>
                </div>
            </div><!-- .row END -->
        </div><!-- .container END -->
    </section><!-- end get support section -->
@endsection