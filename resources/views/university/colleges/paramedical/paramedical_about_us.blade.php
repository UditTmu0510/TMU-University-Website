@extends('layouts.university.colleges.paramedical_with_sidebar')
@section('content')

<link rel="stylesheet" href="assets/css/college_overview.css">


<div class="main-content">
    <div class="container">
        <div class="banner text-white text-center p-4 rounded"
            style="height: 20vh; background-color: #001055;">
            <h2 style="color: #fff; padding:1.5rem;">College Overview</h2>
        </div>

        <section class="about-section mt-4">
            <div class="container">
                <div class="text-content p-4">
                    <h1 class="tmu-text-primary tmu-page-heading"><span>Welcome to TMU College</span><span> of Paramedical Sciences</span></h1>
                    <p class="about-p mb-4 text-justify">The College of Paramedical Sciences was established in the year 2010 to provide trained, qualified, technical personnel in the field of Paramedical Science to support the medical profession. The objective of the Paramedical Science education programme is to provide educational opportunities that develop essential skills in the paramedical field. The emphasis of the Paramedical Science education programme is on developing a cadre of small entrepreneurs, especially from amongst girls, women & rural youth.</p>
                </div>
                <div class="image-content text-center p-4">
                    <img src="{{asset('assets/img/112.jpg')}}" alt="Learning and Teaching">
                </div>
                <div class="container p-3">
                    <p class="about-p mb-4 text-justify">Paramedics form an essential part of pre-hospital emergency services, providing primary medical and trauma care.Paramedics need to work in rotational shifts and must possess the presence of mind to make correct decisions during emergencies. Major areas of work in the field of paramedical sciences are spinal injury management, fracture management, obstetrics, management of burns and assessment, and evaluation of general incident scene. A person working in the field of paramedicine must be well acquainted with medical equipment maintenance procedures, radio operating procedures, and emergency vehicle operations.</p>
                </div>
                <div class="container mt-3">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="section-box p-3">
                                <h3 class="tmu-text-primary mb-2"><span>Major </span><span>Strength </span></h3>
                                <ul class="m-ol-list ps-4 text-justify">
                                    <li>The College of Paramedical Sciences conducts specialised training in four disciplines by qualified professionals.</li>
                                    <li>Forensic Science discipline provides exposure and practical training for investigation of accident and crime scenes. Study of Radiography and Imaging Technology prepares professionals and technicians proficient in use and interpretation of radiological imaging technologies using X-Ray, Color Doppler, Ultrasound, EEG, CT-Scan and MRI.</li>
                                    <li>Medical Laboratory Technology focuses on diagnosis, treatment and prevention of diseases through clinical laboratory technologies.</li>
                                    <li>Optometry discipline trains ophthalmic technicians who can assess ocular motility disorders and errors of refraction. A paramedic may find opportunities to work in government hospitals, private hospitals, clinics and trauma centers. Paramedical professionals can work as medical lab technicians, radiography technicians, radiologists, physiotherapists, speech therapists and audiologists, dialysis therapists, emergency technicians, emergency care practitioners, perfusion technicians, cardiac technicians, and respiratory therapists.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</div>
</div>
<!-- Bootstrap JS and dependencies -->



@endsection