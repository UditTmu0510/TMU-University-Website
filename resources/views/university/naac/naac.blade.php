@extends('layouts.university.departments.iqac_with_sidebar')
@section('content')


<div class="main-content">
	<div class="container">

		<div class="row mx-0">
			<h1 class="tmu-text-primary tmu-page-heading pt-md-5"><span>NAAC </span><span> Accreditation </span></h1>
			<p>
			<div class="card mb-2">
				<div class="card-body">
					<p class="text-justify p-3 m-3">Teerthanker Mahaveer University has been awarded the prestigious <strong>A
							grade</strong> by the National Assessment and Accreditation Council (NAAC).</p>


					<div class="iqac-container">
						<div class="iqac-card">
							<div class="card-pdf">
								<img src="{{asset('assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
								<p class="description">SSR-2024</p>
								<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"  href="https://docs.google.com/viewer?url={{asset('/assets/pdf/sss-reports/SSR_2024_TMU.pdf') }}&embedded=true" target="_blank">View PDF</a>
								<!-- <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"  href="https://docs.google.com/viewer?url=https://www.tmu.ac.in/pdf/SSR_TMU.pdf&embedded=true">View PDF</a> -->
							</div>
							<div class="card-pdf">
								<img src="{{asset('assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
								<p class="description">SSR with DVV clarifications </p>
								<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('assets/pdf/SSR_TMU.pdf')}}" target="_blank">View PDF</a>
							</div>
							<div class="card-pdf">
								<img src="{{asset('assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
								<p class="description">Institutional Information for Quality Assessment(IIQA)</p>
								<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('assets/pdf/iiqa.pdf')}}" target="_blank">View PDF</a>
							</div>
							<div class="card-pdf">
								<img src="{{asset('assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
								<p class="description">Peer Team Report on Institutional Accreditation</p>
								<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
									href="{{asset('assets/pdf/Peer_Team_Report_TMU.pdf')}}" target="_blank">View PDF</a>
							</div>
							<div class="card-pdf">
								<img src="{{asset('assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
								<p class="description">Grade Sheet </p>
								<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
									href="{{asset('assets/pdf/Institutional_Grade_Sheet.pdf')}}" target="_blank">View PDF</a>
							</div>
							<div class="card-pdf">
								<img src="{{asset('assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
								<p class="description">Graphical Representation based on Quantitative & Qualitative Metrics</p>
								<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
									href="{{asset('assets/pdf/Graphical_representation_based_on_QnM_and_QlM.pdf')}}" target="_blank">View PDF</a>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12 high-pack">
							<div class="row impe-plac-row mb-4">
								<div class="col-lg-6 col-md-6 col-sm-6 text-center mb-0">
									<div class="border-box-iqac">
										<a class="colmd-4" href="{{asset('/assets/img/awards/naac/naac.jpg')}}" data-lightbox="image" title=""
											data-zoom="true">
											<div class="grid-inner mb-2">
												<img src="{{asset('/assets/img/awards/naac/naac.jpg')}}" height="600" width="500"
													alt="Single Image">
												<div class="bg-overlay">
													<div class="bg-overlay-content dark">
														<i class="uil uil-plus h4 mb-0" data-hover-animate="fadeIn"></i>
													</div>
												</div>
											</div>
										</a>
										<h3 class="tmu-text-primary mb-1"><span>Certificate of </span><span> Accreditation - II</span>
										</h3>
									</div>
								</div>

								<div class="col-lg-6 col-md-6 col-sm-6 text-center mb-0">
									<div class="border-box-iqac">
										<a class="colmd-4" href="{{asset('/assets/img/awards/naac/naac_cycle_1_certificate.jpg')}}"
											data-lightbox="image" title="" data-zoom="true">
											<div class="grid-inner mb-2">
												<img src="{{asset('/assets/img/awards/naac/naac_cycle_1_certificate.jpg')}}" height="600"
													width="500" alt="Single Image">
												<div class="bg-overlay">
													<div class="bg-overlay-content dark">
														<i class="uil uil-plus h4 mb-0" data-hover-animate="fadeIn"></i>
													</div>
												</div>
											</div>
										</a>
										<h3 class="tmu-text-primary mb-1"><span>Certificate of </span><span> Accreditation - I</span></h3>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</ol>
</div>
</div>

@endsection