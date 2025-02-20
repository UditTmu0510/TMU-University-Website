@extends('layouts.university.colleges.dental_with_sidebar')
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
                                    <td>Professor &amp; Head, Department of Public Health Dentistry, &amp; Principal, TMDCRC
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
                                    <td>principal.dental@tmu.ac.in</td>
                                </tr>
                                
                                <tr>
                                    <td class="fw-bold">Academic Qualification</td>
                                    <td> MDS in Public Health Dentistry</td>
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