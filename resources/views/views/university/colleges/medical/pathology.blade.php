@extends('layouts.university.colleges.medical_with_sidebar')
@section('content')

<link rel="stylesheet" href="{{asset('assets/css/college_overview.css')}}">

<div class="main-content">
    <div class="container">
        <section class="about-section bg-light mt-4">
            <div class="container">
                <div class="text-content p-4">
                    <h1 class="tmu-text-primary tmu-page-heading"><span>Department of </span><span> Pathology </span></h1>
                    <p class="about-p mb-2"><b>A Legacy of Excellence</b></p>
                    <p class="about-p mb-2">The Department of Pathology at Teerthanker Mahaveer Medical College and Research Centre is an ultimate destination for Future Pathologists. The course aims to create medical graduates of high ethical standards. Postgraduate students can take advantage of numerous outstanding educational possibilities at TMU. The department serves as a hub for several joint research initiatives that integrate clinical and fundamental research.</p>
                    <p class="about-p mb-2">TMU Hospital, aided by smart facilities that work under constant supervision of experienced pathologists with a high-quality assurance to patients, provides hands-on experience to the University students. The clinical faculty members play a crucial role in diagnosis and blood product management. </p>
                    <div class="image-content text-center p-4">
                        <img src="{{asset('/assets/img/college_departments/medical/pathology/15.jpg')}}" alt="Learning and Teaching">
                    </div>
                    <p class="about-p mb-2">The Department provides emergency and routine lab services along with a 24x7 Blood Bank facility. It has been planned as a complete state-of-the-art investigation service with an academic and research focus. Besides this, students are encouraged and motivated for regular participation in the form of Paper/Poster/Case/Case-reports at State and National level conferences. </p>
                    <p class="about-p mb-2">You'll be well-prepared to seek a PhD by the time you graduate. If you're ready to enter the workforce after your studies, you may pursue an academic career or work as an industrial research assistant. </p>

                </div>
            </div>
            <div class="col-md-12 text-center p-2 mt-0">
                <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{route('medical.pathology.infra')}}" target="_blank"> Click here to view Geo Tagged Infrastructure</a>
            </div>
        </section>
        <div class="container mt-3">
            <div class="row">

                <div class="col-md-6">
                    <div class="section-box p-3 mt-2" style="height: 310px!important;">
                        <h3 class="tmu-text-primary mt-2 mb-0 "><span>Major Research </span><span> Areas </span></h3>
                        <ul class="m-ol-list ps-5 fs-14">
                            <li>Hematology</li>
                            <li>Histopathology</li>
                            <li>Cytopathology</li>
                            <li>Immunohistopathology and Immunocytopathology</li>
                            <li>Blood components and Apheresis</li>
                            <li>Frozen section</li>
                            <li>Clinical Pathology</li>
                        </ul>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="section-box p-3 mt-2">
                        <h3 class="tmu-text-primary mt-2 mb-0 "><span>Infrastructure </span><span> </span></h3>
                        <ul class="m-ol-list ps-5 fs-14">
                            <li>UG Laboratory</li>
                            <li>PG Research Laboratory</li>
                            <li>Demonstration Rooms</li>
                            <li>Central Laboratories</li>
                            <li>Lecture theatre with audio-visual aids</li>
                            <li>Museum</li>
                            <li>Departmental Library</li>
                            <li>Seminar Room</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>

@endsection