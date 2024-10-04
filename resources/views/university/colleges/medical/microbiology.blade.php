@extends('layouts.university.colleges.medical_with_sidebar')
@section('content')

<link rel="stylesheet" href="{{asset('assets/css/college_overview.css')}}">

<div class="main-content">
    <div class="container">
        <section class="about-section bg-light mt-4">
            <div class="container">
                <div class="text-content p-4">
                    <h1 class="tmu-text-primary tmu-page-heading"><span>Department of </span><span> Microbiology </span></h1>
                    <div class="image-content text-center p-4">
                        <img src="{{asset('/assets/img/college_departments/medical/microbiology/1.jpg')}}" alt="Learning and Teaching">
                    </div>
                    <p class="about-p mb-2">Department of Microbiology had established in 2008 .The main aim of the department is to train Students in the field of Microbiology, both theoretical as well as practical aspects in its different sub-specialties viz. Bacteriology, Virology, Serology, Immunology, Parasitology, Mycobacteriology, Mycology & Molecular laboratory, so that they can Know the importance of Microbiology for infectious diseases pathogenesis and diagnosis, their detection by different techniques and to establish targeted care, control and prevention of the infectious diseases in the community & hospital settings. They will be trained to carry out basic research work and its prospective implementations in future. They will also be involved in teaching which will enable them to grow as future teaching faculty for medical colleges.</p>
                </div>
            </div>
            <div class="col-md-12 text-center p-2 mt-0">
                <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{route('medical.microbiology.infra')}}" target="_blank"> Click here to view Geo Tagged Infrastructure</a>
            </div>
        </section>
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-box p-3 mt-2" style="height: 190px!important;">
                        <h3 class="tmu-text-primary mt-2 mb-0 "><span>Aims </span><span> </span></h3>
                        <p class="text-justify">The main aim of the Department is to train Students of all courses in the field of Microbiology theoretical as well as practical aspects in its different sub-specialties viz. Molecular laboratory, Bacteriology, Virology, Serology, Immunology, Parasitology, Mycobacteriology and Mycology.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="section-box p-3 mt-2">
                        <h3 class="tmu-text-primary mt-2 mb-0 "><span>Mechanism & </span><span> Methodology </span></h3>
                       <p class="text-justify">To achieve the objectives of teaching the methodology adopted are Theory ,Practical classes ,Laboratory posting in rotation wise in different section of Microbiology Lab, Tutorial classes, Group Discussion, Journals Club, Case Discussion, Guest lectures, Integrated CME, workshops etc. They have to go through the annual reviews in microbiology in the field of medicine & recent advance in different branches.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="section-box p-3 mt-2" style="height: 300px!important;">
                        <h3 class="tmu-text-primary mt-2 mb-0 "><span>Strength </span><span> </span></h3>
                        <ul class="m-ol-list ps-5 fs-14">
                            <li>Excellent physical infrastructure</li>
                            <li>Guest lecture by emeritus faculties</li>
                            <li>Well-equipped Molecular Lab for Research and Diagnostics</li>
                            <li>Well established Ph.D. & Post Graduate Courses with excellent research infrastructure</li>
                            <li>Well-equipped laboratories with sophisticated machines and instruments</li>
                            <li>Qualified and experienced faculty</li>
                            <li>Collaborative projects of department</li>
                       </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="section-box p-3 mt-2">
                        <h3 class="tmu-text-primary mt-2 mb-0 "><span>Opportunities </span><span> </span></h3>
                       <ul class="m-ol-list ps-5 fs-14">
                            <li>Developing strong research base especially in inter-disciplinary areas prioritized by national & international organizations</li>
                            <li>Introduction of inter-disciplinary programmes and value-added courses</li>
                            <li>Collaboration with institutions of repute, industry, hospitals, and NGOs</li>
                            <li>Available PhD Scholars for Research Activities</li>
                            <li>Involvement of alumni in institutional development</li>
                       </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="section-box p-3 mt-2" style="height: 250px!important;">
                        <h3 class="tmu-text-primary mt-2 mb-0 "><span>challenges </span><span> </span></h3>
                        <ul class="m-ol-list ps-5 fs-14">
                            <li>To develop the department as a centre of excellence</li>
                            <li>To enhance socially relevant quality research</li>
                            <li>To obtain support of national and international funding organizations</li>
                            <li>To inculcate research culture among students</li>
                            <li>To establish collaborations with different organizations for resource generation and research consolidation</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="section-box p-3 mt-2">
                        <h3 class="tmu-text-primary mt-2 mb-0 "><span>Future </span><span> Plans</span></h3>
                        <ul class="m-ol-list ps-5 fs-14">
                            <li>To organize state / national level conferences</li>
                          <li>To encourage research and development for excellence level</li>
                          <li>To enhance intake in PG courses</li>
                          <li>To establish externally funded collaborative research labs</li>
                          <li>Arrangement of funds by government @Niti Ayog for establishment of Atal Incubation Center / Research center in Institute</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>

@endsection