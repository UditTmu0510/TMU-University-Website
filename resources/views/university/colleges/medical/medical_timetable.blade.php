@extends('layouts.university.colleges.medical_with_sidebar')
@section('content')

<div class="main-content">
	<div class="container">
		<h1 class="tmu-text-primary tmu-page-heading"><span>Time </span><span> Table</span></h1>

		<div class="col-md-12">
			<hr class="horizontal-line">
			<button class="careers-accordion">First Phase <span
					class="icon">+</span></button>
			<div class="panel active">
				<div class="table-responsive">
					<table class="table table-striped">
						<tbody>
							<tr>
								<td><a href="{{asset('/assets/pdf/pdf/Medical_TT_23_24.pdf')}}">Click here to view</a> the academic session 2023-24 timetable</td>
							</tr>
							<tr>
								<td><a href="{{asset('/assets/pdf/medical/time-table-phase1_2022-23.pdf')}}">Click here to view</a> the academic session 2022-23 timetable</td>
							</tr>
							<tr>
								<td><a href="{{asset('/assets/pdf/medical/time-table-phase1_2021-22.pdf')}}">Click here to view</a> the academic session 2021-22 timetable</td>
							</tr>
							<tr>
								<td><a href="{{asset('/assets/pdf/medical/time-table-phase1.pdf')}}">Click here to view</a> the academic session 2020-21 timetable</td>
							</tr>
							<tr>
								<td><a href="{{asset('/assets/pdf/medical/Phase%20I%20MBBS_2019-20.pdf')}}">Click here to view</a> the academic session 2019-20 timetable</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<hr class="horizontal-line">
			<button class="careers-accordion">Second Phase <span
					class="icon">+</span></button>
			<div class="panel">
				<div class="table-responsive">
					<table class="table table-striped">
						<tbody>
							<tr>
								<td><a href="{{asset('/assets/pdf/time_table/Phase%202%20(batch%202022-23).pdf')}}">Click here to view</a> the academic session 2022-23 timetable</td>
							</tr>
							<tr>
								<td><a href="{{asset('/assets/pdf/medical/time-table-Phase%20II_2022-23.pdf')}}">Click here to view</a> the academic session 2021-22 timetable</td>
							</tr>
							<tr>
								<td><a href="{{asset('/assets/pdf/medical/Phase%20II%20MBBS_2020-21.pdf')}}">Click here to view</a> the academic session 2020-21 timetable</td>
							</tr>
							<tr>
								<td><a href="{{asset('/assets/pdf/medical/time-table-phase2.pdf')}}">Click here to view</a> the academic session 2019-20 timetable</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

			<hr class="horizontal-line">
			<button class="careers-accordion">Third Phase (Part-Ist) <span
					class="icon">+</span></button>
			<div class="panel">
				<div class="table-responsive">
					<table class="table table-striped">
						<tbody>
							<tr>
								<td><a href="{{asset('/assets/pdf/medical/Phase-3_Part-1.pdf')}}">Click here to view</a> the academic session 2023-24 timetable</td>
							</tr>
							<tr>
								<td><a href="{{asset('/assets/pdf/medical/time-table-Phase%20II(1)_2022-23.pdf')}}">Click here to view</a> the academic session 2022-23 timetable</td>
							</tr>
							<tr>
								<td><a href="{{asset('/assets/pdf/medical/time_table_phase_iii.pdf')}}">Click here to view</a> the academic session 2019-20 timetable</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

			<hr class="horizontal-line">
			<button class="careers-accordion">Third Phase (Part-IInd) <span
					class="icon">+</span></button>
			<div class="panel">
				<div class="table-responsive">
					<table class="table table-striped">
						<tbody>
							<tr>
								<td><a href="{{asset('/assets/pdf/medical/Phase3_Part2.pdf')}}">Click here to view</a> the academic session 2023-24 timetable</td>
							</tr>
							<tr>
								<td><a href="{{asset('/assets/pdf/medical/time-table-Phase%20II(2)_2022-23.pdf')}}">Click here to view</a> the academic session 2022-23 timetable</td>
							</tr>
							<tr>
								<td><a href="{{asset('/assets/pdf/medical/time-table-Phase%20II(2)_2022-23.pdf')}}">Click here to view</a> the academic session 2021-22 timetable</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
</div>


@endsection