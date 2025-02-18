@extends('layouts.university.colleges.tmimt_with_sidebar')
@section('content')

<div class="main-content">
        <div class="container">
        <div class="banner text-white text-center p-4 rounded d-flex justify-content-center" style="height: 16vh; background-color: #001055;">
            <div class="d-flex align-items-center">
                <h2 class="text-white m-0">College Overview</h2>
            </div>
        </div>

            <section class="about-section bg-light mt-4">
                <div class="container">
                    <div class="text-content p-4">
                        <h1 class="tmu-text-primary tmu-page-heading"><span>Welcome to TMIMT College </span><span> of Management</span></h1>
                        <p class="about-p mb-4 text-justify">Teerthanker Mahaveer Institute of Management and Technology (TMIMT) is the seed that has grown into a big Banyan tree in the form of Teerthanker Mahaveer University. This top management college, established in 2001, has been contributing to the development of management education, by fostering leadership, nurturing entrepreneurial talent and stimulating research since its inception. Join the 21-year legacy of graduates shaping the business landscape, with the assistance of the exceptionally qualified faculty members.</p>
                    </div>
                    <div class="image-content text-center p-4">
                        <img src="{{asset('assets/img/aboutus/tmimt/tmimt_about_us.jpg')}}" alt="Law about us image">
                    </div>
                    <div class="container p-3">
                        <p class="about-p mb-4 text-justify">TMIMT College of Management consists of two departments namely the Department of Management Studies and the Department of Commerce. The departments are led and mentored by a number of experienced academicians with core industry experience. The Training & Placement cell works around the clock to guarantee that students are placed in credible companies on advantageous terms across a variety of industries. Numerous reputable companies have partnered with TMIMT in order to provide the best industry-sponsored courses and lab facilities in recognition of TMIMT’s high ranking as the premier B-School in Uttar Pradesh and North India.</p>
                        <p class="about-p mb-4 text-justify">In collaboration with industry, academia, government, and non-governmental organisations, TMIMT supports sustainable business models that meet the diverse demands of all stakeholders in society. The college is a hub of multifaceted academic research and consultancy to equip students with crucial skills and professional ethics needed to succeed in an increasingly interconnected and globalised world. TMIMT is the only institution in the region with membership in the International Accreditation Council for Business Education<span class="highlight">(<a href="https://iacbe.org/accreditation/member-status-information/results/" target="_blank">IACBE</a>),</span>which ensures that it adheres to the highest standards of quality and follows best practices in business education.</p>
                        <p class="about-p mb-4 text-justify">Teerthanker Mahaveer Institute of Management and Technology (TMIMT) gives you an edge by focusing on your practical experiences, boosting your self-confidence, enhancing your earning potential and directing you to an ideal destination. Bring out the best in you by enrolling in the Best Private Management College in Uttar Pradesh.</p>
                    </div>
                </div>
            </section>
            <div class="container mt-3">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div class="section-box p-3">
                            <h3 class="tmu-text-primary mb-2"><span>Vision</span></h3>
                            <p class="text-justify">To be a World Leader in the integration of teaching and learning, advancement of the knowledge base through research & leadership in service and outreach.</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="section-box p-3">
                            <h3 class="tmu-text-primary mb-2"><span>JOURNEY OF </span><span> TMIMT</span></h3>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Sl. No.</th>
                                            <th class="text-center">Ranked by</th>
                                            <th class="text-center">Year</th>
                                            <th class="text-center">Rating</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-center">Indian Education Network</td>
                                            <td class="text-center">2017</td>
                                            <td class="text-center">Excellence and Innovation in Entrepreneurship Education</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td class="text-center">All India Technical & Management Council</td>
                                            <td class="text-center">2016</td>
                                            <td class="text-center">Best Institute Industry-Academia Interface</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td class="text-center">Business and Management - Chronicle</td>
                                            <td class="text-center">2016</td>
                                            <td class="text-center">In top 5 B-School in North India List – All India B – School Survey</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">4</td>
                                            <td class="text-center">Career Option (Magazine)</td>
                                            <td class="text-center">2015</td>
                                            <td class="text-center">Outstanding Management Institute (North India)</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">5</td>
                                            <td class="text-center">Times of India</td>
                                            <td class="text-center">2015</td>
                                            <td class="text-center">54 (All India Rank)</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">6</td>
                                            <td class="text-center">MBA by Choice</td>
                                            <td class="text-center">2014</td>
                                            <td class="text-center">A++</td>
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
@endsection