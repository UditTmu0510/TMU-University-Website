@extends('layouts.university.colleges.physiotherapy_with_sidebar')
@section('content')


<link rel="stylesheet" href="assets/css/college_overview.css">



<div class="main-content">
	<div class="container">

		<section class="about-section bg-light">
			<div class="container">
				<div class="text-content p-3">
					<h1 class="tmu-text-primary tmu-page-heading"><span> Excercise Therapy </span><span> Lab </span></h1>
				</div>
				<div class="image-content text-center p-4">
					<img src="{{asset('/assets/img/labs/physiotherapy/exercise_therapy/banner.jpg')}}" alt="">
				</div>
				<div class="container p-3">
					<p class="about-p mb-4">The exercise demonstration lab in the Department of Physiotherapy is equipped with various exercise therapy equipment. Equipment is used to demonstrate various techniques of exercise therapy. The students learn techniques of exercise therapy which they apply on patients during their treatment.</p>
					<h2 class="tmu-text-primary tmu-page-heading"><span>Infrastructure</span><span></span></h2>
					<h3 class="tmu-text-primary"><span>Our </span><span> Laboratories</span></h3>
					<!-- <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
						<a class="grid-item" href="{{asset('/assets/img/labs/physiotherapy/exercise_therapy/lab2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/labs/physiotherapy/exercise_therapy/lab2.jpg')}}" alt="Gallery Thumb 1"></a>
						<a class="grid-item" href="{{asset('/assets/img/labs/physiotherapy/exercise_therapy/lab3.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/labs/physiotherapy/exercise_therapy/lab3.jpg')}}" alt="Gallery Thumb 2"></a>
						<a class="grid-item" href="{{asset('/assets/img/labs/physiotherapy/exercise_therapy/lab4.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/labs/physiotherapy/exercise_therapy/lab4.jpg')}}" alt="Gallery Thumb 1"></a>
						<a class="grid-item" href="{{asset('/assets/img/labs/physiotherapy/exercise_therapy/lab2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/labs/physiotherapy/exercise_therapy/lab2.jpg')}}" alt="Gallery Thumb 2"></a>
					</div> -->
					<div class="row justify-content-left gutter-30 col-mb-5 mb-5">
						<div class="col-sm-4 col-md-4">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img src="{{asset('/assets/img/labs/physiotherapy/exercise_therapy/lab2.jpg')}}" height="150px"
										alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">Exercise Therapy Lab</h4><span class="fst-normal fs-12 mb-2"><i
												class="fa-solid fa-location-dot"></i> Department of Physiotherapy, TMU Campus</span>
										<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{ asset('/assets/img/labs/physiotherapy/geotag/exercise_therapy/lab2.jpg') }}" download>
											Download Geo Tag Image
										</a>

									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-4 col-md-4">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img src="{{asset('/assets/img/labs/physiotherapy/exercise_therapy/lab3.jpg')}}" height="150px"
										alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">Exercise Therapy Demo Lab</h4><span class="fst-normal fs-12 mb-2"><i
												class="fa-solid fa-location-dot"></i> Department of Physiotherapy, TMU Campus</span>
												<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{ asset('/assets/img/labs/physiotherapy/geotag/exercise_therapy/lab3.jpg') }}" download>
											Download Geo Tag Image
										</a>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-sm-4 col-md-4">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img src="{{asset('/assets/img/labs/physiotherapy/exercise_therapy/lab4.jpg')}}" height="150px"
										alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">Exercise Lab</h4><span class="fst-normal fs-12 mb-2"><i
												class="fa-solid fa-location-dot"></i> Department of Physiotherapy, TMU Campus</span>
												<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{ asset('/assets/img/labs/physiotherapy/geotag/exercise_therapy/lab4.jpg') }}" download>
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
										<td>Suspension Therapy</td>
									</tr>
									<tr>
										<td class="text-center">2</td>
										<td>Peg Board</td>
									</tr>
									<tr>
										<td class="text-center">3</td>
										<td>Frame</td>
									</tr>
									<tr>
										<td class="text-center">4</td>
										<td>Wheel Chair</td>
									</tr>
									<tr>
										<td class="text-center">5</td>
										<td>Balance Board</td>
									</tr>
									<tr>
										<td class="text-center">6</td>
										<td>Exercise Staire Case</td>
									</tr>
									<tr>
										<td class="text-center">7</td>
										<td>Quadriceps Chair</td>
									</tr>
									<tr>
										<td class="text-center">8</td>
										<td>Pediatric Standing Frame</td>
									</tr>
									<tr>
										<td class="text-center">9</td>
										<td>Swiss Ball</td>
									</tr>
									<tr>
										<td class="text-center">10</td>
										<td>Mat Exercise Unit</td>
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
										<td class="text-center">11</td>
										<td>Bolsters</td>
									</tr>
									<tr>
										<td class="text-center">12</td>
										<td>Multi Exerciser </td>
									</tr>
									<tr>
										<td class="text-center">13</td>
										<td>Foot Exerciser</td>
									</tr>
									<tr>
										<td class="text-center">14</td>
										<td>Tilt Table</td>
									</tr>
									<tr>
										<td class="text-center">15</td>
										<td>Parallel Bar</td>
									</tr>
									<tr>
										<td class="text-center">16</td>
										<td>Mirror</td>
									</tr>
									<tr>
										<td class="text-center">17</td>
										<td>Hand Exerciser</td>
									</tr>
									<tr>
										<td class="text-center">18</td>
										<td>Finger Ladder</td>
									</tr>
									<tr>
										<td class="text-center">19</td>
										<td>Dumbells</td>
									</tr>
									<tr>
										<td class="text-center">20</td>
										<td>Medicine Balls</td>
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