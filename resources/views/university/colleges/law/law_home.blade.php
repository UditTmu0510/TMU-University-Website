@extends('layouts.university.colleges.law_home_without_sidebar')
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
                    <h1 class=" mt-5 mb-5 banner-main-heading">Welcome to <span style="font-weight:700!important;">Teerthanker Mahaveer College of </span> Law and legal studies</h1>
                    <!-- <a href="#" class="tmu-btn btn-1 me-4 py-1 px-3 py-xl-2 px-xl-4"> Download Brochure</a> -->
                    <a href="https://admissions.tmu.ac.in/" target="_blank" class="tmu-btn btn-2 py-1 px-3 py-xl-2 px-xl-4">Apply Now</a>
                </div>
                <div class="col-12 col-md-6">
                    <div class="pe-lg-4 position-relative p-0">
                        <div style="z-index: 2;">
                            <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/iXHRmCyHszY?si=BcZ5NOfT-V8ECc6z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="z-index: 2; margin:0;"></iframe> -->
                            <img src="{{asset('/assets/img/banner/law/law-banner.webp')}}" alt="" class="p-0 m-0">
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
                            <span>Bar Council</span>
                            <br>
                            <span class="d-block pt-1">of India approved <br>Programmes</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 px-1">
                    <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                        <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                            <span>Integrated </span>
                            <br>
                            <span class="d-block pt-1">Dual Degree <br> Programmes</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 px-1">
                    <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                        <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                            <span>Legal Aid</span>
                            <br>
                            <span class="d-block pt-1">Clinic & Social Consultancy Centre</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 px-1">
                    <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                        <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                            <span>Active learning </span>
                            <br>
                            <span class="d-block pt-1">through Moot Court <br> Sessions</span>
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
                                        <span>Bar Council</span>
                                        <br>
                                        <span class="d-block pt-1">of India <br> approved Programmes</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                                    <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                                        <span>Integrated </span>
                                        <br>
                                        <span class="d-block pt-1">Dual Degree <br> Programmes</span>
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
                                        <span>Legal Aid</span>
                                        <br>
                                        <span class="d-block pt-1">Clinic & Social <br> Consultancy Centre</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                                    <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                                        <span>Active learning </span>
                                        <br>
                                        <span class="d-block pt-1">through Moot Court <br> Sessions</span>
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
                <h2 class="college-main-heading"></h2>
                <h2 class="college-main-heading d-none d-md-block">Teerthanker Mahaveer College of Law and Legal Studies (CLLS): Among the Top Law Colleges</h2>
                <h3 class="tmu-text-primary d-block d-md-none"><span>Teerthanker Mahaveer College of Law and Legal Studies (CLLS):</span><span>  Among the Top Law Colleges</span></h3>
                <div class="row">
                    <div class="col-12 px-2 px-md-5">
                        <p style="text-align: justify;">The College of Law and Legal Studies (CLLS) was established in 2010 with the aim of building students&rsquo; successful careers in the Law domain. The 12+ years old institute has carved a niche for itself when it comes to the <span class="highlight"><a href="{{url ('blog/top-10-law-colleges-in-india')}}" target="_blank">best private colleges for law in India</a></span> due to its exemplary practical exposure, regular moot court sessions, and qualitative mentorship from qualified faculties. </p>
                        <div class="read-more-content mt-0">
                            <p style="text-align: justify;">CLLS nurtures the professional skills of the students while teaching them their rightful duties, and crucial moral values to be a successful law professional.</p>
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
                    <p>The college has been contributing to the legal sector with consistently good professionals and has been rated in high regard in the top law colleges in UP.</p>
                    <ul class="m-ol-list ps-4 mb-0">
                        <li>A multicultural environment for our students from different nations and continents allows them to interact, learn from their peers, and make long-term professional associations.</li>
                        <li>100% placement assistance in leading law firms, corporate houses, and NGOs. While one can also pursue their career as a Professor / Judge / Law Officers in academics, judicial services & public offices, respectively.</li>
                    </ul>
                    <div class="read-more-content mt-0">
                        <ul class="m-ol-list ps-4 mb-0">
                            <li>Intra and inter-school academic competitions are organized regularly. These competitions include moot-court competitions, debate competitions, extempore competitions, legal role-play competitions, research paper presentations, Legal Quizzes, etc.</li>
                            <li>Guest lectures by eminent personalities from the legal fraternity as well as workshops and seminars monthly and organizing periodic visits to the Parliament, Law Commission of India, Supreme Court of India, etc.</li>
                            <li>Scholarship Program for Meritorious.</li>
                            <li>Holistic development.</li>
                        </ul>
                    </div>
                    <a href="javascript:void(0);" class="read-more ms-2 mt-1" title="Read More">Read More</a>
                </div>
                <div class="tab-pane fade" id="Tab2" role="tabpanel" aria-labelledby="tab2-tab">
                    <h3 class="mb-1">Internship and Job Placement Opportunities:</h3>
                    <p>The department will have multiple collaborations with industries/research institutions across the globe to provide the best exposure to students and make them ready not only for Indian but International Legal Markets.</p>
                    <div class="read-more-content mt-1">
                        <h3 class="mt-3 mb-1">Global Perspective and International Exchanges:</h3>
                        <p>The international law is being strengthened by various national and international forums are strengthening international law, and with the right guidance, the college aims to serve not just the court but the world as a whole.
                            <br>Hence, The College of Law & Legal Studies is the Best Private Law College in Uttar Pradesh.
                        </p>
                    </div>
                    <a href="javascript:void(0);" class="read-more ms-2 mt-1" title="Read More">Read More</a>
                </div>
                <div class="tab-pane fade" id="Tab3" role="tabpanel" aria-labelledby="tab3-tab">
                    <h3 class="text-justify">Curriculum</h3>
                    <p>The curriculum is a road map of the academic journey, and the appropriate importance is leveraged through it. The curriculum is aligned with the latest industry knowledge and emphasises the holistic development of the students. Recently, the University has been implementing NEP 2020 policy guidelines, the legal framework, OBE's guidelines, etc., to ensure that the educational framework on par with the global standards.</p>
                    <div class="read-more-content mt-1">
                        <p> Moreover, to expose the students to broader industry knowledge, national and international reputed dignitaries are invited to guide them and nurture their entrepreneurial talent, stimulate research, foster leadership skills, and contribute to the modern business world. Also, the curriculum is BCI approved.
                        </p>
                    </div>
                    <a href="javascript:void(0);" class="read-more ms-2 mt-1" title="Read More">Read More</a>
                </div>
                <div class="tab-pane fade" id="Tab4" role="tabpanel" aria-labelledby="tab4-tab">
                    <h3>Infrastructure</h3>
                    <p>The Law College enjoys the state-of-the-art infrastructure, including modern amenities, including well-equipped classrooms, computer labs, libraries, and dedicated spaces for group discussions and collaboration. The infrastructure allows students to not just become proficient at academics but assists in an all-round development. The college aims to cater to and groom budding law professionals, equipping them with nothing but the best skills and clarity to achieve their goals.</p>
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

