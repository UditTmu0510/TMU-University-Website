@extends('layouts.university.colleges.law_with_sidebar')
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
        <h1 class="tmu-text-primary tmu-page-heading mb-3 mt-2"><span>College </span><span> Gallery</span></h1>
        <div class="row justify-content-center gutter-10" data-lightbox="gallery">

            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/law/lc-1.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="Empowering Change – Dowry Law Awareness for a Viksit Bharat">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/law/lc-1.jpg') }}"
                            alt="Empowering Change – Dowry Law Awareness for a Viksit Bharat">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
                <div class="d-none">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/law/lc-2.jpg') }}"
                        data-lightbox="gallery-item"
                        title="Empowering Change – Dowry Law Awareness for a Viksit Bharat"></a>
                    <a href="{{ asset('/assets/img/gallery/collegegallery/law/lc-3.jpg') }}"
                        data-lightbox="gallery-item"
                        title="Empowering Change – Dowry Law Awareness for a Viksit Bharat"></a>
                    <a href="{{ asset('/assets/img/gallery/collegegallery/law/lc-4.jpg') }}"
                        data-lightbox="gallery-item"
                        title="Empowering Change – Dowry Law Awareness for a Viksit Bharat"></a>
                    <a href="{{ asset('/assets/img/gallery/collegegallery/law/lc-5.jpg') }}"
                        data-lightbox="gallery-item"
                        title="Empowering Change – Dowry Law Awareness for a Viksit Bharat"></a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{ asset('/assets/img/gallery/collegegallery/law/lfs-1.jpg') }}" data-lightbox="gallery-item"
                    class="text-decoration-none" title="Law Fresher’s Party 2025 – Welcoming Legal Minds">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/law/lfs-1.jpg') }}"
                            alt="Law Fresher’s Party 2025 – Welcoming Legal Minds">
                    </div>
                    <h5 class="text-center mt-2"></h5>
                </a>
                <div class="d-none">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/law/lfs-2.jpg') }}"
                        data-lightbox="gallery-item"
                        title="Law Fresher’s Party 2025 – Welcoming Legal Minds"></a>
                    <a href="{{ asset('/assets/img/gallery/collegegallery/law/lfs-3.jpg') }}"
                        data-lightbox="gallery-item"
                        title="Law Fresher’s Party 2025 – Welcoming Legal Minds"></a>
                    <a href="{{ asset('/assets/img/gallery/collegegallery/law/lfs-4.jpg') }}"
                        data-lightbox="gallery-item"
                        title="Law Fresher’s Party 2025 – Welcoming Legal Minds"></a>
                    <a href="{{ asset('/assets/img/gallery/collegegallery/law/lfs-5.jpg') }}"
                        data-lightbox="gallery-item"
                        title="Law Fresher’s Party 2025 – Welcoming Legal Minds"></a>
                    <a href="{{ asset('/assets/img/gallery/collegegallery/law/lfs-6.jpg') }}"
                        data-lightbox="gallery-item"
                        title="Law Fresher’s Party 2025 – Welcoming Legal Minds"></a>
                </div>
            </div>
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