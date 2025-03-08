@extends('layouts.university.colleges.physiotherapy_with_sidebar')
@section('content')


<link rel="stylesheet" href="{{asset('assets/css/college_overview.css')}}">

<div class="main-content">
	<div class="container">

		<section class="about-section mt-4">
			<div class="container">
				<div class="text-content p-4">
					<h1 class="tmu-text-primary tmu-page-heading"><span> Research </span><span> Lab </span></h1>
				</div>
				<div class="image-content text-center p-4">
					<img src="{{asset('/assets/img/labs/physiotherapy/research/banner.jpg')}}" alt="">
				</div>
				<div class="container p-3">
					<p class="about-p mb-4">Research lab at Department of Physiotherapy, TMU is intended to carry out quality research in the field of physiotherapy. It has state of the art facility for foot posture and motionanalysis which is done by baropodometry. The lab is equipped with incentive spirometry where various breathing patterns can be analysed.The lab also has various other major and minor equipments for qualitative and quantitative analysis.</p>
					<h2 class="tmu-text-primary tmu-page-heading"><span>Infrastructure</span><span></span></h2>
					<h3 class="tmu-text-primary"><span>Our </span><span> Laboratories</span></h3>
					<!-- <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
						<a class="grid-item" href="{{asset('/assets/img/labs/physiotherapy/research/lab2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/labs/physiotherapy/research/lab2.jpg')}}" alt="Gallery Thumb 1"></a>
						<a class="grid-item" href="{{asset('/assets/img/labs/physiotherapy/research/lab3.jpeg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/labs/physiotherapy/research/lab3.jpeg')}}" alt="Gallery Thumb 2"></a>
						<a class="grid-item" href="{{asset('/assets/img/labs/physiotherapy/research/lab2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/labs/physiotherapy/research/lab2.jpg')}}" alt="Gallery Thumb 1"></a>
						<a class="grid-item" href="{{asset('/assets/img/labs/physiotherapy/research/lab3.jpeg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/labs/physiotherapy/research/lab3.jpeg')}}" alt="Gallery Thumb 2"></a>
					</div> -->
					<div class="row justify-content-left gutter-30 col-mb-5 mb-5">
						<div class="col-sm-4 col-md-4">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img src="{{asset('/assets/img/labs/physiotherapy/research/lab2.jpg')}}" height="150px"
										alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">Research Lab</h4><span class="fst-normal fs-12 mb-2"><i
												class="fa-solid fa-location-dot"></i> Department of Physiotherapy, TMU Campus</span>
										<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{ asset('/assets/img/labs/physiotherapy/geotag/research/lab2.jpg') }}" download>
											Download Geo Tag Image
										</a>

									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-4 col-md-4">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img src="{{asset('/assets/img/labs/physiotherapy/research/lab3.jpeg')}}" height="150px"
										alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">Research Lab</h4><span class="fst-normal fs-12 mb-2"><i
												class="fa-solid fa-location-dot"></i> Department of Physiotherapy, TMU Campus</span>
												<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{ asset('/assets/img/labs/physiotherapy/geotag/research/lab3.jpeg') }}" download>
											Download Geo Tag Image
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<h4 class="tmu-text-primary"><span>Labs </span><span> Equipments</span></h4>
					<div class="row">
						<div class="col-md-6">
							<table class="table table-bordered table-striped">
								<thead>
									<tr>
										<th class="text-center">Sl. No.</th>
										<th>Name of Equipments</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="text-center">1</td>
										<td>Baropodometer / Force Platform</td>
									</tr>
									<tr>
										<td class="text-center">2</td>
										<td>Hand dynamometry Kit</td>
									</tr>
									<tr>
										<td class="text-center">3</td>
										<td>Leg and Chest Dynamometer</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="col-md-6">
							<table class="table table-bordered table-striped">
								<thead>
									<tr>
										<th class="text-center">Sl. No.</th>
										<th>Name of Equipments</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="text-center">4</td>
										<td>Inclinometer</td>
									</tr>
									<tr>
										<td class="text-center">5</td>
										<td>Static Cycle</td>
									</tr>
									<tr>
										<td class="text-center">6</td>
										<td>Treadmill</td>
									</tr>
									<tr>
										<td class="text-center">7</td>
										<td>Spirometer</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
</div>
<!-- Bootstrap JS and dependencies -->

@endsection