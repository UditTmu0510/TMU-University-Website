@extends('layouts.university.departments.iic_with_sidebar')
@section('content')


<div class="main-content">
	<div class="crc-slider-container">
		<div class="crc-slider-content">
			<div class="crc-slider-slides">
				<div class="crc-slide">
					<img src="{{asset('/assets/img/banner_overview/iic/IIC-Banner-1250-360-01.jpg')}}" alt="Slide 1">
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<h1 class="tmu-text-primary tmu-page-heading"><span> Welcome to</span> <span>TMU IIC</span></h1>

		<p class="mb-2 text-justify">
			Ministry of Education (MoE), Govt. of India has established ‘MoE’s Innovation Cell (MIC)’ to systematically foster the culture of Innovation amongst all Higher Education Institutions (HEIs). The primary mandate of MIC is to encourage, inspire and nurture young students by supporting them to work with new ideas and transform them into prototypes while they are in their formative years.
		</p>
		<p class="mb-3 text-justify">
			MIC has envisioned encouraging the creation of ‘Institution’s Innovation Council (IICs)’ across selected HEIs. A network of these IICs will be established to promote innovation in the Institution through multitudinous modes leading to an innovation promotion eco-system in the campuses. <br>
		<h3 class="mb-2 pb-0 fw-bold tmu-text-primary"><span>The Major focus </span><span>of IIC</span> </h3>
		<ol class="m-ol-list ps-5">
			<li>To create a vibrant local innovation ecosystem.</li>
			<li>Start-up supporting mechanism in HEIs.</li>
			<li>Prepare institute for Atal Ranking of institutions on innovation achievements framework.</li>
			<li>Establish a functional ecosystem for scouting ideas and pre-incubation of ideas.</li>
			<li>Develop better cognitive ability for technology students.</li>
		</ol>

		<h3 class="mb-2 pb-0 fw-bold tmu-text-primary"><span>Functions </span><span> of IICs</span> </h3>
		<ol class="m-ol-list ps-5">
			<li>To conduct various innovation and entrepreneurship-related activities prescribed by Central MIC in time bound fashion.</li>
			<li>Identify and reward innovations and share success stories.</li>
			<li>Organize periodic workshops/ seminars/ interactions with entrepreneurs, investors, professionals and create a mentor pool for student innovators.</li>
			<li>Network with peers and national entrepreneurship development organizations.</li>
			<li>Create an Institution’s Innovation portal to highlight innovative projects carried out by the institution’s faculty and students.</li>
			<li>Organise Hackathons, idea competitions, mini-challenges etc.</li>
		</ol>


		<div class="container">
			<div class="row px-2 px-md-0">
				<div class="col-12 col-md-3 py-4 py-md-2 px-3">
					<a href="{{asset('assets/pdf/Innovation%20and%20Startup%20Policy%202019.pdf')}}" target="_blank" style="color:rgba(0,0,0,0.9);">
						<div class="m-custom-card">
							<img src="https://cdn-icons-png.flaticon.com/128/5968/5968746.png" alt="">
							<span>Innovation and Startup Policy</span>
						</div>
					</a>
				</div>
				<div class="col-12 col-md-3 py-4 py-md-2 px-3">
					<a href="{{route('research.policy')}}" target="_blank" style="color:rgba(0,0,0,0.9);">
						<div class="m-custom-card">
							<img src="https://cdn-icons-png.flaticon.com/128/2991/2991109.png" alt="">
							<span>Vice Chancellor Innovation Fund </span>
						</div>
					</a>
				</div>
				<div class="col-12 col-md-3 py-4 py-md-2 px-3">
					<a href="{{route('research.publication')}}" target="_blank" style="color:rgba(0,0,0,0.9);">
						<div class="m-custom-card">
							<img src="https://cdn-icons-png.flaticon.com/128/6462/6462790.png" alt="">
							<span>Research Publication</span>
						</div>
					</a>
				</div>
				<div class="col-12 col-md-3 py-4 py-md-2 px-3">
					<a href="{{route('patent')}}" target="_blank" style="color:rgba(0,0,0,0.9);">
						<div class="m-custom-card">
							<img src="https://cdn-icons-png.flaticon.com/128/2874/2874808.png" alt="">
							<span>Patenting Information</span>
						</div>
					</a>
				</div>
			</div>
		</div>

		<!-- Certificates section -->
		<div class="container">
			<h2 class="mt-3 mt-lg-5 mb-lg-0 tmu-text-primary text-center">
				<span>Certification </span><span>Gallery</span>
			</h2>

			<div class="row d-none d-md-flex" data-lightbox="gallery">
				<div class="col-sm-6 col-md-3 p-4" style="box-sizing:border-box;">
					<div class="position-relative">
						<img class="d-block w-100" src="{{ asset('/assets/img/department/iic/certificates/certificate1.jpg') }}" alt="Gallery Thumb 1">
						<div class="bg-overlay">
							<div class="bg-overlay-content dark justify-content-end align-items-end" data-hover-animate="fadeIn">
								<a href="{{ asset('/assets/img/department/iic/certificates/certificate1.jpg') }}" class="overlay-trigger-icon size-sm bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item">
									<i class="uil uil-plus"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3 p-4" style="box-sizing:border-box;">
					<div class="position-relative">
						<img class="d-block w-100" src="{{ asset('/assets/img/department/iic/certificates/certificate2.jpg') }}" alt="Gallery Thumb 2">
						<div class="bg-overlay">
							<div class="bg-overlay-content dark justify-content-end align-items-end" data-hover-animate="fadeIn">
								<a href="{{ asset('/assets/img/department/iic/certificates/certificate2.jpg') }}" class="overlay-trigger-icon size-sm bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item">
									<i class="uil uil-plus"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3 p-4" style="box-sizing:border-box;">
					<div class="position-relative">
						<img class="d-block w-100" src="{{ asset('/assets/img/department/iic/certificates/certificate3.webp') }}" alt="Gallery Thumb 3">
						<div class="bg-overlay">
							<div class="bg-overlay-content dark justify-content-end align-items-end" data-hover-animate="fadeIn">
								<a href="{{ asset('/assets/img/department/iic/certificates/certificate3.webp') }}" class="overlay-trigger-icon size-sm bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item">
									<i class="uil uil-plus"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3 p-4" style="box-sizing:border-box;">
					<div class="position-relative">
						<img class="d-block w-100" src="{{ asset('/assets/img/department/iic/certificates/certificate4.webp') }}" alt="Gallery Thumb 4">
						<div class="bg-overlay">
							<div class="bg-overlay-content dark justify-content-end align-items-end" data-hover-animate="fadeIn">
								<a href="{{ asset('/assets/img/department/iic/certificates/certificate4.webp') }}" class="overlay-trigger-icon size-sm bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item">
									<i class="uil uil-plus"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3 p-4" style="box-sizing:border-box;">
					<div class="position-relative">
						<img class="d-block w-100" src="{{ asset('/assets/img/department/iic/certificates/certificate5.jpg') }}" alt="Gallery Thumb 5">
						<div class="bg-overlay">
							<div class="bg-overlay-content dark justify-content-end align-items-end" data-hover-animate="fadeIn">
								<a href="{{ asset('/assets/img/department/iic/certificates/certificate5.jpg') }}" class="overlay-trigger-icon size-sm bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item">
									<i class="uil uil-plus"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3 p-4" style="box-sizing:border-box;">
					<div class="position-relative">
						<img class="d-block w-100" src="{{ asset('/assets/img/department/iic/certificates/certificate6.jpg') }}" alt="Gallery Thumb 6">
						<div class="bg-overlay">
							<div class="bg-overlay-content dark justify-content-end align-items-end" data-hover-animate="fadeIn">
								<a href="{{ asset('/assets/img/department/iic/certificates/certificate6.jpg') }}" class="overlay-trigger-icon size-sm bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item">
									<i class="uil uil-plus"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3 p-4" style="box-sizing:border-box;">
					<div class="position-relative">
						<img class="d-block w-100" src="{{ asset('/assets/img/department/iic/certificates/certificate7.jpg') }}" alt="Gallery Thumb 7">
						<div class="bg-overlay">
							<div class="bg-overlay-content dark justify-content-end align-items-end" data-hover-animate="fadeIn">
								<a href="{{ asset('/assets/img/department/iic/certificates/certificate7.jpg') }}" class="overlay-trigger-icon size-sm bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item">
									<i class="uil uil-plus"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3 p-4" style="box-sizing:border-box;">
					<div class="position-relative">
						<img class="d-block w-100" src="{{ asset('/assets/img/department/iic/certificates/certificate8.jpg') }}" alt="Gallery Thumb 8">
						<div class="bg-overlay">
							<div class="bg-overlay-content dark justify-content-end align-items-end" data-hover-animate="fadeIn">
								<a href="{{ asset('/assets/img/department/iic/certificates/certificate8.jpg') }}" class="overlay-trigger-icon size-sm bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item">
									<i class="uil uil-plus"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="owl-carousel d-block d-md-none" id="owl-certificate">
				<div class="item"><img src="{{asset('/assets/img/department/iic/certificates/certificate1.jpg')}}" alt="Certificate"></div>
				<div class="item"><img src="{{asset('/assets/img/department/iic/certificates/certificate2.jpg')}}" alt="Certificate"></div>
				<div class="item"><img src="{{asset('/assets/img/department/iic/certificates/certificate3.webp')}}" alt="Certificate"></div>
				<div class="item"><img src="{{asset('/assets/img/department/iic/certificates/certificate4.webp')}}" alt="Certificate"></div>
				<div class="item"><img src="{{asset('/assets/img/department/iic/certificates/certificate5.jpg')}}" alt="Certificate"></div>
				<div class="item"><img src="{{asset('/assets/img/department/iic/certificates/certificate6.jpg')}}" alt="Certificate"></div>
				<div class="item"><img src="{{asset('/assets/img/department/iic/certificates/certificate7.jpg')}}" alt="Certificate"></div>
				<div class="item"><img src="{{asset('/assets/img/department/iic/certificates/certificate8.jpg')}}" alt="Certificate"></div>
			</div>

		</div>



		<!-- News Section -->
		<div class="section bg-transparent my-0 pt-2 pb-4 py-lg-5">
			<div class="container">

				<div class="row justify-content-between col-mb-50">
					<div class="col-lg-2 pb-0">
						<!-- <h4 class="color mb-2 fw-normal">Convocation <span style="color:#001055;">News</span></h4> -->
						<h2 class="tmu-text-primary mt-3 text-center"> <span>IIC </span><span>News</span></h2>

						<!-- <p class="font-primary fw-light text-black">Interactively seize bricks-and-clicks channels before empowered users.</p> -->
						<!-- <a href="/block-content-blog.html" class="button button-dark bg-dark bg-opacity-10 text-dark h-bg-color m-0 px-4 py-2 d-block mx-auto mx-md-1 d-none d-md-block">View all Posts</a> -->
						<a href="{{ url('/news?category=IIC') }}" class="tmu-btn btn-1 d-none d-md-block py-2 mb-3 w-fit-content mx-auto">View all Post</a>
					</div>

					<div class="col-lg-9">
						<div class="dotted-bg" style="--cnvs-dotted-opacity: .5; --cnvs-dotted-top: -10px; --cnvs-dotted-size: 150px; "></div>
						<div id="owl-demo" class="owl-carousel ">
							@foreach($news as $item)
							<div class="item entry mx-2">
								<div class="entry-image">
									<img src="{{asset($item->ti_path)}}" alt="...">
								</div>
								<div class="entry-meta mb-2 fw-normal">
									<ul>
										<li><a href="#">{{$item->event_date}}</a></li>
									</ul>
								</div>
								<div class="entry-title title-sm mb-3">
									<h3 class="text-transform-none ls-0 fw-medium font-body">
										<a href="#">{{ Str::limit($item->event_title, 70) }}</a>
									</h3>
								</div>
								<a href="{{ url('news/' . $item->n_slug) }}" target="_blank" class="stretched-link h-color h-op-08">
									Read More <i class="bi-arrow-up-right transform-ts"></i>
								</a>
							</div>
							@endforeach



						</div>

						<!-- <a href="https://www.tmu.ac.in/news/guest-lecture-on-cutting-edge-instrumentation-in-forensic-science" class="button d-block d-md-none button-dark bg-dark bg-opacity-10 text-dark h-bg-color m-0 px-4 py-2 d-block mx-auto mx-md-1 mt-4">View all Posts</a> -->
						<a href="{{ url('/news?category=IIC') }}" class="tmu-btn btn-1 d-block d-md-none mt-4"> View all Post</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

@endsection