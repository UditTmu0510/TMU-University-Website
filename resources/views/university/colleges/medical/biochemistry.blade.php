@extends('layouts.university.colleges.medical_with_sidebar')
@section('content')

<link rel="stylesheet" href="{{asset('assets/css/college_overview.css')}}">

<div class="main-content">
    <div class="container">
        <section class="about-section bg-light mt-4">
            <div class="container">
                <div class="text-content p-4">
                    <h1 class="tmu-text-primary tmu-page-heading"><span>Department of </span><span> Biochemistry </span></h1>
                    <div class="image-content text-center p-4">
                        <img src="{{asset('/assets/img/college_departments/medical/biochemistry/9.jpg')}}" alt="Learning and Teaching">
                    </div>
                    <p class="about-p mb-2">The Department of Biochemistry of Teerthanker Mahaveer Medical College and Research Centre is one of the forefront of biochemical research in the country. A team of talented and trained doctors and professors leads it. Courses like MBBS, MD, M.Sc. Medical, BDS & MDS are available. The Biochemistry department is equipped with world-class research facilities for faculty & Post-Graduate students. There are UG, and PG Research Laboratory. Apart from this, Central Research Laboratory is also accessible for the students. State of art Clinical Chemistry laboratory is running in the hospital reforming various routine and specialized investigations catering to the diagnostic needs of the patients.</p>
                    
                </div>
            </div>
            <div class="col-md-12 text-center p-4 mt-0">
                <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{route('medical.biochemistry.infra')}}" target="_blank"> Click here to view Geo Tagged Infrastructure</a>
            </div>
        </section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-box p-3 mt-2">
                        <h3 class="tmu-text-primary mt-2 mb-0"><span>Vision </span><span></span></h3>
                        <p class="text-justify">“To develop and become a full-fledged teaching and research department, which can excel in biochemistry to cater to the needs and challenges of the Moradabad district and the country.”</p>
                    </div>
                </div>
                <div class="row">
                <h3 class="tmu-text-primary mt-3 mb-2 text-capitalize"><span>MAJOR RESEARCH AREAS AND </span><span> LABORATORIES IN THE DEPARTMENT </span></h3>

                <div class="col-md-6">
                    <div class="section-box p-3 mt-2" style="height: 340px!important;">
                    <h3 class="tmu-text-primary mt-2 mb-0 "><span>Laboratories in </span><span> the Department </span></h3>
                        <ul class="m-ol-list ps-5 fs-14">
                            <li>UG Laboratory</li>
                            <li>PG Research laboratory</li>
                            <li>Central Research laboratory</li>
                            <li>Central Clinical Chemistry laboratory</li>
                        </ul>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="section-box p-3 mt-2">
                    <h3 class="tmu-text-primary mt-2 mb-0 "><span>Major Research </span><span> Areas </span></h3>
                        <ul class="m-ol-list ps-5 fs-14">
                            <li>Inflammatory Markers</li>
                            <li>Covid-19 Related Parameters</li>
                            <li>Novel Biomarkers</li>
                            <li>Routine Clinical Chemistry</li>
                            <li>Endocrinology investigations</li>
                            <li>Tumor markers</li>
                            <li>Nutrition & Dietetics</li>
                            <li>Cardiac Markers</li>
                            <li>Inflammatory Marker</li>
                        </ul>
                    </div>
                </div>
                </div>
            </div>
        </div>    
    </div>
</div>
</div>

@endsection