@extends('layouts.university.colleges.medical_with_sidebar')
@section('content')

<link rel="stylesheet" href="{{asset('assets/css/college_overview.css')}}">
<div class="main-content">
    <div class="container">

        <section class="about-section bg-light mt-4">
            <div class="container">
                <div class="text-content p-4">
                    <h1 class="tmu-text-primary tmu-page-heading"><span>Department of </span><span> Physiology </span></h1>
                    <p class="about-p mb-2">The Department of Physiology of TMMC&RC provides world-class Medical Education to M.B.B.S. students. The department has an excellent infrastructure to aid in teaching and research activities. Besides this, it comprises experienced faculty with an immense passion for teaching and research activities. In terms of infrastructure, a separate lecture hall, along with a small discussion room, is assigned to take didactic lectures and group discussions. Well-equipped research laboratories are also available with the latest equipment, including digital physiography.</p>
                    <p class="about-p mb-2">The Departmental library has the latest edition of books including national and international journals to assist in teaching and learning. Tried and tested teaching methodologies are used by the faculties to impart training in the cognitive and psychomotor to undergraduate and postgraduate medical students. It also involves teaching via DOAP (demonstration, observation, assistance and performance) method.</p>
                    <div class="image-content text-center p-4">
                        <img src="{{asset('/assets/img/college_departments/medical/physiology/22.jpg')}}" alt="Learning and Teaching">
                    </div>
                    <p class="about-p mb-2">The faculty members are actively engaged in research work and have published several papers in national and international journals. Faculties continuously update their knowledge by participating in various CME’S, Workshop’s, Conferences and Webinars, thus updating the students on the latest developments in the medical industry.</p>
                    <p class="about-p mb-2">The department not only favors skill development but also delivers training in professionalism involving the correct attitude, ethics and communication (AETCOM) and thus helps in the overall development of the medical graduate. The major field of research includes pain physiology, neurophysiology, nutrition, exercise, physiology, hematology, breathing exercises, autonomic functions and teaching methodology.</p>
                </div>
            </div>
            <div class="col-md-12 text-center p-4 mt-0">
                <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{route('medical.physiology.infra')}}" target="_blank"> Click here to view Geo Tagged Infrastructure</a>
            </div>
        </section>

    </div>
</div>
</div>

@endsection