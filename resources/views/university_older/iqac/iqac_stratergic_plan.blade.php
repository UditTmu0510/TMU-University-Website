@extends('layouts.university.departments.iqac_with_sidebar')
@section('content')



<div class="main-content">
	<div class="container">
		<div class="row mx-0">



			<div class="container d-none d-sm-block">
				<div style="text-align:center">
					<h1 class="tmu-text-primary tmu-page-heading pt-md-5"> <span>Strategic Plan of</span> <span>the University (2018-2028)</span></h1>
					<iframe src="{{asset('assets/pdf/strategic_plan_of_the_university.pdf')}}" frameborder="0" height="800px" width="100%"></iframe>
				</div>
			</div>
			<div class="container d-block d-sm-none mb-3">
				<div style="text-align:center">
					<h1 class="tmu-text-primary tmu-page-heading pt-md-5"> <span>Strategic Plan of</span> <span>the University (2018-2028)</span></h1>
					<a href="{{asset('assets/pdf/strategic_plan_of_the_university.pdf')}}" class="tmu-btn btn-4" download>Download PDF</a>

				</div>
			</div>

		</div>
	</div>
</div>
</div>



	@endsection