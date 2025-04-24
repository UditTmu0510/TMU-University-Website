@extends('layouts.university.colleges.education_with_sidebar')
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
                <a href="{{ asset('/assets/img/gallery/collegegallery/education/1.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/education/1.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/education/2.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/education/2.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/education/3.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/education/3.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/education/4.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/education/4.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/education/5.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/education/5.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/education/6.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/education/6.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/education/7.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/education/7.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/education/8.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/education/8.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/education/9.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/education/9.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/education/10.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/education/10.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/education/11.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/education/11.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/education/12.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/education/12.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/education/13.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/education/13.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/education/14.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/education/14.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/education/15.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/education/15.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/education/16.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/education/16.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/education/17.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/education/17.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/education/18.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/education/18.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/education/19.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/education/19.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/education/20.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/education/20.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/education/21.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/education/21.jpg') }}"
                            alt="">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/education/22.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/education/22.jpg') }}"
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