@extends('layouts.university.colleges.paramedical_home_without_sidebar')
@section('content')

<link rel="stylesheet" href="{{asset('/assets/css/tmu-testimonial.css')}}">
<link rel="stylesheet" href="{{asset('/assets/css/tmimt.css')}}">
<link rel="stylesheet" href="{{asset('/assets/css/college.css')}}">

<section id="content">
    <div class="content-wrap py-0">
        <div class="container-fluid  my-0 px-2">
            <div class="row ps-4">
                <div class="col-md-6 pt-0 pt-md-4 ps-md-5 mb-4">
                    <h1 class=" mt-5 mb-5 d-none d-md-block  banner-main-heading">Welcome to the <br> <span style="font-weight:700!important;">Best Paramedical</span> College in UP</h1>
                    <h1 class=" mt-5 mb-3 d-block d-md-none" style="color:#001055; text-transform: capitalize; font-weight:700!important; font-size:24px">Welcome to the <span>Best Paramedical</span> College in UP,</h1>
                    <a href="#" class="tmu-btn btn-1 me-4 py-1 px-3 py-xl-2 px-xl-4"> Download Brochure</a>
                    <a href="https://admissions.tmu.ac.in/" target="_blank" class="tmu-btn btn-2 py-1 px-3 py-xl-2 px-xl-4">Apply Now</a>
                </div>
                <div class="col-12 col-md-6">
                    <div class="pe-lg-4 position-relative p-0">
                        <div style="z-index: 2;">
                            <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/iXHRmCyHszY?si=BcZ5NOfT-V8ECc6z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="z-index: 2; margin:0;"></iframe> -->
                            <img src="{{asset('/assets/img/banner/paramedical/paramedical-banner.webp')}}" alt="" class="p-0 m-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-3 d-none d-md-block">
            <div class="row justify-content-center">
                <div class="col-6 col-lg-3 px-1">
                    <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                        <div class="card-body gap-4 text-tmu-primary under-banner-cards"> <span>82%</span>
                            <br>
                            <span class="d-block pt-1">Placement Rate</span>
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
                            <span class="d-block pt-1">Global Collaborations</span>
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
                                    <div class="card-body gap-4 text-tmu-primary under-banner-cards"> <span>82%</span>
                                        <br>
                                        <span class="d-block pt-1">Placement Rate</span>
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







        <div class="box-container">
            <div class="box">
                <h2 class="college-main-heading">College of Paramedical Sciences: Among the Top Colleges for Paramedical Education</h2>
                <div class="row">
                    <div class="col-12 px-2 px-md-5">
                        <p style="text-align: justify;">The College of <a href="https://www.tmu.ac.in/college-of-paramedical-sciences" target="_blank">Paramedical Sciences </a> was established in the year 2010 to provide trained, qualified, technical personnel in the field of Paramedical Science to support the medical profession. The objective of the Paramedical Science education programme is to ensure that educational opportunities for development of skills. </p>
                        <div class="read-more-content mt-0">
                            <p style="text-align: justify;">The emphasis of the Paramedical Science education programme is on developing a cadre of small entrepreneurs, especially among girls, women &amp; rural youth.</p>
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
                    <h3>Key Highlights</span></h3>
                    <p>The College of Paramedical Sciences offers specialised training in four disciplines, delivered by qualified professionals.</p>
                    <ul class="m-ol-list ps-4">
                        <li>
                            <p class="p-0 m-0"><span class="fw-bold fs-16 tmu-color-blue">Medical Laboratory Techniques:</span>It is a hub of academic research and consultancy that grooms professionals by providing diplomas, graduate, post-graduate and doctorate-level programmes with the knowledge and skills necessary to excel in the ever-evolving pharmacy field.</p>
                        </li>
                        <li>
                            <p class="p-0 m-0"><span class="fw-bold fs-16 tmu-color-blue">Radiological Imaging Techniques:</span> Develop proficiency in radiological imaging techniques. Such as X-Ray, Color Doppler, Ultrasound, CT-SCAN, and MRI.</p>
                        </li>
                        <li>
                            <p class="p-0 m-0"><span class="fw-bold fs-16 tmu-color-blue">Optometry:</span> Become a specialised health care professional that provides comprehensive eye care, examining the eyes and structures for defects or abnormalities.</p>
                        </li>
                        <li>
                            <p class="p-0 m-0"><span class="fw-bold fs-16 tmu-color-blue">Forensic Science:</span> Gain valuable exposure and practical industrial training for both faculty and students alike.</p>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="Tab2" role="tabpanel" aria-labelledby="tab2-tab">
                    <h3>Placement/Internship</span></h3>
                    <p>Paramedical College stands out for exceptional placement and internship opportunities for students in their respective fields.
                        <br>
                        With strong industry connections, the college ensures students gain valuable exposure in their chosen field. Through well-structured internships, students can apply their theoretical knowledge in real-world settings. Enhancing their skills and paving the way for a successful career. The college’s commitment to providing 100% placement assistance further guarantees that graduates are well-prepared and equipped for the professional workforce. Here’s our stellar placement
                    </p>
                </div>
                <div class="tab-pane fade" id="Tab3" role="tabpanel" aria-labelledby="tab3-tab">
                    <h3>Curriculum</span></h3>
                    <p>Teerthanker Mahaveer College of Paramedical Sciences offers a comprehensive curriculum designed to equip paramedical students with the necessary skills and training required in the healthcare field. Our courses cover a wide range of topics, including anatomy, optics, microbiology, psychology, physiology, forensic serology, toxicology, pharmacology, and medical ethics, among others. We also offer clinical rotations in a variety of healthcare settings, allowing students to gain hands-on experience working with patients.</p>
                    <br>
                    Additionally, we have MOUs with industry experts and academic institutions.
                    <ul class="m-ol-list ps-4">
                        <li>Pioneer Centre of Bioscience It aims to encourage bioscience-related research, product development and skill development, which will bridge the gap between academics and industries.</li>
                        <li>DNA Labs It aims to provide a learning platform for Medical Laboratory Techniques through internships, project work and training.</li>
                        <li>Hawk-Eye Forensic It aims to provide industrial training and assist with student project work, final-year dissertations, etc.</li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="Tab4" role="tabpanel" aria-labelledby="tab4-tab">
                    <h3>Infrastructure</span></h3>
                    <p>Our college boasts a variety of well-equipped laboratories that adhere to the UP State medical standards. It also meets international benchmarks. Our state-of-the-art facilities includes:</p>
                    <ul class="m-ol-list ps-4">
                        <li>
                            <p class="p-0 m-0"><b>Medical Laboratory Techniques:</b> includes spectrophotometer, colorimeter, ELISA reader, semi auto analyser, PH metre and Autoclaves.</p>
                        </li>
                        <li>
                            <p class="p-0 m-0"><b>Radiological & Imaging Techniques: </b>include digital radiography, computed tomography, magnetic resonance imaging, and ultrasound.</p>
                        </li>
                        <li>
                            <p class="p-0 m-0"><b>Optometry:</b> includes an optical coherence tomography (OCT), Low Vision Clinic, Binocular vision and visual field testing equipment, slit lamps, keratometer, and a dedicated optometry lab.</p>
                        </li>
                        <li>
                            <p class="p-0 m-0"><b>Forensic Science:</b>includes Questioned Documents, Fingerprints, Forensic chemistry, a mock crime scene, an in-house mortuary (University) and a digital forensics lab.</p>
                        </li>
                    </ul>
                    <p>These cutting-edge laboratories provide students with a world-class learning experience, ensuring they receive hands-on training on par with global standards.</p>
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
                                <a class="pgroup list-group-item listream list-group-item-action rounded-3 shadow-sm active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home"><i class="fa-solid fa-computer fa-sm fakash"></i>&nbsp;Undergraduate Programmes
                                    &nbsp;<span class="badge rounded-pill">04</span>
                                </a>
                                <a class="list-group-item listream list-group-item-action rounded-3 shadow-sm mt-2" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile"><i class="fa-solid fa-microchip fa-sm fakash"></i>&nbsp;Postgraduate Programmes
                                    &nbsp;<span class="badge rounded-pill">04</span></a>
                                <a class="list-group-item listream list-group-item-action rounded-3 shadow-sm mt-2" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages"><i class="fa-solid fa-business-time fa-sm fakash"></i>&nbsp;Doctrate Programmes
                                    &nbsp;<span class="badge rounded-pill">01</span></a>
                                <!-- <a class="list-group-item listream list-group-item-action rounded-3 shadow-sm mt-2" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings"><i class="fa-solid fa-scale-unbalanced fa-sm fakash"></i>&nbsp;Law
                                    &nbsp;&nbsp;<span class="badge rounded-pill">05</span></a> -->
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="tab-content" id="nav-tabContent">

                                <!-- Home Tab starts here -->
                                <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">

                                    <div class="row">

                                        <div class="col-md-4">
                                            <!-- Card -->
                                            <div class="card shadow-sm ">
                                                <img src="assets/img/programme_stock_img/paramedical/16.jpg" class="card-img-top" alt="...">
                                                <div class="card-body">

                                                    <h4 class="mb-2">B.Sc. (Radiological Imaging Techniques)</h4>
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
                                            <!-- Card -->
                                            <div class="card shadow-sm ">
                                                <img src="assets/img/programme_stock_img/paramedical/18.jpg" class="card-img-top" alt="...">
                                                <div class="card-body">

                                                    <h4 class="mb-2">B.Sc. (Forensic Sciences) </h4>
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
                                            <!-- Card -->
                                            <div class="card shadow-sm ">
                                                <img src="assets/img/programme_stock_img/paramedical/17.jpg" class="card-img-top" alt="...">
                                                <div class="card-body">

                                                    <h4 class="mb-2">B.Sc. (Medical Laboratory Techniques)</h4>
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
                                            <!-- Card -->
                                            <div class="card shadow-sm ">
                                                <img src="assets/img/programme_stock_img/paramedical/19.jpg" class="card-img-top" alt="...">
                                                <div class="card-body">

                                                    <h4 class="mb-2">B.Optom. (Bachelor of Optometry)</h4>
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
                                </div>

                                <!-- Home Tab  Ends  here -->


                                <!--  Home tab panel 2 Starts Here  --
								       ----------------------------- -->
                                <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                                    <div class="row">

                                        <div class="col-md-4">
                                            <!-- Card -->
                                            <div class="card shadow-sm">
                                                <img src="assets/img/programme_stock_img/paramedical/20.jpg" height="178px" class="card-img-top" alt="...">
                                                <div class="card-body">

                                                    <h4 class="mb-2">M.Sc. (Radiological Imaging Techniques)</h4>
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
                                            <!-- Card -->
                                            <div class="card shadow-sm">
                                                <img src="assets/img/programme_stock_img/paramedical/21.jpg" height="178px" class="card-img-top" alt="...">
                                                <div class="card-body">

                                                    <h4 class="mb-2">M.Sc. (Medical Laboratory Techniques)</h4>
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
                                            <!-- Card -->
                                            <div class="card shadow-sm">
                                                <img src="assets/img/programme_stock_img/paramedical/22.jpg" height="178px" class="card-img-top" alt="...">
                                                <div class="card-body">

                                                    <h4 class="mb-2">M.Sc. (Forensic Science)</h4>
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
                                            <!-- Card -->
                                            <div class="card shadow-sm progcard">
                                                <img src="assets/img/programme_stock_img/paramedical/13.jpg" height="178px" class="card-img-top" alt="...">
                                                <div class="card-body progcardbody">

                                                    <h4 class="mb-2">M.Sc. (Optometry)
                                                    </h4>
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

                                </div>
                                <!-- 
									/////Home tab 2 Ends Here/////
								 -->

                                <!-- 
									/////Home tab 3 Starts Here/////
								 -->

                                <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="card shadow-sm">
                                                <img src="https://d1vwxdpzbgdqj.cloudfront.net/s3-public-images/security-plus-bootcamp.png" height="178px">
                                                <div class="card-body progcardbody">
                                                    <h4 class="mb-2">Phd Paramedical Sciences</h4>
                                                </div>
                                                <div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                                    <div>
                                                    </div>
                                                    <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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

                        <button class="careers-accordion"><span> <i class="fa-solid fa-computer fa-sm fakash"></i>&nbsp;&nbsp;Undergraduate Programmes</span> <span class="icon">+</span></button>
                        <div class="panel">
                            <ul class="progul">
                                <li class="progli">
                                    <div class="card shadow-sm progcard">
                                        <img src="https://d1vwxdpzbgdqj.cloudfront.net/s3-public-images/page-banners/home/great-learning-career-academy.png" class="card-img-top" alt="...">
                                        <div class="card-body progcardbody">

                                            <h5 class="mb-2">B.Sc. (Radiological Imaging Techniques)</h5>
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
                                        <img src="https://d1vwxdpzbgdqj.cloudfront.net/s3-public-images/program/NCAI-program.png" class="card-img-top" alt="...">
                                        <div class="card-body progcardbody">
                                            <h4 class="mb-2">B.Sc. (Forensic Sciences)
                                            </h4>
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
                                        <img src="https://d1vwxdpzbgdqj.cloudfront.net/s3-public-images/security-plus-bootcamp.png" class="card-img-top" alt="...">
                                        <div class="card-body progcardbody">
                                            <h4 class="mb-2">B.Sc. (Medical Laboratory Techniques)</h4>
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
                                        <img src="https://d1vwxdpzbgdqj.cloudfront.net/s3-public-images/security-plus-bootcamp.png" class="card-img-top" alt="...">
                                        <div class="card-body progcardbody">
                                            <h4 class="mb-2">B.Optom. (Bachelor of Optometry) </h4>
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
                        </div>
                        <!-- Add the horizontal line here -->
                        <hr class="horizontal-line">

                        <button class="careers-accordion"><span><i class="fa-solid fa-microchip fa-sm fakash"></i>&nbsp;&nbsp;Postgraduate Programmes</span> <span class="icon">+</span></button>
                        <div class="panel">
                            <ul class="progul">
                                <li class="progli">
                                    <div class="card shadow-sm progcard">
                                        <img src="https://images.unsplash.com/photo-1537462715879-360eeb61a0ad?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8bWVjaGFuaWNhbHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60" height="178px" class="card-img-top" alt="Engineering image ">
                                        <div class="card-body progcardbody">

                                            <h4 class="mb-2">M.Sc. (Radiological Imaging Techniques)</h4>
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
                                        <img src="https://d1vwxdpzbgdqj.cloudfront.net/s3-public-images/program/applications-of-ai-domestic.jpeg" height="178px" class="card-img-top" alt="...">
                                        <div class="card-body progcardbody">

                                            <h4 class="mb-2">M.Sc. (Radiological Imaging Techniques)
                                            </h4>
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
                                        <img src="https://e1.pxfuel.com/desktop-wallpaper/775/611/desktop-wallpaper-ece-study-materials-and-projects-ebooks-campus-preparations-ece-engineering-thumbnail.jpg" height="178px">
                                        <div class="card-body progcardbody">

                                            <h4 class="mb-2">M.Sc. (Optometry) </h4>
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
                                        <img src="https://e1.pxfuel.com/desktop-wallpaper/775/611/desktop-wallpaper-ece-study-materials-and-projects-ebooks-campus-preparations-ece-engineering-thumbnail.jpg" height="178px">
                                        <div class="card-body progcardbody">

                                            <h4 class="mb-2">M.Sc. (Forensic Science) </h4>
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
                        </div>
                        <!-- Add the horizontal line here -->
                        <hr class="horizontal-line">
                        <button class="careers-accordion"><span><i class="fa-solid fa-business-time fa-sm fakash"></i>&nbsp;&nbsp;Doctrate Programmes</span> <span class="icon">+</span></button>
                        <div class="panel">
                            <ul class="progul">
                                <li class="progli">
                                    <div class="card shadow-sm progcard">
                                        <img src="https://d1vwxdpzbgdqj.cloudfront.net/s3-public-images/page-banners/home/great-learning-career-academy.png" height="178px" class="card-img-top" alt="Management  image ">
                                        <div class="card-body progcardbody">

                                            <h4 class="mb-2">Phd Paramedical Sceineces</h4>
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

                <h2 class="tmu-text-primary my-0 mb-3"> <span>Students </span> <span>Testimonial</span></h2>

                <div class="owl-carousel owl-carousel-full image-carousel carousel-widget charity-card" style="overflow: visible;" data-stage-padding="20" data-margin="50" data-center="true" data-loop="true" data-nav="true" data-autoplay="200000" data-speed="2000" data-pagi="true" data-items-xs="1" data-items-sm="2" data-items-md="2" data-items-lg="3" data-items-xl="3">

                    <div class="oc-item text-start">
                        <div class="media ">
                            <img src="https://www.tmu.ac.in/uploads/testimonial/Harjeet.jpg" class="mr-3" alt="">
                            <div class="media-body">
                                <div class="testimonial">
                                    <p class="overview mb-3"><b>Harjeet Kaur</b>, B.Sc. (RIT)</p>
                                    <p>I thoroughly enjoyed my time in college. The campus life is fantastic, with a perfect blend of discipline and fun. The college organises a variety of events, including technical, cultural, and sports activities, which make our experience enriching and enjoyable.
                                    </p>
                                </div>
                            </div>
                            <button class="tmu-btn btn-3 py-2 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14" onclick="showTestimonialModal()">Read More <i class="bi bi-chevron-down ps-2"></i></button>

                        </div>
                    </div>

                    <div class="oc-item text-start">
                        <div class="media">
                            <img src="https://www.tmu.ac.in/uploads/testimonial/Prabhneet.jpg" class="mr-3" alt="">
                            <div class="media-body">
                                <div class="testimonial">
                                    <p class="overview mb-3"><b>Prabneet Kaur</b>, B.Sc. (Forensic Sciences) </p>
                                    <p>My experience at Paramedical College has been amazing. The faculty's knowledge and hands-on training in crime scene investigation, management techniques and other forensic disciplines have prepared me for the future. I am grateful for the guidance.</p>
                                </div>
                                <button class="tmu-btn btn-3 py-2 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14" onclick="showTestimonialModal()">Read More <i class="bi bi-chevron-down ps-2"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="oc-item text-start">
                        <div class="media">
                            <img src="https://www.tmu.ac.in/uploads/testimonial/ankit_(2).jpg" class="mr-3" alt="">
                            <div class="media-body">
                                <div class="testimonial">
                                    <p class="overview mb-3"><b>Ankit</b>, M.Sc. (Optometry)</p>
                                    <p>The Paramedical College has a good infrastructure. Additionally, it fosters a strong student-teacher understanding, thus enhancing my self-confidence. Besides, the supportive environment allowed me to explore various activities alongside academics, making it an excellent place to study.
                                    </p>
                                </div>
                                <button class="tmu-btn btn-3 py-2 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14" onclick="showTestimonialModal()">Read More <i class="bi bi-chevron-down ps-2"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="oc-item text-start">
                        <div class="media">
                            <img src="https://www.tmu.ac.in/uploads/alumni_speak/Mamta_Verma.jpg" class="mr-3" alt="">
                            <div class="media-body">
                                <div class="testimonial">
                                    <p class="overview mb-3"><b>Mamta Verma</b>, M.Sc.(RIT)</p>
                                    <p>TMU & College of Paramedical Sciences is an excellent campus & college to live and learn. My experience here has been so great as I had so much practical exposure of my field because of the on campus facility centre, hospital equipped with top quality technical instruments, interaction with radiologists, technicians was the cherry on top. My experience here will be shaping my career and escalating it. I will recommend TMU campus & College of Paramedical Sciences to one & all. </p>
                                </div>
                                <button class="tmu-btn btn-3 py-2 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14" onclick="showTestimonialModal()">Read More <i class="bi bi-chevron-down ps-2"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="oc-item text-start">
                        <div class="media">
                            <img src="https://www.tmu.ac.in/uploads/alumni_speak/Dheeraj_Kumar.jpg" class="mr-3" alt="">
                            <div class="media-body">
                                <div class="testimonial">
                                    <p class="overview mb-3"><b>Dheeraj Kumar</b>, MRIT (M.Sc. Radiological Imaging Techniques)</p>
                                    <p>I am very happy to be a part of the TMU family for pursuing my post-graduation programme due to it's comprehensive and equipped hospital facility. The campus & college environment is warm and quite supportive. My favorite program at the college is the Teaching-training program where we get to develop and explore our potential for being future academicians. My second favorite stop at the campus are its eateries and canteens which serve variety of delicious cuisines, right inside the campus. The university offers comprehensive and high-end facilities.
                                    </p>
                                </div>
                                <button class="tmu-btn btn-3 py-2 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14" onclick="showTestimonialModal()">Read More <i class="bi bi-chevron-down ps-2"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="oc-item text-start">
                        <div class="media">
                            <img src="https://www.tmu.ac.in/uploads/alumni_speak/Madhuri-N.jpg" class="mr-3" alt="">
                            <div class="media-body">
                                <div class="testimonial">
                                    <p class="overview mb-3"><b>Madhuri Kumari </b>, B.Sc. (RIT)</p>
                                    <p>Thank you TMU & College of Pharmacy for the immense efforts, the management and staff puts in for us students, a huge heart felt thank you to you all. All the practice at laboratories, exercise at the indoor stadium and theory classes at the classrooms have grown me and made me an active and fit person. I am happy that with careful guidance I have achieved my dream into reality and all thanks to TMCOP.</p>
                                </div>
                                <button class="tmu-btn btn-3 py-2 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14" onclick="showTestimonialModal()">Read More <i class="bi bi-chevron-down ps-2"></i></button>
                            </div>
                        </div>
                    </div>
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
    <h2 class="tmu-text-primary text-center"><span>Frequently Asked </span><span> Questions</span></h2>
    <hr class="horizontal-line">

    <button class="careers-accordion">Why TMU’s College of Paramedical Sciences is the Best Choice for You <span class="icon">+</span></button>
    <div class="panel">
        <h3 class="tmu-text-primary mb-0 fs-16"><span>NAAC-A Accredited and Recognised by UGC and </span><span> UP State Medical Faculty</span></h3>
        <p class="text-justify">The College of Paramedical Sciences at TMU boasts prestigious accreditations and recognitions, ensuring that your education meets the highest standards set by regulatory bodies.</p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>Awarded "A" Rating by the Quality </span><span> Council of India</span></h3>
        <p class="text-justify">In 2023, TMU's commitment to quality education was reaffirmed with an "A" rating from the Quality Council of India, underscoring its dedication to academic excellence.</p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>Experiential Learning by </span><span> Highly Qualified Faculties</span></h3>
        <p class="text-justify">At TMU, learning extends beyond textbooks, with highly qualified faculties providing hands-on experiences to prepare you for real-world challenges in the paramedical field.</p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>Hands-on Training in </span><span> TMU Hospital</span></h3>
        <p class="text-justify">One of the unique features of TMU is its integrated hospital, providing students with invaluable hands-on training in a real healthcare setting.</p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>Well-equipped Laboratories </span><span> and Medical Technology</span></h3>
        <p class="text-justify">State-of-the-art laboratories and cutting-edge medical technology ensure that students receive practical training using the latest equipment and techniques.</p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>Global </span><span> Opportunities</span></h3>
        <p class="text-justify">TMU's global outlook opens doors to international opportunities, allowing students to gain exposure to diverse healthcare systems and practices.</p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>100% Placement Assistance with an </span><span> Excellent Track Record</span></h3>
        <p class="text-justify">With a strong network of industry connections, TMU ensures that graduates are well-equipped to secure fulfilling careers in the paramedical field.</p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>Strong Industry Connections for </span><span> Real-World Insights</span></h3>
        <p class="text-justify">TMU's robust industry connections provide students with insights into current trends and practices, ensuring that they are industry-ready upon graduation.</p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>Modern Classrooms for </span><span> Interactive Sessions</span></h3>
        <p class="text-justify">Interactive sessions in modern classrooms foster collaborative learning and critical thinking among students.</p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>Well-equipped Medical Laboratories for </span><span> Practical Experiments</span></h3>
        <p class="text-justify">From conducting experiments to mastering techniques, TMU's well-equipped medical laboratories provide students with a conducive environment for learning.</p>

    </div>
    <!-- Add the horizontal line here -->
    <hr class="horizontal-line">

    <button class="careers-accordion">Paramedical Courses offered in TMU<span class="icon">+</span></button>
    <div class="panel">
        <ul class="m-ol-list ps-5 mb-1">
            <li><strong>UG</strong> </li>
            <li><strong>PG</strong> </li>
            <li><strong>Ph.D.</strong> </li>
        </ul>
    </div>
    <!-- Add the horizontal line here -->
    <hr class="horizontal-line">
    <button class="careers-accordion">Explore Top-Notch Placement Opportunities<span class="icon">+</span></button>
    <div class="panel">
        <h3 class="tmu-text-primary mb-0 fs-16"><span>Expert Faculty for Hands-on </span><span> Practical Knowledge</span></h3>
        <p class="text-justify">Under the guidance of expert faculty members, students gain practical knowledge that is essential for success in the paramedical field.</p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>Centre for Teaching, </span><span> Learning, and Development</span></h3>
        <p class="text-justify">TMU's focus on holistic development ensures that students not only excel academically but also grow personally and professionally.</p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>Robust Industry Affiliations for </span><span> Invaluable Insights</span></h3>
        <p class="text-justify">Affiliations with leading healthcare organisations provide students with invaluable insights into industry practices and trends.</p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>Gain a Global Edge with </span><span> International Healthcare Internships</span></h3>
        <p class="text-justify">TMU offers opportunities for international internships, allowing students to gain a global perspective and enhance their skill set.</p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>On-Campus </span><span> Accommodation Facilities</span></h3>
        <p class="text-justify">Comfortable hostel facilities ensure that students have a conducive environment for learning and personal growth.</p>

    </div>
    <!-- Add the horizontal line here -->
    <hr class="horizontal-line">
    <button class="careers-accordion">Top 10 Careers in the Paramedical Field: <span class="icon">+</span></button>
    <div class="panel">
        <h3 class="tmu-text-primary mb-0 fs-16"><span>1. Medical Laboratory </span><span> Assistance</span></h3>
        <p class="text-justify">Medical lab assistants perform various laboratory tests to help diagnose, treat, and prevent diseases. They analyse body fluids, tissues, and cells to provide crucial information to healthcare professionals.</p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>2. Radiologic </span><span> Technologist</span></h3>
        <p class="text-justify">Radiologic technologists operate imaging equipment such as X-ray machines, CT scanners, and MRI machines to create images of the body for diagnostic purposes. They play a vital role in helping physicians diagnose and treat medical conditions. TMU offers BSc/MSc Radiology courses and diploma courses in Radiology.</p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>3. Emergency Medical </span><span> Technician (EMT)</span></h3>
        <p class="text-justify">EMTs provide emergency medical care to patients in critical situations, such as accidents, injuries, or sudden illnesses. They assess patients' conditions, administer necessary treatments, and transport them to medical facilities for further care.</p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>4. Paramedic</span></h3>
        <p class="text-justify">Paramedics are advanced EMTs trained to provide more comprehensive medical care in emergency situations. They can administer medications, perform advanced medical procedures, and make critical decisions to stabilise patients before they reach the hospital.</p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>5. Respiratory </span><span> Therapist</span></h3>
        <p class="text-justify">Respiratory therapists specialise in treating patients with respiratory disorders, such as asthma, chronic obstructive pulmonary disease (COPD), and pneumonia. They assess patients' lung function, administer breathing treatments, and provide respiratory care in emergency situations.</p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>6. Occupational </span><span> Therapy Assistant</span></h3>
        <p class="text-justify">Occupational therapy assistants work under the supervision of occupational therapists to help patients develop, recover, and improve the skills needed for daily living and working. They assist patients with therapeutic exercises, activities, and adaptive equipment.</p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>7. Physical </span><span> Therapy Assistant</span></h3>
        <p class="text-justify">Physical therapy assistants assist physical therapists in providing rehabilitative services to patients with injuries or disabilities. They help patients perform therapeutic exercises, use therapeutic modalities, and improve mobility and function.</p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>8. Cardiac </span><span> Technician</span></h3>
        <p class="text-justify">Cardiac technicians perform diagnostic tests to evaluate patients' heart function and identify cardiac abnormalities. They conduct electrocardiograms (ECGs), stress tests, and Holter monitoring to assist cardiologists in diagnosing and treating heart conditions.</p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>9. Surgical </span><span> Technologist</span></h3>
        <p class="text-justify">Surgical technologists assist surgeons and nurses in operating rooms by preparing surgical instruments, equipment, and supplies for procedures. They also assist during surgeries by passing instruments to surgeons, maintaining a sterile field, and ensuring patient safety.</p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>10. Dialysis </span><span> Technician</span></h3>
        <p class="text-justify">Dialysis technicians operate dialysis machines to remove waste and excess fluid from patients' blood when their kidneys are no longer able to function properly. They monitor patients during dialysis treatments and provide emotional support and education to patients and their families.</p>

    </div>
    <hr class="horizontal-line">
    <button class="careers-accordion"> Campus Life at College of Paramedical Sciences:<span class="icon">+</span></button>
    <div class="panel">
        <h3 class="tmu-text-primary mb-0 fs-16"><span>1. Academic </span><span> Excellence:</span></h3>
        <p class="text-justify">
            The College of Paramedical Sciences at TMU is committed to providing students with a rigorous academic curriculum taught
            by experienced faculty members who are experts in their fields.
        </p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>2. Extracurricular </span><span> Activities:</span></h3>
        <p class="text-justify">
            In addition to academics, students have the opportunity to participate in a variety of extracurricular activities, including
            sports, cultural events, and student clubs and organizations.
        </p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>3. State-of-the-Art </span><span> Facilities:</span></h3>
        <p class="text-justify">
            TMU's campus boasts modern facilities, including well-equipped classrooms, laboratories, and libraries, providing students
            with an optimal learning environment.
        </p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>4. Career </span><span> Services:</span></h3>
        <p class="text-justify">
            The college offers comprehensive career services through the Corporate Resource Centre (CRC) to help students explore career
            options, develop job search skills, and connect with potential employers through internships and job placements.
        </p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>5. Student Support </span><span> Services:</span></h3>
        <p class="text-justify">
            TMU provides various support services to help students succeed, including academic advising, counselling, tutoring, and
            disability services, ensuring that all students have the resources they need to excel academically and personally.
        </p>
    </div>
    <!-- Add the horizontal line here -->
    <hr class="horizontal-line">
    <button class="careers-accordion">Facilities Available at College of Paramedical Sciences: <span class="icon">+</span></button>
    <div class="panel">
        <h3 class="tmu-text-primary mb-0 fs-16"><span>1. Laboratories:</span></h3>
        <p class="text-justify">
            The college is equipped with state-of-the-art laboratories for practical training in medical laboratory technology, radiography, and other paramedical disciplines.
        </p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>2. Hospital </span><span> Training:</span></h3>
        <p class="text-justify">
            TMU's integrated hospital provides students with hands-on training opportunities in a real healthcare setting, allowing them to apply their knowledge and skills in a clinical environment.
        </p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>3. Library:</span></h3>
        <p class="text-justify">
            The college library houses a vast collection of reference materials, textbooks, journals, and online resources related to paramedical sciences, providing students with access to valuable learning resources.
        </p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>4. Simulation </span><span> Labs:</span></h3>
        <p class="text-justify">
            Simulation labs are available for students to practice clinical procedures and scenarios in a controlled environment, helping them develop confidence and proficiency before working with actual patients.
        </p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>5. Faculty </span><span> Support:</span></h3>
        <p class="text-justify">
            Experienced faculty members are available to provide guidance, support, and mentorship to students throughout their academic journey, ensuring that they receive personalised attention and assistance when needed.
        </p>

    </div>
    <hr class="horizontal-line">
    <button class="careers-accordion">Conclusion <span class="icon">+</span></button>
    <div class="panel">
        <p class="text-justify">In conclusion, Teerthanker Mahaveer University's College of Paramedical Sciences stands out as a top choice for individuals seeking quality education and practical training in the paramedical field. With its prestigious accreditations, experienced faculty, state-of-the-art facilities, and strong industry connections, TMU prepares students for successful careers in healthcare, both nationally and internationally.</p>
    </div>
    <hr class="horizontal-line">
    <button class="careers-accordion">FAQs<span class="icon">+</span></button>
    <div class="panel">
        <p class="text-justify"><strong>Q1. What makes TMU's College of Paramedical Sciences unique?</strong></p>
        <p class="text-justify"><strong>Ans:</strong> TMU's College of Paramedical Sciences stands out for its hands-on training, global opportunities, and strong industry connections, ensuring that students receive a comprehensive education that prepares them for success in the paramedical field.</p>

        <p class="text-justify"><strong>Q2. How does TMU support students' career aspirations?</strong></p>
        <p class="text-justify"><strong>Ans:</strong> TMU offers 100% placement assistance, with a track record of excellent placements in leading healthcare organisations. Additionally, the university provides students with opportunities for international internships and exposure to real-world industry practices.</p>
        </p>
        <p class="text-justify"><strong>Q3. What facilities does TMU provide for students' accommodation?</strong></p>
        <p class="text-justify"><strong>Ans:</strong> TMU offers comfortable hostel facilities on campus, ensuring that students have a conducive environment for learning and personal growth. The university prioritises students' well-being and provides a supportive community environment.</p>
        <p class="text-justify"><strong>Q4. What sets TMU's faculty apart?</strong></p>
        <p class="text-justify"><strong>Ans:</strong> TMU's faculty members are highly qualified experts in their respective fields, with extensive experience in academia and industry. They are dedicated to providing students with practical knowledge and skills that are essential for success in the paramedical field.</p>
        <p class="text-justify"><strong>Q5. How does TMU foster innovation and entrepreneurship?</strong></p>
        <p class="text-justify"><strong>Ans:</strong>TMU is committed to fostering innovation and entrepreneurship through its Business Incubation Centre and Entrepreneurship Development Cell. The university provides support and resources to students interested in starting their own ventures, contributing to the nation's journey towards self-reliance. </p>
    </div>
    <hr class="horizontal-line">
</div>

<br /><br />
<script src="{{asset('/assets/js/tmimt.js')}}"></script>

@endsection