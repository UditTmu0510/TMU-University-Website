@extends('layouts.university.colleges.agriculture_with_sidebar')
@section('content')

<link rel="stylesheet" href="{{asset('/assets/css/college_overview.css')}}">

<style>
@media (max-width: 767.98px) {
    .quote-box {
        width: 100%; 
        background-color: transparent; 
        box-shadow: none; 
        padding: 0; 
    }
}
</style>
<div class="main-content mt-3 mt-sm-0 pt-2 pt-sm-5">
    <div class="container">
        <div class="">
            <h1 class="tmu-text-primary tmu-page-heading  mt-4"><span>Message from the </span><span>Dean's Desk</span></h1>
            <div class="quote-box mx-auto">
              <div class="profile-image">
                <img src="{{asset('/assets/img/principal/agriculture/1.png')}}" alt="Profile Image">
              </div>
              <div class="quote-text mt-4 mt-md-0">
                <p class="text-justify text-dark fs-14 mb-2"> <i class="bi bi-quote" style="font-size:30px; color: #737373;"></i> Indian agriculture has witnessed a significant transformation in recent years, with the adoption of the latest trends and technologies. Precision farming, organic farming, biotechnology, and mechanization are some of the latest trends in Indian agriculture. These innovations help farmers increase crop yields, improve product quality, and reduce environmental impact. As India modernises its agricultural practices, it is poised to become a global leader in sustainable agriculture.</p>
                <p class="text-justify text-dark fs-14 mb-2">We, at the <span class="highlight fs-14"><a href="{{route('agriculture.home')}}" target="blank"> TMU’s College of Agricultural Sciences</a></span>, the top private agricultural college in UP, embrace the potential of modern agricultural technology and blend it with traditional knowledge to create innovative solutions. Our curriculum equips students with in-demand skills along with global opportunities to pursue a range of career paths. We believe that agriculture is an avenue for us to contribute to the environment and make a positive difference......</p>
                <p class="text-justify text-dark fs-14 mb-2">Our prime aim is to provide a pragmatic approach to agriculture education. This enables our graduates to tackle farm problems in both the corporate and unorganized sectors, including the village level. Besides, we provide our students with specialized training in fields and Agro-based industries. The curriculum is designed adopting the holistic approach of learning based upon guidelines of <span class="highlight fs-14"><a href="https://icar.org.in/" target="blank">ICAR</a></span> and <span class="highlight fs-14"><a href="https://www.tmuhospital.com/blog/tmu-organizes-education-conclave-2021-to-discuss-nep-2020">NEP2020.</a></span></p>
                <p class="text-justify text-dark fs-14 mb-2">The College of Agriculture Sciences at <span class="highlight fs-14"><a href="{{route('about.us')}}" target="blank"> TMU Moradabad</a></span> boasts an abundance of advantages. These include experienced teachers and substantial farming acreage for hands-on learning. </p>
                <p class="text-justify text-dark fs-14 mb-2">Furthermore, we have a greenhouse and polyhouse facility with trips to renowned agri-institutes. Additionally, the college has well-established modern laboratories equipped with the latest scientific equipment. Besides, students get a dynamic campus atmosphere, making us one of the top private agriculture colleges in Uttar Pradesh.</p>
                <p class="text-justify text-dark fs-14 mb-2">I hope you enjoy your visit to the website and should you wish to contact us, please find details at the contact page.</p>
                <p class="text-justify text-dark fs-14 mb-2">We are committed to producing assets, armed with the skills & knowledge to overcome modern agriculture challenges and lead the way in farming practices.</p>
                <p class="text-justify text-dark fs-14 mb-2">Study from the leading Agricultural Science College and contribute to a sustainable future. Be a part of a movement that is shaping the future of agriculture and builds a rewarding career in this field.</p>
                <p class="mt-3">- Praveen Kumar Jain </p>
                <p>Dean</p>
              </div>
            </div>
        </div>

        <div class="col-md-12 col-lg-12 pt-3">
                <div class="section-box p-3">
                    <h2 class="tmu-text-primary mb-2 text-center"><span>Profile</span></h2>
                    <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <tbody>
                        <tr>
														<td>Name</td>
														<td style="text-align:left">Dr. Parveen Kumar Jain</td>
													</tr>
													<tr>
														<td>Designation</td>
														<td style="text-align:left">Dean</td>
													</tr>
													<tr>
														<td>Office Address</td>
														<td style="text-align:left">Teerthanker Mahaveer College of Agriculture Sciences, Delhi Road, Moradabad – 244001 (U.P.)</td>
													</tr>
													<tr>
														<td>Date of Birth</td>
														<td style="text-align:left">23-10-1972</td>
													</tr>
													<tr>
														<td>Academic Qualification</td>
														<td style="text-align:left">MBA (Marketing) and Ph.D. in Agronomy, CSK Himachal Pradesh Krishi Viswavidyalaya, Palampur, Himachal Pradesh, India.</td>
													</tr>
                        </tbody>
                    </table>
                    </div>

                    <div class="section-box p-3 mt-2">
                        <h3 class="tmu-text-primary mb-1"><span>Details of the previous</span><span>  appointments/teaching experience</span></h3>
                        <div class="table-responsive"  style="margin-left:10px">
												<table class="table table-bordered">
													<tbody>
														<tr>
														    <td><br><strong>Professional Synopsis</strong></td>
															<td style="text-align:justify">
																<br>
																<ul style="text-align:justify;list-style:disc;margin-left:15px">
																	<li><strong>Senior Research Fellow</strong> with the Department of Soil Science, Palampur for over 2 years.PROJECT: Characterization and Resource Management of Acid Soil Regions for Increasing Productivity.</li>
																	<li><strong>Research Associate</strong> with the Department of Soil Science, Palampur for over 5 years.PROJECT: All India Coordinated Research Project to Study Changes in Soil Quality, Crop Productivity and Sustainability.</li>
																	<li><strong>Marketing Coordinator</strong>, MID-HIMALAYAN WATERSHED DEVELOPMENT PROJECT, DHARAMSHALA (Himachal Pradesh) for over 2 years.</li>
																	<p></p>PROJECT: A $ 36.5 Million World Bank Funded project on watersheds development in Mid Himalayas.</p>
																	<li><strong>Senior Agronomist</strong>(North Zone) with the Jain Irrigation Systems Ltd (Jalgaon) for over 3 years.</li>
																	<li><strong>STATE IN-CHARGE,</strong>Jain Irrigation Systems LTD (JALGAON) for over 6.5 years.</li>
																</ul>
															</td>
														</tr>
														<tr>
														    <td><br><strong>Books</strong></td>
															<td style="text-align:justify">
																<br>
																<ul style="text-align:justify;list-style:disc;margin-left:15px">
																	<li>LEARN AGRICULTURE Through 7k MCQs Volume - 1 </li><p>(<a href="https://www.scripown.com/store/978-93-90833-77-1-learn-agriculture-through-mcqs-volume-1">https://www.scripown.com/store/978-93-90833-77-1-learn-agriculture-through-mcqs-volume-1</a>)</p>
																	<li>LEARN AGRICULTURE Through 7k MCQs Volume - 2 </li><p>(<a href="https://www.scripown.com/store/978-93-90833-82-5-learn-agriculture-through-mcqs-volume-2">https://www.scripown.com/store/978-93-90833-82-5-learn-agriculture-through-mcqs-volume-2</a>)</p>
																	<li>Also, covered 5 Book Chapters</li>
																</ul>
															</td>
														</tr>
														<tr>
														    <td><br><strong>Publications & Research/Conference Papers</strong></td>
															<td style="text-align:justify">
																<br>
																<ul style="text-align:justify;list-style:disc;margin-left:15px">
																	<li>More than 20 (Including papers presented in National/International Conferences).</li>
																	<li>Over 14 papers written</li>
																</ul>
															</td>
														</tr>
														<tr>
														    <td><br><strong>Professional Body Memberships</strong></td>
															<td style="text-align:justify">
																<br>
																<ul style="text-align:justify;list-style:disc;margin-left:15px">
																	<li>Member of Indian Society of Agronomy, CSKHPKV, Palampur Chapter.</li>
																	<li>Member of College of Agriculture, Palampur Alumni Association.</li>
																	<li>Member of PETA (People for Ethical Treatment to Animals).</li>
																	<li>Life member of Range Management Society of India.</li>
																	<li>Member of Indian Society of Agronomy-ICAR-IARI New Delhi (No 10737)</li>
																</ul>
															</td>
														</tr>
														<tr>
														    <td><br><strong>Other Achievements</strong></td>
															<td style="text-align:justify">
																<br>
																<ul style="text-align:justify;list-style:disc;margin-left:15px">
																	<li>Worked on 3 Documentaries</li>
																	<li>Conducted several Competency Development Programs Online. </li>
																	<li>Been a part of numerous Conferences / Workshops / Seminars / Short-Term Courses.</li>
																</ul>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
                    </div>
                </div>
            </div>
    </div>
</div>
</div>


@endsection