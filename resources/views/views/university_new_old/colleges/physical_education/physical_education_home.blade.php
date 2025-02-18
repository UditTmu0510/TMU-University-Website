@extends('layouts.university.colleges.physical_education_home_without_sidebar')
@section('content')

<link rel="stylesheet" href="{{asset('/assets/css/tmu-testimonial.css')}}">
<link rel="stylesheet" href="{{asset('/assets/css/tmimt.css')}}">
<link rel="stylesheet" href="{{asset('/assets/css/college.css')}}">

<!-- Content
		============================================= -->
<section id="content">
    <div class="content-wrap py-0">
        <div class="container-fluid  my-0 px-2">
            <div class="row ps-4">
                <div class="col-md-6 pt-0 pt-md-4 ps-md-5 mb-4">
                    <h1 class=" mt-5 mb-5 d-none d-md-block  banner-main-heading">Welcome to the <br> <span style="font-weight:700!important;">Best Physical Education</span> College in UP</h1>
                    <h1 class=" mt-5 mb-3 d-block d-md-none" style="color:#001055; text-transform: capitalize; font-weight:700!important; font-size:24px">Welcome to the <span>Best Physical Education</span> College in UP,</h1>
                    <a href="#" class="tmu-btn btn-1 me-4 py-1 px-3 py-xl-2 px-xl-4"> Download Brocher</a>
                    <a href="#" class="tmu-btn btn-2 py-1 px-3 py-xl-2 px-xl-4">Apply Now</a>
                </div>
                <div class="col-12 col-md-6">
                    <div class="pe-lg-4 position-relative p-0">
                        <div style="z-index: 2;">
                            <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/iXHRmCyHszY?si=BcZ5NOfT-V8ECc6z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="z-index: 2; margin:0;"></iframe> -->
                            <img src="{{asset('/assets/img/banner/physical_education/banner.png')}}" alt="" class="p-0 m-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-3 d-none d-md-block">
            <div class="row justify-content-center">
                <div class="col-6 col-lg-3 px-1">
                    <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                        <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                            <span>BCCI </span>
                            <br>
                            <span class="d-block pt-1">Certified Coaches</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 px-1">
                    <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                        <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                            <span>Top-Tier </span>
                            <br>
                            <span class="d-block pt-1">Indoor Outdoor Stadium</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 px-1">
                    <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                        <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                            <span>TOSS </span>
                            <br>
                            <span class="d-block pt-1">Cricket Academy</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 px-1">
                    <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                        <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                            <span>Member </span>
                            <br>
                            <span class="d-block pt-1">of AIU Sports Council</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-2 d-block d-md-none">
            <div id="under-banner-carouselExample" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#under-banner-carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#under-banner-carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-6">
                                <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                                    <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                                        <span>BCCI </span>
                                        <br>
                                        <span class="d-block pt-1">Certified Coaches</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                                    <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                                        <span>Top-Tier </span>
                                        <br>
                                        <span class="d-block pt-1">Indoor Outdoor Stadium</span>
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
                                        <span>TOSS </span>
                                        <br>
                                        <span class="d-block pt-1">Cricket Academy</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                                    <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                                        <span>Member </span>
                                        <br>
                                        <span class="d-block pt-1">of AIU Sports Council</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="box-container">
            <div class="box">
                <h1 class="college-main-heading">TMIMT College of Physical Education </h1>
                <div class="row">
                    <div class="col-12 px-2 px-md-5">
                        <p class="m-0 p-0"><b>Sports can deliver you a successful career.</b></p>
                        <p style="text-align: justify;">TMIMT College of Physical Education stands behind its claim, having groomed professionals, athletes, and other careers within the sports industry. The establishment of 2011, in its more than a decade-long journey, has evolved itself into a top-notch private institution for sports enthusiasts. The college provides the best facilities like a gym, indoor stadium, coaches, and faculties to groom compassionate sports personnel. TMIMT College of Physical Education, through its rigorous practical training and regular participation in inter–intra and other state and national level competitions, ensures to carve you into your best.</p>
                        <div class="read-more-content mt-0">
                            <p class="m-0 p-0" style="text-align: justify;">TMIMT College of Physical Education is a premier institution dedicated to fostering excellence in the field of physical education and sports. Situated under the aegis of Teerthanker Mahaveer University (TMU), TMIMT College of Physical Education stands out as a beacon for aspiring sports professionals. But why is physical education so crucial? It's more than just sports and games; it's about cultivating a healthy, active lifestyle and developing the skills necessary for personal and professional growth.</p>
                            <p class="m-0 p-0"><b>Join the team of the best private college for Physical Education in UP to excel beyond your imagination.</b></p>
                        </div>
                        <a href="javascript:void(0);" class="tmu-btn btn-1 py-2 mt-4 read-more ms-2 mt-2" title="Read More">Read More</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-5 py-2">
            <ul class="nav nav-tabs justify-content-center py-2 gap-2 gap-md-5" id="myTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#Tab1" type="button" role="tab" aria-controls="Tab1" aria-selected="true"><i class="fas fa-lightbulb"></i> Key Highlights</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#Tab2" type="button" role="tab" aria-controls="Tab2" aria-selected="false"><i class="fas fa-briefcase"></i> Placement/Internship</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#Tab3" type="button" role="tab" aria-controls="Tab3" aria-selected="false"><i class="fas fa-book"></i> Curriculum</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#Tab4" type="button" role="tab" aria-controls="Tab4" aria-selected="false"><i class="fas fa-building"></i> Infrastructure</button>
                </li>
            </ul>
            <div class="tab-content second ps-5 px-md-5" id="myTabContent">
                <div class="tab-pane fade show active" id="Tab1" role="tabpanel" aria-labelledby="tab1-tab">
                    <h3>Key Highlights</h3>
                    <ul class="m-ol-list ps-4 mb-0">
                        <li>Follow Outcome-based education and Psycho-motor skills..</li>
                        <li>Qualified, committed and competent educators to shape the personalities of teacher trainees into successful professionals.</li>
                        <li>The college has spacious, furnished classrooms with ICT facilities, contemporary laboratories, a library, and modern equipment for learning and research purposes.</li>
                    </ul>
                    <div class="read-more-content">
                        <ul class="m-ol-list ps-4">
                            <li>Excellent indoor facilities are available for table tennis, basketball, volleyball, badminton, gymnastics, yoga, squash and skating.</li>
                            <li>Excellent outdoor facilities are available for cricket, football, hockey, track & field and tennis.</li>
                            <li>Leadership Training Camp.</li>
                            <li>Language Proficiency Classes.</li>
                            <li>Sports Scholarship and financial support to meritorious sports person or Providing Sports and Jain Scholarship Scheme.</li>
                            <li>To develop the leading capacity to organise different sporting events.</li>
                        </ul>
                    </div>
                    <a href="javascript:void(0);" class="read-more ms-0 mt-1" title="Read More">Read More</a>
                </div>
                <div class="tab-pane fade" id="Tab2" role="tabpanel" aria-labelledby="tab2-tab">
                    <h3>Placement/Internship</h3>
                    <ul class="m-ol-list ps-4">
                        <li>Internships are successfully done as per the NCTE norms.</li>
                        <li>The institute takes pride in excellent placement records. The college has a dedicated placement cell to facilitate campus placement opportunities.</li>
                        <li>The college also with the help of tie-ups, and collaborations ensures that students can find good work opportunities.</li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="Tab3" role="tabpanel" aria-labelledby="tab3-tab">
                    <h3>Curriculum</h3>
                    <p>TMIMT College of Physical Education ensures a good academic journey that follows an outcome-based education system, with semester-based patterns integrating the traditional syllabus and the quantitative amount of practical training. The college also oversees constant up-gradation of the curriculum through a feedback mechanism. Creating a technology-aided environment while providing CTLD training and language proficiency programs to the students to boost their overall personality. </p>
                </div>
                <div class="tab-pane fade" id="Tab4" role="tabpanel" aria-labelledby="tab4-tab">
                    <h3>Infrastructure</h3>
                    <ul class="m-ol-list ps-4 mb-0">
                        <li>Physiotherapy Clinic</li>
                        <li>Dietary Policy</li>
                        <li>Sports Scholarship</li>
                        <li>International-level multipurpose Indoor sports complex for Volleyball/Badminton/Basketball/Gymnastics/Yoga/Skating</li>
                    </ul>
                    <div class="read-more-content">
                        <ul class="m-ol-list ps-4">
                            <li>Excellent pavilion with cricket ground.</li>
                            <li>Two Kabaddi court</li>
                            <li>One Taekwondo court</li>
                            <li>Two Squash court</li>
                            <li>Two National Level Gymnasiums (Male & Female)</li>
                            <li>Four tables for Table-tennis</li>
                            <li>Pool table of Snooker</li>
                        </ul>
                    </div>
                    <a href="javascript:void(0);" class="read-more ms-0 mt-1" title="Read More">Read More</a>
                </div>
            </div>
        </div>

        <!----- section Start-->
      <section id="content" class="prog-bm">
            <div class="content-wrap py-0" style="overflow: visible;">
                <!-- Code for the Desktop view -->
                <div class="container d-none d-lg-block">

                    <div class="col-xl-12 col-xl-10 text-center">
                        <h2 style=" line-height: 64px; color:#001055;" class="mb-5 w-100">
                            PROGRAMMES<span class="color:##FF7900"> OFFERED</span></h2>
                    </div>

                    <div class="row ">
                        <div class="col-md-3">
                            <div class="list-group" id="list-tab" role="tablist">
                                <a class="programme-fetch-button pgroup list-group-item listream list-group-item-action rounded-3 shadow-sm" id="Undergraduate" data-ProgrammeLevel="UG" data-bs-toggle="list" href="#UG" role="tab" aria-controls="UG"><i class="fa-solid fa-computer fa-sm fakash"></i>&nbsp;Undergraduate
                                  
                                </a>
                                <a class="programme-fetch-button list-group-item listream list-group-item-action rounded-3 shadow-sm mt-2" id="Postgraduate" data-ProgrammeLevel="PG" data-bs-toggle="list" href="#PG" role="tab" aria-controls="PG"><i class="fa-solid fa-microchip fa-sm fakash"></i>&nbsp;Postgraduate
                                  </a>
                                <a class="programme-fetch-button list-group-item listream list-group-item-action rounded-3 shadow-sm mt-2" id="PHD" data-ProgrammeLevel="Doctoral" data-bs-toggle="list" href="#Doctoral" role="tab" aria-controls="Doctoral"><i class="fa-solid fa-business-time fa-sm fakash"></i>&nbsp;Doctrate
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
                            <h1 class="h1 fw-bold tmu-text-primary text-uppercase" style="font-size: 30px; font-weight: 600; line-height: 40px; color:#000000; margin-bottom: 19px;">
                                <span>Programmes</span> <span>Offered</span>
                            </h1>
                        </div>

                        <button class="careers-accordion" data-ProgrammeLevel="UG"><span> <i class="fa-solid fa-computer fa-sm fakash"></i>&nbsp;&nbsp;Undergraduate</span> <span class="icon">+</span></button>
                        <div class="panel">
                            <ul class="progul" id="programmeUG">
                                

                            </ul>
                        </div>
                        <!-- Add the horizontal line here -->
                        <hr class="horizontal-line">

                        <button class="careers-accordion" data-ProgrammeLevel="PG" ><span><i class="fa-solid fa-microchip fa-sm fakash"></i>&nbsp;&nbsp;Postgraduate</span> <span class="icon">+</span></button>
                        <div class="panel">
                            <ul class="progul" id="programmePG">
                                
                            </ul>
                        </div>
                        <!-- Add the horizontal line here -->
                        <hr class="horizontal-line">
                        <button class="careers-accordion" data-ProgrammeLevel="Doctoral"><span><i class="fa-solid fa-business-time fa-sm fakash"></i>&nbsp;&nbsp;Doctrate</span> <span class="icon">+</span></button>
                        <div class="panel">
                            <ul class="progul" id="programmeDoctoral">
                                

                            </ul>
                        </div>
                        <!-- Add the horizontal line here -->
                        <!-- <hr class="horizontal-line">
                        <button class="careers-accordion">
                            <span><i class="fa-solid fa-scale-unbalanced fa-sm fakash"></i>&nbsp;Law</span> <span class="icon">+</span></button>
                        <div class="panel">
                            <ul class="progul">
                                <li class="progli">
                                    <div class="card shadow-sm progcard">
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
                                </li>


                                <li class="progli">

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

                                </li>



                                <li class="progli">

                                    <div class="card shadow-sm progcard">
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

                                </li>

                            </ul>
                        </div> -->
                        <!-- Below code is sample if you need to add new column -->
                        <!-- <hr class="horizontal-line">
                        <button class="careers-accordion">Are there opportunities for international students to study at the college?<span class="icon">+</span></button>
                        <div class="panel">
                            <p>Yes, the College welcomes applications from international students and offers various programmes and services to support their academic and personal success. International students are encouraged to reach out to the college's admissions office for more information on the application process and available resources.</p>
                        </div> -->
                        <!-- Add the horizontal line here -->
                        <hr class="horizontal-line">
                    </div>



                    <!-- Code for the Mobile View Ends Here -->

                </div>
        </section>
        <!-----Courses section completed-->



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
                        <span>
                            <a href="https://www.linkedin.com/in/udit-gupta-ug0510/" class="px-2 py-1 linkedin-text">
                                Linkedin <i class="bi bi-linkedin"></i>
                            </a>
                        </span>
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
        </section>

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



        <!-- FAQS and accordian -->

        <div class="container mb-5 mt-5">
            <h2 class="tmu-text-primary text-center"><span>Frequently Asked </span><span> Questions</span></h2>
            <hr class="horizontal-line">

            <button class="careers-accordion">Why Choose TMIMT College of Physical Education?<span class="icon">+</span></button>
            <div class="panel">
                <p class="text-justify">Choosing the right college is pivotal, and TMIMT College of Physical Education offers a plethora of reasons why it should be your top choice.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>UGC-Approved with NAAC A</span><span> Accredited University</span></h3>
                <p class="text-justify">The university is UGC-approved and boasts a prestigious NAAC A Accreditation. This recognition ensures that the college meets the highest standards of education and infrastructure, providing students with an exceptional learning experience.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Experiential Learning by</span><span> Highly Qualified Faculties</span></h3>
                <p class="text-justify">At TMIMT College of Physical Education, learning goes beyond textbooks. The college prides itself on experiential learning, guided by highly qualified faculty members who bring a wealth of knowledge and real-world experience to the classroom.</p>
            </div>
            <!-- Add the horizontal line here -->
            <hr class="horizontal-line">

            <button class="careers-accordion">Programmes Offered<span class="icon">+</span></button>
            <div class="panel">
                <p class="text-justify">TMIMT College offers a range of programmes tailored to meet the diverse interests and career aspirations of students in the field of physical education.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Bachelor of Physical Education</span><span> and Sports (BPES)</span></h3>
                <p class="text-justify">The BPES program focuses on the broad aspects of physical education and sports, offering a comprehensive curriculum that includes sports management, coaching, and fitness training.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Bachelor of Physical</span><span> Education (BPEd)</span></h3>
                <p class="text-justify">The BPEd program lays a solid foundation in physical education, blending theoretical knowledge with practical skills essential for a successful career in sports and fitness.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Master of Physical</span><span> Education (MPEd)</span></h3>
                <p class="text-justify">The MPEd program is designed for those looking to advance their expertise and leadership skills in physical education, preparing them for higher roles in academia, sports management, and coaching.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>PhD in </span><span>Physical Education</span></h3>
                <p class="text-justify">For those inclined towards research and academic excellence, TMIMT offers a PhD program in physical education, fostering innovation and scholarly contributions to the field.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Bachelor of Physical Education</span><span> and Sports (BPES)</span></h3>
                <p class="text-justify">The BPES program focuses on the broad aspects of physical education and sports, offering a comprehensive curriculum that includes sports management, coaching, and fitness training. State-of-the-Art Infrastructure</p>
            </div>
            <!-- Add the horizontal line here -->
            <hr class="horizontal-line">

            <button class="careers-accordion">College Infrastructure<span class="icon">+</span></button>
            <div class="panel">
                <p class="text-justify">A key highlight of TMIMT College is its state-of-the-art infrastructure, designed to support both academic and athletic excellence.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>International-level</span><span> Sports Infrastructure</span></h3>
                <p class="text-justify">The college features international-level sports facilities, including well-maintained fields, tracks, and courts that provide students with the best training environment.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Modern Classrooms</span><span> for Interactive Sessions</span></h3>
                <p class="text-justify">TMIMT's modern classrooms are equipped with the latest technology to facilitate interactive learning and engagement.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>State-of-the-art Indoor</span><span> and Outdoor Stadiums</span></h3>
                <p class="text-justify">The college boasts impressive indoor and outdoor stadiums that host various sports events, competitions, and training sessions.</p>
            </div>
            <!-- Add the horizontal line here -->
            <hr class="horizontal-line">

            <button class="careers-accordion">Faculty and Coaching<span class="icon">+</span></button>
            <div class="panel">
                <p class="text-justify">TMIMT takes pride in its highly qualified and experienced faculty, along with BCCI-certified coaches who offer unparalleled guidance and training to students.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Highly Qualified and</span><span> Experienced Faculty</span></h3>
                <p class="text-justify">The faculty at TMIMT are not just educators but mentors who are committed to nurturing the talents and potential of each student.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>BCCI Certified</span><span> Coaches</span></h3>
                <p class="text-justify">With BCCI-certified coaches, students receive top-notch training and insights, enhancing their skills and performance in various sports.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Student Support and</span><span> Development</span></h3>
                <p class="text-justify">TMIMT is dedicated to the holistic development of its students, offering robust support systems and opportunities for growth.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Up to 100%</span><span> Scholarship Assistance</span></h3>
                <p class="text-justify">Financial constraints should never be a barrier to education. TMIMT provides up to 100% scholarship assistance to deserving students, ensuring everyone has access to quality education.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>100% Placement Assistance</span><span> with a Strong Record</span></h3>
                <p class="text-justify">The college has a remarkable track record of 100% placement assistance, helping students secure promising careers in the sports industry.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Extracurricular</span><span> Sports Clubs</span></h3>
                <p class="text-justify">Extracurricular activities are a vital part of student life at TMIMT, with various sports clubs that encourage participation, teamwork, and leadership.</p>
            </div>
            <!-- Add the horizontal line here -->
            <hr class="horizontal-line">

            <button class="careers-accordion">Campus Facilities<span class="icon">+</span></button>
            <div class="panel">
                <p class="text-justify">TMIMT's campus is designed to offer a comfortable and enriching environment for students.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Comfortable Hostel</span><span> Facilities</span></h3>
                <p class="text-justify">The college provides comfortable hostel facilities, ensuring a safe and conducive living environment for students.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Gym and</span><span> Fitness Centre</span></h3>
                <p class="text-justify">A well-equipped gym and fitness centre is available for students to maintain their fitness and training routines.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Wi-Fi Enabled</span><span> Campus</span></h3>
                <p class="text-justify">With a fully Wi-Fi-enabled campus, students have seamless access to online resources and digital learning platforms.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Shopping Stores</span><span> and Cafeterias</span></h3>
                <p class="text-justify">On-campus shopping stores and cafeterias cater to the daily needs and convenience of students, providing a variety of options.</p>
            </div>
            <!-- Add the horizontal line here -->
            <hr class="horizontal-line">

            <button class="careers-accordion">Anti-Ragging and Safety Measures<span class="icon">+</span></button>
            <div class="panel">
                <p class="text-justify">TMIMT is committed to ensuring a safe and supportive environment for all students.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Anti-Ragging</span><span> Campus</span></h3>
                <p class="text-justify">The college has a strict anti-ragging policy, creating a secure and welcoming atmosphere for new students.</p>
            </div>
            <!-- Add the horizontal line here -->
            <hr class="horizontal-line">

            <button class="careers-accordion">Extracurricular and Sports Events<span class="icon">+</span></button>
            <div class="panel">
                <p class="text-justify">TMIMT regularly hosts concerts, sports events, and championships, fostering a vibrant campus life and community spirit.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Regular Concerts and</span><span> Sports Events</span></h3>
                <p class="text-justify">These events provide students with opportunities to showcase their talents, build camaraderie, and engage with the broader community.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Sports</span><span> Championships</span></h3>
                <p class="text-justify">Participation in sports championships at various levels helps students gain competitive experience and recognition.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Global Exposure and</span><span> Opportunities</span></h3>
                <p class="text-justify">TMIMT offers students numerous opportunities for global exposure and professional growth.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Member of AIU</span><span> Sports Council</span></h3>
                <p class="text-justify">As a member of the AIU Sports Council, TMIMT aligns with national and international sports standards and networks.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Sports Skill Development</span><span> Programmes</span></h3>
                <p class="text-justify">Various skill development programs are designed to enhance students' competencies in different sports and physical activities.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Hands-on Training in Real</span><span> Sports Scenarios</span></h3>
                <p class="text-justify">Practical training sessions simulate real sports scenarios, providing students with hands-on experience.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Research and</span><span> Development</span></h3>
                <p class="text-justify">The college fosters a culture of research and innovation in sports and physical education.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Sports Research and</span><span> Entrepreneurial Development Programmes</span></h3>
                <p class="text-justify">Research programs and entrepreneurial initiatives encourage students to explore new ideas and solutions in sports.</p>
            </div>
            <!-- Add the horizontal line here -->
            <hr class="horizontal-line">

            <button class="careers-accordion">Placement Opportunities<span class="icon">+</span></button>
            <div class="panel">
                <p class="text-justify">TMIMT's strong industry connections and dedicated placement cell ensure excellent career prospects for graduates.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>100% Placement Assistance</span><span> with an Excellent Track Record</span></h3>
                <p class="text-justify">The college's impressive placement record speaks volumes about its commitment to student success.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Global Sports</span><span> Opportunities</span></h3>
                <p class="text-justify">Graduates of TMIMT have access to global sports opportunities, opening doors to exciting and rewarding careers.</p>
            </div>
            <!-- Add the horizontal line here -->
            <hr class="horizontal-line">

            <button class="careers-accordion">Conclusion <span class="icon">+</span></button>
            <div class="panel">
                <p class="text-justify">In conclusion, TMIMT College of Physical Education offers an unparalleled blend of academic excellence, practical training, and comprehensive student support. Whether you aspire to be a sports professional, coach, or researcher, TMIMT provides the perfect platform to launch your career. Ready to take the next step? Join TMIMT and be part of a legacy of excellence in physical education.</p>
            </div>
            <!-- Add the horizontal line here -->
            <hr class="horizontal-line">

            <button class="careers-accordion">FAQs<span class="icon">+</span></button>
            <div class="panel">
                <p class="text-justify"><strong>Q. What is physical education?</strong></p>
                <p class="text-justify">Ans: Physical education is a discipline focused on the development of physical fitness, motor skills, and overall health through various physical activities and sports.</p>
                <p class="text-justify"><strong>Q. What programs does TMIMT offer?</strong></p>
                <p class="text-justify">Ans: TMIMT offers a range of programs including BPEd, MPEd, PhD in Physical Education, PGDYEd, and BPES.</p>
                <p class="text-justify"><strong>Q. How does TMIMT support student placements?</strong></p>
                <p class="text-justify">Ans: TMIMT provides 100% placement assistance with a strong track record, offering career guidance, training, and connections with leading sports organizations.</p>
                <p class="text-justify"><strong>Q. What facilities are available on campus?</strong></p>
                <p class="text-justify">Ans: The campus features state-of-the-art sports infrastructure, modern classrooms, comfortable hostels, a gym, Wi-Fi, shopping stores, and cafeterias.</p>
                <p class="text-justify"><strong>Q. How can I apply to TMIMT?</strong></p>
                <p class="text-justify">Ans: Interested candidates can apply through the TMU website or contact the admissions office for detailed application procedures.</p>
            </div>
            <hr class="horizontal-line">

        </div>

</section><!-- #content end -->

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
                cd_id: 18,
                programme_level:programme_level 
            },
            success: function(response) {
                // Handle JSON response and populate program list
                console.log(response);
                var programs = response.programs;
                var programListHtml = '';
                let i =0;
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
                $('#'+programme_level).html(programListHtml);
            },
            error: function(xhr, status, error) {
              
                console.log('the error is'+error);
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
                cd_id: 18,
                programme_level: programme_level
            },
            success: function(response) {
                // Handle JSON response and populate program list
                console.log(response);
                var programs = response.programs;
                var programListHtml = '';
                let i =0;
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
                $('#programme'+programme_level).html(programListHtml);
            },
            error: function(xhr, status, error) {
              
                console.log('the error is'+error);
            }
        });
    });

// Programme fetch code for the mobile view ends here

});

</script>

@endsection