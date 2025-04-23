@extends('layouts.university.colleges./medical_with_sidebar')
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
                <a href="{{ asset('/assets/img/gallery/collegegallery/medical/49.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none"
                    title="Street Play & Quiz Drive – World TB Day at TMU">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/medical/49.jpg') }}"
                            alt="International Seminar">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
                <div class="d-none">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/medical/50.jpg') }}"
                        data-lightbox="gallery-item"
                        title="Street Play & Quiz Drive – World TB Day at TMU"></a>

                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/medical/44.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none"
                    title="Meditation Session to promote mental peace and wellness">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/medical/44.jpg') }}"
                            alt="International Seminar">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
                <div class="d-none">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/medical/45.jpg') }}"
                        data-lightbox="gallery-item"
                        title="Meditation Session to promote mental peace and wellness"></a>
                    <a href="{{ asset('/assets/img/gallery/collegegallery/medical/46.jpg') }}"
                        data-lightbox="gallery-item"
                        title="Meditation Session to promote mental peace and wellness"></a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/medical/42.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="World Hypertension Day Highlights">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/medical/42.jpg') }}"
                            alt="World Hypertension Day Highlights">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/medical/41.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/medical/41.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/medical/40.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/medical/40.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/medical/39.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/medical/39.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/medical/38.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/medical/38.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/medical/37.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/medical/37.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/medical/36.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/medical/36.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/medical/35.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/medical/35.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/medical/34.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/medical/34.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/medical/32.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/medical/32.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/medical/31.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/medical/31.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/medical/30.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/medical/30.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/medical/29.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/medical/29.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/medical/28.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/medical/28.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/medical/27.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/medical/27.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/medical/26.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/medical/26.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/medical/25.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/medical/25.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/medical/24.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/medical/24.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/medical/20.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/medical/20.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/medical/22.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/medical/22.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/medical/21.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/medical/21.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/medical/19.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/medical/19.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/medical/18.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/medical/18.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/medical/17.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/medical/17.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/medical/16.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/medical/16.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/medical/15.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/medical/15.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/medical/14.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/medical/14.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/medical/13.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/medical/13.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/medical/12.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/medical/12.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/medical/11.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/medical/11.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/medical/10.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/medical/10.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/medical/9.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/medical/9.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/medical/8.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/medical/8.jpg') }}"
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