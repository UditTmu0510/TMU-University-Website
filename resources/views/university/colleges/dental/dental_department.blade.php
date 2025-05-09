@extends('layouts.university.colleges.dental_with_sidebar')
@section('content')

<div class="main-content">
    <div class="container">
        <h1 class="tmu-text-primary tmu-page-heading pt-md-5"><span>Dental Science </span><span> Departments</span></h1>
        <div class="row col-mb-15">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <!-- Card -->
                <div class="card shadow-sm college_departments mb-4">
                    <img src="{{asset('/assets/img/college_departments/dental/cde.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">

                        <h4 class="mb-2">Conservative Dentistry & Endodontics</h4>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                        <div>
                        </div>
                        <a href="{{route('dental.conservative.dentistry.endodontics')}}" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                            More</a>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card shadow-sm college_departments mb-4">
                    <img src="{{asset('/assets/img/college_departments/dental/om.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="mb-2">Oral & Maxillofacial Surgery</h4>

                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                        <div>
                        </div>
                        <a href="{{route('dental.oral.maxillofacial.surgery')}}" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                            More</a>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card shadow-sm college_departments mb-4">
                    <img src="{{asset('/assets/img/college_departments/dental/dd.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">

                        <h4 class="mb-2">Orthodontics & Dentofacial Orthopaedics</h4>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                        <div>
                        </div>
                        <a href="{{route('dental.orthodontics')}}" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                            More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card shadow-sm college_departments mb-4">
                    <img src="{{asset('/assets/img/college_departments/dental/pcb.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">

                        <h4 class="mb-2">Prosthodontics and Crown & Bridge</h4>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                        <div>
                        </div>
                        <a href="{{route('dental.Prosthodontics')}}" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                            More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card shadow-sm college_departments mb-4">
                    <img src="{{asset('/assets/img/college_departments/dental/ppd.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">

                        <h4 class="mb-2">Pediatric & Preventive Dentistry</h4>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                        <div>
                        </div>
                        <a href="{{route('dental.pediatric')}}" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                            More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card shadow-sm college_departments mb-4">
                    <img src="{{asset('/assets/img/college_departments/dental/pgy.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">

                        <h4 class="mb-2">Periodontology</h4>
                        <p>&nbsp;</p>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                        <div>
                        </div>
                        <a href="{{route('dental.periodontology')}}" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                            More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card shadow-sm college_departments mb-4">
                    <img src="{{asset('/assets/img/college_departments/dental/phd.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">

                        <h4 class="mb-2">Public Health Dentistry</h4>
                        <p>&nbsp;</p>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                        <div>
                        </div>
                        <a href="{{route('dental.public.health')}}" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                            More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card shadow-sm college_departments mb-4">
                    <img src="{{asset('/assets/img/college_departments/dental/omr.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">

                        <h4 class="mb-2">Oral Medicine & Radiology</h4>

                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                        <div>
                        </div>
                        <a href="{{route('dental.oral.medicine')}}" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                            More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card shadow-sm college_departments">
                    <img src="{{asset('/assets/img/college_departments/dental/opm.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">

                        <h4 class="mb-2">Oral Pathology & Microbiology</h4>
                        <p>&nbsp;</p>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                        <div>
                        </div>
                        <a href="{{route('dental.oral.pathology')}}" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                            More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h2 class="tmu-text-primary tmu-page-heading mb-5 mt-5"><span> Basic Science </span><span> Departments</span></h2>
        <div class="row mb-md-5">
            <hr class="horizontal-line">
            <button class="careers-accordion">General Human Anatomy<span class="icon">+</span></button>
            <div class="panel active">
                <p>Through knowledge of general human anatomy with special emphasis on head and neck, cadaver dissection and detailed study of hard and soft tissues of the body, the department boasts of an excellent museum with lifesize models and charts.
                    The department trains the students to understand different anatomical structures of the human body, especially the head and neck region.</p>
                <p>It also teaches the histological features of normal structures of the body.</p>
            </div>
            <hr class="horizontal-line">
            <button class="careers-accordion">Pathology and Microbiology <span class="icon">+</span></button>
            <div class="panel">
                <p>Medical microbiology deals with the causative agents of infectious diseases, the ways in which they produce disease in the human body and essential information for diagnosis and treatment. Most of the oral diseases are caused by microorganisms and they also cause post-operative complications.</p>
                <p>Therefore, it is important to study microorganisms, the disease, proliferation and aseptic techniques.</p>
                <ul class="m-ol-list ps-5">
                    <li>Checking of Dental Caries by Snyder Test.</li>
                    <li>Culturing of Oral Flora.</li>
                    <li>Antibiotic Sensitivity Testing.</li>
                    <li>Lab Diagnosis of Enteric Fever, TB, Syphilis, Hepatitis and Diphtheria.</li>
                </ul>
                <p>The laboratory is equipped with binocular microscopes, sterilisation instruments, aerobic and anaerobic culture methods and necessary nutrient media.</p>
                <p>Complete urine analysis and haemogram with Hb estimation, blood grouping and haematocrit investigations are also undertaken here. Many histopathological slides and specimens are available for case studies.</p>
            </div>
            <hr class="horizontal-line">
            <button class="careers-accordion">Pharmocology<span class="icon">+</span></button>
            <div class="panel">
                <p>The department trains the students to understand the therapeutic and the toxic effects of various drugs on the human body as well as to acquire knowledge of their use in managing diseases.</p>
            </div>
            <hr class="horizontal-line">
            <button class="careers-accordion">Physiology & Biochemistry <span class="icon">+</span></button>
            <div class="panel">
                <p>Physiology and biochemistry are those disciplines which link basic science with clinical medicine and dentistry. It is integrative and encompasses everything from the study of molecules to the study of organ systems and their interactions which allow us to function as human beings.</p>
            </div>
            <hr class="horizontal-line">
            <button class="careers-accordion">General Medicine <span class="icon">+</span></button>
            <div class="panel">
                <p>The majority of medically compromised patients need oral health care, hence a working knowledge of the multitude of compromised conditions is essential for dental professionals. The curriculum during the 3rd professional year of BDS includes training in general medicine. The students acquire knowledge and skills in analysing findings from patient’s history and signs and symptoms.
                    Special emphasis is placed on assessment of Cardiovascular, endocrine, metabolic, respiratory, renal diseases and blood dyscrasias.</p>
            </div>
            <hr class="horizontal-line">
            <button class="careers-accordion">General Surgery <span class="icon">+</span></button>
            <div class="panel">
                <p>In General Surgery students are familiarised with principles of general surgery and common general surgical procedures. Evaluation of patients for general aneasthetic technique and management of emergencies along with intravenous seduction is taught.</p>
            </div>
            <hr class="horizontal-line">
        </div>
    </div>
</div>
</div>
<!-- Bootstrap JS and dependencies -->


@endsection