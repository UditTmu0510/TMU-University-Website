@extends('layouts.university.colleges.pharmacy_home_without_sidebar')
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
                    <h1 class=" mt-5 mb-5 d-none d-md-block  banner-main-heading">Welcome to <br> <span style="font-weight:700!important;">College of Pharmacy</span></h1>
                    <h1 class=" mt-5 mb-3 d-block d-md-none" style="color:#001055; text-transform: capitalize; font-weight:700!important; font-size:24px">Welcome to <br> <span style="font-weight:700!important;">College of Pharmacy</span></h1>
                    <!-- <a href="#" class="tmu-btn btn-1 me-4 py-1 px-3 py-xl-2 px-xl-4"> Download Brochure</a> -->
                    <a href="https://admissions.tmu.ac.in/" target="_blank" class="tmu-btn btn-2 py-1 px-3 py-xl-2 px-xl-4">Apply Now</a>
                </div>
                <div class="col-12 col-md-6">
                    <div class="pe-lg-4 position-relative p-0">
                        <div style="z-index: 2;">
                            <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/iXHRmCyHszY?si=BcZ5NOfT-V8ECc6z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="z-index: 2; margin:0;"></iframe> -->
                            <img src="{{asset('/assets/img/banner/pharmacy/pharmacy-banner.webp')}}" alt="" class="p-0 m-0">
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
                            <span>UP’s 1st </span>
                            <br>
                            <span class="d-block pt-1">Drug Information Centre</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 px-1">
                    <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                        <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                            <span>Ranked 4th </span>
                            <br>
                            <span class="d-block pt-1">in UP by IIRF</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 px-1">
                    <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                        <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                            <span>IPR Cell </span>
                            <br>
                            <span class="d-block pt-1">for Patent Filing</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 px-1">
                    <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                        <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                            <span>30+ </span>
                            <br>
                            <span class="d-block pt-1">Labs</span>
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
                                        <span>UP’s 1st </span>
                                        <br>
                                        <span class="d-block pt-1">Drug Information Centre</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                                    <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                                        <span>Ranked 4th </span>
                                        <br>
                                        <span class="d-block pt-1">in UP by IIRF</span>
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
                                        <span>IPR Cell </span>
                                        <br>
                                        <span class="d-block pt-1">for Patent Filing</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                                    <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                                        <span>30+ </span>
                                        <br>
                                        <span class="d-block pt-1">Labs</span>
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
                <h1 class="college-main-heading">College of Pharmacy, Among the Top Colleges for Pharmacy Courses/Programmes</h1>
                <div class="row">
                    <div class="col-12 px-2 px-md-5">
                        <p style="text-align: justify;">The College of Pharmacy was established in the year 2008 and approved by the Pharmacy Council of India. The college grooms professionals by providing diplomas and graduate, post-graduate and doctorate-level programmes, equipping students with innovative techniques to solve problems in the pharmaceutical industry and clinical settings.</p>
                        <div class="read-more-content mt-0">
                        <p style="text-align: justify;">Welcome to the College of Pharmacy at Teerthanker Mahaveer University (TMU), where academic excellence meets practical experience to shape the future leaders of the pharmaceutical world. Recognised as one of the top colleges for pharmacy courses in India, the College provides a unique blend of theoretical knowledge and hands-on training, preparing our students for successful careers in the dynamic field of pharmacy.
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
            <div class="tab-content second ps-4 px-md-5" id="myTabContent">
                <div class="tab-pane fade show active" id="Tab1" role="tabpanel" aria-labelledby="tab1-tab">
                    <h3>Key Highlights</h3>
                    <ul class="m-ol-list ps-4">
                        <li>
                            <p class="p-0 m-0">It is a hub for academic research and consultancy, fostering expertise by offering a wide range of programmes that equip students with the knowledge and skills needed to excel in the ever-evolving field of pharmacy.</p>
                        </li>
                        <li>
                            <p class="p-0 m-0">By offering the PharmD programme, the College of Pharmacy demonstrates its dedication to elevating the standards of pharmacy education and preparing graduates/post-graduates for advanced roles in the healthcare system as it is only available in five pharmacy institutions in Uttar Pradesh.</p>
                        </li>
                        <li>
                            <p class="p-0 m-0">The college takes pride in its fully functional Drug Information Centre, which is one of its kind in the state of Uttar Pradesh. This centre serves as a valuable resource and offers an ideal platform for students to enhance their knowledge and develop skills in drug information retrieval and analysis</p>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="Tab2" role="tabpanel" aria-labelledby="tab2-tab">
                    <h3>Placement/Internship</h3>
                    <p>The college has a proven track record of successful placements. Our graduates have secured positions in diverse roles and settings, including community pharmacies, hospital pharmacies, pharmaceutical companies, research institutions, regulatory agencies, and academia.
                        <br><br>
                        Center for Teaching, Learning & Development (CTLD) provides comprehensive career guidance and counselling services to our students in the field of innovation and entrepreneurship.
                        <br><br>
                        Teerthanker Mahaveer University's Corporate Resource Center is committed to empowering students on their journey from admission to placement, with a strong focus on achieving an 82% placement rate. With personalised assistance in resume building, interview preparation, and professional training, our students are well-equipped to showcase their skills and abilities to potential employers.                        
                        <br><br>
                    </p>
                </div>
                <div class="tab-pane fade" id="Tab3" role="tabpanel" aria-labelledby="tab3-tab">
                    <h3>Curriculum</h3>
                    <ul class="m-ol-list ps-4">
                        <li><p class="p-0 m-0">Programmes are approved by the Pharmacy Council of India.</p></li>
                        <li><p class="p-0 m-0">A meticulously designed curriculum with deliberations from top professionals and academic bodies to nurture an industry-ready employable workforce.</p></li>
                        <li><p class="p-0 m-0">Emphasis on independent thinking, creativity, and innovation.</p></li>
                        <li><p class="p-0 m-0">A highly disciplined and motivated environment with an extensive focus on practical based learning of our students.</p></li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="Tab4" role="tabpanel" aria-labelledby="tab4-tab">
                    <h3>Infrastructure</h3>
                    <ul class="m-ol-list ps-4">
                        <li><p class="p-0 m-0">The College of Pharmacy has well-equipped laboratories for General Pharmaceutics, Microbiology, Pharmacology and Toxicology as well as Pharmacognosy and Herbal Medicine with access to sophisticated instruments.</p></li>
                        <li><p class="p-0 m-0">The major equipment available in this college are IR Spectrophotometer, HPLC, Lyophilizer, Rotary tablet punch, Digital Dissolution apparatus, Brookfield Rheometer, Nephelometer and Plethysmometer.</p></li>
                        <li><p class="p-0 m-0">The smart classrooms with advanced technology and cutting-edge facilities enhance the learning experience, enabling instructors to deliver engaging presentations and interactive sessions.</p></li>
                        <li><p class="p-0 m-0">The college library is a treasure house of pharmaceutical literature and resources. Students have access to an extensive collection of books, journals, research papers, and e-resources, enabling them to stay updated with the latest advancements in the field.</p></li>
                    </ul>           
                </div>
            </div>
        </div>

        <!----- Start-->
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
                                <a class="programme-fetch-button list-group-item listream list-group-item-action rounded-3 shadow-sm mt-2" id="PHD" data-ProgrammeLevel="Doctoral" data-bs-toggle="list" href="#Doctoral" role="tab" aria-controls="Doctoral"><i class="fa-solid fa-business-time fa-sm fakash"></i>&nbsp;Doctorate
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
                        <button class="careers-accordion" data-ProgrammeLevel="Doctoral"><span><i class="fa-solid fa-business-time fa-sm fakash"></i>&nbsp;&nbsp;Doctorate</span> <span class="icon">+</span></button>
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
<h2 class="tmu-text-primary text-center"><span>Frequently Asked </span><span> Questions</span></h2>
            <hr class="horizontal-line">

            <button class="careers-accordion">Key Highlights of College of Pharmacy <span class="icon">+</span></button>
            <div class="panel active">
            <ul class="m-ol-list ps-4 text-justify">
    <li>🏆 UGC-Approved with NAAC A Accreditation: Our programs are recognized by the University Grants Commission (UGC) and accredited by the National Assessment and Accreditation Council (NAAC) with an A grade, ensuring high academic standards.</li>
    <li>👩‍⚕️ Experiential Learning by Highly Qualified Faculties: Students learn from experienced professionals who bring real-world insights into the classroom.</li>
    <li>✨ 1st Private University in UP with a Drug Information Centre: Gain access to the only Drug Information Centre in Uttar Pradesh, providing essential drug-related information to healthcare professionals and consumers.</li>
    <li>🏥 Hands-on Training in TMU Hospital: Benefit from practical training in our Hospital with advanced medical facilities, bridging the gap between theory and practice.</li>
    <li>🔬 Central Instrumentation Lab (CIL): Utilize advanced equipment and technologies for cutting-edge research and practical training.</li>
    <li>💉 Well-equipped Laboratories and Medical Technology for Practical Training: Engage in hands-on learning with our sophisticated lab facilities.</li>
    <li>✈️ Global Opportunities: Explore international exposure and collaborations with leading global pharmaceutical companies.</li>
    <li>💼 100% Placement Assistance with an Excellent Track Record: Secure your future with our robust placement support and strong industry connections.</li>
    <li>🌐 Strong Industry Connections for Real-World Insights: Benefit from our partnerships with top pharmaceutical companies and organizations.</li>
    <li>🏫 Modern Classrooms for Interactive Sessions: Learn in an environment designed for interactive and effective teaching.</li>
    <li>🎤 Pharmaceutical Workshops and Seminars: Participate in events that enhance your knowledge and skills.</li>
    <li>🏋️‍♂️ Gym and Fitness Centre: Maintain a healthy lifestyle with our on-campus fitness facilities.</li>
    <li>🏠 Comfortable Hostel Facilities: Enjoy a supportive and comfortable living environment.</li>
    <li>🛍️ Shopping Stores and Cafeterias: Access essential amenities right on campus.</li>
    <li>🚫 Anti-Ragging Campus: Study in a safe and respectful environment.</li>
    <li>📶 Wi-Fi Enabled Campus: Stay connected with high-speed internet access.</li>
