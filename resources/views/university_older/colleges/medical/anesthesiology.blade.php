@extends('layouts.university.colleges.medical_with_sidebar')
@section('content')

<link rel="stylesheet" href="{{asset('assets/css/college_overview.css')}}">

<div class="main-content">
    <div class="container">
        <section class="about-section bg-light mt-4">
            <div class="container">
                <div class="text-content p-4">
                    <h1 class="tmu-text-primary tmu-page-heading"><span>Department of </span><span> Anesthesiology </span></h1>
                    <p class="about-p mb-2">The Department of Anesthesiology is an independent Department of the TMMC&RC, that provides the best grooming for the undergraduate and postgraduate medical students helping them to be professionals with social and clinical sensibility and research-oriented mind-set.</p>
                    <p class="about-p mb-2">The Department of Anaesthesiology has several sub-specialties, which start from Pre-operative services (PAC) and provide peri-operative care to Obstetric, Neurosurgery, Cardiac Surgery, Plastic & Reconstructive Surgery, Pediatric, Orthopedic Surgery, Emergency & Trauma patients, etc.</p>
                    <p class="about-p mb-2">The Department of Anesthesiology has a well-equipped Intensive Care Unit (ICU), thus providing end-to-end care to critically ill patients together with training of post-graduate students at clinical and research levels.</p>
                    <div class="image-content text-center p-4">
                        <img src="{{asset('/assets/img/college_departments/medical/7.jpg')}}" alt="Learning and Teaching">
                    </div>
                    <p class="about-p mb-2">Services for Acute/Chronic Pain patients are also provided by the Department by a well-equipped Pain Clinic. The department also works with the TMU Multi super speciality hospital by providing a conducive learning experience to the students of UG & PG level.</p>
                    <p class="about-p mb-2">The Department offers a three-year residency training program, which includes training in Ethics, Patient Safety, Perioperative Medicine, Pain Management, and every other sphere of anesthesia specialties. Academics including MBBS students, intern trainees, post-graduates, and senior residents, are trained as per NMC guidelines with routine exposure to CMEs, Lectures, Seminars, and Case-oriented Discussions. We pay special attention to research & training for the next generation of anesthesiologists and has established a research-training continuum bridging between medical student and faculty.</p>
                    <p class="about-p mb-2">The University along with the medical college ensure that the students can have an interactive plus relative experience of the subject.</p>
                </div>
            </div>
            <div class="col-md-12 text-center p-2 mt-0">
                <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{ route('medical.anesthesiology.infra')}}" target="_blank"> Click here to view Geo Tagged Infrastructure</a>
            </div>
        </section>
        <div class="container mt-5">
            <div class="col-md-12">
                <h3 class="tmu-text-primary mb-1"><span>Department</span><span> Gallery</span></h3>
                    <div class="masonry-thumbs grid-container row row-cols-5" data-big="" data-lightbox="gallery">
                        <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/anesthesiology/1.jfif')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/anesthesiology/1.jfif')}}" alt="Gallery Thumb 1"></a>
                        <a class="grid-item" href="{{asset('/assets/img/college_departments/medical/anesthesiology/1.jfif')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/college_departments/medical/anesthesiology/1.jfif')}}" alt="Gallery Thumb 2"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection