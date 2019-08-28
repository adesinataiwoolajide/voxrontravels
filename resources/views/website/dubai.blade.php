@extends('layouts.app')
@section('content')
<section class="breadcrumb-area" style="background-image:url(img/bg/bc.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="breadcrumb-wrap">
                    <div class="breadcrumb-title">
                        <h2>Dubai must-see tourist attractions
                            </h2>
                    </div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dubai must-see tourist attractions
                                </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="blog-inner-page pt-100 pb-100">
    <div class="container">
        <div class="row">
           <p>Dubai is a city that must be seen to be believed.

                Here are the top places to tick off your sightseeing list when you’re in town.</p>
            <div class="col-lg-12 col-md-4">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="blog-wrapper blog-border mb-30">
                            <div class="blog-thumb">
                                <img src="{{asset('img/Burj Khalifa.jpg')}}" alt="Europe" >
                            </div>
                            <div class="b-content-box">
                                <div class="blog-meta">
                                    <i class="far fa-clock"></i>
                                    <span><?php echo date("d-M, Y") ?>By | Taye Oyelade</span>
                                </div>
                                <div class="blog-content mb-20">
                                    <h5><a href="{{route('dubai')}}">Burj Khalifa</a></h5>
                                    <p align="justify">
                                            The Burj Khalifa (Arabic: برج خليفة‎, Arabic for "Khalifa Tower", 
                                            known as the Burj Dubai prior to its inauguration in 2010, is a skyscraper in Dubai, 
                                            United Arab Emirates. With a total height of 829.8 m (2,722 ft) and a roof height (excluding antenna) 
                                            of 828 m (2,717 ft), the Burj Khalifa has been the tallest structure and building in the world 
                                            since its topping out in 2009.
                                    </p>
                                </div>
                                <div class="blog-link">
                                    {{-- <a href="{{route('dubai')}}">Read More Details
                                        <i class="fas fa-long-arrow-alt-right"></i>
                                    </a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-wrapper blog-border mb-30">
                            <div class="blog-thumb">
                                <img src="{{asset('img/dubai mall.jpg')}}" alt="Dubai Mall" style="height:250px">
                            </div>
                            <div class="b-content-box">
                                <div class="blog-meta">
                                    <i class="far fa-clock"></i>
                                    <span><?php echo date("d-M, Y") ?>  By | Taye Oyelade</span>
                                </div>
                                <div class="blog-content mb-20">
                                    <h5><a href="#">The Dubai Mall</a></h5>
                                    <p align="justify">
                                            It is the second-largest mall in the world by total land area, 
                                            and the 26th-largest shopping mall in the world by gross leasable area.
                                            Dubai Mall opened on 4 November 2008, with about 1000 retailers, 
                                            marking the world's second largest-ever mall opening in retail history behind West Edmonton Mall
                                    </p>
                                </div>
                                <div class="blog-link">
                                    {{-- <a href="{{route('dubai')}}">Read More Details<i class="fas fa-long-arrow-alt-right"></i></a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-wrapper blog-border mb-30">
                            <div class="blog-thumb">
                                <img src="{{asset('img/dubai fountain.jpg')}}" alt="Dubai Fountain" style="height:250px">
                            </div>
                            <div class="b-content-box">
                                <div class="blog-meta">
                                    <i class="far fa-clock"></i>
                                    <span><?php echo date("d-M, Y") ?>By | Taye Oyelade</span>
                                </div>
                                <div class="blog-content mb-20">
                                    <h5><a href="">The Dubai Fountain</a></h5>
                                    <p>The Dubai Fountain is the world's largest choreographed fountain system. It is set on the 12 hectare (30 acre) manmade Burj Khalifa Lake, 
                                        at the center of the Downtown Dubai development in Dubai,
                                         United Arab Emirates. It was designed by WET Design, the California-based company 
                                         responsible for the fountains at the Bellagio Hotel Lake in Las Vegas. </p>
                                </div>
                                <div class="blog-link">
                                   
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4">
                        <div class="blog-wrapper blog-border mb-30">
                            <div class="blog-thumb">
                                <img src="{{asset('img/dubai-palm-jumeirah.jpg')}}" alt="Europe" >
                            </div>
                            <div class="b-content-box">
                                <div class="blog-meta">
                                    <i class="far fa-clock"></i>
                                    <span><?php echo date("d-M, Y") ?>By | Kehinde Oyelade</span>
                                </div>
                                <div class="blog-content mb-20">
                                    <h5><a href="{{route('dubai')}}">
                                            Palm Jumeirah Dubai</a></h5>
                                    <p align="justify">
                                            It's a man-made island in the shape of a palm tree – there’s a reason why locals say ‘only in Dubai.’ 
                                            Palm Jumeirah is one of the largest artificial islands in the world and a triumph of human ingenuity. 
                                            Locals and tourists alike enjoy the Palm’s vast array of high-end hotels, including the Waldorf Astoria, 
                                            Fairmont, One&Only, Jumeirah Zabeel Saray a
                                            most notably, the iconic Atlantis, The Palm. And with a monorail running down the ‘trunk’ that connects to the mainland’s 
                                            tram system, getting there couldn’t be easier.
                                    </p>
                                </div>
                                    <div class="blog-link">
                                        {{-- <a href="{{route('dubai')}}">Read More Details
                                            <i class="fas fa-long-arrow-alt-right"></i>
                                        </a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="blog-wrapper blog-border mb-30">
                                <div class="blog-thumb">
                                    <img src="{{asset('img/Madinat-Jumeirah.jpg')}}" alt="Madinat-Jumeirah" style="height:250px">
                                </div>
                                <div class="b-content-box">
                                    <div class="blog-meta">
                                        <i class="far fa-clock"></i>
                                        <span><?php echo date("d-M, Y") ?>  By | Kehinde Oyelade</span>
                                    </div>
                                    <div class="blog-content mb-20">
                                        <h5><a href="#">Madinat Jumeirah</a></h5>
                                        <p align="justify">
                                                Madinat Jumeirah the Arabian Resort - Dubai is a luxurious 5 star resort in Dubai. It is the largest resort in the Emirate,
                                                 spreading across over 40 hectares of landscapes and gardens. It is designed to resemble a traditional Arabian town. The resort comprises 
                                                 three boutique hotels (Jumeirah Al Qasr, 
                                                Jumeirah Mina A'Salam, and Jumeirah Al Naseem) and a courtyard of 29 summer houses called Jumeirah Dar Al Masyaf. The resort has over 50 restaurants and bars
                                        </p>
                                    </div>
                                    <div class="blog-link">
                                        {{-- <a href="{{route('dubai')}}">Read More Details<i class="fas fa-long-arrow-alt-right"></i></a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="blog-wrapper blog-border mb-30">
                                <div class="blog-thumb">
                                    <img src="{{asset('img/dubai fountain.jpg')}}" alt="Dubai Fountain" style="height:250px">
                                </div>
                                <div class="b-content-box">
                                    <div class="blog-meta">
                                        <i class="far fa-clock"></i>
                                        <span><?php echo date("d-M, Y") ?>By | Taye Oyelade</span>
                                    </div>
                                    <div class="blog-content mb-20">
                                        <h5><a href="">The Dubai Fountain</a></h5>
                                        <p align="justify">The Dubai Fountain is the world's largest choreographed fountain system. It is set on the 12 hectare (30 acre) manmade Burj Khalifa Lake, 
                                            at the center of the Downtown Dubai development in Dubai,
                                             United Arab Emirates. It was designed by WET Design, the California-based company 
                                             responsible for the fountains at the Bellagio Hotel Lake in Las Vegas. </p>
                                    </div>
                                    <div class="blog-link">
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
           
        </div>
    </div>
</section>
<!-- all-blog-area-end -->
</main>
@endsection