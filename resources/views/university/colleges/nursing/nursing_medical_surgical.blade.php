@extends('layouts.university.colleges.nursing_with_sidebar')
@section('content')

<link rel="stylesheet" href="assets/css/college_overview.css">

<div class="main-content">
	<div class="container">

		<section class="about-section bg-light mt-4">
			<div class="container">
				<div class="text-content p-4">
					<h1 class="tmu-text-primary tmu-page-heading"><span> Department of Medical </span><span> Surgical Nursing </span></h1>
					<p class="about-p mb-4">Medical Surgical Nursing is a nursing speciality area to prepare with the highest levels of competency to care for adults and children with medical surgical conditions. The subject is taught to B.Sc. Nursing (Basic,) B.Sc. Nursing (Post Basic) and M.Sc. Nursing students primarily.</p>
				</div>
				<div class="image-content text-center p-4">
					<img src="{{asset('/assets/img/college_departments/nursing/msn/banner.jpg')}}" alt="">
				</div>
				<div class="container p-3">
					<p class="about-p mb-4">The faculty members use various modern and innovative teaching strategies like seminars, demonstrations, simulation, clinical presentations, conferences, workshops, projects and discussions etc.which are of immense benefit to students. The department faculty are also actively involved in diverse and collaborative funded research projects.</p>
					<h3 class="tmu-text-primary"><span>Our </span><span> Laboratories</span></h3>
					<!-- <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
						<a class="grid-item" href="{{asset('/assets/img/college_departments/nursing/msn/lab2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/nursing/msn/lab2.jpg')}}" alt="Gallery Thumb 1"></a>
						<a class="grid-item" href="{{asset('/assets/img/college_departments/nursing/msn/lab3.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/nursing/msn/lab3.jpg')}}" alt="Gallery Thumb 2"></a>
						<a class="grid-item" href="{{asset('/assets/img/college_departments/nursing/msn/lab4.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/nursing/msn/lab4.jpg')}}" alt="Gallery Thumb 3"></a>
						<a class="grid-item" href="{{asset('/assets/img/college_departments/nursing/msn/lab5.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/nursing/msn/lab5.jpg')}}" alt="Gallery Thumb 5"></a>
					</div> -->
					<div class="row justify-content-left gutter-30 col-mb-5 mb-5">
						<div class="col-sm-4 col-md-4">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img src="{{asset('/assets/img/college_departments/nursing/msn/Lab1.jpg')}}" height="150px" alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">Simulation Lab</h4>
										<span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> College of Nursing, TMU Campus</span>
										<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/college_departments/nursing/msn/geotag/Lab1.jpg')}}" download>
											Download Geo Tag Image
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-4 col-md-4">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img src="{{asset('/assets/img/college_departments/nursing/msn/Lab2.jpg')}}" height="150px" alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">Simulation Lab </h4>
										<span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> College of Nursing, TMU Campus</span>
										<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/college_departments/nursing/msn/geotag/Lab2.jpg')}}" download>
											Download Geo Tag Image
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-4 col-md-4">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img src="{{asset('/assets/img/college_departments/nursing/msn/lab3.jpg')}}" height="150px" alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">Simulation Lab</h4>
										<span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> College of Nursing, TMU Campus</span>
										<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/college_departments/nursing/msn/geotag/lab3.jpg')}}" download>
											Download Geo Tag Image
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-4 col-md-4">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img src="{{asset('/assets/img/college_departments/nursing/msn/lab4.jpg')}}" height="150px" alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">Simulation Lab</h4>
										<span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> College of Nursing, TMU Campus</span>
										<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/college_departments/nursing/msn/geotag/lab4.jpg')}}" download>
											Download Geo Tag Image
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-4 col-md-4">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img src="{{asset('/assets/img/college_departments/nursing/msn/lab5.jpg')}}" height="150px" alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">Pediatric lab</h4>
										<span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> College of Nursing, TMU Campus</span>
										<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/college_departments/nursing/msn/geotag/lab5.jpg')}}" download>
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
										<td>Gluteal Injection Model</td>
									</tr>
									<tr>
										<td class="text-center" sdval="2">2</td>
										<td>Airway Intubation Model</td>
									</tr>
									<tr>
										<td class="text-center" sdval="3">3</td>
										<td>Infant CPR</td>
									</tr>
									<tr>
										<td class="text-center" sdval="4">4</td>
										<td>Certral Venous Cath Model</td>
									</tr>
									<tr>
										<td class="text-center" sdval="5">5</td>
										<td>Deltoid Model</td>
									</tr>
									<tr>
										<td class="text-center" sdval="6">6</td>
										<td>Defebrilator </td>
									</tr>
									<tr>
										<td class="text-center" sdval="7">7</td>
										<td>AED</td>
									</tr>
									<tr>
										<td class="text-center" sdval="8">8</td>
										<td>Full Body CPR</td>
									</tr>
									<tr>
										<td class="text-center" sdval="9">9</td>
										<td>Half Body CPR Basic</td>
									</tr>
									<tr>
										<td class="text-center" sdval="10">10</td>
										<td>Patient Care Manikin</td>
									</tr>
									<tr>
										<td class="text-center" sdval="11">11</td>
										<td>Trauma Parts</td>
									</tr>
									<tr>
										<td class="text-center" sdval="12">12</td>
										<td>Injectable arm</td>
									</tr>
									<tr>
										<td class="text-center" sdval="13">13</td>
										<td>Scissor Blunt Tip Medium</td>
									</tr>
									<tr>
										<td class="text-center" sdval="14">14</td>
										<td>Ambu Bag &amp; Mask(Adult)</td>
									</tr>
									<tr>
										<td class="text-center" sdval="15">15</td>
										<td>Ambu Bag &amp; Mask(Pediatric)</td>
									</tr>
									<tr>
										<td class="text-center" sdval="16">16</td>
										<td>Health Scissors Fine</td>
									</tr>
									<tr>
										<td class="text-center" sdval="17">17</td>
										<td>Devars retractor </td>
									</tr>
									<tr>
										<td class="text-center" sdval="18">18</td>
										<td>Mayo Towel Clip</td>
									</tr>
									<tr>
										<td class="text-center" sdval="19">19</td>
										<td>Instrument Pin</td>
									</tr>
									<tr>
										<td class="text-center" sdval="20">20</td>
										<td>Forceps, dissecting, Plain end 127 mm </td>
									</tr>
									<tr>
										<td class="text-center" sdval="21">21</td>
										<td>Forceps, dissecting, McIndoe </td>
									</tr>
									<tr>
										<td class="text-center" sdval="22">22</td>
										<td>Scissors, blunt tip </td>
									</tr>
									<tr>
										<td class="text-center" sdval="23">23</td>
										<td>Probe, 178 mm </td>
									</tr>
									<tr>
										<td class="text-center" sdval="24">24</td>
										<td>Volkmann scoop </td>
									</tr>
									<tr>
										<td class="text-center" sdval="25">25</td>
										<td>Retractors, west &amp; self retaining &ndash; small </td>
									</tr>
									<tr>
										<td class="text-center" sdval="26">26</td>
										<td>Retractors, Lagenbeck small </td>
									</tr>
									<tr>
										<td class="text-center" sdval="27">27</td>
										<td>Retractors, skin hook </td>
									</tr>
									<tr>
										<td class="text-center" sdval="28">28</td>
										<td>Retractors, Kilner catspaw </td>
									</tr>
									<tr>
										<td class="text-center" sdval="29">29</td>
										<td>Sucker, Nozzle </td>
									</tr>
									<tr>
										<td class="text-center" sdval="30">30</td>
										<td>Scalpel Handle, BP, </td>
									</tr>
									<tr>
										<td class="text-center" sdval="31">31</td>
										<td>Forceps, Tissue, Babcock </td>
									</tr>
									<tr>
										<td class="text-center" sdval="32">32</td>
										<td>Bed Mattress</td>
									</tr>
									<tr>
										<td class="text-center" sdval="33">33</td>
										<td>Bed Sheet</td>
									</tr>
									<tr>
										<td class="text-center" sdval="34">34</td>
										<td>Pilow</td>
									</tr>
									<tr>
										<td class="text-center" sdval="35">35</td>
										<td>Suture set</td>
									</tr>
									<tr>
										<td class="text-center" sdval="36">36</td>
										<td>Forceps tooth</td>
									</tr>
									<tr>
										<td class="text-center" sdval="37">37</td>
										<td>Towel clip</td>
									</tr>
									<tr>
										<td class="text-center" sdval="38">38</td>
										<td>Scalpel handle no-4</td>
									</tr>
									<tr>
										<td class="text-center" sdval="39">39</td>
										<td>Needle holder</td>
									</tr>
									<tr>
										<td class="text-center" sdval="40">40</td>
										<td>Mayos Scissor curved Small </td>
									</tr>
									<tr>
										<td class="text-center" sdval="41">41</td>
										<td>Mayos Scissor curved Medium</td>
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
										<td class="text-center" sdval="42">42</td>
										<td>Haemos Forceps-Baby 4 inch</td>
									</tr>
									<tr>
										<td class="text-center" sdval="43">43</td>
										<td>Haemos Forceps-spenner 6 inch</td>
									</tr>
									<tr>
										<td class="text-center" sdval="44">44</td>
										<td>Haemos Forceps-spenner 8 inch</td>
									</tr>
									<tr>
										<td class="text-center" sdval="45">45</td>
										<td>Haemos Forceps-baby mosquito hartman straight-4inch</td>
									</tr>
									<tr>
										<td class="text-center" sdval="46">46</td>
										<td>IV cut down set</td>
									</tr>
									<tr>
										<td class="text-center" sdval="47">47</td>
										<td>Haemos Forceps-spenner well straight 6 inch</td>
									</tr>
									<tr>
										<td class="text-center" sdval="48">48</td>
										<td>Haemos Forceps-spenner well straight 8 inch</td>
									</tr>
									<tr>
										<td class="text-center" sdval="49">49</td>
										<td>Haemos Forceps-spenner well straight 8 inch</td>
									</tr>
									<tr>
										<td class="text-center" sdval="50">50</td>
										<td>Kochers Artery forceps Straight </td>
									</tr>
									<tr>
										<td class="text-center" sdval="51">51</td>
										<td>Kochers Artery forceps Curved </td>
									</tr>
									<tr>
										<td class="text-center" sdval="52">52</td>
										<td>Tissue forceps(large,medium,small)</td>
									</tr>
									<tr>
										<td class="text-center" sdval="53">53</td>
										<td>Sponge holding forceps</td>
									</tr>
									<tr>
										<td class="text-center" sdval="54">54</td>
										<td>Plain dissecting forceps(large,medium,small)</td>
									</tr>
									<tr>
										<td class="text-center" sdval="55">55</td>
										<td>Artery forceps curve medium</td>
									</tr>
									<tr>
										<td class="text-center" sdval="56">56</td>
										<td>Artery forceps Straight medium</td>
									</tr>
									<tr>
										<td class="text-center" sdval="57">57</td>
										<td>Forceps, dissecting, Adson 1X2 teeth </td>
									</tr>
									<tr>
										<td class="text-center" sdval="58">58</td>
										<td>Sponge holder</td>
									</tr>
									<tr>
										<td class="text-center" sdval="59">59</td>
										<td>Forceps, dissecting, Gillies </td>
									</tr>
									<tr>
										<td class="text-center" sdval="60">60</td>
										<td>Forceps, Tissue, Allis </td>
									</tr>
									<tr>
										<td class="text-center" sdval="61">61</td>
										<td>Mayo Needle Holder-Hegar 20 cm</td>
									</tr>
									<tr>
										<td class="text-center" sdval="62">62</td>
										<td>Kidney Tray Large</td>
									</tr>
									<tr>
										<td class="text-center" sdval="63">63</td>
										<td>Kidney Tray Small</td>
									</tr>
									<tr>
										<td class="text-center" sdval="64">64</td>
										<td>Kidney Tray medium</td>
									</tr>
									<tr>
										<td class="text-center" sdval="65">65</td>
										<td>Hand wash</td>
									</tr>
									<tr>
										<td class="text-center" sdval="66">66</td>
										<td>Spirit solution</td>
									</tr>
									<tr>
										<td class="text-center" sdval="67">67</td>
										<td>Handrub solution</td>
									</tr>
									<tr>
										<td class="text-center" sdval="68">68</td>
										<td>Bowl Large</td>
									</tr>
									<tr>
										<td class="text-center" sdval="69">69</td>
										<td>Bowl Medium</td>
									</tr>
									<tr>
										<td class="text-center" sdval="70">70</td>
										<td>Bowl Small</td>
									</tr>
									<tr>
										<td class="text-center" sdval="71">71</td>
										<td>Hand Towel</td>
									</tr>
									<tr>
										<td class="text-center" sdval="72">72</td>
										<td>Wall Houk</td>
									</tr>
									<tr>
										<td class="text-center" sdval="73">73</td>
										<td>Clean Gloves</td>
									</tr>
									<tr>
										<td class="text-center" sdval="74">74</td>
										<td>Medium Tray</td>
									</tr>
									<tr>
										<td class="text-center" sdval="75">75</td>
										<td>Small Tray</td>
									</tr>
									<tr>
										<td class="text-center" sdval="76">76</td>
										<td>Big Tray</td>
									</tr>
									<tr>
										<td class="text-center" sdval="77">77</td>
										<td>Tourniquet </td>
									</tr>
									<tr>
										<td class="text-center" sdval="78">78</td>
										<td>Dust Bin</td>
									</tr>
									<tr>
										<td class="text-center" sdval="79">79</td>
										<td>Laryngo Scope adult</td>
									</tr>
									<tr>
										<td class="text-center" sdval="80">80</td>
										<td>Laryngo Scope pediatric</td>
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