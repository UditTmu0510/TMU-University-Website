@extends('layouts.university.colleges.ccsit_home_without_sidebar')
@section('content')
<link rel="stylesheet" href="{{asset('assets/css/tmu-testimonial.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/tmimt.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/college.css')}}">

<!-- Content
		============================================= -->
<section id="content">
    <div class="content-wrap py-0">
        <div class="container-fluid  my-0 px-2">
            <div class="row ps-4">
                <div class="col-md-6 pt-0 pt-md-4 ps-md-5 mb-4">
                    <h1 class=" mt-5 mb-5 banner-main-heading">Welcome to <span style="font-weight:700!important;">College of </span>Computing Sciences & IT</h1>
                    
                        <a href="https://admissions.tmu.ac.in/" target="_blank" class="tmu-btn btn-1 me-md-4 py-1 px-3 py-xl-2 px-xl-5 "> Apply Now</a>
                </div>
                <div class="col-12 col-md-6">
                    <div class="pe-lg-4 position-relative p-0">
                        <div style="z-index: 2;">
                            <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/iXHRmCyHszY?si=BcZ5NOfT-V8ECc6z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="z-index: 2; margin:0;"></iframe> -->
                            <img src="{{asset('assets/img/banner/ccsit/ccsit-banner.webp')}}" alt="" class="p-0 m-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-3 d-none d-md-block">
            <div class="row justify-content-center">
                <div class="col-6 col-lg-3 px-1">
                    <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                        <div class="card-body gap-4 text-tmu-primary under-banner-cards"><span>AAA</span>
                            <br>
                            <span class="d-block pt-1">rating by career 360</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 px-1">
                    <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                        <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                            <span>Apple</span>
                            <br>
                            <span class="d-block pt-1">Authorised lab</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 px-1">
                    <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                        <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                            <span>Training Opportunity</span>
                            <br>
                            <span class="d-block pt-1">in the ISRO START program</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 px-1">
                    <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                        <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                            <span>Certified CSI Member</span>
                            <br>
                            <span class="d-block pt-1">(Computer Society of India)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-2 d-block d-md-none">
          <div id="under-banner-carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
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
                                    <div class="card-body gap-4 text-tmu-primary under-banner-cards"> <span>AAA </span>
                                        <br>
                                        <span class="d-block pt-1">rating by career 360</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                                    <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                                        <span>Apple</span>
                                        <br>
                                        <span class="d-block pt-1">Authorised lab</span>
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
                                        <span>Certified </span>
                                        <br>
                                        <span class="d-block pt-1">CSI Member</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                                    <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                                        <span>Training Opportunity</span>
                                        <br>
                                        <span class="d-block pt-1">in ISRO START Program</span>
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
                <h2 class="college-main-heading">CCSIT, among the top colleges for computer science</h2>
                <div class="row">
                    <div class="col-12 px-2 px-md-5">
                        <p style="text-align: justify;">The College of Computing Sciences & IT was established in 2014 (formerly
                        known as the Department of Computer Applications, established in 2001), is a leading private computing sciences college in UP.</p>
                        <div class="read-more-content mt-0">
                        <p style="text-align: justify;">With a strong emphasis on emerging technologies such as Artificial Intelligence (AI), Machine Learning (ML), 
                            and Deep Learning (DL), the college equips students with the in-demand skills to thrive in the rapidly evolving IT industry. 
                            Beyond technical expertise, the CCSIT also fosters an entrepreneurial mindset, nurturing the next generation of innovators 
                            and visionaries</p>
                        <p style="text-align: justify;">In today's digitally driven world, the demand for skilled professionals in the field of computer sciences is 
                            soaring higher than ever before. Amidst this surge, Teerthanker Mahaveer University's College of Computing Sciences & IT 
                            (CCSIT) stands out as a beacon of excellence, offering a comprehensive blend of academic rigor and practical exposure. 
                            Let's delve into why CCSIT at TMU is not just a college but a transformative journey for aspiring IT enthusiasts.</p>

                    </div>
                    <a href="javascript:void(0);" class="tmu-btn btn-1 py-2 mt-4 read-more ms-2 mt-2" title="Read More">Read More</a>

                    </div>

                </div>
            </div>
        </div>

        <div class="container my-5 py-2">
            <ul class="nav nav-tabs justify-content-center py-2 gap-2 gap-md-5" id="myTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#Tab1"
                        type="button" role="tab" aria-controls="Tab1" aria-selected="true"><i
                            class="fas fa-lightbulb"></i> Key Highlights</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#Tab2" type="button"
                        role="tab" aria-controls="Tab2" aria-selected="false"><i class="fas fa-briefcase"></i>
                        Placement</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#Tab3" type="button"
                        role="tab" aria-controls="Tab3" aria-selected="false"><i class="fas fa-book"></i>
                        Curriculum</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#Tab4" type="button"
                        role="tab" aria-controls="Tab4" aria-selected="false"><i class="fas fa-building"></i>
                        Infrastructure</button>
                </li>
            </ul>
            <div class="tab-content second ps-5 px-md-5" id="myTabContent">
                <div class="tab-pane fade show active" id="Tab1" role="tabpanel" aria-labelledby="tab1-tab">
                    <h3>Key Highlights</h3>
                    <ul class="m-ol-list ps-5 mb-0">    
                        <li class="fs-12"><strong>Experienced Faculty:</strong> The college boasts a team of highly qualified faculty members with deep expertise in various computing domains, ensuring that students receive top-tier academic mentorship.</li>
                        <li class="fs-12"><strong>Industry Linkages:</strong> TMU’s College of Computing Sciences & IT maintains close ties with the IT industry, ensuring regular guest lectures, industry visits, and internships that enhance student employability.</li>
                    </ul>
                    <div class="read-more-content mt-0">
                        <ul class="m-ol-list ps-5"> 
                        <li class="fs-12"><strong>Specialization in Emerging Technologies:</strong> The college offers specialized training in trending fields like Cloud Computing, Blockchain, Cybersecurity, Data Science, and Internet of Things (IoT), helping students stay ahead of the curve.</li>
                        <li class="fs-12"><strong>Comprehensive Career Support:</strong> With dedicated placement cell and career guidance, CCSIT graduates have successfully secured positions in top multinational companies and startups.</li>
                        <li class="fs-12"><strong>Holistic Development:</strong> Beyond academics, the college emphasizes soft skills, leadership, and critical thinking, fostering well-rounded individuals ready to tackle real-world challenges.</li>
                        <li class="fs-12"><strong>Research and Innovation:</strong> CCSIT encourages students to engage in research projects and innovative developments, promoting a culture of inquiry and creativity in the field of computing sciences.</li>
                        </ul>
                    </div>
                    <a href="javascript:void(0);" class="read-more ms-2 mt-1" title="Read More">Read More</a>

                </div>
                <div class="tab-pane fade" id="Tab2" role="tabpanel" aria-labelledby="tab2-tab">
                    <h3>Placement/Internship</h3>
                    <p class="mb-0">As a centre for computing sciences, CCSIT offers a pool of internships and
                        placement opportunities for a swift transition from academics to the professional world.</p>

                    <div class="read-more-content mt-0">
                        <ul class="m-ol-list ps-4">
                            <li>
                                <p class="p-0 m-0">Our training & placement cell (CRC) is committed to generating
                                    top-notch placement and training opportunities.</p>
                            </li>
                            <li>
                                <p class="p-0 m-0">Reputed industrial giants like HCL, Infosys, Wipro, Vivo, TCS, Tech
                                    Mahindra, and more visit our campus for recruitment drives.</p>
                            </li>
                            <li>
                                <p class="p-0 m-0">With a focus on ensuring 82% placement and securing the best jobs,
                                    our CRC and CTLD departments prepare students from the beginning.</p>
                            </li>
                        </ul>
                    </div>
                    <a href="javascript:void(0);" class="read-more mt-2" title="Read More">Read More</a>
                </div>
                <div class="tab-pane fade" id="Tab3" role="tabpanel" aria-labelledby="tab3-tab">
                    <h3>Curriculum</h3>
                    <p>The CCSIT’s curriculum is designed to equip students with updated knowledge and technical
                        skills. Our faculties use effective pedagogy, fostering an optimal learning environment. We
                        value students’ participation in conferences, seminars, workshops, and group discussions for
                        overall development.</p>
                    <div class="read-more-content mt-0">
                        <p class="mb-0">We also offer short-term courses to expand their skill set.
                            Expert guest lectures and collaborations with industry leaders enhance our students'
                            learning.
                            Our curriculum aligns with NEP2020, preparing students for success in technology. The
                            College of
                            computing sciences & IT is a leading computing science college that ignites the spark of
                            innovation in every student.</p>
                    </div>
                    <a href="javascript:void(0);" class="read-more mt-2" title="Read More">Read More</a>

                </div>
                <div class="tab-pane fade" id="Tab4" role="tabpanel" aria-labelledby="tab4-tab">
                    <h3>Infrastructure</h3>
                    <p>CCSIT provides a conducive environment to provide quality education and support to both students
                        and faculty members. The College boasts</p>
                    <div class="read-more-content mt-0">
                        <ul class="m-ol-list ps-4">
                            <li>
                                <p class="p-0 m-0">19 well-equipped labs with a total of 950 computers and peripherals,
                                    including a dedicated iMac Lab with 30 Apple Desktop PCs for the Apple Authorized
                                    Training Centre.</p>
                            </li>
                            <li>
                                <p class="p-0 m-0">Specialised labs such as Cisco Networking Lab, Linux Lab, Advanced
                                    Database Lab, Dot Net Lab, Android Lab, JAVA Lab, and IBM Cloud Software Lab for
                                    Emerging Technologies.</p>
                            </li>
                            <li>
                                <p class="p-0 m-0">World-class infrastructure featuring spacious lecture halls, a
                                    lecture
                                    theatre, a well-equipped library, and a seminar hall, all equipped with advanced
                                    facilities.</p>
                            </li>
                            <li>
                                <p class="p-0 m-0">NVIDIA lab to enhance student skills in graphics and visualization.
                                </p>
                            </li>
                            <li>
                                <p class="p-0 m-0">Spoken Tutorials by IIT-Bombay for assessing and enhancing student
                                    skills.</p>
                            </li>
                        </ul>
                    </div>
                    <a href="javascript:void(0);" class="read-more mt-2" title="Read More">Read More</a>
                </div>
            </div>
        </div>

        <!-- Section for collaborators -->
        <div class="container industry-collaborators mt-5">
            <h2 class="text-center mb-0" style="font-weight:700; color:#001055">Top Industry Academic Partners and <span
                    style="color:#FF7900"> Collaborative Programmes at TMU</span></h2>

            <!-- Collaborators Carousel -->
            <div class="section bg-transparent mt-0 mb-5">
                <div class="owl-carousel owl-carousel-full image-carousel carousel-widget charity-card"
                    data-stage-padding="20" data-margin="50" data-center="true" data-loop="true" data-nav="true"
                    data-autoplay="200000" data-speed="2000" data-pagi="true" data-items-xs="1" data-items-sm="2"
                    data-items-md="2" data-items-lg="3" data-items-xl="3">

                    <div class="oc-item text-start">
                        <div class="card collab-card">
                            <img class="collab-card-img" src="{{asset('assets/img/collaboration/ccsit/3.png')}}"
                                alt="TMU collaboration with united resourcing">

                            <div class="card-body">
                                <h3 class="collab-card-title">TCS iON - B.Tech (CSE) Data Science</h3>
                                <p class="collab-card-text ">Under this collaborative program, the students are trained
                                    and taught
                                    by trainers from TCS ION. The program is helping students to get trained from the
                                    industry
                                    experts and to gain insight into the work culture in the industry acquiring the
                                    skills needed for
                                    enhancing chances of employment.
                                </p>
                                <button
                                    class="tmu-btn btn-3 py-2 px-3 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14"
                                    onclick="showCollabModal()">Read More <i
                                        class="bi bi-chevron-down ps-2"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="oc-item text-start">
                        <div class="card collab-card">
                            <img class="collab-card-img" src="{{asset('assets/img/collaboration/ccsit/2.png')}}"
                                alt="TMU collaboration with whizhack">
                            <div class="card-body">
                                <h3 class="collab-card-title">B.Tech (CSE) Applications development using cloud &
                                    analytics platforms</h3>
                                <p class="collab-card-text">Under this collaborative program, the students are trained
                                    and taught by
                                    trainers from IBM. The program is helping students to get trained from the industry
                                    experts and
                                    to gain insight into the work culture in the industry acquiring the skills needed
                                    for enhancing
                                    chances of employment.</p>
                                <button
                                    class="tmu-btn btn-3 py-2 px-3 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14"
                                    onclick="showCollabModal()">Read More <i
                                        class="bi bi-chevron-down ps-2"></i></button>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="oc-item text-start">
                        <div class="card collab-card">
                            <img class="collab-card-img" src="https://www.tmu.ac.in/img/collaborative/BSE-India.jpg"
                                alt="TMU collaboration with BSE india">
                            <div class="card-body">
                                <h3 class="collab-card-title">B.TECH. (CSE) Cloud Technology & Information Security
                                    (CTIS) Artificial Intelligence</h3>
                                <p class="collab-card-text">Under this collaborative program, the students are trained
                                    and taught by trainers
                                    from i-Nurture. The program is helping students to get trained from the industry
                                    experts and to gain insight
                                    into the work culture in the industry acquiring the skills needed for enhancing
                                    chances of employment.</p>
                                <button
                                    class="tmu-btn btn-3 py-2 px-3 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14"
                                    onclick="showCollabModal()">Read More <i
                                        class="bi bi-chevron-down ps-2"></i></button>
                            </div>
                        </div>
                    </div> -->

                    <div class="oc-item text-start">
                        <div class="card collab-card">
                            <img class="collab-card-img" src="{{asset('assets/img/collaboration/ccsit/1.png')}}"
                                alt="TMU collaboration with safeducate">
                            <div class="card-body">
                                <h3 class="collab-card-title">M.Sc. In collaboration with Aivancity, France</h3>
                                <p class="collab-card-text">Under this collaborative program, students are taught by 
                                    trainers at TMU during the first year and by trainers from Aivancity, France, 
                                    during the second year.</p>
                                <button
                                    class="tmu-btn btn-3 py-2 px-3 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14"
                                    onclick="showCollabModal()">Read More <i class="bi bi-chevron-down ps-2"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <!-- Collab Modal -->
        <div id="collabModal" class="tmu-modal">
            <div class="overlay" onclick="closeCollabModal()"></div>
            <div class="tmu-modal-box">
                <div class="close-btn" onclick="closeCollabModal()">x</div>
                <div class="card collab-card">
                    <img class="collab-card-img" src="https://www.tmu.ac.in/img/collaborative/EPCH logo.png"
                        alt="TMU collaboration with epch">
                    <div class="card-body">
                        <h3 class="collab-card-title">MBA (HANDICRAFTS EXPORT MANAGEMENT)</h3>
                        <p class="collab-card-text">
                            This collaborative program is a joint venture program with the Export Promotion Council for
                            Handicrafts (EPCH) that provides specialisation in Handicraft Export Management.
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

        <section>
        <div class="container-fluid mt-5 ">
            <h2 class="tmu-text-primary text-center">
                <span>Our </span><span> Recruiters</span>
            </h2>
            <div class="marquee my-5 py-5 pt-4">
                <section class="marquee-content">
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/ccsit/face_academy.png')}}" alt="face academy visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/ccsit/Tata%20Motors.png')}}" alt="Tata motors visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/ccsit/Cetpa.png')}}" alt="cetpa visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/ccsit/Tosha%20International.png')}}" alt="tosha inernational visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/ccsit/tci.png')}}" alt="TCI visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/ccsit/wipro.png')}}" alt="Wipro visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/ccsit/torrent_gas.png')}}" alt="Torrent gas visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/ccsit/munjal_auto.png')}}" alt="munjal auto visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/ccsit/smart_brain.png')}}" alt="smart brain visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/ccsit/infosys.png')}}" alt="infosys visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/ccsit/ford-logo.png')}}" alt="ford visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/ccsit/tech_mahindra.png')}}" alt="tech mahindra visit TMU for recruitment"></a>
                    </div>
                </section>
                <section class="marquee-content">
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/ccsit/face_academy.png')}}" alt="face academy visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/ccsit/Tata%20Motors.png')}}" alt="Tata motors visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/ccsit/Cetpa.png')}}" alt="cetpa visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/ccsit/Tosha%20International.png')}}" alt="tosha inernational visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/ccsit/tci.png')}}" alt="TCI visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/ccsit/wipro.png')}}" alt="Wipro visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/ccsit/torrent_gas.png')}}" alt="Torrent gas visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/ccsit/munjal_auto.png')}}" alt="munjal auto visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/ccsit/smart_brain.png')}}" alt="smart brain visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/ccsit/infosys.png')}}" alt="infosys visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/ccsit/ford-logo.png')}}" alt="ford visit TMU for recruitment"></a>
                    </div>
                    <div class="marquee-block">
                        <a href="#"><img src="{{asset('/assets/img/recruiters/ccsit/tech_mahindra.png')}}" alt="tech mahindra visit TMU for recruitment"></a>
                    </div>
                </section>
            </div>
        </div>
    </section>

    <!-- Section for recruiter end -->



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

                <div class="media ">
                    <img src="https://www.tmu.ac.in/monaco/assets/image/testimonials/abdul_india_mart_mba.webp" class="mr-3" alt="">
                    <div class="media-body">
                        <div class="testimonial">
                            <p class="overview mb-3 testimonial-user-name"><b>Abdul Malik Khan</b>, MBA
                            </p>
                            <p class="testimonial-content">TMU, for me, is not just an MBA destination, it's the crucible where my leadership skills
                                were forged. Beyond textbooks and case studies, TMU offers a dynamic learning
                                environment where theories meet practical challenges. It was a journey where I honed the
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
        <h2 class="tmu-text-primary text-center"><span>Why Choose </span><span> College of Computing Sciences & IT </span></h2>

            <hr class="horizontal-line">
            <button class="careers-accordion">Why Teerthanker Mahaveer University is the best choice for you:<span class="icon">+</span></button>
            <div class="panel active">
                <h3 class="mb-1 tmu-color">UGC-Approved with NAAC-A Accreditation</h3>
                <p class="text-justify">At TMU's CCSIT, quality education is not just a promise but a proven reality. 
                    With UGC approval and NAAC-A accreditation, the college upholds the highest 
                    standards of academic excellence, ensuring that every student receives a world-class education.</p>
                    <h3 class="mb-1 tmu-color">Strong Focus on Practical Knowledge</h3>
                <p class="text-justify">Theory lays the foundation, but practical skills are the building blocks of success in the IT industry. CCSIT places a strong emphasis on hands-on learning, equipping students with the practical knowledge and skills demanded by today's dynamic IT landscape.</p>
                    <h3 class="mb-1 tmu-color">100% Placement Assistance with an Excellent Track Record</h3>
                <p class="text-justify">For students, the ultimate goal of education is to secure a rewarding career. At CCSIT, we take pride in our track record of providing 100% placement assistance to our students, connecting them with leading companies in the industry and kickstarting their professional journey on the right note.</p>
            </div>
            <!-- Add the horizontal line here -->
            <hr class="horizontal-line">

            <button class="careers-accordion">Strong Industry Connections with Top Companies at CCSIT<span class="icon">+</span></button>
            <div class="panel">
                <p>Networking is key in the IT world, and at CCSIT, we ensure that our students have access to top-notch industry connections. Collaborations with giants like IBM, Oracle, CISCO Networking Academy, and i Nurture open doors to endless opportunities for internships, projects, and placements.</p>
            </div>
            <!-- Add the horizontal line here -->
            <hr class="horizontal-line">
            <button class="careers-accordion">Professional Memberships and Global Career Prospects<span class="icon">+</span></button>
            <div class="panel">
                <p>Membership in esteemed organisations like IEEE, WIE, and the Computer Society of India Student Chapter not only adds value to a student's resume but also opens up a world of global career prospects. At CCSIT, we believe in empowering our students to thrive on both national and international platforms.</p>
            </div>
            <!-- Add the horizontal line here -->
            <hr class="horizontal-line">
            <button class="careers-accordion">On-Campus Hostel Facilities and Scholarship Assistance<span class="icon">+</span></button>
            <div class="panel">
                <p>We understand that a conducive living environment is essential for holistic growth. CCSIT offers comfortable on-campus hostel facilities, ensuring that students feel at home even away from home. Additionally, our commitment to making quality education accessible is reflected in our 100% placement assistance.</p>
            </div>
            <!-- Add the horizontal line here -->
            <hr class="horizontal-line">
            <button class="careers-accordion">Modern Infrastructure and Interactive Learning<span class="icon">+</span></button>
            <div class="panel">
                <p>
                State-of-the-art classrooms, high-tech IT labs, and interactive learning environments are the hallmarks of CCSIT. We believe in providing our students with the best possible resources to facilitate their learning journey and prepare them for the challenges of the digital era.
                </p>
            </div>
            <!-- Add the horizontal line here -->
            <hr class="horizontal-line">
            <button class="careers-accordion">Vibrant Campus Life and Extracurricular Activities<span class="icon">+</span></button>
            <div class="panel">
                <p>Education is not just about academics; it's also about holistic development. CCSIT's vibrant campus life, IT clubs, sports championships, fitness centres, tech events, and workshops ensure that students have ample opportunities to explore their interests, showcase their talents, and make lifelong memories.

                </p>
            </div>
            <!-- Add the horizontal line here -->
            <hr class="horizontal-line">
            <button class="careers-accordion">Core Programmes Offered at CCSIT:<span class="icon">+</span></button>
            <div class="panel">
                <ul>
                    <li>BTech</li>
                    <li>MTech</li>
                    <li>BCA</li>
                    <li>MCA</li>
                    <li>BSc</li>
                            </ul>
            </div>
            <!-- Add the horizontal line here -->
            <hr class="horizontal-line">
            <button class="careers-accordion">AAA Rating to CCSIT by Career 360<span class="icon">+</span></button>
            <div class="panel">
                <p>The coveted AAA rating by Career 360 speaks volumes about CCSIT's commitment to academic excellence and student satisfaction. It's not just a rating; it's a testament to our relentless pursuit of excellence in education. 
                </p>
            </div>
            <!-- Add the horizontal line here -->
            <hr class="horizontal-line">
            <button class="careers-accordion">TMU's Contribution to Innovation and Entrepreneurship<span class="icon">+</span></button>
            <div class="panel">
                <p>TMU's dedication to fostering innovation and entrepreneurship is evident through various initiatives like the Business Incubation Centre, Institution Innovation Council, and strategic partnerships with government bodies and industry stakeholders. These efforts are paving the way for a self-reliant India powered by innovation and entrepreneurship. 
                </p>
            </div>
            <!-- Add the horizontal line here -->
            <hr class="horizontal-line">
            <button class="careers-accordion">Alignment with National Education Policy (NEP) 2020<span class="icon">+</span></button>
            <div class="panel">
                <p>TMU is at the forefront of educational reforms, aligning its practices with the vision of the National Education Policy (NEP) 2020. By embracing outcome-based education (OBE), redesigning the curriculum, and establishing industry-centric Centres of Excellence, TMU is shaping the future of education and preparing students for success in the digital age.

                </p>
            </div>
            <!-- Add the horizontal line here -->
            <hr class="horizontal-line">
            <button class="careers-accordion">Campus Life at CCSIT<span class="icon">+</span></button>
            <div class="panel">
                <p>At CCSIT, campus life is vibrant and dynamic, offering students a plethora of opportunities to engage, learn, and grow. From bustling IT clubs to thrilling sports championships, there's never a dull moment on campus. Whether it's participating in tech events, attending workshops, or simply enjoying the camaraderie of fellow students, CCSIT's campus life is an enriching experience in itself.

                </p>
            </div>
            <!-- Add the horizontal line here -->
            <hr class="horizontal-line">
            <button class="careers-accordion">Facilities and Resources available at CCSIT, TMU<span class="icon">+</span></button>
            <div class="panel">
                <p>CCSIT boasts state-of-the-art facilities and resources designed to enhance the learning experience of students. Modern classrooms, well-equipped IT labs, and interactive learning spaces provide the perfect environment for academic exploration and innovation. Additionally, on-campus hostel facilities, fitness centers, cafeterias, and shopping stores ensure that students have everything they need for a comfortable and enriching stay at CCSIT. 
                </p>
            </div>
            <!-- Add the horizontal line here -->
            <hr class="horizontal-line">
            <button class="careers-accordion">Career Opportunities in the Computer Science Field<span class="icon">+</span></button>
            <div class="panel">
                <p>The ultimate goal of education at CCSIT is to prepare students for successful careers in the IT industry. With 100% placement assistance, strong industry connections, and professional memberships, CCSIT opens doors to a world of career opportunities for its students. Whether it's securing internships, landing coveted job offers, or pursuing further studies, CCSIT equips students with the skills, knowledge, and confidence to excel in their chosen field.
                </p>
                <h3 class="mb-1 tmu-color">Conclusion</h3>
                <p class="text-justify">Teerthanker Mahaveer University's College of Computing Sciences & IT (CCSIT) is more than just a college; it's a gateway to endless opportunities, a hub of innovation, and a launchpad for aspiring IT professionals. Join us at CCSIT and embark on a journey of transformation, empowerment, and excellence in the dynamic world of computer sciences.</p>
                <h3 class="mb-2 tmu-color">Frequently Asked Questions (FAQs)</h3>
                <h5 class="tmu-color mb-0">1. Is CCSIT affiliated with any regulatory bodies?</h5>
                <p class="text-justify">Yes, CCSIT is UGC-approved and holds NAAC-A accreditation, ensuring quality education standards</p>
                <h5 class="tmu-color mb-0">2. What sets CCSIT apart from other colleges?</h5>
                <p class="text-justify">CCSIT offers a unique blend of academic excellence, practical exposure, industry connections, and vibrant campus life, setting it apart as a top choice for computer science education.</p>
                <h5 class="tmu-color mb-0">3. Does CCSIT offer hostel facilities?</h5>
                <p class="text-justify">Yes, CCSIT provides on-campus hostel facilities to ensure a comfortable living environment for students.</p>
                <h5 class="tmu-color mb-0">4. How does CCSIT support students in their career aspirations?</h5>
                <p class="text-justify">CCSIT offers 100% placement assistance, strong industry connections, and professional memberships, paving the way for successful careers in the IT industry.</p>
                <h5 class="tmu-color mb-0">5. What specialisations are available at CCSIT?</h5>
                <p class="text-justify">CCSIT offers a wide range of core programmes including BTech, MTech, BCA, MCA, and BSc, catering to diverse interests and career goals.</p>
                <h5 class="tmu-color mb-0">6. Which institute is best for computer science in India?</h5>
                <p class="text-justify">There are thousands of institutes for computer science in India. The choice of the best institute varies from person to person based on their expectations, locations, fees, placement, hostels and other criteria.</p>
                <h5 class="tmu-color mb-0">7. Which college has 100% placement in India?</h5>
                <p class="text-justify">Teerthanker Mahaveer University provides 100% placement assistance.</p>
                <h5 class="tmu-color mb-0">8. Which private college is best for CSE placement?</h5>
                <p class="text-justify">There are many good private colleges for CSE, out of them CCSIT, Teerthanker Mahaveer University is one of the top private colleges for CSE placement.</p>
                <h5 class="tmu-color mb-0">9. Is India good for CS?</h5>
                <p class="text-justify">India is good for CS as there are thousands of multinational IT companies and huge job opportunities.</p>
                <h5 class="tmu-color mb-0">10. Who is India's No. 1 college?</h5>
                <p class="text-justify">There are thousands of colleges in India. The choice of the best college varies from person to person based on their expectations, locations, fees, placement, hostels and other criteria.</p>
                    
            </div>
            <!-- Add the horizontal line here -->
            <hr class="horizontal-line">
        </div>
    </div>

</section><!-- #content end -->
<br /><br />
<script src="{{asset('assets/js/tmimt.js')}}"></script>




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
                cd_id: 10,
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
                cd_id: 10,
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



