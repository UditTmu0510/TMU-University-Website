@extends('layouts.university.colleges.medical_with_sidebar')
@section('content')

<link rel="stylesheet" href="{{asset('assets/css/college_overview.css')}}">

<div class="main-content">
    <div class="container">
        <section class="about-section bg-light mt-4">
            <div class="container">
                <div class="text-content p-4">
                    <h1 class="tmu-text-primary tmu-page-heading"><span>Department of </span><span>pulmonary Medicine </span></h1>
                    <p class="about-p mb-2">The Department of Pulmonary Medicine of Teerthanker Mahaveer Medical College and Research Centre caters to a wide spectrum of respiratory patients to provide them with advanced care. Commonly diagnosed and treated respiratory diseases in the TMU Hospital include Chronic Bronchitis, Bronchial Asthma, Pneumonia, Tuberculosis, Pleural Disorders, Carcinoma of the Respiratory Tract, Occupational Lung Diseases, and Interstitial lung disease. People with serious and complex medical challenges related to the lungs and breathing find the answers they need from our pulmonary medicine specialists.</p>
                    <div class="image-content text-center p-4">
                        <img src="{{asset('/assets/img/college_departments/medical/14.jpg')}}" alt="Learning and Teaching">
                    </div>
                    <p class="about-p mb-2">To get practical exposure along with theoretical knowledge, the department offers a Postgraduate programme. The programme aims to prepare students in internal medicine primarily specializing in preventing, diagnosing and treating conditions that affect lungs, bronchial tubes and respiratory system including the nose, pharynx and throat.</p>
                    <p class="about-p mb-2">With the world-class departmental library, get access to the latest edition of all the books of renowned authors. The department also has 9 international, 3 national and 57 e-journals. Every year, fresh additions are made and in the last three years, the department has purchased approx. 116 books.</p>
                    <p class="about-p mb-2">Over the years, the department has steadily grown and emerged as one of the leading specialty centers of the Uttar Pradesh region providing excellence in clinical, interventional, academic and research activities.</p>
                </div>
            </div>
            <div class="col-md-12 text-center p-2 mt-0">
                <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{route('medical.pulmonary.medicine.infra')}}" target="_blank"> Click here to view Geo Tagged Infrastructure</a>
            </div>
        </section>
        <div class="container mt-5">
            <div class="col-md-12">
                <div class="section-box p-3">
                        <h3 class="tmu-text-primary"><span>State-of-the-art</span><span> Pulmonary Facilities</span></h3>
                        <ul class="m-ol-list ps-5">
                            <li>Respiratory Intensive Care Unit (RICU)</li>
                            <li>OPD Complex&nbsp;</li>
                            <li>Pulmonary Function Testing Lab(PFTL)</li>
                            <li>Bronchoscopy And Thoracoscopy Lab</li>
                            <li>Sleep Study Lab</li>
                            <li>Private/ Semi Private Rooms Available</li>
                        </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection