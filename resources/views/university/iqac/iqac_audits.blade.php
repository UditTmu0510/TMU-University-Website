@extends('layouts.university.departments.institutional_values_with_sidebar')
@section('content')





<div class="main-content">
	<div class="container">
		<div class="row mx-0">
			<h1 class="tmu-text-primary tmu-page-heading mt-md-5"><span> Environment & </span><span> Energy Audits</span></h1>
			<div class="row mx-0">
				<hr class="horizontal-line">
				<button class="careers-accordion">Environment & Energy <span class="icon">+</span></button>
				<div class="panel active">
					<div class="table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<th>S. NO.</th>
								<th>Audits Name</th>
								<th class="text-center">View More</th>
							</thead>
							<tbody>
								<tr>
									<td>1.</td>
									<td>Green Audit</td>
									<td class="text-center"><a
											href="{{asset('assets/pdf/environment_and_energy_audit/green-audit-report.pdf')}}"><i
												class="fa-solid fa-file-pdf"></i></a></td>
								</tr>
								<tr>
									<td>2.</td>
									<td>Engergy Audit Report</td>
									<td class="text-center"><a
											href="{{asset('assets/pdf/environment_and_energy_audit/energy-audit-report.pdf')}}"><i
												class="fa-solid fa-file-pdf"></i></a></td>
								</tr>
								<tr>
									<td>3.</td>
									<td>Environment Audit Report</td>
									<td class="text-center"><a
											href="{{asset('assets/pdf/environment_and_energy_audit/environment-audit-report.pdf')}}"><i
												class="fa-solid fa-file-pdf"></i></a></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<hr class="horizontal-line">
				<button class="careers-accordion">Clean and Green Campus Recognitions / Awards<span
						class="icon">+</span></button>
				<div class="panel">
					<div class="container">
						<div class="row gutter-50 pb-0 mb-1" data-lightbox="gallery">
							<div class="col-md-4">
								<a href="{{asset('/assets/img/department/iqac/energy_audit/assocham.jpg')}}" data-lightbox="gallery-item"><img
										src="{{asset('/assets/img/department/iqac/energy_audit/assocham.jpg')}}" alt="Gallery Thumb 1" height="300px;"></a>
							</div>
							<div class="col-md-4">
								<a href="{{asset('/assets/img/department/iqac/energy_audit/Green_Audit_Certificate.jpg')}}"
									data-lightbox="gallery-item"><img
										src="{{asset('/assets/img/department/iqac/energy_audit/Green_Audit_Certificate.jpg')}}" alt="Gallery Thumb 2" height="300px;"></a>
							</div>
						</div>
					</div>
				</div>
				<hr class="horizontal-line">
				<button class="careers-accordion"> Beyond the Campus Environmental Promotion Activities <span
						class="icon">+</span></button>
				<div class="panel">
					<p>The University has adopted 4 villages & environmental promotional activities organized on regular basis.
					</p>
					<div class="row gutter-30 col-mb-5">
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img
										src="{{asset('/assets/img/department/iqac/energy_audit/1.jpg')}}"
										alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">Activities At</h4><span class="fst-normal fs-12 mb-2"><i
											class="fa-solid fa-location-dot"></i> Ginnaur Deya Mafi, <br> Uttar Pradhesh</span>
											<div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 download-btn" href="{{asset('/assets/img/department/iqac/energy_audit/download/Ginnaur1.jpeg')}}"> Download Geo Tag Image</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img
										src="{{asset('/assets/img/department/iqac/energy_audit/2.jpg')}}"
										alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">Activities At</h4><span class="fst-normal fs-12 mb-2"><i
												class="fa-solid fa-location-dot"></i>
											Gajgola Nanak Bari, <br> Uttar Pradhesh</span>
											<div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 download-btn" href="{{asset('/assets/img/department/iqac/energy_audit/download/gajgola1.jpeg')}}"> Download Geo Tag Image</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img
										src="{{asset('/assets/img/department/iqac/energy_audit/3.jpg')}}"
										alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">Activities At</h4><span class="fst-normal fs-12 mb-2"><i
												class="fa-solid fa-location-dot"></i>
											Aurangabad, Moradabad <br> Uttar Pradhesh</span>
											<div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 download-btn" href="{{asset('/assets/img/department/iqac/energy_audit/download/aurangabad1.jpeg')}}"> Download Geo Tag Image</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img
										src="{{asset('/assets/img/department/iqac/energy_audit/4.jpg')}}"
										alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">Activities At</h4><span class="fst-normal fs-12 mb-2"><i
												class="fa-solid fa-location-dot"></i>
											Ginnaur Deya Mafi, <br> Uttar Pradhesh</span>
											<div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 download-btn" href="{{asset('/assets/img/department/iqac/energy_audit/download/Ginnaur2.jpeg')}}"> Download Geo Tag Image</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img
										src="{{asset('/assets/img/department/iqac/energy_audit/5.jpg')}}"
										alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">Activities At</h4><span class="fst-normal fs-12 mb-2"><i
												class="fa-solid fa-location-dot"></i>
											Gajgola Nanak Bari, <br> Uttar Pradhesh</span>
											<div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 download-btn" href="{{asset('/assets/img/department/iqac/energy_audit/download/gajgola2.jpeg')}}"> Download Geo Tag Image</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img
										src="{{asset('/assets/img/department/iqac/energy_audit/6.jpg')}}"
										alt="" >
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">Activities At</h4><span class="fst-normal fs-12 mb-2"><i
												class="fa-solid fa-location-dot"></i>
											Manoharpur, Moradabad <br> Uttar Pradhesh</span>
											<div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 download-btn" href="{{asset('/assets/img/department/iqac/energy_audit/download/manohapur1.jpeg')}}"> Download Geo Tag Image</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img
										src="{{asset('/assets/img/department/iqac/energy_audit/7.jpg')}}"
										alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">Activities At</h4><span class="fst-normal fs-12 mb-2"><i
												class="fa-solid fa-location-dot"></i>
												Ginnaur Deya Mafi, <br> Uttar Pradhesh</span>
											<div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 download-btn" href="{{asset('/assets/img/department/iqac/energy_audit/download/Ginnaur3.jpeg')}}"> Download Geo Tag Image</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img
										src="{{asset('/assets/img/department/iqac/energy_audit/8.jpg')}}"
										alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">Activities At</h4><span class="fst-normal fs-12 mb-2"><i
												class="fa-solid fa-location-dot"></i>
												Aurangabad, Moradabad <br> Uttar Pradhesh</span>
											<div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 download-btn" href="{{asset('/assets/img/department/iqac/energy_audit/download/aurangabad2.jpeg')}}"> Download Geo Tag Image</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img
										src="{{asset('/assets/img/department/iqac/energy_audit/9.jpg')}}"
										alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">Activities At </h4><span class="fst-normal fs-12 mb-2"><i
												class="fa-solid fa-location-dot"></i>
												Manoharpur, Moradabad <br> Uttar Pradhesh</span>
											<div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 download-btn" href="{{asset('/assets/img/department/iqac/energy_audit/download/manohapur2.jpeg')}}"> Download Geo Tag Image</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img
										src="{{asset('/assets/img/department/iqac/energy_audit/10.jpg')}}"
										alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">Activities At</h4><span class="fst-normal fs-12 mb-2"><i
												class="fa-solid fa-location-dot"></i>
												Gajgola Nanak Bari, <br> Uttar Pradhesh</span>
											<div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 download-btn" href="{{asset('/assets/img/department/iqac/energy_audit/download/gajgola3.jpeg')}}"> Download Geo Tag Image</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img
										src="{{asset('/assets/img/department/iqac/energy_audit/11.jpg')}}"
										alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">Activities At</h4><span class="fst-normal fs-12 mb-2"><i
												class="fa-solid fa-location-dot"></i>
											Aurangabad, Moradabad <br> Uttar Pradhesh</span>
											<div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 download-btn" href="{{asset('/assets/img/department/iqac/energy_audit/download/aurangabad3.jpeg')}}"> Download Geo Tag Image</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img
										src="{{asset('/assets/img/department/iqac/energy_audit/6.jpg')}}"
										alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">Activities At</h4><span class="fst-normal fs-12 mb-2"><i
												class="fa-solid fa-location-dot"></i>
												Manoharpur, Moradabad <br> Uttar Pradhesh</span>
											<div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-2 download-btn" href="{{asset('/assets/img/department/iqac/energy_audit/download/manohapur1.jpeg')}}"> Download Geo Tag Image</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<hr class="horizontal-line">
			</div>
		</div>
	</div>
</div>
</div>


@endsection