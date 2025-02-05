@extends('layouts.university.colleges.engineering_with_sidebar')
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
            <div class="col-lg-10">
                <div class="principal-card23">
                    <i class="ph-bold ph-quotes principal-quote-icon23"></i>
                    <div class="row">
                        <div class="col-md-10 mx-auto text-center">
                            <div class="d-flex justify-content-between">


                                <div class="principal-image-wrapper23">
                                    <img src="{{asset('/assets/img/principal/dental/5.png')}}" alt="Principal"
                                        class="principal-image23" style="object-position: top;">
                                    <div class="principal-image-decoration23"></div>
                                </div>
                                <div class="principal-info23">
                                    <h4 class="principal-name23">Prof Pradeep Tangade</h4>
                                    <p class="principal-position23">
                                        <!-- <i class="ph-bold ph-briefcase me-2"></i> -->
                                        Principal
                                    </p>
                                </div>
                            </div>
                            <p class="principal-text23 text-justify">
                                It is with great pleasure that I welcome you to our college website. With a long and
                                rewarding history of achievement in education behind us, we at <a
                                    href="{{ route('dental.home') }}">Teerthanker Mahaveer Dental College and Research
                                    Centre</a> , continue to move forward together with confidence, pride and
                                enthusiasm. The college aims to provide quality education for students and outstanding
                                patient care. The hospital provides a good dental care facility at an affordable
                                cost.With our world-class infrastructure and excellent mentoring, we provide more
                                personal support and greater access to opportunities in each student’s chosen field of
                                interest. The exceedingly sophisticated preclinical labs enable undergraduate students
                                to achieve complete training to handle patients in clinics.
                                The Dental College has a large number of patients daily which ensure excellent clinical
                                training of our students. Our aim is not only to give students clinical knowledge but
                                also instil in them ethical values that are vital in this noble profession.
                                <br>
                                <br>
                                We constantly modernise and review our clinical facilities to keep them at par with the
                                highest standards of the profession. Under my leadership, and as a team working
                                together, we strongly promote academic achievement among our students. Our College is
                                recognised as a national leader in teaching and learning, student relationships and
                                well-being. Our approach involves working with parents to meet the individual needs of
                                every student, and supporting them in fulfilling their academic and co-curricular goals
                                and dreams. I hope you enjoy your visit to the website and and if you wish to contact
                                us, please find details on the contact page. As we move forward, let us continue to
                                embrace change, pursue knowledge, and strive for excellence. Together, we can overcome
                                any obstacle that comes our way and continue to provide compassionate and competent care
                                to those in need.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="principal-card23 my-5 col-lg-10">
                <div class="section-box p-3">
                    <h2 class="tmu-text-primary mb-2 text-center"><span>Profile</span></h2>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <td class="fw-bold">Name</td>
                                    <td>Prof Pradeep Tangade</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Designation</td>
                                    <td>Professor &amp; Head, Department of Orthodontics, &amp; Principal, TMDCRC
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Office Address</td>
                                    <td>Teerthanker Mahaveer Dental College &amp; Research Centre, Teerthanker
                                        Mahaveer University, Delhi Road, Moradabad &ndash; 244001 (U.P.)</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Telephone No.</td>
                                    <td>0591-2476815</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Fax No.</td>
                                    <td>0591-2476815</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">E-Mail ID</td>
                                    <td>principal.tmdcrc@tmu.ac.in</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Date of Birth</td>
                                    <td>01-07-1954</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Academic Qualification</td>
                                    <td>PhD, MDS, MOrth</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="section-box p-3 mt-2">
                        <h3 class="tmu-text-primary mb-1"><span>Awards & Honours</span><span></span></h3>
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="m-ol-list ps-5 mb-2 fs-14 text-justify">
                                    <li><b class="fs-14">Param Vishisht Seva Medal (PVSM)</b> Awarded by the
                                        President of India for exceptional service over four decades (2016).</li>
                                    <li><b class="fs-14">Ati Vishisht Seva Medal (AVSM)</b> Awarded by the President
                                        of India for distinguished and meritorious service of an exceptional order
                                        (2011).</li>
                                    <li>Appointed as President's Honorary Surgeon in 2014.</li>
                                    <li>Army Commander Commendation Card for distinguished and meritorious service
                                        (1998).</li>
                                    <li>Army Commander Commendation Card for distinguished and meritorious service
                                        (1999).</li>
                                    <li>Chief of the Army Staff Commendation for distinguished and meritorious
                                        service in (2008).</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="section-box p-3 mt-2">
                        <div class="row">
                            <div class="row">
                                <h3 class="tmu-text-primary mb-1 mt-2"><span>Former Appointments </span><span> &
                                        Highlights</span></h3>
                                <div class="col-md-6">
                                    <ul class="m-ol-list ps-5 mb-2 fs-14 text-justify">
                                        <li>Associated as the Head of Armed Forces Medical Services and led all
                                            medical services, hospitals, and healthcare for the Indian Army, Navy &
                                            Air Force; retired from the highest post of medical services as DGAFMS.
                                        </li>
                                        <li>Chief Medical Advisor to the President of India.</li>
                                        <li>Attained the level of honour for exemplary service in the Indian Armed
                                            Forces.</li>
                                        <li>Led the relief and disaster management efforts for the rescue and
                                            healthcare of earthquake victims in Nepal.</li>
                                        <li>Delegation to the Pentagon, USA to expand medical cooperation between
                                            Indian & United States Military (2015).</li>
                                        <li>Vice Chairman at the 41st World Congress on Military Medicine of the
                                            ICMM in Bali, Indonesia.</li>
                                        <li>Guest of Honor at the CEO round table conference at the India Medical
                                            Expo.</li>
                                        <li>Spearheaded all research activities in the Armed Forces Medical Services
                                            under the aegis of DRDO,
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="m-ol-list ps-5 mb-2 fs-14 text-justify">
                                        <li>Revolutionised the designing & fabrication of ultra-modern and 'state of
                                            the art' prostheses for amputees.</li>
                                        <li>Instrumental in the revision of the Promotion Policy of Armed Forces
                                            Medical Services (AFMS).</li>
                                        <li>Authored articles published in leading dailies such as Times of India,
                                            Economic Times, Hindustan Times & India Today.</li>
                                        <li>Chief invitee at the Six Sigma Healthcare Awards during the World
                                            Entrepreneurship Summit (2015).</li>
                                        <li>Keynote Speaker & Guest of Honor at the Mother Teresa International
                                            Awards (2015).</li>
                                        <li>Led a national (first-ever) initiative the provisioning of medicines,
                                            medical care, and deployment of doctors and human resources for HAJ
                                            pilgrims in Saudi Arabia.</li>
                                        <li>Professor of repute at MUHS, Pune University, Indraprastha University,
                                            and Lucknow University.</li>
                                        <li>Registered examiner for DNB in Orthopaedics.</li>
                                    </ul>
                                </div>
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