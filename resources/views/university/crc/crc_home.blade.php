@extends('layouts.university.departments.crc_with_sidebar')
@section('content')
<link rel="stylesheet" href="{{asset('assets/css/tmu-testimonial.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/tmimt.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/college.css')}}">
<script src="{{asset('/assets/js/tmimt.js')}}"></script>
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
                    <h1 class="tmu-text-primary tmu-page-heading"><span>Welcome to</span><span> Corporate Rresource
                            Centre</span></h1>
                    <p class="about-p mb-4 text-justify">The Corporate Resource Centre (CRC) at Teerthanker Mahaveer University plays
                        a vital role in preparing students for successful careers. Focused on both personality
                        development and career readiness, the CRC provides comprehensive guidance on crucial interview
                        skills, such as body language, communication, and confidence. Through structured programs,
                        including mock interviews, aptitude training, and soft skill workshops, the CRC ensures students
                        are well-equipped to face corporate recruitment processes.</p>
                    <div class="d-flex flex-column align-items-center">
                        <div class="read-more-content mt-0">
                            <p class="about-p mb-4 text-justify">The centre works at both the
                                university and college levels to create tailored programs, helping students develop
                                technical
                                knowledge, set career goals, and improve overall employability.</p>

                            <p class="about-p mb-4 text-justify">In addition to personal and professional development, the CRC fosters
                                strong
                                industry-academia linkages, bringing together students and top corporate entities for
                                internships and job placements. With over 400 companies participating in the university’s
                                placement drives, the CRC provides students with ample opportunities to connect with leading
                                organizations across diverse fields such as engineering, management, healthcare, and more.
                                By
                                hosting regular industry visits and interactions with corporate leaders, the CRC ensures
                                that
                                students gain practical insights and are well-prepared for the demands of the modern job
                                market.
                            </p>
                        </div>

                        <a href="javascript:void(0);" class="tmu-btn btn-1 py-2 mt-4 read-more ms-2 mt-2" title="Read More">Read More</a>
                    </div>

                </div>
            </div>
        </section>

        <div class="main-content mb-3">
            <div class="container">
                <div class="container-xl tmu-testimonial">
                    <h1 class="tmu-text-primary mb-0 tmu-page-heading">
                        <span>Students</span><span>Testimonial</span>
                    </h1>
                    <div class="row mb-3">
                        <div class="col-lg-4 col-md-6 mb-2">
                            <div class="media ">
                                <img src="{{asset('/assets/img/testimonials/department/crc/students/Pranshi_Sharma.jpg')}}"
                                    class="mr-3" alt="">
                                <div class="media-body">
                                    <div class="testimonial">
                                        <p class="overview mb-3 fs-14"><b class="fs-16">Dr. Pranshi Sharma</b>
                                            <br>MBA (2023 - 2024), <br> Data Engineer at Aventra Group
                                            <br>
                                            <span>
                                                <a href="#"
                                                    class=" px-2 py-1 linkedin-text">Linkedin <i
                                                        class="bi bi-linkedin"></i></a>
                                            </span>
                                        </p>
                                        <p class="testimonial-content47">For decades I have been trying to enhance my personality but as a doctor I
                                            found it difficult at certain levels to make time to work upon myself. CTLD
                                            (Centre for Teaching Learning &development) programme helped me to overcome
                                            with my weak areas. It helped me to enhance my communication skills, mental
                                            ability, confidence. In addition to this our trainer Mr.Sagar Pratap Singh
                                            and Mr. Avinash Yadav worked hard with us to acknowledge ourselves and
                                            develop various qualities that includes leadership qualities, decision
                                            making skills, etc. The programme helped to know how to work in a
                                            competitive environment and how to deal with certain situations while
                                            maintaining a positive attitude. I am highly obliged to be a part of such
                                            course.</p>
                                    </div>
                                </div>
                                <div class="mx-auto my-0 d-flex align-items-center tmu-fs-14">
                                    <button class="tmu-btn btn-3 py-2 d-block pe-3 "
                                        onclick="showTestimonialModal()">Read
                                        More <i class="bi bi-chevron-down"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-2 d-none d-sm-block">
                            <div class="media ">
                                <img src="{{asset('/assets/img/testimonials/department/crc/students/Purnima_Varshney.jpg')}}"
                                    class="mr-3" alt="">
                                <div class="media-body">
                                    <div class="testimonial">
                                        <p class="overview mb-3 fs-14"><b class="fs-16">Purnima Varshney</b>
                                            <br>MCA (2020 - 2022), <br> Quality Analyst at Cloud Analogy
                                            <br>
                                            <span>
                                                <a href="#"
                                                    class=" px-2 py-1 linkedin-text">Linkedin <i
                                                        class="bi bi-linkedin"></i></a>
                                            </span>
                                        </p>
                                        <p class="testimonial-content47">I would like to thank the CTLD department. With the efforts and dedication of
                                            the trainers here, I have achieved big success for me today. The confidence
                                            that I have built up today is only because of the wonderful teachers who
                                            have been a part of this journey.After getting training from the CTLD
                                            department, I felt a lot of improvement in my skills. I would like to
                                            thankJasmine mam, Dilip Dutt Varshney, and Sagar Pratap sir,They guided and
                                            supported me on every stage and also taught me how to be confident in my
                                            professional life. I also want to express my gratitude to Er. Vikash Ranjan
                                            , He taught me the numerical ability and just because of him I felt
                                            confident in all the competitive exams. I am extremely obliged to be trained
                                            by the CTLD department. They are available every time to help students. CTLD
                                            department also organizesmany activities like Bootcamp, Brain Manthan,
                                            Vocabaddictsevents for students and provide knowledge in some special
                                            manner. Just because of CTLD department effortsnow I am placed in a reputed
                                            company Cloud Analogy as aQuality Analyst with a good package of 3 LPA. So
                                            once again thank you so much to all the trainers of the CTLD department. Km.
                                            Purnima Varshney Placed in Cloud Analogy As a Quality Analyst
                                        </p>
                                    </div>
                                </div>
                                <div class="mx-auto my-0 d-flex align-items-center tmu-fs-14">
                                    <button class="tmu-btn btn-3 py-2 d-block pe-3 "
                                        onclick="showTestimonialModal()">Read
                                        More <i class="bi bi-chevron-down"></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb-2 d-none d-sm-block">
                            <div class="media ">
                                <img src="{{asset('/assets/img/testimonials/department/crc/students/Abeer_Masroor.jpg')}}"
                                    class="mr-3" alt="">
                                <div class="media-body">
                                    <div class="testimonial">
                                        <p class="overview mb-3 fs-14"><b class="fs-16">Abeer Masroor</b>
                                            <br>BCA (2018 - 2021), <br> Data Engineer at Aventra Group
                                            <br>
                                            <span>
                                                <a href="#"
                                                    class=" px-2 py-1 linkedin-text">Linkedin <i
                                                        class="bi bi-linkedin"></i></a>
                                            </span>
                                        </p>
                                        <p class="testimonial-content47">Teerthanker Mahaveer University is a place that gave wings to my dreams. At
                                            the very outset I would like to express my heartiest thanks to the CTLD
                                            (Centre for Teaching, Learning and Development) department for polishing and
                                            showcasing my skills during my final year of BCA. It gave me a platform to
                                            push myself as well to understand my potentials that was hidden inside me.
                                            The classes really proved to be very effective in such a way that it has
                                            provided me an opportunity to learn, grow and to boost up my confidence. The
                                            pre-placement activities were highly productive as it gave me a clear vision
                                            for facing interviews. Whole heartedly I would also like to thank all the
                                            teachers of CTLD department for guiding and supporting me throughout the
                                            interview process. The faculty is really very kind and approachable when any
                                            need arises. I got trained in such a way that I'm placed in one of the
                                            reputed company with a handsome package. Once again thank you so much to the
                                            whole team of CTLD department for making me believe that I have enough
                                            potential and capabilities to come out with flying colors.
                                        </p>
                                    </div>
                                </div>
                                <div class="mx-auto my-0 d-flex align-items-center tmu-fs-14">
                                    <button class="tmu-btn btn-3 py-2 d-block pe-3 "
                                        onclick="showTestimonialModal()">Read
                                        More <i class="bi bi-chevron-down"></i></button>
                                </div>


                            </div>
                        </div>

                    </div>
                    <div class="text-center">
                        <a href="{{ route('crc.student.testi') }}" class="tmu-btn btn-1 py-2 mt-4 ms-2 mt-5">View More</a>
                    </div>
                </div>
            </div>

            <!-- Testimonial Modal -->
            <div id="testimonialModal" class="tmu-modal"  >
                <div class="overlay" onclick="closeTestimonialModal()"></div>
                <div class="tmu-modal-box">
                    <div class="close-btn" onclick="closeTestimonialModal()">x</div>
                    <div class="tmu-testimonial bg-light" style="max-height: 80vh; overflow-y: auto;">

                        <div class="media " >
                            <img src="{{asset('/assets/img/testimonials/department/crc/students/abdul_india_mart_mba.jpg')}}"
                                class="mr-3" alt="">
                            <div class="media-body">
                                <div class="testimonial">
                                    <p class="overview mb-3 testimonial-user-name"><b>Abdul Malik
                                            Khan</b>, MBA</p>
                                    <p class="testimonial-content">TMU, for me, is not just an MBA
                                        destination, it's the crucible where my leadership skills
                                        were forged. Beyond textbooks and case studies, TMU offered a
                                        dynamic learning
                                        environment where theories met practical challenges. It's a
                                        journey where I honed the
                                        skills that set me apart in the dynamic landscape of business
                                        and management.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


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

<script>
    // $(document).ready(function() {
    //     $('.star-logo-carousel').owlCarousel({
    //         loop: true,
    //         margin: 10,
    //         autoplay: true,
    //         autoplayTimeout: 2000, // Time between slides (2 seconds)
    //         autoplayHoverPause: true,
    //         responsive: {
    //             0: {
    //                 items: 2 // Number of logos on small screens
    //             },
    //             600: {
    //                 items: 3 // Number of logos on medium screens
    //             },
    //             1000: {
    //                 items: 5 // Number of logos on large screens
    //             }
    //         }
    //     });
    // });
</script>

@endsection