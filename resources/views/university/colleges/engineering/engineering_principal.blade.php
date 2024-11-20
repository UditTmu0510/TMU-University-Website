@extends('layouts.university.colleges.engineering_with_sidebar')
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
            <h1 class="tmu-text-primary tmu-page-heading"><span>Message from the </span><span>Dean's Desk</span></h1>
            <div class="quote-box mx-auto">
                <div class="profile-image mb-2">
                    <img src="{{asset('/assets/img/principal/CCSIT/ccsit_principal.jpg')}}" alt="Profile Image">
                </div>
                <div class="quote-text mt-4 mt-md-0">
                    <p class="text-justify text-dark fs-14 mb-2"><i class="bi bi-quote" style="font-size:30px; color: #737373;"></i>Thriving Towards Brilliance Through Resilience...</p>
                    <p class="text-justify text-dark fs-14 mb-2">I wish to welcome all new students to Faculty of Engineering at Teerthanker Mahaveer University, Moradabad, India.</p>
                    <p class="text-justify text-dark fs-14 mb-2">Our aim at the Faculty of Engineering is to educate and create 'technocrats' with solid academic base and attainment of value-added skills to face local, national and international industrial domain.</p>
                    <p class="text-justify text-dark fs-14 mb-2">Technical education is at the cross road and for your better competence we continuously upgrade Infrastructure, Computational facilities and Laboratories to provide hands on exposure. In addition, we are in collaboration with industries to help and provide the required training to the Campus for making you job ready. </p>
                    <p class="text-justify text-dark fs-14 mb-2"> Training programs with IL&FS Skills, Bharat seats, CIDC, Amtek Auto, Auto CAD are in place. We also look forward to have Volvo, Bosch, iMove and Siemens to run joint programs and also create state of art Labs in the Campus for creating industry ready manpower.</p>
                    <p class="text-justify text-dark fs-14 mb-2">To improve your exposure in Research & Innovation we are also planning an Incubation Centre and are recruiting faculty from the best of Institutes to create the ambience. I welcome you all again and hope your stay would be a learning experience which will facilitate you to be the future technocrats of this country.</p>
                    <p class="mt-3">- (Dr.) R. K. Dwivedi</p>
                    <p>Dean</p>
                </div>
            </div>
        </div>

    </div>
</div>
</div>

@endsection