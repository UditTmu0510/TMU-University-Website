@extends('layouts.university.colleges.dental_with_sidebar')
@section('content')


<link rel="stylesheet" href="{{asset('/assets/css/college_overview.css')}}">


<div class="main-content">
	<div class="container">

		<section class="about-section bg-light mt-4">
			<div class="container">
				<div class="text-content p-4">
					<h1 class="tmu-text-primary tmu-page-heading"><span> Department of </span><span>
							Periodontology </span></h1>
					<p class="about-p mb-4 text-justify"> <a href="{{ url('/programme/MDS-Periodontology') }}">Department of Periodontology</a>  deals with patient education and motivation for maintaining good oral hygiene, we perform all basic and non-surgical procedures including root planing, air polishing, local drug delivery, splinting and abcess drainage.</p>
				</div>
				<div class="image-content text-center p-4">
					<img src="{{asset('/assets/img/college_departments/dental/pgy/pgy_banner.jpg')}}" alt="" style="height:auto;" >
				</div>
				<div class="container p-3">
					<p class="about-p mb-4" text-justify>Various surgical procedures such as different periodontal flap surgeries, mucogingival surgeries, pre-prosthetic surgeries and minimally invasive surgeries are performed. We regularly perform regenerative procedures using bone graft, GTR, growth factors and newer regenerative materials. Management of furcation and endo-perio lesions are also done on routine basis. Also, dental implants, advanced implant surgical procedures and management of perimplantitis using non-surgical and surgical techniques are undertaken. Use of lasers for treatment of diseases of oral soft tissues, biostimulation, sensitivity and pocket treatment surgeries.
						Also, electrocautery is used for performing selective surgeries.</p>
				</div>
			</div>
		</section>

		<div class="container">
			<h2 class="tmu-text-primary tmu-page-heading pt-md-2 mb-md-5"><span>Infrastructure </span></h2>
			<h3 class="tmu-text-primary"><span>Our </span><span> Laboratories</span></h3>
			<!-- <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
				<a class="grid-item" href="{{asset('/assets/img/college_departments/dental/pgy/pgy1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/dental/pgy/pgy1.jpg')}}" alt="Gallery Thumb 1"></a>
				<a class="grid-item" href="{{asset('/assets/img/college_departments/dental/pgy/pgy2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/dental/pgy/pgy2.jpg')}}" alt="Gallery Thumb 2"></a>
				<a class="grid-item" href="{{asset('/assets/img/college_departments/dental/pgy/pgy3.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/dental/pgy/pgy3.jpg')}}" alt="Gallery Thumb 3"></a>
			</div> -->
			<div class="row justify-content-left gutter-30 col-mb-5 mb-5">
                <div class="col-sm-4 col-md-4">
                    <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                        <div class="team-image">
                            <img src="{{asset('/assets/img/college_departments/dental/pgy/pgy1.jpg')}}" height="150px" alt="">
                        </div>
                        <div class="team-desc p-2">
                            <div class="team-title pt-0">
                                <h4 class="fs-14"> Department of Periodontology </h4>
                                <span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> Dental College and Research Centre, TMU Campus</span>
                                <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/college_departments/dental/pgy/geotag/pgy1.jpg')}}" download>
                                    Download Geo Tag Image
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-md-4">
                    <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                        <div class="team-image">
                            <img src="{{asset('/assets/img/college_departments/dental/pgy/pgy2.jpg')}}" height="150px" alt="">
                        </div>
                        <div class="team-desc p-2">
                            <div class="team-title pt-0">
                                <h4 class="fs-14"> UG Section <br/>&nbsp;</h4>
                                <span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> Dental College and Research Centre, TMU Campus</span>
                                <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/college_departments/dental/pgy/geotag/pgy2.jpg')}}" download>
                                    Download Geo Tag Image
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-md-4">
                    <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                        <div class="team-image">
                            <img src="{{asset('/assets/img/college_departments/dental/pgy/pgy3.jpg')}}" height="150px" alt="">
                        </div>
                        <div class="team-desc p-2">
                            <div class="team-title pt-0">
                                <h4 class="fs-14">PG Section <br/>&nbsp;</h4>
                                <span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> Dental College and Research Centre, TMU Campus</span>
                                <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/college_departments/dental/pgy/geotag/pgy3.jpg')}}" download>
                                    Download Geo Tag Image
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
			<h3 class="tmu-text-primary mt-4"><span>Labs </span><span> Equipments</span></h3>
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
								<td class="text-center" class="text-center" sdval="1">1</td>
								<td>Electronically Operated Dental Chairsand Units</td>
							</tr>
							<tr>
								<td class="text-center" class="text-center" sdval="2">2</td>
								<td>Autoclave (fully automatic front loading)</td>
							</tr>
							<tr>
								<td class="text-center" class="text-center" sdval="3">3</td>
								<td>Steelbin</td>
							</tr>
							<tr>
								<td class="text-center" class="text-center" sdval="4">4</td>
								<td>Airoterhandpieces</td>
							</tr>
							<tr>
								<td class="text-center" class="text-center" sdval="5">5</td>
								<td>U V chamber</td>
							</tr>
							<tr>
								<td class="text-center" class="text-center" sdval="6">6</td>
								<td>Formalin chamber</td>
							</tr>
							<tr>
								<td class="text-center" class="text-center" sdval="7">7</td>
								<td>W.H.O PROBE</td>
							</tr>
							<tr>
								<td class="text-center" class="text-center" sdval="8">8</td>
								<td>Nabers Probe</td>
							</tr>
							<tr>
								<td class="text-center" class="text-center" sdval="9">9</td>
								<td>Williams probe</td>
							</tr>
							<tr>
								<td class="text-center" class="text-center" sdval="10">10</td>
								<td>UNC-15 PROBE</td>
							</tr>
							<tr>
								<td class="text-center" class="text-center" sdval="11">11</td>
								<td>Gold Man fox probe</td>
							</tr>
							<tr>
								<td class="text-center" class="text-center" sdval="12">12</td>
								<td>Pressure sensitive probe</td>
							</tr>
							<tr>
								<td class="text-center" class="text-center" sdval="13">13</td>
								<td>Marquis color coded probe</td>
							</tr>
							<tr>
								<td class="text-center" class="text-center" sdval="14">14</td>
								<td>Supra gingival scalers</td>
							</tr>
							<tr>
								<td class="text-center" class="text-center" sdval="15">15</td>
								<td>Sub gingival scaler</td>
							</tr>
							<tr>
								<td class="text-center" class="text-center" sdval="16">16</td>
								<td>Arkansas sharpening stone</td>
							</tr>
							<tr>
								<td colspan="2" style="text-align:center"><strong>Surgical Instruments</strong></td>
							</tr>
							<tr>
								<td class="text-center" class="text-center" sdval="17">17</td>
								<td>Routine surgical instrument kit</td>
							</tr>
							<tr>
								<td class="text-center" class="text-center" sdval="18">18</td>
								<td>Surgery trolley</td>
							</tr>
							<tr>
								<td class="text-center" class="text-center" sdval="19">19</td>
								<td>X-ray viewer</td>
							</tr>
							<tr>
								<td class="text-center" class="text-center" sdval="20">20</td>
								<td>Surgical cassette with sterilization pouches</td>
							</tr>
							<tr>
								<td class="text-center" class="text-center" sdval="21">21</td>
								<td>Electrosurgery unit</td>
							</tr>
							<tr>
								<td colspan="2" style="text-align:center"><strong>Special Surgical Instruments</strong></td>
							</tr>
							<tr>
								<td class="text-center" class="text-center" sdval="22">22</td>
								<td>Kirkland&rsquo;s knife</td>
							</tr>
							<tr>
								<td class="text-center" class="text-center" sdval="23">23</td>
								<td>Orban&rsquo;s knife</td>
							</tr>
							<tr>
								<td class="text-center" class="text-center" sdval="24">24</td>
								<td>Paquette blade handle</td>
							</tr>
							<tr>
								<td class="text-center" class="text-center" sdval="25">25</td>
								<td>Krane Kaplan pocket marker</td>
							</tr>
							<tr>
								<td class="text-center" class="text-center" sdval="26">26</td>
								<td>Mc Calls universal curettes</td>
							</tr>
							<tr>
								<td class="text-center" class="text-center" sdval="27">27</td>
								<td>Gracey&rsquo;s curettes(No. 1-18)</td>
							</tr>
							<tr>
								<td class="text-center" class="text-center" sdval="28">28</td>
								<td>Mini five curettes</td>
							</tr>
							<tr>
								<td class="text-center" class="text-center" sdval="29">29</td>
								<td>Cumine scaler</td>
							</tr>
							<tr>
								<td class="text-center" class="text-center" sdval="30">30</td>
								<td>Mallet</td>
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
								<td class="text-center" sdval="31">31</td>
								<td>Chisel</td>
							</tr>
							<tr>
								<td class="text-center" sdval="32">32</td>
								<td>Oschenbien chisel</td>
							</tr>
							<tr>
								<td class="text-center" sdval="33">33</td>
								<td>Schluger bone file</td>
							</tr>
							<tr>
								<td class="text-center" sdval="34">34</td>
								<td>Bone fixation scew kit</td>
							</tr>
							<tr>
								<td class="text-center" sdval="35">35</td>
								<td>Bone scrapper</td>
							</tr>
							<tr>
								<td class="text-center" sdval="36">36</td>
								<td>Bone trephines for harvesting autografts</td>
							</tr>
							<tr>
								<td class="text-center" sdval="37">37</td>
								<td>Bone regenerative materials</td>
							</tr>
							<tr>
								<td class="text-center" sdval="38">38</td>
								<td>Local drug delivery system</td>
							</tr>
							<tr>
								<td class="text-center" sdval="39">39</td>
								<td>Root conditioning agent</td>
							</tr>
							<tr>
								<td class="text-center" sdval="40">40</td>
								<td>Micro needle holder</td>
							</tr>
							<tr>
								<td class="text-center" sdval="41">41</td>
								<td>Micro scissors</td>
							</tr>
							<tr>
								<td class="text-center" sdval="42">42</td>
								<td>Magnifying loop(2.5-3.5)</td>
							</tr>
							<tr>
								<td class="text-center" sdval="43">43</td>
								<td>Bone graft/ membrane placement spoon</td>
							</tr>
							<tr>
								<td class="text-center" sdval="44">44</td>
								<td>Bone condenser</td>
							</tr>
							<tr>
								<td class="text-center" sdval="45">45</td>
								<td>Soft tissue laser (8watt)</td>
							</tr>
							<tr>
								<td class="text-center" sdval="46">46</td>
								<td>Osteotome</td>
							</tr>
							<tr>
								<td class="text-center" sdval="47">47</td>
								<td>Composite gun with material kit</td>
							</tr>
							<tr>
								<td class="text-center" sdval="48">48</td>
								<td>Splinting kit with material</td>
							</tr>
							<tr>
								<td class="text-center" sdval="49">49</td>
								<td>Composite finishing kit</td>
							</tr>
							<tr>
								<td class="text-center" sdval="50">50</td>
								<td>Glass ionomer filling instruments</td>
							</tr>
							<tr>
								<td class="text-center" sdval="51">51</td>
								<td>Intra oral camera</td>
							</tr>
							<tr>
								<td class="text-center" sdval="52">52</td>
								<td>Ultrasonic cleaner</td>
							</tr>
							<tr>
								<td class="text-center" sdval="53">53</td>
								<td>Emergency kit</td>
							</tr>
							<tr>
								<td class="text-center" sdval="54">54</td>
								<td>Refrigerator</td>
							</tr>
							<tr>
								<td class="text-center" sdval="55">55</td>
								<td>X-Ray viewer</td>
							</tr>
							<tr>
								<td class="text-center" sdval="56">56</td>
								<td>LCD projector</td>
							</tr>
							<tr>
								<td class="text-center" sdval="57">57</td>
								<td>Computer with internet connection with attached printer and scanner</td>
							</tr>
							<tr>
								<td class="text-center" sdval="58">58</td>
								<td>Physio dispenser</td>
							</tr>
							<tr>
								<td class="text-center" sdval="59">59</td>
								<td>Implants</td>
							</tr>
							<tr>
								<td class="text-center" sdval="60">60</td>
								<td>Implant maintenance kit (plastic instruments)</td>
							</tr>
							<tr>
								<td class="text-center" sdval="61">61</td>
								<td>Implant removing kit</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<!-- Bootstrap JS and dependencies -->


@endsection