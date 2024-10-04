@extends('layouts.university.colleges.pharmacy_with_sidebar')
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
            <h1 class="tmu-text-primary tmu-page-heading"><span>Message from the </span><span>Principal's Desk</span></h1>
            <div class="quote-box mx-auto">
                <div class="profile-image mb-2">
                    <img src="{{asset('/assets/img/principal/pharmacy/3.png')}}" alt="Profile Image">
                </div>
                <div class="quote-text mt-4 mt-md-0">
                <p class="text-justify text-dark fs-14 mb-2">Pharmacy is an essential pillar of healthcare. Our college offers extensive training to ensure students achieve competency at par with the best in the region. We currently offer four streams that form the backbone of medical sciences, shaping skilled professionals to meet industry demands.</p>
                <p class="text-justify text-dark fs-14 mb-2">Pharmacy is a noble profession, with pharmacists playing a vital role in healthcare. Our college is committed to imparting cutting-edge knowledge, skills, and training, preparing future pharmacists to excel in industries, academia, and patient care. Our curriculum includes case studies, industrial visits, and summer training to provide students with real-world exposure.</p>
                <p class="text-justify text-dark fs-14 mb-2">We believe good education stems from dedicated faculty, eager students, and an open learning environment. Our focus extends beyond academics to nurturing human intellect and developing life skills. Through personalized learning, faculty engagement, and numerous student activities, we empower students to tackle challenges with confidence.</p>
                <p class="text-justify text-dark fs-14 mb-2">At the College of Pharmacy, we encourage students to think creatively and express their ideas freely. Student-led clubs and forums provide opportunities for growth and collaboration. The time spent here fosters lifelong friendships, sharpens critical thinking, and equips students with the tools to succeed in the professional world.</p>
                    <p class="mt-3">- Prof. Anurag Verma</p>
                    <p>Principal</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


@endsection