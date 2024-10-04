@extends('layouts.university.main')
@section('content')




<link rel="stylesheet" href="{{asset('/assets/css/tmu-testimonial.css')}}">
<link rel="stylesheet" href="{{asset('/assets/css/tmimt.css')}}">
<link rel="stylesheet" href="{{asset('/assets/css/college.css')}}">





<!-- CSS FOR CONVOCATION CARD -->
<style>
	.big-card {
		width: 70vw;
		box-shadow: 2px 2px 10px 2px rgba(0, 0, 0, 0.3);
		height: auto;
		margin: auto;
		position: relative;
		padding-bottom: 50px;
	}

	.big-card-heading {
		width: 95%;
		height: 4rem;
		position: absolute;
		top: 0;
		left: 50%;
		transform: translate(-50%, -50%);
		background-color: white;
		border: 2px solid #0010551e;
		display: flex;
		justify-content: center;
		align-items: center;
	}

	.big-card-heading p {
		color: #001055;
		margin-bottom: 0;
		text-transform: uppercase;
		font-weight: 400;
	}

	.big-card h4 {
		font-weight: 400;
	}

	.big-card .min-text {
		color: #fe8d00;
		font-size: 12px;
		margin: 0;
		padding: 0;
		width: fit-content;
	}

	.big-card .main-text {
		font-size: 18px;
		text-align: justify;
	}

	.m-custom-card {
		height: 150px;
		box-shadow: 4px 4px 10px 6px rgba(0, 0, 0, 0.07);
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		/* background: linear-gradient(115deg, rgba(251, 215, 134, 0.3), rgba(198, 255, 221, 0.3)); */
		background-color: rgba(205, 205, 205, 0.2);
		/* border:1px solid rgba(0, 0, 0, 0.01);  */
		transition: 0.2s all;
	}

	.m-custom-card img {
		width: 20%;
	}

	.m-custom-card span {
		text-transform: uppercase;
		font-size: 12px;
		margin-top: 20px;
		width: fit-content;
		font-weight: 500;
		text-align: center;
	}

	.m-custom-card:hover {
		scale: 0.99;
		box-shadow: 1px 1px 4px 2px rgba(0, 0, 0, 0.05);
		cursor: pointer;
	}

	@media screen and (max-width:992px) {
		.big-card {
			width: 90vw;
		}
	}

	@media screen and (max-width:480px) {
		.big-card {
			width: 90vw;
		}

		.big-card-heading {
			width: 85%;
		}

		.big-card-heading p {
			font-size: 19px;
		}

		.big-card .main-text {
			font-size: 14px;
		}

		.m-custom-card span {
			font-size: 15px;
		}
	}
</style>

<!-- Carousel CSS Code  -->




