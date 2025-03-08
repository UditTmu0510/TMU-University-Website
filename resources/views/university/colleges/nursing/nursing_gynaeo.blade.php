@extends('layouts.university.colleges.nursing_with_sidebar')
@section('content')

<link rel="stylesheet" href="{{asset('assets/css/college_overview.css')}}">


<div class="main-content">
	<div class="container">

		<section class="about-section bg-light mt-4">
			<div class="container">
				<div class="text-content p-4">
					<h1 class="tmu-text-primary tmu-page-heading"><span> Department of Obstetrics & </span><span> Gynaecological Nursing </span></h1>
					<p class="about-p mb-4">Obstetric and Gynaecological Nursing is a nursing specialty that works with care of motherhood and care of women with abnormalities in reproductive system. We teach the nursing students to provide care of women during prenatal, intranatal, postnatal periods and care of women with Gynaecological problems. With highly motivated teaching faculties we provide sound theoretical knowledge. </p>
				</div>
				<div class="image-content text-center p-4">
					<img src="{{asset('/assets/img/college_departments/nursing/obg/banner.jpg')}}" alt="">
				</div>
				<div class="container p-3">
					<p class="about-p mb-4">We have greatly modernized equipments and facilities to provide training to the nursing students on various practical sessions. Scientific understanding, level of knowledge, acquisition of necessary skills and techniques and development of appropriate attitudes are monitored and evaluated. Among our greatest attributes is emphasis on competencies, creativity, critical thinking, clinical skills development, good professional judgment, informed decisions, effective and safe quality practice and keeping abreast with emerging concepts.</p>
					<h3 class="tmu-text-primary"><span>Our </span><span> Laboratories</span></h3>
					<!-- <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">
						    <a class="grid-item" href="{{asset('/assets/img/college_departments/nursing/obg/lab2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/nursing/obg/lab2.jpg')}}" alt="Gallery Thumb 1"></a>
						    <a class="grid-item" href="{{asset('/assets/img/college_departments/nursing/obg/lab3.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/nursing/obg/lab3.jpg')}}" alt="Gallery Thumb 2"></a>
						    <a class="grid-item" href="{{asset('/assets/img/college_departments/nursing/obg/lab4.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/nursing/obg/lab4.jpg')}}" alt="Gallery Thumb 3"></a>
						    <a class="grid-item" href="{{asset('/assets/img/college_departments/nursing/obg/lab5.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/nursing/obg/lab5.jpg')}}" alt="Gallery Thumb 5"></a>
					    </div> -->
					<div class="row justify-content-left gutter-30 col-mb-5 mb-5">
						<div class="col-sm-4 col-md-4">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img src="{{asset('/assets/img/college_departments/nursing/obg/lab1.jpg')}}" height="150px" alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">OBG & GYN, Pediatric lab</h4>
										<span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> College of Nursing, TMU Campus</span>
										<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/college_departments/nursing/obg/geotag/lab1.jpg')}}" download>
											Download Geo Tag Image
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-4 col-md-4">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img src="{{asset('/assets/img/college_departments/nursing/obg/lab2.jpg')}}" height="150px" alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">OBG & GYN lab</h4>
										<span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> College of Nursing, TMU Campus</span>
										<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/college_departments/nursing/obg/geotag/lab2.jpg')}}" download>
											Download Geo Tag Image
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-4 col-md-4">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img src="{{asset('/assets/img/college_departments/nursing/obg/lab3.jpg')}}" height="150px" alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">Lecture Hall</h4>
										<span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> College of Nursing, TMU Campus</span>
										<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/college_departments/nursing/obg/geotag/lab3.jpg')}}" download>
											Download Geo Tag Image
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-4 col-md-4">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img src="{{asset('/assets/img/college_departments/nursing/obg/lab4.jpg')}}" height="150px" alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">Training Room</h4>
										<span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> College of Nursing, TMU Campus</span>
										<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/college_departments/nursing/obg/geotag/lab4.jpg')}}" download>
											Download Geo Tag Image
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-4 col-md-4">
							<div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
								<div class="team-image">
									<img src="{{asset('/assets/img/college_departments/nursing/obg/lab6.jpg')}}" height="150px" alt="">
								</div>
								<div class="team-desc p-2">
									<div class="team-title pt-0">
										<h4 class="fs-14">OBG & GYN lab</h4>
										<span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> College of Nursing, TMU Campus</span>
										<a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/college_departments/nursing/obg/geotag/lab6.jpg')}}" download>
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
										<td class="text-center">1</td>
										<td>AIR CUSHION</td>
									</tr>
									<tr>
										<td class="text-center">2</td>
										<td>AMBU BAG -ADULT</td>
									</tr>
									<tr>
										<td class="text-center">3</td>
										<td>AMBU BAG -BABY</td>
									</tr>
									<tr>
										<td class="text-center">4</td>
										<td>ANTERIOR VAGINAL WALL RETRACTOR</td>
									</tr>
									<tr>
										<td class="text-center">5</td>
										<td>BABY WEIGHING SCALE-ELECTRICAL</td>
									</tr>
									<tr>
										<td class="text-center">6</td>
										<td>INFANTOMETER-BABY WEIGHING SCALE</td>
									</tr>
									<tr>
										<td class="text-center">7</td>
										<td>ADULT WEIGHING MACHINE</td>
									</tr>
									<tr>
										<td class="text-center">8</td>
										<td>BP-HANDLE</td>
									</tr>
									<tr>
										<td class="text-center">9</td>
										<td>BOWL (SMALL,MEDIUM,BIG)</td>
									</tr>
									<tr>
										<td class="text-center">10</td>
										<td>BACK REST</td>
									</tr>
									<tr>
										<td class="text-center">11</td>
										<td>BED PAN</td>
									</tr>
									<tr>
										<td class="text-center">12</td>
										<td>BLANKET</td>
									</tr>
									<tr>
										<td class="text-center">13</td>
										<td>BIOPSY FORCEPS</td>
									</tr>
									<tr>
										<td class="text-center">14</td>
										<td>BLOOD SUGAR TESTING INSTRUMENT(GLUCOMETER)</td>
									</tr>
									<tr>
										<td class="text-center">15</td>
										<td>BIOPSY NEEDLE CHILD</td>
									</tr>
									<tr>
										<td class="text-center">16</td>
										<td>BIOPSY NEEDLE BIG</td>
									</tr>
									<tr>
										<td class="text-center">17</td>
										<td>BOILER </td>
									</tr>
									<tr>
										<td class="text-center">18</td>
										<td>BASIN STEEL BIG</td>
									</tr>
									<tr>
										<td class="text-center">19</td>
										<td>BREAST PUMP</td>
									</tr>
									<tr>
										<td class="text-center">20</td>
										<td>CUSCUS SPECULUM</td>
									</tr>
									<tr>
										<td class="text-center">21</td>
										<td>CHITTLE FORCEPS</td>
									</tr>
									<tr>
										<td class="text-center">22</td>
										<td>CORD CLAMP (PLASTIC)</td>
									</tr>
									<tr>
										<td class="text-center">23</td>
										<td>KOCHERS FORCEPS</td>
									</tr>
									<tr>
										<td class="text-center">24</td>
										<td>D &amp; C SET</td>
									</tr>
									<tr>
										<td class="text-center">25</td>
										<td>DOUCHE SET</td>
									</tr>
									<tr>
										<td class="text-center">26</td>
										<td>DRUM STEEL SMALL</td>
									</tr>
									<tr>
										<td class="text-center" sdval="27">27</td>
										<td>THUMP FORCEPS- TOOTHED</td>
									</tr>
									<tr>
										<td class="text-center" sdval="28">28</td>
										<td>THUMP FORCEPS -NON TOOTHED</td>
									</tr>
									<tr>
										<td class="text-center" sdval="29">29</td>
										<td>FETOSCOPE</td>
									</tr>
									<tr>
										<td class="text-center" sdval="30">30</td>
										<td>INCH TAPE</td>
									</tr>
									<tr>
										<td class="text-center" sdval="31">31</td>
										<td>KETTLE ALUMINIUM</td>
									</tr>
									<tr>
										<td class="text-center" sdval="32">32</td>
										<td>KIDNEY TRAY</td>
									</tr>
									<tr>
										<td class="text-center" sdval="33">33</td>
										<td>LARYNGOSCOPE</td>
									</tr>
									<tr>
										<td class="text-center" sdval="34">34</td>
										<td>MOSQUITO ARTERY-CURVED</td>
									</tr>
									<tr>
										<td class="text-center" sdval="35">35</td>
										<td>MAYO SCISSORS</td>
									</tr>
									<tr>
										<td class="text-center" sdval="36">36</td>
										<td>CURVED SCISSOR</td>
									</tr>
									<tr>
										<td class="text-center" sdval="37">37</td>
										<td>MUCUS SUCKER</td>
									</tr>
									<tr>
										<td class="text-center" sdval="38">38</td>
										<td>NEEDLE HOLDER</td>
									</tr>
									<tr>
										<td class="text-center" sdval="39">39</td>
										<td>NIPPLE SHIELD</td>
									</tr>
									<tr>
										<td class="text-center">40</td>
										<td>OXYGEN FACE MASK</td>
									</tr>
									<tr>
										<td class="text-center" sdval="41">41</td>
										<td>PILLOW</td>
									</tr>
									<tr>
										<td class="text-center" sdval="42">42</td>
										<td>PILLOW COVER</td>
									</tr>
									<tr>
										<td class="text-center" sdval="43">43</td>
										<td>PROCTOSCOPE</td>
									</tr>
									<tr>
										<td class="text-center" sdval="44">44</td>
										<td>PELVIS</td>
									</tr>
									<tr>
										<td class="text-center" sdval="45">45</td>
										<td>PELVI METER (GONIOMETER)</td>
									</tr>
									<tr>
										<td class="text-center" sdval="46">46</td>
										<td>SUCTION CATHETER</td>
									</tr>
									<tr>
										<td class="text-center" sdval="47">47</td>
										<td>SUTURE CLIP</td>
									</tr>
									<tr>
										<td class="text-center" sdval="48">48</td>
										<td>SUTURE CUTTING SCISSOR</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="col-md-6">
							<table class="table table-bordered table-striped">
								<thead>
									<tr>
										<th class="text-center">Sl. No.</th>
										<th class="text-center">Name of Equipments</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="text-center" sdval="49">49</td>
										<td>SPONGE HOLDER</td>
									</tr>
									<tr>
										<td class="text-center" sdval="50">50</td>
										<td>SURGICAL BLADE</td>
									</tr>
									<tr>
										<td class="text-center" sdval="51">51</td>
										<td>STETHOSCOPE</td>
									</tr>
									<tr>
										<td class="text-center" sdval="52">52</td>
										<td>SIMS SPECULUM</td>
									</tr>
									<tr>
										<td class="text-center" sdval="53">53</td>
										<td>SURGICAL NEEDLE /SUTURING NEEDLE</td>
									</tr>
									<tr>
										<td class="text-center" sdval="54">54</td>
										<td>SPIRIT LAMP</td>
									</tr>
									<tr>
										<td class="text-center" sdval="55">55</td>
										<td>STEAM INHALAR</td>
									</tr>
									<tr>
										<td class="text-center" sdval="56">56</td>
										<td>TOWEL CLIP</td>
									</tr>
									<tr>
										<td class="text-center" sdval="57">57</td>
										<td>THERMOMETER ORAL</td>
									</tr>
									<tr>
										<td class="text-center" sdval="58">58</td>
										<td>THERMOMETER RECTAL</td>
									</tr>
									<tr>
										<td class="text-center" sdval="59">59</td>
										<td>STEEL TRAY SMALL</td>
									</tr>
									<tr>
										<td class="text-center" sdval="60">60</td>
										<td>STEEL TRAY BIG</td>
									</tr>
									<tr>
										<td class="text-center" sdval="61">61</td>
										<td>STEEL TRAY-MEDIUM</td>
									</tr>
									<tr>
										<td class="text-center" sdval="62">62</td>
										<td>TUB</td>
									</tr>
									<tr>
										<td class="text-center" sdval="63">63</td>
										<td>TONGUE DEPRESSOR</td>
									</tr>
									<tr>
										<td class="text-center" sdval="64">64</td>
										<td>CERVICAL DILATOR</td>
									</tr>
									<tr>
										<td class="text-center" sdval="65">65</td>
										<td>BP APPARATUS</td>
									</tr>
									<tr>
										<td class="text-center" sdval="66">66</td>
										<td>DOYENS RETRACTOR</td>
									</tr>
									<tr>
										<td class="text-center" sdval="67">67</td>
										<td>UTERINE SOUND</td>
									</tr>
									<tr>
										<td class="text-center" sdval="68">68</td>
										<td>SKIN STAPLER</td>
									</tr>
									<tr>
										<td class="text-center" sdval="69">69</td>
										<td>DELIVERY SET</td>
									</tr>
									<tr>
										<td class="text-center" sdval="70">70</td>
										<td>GREEN ARMYTAGE FORCEPS</td>
									</tr>
									<tr>
										<td class="text-center" sdval="71">71</td>
										<td>DRUM MEDIUM </td>
									</tr>
									<tr>
										<td class="text-center" sdval="72">72</td>
										<td>MATTRESS</td>
									</tr>
									<tr>
										<td class="text-center" sdval="73">73</td>
										<td>TEST TUBES</td>
									</tr>
									<tr>
										<td class="text-center" sdval="74">74</td>
										<td>TEST TUBE STAND</td>
									</tr>
									<tr>
										<td class="text-center" sdval="75">75</td>
										<td>TEST TUBE HOLDER</td>
									</tr>
									<tr>
										<td class="text-center" sdval="76">76</td>
										<td>FETAL DOPPLER</td>
									</tr>
									<tr>
										<td class="text-center" sdval="77">77</td>
										<td>PULSE OXYMETER</td>
									</tr>
									<tr>
										<td class="text-center" sdval="78">78</td>
										<td>WRIGLEY FORCEPS</td>
									</tr>
									<tr>
										<td class="text-center" sdval="79">79</td>
										<td>LONG CURVED OBSTETRIC FORCEPS</td>
									</tr>
									<tr>
										<td class="text-center" sdval="80">80</td>
										<td>OVUM FORCEPS</td>
									</tr>
									<tr>
										<td class="text-center" sdval="81">81</td>
										<td>EPISIOTOMY SCISSOR</td>
									</tr>
									<tr>
										<td class="text-center" sdval="82">82</td>
										<td>ALLIS FORCEPS</td>
									</tr>
									<tr>
										<td class="text-center" sdval="83">83</td>
										<td>DILATOR SET</td>
									</tr>
									<tr>
										<td class="text-center" sdval="84">84</td>
										<td>OTOSCOPE</td>
									</tr>
									<tr>
										<td class="text-center" sdval="85">85</td>
										<td>CUTTING SCISSOR CURVED</td>
									</tr>
									<tr>
										<td class="text-center" sdval="86">86</td>
										<td>FETAL SKULL</td>
									</tr>
									<tr>
										<td class="text-center" sdval="87">87</td>
										<td>INFANTOMETER-SCALE TO MEASURE HEIGHT</td>
									</tr>
									<tr>
										<td class="text-center" sdval="88">88</td>
										<td>BABY DUMMY</td>
									</tr>
									<tr>
										<td class="text-center" sdval="89">89</td>
										<td>DEVELOPMENT OF FETUS MODEL</td>
									</tr>
									<tr>
										<td class="text-center" sdval="90">90</td>
										<td>MANNIKIN MECHANISM-LABOUR DUMMY</td>
									</tr>
									<tr>
										<td class="text-center" sdval="91">91</td>
										<td>EPISIOTOMY MODEL</td>
									</tr>
									<tr>
										<td class="text-center" sdval="92">92</td>
										<td>IUD TRAINING MODEL</td>
									</tr>
									<tr>
										<td class="text-center" sdval="93">93</td>
										<td>DELIVERY SIMULATOR</td>
									</tr>
									<tr>
										<td class="text-center" sdval="94">94</td>
										<td>INSPECTION AND PALPATION OF BREAST MODEL</td>
									</tr>
									<tr>
										<td class="text-center" sdval="95">95</td>
										<td>EXAMINATION MATERNITY MODEL</td>
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