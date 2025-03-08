@extends('layouts.university.colleges.physiotherapy_with_sidebar')
@section('content')

<link rel="stylesheet" href="{{asset('assets/css/college_overview.css')}}">


<div class="main-content">
	<div class="container">

		<section class="about-section bg-light mt-4">
			<div class="container">
				<div class="text-content p-4">
					<h1 class="tmu-text-primary tmu-page-heading"><span> ElectroTherapy </span><span> Lab </span></h1>
				</div>
				<div class="image-content text-center p-4">
					<img src="{{asset('/assets/img/labs/physiotherapy/electrotherapy/banner.jpg')}}" alt="">
				</div>
				<div class="container p-3">
					<p class="about-p mb-4">The Electrotherapy demonstration lab in the Department of Physiotherapy is equipped with various electrotherapy modalities. Modalities are used to demonstrate various techniques of electrotherapy. The students learn various skills of treatment which they will use while treating the patient.</p>
					<h2 class="tmu-text-primary tmu-page-heading"><span>Infrastructure</span><span></span></h2>
					<!-- <h3 class="tmu-text-primary"><span>Our </span><span> Laboratories</span></h3>

					<div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
						<a class="grid-item" href="{{asset('/assets/img/labs/physiotherapy/electrotherapy/lab3.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/labs/physiotherapy/electrotherapy/lab3.jpg')}}" alt="Gallery Thumb 1"></a>
						<a class="grid-item" href="{{asset('/assets/img/labs/physiotherapy/electrotherapy/lab4.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/labs/physiotherapy/electrotherapy/lab4.jpg')}}" alt="Gallery Thumb 2"></a>
						<a class="grid-item" href="{{asset('/assets/img/labs/physiotherapy/electrotherapy/lab3.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/labs/physiotherapy/electrotherapy/lab3.jpg')}}" alt="Gallery Thumb 1"></a>
						<a class="grid-item" href="{{asset('/assets/img/labs/physiotherapy/electrotherapy/lab4.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/labs/physiotherapy/electrotherapy/lab4.jpg')}}" alt="Gallery Thumb 2"></a>
					</div> -->
					<h3 class="tmu-text-primary"><span>Our </span><span> Laboratories</span></h3>
					<div class="row justify-content-left gutter-30 col-mb-5 mb-5">
						<div class="col-sm-4 col-md-4">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img src="{{asset('/assets/img/labs/physiotherapy/electrotherapy/lab3.jpg')}}" height="150px"
										alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">ElectroTherapy Lab</h4><span class="fst-normal fs-12 mb-2"><i
												class="fa-solid fa-location-dot"></i> Department of Physiotherapy, TMU Campus</span>
										<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{ asset('/assets/img/labs/physiotherapy/geotag/electrotherapy/lab3.jpg') }}" download>
											Download Geo Tag Image
										</a>

									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-4 col-md-4">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img src="{{asset('/assets/img/labs/physiotherapy/electrotherapy/lab4.jpg')}}" height="150px"
										alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">ElectroTherapy Demo Lab</h4><span class="fst-normal fs-12 mb-2"><i
												class="fa-solid fa-location-dot"></i> Department of Physiotherapy, TMU Campus</span>
												<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{ asset('/assets/img/labs/physiotherapy/geotag/electrotherapy/lab4.jpg') }}" download>
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
										<td>Traction</td>
									</tr>
									<tr>
										<td class="text-center">2</td>
										<td>Muscle Stimulator</td>
									</tr>
									<tr>
										<td class="text-center">3</td>
										<td>Tens</td>
									</tr>
									<tr>
										<td class="text-center">4</td>
										<td>Ultrasound</td>
									</tr>
									<tr>
										<td class="text-center">5</td>
										<td>Short Wave Diathermy</td>
									</tr>
									<tr>
										<td class="text-center">6</td>
										<td>IFT</td>
									</tr>
									<tr>
										<td class="text-center">7</td>
										<td>UVR Stand with Lamp</td>
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
										<td class="text-center">8</td>
										<td>Treadmill</td>
									</tr>
									<tr>
										<td class="text-center">9</td>
										<td>Stadiometer</td>
									</tr>
									<tr>
										<td class="text-center">10</td>
										<td>Ice Pack</td>
									</tr>
									<tr>
										<td class="text-center">11</td>
										<td>Paraffin Wax Bath</td>
									</tr>
									<tr>
										<td class="text-center">12</td>
										<td>Hydrocollator</td>
									</tr>
									<tr>
										<td class="text-center">13</td>
										<td>IRR Stand with Lamp</td>
									</tr>
									<tr>
										<td class="text-center">14</td>
										<td>Functional Assessment Area</td>
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