@extends('layouts.main')
@section('content')
    <div class="container my-3  d-none d-md-block">
        <div class="row justify-content-center">
            <div class="col-6 col-lg-3 px-1">
                <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">

                    <div class="card-body gap-4 text-tmu-primary under-banner-cards"> <span>16000+</span>
                        <br>
                        <span class="d-block pt-1">Students</span>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 px-1">
                <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                    <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                        <span>100%</span>
                        <br>
                        <span class="d-block pt-1">Placement Assistance</span>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 px-1">
                <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                    <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                        <span>60 LPA</span>
                        <br>
                        <span class="d-block pt-1">Highest Package</span>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 px-1">
                <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                    <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                        <span>100+</span>
                        <br>
                        <span class="d-block pt-1"> Collaborations</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-2 mt-4 d-block d-md-none">
        <div id="under-banner-carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#under-banner-carouselExample" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#under-banner-carouselExample" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-6">
                            <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                                <div class="card-body gap-4 text-tmu-primary under-banner-cards"> <span>16000+</span>
                                    <br>
                                    <span class="d-block pt-1">Students</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                                <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                                    <span>100%</span>
                                    <br>
                                    <span class="d-block pt-1">Placement Assistance</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-6">
                            <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                                <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                                    <span>60 LPA</span>
                                    <br>
                                    <span class="d-block pt-1">Highest Package</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                                <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                                    <span>100+</span>
                                    <br>
                                    <span class="d-block pt-1">Global Collaborations</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-----City in Itself Start-->
    <section id="content">
        <div class="content-wrap py-0" style="background-color: #001055;">

            <div class="container-fluid py-md-5">
                <div class="row pt-5">

                    <div class="col-md-3">
                        <h2 class="tmu-text-primary dark tmu--world-carousel"><span>TMU </span> <span>A WORLD WITHIN</span>
                        </h2>

                    </div>
                    <div class="col-md-9">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide"><img loading="lazy"
                                        src="{{ asset('/assets/img/home/gallery/2-01.webp') }}" alt="Slide 6"></div>
                                <div class="swiper-slide"><img loading="lazy"
                                        src="{{ asset('/assets/img/home/gallery/3-01.webp') }}" alt="Slide 8"></div>
                                <div class="swiper-slide"><img loading="lazy"
                                        src="{{ asset('/assets/img/home/gallery/4-01.webp') }}" alt="Slide 9"></div>
                                <div class="swiper-slide"><img loading="lazy"
                                        src="{{ asset('/assets/img/home/gallery/5-01.webp') }}" alt="Slide 10"></div>
                                <div class="swiper-slide"><img loading="lazy"
                                        src="{{ asset('/assets/img/home/gallery/6-01.webp') }}" alt="Slide 11"></div>
                                <div class="swiper-slide"><img loading="lazy"
                                        src="{{ asset('/assets/img/home/gallery/7-01.webp') }}" alt="Slide 12"></div>
                                <div class="swiper-slide"><img loading="lazy"
                                        src="{{ asset('/assets/img/home/gallery/8-01.webp') }}" alt="Slide 13"></div>
                                <div class="swiper-slide"><img loading="lazy"
                                        src="{{ asset('/assets/img/home/gallery/9-01.webp') }}" alt="Slide 14"></div>
                                <div class="swiper-slide"><img loading="lazy"
                                        src="{{ asset('/assets/img/home/gallery/10-01.webp') }}" alt="Slide 15"></div>
                                <div class="swiper-slide"><img loading="lazy"
                                        src="{{ asset('/assets/img/home/gallery/11.webp') }}" alt="Slide 16"></div>
                                <div class="swiper-slide"><img loading="lazy"
                                        src="{{ asset('/assets/img/home/gallery/12.webp') }}" alt="Slide 17"></div>
                                <div class="swiper-slide"><img loading="lazy"
                                        src="{{ asset('/assets/img/home/gallery/13-01.webp') }}" alt="Slide 18"></div>
                                <div class="swiper-slide"><img loading="lazy"
                                        src="{{ asset('/assets/img/home/gallery/14-01.webp') }}" alt="Slide 19"></div>

                            </div>
                            <!-- Add pagination -->
                            <div class="swiper-pagination"></div>
                            <!-- Add navigation buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </section>

    <!-----City in Itself End-->
    <!-----Courses section Start-->

    <!-----Courses section Start-->


    <section id="content" class="prog-bm" style="margin-top: 22px; ">
        <div class="content-wrap py-0">
            <!-- Code for the Desktop view -->
            <div class="container d-none d-sm-block">

                <div class="row justify-content-center ">
                    <div class="col-xl-10 col-lg-10 text-center">
                        <h2 class="tmu-text-primary my-4 mb-5"><span>PROGRAMMES </span> <span>OFFERED</span></h2>
                    </div>
                </div>

                <div class="row ">
                    <div class="col-md-3">
                        <div class="list-group" id="list-tab" role="tablist">
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($colleges as $college)
                                <h4 class="mb-1"><a
                                        class="programme-fetch-button list-group-item listream list-group-item-action rounded-3 shadow-sm"
                                        id="{{ $college->cd_code }}" data-collegeId="{{ $college->cd_id }}"
                                        data-bs-toggle="list" href="#{{ $college->cd_id }}" role="tab"
                                        aria-controls="{{ $college->cd_id }}"><img
                                            src="{{ asset($college->icon_path) }}" alt="Icon"
                                            class="float-start">&nbsp;&nbsp;{{ $college->short_name }}
                                    </a></h4>


                                @php
                                    $i++;
                                @endphp
                            @endforeach


                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content" id="nav-tabContent">

                            <!-- Home Tab starts here -->


                            @foreach ($colleges as $college)
                                <div class="tab-pane fade show programmes-data" id="{{ $college->cd_id }}"
                                    role="tabpanel" aria-labelledby="{{ $college->cd_code }}">

                                </div>
                            @endforeach





                        </div>
                    </div>
                </div>

            </div>

            <!-- Code for the Desktop view Ends -->


            <!-- Code for the Mobile View Starts Here -->
            <div class="container d-block d-sm-none">


                <div class="row justify-content-center ">
                    <div class="col-xl-10 col-lg-10 text-center">
                        <h2 class="tmu-text-primary my-3"><span>PROGRAMMES</span> <span>OFFERED</span></h2>
                    </div>
                </div>
                <!--Accordion code starts here -->
                @foreach ($colleges as $index => $college)
                    <button class="careers-accordion" data-collegeId="{{ $college->cd_id }}">
                        <span><i class="fa-solid fa-sm fakash"></i>&nbsp;&nbsp;{{ $college->cd_name }}</span>
                        <span class="icon">+</span>
                    </button>
                    <div class="panel {{ $index === 0 ? 'active' : '' }}">
                        <ul class="progul" id="programme{{ $college->cd_id }}">
                            <!-- Program list here -->
                        </ul>
                    </div>
                    <hr class="horizontal-line">
                @endforeach

                <!-- Add the horizontal line here -->


                <!-- Accordion code ends here -->
            </div>
            <!-- -------------   Accordian 4 Ends here -------------
                                               -------------------------      -------------------------  -->

            <!-- Code for the Mobile View Ends Here -->

        </div>
    </section>

    <!-----Courses Ends  Start-->


    <section id="content">
        <div class="content-wrap">
            <div class="container" style="margin-bottom: 10px;">


                <div class="row justify-content-center ">
                    <div class="col-xl-10 col-lg-10 text-center">
                        <h2 class="tmu-text-primary my-4 mb-5"><span>TMU </span> <span>HIGHLIGHTS</span></h2>
                    </div>
                </div>
                <div class="row col-mb-37">
                    <main class="postcontent col-lg-8 col-md-12">
                        <div class="row g-4">


                            <div class=" mb-0 entry col-lg-12 col-md-12">
                                <div class="owl-carousel" id="owl-carousel2">


                                    @foreach ($news as $event)
                                        <div class="item">

                                            <div class="grid-inner shadow-sm card newsheight" style="height: 300px;">
                                                <a href="{{ url('news/' . $event->n_slug) }}" target="_blank">
                                                    <div class="entry-image mb-0">
                                                        <div class="fslider" data-arrows="false" data-lightbox="gallery">
                                                            <div class="flexslider">
                                                                <div class="slider-wrap">
                                                                    <div class="slide"
                                                                        style="background: url('{{ $event->monaco_image_path }}') no-repeat center bottom; background-size: cover; height: 200px;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>


                                                <div class="p-2">
                                                    <div class="entry-title">
                                                        <a href="{{ url('news/' . $event->n_slug) }}" target="_blank"
                                                            style="font-size: 18px!important; font-weight: 500; display: inline;">{!! renderTruncatedHtml($event->event_title, 70) !!}</a>
                                                    </div>
                                                    <div class="entry-meta pt-2">
                                                        <ul>
                                                            <li><i class="uil uil-schedule"></i>
                                                                {{ \Carbon\Carbon::parse($event->event_date)->format('d-m-Y') }}
                                                            </li>
                                                            <li><a href="{{ 'news/' . $event->n_slug }}"
                                                                    target="_blank">Read More</a></li>
                                                            {{-- <li><a href="blog-single.html#comments"><i class="uil uil-comments-alt"></i> 13</a></li> --}}
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach





                                </div>
                            </div>
                        </div>

                        <!-- Blog Carousel Starts Here -->

                        <div class="row g-4 mb-0 d-none d-sm-block mt-4 ">

                            <div class="owl-carousel" id="owl-carousel3">
                                @foreach ($activeBlogs as $blog)
                                    <div class="item">
                                        <article class="mb-0 entry event col-12">
                                            <div
                                                class="grid-inner bg-white row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm blogheight">
                                                <div class="col-md-5 mb-md-0">
                                                    <a href="{{ url('blog/' . $blog->n_slug) }}"
                                                        class="entry-image mb-0 h-100">
                                                        <img src="{{ asset($blog->monaco_image_path) }}"
                                                            alt="{{ $blog->post_title }}"
                                                            class="rounded-2 w-100 object-cover" loading="lazy">
                                                        <div class="bg-overlay">
                                                            <div
                                                                class="bg-overlay-content justify-content-start align-items-start">
                                                                <div class="badge bg-light text-dark rounded-pill">Latest
                                                                    Blog</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-md-7 p-4 pt-0 pb-0">
                                                    <div class="entry-meta no-separator mb-1 mt-0">
                                                        <ul>
                                                            <li><a href="#"
                                                                    class="text-uppercase fw-medium">{{ $blog->formatted_date }}</a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="entry-title nott">
                                                        <a href="{{ url('blog/' . $blog->n_slug) }}"
                                                            style="font-size: 18px; font-weight: 500;">{{ Str::limit($blog->post_title, 70) }}</a>
                                                    </div>

                                                    <div class="entry-content my-3">
                                                        <p style="font-size: 14px;">
                                                            {{ Str::limit($blog->post_description, 90) }}</p>
                                                    </div>
                                                    <div class="entry-meta no-separator">
                                                        <ul>
                                                            <li><a href="#" class="fw-normal"><i
                                                                        class="uil uil-map-marker"></i>
                                                                    TMU,
                                                                    Moradabad</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                @endforeach


                            </div>
                        </div>
                        <!--
                                                      Blog Carousel Starts Here
                                                      -->



                    </main>


                    <aside class="sidebar col-md-12 d-block d-sm-none" style="margin-bottom: 35px;">
                        <div class="sidebar-widgets-wrap bg-white rounded-5 p-4 shadow-sm">

                            <div class="widget">

                                <h4>Latest Blogs</h4>
                                <hr>
                                <div class="posts-sm row col-mb-30" id="post-list-sidebar" style="margin-top: -0.25rem;">

                                    @foreach ($activeBlogs as $blog)
                                        <div class="entry col-12">
                                            <div class="grid-inner row g-0">
                                                <div class="col-auto">
                                                    <div class="entry-image">
                                                        <a href="{{ url('blog/' . $blog->n_slug) }}"><img
                                                                src="{{ asset($blog->monaco_image_path) }}"
                                                                alt="Image" loading="lazy"></a>
                                                    </div>
                                                </div>
                                                <div class="col ps-3">
                                                    <div class="entry-title">
                                                        <h4><a
                                                                href="{{ url('blog/' . $blog->n_slug) }}">{{ $blog->post_title }}</a>
                                                        </h4>
                                                    </div>
                                                    <div class="entry-meta">
                                                        <ul>
                                                            <li>{{ $blog->formatted_date }}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </aside>

                    <aside class="sidebar col-lg-4 col-md-12">
                        <div class="notice-board">
                            <div class="notice-header">NOTICE BOARD</div>
                            <div class="notice-body">
                                <div class="notice">
                                    <div class="notice-pub">
                                        <span>14, June</span>
                                    </div>
                                    <div class="notice-content">
                                        <p>TMU’s Centre for Indian Knowledge System (CIKS) is organising the 5th National Conclave (Online) on “Yoga & Meditation: An Ancient Solution to Modern Problems” on 20th June 2025, from 3:00 PM via Google Meet.</p>
                                    </div>
                                    <div class="notice-meta">
                                        <span style="margin-right: 15px;"><img
                                                src="{{ asset('assets/img/icons/placeholder.svg') }}" width="16px"
                                                height="16px">
                                            Centre for Indian Knowledge System</span>
                                        <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px">
                                            20, June</span>
                                    </div>
                                </div>
                                <hr class="notice-separator">
                                <div class="notice">
                                    <div class="notice-pub">
                                        <span>06, June</span>
                                    </div>
                                    <div class="notice-content">
                                        <p>TMU is organising a campus placement drive by Softpro India Computer Technologies (Pvt.) Ltd. on 11th June 2025 at CCSIT, 9:30 AM onwards, for eligible UG/PG students. Don’t miss this opportunity!
                                        </p>
                                    </div>
                                    <div class="notice-meta">
                                        <span style="margin-right: 15px;"><img
                                                src="{{ asset('assets/img/icons/placeholder.svg') }}" width="16px"
                                                height="16px">
                                            Teerthanker Mahaveer University</span>
                                        <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px">
                                            11, June</span>
                                    </div>
                                </div>
                                <hr class="notice-separator">
                                <div class="notice">
                                    <div class="notice-pub">
                                        <span>04, June</span>
                                    </div>
                                    <div class="notice-content">
                                        <p>Yoga Unplugged, a youth-focused yoga and meditation session, will be held at TMU on 21 June 2025. This event encourages students to embrace holistic wellness through yoga. Open to all.
                                        </p>
                                    </div>
                                    <div class="notice-meta">
                                        <span style="margin-right: 15px;"><img
                                                src="{{ asset('assets/img/icons/placeholder.svg') }}" width="16px"
                                                height="16px">
                                            Teerthanker Mahaveer University</span>
                                        <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px">
                                            21, June</span>
                                    </div>
                                </div>
                                <hr class="notice-separator">
                                <div class="notice">
                                    <div class="notice-pub">
                                        <span>04, June</span>
                                    </div>
                                    <div class="notice-content">
                                        <p>TMU will host Yoga Connect, a virtual global yoga summit, on 20 June 2025. Renowned experts will discuss yoga’s relevance in healthcare. Participants must register in advance to attend the sessions.
                                        </p>
                                    </div>
                                    <div class="notice-meta">
                                        <span style="margin-right: 15px;"><img
                                                src="{{ asset('assets/img/icons/placeholder.svg') }}" width="16px"
                                                height="16px">
                                            Teerthanker Mahaveer University</span>
                                        <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px">
                                            20, June</span>
                                    </div>
                                </div>
                                <hr class="notice-separator">
                                <div class="notice">
                                    <div class="notice-pub">
                                        <span>29, May</span>
                                    </div>
                                    <div class="notice-content">
                                        <p>Teerthanker Mahaveer University proudly presents the 5th National Conclave (Online) on “Yoga & Meditation: 
                                            An Ancient Solution to Modern Problems” on 20th June 2025, organised by the Centre for Indian Knowledge System, TMU. Join us for holistic insights!
                                        </p>
                                    </div>
                                    <div class="notice-meta">
                                        <span style="margin-right: 15px;"><img
                                                src="{{ asset('assets/img/icons/placeholder.svg') }}" width="16px"
                                                height="16px">
                                            Centre for Indian Knowledge System</span>
                                        <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px">
                                            20, June</span>
                                    </div>
                                </div>
                                <hr class="notice-separator">
                                <div class="notice">
                                    <div class="notice-pub">
                                        <span>04, June</span>
                                    </div>
                                    <div class="notice-content">
                                        <p>Join TMU’s Green Yoga on 19 June 2025, combining yoga with tree plantation and clean-up drives. This initiative promotes environmental consciousness and well-being. Students and faculty are encouraged to take part.</p>
                                    </div>
                                    <div class="notice-meta">
                                        <span style="margin-right: 15px;"><img
                                                src="{{ asset('assets/img/icons/placeholder.svg') }}" width="16px"
                                                height="16px">
                                            Teerthanker Mahaveer University</span>
                                        <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px">
                                            19, June</span>
                                    </div>
                                </div>
                                <hr class="notice-separator">
                                <div class="notice">
                                    <div class="notice-pub">
                                        <span>04, June</span>
                                    </div>
                                    <div class="notice-content">
                                        <p>TMU will organise a National Seminar titled “Yoga Impact: A decadal impact assessment on the role of yoga in public health” on 18 June 2025. All are invited to attend and participate.</p>
                                    </div>
                                    <div class="notice-meta">
                                        <span style="margin-right: 15px;"><img
                                                src="{{ asset('assets/img/icons/placeholder.svg') }}" width="16px"
                                                height="16px">
                                            Teerthanker Mahaveer University</span>
                                        <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px">
                                            18, June</span>
                                    </div>
                                </div>
                                <hr class="notice-separator">
                                <div class="notice">
                                    <div class="notice-pub">
                                        <span>31, May</span>
                                    </div>
                                    <div class="notice-content">
                                        <p>Teerthanker Mahaveer Dental College & Research Centre is celebrating World Environment Day on 5th June 2025 to raise awareness about environmental issues and encourage sustainable practices across the university community. Join us in making a difference!
                                        </p>
                                    </div>
                                    <div class="notice-meta">
                                        <span style="margin-right: 15px;"><img
                                                src="{{ asset('assets/img/icons/placeholder.svg') }}" width="16px"
                                                height="16px">
                                            Dental College & Research Centre</span>
                                        <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px">
                                            05, June</span>
                                    </div>
                                </div>
                                <hr class="notice-separator">
                                <div class="notice">
                                    <div class="notice-pub">
                                        <span>21, May</span>
                                    </div>
                                    <div class="notice-content">
                                        <p>The Mental Health Nursing Department is organising an insightful Guest Lecture on
                                            “Stress Adaptation and Its Management” on 26th May 2025. Don’t miss this
                                            opportunity to explore practical strategies for mental wellness and resilience!
                                        </p>
                                    </div>
                                    <div class="notice-meta">
                                        <span style="margin-right: 15px;"><img
                                                src="{{ asset('assets/img/icons/placeholder.svg') }}" width="16px"
                                                height="16px">
                                            College of Nursing</span>
                                        <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px">
                                            26, May</span>
                                    </div>
                                </div>
                                <hr class="notice-separator">
                                <div class="notice">
                                    <div class="notice-pub">
                                        <span>16, May</span>
                                    </div>
                                    <div class="notice-content">
                                        <p>The College of Fine Arts, TMU proudly presents the 7th Annual Art Exhibition,
                                            opening on 16th May 2025 at 11:00 AM. Visit from 16–17 May, 9:30 AM–4:00 PM, and
                                            experience creativity at its finest!</p>
                                    </div>
                                    <div class="notice-meta">
                                        <span style="margin-right: 15px;"><img
                                                src="{{ asset('assets/img/icons/placeholder.svg') }}" width="16px"
                                                height="16px">
                                            College of Finearts</span>
                                        <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px">
                                            16-17, May</span>
                                    </div>
                                </div>
                                <hr class="notice-separator">
                                <div class="notice">
                                    <div class="notice-pub">
                                        <span>15, May</span>
                                    </div>
                                    <div class="notice-content">
                                        <p>Teerthanker Mahaveer Dental College & Research Centre is organising a workshop on
                                            “Simplifying Class II Composite Restorations – Blending Technique, Technology,
                                            and Innovations” under the aegis of IIC on 20th May 2025. Join us for clinical
                                            excellence!</p>
                                    </div>
                                    <div class="notice-meta">
                                        <span style="margin-right: 15px;"><img
                                                src="{{ asset('assets/img/icons/placeholder.svg') }}" width="16px"
                                                height="16px">
                                            Dental College and Research Centre</span>
                                        <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px">
                                            20, May</span>
                                    </div>
                                </div>
                                <hr class="notice-separator">
                                <div class="notice">
                                    <div class="notice-pub">
                                        <span>10, May</span>
                                    </div>
                                    <div class="notice-content">
                                        <p>TMIMT cordially invites you to Daffodils 2025—an enchanting evening of culture,
                                            creativity, and celebration on 10th May 2025, 5:00 PM onwards at TMIMT Premises,
                                            TMU. Experience performances, joy, and unforgettable memories!</p>
                                    </div>
                                    <div class="notice-meta">
                                        <span style="margin-right: 15px;"><img
                                                src="{{ asset('assets/img/icons/placeholder.svg') }}" width="16px"
                                                height="16px">
                                            TMIMT College of Management</span>
                                        <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px">
                                            12, May</span>
                                    </div>
                                </div>
                                <hr class="notice-separator">
                                <div class="notice">
                                    <div class="notice-pub">
                                        <span>10, May</span>
                                    </div>
                                    <div class="notice-content">
                                        <p>The College of Nursing is proudly organising International Nurses Day on 12th May
                                            2025 at 2:00 PM in the Multipurpose Hall (Ground Floor), Nursing Building. Join
                                            us to honour dedication, compassion, and nursing excellence.</p>
                                    </div>
                                    <div class="notice-meta">
                                        <span style="margin-right: 15px;"><img
                                                src="{{ asset('assets/img/icons/placeholder.svg') }}" width="16px"
                                                height="16px">
                                            College of Nursing</span>
                                        <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px">
                                            12, May</span>
                                    </div>
                                </div>
                                <hr class="notice-separator">
                                <div class="notice">
                                    <div class="notice-pub">
                                        <span>06, May</span>
                                    </div>
                                    <div class="notice-content">
                                        <p>The College of Law, Teerthanker Mahaveer University, is organising a vibrant
                                            Fresher Party on 7th May 2025 at 9:30 AM in the TMU Auditorium to welcome the
                                            new batch with enthusiasm and joy!</p>
                                    </div>
                                    <div class="notice-meta">
                                        <span style="margin-right: 15px;"><img
                                                src="{{ asset('assets/img/icons/placeholder.svg') }}" width="16px"
                                                height="16px">
                                            College of Law & Legal Studies</span>
                                        <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px">
                                            07, May</span>
                                    </div>
                                </div>
                                <hr class="notice-separator">
                                <div class="notice">
                                    <div class="notice-pub">
                                        <span>02, May</span>
                                    </div>
                                    <div class="notice-content">
                                        <p>Teerthanker Mahaveer Dental College & Research Centre is organising a session on
                                            “Hands-on Experience on Virtual Reality: An Innovative Dental and Medical
                                            Practice” on 7th May 2025 at 12 PM. Join us!</p>
                                    </div>
                                    <div class="notice-meta">
                                        <span style="margin-right: 15px;"><img
                                                src="{{ asset('assets/img/icons/placeholder.svg') }}" width="16px"
                                                height="16px">
                                            Dental College & Research Centre </span>
                                        <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px">
                                            07, May</span>
                                    </div>
                                </div>
                                <hr class="notice-separator">
                                <div class="notice">
                                    <div class="notice-pub">
                                        <span>28, April</span>
                                    </div>
                                    <div class="notice-content">
                                        <p>The College of Nursing is organising a workshop on “Innovative Health Care
                                            Transformation through AI-Driven Solutions” under the aegis of IIC on 3rd May
                                            2025. Join us to explore the future of intelligent healthcare innovation!</p>
                                    </div>
                                    <div class="notice-meta">
                                        <span style="margin-right: 15px;"><img
                                                src="{{ asset('assets/img/icons/placeholder.svg') }}" width="16px"
                                                height="16px">
                                            College of Nursing </span>
                                        <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px">
                                            03, May</span>
                                    </div>
                                </div>
                                <hr class="notice-separator">
                                <div class="notice">
                                    <div class="notice-pub">
                                        <span>24, April</span>
                                    </div>
                                    <div class="notice-content">
                                        <p>The College of Nursing is organising a workshop on “Raising Capitals and Managing
                                            Finance for Startups” on 26th April 2025 as part of the IIC Activity. Empower
                                            your startup journey with innovation and insight!</p>
                                    </div>
                                    <div class="notice-meta">
                                        <span style="margin-right: 15px;"><img
                                                src="{{ asset('assets/img/icons/placeholder.svg') }}" width="16px"
                                                height="16px">
                                            College of Nursing </span>
                                        <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px">
                                            25, April</span>
                                    </div>
                                </div>
                                <hr class="notice-separator">
                                <div class="notice">
                                    <div class="notice-pub">
                                        <span>22, April</span>
                                    </div>
                                    <div class="notice-content">
                                        <p>National Conference on Social Impacts of Dowry Prohibition Laws in India on May
                                            9-10, 2025, at TMU Moradabad. Abstract submission deadline: May 2, 2025. <a
                                                href="{{ asset('/assets/pdf/law/law-brochure.pdf') }}"
                                                target="_blank">Read More!</a></p>
                                    </div>
                                    <div class="notice-meta">
                                        <span style="margin-right: 15px;"><img
                                                src="{{ asset('assets/img/icons/placeholder.svg') }}" width="16px"
                                                height="16px">
                                            College of Law & Legal Studies</span>
                                        <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px">
                                            02, May</span>
                                    </div>
                                </div>
                                <hr class="notice-separator">
                                <div class="notice">
                                    <div class="notice-pub">
                                        <span>23, April</span>
                                    </div>
                                    <div class="notice-content">
                                        <p>TMU College of Fine Arts presents a lecture on ‘The Journey of Indian
                                            Advertising: Tracing its Evolution & the Growing Influence of AI’ by Mr Nihar
                                            Ranjan Kanungo on 26 April 2025 at 11 AM. Join us for this insightful session!
                                        </p>
                                    </div>
                                    <div class="notice-meta">
                                        <span style="margin-right: 15px;"><img
                                                src="{{ asset('assets/img/icons/placeholder.svg') }}" width="16px"
                                                height="16px">
                                            College of Finearts</span>
                                        <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px">
                                            26, April</span>
                                    </div>
                                </div>
                                <hr class="notice-separator">
                                <div class="notice">
                                    <div class="notice-pub">
                                        <span>19, April</span>
                                    </div>
                                    <div class="notice-content">
                                        <p>TMIMT College of Management invites you to a two‑day International Conference on
                                            25–26 April 2025 at TMU Main Auditorium & Conference Halls. Join global experts,
                                            engage with thought leaders, and explore cutting‑edge business insights.</p>
                                    </div>
                                    <div class="notice-meta">
                                        <span style="margin-right: 15px;"><img
                                                src="{{ asset('assets/img/icons/placeholder.svg') }}" width="16px"
                                                height="16px">
                                            TMIMT College of Management</span>
                                        <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px">
                                            25-26, April</span>
                                    </div>
                                </div>
                                <hr class="notice-separator">
                                <div class="notice">
                                    <div class="notice-pub">
                                        <span>18, April</span>
                                    </div>
                                    <div class="notice-content">
                                        <p>Teerthanker Mahaveer University and Universiti Putra Malaysia proudly co‑organise
                                            the two‑day International E‑Mobility Program “Tree, Tech, and Tradition” on
                                            21–22 April 2025. Join us for sustainability and technological innovation
                                            insights, cross‑cultural exchange and thought leadership.</p>
                                    </div>
                                    <div class="notice-meta">
                                        <span style="margin-right: 15px;"><img
                                                src="{{ asset('assets/img/icons/placeholder.svg') }}" width="16px"
                                                height="16px">
                                            Teerthanker Mahaveer University</span>
                                        <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px">
                                            21-22, April</span>
                                    </div>
                                </div>
                                <hr class="notice-separator">
                                <div class="notice">
                                    <div class="notice-pub">
                                        <span>17, April</span>
                                    </div>
                                    <div class="notice-content">
                                        <p>The College of Fine Arts, TMU is organising a captivating guest lecture on
                                            “Understanding Digital Drawing, Painting, Illustration & Market Trends in the
                                            Age of AI” by Abdul Rasheed on 19th April 2025 at 11:00 AM</p>
                                    </div>
                                    <div class="notice-meta">
                                        <span style="margin-right: 15px;"><img
                                                src="{{ asset('assets/img/icons/placeholder.svg') }}" width="16px"
                                                height="16px">
                                            College of Finearts</span>
                                        <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px">
                                            19, April</span>
                                    </div>
                                </div>
                                <hr class="notice-separator">
                                <div class="notice">
                                    <div class="notice-pub">
                                        <span>16, April</span>
                                    </div>
                                    <div class="notice-content">
                                        <p>The College of Nursing is delighted to host a Farewell Ceremony for P.B.B.Sc (N)
                                            II Year students on 19th April 2025 at 10:00 AM in the Multipurpose Hall,
                                            Nursing Building. Join us in celebrating their journey!</p>
                                    </div>
                                    <div class="notice-meta">
                                        <span style="margin-right: 15px;"><img
                                                src="{{ asset('assets/img/icons/placeholder.svg') }}" width="16px"
                                                height="16px">
                                            College of Nursing</span>
                                        <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px"> 19,
                                            April</span>
                                    </div>
                                </div>
                                <hr class="notice-separator">
                                <div class="notice">
                                    <div class="notice-pub">
                                        <span>15, April</span>
                                    </div>
                                    <div class="notice-content">
                                        <p>The Department of Physiotherapy presents a guest lecture on "Revolutionizing Low
                                            Back Pain Management: AI-Driven Solutions and Telerehabilitation Advances." Join
                                            us for an insightful session exploring the future of tech-enabled physiotherapy
                                            care and innovation.</p>
                                    </div>
                                    <div class="notice-meta">
                                        <span style="margin-right: 15px;"><img
                                                src="{{ asset('assets/img/icons/placeholder.svg') }}" width="16px"
                                                height="16px">
                                            Department of Physiotherapy</span>
                                        <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px"> 21,
                                            April</span>
                                    </div>
                                </div>
                                <hr class="notice-separator">
                                <div class="notice">
                                    <div class="notice-pub">
                                        <span>15, April</span>
                                    </div>
                                    <div class="notice-content">
                                        <p>Join us in celebrating World Laboratory Day: MLT Odyssey 2025 with the inspiring
                                            theme “From Cells to Celebrations: Honouring Science and Art Together” Organized
                                            by the Department of Medical Lab Techniques, College of Paramedical Sciences.
                                            Let’s honour lab excellence!</p>
                                    </div>
                                    <div class="notice-meta">
                                        <span style="margin-right: 15px;"><img
                                                src="{{ asset('assets/img/icons/placeholder.svg') }}" width="16px"
                                                height="16px">
                                            College of Paramedical Sciences</span>
                                        <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px">
                                            23-24, April</span>
                                    </div>
                                </div>
                                <hr class="notice-separator">
                                <div class="notice">
                                    <div class="notice-pub">
                                        <span>14, April</span>
                                    </div>
                                    <div class="notice-content">
                                        <p>Join us for a session on "Innovative Oncorehabilitation: Cutting-Edge Strategies
                                            for Enhancing Recovery in Oral & Breast Cancer" by Dr. Mitali Yadav on 19th
                                            April 2025 at 10:00 AM in LT-603, Dept. of Physiotherapy.</p>
                                    </div>
                                    <div class="notice-meta">
                                        <span style="margin-right: 15px;"><img
                                                src="{{ asset('assets/img/icons/placeholder.svg') }}" width="16px"
                                                height="16px">
                                            Department of Physiotherapy</span>
                                        <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px"> 19,
                                            April</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section><!-- #content end -->


    <section class="container">
        <div class="row justify-content-center ">
            <div class="col-xl-10 col-lg-10 text-center">
                <h2 class="tmu-text-primary my-3"><span>Testimonials</span><span></span></h2>
            </div>
        </div>

        <div class="testimonial-container">
            <div class="image-container">
                <div class="navigation">
                    <span class="nav-arrow" onclick="showPreviousReview()">&#10094;</span>
                    <span class="nav-arrow" onclick="showNextReview()">&#10095;</span>
                </div>
                <!-- Lazy loaded thumbnail images (use loading="lazy") -->
                <!-- <div class="thumb" onclick="displayReviewByIndex(0)" style="background-image: url('/assets/img/department/alumni/people/1.png');" ></div>
                                                    <div class="thumb" onclick="displayReviewByIndex(1)" style="background-image: url('/assets/img/department/alumni/people/2.png');" ></div>
                                                    <div class="thumb" onclick="displayReviewByIndex(2)" style="background-image: url('/assets/img/department/alumni/people/3.png');" ></div>
                                                    <div class="thumb" onclick="displayReviewByIndex(3)" style="background-image: url('/assets/img/department/alumni/people/4.png');" ></div>
                                                    <div class="thumb" onclick="displayReviewByIndex(4)" style="background-image: url('/assets/img/department/alumni/people/1.png');" ></div>
                                                    <div class="thumb" onclick="displayReviewByIndex(5)" style="background-image: url('/assets/img/department/alumni/people/2.png');" ></div>
                                                    <div class="thumb" onclick="displayReviewByIndex(6)" style="background-image: url('/assets/img/department/alumni/people/3.png');" ></div> -->

                <!-- Lazy loaded thumbnail images with data-bg attribute -->
                <div class="thumb" onclick="displayReviewByIndex(0)"
                    data-bg="{{ asset('assets/img/department/alumni/people/1.png') }}"></div>
                <div class="thumb" onclick="displayReviewByIndex(1)"
                    data-bg="{{ asset('assets/img/department/alumni/people/2.png') }}"></div>
                <div class="thumb" onclick="displayReviewByIndex(2)"
                    data-bg="{{ asset('assets/img/department/alumni/people/3.png') }}"></div>
                <div class="thumb" onclick="displayReviewByIndex(3)"
                    data-bg="{{ asset('assets/img/department/alumni/people/4.png') }}"></div>
                <div class="thumb" onclick="displayReviewByIndex(4)"
                    data-bg="{{ asset('assets/img/department/alumni/people/8.jpg') }}"></div>
                <div class="thumb" onclick="displayReviewByIndex(5)"
                    data-bg="{{ asset('assets/img/department/alumni/people/7.png') }}"></div>
                <!-- <div class="thumb" onclick="displayReviewByIndex(6)" data-bg="{{ asset('assets/img/department/alumni/people/5.png') }}"></div>
                                                    <div class="thumb" onclick="displayReviewByIndex(7)" data-bg="{{ asset('assets/img/department/alumni/people/6.png') }}"></div> -->
                <!-- <div class="thumb" onclick="displayReviewByIndex(8)" data-bg="{{ asset('assets/img/department/alumni/people/9.png') }}"></div>
                                                    <div class="thumb" onclick="displayReviewByIndex(9)" data-bg="{{ asset('assets/img/department/alumni/people/10.png') }}"></div>
                                                    <div class="thumb" onclick="displayReviewByIndex(10)" data-bg="{{ asset('assets/img/department/alumni/people/11.png') }}"></div>
                                                    <div class="thumb" onclick="displayReviewByIndex(11)" data-bg="{{ asset('assets/img/department/alumni/people/12.png') }}"></div>
                                                    <div class="thumb" onclick="displayReviewByIndex(12)" data-bg="{{ asset('assets/img/department/alumni/people/13.png') }}"></div>
                                                    <div class="thumb" onclick="displayReviewByIndex(13)" data-bg="{{ asset('assets/img/department/alumni/people/14.png') }}"></div> -->

            </div>
        </div>
        </div>

        <div class="content-section">
            <div class="profile-section">
                <!-- Lazy loading profile picture -->
                <img id="profile-picture" class="profile-picture" src="" alt="Profile Image" loading="lazy" />
                <div class="profile-details">
                    <h2 id="profile-name"></h2>
                    <a id="profile-link">
                        <!-- Lazy load LinkedIn icon -->

                    </a>
                    <div class="profile-info">
                        <p><img src="{{ asset('/assets/img/icons/alumni/user.svg') }}" class="alumni-icon"
                                loading="lazy" />
                            <span id="profile-designation"></span>
                        </p>
                        <p><img src="{{ asset('/assets/img/icons/alumni/office-building.svg') }}" class="alumni-icon"
                                loading="lazy" />
                            <span id="profile-company"></span>
                        </p>
                        <p><img src="{{ asset('/assets/img/icons/alumni/book.svg') }}" class="alumni-icon"
                                loading="lazy" />
                            <span id="profile-course"></span>
                        </p>
                        <p><img src="{{ asset('/assets/img/icons/alumni/calendar.svg') }}" class="alumni-icon"
                                loading="lazy" />
                            <span id="profile-graduationYear"></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="testimonial-card">
                <div id="testimonial-wrapper" class="text">
                    <div class="quote"></div>
                    <div class="testimonial-title">Rediscovering Dreams with upGrad Campus</div>
                    <div class="testimonial-text review-text">"I always wanted to be a game developer, so I began searching
                        for universities related to my interest. I found one in Japan and applied. My happiness ..."</div>
                </div>
            </div>
        </div>
    </section>



    <!------VIDEO TESTIMONIALS START------->
    <section id="content">
        <div class="content-wrap py-0" style="margin-top: 23px; margin-bottom: 37px;">

            <!-- <div class="row justify-content-center ">
                                                    <div class="col-xl-10 col-lg-10 text-center">
                                                        <h2 class="tmu-text-primary my-4 mb-5"> <span>Testimonials</span></h2>
                                                    </div>
                                                </div> -->

            <div class="owl-carousel tmu-video-testimonial" id="owl-carousel4">
                <div class="item">
                    <div class="card shadow-sm mb-2">
                        <a onclick="showStory(2)"><img
                                src="./assets/img/university/testimonial-thumbnail/deeksha-rani.webp" class="card-img-top"
                                alt="..." loading="lazy"></a>
                        <div class="card-body d-flex flex-column align-items-center">
                            <p class="tmu-color fw-bold">Deeksha rani</p>
                            <p class="text-center mb-0">BA-B Ed (Integrated)(2021 - 2024)</p>

                        </div>

                    </div>

                </div>


                <div class="item">
                    <div class="card shadow-sm mb-2">
                        <a onclick="showStory(1)"><img
                                src="./assets/img/university/testimonial-thumbnail/navodita-bisht.webp"
                                class="card-img-top" alt="..." loading="lazy"></a>
                        <div class="card-body d-flex flex-column align-items-center">
                            <p class="tmu-color fw-bold">Navodita Bisht</p>
                            <p class="text-center mb-0">BA-B Ed (Integrated)(2022 - 2025)</p>

                        </div>

                    </div>

                </div>

                <div class="item">
                    <div class="card shadow-sm mb-2">
                        <a onclick="showStory(4)"><img
                                src="{{ asset('assets/img/university/testimonial-thumbnail/gauri_shrimal.webp') }}"
                                class="card-img-top" alt="..." loading="lazy"></a>
                        <div class="card-body d-flex flex-column align-items-center">
                            <p class="tmu-color fw-bold">Gauri Shrimal</p>
                            <p class="text-center mb-0">MBBS(2021 - 2026)</p>

                        </div>

                    </div>

                </div>

                <div class="item">
                    <div class="card shadow-sm mb-2">
                        <a onclick="showStory(0)"><img
                                src="./assets/img/university/testimonial-thumbnail/saloni-jain.webp" class="card-img-top"
                                alt="..." loading="lazy"></a>
                        <div class="card-body d-flex flex-column align-items-center">
                            <p class="tmu-color fw-bold">Saloni Jain</p>
                            <p class="text-center mb-0">MBA(2023 - 2025)</p>

                        </div>

                    </div>

                </div>
                <div class="item">
                    <div class="card shadow-sm mb-2">
                        <a onclick="showStory(3)"><img
                                src="{{ asset('assets/img/university/testimonial-thumbnail/kesar_Khanna.webp') }}"
                                class="card-img-top" alt="..." loading="lazy"></a>
                        <div class="card-body d-flex flex-column align-items-center">
                            <p class="tmu-color fw-bold">Kesar Khanna</p>
                            <p class="text-center mb-0">MBBS(2020 - 2025)</p>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section><!-- #content end -->


    <!-- Success Stories Popup Modal code begin  -->
    <div id="success-stories-popup" class="popup">
        <div class="ss-popup-content ">
            <span class="ss-heading"></span>
            <span class="ss-close-btn" id="closePopupBtn">&times;</span>
            <iframe src="" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
    <!-- Success Stories Popup Modal code end -->
    <div class="container mb-5 mt-5">
        <hr class="horizontal-line">

        <button class="careers-accordion">Why Teerthanker Mahaveer University(TMU) is Among the Top Private Universities in
            India?<span class="icon">+</span></button>
        <div class="panel active">
            <p>Teerthanker Mahaveer University (TMU) has emerged as a prominent
                educational institution, garnering attention for various reasons.
                Let's explore the factors that contribute to TMU's status as one
                of the best private universities in India.</p>
        </div>
        <!-- Add the horizontal line here -->
        <hr class="horizontal-line">

        <button class="careers-accordion">TMU’s Impressive Placement Records<span class="icon">+</span></button>
        <div class="panel">
            <h3 class="tmu-text-primary fs-16 mb-0"><span>85% Outstanding </span><span> Placement Rate</h3>
            <p>One of the key indicators of a university'ssuccess is its placement records. TMU boasts an outstanding
                placement rate of 82% in the academic year 2022-23.</p>
            <h3 class="tmu-text-primary fs-16 mb-0"><span>Highest Package </span><span> Offered - 60 LPA</h3>
            <p>The university's commitment to providing quality education is evident in the remarkable achievement of a 60
                LPA package offered to TMU students, showcasing the recognition and demand for graduates from the
                university.</p>
            <h3 class="tmu-text-primary fs-16 mb-0"><span>National and </span><span> International Collaborations</h3>
            <p>With over 100 collaborations with national and international organizations, TMU ensures that its students
                have access to diverse and enriching opportunities.</p>
        </div>
        <!-- Add the horizontal line here -->
        <hr class="horizontal-line">
        <button class="careers-accordion">Awards and Recognitions of Teerthanker Mahaveer University<span
                class="icon">+</span></button>
        <div class="panel">
            <h3 class="tmu-text-primary fs-16 mb-0"><span>NIRF Innovation </span><span> Category</h3>
            <p>TMU secured a position in the 51-100 rank band in the NIRF innovation category, highlighting its commitment
                to fostering innovation in education.</p>
            <h3 class="tmu-text-primary fs-16 mb-0"><span>Excellence in </span><span> Skills Development</h3>
            <p>Acknowledgement from Observe Now and LinkedIn Talent Solutions for Excellence in Skills Development further
                solidifies TMU's standing.</p>
            <h3 class="tmu-text-primary fs-16 mb-0"><span>Outlook </span><span> India Ranking</h3>
            <p>TMU holds the 45th rank among the Top 50 State Private Universities by Outlook India, a testament to its
                overall excellence.</p>
            <h3 class="tmu-text-primary fs-16 mb-0"><span>Notable </span><span> Alumni Network</h3>
            <p>With over 28,000 alumni, TMU has created a robust network of successful individuals contributing to various
                fields globally.</p>
            <h3 class="tmu-text-primary fs-16 mb-0"><span>Diverse </span><span> Academic Programmes</h3>
            <p>TMU offers over 150 programmes across 14 on-campus colleges and independent departments, catering to a wide
                range of academic interests.</p>
            <h3 class="tmu-text-primary fs-16 mb-0"><span>Cutting-Edge </span><span> Infrastructure</h3>
            <p>The university's lush green campus spanning over 130 acres provides a conducive environment for learning.
                State-of-the-art facilities, including sports complexes and libraries, contribute to a holistic educational
                experience.</p>
        </div>
        <!-- Add the horizontal line here -->
        <hr class="horizontal-line">
        <button class="careers-accordion">Innovation and Research Achievements at TMU<span
                class="icon">+</span></button>
        <div class="panel">
            <h3 class="tmu-text-primary fs-16 mb-0"><span>Patent Success </span><span> and Recognition</h3>
            <p>TMU ranks 6th nationally in patent filings among all universities, showcasing a commitment to academic
                excellence. The Business Incubation Centre's recognition by the UP state government further emphasizes TMU's
                success in fostering innovation.</p>
            <h3 class="tmu-text-primary fs-16 mb-0"><span>Industry </span><span> Collaborations</h3>
            <p>TMU has established strong ties with leading industries, providing students with valuable insights and
                opportunities. Collaborations with IBM, AutoCAD, TCS-iON, and others enhance the practical exposure students
                receive.</p>
        </div>
        <!-- Add the horizontal line here -->
        <hr class="horizontal-line">
        <button class="careers-accordion">TMU’s Commitment to Quality Education<span class="icon">+</span></button>
        <div class="panel">
            <h3 class="tmu-text-primary fs-16 mb-0"><span>Adherence to National </span><span> Education Policy (NEP) 2020
            </h3>
            <p>TMU is strategically aligning with the future of education by implementing NEP 2020, adopting a national
                credit framework and redesigning the curriculum.</p>
            <h3 class="tmu-text-primary fs-16 mb-0"><span>Outcome-Based </span><span> Education (OBE)</h3>
            <p>TMU's focus on OBE enhances the overall quality of learning, preparing students for the challenges of the
                future. TMU is actively contributing to the idea of a self-reliant India by creating a hub for startups, an
                Entrepreneurship Development Cell, and aligning its activities with the vision of an Aatmanirbhar Bharat
                through the Institution Innovation Council.</p>
            <h3 class="tmu-text-primary fs-16 mb-0"><span>Strategic Initiatives </span><span> for Skill Development</h3>
            <p>The university prioritizes skill development through various initiatives, including a Centre for Teaching
                Learning & Development, global internship opportunities, and live projects.</p>
            <h3 class="tmu-text-primary fs-16 mb-0"><span>Recognitions and </span><span> Accreditations</h3>
            <p>TMU's numerous accreditations, including NAAC-A, NBA, and ICAR, reflect its commitment to maintaining
                high-quality standards in education.</p>
            <h3 class="tmu-text-primary fs-16 mb-0"><span>Global Outreach </span><span> and Collaborations</h3>
            <p>TMU's affiliation with the United Nations Academic Impact (UNAI) and global collaborations contribute to
                creating a culturally diverse community.</p>
            <h3 class="tmu-text-primary fs-16 mb-0"><span>Commitment to </span><span> Social Responsibility</h3>
            <p>TMU's involvement in social initiatives, including NSS units and support for sustainable institutions,
                highlights its commitment to social responsibility.</p>
            <h3 class="tmu-text-primary fs-16 mb-0"><span>Your Future </span><span> Awaits</h3>
            <p>Teerthanker Mahaveer University's consistent commitment to excellence, innovation, and holistic development
                has propelled it into the league of top universities in India. The impressive placement records, accolades,
                and a focus on quality education make TMU a preferred choice for aspiring students.</p>
        </div>
        <!-- Add the horizontal line here -->
        <hr class="horizontal-line">
        <button class="careers-accordion">Frequently Asked Questions (FAQs)<span class="icon">+</span></button>
        <div class="panel">
            <p><strong>1. What sets TMU apart from other universities?</strong>
            <p>
            <p>TMU's commitment to excellence, innovation, and holistic development sets it apart. The university's
                impressive placement records and global collaborations contribute to its distinguished status.</p>
            <p><strong>2. How does TMU support entrepreneurship?</strong>
            <p>
            <p>TMU actively fosters entrepreneurship through its Business Incubation Centre, strategic initiatives aligned
                with Aatmanirbhar Bharat, and a strong industry-university interface.</p>
            <p><strong>3. What is the significance of TMU's accreditations?</strong>
            <p>
            <p>Accreditations like NAAC-A, NBA, and ICAR reflect TMU's adherence to high-quality standards, ensuring
                students receive a top-notch education.</p>
            <p><strong>4. How does TMU contribute to social responsibility?</strong>
            <p>
            <p>TMU engages in various social initiatives, including NSS units and support for sustainable institutions,
                showcasing its commitment to social responsibility.</p>
            <p><strong>5. How can I get admission to TMU?</strong>
            <p>
            <p>To get admission to Teerthanker Mahaveer University, visit the <a
                    href="https://admissions.tmu.ac.in/">admission page</a> or contact 18002701490</p>
        </div>
        <!-- Add the horizontal line here -->
        <hr class="horizontal-line">
    </div>


    <!-- <script>
        document.fonts.load('1em "Canela Deck Bold"').then(() => {
            document.body.classList.add('font-loaded');
        });
    </script> -->


    <script>
        $(document).ready(function() {
            // Click event for navbar buttons
            $('.programme-fetch-button').click(function() {
                var collegeId = this.getAttribute('data-collegeId');
                // Ajax call to fetch programs of selected type
                $.ajax({
                    url: '{{ route('fetch_programme_by_college_id') }}',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        cd_id: collegeId
                    },
                    success: function(response) {
                        // Handle JSON response and populate program list
                        console.log(response);
                        var programs = response.programs;
                        var programListHtml = '';
                        let i = 0;
                        programs.forEach(function(program) {
                            if ((i % 3 == 0) && (i != 0)) {
                                programListHtml += `</div><div class="row">`;
                            } else if (i == 0) {
                                programListHtml += `<div class="row">`;
                            }

                            programListHtml += `
                    <div class="col-md-4">
                                    <div class="card card-sz shadow-sm ">
                                        <img src="${program.programme_image_path}" class="card-img-top" alt="..." loading="lazy">
                                        <div class="card-body">
                                            <!--<span class="badge bg-info1 text-light mb-2 fw-normal px-2 py-1">New</span>-->
                                            <h5>${program.prog_name}</h5>
                                        </div>
                                        <div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                            <div>
                                            </div>
                                            <a href="programme/${program.page_slug}" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                                                More</a>
                                        </div>
                                    </div>
                                </div>`;



                            i++;
                        });
                        $('#' + collegeId).html(programListHtml);
                    },
                    error: function(xhr, status, error) {

                        console.log('the error is' + error);
                    }
                });
            });
            $('.programme-fetch-button:first').addClass('active').click();
            $('.programmes-data:first').addClass('active');

            // Programme fetch code for the mobile view starts here

            $('.careers-accordion').click(function() {
                var collegeId = this.getAttribute('data-collegeId');
                // Ajax call to fetch programs of selected type
                $.ajax({
                    url: '{{ route('fetch_programme_by_college_id') }}',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        cd_id: collegeId
                    },
                    success: function(response) {
                        // Handle JSON response and populate program list
                        console.log(response);
                        var programs = response.programs;
                        var programListHtml = '';
                        let i = 0;
                        programs.forEach(function(program) {

                            programListHtml += `<li class="progli">
                        <div class="card shadow-sm progcard card-sz">
                            <img src="${program.programme_image_path}" class="card-img-top" alt="...">
                            <div class="card-body progcardbody">

                                <h5 class="mb-2">${program.prog_name}</h5>
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                <div>
                                </div>
                                <a href="programme/${program.page_slug}" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                                    More</a>
                            </div>
                        </div>
                    </li>`;
                            i++;
                        });
                        $('#programme' + collegeId).html(programListHtml);
                    },
                    error: function(xhr, status, error) {

                        console.log('the error is' + error);
                    }
                });
            });

            // Programme fetch code for the mobile view ends here

        });
    </script>

    <script>
        $(document).ready(function() {
            console.log("DOM Ready - Checking first active panel...");

            const activePanel = $('.panel.active:visible').first();
            console.log("Found panel:", activePanel.length > 0 ? activePanel[0] : "None");

            const programmeList = activePanel.find('ul.progul');
            console.log("Found programmeList:", programmeList.length > 0 ? programmeList[0].id : "None");

            if (programmeList.length && programmeList.children().length === 0) {
                const collegeId = programmeList.attr('id').replace('programme', '');
                console.log("Extracted College ID:", collegeId);

                $.ajax({
                    url: '{{ route('fetch_programme_by_college_id') }}',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        cd_id: collegeId
                    },
                    success: function(response) {
                        console.log("✅ AJAX Success. Data received:", response);

                        const programs = response.programs;
                        if (!Array.isArray(programs) || programs.length === 0) {
                            console.warn("⚠️ No programs found for college ID:", collegeId);
                            return;
                        }

                        let programListHtml = '';
                        let i = 0;

                        programs.forEach(function(program) {
                            console.log(`➡️ Rendering program: ${program.prog_name}`);

                            programListHtml += `<li class="progli">
                            <div class="card shadow-sm progcard card-sz">
                                <img src="${program.programme_image_path}" class="card-img-top" alt="...">
                                <div class="card-body progcardbody">
                                    <h5 class="mb-2">${program.prog_name}</h5>
                                </div>
                                <div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                    <div></div>
                                    <a href="programme/${program.page_slug}" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View More</a>
                                </div>
                            </div>
                        </li>`;
                            i++;
                        });

                        programmeList.html(programListHtml);

                        // Confirm insertion

                    },
                    error: function(xhr, status, error) {
                        console.error('❌ AJAX error:', status, error);
                    }
                });
            } else {
                console.warn("⛔ Panel is missing or already populated.");
            }
        });
    </script>



    <script>
        (function() { // IIFE to scope variables
            const videoElement = document.getElementById('videoPlayer89');
            if (!videoElement) {
                console.error('Video element #videoPlayer89 not found.');
                return;
            }

            let player = null; // Hold the player instance
            let currentUrl = '';

            function setupVideoPlayer() {
                const screenWidth = window.innerWidth;
                let newUrl;
                let newPoster;

                if (screenWidth <= 768) { // Adjusted breakpoint for typical mobile/tablet
                    newPoster = "{{ asset('poster/banner_video_poster_mobile.webp') }}";
                    newUrl = "{{ asset('poster/mobile/output.mpd') }}";
                } else {
                    newPoster = "{{ asset('poster/banner_video_poster.webp') }}";
                    newUrl = "{{ asset('poster/desktop_tab/output.mpd') }}";
                }

                videoElement.poster = newPoster;

                if (newUrl !== currentUrl) {
                    currentUrl = newUrl;

                    if (player) {
                        // If player exists, detach previous listeners before attaching new source
                        player.off(dashjs.MediaPlayer.events.PLAYBACK_ENDED,
                        handlePlaybackEnded); // Important to remove old listener
                        player.attachSource(currentUrl);
                        // Re-attach listener for the new source
                        player.on(dashjs.MediaPlayer.events.PLAYBACK_ENDED, handlePlaybackEnded);
                        console.log('Attached new video source:', currentUrl);
                        // Ensure playback starts if it was playing or should autoplay
                        if (videoElement.autoplay || !videoElement.paused) {
                            // A short delay might sometimes be needed for attachSource to fully settle
                            setTimeout(() => player.play(), 50);
                        }
                    } else {
                        player = dashjs.MediaPlayer().create();
                        player.initialize(videoElement, currentUrl, true); // true for autoplay

                        // Listen for the PLAYBACK_ENDED event from Dash.js
                        player.on(dashjs.MediaPlayer.events.PLAYBACK_ENDED, handlePlaybackEnded);

                        console.log('Initialized video player with source:', currentUrl);
                    }
                } else if (player && videoElement.paused && videoElement.autoplay) {
                    // If URL hasn't changed but video is paused and should autoplay (e.g., after tab switch)
                    player.play();
                }
            }

            // Handler for when playback ends
            function handlePlaybackEnded() {
                if (player) {
                    console.log("Playback ended, seeking to 0 and restarting.");
                    player.seek(0);
                    setTimeout(() => player.play(), 0);
                }
            }

            function debounce(func, wait) {
                let timeout;
                return function executedFunction(...args) {
                    const later = () => {
                        clearTimeout(timeout);
                        func(...args);
                    };
                    clearTimeout(timeout);
                    timeout = setTimeout(later, wait);
                };
            }

            setupVideoPlayer();
            window.addEventListener('resize', debounce(setupVideoPlayer, 250));

        })();
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const lazyBackgrounds = document.querySelectorAll(".thumb[data-bg]");
            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.style.backgroundImage =
                            `url(${entry.target.getAttribute("data-bg")})`;
                        entry.target.removeAttribute("data-bg");
                        observer.unobserve(entry.target);
                    }
                });
            });
            lazyBackgrounds.forEach((el) => observer.observe(el));
        });
    </script>




    @php
        function renderTruncatedHtml($html, $limit = 70)
        {
            $decoded = html_entity_decode($html);
            $plain = strip_tags($decoded);

            // If no truncation is needed, return the original decoded HTML
            if (mb_strlen($plain) <= $limit) {
                return $decoded;
            }

            $visibleText = \Illuminate\Support\Str::limit($plain, $limit, '');

            $doc = new DOMDocument();
            libxml_use_internal_errors(true);
            $doc->loadHTML(mb_convert_encoding($decoded, 'HTML-ENTITIES', 'UTF-8'));
            libxml_clear_errors();

            $body = $doc->getElementsByTagName('body')->item(0);
            $charCount = 0;

            $traverse = function ($node) use (&$traverse, $visibleText, &$charCount) {
                $newNode = $node->cloneNode(false);
                foreach ($node->childNodes as $child) {
                    if ($charCount >= mb_strlen($visibleText)) {
                        break;
                    }

                    if ($child->nodeType === XML_TEXT_NODE) {
                        $remaining = mb_strlen($visibleText) - $charCount;
                        $cut = mb_substr($child->nodeValue, 0, $remaining);
                        $charCount += mb_strlen($cut);
                        $newNode->appendChild(new DOMText($cut));
                    } else {
                        $newNode->appendChild($traverse($child));
                    }
                }
                return $newNode;
            };

            $truncated = $traverse($body);
            $final = '';

            foreach ($truncated->childNodes as $child) {
                $html = $doc->saveHTML($child);

                // ✅ Remove wrapping <p> tags if they exist
                $html = preg_replace('/^<p[^>]*>(.*?)<\/p>$/is', '$1', $html);

                $final .= $html;
            }

            return trim($final) . '&hellip;';
        }
    @endphp
@endsection
