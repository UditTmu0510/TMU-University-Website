@extends('layouts.university.colleges.nursing_with_sidebar')
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
            <h1 class="tmu-text-primary tmu-page-heading"><span>College </span><span> Gallery</span></h1>

            <div class="container">
                <div class="row justify-content-center gutter-10" data-lightbox="gallery">
                    <div class="col-md-3 col-sm-6">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/nursing/42.jpg') }}"
                            data-lightbox="gallery-item" class="text-decoration-none"
                            title="TMCON Hosts Expert Talk on VR & Cardiac Recovery">
                            <div class="position-relative">
                                <img class="img-fluid"
                                    src="{{ asset('/assets/img/gallery/collegegallery/nursing/42.jpg') }}"
                                    alt="Guest lecture">
                            </div>
                            <h5 class="text-center mt-2"></h5>
                        </a>
                        <div class="d-none">
                            <a href="{{ asset('/assets/img/gallery/collegegallery/nursing/43.jpg') }}"
                                data-lightbox="gallery-item"
                                title="TMCON Hosts Expert Talk on VR & Cardiac Recovery"></a>
                            <a href="{{ asset('/assets/img/gallery/collegegallery/nursing/44.jpg') }}"
                                data-lightbox="gallery-item"
                                title="TMCON Hosts Expert Talk on VR & Cardiac Recovery"></a>
                            <a href="{{ asset('/assets/img/gallery/collegegallery/nursing/45.jpg') }}"
                                data-lightbox="gallery-item"
                                title="TMCON Hosts Expert Talk on VR & Cardiac Recovery"></a>
                            <a href="{{ asset('/assets/img/gallery/collegegallery/nursing/46.jpg') }}"
                                data-lightbox="gallery-item"
                                title="TMCON Hosts Expert Talk on VR & Cardiac Recovery"></a>
                            <a href="{{ asset('/assets/img/gallery/collegegallery/nursing/47.jpg') }}"
                                data-lightbox="gallery-item"
                                title="TMCON Hosts Expert Talk on VR & Cardiac Recovery"></a>
                            <a href="{{ asset('/assets/img/gallery/collegegallery/nursing/48.jpg') }}"
                                data-lightbox="gallery-item"
                                title="TMCON Hosts Expert Talk on VR & Cardiac Recovery"></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/nursing/36.jpg') }}"
                            data-lightbox="gallery-item" class="text-decoration-none"
                            title="Exploring AI in Fetal Health – Lecture Recap">
                            <div class="position-relative">
                                <img class="img-fluid"
                                    src="{{ asset('/assets/img/gallery/collegegallery/nursing/36.jpg') }}"
                                    alt="Guest lecture">
                            </div>
                            <h5 class="text-center mt-2"></h5>
                        </a>
                        <div class="d-none">
                            <a href="{{ asset('/assets/img/gallery/collegegallery/nursing/37.jpg') }}"
                                data-lightbox="gallery-item"
                                title="Exploring AI in Fetal Health – Lecture Recap"></a>
                            <a href="{{ asset('/assets/img/gallery/collegegallery/nursing/38.jpg') }}"
                                data-lightbox="gallery-item"
                                title="Exploring AI in Fetal Health – Lecture Recap"></a>
                            <a href="{{ asset('/assets/img/gallery/collegegallery/nursing/39.jpg') }}"
                                data-lightbox="gallery-item"
                                title="Exploring AI in Fetal Health – Lecture Recap"></a>
                            <a href="{{ asset('/assets/img/gallery/collegegallery/nursing/40.jpg') }}"
                                data-lightbox="gallery-item"
                                title="Exploring AI in Fetal Health – Lecture Recap"></a>
                            <a href="{{ asset('/assets/img/gallery/collegegallery/nursing/41.jpg') }}"
                                data-lightbox="gallery-item"
                                title="Exploring AI in Fetal Health – Lecture Recap"></a>
                        </div>
                    </div>

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
                            data-lightbox="gallery-item" class="text-decoration-none" title="Caring for Little Lives – Pediatric Lab Activities">
                            <div class="position-relative">
                                <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/nursing/3.jpg') }}"
                                    alt="">
                            </div>
                            <h5 class="text-center mt-2"></h5>
                        </a>
                        <div class="d-none">
                            <a href="{{ asset('/assets/img/gallery/collegegallery/nursing/4.jpg') }}"
                                data-lightbox="gallery-item"
                                title="Caring for Little Lives – Pediatric Lab Activities"></a>
                        </div>
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
                            data-lightbox="gallery-item" class="text-decoration-none" title="Nursing College Alumni Meet – Cherished Connections">
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
                            data-lightbox="gallery-item" class="text-decoration-none" title="Cheers to New Beginnings – Fresher’s Bash Highlights">
                            <div class="position-relative">
                                <img class="img-fluid"
                                    src="{{ asset('/assets/img/gallery/collegegallery/nursing/17.jpg') }}"
                                    alt="">
                            </div>
                            <h5 class="text-center mt-2"></h5>
                        </a>
                        <div class="d-none">
                            <a href="{{ asset('/assets/img/gallery/collegegallery/nursing/18.jpg') }}"
                                data-lightbox="gallery-item"
                                title="Cheers to New Beginnings – Fresher’s Bash Highlights"></a>
                            <a href="{{ asset('/assets/img/gallery/collegegallery/nursing/19.jpg') }}"
                                data-lightbox="gallery-item"
                                title="Cheers to New Beginnings – Fresher’s Bash Highlights"></a>
                            <a href="{{ asset('/assets/img/gallery/collegegallery/nursing/23.jpg') }}"
                                data-lightbox="gallery-item"
                                title="Cheers to New Beginnings – Fresher’s Bash Highlights"></a>
                        </div>
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
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
