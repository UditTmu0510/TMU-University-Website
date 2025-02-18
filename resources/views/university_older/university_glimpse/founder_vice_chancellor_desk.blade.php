@extends('layouts.university.departments.about_tmu_with_sidebar')
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
    <div class="container pb-5">
    <h1 class="tmu-text-primary tmu-page-heading "><span>Founder Vice </span><span>Chancellor Desk</span></h1>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="principal-card23">
                    <i class="ph-bold ph-quotes principal-quote-icon23"></i>
                    <div class="row">
                        <div class="col-md-10 mx-auto text-center">
                            <div class="d-flex justify-content-between">

                           
                            <div class="principal-image-wrapper23">
                                <img src="{{asset('assets/img/aboutus/administration/pvc.png')}}" alt="Principal" class="principal-image23" style="object-position: top;">
                                <div class="principal-image-decoration23"></div>
                            </div>
                            <div class="principal-info23">
                                <h4 class="principal-name23">Prof. R. K. Mittal</h4>
                                <p class="principal-position23">
                                    <!-- <i class="ph-bold ph-briefcase me-2"></i> -->
                                    Founder Vice Chancellor
                                </p>
                            </div>
                        </div>
                            <p class="principal-text23 text-justify">
                            The challenge before the educationists today is to channelize the intelligent,
                                    creative and enthusiastic youth of the country into the <span
                                        class="highlight">nation building process</span>. I strongly believe that right
                                    mix of education focusing on <span class="highlight">head, heart and hand</span> can
                                    substantially help in meeting this challenge. The need therefore is to <span
                                        class="highlight">reorient education</span> that concentrates on the development
                                    of <span class="highlight">right attitude, knowledge and skill set</span> of the
                                    students and that is what we are concentrating upon here. In recent past interactive
                                    meets with the industries at Kashipur- Rudrapur, Haridwar, Gajraula and Dehradun
                                    have opened up new opportunities for the students and faculty to understand the
                                    issues confronting the industries and their solutions, besides providing larger
                                    avenues for training and placement.<br>
                                <br>
                                The facilities and the efforts to promote research activities in the university have
                                    started yielding satisfactory results whereby in the last one year <span
                                        class="highlight">210 quality research papers have been published</span>. We are
                                    further consolidating the research base by adding more research labs and
                                    collaborating with industries and academia.<br>
                                <br>
                                Similarly, a beginning has been made towards <span class="highlight">consultancy by
                                        taking projects from local industries</span> in association with Consultancy
                                    Development Centre, New Delhi. I am confident that these initiatives shall
                                    sufficiently groom the students to acquire the required competencies to smoothly
                                    sail through their journey of <span class="highlight">personal and professional
                                        life</span>.<br>
                                <br>
                                My best wishes to all the aspiring students.
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