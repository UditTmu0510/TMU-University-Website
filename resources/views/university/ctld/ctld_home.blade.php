@extends('layouts.university.departments.ctld_with_sidebar')
@section('content')
<link rel="stylesheet" href="{{asset('assets/css/tmu-testimonial.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/tmimt.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/college.css')}}">
<script src="{{asset('assets/js/tmimt.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<div class="main-content">
    <div class="container">
        <div class="crc-slider-container">
            <div class="crc-slider-arrow crc-slider-arrow-left" onclick="moveSlide(-1)">&#10094;</div>

            <div class="crc-slider-content">
                <div class="crc-slider-slides">
                    <div class="crc-slide">
                        <img src="{{asset('assets/img/banner/ctld/ctld_banner.jpg')}}" alt="Slide 1">
                        <div class="crc-slider-gradient">
                            <div class="crc-slider-text">
                                <h2>TMU Registered</h2>
                                <h3>2500</h3>
                                <p>Placement Offers</p>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="crc-slide">
                        <img src="https://via.placeholder.com/1200x350" alt="Slide 2">
                        <div class="crc-slider-gradient">
                            <div class="crc-slider-text">
                                <h1>Slide 2</h1>
                                <p>Another slide with gradient.</p>
                            </div>
                        </div>
                    </div>
                    <div class="crc-slide">
                        <img src="https://via.placeholder.com/1200x350" alt="Slide 3">
                        <div class="crc-slider-gradient">
                            <div class="crc-slider-text">
                                <h1>Slide 3</h1>
                                <p>Beautiful overlapping design.</p>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>

            <div class="crc-slider-arrow crc-slider-arrow-right" onclick="moveSlide(1)">&#10095;</div>
        </div>


        <section class="crc-highest-package-section text-white text-center py-3 mt-3">
            <div class="container">
                <h2 class="tmu-text-primary my-0 mb-1"> <span>Highest </span><span>Package</span></h2>
                <h5 class="mb-1">Batch 2023-24</h5>
                <div class="row">
                    <div class="col-md-3 col-6 crc-border-right mb-2">
                        <h3 class="mb-1">₹ <span class="display-4">60</span> LPA</h3>
                        <p>NATIONAL</p>
                    </div>
                    <div class="col-md-3 col-6 crc-border-right mb-2">
                        <h3 class="mb-1">₹ <span class="display-4">32</span> LPA</h3>
                        <p>INTERNATIONAL</p>
                    </div>
                    <div class="col-md-3 col-6 crc-border-right">
                        <h3 class="mb-1">₹ <span class="display-4">8</span> LPA</h3>
                        <p>MBA</p>
                    </div>
                    <div class="col-md-3 col-6">
                        <h3 class="mb-1">₹ <span class="display-4">12</span> LPA</h3>
                        <p>CCSIT</p>
                    </div>
                </div>
            </div>
        </section>


        <section class="about-section bg-light mt-4">
            <div class="container">
                <div class="text-content p-4">
                    <h1 class="tmu-text-primary tmu-page-heading"><span>Welcome to</span><span> Centre For Teaching, Learning & Development</span></h1>
                    <p class="about-p mb-4 text-justify">The Centre for Teaching Learning & Development (CTLD) at Teerthanker Mahaveer University plays a pivotal role in shaping students' holistic development beyond academics. Recognizing the increasing importance of soft skills, personality traits, and aptitude, CTLD was established to bridge the gap between academic knowledge and real-world requirements.</p>
                    <div class="d-flex flex-column align-items-center">
                        <div class="read-more-content mt-0">
                            <p class="about-p mb-4 text-justify">CTLD offers specialized training in quantitative ability, reasoning, verbal skills, and personality development. These programs empower students to enhance their communication and social skills, ensuring they are well-prepared to face group discussions (GD), personal interviews (PI), and other challenges of the corporate world. By nurturing these essential skills, CTLD helps students excel in their placements and prepares them to thrive in their future professional environments.</p>
                        </div>

                        <!-- Flexbox centering the button -->
                        <a href="javascript:void(0);" class="tmu-btn btn-1 py-2 mt-4 read-more ms-2 mt-2" style="width:fit-content;" title="Read More">Read More</a>
                    </div>
                </div>
            </div>
        </section>

        <!--<div class="section bg-transparent mt-0" style="margin-bottom:30px;">-->
        <!--    <div class="row justify-content-center ">-->
        <!--        <div class="col-xl-10 col-lg-10 text-center d-none d-sm-block">-->

        <!--            <h2 class="tmu-text-primary"><span>GALLERY</span></h2>-->

        <!--        </div>-->
        <!--        <div class="col-xl-10 col-lg-10 text-center d-block d-sm-none">-->
        <!--            <h2 class="tmu-text-primary"><span>GALLERY</span></h2>-->

        <!--        </div>-->
        <!--    </div>-->

        <!--    <div class="owl-carousel owl-carousel-full image-carousel carousel-widget charity-card"-->
        <!--        data-stage-padding="20" data-margin="10" data-center="true" data-loop="true" data-nav="true"-->
        <!--        data-autoplay="2000" data-speed="400" data-pagi="true" data-items-xs="1" data-items-sm="2"-->
        <!--        data-items-md="2" data-items-lg="3" data-items-xl="4">-->

        <!--        <div class="oc-item text-start">-->
        <!--            <img src="{{asset('/assets/img/gallery/medical/1.jpg')}}" alt="Image 1" class="rounded">-->

        <!--        </div>-->

        <!--        <div class="oc-item text-start">-->
        <!--            <img src="{{asset('/assets/img/gallery/medical/2.jpg')}}" alt="Image 1" class="rounded">-->

        <!--        </div>-->

        <!--        <div class="oc-item text-start">-->
        <!--            <img src="{{asset('/assets/img/gallery/medical/3.jpg')}}" alt="Image 1" class="rounded">-->

        <!--        </div>-->

        <!--        <div class="oc-item text-start">-->
        <!--            <img src="{{asset('/assets/img/gallery/medical/4.jpg')}}" alt="Image 1" class="rounded">-->

        <!--        </div>-->

        <!--        <div class="oc-item text-start">-->
        <!--            <img src="{{asset('/assets/img/gallery/medical/5.jpg')}}" alt="Image 1" class="rounded">-->

        <!--        </div>-->
        <!--        <div class="oc-item text-start">-->
        <!--            <img src="{{asset('/assets/img/gallery/medical/6.jpg')}}" alt="Image 1" class="rounded">-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->

        <!--<section class="crc-highest-package-section">-->
        <!--    <div class="container-xl tmu-testimonial  mb-3">-->

        <!--        <h2 class="tmu-text-primary my-0 pt-2 mb-3"> <span>Star Recruiters</span></h2>-->
        <!--        <div class="star-logo-carousel owl-carousel">-->
        <!--            <div class="item"><img src="{{asset('assets/img/recruiters/star_recruiters/1.jpg')}}"></div>-->
        <!--            <div class="item"><img src="{{asset('assets/img/recruiters/star_recruiters/2.jpg')}}"></div>-->
        <!--            <div class="item"><img src="{{asset('assets/img/recruiters/star_recruiters/3.jpg')}}"></div>-->
        <!--            <div class="item"><img src="{{asset('assets/img/recruiters/star_recruiters/4.jpg')}}"></div>-->
        <!--            <div class="item"><img src="{{asset('assets/img/recruiters/star_recruiters/5.jpg')}}"></div>-->
        <!--            <div class="item"><img src="{{asset('assets/img/recruiters/star_recruiters/6.jpg')}}"></div>-->
        <!--            <div class="item"><img src="{{asset('assets/img/recruiters/star_recruiters/7.jpg')}}"></div>-->
        <!--            <div class="item"><img src="{{asset('assets/img/recruiters/star_recruiters/8.jpg')}}"></div>-->
        <!--            <div class="item"><img src="{{asset('assets/img/recruiters/star_recruiters/9.jpg')}}"></div>-->
        <!--            <div class="item"><img src="{{asset('assets/img/recruiters/star_recruiters/10.jpg')}}"></div>-->
        <!--            <div class="item"><img src="{{asset('assets/img/recruiters/star_recruiters/11.jpg')}}"></div>-->
        <!--            <div class="item"><img src="{{asset('assets/img/recruiters/star_recruiters/12.jpg')}}"></div>-->
        <!--        </div>-->


        <!--    </div>-->
        <!--</section>-->

    </div>
</div>
</div>

@endsection