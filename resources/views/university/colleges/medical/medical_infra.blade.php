@extends('layouts.university.colleges.medical_with_sidebar')
@section('content')

<div class="main-content">
	<div class="container">
		<h1 class="tmu-text-primary tmu-page-heading pt-md-5"><span></span><span>Infrastructure</span></h1>
		<div class="row">
		</div>
		<hr class="horizontal-line">
		<button class="careers-accordion"> Community Based Learning <span class="icon">+</span> </button>
		<div class="panel active">
			<div class="table-responsive">
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th class="text-center">Sl. No.</th>
							<th>Location</th>
							<th>View More</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="text-center">1</td>
							<td>Community Health Centre</td>
							<td><a href="{{route('medical.community.health.centers')}}" target="_blank">Click Here to View</a></td>
						</tr>
						<tr>
							<td class="text-center">2</td>
							<td>Primary Health Centre</td>
							<td><a href="{{route('medical.primary.health.centers')}}" target="_blank">Click Here to View</a></td>
						</tr>
						<tr>
							<td class="text-center">3</td>
							<td>Rural Health Centre</td>
							<td><a href="{{route('medical.rural.health.centers')}}" target="_blank">Click Here to View</a></td>
						</tr>
						<tr>
							<td class="text-center">4</td>
							<td>Urban Health Centre</td>
							<td><a href="{{route('medical.urban.health.centers')}}" target="_blank">Click Here to View</a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<hr class="horizontal-line">
		<button class="careers-accordion">Land & Building <span class="icon">+</span> </button>
		<div class="panel">
			<h3 class="tmu-text-primary mb-0"><span></span><span>Land</span></h3>
			<div class="table-responsive">
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th class="text-center">Plot #</th>
							<th class="text-center">Survey #</th>
							<th class="text-center">Place</th>
							<th class="text-center">Area</th>
							<th class="text-center">Remarks if any </th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>268-272, 274, 276-277</td>
							<td class="text-center">-</td>
							<td>Bagarpur, Post Pakwada, Delhi Road, Moradabad</td>
							<td>25.89 (Acre)</td>
							<td> Campus is Unitary</td>
						</tr>
					</tbody>
				</table>
			</div>


			<h3 class="tmu-text-primary mb-0"><span></span><span>Building</span></h3>
			<p>The medical college occupies a 06 storied building.</p>
			<div class="table-responsive">
				<table class="table table-bordered table-striped">
					<thead>
					<tbody>
						<tr>
							<td>College</td>
							<td class="text-center">:</td>
							<td>25962.56 sq.mt.</td>
						</tr>
						<tr>
							<td>Hospital (includ ing OPD)</td>
							<td class="text-center">:</td>
							<td>65436.00 sq.mt.</td>
						</tr>
						<tr>
							<td>Hostel & Residential Complex</td>
							<td class="text-center">:</td>
							<td>44030.87 sq.mt.</td>
						</tr>

						<tr>
							<td>Residential Complex</td>
							<td class="text-center">:</td>
							<td>21945.15 sq.mt.</td>
						</tr>
					</tbody>
				</table>
			</div>


		</div>
		<hr class="horizontal-line">
		<button class="careers-accordion">Location <span class="icon">+</span> </button>
		<div class="panel">
			<div class="table-responsive">
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th></th>
							<th>Name</th>
							<th>Distance</th>
							<th>Traveling time required</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><b>Nearest Commercial Airport</b></td>
							<td>New Delhi</td>
							<td>170 KM</td>
							<td>4 Hrs.</td>
						</tr>
						<tr>
							<td><b>Nearest Major Railway Station</b></td>
							<td>Moradabad</td>
							<td>12 KM</td>
							<td>1/2 Hrs.</td>
						</tr>
						<tr>
							<td><b>Nearest Major City</b></td>
							<td>Moradabad</td>
							<td>12 KM</td>
							<td>1/2 Hrs.</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<hr class="horizontal-line">

		<button class="careers-accordion">Water & Electricity Supply <span class="icon">+</span> </button>
		<div class="panel">
			<div class="table-responsive">
				<table class="table table-bordered table-striped">
					<tbody>
						<tr>
							<td>Water Supply</td>
							<td class="text-center">:</td>
							<td>Through Bore wells</td>
						</tr>
						<tr>
							<td>Electric supply</td>
							<td class="text-center">:</td>
							<td>Sanctioned Load - 3000 KVA</td>
						</tr>
						<tr>
							<td>Generators</td>
							<td class="text-center">:</td>
							<td>Available (Available Load - 4625 KVA)</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<hr class="horizontal-line">

		<button class="careers-accordion">Accommodation<span class="icon">+</span> </button>
		<div class="panel">
			<div class="table-responsive">
				<table class="table table-bordered table-striped ">
					<thead>
						<tr>
							<th class="text-center">Sl. No.</th>
							<th>Accommodation</th>
							<th class="text-center"></th>
							<th class="text-center">Size</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="text-center">1</td>
							<td>Principal/ Dean’s Office Size</td>
							<td class="text-center">:</td>
							<td class="text-center">65 sq. mt.</td>
						</tr>
						<tr>
							<td class="text-center">2</td>
							<td>Staff Room Size</td>
							<td class="text-center">:</td>
							<td class="text-center">54 sq. mt.</td>
						</tr>
						<tr>
							<td class="text-center">3</td>
							<td>College Council Room Size</td>
							<td class="text-center">:</td>
							<td class="text-center">80 sq. mt.</td>
						</tr>
						<tr>
							<td class="text-center">4</td>
							<td>Office Superintendent’ s Room Size </td>
							<td class="text-center">:</td>
							<td class="text-center">10 sq. mt.</td>
						</tr>
						<tr>
							<td class="text-center">5</td>
							<td>Office Space Size</td>
							<td class="text-center">:</td>
							<td class="text-center">150 sq. mt.</td>
						</tr>
						<tr>
							<td class="text-center">6</td>
							<td>Intercom & Public address system in the College</td>
							<td class="text-center">:</td>
							<td class="text-center">Available</td>
						</tr>
						<tr>
							<td class="text-center">7</td>
							<td>Record Room</td>
							<td class="text-center">:</td>
							<td class="text-center">100 sq. mt.</td>
						</tr>
					</tbody>
				</table>
			</div>

		</div>
		<hr class="horizontal-line">
		<button class="careers-accordion">Central Library <span class="icon">+</span> </button>
		<div class="panel">
			<div class="table-responsive">
				<table class="table table-bordered table-striped">
					<tbody>
						<tr>
							<td class="text-center">1</td>
							<td>Layout and floor area</td>
							<td class="text-center">:</td>
							<td>1507 Sq.meter</td>
						</tr>
						<tr>
							<td class="text-center">2</td>
							<td style="width:30%">Reading Rooms
								<ul class="m-ol-list ps-3">
									<li>No.
										<ul class="m-ol-list ps-3">
											<li>for UG</li>
											<li>for PG/ Resident</li>
											<li>for Staf</li>
										</ul>
									</li>
									<li>In each accommodation</li>
								</ul>
							</td>
							<td class="text-center"><br><br>:<br><br>:<br>:<br>:</td>
							<td><br><br>07<br><br>04 (500 students)<br>02 (120 students)<br>01 (40 members) </td>
						</tr>
						<tr>
							<td class="text-center">3</td>
							<td>Working hours</td>
							<td class="text-center">:</td>
							<td>16 hours (8.00 a.m. to 12.00 a.m.)</td>
						</tr>
						<tr>
							<td class="text-center">4</td>
							<td>No. of shifts</td>
							<td class="text-center">:</td>
							<td>Two Shifts - 8.00 a.m. to 12.00 a.m.</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<hr class="horizontal-line">
		<button class="careers-accordion">Hostels <span class="icon">+</span> </button>
		<div class="panel">
			<div class="table-responsive">
				<table class="table table-bordered table-striped">
					<tbody>
						<tr>
							<td class="text-center">1</td>
							<td>Layout</td>
							<td class="text-center">:</td>
							<td>Separate Hostels for Boys and Girls, are available</td>
						</tr>
						<tr>
							<td class="text-center">2</td>
							<td>Distance from the college & Hospital</td>
							<td class="text-center">:</td>
							<td>Within same campus</td>
						</tr>
						<tr>
							<td class="text-center">3</td>
							<td>Total No. of rooms & seats</td>
							<td class="text-center">:</td>
							<td>
								<table class="table table-bordered table-striped ">
									<thead>
										<tr>
											<th class="text-center">Sl. No.</th>
											<th class="text-center"></th>
											<th class="text-center"></th>
											<th>Rooms</th>
											<th class="text-center">Seats</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td colspan="5"><b>Undergraduate</b></td>
										</tr>
										<tr>
											<td class="text-center">(i)</td>
											<td>Boys</td>
											<td class="text-center">:</td>
											<td>207 (Two Seater)</td>
											<td class="text-center">414</td>

										</tr>
										<tr>
											<td class="text-center">(ii)</td>
											<td style="width:30%">Girls</td>
											<td class="text-center">:</td>
											<td>262 (Two Seater)</td>
											<td class="text-center">524</td>
										</tr>
										<tr>
											<td class="text-center"></td>
											<td style="width:30%"></td>
											<td></td>
											<td><b>469</b></td>
											<td class="text-center"><b>938</b></td>
										</tr>
										<tr>
											<td colspan="5"><b>Interns</b></td>
										</tr>
										<tr>
											<td class="text-center">(i)</td>
											<td>Boys</td>
											<td class="text-center">:</td>
											<td>64 (Two Seater)</td>
											<td class="text-center">128</td>

										</tr>
										<tr>
											<td class="text-center">(ii)</td>
											<td style="width:30%">Girls</td>
											<td class="text-center">:</td>
											<td>65 (Two Seater)</td>
											<td class="text-center">130</td>
										</tr>
										<tr>
											<td class="text-center"></td>
											<td style="width:30%"></td>
											<td></td>
											<td><b>129</b></td>
											<td class="text-center"><b>258</b></td>
										</tr>
										<tr>
											<td colspan="5"><b>Postgraduate & Residents</b></td>
										</tr>
										<tr>
											<td class="text-center">(i)</td>
											<td>Boys</td>
											<td class="text-center">:</td>
											<td>113 (Two Seater)</td>
											<td class="text-center">226</td>

										</tr>
										<tr>
											<td class="text-center">(ii)</td>
											<td style="width:30%">Girls</td>
											<td class="text-center">:</td>
											<td>137 (Two Seater)</td>
											<td class="text-center">274</td>
										</tr>
										<tr>
											<td class="text-center"></td>
											<td style="width:30%"></td>
											<td></td>
											<td><b>250</b></td>
											<td class="text-center"><b>500</b></td>
										</tr>
										<tr>
											<td colspan="2">No of Student on the roll</td>
											<td class="text-center">:</td>
											<td colspan="2">748 students of the academic year 2019-20, 2020-21, 2021-22, 2022-23 & 2023-24</td>
										</tr>
										<tr>
											<td colspan="2">Percentage of students accommodated</td>
											<td class="text-center">:</td>
											<td colspan="2">75%</td>
										</tr>
										<tr>
											<td colspan="2">Supervisory arrangement</td>
											<td class="text-center">:</td>
											<td colspan="2">Hostel Wardens are the supervisors of the hostels</td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
						<tr>
							<td class="text-center">4</td>
							<td style="width:30%">Messing & Canteen arrangement (Dining hall should have accommodation for 25% of the occupants at a given time.)</td>
							<td class="text-center">:</td>
							<td>Proper Mess & Canteen facilities are available</td>
						</tr>
						<tr>
							<td class="text-center">5</td>
							<td style="width:30%">Availability of visitors room, Reading room, TT Table room / TV room and indoor games.</td>
							<td class="text-center">:</td>
							<td>Visitors room, Reading room recreation room with T.T. Table and other indoor games and T.V. rooms are available in both boys and girls hostels.</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<hr class="horizontal-line">

		<button class="careers-accordion">Residential Quarters <span class="icon">+</span> </button>
		<div class="panel">
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th class="text-center">Categories</th>
						<th class="text-center">Number</th>
						<th class="text-center">Percentage of staff accommodated in each category</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Teaching Staff</td>
						<td class="text-center">121</td>
						<td class="text-center">40%</td>
					</tr>
					<tr>
						<td>Residents</td>
						<td class="text-center">250</td>
						<td class="text-center">100%</td>
					</tr>
					<tr>
						<td>Non Teaching</td>
						<td class="text-center">40</td>
						<td class="text-center">20%</td>
					</tr>
					<tr>
						<td>Nursing Staff</td>
						<td class="text-center">165</td>
						<td class="text-center">20%</td>
					</tr>
					<tr>
						<td>Class IV</td>
						<td class="text-center">55</td>
						<td class="text-center">20%</td>
					</tr>
					<!--
											<tr>
												<td>Class IV</td>
												<td class="text-center">55</td>
												<td class="text-center">20%</td>
											</tr>
											-->
				</tbody>
			</table>
		</div>
		<hr class="horizontal-line">

		<button class="careers-accordion">Sport and Recreation Facilities <span class="icon">+</span> </button>
		<div class="panel">
			<div class="table-responsive">
				<table class="table table-bordered table-striped table-condensed mb-none">
					<tbody>
						<tr>
							<td class="text-center">1</td>
							<td>Play grounds and games played</td>
							<td class="text-center">:</td>
							<td>Playgrounds available in the campus for
								<ul class="m-ol-list ps-4 mb-0">
									<li>Cricket</li>
									<li>Football</li>
									<li>Volleyball</li>
									<li>Badminton</li>
									<li>Lawn Tennis</li>
									<li>Basket Ball</li>
									<li>Athletics</li>
								</ul>
							</td>
						</tr>
						<td class="text-center">2</td>
						<td>Gymnasium facilities and arrangement</td>
						<td class="text-center">:</td>
						<td>Gymn asium facility available</td>
						</tr>
						<tr>
							<td class="text-center">3</td>
							<td>Management</td>
							<td class="text-center">:</td>
							<td>Managed by Qualified Physical Instructor.</td>
						</tr>
						<tr>
							<td class="text-center">4</td>
							<td>Sports Officer / Physical Instructor</td>
							<td class="text-center">:</td>
							<td>Available</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<hr class="horizontal-line">

		<button class="careers-accordion">Central Casualty Services <span class="icon">+</span> </button>
		<div class="panel">
			<table class="table table-bordered table-striped">
				<tbody>
					<tr>
						<td class="text-center">(a)</td>
						<td class="text-center">Whether working</td>
						<td class="text-center">:</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td class="text-center">(b)</td>
						<td>Accommodation for staff on duty
							<ul class="m-ol-list ps-3">
								<li>Yes</li>

						</td>
						<td class="text-center"><br>:<br>:<br>:<br>:</td>
						<td><br>Available<br>Available<br>Available<br>Available</td>
					</tr>
					<tr>
						<td class="text-center">(c)</td>
						<td>No. of Emergency triage beds</td>
						<td class="text-center">:</td>
						<td>12</td>
					</tr>
					<tr>
						<td class="text-center">(d)</td>
						<td>Working arrangement of casualty service
							<ul class="m-ol-list ps-3">
								<li>No. of Casualty Medical Officer</li>
								<li>Consultant Services</li>
								<li>Nature of services</li>
							</ul>
						</td>
						<td class="text-center">:</td>
						<td><br><br>Four<br>The consultants of various specialities like Medicine, Surgery, Orthopaedics, Paediatrics, Obst & Gynae. & Anesthesia are posted in the Casualty by rotation and they stay in the hospital during their duty days. The next senior Consultant is on Call duty.<br>Emergency care</td>
					</tr>
					<tr>
						<td class="text-center">(e)</td>
						<td>Resuscitation services facilities
							<ul class="m-ol-list ps-3">
								<li>Oxygen & Suction</li>
								<li>Ventilators</li>
								<li>Defibrillator</li>
								<li>Monitors</li>
								<li>Pulse Oxymeter</li>
								<li>Nebulizer</li>
								<li>Syringe Infusion Pump</li>
								<li>Ambubag</li>
								<li>Fully equipped disaster trolleys</li>
							</ul>
						</td>
						<td><br>:<br>:<br>:<br>:<br><br>:<br>:<br>:<br>:<br><br>:</td>
						<td><br>Centralized<br>Available<br>Available<br>Available<br><br>Available<br>Available<br>Available<br>Available<br><br>Available</td>
					</tr>
					<tr>
						<td class="text-center">(f)</td>
						<td>Facilities provided
							<ul class="m-ol-list ps-3">
								<li>X-rays</li>
								<li>Operation Theatre</li>
								<li>Laboratory Facilities</li>
							</ul>
						</td>
						<td><br>:<br>:<br>:</td>
						<td><br>Available "Mobile X -Ray" <br>Available<br>Available 24hrs in Central Lab</td>
					</tr>


				</tbody>
			</table>
		</div>
		<hr class="horizontal-line">

		<button class="careers-accordion">Operation Theater Unit <span class="icon">+</span> </button>
		<div class="panel">
			<div class="table-responsive">
				<table class="table table-bordered table-striped">
					<tbody>
						<tr>
							<td>1</td>
							<td>(a)</td>
							<td></td>
							<td style="width:30%">Number</td>
							<td class="text-center">:</td>
							<td>12 (Fully air-conditioned modular OT with central gases & suction facility) including 1 in casualty.</td>
						</tr>
						<tr>
							<td></td>
							<td>(b)</td>
							<td></td>
							<td>Arrangement & Distribution</td>
							<td class="text-center">:</td>
							<td>The operation theatre arrangements are being jointly managed by HOD Anaesthesia & HOD Surgery.</td>
						</tr>
						<tr>
							<td></td>
							<td>(c)</td>
							<td></td>
							<td>Equipments (including Anaesthesia equipments)</td>
							<td class="text-center">:</td>
							<td>List of Major O.T. Equipments is enclosed</td>
						</tr>
						<tr>
							<td></td>
							<td>(d)</td>
							<td></td>
							<td>Facilities available in each O.T. unit</td>
							<td class="text-center">:</td>
							<td>Present</td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td>(i)</td>
							<td>Waiting Room for Patients</td>
							<td class="text-center">:</td>
							<td>Present</td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td>(ii)</td>
							<td>Soiled Linen Room</td>
							<td class="text-center">:</td>
							<td>Present</td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td>(iii)</td>
							<td>Sterilization Room</td>
							<td class="text-center">:</td>
							<td>Present</td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td>(iv)</td>
							<td>Surgeons & Anesthetics Room</td>
							<td class="text-center">:</td>
							<td>Present</td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td>(v)</td>
							<td>Assistants Room</td>
							<td class="text-center">:</td>
							<td>Present</td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td>(vi)</td>
							<td>Observation Gallery for Students </td>
							<td class="text-center">:</td>
							<td>Present</td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td>(vii)</td>
							<td>Store Room</td>
							<td class="text-center">:</td>
							<td>Present</td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td>(viii)</td>
							<td>Washing Room for Surgeon and Assistants</td>
							<td class="text-center">:</td>
							<td>Present</td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td>(ix)</td>
							<td>Students Washing-up and Dressing-up Room</td>
							<td class="text-center">:</td>
							<td>Present</td>
						</tr>
						<tr>
							<td>2</td>
							<td></td>
							<td></td>
							<td>Arrangement of Anesthesia</td>
							<td class="text-center">:</td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td>(a)</td>
							<td></td>
							<td>Pre-anesthetic care</td>
							<td class="text-center">:</td>
							<td>Available</td>
						</tr>
						<tr>
							<td></td>
							<td>(b)</td>
							<td></td>
							<td>Nature of anesthesia used</td>
							<td class="text-center">:</td>
							<td>General Anesthesia, Epidural Anesthesia, Spinal Anesthesia, Local Anesthesia</td>
						</tr>
						<tr>
							<td></td>
							<td>(c)</td>
							<td></td>
							<td>Post-anesthetic care</td>
							<td class="text-center">:</td>
							<td>Available</td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td>Pre-operative ward (no. of beds)</td>
							<td class="text-center">:</td>
							<td>25 (Twenty Five)</td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td>Post-operative ward (no. of beds)</td>
							<td class="text-center">:</td>
							<td>28 (Twenty Eight)</td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td>Resuscitation facilities and special equipments</td>
							<td class="text-center">:</td>
							<td>Ventilators, Defibrillators, Ambu bags and resuscitation facilities are available</td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td>If any super specialties exists, give details</td>
							<td class="text-center">:</td>
							<td>Yes
								<table class="table table-bordered table-striped">
									<tbody>
										<tr>
											<td class="text-center"><b>Intensive Care Area</b></td>
											<td class="text-center"><b>No. of Beds</b></td>
											<td class="text-center"><b>Specialized equipment in each</b></td>
										</tr>
										<tr>
											<td>ICCU</td>
											<td>20</td>
											<td>Ventilator(4), Central Oxygen available Portable X Ray 100 mA (1), Defibrillator (1), ECG machine (1), ABG Machine-1, Drip Infusion Pump-3, Nebulizers (5) Multipara monitors-20, Central Cardiac Monitor Console-1, Syringe Infusion Pump-60, Crash Cart-1, Ambubag-1, Central Gas supply</td>
										</tr>
										<tr>
											<td>MICU/ ICU</td>
											<td>25</td>
											<td>Ventilator (8), Central Oxygen available, Portable X Ray 100 mA (1), Defibrillator (2), ECG machine (1), Syringe Infusion Pump-75, Crash Cart-1, Ambubag-2 Nebulizers (10), Multipara Monitors(25)</td>
										</tr>
										<tr>
											<td>SICU</td>
											<td>36</td>
											<td>Multipara Monitor-36, Defibrillator-1, Pulse Oxymeter-1, Ventilator-7, Drip Infusion Pump-110, Crash Cart-1 &amp; Central gas supply with central suction</td>
										</tr>
										<tr>
											<td>RICU</td>
											<td>10</td>
											<td>ECG Machine -1, Multipara Monitors-10, Ventilator -5, Defibrillator -1, Syringe Infusion Pump -30, Portable X-Ray -1, Nebulizer -6, Crash cart -1, Ambubag-2, BIPAP Machine-3, ABG Machine-1 Central gas supply and Central gas suction</td>
										</tr>
										<tr>
											<td>Burn ICU</td>
											<td>5</td>
											<td>Burn Cradles -5, Crash Cart -1, Multipara Monitor-5, Pulse oxymeter-1, Central gas supply and Central gas suction</td>
										</tr>
										<tr>
                                            <td >Neonatal ICU - NICU</td>
                                            <td>12</td>
                                            <td rowspan="2"> Multipara Monitors - 22, Ventilator - 4, Crash Cart - 3, Ambubag - 2, Defibrillator - 1, Radiant Heat Warmer - 22, Incubator - 2, Syringe Infusion Pump - 66, Nebulizers - 2, Phototherapy Unit - 9, Euro Bag Suction - 1, C.Pap - 1, Central gas supply and Central gas suction. </td>
                                        </tr>
                                        <tr>
                                            <td>Paediatrics ICU - PICU</td>
                                            <td>10</td>
                                        </tr>
										<tr>
											<td>OBG ICU</td>
											<td>21</td>
											<td>Multipara Monitors -21, ventilator-3, Defibrillator-01, Syringe Infusion Pump -63, Nebulizer -1, Crash cart -1 Ambubag -1, Pulse oxymeter-2, Central gas supply and Central gas suction</td>
										</tr>
										<tr>
											<td>Labor Rooms</td>
											<td>05</td>
											<td>Clean (4); Septic (1)</td>
										</tr>

									</tbody>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<hr class="horizontal-line">

		<button class="careers-accordion">Radiological Facilities <span class="icon">+</span> </button>
		<div class="panel">
			<div class="table-rseponsive">
				<table class="table table-bordered table-striped ">
					<tbody>
						<tr>
							<td>(a)</td>
							<td>No. of Radio Diagnosis Rooms and their size</td>
							<td class="text-center">:</td>
							<td>6 rooms (each room 28 sq.mt.)</td>
						</tr>
						<tr>
							<td></td>
							<td colspan="3">
								<div class="table-responsive">
									<table class="table table-bordered table-striped ">
										<thead>
											<tr>
												<th class="text-center">Machine</th>
												<th class="text-center">Strength</th>
												<th class="text-center">Fixed</th>
												<th class="text-center">Mobile</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>X-Ray</td>
												<td>1000mA</td>
												<td class="text-center">01</td>
												<td class="text-center">-</td>
											</tr>
											<tr>
												<td>X-Ray</td>
												<td>800mA with IITV</td>
												<td class="text-center">02</td>
												<td class="text-center">-</td>
											</tr>
											<tr>
												<td>X-Ray</td>
												<td>600mA with IITV</td>
												<td class="text-center">01</td>
												<td class="text-center">-</td>
											</tr>
											<tr>
												<td>X-Ray</td>
												<td>300mA</td>
												<td class="text-center">02</td>
												<td class="text-center">-</td>
											</tr>
											<tr>
												<td>X-Ray</td>
												<td>100mA</td>
												<td class="text-center">-</td>
												<td class="text-center">06</td>
											</tr>
											<tr>
												<td>C.T.</td>
												<td>128 Slice</td>
												<td class="text-center">01</td>
												<td class="text-center">-</td>
											</tr>
											<tr>
												<td>Ultrasound with color doppler</td>
												<td class="text-center">03</td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td>CR system with image reader</td>
												<td class="text-center">02</td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td>Mammography</td>
												<td class="text-center">01</td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td>DSA</td>
												<td class="text-center">01</td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td>Cath Lab with DSA</td>
												<td class="text-center">01</td>
												<td></td>
												<td></td>
											</tr>
										</tbody>
									</table>
								</div>
							</td>
						</tr>
						<tr>
							<td>(b)</td>
							<td>Workload per day</td>
							<td class="text-center">:</td>
							<td>Nos. per day</td>
						</tr>
						<tr>
							<td></td>
							<td colspan="3">
								<div class="table-responsive">
									<table class="table table-bordered table-striped">
										<tbody>
											<tr>
												<td>(i)</td>
												<td>Screening</td>
												<td class="text-center">:</td>
												<td class="text-center">-</td>
											</tr>
											<tr>
												<td>(ii)</td>
												<td>Radiographic</td>
												<td class="text-center">:</td>
												<td class="text-center">295</td>
											</tr>
											<tr>
												<td>(iii)</td>
												<td>Special Radiographs (for example, Barium and Dye studies)</td>
												<td class="text-center">:</td>
												<td class="text-center">08</td>
											</tr>
											<tr>
												<td>(iv)</td>
												<td>Ultrasonographs</td>
												<td class="text-center">:</td>
												<td class="text-center">110</td>
											</tr>

											<tr>
												<td>(v)</td>
												<td>C.T. Scans</td>
												<td class="text-center">:</td>
												<td class="text-center">44</td>
											</tr>
											<tr>
												<td>(vi)</td>
												<td>Any other like Mammography etc</td>
												<td class="text-center">:</td>
												<td class="text-center">02</td>
											</tr>
											<tr>
												<td>(vii)</td>
												<td>MRI</td>
												<td class="text-center">:</td>
												<td class="text-center">19</td>
											</tr>
											<tr>
												<td>(viii)</td>
												<td>Cath Lab</td>
												<td class="text-center">:</td>
												<td class="text-center">05</td>
											</tr>



										</tbody>
									</table>
								</div>
							</td>
						</tr>
						<tr>
							<td>(c)</td>
							<td>Protective Measures</td>
							<td class="text-center">:</td>
							<td>Lead Aprons & TLD Badges are used by the staff.</td>
						</tr>
						<tr>
							<td></td>
							<td>Per BARC Specification (Adequate/ Inadequate)</td>
							<td class="text-center">:</td>
							<td>Adequate</td>
						</tr>

					</tbody>
				</table>
			</div>
		</div>
		<hr class="horizontal-line">

		<button class="careers-accordion">Pharmacy <span class="icon">+</span> </button>
		<div class="panel">
			<div class="table-responsive">
				<table class="table table-bordered table-striped">
					<tbody>
						<tr>
							<td>Supervised by whom</td>
							<td class="text-center">:</td>
							<td>Supervised by Chief Pharmacist</td>
						</tr>
						<tr>
							<td>Qualification of Pharmacist In-charge /td>
							<td class="text-center">:</td>
							<td>B. Pharm</td>
						</tr>
						<tr>
							<td>No. of other Staff</td>
							<td class="text-center">:</td>
							<td>Pharmacist (8); Computer Operator(6); Cashier (5) & Attendants (8)</td>
						</tr>
						<tr>
							<td>
								No. of prescription dispensed a day
								<ul class="m-ol-list ps-3">
									<li>Inpatient</li>
									<li>Out-patient.</li>
								</ul>
							</td>
							<td class="text-center"><br>:<br>:<br></td>
							<td><br>1600<br>2150</td>
						</tr>

					</tbody>
				</table>
			</div>
		</div>
		<hr class="horizontal-line">

		<button class="careers-accordion">Central Laundry <span class="icon">+</span> </button>
		<div class="panel">
			<div class="table-responsive">
				<table class="table table-bordered table-striped">
					<tbody>
						<tr>
							<td>(a)</td>
							<td>
								Equipment
								<ul class="m-ol-list ps-3">
									<li>Mechanized – Bulk washing machine, Hydro extractor, Flat & Rolley steam press.</li>
									<li>Manual</li>
								</ul>
							</td>
							<td class="text-center"><br>:<br><br>:<br></td>
							<td><br>Industrial Washing Machine (1), Hydro extractor (1), Drying Tumbler (1), Flat Press (1), Boiler (1)<br>Also</td>
						</tr>
						<tr>
							<td>(b)</td>
							<td>Volume of work / day</td>
							<td class="text-center">:</td>
							<td>400 – 500 kg per day</td>
						</tr>
						<tr>
							<td>(c)</td>
							<td>
								Staff available
								<ul class="m-ol-list ps-3">
									<li>Supervisor</li>
									<li>Dhobi / Washermen / Women</li>
									<li>Packers</li>
								</ul>
							</td>
							<td class="text-center"><br>:<br>:<br>:<br></td>
							<td><br>Two<br>Twelve<br>Twelve</td>
						</tr>


					</tbody>
				</table>
			</div>
		</div>
		<hr class="horizontal-line">

		<button class="careers-accordion">Kitchen <span class="icon">+</span> </button>
		<div class="panel">
			<div class="table-responsive">
				<table class="table table-bordered table-striped">
					<tbody>
						<tr>
							<td>(a)</td>
							<td>
								Type
								<ul class="m-ol-list ps-4">
									<li>Electrical</li>
									<li>L.P.G.</li>
									<li>Coal / Wood</li>
								</ul>
							</td>
							<td class="text-center"><br>:<br>:<br>:<br></td>
							<td><br>No<br>Yes, available<br>No</td>
						</tr>
						<tr>
							<td>(b)</td>
							<td>Nature of food supplied</td>
							<td class="text-center">:</td>
							<td>Vegetarian food, both normal & special diets</td>
						</tr>
						<tr>
							<td>(c)</td>
							<td>Daily no. of meals</td>
							<td class="text-center">:</td>
							<td>Food is provided to 500-600 inpatients every day (as per patients' needs) free of charge.</td>
						</tr>
						<tr>
							<td>(d)</td>
							<td>% of patients provided with free diet</td>
							<td class="text-center">:</td>
							<td>60% (approx.)</td>
						</tr>
						<tr>
							<td>(e)</td>
							<td>Per Captia expenses / day</td>
							<td class="text-center">:</td>
							<td>Rs. 50/- per patient per day </td>
						</tr>
						<!--
														<tr>
															<td>(f)</td>
															<td>Dietician</td>
															<td class="text-center">:</td>
															<td>Ms. Madhu Bharti & Ms. Babita</td>
														</tr>
														-->
					</tbody>
				</table>
			</div>
		</div>
		<hr class="horizontal-line">

		<button class="careers-accordion">Canteen <span class="icon">+</span> </button>
		<div class="panel">
			<div class="table-responsive">
				<table class="table table-bordered table-striped">
					<tbody>
						<tr>
							<td>Type of Catering</td>
							<td class="text-center">:</td>
							<td>Self Service</td>
						</tr>
						<tr>
							<td>Whether Subsidised?</td>
							<td class="text-center">:</td>
							<td>Partially Subsidized.</td>
						</tr>
						<tr>
							<td>For staff only or for others also</td>
							<td class="text-center">:</td>
							<td>For All</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<hr class="horizontal-line">

		<button class="careers-accordion">Incinerator <span class="icon">+</span> </button>
		<div class="panel">
		<p style="text-align:justify">Tie up with <b>M/s Sushila Bio-Medical Waste Plant Pvt. Ltd.</b> for collection of Bio Medical Waste from the Hospital. Valid upto 30.04.2027.</p>
		</div>
		<hr class="horizontal-line">
	</div>
</div>
</div>


@endsection