@extends('layouts.university.departments.alumni_without_sidebar')
@section('content')

<link rel="stylesheet" href="{{asset('/assets/css/college.css')}}">

<style>
    /*map css start */

    #container {
        max-width: 1150px;
        height: 100%;
    }

    /*map css end */

    .profile-img {
        width: auto;
        height: 50px;
        border-radius: 50%;
        object-fit: cover;
    }

    .btn-custom {
        background-color: #00bfa5;
        color: white;
    }

    .btn-custom:hover {
        background-color: #009d8a;
        color: white;
    }

    .alimni-login-box {
        background-color: #f1f1f1f1;
        padding: 20px;
        margin: 10px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .alimni-login-box:hover {
        transform: translateY(-5px);
        /* alimni-login-box */
    }

    /*alumni testimonial swiper css start*/

    .testimonial-container {
        margin-top: 50px;
        text-align: center;
    }

    .image-container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
        max-width: 1200px;
        position: relative;
        margin: 0 auto;
        height: 7.5rem;
    }

    .navigation {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        display: flex;
        align-items: center;
    }

    .nav-arrow {
        font-size: 24px;
        cursor: pointer;
        color: #0077b5;
        margin: 0 250px;
    }

    .nav-arrow:hover {
        color: #005580;
    }

    .thumb {
        height: 60px;
        width: 42px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 10px;
        cursor: pointer;
        opacity: 0.5;
        transition: all 0.3s ease-in-out;
        background-size: cover;
        border-radius: 5px;
        background-position: center center;
    }

    .active-thumb {
        width: 61px;
        height: 86px;
        opacity: 1;
        z-index: 2;
    }

    .content-section {
        display: flex;
        background: #fff;
        border-radius: 15px;
        width: 100%;
        padding: 20px;
    }

    .profile-section {
        border-radius: 15px;
        max-width: 650px;
        width: 100%;
        padding: 20px;
        margin: 0 auto;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .profile-picture {
        width: auto;
        height: 280px;
        border-radius: 30px;
        padding: 20px;
        z-index: 2;
    }

    .profile-details {
        flex: 1;
        text-align: left;
        padding: 10px;
        margin: 20px;
    }

    .profile-details h2 {
        font-size: 20px;
        line-height: 25px;
        margin: 0;
    }

    .profile-details a {
        color: #0077b5;
        text-decoration: none;
        font-size: 16px;
        font-weight: 700;
        text-decoration: underline;
        display: flex;
        align-items: center;
        margin-right: 10px;
    }

    .profile-info {
        margin-top: 10px;
    }

    .profile-info p {
        margin: 10px 0;
        display: flex;
        align-items: center;
    }

    .icon {
        width: 24px;
        height: 24px;
        margin-right: 10px;
        flex-shrink: 0;
        border: none;
        margin-left: 5px;
    }

    .testimonial-card {
        background: #ffffff;
        border-radius: 15px;
        padding: 20px;
        margin: 30px;
        box-shadow: 0 4px 8px rgba(0 40 255 / 25%);
        text-align: left;
        width: 650px;
        /* max-height: 270px; */
        position: relative;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .testimonial-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .quote {
        font-size: 75px;
        color: #001154 !important;
        position: absolute;
        padding-top: 35px;
        top: 5px;
        left: 15px;
    }

    .quote:before {
        color: #ff7900 !important;
    }

    .testimonial-title {
        font-weight: bold;
        margin: 10px 0px 10px 35px;
    }

    .testimonial-text {
        height: 170px;
        font-size: 0.9rem;
        margin-bottom: 10px;
        text-align: justify;
        overflow: auto;
        padding: 10px 20px;

    }

    @media screen and (max-width: 1250px) {
        .content-section {
            display: grid;
        }

        .nav-arrow {
            font-size: 40px;
            margin: 0 20px;
        }

        .navigation {
            /* display: ; */
            top: 0%;
        }

        .testimonial-card {
            width: auto;
        }
    }

    @media screen and (max-width: 550px) {
        .profile-section {
            display: grid;
        }

    }

    /*alumni testimonial css end*/

    .owl-carousel .owl-stage-outer {
        overflow: hidden !important;
        overflow-x: hidden !important;
        padding: 0rem 0;
    }
</style>
<section id="content">

    <div class="container-fluid  my-0 px-2">
        <div class="row ps-4">
            <div class="col-md-6 pt-0 pt-md-4 ps-md-5 mb-4">
                <h1 class=" mt-5 mb-5  banner-main-heading">Welcome to <span
                        style="font-weight:700!important;">the TMU Alumni Association </span></h1>
                <a href="https://admissions.tmu.ac.in/" class="tmu-btn btn-1 me-md-4 py-1 px-3 py-xl-2 px-xl-5 "> Apply Now</a>
            </div>
            <div class="col-12 col-md-6">
                <div class="pe-lg-4 position-relative p-0">
                    <div style="z-index: 2;">
                        <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/iXHRmCyHszY?si=BcZ5NOfT-V8ECc6z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="z-index: 2; margin:0;"></iframe> -->
                        <img src="{{asset('/assets/img/banner/alumni/Alumni.webp')}}" alt="" class="p-0 m-0">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="box-container ">
        <div class="box">
            <h2 class="college-main-heading">Welcome to TMU Alumni Association</h2>
            <div class="row">
                <div class="col-12 px-2 px-md-5">
                    <p style="text-align: justify;">Welcome to the Teerthankar Mahaveer University (TMU) Alumni Page! Our alumni community is a vibrant network of professionals who are making a difference in various fields around the world. We are proud of our graduates and their achievements. This page is designed to help you stay connected with the university and fellow alumni.</p>
                    <p style="text-align: justify;">Here, you can find updates on alumni events, share your success stories, and access resources to support your ongoing career development. Join us in celebrating the legacy of TMU and contribute to the growth of our global alumni network. Stay in touch, stay inspired, and continue to make an impact!</p><br>
                    <a href="{{route('alumni.overview')}}" class="tmu-btn btn-1 py-2 mt-4 ms-2 mt-2" title="Know More">Know More</a>

                </div>

            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row align-items-center alimni-login-box">
            <div class="col-md-8">
                <div class="d-flex flex-wrap gap-2">
                    <!-- Repeat this block for each profile image -->
                    <img src="{{asset('/assets/img/department/alumni/people/mukesh2.jpg')}}" alt="Profile Image" class="profile-img">
                    <img src="{{asset('/assets/img/department/alumni/people/1.jpg')}}" alt="Profile Image" class="profile-img">
                    <img src="{{asset('/assets/img/department/alumni/people/Ashi_Jain.jpg')}}" alt="Profile Image" class="profile-img">
                    <img src="{{asset('/assets/img/department/alumni/people/Ishan_Vishnoi.jpg')}}" alt="Profile Image" class="profile-img">
                    <img src="{{asset('/assets/img/department/alumni/people/Konain_Iqbal.jpg')}}" alt="Profile Image" class="profile-img">
                    <img src="{{asset('/assets/img/department/alumni/people/Mukesh_Kumar.jpg')}}" alt="Profile Image" class="profile-img">
                    <img src="{{asset('/assets/img/department/alumni/people/Priyanka_Chandna.jpg')}}" alt="Profile Image" class="profile-img">
                    <img src="{{asset('/assets/img/department/alumni/people/ritu.jpg')}}" alt="Profile Image" class="profile-img">
                    <img src="{{asset('/assets/img/department/alumni/people/Vishwas_Saxena_.png')}}" alt="Profile Image" class="profile-img">
                    <img src="{{asset('/assets/img/department/alumni/people/mukesh2.jpg')}}" alt="Profile Image" class="profile-img">
                    <img src="{{asset('/assets/img/department/alumni/people/1.jpg')}}" alt="Profile Image" class="profile-img">
                    <img src="{{asset('/assets/img/department/alumni/people/Ashi_Jain.jpg')}}" alt="Profile Image" class="profile-img">
                    <img src="{{asset('/assets/img/department/alumni/people/Ishan_Vishnoi.jpg')}}" alt="Profile Image" class="profile-img">
                    <img src="{{asset('/assets/img/department/alumni/people/Konain_Iqbal.jpg')}}" alt="Profile Image" class="profile-img">
                    <img src="{{asset('/assets/img/department/alumni/people/Mukesh_Kumar.jpg')}}" alt="Profile Image" class="profile-img">
                    <img src="{{asset('/assets/img/department/alumni/people/Priyanka_Chandna.jpg')}}" alt="Profile Image" class="profile-img">
                    <img src="{{asset('/assets/img/department/alumni/people/ritu.jpg')}}" alt="Profile Image" class="profile-img">
                    <img src="{{asset('/assets/img/department/alumni/people/Vishwas_Saxena_.png')}}" alt="Profile Image" class="profile-img">
                </div>
            </div>
            <div class="col-md-4 text-center text-md-start">
                <h4>Search and <strong>network</strong> with alums across programs and batches</h4>
                <a href="http://portal.tmu.ac.in/" class="tmu-btn btn-4 py-2 mt-4 ms-2 mt-2">Login / SignUp</a>
            </div>
        </div>
    </div>

    <section class="container">
        <div class="testimonial-container">
            <div class="image-container">
                <div class="navigation">
                    <span class="nav-arrow" onclick="showPreviousReview()">&#10094;</span>
                    <span class="nav-arrow" onclick="showNextReview()">&#10095;</span>
                </div>
                <div class="thumb" onclick="displayReviewByIndex(0)" style="background-image: url('/assets/img/department/alumni/people/1.png');"></div>
                <div class="thumb" onclick="displayReviewByIndex(1)" style="background-image: url('/assets/img/department/alumni/people/2.png');"></div>
                <div class="thumb" onclick="displayReviewByIndex(2)" style="background-image: url('/assets/img/department/alumni/people/3.png');"></div>
                <div class="thumb" onclick="displayReviewByIndex(3)" style="background-image: url('/assets/img/department/alumni/people/4.png');"></div>
                <div class="thumb" onclick="displayReviewByIndex(4)" style="background-image: url('/assets/img/department/alumni/people/8.jpg');"></div>
                <div class="thumb" onclick="displayReviewByIndex(5)" style="background-image: url('/assets/img/department/alumni/people/7.png');"></div>
            </div>
        </div>
        <div class="content-section">
            <div class="profile-section">
                <img id="profile-picture" class="profile-picture" src="" alt="Profile Image" />
                <div class="profile-details">
                    <h2 id="profile-name"></h2>
                    <div class="profile-info">
                        <p><img src="{{asset('/assets/img/icons/alumni/user.svg')}}" class="alumni-icon" /><span id="profile-designation"></span></p>
                        <p><img src="{{asset('/assets/img/icons/alumni/office-building.svg')}}" class="alumni-icon" /><span id="profile-company"></span></p>
                        <p><img src="{{asset('/assets/img/icons/alumni/book.svg')}}" class="alumni-icon" /><span id="profile-course"></span></p>
                        <p><img src="{{asset('/assets/img/icons/alumni/calendar.svg')}}" class="alumni-icon" /><span id="profile-graduationYear"></span></p>
                    </div>
                </div>
            </div>
            <div class="testimonial-card">
                <div id="testimonial-wrapper" class="text">
                    <div class="quote"></div>
                    <div class="testimonial-title">Rediscovering Dreams with upGrad Campus</div>
                    <div class="testimonial-text review-text">"I always wanted to be a game developer, so I began searching for universities related to my interest. I found one in Japan and applied. My happiness ..."</div>
                </div>
            </div>
        </div>
    </section>

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
                                                                <div class="slide" style="background: url('{{ $event->monaco_image_path }}') no-repeat center bottom; background-size: cover; height: 200px;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>


                                            <div class="p-2">
                                                <div class="entry-title">
                                                    <a href="{{'news/'.$event->n_slug}}" target="_blank" style="font-size: 18px; font-weight: 500; ">{{ Str::limit($event->event_title, 70) }}</a>
                                                </div>
                                                <div class="entry-meta pt-2">
                                                    <ul>
                                                        <li><i class="uil uil-schedule"></i> {{$event->event_date}}</li>
                                                        <li><a href="{{'news/'.$event->n_slug}}" target="_blank">Read More</a></li>
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
                                @foreach($activeBlogs as $blog)
                                <div class="item">
                                    <article class="mb-0 entry event col-12">
                                        <div class="grid-inner bg-white row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm blogheight">
                                            <div class="col-md-5 mb-md-0">
                                                <a href="{{ url('blog/' . $blog->n_slug) }}" class="entry-image mb-0 h-100">
                                                    <img src="{{ asset($blog->monaco_image_path) }}" alt="{{ $blog->post_title }}" class="rounded-2 w-100 object-cover">
                                                    <div class="bg-overlay">
                                                        <div class="bg-overlay-content justify-content-start align-items-start">
                                                            <div class="badge bg-light text-dark rounded-pill">Latest Blog</div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-md-7 p-4 pt-0 pb-0">
                                                <div class="entry-meta no-separator mb-1 mt-0">
                                                    <ul>
                                                        <li><a href="#" class="text-uppercase fw-medium">{{ $blog->formatted_date }}</a></li>
                                                    </ul>
                                                </div>

                                                <div class="entry-title nott">
                                                    <a href="{{ url('blog/' . $blog->n_slug) }}" style="font-size: 18px; font-weight: 500;">{{ Str::limit($blog->post_title, 70) }}</a>
                                                </div>

                                                <div class="entry-content my-3">
                                                    <p style="font-size: 14px;">{{ Str::limit($blog->post_description, 90) }}</p>
                                                </div>
                                                <div class="entry-meta no-separator">
                                                    <ul>
                                                        <li><a href="#" class="fw-normal"><i class="uil uil-map-marker"></i>
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

                                    @foreach($activeBlogs as $blog)
                                    <div class="entry col-12">
                                        <div class="grid-inner row g-0">
                                            <div class="col-auto">
                                                <div class="entry-image">
                                                    <a href="{{ url('blog/' . $blog->n_slug) }}"><img src="{{ asset($blog->monaco_image_path) }}" alt="Image" loading="lazy"></a>
                                                </div>
                                            </div>
                                            <div class="col ps-3">
                                                <div class="entry-title">
                                                    <h4><a href="{{ url('blog/' . $blog->n_slug) }}">{{$blog->post_title}}</a></h4>
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
                                        <span>07, January</span>
                                    </div>
                                    <div class="notice-content">
                                        <p>Join Mr. Earnest Lamuel, alumnus of the College of Nursing and Mental Health Nurse at Swansea Bay University Health Board, UK, for an alumni session on navigating the UK nursing registration process. Date: 7th January 2025, Time: 12:00 PM, Venue: College of Nursing, TMU. Gain valuable insights from his inspiring journey!</p>
                                    </div>
                                    <div class="notice-meta">
                                        <span style="margin-right: 15px;"><img src="{{asset('assets/img/icons/placeholder.svg')}}" width="16px" height="16px" loading="lazy">
                                            College of Nursing</span>
                                        <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px"> 07, January</span>
                                    </div>
                                </div>
                                <hr class="notice-separator">
                                <div class="notice">
                                    <div class="notice-pub">
                                        <span>28, September</span>
                                    </div>
                                    <div class="notice-content">
                                        <p>TMIMT hosted an Alumni Talk on 28th Sept 2024 with Mr. Shobhit Jain, HR leader at Saudi German Health Group, discussing HR management in the healthcare sector.</p>
                                    </div>
                                    <div class="notice-meta">
                                        <span style="margin-right: 15px;"><img src="{{asset('assets/img/icons/placeholder.svg')}}" width="16px" height="16px" loading="lazy">
                                            Management College </span>
                                        <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px"> 26, September</span>
                                    </div>
                                </div>
                                <hr class="notice-separator">
                                <div class="notice">
                                    <div class="notice-pub">
                                        <span>28, September</span>
                                    </div>
                                    <div class="notice-content">
                                        <p>TMU hosted an alumni session on 28th Sept 2024 at FOE with Mr. Abhinav Ranjan, Cloud Security Manager at Accenture, sharing insights on careers in cloud security.</p>
                                    </div>
                                    <div class="notice-meta">
                                        <span style="margin-right: 15px;"><img src="{{asset('assets/img/icons/placeholder.svg')}}" width="16px" height="16px" loading="lazy">
                                            Fcaulty of Engineering </span>
                                        <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px"> 26, September</span>
                                    </div>
                                </div>
                                <hr class="notice-separator">
                                <div class="notice">
                                    <div class="notice-pub">
                                        <span>24, September</span>
                                    </div>
                                    <div class="notice-content">
                                        <p>Alumni session on 24th Sept 2024 at TMU’s Pharmacy College featured Dr. Vibhor Agarwal, Director of Ivory Healthcare, discussing career opportunities in the medical device industry.</p>
                                    </div>
                                    <div class="notice-meta">
                                        <span style="margin-right: 15px;"><img src="{{asset('assets/img/icons/placeholder.svg')}}" width="16px" height="16px" loading="lazy">
                                            College of Pharmacy </span>
                                        <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px"> 22, September</span>
                                    </div>
                                </div>
                                <hr class="notice-separator">
                                <div class="notice">
                                    <div class="notice-pub">
                                        <span>18, May</span>
                                    </div>
                                    <div class="notice-content">
                                        <p>Alumni Talk on May 18, 2024, at TMU’s Dental College featured Dr. Surbhi Priyadarshi, MDS Gold Medalist & Assistant Professor at SGT University, inspiring students on dental career opportunities.</p>
                                    </div>
                                    <div class="notice-meta">
                                        <span style="margin-right: 15px;"><img src="{{asset('assets/img/icons/placeholder.svg')}}" width="16px" height="16px" loading="lazy">
                                            Dental College </span>
                                        <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px"> 16, May</span>
                                    </div>
                                </div>
                                <hr class="notice-separator">
                                <div class="notice">
                                    <div class="notice-pub">
                                        <span>06, May</span>
                                    </div>
                                    <div class="notice-content">
                                        <p>Alumni Talk held on 16th May 2024 at TMU’s Nursing College featured Mr. Neyaz Ahmed Lone, Gold Medalist & AIIMS-NORCET 2024 AIR 74, sharing his inspiring journey.</p>
                                    </div>
                                    <div class="notice-meta">
                                        <span style="margin-right: 15px;"><img src="{{asset('assets/img/icons/placeholder.svg')}}" width="16px" height="16px" loading="lazy">
                                            College of Nursing</span>
                                        <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px"> 16, May</span>
                                    </div>
                                </div>
                                <hr class="notice-separator">

                                <div class="notice">
                                    <div class="notice-pub">
                                        <span>01, May</span>
                                    </div>
                                    <div class="notice-content">
                                        <p>Alumni Talk by Dr. Surbhi Priyadarshi, MDS-Gold Medalist, on 18.05.2024 at L.T. Dental College. Gain insights on careers in dental sciences and academic pathways!</p>
                                    </div>
                                    <div class="notice-meta">
                                        <span style="margin-right: 15px;"><img src="{{asset('assets/img/icons/placeholder.svg')}}" width="16px" height="16px" loading="lazy">
                                            Dental College</span>
                                        <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px"> 18, May</span>
                                    </div>
                                </div>
                                <hr class="notice-separator">
                                <div class="notice">
                                    <div class="notice-pub">
                                        <span>01, May</span>
                                    </div>
                                    <div class="notice-content">
                                        <p>Alumni Talk by Mr. Neyaz Ahmed Lone, AIIMS-NORCET-2024 rank holder, on 16.05.2024 at L.T. Nursing. Gain insights on exam preparation and time management!</p>
                                    </div>
                                    <div class="notice-meta">
                                        <span style="margin-right: 15px;"><img src="{{asset('assets/img/icons/placeholder.svg')}}" width="16px" height="16px">
                                            Nursing College </span>
                                        <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px"> 16,
                                            May </span>
                                    </div>
                                </div>
                                <hr class="notice-separator">
                                <div class="notice">
                                    <div class="notice-pub">
                                        <span>01, May</span>
                                    </div>
                                    <div class="notice-content">
                                        <p>Alumni Talk by Mr. Rishab Sharma, Territory Manager, Adama India Pvt. Ltd., Sitapur, on 04.05.2024 at L.T. Agriculture. Join us for insights on agriculture careers!</p>
                                    </div>
                                    <div class="notice-meta">
                                        <span style="margin-right: 15px;"><img src="{{asset('assets/img/icons/placeholder.svg')}}" width="16px" height="16px">
                                            Agriculture College</span>
                                        <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px"> 04th, May</span>
                                    </div>
                                </div>
                                <hr class="notice-separator">
                                <div class="notice">
                                    <div class="notice-pub">
                                        <span>10, April</span>
                                    </div>
                                    <div class="notice-content">
                                        <p>Alumni Session: Dr. Renu Yadav on Education & Philosophy. Join us on 12.04.2024 at College of Education to learn from her inspiring journey and insights!</p>
                                    </div>
                                    <div class="notice-meta">
                                        <span style="margin-right: 15px;"><img src="{{asset('assets/img/icons/placeholder.svg')}}" width="16px" height="16px">
                                            CCSIT</span>
                                        <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px"> 12, April</span>
                                    </div>
                                </div>
                                <hr class="notice-separator">
                                <div class="notice">
                                    <div class="notice-pub">
                                        <span>10, April</span>
                                    </div>
                                    <div class="notice-content">
                                        <p>Alumni Talk: Dr. Nishant Johri shares his journey from TMU to City, University of London. Join us on 16.04.2024 at College of Pharmacy for valuable insights!</p>
                                    </div>
                                    <div class="notice-meta">
                                        <span style="margin-right: 15px;"><img src="{{asset('assets/img/icons/placeholder.svg')}}" width="16px" height="16px">
                                            Pharmacy College</span>
                                        <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px"> 16, April</span>
                                    </div>
                                </div>
                                <hr class="notice-separator">
                                <div class="notice">
                                    <div class="notice-pub">
                                        <span>20, April</span>
                                    </div>
                                    <div class="notice-content">
                                        <a href="">
                                            <p>Alumni Session: Hands-on Workshop on Basic Life Support by Mr. Manas Jain, Team Leader, National Heart Institute, on 25.04.2024 at College of Nursing. Join us!</p>
                                        </a>
                                    </div>
                                    <div class="notice-meta">
                                        <span style="margin-right: 15px;"><img src="{{asset('assets/img/icons/placeholder.svg')}}" width="16px" height="16px">
                                            Nursing College</span>
                                        <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px"> 25, April</span>
                                    </div>
                                </div>
                                <hr class="notice-separator">
                                <div class="notice">
                                    <div class="notice-pub">
                                        <span>10, March</span>
                                    </div>
                                    <div class="notice-content">
                                        <p>Alumni Session: Nishant Jain, Sr. Sales Officer at Indigo Paints, Ghaziabad, on 20.03.2024 at TMIMT. MBA/BBA students are invited to join and learn!</p>
                                    </div>
                                    <div class="notice-meta">
                                        <span style="margin-right: 15px;"><img src="{{asset('assets/img/icons/placeholder.svg')}}" width="16px" height="16px">
                                            CCSIT</span>
                                        <span><img src="assets/img/icons/calendar.svg" width="16px" height="16px"> 20, March</span>
                                    </div>
                                </div>
                                <hr class="notice-separator">

                            </div>
                        </div>
                    </aside>



                </div>
                <!-- 
												Side Menu Code Ends Here
											 -->


            </div>
        </div>
    </section><!-- #content end -->




    <!--<div id="container" class="mb-5 mt-5" style="height: 500px; margin: 0 auto;"></div>-->

    <section>
        <div class="container-fluid mt-5 ">
            <h2 class="tmu-text-primary text-center">
                <span>Our </span><span> Recruiters</span>
            </h2>
            <div class="marquee my-5 py-5 pt-4">
                <section class="marquee-content">
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/alumni/face_academy.png')}}" alt="face academy visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/alumni/Tata%20Motors.png')}}" alt="Tata motors visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/alumni/Cetpa.png')}}" alt="cetpa visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/alumni/Tosha%20International.png')}}" alt="tosha inernational visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/alumni/tci.png')}}" alt="TCI visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/alumni/wipro.png')}}" alt="Wipro visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/alumni/torrent_gas.png')}}" alt="Torrent gas visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/alumni/munjal_auto.png')}}" alt="munjal auto visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/alumni/smart_brain.png')}}" alt="smart brain visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/alumni/infosys.png')}}" alt="infosys visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/alumni/ford-logo.png')}}" alt="ford visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/alumni/tech_mahindra.png')}}" alt="tech mahindra visit TMU for recruitment"></a>
                    </div>
                </section>
                <section class="marquee-content">
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/alumni/face_academy.png')}}" alt="face academy visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/alumni/Tata%20Motors.png')}}" alt="Tata motors visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/alumni/Cetpa.png')}}" alt="cetpa visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/alumni/Tosha%20International.png')}}" alt="tosha inernational visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/alumni/tci.png')}}" alt="TCI visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/alumni/wipro.png')}}" alt="Wipro visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/alumni/torrent_gas.png')}}" alt="Torrent gas visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/alumni/munjal_auto.png')}}" alt="munjal auto visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/alumni/smart_brain.png')}}" alt="smart brain visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/alumni/infosys.png')}}" alt="infosys visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/alumni/ford-logo.png')}}" alt="ford visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/alumni/tech_mahindra.png')}}" alt="tech mahindra visit TMU for recruitment"></a>
                    </div>
                </section>
            </div>
        </div>
    </section>

    <div class="container">
        <h2 class="tmu-text-primary text-center">
            <span>Alumni </span><span> Glimpse</span>
        </h2>
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="masonry-thumbs grid-container row row-cols-5" data-big="" data-lightbox="gallery">
                    <a class="grid-item" href="{{asset('/assets/img/gallery/collegegallery/alumni/th1.png')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/gallery/collegegallery/alumni/th1.png')}}" alt="Gallery Thumb 1"></a>
                    <a class="grid-item" href="{{asset('/assets/img/gallery/collegegallery/alumni/th2.png')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/gallery/collegegallery/alumni/th2.png')}}" alt="Gallery Thumb 2"></a>
                    <a class="grid-item" href="{{asset('/assets/img/gallery/collegegallery/alumni/th3.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/gallery/collegegallery/alumni/th3.jpg')}}" alt="Gallery Thumb 3"></a>
                    <a class="grid-item" href="{{asset('/assets/img/gallery/collegegallery/alumni/th4.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/gallery/collegegallery/alumni/th4.jpg')}}" alt="Gallery Thumb 4"></a>
                    <a class="grid-item" href="{{asset('/assets/img/gallery/collegegallery/alumni/th5.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/gallery/collegegallery/alumni/th5.jpg')}}" alt="Gallery Thumb 4"></a>
                    <a class="grid-item" href="{{asset('/assets/img/gallery/collegegallery/alumni/th6.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/gallery/collegegallery/alumni/th6.jpg')}}" alt="Gallery Thumb 6"></a>
                    <a class="grid-item" href="{{asset('/assets/img/gallery/collegegallery/alumni/th7.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/gallery/collegegallery/alumni/th7.jpg')}}" alt="Gallery Thumb 6"></a>
                    <a class="grid-item" href="{{asset('/assets/img/gallery/collegegallery/alumni/th9.webp')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/gallery/collegegallery/alumni/th9.webp')}}" alt="Gallery Thumb 9"></a>
                    <a class="grid-item" href="{{asset('/assets/img/gallery/collegegallery/alumni/th10.webp')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/gallery/collegegallery/alumni/th10.webp')}}" alt="Gallery Thumb 10"></a>
                    <a class="grid-item" href="{{asset('/assets/img/gallery/collegegallery/alumni/th11.webp')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/gallery/collegegallery/alumni/th11.webp')}}" alt="Gallery Thumb 1"></a>
                    <a class="grid-item" href="{{asset('/assets/img/gallery/collegegallery/alumni/th12.webp')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/gallery/collegegallery/alumni/th12.webp')}}" alt="Gallery Thumb 2"></a>
                    <a class="grid-item" href="{{asset('/assets/img/gallery/collegegallery/alumni/th8.webp')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/gallery/collegegallery/alumni/th8.webp')}}" alt="Gallery Thumb 3"></a>
                    <a class="grid-item" href="{{asset('/assets/img/gallery/collegegallery/alumni/th13.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/gallery/collegegallery/alumni/th13.jpg')}}" alt="Gallery Thumb 3"></a>
                    <a class="grid-item" href="{{asset('/assets/img/gallery/collegegallery/alumni/th14.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/gallery/collegegallery/alumni/th14.jpg')}}" alt="Gallery Thumb 3"></a>
                    <a class="grid-item" href="{{asset('/assets/img/gallery/collegegallery/alumni/th15.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/gallery/collegegallery/alumni/th15.jpg')}}" alt="Gallery Thumb 3"></a>
                </div>
            </div>
        </div>
    </div>
</section>
</div>



<script src="https://code.highcharts.com/maps/highmaps.js"></script>
<script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
<script src="https://code.highcharts.com/mapdata/custom/world.js"></script>
@endsection