@extends('layouts.university.colleges.nursing_with_sidebar')
@section('content')

<link rel="stylesheet" href="{{asset('assets/css/college_overview.css')}}">


<div class="main-content">
	<div class="container">

		<section class="about-section bg-light mt-4">
			<div class="container">
				<div class="text-content p-4">
					<h1 class="tmu-text-primary tmu-page-heading"><span>Department of </span><span> Paediatric Nursing </span></h1>
					<p class="about-p mb-4">Child health nursing encompasses a wide scope of practice typically associated with child care for both undergraduate and postgraduate students. Our department fosters a enrichment of students knowledge, attitude and practice in various health promotional activities of children and their families.</p>
				</div>
				<div class="image-content text-center p-4">
					<img src="{{asset('/assets/img/college_departments/nursing/pdn/banner.jpg')}}" alt="">
				</div>
				<div class="container p-3">
					<ul class="m-ol-list ps-4 text-justify">
						<li>To provide the highest level of compassionate patient centered care and family centered through innovative evidenced- based nursing practice, education and research.</li>
						<li>Integration of developmental needs of children into nursing care with holistic approach.</li>
						<li>Integration of scientific principles and theory related to child health nursing.</li>
						<li>Interdisciplinary team approach to plan and provide comprehensive child care.</li>
						<li>Focusing on the ethical, moral and legal issues regarding child care.</li>
					</ul>
					<p class="about-p mb-4">The department observes significant days, educational and health related programmes, field visits, camp’s in collorabtion with various departments. Standard procedure’s manuals and protocols are in practice and updates as per the current scenario in the changing patterns of health care delivery system and advancement in paediatric care.</p>
					<h3 class="tmu-text-primary"><span>Our </span><span> Laboratories</span></h3>
					<!-- <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
						<a class="grid-item" href="{{asset('/assets/img/college_departments/nursing/pdn/lab1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/nursing/pdn/lab1.jpg')}}" alt="Gallery Thumb 1"></a>
						<a class="grid-item" href="{{asset('/assets/img/college_departments/nursing/pdn/lab3.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/nursing/pdn/lab3.jpg')}}" alt="Gallery Thumb 2"></a>
						<a class="grid-item" href="{{asset('/assets/img/college_departments/nursing/pdn/lab6.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/nursing/pdn/lab6.jpg')}}" alt="Gallery Thumb 3"></a>
						<a class="grid-item" href="{{asset('/assets/img/college_departments/nursing/pdn/lab2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/nursing/pdn/lab2.jpg')}}" alt="Gallery Thumb 5"></a>
					</div> -->
					<div class="row justify-content-left gutter-30 col-mb-5 mb-5">
						<div class="col-sm-4 col-md-4">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img src="{{asset('/assets/img/college_departments/nursing/pdn/Lab1.jpg')}}" height="150px" alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">Simulation Lab</h4>
										<span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> College of Nursing, TMU Campus</span>
										<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/college_departments/nursing/pdn/geotag/Lab1.jpg')}}" download>
											Download Geo Tag Image
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-4 col-md-4">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img src="{{asset('/assets/img/college_departments/nursing/pdn/Lab2.jpg')}}" height="150px" alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">Simulation Lab </h4>
										<span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> College of Nursing, TMU Campus</span>
										<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/college_departments/nursing/pdn/geotag/Lab2.jpg')}}" download>
											Download Geo Tag Image
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-4 col-md-4">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img src="{{asset('/assets/img/college_departments/nursing/pdn/lab3.jpg')}}" height="150px" alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">Simulation Lab</h4>
										<span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> College of Nursing, TMU Campus</span>
										<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/college_departments/nursing/pdn/geotag/lab3.jpg')}}" download>
											Download Geo Tag Image
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-4 col-md-4">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img src="{{asset('/assets/img/college_departments/nursing/pdn/lab4.jpg')}}" height="150px" alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">Simulation Lab</h4>
										<span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> College of Nursing, TMU Campus</span>
										<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/college_departments/nursing/pdn/geotag/lab4.jpg')}}" download>
											Download Geo Tag Image
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-4 col-md-4">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img src="{{asset('/assets/img/college_departments/nursing/pdn/lab5.jpg')}}" height="150px" alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">Paediatric Lab</h4>
										<span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> College of Nursing, TMU Campus</span>
										<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/college_departments/nursing/pdn/geotag/lab5.jpg')}}" download>
											Download Geo Tag Image
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4 col-md-4">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img src="{{asset('/assets/img/college_departments/nursing/pdn/lab6.jpg')}}" height="150px" alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">Paediatric Lab</h4>
										<span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> College of Nursing, TMU Campus</span>
										<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/college_departments/nursing/pdn/geotag/lab6.jpg')}}" download>
											Download Geo Tag Image
										</a>
									</div>
								</div>
							</div>
						</div>


					</div>



					<h3 class="tmu-text-primary"><span>Labs </span><span> Equipments</span></h3>
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
										<td>Pediatric Dummy</td>
									</tr>
									<tr>
										<td class="text-center" sdval="2">2</td>
										<td>Pediatric Multi Functioning Dummy</td>
									</tr>
									<tr>
										<td class="text-center" sdval="3">3</td>
										<td>Child CPR Manikin</td>
									</tr>
									<tr>
										<td class="text-center" sdval="4">4</td>
										<td>Infant Obstruction Model</td>
									</tr>
									<tr>
										<td class="text-center" sdval="5">5</td>
										<td>Ambu Bag</td>
									</tr>
									<tr>
										<td class="text-center" sdval="6">6</td>
										<td>Laryngoscope</td>
									</tr>
									<tr>
										<td class="text-center" sdval="7">7</td>
										<td>Nebulizer Machine</td>
									</tr>
									<tr>
										<td class="text-center" sdval="8">8</td>
										<td>Steam Inahalation Machine</td>
									</tr>
									<tr>
										<td class="text-center" sdval="9">9</td>
										<td>Infantometer</td>
									</tr>
									<tr>
										<td class="text-center" sdval="10">10</td>
										<td>Pediatric Cot</td>
									</tr>
									<tr>
										<td class="text-center" sdval="11">11</td>
										<td>Adult Cot</td>
									</tr>
									<tr>
										<td class="text-center" sdval="12">12</td>
										<td>Bowl (Small)</td>
									</tr>
									<tr>
										<td class="text-center" sdval="13">13</td>
										<td>Bowl (Medium)</td>
									</tr>
									<tr>
										<td class="text-center" sdval="14">14</td>
										<td>Bowl (Large)</td>
									</tr>
									<tr>
										<td class="text-center" sdval="15">15</td>
										<td>B P Apparatus</td>
									</tr>
									<tr>
										<td class="text-center" sdval="16">16</td>
										<td>Bandage Roll</td>
									</tr>
									<tr>
										<td class="text-center" sdval="17">17</td>
										<td>Betadine</td>
									</tr>
									<tr>
										<td class="text-center" sdval="18">18</td>
										<td>Cotton Roll</td>
									</tr>
									<tr>
										<td class="text-center" sdval="19">19</td>
										<td>Dettol</td>
									</tr>
									<tr>
										<td class="text-center" sdval="20">20</td>
										<td>Glucometer</td>
									</tr>
									<tr>
										<td class="text-center" sdval="21">21</td>
										<td>Gloves</td>
									</tr>
									<tr>
										<td class="text-center" sdval="22">22</td>
										<td>Gauze Roll</td>
									</tr>
									<tr>
										<td class="text-center" sdval="23">23</td>
										<td>Hand Sanitizer</td>
									</tr>
									<tr>
										<td class="text-center" sdval="24">24</td>
										<td>Inch Tape</td>
									</tr>
									<tr>
										<td class="text-center" sdval="25">25</td>
										<td>Kidney Tray(Small)</td>
									</tr>
									<tr>
										<td class="text-center" sdval="26">26</td>
										<td>Kidney Tray(Medium)</td>
									</tr>
									<tr>
										<td class="text-center" sdval="27">27</td>
										<td>Kidney Tray(Large)</td>
									</tr>
									<tr>
										<td class="text-center" sdval="28">28</td>
										<td>Micropore Adhesive</td>
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
										<td class="text-center" sdval="29">29</td>
										<td>Mackintosh</td>
									</tr>
									<tr>
										<td class="text-center" sdval="30">30</td>
										<td>Syringe</td>
									</tr>
									<tr>
										<td class="text-center" sdval="31">31</td>
										<td>Steel Drum(Medium)</td>
									</tr>
									<tr>
										<td class="text-center" sdval="32">32</td>
										<td>Steel Tray with Lid (Small)</td>
									</tr>
									<tr>
										<td class="text-center" sdval="33">33</td>
										<td>Steel Tray (Medium)</td>
									</tr>
									<tr>
										<td class="text-center" sdval="34">34</td>
										<td>Steel Tray (Large)</td>
									</tr>
									<tr>
										<td class="text-center" sdval="35">35</td>
										<td>Spirit</td>
									</tr>
									<tr>
										<td class="text-center" sdval="36">36</td>
										<td>Scissors</td>
									</tr>
									<tr>
										<td class="text-center" sdval="37">37</td>
										<td>Thermometer (Mercury)</td>
									</tr>
									<tr>
										<td class="text-center" sdval="38">38</td>
										<td>Torch</td>
									</tr>
									<tr>
										<td class="text-center" sdval="39">39</td>
										<td>Weighing Machine</td>
									</tr>
									<tr>
										<td class="text-center" sdval="40">40</td>
										<td>Oxygen Mask</td>
									</tr>
									<tr>
										<td class="text-center" sdval="41">41</td>
										<td>Nebulizer kit</td>
									</tr>
									<tr>
										<td class="text-center" sdval="42">42</td>
										<td>Nail Cutter</td>
									</tr>
									<tr>
										<td class="text-center" sdval="43">43</td>
										<td>Sethoscope</td>
									</tr>
									<tr>
										<td class="text-center" sdval="44">44</td>
										<td>Bed Sheet(White)</td>
									</tr>
									<tr>
										<td class="text-center" sdval="45">45</td>
										<td>Pediatric Mattress</td>
									</tr>
									<tr>
										<td class="text-center" sdval="46">46</td>
										<td>Pillow Cover</td>
									</tr>
									<tr>
										<td class="text-center" sdval="47">47</td>
										<td>Fetal Skull</td>
									</tr>
									<tr>
										<td class="text-center" sdval="48">48</td>
										<td>Pencil Cell</td>
									</tr>
									<tr>
										<td class="text-center" sdval="49">49</td>
										<td>Pediatric ET Tube</td>
									</tr>
									<tr>
										<td class="text-center" sdval="50">50</td>
										<td>Nasal Prong</td>
									</tr>
									<tr>
										<td class="text-center" sdval="51">51</td>
										<td>Urinary Foley's Catheter</td>
									</tr>
									<tr>
										<td class="text-center" sdval="52">52</td>
										<td>Suction Catheter</td>
									</tr>
									<tr>
										<td class="text-center" sdval="53">53</td>
										<td>IV Cannula</td>
									</tr>
									<tr>
										<td class="text-center" sdval="54">54</td>
										<td>Bandage</td>
									</tr>
									<tr>
										<td class="text-center" sdval="55">55</td>
										<td>Cord Clamp</td>
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