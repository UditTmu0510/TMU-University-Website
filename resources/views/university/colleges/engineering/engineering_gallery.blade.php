@extends('layouts.university.colleges.engineering_with_sidebar')
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
                    <a href="{{ asset('/assets/img/gallery/collegegallery/foe/ic-1.jpg') }}" data-lightbox="gallery-item"
                        class="text-decoration-none"
                        title="International Seminar Held at FOE on the Theme 'AI-Driven Future'">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/foe/ic-1.jpg') }}"
                                alt="International Seminar">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                    <div class="d-none">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/foe/ic-2.jpg') }}"
                            data-lightbox="gallery-item"
                            title="International Seminar Held at FOE on the Theme 'AI-Driven Future'"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/foe/ic-3.jpg') }}"
                            data-lightbox="gallery-item"
                            title="International Seminar Held at FOE on the Theme 'AI-Driven Future'"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/foe/ic-4.jpg') }}"
                            data-lightbox="gallery-item"
                            title="International Seminar Held at FOE on the Theme 'AI-Driven Future'"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/foe/ot-1.jpg') }}" data-lightbox="gallery-item"
                        class="text-decoration-none" title="Virtual Session Recap – Engaging Perspectives">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/foe/ot-1.jpg') }}"
                                alt="Virtual Session Recap – Engaging Perspectives">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                    <div class="d-none">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/foe/ot-2.jpg') }}"
                            data-lightbox="gallery-item"
                            title="Virtual Session Recap – Engaging Perspectives"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/foe/1.jpg') }}" data-lightbox="gallery-item"
                        class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/foe/1.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/foe/2.jpg') }}" data-lightbox="gallery-item"
                        class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/foe/2.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/foe/3.jpg') }}" data-lightbox="gallery-item"
                        class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/foe/3.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/foe/4.jpg') }}" data-lightbox="gallery-item"
                        class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/foe/4.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/foe/5.jpg') }}" data-lightbox="gallery-item"
                        class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/foe/5.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/foe/6.jpg') }}" data-lightbox="gallery-item"
                        class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/foe/6.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/foe/7.jpg') }}" data-lightbox="gallery-item"
                        class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/foe/7.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/foe/8.jpg') }}" data-lightbox="gallery-item"
                        class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/foe/8.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/foe/9.jpg') }}" data-lightbox="gallery-item"
                        class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/foe/9.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/foe/10.jpg') }}" data-lightbox="gallery-item"
                        class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/foe/10.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/foe/11.jpg') }}" data-lightbox="gallery-item"
                        class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/foe/11.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/foe/12.jpg') }}" data-lightbox="gallery-item"
                        class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/foe/12.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/foe/13.jpg') }}" data-lightbox="gallery-item"
                        class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/foe/13.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/foe/14.jpg') }}" data-lightbox="gallery-item"
                        class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/foe/14.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/foe/15.jpg') }}" data-lightbox="gallery-item"
                        class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/foe/15.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/foe/16.jpg') }}" data-lightbox="gallery-item"
                        class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/foe/16.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/foe/17.jpg') }}" data-lightbox="gallery-item"
                        class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/foe/17.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/foe/18.webp') }}" data-lightbox="gallery-item"
                        class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/foe/18.webp') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/foe/19.webp') }}" data-lightbox="gallery-item"
                        class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/foe/19.webp') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/foe/20.webp') }}" data-lightbox="gallery-item"
                        class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/foe/20.webp') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/foe/21.webp') }}" data-lightbox="gallery-item"
                        class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/foe/21.webp') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/foe/22.webp') }}" data-lightbox="gallery-item"
                        class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/foe/22.webp') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/foe/23.webp') }}" data-lightbox="gallery-item"
                        class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/foe/23.webp') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/foe/24.jpg') }}" data-lightbox="gallery-item"
                        class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/foe/24.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/foe/25.jpg') }}" data-lightbox="gallery-item"
                        class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/foe/25.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/foe/26.jpg') }}" data-lightbox="gallery-item"
                        class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/foe/26.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/foe/27.jpg') }}" data-lightbox="gallery-item"
                        class="text-decoration-none" title="">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/foe/27.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2"></h5>
                    </a>
                </div>

            </div>
        </div>
    </div>
    </div>
  
@endsection
