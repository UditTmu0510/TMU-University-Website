@extends('layouts.university.colleges.tmimt_home_without_sidebar')
@section('content')
<link rel="stylesheet" href="{{asset('assets/css/tmu-testimonial.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/tmimt.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/college.css')}}">
<section id="content">
    <div class="content-wrap py-0">
        <div class="container-fluid  my-0 px-2">
            <div class="row ps-4">
                <div class="col-md-6 pt-0 pt-md-4 ps-md-5 mb-4">
                    <h1 class=" mt-5 mb-5 d-none d-md-block banner-main-heading">Welcome to the <br> <span style="font-weight:700!important;">Best Management</span> College in UP,TMIMT</h1>
                    <h1 class=" mt-5 mb-3 d-block d-md-none" style="color:#001055; text-transform: capitalize; font-weight:700!important; font-size:24px">Welcome to the <span>Best Management</span> College in UP,TMIMT</h1>
                    <a href="https://admissions.tmu.ac.in/" target="_blank" class="tmu-btn btn-1 me-4 py-1 px-3 py-xl-2 px-xl-5">Apply Now</a>
                    <!-- <a href="#" class="tmu-btn btn-2 py-1 px-3 py-xl-2 px-xl-4">Apply Now</a> -->
                </div>
                <div class="col-12 col-md-6">
                    <div class="pe-lg-4 position-relative p-0">
                        <div style="z-index: 2;">
                            <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/iXHRmCyHszY?si=BcZ5NOfT-V8ECc6z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="z-index: 2; margin:0;"></iframe> -->
                            <img src="{{asset('/assets/img/banner/management/management-banner.webp')}}" alt="" class="p-0 m-0">
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
                            <span>AA+</span>
                            <br>
                            <span class="d-block pt-1">Rated Top B-school by <br> Careers360</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 px-1">
                    <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                        <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                            <span>India's 1st</span>
                            <br>
                            <span class="d-block pt-1">Centre of Excellence in Cybersecurity</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 px-1">
                    <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                        <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                            <span>5 B-Schools</span>
                            <br>
                            <span class="d-block pt-1">Among the Top 5 B-Schools in North India</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 px-1">
                    <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                        <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                            <span>IACBE</span>
                            <br>
                            <span class="d-block pt-1">Member of IACBE</span>
                            &nbsp;&nbsp;
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-2 d-block d-md-none">
            <div id="under-banner-carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
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
                                        <span>AA+</span>
                                        <br>
                                        <span class="d-block pt-1">Rated Top B-school by <br> Careers360</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                                    <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                                        <span>India's 1st</span>
                                        <br>
                                        <span class="d-block pt-1">Centre of Excellence in Cybersecurity</span>
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
                                        <span>5 B-Schools</span>
                                        <br>
                                        <span class="d-block pt-1">Among the Top 5 B-Schools in North India</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                                    <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                                        <span>IACBE</span>
                                        <br>
                                        <span class="d-block pt-1">Member of IACBE</span>
                                        &nbsp;&nbsp;
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
                <h2 class="college-main-heading">TMIMT College of Management, Among the Top Colleges for BBA/MBA</h2>
                <div class="row">
                    <div class="col-12 px-2 px-md-5">
                        <p style="text-align: justify;">TMIMT, established in 2001, has grown into a key institute within Teerthanker Mahaveer University (TMU), contributing significantly to management education through leadership development, entrepreneurship, and research. This top management college, established in 2001, has been contributing to the development of management education, by fostering leadership, nurturing entrepreneurial talent and stimulating research since its inception.</p>
                        <div class="read-more-content mt-0">
                            <p style="text-align: justify;">TMIMT is part of Teerthanker Mahaveer University. It is one of the top colleges for BBA/MBA programmes. Let's delve into why TMU is your ideal choice for higher education in management.</p>
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
                    <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#Tab2" type="button" role="tab" aria-controls="Tab2" aria-selected="false"><i class="fas fa-briefcase"></i> Placement</button>
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
                    <ul class="m-ol-list ps-4 mb-0 pb-0">
                        <li>
                            <p class="p-0 m-0">The only management college in the region with IACBE membership, an international accreditation body.</p>
                        </li>
                        <li>
                            <p class="p-0 m-0">The college offers a wide range of specializations in BBA / B. Com/ MBA including Block Chain Technology, Marketing, Logistics and Supply Chain Management, International Business, Human Resources, Finance, Financial Market, Cyber Security, Agricultural Management, Hospital Management, etc.</p>
                        </li>
                        <li>
                            <p class="p-0 m-0">Dedicated Incubation and Entrepreneurship Cell with a focus on establishing an innovation and entrepreneurship-based ecosystem that will help in converting ideas into sustainable start-ups.</p>
                        </li>
                    </ul>

                    <div class="read-more-content mt-0">
                        <ul class="m-ol-list ps-4">
                            <li>
                                <p class="p-0 m-0">Domestic and international excursion tours for better national and global connections</p>
                            </li>
                            <li>
                                <p class="p-0 m-0">Regular mentoring and counseling sessions by trained industry professionals.</p>
                            </li>
                            <li>
                                <p class="p-0 m-0">Implementation of NEP-2020 through a vigorous academic environment supported by various FDPs, MOOCs, Workshops, Conferences, Industry Competitions, Guest Talks, and Seminars.</p>
                            </li>
                            <li>
                                <p class="p-0 m-0">The college has been consistently rated high in Business School surveys and has been conferred with numerous awards and honors.</p>
                            </li>
                        </ul>
                        <p class="mb-0 ms-2">All these factors make Teerthanker Mahaveer Institute of Management and Technology (TMIMT), the best management college in Uttar Pradesh, India.</p>

                    </div>
                    <a href="javascript:void(0);" class="read-more ms-2 mt-2" title="Read More">Read More</a>

                </div>
                <div class="tab-pane fade" id="Tab2" role="tabpanel" aria-labelledby="tab2-tab">
                    <h3>Placement/Internship</h3>
                    <p class="mb-0">The college has established strong ties with national and international institutions, allowing students to gain valuable work experience through internships and co-op programs. Additionally, the college provides robust job placement assistance and career counseling services to help students secure rewarding employment opportunities.

                    <div class="read-more-content mt-0">
                        <br>
                        <p class="mb-0"> A remarkable 93% of eligible TMIMTians have been successfully placed with top multinational corporations (MNCs), a testament to the quality of education and training they receive at our institution and 35% of our graduating students have received multiple job offers. This outstanding accomplishment highlights the exceptional caliber of education and training at TMIMT College of Management.
                        </p><br>
                        <p class="mb-0">We are dedicated to nurturing our students' potential and providing them with the tools they need to succeed in their professional journeys. With a focus on academic excellence and industry relevance, TMIMT College of Management continues to shape the leaders of tomorrow and empower them for successful and fulfilling careers.
                        </p>
                    </div>
                    <a href="javascript:void(0);" class="read-more mt-2" title="Read More">Read More</a>

                    </p>
                </div>
                <div class="tab-pane fade" id="Tab3" role="tabpanel" aria-labelledby="tab3-tab">
                    <h3>Curriculum</h3>
                    <p>The curriculum of this top management college is thoughtfully designed as per the National Education Policy (NEP 2020) to impart a well-rounded education that equips students with the knowledge and skills necessary to excel in the dynamic business world. The curriculum is continuously updated to stay relevant and in sync with the latest industry trends.
                        <br><br>
                        Through a mix of theoretical learning and practical applications, students gain a comprehensive understanding of business dynamics, problem-solving abilities, and effective decision-making skills. Moreover, our curriculum emphasizes the importance of experiential learning, case studies, industry projects, and internships, ensuring that students are well-prepared to tackle real-world challenges and adapt to the ever-evolving industry landscape.
                        <br><br>
                    </p>
                </div>
                <div class="tab-pane fade" id="Tab4" role="tabpanel" aria-labelledby="tab4-tab">
                    <h3>Infrastructure</h3>
                    <p>TMIMT College of Management provides modern infrastructure and state-of-the-art facilities, including well-equipped classrooms, projectors, computer labs, and dedicated spaces for group discussions and collaborations. These facilities create an optimal learning environment and help in enhancing the overall educational experience for students.
                        <br><br>
                        Additionally, the college is a hub of multifaceted academic research, thus equipping students with crucial research skills. It has a library with the latest world-class books, journals, periodicals, newspapers, and a digital library for academic excellence in the domain.
                        <br><br>
                    </p>
                </div>
            </div>
        </div>



        <section id="content">
            <div class="content-wrap py-0" style="background-color: #001055;">
                <main1>
                    <div>
                        <p class="tmimt-awards-heading"><span>Awards <span class="symbol">&</span> Excellence</span>
                    </div>
                    <div class="swiper swiper-management-awards">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide swiper-slide--one">

                                <!-- <div>
                                                <a href="https://en.wikipedia.org/wiki/Octopus" target="_blank">explore</a>
                                            </div> -->
                            </div>
                            <div class="swiper-slide swiper-slide--two">

                                <!-- <div>
                                                <a href="https://en.wikipedia.org/wiki/Octopus" target="_blank">explore</a>
                                            </div> -->
                            </div>
                            <div class="swiper-slide swiper-slide--three">
                                <!-- <div>
                                                <a href="https://en.wikipedia.org/wiki/Seahorse" target="_blank">explore</a>
                                            </div> -->
                            </div>

                            <div class="swiper-slide swiper-slide--four">

                                <!-- <div>
                                                <a href="https://en.wikipedia.org/wiki/Octopus" target="_blank">explore</a>
                                            </div> -->
                            </div>

                            <div class="swiper-slide swiper-slide--seven">

                                <!-- <div>
                                                <a href="https://en.wikipedia.org/wiki/Shark" target="_blank">explore</a>
                                            </div> -->
                            </div>
                            <div class="swiper-slide swiper-slide--six">

                                <!-- <div>
                                                <a href="https://en.wikipedia.org/wiki/Octopus" target="_blank">explore</a>
                                            </div> -->
                            </div>

                            <div class="swiper-slide swiper-slide--five">

                                <!-- <div>
                                                <a href="https://en.wikipedia.org/wiki/Dolphin" target="_blank">explore</a>
                                            </div> -->
                            </div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                    <img src="https://cdn.pixabay.com/photo/2021/11/04/19/39/jellyfish-6769173_960_720.png" alt="" class="bg">
                    <img src="https://cdn.pixabay.com/photo/2012/04/13/13/57/scallop-32506_960_720.png" alt="" class="bg2">
                    </main>
            </div>
        </section>


        <!-- Section for collaborators -->
        <div class="container industry-collaborators mt-5">
            <h2 class="text-center mb-0" style="font-weight:700; color:#001055">Top Industry Academic Partners and <span style="color:#FF7900"> Collaborative Programmes at TMU</span></h2>

            <!-- Collaborators Carousel -->
            <div class="section bg-transparent mt-0 mb-5">

                <div class="owl-carousel owl-carousel-full image-carousel carousel-widget charity-card" data-stage-padding="20" data-margin="50" data-center="true" data-loop="true" data-nav="true" data-autoplay="200000" data-speed="2000" data-pagi="true" data-items-xs="1" data-items-sm="2" data-items-md="2" data-items-lg="3" data-items-xl="3">

                    <div class="oc-item text-start">
                        <div class="card collab-card">
                            <img class="collab-card-img" src="https://www.tmu.ac.in/img/collaborative/ur.jpg" alt="TMU collaboration with united resourcing">

                            <div class="card-body">
                                <h3 class="collab-card-title">BBA – INTERNATIONAL BUSINESS & ENTREPRENEURSHIP</h3>
                                <p class="collab-card-text ">As part of a partnership with United Resourcing Services, Teerthanker Mahaveer University is offering a Masters of Business Administration (MBA) in Industry Integrated with Global Exposure along with Bachelors of Business Administration (BBA) in International Business and Entrepreneurship programme. UR Services Pvt. Ltd. helps the students to be prepared for the challenges in the industry.</p>
                                <button class="tmu-btn btn-3 py-2 px-3 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14" onclick="showCollabModal()">Read More <i class="bi bi-chevron-down ps-2"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="oc-item text-start">
                        <div class="card collab-card">
                            <img class="collab-card-img" src="https://www.tmu.ac.in/img/collaborative/whizhacklogo.jpg" alt="TMU collaboration with whizhack">
                            <div class="card-body">
                                <h3 class="collab-card-title">MBA Cyber Security (in association with Whizhack Technologies Pvt Ltd)</h3>
                                <p class="collab-card-text">Welcome to our MBA in Cyber Security program, offered in collaboration with Whizhack Technologies Pvt Ltd. In this cutting-edge program, we empower aspiring professionals with the knowledge and skills required to navigate the complex landscape of cybersecurity.</p>
                                <button class="tmu-btn btn-3 py-2 px-3 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14" onclick="showCollabModal()">Read More <i class="bi bi-chevron-down ps-2"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="oc-item text-start">
                        <div class="card collab-card">
                            <img class="collab-card-img" src="https://www.tmu.ac.in/img/collaborative/BSE-India.jpg" alt="TMU collaboration with BSE india">
                            <div class="card-body">
                                <h3 class="collab-card-title">B.Com. (Hons.) - Financial Markets</h3>
                                <p class="collab-card-text">As part of a partnership with the Bombay Stock Exchange (BSE), Teerthanker Mahaveer University is offering a highly in-demand (B. Com) Honors programme with a focus on Financial Markets.</p>
                                <button class="tmu-btn btn-3 py-2 px-3 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14" onclick="showCollabModal()">Read More <i class="bi bi-chevron-down ps-2"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="oc-item text-start">
                        <div class="card collab-card">
                            <img class="collab-card-img" src="https://www.tmu.ac.in/img/collaborative/safeducate.jpg" alt="TMU collaboration with safeducate">
                            <div class="card-body">
                                <h3 class="collab-card-title">MBA (Supply Chain Management & Logistics)</h3>
                                <p class="collab-card-text">This collaborative program is a joint venture program with Safexpress that provides specialisation in Supply Chain Management and Logistics.</p>
                                <button class="tmu-btn btn-3 py-2 px-3 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14" onclick="showCollabModal()">Read More <i class="bi bi-chevron-down ps-2"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="oc-item text-start">
                        <div class="card collab-card">
                            <img class="collab-card-img" src="https://www.tmu.ac.in/img/collaborative/EPCH logo.png" alt="TMU collaboration with epch">
                            <div class="card-body">
                                <h3 class="collab-card-title">MBA (HANDICRAFTS EXPORT MANAGEMENT)</h3>
                                <p class="collab-card-text">This collaborative program is a joint venture program with the Export Promotion Council for Handicrafts (EPCH) that provides specialisation in Handicraft Export Management.</p>
                                <button class="tmu-btn btn-3 py-2 px-3 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14" onclick="showCollabModal()">Read More <i class="bi bi-chevron-down ps-2"></i></button>
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

                    <div class="media ">
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

    <button class="careers-accordion"> Why TMU is the best choice for you:<span class="icon">+</span></button>
    <div class="panel">
        <h3 class="tmu-text-primary  text-justify mb-0 fs-16"><span>UGC-Approved and NAAC-A </span><span>accredited University</span></h3>
        <p class="text-justify mb-0">TMU has approval from UGC. The NAAC-A has also accredited it. This ensures your degree holds value. It's recognized nationally and internationally.</p>
        <h3 class="tmu-text-primary  text-justify mb-0 fs-16"><span>Case-based Innovative </span><span>Teaching Pedagogy</span></h3>
        <p class="text-justify mb-0">At TMIMT, learning is not just about textbooks; it's about real-world application. Our case-based teaching approach equips you with practical knowledge and problem-solving skills.</p>
        <h3 class="tmu-text-primary  text-justify mb-0 fs-16"><span>100% Placement Assistance with an </span><span>Excellent Track Record</span></h3>
        <p class="text-justify mb-0">Your career is our priority. We have strong industry connections and a dedicated placement cell. We guarantee 100% placement help. It ensures a bright future for every student. </p>
        <h3 class="tmu-text-primary  text-justify mb-0 fs-16"><span>Corporate Collaborations with </span><span>Top Companies</span></h3>
        <p class="text-justify mb-0">TMU has partnerships with famous companies. They include the Bombay Stock Exchange, Future Group, and IL&FS. They provide students with invaluable exposure and networking opportunities</p>
        <h3 class="tmu-text-primary  text-justify mb-0 fs-16"><span>Professional Memberships and </span><span>Recognitions</span></h3>
        <p class="text-justify mb-0">As a TMU student, you get access to pro memberships. These are with esteemed groups like NEN, AIMA, and ISTD. This boosts your credibility in the business world</p>
        <h3 class="tmu-text-primary  text-justify mb-0 fs-16"><span>Business Incubation </span><span>Centre</span></h3>
        <p class="text-justify mb-0">The Government of Uttar Pradesh recognises TMU. It has a Business Incubation Centre. The centre nurtures the entrepreneurial spirit and supports innovative startups. It provides them with the resources and mentorship they need.</p>
        <h3 class="tmu-text-primary  text-justify mb-0 fs-16"><span>Exciting Career </span><span>Prospects</span></h3>
        <p class="text-justify mb-0">TMIMT has national and international collaborations. They open doors to an exciting world of career opportunities. They ensure that your career trajectory knows no bounds. </p>
        <h3 class="tmu-text-primary  text-justify mb-0 fs-16"><span>On-Campus Accommodation </span><span>Facilities</span></h3>
        <p class="text-justify mb-0">Stay in our comfortable on-campus accommodation. It will feel like a home away from home. It provides a good environment for learning and personal growth</p>
        <h3 class="tmu-text-primary  text-justify mb-0 fs-16"><span>Anti-Ragging </span><span>Campus</span></h3>
        <p class="text-justify mb-0">TMU is committed to providing a safe and nurturing environment for all students. It has strict measures to prevent any ragging or harassment.</p>
    </div>
    <!-- Add the horizontal line here -->
    <hr class="horizontal-line">

    <button class="careers-accordion">Explore Top-Notch Placement Opportunities: <span class="icon">+</span></button>
    <div class="panel">
        <h3 class="tmu-text-primary  text-justify mb-0 fs-16"><span>Expert Faculty for Hands-On </span><span>Practical Knowledge</span></h3>
        <p class="text-justify mb-0">Our faculty members are experienced. They are dedicated to teaching not just theory but also practical insights. These insights will prepare you for the real challenges of the corporate world.</p>
        <h3 class="tmu-text-primary  text-justify mb-0 fs-16"><span>Centre for Teaching, </span><span>Learning, and Development</span></h3>
        <p class="text-justify mb-0">At TMIMT, we believe in continuous growth and development. Our Centre for Teaching, Learning, and Development offers many programmes. They will improve your skills and competencies.</p>
        <h3 class="tmu-text-primary  text-justify mb-0 fs-16"><span>International Internships</span><span> and Placements</span></h3>
        <p class="text-justify mb-0">Get a global edge with our international internships and job placements. They will broaden your horizons and enrich your resume with valuable cross-cultural experiences.</p>
        <h3 class="tmu-text-primary  text-justify mb-0 fs-16"><span>Entrepreneurial Skill </span><span>Development Programmes</span></h3>
        <p class="text-justify mb-0">TMU empowers the next generation of leaders. It offers comprehensive entrepreneurial skills programmes. They will give you the tools and mindset to succeed as an entrepreneur.</p>
    </div>
    <!-- Add the horizontal line here -->
    <hr class="horizontal-line">
    <button class="careers-accordion"> Core Programmes Offered with Diverse Specialisations: <span class="icon">+</span></button>
    <div class="panel">
        <p class="text-justify mb-0">MBA | BBA | BCom | BA | MA | MCom <br>
            The TMIMT College of Management offers many programmes. They have diverse specialisations, so you can find the perfect fit for your career.</p>
    </div>
    <!-- Add the horizontal line here -->
    <hr class="horizontal-line">
    <button class="careers-accordion">TMU's Commitment to Academic Excellence:<span class="icon">+</span></button>
    <div class="panel">
        <ul class="m-ol-list ps-5 mb-1">
            <li>Teerthanker Mahaveer University (TMU) ranks 4th in patent filings, with over 1700 patents filed, 25 granted, and 347 published.</li>
            <li>TMU has published over 6,000 research papers in the past 5 years, demonstrating a strong commitment to advancing knowledge and innovation.</li>
            <li>The TMU Business Incubation Centre has supported 15 startups in just 2 years, fostering a culture of innovation and entrepreneurship.</li>
            <li>TMU earned a 4-star rating for its Institution Innovation Council, highlighting its success in promoting innovation and creativity.</li>
            <li>TMU has secured significant grants from the DST, the Indian Government, and the MSME, reflecting its contributions to innovation and skill development.</li>
        </ul>
        <p class="text-justify">TMU is at the forefront of creating a self-reliant India through:</p>
        <h3 class="tmu-text-primary fs-16 mb-0"><span></span><span></span></h3>
        <p class="text-justify"><b>Startup Hub:</b> TMU is creating a hub for startups. It fosters entrepreneurship and innovation.</p>
        <ul class="m-ol-list ps-5 mb-1">
            <li>TMU's Entrepreneurship Development Cell empowers students. It teaches them to create jobs, not just seek them</li>
            <li>TMU is aligning with National Education Policy (NEP) 2020. It is doing this to make sure its education system matches the needs of industry and society.</li>
        </ul>
    </div>
    <!-- Add the horizontal line here -->
    <hr class="horizontal-line">
    <button class="careers-accordion"> Top 10 Careers in Management: <span class="icon">+</span></button>
    <div class="panel">
        <ul class="m-ol-list ps-5 mb-1">
            <li><strong>Marketing Manager:</strong> Responsible for developing and executing marketing strategies to promote products or services.</li>
            <li><strong>Financial Analyst:</strong> Analyzes financial data to provide insights and recommendations for investment decisions.</li>
            <li><strong>Human Resources Manager:</strong> Manages hiring, training, and developing employees within an organization.</li>
            <li><strong>Operations Manager:</strong> Oversees a company's day-to-day operations to ensure efficiency and productivity.</li>
            <li><strong>Management Consultant:</strong> Provides expert advice to organizations on improving their performance and efficiency.</li>
            <li><strong>Sales Manager:</strong> Leads a team of sales representatives with the goal of hitting sales targets and maximizing revenue.</li>
            <li><strong>Project Manager:</strong> Plans, executes, and manages projects from start to finish, ensuring they are completed on time and within budget.</li>
            <li><strong>Business Development Manager:</strong> Identifies new business opportunities and builds relationships with potential clients or partners.</li>
            <li><strong>Supply Chain Manager:</strong> Manages the flow of goods and services from the supplier to the consumer, aiming to improve the supply chain process.</li>
            <li><strong>Entrepreneur:</strong> Starts and manages their own business, taking on the risks and rewards of entrepreneurship.</li>
        </ul>

    </div>
    <!-- Add the horizontal line here -->
    <hr class="horizontal-line">
    <button class="careers-accordion">Campus Life at TMIMT College of Management <span class="icon">+</span></button>
    <div class="panel">
        <ul style="list-style-type:decimal;">
            <li><strong>Academic Excellence:</strong>
                <ul class="m-ol-list ps-5 mb-1">
                    <li>TMIMT boasts a conducive learning environment where academic excellence is paramount. Faculty members are experienced and committed to nurturing students' curiosity and critical thinking skills.</li>
                    <li>The college offers many academic programs with diverse specializations, allowing students to pursue their interests and career goals.</li>
                </ul>
            </li>
            <li><strong>Extracurricular Activities:</strong>
                <ul class="m-ol-list ps-5 mb-1">
                    <li>Beyond academics, TMIMT encourages students to participate in extracurricular activities, including sports tournaments, cultural events, and service projects.</li>
                    <li>These activities help students develop leadership, teamwork, and time management skills, enhancing their overall college experience.</li>
                </ul>
            </li>
            <li><strong>Student Clubs and Organizations:</strong>
                <ul class="m-ol-list ps-5 mb-1">
                    <li>TMIMT provides a platform for students to explore their interests and passions through various clubs and organizations.</li>
                    <li>Students can join clubs focused on entrepreneurship, marketing, social activism, and more, making meaningful contributions to the college community.</li>
                </ul>
            </li>
            <li><strong>Networking Opportunities:</strong>
                <ul class="m-ol-list ps-5 mb-1">
                    <li>TMIMT fosters a culture of networking and collaboration, offering numerous opportunities to connect with industry professionals, alumni, and fellow students.</li>
                    <li>Students can gain insights, expand their network, and explore career options through these networking events.</li>
                </ul>
            </li>
            <li><strong>Cultural Diversity:</strong>
                <ul class="m-ol-list ps-5 mb-1">
                    <li>TMIMT celebrates diversity and inclusivity, with students coming from various backgrounds and cultures to create a vibrant and welcoming campus environment.</li>
                    <li>Cultural events, festivals, and international student exchanges promote cross-cultural understanding and enrich the college experience.</li>
                </ul>
            </li>
            <li><strong>Student Support Services:</strong>
                <ul class="m-ol-list ps-5 mb-1">
                    <li>TMIMT offers a range of student support services to ensure that every student has the resources needed to thrive academically, personally, and professionally.</li>
                    <li>Support services include academic advising, career counseling, mental health support, and disability services, reflecting the college's commitment to students' overall well-being.</li>
                </ul>
            </li>
        </ul>
    </div>
    <hr class="horizontal-line">
    <button class="careers-accordion"> Facilities Available at TMIMT College of Management <span class="icon">+</span></button>
    <div class="panel">
        <ul style="list-style-type:decimal;">
            <li><strong>Modern Classrooms:</strong>
                <ul class="m-ol-list ps-5 mb-1">
                    <li>TMIMT features modern classrooms equipped with multimedia technology, interactive whiteboards, and ergonomic seating, creating an ideal learning environment.</li>
                </ul>
            </li>
            <li><strong>Library and Resource Center:</strong>
                <ul class="m-ol-list ps-5 mb-1">
                    <li>The college library has a vast collection of books, journals, and research papers, along with digital resources to support academic and research needs.</li>
                    <li>Access to online databases, e-journals, and research portals enriches students' learning and academic pursuits.</li>
                </ul>
            </li>
            <li><strong>Computer Labs:</strong>
                <ul class="m-ol-list ps-5 mb-1">
                    <li>Dedicated computer labs are equipped with the latest hardware, software, and fast internet to facilitate hands-on experience with industry-standard tools.</li>
                    <li>These labs enable students to conduct research, complete assignments, and work on projects efficiently.</li>
                </ul>
            </li>
            <li><strong>Sports and Recreation Facilities:</strong>
                <ul class="m-ol-list ps-5 mb-1">
                    <li>The campus includes sports facilities such as basketball and volleyball courts, cricket grounds, and indoor complexes.</li>
                    <li>Sports tournaments, fitness classes, and recreational activities promote health and build teamwork and camaraderie among students.</li>
                </ul>
            </li>
            <li><strong>Hostel Accommodation:</strong>
                <ul class="m-ol-list ps-5 mb-1">
                    <li>On-campus hostel accommodation is available for both male and female students, ensuring a safe, comfortable, and well-equipped living environment.</li>
                    <li>Hostels feature modern amenities such as spacious rooms, Wi-Fi connectivity, study areas, and recreational facilities.</li>
                </ul>
            </li>
            <li><strong>Cafeteria and Dining Facilities:</strong>
                <ul class="m-ol-list ps-5 mb-1">
                    <li>The cafeteria serves a variety of healthy and hygienic meals, snacks, and drinks to match students' dietary preferences and tastes.</li>
                    <li>Dining facilities offer a relaxed, social space where students can unwind and refuel between classes.</li>
                </ul>
            </li>
            <li><strong>Medical and Health Services:</strong>
                <ul class="m-ol-list ps-5 mb-1">
                    <li>TMIMT provides access to medical facilities, first aid services, and counseling on campus, valuing the health and well-being of its students.</li>
                    <li>Qualified medical professionals and counselors are available to address health concerns, promote wellness, and provide timely assistance.</li>
                </ul>
            </li>
            <li><strong>Transportation Services:</strong>
                <ul class="m-ol-list ps-5 mb-1">
                    <li>The college offers transportation services for students commuting from nearby areas, ensuring convenient and safe travel to and from campus.</li>
                    <li>Shuttle buses and vans operate on set routes to provide a hassle-free commuting experience.</li>
                </ul>
            </li>
            <li><strong>Wi-Fi Connectivity:</strong>
                <ul class="m-ol-list ps-5 mb-1">
                    <li>Campus-wide Wi-Fi allows students to access online resources, join virtual classes, and stay connected with peers and faculty.</li>
                </ul>
            </li>
            <li><strong>Study Areas and Collaborative Spaces:</strong>
                <ul class="m-ol-list ps-5 mb-1">
                    <li>The campus includes study areas, study rooms, and spaces for group work, enabling students to work on projects, prepare for exams, and engage in collaborative learning.</li>
                    <li>The spaces are designed with comfortable seating, ample lighting, and a quiet environment to support focused study and collaboration.</li>
                </ul>
            </li>
        </ul>

    </div>

    <hr class="horizontal-line">
    <button class="careers-accordion"> Conclusion <span class="icon">+</span></button>
    <div class="panel">
        <p class="text-justify mb-0">At TMIMT College of Management, students get top education. They also have access to many facilities and opportunities. These help them enrich their college experience. TMIMT offers academic excellence and extracurricular activities. It also has modern facilities and student support services. The school is committed to providing a holistic learning environment. It prepares students for success in their academic, professional, and personal lives.</p>
        <p class="text-justify mb-0"></p>
        <p class="text-justify mb-0"></p>
    </div>

    <hr class="horizontal-line">
    <button class="careers-accordion">FAQs<span class="icon">+</span></button>
    <div class="panel">
        <p class="text-justify mb-0"><strong>Q: Is TMIMT College of Management affiliated with any university?</strong></p>
        <p class="text-justify mb-0"><strong>Ans:</strong> Yes, TMIMT is a part of Teerthanker Mahaveer University (TMU), which is UGC-approved and NAAC-accredited.</p>

        <p class="text-justify mb-0"><strong>Q: Does TMIMT offer hostel facilities for students?</strong></p>
        <p class="text-justify mb-0"><strong>Ans:</strong> Absolutely! TMU provides comfortable on-campus accommodation facilities for students, ensuring a safe and conducive living environment. </p>
        </p>
    </div>
    <hr class="horizontal-line">
</div>

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
                cd_id: 8,
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
                cd_id: 8,
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