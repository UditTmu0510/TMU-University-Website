@extends('layouts.university.colleges.law_with_sidebar')
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
        <h1 class="tmu-text-primary tmu-page-heading mb-3 mt-2"><span>College </span><span> Gallery</span></h1>
        <div class="row justify-content-center gutter-10" data-lightbox="gallery">
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/law/1.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/law/1.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/law/2.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/law/2.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/law/3.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/law/3.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/law/4.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/law/4.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/law/5.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/law/5.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/law/6.webp') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/law/6.webp') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/law/7.webp') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/law/7.webp') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/law/8.webp') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/law/8.webp') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/law/9.webp') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/law/9.webp') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/law/10.webp') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/law/10.webp') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/law/11.webp') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/law/11.webp') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/law/12.webp') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/law/12.webp') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/law/13.webp') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/law/13.webp') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/law/14.webp') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/law/14.webp') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/law/15.webp') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/law/15.webp') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/law/16.webp') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/law/16.webp') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/law/17.webp') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/law/17.webp') }}"
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