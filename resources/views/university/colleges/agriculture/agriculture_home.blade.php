@extends('layouts.university.colleges.agriculture_home_without_sidebar')
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
					<h1 class=" mt-5 mb-5 d-none d-md-block  banner-main-heading">Welcome to <br> <span style="font-weight:700!important;">College of Agriculture</span> Sciences</h1>
					<h1 class=" mt-5 mb-3 d-block d-md-none" style="color:#001055; text-transform: capitalize; font-weight:700!important; font-size:24px">Welcome to <span> College of Agriculture</span> Sciences</h1>
				
					<a href="https://admissions.tmu.ac.in/" target="_blank" class="tmu-btn btn-2 py-1 px-3 py-xl-2 px-xl-4">Apply Now</a>
				</div>
				<div class="col-12 col-md-6">
					<div class="pe-lg-4 position-relative p-0">
						<div style="z-index: 2;">
							<!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/iXHRmCyHszY?si=BcZ5NOfT-V8ECc6z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="z-index: 2; margin:0;"></iframe> -->
							<img src="{{asset('/assets/img/banner/agriculture/agriculture-banner.webp')}}" alt="" class="p-0 m-0">
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
							<span>ICAR </span>
							<br>
							<span class="d-block pt-1">Accredited</span>
							&nbsp;
						</div>
					</div>
				</div>
				<div class="col-6 col-lg-3 px-1">
					<div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
						<div class="card-body gap-4 text-tmu-primary under-banner-cards">
							<span>International </span>
							<br>
							<span class="d-block pt-1">Internship Opportunities</span>
							&nbsp;
						</div>
					</div>
				</div>
				<div class="col-6 col-lg-3 px-1">
					<div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
						<div class="card-body gap-4 text-tmu-primary under-banner-cards">
							<span>Greenhouse </span>
							<br>
							<span class="d-block pt-1">Facility for Advanced Research</span>
						</div>
					</div>
				</div>
				<div class="col-6 col-lg-3 px-1">
					<div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
						<div class="card-body gap-4 text-tmu-primary under-banner-cards">
							<span>100%</span>
							<br>
							<span class="d-block pt-1">Placement Assistance</span>
							&nbsp;
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
									<div class="card-body gap-4 text-tmu-primary under-banner-cards"> <span>ICAR </span>
										<br>
										<span class="d-block pt-1">Accredited</span>
										&nbsp;
									</div>
								</div>
							</div>
							<div class="col-6">
								<div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
									<div class="card-body gap-4 text-tmu-primary under-banner-cards">
										<span>International </span>
										<br>
										<span class="d-block pt-1">Internship Opportunities</span>
										&nbsp;
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
										<span>Greenhouse </span>
										<br>
										<span class="d-block pt-1">Facility for Advanced Research</span>
									</div>
								</div>
							</div>
							<div class="col-6">
								<div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
									<div class="card-body gap-4 text-tmu-primary under-banner-cards">
										<span>100%</span>
										<br>
										<span class="d-block pt-1">Placement Assistance</span>
										&nbsp;
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
				<h1 class="college-main-heading">Teerthanker Mahaveer College of Agriculture Sciences</h1>
				<div class="row">
					<div class="col-12 px-2 px-md-5">
						<p style="text-align: justify;">The College of Agricultural Sciences, established in 2014, stands as a beacon of sustainable practices, student empowerment, and pioneering research in the field of agriculture. Our unwavering commitment to excellence has positioned us as the top private agricultural college in Uttar Pradesh.</p>
						<p style="text-align: justify;">Guided by the recommendations of the Vth Deans' Committee of the Indian Council of Agricultural Research (ICAR), we have meticulously crafted a curriculum covering every aspect of agriculture. We take great pride in our ICAR accreditation, which serves as a mark of quality and excellence in agricultural education.</p>

						<a href="{{ route('agriculture_overview') }}" class="tmu-btn btn-1 py-2 mt-4 read-more ms-2 mt-2">Know More!</a>

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
					<p>Being an ICAR accredited Private University in UP, the Teerthanker Mahaveer University offers B.Sc. (Hons.) Agriculture ,M.Sc. Agronomy ,M.Sc. Plant Pathology and M.Sc. Soil Science.
						<br><br>
						The college always emphasizes research and innovation in agriculture. Faculty members and students actively engage in research projects, focusing on sustainable agricultural practices, crop improvement, soil health, pest management, and other relevant areas.
						<br><br>
					</p>
					<div class="read-more-content mt-0">
						<p>Unique tie-ups with JARDS & Smur Agro for collaborative research projects, knowledge exchange, and technological advancements in agriculture.
							<br><br>
							The college maintains strong ties with leading agricultural industries, organizations, and research institutes. It regularly invites industry experts, professionals, and alumni to interact with students through guest lectures, seminars, exposure visits, and workshops.
						</p>
					</div>
					<a href="javascript:void(0);" class="read-more ms-2 mt-0" title="Read More">Read More</a>
				</div>
				<div class="tab-pane fade" id="Tab2" role="tabpanel" aria-labelledby="tab2-tab">
					<h3>Placement/Internship</h3>
					<p>Seeds of knowledge sprout into promising careers in the agricultural industry!</p>
					<ul class="m-ol-list ps-4 mb-0">
						<li>Internship Opportunities: The college facilities global internship opportunities for its students at high packages of up to 18 LPA.</li>
						<li>Skill Enhancement Programs: The college organises skill enhancement programs to equip students with the necessary competencies and skills required by the industry. Its student-centric approach makes it the best private agriculture college in UP.</li>
						<li>Personalised Training: With the help of trained professionals and personalised career guidance and counselling services students are assisted in identifying their career goals, exploring different job opportunities, and making informed decisions. This support helps students align their interests, skills, and aspirations with suitable career paths in the agriculture sector.</li>
					</ul>
					<div class="read-more-content mt-0">
						<ul class="m-ol-list ps-4">
							<li>100% Placement Assistance: The college has a dedicated placement cell that acts as a bridge between students and potential employers. It places great emphasis on ensuring the successful placement of its students in reputed organisations and industries. Some prominent recruiters include Norex Flavours Pvt Ltd, Dhampur Sugar Mills Ltd, Zeneva Crop Science, Syngenta Foundation, BASF India Ltd, etc.</li>
							<li>From networking opportunities to placement at top companies, the College of Agriculture Sciences is your ultimate destination to make a successful career in the field of agriculture.</li>
						</ul>
					</div>
					<a href="javascript:void(0);" class="read-more ms-2 mt-1" title="Read More">Read More</a>
				</div>
				<div class="tab-pane fade" id="Tab3" role="tabpanel" aria-labelledby="tab3-tab">
					<h3>Curriculum</h3>
					<p>The College of Agricultural Sciences blends modern agriculture education (as per the 5th Dean’s Committee of Indian Council of Agriculture Research -ICAR) and the NEP scheme of UP Higher Education, critically implementing each part of its curriculum with practical aspects, and hands-on training.
						<br><br>The college aims to produce Agri technocrats as trained assets to lead agriculture in contemporary times of climate uncertainty, resource constraints, and burgeoning population climate shifts.
					</p><br>
					<div class="read-more-content mt-0 ">
						<p>Through an extensive curriculum, the college promotes a deep understanding of agricultural practices and ideas as well as the information and skills essential for successful careers in agriculture.
							<br><br>Truly, the College of Agriculture Science is the best private agriculture college in UP as skills-enhancing courses have been introduced in the curriculum like nursery management, mushroom cultivation, commercial horticulture, commercial bee-keeping, food processing, organic farming, and bio-dynamic farming, etc.
						</p>
					</div>
					<a href="javascript:void(0);" class="read-more ms-2 mt-1" title="Read More">Read More</a>
				</div>

				<div class="tab-pane fade" id="Tab4" role="tabpanel" aria-labelledby="tab4-tab">
					<h3>Infrastructure</h3>
					<p>It offers state-of-the-art facilities and takes pride in having modular learning labs with industry-standard equipment & facilities in agricultural sciences. <br><br>
						Availability of a dedicated weather laboratory within the college premises, facilitating meteorological research and analysis for better agricultural planning and decision-making. <br><br>
						The College of Agriculture Sciences has well-established modern laboratories as per ICAR norms. It has modern scientific equipment and farm facilities along with competent (Ph.D. and NET Qualified) faculties from different reputed universities across the country.</p>
				</div>
			</div>
		</div>



		


		<!-- Section for collaborators -->
	

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

		<!--  -->
		<div class="container hh1 mb-3">
			<h2 Class="tmu-text-primary text-center"><span> Frequently Asked </span><span> Questions</span></h2>
			<div class="row">
				<div class="col-md-12">
					<div class="card-body">
						<hr class="horizontal-line">
						<button class="careers-accordion">College of Agriculture Sciences, Among the top Agriculture Colleges<span class="icon">+</span></button>
						<div class="panel active">
							<p class="mb-2">The College of Agriculture Sciences established in 2014 and accredited by the Indian Council of Agricultural Research (ICAR), stands as a beacon of sustainable practices, student empowerment, and pioneering research in the realm of agriculture. Our unwavering commitment to excellence has positioned us as the top private agricultural college in Uttar Pradesh.</p>
							<p class="mb-2">Welcome to the College of Agriculture Sciences at Teerthanker Mahaveer University (TMU), where we are dedicated to providing top-notch education in agriculture. Our institution is recognised as one of the leading agricultural colleges, offering comprehensive programs designed to equip students with the knowledge and skills needed to excel in the agricultural sector.</p>
						</div>
						<hr class="horizontal-line">

						<button class="careers-accordion"> Why TMU is the Best Choice for You <span class="icon">+</span></button>
						<div class="panel">
							<p class="mb-2">Choosing the right college is crucial for your academic and professional journey. Here’s why TMU stands out:</p>
							<h3 class="tmu-text-primary mb-1 fs-16"><span>1. UGC-Approved with </span><span> NAAC A Accreditation </span></h3>
							<p class="mb-2">Our university is UGC-approved and holds NAAC A accreditation, ensuring the highest standards of education and institutional quality.</p>
							<h3 class="tmu-text-primary mb-1 fs-16"><span>2. Experiential Learning by </span><span> Highly Qualified Faculties</span></h3>
							<p class="mb-2">At TMU, we believe in learning by doing. Our highly qualified faculty members provide experiential learning opportunities, allowing students to gain practical insights and hands-on experience.</p>
							<h3 class="tmu-text-primary mb-1 fs-16"><span>3. Practical Training in Greenhouses and</span><span> Large Agriculture Fields</span></h3>
							<p class="mb-2">Our greenhouses and extensive agriculture fields are perfect for practical training and experiments, giving students real-world experience in modern farming techniques.</p>
							<h3 class="tmu-text-primary mb-1 fs-16"><span>4. Well-Equipped Laboratories and</span><span> Agro-Technology Farm</span></h3>
							<p class="mb-2">We offer state-of-the-art laboratories and an agro-technology farm where students can engage in practical crop production and innovative research.</p>
							<h3 class="tmu-text-primary mb-1 fs-16"><span>5. pecialised Workshops </span><span> and Seminars </span></h3>
							<p class="mb-2">We regularly conduct hydroponics workshops and IPR seminars to keep our students updated with the latest advancements in agriculture technology and intellectual property rights.</p>
							<h3 class="tmu-text-primary mb-1 fs-16"><span>6. MoU with </span><span> Agri-Business Companies</span></h3>
							<p class="mb-2">Our strong collaborations with numerous agri-business companies ensure that students have access to the latest industry trends and potential employment opportunities.</p>
							<h3 class="tmu-text-primary mb-1 fs-16"><span>7. Plantation Campaigns </span><span> with NSS Team</span></h3>
							<p class="mb-2">We organise plantation campaigns in collaboration with the NSS team, fostering environmental awareness and sustainability among students.</p>
							<h3 class="tmu-text-primary mb-1 fs-16"><span>8. International Internship </span><span> Opportunities</span></h3>
							<p class="mb-2">Students at TMU have the chance to participate in international internships, providing them with global exposure and enhancing their professional prospects.</p>
							<h3 class="tmu-text-primary mb-1 fs-16"><span>9. 100% Placement</span><span> Assistance</span></h3>
							<p class="mb-2">Our dedicated placement cell offers 100% placement assistance, helping students secure excellent job opportunities in the agriculture sector.</p>
							<h3 class="tmu-text-primary mb-1 fs-16"><span>10. Strong Industry </span><span> Connections</span></h3>
							<p class="mb-2">We have robust connections with various industries, offering students real-world insights and enhancing their employability.</p>
						</div>
						<hr class="horizontal-line">
						<button class="careers-accordion">Explore Top-Notch Placement Opportunities<span class="icon">+</span></button>
						<div class="panel">
							<h3 class="tmu-text-primary mb-1 fs-16"><span>1. Modern </span><span> Classrooms </span></h3>
							<p class="mb-2">Our classrooms are equipped with modern amenities to facilitate interactive learning sessions.</p>
							<h3 class="tmu-text-primary mb-1 fs-16"><span>2. Greenhouses for </span><span> Practical Experiments </span></h3>
							<p class="mb-2">Our greenhouses serve as a hub for practical agriculture experiments, allowing students to apply their theoretical knowledge.</p>
							<h3 class="tmu-text-primary mb-1 fs-16"><span>3. Well-maintained </span><span> Landscapes </span></h3>
							<p class="mb-2">The well-maintained landscapes of our campus create a serene and inspiring environment for learning.</p>
							<h3 class="tmu-text-primary mb-1 fs-16"><span>4. Comfortable Hostel </span><span> Facilities </span></h3>
							<p class="mb-2">We provide comfortable hostel facilities to ensure that students have a home away from home.</p>
							<h3 class="tmu-text-primary mb-1 fs-16"><span>5. Extracurricular </span><span> Clubs </span></h3>
							<p class="mb-2">We encourage students to participate in extracurricular clubs, fostering holistic development and teamwork.</p>
							<h3 class="tmu-text-primary mb-1 fs-16"><span>6. Botanical </span><span> Gardens </span></h3>
							<p class="mb-2">Our botanical gardens are a testament to our commitment to biodiversity and environmental conservation.</p>
							<h3 class="tmu-text-primary mb-1 fs-16"><span>7. Concerts and </span><span> Events </span></h3>
							<p class="mb-2">Our campus hosts a variety of concerts and events, adding vibrancy to student life.</p>
							<h3 class="tmu-text-primary mb-1 fs-16"><span>8. Shopping Stores </span><span> and Cafeterias </span></h3>
							<p class="mb-2">With shopping stores and cafeterias on campus, students have access to essential services and leisure activities.</p>
						</div>
						<hr class="horizontal-line">
						<button class="careers-accordion">Explore Top-Notch Placement Opportunities <span class="icon">+</span></button>
						<div class="panel">
							<p class="mb-2">TMU&rsquo;s College of Agriculture Sciences is proud of its outstanding placement record and industry recognition:</p>
							<h3 class="tmu-text-primary mb-1 fs-16"><span>1. ICAR </span><span>Accreditation </span></h3>
							<p class="mb-2">We are the 3rd ICAR-accredited college in North India, a symbol of our commitment to quality education.</p>
							<h3 class="tmu-text-primary mb-1 fs-16"><span>2. Expert </span><span>Faculty </span></h3>
							<p class="mb-2">Our expert faculty members provide hands-on practical knowledge, preparing students for real-world challenges.</p>
							<h3 class="tmu-text-primary mb-1 fs-16"><span>3. Centre for Teaching, </span><span>Learning, and Development </span></h3>
							<p class="mb-2">Our Centre for Teaching, Learning, and Development is dedicated to enhancing educational practices and student learning experiences.</p>
							<h3 class="tmu-text-primary mb-1 fs-16"><span>4. 100% Placement </span><span> Assistance </span></h3>
							<p class="mb-2">Our placement cell offers comprehensive support to ensure that students find the best job opportunities in their field.</p>
							<h3 class="tmu-text-primary mb-1 fs-16"><span>5. Global </span><span>Opportunities </span></h3>
							<p class="mb-2">We provide students with global opportunities through international internships and collaborations with top companies.</p>
							<h3 class="tmu-text-primary mb-1 fs-16"><span>6. Industry </span><span> Affiliations </span></h3>
							<p class="mb-2">Our strong industry affiliations provide invaluable insights and open doors to various career paths.</p>
						</div>
						<hr class="horizontal-line">
						<button class="careers-accordion">Core Programs Offered <span class="icon">+</span></button>
						<div class="panel">
							<p><span style="font-weight: 400;">We offer a range of programs designed to meet the diverse interests and career aspirations of our students:</p>
							<h3 class="tmu-text-primary mb-1 fs-16"><span> 1. BSc (H) Agriculture </span><span> ICAR Accredited</span></h3>
							<p class="mb-2">Our BSc (H) Agriculture program is ICAR accredited, providing a rigorous curriculum and practical training.</p>
							<h3 class="tmu-text-primary mb-1 fs-16"><span> 2. MSc Agriculture </span><span> (Agronomy)</span></h3>
							<p class="mb-2">Our MSc Agriculture (Agronomy) program focuses on advanced agricultural practices and research.</p>
							<h3 class="tmu-text-primary mb-1 fs-16"><span> 3. Hands-On Learning and </span><span> Practical Knowledge</span></h3>
							<p class="mb-2">We emphasise hands-on learning and practical knowledge to ensure our students are industry-ready:</p>
							<h3 class="tmu-text-primary mb-1 fs-16"><span> 4. Greenhouses and </span><span> Farm Lands</span></h3>
							<p class="mb-2">Students gain practical experience in our greenhouses and extensive farm lands.</p>
							<h3 class="tmu-text-primary mb-1 fs-16"><span> 5. Research and </span><span> Entrepreneurial Development</span></h3>
							<p class="mb-2">We encourage research and entrepreneurial development, fostering innovation in agriculture.</p>
							<p class="mb-2">Precision Farming and Sustainable Agriculture</p>
							<p class="mb-2">Our training programs cover precision farming and sustainable agriculture techniques.</p>
							<h3 class="tmu-text-primary mb-1 fs-16"><span> 6. Advanced Research </span><span> Laboratories</span></h3>
							<p class="mb-2">Our advanced research laboratories are equipped with the latest technology for cutting-edge research.</p>
							<h3 class="tmu-text-primary mb-1 fs-16"><span> 7. Specialised Workshops </span><span> and Seminars</span></h3>
							<p class="mb-2">We conduct specialised workshops and seminars on hydroponics, IPR, and other relevant topics.</p>
						</div>
						<hr class="horizontal-line">
						<button class="careers-accordion">Career Opportunities in Agriculture <span class="icon">+</span></button>
						<div class="panel">
							<p class="mb-2">A degree in agriculture from TMU opens doors to a wide range of career opportunities:</p>
							<h3 class="tmu-text-primary mb-1 fs-16"><span>1. Diverse Career </span><span> Paths</span></h3>
							<p class="mb-2">Graduates can pursue careers in various sectors such as agri-business, research, and public services.</p>
							<h3 class="tmu-text-primary mb-1 fs-16"><span>2. Roles in Agri-Business</span><span> Companies</span></h3>
							<p class="mb-2">There are ample opportunities in agri-business companies, offering roles in management, sales, and consultancy.</p>
							<h3 class="tmu-text-primary mb-1 fs-16"><span>3. Opportunities in </span><span> Public Sector</span></h3>
							<p class="mb-2">Graduates can work in public sector roles such as agriculture research scientists, food inspectors, and more.</p>
							<h3 class="tmu-text-primary mb-1 fs-16"><span>4. Higher Studies and </span><span> Specialization</span></h3>
							<p class="mb-2">Students can opt for higher studies and specialise in their preferred areas of interest.</p>
						</div>
						<hr class="horizontal-line">
						<button class="careers-accordion">Life at College of Agriculture Sciences <span class="icon">+</span></button>
						<div class="panel">
							<p>Life at TMU&rsquo;s College of Agriculture Sciences is vibrant and enriching:</p>
							<h3 class="tmu-text-primary mb-1 fs-16"><span>1. Vibrant Campus </span><span> Life</span></h3>
							<p>Our campus life is vibrant, with numerous events and activities that keep students engaged.</p>
							<h3 class="tmu-text-primary mb-1 fs-16"><span>2. Supportive Learning </span><span> Environment</span></h3>
							<p>We provide a supportive learning environment, ensuring that students receive the best education and guidance.</p>
							<h3 class="tmu-text-primary mb-1 fs-16"><span>3. Community </span><span> Engagement</span></h3>
							<p>We believe in giving back to the community through various initiatives and campaigns.</p>
							<h3 class="tmu-text-primary mb-1 fs-16"><span>4. Student Facilities </span><span> and Services</span></h3>
							<p>Our campus offers a range of facilities and services to support student&rsquo;s academic and personal growth.</p>
						</div>
						<hr class="horizontal-line">
						<button class="careers-accordion">Conclusion <span class="icon">+</span></button>
						<div class="panel">
							<p>In conclusion, TMU’s College of Agriculture Sciences offers a unique blend of theoretical knowledge, practical training, and industry exposure, making it the ideal choice for aspiring agricultural professionals. Our comprehensive programs, experienced faculty, and excellent placement opportunities ensure that our students are well-prepared for successful careers in agriculture.</p>
						</div>
						<hr class="horizontal-line">
						<button class="careers-accordion">FAQs:<span class="icon">+</span></button>
						<div class="panel">
							<p><strong>Q1. What is the duration of the BSc Agriculture course?</strong></p>
							<p><strong>Ans:</strong> The BSc Agriculture course is typically four years long.</p>
							<p><strong>Q2. What subjects are included in BSc Agriculture?</strong></p>
							<p><strong>Ans: </strong>The BSc Agriculture program includes subjects like agronomy, horticulture, soil science, plant pathology, entomology, and more.</p>
							<p><strong>Q3. What are the eligibility criteria for BSc Agriculture admission?</strong></p>
							<p><strong>Ans: </strong>The eligibility criteria for BSc Agriculture admission generally include completion of 10+2</p>
						</div>
						<hr class="horizontal-line">
					</div>
				</div>
			</div>
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
                cd_id: 16,
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
                cd_id: 16,
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