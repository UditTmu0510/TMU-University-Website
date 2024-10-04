@extends('layouts.university.colleges.medical_with_sidebar')
@section('content')

<link rel="stylesheet" href="{{asset('assets/css/college_overview.css')}}">

<div class="main-content">
    <div class="container">
        <section class="about-section bg-light mt-4">
            <div class="container">
                <div class="text-content p-4">
                    <h1 class="tmu-text-primary tmu-page-heading"><span>Department of </span><span>Community Medicine </span></h1>
                    <p class="about-p mb-2">The Community Medicine Department, TMMC&RC trains undergraduate and postgraduate students in the science and art of preventing disease, prolonging life, and promoting health and efficiency through organized community effort. The Department aims to prepare medical students to function as community and primary care physicians. To move towards achieving these goals, the department conducts many programs.</p>
                    <p class="about-p mb-2">The department provides scientifically proven methods of preparing of Medico-legal reports and post mortem examinations to MBBS students as well as MD students of Forensic Medicine and other specialties, so that in future they will be well versed with the legalities of their fields.</p>
                    <p class="about-p mb-2">It provides Undergraduate Training and Post Graduate Training. It offers health services at the Health Centre in the nearby areas of RHTC and UHTC. It also extends its health services by holding health camps, school health services, and family health services in these areas.</p>
                    <p class="about-p mb-2"></p>
                    <div class="image-content text-center p-4">
                        <img src="{{asset('/assets/img/college_departments/medical/communitymedicine/4.jpg')}}" alt="Learning and Teaching">
                    </div>
                    <p class="about-p mb-2">The Department has excellent infrastructure, good facilities, a good research background coupled with a trained and highly qualified workforce.</p>
                    <p class="about-p mb-2">Our health centers viz. Urban Health & Training Center (UHTC) and Rural Health & Training Center (RHTC) are our field practice areas for community diagnosis of health problems to teach MBBS students about the socio-cultural environment and household health. The department is imparting training to MBBS students using all recent modalities. Regular classroom activities include seminars, symposia, lectures, and group discussions. The undergraduate students are involved in short-term self-financed low-cost research projects to enhance their subject insight and innovative strategies for community betterment.</p>
                    <p class="about-p mb-2">The RHTC is located 19 km away at Amroha and is fully equipped with OPDs, specialist clinic, labor room, inpatient facility (10 bedded with separate male & female wards), seminar room, immunization room, and laboratory. The residential posting of the interns, postgraduates, and junior residents under the supervision of faculty in charge is at RHTC with functional mess and toilets.</p>
                    <p class="about-p mb-2">The UHTC is situated 10 km at Manjhauli, with OPDs, specialist clinics, laboratory, and daycare center. Mostly, services are provided free of charge. For each health center, there is a medical officer and adequate staff. The interns, postgraduates, and senior residents are posted by rotation to the centers.</p>
                </div>
            </div>
            <div class="col-md-12 text-center p-2 mt-0">
                <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{route('medical.community.medicine.infra')}}" target="_blank"> Click here to view Geo Tagged Infrastructure</a>
            </div>
        </section>
        <div class="container mt-5">
            <h3 class="tmu-text-primary mb-2 mt-2"><span> Department </span><span> Gallery</span></h3>
            <div class="col-md-12">
                    <div class="masonry-thumbs grid-container row row-cols-5" data-big="" data-lightbox="gallery">
                        <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/communitymedicine/1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/communitymedicine/1.jpg')}}" alt="Gallery Thumb 1"></a>
                        <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/communitymedicine/2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/communitymedicine/2.jpg')}}" alt="Gallery Thumb 2"></a>
                        <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/communitymedicine/3.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/communitymedicine/3.jpg')}}" alt="Gallery Thumb 3"></a>
                    </div>
                </div>
        </div>
    </div>
</div>
</div>
</div>

@endsection