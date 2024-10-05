@extends('layouts.university.colleges.dental_with_sidebar')
@section('content')


<link rel="stylesheet" href="{{asset('/assets/css/tmu-timeline.css')}}">
<div class="main-content">
    <div class="container">
        <!-- Experience Start -->
        <div class="experience" id="experience">
            <div class="container">
                <header class="section-header text-center wow zoomIn">
                    <h1 class="tmu-text-primary tmu-page-heading mb-sm-5 mt-md-4"><span>College </span><span> Highlights</span></h1>
                </header>
                <div class="timeline">
                    <div class="timeline-item left wow slideInLeft">
                        <div class="timeline-text">
                            <div class="timeline-date">2005</div>
                            <p> Inaugurated in 2005, the Dental College is a hub of dental excellence, offering BDS, MDS, and PhD programmes in oral healthcare.</p>
                        </div>
                    </div>

                    <div class="timeline-item right wow slideInRight">
                        <div class="timeline-text">
                            <div class="timeline-date">Faculty Strength</div>
                            <p> The TMU Dental College & Research Centre boasts a robust faculty strength of 104 (One Hundred and Four) highly
                                qualified and experienced members.</p>
                        </div>
                    </div>
                    <div class="timeline-item left wow slideInRight">
                        <div class="timeline-text">
                            <div class="timeline-date">Fully Equipped Speciality Clinics</div>
                            <p>The TMU Dental College & Research Centre has nine (9) fully equipped speciality clinics.</p>
                        </div>
                    </div>
                    <div class="timeline-item right wow slideInLeft">
                        <div class="timeline-text">
                            <div class="timeline-date">Satellite Clinic</div>
                            <p>The TMU Dental College & Research Centre operates three (3) satellite clinics: two in rural areas and one in a medical hospital.</p>
                        </div>
                    </div>
                    <div class="timeline-item left wow slideInRight">
                        <div class="timeline-text">
                            <div class="timeline-date">Mobile Dental Van</div>
                            <p>The TMU Dental College & Research Centre has two mobile dental vans, each equipped with four dental chairs.</p>
                        </div>
                    </div>
                    <div class="timeline-item right wow slideInLeft mb-0">
                        <div class="timeline-text">
                            <div class="timeline-date">Labs</div>
                            <p>The TMU Dental College & Research Centre has the following labs: (i) Pre-Clinical Labs: 4, (ii) Ceramic & Casting Labs: 4</p>
                        </div>
                    </div>
                </div>

                <div class="read-more-content">
                    <div class="timeline mt-0">
                        <div class="timeline-item left wow slideInLeft">
                            <div class="timeline-text">
                                <div class="timeline-date">Professional Membership</div>
                                <p>The TMU Dental College & Research Centre is affiliated with the Indian Dental Association and the Restorative Association of Nine Specialities of Dentistry.</p>
                            </div>
                        </div>
                        <div class="timeline-item right wow slideInRight">
                            <div class="timeline-text">
                                <div class="timeline-date">Books & Journals</div>
                                <p>The TMU Dental College & Research Centre's library includes 4,168 books and subscribes to 17 national journals and 42 international journals.</p>
                            </div>
                        </div>
                        <div class="timeline-item left wow slideInLeft">
                            <div class="timeline-text">
                                <div class="timeline-date">E-Journals & E-Books</div>
                                <p> The TMU Dental College & Research Centre provides access to e-journals and e-books through the EBSCO Database, DELNET, and Clinical Key.</p>
                            </div>
                        </div>
                        <div class="timeline-item right wow slideInRight">
                            <div class="timeline-text">
                                <div class="timeline-date">Average Daily OPD</div>
                                <p>The TMU Dental College & Research Centre sees more than 600 patients daily in its outpatient department (OPD).</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="javascript:void(0);" class="tmu-btn btn-1 py-2 mt-lg-5 read-more d-block mx-auto" style="width:fit-content" title="Read More">Read More</a>
            </div>
            <div class="container">
                <h2 class="tmu-text-primary tmu-page-heading mt-md-5 mb-md-5"><span>Community-based </span><span> Learning Facilities</span></h2>
                <div class="row gutter-10 mt-md-4" data-lightbox="gallery">
                    <h3 class="tmu-text-primary mb-0"><span> Amroha Satellite </span><span> Centre</span></h3>
                    <div class="col-md-3 col-sm-6 mt-1">
                        <div class="position-relative">
                            <img class="d-block w-100" src="{{asset('/assets/img/college_departments/dental/satellite/3.jpeg')}}" alt="Gallery Thumb 1">
                            <div class="bg-overlay">
                                <div class="bg-overlay-content dark justify-content-end align-items-end" data-hover-animate="fadeIn">
                                    <a href="{{asset('/assets/img/college_departments/dental/satellite/3.jpeg')}}" class="overlay-trigger-icon size-sm bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item" title="Image 1"><i class="uil uil-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="position-relative">
                            <img class="d-block w-100" src="{{asset('/assets/img/college_departments/dental/satellite/4.jpeg')}}" alt="Gallery Thumb 2">
                            <div class="bg-overlay">
                                <div class="bg-overlay-content dark justify-content-end align-items-end" data-hover-animate="fadeIn">
                                    <a href="{{asset('/assets/img/college_departments/dental/satellite/4.jpeg')}}" class="overlay-trigger-icon size-sm bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item" title="Image 2"><i class="uil uil-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                    <h3 class="tmu-text-primary mb-0 mt-md-3"><span>Haryana Satellite </span><span> Centre</span></h3>
                    <div class="col-md-3 col-sm-6 mt-1">
                        <div class="position-relative">
                            <img class="d-block w-100" src="{{asset('/assets/img/college_departments/dental/satellite/1.jpeg')}}" alt="Gallery Thumb 1">
                            <div class="bg-overlay">
                                <div class="bg-overlay-content dark justify-content-end align-items-end" data-hover-animate="fadeIn">
                                    <a href="{{asset('/assets/img/college_departments/dental/satellite/1.jpeg')}}" class="overlay-trigger-icon size-sm bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item" title="Image 1"><i class="uil uil-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="position-relative">
                            <img class="d-block w-100" src="{{asset('/assets/img/college_departments/dental/satellite/2.jpeg')}}" alt="Gallery Thumb 2">
                            <div class="bg-overlay">
                                <div class="bg-overlay-content dark justify-content-end align-items-end" data-hover-animate="fadeIn">
                                    <a href="{{asset('/assets/img/college_departments/dental/satellite/2.jpeg')}}" class="overlay-trigger-icon size-sm bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item" title="Image 2"><i class="uil uil-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Job Experience End -->
    </div>
</div>
</div>
</div>

@endsection