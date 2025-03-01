@extends('layouts.university.colleges.dental_home_without_sidebar')
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
                    <h1 class=" mt-5 mb-5 banner-main-heading">Welcome to <span style="font-weight:700!important;">Teerthanker Mahaveer Dental College  </span> & Research Centre</h1>
              
                    
                </div>
                <div class="col-12 col-md-6">
                    <div class="pe-lg-4 position-relative p-0">
                        <div style="z-index: 2;">
                            <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/iXHRmCyHszY?si=BcZ5NOfT-V8ECc6z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="z-index: 2; margin:0;"></iframe> -->
                            <img src="{{asset('assets/img/banner/dental/banner.webp')}}" alt="" class="p-0 m-0">
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
                            <span>IPR Cell</span>
                            <br>
                            <span class="d-block pt-1">for Patent Filing</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 px-1">
                    <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                        <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                            <span>10+</span>
                            <br>
                            <span class="d-block pt-1">Programme Specialisations</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 px-1">
                    <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                        <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                            <span>Approved by</span>
                            <br>
                            <span class="d-block pt-1">the Dental Council of India</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 px-1">
                    <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                        <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                            <span>Hands-On</span>
                            <br>
                            <span class="d-block pt-1">Training at TMU Hospital</span>
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
                                        <span>IPR Cell</span>
                                        <br>
                                        <span class="d-block pt-1">for Patent <br> Filing</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                                    <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                                        <span>Hands-On</span>
                                        <br>
                                        <span class="d-block pt-1">Training at TMU <br> Hospital</span>
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
                                        <span>10+</span>
                                        <br>
                                        <span class="d-block pt-1">Programme <br> Specialisations</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                                    <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                                        <span>Approved by</span>
                                        <br>
                                        <span class="d-block pt-1">the Dental Council <br> of India</span>
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
                <h2 class="college-main-heading d-none d-md-block">Teerthanker Mahaveer Dental College & Research Centre: Among the Top Dental Colleges in India.</h2>
                <h3 class="tmu-text-primary d-block d-md-none"><span>Teerthanker Mahaveer Dental College & Research Centre: </span><span> Among the Top Dental Colleges in India.</span></h3>
                <div class="row">
                    <div class="col-12 px-2 px-md-5">
                        <p style="text-align: justify;">Teerthanker Mahaveer Dental College and Research Centre, established in 2005, is one of the most prestigious and accredited dental colleges. The college is actively involved in high-quality teaching and research in oral health care, making it a centre of excellence for providing world-class education.</p>
                        <div class="read-more-content mt-0">
                        <p style="text-align: justify;">Choosing the right dental college is crucial for aspiring dentists. Teerthanker Mahaveer Dental College and Research Centre (TMDC&RC) stands out as one of the premier colleges in India. With a focus on academic excellence, practical knowledge, and global career opportunities, TMU Dental College offers a holistic educational experience that prepares students for a successful dental career.
                        </p>
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
                    <p>TMDC&RC offers extensive dental education specialising in all 9 fields of dentistry. These include:</p>
                    <ul class="m-ol-list ps-4 mb-0">
                        <li>
                            <p class="p-0 m-0">Conservative Dentistry & Endodontics
                        </li>
                        <li>
                            <p class="p-0 m-0">Oral & Maxillofacial Surgery
                        </li>
                        <li>
                            <p class="p-0 m-0">Orthodontics & Dentofacial Orthopaedics
                        </li>
                        <li>
                            <p class="p-0 m-0">Prosthodontics and Crown & Bridge
                        </li>
                    </ul>
                    <div class="read-more-content mt-1">
                        <ul class="m-ol-list ps-4">
                            <li>
                                <p class="p-0 m-0">Paedodontics & Preventive Dentistry
                            </li>
                            <li>
                                <p class="p-0 m-0">Periodontology
                            </li>
                            <li>
                                <p class="p-0 m-0">Public Health Dentistry
                            </li>
                            <li>
                                <p class="p-0 m-0">Oral Medicine & Radiology
                            </li>
                            <li>
                                <p class="p-0 m-0">Oral Pathology & Microbiology
                            </li>
                        </ul>
                        <p>Additionally, we have a basic sciences department for the overall exposure of the students.</p>
                    </div>
                    <a href="javascript:void(0);" class="read-more ms-0 mt-1" title="Read More">Read More</a>
                </div>
                <div class="tab-pane fade" id="Tab2" role="tabpanel" aria-labelledby="tab2-tab">
                    <h3>Placement/Internship</h3>
                    <p>TMDC&RC excels in providing outstanding internships and placements, which play a vital role in every dentist's career journey.  A decent number of our students are working in dental clinics across India, the South Asia Pacific, and the Middle East. <br>
                        We also go beyond boundaries by conducting student exchange programmes that enable our dental students to gain global exposure and experience in dentistry. Our alumni have achieved remarkable success in various sectors. It includes dental clinics, government and private hospitals, educational institutes, pharmaceutical companies, research institutes, dental equipment manufacturers, and dental product manufacturers.</p>
                    </p>
                </div>
                <div class="tab-pane fade" id="Tab3" role="tabpanel" aria-labelledby="tab3-tab">
                    <h3>Curriculum</h3>
                    <p>Experience excellence in the dental profession at TMDC&RC, where innovation and practical training take centre stage. Our commitment extends to fostering exceptional skills across clinical, academic, and research domains, creating a conducive learning environment for students to achieve their career goals. Our programmes adhere to international standards and meet the Dental Council of India's regulations. </p>
                    <div class="read-more-content mt-1">
                        <p>With case-based and futuristic integrated e-learning, we equip students to tackle various oro-dental diseases. Through dental camps, outreach programmes, and community service, students gain invaluable practical experience. We encourage young researchers to publish papers and participate in national and international seminars, symposiums, conferences, and workshops, keeping them updated with the latest advancements in dental science. <br>
                            Beyond academics, we offer diverse extracurricular activities, sports, and cultural events, nurturing talents and fostering overall development.</p>
                    </div>
                    <a href="javascript:void(0);" class="read-more ms-0 mt-1" title="Read More">Read More</a>
                </div>
                <div class="tab-pane fade" id="Tab4" role="tabpanel" aria-labelledby="tab4-tab">
                    <h3>Infrastructure</h3>
                    <p>The dental college has ultra-advanced clinical facilities and a majestic infrastructure. Equipped with modern X-ray apparatus and advanced technology, including cone beam computed tomography, orthopantomography, and surgical bone saw, our students gain hands-on experience with cutting-edge tools. </p>
                    <div class="read-more-content mt-1">
                        <p>Our simulated pre-clinical and research laboratories offer a conducive learning environment. The air-conditioned central library is accessible for 12 hours a day, providing students with valuable resources. With separate dormitories for girls and boys in a serene environment, students enjoy round-the-clock comfort and security. <br>
                            TMDC&RC's major strength lies in the large number of patients visiting the OPD, providing ample clinical exposure to dental students. The 900+ beds super-speciality clinical setting attracts both rural and urban populations, offering diverse patient cases to enhance students' skills. At TMU, we prioritise an enriching and supportive environment to nurture the growth of our dental students.</p>
                    </div>
                    <a href="javascript:void(0);" class="read-more ms-0 mt-1" title="Read More">Read More</a>
                </div>

            </div>
        </div>


        <!-- Collab Modal -->
        <div id="collabModal" class="tmu-modal">
            <div class="overlay" onclick="closeCollabModal()"></div>
            <div class="tmu-modal-box">
                <div class="close-btn" onclick="closeCollabModal()">x</div>
                <div class="card collab-card">
                    <img class="collab-card-img" src="https://www.tmu.ac.in/img/collaborative/EPCH logo.png" alt="TMU collaboration with epch">
                    <div class="card-body">
                        <h3 class="collab-card-title">MBA (HANDICRAFTS EXPORT MANAGEMENT)</h3>
                        <p class="collab-card-text">
                            This collaborative program is a joint venture program with the Export Promotion Council for Handicrafts (EPCH) that provides specialisation in Handicraft Export Management.
                        </p>
                    </div>
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

                        <button class="careers-accordion" data-ProgrammeLevel="PG" ><span><i class="fa-solid fa-microchip fa-sm fakash"></i>&nbsp;&nbsp;Postgraduate</span> <span class="icon">+</span></button>
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



        </style>

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

</section><!-- #content end -->

<div class="container mb-5 mt-5">
<h2 class="tmu-text-primary text-center"><span>Why Choose </span><span> Teerthanker Mahaveer Dental College & Research Centre</span></h2>
            <hr class="horizontal-line">

            <button class="careers-accordion">Why TMU is the Best Choice for You <span class="icon">+</span></button>
            <div class="panel active">
                <h3 class="tmu-text-primary fs-16 mb-0"><span>UGC-Approved with </span><span> NAAC A Accreditation</span></h3>
                <p>TMU Dental College is UGC-approved and boasts NAAC ‘A’ accreditation, a testament to its high educational standards. This accreditation assures students and parents of the college's commitment to academic excellence and continuous improvement.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Experiential Learning by </span><span> Highly Qualified Faculty</span></h3>
                <p>Learning at TMU is an immersive experience, guided by highly qualified faculties who bring a wealth of knowledge and practical expertise. The faculty members are dedicated to providing students with hands-on training and real-world dental practice exposure.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Centre for Teaching, </span><span> Learning, and Development</span></h3>
                <p>The Centre for Teaching, Learning, and Development at TMU is a hub for innovative educational practices. It focuses on enhancing teaching methodologies and ensuring that students receive the best possible learning experience and gain soft skills as well.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Global Career </span><span> Prospects</span></h3>
                <p>TMU Dental College provides students with global career prospects. The institution has strong ties with international dental clinics and companies, facilitating global internships and placements.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>On-Campus </span><span> Hostel Facilities</span></h3>
                <p>Comfortable On-campus Hostel Facilities ensure that students have a conducive living environment. The hostels are equipped with modern amenities and provide a safe and supportive community for students.</p>
            </div>
            <hr class="horizontal-line">
            <button class="careers-accordion">Academic Excellence <span class="icon">+</span></button>
            <div class="panel">
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Modern Classrooms for </span><span> Interactive Sessions</span></h3>
                <p>TMU&rsquo;s modern classrooms are designed for interactive learning sessions. These classrooms are equipped with the latest educational technology to facilitate an engaging and effective learning environment.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Educational Seminars and </span><span> Conferences</span></h3>
                <p>Regular educational seminars and conferences are conducted to keep students updated with the latest developments in dentistry. These events provide opportunities for networking and learning from industry experts</p>               
            </div>

            <hr class="horizontal-line">
            <button class="careers-accordion">Student Life <span class="icon">+</span></button>
            <div class="panel">
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Extracurricular </span><span> Clubs</span></h3>
                <p>At TMU, student life is vibrant and dynamic. There are numerous extracurricular clubs catering to various interests, ensuring that students have a well-rounded college experience.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Electrifying Concerts and</span><span> Dynamic Events</span></h3>
                <p>The college hosts electrifying concerts and dynamic events, providing students with ample opportunities to unwind and enjoy their time on campus.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Gym and Fitness </span><span> Centre</span></h3>
                <p>A well-equipped gym and fitness centre are available for students to maintain their physical health and well-being.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Shopping Stores and</span><span> Cafeterias</span></h3>
                <p>Convenient shops and cafeterias on campus cater to students' daily needs, making campus life comfortable and enjoyable.</p>
            </div>
            <hr class="horizontal-line">
                <button class="careers-accordion">Safe and Supportive Environment <span class="icon">+</span></button>
                <div class="panel">
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Anti-Ragging </span><span> Campus</span></h3>
                <p>TMU is committed to providing a safe and supportive environment for all students. The campus has a strict anti-ragging policy, ensuring that every student feels secure and respected.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Fully Wi-Fi </span><span> Enabled</span></h3>
                <p>The entire campus is fully Wi-Fi enabled, allowing students to stay connected and access online resources from anywhere within the campus.</p>
            </div>
            <hr class="horizontal-line">

            <button class="careers-accordion">Career Opportunities <span class="icon">+</span></button>
            <div class="panel">
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Top-Notch Placement </span><span> Opportunities </span></h3>
                <p>TMU Dental College offers top-notch placement opportunities, ensuring that graduates secure promising positions in leading dental clinics and companies</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>100% Placement Assistance with </span><span> an Outstanding Track Record </span></h3>
                <p>The college has a stellar track record of 100% placement assistance. The dedicated placement cell works tirelessly to help students find suitable job opportunities.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Global Career </span><span> Prospects </span></h3>
                <p>TMU&rsquo;s strong industry connections and global partnerships open doors to international career opportunities for its graduates.</p>
            </div>
            <hr class="horizontal-line">

            <button class="careers-accordion">Hands-On Practical Knowledge <span class="icon">+</span></button>
            <div class="panel">
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Expert Faculty for Hands-On </span><span> Practical Knowledge</span></h3>
                <p>TMU’s expert faculty emphasise hands-on practical knowledge, ensuring that students are well-prepared for real-world dental practice.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Centre for Teaching, </span><span> Learning, and Development</span></h3>
                <p>The Centre for Teaching, Learning, and Development plays a pivotal role in enhancing students' practical skills through innovative teaching methods and advanced training programmes.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Art Studios and Expansive Spaces for </span><span> Practical Training and Experiments</span></h3>
                <p>TMU provides art studios and expansive spaces for practical training and experiments, fostering creativity and hands-on learning</p>
            </div>
            <hr class="horizontal-line">

            <button class="careers-accordion">Strong Industry Connections <span class="icon">+</span></button>
            <div class="panel">
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Robust Industry Affiliations for </span><span> Invaluable Insights</span></h3>
                <p>TMU&rsquo;s robust industry affiliations provide students with invaluable insights into the dental industry. These connections enhance the learning experience and prepare students for their professional careers.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Global Exposure with </span><span> International Dental Internships</span></h3>
                <p>The college offers global exposure through international dental internships, giving students the chance to gain international experience and broaden their professional horizons.</p>
            </div>
            <hr class="horizontal-line">

            <button class="careers-accordion">Comprehensive Dental Facilities <span class="icon">+</span></button>
            <div class="panel">
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Well-Equipped Dental </span><span> Clinics and Laboratories</span></h3>
                <p>TMU boasts well-equipped dental clinics and laboratories, providing students with the necessary tools and technology for comprehensive dental training.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Advanced Dental Technology and </span><span> Instruments for Practical Training</span></h3>
                <p>The college uses advanced dental technology and instruments, ensuring that students receive the best possible practical training.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Orthodontics Workshop </span><span> and Seminar</span></h3>
                <p>Regular orthodontic workshops and seminars are held to keep students abreast of the latest techniques and developments in the field.</p>
            </div>

            <hr class="horizontal-line">

            <button class="careers-accordion">Professional Memberships and Opportunities <span class="icon">+</span></button>
            <div class="panel">
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Professional Memberships with the Indian Dental Association and </span><span> Restorative Association of Nine Specialties of Dentistry</span></h3>
                <p>TMU facilitates professional memberships with prestigious organizations like the Indian Dental Association and the Restorative Association of Nine Specialties of Dentistry, enhancing students' professional credentials.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Global Opportunities with Top </span><span> Dental Clinics - Oral Surgery, Orthodontics</span></h3>
                <p>Students have access to global opportunities with top dental clinics, specializing in oral surgery and orthodontics, paving the way for successful careers.</p>
            </div>
            <hr class="horizontal-line">

            <button class="careers-accordion">Research and Development <span class="icon">+</span></button>
            <div class="panel">
                <h3 class="tmu-text-primary fs-16 mb-0"><span>In-House Research Journal - </span><span> TMU Journal of Dentistry </span></h3>
                <p>TMU publishes an in-house research journal, the TMU Journal of Dentistry, which provides a platform for students and faculty to publish their research work.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Research and Entrepreneurial </span><span> Development programmes </span></h3>
                <p>The college encourages research and entrepreneurial development through various programmes, fostering innovation and leadership among students.</p>
            </div>
            <!-- Add the horizontal line here -->
            <hr class="horizontal-line">

            <button class="careers-accordion">Precision Dentistry <span class="icon">+</span></button>
            <div class="panel">
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Precision Dentistry and Sustainable </span><span> Dental Practices Training</span></h3>
                <p>TMU emphasizes precision dentistry and sustainable dental practices, preparing students for the future of dental care</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Advanced Dental </span><span> Research Laboratories</span></h3>
                <p>Advanced dental research laboratories at TMU provide students with the opportunity to engage in cutting-edge research and innovation.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Orthodontics Workshop and </span><span> Implantology Seminar</span></h3>
                <p>Specialized workshops and seminars on orthodontics and implantology are conducted to enhance students' knowledge and skills in these areas</p>
            </div>
            <!-- Add the horizontal line here -->
            <hr class="horizontal-line">
            <button class="careers-accordion">Global Exposure and Placements<span class="icon">+</span></button>
            <div class="panel">
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Global Exposure with International Dental Placement and </span><span> Internship Opportunities</span></h3>
                <p>TMU offers global exposure through international dental placements and internships, ensuring that students are well-prepared for international dental careers.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>On-Campus Dental </span><span> Accommodation Facilities</span></h3>
                <p>The college provides on-campus accommodation facilities, ensuring students have a comfortable living environment while pursuing their studies.</p>
            </div>
            <!-- Add the horizontal line here -->
            <hr class="horizontal-line">
            <button class="careers-accordion">Additional Facilities<span class="icon">+</span></button>
            <div class="panel">
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Electrifying </span><span>Concerts</span></h3>
                <p>The college hosts electrifying concerts, adding a vibrant cultural dimension to student life.</p>
                <h3 class="tmu-text-primary fs-16 mb-0"><span>Art Supply Stores and </span><span> Cafeterias</span></h3>
                <p>Art supply stores and cafeterias on campus cater to the needs of students, making their daily lives convenient and enjoyable.</p>
            </div>
            <!-- Add the horizontal line here -->
            <hr class="horizontal-line">
            <button class="careers-accordion">Top programmes Offered <span class="icon">+</span></button>
            <div class="panel">
            <h3 class="tmu-text-primary fs-16 mb-0"><span>BDS </span><span> (Bachelor of Dental Surgery)</span></h3>
            <p>The BDS program at TMU is designed to provide comprehensive dental education and practical training.</p>
            <h3 class="tmu-text-primary fs-16 mb-0"><span>MDS </span><span> (Master of Dental Surgery)</span></h3>
            <p>The MDS program offers specialized training in various fields of dentistry, preparing students for advanced dental practice.</p>
            <h3 class="tmu-text-primary fs-16 mb-0"><span>PhD</span></h3>
            <p>The PhD program at TMU focuses on advanced research and innovation in dentistry, contributing to the development of the field.</p>
            </div>
            <!-- Add the horizontal line here -->
            <hr class="horizontal-line">
            <button class="careers-accordion">Conclusion <span class="icon">+</span></button>
            <div class="panel">
                <p class="text-justify">Teerthanker Mahaveer Dental College and Research Centre (TMDC&RC) is a top choice for aspiring dentists in India. With its strong focus on academic excellence, practical knowledge, global career opportunities, and a supportive campus environment, TMU Dental College ensures that students receive a well-rounded and high-quality dental education.</p>
            </div>
            <hr class="horizontal-line">
            <button class="careers-accordion">FAQs<span class="icon">+</span></button>
            <div class="panel">
                <p><strong>Q1: What accreditation does TMU Dental College have?</strong></p>
                <p>TMU Dental College is UGC-approved and has NAAC &nbsp;A accreditation, signifying its commitment to high educational standards.</p>
                <p><strong>Q2: What kind of career opportunities are available for graduates?</strong></p>
                <p><strong>Ans: </strong>Graduates from TMU Dental College have access to top-notch placement opportunities, 100% placement assistance, and global career prospects in leading dental clinics and companies.</p>
                <p><strong>Q3: What facilities does TMU Dental College offer?</strong></p>
                <p><strong>Ans: </strong>TMU Dental College offers modern classrooms, well-equipped dental clinics and laboratories, on-campus hostel facilities, a gym and fitness centre, and various extracurricular clubs and events.</p>
                <p><strong>Q4: What programmes are offered at TMU Dental College?</strong> </p>
                <p><strong>Ans: </strong>TMU Dental College offers BDS (Bachelor of Dental Surgery), MDS (Master of Dental Surgery), and PhD programmes, catering to various levels of dental education and specialisation.</p>
            </div>
            <hr class="horizontal-line">
        </div>


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
                cd_id: 3,
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
                cd_id: 3,
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