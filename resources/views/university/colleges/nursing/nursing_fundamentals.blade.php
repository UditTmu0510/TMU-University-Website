@extends('layouts.university.colleges.nursing_with_sidebar')
@section('content')

<link rel="stylesheet" href="{{asset('assets/css/college_overview.css')}}">


<div class="main-content">
	<div class="container">

		<section class="about-section mt-4">
			<div class="container">
				<div class="text-content p-4">
					<h1 class="tmu-text-primary tmu-page-heading"><span>Department of </span><span> Fundamentals of Nursing</span></h1>
					<p class="about-p mb-4">The primary goal of the Fundamentals Lab is to enhance the nursing students to learn the basic nursing skills and intervention concepts with the valuable opportunity of practicing them on adult-sized “patients in an acute care hospital setting.
						The basic skill of nursing practice is through the utilization of theory and kinaesthetic learning principles.</p>
				</div>
				<div class="image-content text-center p-4">
					<img src="{{asset('/assets/img/college_departments/nursing/fun/banner.jpg')}}" alt="">
				</div>
				<div class="container p-3">
					<p class="about-p mb-4">The physical layout accommodates various learning areas according to the needs of the students. The lab consists of 15 hospital beds holding “patients” (mannequins). The “patients”,
						with movable limbs and replaceable parts, are recipients of a variety of nursing interventions – repositioning, injections, intravenous catheters, nasogastric tubes, foleys catheters, wound care, and oxygenation therapy.</p>
					<p class="about-p mb-4">The uniqueness of the Lab is that it combines the atmosphere of the hospital environment with sophisticated learning technology. It is instrumental for insuring the success of all our nursing students as they progress throughout their baccalaureate program.</p>
					<h3 class="tmu-text-primary"><span>Our </span><span> Laboratories</span></h3>
					<!-- <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
						<a class="grid-item" href="{{asset('/assets/img/college_departments/nursing/fun/lab7.jpeg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/nursing/fun/lab7.jpeg')}}" alt="Gallery Thumb 1"></a>
						<a class="grid-item" href="{{asset('/assets/img/college_departments/nursing/fun/lab3.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/nursing/fun/lab3.jpg')}}" alt="Gallery Thumb 2"></a>
						<a class="grid-item" href="{{asset('/assets/img/college_departments/nursing/fun/lab4.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/nursing/fun/lab4.jpg')}}" alt="Gallery Thumb 3"></a>
						<a class="grid-item" href="{{asset('/assets/img/college_departments/nursing/fun/lab5.jpeg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/nursing/fun/lab5.jpeg')}}" alt="Gallery Thumb 5"></a>
					</div> -->
					<div class="row justify-content-left gutter-30 col-mb-5 mb-5">
						<div class="col-sm-4 col-md-4">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img src="{{asset('/assets/img/college_departments/nursing/fun/Lab1.jpg')}}" height="150px" alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">OSCE Lab</h4>
										<span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> College of Nursing, TMU Campus</span>
										<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/college_departments/nursing/fun/geotag/Lab1.jpg')}}" download>
											Download Geo Tag Image
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-4 col-md-4">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img src="{{asset('/assets/img/college_departments/nursing/fun/Lab2.jpg')}}" height="150px" alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">Nursing Foundation Lab </h4>
										<span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> College of Nursing, TMU Campus</span>
										<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/college_departments/nursing/fun/geotag/Lab2.jpg')}}" download>
											Download Geo Tag Image
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-4 col-md-4">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img src="{{asset('/assets/img/college_departments/nursing/fun/lab3.jpg')}}" height="150px" alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">OSCE Lab</h4>
										<span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> College of Nursing, TMU Campus</span>
										<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/college_departments/nursing/fun/geotag/lab3.jpg')}}" download>
											Download Geo Tag Image
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-4 col-md-4">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img src="{{asset('/assets/img/college_departments/nursing/fun/lab4.jpg')}}" height="150px" alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">Nursing Foundation Lab</h4>
										<span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> College of Nursing, TMU Campus</span>
										<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/college_departments/nursing/fun/geotag/lab4.jpg')}}" download>
											Download Geo Tag Image
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-4 col-md-4">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img src="{{asset('/assets/img/college_departments/nursing/fun/lab5.jpeg')}}" height="150px" alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">Simulation Lab</h4>
										<span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> College of Nursing, TMU Campus</span>
										<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/college_departments/nursing/fun/geotag/lab5.jpeg')}}" download>
											Download Geo Tag Image
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4 col-md-4">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img src="{{asset('/assets/img/college_departments/nursing/fun/lab6.jpeg')}}" height="150px" alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">Simulation Lab</h4>
										<span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> College of Nursing, TMU Campus</span>
										<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/college_departments/nursing/fun/geotag/lab6.jpeg')}}" download>
											Download Geo Tag Image
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4 col-md-4">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img src="{{asset('/assets/img/college_departments/nursing/fun/lab7.jpeg')}}" height="150px" alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">Simulation Lab</h4>
										<span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> College of Nursing, TMU Campus</span>
										<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/college_departments/nursing/fun/geotag/lab7.jpeg')}}" download>
											Download Geo Tag Image
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4 col-md-4">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img src="{{asset('/assets/img/college_departments/nursing/fun/lab8.jpeg')}}" height="150px" alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">Simulation Lab</h4>
										<span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> College of Nursing, TMU Campus</span>
										<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/college_departments/nursing/fun/geotag/lab8.jpeg')}}" download>
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
										<td class="text-center" colspan="2"><strong>NURSING FOUNDATIONS ARTICLES</strong></td>
									</tr>
									<tr>
										<td class="text-center" sdval="1">1</td>
										<td>Artery Forcep Curved</td>
									</tr>
									<tr>
										<td class="text-center" sdval="2">2</td>
										<td>Artery Forcep Straight</td>
									</tr>
									<tr>
										<td class="text-center" sdval="3">3</td>
										<td>Betadine Solution</td>
									</tr>
									<tr>
										<td class="text-center" sdval="4">4</td>
										<td>Big Bowl</td>
									</tr>
									<tr>
										<td class="text-center" sdval="5">5</td>
										<td>Big Drum</td>
									</tr>
									<tr>
										<td class="text-center" sdval="6">6</td>
										<td>Blanket</td>
									</tr>
									<tr>
										<td class="text-center" sdval="7">7</td>
										<td>Community Bag</td>
									</tr>
									<tr>
										<td class="text-center" sdval="8">8</td>
										<td>Condom Training Model</td>
									</tr>
									<tr>
										<td class="text-center" sdval="9">9</td>
										<td>Cotton Roll</td>
									</tr>
									<tr>
										<td class="text-center" sdval="10">10</td>
										<td>Dettol Solution</td>
									</tr>
									<tr>
										<td class="text-center" sdval="11">11</td>
										<td>Disposable Syringes 10 Cc</td>
									</tr>
									<tr>
										<td class="text-center" sdval="12">12</td>
										<td>Disposable Syringes 5cc</td>
									</tr>
									<tr>
										<td class="text-center" sdval="13">13</td>
										<td>Dropping Bottles</td>
									</tr>
									<tr>
										<td class="text-center" sdval="14">14</td>
										<td>Enema Can</td>
									</tr>
									<tr>
										<td class="text-center" sdval="15">15</td>
										<td>Fetoscope</td>
									</tr>
									<tr>
										<td class="text-center" sdval="16">16</td>
										<td>Glass Syringes</td>
									</tr>
									<tr>
										<td class="text-center" sdval="17">17</td>
										<td>Gloves</td>
									</tr>
									<tr>
										<td class="text-center" sdval="18">18</td>
										<td>Glucometer</td>
									</tr>
									<tr>
										<td class="text-center" sdval="19">19</td>
										<td>Glucometer</td>
									</tr>
									<tr>
										<td class="text-center" sdval="20">20</td>
										<td>Glucostrips</td>
									</tr>
									<tr>
										<td class="text-center" sdval="21">21</td>
										<td>Green Sheet</td>
									</tr>
									<tr>
										<td class="text-center" sdval="22">22</td>
										<td>Hydrogen Peroxide</td>
									</tr>
									<tr>
										<td class="text-center" sdval="23">23</td>
										<td>Inch Tape</td>
									</tr>
									<tr>
										<td class="text-center" sdval="24">24</td>
										<td>Infantometer</td>
									</tr>
									<tr>
										<td class="text-center" sdval="25">25</td>
										<td>Kidney Tray Plastic</td>
									</tr>
									<tr>
										<td class="text-center" sdval="26">26</td>
										<td>Kidney Tray Steel Small</td>
									</tr>
									<tr>
										<td class="text-center" sdval="27">27</td>
										<td>Laryngoscope</td>
									</tr>
									<tr>
										<td class="text-center" sdval="28">28</td>
										<td>Mat</td>
									</tr>
									<tr>
										<td class="text-center" sdval="29">29</td>
										<td>Measuring Cup</td>
									</tr>
									<tr>
										<td class="text-center" sdval="30">30</td>
										<td>Nail Brush</td>
									</tr>
									<tr>
										<td class="text-center" sdval="31">31</td>
										<td>Needle Holder</td>
									</tr>
									<tr>
										<td class="text-center" sdval="32">32</td>
										<td>Non Tooth Forcep</td>
									</tr>
									<tr>
										<td class="text-center" sdval="33">33</td>
										<td>Oral Thermometer</td>
									</tr>
									<tr>
										<td class="text-center" sdval="34">34</td>
										<td>Pillow</td>
									</tr>
									<tr>
										<td class="text-center" sdval="35">35</td>
										<td>Plastic Apron</td>
									</tr>
									<tr>
										<td class="text-center" sdval="36">36</td>
										<td>Pregnancy Kit</td>
									</tr>
									<tr>
										<td class="text-center" sdval="37">37</td>
										<td>Rubber Hot Water Bag</td>
									</tr>
									<tr>
										<td class="text-center" sdval="38">38</td>
										<td>Savlon Solution</td>
									</tr>
									<tr>
										<td class="text-center" sdval="39">39</td>
										<td>Small Bowl</td>
									</tr>
									<tr>
										<td class="text-center" sdval="40">40</td>
										<td>Small Drum</td>
									</tr>
									<tr>
										<td class="text-center" sdval="41">41</td>
										<td>Soap</td>
									</tr>
									<tr>
										<td class="text-center" sdval="42">42</td>
										<td>Soap Disk</td>
									</tr>
									<tr>
										<td class="text-center" sdval="43">43</td>
										<td>Soap Disk</td>
									</tr>
									<tr>
										<td class="text-center" sdval="44">44</td>
										<td>Spirit Lamp</td>
									</tr>
									<tr>
										<td class="text-center" sdval="45">45</td>
										<td>Spymanometer</td>
									</tr>
									<tr>
										<td class="text-center" sdval="46">46</td>
										<td>Steam Inhaler</td>
									</tr>
									<tr>
										<td class="text-center" sdval="47">47</td>
										<td>Stetoscope</td>
									</tr>
									<tr>
										<td class="text-center" sdval="48">48</td>
										<td>Stock Register</td>
									</tr>
									<tr>
										<td class="text-center" sdval="49">49</td>
										<td>Straight Artery Forcep Big</td>
									</tr>
									<tr>
										<td class="text-center" sdval="50">50</td>
										<td>Suture Cutting Scissors</td>
									</tr>
									<tr>
										<td class="text-center" sdval="51">51</td>
										<td>Suture Needle</td>
									</tr>
									<tr>
										<td class="text-center" sdval="52">52</td>
										<td>Test Tube</td>
									</tr>
									<tr>
										<td class="text-center" sdval="53">53</td>
										<td>Test Tube Stand</td>
									</tr>
									<tr>
										<td class="text-center" sdval="54">54</td>
										<td>Toothed Thumb Forcep</td>
									</tr>
									<tr>
										<td class="text-center" sdval="55">55</td>
										<td>Torch</td>
									</tr>
									<tr>
										<td class="text-center" sdval="56">56</td>
										<td>Towel</td>
									</tr>
									<tr>
										<td class="text-center" sdval="57">57</td>
										<td>Tub</td>
									</tr>
									<tr>
										<td class="text-center" sdval="58">58</td>
										<td>Wall Clock</td>
									</tr>
									<tr>
										<td class="text-center" sdval="59">59</td>
										<td>Weighing Machine</td>
									</tr>
									<tr>
										<td class="text-center" sdval="60">60</td>
										<td>White Board</td>
									</tr>
									<tr>
										<td class="text-center" sdval="61">61</td>
										<td>Bandages</td>
									</tr>
									<tr>
										<td class="text-center" sdval="62">62</td>
										<td>Test Tube Holder</td>
									</tr>
									<tr>
										<td class="text-center" sdval="63">63</td>
										<td>Nail Cutter</td>
									</tr>
									<tr>
										<td class="text-center" sdval="64">64</td>
										<td>First Aid Kit</td>
									</tr>
									<tr>
										<td class="text-center" sdval="65">65</td>
										<td>Almirah</td>
									</tr>
									<tr>
										<td class="text-center" sdval="66">66</td>
										<td>Models</td>
									</tr>
									<tr>
										<td class="text-center" sdval="67">67</td>
										<td>Charts</td>
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
										<td class="text-center" colspan="2"><strong>OSCE LAB</strong></td>
									</tr>
									<tr>
										<td class="text-center" sdval="1">1</td>
										<td>B.P Apparatus</td>
									</tr>
									<tr>
										<td class="text-center" sdval="2">2</td>
										<td>Stethoscope</td>
									</tr>
									<tr>
										<td class="text-center" sdval="3">3</td>
										<td>Nebulizer</td>
									</tr>
									<tr>
										<td class="text-center" sdval="4">4</td>
										<td>Steam Inhaler</td>
									</tr>
									<tr>
										<td class="text-center" sdval="5">5</td>
										<td>MANIKON</td>
									</tr>
									<tr>
										<td class="text-center" sdval="6">6</td>
										<td>laryngoscope (Pediatric)</td>
									</tr>
									<tr>
										<td class="text-center" sdval="7">7</td>
										<td>Colostomy bag</td>
									</tr>
									<tr>
										<td class="text-center" sdval="8">8</td>
										<td>Steel Drum</td>
									</tr>
									<tr>
										<td class="text-center" sdval="9">9</td>
										<td>Wall Clock</td>
									</tr>
									<tr>
										<td class="text-center" sdval="10">10</td>
										<td>Mosquito Forceps</td>
									</tr>
									<tr>
										<td class="text-center" sdval="11">11</td>
										<td>Needle Holder</td>
									</tr>
									<tr>
										<td class="text-center" sdval="12">12</td>
										<td>Ice Cap</td>
									</tr>
									<tr>
										<td class="text-center" sdval="13">13</td>
										<td>Suture Scissors</td>
									</tr>
									<tr>
										<td class="text-center" sdval="14">14</td>
										<td>Enema Can</td>
									</tr>
									<tr>
										<td class="text-center" sdval="15">15</td>
										<td>Tracheostomy tube Permanent</td>
									</tr>
									<tr>
										<td class="text-center" sdval="16">16</td>
										<td>Tracheostomy tube Temporary</td>
									</tr>
									<tr>
										<td class="text-center" sdval="17">17</td>
										<td>WHEEL CHAIR</td>
									</tr>
									<tr>
										<td class="text-center" sdval="18">18</td>
										<td>STRECTER</td>
									</tr>
									<tr>
										<td class="text-center" sdval="19">19</td>
										<td>BED SIDE LOCKER</td>
									</tr>
									<tr>
										<td class="text-center" sdval="20">20</td>
										<td>Thermometer </td>
									</tr>
									<tr>
										<td class="text-center" sdval="21">21</td>
										<td>Bowel - Big</td>
									</tr>
									<tr>
										<td class="text-center" sdval="22">22</td>
										<td>Bowel - Medium</td>
									</tr>
									<tr>
										<td class="text-center" sdval="23">23</td>
										<td>Tray - Medium</td>
									</tr>
									<tr>
										<td class="text-center" sdval="24">24</td>
										<td>Kidney tray Medium</td>
									</tr>
									<tr>
										<td class="text-center" sdval="25">25</td>
										<td>Cotton</td>
									</tr>
									<tr>
										<td class="text-center" sdval="26">26</td>
										<td>Gauze Piece</td>
									</tr>
									<tr>
										<td class="text-center" sdval="27">27</td>
										<td>Spirit</td>
									</tr>
									<tr>
										<td class="text-center" sdval="28">28</td>
										<td>Betadine</td>
									</tr>
									<tr>
										<td class="text-center" sdval="29">29</td>
										<td>Hand Rub</td>
									</tr>
									<tr>
										<td class="text-center" sdval="30">30</td>
										<td>Spirit lamp</td>
									</tr>
									<tr>
										<td class="text-center" sdval="31">31</td>
										<td>IV cannula ( All Size)</td>
									</tr>
									<tr>
										<td class="text-center" sdval="32">32</td>
										<td>Micropore Size 1,2,3</td>
									</tr>
									<tr>
										<td class="text-center" sdval="33">33</td>
										<td>Bucket</td>
									</tr>
									<tr>
										<td class="text-center" sdval="34">34</td>
										<td>Mug</td>
									</tr>
									<tr>
										<td class="text-center" sdval="35">35</td>
										<td>Syringes ( All Sizes)</td>
									</tr>
									<tr>
										<td class="text-center" sdval="36">36</td>
										<td>IV set</td>
									</tr>
									<tr>
										<td class="text-center" sdval="37">37</td>
										<td>Urinal</td>
									</tr>
									<tr>
										<td class="text-center" sdval="38">38</td>
										<td>Bedpan</td>
									</tr>
									<tr>
										<td class="text-center" sdval="39">39</td>
										<td>Mask</td>
									</tr>
									<tr>
										<td class="text-center" sdval="40">40</td>
										<td>Nasogastric tube</td>
									</tr>
									<tr>
										<td class="text-center" sdval="41">41</td>
										<td>Makintosh</td>
									</tr>
									<tr>
										<td class="text-center" sdval="42">42</td>
										<td>Plastic Apron</td>
									</tr>
									<tr>
										<td class="text-center" sdval="43">43</td>
										<td>Caps</td>
									</tr>
									<tr>
										<td class="text-center" sdval="44">44</td>
										<td>Sterile Gloves </td>
									</tr>
									<tr>
										<td class="text-center" sdval="45">45</td>
										<td>Venturi Mask</td>
									</tr>
									<tr>
										<td class="text-center" sdval="46">46</td>
										<td>Plastic Tray</td>
									</tr>
									<tr>
										<td class="text-center" sdval="47">47</td>
										<td>Long Sterile Tray</td>
									</tr>
									<tr>
										<td class="text-center" sdval="48">48</td>
										<td>Cord Clamp</td>
									</tr>
									<tr>
										<td class="text-center" sdval="49">49</td>
										<td>Airway</td>
									</tr>
									<tr>
										<td class="text-center" sdval="50">50</td>
										<td>Suction Catheter</td>
									</tr>
									<tr>
										<td class="text-center" sdval="51">51</td>
										<td>IV catheter</td>
									</tr>
									<tr>
										<td class="text-center" sdval="52">52</td>
										<td>Folyes Catheter</td>
									</tr>
									<tr>
										<td class="text-center" sdval="53">53</td>
										<td>Condom Catheter</td>
									</tr>
									<tr>
										<td class="text-center" sdval="54">54</td>
										<td>Uro Bag</td>
									</tr>
									<tr>
										<td class="text-center" sdval="55">55</td>
										<td>Normal Saline </td>
									</tr>
									<tr>
										<td class="text-center" sdval="56">56</td>
										<td>DNS</td>
									</tr>
									<tr>
										<td class="text-center" sdval="57">57</td>
										<td>RL</td>
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