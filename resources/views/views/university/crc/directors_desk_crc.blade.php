@extends('layouts.university.departments.crc_with_sidebar')
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
            <h1 class="tmu-text-primary tmu-page-heading"><span>Message from the </span><span> Joint Director's Desk</span></h1>
            <div class="quote-box mx-auto">
                <div class="profile-image mb-2">
                    <img src="{{asset('/assets/img/college_departments/CRC/MR_SIDHARTH_SINGH.png')}}" alt="Profile Image">
                </div>
                <div class="quote-text mt-4 mt-md-0">
                    <p class="text-justify text-dark fs-14 mb-2">As The Joint Director- Corporate Resource Centre (CRC) it is my honor and privilege to work for the betterment of our students, helping them to discover their unique strengths, passion and guiding them towards achieving their professional goals.</p>
                    <p class="text-justify text-dark fs-14 mb-2">At Teerthanker Mahaveer University, we believe that education is not only about acquiring knowledge but also about developing skills and abilities that will prepare our students for success in their chosen careers. Therefore, we have a dedicated team of placement professionals who work tirelessly to provide our students with all resources and support they required to succeed in the job market.</p>
                    <p class="text-justify text-dark fs-14 mb-2">From resume building workshops to mock interviews and placement assistance we offer a wide range of services aimed at helping our students stand out and showcase their unique talents and strengths to potential employers.</p></p>
                    <p class="text-justify text-dark fs-14 mb-2">We understand the challenges that students face in today's highly competitive job market & we are committed to providing them with the guidance and support they need to find success and achieve their professional ambitions.</p>
                    <p class="text-justify text-dark fs-14 mb-2">Our team of experienced professionals brings a wealth of knowledge and expertise to the table, and we are constantly striving to improve and evolve our programs and services to meet the evolving needs of our students and the job market.</p>
                    <p class="text-justify text-dark fs-14 mb-2">So, whether you're a recent graduate or a current student, rest assured that our placement team is here to help you at every step of the way on your career journey.</p>
                    <p class="mt-3">Mr. Sidhart Singh</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection