@extends('layouts.university.colleges.fine_arts_with_sidebar')
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
                <div class="main-content mt-3 mt-sm-0 pt-2 pt-sm-5">
                    <div class="container">
                        <div class="row justify-content-center gutter-10" data-lightbox="gallery">

                            <div class="col-md-3 col-sm-6">
                                <a href="{{ asset('/assets/img/gallery/collegegallery/finearts/25.jpg') }}"
                                    data-lightbox="gallery-item" class="text-decoration-none"
                                    title="Art That Unites – TMU's Youth Showcase">
                                    <div class="position-relative">
                                        <img class="img-fluid"
                                            src="{{ asset('/assets/img/gallery/collegegallery/finearts/25.jpg') }}"
                                            alt="International Seminar">
                                    </div>
                                    <h5 class="text-center mt-2"></h5>
                                </a>
                                <div class="d-none">
                                    <a href="{{ asset('/assets/img/gallery/collegegallery/finearts/26.jpg') }}" data-lightbox="gallery-item" title="Art That Unites – TMU's Youth Showcase"></a>
                                    <a href="{{ asset('/assets/img/gallery/collegegallery/finearts/27.jpg') }}" data-lightbox="gallery-item" title="Art That Unites – TMU's Youth Showcase"></a>
                                    <a href="{{ asset('/assets/img/gallery/collegegallery/finearts/28.jpg') }}" data-lightbox="gallery-item" title="Art That Unites – TMU's Youth Showcase"></a>
                                    <a href="{{ asset('/assets/img/gallery/collegegallery/finearts/29.jpg') }}" data-lightbox="gallery-item" title="Art That Unites – TMU's Youth Showcase"></a>
                                    <a href="{{ asset('/assets/img/gallery/collegegallery/finearts/30.jpg') }}" data-lightbox="gallery-item" title="Art That Unites – TMU's Youth Showcase"></a>
                                </div>
                            </div>

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
