@extends('layouts.university.colleges.medical_with_sidebar')
@section('content')

<link rel="stylesheet" href="{{asset('assets/css/college_overview.css')}}">

<div class="main-content">
    <div class="container">
        <section class="about-section bg-light mt-4">
            <div class="container">
                <div class="text-content p-4">
                    <h1 class="tmu-text-primary tmu-page-heading"><span>Department of </span><span> General Surgery </span></h1>
                    <p class="about-p mb-2">Since the establishment of the department of surgery in 2008, department is fully committed to give it’s services to medical students, patients, society and to the nation by teaching and training of young doctors--the future of Indian medical care. Department trains U.G and P.G by imparting theoretical, practical and moral education and training along with latest advances in the field so as to enable them with recent developments in surgery.</p>
                    <p class="about-p mb-2">Department has excellent infrastructure—with highly experienced and qualified faculty members who very often gain recent advances by attending various workshops and seminars in different parts of country.</p>
                    <p class="about-p mb-2">Department has seven O.P.D chambers 170 bedded indoor wards, surgical intensive care unit with well trained nursing staff providing and serving all medical essentials. Our operation theatres are fully equipped with recent and latest modalities.</p>
                    <div class="image-content text-center p-4">
                        <img src="{{asset('/assets/img/college_departments/medical/17.jpg')}}" alt="Learning and Teaching">
                    </div>
                    <p class="about-p mb-2">Department runs special clinics for breast scanning, male infertility, urological and neurological special clinics.</p>
                    <p class="about-p mb-2">Department of surgery also shares moral responsibility for society--Our team rushed to Kedarnath disaster and served the victims. On humanitarian grounds department served its services to Muzaffarnagar riot victims, free camps are being organised by the department regularly in remote areas, breast screening and surgical problems.</p>
                    <p class="about-p mb-2">Department is very much concerned in promoting prime ministers programme of cleanliness and providing its fullest contribution.</p>
                </div>
            </div>
            <div class="col-md-12 text-center p-2 mt-0">
                <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{route('medical.general.surgery.infra')}}" target="_blank"> Click here to view Geo Tagged Infrastructure</a>
            </div>
        </section>
    </div>
</div>
</div>

@endsection