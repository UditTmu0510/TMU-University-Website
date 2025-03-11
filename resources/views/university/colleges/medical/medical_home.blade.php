@extends('layouts.university.colleges.medical_home_without_sidebar')
@section('content')

<link rel="stylesheet" href="{{asset('/assets/css/tmu-testimonial.css')}}">
<link rel="stylesheet" href="{{asset('/assets/css/tmimt.css')}}">
<link rel="stylesheet" href="{{asset('/assets/css/college.css')}}">

<style>
    .tmu-testimonial .testimonial::before {
        top: 4rem;
    }
</style>

<section id="content">
    <div class="content-wrap py-0">
        <div class="container-fluid  my-0 px-2">
            <div class="row ps-4">
                <div class="col-md-6 pt-0 pt-md-4 ps-md-5 mb-4">
                    <h1 class=" mt-5 mb-5 banner-main-heading">Welcome to <br> <span
                            style="font-weight:700!important;">Teerthanker Mahaveer </span> Medical College and Research Centre</h1>


                </div>
                <div class="col-12 col-md-6">
                    <div class="pe-lg-4 position-relative p-0">
                        <div style="z-index: 2;">
                            <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/iXHRmCyHszY?si=BcZ5NOfT-V8ECc6z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="z-index: 2; margin:0;"></iframe> -->
                            <img src="{{asset('/assets/img/banner/medical/medical-banner.webp')}}" alt="" class="p-0 m-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="container my-3 mt-5 d-none d-md-block">
            <div class="row justify-content-center">
                <div class="col-6 col-lg-3 px-1">
                    <div class="card text-center py-3 rounded-0 fw-semibold ls-1">
                        <div class="card-body gap-4 text-tmu-primary under-banner-cards"> <span>Ranked 1st</span>
                            <br>
                            <h5>Among Private MBBS Colleges in UP</h5>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 px-1">
                    <div class="card text-center py-3 rounded-0 fw-semibold ls-1">
                        <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                            <span>Practical Exposure</span>
                            <br>
                            <h5>at TMU Hospital</h5>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 px-1">
                    <div class="card text-center py-3 rounded-0 fw-semibold ls-1">
                        <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                            <span>Well-equipped</span>
                            <br>
                            <h5>Modern Labs</h5>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 px-1">
                    <div class="card text-center py-3 rounded-0 fw-semibold ls-1">
                        <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                            <span>Guidance</span>
                            <br>
                            <h5>from Expert Faculty</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-2 mt-4 d-block d-md-none">
            <div id="under-banner-carouselExample" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#under-banner-carouselExample" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#under-banner-carouselExample" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-6">
                                <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                                    <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                                        <span>Ranked 1st</span>
                                        <br>
                                        <span class="d-block pt-1">Among Private MBBS <br>Colleges in UP</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                                    <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                                        <span>Practical Exposure</span>
                                        <br>
                                        <span class="d-block pt-1">at TMU Hospital</span>
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
                                        <span>Well-equipped</span>
                                        <br>
                                        <span class="d-block pt-1">Modern Labs</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                                    <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                                        <span>Guidance</span>
                                        <br>
                                        <span class="d-block pt-1">from Expert Faculty</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>





        <!-- admission details mobile section end -->


        <div class="box-container">
            <div class="box">
                <h2 class="college-main-heading">Teerthanker Mahaveer Medical College and Research Centre (TMMC&RC), Among Top Medical Colleges in India</h2>
                <div class="row">
                    <div class="col-12 px-2 px-md-5">
                        <p style="text-align: justify;">Teerthanker Mahaveer Medical College & Research Centre was established in 2008 with the approval of the Ministry of Health and Family Welfare for an admission intake of 150 MBBS students, which has been increased to 250 from the Academic Session 2024-25.</p></b>
                        <div class="read-more-content mt-0">
                            <p style="text-align: justify;">Choosing the right medical college is a critical decision that shapes your future as a healthcare professional. Teerthanker Mahaveer Medical College and Research Centre (TMMC&RC) stands out as one of the premier institutions in India, providing top-notch education and exceptional facilities. Let’s explore why TMMC&RC is the ideal choice for aspiring medical professionals.
                                </b></p>
                        </div>
                        <a href="javascript:void(0);" class="tmu-btn btn-1 py-2 mt-4 read-more ms-2 mt-2" title="Read More">Read More</a>

                    </div>

                </div>
            </div>
        </div>

        <!-- tabs sectiob -->

        <div class="container my-5 py-2">
            <ul class="nav nav-tabs justify-content-center py-2 gap-2 gap-md-5" id="myTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#Tab1"
                        type="button" role="tab" aria-controls="Tab1" aria-selected="true"><i
                            class="fas fa-lightbulb"></i> Approved by MCI</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#Tab2" type="button"
                        role="tab" aria-controls="Tab2" aria-selected="false"><i class="fas fa-briefcase"></i>
                        Hospital
                        Facilities</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#Tab3" type="button"
                        role="tab" aria-controls="Tab3" aria-selected="false"><i class="fas fa-book"></i> General
                        Surgery</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#Tab4" type="button"
                        role="tab" aria-controls="Tab4" aria-selected="false"><i class="fas fa-building"></i>
                        Radiology</button>
                </li>
            </ul>
            <div class="tab-content second ps-5 px-md-5" id="myTabContent">
                <div class="tab-pane fade show active" id="Tab1" role="tabpanel" aria-labelledby="tab1-tab">
                    <h3 class="mb-1">Approved by Medical Council of India</h3>
                    <p>It conducts Post Graduate degree (MD/MS) in Pre-Clinical subjects (Anatomy, Physiology,
                        Biochemistry),
                        Para-clinical subjects (Pathology, Microbiology, Pharmacology, Forensic Sciences) and
                        Clinical
                        subjects
                        (Community Medicine, General Medicine, Psychiatry, Dermatology, Respiratory Medicine,
                        Paediatrics,
                        General Surgery, Orthopaedics, Otorhinolaryngology (ENT), Ophthalmology, Obstetrics &
                        Gynaecology,
                        Anaesthesia, and Radio-diagnosis) with an intake of 126 seats.</p>
                </div>
                <div class="tab-pane fade" id="Tab2" role="tabpanel" aria-labelledby="tab2-tab">
                    <h3 class="mb-1">Hospital Facilities</h3>
                    <p>Hospital facilities of the Medical College and Research Centre provide modern health care
                        including critical care and emergency services to the population at large. In a short span
                        of
                        time, the hospital has developed into 900+ beds tertiary care teaching hospital with
                        facilities
                        to save lives. An emergency section and Intensive care units with various sub-specialities
                        like
                        ICCU, ICU, RICU, NICU, PICU, Obstetrics and Gynaecology, and Burn treatment have been added.
                    </p>
                </div>
                <div class="tab-pane fade" id="Tab3" role="tabpanel" aria-labelledby="tab3-tab">
                    <h3 class="mb-1">General Surgery</h3>
                    <p>Department of General Surgery provides facilities for Endoscopic Studies and Surgeries.
                        Department of Medicine facilitates Echocardiography, TMT and Cath lab. The hospital is also
                        equipped with facilities for Paediatric Surgery, Neuro Surgery, Urology, Cardiology, Cardiac
                        Surgery like Bypass Surgery, Valve Replacement, and Congenital Heart Disease, G I . Surgery,
                        Reconstructive Surgery, Joint Replacement Surgery, Cancer detection, Sterility Clinic, IVF
                        etc.
                    </p>
                </div>
                <div class="tab-pane fade" id="Tab4" role="tabpanel" aria-labelledby="tab4-tab">
                    <h3 class="mb-1">Radiology</h3>
                    <p>Department of Radiology provides Fluoroscopy, facilities for Ultrasound and colour Doppler
                        Studies, Digital X-Rays, CT scan, MRI and Mammography. The hospital is well equipped with
                        modern
                        Modular operation theaters for General Surgery, orthopaedics, Ophthalmology, ENT and
                        Obstetrics
                        and Gynaecology. Central Laboratory services are available for Pathological, Clinical
                        Biochemistry, Microbiology and Histopathology investigations.</p>
                </div>
            </div>
        </div>



        <!-- Gallery Section-->

        <div class="section bg-transparent mt-0" style="margin-bottom:30px;">
            <div class="row justify-content-center ">
                <div class="col-xl-10 col-lg-10 text-center d-none d-sm-block">

                    <h2 class="tmu-text-primary"><span>GALLERY</span></h2>

                </div>
                <div class="col-xl-10 col-lg-10 text-center d-block d-sm-none">
                    <h2 class="tmu-text-primary"><span>GALLERY</span></h2>

                </div>
            </div>

            <div class="owl-carousel owl-carousel-full image-carousel carousel-widget charity-card"
                data-stage-padding="20" data-margin="10" data-center="true" data-loop="true" data-nav="true"
                data-autoplay="2000" data-speed="400" data-pagi="true" data-items-xs="1" data-items-sm="2"
                data-items-md="2" data-items-lg="3" data-items-xl="4">

                <div class="oc-item text-start">
                    <img src="{{asset('/assets/img/gallery/collegegallery/medical/1.jpg')}}" alt="Image 1" class="rounded">

                </div>

                <div class="oc-item text-start">
                    <img src="{{asset('/assets/img/gallery/collegegallery/medical/2.jpg')}}" alt="Image 1" class="rounded">

                </div>

                <div class="oc-item text-start">
                    <img src="{{asset('/assets/img/gallery/collegegallery/medical/3.jpg')}}" alt="Image 1" class="rounded">

                </div>

                <div class="oc-item text-start">
                    <img src="{{asset('/assets/img/gallery/collegegallery/medical/4.jpg')}}" alt="Image 1" class="rounded">

                </div>

                <div class="oc-item text-start">
                    <img src="{{asset('/assets/img/gallery/collegegallery/medical/5.jpg')}}" alt="Image 1" class="rounded">

                </div>
                <div class="oc-item text-start">
                    <img src="{{asset('/assets/img/gallery/collegegallery/medical/6.jpg')}}" alt="Image 1" class="rounded">
                </div>
            </div>
        </div>


        <section id="content" class="prog-bm">
            <div class="content-wrap py-0" style="overflow: visible;">
                <!-- Code for the Desktop view -->
                <div class="container d-none d-lg-block">

                    <div class="col-xl-12 col-xl-10 text-center">
                        <h2 style=" line-height: 64px; color:#001055;" class="mb-5 w-100">
                            PROGRAMMES<span class="colour:##FF7900"> OFFERED</span></h2>
                    </div>

                    <div class="row ">
                        <div class="col-md-3">
                            <div class="list-group" id="list-tab" role="tablist">
                                <a class="programme-fetch-button pgroup list-group-item listream list-group-item-action rounded-3 shadow-sm" id="Undergraduate" data-ProgrammeLevel="UG" data-bs-toggle="list" href="#UG" role="tab" aria-controls="UG"><i class="fa-solid fa-computer fa-sm fakash"></i>&nbsp;Undergraduate

                                </a>
                                <a class="programme-fetch-button list-group-item listream list-group-item-action rounded-3 shadow-sm mt-2" id="Postgraduate" data-ProgrammeLevel="PG" data-bs-toggle="list" href="#PG" role="tab" aria-controls="PG"><i class="fa-solid fa-microchip fa-sm fakash"></i>&nbsp;Postgraduate
                                </a>

                                <!-- <a class="list-group-item listream list-group-item-action rounded-3 shadow-sm mt-2" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings"><i class="fa-solid fa-scale-unbalanced fa-sm fakash"></i>&nbsp;Law
                                    &nbsp;&nbsp;<span class="badge rounded-pill">05</span></a> -->
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="tab-content" id="nav-tabContent">

                                <!-- Home Tab starts here -->
                                <div class="tab-pane fade show programmes-data" id="UG" role="tabpanel" aria-labelledby="Undergraduate">

                                </div>

                                <!-- Home Tab  Ends  here -->


                                <!--  Home tab panel 2 Starts Here  --
								       ----------------------------- -->
                                <div class="tab-pane fade show programmes-data" id="PG" role="tabpanel" aria-labelledby="Postgraduate">


                                </div>
                                <!-- 
									/////Home tab 2 Ends Here/////
								 -->

                                <!-- 
									/////Home tab 3 Starts Here/////
								 -->

                                <div class="tab-pane fade" id="Doctoral" role="tabpanel" aria-labelledby="PHD">

                                </div>

                                <!-- 
									/////Home tab 3 Ends Here/////
										 -->

                                <!-- 
											/////Home tab 4 Starts Here/////
								 	-->
                                <!-- <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="card shadow-sm">
                                                <img src="https://images.pexels.com/photos/5668772/pexels-photo-5668772.jpeg?auto=compress&cs=tinysrgb&w=1600" height="178px" class="card-img-top" alt="Law image ">
                                                <div class="card-body progcardbody">

                                                    <h4 class="mb-2">BA - LLB (Hons.)</h4>
                                                </div>
                                                <div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                                    <div>
                                                    </div>
                                                    <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                                                        More</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="card shadow-sm progcard">
                                                <img src="https://thumbs.dreamstime.com/b/compliance-rules-law-regulation-policy-business-technology-concept-compliance-rules-law-regulation-policy-business-technology-112471593.jpg?w=768" height="178px" class="card-img-top" alt="...">
                                                <div class="card-body progcardbody">

                                                    <h4 class="mb-2">BBA - LLB (Hons.)</h4>
                                                </div>
                                                <div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                                    <div>
                                                    </div>
                                                    <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                                                        More</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="card shadow-sm">
                                                <img src="https://img.freepik.com/free-photo/judges-gavel-book-wooden-table-law-justice-concept-background_1150-9097.jpg?size=626&ext=jpg&ga=GA1.2.718553843.1681214208&semt=ais" height="178px">
                                                <div class="card-body progcardbody">

                                                    <h4 class="mb-2">LLM</h4>
                                                </div>
                                                <div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                                    <div>
                                                    </div>
                                                    <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                                                        More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

                                <!-- 
									/////Home tab 4 Ends Here/////
								 -->
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Code for the Desktop view Ends -->




                <!-- Code for the Mobile View Starts Here -->
                <div class="container d-block d-lg-none">





                    <div class="container mb-5 mt-5">
                        <div class="col-xl-12 col-lg-10 text-center">
                            <h2 class="h1 fw-bold tmu-text-primary text-uppercase" style="font-size: 30px; font-weight: 600; line-height: 40px; color:#000000; margin-bottom: 19px;">
                                <span>Programmes</span> <span>Offered</span>
                            </h2>
                        </div>

                        <button class="careers-accordion" data-ProgrammeLevel="UG"><span> <i class="fa-solid fa-computer fa-sm fakash"></i>&nbsp;&nbsp;Undergraduate</span> <span class="icon">+</span></button>
                        <div class="panel">
                            <ul class="progul" id="programmeUG">


                            </ul>
                        </div>
                        <!-- Add the horizontal line here -->
                        <hr class="horizontal-line">

                        <button class="careers-accordion" data-ProgrammeLevel="PG"><span><i class="fa-solid fa-microchip fa-sm fakash"></i>&nbsp;&nbsp;Postgraduate</span> <span class="icon">+</span></button>
                        <div class="panel">
                            <ul class="progul" id="programmePG">

                            </ul>
                        </div>
                        <!-- Add the horizontal line here -->
                        <hr class="horizontal-line">

                        <div class="panel">
                            <ul class="progul" id="programmeDoctoral">
                            </ul>
                        </div>
                        <hr class="horizontal-line">
                    </div>
                </div>
        </section>

        <section>
            <div class="container-xl tmu-testimonial mt-5 mb-3">

                <h2 class="tmu-text-primary my-0 mb-3"> <span>Testimonial</span></h2>

                <div class="owl-carousel owl-carousel-full image-carousel carousel-widget charity-card" style="overflow: visible;" data-stage-padding="20" data-margin="50" data-center="true" data-loop="true" data-nav="true" data-autoplay="2000" data-speed="2000" data-pagi="true" data-items-xs="1" data-items-sm="2" data-items-md="2" data-items-lg="3" data-items-xl="3">


                    @foreach($testimonials as $testimonial)
                    <div class="oc-item text-start">
                        <div class="media">
                            <img src="{{asset($testimonial->thumbnail_path)}}" class="me-3" alt="">
                            <div class="media-body">
                                <div class="testimonial">
                                    <p class="overview mb-3 fs-14">
                                        <b class="fs-16">{{$testimonial->student_name}}</b> <br>
                                        {{$testimonial['programme_name']['prog_name']}} ({{$testimonial->admitted_year}} - {{$testimonial->passout_year}})
                                        {{-- <span>
                         <a href="{{$testimonial->linkedin_url}}" class="px-2 py-1 linkedin-text">
                                        Linkedin <i class="bi bi-linkedin"></i>
                                        </a>
                                        </span> --}}
                                    </p>
                                    <p class="testimonial-content47">{{ $testimonial->testimonial_text }}</p>
                                </div>
                            </div>
                            <div class="mx-auto my-0 d-flex align-items-center tmu-fs-14">
                                <button class="tmu-btn btn-3 py-2 d-block pe-3" onclick="showTestimonialModal()">Read More <i class="bi bi-chevron-down"></i></button>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>

            </div>

            <!-- Testimonial Modal -->
            <div id="testimonialModal" class="tmu-modal">
                <div class="overlay" onclick="closeTestimonialModal()"></div>
                <div class="tmu-modal-box">
                    <div class="close-btn" onclick="closeTestimonialModal()">x</div>
                    <div class="tmu-testimonial bg-light">
                        <div class="media">
                            <img src="https://www.tmu.ac.in/monaco/assets/image/testimonials/abdul_india_mart_mba.webp" class="mr-3" alt="">
                            <div class="media-body">
                                <div class="testimonial">
                                    <p class="overview mb-3 testimonial-user-name"><b>Abdul Malik Khan</b>, MBA</p>
                                    <p class="testimonial-content">TMU, for me, is not just an MBA destination, it's the crucible where my leadership skills
                                        were forged. Beyond textbooks and case studies, TMU offered a dynamic learning
                                        environment where theories met practical challenges. It's a journey where I honed the
                                        skills that set me apart in the dynamic landscape of business and management.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</section>