<section id="content">
	<div class="content-wrap py-0">

		<div class="container-fluid  my-0 px-2">
			<div class="row ps-4">
				<div class="col-md-6 pt-0 pt-md-4 ps-md-5 mb-4">
					<h1 class=" mt-5 mb-5 d-none d-md-block  banner-main-heading">Welcome to the <br> <span style="font-weight:700!important;">Centre of </span> Jain Studies </h1>
					<h1 class=" mt-5 mb-3 d-block d-md-none" style="color:#001055; text-transform: capitalize; font-weight:700!important; font-size:24px">Welcome to the <span>Centre of </span> Jain Studies</h1>
					<a href="https://admissions.tmu.ac.in/" class="tmu-btn btn-1 me-4 py-1 px-3 py-xl-2 px-xl-4">Apply Now</a>
				</div>
				<div class="col-12 col-md-6">
					<div class="pe-lg-4 position-relative p-0">
						<div style="z-index: 2;">
							<!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/iXHRmCyHszY?si=BcZ5NOfT-V8ECc6z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="z-index: 2; margin:0;"></iframe> -->
							<img src="{{asset('assets/img/banner/jain_studies/jain_studies.webp')}}" alt="" class="p-0 m-0">
						</div>
					</div>
				</div>
			</div>
		</div>


		<!-- College Highlights -->

		<div class="container my-3 d-none d-md-block">
			<div class="row justify-content-center">
				<div class="col-6 col-lg-3 px-1">
					<div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
						<div class="card-body gap-4 text-tmu-primary under-banner-cards">
							<span>2014</span>
							<br>
							<span class="d-block pt-1">Year of<br>Establishment</span>
						</div>
					</div>
				</div>
				<div class="col-6 col-lg-3 px-1">
					<div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
						<div class="card-body gap-4 text-tmu-primary under-banner-cards">
							<span>Books & Magazines</span>

							<br>
							<span class="d-block pt-1">Books – 678 <br> Magazines – 10</span>
						</div>
					</div>
				</div>
				<div class="col-6 col-lg-3 px-1">
					<div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
						<div class="card-body gap-4 text-tmu-primary under-banner-cards">
							<span> Jain Temple </span>

							<span class="d-block pt-1">Teerthanker Mahaveer Jinalaya</span>



						</div>
					</div>
				</div>
				<div class="col-6 col-lg-3 px-1">
					<div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
						<div class="card-body gap-4 text-tmu-primary under-banner-cards">
							<span>E-Journals</span>
							<br>
							<span class="d-block pt-1">E-journals EBSCO & DELNET</span>
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
										<span>India's 1st</span>
										<br>
										<span class="d-block pt-1">Centre of Excellence in Cybersecurity</span>
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

		<!-- About section -->


		<div class="box-container">
			<div class="box">

				<h2 class="tmu-text-primary pb-0 pt-4 text-uppercase ceremony-title fw-bold"><span>Centre of </span> <span> Jain Studies </span></h2>


				<div class="row text-centre">
					<div class="col-12 px-2 px-md-5">
						<p style="text-align: justify;">The Centre of Jain Studies has been established to impart moral education, comparative studies of different philosophies, and comprehensive research in religious studies. Though ancient, Jain philosophy is quite relevant to modern society and proposes solutions for many problems of the modern world. With an experience-based worldview of the universe as a reality, a rational theory of karma, a reverence for all life.</p>
						<div class="read-more-content mt-0">
							<p style="text-align: justify;">Though ancient, Jain philosophy is quite relevant to modern society and proposes solutions for many problems of the modern world. With an experience-based world-view of the universe as a reality, a rational theory of karma, a reverence for all life, the philosophy promotes a lifestyle that preserves our ecosystems. Practitioners of Jain philosophy respect different viewpoints and advance personal as well as global peace.</p>

							<p style="text-align: justify;">The core principles of Jain philosophy - Non-Violence, Non-Absolutism and Non-Possessiveness may prove to be the foundation for world peace. The students receive theoretical as well as practical knowledge of Jain philosophy, based on the principles of truth and non-violence.</p>

							<p style="text-align: justify;">The College offers BA, MA and Doctoral study programmes with special emphasis on Jain studies. After successfully completing the course, the students are eligible for government and non-government services. Also, the alumni can work independently as Vidhanacharya, Pritishthacharya, Jyotishacharya and Vastuvid.</p>

							<p style="text-align: justify;">Students in the Jain Studies concentration study Jain philosophy, ethics, and living streams of religious experience based on non-harming. Students will have the opportunity to explore Jain culture’s primary texts, doctrines, and their contemporary application. Research topics may include diaspora Jainism, sacred and commentarial literature, pilgrimage, ritual, material culture, monastic traditions, lived Jainism and cultural exchange, Jainism and ecology, and Jainism and the natural sciences. The Jain tradition will be studied in conversation with the other Dharma traditions (Hindu and Buddhist) in order to deepen understanding of their mutual illumination as well as the unique contributions of Jainism.</p>
						</div>
						<a href="javascript:void(0);" class="tmu-btn btn-1 py-2 mt-4 read-more ms-2 mt-2" title="Read More">Read More</a>

					</div>

				</div>
			</div>
		</div>



		<!-----Courses section Start-->
	
		<!-----Courses section completed-->


		<!-- endowment -->

		<div class="container">
			<div class="box">
				<header class="section-header text-center wow zoomIn">
					<h2 class="tmu-text-primary tmu-page-heading mb-sm-5 mt-md-4"><span>TMU's signature of an MOU for an </span><span>"Endowment Chair" was a source of pride.</span></h2>
				</header>

				<div class="row">
					<div class="col-12 px-2 px-md-5">
						<img src="{{asset('/assets/img/gallery/jain_studies/endowment/2.webp')}}" alt="">
						<p style="text-align: justify;">In honour of Parmar Kshatriyaoddharak Jaincharya Shrimad Vijay Indradinn Surishwar Ji Maharaj Saheb's 100th birthday, Teerthanker Mahaveer University in Moradabad, Uttar Pradesh, and Shree Ostra Parshvanath Jain Shwetamber Murtipujak Trust came together. With the blessings of Vartman Gacchadhapati Shrimad Vijay Dharamdhurandher Suri Ji Maharaj Saheb, "Endowment Chair" was established.</p>
						<div class="read-more-content mt-0">
							<p style="text-align: justify;">Dr. Aditya Sharma (Registrar) and Dr. Jay Kumar Dhaddha signed an MOU during the occasion to establish a "Endowment Chair" (Trustee).</p>

							<p style="text-align: justify;">As part of the vision, the establishment of "Endowment Chair" was the primary goal of this MOU for the parties. The "Endowment Chair's" curriculum was created with the intention of assisting the university's intellectual, teaching, and research endeavours. In addition, it will plan and carry out short-term programmes for teachers that focus on the chair's specified discipline.</p>

							<p style="text-align: justify;">Aacharya Shrimadh Vijay Dharmdhunrandher Surishwar Ji Maharaj Saheb received the MOU from Shri Suresh Jain (Chancellor) and other dignitaries in exchange for his blessings. Shri Suresh Jain, the Chancellor, spoke about how even a modest act of kindness to the underprivileged section in society can result in significant change. He made a point of highlighting the importance of education in advancing our civilization. He asserted that people might learn and arrive at a path that offers them holistic growth through the teachings of Jainism.</p>

							<p style="text-align: justify;">The Endowment Chair's functions will include the selection of a distinguished and eminent professor, promotion of study programmes and educational programmes, including degree programmes, diplomas, certification programmes, etc., within the context of the TMU Moradabad in the field of Jainism, and dissemination of Jainism's tenets. In order to increase knowledge in the field of study, it is important to promote Ph.D., other research, and creative programmes for Jain philosophy.</p>

							<div class="section bg-transparent mt-0" style="margin-bottom:30px;">
								<div class="row justify-content-center ">
									<div class="col-xl-10 col-lg-10 text-center d-none d-sm-block">

										<h2 class="tmu-text-primary"><span>GALLERY</span></h2>

									</div>
									<div class="col-xl-10 col-lg-10 text-center d-block d-sm-none">
										<h2 class="tmu-text-primary"><span>GALLERY</span></h2>

									</div>
								</div>

								<div class="owl-carousel owl-carousel-full image-carousel carousel-widget charity-card"
									data-stage-padding="20" data-margin="10" data-center="true" data-loop="true" data-nav="true"
									data-autoplay="2000" data-speed="400" data-pagi="true" data-items-xs="1" data-items-sm="2"
									data-items-md="2" data-items-lg="3" data-items-xl="4">

									<div class="oc-item text-start">
										<img src="{{asset('/assets/img/gallery/jain_studies/endowment/1.webp')}}" alt="Image 1" class="rounded">

									</div>

									<div class="oc-item text-start">
										<img src="{{asset('/assets/img/gallery/jain_studies/endowment/2.webp')}}" alt="Image 1" class="rounded">

									</div>

									<div class="oc-item text-start">
										<img src="{{asset('/assets/img/gallery/jain_studies/endowment/3.webp')}}" alt="Image 1" class="rounded">

									</div>
									<div class="oc-item text-start">
										<img src="{{asset('/assets/img/gallery/jain_studies/endowment/4.webp')}}" alt="Image 1" class="rounded">

									</div>
									<div class="oc-item text-start">
										<img src="{{asset('/assets/img/gallery/jain_studies/endowment/5.webp')}}" alt="Image 1" class="rounded">

									</div>
									<div class="oc-item text-start">
										<img src="{{asset('/assets/img/gallery/jain_studies/endowment/6.webp')}}" alt="Image 1" class="rounded">

									</div>




								</div>
							</div>
						</div>



						<a href="javascript:void(0);" class="tmu-btn btn-1 py-2 mt-4 read-more ms-2 mt-2" title="Read More">Read More</a>

					</div>

				</div>



			</div>
		</div>



		<!-- Principal desk -->

		<section id="slider" class="slider-element py-5 mt-lg-5">
			<div class="container">

				<h2 class="tmu-text-primary text-center"><span>Principal's </span><span> desk</span></h2>

				<div class="row flex-sm-row-reverse justify-content-center justify-content-lg-between col-mb-80">
					<div class="col-lg-5 col-8">
						<div class="dotted-bg">
							<img src="{{asset('assets/img/principal/jain_studies/principal.png')}}" alt="Image 1" class="d-flex z-1 ms-auto w-100 position-relative" style="border-radius: 2rem;">
						</div>
					</div>
					<div class="col-lg-7">


						<div class="row col-mb-30">

							<div class="col-md-12 col-sm-12">
								<div class="card counter-card">
									<div class="card-body">
										<h3 class="card-title-job" style="text-align: center; margin: 0px !important;">"Learn to labor before you grow old for knowledge is better than silver or gold. Silver or gold may perish away but acquired knowledge will never decay"</h3>

									</div>
								</div>
								<p class="card-text text-color" style="text-align: justify; font-size: 18px; font-weight: 200; margin: 10px ">Teerthanker Mahaveer University is imparting world class education by means of more than 100 different courses. Centre for Jain Studies was started for imparting moral education, comparative studies of different philosophies & arranging for research work. The main principle of Jain Philosophy i.e. Non-Violence, Non-Absolutism & Non-Possessiveness may prove to be solid base for world peace. Proper education is a key to prosperity. Though Jain Philosophy is an ancient one, yet it has a great deal of relevance for the modern society & has solutions of many problems of recent world.

									By following the principle of Non-Violence, huge defense expenditure of the world may be saved to a great extent & may be used uplifting the life of human beings.
									Similarly the principle of Non-Possessiveness will reduce economic disparity & principle of Non-Absolutism will increase harmony of thoughts among family members, society & persons having different viewpoints. The principles of Right Faith, Right Knowledge & Right Conduct which are the ideal principles of university are the basis of world peace.

									Students are advised to join the course of B.A. (Jainology) & M.A. (Jainology) & receive moral education which may enable to be a good citizen of the country, besides being the means of livelihood.</p>
							</div>

							<div class="person-details" style="line-height: 1.2rem !important;">Prof. (Dr.) Vipin Jain <br>
								<span>Principal</span><br>
								<span>Centre of Jain Studies</span><br>
							</div>


						</div>
					</div>
				</div>
			</div>
		</section>





		<!-- GAllery section -->


		<div class="section bg-transparent mt-0" style="margin-bottom:30px;">
			<div class="row justify-content-center ">
				<div class="col-xl-10 col-lg-10 text-center d-none d-sm-block">

					<h2 class="tmu-text-primary"><span>GALLERY</span></h2>

				</div>
				<div class="col-xl-10 col-lg-10 text-center d-block d-sm-none">
					<h2 class="tmu-text-primary"><span>GALLERY</span></h2>

				</div>
			</div>

			<div class="owl-carousel owl-carousel-full image-carousel carousel-widget charity-card"
				data-stage-padding="20" data-margin="10" data-center="true" data-loop="true" data-nav="true"
				data-autoplay="2000" data-speed="400" data-pagi="true" data-items-xs="1" data-items-sm="2"
				data-items-md="2" data-items-lg="3" data-items-xl="4">

				<div class="oc-item text-start">
					<img src="{{asset('/assets/img/gallery/jain_studies/1.jpg')}}" alt="Image 1" class="rounded">

				</div>

				<div class="oc-item text-start">
					<img src="{{asset('/assets/img/gallery/jain_studies/2.jpg')}}" alt="Image 1" class="rounded">

				</div>

				<div class="oc-item text-start">
					<img src="{{asset('/assets/img/gallery/jain_studies/3.jpg')}}" alt="Image 1" class="rounded">

				</div>




			</div>
		</div>




		<!-- testimonials -->


		<!--<section>-->
		<!--	<div class="container-xl tmu-testimonial mt-5 mb-3">-->

		<!--		<h2 class="tmu-text-primary my-0 mb-3"> <span>Testimonial</span></h2>-->

		<!--		<div class="owl-carousel owl-carousel-full image-carousel carousel-widget charity-card" style="overflow: visible;" data-stage-padding="20" data-margin="50" data-center="true" data-loop="true" data-nav="true" data-autoplay="2000" data-speed="2000" data-pagi="true" data-items-xs="1" data-items-sm="2" data-items-md="2" data-items-lg="3" data-items-xl="3">-->


		<!--			@foreach($testimonials as $testimonial)-->
		<!--			<div class="oc-item text-start">-->
		<!--				<div class="media">-->
		<!--					<img src="{{asset($testimonial->thumbnail_path)}}" class="me-3" alt="">-->
		<!--					<div class="media-body">-->
		<!--						<div class="testimonial">-->
		<!--							<p class="overview mb-3 fs-14">-->
		<!--								<b class="fs-16">{{$testimonial->student_name}}</b> <br>-->
		<!--								{{$testimonial['programme_name']['prog_name']}} ({{$testimonial->admitted_year}} - {{$testimonial->passout_year}})-->
		<!--								<span>-->
		<!--									<a href="{{$testimonial->linkedin_url}}" class="px-2 py-1 linkedin-text">-->
		<!--										Linkedin <i class="bi bi-linkedin"></i>-->
		<!--									</a>-->
		<!--								</span>-->
		<!--							</p>-->
		<!--							<p class="testimonial-content47">{{ $testimonial->testimonial_text }}</p>-->
		<!--						</div>-->
		<!--					</div>-->
		<!--					<div class="mx-auto my-0 d-flex align-items-center tmu-fs-14">-->
		<!--						<button class="tmu-btn btn-3 py-2 d-block pe-3" onclick="showTestimonialModal()">Read More <i class="bi bi-chevron-down"></i></button>-->
		<!--					</div>-->
		<!--				</div>-->
		<!--			</div>-->
		<!--			@endforeach-->

		<!--		</div>-->

		<!--	</div>-->

			<!-- Testimonial Modal -->
		<!--	<div id="testimonialModal" class="tmu-modal">-->
		<!--		<div class="overlay" onclick="closeTestimonialModal()"></div>-->
		<!--		<div class="tmu-modal-box">-->
		<!--			<div class="close-btn" onclick="closeTestimonialModal()">x</div>-->
		<!--			<div class="tmu-testimonial bg-light">-->
		<!--				<div class="media">-->
		<!--					<img src="https://www.tmu.ac.in/monaco/assets/image/testimonials/abdul_india_mart_mba.webp" class="mr-3" alt="">-->
		<!--					<div class="media-body">-->
		<!--						<div class="testimonial">-->
		<!--							<p class="overview mb-3 testimonial-user-name"><b>Abdul Malik Khan</b>, MBA</p>-->
		<!--							<p class="testimonial-content">TMU, for me, is not just an MBA destination, it's the crucible where my leadership skills-->
		<!--								were forged. Beyond textbooks and case studies, TMU offered a dynamic learning-->
		<!--								environment where theories met practical challenges. It's a journey where I honed the-->
		<!--								skills that set me apart in the dynamic landscape of business and management.-->
		<!--							</p>-->
		<!--						</div>-->
		<!--					</div>-->
		<!--				</div>-->
		<!--			</div>-->
		<!--		</div>-->
		<!--	</div>-->
		<!--					</div>-->
		<!--</section>-->



			<!-- FAqs -->


	</div>
</section>

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
					cd_id: 2,
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
					cd_id: 2,
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