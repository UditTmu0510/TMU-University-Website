@extends('layouts.university.departments.ctld_with_sidebar')
@section('content')

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
            <h1 class="tmu-text-primary tmu-page-heading"><span>Message from the </span><span>Director's Desk</span></h1>
            <div class="quote-box mx-auto">
                <div class="profile-image mb-2">
                    <img src="{{asset('/assets/img/principal/ctld/ctld-director.jpg')}}" alt="Profile Image">
                </div>
                <div class="quote-text mt-4 mt-md-0">
                    <!-- <p class="text-justify text-dark fs-14 mb-2"><i class="bi bi-quote" style="font-size:30px; color: #737373;"></i><span class="highlight fs-12" style="color: #ff7900;"></span></p> -->
                    <p class="text-justify text-dark fs-14 mb-2">At Teerthanker Mahaveer University, the Centre for Teaching, Learning, and Development (CTLD) is dedicated to nurturing well-rounded professionals who can excel in a dynamic global environment. I am honoured to lead this centre, building on a strong foundation of excellence.</p>
                    <p class="text-justify text-dark fs-14 mb-2">With over 30 years of experience in academia, training, and career guidance, my vision for CTLD is to continue fostering a culture of continuous learning, personal growth, and professional development. At the core of CTLD's mission is our commitment to empowering both students and faculty to reach new heights of academic excellence, innovation, and leadership. By combining agile teaching methodologies with career development programmes, we aim to ensure that TMU’s students and staff are equipped with the skills and mindset needed to succeed in today's competitive landscape.</p>
                    <p class="text-justify text-dark fs-14 mb-2">Our focus at CTLD extends beyond academic achievement, emphasising key qualities such as emotional intelligence, teamwork, and adaptability, which are essential for success in any field. Through an array of workshops, seminars, faculty development programmes (FDPs), and staff development initiatives, we strive to cultivate an environment that supports growth at every level. Whether it's preparing students for prestigious institutions or helping faculty members enhance their teaching strategies, we are committed to making a meaningful impact.</p>
                    <p class="text-justify text-dark fs-14 mb-2">I warmly welcome students and staff to engage with CTLD and explore the opportunities we offer. Together, we will work towards shaping the leaders, innovators, and responsible citizens of tomorrow.</p>
                    <p class="mt-3">- Dr. Pankaj Kumar Singh</p>
                    <p>Director</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


@endsection