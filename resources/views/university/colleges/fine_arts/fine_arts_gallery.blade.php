@extends('layouts.university.colleges.fine_arts_with_sidebar')
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
            <div class="row">
                <div class="main-content mt-3 mt-sm-0 pt-2 pt-sm-5">
                    <div class="container">
                        <div class="row justify-content-center gutter-10" data-lightbox="gallery">

                            <div class="col-md-3 col-sm-6">
                                <a href="{{ asset('/assets/img/gallery/collegegallery/finearts/21.jpg') }}"
                                    data-lightbox="gallery-item" class="text-decoration-none"
                                    title="Digital Art in the AI Era — Guest Lecture Highlights">
                                    <div class="position-relative">
                                        <img class="img-fluid"
                                            src="{{ asset('/assets/img/gallery/collegegallery/finearts/21.jpg') }}"
                                            alt="International Seminar">
                                    </div>
                                    <h5 class="text-center mt-2"></h5>
                                </a>
                                <div class="d-none">
                                    <a href="{{ asset('/assets/img/gallery/collegegallery/finearts/22.jpg') }}" data-lightbox="gallery-item" title="Digital Art in the AI Era — Guest Lecture Highlights"></a>
                                    <a href="{{ asset('/assets/img/gallery/collegegallery/finearts/23.jpg') }}" data-lightbox="gallery-item" title="Digital Art in the AI Era — Guest Lecture Highlights"></a>
                                    <a href="{{ asset('/assets/img/gallery/collegegallery/finearts/24.jpg') }}" data-lightbox="gallery-item" title="Digital Art in the AI Era — Guest Lecture Highlights"></a>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <a href="{{ asset('/assets/img/gallery/collegegallery/finearts/1.jpg') }}"
                                    data-lightbox="gallery-item" class="text-decoration-none"
                                    title="International Seminar Held at finearts on the Theme 'AI-Driven Future'">
                                    <div class="position-relative">
                                        <img class="img-fluid"
                                            src="{{ asset('/assets/img/gallery/collegegallery/finearts/1.jpg') }}"
                                            alt="International Seminar">
                                    </div>
                                    <h5 class="text-center mt-2"></h5>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <a href="{{ asset('/assets/img/gallery/collegegallery/finearts/2.jpg') }}"
                                    data-lightbox="gallery-item" class="text-decoration-none" title="">
                                    <div class="position-relative">
                                        <img class="img-fluid"
                                            src="{{ asset('/assets/img/gallery/collegegallery/finearts/2.jpg') }}"
                                            alt="">
                                    </div>
                                    <h5 class="text-center mt-2"></h5>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <a href="{{ asset('/assets/img/gallery/collegegallery/finearts/3.jpg') }}"
                                    data-lightbox="gallery-item" class="text-decoration-none" title="">
                                    <div class="position-relative">
                                        <img class="img-fluid"
                                            src="{{ asset('/assets/img/gallery/collegegallery/finearts/3.jpg') }}"
                                            alt="">
                                    </div>
                                    <h5 class="text-center mt-2"></h5>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <a href="{{ asset('/assets/img/gallery/collegegallery/finearts/4.jpg') }}"
                                    data-lightbox="gallery-item" class="text-decoration-none" title="">
                                    <div class="position-relative">
                                        <img class="img-fluid"
                                            src="{{ asset('/assets/img/gallery/collegegallery/finearts/4.jpg') }}"
                                            alt="">
                                    </div>
                                    <h5 class="text-center mt-2"></h5>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <a href="{{ asset('/assets/img/gallery/collegegallery/finearts/5.jpg') }}"
                                    data-lightbox="gallery-item" class="text-decoration-none" title="">
                                    <div class="position-relative">
                                        <img class="img-fluid"
                                            src="{{ asset('/assets/img/gallery/collegegallery/finearts/5.jpg') }}"
                                            alt="">
                                    </div>
                                    <h5 class="text-center mt-2"></h5>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <a href="{{ asset('/assets/img/gallery/collegegallery/finearts/6.jpg') }}"
                                    data-lightbox="gallery-item" class="text-decoration-none" title="">
                                    <div class="position-relative">
                                        <img class="img-fluid"
                                            src="{{ asset('/assets/img/gallery/collegegallery/finearts/6.jpg') }}"
                                            alt="">
                                    </div>
                                    <h5 class="text-center mt-2"></h5>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <a href="{{ asset('/assets/img/gallery/collegegallery/finearts/7.jpg') }}"
                                    data-lightbox="gallery-item" class="text-decoration-none" title="">
                                    <div class="position-relative">
                                        <img class="img-fluid"
                                            src="{{ asset('/assets/img/gallery/collegegallery/finearts/7.jpg') }}"
                                            alt="">
                                    </div>
                                    <h5 class="text-center mt-2"></h5>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <a href="{{ asset('/assets/img/gallery/collegegallery/finearts/8.jpg') }}"
                                    data-lightbox="gallery-item" class="text-decoration-none" title="">
                                    <div class="position-relative">
                                        <img class="img-fluid"
                                            src="{{ asset('/assets/img/gallery/collegegallery/finearts/8.jpg') }}"
                                            alt="">
                                    </div>
                                    <h5 class="text-center mt-2"></h5>
                                </a>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <a href="{{ asset('/assets/img/gallery/collegegallery/finearts/9.jpg') }}"
                                    data-lightbox="gallery-item" class="text-decoration-none" title="">
                                    <div class="position-relative">
                                        <img class="img-fluid"
                                            src="{{ asset('/assets/img/gallery/collegegallery/finearts/9.jpg') }}"
                                            alt="">
                                    </div>
                                    <h5 class="text-center mt-2"></h5>
                                </a>
                            </div>
                            
                            <div class="col-md-3 col-sm-6">
                                <a href="{{ asset('/assets/img/gallery/collegegallery/finearts/20.jpg') }}"
                                    data-lightbox="gallery-item" class="text-decoration-none" title="">
                                    <div class="position-relative">
                                        <img class="img-fluid"
                                            src="{{ asset('/assets/img/gallery/collegegallery/finearts/20.jpg') }}"
                                            alt="">
                                    </div>
                                    <h5 class="text-center mt-2"></h5>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <a href="{{ asset('/assets/img/gallery/collegegallery/finearts/19.jpg') }}"
                                    data-lightbox="gallery-item" class="text-decoration-none" title="">
                                    <div class="position-relative">
                                        <img class="img-fluid"
                                            src="{{ asset('/assets/img/gallery/collegegallery/finearts/19.jpg') }}"
                                            alt="">
                                    </div>
                                    <h5 class="text-center mt-2"></h5>
                                </a>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <a href="{{ asset('/assets/img/gallery/collegegallery/finearts/10.webp') }}"
                                    data-lightbox="gallery-item" class="text-decoration-none" title="">
                                    <div class="position-relative">
                                        <img class="img-fluid"
                                            src="{{ asset('/assets/img/gallery/collegegallery/finearts/10.webp') }}"
                                            alt="">
                                    </div>
                                    <h5 class="text-center mt-2"></h5>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <a href="{{ asset('/assets/img/gallery/collegegallery/finearts/11.webp') }}"
                                    data-lightbox="gallery-item" class="text-decoration-none" title="">
                                    <div class="position-relative">
                                        <img class="img-fluid"
                                            src="{{ asset('/assets/img/gallery/collegegallery/finearts/11.webp') }}"
                                            alt="">
                                    </div>
                                    <h5 class="text-center mt-2"></h5>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <a href="{{ asset('/assets/img/gallery/collegegallery/finearts/12.webp') }}"
                                    data-lightbox="gallery-item" class="text-decoration-none" title="">
                                    <div class="position-relative">
                                        <img class="img-fluid"
                                            src="{{ asset('/assets/img/gallery/collegegallery/finearts/12.webp') }}"
                                            alt="">
                                    </div>
                                    <h5 class="text-center mt-2"></h5>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <a href="{{ asset('/assets/img/gallery/collegegallery/finearts/13.webp') }}"
                                    data-lightbox="gallery-item" class="text-decoration-none" title="">
                                    <div class="position-relative">
                                        <img class="img-fluid"
                                            src="{{ asset('/assets/img/gallery/collegegallery/finearts/13.webp') }}"
                                            alt="">
                                    </div>
                                    <h5 class="text-center mt-2"></h5>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <a href="{{ asset('/assets/img/gallery/collegegallery/finearts/14.jpg') }}"
                                    data-lightbox="gallery-item" class="text-decoration-none" title="">
                                    <div class="position-relative">
                                        <img class="img-fluid"
                                            src="{{ asset('/assets/img/gallery/collegegallery/finearts/14.jpg') }}"
                                            alt="">
                                    </div>
                                    <h5 class="text-center mt-2"></h5>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <a href="{{ asset('/assets/img/gallery/collegegallery/finearts/15.jpg') }}"
                                    data-lightbox="gallery-item" class="text-decoration-none" title="">
                                    <div class="position-relative">
                                        <img class="img-fluid"
                                            src="{{ asset('/assets/img/gallery/collegegallery/finearts/15.jpg') }}"
                                            alt="">
                                    </div>
                                    <h5 class="text-center mt-2"></h5>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <a href="{{ asset('/assets/img/gallery/collegegallery/finearts/16.jpg') }}"
                                    data-lightbox="gallery-item" class="text-decoration-none" title="">
                                    <div class="position-relative">
                                        <img class="img-fluid"
                                            src="{{ asset('/assets/img/gallery/collegegallery/finearts/16.jpg') }}"
                                            alt="">
                                    </div>
                                    <h5 class="text-center mt-2"></h5>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <a href="{{ asset('/assets/img/gallery/collegegallery/finearts/17.jpg') }}"
                                    data-lightbox="gallery-item" class="text-decoration-none" title="">
                                    <div class="position-relative">
                                        <img class="img-fluid"
                                            src="{{ asset('/assets/img/gallery/collegegallery/finearts/17.jpg') }}"
                                            alt="">
                                    </div>
                                    <h5 class="text-center mt-2"></h5>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <a href="{{ asset('/assets/img/gallery/collegegallery/finearts/18.jpg') }}"
                                    data-lightbox="gallery-item" class="text-decoration-none" title="">
                                    <div class="position-relative">
                                        <img class="img-fluid"
                                            src="{{ asset('/assets/img/gallery/collegegallery/finearts/18.jpg') }}"
                                            alt="">
                                    </div>
                                    <h5 class="text-center mt-2"></h5>
                                </a>
                            </div>

                            <div class="col-6 col-md-3 col-sm-6  ">
                                <div class="position-relative">
                                    <video class="d-block w-100" controls>
                                        <source
                                            src="{{ asset('/assets/img/gallery/collegegallery/finearts/Art_Gallery.mp4') }}"
                                            type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content dark justify-content-end align-items-end"
                                            data-hover-animate="fadeIn">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
