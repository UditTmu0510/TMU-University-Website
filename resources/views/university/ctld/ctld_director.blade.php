@extends('layouts.university.departments.ctld_with_sidebar')
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
            <h1 class="tmu-page-heading tmu-text-primary"><span>From the desk of</span><span> Director</span></h1>
            <div class="col-lg-10">
                <div class="principal-card23">
                    <i class="ph-bold ph-quotes principal-quote-icon23"></i>
                    <div class="row">
                        <div class="col-md-10 mx-auto text-center">
                            <div class="d-flex justify-content-between">


                                <div class="principal-image-wrapper23">
                                    <img src="{{asset('/assets/img/principal/ctld/ctld-director.jpg')}}" alt="Principal" class="principal-image23" style="object-position: top;">
                                    <div class="principal-image-decoration23"></div>
                                </div>
                                <div class="principal-info23">
                                    <h4 class="principal-name23">Dr. Pankaj Kumar Singh</h4>
                                    <p class="principal-position23">
                                        <!-- <i class="ph-bold ph-briefcase me-2"></i> -->
                                        Director - CTLD Department
                                    </p>
                                </div>
                            </div>
                            <p class="principal-text23 text-justify">
                           You can succeed, only if you are confident.<span class="highlight fs-14">Dr. Pankaj Kumar Singh</span>
                                <br>
                                <br>
                                At Teerthanker Mahaveer University, the Centre for Teaching, Learning, and Development (CTLD) is dedicated to nurturing well-rounded professionals who can excel in a dynamic global environment. I am honoured to lead this centre, building on a strong foundation of excellence.
                                <br>
                                <br>
                                With over 30 years of experience in academia, training, and career guidance, my vision for CTLD is to continue fostering a culture of continuous learning, personal growth, and professional development. At the core of CTLD's mission is our commitment to empowering both students and faculty to reach new heights of academic excellence, innovation, and leadership. By combining agile teaching methodologies with career development programmes, we aim to ensure that TMU’s students and staff are equipped with the skills and mindset needed to succeed in today's competitive landscape.
                                <br>
                                <br>
                                Our focus at CTLD extends beyond academic achievement, emphasising key qualities such as emotional intelligence, teamwork, and adaptability, which are essential for success in any field. Through an array of workshops, seminars, faculty development programmes (FDPs), and staff development initiatives, we strive to cultivate an environment that supports growth at every level. Whether it's preparing students for prestigious institutions or helping faculty members enhance their teaching strategies, we are committed to making a meaningful impact.<br>
                                <br>
                                I warmly welcome students and staff to engage with CTLD and explore the opportunities we offer. Together, we will work towards shaping the leaders, innovators, and responsible citizens of tomorrow.
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




