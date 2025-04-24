@extends('layouts.university.colleges.physical_education_with_sidebar')
@section('content')
    <style>
        .mtitle {
            position: absolute;
            left: 50%;
            bottom: 0;
            /* Position the caption at the bottom of the lightbox */
            transform: translateX(-50%);
            width: auto;
            /* Adjust width to avoid going too close to edges */
            text-align: center;
            line-height: 1.65;
            color: var(--cnvs-mcaption-title-color);
            word-wrap: break-word;
            padding: 8px 10px;
            /* Provide padding for readability */
            background: rgba(39, 60, 68, 0.7);
            /* Darker semi-transparent background for better contrast */
            -webkit-backdrop-filter: blur(5px);
            backdrop-filter: blur(5px);
            border-radius: 8px;
            /* Slight border-radius for a subtle rounded effect */
            box-sizing: border-box;
            /* Ensures padding is inside width */
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

            <div class="row justify-content-center gutter-10" data-lightbox="gallery">
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/physical_education/43.jpg') }}"
                        data-lightbox="gallery-item" class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/physical_education/43.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/physical_education/42.jpg') }}"
                        data-lightbox="gallery-item" class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/physical_education/42.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>

                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/physical_education/2.jpg') }}"
                        data-lightbox="gallery-item" class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/physical_education/2.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/physical_education/3.jpg') }}"
                        data-lightbox="gallery-item" class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/physical_education/3.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/physical_education/4.jpg') }}"
                        data-lightbox="gallery-item" class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/physical_education/4.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/physical_education/5.jpg') }}"
                        data-lightbox="gallery-item" class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/physical_education/5.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>

                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/physical_education/29.jpg') }}"
                        data-lightbox="gallery-item" class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/physical_education/29.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/physical_education/30.jpg') }}"
                        data-lightbox="gallery-item" class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/physical_education/30.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/physical_education/31.jpg') }}"
                        data-lightbox="gallery-item" class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/physical_education/31.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/physical_education/32.jpg') }}"
                        data-lightbox="gallery-item" class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/physical_education/32.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/physical_education/33.jpg') }}"
                        data-lightbox="gallery-item" class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/physical_education/33.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>

                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/physical_education/35.jpg') }}"
                        data-lightbox="gallery-item" class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/physical_education/35.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/physical_education/36.jpg') }}"
                        data-lightbox="gallery-item" class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/physical_education/36.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/physical_education/37.jpg') }}"
                        data-lightbox="gallery-item" class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/physical_education/37.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/physical_education/38.jpg') }}"
                        data-lightbox="gallery-item" class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/physical_education/38.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/physical_education/39.jpg') }}"
                        data-lightbox="gallery-item" class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/physical_education/39.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/physical_education/40.jpg') }}"
                        data-lightbox="gallery-item" class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/physical_education/40.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>

                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/physical_education/6.jpg') }}"
                        data-lightbox="gallery-item" class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/physical_education/6.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/physical_education/7.jpg') }}"
                        data-lightbox="gallery-item" class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/physical_education/7.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>

                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/physical_education/19.jpg') }}"
                        data-lightbox="gallery-item" class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/physical_education/19.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/physical_education/20.jpg') }}"
                        data-lightbox="gallery-item" class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/physical_education/20.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/physical_education/21.jpg') }}"
                        data-lightbox="gallery-item" class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/physical_education/21.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/physical_education/22.jpg') }}"
                        data-lightbox="gallery-item" class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/physical_education/22.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/physical_education/23.jpg') }}"
                        data-lightbox="gallery-item" class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/physical_education/23.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/physical_education/24.jpg') }}"
                        data-lightbox="gallery-item" class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/physical_education/24.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/physical_education/25.jpg') }}"
                        data-lightbox="gallery-item" class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/physical_education/25.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/physical_education/33.jpg') }}"
                        data-lightbox="gallery-item" class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/physical_education/33.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/physical_education/34.jpg') }}"
                        data-lightbox="gallery-item" class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/physical_education/34.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/physical_education/21.jpg') }}"
                        data-lightbox="gallery-item" class="text-decoration-none"
                        title="Strengthening the Foundation – Physical Education Grassroot Initiative">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/physical_education/21.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                    <div class="d-none">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/physical_education/16.webp') }}"
                            data-lightbox="gallery-item"
                            title="Strengthening the Foundation – Physical Education Grassroot Initiative"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/physical_education/13.webp') }}"
                        data-lightbox="gallery-item" class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/physical_education/13.webp') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                    <div class="d-none">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/physical_education/14.webp') }}"
                            data-lightbox="gallery-item" title=""></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/physical_education/15.webp') }}"
                            data-lightbox="gallery-item" title=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
