@extends('layouts.university.colleges.agriculture_with_sidebar')
@section('content')

<link rel="stylesheet" href="https://unpkg.com/@phosphor-icons/web@2.0.3/src/bold/style.css" />
    <style>
        :root {
            --card-bg: linear-gradient(145deg, #ffffff, #f8f9fa);
            --text-color: #2d3436;
            --subtext-color: #636e72;
            --card-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
    </style>

<div class="main-content mt-3 mt-sm-0 pt-2 pt-sm-5">
    <div class="container py-5">
        <div class="row justify-content-center">
        <h1 class="tmu-text-primary tmu-page-heading "><span> From the Desk </span><span> of Dean</span></h1>

            <div class="col-lg-10">
                <div class="principal-card23">
                    <i class="ph-bold ph-quotes principal-quote-icon23"></i>
                    <div class="row">
                        <div class="col-md-10 mx-auto text-center">
                            <div class="d-flex justify-content-between">
                           
                            <div class="principal-image-wrapper23">
                                <img src="{{asset('/assets/img/principal/agriculture/1.png')}}" alt="Principal" class="principal-image23" style="object-position: top;">
                                <div class="principal-image-decoration23"></div>
                            </div>
                            <div class="principal-info23">
                                <h4 class="principal-name23">Praveen Kumar Jain</h4>
                                <p class="principal-position23">
                                    <!-- <i class="ph-bold ph-briefcase me-2"></i> -->
                                    Dean
                                </p>
                            </div>
                        </div>
                            <p class="principal-text23 text-justify">
							Indian agriculture has witnessed a significant transformation in recent years, with the adoption of the latest trends and technologies. Precision farming, organic farming, biotechnology, and mechanization are some of the latest trends in Indian agriculture. These innovations help farmers increase crop yields, improve product quality, and reduce environmental impact. As India modernises its agricultural practices, it is poised to become a global leader in sustainable agriculture.
                                <br>
                                <br>
                                We, at the TMU’s <a href="{{route('agriculture.home')}}" target="_blank">College of Agricultural Sciences</a>, the top private agricultural college in UP, embrace the potential of modern agricultural technology and blend it with traditional knowledge to create innovative solutions. Our curriculum equips students with in-demand skills along with global opportunities to pursue a range of career paths. We believe that agriculture is an avenue for us to contribute to the environment and make a positive difference
                                <br>
                                <br>
                                Our prime aim is to provide a pragmatic approach to agriculture education. This enables our graduates to tackle farm problems in both the corporate and unorganized sectors, including the village level. Besides, we provide our students with specialized training in fields and Agro-based industries. The curriculum is designed adopting the holistic approach of learning based upon guidelines of <a href="https://icar.org.in/" target="_blank"> ICAR </a> and <a href="{{ url('blog/nep-2020-discussion') }}">NEP2020</a>.
                                <br>
                                <br>
                                The College of Agriculture Sciences at <a href="{{route('tmuhome')}}">TMU Moradabad</a> boasts an abundance of advantages. These include experienced teachers and substantial farming acreage for hands-on learning.
                                <br>
                                <br>
                                Furthermore, we have a greenhouse and polyhouse facility with trips to renowned agri-institutes. Additionally, the college has well-established modern laboratories equipped with the latest scientific equipment. Besides, students get a dynamic campus atmosphere, making us one of the top private agriculture colleges in Uttar Pradesh.
                                <br>
								<br>
								I hope you enjoy your visit to the website and should you wish to contact us, please find details at the contact page.

								We are committed to producing assets, armed with the skills & knowledge to overcome modern agriculture challenges and lead the way in farming practices.
								<br>
								<br>
								Study from the leading Agricultural Science College and contribute to a sustainable future. Be a part of a movement that is shaping the future of agriculture and builds a rewarding career in this field.
							</p>
                            
                        </div>
                    </div>
                </div>

                <div class="principal-card23 my-5">
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
                                <td style="text-align:left"><a href="{{route('tmuhome')}}">Teerthanker Mahaveer College of Agriculture Sciences, Delhi
                                    Road, Moradabad – 244001 (U.P.)</a></td>
                            </tr>
                            <tr>
                                <td>Date of Birth</td>
                                <td style="text-align:left">23-10-1972</td>
                            </tr>
                            <tr>
                                <td>Academic Qualification</td>
                                <td style="text-align:left">MBA (Marketing) and Ph.D. in Agronomy, CSK Himachal Pradesh
                                    Krishi Viswavidyalaya, Palampur, Himachal Pradesh, India.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="section-box p-3 mt-2">
                    <h3 class="tmu-text-primary mb-1"><span>Details of the previous</span><span> appointments/teaching
                            experience</span></h3>
                    <div class="table-responsive" style="margin-left:10px">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td><br><strong>Professional Synopsis</strong></td>
                                    <td style="text-align:justify">
                                        <br>
                                        <ul style="text-align:justify;list-style:disc;margin-left:15px">
                                            <li><strong>Senior Research Fellow</strong> with the Department of Soil
                                                Science, Palampur for over 2 years.PROJECT: Characterization and
                                                Resource Management of Acid Soil Regions for Increasing Productivity.
                                            </li>
                                            <li><strong>Research Associate</strong> with the Department of Soil Science,
                                                Palampur for over 5 years.PROJECT: All India Coordinated Research
                                                Project to Study Changes in Soil Quality, Crop Productivity and
                                                Sustainability.</li>
                                            <li><strong>Marketing Coordinator</strong>, MID-HIMALAYAN WATERSHED
                                                DEVELOPMENT PROJECT, DHARAMSHALA (Himachal Pradesh) for over 2 years.
                                            </li>
                                            <p></p>PROJECT: A $ 36.5 Million World Bank Funded project on watersheds
                                            development in Mid Himalayas.</p>
                                            <li><strong>Senior Agronomist</strong>(North Zone) with the Jain Irrigation
                                                Systems Ltd (Jalgaon) for over 3 years.</li>
                                            <li><strong>STATE IN-CHARGE,</strong>Jain Irrigation Systems LTD (JALGAON)
                                                for over 6.5 years.</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td><br><strong>Books</strong></td>
                                    <td style="text-align:justify">
                                        <br>
                                        <ul style="text-align:justify;list-style:disc;margin-left:15px">
                                            <li>LEARN AGRICULTURE Through 7k MCQs Volume - 1 </li>
                                            <p>(<a
                                                    href="https://www.scripown.com/store/978-93-90833-77-1-learn-agriculture-through-mcqs-volume-1">https://www.scripown.com/store/978-93-90833-77-1-learn-agriculture-through-mcqs-volume-1</a>)
                                            </p>
                                            <li>LEARN AGRICULTURE Through 7k MCQs Volume - 2 </li>
                                            <p>(<a
                                                    href="https://www.scripown.com/store/978-93-90833-82-5-learn-agriculture-through-mcqs-volume-2">https://www.scripown.com/store/978-93-90833-82-5-learn-agriculture-through-mcqs-volume-2</a>)
                                            </p>
                                            <li>Also, covered 5 Book Chapters</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td><br><strong>Publications & Research/Conference Papers</strong></td>
                                    <td style="text-align:justify">
                                        <br>
                                        <ul style="text-align:justify;list-style:disc;margin-left:15px">
                                            <li>More than 20 (Including papers presented in National/International
                                                Conferences).</li>
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
                                            <li>Been a part of numerous Conferences / Workshops / Seminars / Short-Term
                                                Courses.</li>
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
</div>
</div>

@endsection