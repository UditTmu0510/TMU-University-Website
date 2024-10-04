@extends('layouts.university.colleges.medical_with_sidebar')
@section('content')

<link rel="stylesheet" href="{{asset('assets/css/college_overview.css')}}">

<div class="main-content">
    <div class="container">
        <section class="about-section bg-light mt-4">
            <div class="container">
                <div class="text-content p-4">
                    <h1 class="tmu-text-primary tmu-page-heading"><span>Department of </span><span> Obstetrics & Gynaecology </span></h1>
                    <p class="about-p mb-2">The Department of Medicine is one of the prestigious department of the college. The Department has both undergraduate and postgraduate section. The department provides OPD services and 24 hour emergency & ICU services to the patients. Department also provides full time Specialists services in Cardiology, Nephrology, Gastroenterology, Neurology. In addition to these, the subject of Internal Medicine Materials is also taught in the department to the MBBS/MD students.</p>
                    <div class="image-content text-center p-4">
                        <img src="{{asset('/assets/img/college_departments/medical/30.jpg')}}" alt="Learning and Teaching">
                    </div>
                    <p class="about-p mb-2">The Department of Medicine is very well equipped with all equipments and services to provide complete perfect care to all patients under one roof. We have well equipped 46 beds casualty, 11 beds MICU, 10 beds CCU, 5 beds RICU to provide intensive care. We also have facilities like cath lab and bypass surgery, diagnostic and therapeutic endoscopic services, haemodialysis services and neuro lab that provides investigations like EEG, EMG, NCV, BERA.</p>
                    <p class="about-p mb-2">Academic activities are conducted as per MCI guidelines for both UG and PG students. CMEs and Guest lectures are regularly conducted to enlighten the knowledge of students. Students are encouraged to participate and present papers / posters / case reports at state / national level conferences.</p>
                </div>
            </div>
            <div class="col-md-12 text-center p-2 mt-0">
                <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{route('medical.obstetrics.gynaecology.infra')}}" target="_blank"> Click here to view Geo Tagged Infrastructure</a>
            </div>
        </section>
    </div>
</div>
</div>

@endsection