@extends('layouts.university.colleges.pharmacy_with_sidebar')
@section('content')

<style>
    .mfp-title {
    position: absolute;
    left: 50%;
    bottom: -70px!important ;
    transform: translateX(-50%);
    width: 80%!important ;
    text-align: center;
    line-height: 1.65;
    color: var(--cnvs-mfp-caption-title-color);
    word-wrap: break-word;
    padding: var(--cnvs-mfp-title-padding);
    background: rgba(39, 60, 68, .2);
    -webkit-backdrop-filter: blur(3em);
    backdrop-filter: blur(3em);
    border-radius: var(--cnvs-mfp-title-border-radius)
}

    @media (max-width: 576px) {
        .mtitle {
            font-size: 0.875rem;
            padding: 6px 8px;
            bottom: revert-layer;
        }
    }
</style>
<div class="main-content mt-3 mt-sm-0 pt-2 pt-sm-5">
<div class="container">
        <h1 class="tmu-text-primary tmu-page-heading mb-2 mt-2"><span>College </span><span> Gallery</span></h1>
        <div class="row">
            <div class="main-content mt-3 mt-sm-0 pt-2 pt-sm-3">
                <div class="container">
                    <div class="row justify-content-center gutter-10" data-lightbox="gallery">
                        <div class="col-md-3 col-sm-6">
                            <a href="{{asset('/assets/img/gallery/collegegallery/pharmacy/nc-II-1.jpg')}}" data-lightbox="gallery-item" class="text-decoration-none" title="NCPRI 2025 – Conference Day 2 Highlights">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/pharmacy/nc-II-1.jpg')}}" alt="Gallery Thumb 2">
                                </div>
                                <h5 class="text-center mt-2"> NCPRI 2025 – Conference Day 2 Highlights</h5>
                            </a>
                            <div class="d-none">
                                <a href="{{asset('/assets/img/gallery/collegegallery/pharmacy/nc-II-2.jpg')}}" data-lightbox="gallery-item" title="NCPRI 2025 – Conference Day 2 Highlights"></a>
                                <a href="{{asset('/assets/img/gallery/collegegallery/pharmacy/nc-II-3.jpg')}}" data-lightbox="gallery-item" title="NCPRI 2025 – Conference Day 2 Highlights"></a>
                                <a href="{{asset('/assets/img/gallery/collegegallery/pharmacy/nc-II-4.jpg')}}" data-lightbox="gallery-item" title="NCPRI 2025 – Conference Day 2 Highlights"></a>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <a href="{{asset('/assets/img/gallery/collegegallery/pharmacy/nc-1.jpg')}}" data-lightbox="gallery-item" class="text-decoration-none" title="National Conference on Pharmaceutical Research and Innovation (NCPRI-2025)">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/pharmacy/nc-1.jpg')}}" alt="Gallery Thumb 2">
                                </div>
                                <h5 class="text-center mt-2"> National Conference NCPRI-2025</h5>
                            </a>
                            <div class="d-none">
                                <a href="{{asset('/assets/img/gallery/collegegallery/pharmacy/nc-2.jpg')}}" data-lightbox="gallery-item" title="National Conference on Pharmaceutical Research and Innovation (NCPRI-2025)"></a>
                                <a href="{{asset('/assets/img/gallery/collegegallery/pharmacy/nc-3.jpg')}}" data-lightbox="gallery-item" title="National Conference on Pharmaceutical Research and Innovation (NCPRI-2025)"></a>
                                <a href="{{asset('/assets/img/gallery/collegegallery/pharmacy/nc-4.jpg')}}" data-lightbox="gallery-item" title="National Conference on Pharmaceutical Research and Innovation (NCPRI-2025)"></a>
                                <a href="{{asset('/assets/img/gallery/collegegallery/pharmacy/nc-5.jpg')}}" data-lightbox="gallery-item" title="National Conference on Pharmaceutical Research and Innovation (NCPRI-2025)"></a>
                                <a href="{{asset('/assets/img/gallery/collegegallery/pharmacy/nc-6.jpg')}}" data-lightbox="gallery-item" title="National Conference on Pharmaceutical Research and Innovation (NCPRI-2025)"></a>
                                <a href="{{asset('/assets/img/gallery/collegegallery/pharmacy/nc-7.jpg')}}" data-lightbox="gallery-item" title="National Conference on Pharmaceutical Research and Innovation (NCPRI-2025)"></a>
                                <a href="{{asset('/assets/img/gallery/collegegallery/pharmacy/nc-8.jpg')}}" data-lightbox="gallery-item" title="National Conference on Pharmaceutical Research and Innovation (NCPRI-2025)"></a>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <a href="{{asset('/assets/img/gallery/collegegallery/pharmacy/wpd-1.jpg')}}" data-lightbox="gallery-item" class="text-decoration-none" title="World Pharmacist Day">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/pharmacy/wpd-1.jpg')}}" alt="Gallery Thumb 2">
                                </div>
                                <h5 class="text-center mt-2">World Pharmacist Day</h5>
                            </a>
                            <div class="d-none">
                                <a href="{{asset('/assets/img/gallery/collegegallery/pharmacy/wpd-2.jpg')}}" data-lightbox="gallery-item" title="World Pharmacist Day"></a>
                                <a href="{{asset('/assets/img/gallery/collegegallery/pharmacy/wpd-3.jpg')}}" data-lightbox="gallery-item" title="World Pharmacist Day"></a>
                                <a href="{{asset('/assets/img/gallery/collegegallery/pharmacy/wpd-4.jpg')}}" data-lightbox="gallery-item" title="World Pharmacist Day"></a>
                                <a href="{{asset('/assets/img/gallery/collegegallery/pharmacy/wpd-5.jpg')}}" data-lightbox="gallery-item" title="World Pharmacist Day"></a>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <a href="{{asset('/assets/img/gallery/collegegallery/pharmacy/gl-1.jpg')}}" data-lightbox="gallery-item" class="text-decoration-none" title="Guest Lecture ">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/pharmacy/gl-1.jpg')}}" alt="Gallery Thumb 2">
                                </div>
                                <h5 class="text-center mt-2">Guest Lecture</h5>
                            </a>
                            <div class="d-none">
                                <a href="{{asset('/assets/img/gallery/collegegallery/pharmacy/gl-3.jpg')}}" data-lightbox="gallery-item" title="Guest Lecture "></a>
                                <a href="{{asset('/assets/img/gallery/collegegallery/pharmacy/gl-4.jpg')}}" data-lightbox="gallery-item" title="Guest Lecture "></a>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <a href="{{asset('/assets/img/gallery/collegegallery/pharmacy/fp-1.jpg')}}" data-lightbox="gallery-item" class="text-decoration-none" title="Fresher's Party">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/pharmacy/fp-1.jpg')}}" alt="Gallery Thumb 2">
                                </div>
                                <h5 class="text-center mt-2">Fresher's Party</h5>
                            </a>
                            <div class="d-none">
                                <a href="{{asset('/assets/img/gallery/collegegallery/pharmacy/fs-2.jpg')}}" data-lightbox="gallery-item" title="Fresher's Party"></a>
                                <a href="{{asset('/assets/img/gallery/collegegallery/pharmacy/fs-3.jpg')}}" data-lightbox="gallery-item" title="Fresher's Party"></a>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <a href="{{asset('/assets/img/gallery/collegegallery/pharmacy/eve.jpg')}}" data-lightbox="gallery-item" class="text-decoration-none" title="College Event">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/pharmacy/eve.jpg')}}" alt="Gallery Thumb 2">
                                </div>
                                <h5 class="text-center mt-2">College Event</h5>
                            </a>
                            <div class="d-none">
                                <a href="{{asset('/assets/img/gallery/collegegallery/pharmacy/eve-1.jpg')}}" data-lightbox="gallery-item" title="College Event"></a>
                                <a href="{{asset('/assets/img/gallery/collegegallery/pharmacy/eve-2.jpg')}}" data-lightbox="gallery-item" title="College Event"></a>
                                <a href="{{asset('/assets/img/gallery/collegegallery/pharmacy/eve-3.jpg')}}" data-lightbox="gallery-item" title="College Event"></a>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <a href="{{asset('/assets/img/gallery/collegegallery/paramedical/fw-1.jpg')}}" data-lightbox="gallery-item" class="text-decoration-none" title="Farewell Party">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/pharmacy/fw-1.jpg')}}" alt="Gallery Thumb 2">
                                </div>
                                <h5 class="text-center mt-2">Farewell Party</h5>
                            </a>
                            <div class="d-none">
                                <a href="{{asset('/assets/img/gallery/collegegallery/pharmacy/fw-2.jpg')}}" data-lightbox="gallery-item" title="Farewell Party"></a>
                                <a href="{{asset('/assets/img/gallery/collegegallery/pharmacy/fw-3.jpg')}}" data-lightbox="gallery-item" title="Farewell Party"></a>
                                <a href="{{asset('/assets/img/gallery/collegegallery/pharmacy/fw-4.jpg')}}" data-lightbox="gallery-item" title="Farewell Party"></a>
                                <a href="{{asset('/assets/img/gallery/collegegallery/pharmacy/fw-5.jpg')}}" data-lightbox="gallery-item" title="Farewell Party"></a>
                                <a href="{{asset('/assets/img/gallery/collegegallery/pharmacy/fw-6.jpg')}}" data-lightbox="gallery-item" title="Farewell Party"></a>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <a href="{{asset('/assets/img/gallery/collegegallery/pharmacy/lab-5.jpg')}}" data-lightbox="gallery-item" class="text-decoration-none" title="Laboratories">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/pharmacy/lab-5.jpg')}}" alt="Gallery Thumb 2">
                                </div>
                                <h5 class="text-center mt-2">Laboratories</h5>
                            </a>
                            <div class="d-none">
                                <a href="{{asset('/assets/img/gallery/collegegallery/pharmacy/lab-2.jpg')}}" data-lightbox="gallery-item" title="Laboratories"></a>
                                <a href="{{asset('/assets/img/gallery/collegegallery/pharmacy/lab-3.jpg')}}" data-lightbox="gallery-item" title="Laboratories"></a>
                                <a href="{{asset('/assets/img/gallery/collegegallery/pharmacy/lab-4.jpg')}}" data-lightbox="gallery-item" title="Laboratories"></a>
                                <a href="{{asset('/assets/img/gallery/collegegallery/pharmacy/lab-1.jpg')}}" data-lightbox="gallery-item" title="Laboratories"></a>

                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <a href="{{asset('/assets/img/gallery/collegegallery/pharmacy/mou-1.webp')}}" data-lightbox="gallery-item" class="text-decoration-none" title="MOU Signs with Adama Herbal Care">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/pharmacy/mou-1.webp')}}" alt="Gallery Thumb 2">
                                </div>
                                <h5 class="text-center mt-2">MOU Signs with Adama Herbal Care</h5>
                            </a>
                            <div class="d-none">
                                <a href="{{asset('/assets/img/gallery/collegegallery/pharmacy/mou-2.webp')}}" data-lightbox="gallery-item" title="MOU Signs with Adama Herbal Care"></a>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <a href="{{asset('/assets/img/gallery/collegegallery/pharmacy/sw-1.jpg')}}" data-lightbox="gallery-item" class="text-decoration-none" title="Pharmacy Sports week">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/pharmacy/sw-1.jpg')}}" alt="Gallery Thumb 2">
                                </div>
                                <h5 class="text-center mt-2">Pharmacy Sports week</h5>
                            </a>
                            <div class="d-none">
                                <a href="{{asset('/assets/img/gallery/collegegallery/pharmacy/sw-2.jpg')}}" data-lightbox="gallery-item" title="Pharmacy Sports week"></a>
                                <a href="{{asset('/assets/img/gallery/collegegallery/pharmacy/sw-3.jpg')}}" data-lightbox="gallery-item" title="Pharmacy Sports week"></a>
                                <a href="{{asset('/assets/img/gallery/collegegallery/pharmacy/sw-4.jpg')}}" data-lightbox="gallery-item" title="Pharmacy Sports week"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
<!-- Bootstrap JS and dependencies -->


@endsection