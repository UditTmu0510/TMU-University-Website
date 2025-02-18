@extends('layouts.university.colleges.engineering_home_without_sidebar')
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
                    <h1 class=" mt-5 mb-5 banner-main-heading">Welcome to  <span style="font-weight:700!important;">the Faculty of </span> Engineering </h1>
                    <a href="https://admissions.tmu.ac.in/" target="_blank" class="tmu-btn btn-1 me-4 py-1 px-3 py-xl-2 px-xl-4">Apply Now</a>
                </div>
                <div class="col-12 col-md-6">
                    <div class="pe-lg-4 position-relative p-0">
                        <div style="z-index: 2;">
                            <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/iXHRmCyHszY?si=BcZ5NOfT-V8ECc6z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="z-index: 2; margin:0;"></iframe> -->
                            <img src="{{asset('assets/img/banner/engineering/engineering-banner.webp')}}" alt="" class="p-0 m-0">
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
                            <span> Affiliated</span>
                            <br>
                            <span class="d-block pt-1">Engineering Council of India </span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 px-1">
                    <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                        <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                            <span>NBA </span>
                            <br>
                            <span class="d-block pt-1">Accredited BTech CSE</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 px-1">
                    <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                        <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                            <span>82% </span>
                            <br>
                            <span class="d-block pt-1">Placement Rate</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 px-1">
                    <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                        <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                            <span>CRC</span>
                            <br>
                            <span class="d-block pt-1">Dedicated Placement Cell</span>
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
                                        <span> Affiliated</span>
                                        <br>
                                        <span class="d-block pt-1">Engineering Council of India </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                                    <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                                        <span>NBA </span>
                                        <br>
                                        <span class="d-block pt-1">Accredited BTech CSE</span>
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
                                        <span>82% </span>
                                        <br>
                                        <span class="d-block pt-1">Placement Rate</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                                    <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                                        <span>CRC</span>
                                        <br>
                                        <span class="d-block pt-1">Dedicated Placement Cell</span>
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
                <h2 class="college-main-heading">Teerthanker Mahaveer Faculty of Engineering (FOE),</h2>
                <div class="row">
                    <div class="col-12 px-2 px-md-5">
                        <p style="text-align: justify;" class="mb-4">Welcome to the Faculty of Engineering (FOE) - where brilliance meets innovation. As an AICTE approved institute, we nurture bright minds in Engineering, Technology, and Sciences. Our B.Tech CS&E programme is accredited (tier-1 category) by the National Board of Accreditation (NBA). 100% Placement assistance, and Global exposure, makes us the <b>Top Private Engineering College in UP.</b></p>

                        <a href="{{route('engineering.about.us')}}" class="tmu-btn btn-1 py-2">Know More!</a>
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
                        <li>Affiliated with UGC, AICTE, and NBA.</li>
                        <li>IEEE received activities based on the Branch Incentive Award 2022”.</li>
                        <li>We ranked 71st among the top Government and Private Engineering Colleges in India by "DATAQUEST-2022".</li>
                    </ul>
                    <div class="read-more-content mt-1">
                        <ul class="m-ol-list ps-4">
                            <li>Ranked 14th among Engineering Colleges of Excellence in India by "CSR-GHRDC Engineering College Ranking-2021".</li>
                            <li>Ranked 10th among Engineering Colleges in Uttar Pradesh by "CSR-GHRDC Engineering College Ranking-2021”.</li>
                            <li>Ranked 84th in Top Engineering Colleges, India by “DataQuest-2021”.</li>
                            <li>Ranked 58th in Top Engineering Colleges in all over India by “Digital Learning-2021”.</li>
                        </ul>
                    </div>
                    <a href="javascript:void(0);" class="read-more ms-2 mt-1" title="Read More">Read More</a>
                </div>
                <div class="tab-pane fade" id="Tab2" role="tabpanel" aria-labelledby="tab2-tab">
                    <h3>Placement/Internship</h3>
                    <p>Get ready to explore Limitless Possibilities at FOE College!.</p>
                    <ul class="m-ol-list ps-4 mb-0">
                        <li><strong>Internship Opportunities: </Strong>Gain practical experience and enhance your skills through exclusive internship programmes offered.</li>
                        <li><strong>Connect with Renowned Companies: </Strong>Work with companies like L&T, Jubilant, Ultra Tech Cement, HCL, Wipro, TCS, and many more. They visit TMU, opening doors to remarkable placement opportunities.</li>
                    </ul>
                    <div class="read-more-content mt-1">
                        <ul class="m-ol-list ps-4">
                            <li><strong>Dedicated Corporate Resource Centre (CRC): </Strong>Our CRC tirelessly works to generate placements and training opportunities throughout the year, ensuring you are well-prepared for your career.</li>
                            <li><strong>89% Placement Track Record: </Strong>We take pride in our exceptional placement record, striving to assist all our students in securing the best available jobs in their respective fields.</li>
                        </ul>
                        <p>Join FOE College, the epitome of excellence and the best private engineering college in Uttar Pradesh. Unleash your potential and build a rewarding future with us!</p>
                    </div>
                    <a href="javascript:void(0);" class="read-more ms-2 mt-1" title="Read More">Read More</a>
                </div>
                <div class="tab-pane fade" id="Tab3" role="tabpanel" aria-labelledby="tab3-tab">
                    <h3>Curriculum</h3>
                    <p>Join FOE College, the epitome of excellence and the best private engineering college in Uttar Pradesh. Unleash your potential and build a rewarding future with us!</p>
                    <ul class="m-ol-list ps-4 mb-0">
                        <li><strong>Experience Skill Enhancement: </Strong>Our curriculum encompasses value-added courses and hands-on lab work, aligning with industry trends to enhance your skills and complement your learning journey.</li>
                        <li><strong>Future-Ready Engineering Education: </Strong>We prepare you to thrive as competent engineers in the ever-evolving landscape, equipping you with the necessary tech skills to excel in your career.</li>
                    </ul>
                    <div class="read-more-content mt-1">
                        <ul class="m-ol-list ps-4">
                            <li><strong>Professional Industry Connections: </Strong> Benefit from our strong ties, as we provide opportunities to connect with experts through workshops, seminars, and guest lectures. We have two Centres of Excellence, namely</li>
                            <ul class="m-ol-list ps-4">
                                <li><strong>Centre of Excellence: </strong>Ultra-Tech. It aims to equip the civil engineering students with the ultra-modern equipment and industry relevant knowledge.</li>
                            </ul>
                        </ul>
                        <p>Join us at our prestigious institution, where your engineering aspirations will flourish, paving the way for a successful future. Together, let's make your mark in the engineering world! We are proud to be the best private engineering college in UP.</p>
                    </div>
                    <a href="javascript:void(0);" class="read-more ms-2 mt-1" title="Read More">Read More</a>
                </div>
                <div class="tab-pane fade" id="Tab4" role="tabpanel" aria-labelledby="tab4-tab">
                    <h3>Infrastructure</h3>
                    <ul class="m-ol-list ps-4 mb-0">
                        <li><strong>State-of-the-Art Labs:</strong> The Faculty of Engineering is equipped with advanced facilities, enabling students to engage in practical learning and hands-on experimentation.</li>
                        <li><strong>Industry-Academia Collaborations:</strong> The Engineering college enjoys strong partnerships with esteemed organisations like NVIDIA, BSNL, TCS-iON, Voltrans, and more. These collaborations foster research, development, and technology incubation, providing valuable opportunities for students.</li>
                    </ul>
                    <div class="read-more-content mt-1">
                        <ul class="m-ol-list ps-4">
                            <li><strong>Leading University Partnerships:</strong> We are proud to be associated with renowned universities and institutions such as IIT Kanpur, IIT Bombay, and Spoken Tutorial IITB. These partnerships enhance our students' exposure to world-class resources and cutting-edge technologies.</li>
                            <li><strong>Live Project Opportunities:</strong> We encourage students to undertake live projects under the mentorship of experienced professionals. This invaluable experience enhances students' practical skills and prepares them for real-world challenges.</li>
                        </ul>
                        <p style="text-align:justify">Experience a transformative engineering education that combines industry expertise, advanced infrastructure, and practical exposure. Join us at the top private engineering college in Moradabad.</p>
                    </div>
                    <a href="javascript:void(0);" class="read-more ms-2 mt-1" title="Read More">Read More</a>
                </div>
            </div>
        </div>



        <!-- <section id="content">
            <div class="content-wrap py-0" style="background-color: #001055;">
                <main1>
                    <div>
                        <p class="tmimt-awards-heading"><span>Awards <span class="symbol">&</span> Excellence</span>
                    </div>
                    <div class="swiper swiper-management-awards">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide swiper-slide--one"> -->

        <!-- <div>
                                                <a href="https://en.wikipedia.org/wiki/Octopus" target="_blank">explore</a>
                                            </div> -->
        <!-- </div>
                            <div class="swiper-slide swiper-slide--two"> -->

        <!-- <div>
                                                <a href="https://en.wikipedia.org/wiki/Octopus" target="_blank">explore</a>
                                            </div> -->
        <!-- </div>
                            <div class="swiper-slide swiper-slide--three"> -->
        <!-- <div>
                                                <a href="https://en.wikipedia.org/wiki/Seahorse" target="_blank">explore</a>
                                            </div> -->
        <!-- </div>

                            <div class="swiper-slide swiper-slide--four"> -->

        <!-- <div>
                                                <a href="https://en.wikipedia.org/wiki/Octopus" target="_blank">explore</a>
                                            </div> -->
        <!-- </div>

                            <div class="swiper-slide swiper-slide--seven"> -->

        <!-- <div>
                                                <a href="https://en.wikipedia.org/wiki/Shark" target="_blank">explore</a>
                                            </div> -->
        <!-- </div>
                            <div class="swiper-slide swiper-slide--six"> -->

        <!-- <div>
                                                <a href="https://en.wikipedia.org/wiki/Octopus" target="_blank">explore</a>
                                            </div> -->
        <!-- </div>

                            <div class="swiper-slide swiper-slide--five"> -->

        <!-- <div>
                                                <a href="https://en.wikipedia.org/wiki/Dolphin" target="_blank">explore</a>
                                            </div> -->
        <!-- </div>
                        </div> -->
        <!-- Add Pagination -->
        <!-- <div class="swiper-pagination"></div>
                    </div>
                    </main>
            </div>
        </section> -->


        <!-- Section for collaborators -->
        <!-- <div class="container industry-collaborators mt-5">
            <h2 class="text-center mb-0" style="font-weight:700; color:#001055">Top Industry Academic Partners and <span style="color:#FF7A00"> Collaborative Programmes at TMU</span></h2> -->

        <!-- Collaborators Carousel -->
        <!-- <div class="section bg-transparent mt-0 mb-5">

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
 -->



        <!-- Collab Modal -->
        <!-- <div id="collabModal" class="tmu-modal">
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
        </div> -->



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
                            <img class="collab-card-img" src="{{asset('assets/img/collaboration/engineering/3.png')}}"
                                alt="TMU collaboration with united resourcing">

                            <div class="card-body">
                                <h3 class="collab-card-title">TCS iON - B.Tech (CSE) Data Science</h3>
                                <p class="collab-card-text ">In this collaborative program, students receive training from industry experts at TCS iON, gaining valuable insights into real-world industry practices and acquiring the skills needed for better employment opportunities.
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
                            <img class="collab-card-img" src="{{asset('assets/img/collaboration/engineering/2.png')}}"
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
                            <img class="collab-card-img" src="{{asset('assets/img/collaboration/engineering/1.png')}}"
                                alt="TMU collaboration with safeducate">
                            <div class="card-body">
                                <h3 class="collab-card-title">M.Sc. In collaboration with Aivancity, France</h3>
                                <p class="collab-card-text">This collaborative program provides students with training from TMU trainers in the first year, followed by expert training from Aivancity, France, in the second year.</p>
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


                    <section class="marquee-content more-content">
                        @foreach($recruiters as $recruiter)
                        <div class="marquee-block">
                            <a href="#"><img src="{{asset($recruiter->recruiter_image_path)}}" alt="{{$recruiter->alt_tag}}"></a>
                        </div>
                        @endforeach
                    </section>
                    <section class="marquee-content more-content">
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


        <section>
            <div class="container mb-5 mt-5">
                <h2 Class="tmu-text-primary text-center"><span> Frequently Asked </span><span> Questions</span></h2>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-body">
                            <hr class="horizontal-line">
                            <button class="careers-accordion"> Faculty of Engineering, among the top colleges in India for Engineering<span
                                    class="icon">+</span></button>
                            <div class="panel active">
                                <p class="mb-2">Welcome to the Faculty of Engineering (FOE) - where brilliance meets innovation. As an AICTE-approved institute, we nurture bright minds in Engineering, Technology, and Sciences. Our B.Tech in CS&E is accredited under the tier-1 category by the National Board of Accreditation (NBA). We provide 100% placement assistance and foster global exposure.</p>
                            </div>
                            <hr class="horizontal-line">

                            <button class="careers-accordion"> Why TMU is the Best Choice for You <span class="icon">+</span></button>
                            <div class="panel">
                                <h3 class="tmu-text-primary mb-1 fs-16"><span>🏆 UGC-Approved with </span><span> NAAC-A Accreditation</span></h3>
                                <p class="mb-2">TMU’s Faculty of Engineering is recognized for its high academic standards, ensuring you receive an education that meets global benchmarks.</p>
                                <h3 class="tmu-text-primary mb-1 fs-16"><span> 👩‍🏫 Experiential Learning by </span><span> Highly Qualified Faculties </span></h3>
                                <p class="mb-2">Our expert faculty members are dedicated to providing practical, hands-on knowledge through innovative teaching methods, extensive research opportunities, and industry collaborations.</p>
                                <h3 class="tmu-text-primary mb-1 fs-16"><span>🌐 Strong Industry </span><span> Connections</span></h3>
                                <p class="mb-2">We have established partnerships with top companies like Tata Consultancy Services (TCS), Larsen & Toubro (L&T), Bosch, and many more. These connections ensure excellent placement opportunities and real-world exposure for our students.</p>
                                <h3 class="tmu-text-primary mb-1 fs-16"><span>💼 100% Placement </span><span> Assistance </span></h3>
                                <p class="mb-2">With an outstanding track record, we provide comprehensive placement support through our dedicated Corporate Resource Centre (CRC), helping you secure your dream job in top-tier companies.</p>
                                <h3 class="tmu-text-primary mb-1 fs-16"><span>📚 Academic </span><span> Collaborations </span></h3>
                                <p class="mb-2">Collaborate with prestigious institutions like IIT Kharagpur and benefit from academic partnerships with Extramarks, which enhance your learning experience with world-class resources and cutting-edge technologies.</p>
                                <h3 class="tmu-text-primary mb-1 fs-16"><span>🏠 On-Campus </span><span> Hostel Facilities</span></h3>
                                <p class="mb-2">Enjoy comfortable, secure accommodation on campus, making your stay convenient and fostering a conducive learning environment.</p>
                                <h3 class="tmu-text-primary mb-1 fs-16"><span>💰 Scholarship </span><span> Assistance</span></h3>
                                <p class="mb-2">We offer 100% scholarship assistance to help you achieve your academic goals without financial worries, ensuring that your focus remains on your education and personal development.</p>
                            </div>
                            <hr class="horizontal-line">
                            <button class="careers-accordion"> Top Programmes Offered with Diverse Specialisations <span class="icon">+</span></button>
                            <div class="panel">
                                <ul class="m-ol-list ps-4 mb-1">
                                    <li>Polytechnic</li>
                                    <li>B.Tech</li>
                                    <li>M.Tech</li>
                                    <li>Ph.D.</li>
                                </ul>
                            </div>
                            <hr class="horizontal-line">
                            <button class="careers-accordion">The Essence of Our Campus <span class="icon">+</span></button>
                            <div class="panel">
                                <h3 class="tmu-text-primary mb-1 fs-16"><span>Learn in Modern Classrooms </span><span>and Engineering Labs</span></h3>
                                <p class="mb-2">Our state-of-the-art facilities provide interactive and practical learning experiences, equipped with advanced technology and resources to support your academic journey.</p>
                                <h3 class="tmu-text-primary mb-1 fs-16"><span>Participate in Engineering Clubs </span><span>and Sports Championships</span></h3>
                                <p class="mb-2">Engage in various engineering clubs and sports activities to enhance your overall development, leadership skills, and teamwork abilities.</p>
                                <h3 class="tmu-text-primary mb-1 fs-16"><span>Socialize at the Fitness Centre, Cafeterias,</span><span> and Shopping Stores</span></h3>
                                <p class="mb-2">Comprehensive amenities are available to cater to your lifestyle and well-being, ensuring a balanced and fulfilling campus life.</p>
                                <h3 class="tmu-text-primary mb-1 fs-16"><span>Engage in Engineering Events, Tech Fests, </span><span>and Workshops</span></h3>
                                <p class="mb-2">Participate in events that foster innovation and creativity, such as tech fests, workshops, and seminars led by industry experts and academic leaders.</p>
                            </div>
                            <hr class="horizontal-line">
                            <button class="careers-accordion">Explore Top-Notch Placement Opportunities<span class="icon">+</span></button>
                            <div class="panel">
                                <h3 class="tmu-text-primary mb-1 fs-16"><span>Global Career </span><span> Prospects</span></h3>
                                <p class="mb-2">Our strong industry connections and international collaborations open doors to global internships and placement opportunities, providing you with a competitive edge in the job market.</p>
                                <h3 class="tmu-text-primary mb-1 fs-16"><span>Industry Collaborations and </span><span>Real-World Exposure</span></h3>
                                <p class="mb-2">Gain invaluable insights through our industry affiliations with leading organisations, which offer opportunities for internships, live projects, and collaborative research</p>
                                <h3 class="tmu-text-primary mb-1 fs-16"><span>Dedicated Corporate </span><span> Resource Centre (CRC)</span></h3>
                                <p class="mb-2">Our CRC works tirelessly to generate placements and training opportunities throughout the year, ensuring you are well-prepared for your career and have access to top employers.</p>
                                <h3 class="tmu-text-primary mb-1 fs-16"><span> Remarkable Placement </span><span>Record</span></h3>
                                <p class="mb-2">With an 89% placement track record, we take pride in our exceptional placement services, striving to assist all our students in securing the best available jobs in their respective fields.</p>

                            </div>
                            <hr class="horizontal-line">
                            <button class="careers-accordion">What Sets TMU Apart?<span class="icon">+</span></button>
                            <div class="panel">
                                <ul class="m-ol-list ps-4 mb-1">
                                    <li>1st Rank in IEEE Students Branch Activity (2022-23)</li>
                                    <li>Ranked 71 among top Government & Private Engineering Colleges in India by DATAQUEST (2022)</li>
                                    <li>Ranked 14 in Engineering Colleges of Excellence, India by CSR-GHRDC (2021)</li>
                                    <li>Ranked 10 in Engineering Colleges in Uttar Pradesh by CSR-GHRDC (2021)</li>
                                    <li>Ranked 84 in Top Engineering Colleges in India by DataQuest (2021)</li>
                                    <li>Ranked 58 in Top Engineering Colleges in India by Digital Learning (2021)</li>
                                </ul>

                                <h3 class="tmu-text-primary mb-1 fs-16"><span>State-of-the-Art </span><span> Labs</span></h3>
                                <p class="mb-2">Our engineering labs are equipped with advanced facilities, enabling students to engage in practical learning and hands-on experimentation. These labs are crucial for developing practical skills and fostering innovation.</p>
                                <h3 class="tmu-text-primary mb-1 fs-16"><span>Industry-Academia </span><span>Collaborations</h3>
                                <p class="mb-2">We have strong partnerships with esteemed organisations like NVIDIA, BSNL, TCS-iON, and Voltrans, fostering research, development, and technology incubation. These collaborations provide valuable opportunities for students to work on cutting-edge projects and gain real-world experience.</p>
                                <h3 class="tmu-text-primary mb-1 fs-16"><span>Leading University </span><span> Partnerships</h3>
                                <p class="mb-2">Collaborations with renowned institutions such as IIT Kanpur, IIT Bombay, and Spoken Tutorial IITB enhance our students' exposure to world-class resources and cutting-edge technologies, ensuring they stay at the forefront of innovation.</p>
                                <h3 class="tmu-text-primary mb-1 fs-16"><span>Live Project </span><span> Opportunities</span></h3>
                                <p class="mb-2">We encourage students to undertake live projects under the mentorship of experienced professionals. This invaluable experience enhances students' practical skills and prepares them for real-world challenges, making them industry-ready.</p>
                                <h3 class="tmu-text-primary mb-1 fs-16"><span>Life at TMU</span></h3>
                                <p class="tmu-text-primary mb-1">&nbsp;Academic </span><span> Excellence</span></p>
                                <p>TMU&rsquo;s Faculty of Engineering is dedicated to providing a rigorous academic curriculum combined with practical training, ensuring students are well-equipped to face the challenges of the engineering world.</p>
                                <h3 class="tmu-text-primary mb-1 fs-16"><span>Vibrant Campus </span><span> Life</span></h3>
                                <p>Our campus is a hub of activities, from academic clubs and sports championships to cultural events and tech fests. Students have ample opportunities to explore their interests and develop holistically.</p>
                                <h3 class="tmu-text-primary mb-1 fs-16"><span>Comfortable </span><span> Accommodation</span></h3>
                                <p>On-campus hostel facilities offer a safe and comfortable living environment, complete with modern amenities. Our hostels are designed to provide a home-away-from-home experience, fostering a sense of community among students.</p>
                                <h3 class="tmu-text-primary mb-1 fs-16"><span>Health and </span><span> Wellness</span></h3>
                                <p class="mb-2">The fitness centre, cafeterias, and shopping stores ensure that students have access to all necessary amenities, promoting a balanced lifestyle that supports both academic and personal well-being.</p>
                            </div>
                            <hr class="horizontal-line">
                            <button class="careers-accordion">Top 10 Careers in Engineering<span class="icon">+</span></button>
                            <div class="panel">
                                <h3 class="tmu-text-primary mb-1 fs-16"><span>1. Software </span><span> Engineer:</span></h3>
                                <p class="mb-2">Design, develop, and maintain software systems. Demand is high in tech companies, startups, and across various industries.</p>
                                <h3 class="tmu-text-primary mb-1 fs-16"><span>2. Civil </span><span> Engineer: </span></h3>
                                <p class="mb-2">Plan, design, and oversee construction projects such as roads, buildings, and infrastructure. Essential for urban development and public works.</p>
                                <h3 class="tmu-text-primary mb-1 fs-16"><span>3. Mechanical </span><span> Engineer: </span></h3>
                                <p class="mb-2">Work on the design, production, and operation of machinery. Opportunities in automotive, manufacturing, and aerospace industries.</p>
                                <h3 class="tmu-text-primary mb-1 fs-16"><span>4. Electrical </span><span> Engineer: </span></h3>
                                <p class="mb-2">Develop and maintain electrical systems and components. Careers in power generation, electronics, and telecommunication sectors.</p>
                                <h3 class="tmu-text-primary mb-1 fs-16"><span>5. Chemical </span><span> Engineer:</span></h3>
                                <p class="mb-2">Apply principles of chemistry and biology to solve problems involving chemicals, fuel, drugs, and food. Roles in pharmaceuticals, energy, and materials.</p>
                                <h3 class="tmu-text-primary mb-1 fs-16"><span>6. Aerospace </span><span> Engineer:</span></h3>
                                <p class="mb-2">Design and develop aircraft and spacecraft. Careers in defence, aviation, and space exploration.</p>
                                <h3 class="tmu-text-primary mb-1 fs-16"><span>7. Biomedical </span><span> Engineer: </span></h3>
                                <p class="mb-2">Combine engineering principles with medical sciences to design and create equipment, devices, and software used in healthcare.</p>
                                <h3 class="tmu-text-primary mb-1 fs-16"><span>8. Environmental </span><span> Engineer: </span></h3>
                                <p class="mb-2">Use principles of engineering, soil science, biology, and chemistry to develop solutions to environmental problems.</p>
                                <h3 class="tmu-text-primary mb-1 fs-16"><span>9. Data </span><span> Engineer: </span></h3>
                                <p class="mb-2">Design and optimise systems for collecting, storing, and analysing data. Crucial in tech companies, finance, and research.</p>
                                <h3 class="tmu-text-primary mb-1 fs-16"><span>10. Robotics </span><span> Engineer:</span></h3>
                                <p class="mb-2"> Design, build, and maintain robots. Opportunities in manufacturing, healthcare, and research.</p>
                            </div>
                            <hr class="horizontal-line">
                            <button class="careers-accordion">FAQs:<span class="icon">+</span></button>
                            <div class="panel">
                                <h3 class="tmu-text-primary mb-1 fs-16"><span>1. What programs are offered by TMU's Faculty of Engineering?</span></h3>
                                <p class="mb-2">We offer a range of programs including Polytechnic, B.Tech, M.Tech, and Ph.D. with diverse specialisations tailored to meet industry demands.</p>
                                <h3 class="tmu-text-primary mb-1 fs-16"><span> 2. How is the placement assistance at TMU?</span></h3>
                                <p class="mb-2">We provide 100% placement assistance with an excellent track record. Our Corporate Resource Centre (CRC) works year-round to secure placement and training opportunities for our students, ensuring they are well-prepared for their careers.</p>
                                <h3 class="tmu-text-primary mb-1 fs-16"><span> 3. What kind of industry connections does TMU have?</span></h3>
                                <p class="mb-2">We have strong connections with top companies like TCS, L&T, Bosch, and many more. These partnerships facilitate excellent placement opportunities and provide students with invaluable industry exposure.</p>
                                <h3 class="tmu-text-primary mb-1 fs-16"><span> 4. Are there any scholarships available?</span></h3>
                                <p class="mb-2">Yes, we offer 100% scholarship assistance to help students achieve their academic goals without financial worries. Our scholarships are designed to support meritorious and deserving students.</p>
                                <h3 class="tmu-text-primary mb-1 fs-16"><span> 5. What facilities are available on campus?</span></h3>
                                <p class="mb-2">Our campus includes modern classrooms, state-of-the-art labs, engineering clubs, sports championships, a fitness centre, cafeterias, shopping stores, and comfortable hostel facilities. These amenities ensure a balanced and enriching campus life.</p>
                            </div>
                            <hr class="horizontal-line">
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
                    cd_id: 11,
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
                    cd_id: 11,
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