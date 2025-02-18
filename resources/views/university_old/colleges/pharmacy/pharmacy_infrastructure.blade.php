@extends('layouts.university.colleges.pharmacy_with_sidebar')
@section('content')


<style>
    .custom-bg {
        background-color: #f9f9f9;
        padding: 50px 0;
        border-radius: 5px;
        margin-top: 20px;
    }

    .custom-btn {
        background-color: #007bff;
        border: none;
        color: white;
    }

    .section-box {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 20px;
        background-color: #fff;
        height: auto;
        transition: transform 0.3s;
    }

    .section-box:hover {
        transform: translateY(-5px);
    }

    .section-title {
        font-size: 1.5em;
        line-height: 1.9em;
        color: #ff7900;
    }
</style>


<div class="main-content">
    <div class="container">

        <section class="about-section bg-light mt-4">
            <div class="container">
                <div class="text-content p-4">
                    <h1 class="tmu-text-primary tmu-page-heading pt-md-5"><span> Pharmacy </span><span> Infrastructure </span></h1>
                </div>
                <div class="image-content text-center p-4">
                    <img src="{{asset('/assets/img/112.jpg')}}" alt="">
                </div>
                <div class="container p-3">

                    <h3 class="tmu-text-primary"><span>Machine</span><span> Room</span></h3>
                    <!-- <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">

                        <a class="grid-item" href="{{asset('/assets/img/infrastructure/colleges/pharmacy/machine_room_2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/infrastructure/colleges/pharmacy/machine_room_2.jpg')}}" alt="Gallery Thumb 2"></a>
                        <a class="grid-item" href="{{asset('/assets/img/infrastructure/colleges/pharmacy/machine_room_3.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/infrastructure/colleges/pharmacy/machine_room_3.jpg')}}" alt="Gallery Thumb 3"></a>
                        <a class="grid-item" href="{{asset('/assets/img/infrastructure/colleges/pharmacy/machine_room_4.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/infrastructure/colleges/pharmacy/machine_room_4.jpg')}}" alt="Gallery Thumb 5"></a>
                        <a class="grid-item" href="{{asset('/assets/img/infrastructure/colleges/pharmacy/machine_room_5.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/infrastructure/colleges/pharmacy/machine_room_5.jpg')}}" alt="Gallery Thumb 5"></a>
                    </div> -->
                    <div class="row justify-content-left gutter-30 col-mb-5 mb-5">
                        <div class="col-sm-4 col-md-4">
                            <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                                <div class="team-image">
                                    <img src="{{asset('/assets/img/infrastructure/colleges/pharmacy/machine_room_1.jpg')}}" height="150px" alt="">
                                </div>
                                <div class="team-desc p-2">
                                    <div class="team-title pt-0">
                                        <h4 class="fs-14">Machine Room </h4>
                                        <span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> College of Pharmacy, TMU Campus</span>
                                        <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/infrastructure/colleges/pharmacy/geotag/machine_room_1.jpg')}}" download>
                                            Download Geo Tag Image
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                                <div class="team-image">
                                    <img src="{{asset('/assets/img/infrastructure/colleges/pharmacy/machine_room_2.jpg')}}" height="150px" alt="">
                                </div>
                                <div class="team-desc p-2">
                                    <div class="team-title pt-0">
                                        <h4 class="fs-14">Machine Room </h4>
                                        <span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> College of Pharmacy, TMU Campus</span>
                                        <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/infrastructure/colleges/pharmacy/geotag/machine_room_2.jpg')}}" download>
                                            Download Geo Tag Image
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                                <div class="team-image">
                                    <img src="{{asset('/assets/img/infrastructure/colleges/pharmacy/machine_room_3.jpg')}}" height="150px" alt="">
                                </div>
                                <div class="team-desc p-2">
                                    <div class="team-title pt-0">
                                        <h4 class="fs-14">Machine Room </h4>
                                        <span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> College of Pharmacy, TMU Campus</span>
                                        <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/infrastructure/colleges/pharmacy/geotag/machine_room_3.jpg')}}" download>
                                            Download Geo Tag Image
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                                <div class="team-image">
                                    <img src="{{asset('/assets/img/infrastructure/colleges/pharmacy/machine_room_4.jpg')}}" height="150px" alt="">
                                </div>
                                <div class="team-desc p-2">
                                    <div class="team-title pt-0">
                                        <h4 class="fs-14">Machine Room </h4>
                                        <span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> College of Pharmacy, TMU Campus</span>
                                        <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/infrastructure/colleges/pharmacy/geotag/machine_room_4.jpg')}}" download>
                                            Download Geo Tag Image
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                                <div class="team-image">
                                    <img src="{{asset('/assets/img/infrastructure/colleges/pharmacy/machine_room_5.jpg')}}" height="150px" alt="">
                                </div>
                                <div class="team-desc p-2">
                                    <div class="team-title pt-0">
                                        <h4 class="fs-14">Machine Room </h4>
                                        <span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> College of Pharmacy, TMU Campus</span>
                                        <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/infrastructure/colleges/pharmacy/geotag/machine_room_5.jpg')}}" download>
                                            Download Geo Tag Image
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </br>
                    <h3 class="tmu-text-primary"><span>Central Instruments</span><span> Facilities</span></h3>
                    <!-- <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">

                        <a class="grid-item" href="{{asset('/assets/img/infrastructure/colleges/pharmacy/cif_1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/infrastructure/colleges/pharmacy/cif_1.jpg')}}" alt="Gallery Thumb 2"></a>
                        <a class="grid-item" href="{{asset('/assets/img/infrastructure/colleges/pharmacy/cif_3.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/infrastructure/colleges/pharmacy/cif_3.jpg')}}" alt="Gallery Thumb 3"></a>
                        <a class="grid-item" href="{{asset('/assets/img/infrastructure/colleges/pharmacy/cif_4.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/infrastructure/colleges/pharmacy/cif_4.jpg')}}" alt="Gallery Thumb 5"></a> -->
                        <!-- <a class="grid-item" href="{{asset('/assets/img/infrastructure/colleges/pharmacy/cif_2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/infrastructure/colleges/pharmacy/cif_2.jpg')}}" alt="Gallery Thumb 5"></a> -->
                        <!-- <a class="grid-item" href="{{asset('/assets/img/infrastructure/colleges/pharmacy/cif_5.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/infrastructure/colleges/pharmacy/cif_5.jpg')}}" alt="Gallery Thumb 5"></a> -->
                        <!-- <a class="grid-item" href="{{asset('/assets/img/infrastructure/colleges/pharmacy/cif_6.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/infrastructure/colleges/pharmacy/cif_6.jpg')}}" alt="Gallery Thumb 5"></a> -->
                    <!-- </div> -->
                    <div class="row justify-content-left gutter-30 col-mb-5 mb-5">
                        <div class="col-sm-4 col-md-4">
                            <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                                <div class="team-image">
                                    <img src="{{asset('/assets/img/infrastructure/colleges/pharmacy/cif_1.jpg')}}" height="150px" alt="">
                                </div>
                                <div class="team-desc p-2">
                                    <div class="team-title pt-0">
                                        <h4 class="fs-14">Central Instruments Facilities</h4>
                                        <span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> College of Pharmacy, TMU Campus</span>
                                        <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/infrastructure/colleges/pharmacy/geotag/cif_1.jpg')}}" download>
                                            Download Geo Tag Image
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                                <div class="team-image">
                                    <img src="{{asset('/assets/img/infrastructure/colleges/pharmacy/cif_2.jpg')}}" height="150px" alt="">
                                </div>
                                <div class="team-desc p-2">
                                    <div class="team-title pt-0">
                                        <h4 class="fs-14">Central Instruments Facilities</h4>
                                        <span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> College of Pharmacy, TMU Campus</span>
                                        <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/infrastructure/colleges/pharmacy/geotag/cif_2.jpg')}}" download>
                                            Download Geo Tag Image
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                                <div class="team-image">
                                    <img src="{{asset('/assets/img/infrastructure/colleges/pharmacy/cif_3.jpg')}}" height="150px" alt="">
                                </div>
                                <div class="team-desc p-2">
                                    <div class="team-title pt-0">
                                        <h4 class="fs-14">Central Instruments Facilities</h4>
                                        <span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> College of Pharmacy, TMU Campus</span>
                                        <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/infrastructure/colleges/pharmacy/geotag/cif_3.jpg')}}" download>
                                            Download Geo Tag Image
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                                <div class="team-image">
                                    <img src="{{asset('/assets/img/infrastructure/colleges/pharmacy/cif_4.jpg')}}" height="150px" alt="">
                                </div>
                                <div class="team-desc p-2">
                                    <div class="team-title pt-0">
                                        <h4 class="fs-14">Central Instruments Facilities</h4>
                                        <span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> College of Pharmacy, TMU Campus</span>
                                        <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/infrastructure/colleges/pharmacy/geotag/cif_4.jpg')}}" download>
                                            Download Geo Tag Image
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                                <div class="team-image">
                                    <img src="{{asset('/assets/img/infrastructure/colleges/pharmacy/cif_5.jpg')}}" height="150px" alt="">
                                </div>
                                <div class="team-desc p-2">
                                    <div class="team-title pt-0">
                                        <h4 class="fs-14">Central Instruments Facilities</h4>
                                        <span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> College of Pharmacy, TMU Campus</span>
                                        <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/infrastructure/colleges/pharmacy/geotag/cif_5.jpg')}}" download>
                                            Download Geo Tag Image
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                                <div class="team-image">
                                    <img src="{{asset('/assets/img/infrastructure/colleges/pharmacy/cif_5.jpg')}}" height="150px" alt="">
                                </div>
                                <div class="team-desc p-2">
                                    <div class="team-title pt-0">
                                        <h4 class="fs-14">Central Instruments Facilities</h4>
                                        <span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> College of Pharmacy, TMU Campus</span>
                                        <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/infrastructure/colleges/pharmacy/geotag/cif_5.jpg')}}" download>
                                            Download Geo Tag Image
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </br>
                    <h3 class="tmu-text-primary"><span>Pharmacology</span><span> Lab</span></h3>
                    <!-- <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">

                        <a class="grid-item" href="{{asset('/assets/img/infrastructure/colleges/pharmacy/pharmacology_3.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/infrastructure/colleges/pharmacy/pharmacology_3.jpg')}}" alt="Gallery Thumb 2"></a>
                        <a class="grid-item" href="{{asset('/assets/img/infrastructure/colleges/pharmacy/pharmacology_2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/infrastructure/colleges/pharmacy/pharmacology_2.jpg')}}" alt="Gallery Thumb 3"></a>

                    </div> -->
                    <div class="row justify-content-left gutter-30 col-mb-5 mb-5">
                        <div class="col-sm-4 col-md-4">
                            <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                                <div class="team-image">
                                    <img src="{{asset('/assets/img/infrastructure/colleges/pharmacy/pharmacology_1.jpg')}}" height="150px" alt="">
                                </div>
                                <div class="team-desc p-2">
                                    <div class="team-title pt-0">
                                        <h4 class="fs-14">Pharmacology Lab</h4>
                                        <span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> College of Pharmacy, TMU Campus</span>
                                        <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/infrastructure/colleges/pharmacy/geotag/pharmacology_1.jpg')}}" download>
                                            Download Geo Tag Image
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                                <div class="team-image">
                                    <img src="{{asset('/assets/img/infrastructure/colleges/pharmacy/pharmacology_2.jpg')}}" height="150px" alt="">
                                </div>
                                <div class="team-desc p-2">
                                    <div class="team-title pt-0">
                                        <h4 class="fs-14">Pharmacology Lab</h4>
                                        <span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> College of Pharmacy, TMU Campus</span>
                                        <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/infrastructure/colleges/pharmacy/geotag/pharmacology_2.jpg')}}" download>
                                            Download Geo Tag Image
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                                <div class="team-image">
                                    <img src="{{asset('/assets/img/infrastructure/colleges/pharmacy/pharmacology_3.jpg')}}" height="150px" alt="">
                                </div>
                                <div class="team-desc p-2">
                                    <div class="team-title pt-0">
                                        <h4 class="fs-14">Pharmacology Lab</h4>
                                        <span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> College of Pharmacy, TMU Campus</span>
                                        <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/infrastructure/colleges/pharmacy/geotag/pharmacology_3.jpg')}}" download>
                                            Download Geo Tag Image
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </br>
                    <h3 class="tmu-text-primary"><span>Pharmaceutics</span><span> Lab</span></h3>
                    <!-- <div class="masonry-thumbs grid-container row row-cols-4 mb-3" data-lightbox="gallery">

                        <a class="grid-item" href="{{asset('/assets/img/infrastructure/colleges/pharmacy/pharmacuetics_3.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/infrastructure/colleges/pharmacy/pharmacuetics_3.jpg')}}" alt="Gallery Thumb 2"></a>
                        <a class="grid-item" href="{{asset('/assets/img/infrastructure/colleges/pharmacy/pharmacuetics_2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('/assets/img/infrastructure/colleges/pharmacy/pharmacuetics_2.jpg')}}" alt="Gallery Thumb 3"></a>

                    </div> -->
                    <div class="row justify-content-left gutter-30 col-mb-5 mb-5">
                        <div class="col-sm-4 col-md-4">
                            <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                                <div class="team-image">
                                    <img src="{{asset('/assets/img/infrastructure/colleges/pharmacy/pharmacuetics_1.jpg')}}" height="150px" alt="">
                                </div>
                                <div class="team-desc p-2">
                                    <div class="team-title pt-0">
                                        <h4 class="fs-14">Pharmaceutics Lab</h4>
                                        <span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> College of Pharmacy, TMU Campus</span>
                                        <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/infrastructure/colleges/pharmacy/geotag/pharmacuetics_1.jpg')}}" download>
                                            Download Geo Tag Image
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                                <div class="team-image">
                                    <img src="{{asset('/assets/img/infrastructure/colleges/pharmacy/pharmacuetics_2.jpg')}}" height="150px" alt="">
                                </div>
                                <div class="team-desc p-2">
                                    <div class="team-title pt-0">
                                        <h4 class="fs-14">Pharmaceutics Lab</h4>
                                        <span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> College of Pharmacy, TMU Campus</span>
                                        <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/infrastructure/colleges/pharmacy/geotag/pharmacuetics_2.jpg')}}" download>
                                            Download Geo Tag Image
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                                <div class="team-image">
                                    <img src="{{asset('/assets/img/infrastructure/colleges/pharmacy/pharmacuetics_3.jpg')}}" height="150px" alt="">
                                </div>
                                <div class="team-desc p-2">
                                    <div class="team-title pt-0">
                                        <h4 class="fs-14">Pharmaceutics Lab</h4>
                                        <span class="fst-normal fs-12 mb-2"><i class="fa-solid fa-location-dot"></i> College of Pharmacy, TMU Campus</span>
                                        <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 mb-4" href="{{asset('/assets/img/infrastructure/colleges/pharmacy/geotag/pharmacuetics_3.jpg')}}" download>
                                            Download Geo Tag Image
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
</div>
</div>
<!-- Bootstrap JS and dependencies -->


@endsection