@extends('layouts.university.colleges.education_home_without_sidebar')
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
                    <h1 class=" mt-5 mb-5 d-none d-md-block  banner-main-heading">Welcome to the <br> <span style="font-weight:700!important;">Best Education</span> College in UP</h1>
                    <h1 class=" mt-5 mb-3 d-block d-md-none" style="color:#001055; text-transform: capitalize; font-weight:700!important; font-size:24px">Welcome to the <span>Best Education</span> College in UP,</h1>
                    <!--<a href="#" class="tmu-btn btn-1 me-4 py-1 px-3 py-xl-2 px-xl-4"> Download Brochure</a>-->
                    <a href="https://admissions.tmu.ac.in/" target="_blank" class="tmu-btn btn-2 py-1 px-3 py-xl-2 px-xl-4">Apply Now</a>
                </div>
                <div class="col-12 col-md-6">
                    <div class="pe-lg-4 position-relative p-0">
                        <div style="z-index: 2;">
                            <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/iXHRmCyHszY?si=BcZ5NOfT-V8ECc6z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="z-index: 2; margin:0;"></iframe> -->
                            <img src="{{asset('/assets/img/banner/education/education-banner.webp')}}" alt="" class="p-0 m-0">
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
                            <span>CTLD: </span>
                            <br>
                            <span class="d-block pt-1">Soft Skills Training Department</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 px-1">
                    <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                        <br>
                        <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                            <span>Psychomotor </span>
                            <br>
                            <span class="d-block pt-1">Implementation Centre</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 px-1">
                    <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                        <br>
                        <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                            <span>Integrated</span>
                            <br>
                            <span class="d-block pt-1">Dual Degree Programmes</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 px-1">
                    <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                        <br>
                        <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                            <span>Approved </span>
                            <br>
                            <span class="d-block pt-1">by NCTE and SCERT</span>
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
                                <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1"> <br>
                                    <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                                        <span>CTLD: </span>
                                        <br>
                                        <span class="d-block pt-1">Soft Skills Training Department</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1"> <br>
                                    <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                                        <span>Psychomotor </span>
                                        <br>
                                        <span class="d-block pt-1">Implementation Centre</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-6">
                                <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1"> <br>
                                    <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                                        <span>Integrated</span>
                                        <br>
                                        <span class="d-block pt-1">Dual Degree Programmes</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                                    <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                                        <span>Approved </span>
                                        <br>
                                        <span class="d-block pt-1">by NCTE and SCERT</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- <div class="box-container">
            <div class="box">
                <h1 class="college-main-heading">Teerthanker Mahaveer Faculty of Education</h1>
                <div class="row">
                    <div class="col-12 px-2 px-md-5">
                        <p class="m-0 p-0"><b></b></p>
                        <p style="text-align: justify;"></p>

                        <button class="tmu-btn btn-1 py-2 mt-4">Know More!</button>

                    </div>

                </div>
            </div>
        </div> -->

        <div class="box-container">
            <div class="box">
                <h1 class="college-main-heading">Teerthanker Mahaveer Faculty of Education</h1>
                <div class="row">
                    <div class="col-12 px-2 px-md-5">
                        <p style="text-align: center;"><b>Education is the most powerful weapon which you can use to change the world.” - Nelson Mandela.</b></p>
                        <p style="text-align: justify;">At the Faculty of Education, TMU, we dedicate ourselves to providing excellence in teacher education. As approved by the prestigious NCTE & SCERT, Lucknow, we have been shaping future generations through quality education since 2003. Our recently introduced four-year BSc (Honours with Research) and BA (Honours with Research) programmes further enhance our offerings, providing students with comprehensive academic opportunities. Step into the realm of the best education college in UP.</p>
                        <div class="read-more-content mt-0">
                            <p style="text-align: justify;">At Teerthanker Mahaveer University (TMU), our Faculty of Education College stands as a beacon of excellence in the realm of Bachelor of Education (B.Ed.) programmes. We pride ourselves on nurturing future educators who are not only academically proficient but also equipped with practical skills essential for today's classrooms.</p>
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
                        <li>Get guidance and attend practice sessions for various competitive exams,including TGT, PGT, CTET, Super TET, NET, JRF, and more.</li>
                        <li>Participate in Scouts and Guides along with National Service Scheme (NSS) activities.</li>
                        <li>Attend classes to enhance your soft skills and communication skills, preparing you for a successful career.</li>
                    </ul>
                    <div class="read-more-content">
                        <ul class="m-ol-list ps-4">
                            <li>Be a part of the regular activities in villages to promote education and community development.</li>
                            <li>Enhance practical learning experiences by implementing psychomotor skills.</li>
                            <li>Stay updated with regular educational and leadership talks on emerging issues to broaden your horizon.</li>
                        </ul>
                    </div>
                    <a href="javascript:void(0);" class="read-more ms-0 mt-1" title="Read More">Read More</a>
                </div>
                <div class="tab-pane fade" id="Tab2" role="tabpanel" aria-labelledby="tab2-tab">
                    <h3>Placement/Internship</h3>
                    <p>At the leading Education College, we understand the importance of practical experience and industry exposure. That's why we offer valuable internship opportunities in reputed schools of the NCR, allowing you to apply your knowledge in real-world settings.
                        <br><br>Moreover, our dedicated Corporate Resource Centre (CRC) organises campus placement drives, connecting you with renowned education institutions for potential employment. With comprehensive training on resume building, interview techniques, grooming, and presentation skills, we ensure you are well-prepared to secure your dream job and kick-start your successful career.
                    </p>
                </div>
                <div class="tab-pane fade" id="Tab3" role="tabpanel" aria-labelledby="tab3-tab">
                    <h3>Curriculum</h3>
                    <p>The comprehensive curriculum at the Faculty of Education combines theoretical knowledge with practical experiences, thus enhancing the teaching efficiency of the students. Aligned with the NEP 2020, our curriculum emphasises global competitiveness, academic excellence, and hands-on teaching skills. Additionally, we offer value-added courses and MOOC opportunities for continuous professional development. It helps students to develop critical problem-solving abilities and a scientific attitude. Thus, we empower educators to be catalysts for transformation in schools and communities at large. The Faculty of Education is fulfilling the dream of becoming a teacher in primary, middle, secondary and higher education.
                        Stay ahead in the ever-evolving field of Education!</p>
                </div>
                <div class="tab-pane fade" id="Tab4" role="tabpanel" aria-labelledby="tab4-tab">
                    <h3>Infrastructure</h3>
                    <p>From state-of-the-art classrooms to cutting-edge facilities, we provide an environment that nurtures knowledge, creativity, and growth. Access</p>
                    <ul class="m-ol-list ps-4 mb-0">
                        <li>Rich Library</li>
                        <li>Physics Lab</li>
                        <li>Chemistry Lab</li>
                        <li>Zoology Lab</li>
                        <li>Botany Lab</li>
                    </ul>
                    <div class="read-more-content">
                        <ul class="m-ol-list ps-4">
                            <li>Psychology Lab</li>
                            <li>Mathematics Lab</li>
                            <li>Music Lab</li>
                            <li>Computer Lab</li>
                            <li>Lecture Theatre (LT)</li>
                            <li>Hostel Facilities</li>
                            <li>Medical Services</li>
                            <li>Sports Facilities</li>
                        </ul>
                        <p>Step into the temple of teaching!</p>
                    </div>
                    <a href="javascript:void(0);" class="read-more ms-0 mt-1" title="Read More">Read More</a>
                </div>
            </div>
        </div>



        <!-----Courses section Start-->
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
        <div class="container-fluid mt-5 ">
            <h2 class="tmu-text-primary text-center">
                <span>Our </span><span> Recruiters</span>
            </h2>
            <div class="marquee my-5 py-5 pt-4">
                
            
                <section class="marquee-content">
                        @foreach($recruiters as $recruiter)
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset($recruiter->recruiter_image_path)}}" alt="{{$recruiter->alt_tag}}"></a>
                    </div>
                   @endforeach
                </section>
                <section class="marquee-content">
                        @foreach($recruiters as $recruiter)
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset($recruiter->recruiter_image_path)}}" alt="{{$recruiter->alt_tag}}"></a>
                    </div>
                   @endforeach
                </section>
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
                        <span>
                        <a href="{{$testimonial->linkedin_url}}" class="px-2 py-1 linkedin-text">
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

        <!-- Accordian data and FAQs-->

        <div class="container mb-5 mt-5">
            <h2 class="tmu-text-primary text-center"><span>Frequently Asked </span><span> Questions</span></h2>
            <hr class="horizontal-line">

            <button class="careers-accordion">Why Choose TMU for Your Education Journey<span class="icon">+</span></button>
            <div class="panel">
                <p class="text-justify">Choosing TMU means opting for an institution committed to holistic education, where academic rigor meets hands-on experience, ensuring our graduates are prepared to excel in their careers.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>UGC-Approved with NAAC A</span><span> Accreditation</span></h3><br>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>A Trusted Seal of Quality</span></h3>
                <p class="text-justify">The University Grants Commission (UGC) approval and National Assessment and Accreditation Council (NAAC) A accreditation are testament to TMU's adherence to stringent quality standards in education.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>What UGC Approval and NAAC A Accreditation</span><span> Mean for You</span></h3>
                <p class="text-justify">For students, this accreditation translates into a guarantee of quality education, recognized nationally and internationally. It assures a curriculum that meets global standards and opens doors to a wide range of career opportunities.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Benefits of Accreditation in</span><span> Education</span></h3>
                <p class="text-justify">Accreditation ensures that the educational institution follows best practices in teaching, infrastructure, and student support services, fostering an environment conducive to learning and growth.</p>
            </div>
            <!-- Add the horizontal line here -->
            <hr class="horizontal-line">

            <button class="careers-accordion">Experiential Learning by Highly Qualified Faculties<span class="icon">+</span></button>
            <div class="panel">
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Learning Beyond</span><span> Textbooks</span></h3>
                <p class="text-justify">At TMU, learning extends beyond textbooks through experiential learning methods facilitated by our highly qualified faculty members.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Meet Our Dedicated</span><span> Faculty Members</span></h3>
                <p class="text-justify">Our faculty comprises experienced educators and professionals who bring real-world insights into the classroom, enriching the learning experience and preparing students for practical challenges in their careers.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Impact of Faculty on Your</span><span> Educational Experience</span></h3>
                <p class="text-justify">Through personalized guidance and mentorship, our faculty ensures that each student receives the attention needed to excel academically and develop essential skills.</p>
            </div>
            <hr class="horizontal-line">

            <button class="careers-accordion">Centre for Teaching, Learning, and Development<span class="icon">+</span></button>
            <div class="panel">
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Enhancing Skills Beyond the</span><span> Classroom</span></h3>
                <p class="text-justify">TMU's Centre for Teaching, Learning, and Development is a hub of innovative programs aimed at enhancing students' skills beyond traditional academic learning.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Innovative Programmes and</span><span> Workshops</span></h3>
                <p class="text-justify">From workshops on pedagogical techniques to seminars on educational trends, our center provides opportunities for students to engage in continuous professional development, ensuring they stay ahead in the dynamic field of education.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Hands-On Learning</span><span> Initiatives</span></h3>
                <p class="text-justify">Practical teaching demonstrations, collaborative projects, and community engagement initiatives are integral parts of our curriculum, offering students hands-on experience and fostering critical thinking and problem-solving skills.</p>
            </div>
            <hr class="horizontal-line">

            <button class="careers-accordion">Global Career Prospects<span class="icon">+</span></button>
            <div class="panel">
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Your Passport to</span><span> International Opportunities</span></h3>
                <p class="text-justify">TMU's global outlook and extensive network of alumni in diverse industries provide our graduates with unparalleled career prospects worldwide.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>TMU's Global Network and</span><span> Alumni Success Stories</span></h3>
                <p class="text-justify">Our alumni are employed in prestigious educational institutions and organizations globally, a testament to TMU's commitment to preparing students for international careers and leadership roles.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>How TMU Opens Doors to</span><span> Global Careers</span></h3>
                <p class="text-justify">Through partnerships with international universities and multinational corporations, TMU facilitates internships, exchange programs, and job placements, ensuring our graduates are well-equipped for global competitiveness.</p>
            </div>
            <hr class="horizontal-line">

            <button class="careers-accordion">On-Campus Hostel Facilities<span class="icon">+</span></button>
            <div class="panel">
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Your Home Away from</span><span> Home</span></h3>
                <p class="text-justify">TMU offers state-of-the-art on-campus hostel facilities that provide students with a safe, comfortable, and conducive living environment.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Comfort and Safety at TMU's</span><span> Hostels</span></h3>
                <p class="text-justify">Our hostels are equipped with modern amenities, round-the-clock security, and dedicated staff to ensure students' well-being and create a supportive community atmosphere.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Facilities and Amenities</span><span> Provided</span></h3>
                <p class="text-justify">From spacious rooms and recreational areas to dining halls and study spaces, TMU's hostels cater to all aspects of student life, promoting personal growth and academic success.</p>
            </div>
            <hr class="horizontal-line">

            <button class="careers-accordion">Up To 100% Scholarship Assistance<span class="icon">+</span></button>
            <div class="panel">
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Making Education</span><span> Affordable</span></h3>
                <p class="text-justify">TMU is committed to making quality education accessible to all deserving students through a range of scholarships and financial aid programs.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>TMU's Commitment to Financial</span><span> Accessibility</span></h3>
                <p class="text-justify">Whether based on merit, need, or special circumstances, our scholarships aim to alleviate financial burdens and empower students to focus on their academic and professional goals.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Types of Scholarships</span><span> Available</span></h3>
                <p class="text-justify">Merit-based scholarships, sports scholarships, and scholarships for economically disadvantaged students are among the options available, ensuring that no deserving student is left behind due to financial constraints.</p>
            </div>
            <hr class="horizontal-line">

            <button class="careers-accordion">Strong Industry Connections for Real-World Insights<span class="icon">+</span></button>
            <div class="panel">
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Bridging Academia with</span><span> Industry</span></h3>
                <p class="text-justify">TMU's strong ties with industry leaders and experts ensure that our curriculum remains relevant and responsive to industry needs.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Guest Lectures and</span><span> Industry Visits</span></h3>
                <p class="text-justify">Regular interactions with professionals, guest lectures, and industry visits provide students with firsthand knowledge and insights into current trends, challenges, and best practices in the field of education.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Networking Opportunities for</span><span> Students</span></h3>
                <p class="text-justify">These connections not only enrich the learning experience but also create networking opportunities that can lead to internships, mentorships, and job placements in leading organizations.</p>
            </div>
            <hr class="horizontal-line">

            <button class="careers-accordion">Modern Classrooms for Interactive Sessions<span class="icon">+</span></button>
            <div class="panel">
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Learning in the Digital</span><span> Age</span></h3>
                <p class="text-justify">TMU's classrooms are equipped with advanced technology to facilitate interactive and engaging learning experiences.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Technology Integration in</span><span> Education</span></h3>
                <p class="text-justify">From smart boards to online resources, technology plays a pivotal role in enhancing teaching effectiveness and student engagement, preparing them for a digitally driven educational landscape.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>How Modern Classrooms</span><span> Enhance Learning</span></h3>
                <p class="text-justify">Interactive sessions, multimedia presentations, and virtual simulations empower students to explore concepts actively, collaborate with peers, and develop critical thinking skills essential for lifelong learning.</p>
            </div>
            <hr class="horizontal-line">

            <button class="careers-accordion">Educational Seminars and Conferences<span class="icon">+</span></button>
            <div class="panel">
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Broadening Your</span><span> Horizons</span></h3>
                <p class="text-justify">TMU encourages intellectual discourse and academic exploration through a series of seminars, conferences, and symposiums.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>TMU's Commitment to</span><span> Academic Discourse</span></h3>
                <p class="text-justify">These events bring together scholars, researchers, and practitioners to discuss emerging trends, share innovative ideas, and inspire new approaches in education and related fields.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Highlights from Past</span><span> Seminars and Conferences</span></h3>
                <p class="text-justify">From keynote speakers to panel discussions, TMU hosts events that stimulate intellectual curiosity, foster interdisciplinary learning, and promote lifelong learning among students and faculty alike.</p>
            </div>
            <hr class="horizontal-line">

            <button class="careers-accordion">Sports Championships<span class="icon">+</span></button>
            <div class="panel">
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Fostering Physical and</span><span> Mental Well-Being</span></h3>
                <p class="text-justify">TMU believes in the holistic development of students, promoting sports and physical activities as integral components of their educational experience.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>TMU's Sporting</span><span> Achievements</span></h3>
                <p class="text-justify">Our state-of-the-art sports facilities and coaching programs have enabled TMU athletes to excel in various regional, national, and international championships, showcasing their talents on a global stage.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Opportunities for Student</span><span> Athletes</span></h3>
                <p class="text-justify">Whether in individual sports or team events, TMU encourages participation, sportsmanship, and leadership skills through athletics, contributing to students' overall health and well-being.</p>
            </div>
            <hr class="horizontal-line">

            <button class="careers-accordion">Extracurricular Clubs<span class="icon">+</span></button>
            <div class="panel">
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Beyond the Classroom:</span><span> Exploring Interests</span></h3>
                <p class="text-justify">TMU offers a diverse range of extracurricular clubs and activities to support students' personal and professional interests outside of academics.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Diverse Club</span><span> Offerings at TMU</span></h3>
                <p class="text-justify">From cultural societies and hobby clubs to leadership programs and community service groups, students have numerous opportunities to engage in enriching activities that complement their academic pursuits.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Benefits of Participation</span><span> in Clubs</span></h3>
                <p class="text-justify">Participation in extracurricular activities fosters teamwork, creativity, and leadership skills, providing students with a well-rounded educational experience and valuable life skills.</p>
            </div>
            <hr class="horizontal-line">

            <button class="careers-accordion">Electrifying Concerts and Dynamic Events<span class="icon">+</span></button>
            <div class="panel">
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Vibrant Campus</span><span> Life</span></h3>
                <p class="text-justify">TMU's cultural calendar is filled with electrifying concerts, dynamic events, and celebrations that enrich the campus experience beyond academics.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Cultural and Social</span><span> Events at TMU</span></h3>
                <p class="text-justify">From music festivals to cultural showcases, these events showcase the diversity of our student body and promote cultural exchange, creativity, and camaraderie among students and faculty.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Highlights from</span><span> Recent Events</span></h3>
                <p class="text-justify">TMU's events are not just about entertainment but also about fostering a sense of belonging and pride among students, creating memories that last a lifetime.</p>
            </div>
            <hr class="horizontal-line">

            <button class="careers-accordion">Gym and Fitness Centre<span class="icon">+</span></button>
            <div class="panel">
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Promoting Health and</span><span> Wellness</span></h3>
                <p class="text-justify">TMU's gym and fitness centre are dedicated to promoting physical fitness, mental well-being, and overall health among students.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Facilities and</span><span> Programmes Offered</span></h3>
                <p class="text-justify">Equipped with modern exercise equipment, professional trainers, and wellness programs, our fitness centre encourages students to adopt a healthy lifestyle and balance their academic pursuits with physical activity.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Fitness Tips from</span><span> TMU's Wellness Experts</span></h3>
                <p class="text-justify">Through personalized fitness assessments, nutrition counselling, and group fitness classes, TMU supports students in achieving their health and wellness goals, ensuring they thrive both inside and outside the classroom.</p>
            </div>
            <hr class="horizontal-line">

            <button class="careers-accordion">Shopping Stores and Cafeterias<span class="icon">+</span></button>
            <div class="panel">
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Convenience and</span><span> Choices</span></h3>
                <p class="text-justify">TMU's campus is designed to cater to students' daily needs with shopping stores and cafeterias offering a variety of dining options and essential services.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>TMU's Retail and</span><span> Dining Options</span></h3>
                <p class="text-justify">From cosy cafes to food courts, our dining facilities serve nutritious meals, snacks, and beverages that cater to diverse tastes and dietary preferences, ensuring students are well-nourished throughout the day.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Student Favorites and</span><span> Dining Tips</span></h3>
                <p class="text-justify">Whether grabbing a quick bite between classes or enjoying a leisurely meal with friends, TMU's dining venues provide a welcoming atmosphere where students can relax, recharge, and socialize.</p>
            </div>
            <hr class="horizontal-line">

            <button class="careers-accordion">Anti-Ragging Campus<span class="icon">+</span></button>
            <div class="panel">
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Ensuring a Safe</span><span> Environment</span></h3>
                <p class="text-justify">TMU maintains a zero-tolerance policy towards ragging, creating a safe and inclusive campus environment for all students.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Policies and Initiatives</span><span> Against Ragging</span></h3>
                <p class="text-justify">Stringent measures, awareness campaigns, and a dedicated anti-ragging committee are in place to prevent and address any incidents of ragging, ensuring students' well-being and peace of mind.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Student Support Services</span><span> Available</span></h3>
                <p class="text-justify">TMU offers counselling services, confidential helplines, and peer support programs to assist students in navigating challenges and promoting a respectful and supportive campus culture.</p>
            </div>
            <hr class="horizontal-line">

            <button class="careers-accordion">Fully Wi-Fi Enabled<span class="icon">+</span></button>
            <div class="panel">
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Staying </span><span>Connected</span></h3>
                <p class="text-justify">TMU's campus is fully equipped with high-speed Wi-Fi connectivity, ensuring seamless access to online resources and digital learning platforms for students and faculty members alike.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Accessibility of</span><span> Technology on Campus</span></h3>
                <p class="text-justify">From academic research to collaborative projects, TMU's robust Wi-Fi infrastructure supports a variety of digital initiatives, enhancing the overall learning experience and facilitating connectivity across campus.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>How Wi-Fi Enhances</span><span> Student Life</span></h3>
                <p class="text-justify">Whether accessing online libraries, participating in virtual classrooms, or staying connected with peers and professors, TMU's Wi-Fi connectivity empowers students to engage actively in their academic pursuits and stay updated with the latest information.</p>
            </div>
            <hr class="horizontal-line">

            <button class="careers-accordion">Explore Top-Notch Placement Opportunities<span class="icon">+</span></button>
            <div class="panel">
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Launching Your</span><span> Career</span></h3>
                <p class="text-justify">TMU is renowned for its exceptional track record in placements, providing students with valuable opportunities to kickstart their careers in prestigious organizations.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>TMU's Track Record</span><span> in Placements</span></h3>
                <p class="text-justify">Our dedicated placement cell works closely with industry partners to facilitate internships, placements, and career counselling sessions, ensuring that each student receives personalized support and guidance.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Success Stories of</span><span> Alumni Placed in Top Companies</span></h3>
                <p class="text-justify">From multinational corporations to educational consultancies, TMU alumni have made significant contributions in various sectors worldwide, demonstrating the effectiveness of our placement strategies and alumni network.</p>
            </div>
            <hr class="horizontal-line">

            <button class="careers-accordion">Expert Faculty for Hands-on Practical Knowledge<span class="icon">+</span></button>
            <div class="panel">
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Learning from Industry</span><span> Experts</span></h3>
                <p class="text-justify">At TMU, students benefit from the mentorship of experienced faculty members who bring a wealth of practical knowledge and industry experience to the classroom.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Profiles of TMU's</span><span> Distinguished Faculty</span></h3>
                <p class="text-justify">Our faculty comprises Ph.D. holders, researchers, and practitioners recognized for their contributions to education and commitment to nurturing future leaders in the field.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Their Contributions to</span><span> Student Success</span></h3>
                <p class="text-justify">Through innovative teaching methodologies and personalized guidance, TMU faculty members empower students to explore their academic interests, develop critical thinking skills, and prepare for professional challenges.</p>
            </div>
            <hr class="horizontal-line">

            <button class="careers-accordion">100% Placement Assistance with an Outstanding Track Record<span class="icon">+</span></button>
            <div class="panel">
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Securing Your</span><span> Future</span></h3>
                <p class="text-justify">TMU's comprehensive placement assistance ensures that every student receives the support needed to achieve their career aspirations.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>TMU's Comprehensive</span><span> Placement Services</span></h3>
                <p class="text-justify">From resume building workshops to mock interviews, our placement cell offers a range of services designed to enhance students' employability and prepare them for the competitive job market.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Support Provided to</span><span> Graduating Students</span></h3>
                <p class="text-justify">Whether seeking internships during their academic journey or transitioning into full-time roles post-graduation, TMU provides continuous support and guidance to ensure students are well-prepared for success.</p>
            </div>
            <hr class="horizontal-line">

            <button class="careers-accordion">Global Opportunities with Top Companies like Byju's<span class="icon">+</span></button>
            <div class="panel">
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Partnering with Industry</span><span> Leaders</span></h3>
                <p class="text-justify">TMU's strategic collaborations with leading companies like Byju's provide students with exclusive access to internship programs and career opportunities with industry giants.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>TMU's Corporate</span><span> Alliances</span></h3>
                <p class="text-justify">Through these partnerships, students gain exposure to cutting-edge technologies, innovative business practices, and global industry trends, positioning them as competitive candidates in the global job market.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>How Global Opportunities</span><span> Are Facilitated</span></h3>
                <p class="text-justify">From on-campus recruitment drives to industry-specific workshops, TMU's corporate alliances bridge the gap between academia and industry, offering students valuable insights and hands-on experience.</p>
            </div>
            <hr class="horizontal-line">

            <button class="careers-accordion">Placement Opportunities in Leading Industries like Educational Consultancies, Schools, etc.<span class="icon">+</span></button>
            <div class="panel">
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Diverse Career</span><span> Paths</span></h3>
                <p class="text-justify">TMU graduates are highly sought after in diverse industries, including educational consultancies, schools, government organizations, and multinational corporations.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Industry Sectors TMU</span><span> Graduates Excel In</span></h3>
                <p class="text-justify">Our alumni are making significant contributions as educators, administrators, researchers, and policymakers, leveraging their TMU education to drive positive change and innovation in their respective fields.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Career Advice from</span><span> TMU's Career Counsellors</span></h3>
                <p class="text-justify">Our career counsellors provide personalized guidance, career assessments, and networking opportunities to help students explore career paths, set achievable goals, and navigate the complexities of today's job market.</p>
            </div>
            <hr class="horizontal-line">

            <button class="careers-accordion">Robust Industry Affiliations for Invaluable Insights<span class="icon">+</span></button>
            <div class="panel">
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Learning from the</span><span> Best</span></h3>
                <p class="text-justify">TMU's partnerships with industry leaders and professional bodies ensure that our curriculum remains relevant, responsive, and aligned with emerging trends and industry demands.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Collaborations with</span><span> Industry Leaders</span></h3>
                <p class="text-justify">Through collaborative research projects, industry internships, and guest lectures, TMU fosters a culture of innovation and entrepreneurship, preparing students to tackle real-world challenges and drive meaningful impact.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Guest Lectures and</span><span> Industry Workshops</span></h3>
                <p class="text-justify">These interactions provide students with firsthand knowledge, practical skills, and networking opportunities that are essential for professional growth and career advancement.</p>
            </div>
            <hr class="horizontal-line">

            <button class="careers-accordion">Gain a Global Edge with International Internships<span class="icon">+</span></button>
            <div class="panel">
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Building International</span><span> Experience</span></h3>
                <p class="text-justify">TMU offers students opportunities to gain valuable international exposure through structured internship programs with global organizations and institutions.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>TMU's International</span><span> Internship Programs</span></h3>
                <p class="text-justify">From educational exchange programs to cross-cultural experiences, international internships at TMU enrich students' perspectives, broaden their horizons, and equip them with skills for global leadership.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Success Stories from</span><span> International Interns</span></h3>
                <p class="text-justify">TMU alumni who have participated in international internships have gained insights into diverse cultures, honed their language skills, and developed a global mindset that enhances their professional competence and marketability.</p>
            </div>
            <hr class="horizontal-line">

            <button class="careers-accordion">Well-equipped Laboratories for Training<span class="icon">+</span></button>
            <div class="panel">
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Hands-On Learning</span><span> Environments</span></h3>
                <p class="text-justify">TMU's state-of-the-art laboratories provide students with access to cutting-edge equipment and technology, fostering experiential learning and practical skill development.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Advanced Facilities at</span><span> TMU's Labs</span></h3>
                <p class="text-justify">From biology and physics to computer science and psychology, our labs are designed to support research, experimentation, and innovation across various disciplines, empowering students to conduct meaningful research and contribute to scientific advancements.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Student Projects and</span><span> Research Outcomes</span></h3>
                <p class="text-justify">Through hands-on experiments, collaborative projects, and independent research initiatives, TMU students have the opportunity to apply theoretical knowledge, explore their interests, and make significant contributions to their fields of study.</p>
            </div>
            <hr class="horizontal-line">

            <button class="careers-accordion">Research and Entrepreneurial Development Programmes<span class="icon">+</span></button>
            <div class="panel">
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Fostering Innovation</span><span> and Entrepreneurship</span></h3>
                <p class="text-justify">TMU encourages entrepreneurial thinking and innovation through dedicated programs and initiatives that support student-led startups and research ventures.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>TMU's Support for</span><span> Entrepreneurial Ventures</span></h3>
                <p class="text-justify">From incubation centres to funding opportunities, our university provides the infrastructure, mentorship, and resources needed to transform innovative ideas into viable business ventures and social enterprises.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Student Start-up</span><span> Success Stories</span></h3>
                <p class="text-justify">TMU alumni entrepreneurs have launched successful startups in education technology, healthcare, renewable energy, and more, demonstrating the transformative impact of our entrepreneurial ecosystem on student innovation and societal development.</p>
            </div>
            <hr class="horizontal-line">

            <button class="careers-accordion">Precision Education Training for Sustainable Growth<span class="icon">+</span></button>
            <div class="panel">
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Future-Ready Skills</span></h3>
                <p class="text-justify">TMU's curriculum is designed to equip students with the knowledge, skills, and attitudes needed to thrive in a rapidly evolving global economy.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Curriculum Designed</span><span> for Industry Needs</span></h3>
                <p class="text-justify">By integrating industry-relevant courses, practical training modules, and soft skills development, TMU prepares students to adapt to technological advancements, navigate complex challenges, and lead positive change in their professions.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Skills TMU Graduates</span><span> Gain for Long-Term Success</span></h3>
                <p class="text-justify">Critical thinking, problem-solving, communication, and leadership skills are at the core of TMU's educational philosophy, ensuring that graduates are well-prepared to make meaningful contributions to their workplaces and communities.</p>
            </div>
            <hr class="horizontal-line">

            <button class="careers-accordion">On-Campus Accommodation Facilities<span class="icon">+</span></button>
            <div class="panel">
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Convenience and</span><span> Comfort</span></h3>
                <p class="text-justify">TMU offers a range of on-campus accommodation options that cater to students' diverse needs, preferences, and budgets.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Options for Living</span><span> On-Campus</span></h3>
                <p class="text-justify">From single occupancy rooms to shared apartments, our accommodation facilities provide a safe and supportive environment where students can focus on their academic goals and personal development.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Virtual Tours of TMU's</span><span> Accommodation</span></h3>
                <p class="text-justify">Prospective students can take virtual tours of our accommodation facilities to explore amenities, room layouts, and communal spaces, making informed decisions about their living arrangements during their time at TMU.</p>
            </div>
            <hr class="horizontal-line">

            <button class="careers-accordion">Access to E-Journals through EBSCO, DELNET Database<span class="icon">+</span></button>
            <div class="panel">
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Extensive Research</span><span> Resources</span></h3>
                <p class="text-justify">TMU's library is equipped with comprehensive digital resources, including access to e-journals, databases, and online archives, to support academic research and scholarly pursuits.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>TMU's Library and</span><span> Digital Archives</span></h3>
                <p class="text-justify">Our library's collection covers a wide range of disciplines and subjects, providing students with the latest research findings, scholarly articles, and reference materials essential for their academic studies and research projects.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>How Students Access</span><span> E-Journals and Research Material</span></h3>
                <p class="text-justify">Through user-friendly interfaces and library services, TMU ensures seamless access to electronic resources, enabling students to conduct literature reviews, cite authoritative sources, and stay updated with advancements in their fields of study.</p>
            </div>
            <hr class="horizontal-line">

            <button class="careers-accordion">Global Internships and Placements Opportunities<span class="icon">+</span></button>
            <div class="panel">
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Enhancing Your</span><span> Resume Globally</span></h3>
                <p class="text-justify">TMU facilitates global internships and placements that enhance students' professional profiles, expand their global network, and prepare them for leadership roles in diverse industries.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>TMU's Support for</span><span> International Careers</span></h3>
                <p class="text-justify">Through career counselling, visa assistance, and networking events, our university empowers students to pursue international opportunities, gain valuable work experience abroad, and build a foundation for a successful global career.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>How Global Internships</span><span> Shape Career Trajectories</span></h3>
                <p class="text-justify">Alumni who have participated in global internships have gained cross-cultural competencies, international perspectives, and professional skills that set them apart in the competitive global job market, paving the way for accelerated career growth and personal fulfillment.</p>
            </div>
            <hr class="horizontal-line">

            <button class="careers-accordion">Well-maintained Classrooms for Practical Teaching Demonstrations<span class="icon">+</span></button>
            <div class="panel">
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Interactive Learning</span><span> Environments</span></h3>
                <p class="text-justify">TMU's classrooms are designed to facilitate interactive teaching demonstrations, collaborative learning experiences, and practical skill development across various disciplines.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Classroom Innovations at</span><span> TMU</span></h3>
                <p class="text-justify">From multimedia presentations to flipped classrooms, our innovative teaching methods engage students actively in the learning process, promote peer-to-peer collaboration, and encourage critical thinking and problem-solving skills.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Technologies Used for</span><span> Effective Teaching</span></h3>
                <p class="text-justify">Smartboards, audio-visual aids, and simulation tools are integrated into TMU's classrooms to create dynamic learning environments where students can explore concepts, experiment with ideas, and apply theoretical knowledge to real-world scenarios.</p>
            </div>
            <hr class="horizontal-line">

            <button class="careers-accordion">Conclusion <span class="icon">+</span></button>
            <div class="panel">
                <p class="text-justify">Choose Teerthanker Mahaveer University for a transformative educational experience that combines academic excellence, practical skills development, and global opportunities. Start your application today and embark on a journey towards a successful career in education and beyond.</p>
            </div>
            <!-- Add the horizontal line here -->
            <hr class="horizontal-line">

            <button class="careers-accordion">FAQs<span class="icon">+</span></button>
            <div class="panel">
                <p class="text-justify"><strong>Q. Does TMU provide scholarships for B.Ed. programs?</strong></p>
                <p class="text-justify">Ans: Yes, TMU offers scholarships to eligible students based on merit, financial need, and other criteria. These scholarships aim to make quality education accessible to deserving candidates pursuing B.Ed. programs at TMU.</p>

                <p class="text-justify"><strong>Q. What are the career prospects after completing a B.Ed. at TMU?</strong></p>
                <p class="text-justify">Ans: Graduates of TMU's B.Ed. programs have diverse career opportunities, including roles in schools, educational consultancies, government organizations, and multinational corporations. TMU's strong industry connections and placement assistance ensure that graduates are well-prepared for successful careers in the education sector.</p>

                <p class="text-justify"><strong>Q. How does TMU support international students?</strong></p>
                <p class="text-justify">Ans: TMU provides comprehensive support to international students, including visa assistance, accommodation options, cultural orientation programs, and access to global internships. Our inclusive campus environment welcomes students from around the world, fostering cross-cultural understanding and collaboration.</p>

                <p class="text-justify"><strong>Q. What facilities does TMU offer for practical learning?</strong></p>
                <p class="text-justify">Ans: TMU boasts state-of-the-art laboratories, modern classrooms with advanced technology, and dedicated centers for teaching, learning, and development. These facilities enable students to gain hands-on experience, conduct research, and participate in practical teaching demonstrations, enhancing their skills and knowledge.</p>

                <p class="text-justify"><strong>Q. Can students participate in extracurricular activities at TMU?</strong></p>
                <p class="text-justify">Ans: Yes, TMU encourages students to engage in extracurricular clubs, sports championships, cultural events, and community service initiatives. These activities contribute to holistic development, leadership skills, and a vibrant campus life experience.</p>
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
                cd_id: 15,
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
                cd_id: 15,
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