</section><!-- #content end -->

<div class="container mb-5 mt-5">
    <h2 class="tmu-text-primary text-center"><span>Why Choose</span><span> Teerthanker Mahaveer College of Law and Legal Studies</span></h2>
    <!-- Add the horizontal line here -->
    <hr class="horizontal-line">

    <button class="careers-accordion">Why TMU is the Best Choice for You<span class="icon">+</span></button>
    <div class="panel active">
        <p class="text-justify">In the bustling landscape of legal education in India, the College of Law and Legal Studies (CLLS) at Teerthanker Mahaveer University (TMU) stands out as a beacon of excellence. Here’s why:</p>
        <ul class="m-ol-list ps-5 mb-1">
            <li>
                <h3 class="tmu-text-primary mb-0 fs-16"><span>UGC-Approved with <span></span> NAAC-A Accreditation</span></h3>
                <p class="text-justify">
                    TMU's CLLS boasts the coveted UGC approval and holds an esteemed NAAC A Accreditation, ensuring a quality legal education that meets national standards.
                </p>
            </li>

            <li>
                <h3 class="tmu-text-primary mb-0 fs-16"><span>Experiential Learning by <span></span> Highly Qualified Faculties</span></h3>
                <p class="text-justify">
                    Our faculty members, renowned for their expertise and experience, provide a dynamic learning environment, offering practical insights and fostering critical thinking.
                </p>
            </li>

            <li>
                <h3 class="tmu-text-primary mb-0 fs-16"><span>Legal Aid Clinic, IP Facilitation, and <span></span> Social Consultancy Centre</span></h3>
                <p class="text-justify">
                    At CLLS, we emphasise the application of legal knowledge to real-world scenarios. Our Legal Aid Clinic, IP Facilitation, and Social Consultancy Centre provide students with hands-on experience, preparing them for the challenges of legal practice.
                </p>
            </li>

            <li>
                <h3 class="tmu-text-primary mb-0 fs-16"><span>Global Career Prospects and <span></span> Comprehensive Internship Programmes</span></h3>
                <p class="text-justify">
                We believe in shaping globally competent legal professionals. With our comprehensive internship programs and global career prospects, CLLS provides access to a wide range of opportunities, both nationally and internationally.
                </p>
            </li>
        </ul>

    </div>
    <!-- Add the horizontal line here -->
    <hr class="horizontal-line">
    <button class="careers-accordion">On-campus Accommodation Facilities<span class="icon">+</span></button>
    <div class="panel">
        <ul class="m-ol-list ps-5">
            <li>Quality Education with Affordable Fees and 100% Scholarship Assistance.</li>
            <li>We understand the importance of accessible education. At CLLS, we offer quality education at affordable fees, supplemented by scholarship assistance, to deserving students.</li>
            <li>Educational Trips to Courts & advocacy Chambers.</li>
            <li>Learning extends beyond the classroom at CLLS. Our educational trips to courts and advocacy chambers offer students firsthand exposure to the legal profession, enriching their understanding of legal practices.</li>
        </ul>                        
    </div>
    <!-- Add the horizontal line here -->
    <hr class="horizontal-line">
    <button class="careers-accordion">The Essence of Our Campus<span class="icon">+</span></button>
    <div class="panel">
        <h3 class="tmu-text-primary mb-0 fs-16"><span>Modern Classrooms for </span><span>Interactive Sessions</span></h3>
        <p class="text-justify">CLLS boasts modern classrooms equipped with state-of-the-art technology, fostering interactive learning experiences that engage and inspire students.</p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>Electrifying Concerts and </span><span> Dynamic Events</span></h3>
        <p class="text-justify">Our vibrant campus life goes beyond academics. From electrifying concerts to dynamic events, CLLS provides a platform for students to explore their talents and passions.</p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>Anti-Ragging </span><span> Campus</span></h3>
        <p class="text-justify">We prioritise the safety and well-being of our students. CLLS maintains a strict anti-ragging policy, ensuring a supportive and respectful campus environment.</p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>Comfortable Hostel </span><span> Facilities</span></h3>
        <p class="text-justify">Our hostel facilities offer students a home away from home, providing comfortable living spaces and amenities to support their academic journey.</p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>Gym and </span><span> Fitness Centre</span></h3>
        <p class="text-justify">At CLLS, we believe in nurturing both the mind and body. Our gym and fitness centre encourage students to maintain a healthy lifestyle, promoting overall well-being.</p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>Shopping Stores and</span><span> Cafeterias</span></h3>
        <p class="text-justify">Convenience is key at TMU. With on-campus shopping stores and cafeterias, students have easy access to essential amenities and delicious meals.</p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>Wi-Fi Enabled </span><span> Campus</span></h3>
        <p class="text-justify">In the digital age, connectivity is crucial. CLLS provides a Wi-Fi-enabled campus, ensuring seamless access to online resources and information.</p>
    </div>
    <!-- Add the horizontal line here -->
    <hr class="horizontal-line">
    <button class="careers-accordion">Explore Top-Notch Placement Opportunities<span class="icon">+</span></button>
    <div class="panel">
        <h4 class="tmu-text-primary mb-0 fs-16"><span>Affiliated with the </span><span>Bar Council of India</span></h4>
        <p class="text-justify">CLLS holds affiliation with the Bar Council of India, ensuring that our graduates meet the highest professional standards in the legal field.</p>

        <h4 class="tmu-text-primary mb-0 fs-16"><span>Expert Faculty for Hands-on </span><span>Practical Knowledge</span></h4>
        <p class="text-justify">Our faculty members bring a wealth of practical knowledge and industry experience to the classroom, preparing students for the rigours of legal practice.</p>

        <h4 class="tmu-text-primary mb-0 fs-16"><span>Centre for Teaching, Learning, and </span><span>Legal Development</span></h4>
        <p class="text-justify">At CLLS, we are committed to continuous learning and development. Our Centre for Teaching, Learning, and Legal Development provides a platform for scholarly research and innovation.</p>

        <h4 class="tmu-text-primary mb-0 fs-16"><span>100% Placement Assistance with an </span><span>Outstanding Track Record</span></h4>
        <p class="text-justify">We take pride in our track record of placement success. CLLS offers 100% placement assistance, connecting students with leading law firms, courts, and legal organisations.</p>

        <h4 class="tmu-text-primary mb-0 fs-16"><span>Global Opportunities with Renowned </span><span>Legal Organisations</span></h4>
        <p class="text-justify">Our global network opens doors to prestigious legal internships and career opportunities worldwide, providing students with a truly international perspective.</p>

        <h4 class="tmu-text-primary mb-0 fs-16"><span>Robust Legal Industry Affiliations for </span><span>Invaluable Insights</span></h4>
        <p class="text-justify">CLLS maintains strong affiliations with the legal industry, providing students with invaluable insights and networking opportunities that enrich their learning experience.</p>

        <h4 class="tmu-text-primary mb-0 fs-16"><span>Gain a Global Edge with </span><span> International Legal Internships</span></h4>
        <p class="text-justify">Through our international legal internships, students gain a global edge and valuable cross-cultural experience, setting them apart in the competitive legal landscape.</p>

    </div>
    <!-- Add the horizontal line here -->
    <hr class="horizontal-line">
    <button class="careers-accordion">Top 10 Careers in Law<span class="icon">+</span></button>
    <div class="panel">
        <h3 class="tmu-text-primary mb-0 fs-16"><span>1. Corporate </span><span> Lawyer</span></h3>
        <p class="text-justify">Specializing in business law, corporate lawyers provide legal advice to corporations on various matters such as mergers, acquisitions, contracts, and compliance.</p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>2. Criminal </span><span> Lawyer</span></h3>
        <p class="text-justify">Criminal lawyers defend individuals or entities accused of committing criminal offences, representing them in court proceedings and negotiating plea deals.</p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>3. Civil Litigation </span><span> Lawyer</span></h3>
        <p class="text-justify">Civil litigation lawyers handle disputes between individuals or organisations, representing clients in civil lawsuits related to contracts, property, and personal injury.</p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>4. Family </span><span> Lawyer</span></h3>
        <p class="text-justify">Family lawyers deal with legal matters related to family relationships, such as divorce, child custody, adoption, and domestic violence cases.</p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>5. Intellectual </span><span> Property Lawyer</span></h3>
        <p class="text-justify">Intellectual property lawyers protect the rights of individuals or businesses regarding their intellectual property, including patents, trademarks, copyrights, and trade secrets.</p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>6. Environmental </span><span> Lawyer</span></h3>
        <p class="text-justify">Environmental lawyers focus on legal issues related to environmental protection and conservation, advising clients on compliance with environmental laws and regulations.</p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>7. Human Rights </span><span> Lawyer</span></h3>
        <p class="text-justify">Human rights lawyers advocacy for the protection of human rights and social justice, representing individuals or organisations in cases involving discrimination, injustice, and human rights abuses.</p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>8. Immigration </span><span> Lawyer</span></h3>
        <p class="text-justify">Immigration lawyers assist individuals with immigration-related issues, including visa applications, citizenship petitions, deportation defence, and asylum cases.</p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>9. Entertainment </span><span> Lawyer</span></h3>
        <p class="text-justify">Entertainment lawyers work with clients in the entertainment industry, negotiating contracts, protecting intellectual property rights, and handling legal disputes related to music, film, television, and other forms of entertainment.</p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>10. Legal </span><span> Consultant</span></h3>
        <p class="text-justify">Legal consultants provide expert advice to businesses or individuals on legal matters, offering guidance on compliance, risk management, and strategic decision-making.</p>

    </div>
    <hr class="horizontal-line">
    <button class="careers-accordion">Campus Life at College of Law and Legal Studies <span class="icon">+</span></button>
    <div class="panel">
        <h4 class="tmu-text-primary mb-0 fs-16"><span>1. Academic </span><span> Excellence</span></h4>
        <p class="text-justify">The College of Law and Legal Studies (CLLS) offers a rigorous academic curriculum designed to prepare students for the legal profession, with dedicated faculty members providing personalised guidance and support.</p>

        <h4 class="tmu-text-primary mb-0 fs-16"><span>2. Vibrant Student </span><span> Community</span></h4>
        <p class="text-justify">CLLS boasts a vibrant student community, with diverse extracurricular activities, student clubs, and events that foster leadership skills, teamwork, and social interaction.</p>

        <h4 class="tmu-text-primary mb-0 fs-16"><span>3. Moot Court </span><span> Competitions</span></h4>
        <p class="text-justify">Students at CLLS actively participate in moot court competitions, honing their advocacy and legal research skills while competing at national and international levels, gaining invaluable practical experience.</p>

        <h4 class="tmu-text-primary mb-0 fs-16"><span>4. Legal Aid </span><span> Clinic</span></h4>
        <p class="text-justify">The Legal Aid Clinic at CLLS provides students with the opportunity to engage in pro bono legal work, offering assistance to underprivileged individuals and communities, and promoting access to justice.</p>

        <h4 class="tmu-text-primary mb-0 fs-16"><span>5. Networking </span><span> Opportunities</span></h4>
        <p class="text-justify">CLLS organises networking events, seminars, and guest lectures featuring legal experts and professionals, providing students with networking opportunities and insights into the legal industry.</p>

    </div>
    <!-- Add the horizontal line here -->
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
                    cd_id: 9,
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
                    cd_id: 9,
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