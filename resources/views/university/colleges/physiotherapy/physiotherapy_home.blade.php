@extends('layouts.university.colleges.physiotherapy_home_without_sidebar')
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
					<h1 class=" mt-5 mb-5 banner-main-heading">Welcome to the <span style="font-weight:700!important;">Deaprtment of Physiotherapy</span></h1>
					<!-- <a href="#" class="tmu-btn btn-1 me-4 py-1 px-3 py-xl-2 px-xl-4"> Download Brocher</a> -->
					<a href="https://admissions.tmu.ac.in/" target="_blank" class="tmu-btn btn-2 py-1 px-3 py-xl-2 px-xl-4">Apply Now</a>
				</div>
				<div class="col-12 col-md-6">
					<div class="pe-lg-4 position-relative p-0">
						<div style="z-index: 2;">
							<!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/iXHRmCyHszY?si=BcZ5NOfT-V8ECc6z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="z-index: 2; margin:0;"></iframe> -->
							<img src="{{asset('assets/img/banner/physiotherapy/banner.webp')}}" alt="" class="p-0 m-0">
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container my-3 d-none d-md-block">
			<div class="row justify-content-center">
				<div class="col-6 col-lg-3 px-1">
					<div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
						<div class="card-body gap-4 text-tmu-primary under-banner-cards"><span>100%</span>
							<br>
							<span class="d-block pt-1">Placement Assistance</span>
						</div>
					</div>
				</div>
				<div class="col-6 col-lg-3 px-1">
					<div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
						<div class="card-body gap-4 text-tmu-primary under-banner-cards">
							<span>Practical </span>
							<br>
							<span class="d-block pt-1">Exposure at TMU Hospital</span>
						</div>
					</div>
				</div>
				<div class="col-6 col-lg-3 px-1">
					<div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
						<div class="card-body gap-4 text-tmu-primary under-banner-cards">
							<span>Well Equipped</span>
							<br>
							<span class="d-block pt-1"> Labs and Training Centre</span>
						</div>
					</div>
				</div>
				<div class="col-6 col-lg-3 px-1">
					<div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
						<div class="card-body gap-4 text-tmu-primary under-banner-cards">
							<span>Approved</span>
							<br>
							<span class="d-block pt-1"> by UP State Medical Faculty</span>
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
									<div class="card-body gap-4 text-tmu-primary under-banner-cards"> <span>100%</span>
										<br>
										<span class="d-block pt-1">Placement <br> Assistance</span>
									</div>
								</div>
							</div>
							<div class="col-6">
								<div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
									<div class="card-body gap-4 text-tmu-primary under-banner-cards">
										<span>100%</span>
										<br>
										<span class="d-block pt-1">Practical Exposure <br> at TMU Hospital</span>
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
										<span>Well Equipped</span>
										<br>
										<span class="d-block pt-1"> Labs and <br> Training Centre</span>
									</div>
								</div>
							</div>
							<div class="col-6">
								<div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
									<div class="card-body gap-4 text-tmu-primary under-banner-cards">
										<span>100+</span>
										<br>
										<span class="d-block pt-1">Approved by UP State <br> Medical Faculty</span>
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
				<h2 class="college-main-heading d-none d-md-block">Teerthanker Mahaveer Department of Physiotherapy</h2>
				<h3 class="tmu-text-primary d-block d-md-none"><span>Teerthanker Mahaveer Department</span><span> of Physiotherapy</span></h3>

				<div class="row">
					<div class="col-12 px-2 px-md-5">
						<p style="text-align: justify;">Established in 2010, the Department of Physiotherapy at TMU offers a comprehensive range of programmes. The programmes include BPT, MPT, and PhD courses in physiotherapy. With a focus on helping patients maintain, recover, and improve their physical abilities, we prepare students to address impairments, promote mobility, provide provisional diagnoses and physical interventions and become skilled professionals to meet the growing demand for physiotherapy services in the medical sector.</p>
						<div class="read-more-content mt-0">
							<p style="text-align: justify;">At the Department of Physiotherapy, Teerthanker Mahaveer University (TMU), excellence in education meets unparalleled practical experience. Choosing the right university for your physiotherapy education is crucial, and TMU stands out as a premier choice. Let’s explore why TMU’s Department of Physiotherapy is the ideal place to kickstart academic journey.</p>
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
					<p>The Department of Physiotherapy at TMU has recently entered into a strategic partnership with GTT Foundation for a "Life Skill and Employability Enhancement Training (PFA)" initiative, supported by Barclay. The main objective of this collaboration is to enhance the employability skills of our students.
						<br><br>
						GTT Foundation is a career support venture committed to delivering high-quality and scalable programmes using innovative technologies and engaging content. Through this MoU, we are dedicated to providing our students with the necessary skills and making a significant impact in physiotherapy.
					</p>
				</div>
				<div class="tab-pane fade" id="Tab2" role="tabpanel" aria-labelledby="tab2-tab">
					<h3>Placement/Internship</h3>
					<p>The physiotherapy department offers stellar placement and internship opportunities for our students, ensuring professional growth. We have strong tie-ups with recognised hospitals that provide a wide range of in-patient and out-patient facilities under various specialised departments of service. These departments include musculoskeletal (surgical/medical), traumatology/rheumatology, burns and plastic surgery, neurosciences (surgical/medical), paediatrics, psychiatry/psychosomatic, cardiorespiratory (surgical/medical), surgery/medicine, intensive care (surgical/medical/trauma), obstetrics & gynaecology, geriatrics, and community-based rehabilitation.</p>
					<div class="read-more-content mt-1">
						<p>Our aim is to prepare students to excel in the field of physiotherapy. The comprehensive placement programmes by CRC ensure our students have the opportunity to work in diverse healthcare settings and gain valuable experience. With the support of our esteemed in-campus hospital partner, our students are well-equipped to make a significant impact in the healthcare industry.</p>
					</div>
					<a href="javascript:void(0);" class="read-more ms-0 mt-1" title="Read More">Read More</a>
				</div>
				<div class="tab-pane fade" id="Tab3" role="tabpanel" aria-labelledby="tab3-tab">
					<h3>Curriculum</h3>
					<p>The curriculum at the Department of Physiotherapy is designed to provide an immersive learning experience. With a focus on Outcome-based Education, bloom's taxonomy, and anagogical teaching methods, our curriculum prepares students for real-world challenges in the field. The yearly updated curriculum includes internships, seminars, workshops, and industrial visits to enhance students' practical skills and provide them with real-world exposure. Become a competent and confident physiotherapy professional, equipped with the necessary skills for a successful career.</p>
				</div>
				<div class="tab-pane fade" id="Tab4" role="tabpanel" aria-labelledby="tab4-tab">
					<h3>Infrastructure</h3>
					<p>The physiotherapy department has an exceptional infrastructure that sets high standards. Students at TMU enjoy a conducive learning environment. Dedicated research facilities further enhance their education and training. Here's the list of the facilities available:</p>
					<ul class="m-ol-list ps-4 mb-0">
						<li>
							<p class="p-0 m-0">Exercise Therapy Demonstration Lab</p>
						</li>
						<li>
							<p class="p-0 m-0">Electrotherapy Demonstration Lab</p>
						</li>
						<li>
							<p class="p-0 m-0">Research Lab</p>
						</li>
					</ul>
					<div class="read-more-content mt-1">
						<ul class="m-ol-list ps-4">
							<li>
								<p class="p-0 m-0">Library</p>
							</li>
							<li>
								<p class="p-0 m-0">Indoor and Outdoor Sports Facility</p>
							</li>
							<li>
								<p class="p-0 m-0">Hostel Facility</p>
							</li>
						</ul>
					</div>
					<a href="javascript:void(0);" class="read-more ms-0 mt-1" title="Read More">Read More</a>
				</div>
			</div>
		</div>

		<!-----tion Start-->
		<<section id="content" class="prog-bm">
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
					<img src="{{ asset($testimonial->thumbnail_path) }}" class="me-3" alt="">
					<div class="media-body">
						<div class="testimonial">
							<p class="overview mb-3 fs-14">
								<b class="fs-16">{{ $testimonial->student_name }}</b> <br>
								{{ $testimonial['programme_name']['prog_name'] }} ({{ $testimonial->admitted_year }} - {{ $testimonial->passout_year }})
								<span>
									@if(empty($testimonial->linkedin_url) || strtolower($testimonial->linkedin_url) == 'na')
									<span class="px-2 py-1 linkedin-text text-muted" style="cursor: not-allowed;">
										Linkedin <i class="bi bi-linkedin"></i>
									</span>
									@else
									<a href="{{ $testimonial->linkedin_url }}" class="px-2 py-1 linkedin-text">
										Linkedin <i class="bi bi-linkedin"></i>
									</a>
									@endif
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
</div>




