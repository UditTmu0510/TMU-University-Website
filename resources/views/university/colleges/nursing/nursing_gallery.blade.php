@extends('layouts.university.colleges.nursing_with_sidebar')
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
            <h1 class="tmu-text-primary tmu-page-heading"><span>College </span><span> Gallery</span></h1>

            <div class="container">
                <div class="row justify-content-center gutter-10" data-lightbox="gallery">
                    <div class="col-md-3 col-sm-6">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/nursing/30.jpg') }}"
                            data-lightbox="gallery-item" class="text-decoration-none"
                            title="Celebrating the Journey – PBB.Sc (N) II Year Farewell">
                            <div class="position-relative">
                                <img class="img-fluid"
                                    src="{{ asset('/assets/img/gallery/collegegallery/nursing/30.jpg') }}"
                                    alt="International Seminar">
                            </div>
                            <h5 class="text-center mt-2"></h5>
                        </a>
                        <div class="d-none">
                            <a href="{{ asset('/assets/img/gallery/collegegallery/nursing/31.jpg') }}"
                                data-lightbox="gallery-item"
                                title="Celebrating the Journey – PBB.Sc (N) II Year Farewell"></a>
                            <a href="{{ asset('/assets/img/gallery/collegegallery/nursing/32.jpg') }}"
                                data-lightbox="gallery-item"
                                title="Celebrating the Journey – PBB.Sc (N) II Year Farewell"></a>
                            <a href="{{ asset('/assets/img/gallery/collegegallery/nursing/34.jpg') }}"
                                data-lightbox="gallery-item"
                                title="Celebrating the Journey – PBB.Sc (N) II Year Farewell"></a>
                            <a href="{{ asset('/assets/img/gallery/collegegallery/nursing/35.jpg') }}"
                                data-lightbox="gallery-item"
                                title="Celebrating the Journey – PBB.Sc (N) II Year Farewell"></a>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/nursing/24.jpg') }}"
                            data-lightbox="gallery-item" class="text-decoration-none"
                            title="">
                            <div class="position-relative">
                                <img class="img-fluid"
                                    src="{{ asset('/assets/img/gallery/collegegallery/nursing/24.jpg') }}"
                                    alt="International Seminar">
                            </div>
                            <h5 class="text-center mt-2"></h5>
                        </a>
                        <div class="d-none">
                            <a href="{{ asset('/assets/img/gallery/collegegallery/nursing/25.jpg') }}"
                                data-lightbox="gallery-item"
                                title=""></a>
                            <a href="{{ asset('/assets/img/gallery/collegegallery/nursing/26.jpg') }}"
                                data-lightbox="gallery-item"
                                title=""></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/nursing/27.jpg') }}"
                            data-lightbox="gallery-item" class="text-decoration-none" title="">
                            <div class="position-relative">
                                <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/nursing/27.jpg') }}"
                                    alt="">
                            </div>
                            <h5 class="text-center mt-2"></h5>
                        </a>
						<div class="d-none">
                            <a href="{{ asset('/assets/img/gallery/collegegallery/nursing/28.jpg') }}"
                                data-lightbox="gallery-item"
                                title=""></a>
                            <a href="{{ asset('/assets/img/gallery/collegegallery/nursing/29.jpg') }}"
                                data-lightbox="gallery-item"
                                title=""></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/nursing/1.jpg') }}"
                            data-lightbox="gallery-item" class="text-decoration-none" title="">
                            <div class="position-relative">
                                <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/nursing/1.jpg') }}"
                                    alt="">
                            </div>
                            <h5 class="text-center mt-2"></h5>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/nursing/3.jpg') }}"
                            data-lightbox="gallery-item" class="text-decoration-none" title="">
                            <div class="position-relative">
                                <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/nursing/3.jpg') }}"
                                    alt="">
                            </div>
                            <h5 class="text-center mt-2"></h5>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/nursing/4.jpg') }}"
                            data-lightbox="gallery-item" class="text-decoration-none" title="">
                            <div class="position-relative">
                                <img class="img-fluid"
                                    src="{{ asset('/assets/img/gallery/collegegallery/nursing/4.jpg') }}" alt="">
                            </div>
                            <h5 class="text-center mt-2"></h5>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/nursing/5.jpg') }}"
                            data-lightbox="gallery-item" class="text-decoration-none" title="">
                            <div class="position-relative">
                                <img class="img-fluid"
                                    src="{{ asset('/assets/img/gallery/collegegallery/nursing/5.jpg') }}" alt="">
                            </div>
                            <h5 class="text-center mt-2"></h5>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/nursing/6.png') }}"
                            data-lightbox="gallery-item" class="text-decoration-none" title="">
                            <div class="position-relative">
                                <img class="img-fluid"
                                    src="{{ asset('/assets/img/gallery/collegegallery/nursing/6.png') }}" alt="">
                            </div>
                            <h5 class="text-center mt-2"></h5>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/nursing/7.jpg') }}"
                            data-lightbox="gallery-item" class="text-decoration-none" title="">
                            <div class="position-relative">
                                <img class="img-fluid"
                                    src="{{ asset('/assets/img/gallery/collegegallery/nursing/7.jpg') }}" alt="">
                            </div>
                            <h5 class="text-center mt-2"></h5>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/nursing/8.jpg') }}"
                            data-lightbox="gallery-item" class="text-decoration-none" title="">
                            <div class="position-relative">
                                <img class="img-fluid"
                                    src="{{ asset('/assets/img/gallery/collegegallery/nursing/8.jpg') }}" alt="">
                            </div>
                            <h5 class="text-center mt-2"></h5>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/nursing/9.jpg') }}"
                            data-lightbox="gallery-item" class="text-decoration-none" title="">
                            <div class="position-relative">
                                <img class="img-fluid"
                                    src="{{ asset('/assets/img/gallery/collegegallery/nursing/9.jpg') }}" alt="">
                            </div>
                            <h5 class="text-center mt-2"></h5>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/nursing/10.jpg') }}"
                            data-lightbox="gallery-item" class="text-decoration-none" title="">
                            <div class="position-relative">
                                <img class="img-fluid"
                                    src="{{ asset('/assets/img/gallery/collegegallery/nursing/10.jpg') }}"
                                    alt="">
                            </div>
                            <h5 class="text-center mt-2"></h5>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/nursing/11.jpg') }}"
                            data-lightbox="gallery-item" class="text-decoration-none" title="">
                            <div class="position-relative">
                                <img class="img-fluid"
                                    src="{{ asset('/assets/img/gallery/collegegallery/nursing/11.jpg') }}"
                                    alt="">
                            </div>
                            <h5 class="text-center mt-2"></h5>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/nursing/12.jpg') }}"
                            data-lightbox="gallery-item" class="text-decoration-none" title="">
                            <div class="position-relative">
                                <img class="img-fluid"
                                    src="{{ asset('/assets/img/gallery/collegegallery/nursing/12.jpg') }}"
                                    alt="">
                            </div>
                            <h5 class="text-center mt-2"></h5>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/nursing/13.jpg') }}"
                            data-lightbox="gallery-item" class="text-decoration-none" title="">
                            <div class="position-relative">
                                <img class="img-fluid"
                                    src="{{ asset('/assets/img/gallery/collegegallery/nursing/13.jpg') }}"
                                    alt="">
                            </div>
                            <h5 class="text-center mt-2"></h5>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/nursing/14.jpg') }}"
                            data-lightbox="gallery-item" class="text-decoration-none" title="">
                            <div class="position-relative">
                                <img class="img-fluid"
                                    src="{{ asset('/assets/img/gallery/collegegallery/nursing/14.jpg') }}"
                                    alt="">
                            </div>
                            <h5 class="text-center mt-2"></h5>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/nursing/15.jpg') }}"
                            data-lightbox="gallery-item" class="text-decoration-none" title="">
                            <div class="position-relative">
                                <img class="img-fluid"
                                    src="{{ asset('/assets/img/gallery/collegegallery/nursing/15.jpg') }}"
                                    alt="">
                            </div>
                            <h5 class="text-center mt-2"></h5>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/nursing/16.jpg') }}"
                            data-lightbox="gallery-item" class="text-decoration-none" title="">
                            <div class="position-relative">
                                <img class="img-fluid"
                                    src="{{ asset('/assets/img/gallery/collegegallery/nursing/16.jpg') }}"
                                    alt="">
                            </div>
                            <h5 class="text-center mt-2"></h5>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/nursing/17.jpg') }}"
                            data-lightbox="gallery-item" class="text-decoration-none" title="">
                            <div class="position-relative">
                                <img class="img-fluid"
                                    src="{{ asset('/assets/img/gallery/collegegallery/nursing/17.jpg') }}"
                                    alt="">
                            </div>
                            <h5 class="text-center mt-2"></h5>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/nursing/18.jpg') }}"
                            data-lightbox="gallery-item" class="text-decoration-none" title="">
                            <div class="position-relative">
                                <img class="img-fluid"
                                    src="{{ asset('/assets/img/gallery/collegegallery/nursing/18.jpg') }}"
                                    alt="">
                            </div>
                            <h5 class="text-center mt-2"></h5>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/nursing/19.jpg') }}"
                            data-lightbox="gallery-item" class="text-decoration-none" title="">
                            <div class="position-relative">
                                <img class="img-fluid"
                                    src="{{ asset('/assets/img/gallery/collegegallery/nursing/19.jpg') }}"
                                    alt="">
                            </div>
                            <h5 class="text-center mt-2"></h5>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/nursing/20.jpg') }}"
                            data-lightbox="gallery-item" class="text-decoration-none" title="">
                            <div class="position-relative">
                                <img class="img-fluid"
                                    src="{{ asset('/assets/img/gallery/collegegallery/nursing/20.jpg') }}"
                                    alt="">
                            </div>
                            <h5 class="text-center mt-2"></h5>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/nursing/21.jpg') }}"
                            data-lightbox="gallery-item" class="text-decoration-none" title="">
                            <div class="position-relative">
                                <img class="img-fluid"
                                    src="{{ asset('/assets/img/gallery/collegegallery/nursing/21.jpg') }}"
                                    alt="">
                            </div>
                            <h5 class="text-center mt-2"></h5>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/nursing/22.jpg') }}"
                            data-lightbox="gallery-item" class="text-decoration-none" title="">
                            <div class="position-relative">
                                <img class="img-fluid"
                                    src="{{ asset('/assets/img/gallery/collegegallery/nursing/22.jpg') }}"
                                    alt="">
                            </div>
                            <h5 class="text-center mt-2"></h5>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/nursing/23.jpg') }}"
                            data-lightbox="gallery-item" class="text-decoration-none" title="">
                            <div class="position-relative">
                                <img class="img-fluid"
                                    src="{{ asset('/assets/img/gallery/collegegallery/nursing/23.jpg') }}"
                                    alt="">
                            </div>
                            <h5 class="text-center mt-2"></h5>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
