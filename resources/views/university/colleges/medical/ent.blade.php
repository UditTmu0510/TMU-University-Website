@extends('layouts.university.colleges.medical_with_sidebar')
@section('content')

<link rel="stylesheet" href="{{asset('assets/css/college_overview.css')}}">

<div class="main-content">
    <div class="container">
        <section class="about-section bg-light mt-4">
            <div class="container">
                <div class="text-content p-4">
                    <h1 class="tmu-text-primary tmu-page-heading"><span>Department of </span><span> ENT </span></h1>
                    <p class="about-p mb-2 text-justify">Teerthanker Mahaveer Medical College & Research Centre (TMMC&RC), TMU, with its exceptional academic & infrastructural integrated amenities, has a full-fledged functioning ENT Department to assist students in ensuring overall exposure in that domain.</p>
                    <p class="about-p mb-2 text-justify">The department has a qualified practicing team of Professors, Associate Professors, Assistant Professors, Senior Residents (SR) & Junior Residents (JR) to provide a versatile and in-depth clinical exposure right from the nascent stage of their academic journey.</p>
                    <div class="image-content text-center p-2">
                        <img src="{{asset('/assets/img/college_departments/medical/16.jpg')}}" alt="Learning and Teaching">
                    </div>
                    <p class="about-p mb-2 text-justify">Academic activities are conducted as per MCI guidelines for both UG and PG students. CMEs and Guest lectures are regularly conducted to enlighten the knowledge of students. Students are encouraged to participate and present papers / posters / case reports at state / national level conferences.</p>
                    <p class="about-p mb-2 text-justify">The infrastructure for the department of ENT includes a well-equipped seminar room attached with a museum, OPD, IPD consisting of 40 beds & an independent OT. The OPD operates treatment & therapies like endoscopy, impedance audiometry, BERA, OAE, and PTA with the audiology department.</p>
                    <p class="about-p mb-2 text-justify">A fully equipped temporal bone dissection laboratory with three stations is available for students' use. A library with approximately 125-150 books & journals, both national and international is available in hard copies; moreover, thousands of e-books, subscriptions to EBSCO, Clinical key (Elsevier) are also provided to the students.</p>
                    <p class="about-p mb-2 text-justify">Regular ear, nose, and throat surgeries like mastoidectomy, tympanoplasty, FESS, MLS, DCR, and Head & Neck surgery like thyroid, parotid, and salivary gland surgeries are performed. The OT is well equipped, consisting of 2 operating microscopes, a stryker endoscopy unit, debrider, nerve monitor, etc.</p>
                    <p class="about-p mb-2 text-justify">The college also dispenses hearing aids at nominal cost, ensuring that the financially weaker sections can benefit from the treatments and enjoy a better life.</p>
                    <p class="about-p mb-2 text-justify">The college even owns a multi-super specialty, TMU hospital equipped with the latest tech and team of medical experts on all levels, supporting an efficient growth of the students.</p>
                </div>
            </div>
            <div class="col-md-12 text-center p-2 mt-0">
                <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{route('medical.ent.infra')}}" target="_blank"> Click here to view Geo Tagged Infrastructure</a>
            </div>
        </section>
        <div class="container mt-5">
            <div class="col-md-12">
                <h3 class="tmu-text-primary mb-1"><span>Department</span><span> Gallery</span></h3>
                    <div class="masonry-thumbs grid-container row row-cols-5" data-big="" data-lightbox="gallery">
                        <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/ent/1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/ent/1.jpg')}}" alt="Gallery Thumb 1"></a>
                        <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/ent/2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/ent/2.jpg')}}" alt="Gallery Thumb 2"></a>
                        <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/ent/3.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/ent/3.jpg')}}" alt="Gallery Thumb 3"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection