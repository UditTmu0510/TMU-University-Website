@extends('layouts.university.colleges.finearts_home_without_sidebar')
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
                    <h1 class=" mt-5 mb-5 d-none d-md-block  banner-main-heading">Welcome to the <br> <span style="font-weight:700!important;">Best Fine Arts</span> College in UP</h1>
                    <h1 class=" mt-5 mb-3 d-block d-md-none" style="color:#001055; text-transform: capitalize; font-weight:700!important; font-size:24px">Welcome to the <span>Best Fine Arts</span> College in UP,</h1>
                    <a href="https://admissions.tmu.ac.in/" target="_blank" class="tmu-btn btn-2 py-1 px-3 py-xl-2 px-xl-4">Apply Now</a>
                </div>
                <div class="col-12 col-md-6">
                    <div class="pe-lg-4 position-relative p-0">
                        <div style="z-index: 2;">
                            <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/iXHRmCyHszY?si=BcZ5NOfT-V8ECc6z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="z-index: 2; margin:0;"></iframe> -->
                            <img src="{{asset('/assets/img/banner/fine_arts/finearts-banner.webp')}}" alt="" class="p-0 m-0">
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
                            <span>Well-equipped </span>
                            <br>
                            <span class="d-block pt-1">Art Studios</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 px-1">
                    <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                        <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                            <span>Internship </span>
                            <br>
                            <span class="d-block pt-1">Opportunities</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 px-1">
                    <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                        <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                            <span>Expert </span>
                            <br>
                            <span class="d-block pt-1">Faculty</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 px-1">
                    <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                        <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                            <span>industrial</span>
                            <br>
                            <span class="d-block pt-1">Visits & Exhibitions</span>
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
                                        <span>Well-equipped </span>
                                        <br>
                                        <span class="d-block pt-1">Art Studios</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                                    <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                                        <span>Internship </span>
                                        <br>
                                        <span class="d-block pt-1">Opportunities</span>
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
                                        <span>Expert </span>
                                        <br>
                                        <span class="d-block pt-1">Faculty</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                                    <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                                        <span>industrial</span>
                                        <br>
                                        <span class="d-block pt-1">Visits & Exhibitions</span>
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
                <h2 class="college-main-heading">College of Fine Arts, among the top Colleges for Fine Arts Courses</h2>
                <div class="row">
                    <div class="col-12 px-2 px-md-5"> 
                        <p style="text-align: justify;">College of Fine Arts established in 2011 at Teerthanker Mahaveer University (TMU), is renowned for its exceptional offerings in fine arts education.</p>
                        <div class="read-more-content mt-0">
                            <p style="text-align: justify;"> Whether you're aspiring to delve into the intricacies of visual arts, performing arts, or pursue a career in art management, TMU provides a nurturing environment enriched with academic excellence and practical learning experiences.</p>
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
                    <ul class="m-ol-list ps-4">
                        <li>
                            <p class="p-0 m-0">Ravindra Dev, the head of the department (HOD), shares his 29 years of rich expertise in fine arts, majoring in WASH Painting. Being an artist, he guides students in techniques such as painting, sculpting, jewellery making, and printing while also teaching them the business skills required to support themselves.
                        </li>
                        <li>
                            <p class="p-0 m-0">College of Fine Arts, one of the best private fine arts colleges in UP focuses on diverse areas ranging from scriptures to social media, mural to UI/UX design, tattoo making to website design, and animation to others.
                        </li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="Tab2" role="tabpanel" aria-labelledby="tab2-tab">
                    <h3>Placement/Internship</h3>
                    <ul class="m-ol-list ps-4 mb-0">
                        <li>
                            <p class="p-0 m-0">Teerthanker Mahaveer University offers a personalised, supportive environment from admissions to placements. The college assists students in securing placement opportunities in artistic disciplines, including painting, sculpture, drawing, photography, printmaking, ceramics, graphic design, illustration, digital arts, film, animation, theatre, dance, music, and more.
                        </li>
                        <li>
                            <p class="p-0 m-0">In the past years, our students have secured placement and training opportunities in top-notch advertising agencies worldwide namely, McCann, FCB Ulka, Ogilvy, Leo Burnett, and TBWA. Some of our students got government jobs in premier institutions like Jamia Millia Islamia, Delhi, Mangalayatan University, Aligarh, etc.
                        </li>
                    </ul>
                    <div class="read-more-content">
                        <ul class="m-ol-list ps-4">
                            <li>
                                <p class="p-0 m-0">Reputed industrial houses across the country visit for campus recruitment programmes. The prime objective of the Training & Placement cell is to facilitate the graduating students and industry by providing a meeting ground for them. To achieve 100% placement, the T&P cell offers training programmes to upgrade the social and professional skills of students and ensures that the students are employment ready.</p>
                            </li>
                        </ul>
                    </div>
                    <a href="javascript:void(0);" class="read-more ms-0 mt-1" title="Read More">Read More</a>
                </div>
                <div class="tab-pane fade" id="Tab3" role="tabpanel" aria-labelledby="tab3-tab">
                    <h3>Curriculum</h3>
                    <ul class="m-ol-list ps-4 mb-0">
                        <li>
                            <p class="p-0 m-0">The College of Fine Arts blends modern art education and the curriculum is designed as per the NEP scheme of UP Higher Education, critically implementing each part of its with practical aspects, and hands-on training in fine arts.
                        </li>
                        <li>
                            <p class="p-0 m-0">You will gain a strong foundation in traditional art forms including drawing, painting and sculpture, with extensive explorations in video, installation, performance, photography and digital imaging.
                        </li>
                    </ul>
                    <div class="read-more-content mt-1">
                        <ul class="m-ol-list ps-4">
                            <li>
                                <p class="p-0 m-0">By choosing to begin your degree at Teerthanker Mahaveer College of Fine Arts, you will get a competitive edge with a curriculum that is designed to cultivate a strong foundation in fundamental Art & Design skills before students progress to their respective choice of discipline.
                            </li>
                            <li>
                                <p class="p-0 m-0">During the foundation years, students will develop knowledge and skills across different media, and apply critical thinking and research methodologies with historical, cultural, social and technological perspectives. After the end of the 2nd year of BFA, students have the option of doing their internships with the best industry partners across the country towards their credits for the 3rd and 4th years.
                            </li>
                        </ul>
                    </div>
                    <a href="javascript:void(0);" class="read-more ms-0 mt-1" title="Read More">Read More</a>
                </div>
                <div class="tab-pane fade" id="Tab4" role="tabpanel" aria-labelledby="tab4-tab">
                    <h3>Infrastructure</h3>
                    <ul class="m-ol-list ps-4">
                        <li>
                            <p class="p-0 m-0">Teerthanker Mahaveer College of Fine Arts offers several unique facilities to all its students like smart classes, computer lab, spacious art and graphic studio, 3D clay modelling lab, wifi facility, stationary, easels and drawing boards available to all the students.
                        </li>
                        <li>
                            <p class="p-0 m-0">This top fine arts college facilities library and resource centre that house an extensive collection of art books, reference materials, digital resources, and archives. These facilities provide students and faculty with access to a wide range of artistic literature, research materials, and historical references, supporting their academic pursuits and artistic development.
                        </li>
                    </ul>
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

