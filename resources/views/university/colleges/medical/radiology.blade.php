@extends('layouts.university.colleges.medical_with_sidebar')
@section('content')

<link rel="stylesheet" href="{{asset('assets/css/college_overview.css')}}">

<div class="main-content">
    <div class="container">
        <section class="about-section bg-light mt-4">
            <div class="container">
                <div class="text-content p-4">
                    <h1 class="tmu-text-primary tmu-page-heading"><span>Department of </span><span> Radiology </span></h1>
                    <p class="about-p mb-2 text-justify">The Department of Radiodiagnosis is one of the core branches of Teerthanker Mahaveer Medical College & Research Centre & Teerthanker Mahaveer Multi Super Specialty Hospital. The department adds immense value to the medical domain as without accurate diagnosis the treatment of the patient is not possible.</p>
                    <p class="about-p mb-2 text-justify">The radiodiagnosis department is playing a major role in the comprehensive diagnosis & management of various routine & tertiary care cases coming to the hospital. The Department provides 24hrs routine & emergency diagnostic service catering to the needs of various specialties & super specialties.</p>
                    <div class="image-content text-center p-2 mb-2">
                        <img src="{{asset('/assets/img/college_departments/medical/27.jpg')}}" alt="Learning and Teaching">
                    </div>
                    <p class="about-p mb-2 text-justify">The Department is comprehensively equipped with state-of-the-art, Radiological diagnostic equipment like high-end 1.5T Siemens MRI machine, 128 slice CT scan, high-end color Doppler/Sonography machines, computer & digital Radiography machines, DSA fluoroscopy system & mammography machines.</p>
                    <p class="about-p mb-2 text-justify">These pieces of equipment are providing an edge in performing various routines and specialized radiological diagnostic services including various interventional procedures.</p>
                    <p class="about-p mb-2 text-justify">It even assists in actively engaging in postgraduate & undergraduate teaching programs. Academic activities are conducted as per NMC guidelines for both UG & PG students. Students are routinely participating in paper/poster presentations, paper publication at the national & international levels. Faculty members in the department are also routinely engaged in various academic activities at local, national & international levels.</p>
                </div>
            </div>
            <div class="col-md-12 text-center p-2 mt-0">
                <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{route('medical.radiology.infra')}}" target="_blank"> Click here to view Geo Tagged Infrastructure</a>
            </div>
        </section>
        <div class="container mt-5">
            <div class="col-md-12">
                    <div class="masonry-thumbs grid-container row row-cols-5" data-big="" data-lightbox="gallery">
                        <a class="grid-item" href="{{asset('/assets/img/gallery/collegegallery/medical/6.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/gallery/collegegallery/medical/6.jpg')}}" alt="Gallery Thumb 1"></a>
                        <a class="grid-item" href="{{asset('/assets/img/gallery/collegegallery/medical/1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/gallery/collegegallery/medical/1.jpg')}}" alt="Gallery Thumb 1"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection