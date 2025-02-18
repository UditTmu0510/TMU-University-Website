@extends('layouts.university.colleges.medical_with_sidebar')
@section('content')

<link rel="stylesheet" href="{{asset('assets/css/college_overview.css')}}">

<div class="main-content">
    <div class="container">
        <section class="about-section bg-light mt-4">
            <div class="container">
                <div class="text-content p-4">
                    <h1 class="tmu-text-primary tmu-page-heading"><span>Department of </span><span> Psychiatry </span></h1>
                    <p class="about-p mb-2">The Department of Psychiatry at Teerthanker Mahaveer Medical College and Research Centre (TMMC&RC) offers outstanding opportunities to the Future Psychiatrists. The programme aims to advance the understanding of psychiatric disorders through an integrated approach to education, research and patient care.</p>
                    <div class="image-content text-center p-4">
                        <img src="{{asset('/assets/img/college_departments/medical/6.jpg')}}" alt="Learning and Teaching">
                    </div>
                    <p class="about-p mb-2">The student avail both theoretical and practical exposure by acquiring the opportunity to practice in multispecialty University hospitals, i.e., TMU Hospital. With this course, you can explore the study of the prevention, diagnosis, and treatment of mental, addictive, and emotional disorders</p>
                    <p class="about-p mb-2">The Department of Psychiatry at Teerthanker Mahaveer Medical College and Research Centre (TMMC&RC) offers outstanding opportunities to the Future Psychiatrists. The programme aims to advance the understanding of psychiatric disorders through an integrated approach to education, research and patient care.</p>
                </div>
            </div>
            <div class="col-md-12 text-center p-2 mt-0">
                <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{route('medical.psychiatry.infra')}}" target="_blank"> Click here to view Geo Tagged Infrastructure</a>
            </div>
        </section>
        <div class="container mt-5">
            <div class="row">
            <div class="col-md-6">
                <div class="section-box p-3">
                        <h3 class="tmu-text-primary"><span>Major </span><span> Services </span></h3>
                        <ul class="m-ol-list ps-5">
                            <li>Specialty Clinic: Operational in the department since 2013 that includes Child and Adolescent Mental Health Clinic, Deaddiction Clinic, Geriatric Care Clinic, Sex and Marital Counseling Clinic.</li>
                            <li>Occupational Therapy and Recreational Therapy Services.</li>
                            <li>Community Mental Health Services includes regular mental health awareness camps in collaboration with the Community Medicine Department.</li>
                        </ul>
                </div>
            </div>

            <div class="col-md-6">
                <div class="section-box p-3">
                        <h3 class="tmu-text-primary"><span>Equipments </span><span> Available </span></h3>
                    <ul class="m-ol-list ps-5">
                        <li>Biofeedback Machine.</li>
                        <li>Multiple Behavior Therapy Machine</li>
                        <li>Hand Held ECT Machine.</li>
                        <li>EEG machine.</li>
                        <li>Multipara Monitor.</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-12 mt-3">
                <div class="section-box p-3">
                        <h3 class="tmu-text-primary"><span>Clinical Department </span><span> at TMU </span></h3>
                        <p class="text-justify">The clinical department at TMU Hospital includes:</p>
                        <ul class="m-ol-list ps-5">
                            <li>20 bedded male and female psychiatry wards each.</li>
                            <li>10 bedded Isolation ward for acutely ill patients.</li>
                        </ul>
                    <p class="text-justify">The hospital has an average occupancy rate of 80%. On average, there are 112 OPDs outpatient department visits and 24 IPD inpatient visits every day.</p>
                </div>
            </div>
            
            <h3 class="tmu-text-primary mb-1 mt-3"><span> Department </span><span> Gallery</span></h3>
            <div class="col-md-12 mt-3">
                    <div class="masonry-thumbs grid-container row row-cols-5" data-big="" data-lightbox="gallery">
                        <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/psychiatry/1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/psychiatry/1.jpg')}}" alt="Gallery Thumb 1"></a>
                        <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/psychiatry/2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/psychiatry/2.jpg')}}" alt="Gallery Thumb 2"></a>
                        <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/psychiatry/3.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/psychiatry/3.jpg')}}" alt="Gallery Thumb 3"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection