@extends('layouts.university.colleges.law_with_sidebar')
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
                                <img src="{{asset('/assets/img/principal/law/4.png')}}" alt="Principal" class="principal-image23" style="object-position: top;">
                                <div class="principal-image-decoration23"></div>
                            </div>
                            <div class="principal-info23">
                                <h4 class="principal-name23">Prof. (Dr.) Sushil Kumar</h4>
                                <p class="principal-position23">
                                    <!-- <i class="ph-bold ph-briefcase me-2"></i> -->
                                    Principal
                                </p>
                            </div>
                        </div>
                        <p class="text-justify text-dark fs-14 mb-2"><i class="bi bi-quote" style="font-size:30px; color: #737373;"></i>Justice is the greatest concern of man on earth.... <span class="highlight fs-12" style="color: #ff7900;">Daniel Webster</span></p>
                            <p class="principal-text23 text-justify">
                            In the college of Law and Legal Studies, we want to contribute to every
                        student’s success. Legal education has changed drastically over the past ten years in terms of
                        what needs to be taught to meet the needs of the legal market. As litigation is no more centric
                        on legal education, there is a huge challenge for our faculty members to produce lawyers who can
                        go beyond the traditional practice of law.
                                <br>
                                <br>
                                Implementing traditional curricula is not sufficient. Our law college
                        broadens its academic horizon by introducing new legal disciplines preparing our students for
                        the expanding and challenging market. In addition, we train our students in the research skills
                        necessary for today’s practice.
                                <br>
                                <br>
                                Our faculty members deeply care about the success of our students. They
                        are always ready to provide academic and other support needed. We prepare our students to serve
                        their clients with excellence. I welcome you to the College of Law and Legal Studies and be part
                        of future legal education which is professionally and intellectually rewarding.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection