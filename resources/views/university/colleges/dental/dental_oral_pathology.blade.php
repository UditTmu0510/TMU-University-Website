@extends('layouts.university.colleges.dental_with_sidebar')
@section('content')


<link rel="stylesheet" href="assets/css/college_overview.css">


<div class="main-content">
	<div class="container">

		<section class="about-section bg-light mt-4">
			<div class="container">
				<div class="text-content p-4">
					<h1 class="tmu-text-primary tmu-page-heading"><span> Department of Oral Maxillofacial </span><span>
							Pathology & Oral Microbiology</span></h1>
					<p class="about-p mb-4 text-justify">The diseases of the mouth ("oral cavity" or "stoma"), jaws ("gnath"), and associated tissues such as salivary glands, temporomandibular joints, facial muscles, and perioral skin are referred to as oral and maxillofacial pathology. The branch of oral and maxillofacial pathology is concerned with the diagnosis and investigation of illnesses affecting the oral and maxillofacial area, as well as their causes and consequences. It is sometimes regarded a dental and pathological speciality.
						Oral Pathology is a field that attempts to link human biology to disease signs and symptoms.
					</p>
				</div>
				<div class="image-content text-center p-4">
					<img src="{{asset('/assets/img/college_departments/dental/opm/oral-pathology.jpg')}}" alt="">
				</div>
				<div class="container p-3">
					<p class="about-p mb-4 text-justify">The <a href="{{ url('/programme/mds-oral-pathology') }}">Department of Oral Pathology and Microbiology </a>  is responsible for teaching Dental Anatomy, Embryology, and Oral Histology to first-year BDS students, as well as Oral Pathology and Microbiology to second and third-year BDS students.</p>
					<p class="about-p mb-4 text-justify">Postgraduate students in the fields of oral and maxillofacial pathology and microbiology are trained by the department. The department features cutting-edge facilities, for undergraduate and postgraduate teaching, as well as a diagnostic histopathology laboratory and research lab. A practical laboratory for undergraduate students, a seminar room for postgraduates and undergraduate students, a museum showing diverse specimens of Dental Anatomy and Oral Pathology, as well as a departmental library, research room, and histopathology lab are all available in the department.</p>
					<p class="about-p mb-4 text-justify">The histopathology lab has a semi-automatic microtome, and is well equipped for routine as well as special staining procedures. We have a comprehensive clinical laboratory set up in addition to our histopathology lab for standard and advanced laboratory studies</p>
					<p class="about-p mb-2 text-justify">A research microscope with fluorescence, polarising, phase contrast, and dark field illumination attachments, as well as competent photomicrography setup and image analyzer software, are available at our research lab. A penta-head microscope is available in the department for teaching and discussion by postgraduates and students. Routine haematological studies, punch biopsies, Fine needle aspiration cytology, and Exfoliative cytology are among the diagnostic techniques done in the department. We accept biopsy and tissue specimens for histopathological evaluation and diagnosis from other dental departments and private dental clinics.</p>
				</div>
			</div>
		</section>

		<div class="container">
			<h2 class="tmu-text-primary tmu-page-heading pt-md-2 mb-md-5"><span>Infrastructure </span></h2>
			<h3 class="tmu-text-primary"><span>Our </span><span> Laboratories</span></h3>
			<!-- <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
				<a class="grid-item" href="{{asset('/assets/img/college_departments/dental/opm/opm4.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/dental/opm/opm4.jpg')}}" alt="Gallery Thumb 1"></a>
				<a class="grid-item" href="{{asset('/assets/img/college_departments/dental/opm/opm5.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/dental/opm/opm5.jpg')}}" alt="Gallery Thumb 2"></a>
				<a class="grid-item" href="{{asset('/assets/img/college_departments/dental/opm/opm6.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/dental/opm/opm6.jpg')}}" alt="Gallery Thumb 3"></a>
				<a class="grid-item" href="{{asset('/assets/img/college_departments/dental/opm/opm7.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/dental/opm/opm7.jpg')}}" alt="Gallery Thumb 5"></a>
				<a class="grid-item" href="{{asset('/assets/img/college_departments/dental/opm/opm8.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/dental/opm/opm8.jpg')}}" alt="Gallery Thumb 5"></a>
			</div> -->
			<div class="row justify-content-left gutter-30 col-mb-5 mb-5">
                <div class="col-sm-4 col-md-4">
                    <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                        <div class="team-image">
                            <img src="{{asset('/assets/img/college_departments/dental/opm/opm4.jpg')}}" height="150px" alt="">
                        </div>
                        <div class="team-desc p-2">
                            <div class="team-title pt-0">
                                <h4 class="fs-14"> Department of Oral Maxillofacial Pathology & Oral Microbiology </h4>
                                <span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> Dental College and Research Centre, TMU Campus</span>
                                <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/college_departments/dental/opm/geotag/opm4.jpg')}}" download>
                                    Download Geo Tag Image
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-md-4">
                    <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                        <div class="team-image">
                            <img src="{{asset('/assets/img/college_departments/dental/opm/opm5.jpg')}}" height="150px" alt="">
                        </div>
                        <div class="team-desc p-2">
                            <div class="team-title pt-0">
                                <h4 class="fs-14"> Haematology Lab<br/>&nbsp;</h4>
                                <span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> Dental College and Research Centre, TMU Campus</span>
                                <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/college_departments/dental/opm/geotag/opm5.jpg')}}" download>
                                    Download Geo Tag Image
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-md-4">
                    <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                        <div class="team-image">
                            <img src="{{asset('/assets/img/college_departments/dental/opm/opm6.jpg')}}" height="150px" alt="">
                        </div>
                        <div class="team-desc p-2">
                            <div class="team-title pt-0">
                                <h4 class="fs-14">PG Section<br/>&nbsp;</h4>
                                <span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> Dental College and Research Centre, TMU Campus</span>
                                <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/college_departments/dental/opm/geotag/opm6.jpg')}}" download>
                                    Download Geo Tag Image
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-md-4">
                    <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                        <div class="team-image">
                            <img src="{{asset('/assets/img/college_departments/dental/opm/opm7.jpg')}}" height="150px" alt="">
                        </div>
                        <div class="team-desc p-2">
                            <div class="team-title pt-0">
                                <h4 class="fs-14">Histopathology Lab <br/>&nbsp;</h4>
                                    <span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> Dental College and Research Centre, TMU Campus</span>
                                    <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/college_departments/dental/opm/geotag/opm7.jpg')}}" download>
                                        Download Geo Tag Image
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                        <div class="team-image">
                            <img src="{{asset('/assets/img/college_departments/dental/opm/opm8.jpg')}}" height="150px" alt="">
                        </div>
                        <div class="team-desc p-2">
                            <div class="team-title pt-0">
                                <h4 class="fs-14">UG Section <br/>&nbsp;</h4>
                                    <span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> Dental College and Research Centre, TMU Campus</span>
                                    <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/college_departments/dental/opm/geotag/opm8.jpg')}}" download>
                                        Download Geo Tag Image
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<h3 class="tmu-text-primary mt-4"><span>Labs </span><span> Equipments</span></h3>
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
								<td class="text-center" sdval="1">1</td>
								<td>Dental Chairs and Units (Electrically operated with shadow less lamp, spittoon, 3 way syringe, instrument tray and suction)</td>
							</tr>
							<tr>
								<td class="text-center" sdval="2">2</td>
								<td>Adequate laboratory glassware&rsquo;s as required for processing of biopsy specimens and staining.</td>
							</tr>
							<tr>
								<td class="text-center" sdval="3">3</td>
								<td>Adequate tissue capsules / tissue embedding cassettes</td>
							</tr>
							<tr>
								<td class="text-center" sdval="4">4</td>
								<td>Paraffin wax bath - thermostatically controlled</td>
							</tr>
							<tr>
								<td class="text-center" sdval="5">5</td>
								<td>Leuckhart pieces</td>
							</tr>
							<tr>
								<td class="text-center" sdval="6">6</td>
								<td>Block holders</td>
							</tr>
							<tr>
								<td class="text-center" sdval="7">7</td>
								<td>Microtome (Manual)</td>
							</tr>
							<tr>
								<td class="text-center" sdval="8">8</td>
								<td>Microtome (semi &ndash; automated)</td>
							</tr>
							<tr>
								<td class="text-center" sdval="9">9</td>
								<td>Tissue floatation water bath thermostatically controlled</td>
							</tr>
							<tr>
								<td class="text-center" sdval="10">10</td>
								<td>Slide warming table</td>
							</tr>
							<tr>
								<td class="text-center" sdval="11">11</td>
								<td>Steel slide racks for staining</td>
							</tr>
							<tr>
								<td class="text-center" sdval="12">12</td>
								<td>Diamond glass marker</td>
							</tr>
							<tr>
								<td class="text-center" sdval="13">13</td>
								<td>Research microscope with phase contrast, dark field, polarization, image analyzer,photomicrography attachments</td>
							</tr>
							<tr>
								<td class="text-center" sdval="14">14</td>
								<td>Multi head microscope (Penta head)</td>
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
								<td class="text-center" sdval="15">15</td>
								<td>Binocular compound microscope</td>
							</tr>
							<tr>
								<td class="text-center" sdval="16">16</td>
								<td>Stereo microscope</td>
							</tr>
							<tr>
								<td class="text-center" sdval="17">17</td>
								<td>Aluminum slide trays</td>
							</tr>
							<tr>
								<td class="text-center" sdval="18">18</td>
								<td>Wooden / plastic slide boxes</td>
							</tr>
							<tr>
								<td class="text-center" sdval="19">19</td>
								<td>Wax block storing cabinet</td>
							</tr>
							<tr>
								<td class="text-center" sdval="20">20</td>
								<td>Slide storing cabinet</td>
							</tr>
							<tr>
								<td class="text-center" sdval="21">21</td>
								<td>Refrigerator</td>
							</tr>
							<tr>
								<td class="text-center" sdval="22">22</td>
								<td>Pipettes</td>
							</tr>
							<tr>
								<td class="text-center" sdval="23">23</td>
								<td>Surgical kit for biopsy</td>
							</tr>
							<tr>
								<td class="text-center" sdval="24">24</td>
								<td>Immuno histo chemistry lab</td>
							</tr>
							<tr>
								<td class="text-center" sdval="25">25</td>
								<td>Computer with Internet Connection with attached printer and scanner</td>
							</tr>
							<tr>
								<td class="text-center" sdval="26">26</td>
								<td>LCD projector</td>
							</tr>
							<tr>
								<td class="text-center" sdval="27">27</td>
								<td>Hard tissue microtome</td>
							</tr>
							<tr>
								<td class="text-center" sdval="28">28</td>
								<td>Tissue storing cabinet (frozen)</td>
							</tr>
							<tr>
								<td class="text-center" sdval="30">30</td>
								<td>Microwave</td>
							</tr>
							<tr>
								<td class="text-center" sdval="31">31</td>
								<td>Monocular microscope</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<!-- Bootstrap JS and dependencies -->


@endsection