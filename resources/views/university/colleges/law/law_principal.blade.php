@extends('layouts.university.colleges.law_with_sidebar')
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
                    <img src="{{asset('/assets/img/principal/law/4.png')}}" alt="Profile Image">
                </div>
                <div class="quote-text mt-4 mt-md-0">
                    <p class="text-justify text-dark fs-14 mb-2"><i class="bi bi-quote" style="font-size:30px; color: #737373;"></i>Justice is the greatest concern of man on earth.... <span class="highlight fs-12" style="color: #ff7900;">Daniel Webster</span></p>
                    <p class="text-justify text-dark fs-14 mb-2">In the college of Law and Legal Studies, we want to contribute to every
                        student’s success. Legal education has changed drastically over the past ten years in terms of
                        what needs to be taught to meet the needs of the legal market. As litigation is no more centric
                        on legal education, there is a huge challenge for our faculty members to produce lawyers who can
                        go beyond the traditional practice of law.</p>
                    <p class="text-justify text-dark fs-14 mb-2">Implementing traditional curricula is not sufficient. Our law college
                        broadens its academic horizon by introducing new legal disciplines preparing our students for
                        the expanding and challenging market. In addition, we train our students in the research skills
                        necessary for today’s practice.</p>
                    <p class="text-justify text-dark fs-14 mb-2">Our faculty members deeply care about the success of our students. They
                        are always ready to provide academic and other support needed. We prepare our students to serve
                        their clients with excellence. I welcome you to the College of Law and Legal Studies and be part
                        of future legal education which is professionally and intellectually rewarding.</p>
                    <p class="mt-3">- Prof. (Dr.) Sushil Kumar</p>
                    <p>Principal</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection