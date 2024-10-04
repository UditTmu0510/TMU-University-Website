@extends('layouts.university.colleges.medical_with_sidebar')
@section('content')

<link rel="stylesheet" href="{{asset('assets/css/college_overview.css')}}">

<div class="main-content">
    <div class="container">
        <section class="about-section bg-light mt-4">
            <div class="container">
                <div class="text-content p-4">
                    <h1 class="tmu-text-primary tmu-page-heading"><span>Department of </span><span>Dermatology </span></h1>
                    <p class="about-p mb-2">The Department of Psychiatry at Teerthanker Mahaveer Medical College and Research Centre (TMMC&RC) offers outstanding opportunities to the Future Psychiatrists. The programme aims to advance the understanding of psychiatric disorders through an integrated approach to education, research and patient care.</p>
                    <div class="image-content text-center p-4">
                        <img src="{{asset('/assets/img/college_departments/medical/2.jpg')}}" alt="Learning and Teaching">
                    </div>
                    <p class="about-p mb-2">We provide the latest cosmetic service to the patients with the help of three different types of lasers, derma abrader and an armory of chemical peels. Other services like PUVA therapy, wood’s lamp examination, minor OT procedures (comedone extraction, milia enucleation, electrocautery) are also available at the department. The Leprosy patients have to be tested properly via slit skin examination and biopsy which is done on a routine basis for all patients. Any disease requiring further investigation in the form a biopsy is always sampled and sent for histopathology examination. Department is equipped with one seminar room, cum library, mini lab, faculty rooms, OPD chambers, two general wards (one for male, other for female) and one minor OT for carrying out day to day procedures and one laser room equipped with an AC.</p>
                </div>
            </div>
            <div class="col-md-12 text-center p-2 mt-0">
                <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{route('medical.dermatology.infra')}}" target="_blank"> Click here to view Geo Tagged Infrastructure</a>
            </div>
        </section>

    </div>
</div>
</div>

@endsection