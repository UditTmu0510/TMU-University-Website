@extends('layouts.university.colleges.medical_with_sidebar')
@section('content')

<link rel="stylesheet" href="{{asset('assets/css/college_overview.css')}}">

<div class="main-content">
    <div class="container">
        <section class="about-section bg-light mt-4">
            <div class="container">
                <div class="text-content p-4">
                    <h1 class="tmu-text-primary tmu-page-heading"><span>Department of </span><span>Forensic Medicine </span></h1>
                    <p class="about-p mb-2">The department of Forensic Medicine and Toxicology was founded in year 2008. At present department is engaged in teaching, training and research. The department is actively engaged in undergraduate and postgraduate teaching activities.</p>
                    <h3 class="tmu-text-primary mb-0 mt-2 fs-16"><span>Specialized </span><span> Services</span></h3>
                    <p class="about-p mb-2">The department provides scientifically proven methods of preparing of Medico-legal reports and post mortem examinations to MBBS students as well as MD students of Forensic Medicine and other specialties, so that in future they will be well versed with the legalities of their fields.</p>
                    <div class="image-content text-center p-4">
                        <img src="{{asset('/assets/img/college_departments/medical/ForensicMedicine/28.jpg')}}" alt="Learning and Teaching">
                    </div>
                    <h3 class="tmu-text-primary mb-0 mt-2 fs-16"><span>Research</span><span> Activities</span></h3>
                    <p class="about-p mb-2">The departmental teaching faculty has published various research papers at State, National and International journals as well as they are associated with respective associations at different levels to serve the society & for betterment of the subject.</p>
                    <h3 class="tmu-text-primary mb-0 mt-2 fs-16"><span>Academic </span><span> Activities</span></h3>
                    <p class="about-p mb-2">The department has been organizing Guest Lectures from Imminent faculties from all over India. The department is also organizing informative lecture to different schools of Moradabad (U.P.) to sensitize them for Corporal Punishment, Medico-legal aspects of Road side accidents etc.</p>
                </div>
            </div>
            <div class="col-md-12 text-center p-2 mt-0">
                <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{route('medical.forensic.medicine.infra')}}" target="_blank"> Click here to view Geo Tagged Infrastructure</a>
            </div>
        </section>
    </div>
</div>
</div>

@endsection