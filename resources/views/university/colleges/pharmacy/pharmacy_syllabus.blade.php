@extends('layouts.university.colleges.pharmacy_with_sidebar')
@section('content')

<div class="main-content">
	<div class="container">
		<h1 class="tmu-text-primary tmu-page-heading"><span> Syllabus </span><span> </span></h1>
		<div class="card">
			<div class="form-widget card-body" data-alert-type="inline">
				<div class="form-result"></div>
				<form id="form-cleaning" name="form-cleaning" action="include/form.php" method="post" class="row form-cleaning mt-2">
					<div class="form-process">
						<div class="form-cleaning-loader css3-spinner" style="position: absolute;">
							<div class="css3-spinner-double-bounce1"></div>
							<div class="css3-spinner-double-bounce2"></div>
						</div>
					</div>

					<div class="col-sm-6">
						<div class="input-group form-group">
							<select class="required form-select" name="" id="">
								<option value="44">B.Pharm. (Bachelor of Pharmacy)</option>
								<option value="45">Pharm.D. (Doctor in Pharmacy)</option>
								<option value="138"> Pharm.D. (Post Baccalaureate)</option>
								<option value="47">M.Pharm. (Pharmacology) (From Session 2023-24 Onwards)</option>
								<option value="46">M.Pharm. (Pharmaceutics)</option>
								<option value="106">M.Pharm. (Pharmacognosy)</option>
								<option value="107">M.Pharm. (Pharmaceutical Analysis) (From Session 2023-24 Onwards)</option>
							</select>
						</div>
					</div>

					<div class="col-sm-6">
						<div class="input-group form-group">
							<select class="required form-select" name="" id="">
								<option value="2023-24">2023-24</option>
								<option value="2022-23">2022-23</option>
								<option value="2021-22">2021-22</option>
								<option value="2020-21">2020-21</option>
								<option value="2019-20">2019-20</option>
								<option value="2018-19">2018-19</option>
								<option value="2017-18">2017-18</option>
							</select>
						</div>
					</div>
					<div class="col-md-12">
						<div class="container d-none d-sm-block">
							<div style="text-align:center">
								<iframe src="https://www.tmu.ac.in/pdf/syllabus/PHA-002_2023-24.pdf" frameborder="0" height="700px" width="100%"></iframe>
							</div>
						</div>
						<div class="container d-block d-sm-none mb-3">
							<div style="text-align:center" class="mt-sm-5">
								<a href="https://www.tmu.ac.in/pdf/syllabus/PHA-002_2023-24.pdf" class="tmu-btn btn-4" download>Download PDF</a>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>
<!-- Bootstrap JS and dependencies -->

@endsection