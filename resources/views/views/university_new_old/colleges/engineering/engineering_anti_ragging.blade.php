@extends('layouts.university.colleges.engineering_with_sidebar')
@section('content')
<style>
	table {
		width: 100%;
		border-collapse: collapse;
	}

	th,
	td {
		padding: 8px;
		text-align: left;
		border: 1px solid #ddd;
	}

	@media screen and (max-width: 600px) {

		table,
		thead,
		tbody,
		th,
		td,
		tr {
			display: block;
			text-align: center;
		}

		th,
		td {
			box-sizing: border-box;
			display: block;
			width: 100%;
		}

		th,
		td:before {
			content: attr(data-label);
			float: left;
			font-weight: bold;
		}

		tr {
			margin-bottom: 1em;
		}
	}
</style>

<div class="main-content">
	<div class="container"

		<h1 class="tmu-text-primary tmu-page-heading mt-md-5"><span>Anti Ragging </span><span> Committee</span></h1>

		<div class="container">
			<div class="row mb-3">
				<div class="table-responsive">
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th class="text-center">Sl. No.</th>
								<th>Name</th>
								<th>Designation</th>
								<th>Status</th>
								<th>Contact No.</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-center">1</td>
								<td>Prof.R.K Dwivedi</td>
								<td>Prinicipal</td>
								<td>Chairperson</td>
								<td>9639266555</td>
							</tr>

							<tr>
								<td class="text-center">2</td>
								<td>Mr. R. P. Gupta</td>
								<td>Joint Director -Admin, Security & Students Welfare</td>
								<td>Member Secretary & FIP</td>
								<td>9639236666</td>

							</tr>

							<tr>
								<td class="text-center">3</td>
								<td>Prof. S. S. Bhatia</td>
								<td>Local Media</td>
								<td>Member</td>
								<td>7500200085</td>

							</tr>

							<tr>
								<td class="text-center">4</td>
								<td>Mr. Suresh K Jain</td>
								<td>Representative of Parent</td>
								<td>Member</td>
								<td>9005081362</td>

							</tr>

							<tr>
								<td class="text-center">5</td>
								<td>Mr. Rahul Vishnoi</td>
								<td>Proctor</td>
								<td>Member</td>
								<td>9719004461</td>

							</tr>

							<tr>
								<td class="text-center">6</td>
								<td>Ms. Indu Tripathi</td>
								<td>Deputy Proctor</td>
								<td>Proctor</td>
								<td>9837413469</td>

							</tr>

							<tr>
								<td class="text-center">7</td>
								<td>Dr. Garima Goswami</td>
								<td>Member</td>
								<td>Member</td>
								<td>9410835690</td>

							</tr>

							<tr>
								<td class="text-center">8</td>
								<td>Dr. Zareen Farooq</td>
								<td>Member</td>
								<td>Member</td>
								<td>8433270955</td>

							</tr>

							<tr>
								<td class="text-center">9</td>
								<td>Dr. Gulista Khan</td>
								<td>Member</td>
								<td>Member</td>
								<td>9639888358</td>

							</tr>

							<tr>
								<td class="text-center">10</td>
								<td>Mr. Arun K. Pipersenia</td>
								<td>Member</td>
								<td>Member</td>
								<td>9415113543</td>

							</tr>

							<tr>
								<td class="text-center">11</td>
								<td>Dr. Vipin Kumar</td>
								<td>Member</td>
								<td>Member</td>
								<td>8057376965</td>

							</tr>

							<tr>
								<td class="text-center">12</td>
								<td>Mr. Umesh K Singh</td>
								<td>Member</td>
								<td>Member</td>
								<td>8279846830</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

			<div class="container">
				<div class="row justify-content-center mb-5 mt-5">
					<div class="col-md-8 mb-3 mb-sm-0" style="background-color: #001055;">
						<div class="card border-light my-3">
							<div class="card-body text-center">
								<h3 class="card-title tmu-text-primary display-6"><span>ANTI RAGGING TOLL FREE</span></h3>
								<p class="card-text h1 tmu-color">HELPLINE NO. 1800-180-5522 </p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row mb-3">
				<h2 class="tmu-text-primary tmu-page-heading"><span> Proctorial </span><span>Board</span></h2>
				<div class="table-responsive">
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th class="text-center">Sl. No. </th>
								<th>Name</th>
								<th>Designation</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-center">1</td>
								<td>Mr. Rahul Vishnoi</td>
								<td>Assistant Professor</td>
								<td>Proctor</td>
							</tr>

							<tr>
								<td class="text-center">2</td>
								<td>Mr. S. B. Rastogi</td>
								<td>Assistant Professor</td>
								<td>Proctor</td>
							</tr>

							<tr>
								<td class="text-center">3</td>
								<td>Ms. Indu Tripathi</td>
								<td>Assistant Professor</td>
								<td>Proctor</td>
							</tr>

							<tr>
								<td class="text-center">4</td>
								<td>Dr. Zareen Farooq</td>
								<td>Assistant Professor</td>
								<td>Proctor</td>
							</tr>

							<tr>
								<td class="text-center">5</td>
								<td>Mr. Arun Pipersenia</td>
								<td>Assistant Professor</td>
								<td>Member</td>
							</tr>

							<tr>
								<td class="text-center">6</td>
								<td>Dr Pankaj K Goswami</td>
								<td>Assistant Professor</td>
								<td>Member</td>
							</tr>

							<tr>
								<td class="text-center">7</td>
								<td>Dr Garima Goswami</td>
								<td>Assistant Professor</td>
								<td>Member</td>
							</tr>

							<tr>
								<td class="text-center">8</td>
								<td>Dr. Himansh Kumar</td>
								<td>Assistant Professor</td>
								<td>Member</td>
							</tr>

							<tr>
								<td class="text-center">9</td>
								<td>Dr. Amit Kumar Sharma</td>
								<td>Assistant Professor</td>
								<td>Member</td>
							</tr>

							<tr>
								<td class="text-center">10</td>
								<td>Dr. Ajit Kumar</td>
								<td>Assistant Professor</td>
								<td>Member</td>
							</tr>

							<tr>
								<td class="text-center">11</td>
								<td>Dr. M K Chini</td>
								<td>Assistant Professor</td>
								<td>Member</td>
							</tr>

							<tr>
								<td class="text-center">12</td>
								<td>Dr. Gulista Khan</td>
								<td>Assistant Professor</td>
								<td>Member</td>
							</tr>

							<tr>
								<td class="text-center">13</td>
								<td>Dr. Pavan K Singh</td>
								<td>Assistant Professor</td>
								<td>Member</td>
							</tr>

							<tr>
								<td class="text-center">14</td>
								<td>Mr. Ashish Simalti</td>
								<td>Assistant Professor</td>
								<td>Member</td>
							</tr>

							<tr>
								<td class="text-center">15</td>
								<td>Dr. Vipin Kumar</td>
								<td>Assistant Professor</td>
								<td>Member</td>
							</tr>

							<tr>
								<td class="text-center">16</td>
								<td>Dr. Shubhendra Pratap Singh</td>
								<td>Assistant Professor</td>
								<td>Member</td>
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