</ul>

            </div>
            <!-- Add the horizontal line here -->
            <hr class="horizontal-line">

            <button class="careers-accordion">Explore Top-Notch Placement Opportunities<span class="icon">+</span></button>
            <div class="panel">
                <p class="text-justify">Our College of Pharmacy is not only a place of learning but also a gateway to numerous career opportunities. We offer comprehensive placement assistance to help our graduates secure positions in top pharmaceutical companies.</p>
            </div>
            <!-- Add the horizontal line here -->
            <hr class="horizontal-line">
            <button class="careers-accordion">Core Programs Offered with Diverse Specializations<span class="icon">+</span></button>
            <div class="panel">
            <ul class="m-ol-list ps-4 text-justify">
                <li>BPharma</li>
                <li>MPharma</li>
                <li>DPharma</li>
                <li>PharmD</li>
                <li>Diploma</li>
                <li>PhD</li>
            </ul> 
            <h3 class="tmu-text-primary fs-16"><span>The Best Private Pharmacy</span><span> College in UP</span></h3>   
            <p class="text-justify">Established in 2008, the College of Pharmacy at TMU has consistently been at the forefront of pharmaceutical education, research, and practice. Our programs are designed to equip students with innovative techniques and skills to tackle challenges in drug industries and clinical areas</p>
            </div>
            <!-- Add the horizontal line here -->
            <hr class="horizontal-line">
            <button class="careers-accordion">Career Opportunities<span class="icon">+</span></button>
            <div class="panel">
                <p class="text-justify">A career in pharmacy offers numerous benefits, including:</p>
                <ul class="m-ol-list ps-4 text-justify">
                    <li><b class="fs-14">Diverse Job Roles:</b> Pharmacists can work in various settings, including hospitals, community pharmacies, research labs, and pharmaceutical companies.</li>
                    <li><b class="fs-14">High Demand:</b> With an increasing focus on healthcare, the demand for qualified pharmacists is on the rise.</li>
                    <li><b class="fs-14">Competitive Salaries:</b> Pharmacists often enjoy lucrative salaries and benefits.</li>
                    <li><b class="fs-14">Global Opportunities:</b> Pharmaceutical professionals have the chance to work globally, contributing to healthcare systems worldwide.</li>
                    <li><b class="fs-14">Innovative Field:</b> Pharmacy is a field that constantly evolves with new technologies and research.</li>
                    <li><b class="fs-14">Patient Care:</b> Pharmacists play a crucial role in patient care, ensuring safe and effective medication use.</li>
                    <li><b class="fs-14">Research Opportunities:</b> Engage in groundbreaking research that can lead to new drug discoveries.</li>
                    <li><b class="fs-14">Entrepreneurial Ventures:</b> Pharmacists can start their own pharmacies or pharmaceutical businesses.</li>
                    <li><b class="fs-14">Regulatory Roles:</b> Work with regulatory agencies to ensure the safety and efficacy of medications.</li>
                    <li><b class="fs-14">Academic Careers:</b> Teach and mentor the next generation of pharmacy professionals.</li>
                </ul>
            </div>
            <!-- Add the horizontal line here -->
            <hr class="horizontal-line">
            <button class="careers-accordion">Life at the College of Pharmacy <span class="icon">+</span></button>
            <div class="panel">
                <p class="text-justify">Life at TMU College of Pharmacy is vibrant and enriching. Our students enjoy:</p>
                <h3 class="tmu-text-primary fs-16 mb-1"><span> State-of-the-</span><span>Art Facilities:</span></h3> 
                <p class="text-justify">From modern classrooms to well-equipped labs, we provide an optimal learning environment.</p>
                <h3 class="tmu-text-primary fs-16 mb-1"><span> Extracurricular </span><span> Activities:</span></h3> 
                <p class="text-justify">Participate in various clubs, events, and seminars that enhance your educational experience.</p>
                <h3 class="tmu-text-primary fs-16 mb-1"><span> Supportive </span><span> Community:</span></h3> 
                <p class="text-justify">Be part of a diverse and inclusive community that supports your academic and personal growth.</p>
            </div>
            <!-- Add the horizontal line here -->
            <hr class="horizontal-line">
            <button class="careers-accordion">Conclusion <span class="icon">+</span></button>
            <div class="panel">
                <p class="text-justify">Join us, College of Pharmacy at TMU and embark on a transformative educational journey that prepares you for a successful career in the ever-evolving field of pharmacy. <span class="highlight"><a href="https://admissions.tmu.ac.in/" target="_blank">Apply today</a></span> and take the first step toward shaping the future of healthcare.</p>
            </div>
            <hr class="horizontal-line">
            <button class="careers-accordion">FAQs<span class="icon">+</span></button>
            <div class="panel">
            <p class="text-justify"><strong>Q: What is the duration of the B.Pharm course?</strong></p>
            <p class="text-justify"><strong>Ans:</strong> The B.Pharm course duration is four years.</p>

            <p class="text-justify"><strong>Q: What are the career opportunities after completing a B.Pharm?</strong></p>
            <p class="text-justify"><strong>Ans:</strong> Graduates can pursue careers in community pharmacies, hospitals, pharmaceutical companies, research labs, and regulatory agencies.</p>

            <p class="text-justify"><strong>Q: Does TMU provide placement assistance?</strong></p>
            <p class="text-justify"><strong>Ans:</strong> Yes, TMU offers 100% placement assistance with an excellent track record.</p>

            <p class="text-justify"><strong>Q: What makes TMU College of Pharmacy unique?</strong></p>
            <p class="text-justify"><strong>Ans:</strong> Our NAAC A accreditation, state-of-the-art facilities, experiential learning approach, and strong industry connections set us apart.</p>

            <p class="text-justify"><strong>Q: What specialisations are offered in the M.Pharm program?</strong></p>
            <p class="text-justify"><strong>Ans:</strong> We offer specialisations in Pharmaceutics, Pharmacology, Pharmacognosy, and Pharmaceutical Analysis.</p>

            <p class="text-justify"><strong>Q: Are there global opportunities for TMU pharmacy graduates?</strong></p>
            <p class="text-justify"><strong>Ans:</strong> Yes, TMU has established strong global networks, offering students opportunities for international exposure and collaborative research.</p>

            <p class="text-justify"><strong>Q: What facilities are available on campus?</strong></p>
            <p class="text-justify"><strong>Ans:</strong> Our campus features modern classrooms, well-equipped labs, a hospital for practical training, a gym, hostels, shopping stores, cafeterias, and a Wi-Fi-enabled environment.</p>

            <p class="text-justify"><strong>Q: How does TMU support research in pharmacy?</strong></p>
            <p class="text-justify"><strong>Ans:</strong> We provide advanced laboratories, sophisticated instruments, and a Drug Information Centre to support research and practical training.</p>

            <p class="text-justify"><strong>Q: What is the role of the Drug Information Centre at TMU?</strong></p>
            <p class="text-justify"><strong>Ans:</strong> The Drug Information Centre provides essential drug-related information to healthcare professionals and consumers, supporting medication safety and efficacy.</p>

            <p class="text-justify"><strong>Q: How can I apply to TMU College of Pharmacy?</strong></p>
            <p class="text-justify"><strong>Ans:</strong> You can apply through our website or contact our admissions office for more details on the application process.</p>

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
                cd_id: 5,
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
                cd_id: 5,
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