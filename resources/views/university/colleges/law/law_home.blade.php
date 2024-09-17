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
                    <h1 class=" mt-5 mb-5 d-none d-md-block  banner-main-heading">Welcome to the <br> <span style="font-weight:700!important;">Best Law</span> College <br>in UP</h1>
                    <h1 class=" mt-5 mb-3 d-block d-md-none" style="color:#001055; text-transform: capitalize; font-weight:700!important; font-size:24px">Welcome to the <span>Best Law</span> College <br> in UP,</h1>
                    <a href="#" class="tmu-btn btn-1 me-4 py-1 px-3 py-xl-2 px-xl-4"> Download Brochure</a>
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
                            <span class="d-block pt-1">of India approved Programmes</span>
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
                            <span class="d-block pt-1">Clinics & Social Consultancy Centre</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 px-1">
                    <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                        <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                            <span>Active learning </span>
                            <br>
                            <span class="d-block pt-1">through Moot Court Sessions</span>
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
                                        <span class="d-block pt-1">of India approved Programmes</span>
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
                                        <span class="d-block pt-1">Clinics & Social Consultancy Centre</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                                    <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                                        <span>Active learning </span>
                                        <br>
                                        <span class="d-block pt-1">through Moot Court Sessions</span>
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
                <h2 class="college-main-heading">College of Law & Legal Studies: Among the Top Best Colleges for Law in India</h2>
                <div class="row">
                    <div class="col-12 px-2 px-md-5"> 
                        <p style="text-align: justify;">College of Law and Legal Studies (CLLS) was established in 2010 with the aim of building students&rsquo; successful careers in the Law domain. The 12+ years old institute has carved a niche for itself when it comes to the <a href="https://www.tmu.ac.in/blog/top-10-law-colleges-in-india" target="_blank">best private colleges for law in India</a> due to its exemplary practical exposure, regular moot court sessions, and qualitative mentorship from qualified faculties. </p>
                        <div class="read-more-content mt-0">
                            <p style="text-align: justify;">CLLS nurtures the professional skills of the students while teaching them their rightful duties, and crucial moral values to be a good law professional.</p>
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
                    <p>The college has been rewarding the legal sector with consistently good professionals and has been rated in high regards in the top law colleges in UP.</p>
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
                    <h3>Internship and Job Placement Opportunities:</h3>
                    <p>The department will have multiple collaborations with industries/research institutions across the globe to provide the best exposure to students and make them ready not only for Indian but International Legal Markets. (IN CASE OF SPECIFIC COMPANIES, FIRM'S NAMES please add)</p>
                    <div class="read-more-content mt-1">
                        <h3>Global Perspective and International Exchanges:</h3>
                        <p>The international law is being strengthened by various national and international forums and with the correct guidance the college aims to serve not just the courtry but the world as a whole.
                            <br><br>Hence College of Law & Legal Studies is the Best Private Law College in Uttar Pradesh.
                        </p>
                    </div>
                    <a href="javascript:void(0);" class="read-more ms-2 mt-1" title="Read More">Read More</a>
                </div>
                <div class="tab-pane fade" id="Tab3" role="tabpanel" aria-labelledby="tab3-tab">
                    <h3>curriculum</h3>
                    <p>The curriculum is a road map of the academic journey, and the appropriate importance is leveraged through it. The curriculum is aligned with the latest industry knowledge and emphasizes the holistic development of the students. Recently the University has been implementing NEP 2020 policy guidelines, legal framework, OBE's guidelines, etc., to ensure that the educational framework is at par with the global standards. Moreover, to expose the students to broader industry knowledge, national and international repute dignitaries are invited to guide them and nurture their entrepreneurial talent, stimulate research, foster leadership skills, and contribute to the modern business world. Also, the curriculum is BCI approved.</p>
                </div>
                <div class="tab-pane fade" id="Tab4" role="tabpanel" aria-labelledby="tab4-tab">
                    <h3>Infrastructure</h3>
                    <p>The Law college enjoys the state-of-the-art infrastructure including elite amenities, including well-equipped classrooms, computer labs, libraries, and dedicated spaces for group discussions and collaboration. The infrastructure allows students to not just become good at academics but assists in an all-round development. The college aims to cater to and groom budding law professionals, equipping them with nothing but the best skills and clarity to achieve their goals.</p>
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
                                    &nbsp;<span class="badge rounded-pill">03</span>
                                </a>
                                <a class="list-group-item listream list-group-item-action rounded-3 shadow-sm mt-2" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile"><i class="fa-solid fa-microchip fa-sm fakash"></i>&nbsp;Postgraduate Programmes
                                    &nbsp;<span class="badge rounded-pill">01</span></a>
                                <!-- <a class="list-group-item listream list-group-item-action rounded-3 shadow-sm mt-2" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages"><i class="fa-solid fa-business-time fa-sm fakash"></i>&nbsp;Doctorate Programmes
                                    &nbsp;<span class="badge rounded-pill">01</span></a> -->
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
                                                <img src="https://images.pexels.com/photos/5668772/pexels-photo-5668772.jpeg?auto=compress&cs=tinysrgb&w=1600" class="card-img-top" alt="...">
                                                <div class="card-body">

                                                    <h4 class="mb-2">B.A.-LL.B.(Hons.)</h4>
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
                                                <img src="https://img.freepik.com/free-photo/judges-gavel-book-wooden-table-law-justice-concept-background_1150-9097.jpg?size=626&ext=jpg&ga=GA1.2.718553843.1681214208&semt=ais" class="card-img-top" alt="...">
                                                <div class="card-body">

                                                    <h4 class="mb-2">B.Com.-LL.B.(Hons.)</h4>
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
                                                <img src="https://thumbs.dreamstime.com/b/compliance-rules-law-regulation-policy-business-technology-concept-compliance-rules-law-regulation-policy-business-technology-112471593.jpg?w=768" class="card-img-top" alt="...">
                                                <div class="card-body">

                                                    <h4 class="mb-2">B.B.A.-LL.B.(Hons.)</h4>
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
                                                <img src="https://images.pexels.com/photos/5668772/pexels-photo-5668772.jpeg?auto=compress&cs=tinysrgb&w=1600" height="178px" class="card-img-top" alt="...">
                                                <div class="card-body">

                                                    <h4 class="mb-2">LL.M.</h4>
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

                                <!-- <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="card shadow-sm">
                                                <img src="https://d1vwxdpzbgdqj.cloudfront.net/s3-public-images/security-plus-bootcamp.png" height="178px">
                                                <div class="card-body progcardbody">
                                                    <h4 class="mb-2">Phd in Dental</h4>
                                                </div>
                                                <div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                                    <div>
                                                    </div>
                                                    <a href="#" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

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
                                        <img src="https://images.pexels.com/photos/5668772/pexels-photo-5668772.jpeg?auto=compress&cs=tinysrgb&w=1600" class="card-img-top" alt="...">
                                        <div class="card-body progcardbody">

                                            <h5 class="mb-2">B.A.-LL.B. (Hons.)</h5>
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
                                        <img src="https://img.freepik.com/free-photo/judges-gavel-book-wooden-table-law-justice-concept-background_1150-9097.jpg?size=626&ext=jpg&ga=GA1.2.718553843.1681214208&semt=ais" class="card-img-top" alt="...">
                                        <div class="card-body progcardbody">

                                            <h5 class="mb-2">B.Com.-LL.B. (Hons.)</h5>
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
                                        <img src="https://thumbs.dreamstime.com/b/compliance-rules-law-regulation-policy-business-technology-concept-compliance-rules-law-regulation-policy-business-technology-112471593.jpg?w=768" class="card-img-top" alt="...">
                                        <div class="card-body progcardbody">

                                            <h5 class="mb-2">B.B.A.-LL.B. (Hons.)</h5>
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
                                        <img src="https://images.pexels.com/photos/5668772/pexels-photo-5668772.jpeg?auto=compress&cs=tinysrgb&w=1600" height="178px" class="card-img-top" alt="Engineering image ">
                                        <div class="card-body progcardbody">

                                            <h4 class="mb-2">LL.M.</h4>
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
                        <button class="careers-accordion"><span><i class="fa-solid fa-business-time fa-sm fakash"></i>&nbsp;&nbsp;Doctrate Programmes</span> <span class="icon">+</span></button>
                        <div class="panel">
                            <ul class="progul">
                                <li class="progli">
                                    <div class="card shadow-sm progcard">
                                        <img src="assets/img/dentalcollege/course-img/1.jpg" height="178px" class="card-img-top" alt="Management  image ">
                                        <div class="card-body progcardbody">

                                            <h4 class="mb-2">Phd Physiotherapy</h4>
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
                            <img src="https://www.tmu.ac.in/uploads/testimonial/ANYA_GUPTA_(B_COM__LL_B_)_2019-2024.jpg" class="mr-3" alt="">
                            <div class="media-body">
                                <div class="testimonial">
                                    <p class="overview mb-3"><b>ANYA GUPTA</b>, B.Com.-LL.B.</p>
                                    <p>TMU's College of Law and Legal Studies is one of the top-tier legal educational colleges. It is well-known for its academic excellence and commitment to developing skilled lawyers who can drive social, political, and economic change. To achieve this, the college relies on a team of dedicated experts who are passionate about the legal profession. Throughout the year, the college hosts stimulating events and competitions
                                        that encourage students to share their ideas and engage in thoughtful discussions.</p>
                                </div>
                            </div>
                            <button class="tmu-btn btn-3 py-2 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14" onclick="showTestimonialModal()">Read More <i class="bi bi-chevron-down ps-2"></i></button>

                        </div>
                    </div>

                    <div class="oc-item text-start">
                        <div class="media">
                            <img src="https://www.tmu.ac.in/uploads/testimonial/kajal-gupta.jpg" class="mr-3" alt="">
                            <div class="media-body">
                                <div class="testimonial">
                                    <p class="overview mb-3"><b>KAJAL GUPTA</b>, B.B.A.-LL.B. </p>
                                    <p>Attending this college has been the wisest decision I have made. The institution has created an environment that goes beyond textbooks and lectures, providing opportunities for real-world applications and practice. Investing in knowledge is always worthwhile, and being part of TMU Law College has made my path easier.</p>
                                </div>
                                <button class="tmu-btn btn-3 py-2 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14" onclick="showTestimonialModal()">Read More <i class="bi bi-chevron-down ps-2"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="oc-item text-start">
                        <div class="media">
                            <img src="https://www.tmu.ac.in/uploads/testimonial/MITALI_(B_COM__LL_B_)_2022-2022.jpg" class="mr-3" alt="">
                            <div class="media-body">
                                <div class="testimonial">
                                    <p class="overview mb-3"><b>MITALI</b>, B.Com.-LL.B.</p>
                                    <p>At TMU's College of Law and Legal Studies, I found my dream combination of academic and professional development opportunities. From moot courts to seminars, the college offers a variety of opportunities to build confidence and gain practical experience. The staff and instructors are supportive, and the campus library is a valuable resource. Overall, it's been a great experience.
                                </div>
                                <button class="tmu-btn btn-3 py-2 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14" onclick="showTestimonialModal()">Read More <i class="bi bi-chevron-down ps-2"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="oc-item text-start">
                        <div class="media">
                            <img src="https://www.tmu.ac.in/uploads/alumni_speak/Muskan_Tandon.jpg" class="mr-3" alt="">
                            <div class="media-body">
                                <div class="testimonial">
                                    <p class="overview mb-3"><b>Muskan Tandon</b>, B.B.A.-LL.B. (Hons.) </p>
                                    <p>The decisions that a law professional makes changes the world. Being a law student, the college enabled me to widen my horizon and acquire those important skills of righteousness and develop my inter-personal skills and hence I feel glad about being a part of this college.</p>
                                </div>
                                <button class="tmu-btn btn-3 py-2 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14" onclick="showTestimonialModal()">Read More <i class="bi bi-chevron-down ps-2"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="oc-item text-start">
                        <div class="media">
                            <img src="https://www.tmu.ac.in/uploads/alumni_speak/Aman_Kumar.jpg" class="mr-3" alt="">
                            <div class="media-body">
                                <div class="testimonial">
                                    <p class="overview mb-3"><b>Aman Kumar</b>, B.B.A.-LL.B. (Hons.)</p>
                                    <p>Appropriate conduct to the professionalism and belief of justice in a law professional is instilled at the College of Law & Legal Studies. It's alumni network serving at high courts and supreme courts frequent the college and guide us students. Teachers, digital library facilities all help us widen our knowledge but what I like the most is the practical activities organized by the college i.e. legal quiz, moot courts, legal clinic, Lok Adalat, legal games etc. these activities have taught me how to be vocal and how to present them. Isn't that what law colleges should teach to confidently share opinion and analytically think?</p>
                                </div>
                                <button class="tmu-btn btn-3 py-2 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14" onclick="showTestimonialModal()">Read More <i class="bi bi-chevron-down ps-2"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="oc-item text-start">
                        <div class="media">
                            <img src="https://www.tmu.ac.in/uploads/testimonial/SIDDARTH_KUMAR_(B_A__LL_B_)2018-2023.jpg" class="mr-3" alt="">
                            <div class="media-body">
                                <div class="testimonial">
                                    <p class="overview mb-3"><b>SIDDARTH KUMAR</b>, B.A.-LL.B.</p>
                                    <p>Teerthankar Mahaveer University is an ocean of opportunities and I was lauded with one such fine opportunity through the student exchange program at Malaysia where I represented our college & country. I am just in my second year and my journey here has been nothing less but phenomenal and an enriching ride. </p>
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
    <!-- Add the horizontal line here -->
    <hr class="horizontal-line">

    <button class="careers-accordion">Why TMU is the Best Choice for You:<span class="icon">+</span></button>
    <div class="panel">
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
                    We believe in shaping globally competent legal professionals. With our comprehensive internship programs and global career prospects, CLLS opens doors to diverse opportunities both nationally and internationally.
                </p>
            </li>
        </ul>

    </div>
    <!-- Add the horizontal line here -->
    <hr class="horizontal-line">
    <button class="careers-accordion">On-campus Accommodation Facilities<span class="icon">+</span></button>
    <div class="panel">
        <h3 class="tmu-text-primary mb-0 fs-16"><span>Quality Education with Affordable Fees and </span><span>100% Scholarship Assistance</span></h3>
        <p class="text-justify">We understand the importance of accessible education. At CLLS, we offer quality education at affordable fees, supplemented by scholarship assistance, to deserving students.</p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>Educational Trips to Courts & </span><span>Advocate Chambers</span></h3>
        <p class="text-justify">Learning extends beyond the classroom at CLLS. Our educational trips to courts and advocate chambers offer students firsthand exposure to the legal profession, enriching their understanding of legal practices.</p>

        <h3 class="tmu-text-primary mb-2 fs-16"><span>The Essence of </span><span>Our Campus:</span></h3>

        <h4 class="tmu-text-primary mb-0 fs-16"><span>Modern Classrooms for </span><span>Interactive Sessions</span></h4>
        <p class="text-justify">CLLS boasts modern classrooms equipped with state-of-the-art technology, fostering interactive learning experiences that engage and inspire students.</p>

        <h4 class="tmu-text-primary mb-0 fs-16"><span>Electrifying Concerts and </span><span> Dynamic Events</span></h4>
        <p class="text-justify">Our vibrant campus life goes beyond academics. From electrifying concerts to dynamic events, CLLS provides a platform for students to explore their talents and passions.</p>

        <h4 class="tmu-text-primary mb-0 fs-16"><span>Anti-Ragging </span><span> Campus</span></h4>
        <p class="text-justify">We prioritize the safety and well-being of our students. CLLS maintains a strict anti-ragging policy, ensuring a supportive and respectful campus environment.</p>

        <h4 class="tmu-text-primary mb-0 fs-16"><span>Comfortable Hostel </span><span> Facilities</span></h4>
        <p class="text-justify">Our hostel facilities offer students a home away from home, providing comfortable living spaces and amenities to support their academic journey.</p>

        <h4 class="tmu-text-primary mb-0 fs-16"><span>Gym and </span><span> Fitness Centre</span></h4>
        <p class="text-justify">At CLLS, we believe in nurturing both the mind and body. Our gym and fitness centre encourage students to maintain a healthy lifestyle, promoting overall well-being.</p>

        <h4 class="tmu-text-primary mb-0 fs-16"><span>Shopping Stores and</span><span> Cafeterias</span></h4>
        <p class="text-justify">Convenience is key at TMU. With on-campus shopping stores and cafeterias, students have easy access to essential amenities and delicious meals.</p>

        <h4 class="tmu-text-primary mb-0 fs-16"><span>Wi-Fi Enabled </span><span> Campus</span></h4>
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
    <button class="careers-accordion">Top 10 Careers in Law: <span class="icon">+</span></button>
    <div class="panel">
        <h4 class="tmu-text-primary mb-0 fs-16"><span>1. Corporate </span><span> Lawyer</span></h4>
        <p class="text-justify">Specializing in business law, corporate lawyers provide legal advice to corporations on various matters such as mergers, acquisitions, contracts, and compliance.</p>

        <h4 class="tmu-text-primary mb-0 fs-16"><span>2. Criminal </span><span> Lawyer</span></h4>
        <p class="text-justify">Criminal lawyers defend individuals or entities accused of committing criminal offences, representing them in court proceedings and negotiating plea deals.</p>

        <h4 class="tmu-text-primary mb-0 fs-16"><span>3. Civil Litigation </span><span> Lawyer</span></h4>
        <p class="text-justify">Civil litigation lawyers handle disputes between individuals or organisations, representing clients in civil lawsuits related to contracts, property, and personal injury.</p>

        <h4 class="tmu-text-primary mb-0 fs-16"><span>4. Family </span><span> Lawyer</span></h4>
        <p class="text-justify">Family lawyers deal with legal matters related to family relationships, such as divorce, child custody, adoption, and domestic violence cases.</p>

        <h4 class="tmu-text-primary mb-0 fs-16"><span>5. Intellectual </span><span> Property Lawyer</span></h4>
        <p class="text-justify">Intellectual property lawyers protect the rights of individuals or businesses regarding their intellectual property, including patents, trademarks, copyrights, and trade secrets.</p>

        <h4 class="tmu-text-primary mb-0 fs-16"><span>6. Environmental </span><span> Lawyer</span></h4>
        <p class="text-justify">Environmental lawyers focus on legal issues related to environmental protection and conservation, advising clients on compliance with environmental laws and regulations.</p>

        <h4 class="tmu-text-primary mb-0 fs-16"><span>7. Human Rights </span><span> Lawyer</span></h4>
        <p class="text-justify">Human rights lawyers advocate for the protection of human rights and social justice, representing individuals or organisations in cases involving discrimination, injustice, and human rights abuses.</p>

        <h4 class="tmu-text-primary mb-0 fs-16"><span>8. Immigration </span><span> Lawyer</span></h4>
        <p class="text-justify">Immigration lawyers assist individuals with immigration-related issues, including visa applications, citizenship petitions, deportation defence, and asylum cases.</p>

        <h4 class="tmu-text-primary mb-0 fs-16"><span>9. Entertainment </span><span> Lawyer</span></h4>
        <p class="text-justify">Entertainment lawyers work with clients in the entertainment industry, negotiating contracts, protecting intellectual property rights, and handling legal disputes related to music, film, television, and other forms of entertainment.</p>

        <h4 class="tmu-text-primary mb-0 fs-16"><span>10. Legal </span><span> Consultant</span></h4>
        <p class="text-justify">Legal consultants provide expert advice to businesses or individuals on legal matters, offering guidance on compliance, risk management, and strategic decision-making.</p>

    </div>
    <hr class="horizontal-line">
    <button class="careers-accordion">Campus Life at College of Law and Legal Studies: <span class="icon">+</span></button>
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
    <button class="careers-accordion">Facilities Available at College of Paramedical Sciences: <span class="icon">+</span></button>
    <div class="panel">
        <h4 class="tmu-text-primary mb-0 fs-16"><span>1. State-of-the-Art</span><span> Laboratories</span></h4>
        <p class="text-justify">The College of Paramedical Sciences is equipped with state-of-the-art laboratories, offering students hands-on training and practical experience in various medical disciplines.</p>

        <h4 class="tmu-text-primary mb-0 fs-16"><span>2. Clinical </span><span>Training Facilities</span></h4>
        <p class="text-justify">Students have access to clinical training facilities, including simulation labs and healthcare institutions, where they can apply theoretical knowledge in real-world healthcare settings under supervision.</p>

        <h4 class="tmu-text-primary mb-0 fs-16"><span>3. Library and </span><span>Research Resources</span></h4>
        <p class="text-justify">The college maintains a well-stocked library with a vast collection of medical literature, journals, and research resources, providing students with access to up-to-date information and scholarly materials.</p>

        <h4 class="tmu-text-primary mb-0 fs-16"><span>4. Faculty</span><span> Expertise</span></h4>
        <p class="text-justify">The faculty members at the College of Paramedical Sciences are highly qualified and experienced professionals in their respective fields, providing students with expert guidance and mentorship.</p>

        <h4 class="tmu-text-primary mb-0 fs-16"><span>5. Career Development</span><span> Support</span></h4>
        <p class="text-justify">The college offers career development support services, including internships, placements, and workshops, to help students explore career options, gain practical experience, and prepare for their future in the healthcare industry.</p>

    </div>
    <hr class="horizontal-line">
    <button class="careers-accordion">FAQs<span class="icon">+</span></button>
    <div class="panel">
        <p class="text-justify"><strong>Q1:- How do I apply for admission to CLLS?</strong></p>
        <p class="text-justify"><strong>Ans:</strong> Visit our website and navigate to the admissions section for detailed information on the application process and requirements.</p>
        <p class="text-justify"> <strong>Q2:- Are there scholarships available for students?</strong></p>
        <p class="text-justify"><strong>Ans: </strong>Yes, we offer scholarships based on merit and financial need. Explore our scholarship options on our website or contact our admissions office for assistance.</p>
        <p class="text-justify"> <strong>Q3:- Can international students apply to CLLS?</strong></p>
        <p class="text-justify"><strong>Ans: </strong>Absolutely! We welcome applications from international students. Visit our international admissions page for guidance on the application process and visa requirements.</p>
        <p class="text-justify"> <strong>Q4:- What sets CLLS apart from other law colleges?</strong></p>
        <p class="text-justify"><strong>Ans: </strong>CLLS stands out for its experiential learning approach, expert faculty, global opportunities, and commitment to student success. Our track record of placement assistance and industry affiliations speak for themselves.</p>
        <p class="text-justify"> <strong>Q5:- Does CLLS offer post-graduate programs?</strong></p>
        <p class="text-justify"><strong>Ans: </strong>Yes, CLLS offers a two-year LL.M program, along with an LL.M executive program for working professionals. Explore our post-graduate legal studies options for more information. </p>
        <p class="text-justify">Join the ranks of the legal luminaries and embark on a fulfilling journey at the College of Law and Legal Studies, TMU. Experience excellence in legal education and unlock your potential with us.</p>


    </div>
    <hr class="horizontal-line">
</div>
<br /><br />
<script src="{{asset('/assets/js/tmimt.js')}}"></script>

@endsection