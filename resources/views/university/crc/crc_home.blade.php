@extends('layouts.university.departments.crc_with_sidebar')
@section('content')
<link rel="stylesheet" href="{{asset('assets/css/tmu-testimonial.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/tmimt.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/college.css')}}">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<div class="main-content">
    <div class="container">
        <div class="crc-slider-container">
            <div class="crc-slider-arrow crc-slider-arrow-left" onclick="moveSlide(-1)">&#10094;</div>

            <div class="crc-slider-content">
                <div class="crc-slider-slides">
                    <div class="crc-slide">
                        <img src="{{asset('/assets/img/banner/crc/crc_banner.jpg')}}" alt="Slide 1">
                        <div class="crc-slider-gradient">
                            <div class="crc-slider-text">
                                <h2>TMU Registered</h2>
                                <h3>2500</h3>
                                <p>Placement Offers</p>
                            </div>
                        </div>
                    </div>
                    <div class="crc-slide">
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
                    </div>
                </div>
            </div>

            <div class="crc-slider-arrow crc-slider-arrow-right" onclick="moveSlide(1)">&#10095;</div>
        </div>


        <section class="crc-highest-package-section text-white text-center py-3 mt-3">
            <div class="container">
                <h2 class="tmu-text-primary my-0 mb-1"> <span>Highest </span><span>Package</span></h2>
                <h5 class="mb-1">Batch 2023-24</h5>
                <div class="row">
                    <div class="col-md-3 crc-border-right">
                        <h3 class="mb-1">₹ <span class="display-4">1.7</span> CR</h3>
                        <p>INTERNATIONAL</p>
                    </div>
                    <div class="col-md-3 crc-border-right">
                        <h3 class="mb-1">₹ <span class="display-4">60</span> LPA</h3>
                        <p>NATIONAL</p>
                    </div>
                    <div class="col-md-3 crc-border-right">
                        <h3 class="mb-1">₹ <span class="display-4">28</span> LPA</h3>
                        <p>MBA</p>
                    </div>
                    <div class="col-md-3">
                        <h3 class="mb-1">₹ <span class="display-4">18</span> LPA</h3>
                        <p>HOTEL MANAGEMENT</p>
                    </div>
                </div>
            </div>
        </section>


        <section class="about-section bg-light mt-4">
            <div class="container">
                <div class="text-content p-4">
                    <h1 class="tmu-text-primary tmu-page-heading"><span>Welcome to</span><span> Corporate Rresource
                            Centre</span></h1>
                    <p class="about-p mb-4">The Corporate Resource Centre (CRC) at Teerthanker Mahaveer University plays
                        a vital role in preparing students for successful careers. Focused on both personality
                        development and career readiness, the CRC provides comprehensive guidance on crucial interview
                        skills, such as body language, communication, and confidence. Through structured programs,
                        including mock interviews, aptitude training, and soft skill workshops, the CRC ensures students
                        are well-equipped to face corporate recruitment processes. The centre works at both the
                        university and college levels to create tailored programs, helping students develop technical
                        knowledge, set career goals, and improve overall employability.</p>

                    <p class="about-p mb-4">In addition to personal and professional development, the CRC fosters strong
                        industry-academia linkages, bringing together students and top corporate entities for
                        internships and job placements. With over 400 companies participating in the university’s
                        placement drives, the CRC provides students with ample opportunities to connect with leading
                        organizations across diverse fields such as engineering, management, healthcare, and more. By
                        hosting regular industry visits and interactions with corporate leaders, the CRC ensures that
                        students gain practical insights and are well-prepared for the demands of the modern job market.
                    </p>
                </div>
            </div>
        </section>

        <section>
            <div class="container-xl tmu-testimonial mt-5 mb-3">

                <h2 class="tmu-text-primary my-0 mb-3"> <span>Testimonial</span></h2>

                <div class="owl-carousel owl-carousel-full image-carousel carousel-widget charity-card"
                    style="overflow: visible;" data-stage-padding="20" data-margin="50" data-center="true"
                    data-loop="true" data-nav="true" data-autoplay="200000" data-speed="2000" data-pagi="true"
                    data-items-xs="1" data-items-sm="2" data-items-md="2" data-items-lg="3" data-items-xl="3">

                    <div class="oc-item text-start">
                        <div class="media ">
                            <img src="https://www.tmu.ac.in/monaco/assets/image/testimonials/rashmi_raj_bcom.webp"
                                class="mr-3" alt="">
                            <div class="media-body">
                                <div class="testimonial">
                                    <p class="overview mb-3 fs-14"><b class="fs-16">Rashmi Raj</b> <br>B.Com (2020 -
                                        2024), <br> Data Engineer at Aventra Group
                                        <br>
                                        <span>
                                            <a href="https://www.linkedin.com/in/udit-gupta-ug0510/"
                                                class=" px-2 py-1 linkedin-text">Linkedin <i
                                                    class="bi bi-linkedin"></i></a>
                                        </span>
                                    </p>
                                    <p>For me TMU wasn't just a place of study, it was where I discovered the artistry
                                        in
                                        business. Professors here were mentors who helped me navigate the complexities
                                        of
                                        creativity. TMU, to me, isn't just an educational space; it's the place where my
                                        journey
                                        in the world of commerce became a fascinating and personal expedition.
                                    </p>
                                </div>
                            </div>
                            <div class="mx-auto my-0 d-flex align-items-center tmu-fs-14">
                                <button class="tmu-btn btn-3 py-2 d-block pe-3 " onclick="showTestimonialModal()">Read
                                    More <i class="bi bi-chevron-down"></i></button>
                            </div>


                        </div>
                    </div>
                    <div class="oc-item text-start">
                        <div class="media ">
                            <img src="https://www.tmu.ac.in/monaco/assets/image/testimonials/rashmi_raj_bcom.webp"
                                class="mr-3" alt="">
                            <div class="media-body">
                                <div class="testimonial">
                                    <p class="overview mb-3 fs-14"><b class="fs-16">Rashmi Raj</b> <br>B.Com (2020 -
                                        2024), <br> Data Engineer at Aventra Group <br>
                                        <span>
                                            <a href="https://www.linkedin.com/in/udit-gupta-ug0510/"
                                                class=" px-2 py-1 linkedin-text">Linkedin <i
                                                    class="bi bi-linkedin"></i></a>
                                        </span>
                                    </p>
                                    <p>For me TMU wasn't just a place of study, it was where I discovered the artistry
                                        in
                                        business. Professors here were mentors who helped me navigate the complexities
                                        of
                                        creativity. TMU, to me, isn't just an educational space; it's the place where my
                                        journey
                                        in the world of commerce became a fascinating and personal expedition.
                                    </p>
                                </div>
                            </div>
                            <div class="mx-auto my-0 d-flex align-items-center tmu-fs-14">
                                <button class="tmu-btn btn-3 py-2 d-block pe-3 " onclick="showTestimonialModal()">Read
                                    More <i class="bi bi-chevron-down"></i></button>
                            </div>


                        </div>
                    </div>
                    <div class="oc-item text-start">
                        <div class="media ">
                            <img src="https://www.tmu.ac.in/monaco/assets/image/testimonials/rashmi_raj_bcom.webp"
                                class="mr-3" alt="">
                            <div class="media-body">
                                <div class="testimonial">
                                    <p class="overview mb-3 fs-14"><b class="fs-16">Rashmi Raj</b> <br>B.Com (2020 -
                                        2024), <br> Data Engineer at Aventra Group <br>
                                        <span>
                                            <a href="https://www.linkedin.com/in/udit-gupta-ug0510/"
                                                class=" px-2 py-1 linkedin-text">Linkedin <i
                                                    class="bi bi-linkedin"></i></a>
                                        </span>
                                    </p>
                                    <p>For me TMU wasn't just a place of study, it was where I discovered the artistry
                                        in
                                        business. Professors here were mentors who helped me navigate the complexities
                                        of
                                        creativity. TMU, to me, isn't just an educational space; it's the place where my
                                        journey
                                        in the world of commerce became a fascinating and personal expedition.
                                    </p>
                                </div>
                            </div>
                            <div class="mx-auto my-0 d-flex align-items-center tmu-fs-14">
                                <button class="tmu-btn btn-3 py-2 d-block pe-3 " onclick="showTestimonialModal()">Read
                                    More <i class="bi bi-chevron-down"></i></button>
                            </div>


                        </div>
                    </div>
                    <div class="oc-item text-start">
                        <div class="media ">
                            <img src="https://www.tmu.ac.in/monaco/assets/image/testimonials/rashmi_raj_bcom.webp"
                                class="mr-3" alt="">
                            <div class="media-body">
                                <div class="testimonial">
                                    <p class="overview mb-3 fs-14"><b class="fs-16">Rashmi Raj</b> <br>B.Com (2020 -
                                        2024), <br> Data Engineer at Aventra Group <br>
                                        <span>
                                            <a href="https://www.linkedin.com/in/udit-gupta-ug0510/"
                                                class=" px-2 py-1 linkedin-text">Linkedin <i
                                                    class="bi bi-linkedin"></i></a>
                                        </span>
                                    </p>
                                    <p>For me TMU wasn't just a place of study, it was where I discovered the artistry
                                        in
                                        business. Professors here were mentors who helped me navigate the complexities
                                        of
                                        creativity. TMU, to me, isn't just an educational space; it's the place where my
                                        journey
                                        in the world of commerce became a fascinating and personal expedition.
                                    </p>
                                </div>
                            </div>
                            <div class="mx-auto my-0 d-flex align-items-center tmu-fs-14">
                                <button class="tmu-btn btn-3 py-2 d-block pe-3 " onclick="showTestimonialModal()">Read
                                    More <i class="bi bi-chevron-down"></i></button>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
            <br>
            <br>
        </section>

        <section class="crc-highest-package-section">
            <div class="container-xl tmu-testimonial  mb-3">

                <h2 class="tmu-text-primary my-0 pt-2 mb-3"> <span>Star Recruiters</span></h2>
                <div class="star-logo-carousel owl-carousel">
                    <div class="item"><img src="{{asset('assets/img/recruiters/star_recruiters/1.jpg')}}"></div>
                    <div class="item"><img src="{{asset('assets/img/recruiters/star_recruiters/2.jpg')}}"></div>
                    <div class="item"><img src="{{asset('assets/img/recruiters/star_recruiters/3.jpg')}}"></div>
                    <div class="item"><img src="{{asset('assets/img/recruiters/star_recruiters/4.jpg')}}"></div>
                    <div class="item"><img src="{{asset('assets/img/recruiters/star_recruiters/5.jpg')}}"></div>
                    <div class="item"><img src="{{asset('assets/img/recruiters/star_recruiters/6.jpg')}}"></div>
                    <div class="item"><img src="{{asset('assets/img/recruiters/star_recruiters/7.jpg')}}"></div>
                    <div class="item"><img src="{{asset('assets/img/recruiters/star_recruiters/8.jpg')}}"></div>
                    <div class="item"><img src="{{asset('assets/img/recruiters/star_recruiters/9.jpg')}}"></div>
                    <div class="item"><img src="{{asset('assets/img/recruiters/star_recruiters/10.jpg')}}"></div>
                    <div class="item"><img src="{{asset('assets/img/recruiters/star_recruiters/11.jpg')}}"></div>
                    <div class="item"><img src="{{asset('assets/img/recruiters/star_recruiters/12.jpg')}}"></div>
                </div>


            </div>
        </section>
 


    </div>
</div>
</div>

<script>
        $(document).ready(function() {
            $('.star-logo-carousel').owlCarousel({
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 2000, // Time between slides (2 seconds)
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 2 // Number of logos on small screens
                    },
                    600: {
                        items: 3 // Number of logos on medium screens
                    },
                    1000: {
                        items: 5 // Number of logos on large screens
                    }
                }
            });
        });
        </script>

@endsection