@extends('layouts.university.departments.iqac_with_sidebar')
@section('content')


<div class="main-content">
	<div class="container">
		<div class="row mx-0">
			<h1 class="tmu-text-primary tmu-page-heading"><span> AQAR </span><span> Reports</span></h1>

			<div class="iqac-container">
				<div class="iqac-card">
					<div class="card-pdf">
						<img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
						<p class="description">The Annual Quality Assurance Report (AQAR) of the IQAC (Academic Session 2019-20)</p>
						<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/iqac_minutes/ATR_IQAC_20_01_2022_compressed.pdf')}}">View PDF</a>
					</div>
					<div class="card-pdf">
						<img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
						<p class="description">The Annual Quality Assurance Report (AQAR) of the IQAC (Academic Session 2018-19)</p>
						<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/iqac_minutes/aqar_18_19.pdf')}}">View PDF</a>
					</div>
					<div class="card-pdf">
						<img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
						<p class="description">The Annual Quality Assurance Report (AQAR) of the IQAC (Academic Session 2017-18)</p>
						<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/iqac_minutes/aqar_2017_18.pdf')}}">View PDF</a>
					</div>
					<div class="card-pdf">
						<img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
						<p class="description">The Annual Quality Assurance Report (AQAR) of the IQAC (Academic Session 2016-17)</p>
						<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/iqac-report-2016-17.pdf')}}">View PDF</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

@endsection