</section><!-- #content end -->

<div class="container mb-5 mt-5">
    <h2 class="tmu-text-primary text-center"><span>Frequently Asked </span><span> Questions</span></h2>
    <hr class="horizontal-line">

    <button class="careers-accordion">Why Choose TMU for Fine Arts Education?<span class="icon">+</span></button>
    <div class="panel">
        <h3 class="tmu-text-primary mb-0 fs-16"><span>UGC-Approved Accreditation and </span><span>NAAC A Rating</span></h3>
        <p class="text-justify">TMU holds the prestigious UGC approval and boasts an NAAC A accreditation, affirming its commitment to delivering high-quality education in the field of fine arts. This accreditation underscores TMU's adherence to stringent academic standards and continuous improvement in educational practices.</p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>Experiential Learning by</span><span> Highly Qualified Faculties</span></h3>
        <p class="text-justify">At TMU, learning extends beyond textbooks. Our faculty comprises highly qualified professionals with extensive industry experience. They not only impart theoretical knowledge but also facilitate hands-on learning through workshops, seminars, and industry collaborations.</p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>Comprehensive Teaching, </span><span>Learning, and Development Center</span></h3>
        <p class="text-justify">The College of Fine Arts houses a dedicated center for teaching, learning, and development, equipped with state-of-the-art facilities to foster creativity and innovation among students. This center serves as a hub for artistic experimentation, research, and interdisciplinary collaboration.</p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>Global Career </span><span> Prospects</span></h3>
        <p class="text-justify">TMU offers global career prospects to its fine arts graduates. Through strategic partnerships with renowned art organizations and international internship opportunities, students gain invaluable exposure to diverse cultural contexts and real-world artistic practices, preparing them for a successful career in the global art industry.</p>

    </div>
    <hr class="horizontal-line">

    <button class="careers-accordion"> Campus Facilities<span class="icon">+</span></button>
    <div class="panel">
        <h3 class="tmu-text-primary mb-0 fs-16"><span>On-Campus </span><span>Hostel Facilities</span></h3>
        <p class="text-justify">To ensure a conducive learning environment, TMU provides on-campus hostel facilities equipped with modern amenities. These accommodations offer students a comfortable living space that complements their academic journey.</p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>Scholarship Assistance </span><span>Up to 100%</span></h3>
        <p class="text-justify">Recognising the financial challenges students may face, TMU offers up to 100% scholarship assistance based on merit and need. This initiative aims to make quality education accessible to deserving students, regardless of their financial background.</p>

    </div>
    <hr class="horizontal-line">

    <button class="careers-accordion"> Academic Environment<span class="icon">+</span></button>
    <div class="panel">
        <h3 class="tmu-text-primary mb-0 fs-16"><span>Modern Classrooms and</span><span> Interactive Sessions</span></h3>
        <p class="text-justify">TMU features modern classrooms designed to facilitate interactive learning sessions. Equipped with advanced technology and conducive to collaborative learning, these classrooms enhance the overall academic experience of students.</p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>Educational Seminars and </span><span> Conferences</span></h3>
        <p class="text-justify">The College of Fine Arts regularly organizes educational seminars and conferences, inviting industry experts and scholars to share insights and trends in the field of fine arts. These events enrich students' knowledge and broaden their perspectives on contemporary art practices.</p>

    </div>
    <!-- Add the horizontal line here -->
    <hr class="horizontal-line">
    <button class="careers-accordion">Extracurricular Offerings <span class="icon">+</span></button>
    <div class="panel">
        <h3 class="tmu-text-primary mb-0 fs-16"><span>Artistic Clubs and </span><span> Electrifying Events</span></h3>
        <p class="text-justify">TMU encourages holistic development through a range of extracurricular activities. Students can join artistic clubs, participate in electrifying concerts, and engage in dynamic art events, fostering their creativity and passion beyond the classroom.</p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>Gym, Fitness Centre, and </span><span> Recreational Facilities</span></h3>
        <p class="text-justify">Maintaining a healthy work-life balance is essential at TMU. The campus boasts a well-equipped gym, fitness centre, and recreational facilities, ensuring students have opportunities to stay active and unwind amidst their academic pursuits.</p>

        <h3 class="tmu-text-primary mb-0 fs-16"><span>Shopping Stores and </span><span> Cafeterias</span></h3>
        <p class="text-justify">TMU's campus includes convenient shopping stores and cafeterias, providing students with easy access to essential supplies and wholesome dining options, enhancing their overall campus experience.</p>

    </div>
    <hr class="horizontal-line">
    <button class="careers-accordion">Student Welfare and Safety<span class="icon">+</span></button>
    <div class="panel">
        <h3 class="tmu-text-primary fs-16 mb-0"><span>1. Anti-Ragging </span><span> Campus</span></h3>
        <p class="text-justify">TMU maintains a strict anti-ragging policy to ensure a safe and respectful environment for all students. This policy reflects our commitment to promoting a culture of mutual respect and zero tolerance towards any form of harassment.</p>
        <h3 class="tmu-text-primary fs-16 mb-0"><span>2. Fully Wi-Fi </span><span>Enabled Environment</span></h3>
        <p class="text-justify">The entire TMU campus is fully Wi-Fi enabled, facilitating seamless connectivity and access to online resources essential for academic and research purposes.</p>
    </div>
    <!-- Add the horizontal line here -->
    <hr class="horizontal-line">
    <button class="careers-accordion">Placement Opportunities <span class="icon">+</span></button>
    <div class="panel">
        <h3 class="tmu-text-primary fs-16 mb-0"><span>1. Outstanding Placement</span><span> Assistance</span></h3>
        <p class="text-justify">TMU takes pride in its track record of providing outstanding placement assistance to its fine arts graduates. Through dedicated career services and industry tie-ups, TMU prepares students for successful entry into the professional art world.</p>
        <h3 class="tmu-text-primary fs-16 mb-0"><span>2. Strong Industry </span><span>Connections</span></h3>
        <p class="text-justify">The College of Fine Arts nurtures strong industry connections with leading art studios, galleries, and cultural institutions. These connections provide students with valuable networking opportunities and insights into industry trends, giving them a competitive edge in their careers.</p>
    </div>
    <!-- Add the horizontal line here -->
    <hr class="horizontal-line">
    <button class="careers-accordion">Practical Training and Artistic Facilities <span class="icon">+</span></button>
    <div class="panel">
        <h3 class="tmu-text-primary fs-16 mb-1"><span> Art Studios and</span><span> Creative Spaces</span></h3>
        <p class="text-justify">TMU offers well-equipped art studios and creative spaces where students can unleash their artistic potential and experiment with different mediums and techniques. These facilities are conducive to practical training and artistic exploration under the guidance of expert faculty.</p>
        <h3 class="tmu-text-primary fs-16 mb-1"><span> Galleries, Exhibitions, and </span><span> Art Supply Stores</span></h3>
        <p class="text-justify">The campus includes galleries and exhibition spaces where students can showcase their artworks to a wider audience. Additionally, art supply stores on campus ensure students have access to essential materials for their creative projects.</p>



    </div>
    <!-- Add the horizontal line here -->
    <hr class="horizontal-line">
    <button class="careers-accordion">Specialisations Offered <span class="icon">+</span></button>
    <div class="panel">
        <h3 class="tmu-text-primary fs-16 mb-1"><span> BFA, MFA, and </span><span>PhD Programmes</span></h3>
        <p class="text-justify">TMU provides a range of specialized programmes including Bachelor of Fine Arts (BFA), Master of Fine Arts (MFA), and PhD in Fine Arts. These programmes cater to diverse interests and career aspirations, offering comprehensive training in specific areas of artistic expertise.</p>
    </div>
    <!-- Add the horizontal line here -->
    <hr class="horizontal-line">
    <button class="careers-accordion">Conclusion <span class="icon">+</span></button>
    <div class="panel">
        <p class="text-justify">Choosing TMU for your fine arts education ensures a transformative learning journey enriched with academic rigour, practical experience, and global opportunities. Join us at TMU's College of Fine Arts to embark on a fulfilling career in the dynamic world of art and creativity.</p>
    </div>
    <hr class="horizontal-line">
    <button class="careers-accordion">FAQs<span class="icon">+</span></button>
    <div class="panel">
        <p class="text-justify"><strong>Q1:- What makes TMU's College of Fine Arts stand out among other institutions?</strong></p>
        <p class="text-justify"><strong>Ans:-</strong> TMU stands out due to its UGC-approved status, NAAC A accreditation, and robust faculty expertise in delivering experiential learning.</p>
        <p class="text-justify"><strong>Q2:- Can students expect financial support at TMU?</strong>&nbsp;</p>
        <p class="text-justify"><strong>Ans:- </strong>Yes, TMU offers up to 100% scholarship assistance to eligible students, ensuring access to quality education regardless of financial background.</p>
        <p class="text-justify"><strong>Q3:- How does TMU prepare students for global careers in fine arts?</strong>&nbsp;</p>
        <p class="text-justify"><strong>Ans:- </strong>TMU provides global career prospects through its industry-aligned curriculum, extensive campus facilities, and international internship opportunities.</p>
        <p class="text-justify"><strong>Q4:- What are the facilities available on TMU's campus?</strong>&nbsp;</p>
        <p class="text-justify"><strong>Ans:- </strong>TMU boasts modern classrooms, comprehensive hostel facilities, recreational spaces, and amenities such as gyms, cafeterias, and art supply stores.</p>
        <p class="text-justify"><strong>Q5:- How does TMU ensure practical training for fine arts students?</strong>&nbsp;</p>
        <p class="text-justify"><strong>Ans:- </strong>TMU's College of Fine Arts offers state-of-the-art studios, workshops, and artistic development programmes, facilitated by expert faculty.</p>


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
                cd_id: 14,
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
                cd_id: 14,
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