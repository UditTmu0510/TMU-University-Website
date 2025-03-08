@extends('layouts.university.colleges.physiotherapy_with_sidebar')
@section('content')

<link rel="stylesheet" href="{{asset('assets/css/college_overview.css')}}">


<div class="main-content">
	<div class="container">

		<section class="about-section bg-light mt-4">
			<div class="container">
				<div class="text-content p-4">
					<h1 class="tmu-text-primary tmu-page-heading"><span> Physiotherapy </span><span> OPD </span></h1>
					<p class="about-p mb-3">The department of physiotherapy at TMU Hospital works in close coordination with other departments to deliver quality care to the patients facing inhibitions in movement. It is equipped with state-of-the-art facilities and technologically advanced medical equipment to ensure the swift healing of patients. The Department has Physiotherapy OPD operational in the 1000 bed multi super-specialty.</p>
				</div>
				<div class="image-content text-center p-4">
					<img src="{{asset('/assets/img/labs/physiotherapy/opd/banner.jpg')}}" alt="">
				</div>
				<div class="container p-3">
					<p class="about-p mb-4">The division holds expertise in treating conditions like Arthritis, Chronic Pain Syndrome, Concussion, Frozen Shoulder, Heel and Foot Pain, Lower Back Pain, Motor Vehicle Accident Injuries, Neck Pain, Post Surgery, Repetitive Strain, Sports Injuries, and Tennis Elbow.</p>
					<p class="about-p mb-4">Every physiotherapy professional in the department is backed by extensive experience to render the pre-operative and post-operative physiotherapeutic intervention to the patients. The department of physiotherapy provides supreme therapeutic care ensuring the overall community well-being.</p>
					<p class="about-p mb-4">The OPD includes:</p>
					<ul class="m-ol-list ps-5">
						<li>Orthopedic & Sports Physiotherapy</li>
						<li>Neurological Physiotherapy</li>
						<li>Cardiopulmonary Physiotherapy</li>
						<li>Sports physiotherapy</li>
						<li>Women Health and antenatal care.</li>
					</ul>
					<h2 class="tmu-text-primary tmu-page-heading"><span>Infrastructure</span><span></span></h2>
					<h3 class="tmu-text-primary"><span>Our </span><span> Laboratories</span></h3>
					<!-- <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
						<a class="grid-item" href="{{asset('/assets/img/labs/physiotherapy/opd/opd2.jpeg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/labs/physiotherapy/opd/opd2.jpeg')}}" alt="Gallery Thumb 1"></a>
						<a class="grid-item" href="{{asset('/assets/img/labs/physiotherapy/opd/opd3.jpeg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/labs/physiotherapy/opd/opd3.jpeg')}}" alt="Gallery Thumb 2"></a>
						<a class="grid-item" href="{{asset('/assets/img/labs/physiotherapy/opd/opd4.jpeg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/labs/physiotherapy/opd/opd4.jpeg')}}" alt="Gallery Thumb 1"></a>
						<a class="grid-item" href="{{asset('/assets/img/labs/physiotherapy/opd/opd5.jpeg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/labs/physiotherapy/opd/opd5.jpeg')}}" alt="Gallery Thumb 2"></a>
						<a class="grid-item" href="{{asset('/assets/img/labs/physiotherapy/opd/opd6.jpeg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/labs/physiotherapy/opd/opd6.jpeg')}}" alt="Gallery Thumb 2"></a>
						<a class="grid-item" href="{{asset('/assets/img/labs/physiotherapy/opd/opd7.jpeg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/labs/physiotherapy/opd/opd7.jpeg')}}" alt="Gallery Thumb 2"></a>
						<a class="grid-item" href="{{asset('/assets/img/labs/physiotherapy/opd/opd8.jpeg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/labs/physiotherapy/opd/opd8.jpeg')}}" alt="Gallery Thumb 2"></a>
						<a class="grid-item" href="{{asset('/assets/img/labs/physiotherapy/opd/opd9.jpeg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/labs/physiotherapy/opd/opd9.jpeg')}}" alt="Gallery Thumb 2"></a>
					</div> -->
					<div class="row justify-content-left gutter-30 col-mb-5 mb-5">
						<div class="col-sm-4 col-md-4">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img src="{{asset('/assets/img/labs/physiotherapy/opd/opd2.jpeg')}}" height="150px" alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">Physiotherapy OPD Lab</h4>
										<span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> Department of Physiotherapy, TMU Campus</span>
										<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/labs/physiotherapy/geotag/opd/opd2.jpeg')}}" download>
											Download Geo Tag Image
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-4 col-md-4">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img src="{{asset('/assets/img/labs/physiotherapy/opd/opd3.jpeg')}}" height="150px" alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">Physiotherapy OPD Lab</h4>
										<span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> Department of Physiotherapy, TMU Campus</span>
										<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/labs/physiotherapy/geotag/opd/opd3.jpeg')}}" download>
											Download Geo Tag Image
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-4 col-md-4">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img src="{{asset('/assets/img/labs/physiotherapy/opd/opd4.jpeg')}}" height="150px" alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">Physiotherapy OPD Lab</h4>
										<span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> Department of Physiotherapy, TMU Campus</span>
										<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/labs/physiotherapy/geotag/opd/opd4.jpeg')}}" download>
											Download Geo Tag Image
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-4 col-md-4">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img src="{{asset('/assets/img/labs/physiotherapy/opd/opd5.jpeg')}}" height="150px" alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">Physiotherapy OPD Lab</h4>
										<span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> Department of Physiotherapy, TMU Campus</span>
										<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/labs/physiotherapy/geotag/opd/opd5.jpeg')}}" download>
											Download Geo Tag Image
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-4 col-md-4">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img src="{{asset('/assets/img/labs/physiotherapy/opd/opd6.jpeg')}}" height="150px" alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">Physiotherapy OPD Lab</h4>
										<span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> Department of Physiotherapy, TMU Campus</span>
										<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/labs/physiotherapy/geotag/opd/opd6.jpeg')}}" download>
											Download Geo Tag Image
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-4 col-md-4">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img src="{{asset('/assets/img/labs/physiotherapy/opd/opd7.jpeg')}}" height="150px" alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">Physiotherapy OPD Lab</h4>
										<span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> Department of Physiotherapy, TMU Campus</span>
										<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/labs/physiotherapy/geotag/opd/opd7.jpeg')}}" download>
											Download Geo Tag Image
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-4 col-md-4">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img src="{{asset('/assets/img/labs/physiotherapy/opd/opd8.jpeg')}}" height="150px" alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">Physiotherapy OPD Lab</h4>
										<span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> Department of Physiotherapy, TMU Campus</span>
										<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/labs/physiotherapy/geotag/opd/opd8.jpeg')}}" download>
											Download Geo Tag Image
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-4 col-md-4">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img src="{{asset('/assets/img/labs/physiotherapy/opd/opd9.jpeg')}}" height="150px" alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">Physiotherapy OPD Lab</h4>
										<span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> Department of Physiotherapy, TMU Campus</span>
										<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/labs/physiotherapy/geotag/opd/opd9.jpeg')}}" download>
											Download Geo Tag Image
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-4 col-md-4">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img src="{{asset('/assets/img/labs/physiotherapy/opd/opd10.jpeg')}}" height="150px" alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">Physiotherapy OPD Lab</h4>
										<span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> Department of Physiotherapy, TMU Campus</span>
										<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/labs/physiotherapy/geotag/opd/opd10.jpeg')}}" download>
											Download Geo Tag Image
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-4 col-md-4">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img src="{{asset('/assets/img/labs/physiotherapy/opd/opd11.jpeg')}}" height="150px" alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">Physiotherapy OPD Lab</h4>
										<span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> Department of Physiotherapy, TMU Campus</span>
										<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/labs/physiotherapy/geotag/opd/opd11.jpeg')}}" download>
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
										<td>Muscle Stimulator</td>
									</tr>
									<tr>
										<td class="text-center">2</td>
										<td>Short Wave Diatheramy</td>
									</tr>
									<tr>
										<td class="text-center">3</td>
										<td>Hot Pack</td>
									</tr>
									<tr>
										<td class="text-center">4</td>
										<td>IRR Stand with Lamp</td>
									</tr>
									<tr>
										<td class="text-center">5</td>
										<td>Paraffin Wax Bath</td>
									</tr>
									<tr>
										<td class="text-center">6</td>
										<td>Tens</td>
									</tr>
									<tr>
										<td class="text-center">7</td>
										<td>IFT</td>
									</tr>
									<tr>
										<td class="text-center">8</td>
										<td>Laser</td>
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
										<td class="text-center">9</td>
										<td>UVR Stand with Lamp</td>
									</tr>
									<tr>
										<td class="text-center">10</td>
										<td>CPM</td>
									</tr>
									<tr>
										<td class="text-center">11</td>
										<td>Compression Therapy</td>
									</tr>
									<tr>
										<td class="text-center">12</td>
										<td>Hydrocollator</td>
									</tr>
									<tr>
										<td class="text-center">13</td>
										<td>Traction</td>
									</tr>
									<tr>
										<td class="text-center">14</td>
										<td>Ultrasonic</td>
									</tr>
									<tr>
										<td class="text-center">15</td>
										<td>Weighing Machine</td>
									</tr>
									<tr>
										<td class="text-center">16</td>
										<td>Chest Vibrator</td>
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