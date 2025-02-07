@extends('layouts.university.colleges.medical_with_sidebar')
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
                                    <img src="{{asset('/assets/img/principal/medical/superintendent_medical.jpg')}}"
                                        alt="Principal" class="principal-image23" style="object-position: top;">
                                    <div class="principal-image-decoration23"></div>
                                </div>
                                <div class="principal-info23">
                                    <h4 class="principal-name23">Dr Vishvanayak</h4>
                                    <p class="principal-position23">
                                        <!-- <i class="ph-bold ph-briefcase me-2"></i> -->
                                        Superintendent
                                    </p>
                                </div>
                            </div>
                            <p class="principal-text23 text-justify">
                                I feel a sense of great pride and accomplishment in holding the prestigious office of
                                Medical Superintendent of Teerthanker Mahaveer Medical College & Research Centre.
                                <br>
                                <br>
                                Our hospital was established in 2008 with just 520 beds, which has expanded to one
                                thousand today. Progressing at a phenomenal pace, we boast of ultramodern, Modular
                                Operation Theatres, Intensive Care Units, Private and General Wards besides other
                                conveniences. We boast the best MRI, CT, DSA, and mammography machines, and offer a wide
                                range of pathological investigations alongside a well-equipped Blood Bank.
                                <br>
                                <br>
                                The true gauge of our progress is the number of satisfied patients visiting our
                                hospital. Our team of dedicated and competent doctors treat up to 2000 patients in the
                                OPD everyday with an IPD occupancy of 500 to 700 patients, and 30 to 40 operations are
                                performed daily.
                                <br>
                                <br>
                                It would not be an exaggeration to proclaim that all specialised and super-specialty
                                services we offer are of the highest quality at a very reasonable cost. We have never
                                wavered from our mission of providing excellent health care at affordable prices to the
                                ailing humanity and God willing, we shall collectively work to take this hospital to
                                greater heights.
                                <br>
                                <br>
                            <p class="text-justify text-dark fs-14 mb-2"> <b>Jai Hind!!</b></p>
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
                                    <td style="text-align:left">Dr Vishvanayak</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Designation</td>
                                    <td style="text-align:left">Medical Superintendent, Professor (Orthopaedics)</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Office Address</td>
                                    <td style="text-align:left">Teerthanker Mahaveer Medical College Hospital,
                                        Teerthanker Mahaveer University, Delhi Road, Moradabad – 244001 (U.P.)</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Contact No.</td>
                                    <td style="text-align:left">+91 9453426467</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Fax No.</td>
                                    <td style="text-align:left">0591-2476815</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">E-Mail ID</td>
                                    <td style="text-align:left">ms@tmu.ac.in</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Date of Birth</td>
                                    <td style="text-align:left">03-09-1957</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Academic Qualification</td>
                                    <td style="text-align:left">M.D. (Medicine), S. N. Medical College, Agra University,
                                        Agra (U.P)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="table-responsive" style="margin-left:10px">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td>Professional Synopsis</td>

                                    <td>
                                        <ul class="m-ol-list ps-3 fs-14 mb-1">
                                            <li><b class="fs-14">Professor & Head, Department of Medicine</b>,
                                                Teerthanker Mahaveer Medical College & Research Centre, TMU, Moradabad
                                                from November 2015 to October 2022.</li>
                                            <li><b class="fs-14">Officer Incharge Medical Division</b> 159 General
                                                Hospital, Military Hospital Blood Bank in Ferozpur, Punjab.</li>
                                            <li><b class="fs-14">Officer Incharge Medical Division</b> Military Hospital
                                                Pune.</li>
                                            <li>Member of various committees at the college and university level of
                                                Teerthanker Mahaveer University.</li>
                                        </ul>
                                        <h3 class="tmu-text-primary mb-1 mt-1"><span>External </span><span>
                                                Examiner</span></h5>
                                            <ul class="m-ol-list ps-3 fs-14">
                                                <li>External Examiner for Final Practical and Viva-Voce examination of
                                                    BDS of Mahatma Gandhi Medical College & Hospital on 2022.</li>
                                                <li>External Examiner for 3rd Prof. Part - 2 Practical and Viva-Voce
                                                    examination of MBBS Batch of Mahatma Gandhi Medical College &
                                                    Hospital on March 2022.</li>
                                                <li>Evaluation of PG Thesis of General Medicine 2019, Mahatma Gandhi
                                                    University.</li>
                                                <li>External Examiner for Final IInd Prof. Practical and Viva-Voce
                                                    examination of MBBS Batch of JNMC, AMU, Aligarh on 2018.</li>
                                                <li>External Examiner for Final 2nd Prof. Practical and Viva-Voce
                                                    examination of the MBBS Batch at Mahatma Gandhi Medical College &
                                                    Hospital on 21st July 2016.</li>
                                                <li>Certificate of External Examiner for Final Year MD Medicine at JNMC,
                                                    AMU, Aligarh on 22nd Oct 2017..</li>
                                            </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Publications & Research/Conference Papers</td>
                                    <td>
                                        <ul class="m-ol-list ps-3 fs-14">
                                            <li>More than 20 publications in various specialties.</li>
                                            <li>Attended more than 75 conferences/workshops/symposia/etc.</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Awards & Honors</td>
                                    <td>
                                        <ul class="m-ol-list ps-3 fs-14">
                                            <li>Kaushla Nandan Sahay Silver Medal 1981 for obtaining highest marks in
                                                ophthalmology</li>
                                            <li>Tukaram Elhence Silver Medal 1981 for highest marks in Ophthalmology and
                                                Gynaecology.</li>
                                            <li>Special prize for medical debate, SN Medical College, Agra in 1983</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Professional Body Memberships</td>
                                    <td style="text-align:justify">
                                        <ul class="m-ol-list ps-3 fs-14">
                                            <li>Association of Physicians of India (No. L.M. 4469)</li>
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