<!-- FAQS accordian -->

<div class="container mb-5 mt-5">
	<h2 class="tmu-text-primary text-center"><span>Frequently Asked </span><span> Questions</span></h2>
	<hr class="horizontal-line">

	<button class="careers-accordion">Why TMU is the Best Choice for You<span class="icon">+</span></button>
	<div class="panel active">
		<h3 class="tmu-text-primary fs-16 mb-0"><span>UGC-Approved and NAAC A</span><span> Accredited University</span></h3>
		<p class="text-justify">TMU is UGC-approved and boasts an NAAC-A accreditation, a testament to our commitment to academic excellence and quality education. This prestigious recognition ensures that our programmes meet the highest standards in education.</p>
		<h3 class="tmu-text-primary fs-16 mb-0"><span>Experiential Learning by</span><span> Highly Qualified Faculties</span></h3>
		<p class="text-justify">At TMU, learning goes beyond textbooks. Our highly qualified faculties bring a wealth of experience and practical knowledge, providing students with an immersive learning experience. Through hands-on training and real-world applications, students gain the skills necessary to excel in their careers.</p>
		<h3 class="tmu-text-primary fs-16 mb-0"><span>Hands-on Training</span><span> in TMU Hospital</span></h3>
		<p class="text-justify">One of the standout features of our programme is the extensive hands-on training provided at TMU Hospital. Students get the opportunity to work in real healthcare settings, honing their skills and gaining invaluable experience.</p>
	</div>
	<!-- Add the horizontal line here -->
	<hr class="horizontal-line">

	<button class="careers-accordion">Programmes Approved by Govt of UP and UP State Medical Faculty<span class="icon">+</span></button>
	<div class="panel">
		<p class="text-justify">Our programmes are not only approved by the Government of Uttar Pradesh but also by the UP State Medical Faculty, ensuring that our curriculum is comprehensive and up-to-date with the latest industry standards.</p>
	</div>
	<!-- Add the horizontal line here -->
	<hr class="horizontal-line">
	<button class="careers-accordion">Unique Features of TMU’s Physiotherapy Department<span class="icon">+</span></button>
	<div class="panel">
		<h3 class="tmu-text-primary fs-16 mb-0"><span>MoU with</span><span> GTT Foundation</span></h3>
		<p class="text-justify">TMU has a Memorandum of Understanding (MoU) with the GTT Foundation, opening doors for students to engage in various collaborative projects and gain exposure to cutting-edge research and innovations in physiotherapy.</p>
		<h3 class="tmu-text-primary fs-16 mb-0"><span>Physiotherapy</span><span> OPD/IPD Facilities</span></h3>
		<p class="text-justify">Our department is equipped with both Outpatient Department (OPD) and Inpatient Department (IPD) facilities, providing students with diverse clinical experiences. This exposure is critical for developing well-rounded physiotherapy professionals.</p>
		<h3 class="tmu-text-primary fs-16 mb-0"><span>Well-Maintained Electrotherapy</span><span> and Exercise Therapy Laboratories</span></h3>
		<p class="text-justify">The state-of-the-art electrotherapy and exercise therapy laboratories at TMU are designed to offer students hands-on practice with advanced equipment and technologies, enhancing their learning and practical skills.</p>
		<h3 class="tmu-text-primary fs-16 mb-0"><span>Global Opportunities and</span><span> International Internship Programmes</span></h3>
		<p class="text-justify">We believe in providing our students with global exposure. TMU offers international internship programmes, allowing students to gain insights and experience from healthcare systems around the world.</p>
	</div>
	<!-- Add the horizontal line here -->
	<hr class="horizontal-line">
	<button class="careers-accordion">Career Support and Placement
		<span class="icon">+</span></button>
	<div class="panel">
		<h3 class="tmu-text-primary fs-16 mb-0"><span>100% Placement Assistance</span><span> with an Excellent Track Record</span></h3>
		<p class="text-justify">Our commitment to our students' futures is unwavering. TMU provides 100% placement assistance, and our excellent track record speaks for itself. Our graduates are highly sought after in the industry, because of comprehensive education and training they receive.</p>
		<h3 class="tmu-text-primary fs-16 mb-0"><span>Strong Industry Connections</span><span> for Real-World Insights</span></h3>
		<p class="text-justify">Our strong industry connections ensure that students are well-prepared for the real world. These partnerships provide opportunities for internships, workshops, and placements, giving students a competitive edge in the job market.</p>
	</div>
	<!-- Add the horizontal line here -->
	<hr class="horizontal-line">
	<button class="careers-accordion">Educational Environment
		<span class="icon">+</span></button>
	<div class="panel">
		<h3 class="tmu-text-primary fs-16 mb-0"><span>Modern Classrooms</span><span> for Interactive Sessions</span></h3>
		<p class="text-justify">Our modern classrooms are equipped with the latest technology to facilitate interactive and engaging learning sessions. This environment fosters active participation and enhances the overall learning experience.</p>
		<h3 class="tmu-text-primary fs-16 mb-0"><span>Physiotherapy Labs for</span><span> Practical Training and Experiments</span></h3>
		<p class="text-justify">Practical training is a cornerstone of our curriculum. Our well-equipped physiotherapy labs allow students to conduct experiments and practice their skills in a controlled environment, bridging the gap between theory and practice.</p>
		<h3 class="tmu-text-primary fs-16 mb-0"><span>Advanced Technology and Instruments</span><span> for a Conducive Learning Environment</span></h3>
		<p class="text-justify">TMU continuously invests in advanced technology and instruments, creating a conducive learning environment that keeps pace with the latest advancements in the field of physiotherapy.</p>
	</div>
	<!-- Add the horizontal line here -->
	<hr class="horizontal-line">
	<button class="careers-accordion">Campus Life at TMU
		<span class="icon">+</span></button>
	<div class="panel">
		<h3 class="tmu-text-primary fs-16 mb-0"><span>Comfortable Hostel</span><span> Facilities</span></h3>
		<p class="text-justify">We understand the importance of a comfortable living environment. Our hostel facilities are designed to provide students with a home away from home, ensuring their well-being and comfort.</p>
		<h3 class="tmu-text-primary fs-16 mb-0"><span>Vibrant Campus </span><span> Life</span></h3>
		<p class="text-justify">TMU offers a vibrant campus life with various dynamic events. These extracurricular activities provide a balanced education and opportunities for personal growth and networking.</p>
		<h3 class="tmu-text-primary fs-16 mb-0"><span>On-Campus Shopping</span><span> Stores and Cafeterias</span></h3>
		<p class="text-justify">Our on-campus shopping stores and cafeterias cater to all your needs, ensuring that students have access to essential services and a variety of dining options within the campus.</p>
	</div>
	<!-- Add the horizontal line here -->
	<hr class="horizontal-line">
	<button class="careers-accordion">Core Programmes Offered
		<span class="icon">+</span></button>
	<div class="panel">
		<h3 class="tmu-text-primary fs-16 mb-0"><span>Bachelor of Physiotherapy</span><span> (BPT)</span></h3>
		<p class="text-justify">Our Bachelor of Physiotherapy (BPT) programme is designed to provide a strong foundation in physiotherapy, covering all essential aspects from basic sciences to advanced clinical practice.</p>
		<h3 class="tmu-text-primary fs-16 mb-0"><span>Master of Physiotherapy</span><span> (MPT)</span></h3>
		<p class="text-justify">The Master of Physiotherapy (MPT) programme at TMU offers specialised training in various fields of physiotherapy, preparing graduates for leadership roles in the healthcare sector.</p>
		<h3 class="tmu-text-primary fs-16 mb-0"><span>PhD in </span><span> Physiotherapy</span></h3>
		<p class="text-justify">For those interested in research and academia, our PhD in Physiotherapy programme provides an opportunity to contribute to the advancement of knowledge in the field and develop innovative therapeutic techniques.</p>
	</div>
	<!-- Add the horizontal line here -->
	<hr class="horizontal-line">
	<button class="careers-accordion">Research and Development
		<span class="icon">+</span></button>
	<div class="panel">
		<h3 class="tmu-text-primary fs-16 mb-0"><span>Research and Healthcare </span><span>Development Programmes</span></h3>
		<p class="text-justify">TMU is committed to advancing the field of physiotherapy through research. Our research and healthcare development programmes encourage students and faculty to explore new frontiers and contribute to scientific knowledge.</p>
		<h3 class="tmu-text-primary fs-16 mb-0"><span>Innovative Physiotherapy</span><span> Workshops and Seminars</span></h3>
		<p class="text-justify">We regularly host innovative workshops and seminars, inviting experts from around the world to share their knowledge and experiences. These events provide students with the latest insights and trends in physiotherapy.</p>
	</div>
	<!-- Add the horizontal line here -->
	<hr class="horizontal-line">
	<button class="careers-accordion">Global Exposure and Opportunities
		<span class="icon">+</span></button>
	<div class="panel">
		<h3 class="tmu-text-primary fs-16 mb-0"><span>International Medical Placements</span><span> and Internship Opportunities</span></h3>
		<p class="text-justify">Our global exposure initiatives include international medical placements and internship opportunities, allowing students to gain valuable experience in different healthcare settings across the globe.</p>
		<h3 class="tmu-text-primary fs-16 mb-0"><span>Robust Industry</span><span> Affiliations</span></h3>
		<p class="text-justify">TMU's robust industry affiliations ensure that our students are well-prepared for their careers. These partnerships provide access to a network of professionals and organisations that can help guide and support our students' career paths.</p>
	</div>
	<!-- Add the horizontal line here -->
	<hr class="horizontal-line">
	<button class="careers-accordion">State-of-the-Art Facilities
		<span class="icon">+</span></button>
	<div class="panel">
		<h3 class="tmu-text-primary fs-16 mb-0"><span>Well-Equipped </span><span>Physiotherapy Labs</span></h3>
		<p class="text-justify">Our well-equipped physiotherapy labs provide students with the tools they need to practice and perfect their skills. These facilities are essential for delivering high-quality education and training.</p>
		<h3 class="tmu-text-primary fs-16 mb-0"><span>Advanced Technology for</span><span> Medical Training and Practicals</span></h3>
		<p class="text-justify">TMU is at the forefront of integrating advanced technology into medical training. Our students benefit from the latest innovations, which enhance their learning experience and prepare them for the future.</p>
	</div>
	<!-- Add the horizontal line here -->
	<hr class="horizontal-line">
	<button class="careers-accordion">Accommodation and Student Life
		<span class="icon">+</span></button>
	<div class="panel">
		<h3 class="tmu-text-primary fs-16 mb-0"><span>On-Campus </span><span>Accommodation Facilities</span></h3>
		<p class="text-justify">We offer comfortable on-campus accommodation facilities, ensuring that students have a safe and convenient place to live while they pursue their studies.</p>
		<h3 class="tmu-text-primary fs-16 mb-0"><span>Comfortable Healthcare</span><span> Labs and Facilities</span></h3>
		<p class="text-justify">Our healthcare labs and facilities are designed to provide a comfortable and effective learning environment, supporting students in their educational journey.</p>
	</div>
	<!-- Add the horizontal line here -->
	<hr class="horizontal-line">
	<button class="careers-accordion">Faculty and Learning Experience
		<span class="icon">+</span></button>
	<div class="panel">
		<h3 class="tmu-text-primary fs-16 mb-0"><span>Expert Faculty Ensuring </span><span>Practical Healthcare Knowledge</span></h3>
		<p class="text-justify">Our expert faculty members are dedicated to providing students with practical healthcare knowledge. Their extensive experience and expertise ensure that students receive a well-rounded education.</p>
		<h3 class="tmu-text-primary fs-16 mb-0"><span>Centre for Teaching,</span><span> Learning, and Development</span></h3>
		<p class="text-justify">The Centre for Teaching, Learning, and Development at TMU is committed to continuous improvement in education. It provides resources and support for both students and faculty to enhance the learning experience and get ready for the corporate world.</p>
	</div>
	<!-- Add the horizontal line here -->
	<hr class="horizontal-line">
	<button class="careers-accordion">Conclusion <span class="icon">+</span></button>
	<div class="panel">
		<p class="text-justify">Teerthanker Mahaveer University's Department of Physiotherapy is a premier college for aspiring physiotherapists. With its state-of-the-art facilities, experienced faculty, and commitment to student success, TMU offers an unparalleled education in physiotherapy. Join us and take the first step towards a rewarding career in healthcare.</p>
	</div>
	<hr class="horizontal-line">
	<button class="careers-accordion">FAQs<span class="icon">+</span></button>
	<div class="panel">
		<p class="text-justify"><strong>Q. What is physiotherapy?</strong></p>
		<p class="text-justify">Ans: Physiotherapy is a healthcare profession that focuses on the assessment, diagnosis, and treatment of physical ailments and disabilities using physical methods such as exercise, massage, and other techniques.</p>
		<p class="text-justify"><strong>Q. What do physiotherapists do?</strong></p>
		<p class="text-justify">Ans: Physiotherapists work with patients to manage pain, improve mobility, and prevent further injury. They develop personalised treatment plans and use various therapies to help patients recover from injuries and manage chronic conditions.</p>
		<p class="text-justify"><strong>Q. How to become a physiotherapist?</strong></p>
		<p class="text-justify">Ans: To become a physiotherapist, one typically needs to complete a Bachelor of Physiotherapy (BPT) degree, followed by a Master of Physiotherapy (MPT) if desired. Licensure and certification requirements may vary by region.</p>
		<p class="text-justify"><strong>Q. What are the benefits of physiotherapy?</strong></p>
		<p class="text-justify">Ans: Physiotherapy offers numerous benefits, including pain relief, improved mobility, enhanced recovery from injuries, prevention of future injuries, and better overall physical health.</p>
		<p class="text-justify"><strong>Q. What kind of placements can TMU students expect?</strong></p>
		<p class="text-justify">Ans: TMU provides 100% placement assistance with an excellent track record. Our students have access to a wide range of placement opportunities in top healthcare institutions, both nationally and internationally.</p>
		<!-- <p class="text-justify"><strong></strong></p>
                <p class="text-justify"><strong>Ans:</strong> </p>
                <p class="text-justify"><strong></strong></p>
                <p class="text-justify"><strong>Ans:</strong> </p>

                <p class="text-justify"><strong></strong></p>
                <p class="text-justify"><strong>Ans:</strong> </p>
                <p class="text-justify"><strong></strong></p>
                <p class="text-justify"><strong>Ans:</strong> </p> -->


	</div>
	<hr class="horizontal-line">
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
					cd_id: 7,
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
					cd_id: 7,
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