<div class="container mb-5 mt-5">
    <h2 class="tmu-text-primary text-center"><span>Why Choose </span><span> Teerthanker Mahaveer Medical College & Research Centre</span></h2>
    <hr class="horizontal-line">

    <button class="careers-accordion">Why TMMC&RC is the Best Choice for You<span class="icon">+</span></button>
    <div class="panel active">
        <h3 class="tmu-text-primary fs-16 mb-0"><span>UGC-Approved with NAAC A</span><span> Accredited University</span></h3>
        <p class="text-justify">TMMC&RC is recognised by the University Grants Commission (UGC) and has been accredited with an 'A' grade by the National Assessment and Accreditation Council (NAAC). This accreditation is a testament to the quality of education and excellent infrastructure that the institution provides.</p>
        <h3 class="tmu-text-primary fs-16 mb-0"><span>Experiential Learning by</span><span> Highly Qualified Faculties</span></h3>
        <p class="text-justify">The faculty at TMMC&RC comprises highly qualified and experienced professionals who emphasise experiential learning. This approach ensures that students gain practical knowledge and are well-prepared for real-world medical challenges.</p>
        <h3 class="tmu-text-primary fs-16 mb-0"><span>Approved by the</span><span> Medical Council of India</span></h3>
        <p class="text-justify">TMMC&RC is approved by the Medical Council of India, ensuring that the curriculum and educational standards meet the national requirements for medical education.</p>


    </div>
    <!-- Add the horizontal line here -->
    <hr class="horizontal-line">

    <button class="careers-accordion">Top Programmes Offered with Diverse Specialisations<span class="icon">+</span></button>
    <div class="panel">
        <h3 class="tmu-text-primary fs-16 mb-0"><span>TMMC&RC offers a variety of Programme catering to</span><span> different interests and career aspirations in the medical field:</span></h3>
        <br>
        <h3 class="tmu-text-primary fs-16 mb-0">MBBS</h3>
        <ul class="m-ol-list ps-4 text-justify">
            <li>Comprehensive undergraduate Programme</li>
            <li>Strong emphasis on clinical skills and patient care</li>
        </ul>

        <h3 class="tmu-text-primary fs-16 mb-0">BSc</h3>
        <ul class="m-ol-list ps-4 text-justify">
            <li>Specialisationns in Nursing, Medical Laboratory Technology, and more</li>
            <li>Focus on practical and theoretical knowledge</li>
        </ul>
        <h3 class="tmu-text-primary fs-16 mb-0">MSc</h3>
        <ul class="m-ol-list ps-4 text-justify">
            <li>Advanced studies in various medical sciences</li>
            <li>Opportunities for research and specialisation</li>
        </ul>
        <h3 class="tmu-text-primary fs-16 mb-0">MD</h3>
        <ul class="m-ol-list ps-4 text-justify">
            <li>Postgraduate medical degree</li>
            <li>Specialized training in various medical fields</li>
        </ul>
        <h3 class="tmu-text-primary fs-16 mb-0">MS</h3>
        <ul class="m-ol-list ps-4 text-justify">
            <li>Postgraduate surgical degree</li>
            <li>Advanced surgical skills and techniques</li>
        </ul>
    </div>
    <!-- Add the horizontal line here -->
    <hr class="horizontal-line">
</div>



</section>


<br /><br />
<script src="{{asset('/assets/js/tmimt.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        // Click event for navbar buttons
        $('.programme-fetch-button').click(function() {

            var programme_level = this.getAttribute('data-ProgrammeLevel');

            // Ajax call to fetch programs of selected type
            $.ajax({
                url: '{{ route("fetch_programmes_by_level") }}',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    cd_id: 2,
                    programme_level: programme_level
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
                                        <img src="${program.programme_image_path}" class="card-img-top" alt="...">
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
                    $('#' + programme_level).html(programListHtml);
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
            var programme_level = this.getAttribute('data-ProgrammeLevel');
            // Ajax call to fetch programs of selected type
            $.ajax({
                url: '{{ route("fetch_programmes_by_level") }}',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    cd_id: 2,
                    programme_level: programme_level
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
                    $('#programme' + programme_level).html(programListHtml);
                },
                error: function(xhr, status, error) {

                    console.log('the error is' + error);
                }
            });
        });

        // Programme fetch code for the mobile view ends here

    });
</script>
@endsection