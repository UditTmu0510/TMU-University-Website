@extends('layouts.university.colleges.dental_with_sidebar')
@section('content')
    <style>
        .mfp-title {
            position: absolute;
            left: 50%;
            bottom: -70px !important;
            transform: translateX(-50%);
            width: 80% !important;
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
            <h1 class="tmu-text-primary tmu-page-heading mb-3 mt-3"><span>College </span><span> Gallery</span></h1>

            <div class="row justify-content-center gutter-10" data-lightbox="gallery">
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/dental/45.jpg') }}" data-lightbox="gallery-item"
                        class="text-decoration-none"
                        title="World No Tobacco Day – Awareness Program at TMU">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/dental/45.jpg') }}"
                                alt="International Seminar">
                        </div>
                        <h5 class="text-center mt-2">World No Tobacco Day – Awareness Program at TMU</h5>
                    </a>
                    <div class="d-none">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/dental/46.jpg') }}"
                            data-lightbox="gallery-item"
                            title="World No Tobacco Day – Awareness Program at TMU"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/dental/47.jpg') }}"
                            data-lightbox="gallery-item"
                            title="World No Tobacco Day – Awareness Program at TMU"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/dental/48.jpg') }}"
                            data-lightbox="gallery-item"
                            title="World No Tobacco Day – Awareness Program at TMU"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/dental/49.jpg') }}"
                            data-lightbox="gallery-item"
                            title="World No Tobacco Day – Awareness Program at TMU"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/dental/50.jpg') }}"
                            data-lightbox="gallery-item"
                            title="World No Tobacco Day – Awareness Program at TMU"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/dental/51.jpg') }}"
                            data-lightbox="gallery-item"
                            title="World No Tobacco Day – Awareness Program at TMU"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/dental/52.jpg') }}"
                            data-lightbox="gallery-item"
                            title="World No Tobacco Day – Awareness Program at TMU"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/dental/53.jpg') }}"
                            data-lightbox="gallery-item"
                            title="World No Tobacco Day – Awareness Program at TMU"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/dental/41.jpg') }}" data-lightbox="gallery-item"
                        class="text-decoration-none"
                        title="Expert Talk on Modern Restorative Procedures">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/dental/41.jpg') }}"
                                alt="International Seminar">
                        </div>
                        <h5 class="text-center mt-2">Expert Talk on Modern Restorative Procedures</h5>
                    </a>
                    <div class="d-none">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/dental/42.jpg') }}"
                            data-lightbox="gallery-item"
                            title="Expert Talk on Modern Restorative Procedures"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/dental/43.jpg') }}"
                            data-lightbox="gallery-item"
                            title="Expert Talk on Modern Restorative Procedures"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/dental/44.jpg') }}"
                            data-lightbox="gallery-item"
                            title="Expert Talk on Modern Restorative Procedures"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/dental/fp_1.jpg') }}" data-lightbox="gallery-item"
                        class="text-decoration-none" title="BDS Fresher’s Party 2025 – Welcoming the New Smiles">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/dental/fp_1.jpg') }}"
                                alt="BDS Fresher’s Party 2025 – Welcoming the New Smiles">
                        </div>
                        <h5 class="text-center mt-2">BDS Fresher’s Party 2025 – Welcoming the New Smiles</h5>
                    </a>
                    <div class="d-none">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/dental/fp_2.jpg') }}"
                            data-lightbox="gallery-item" title="BDS Fresher’s Party 2025 – Welcoming the New Smiles"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/dental/fp_3.jpg') }}"
                            data-lightbox="gallery-item" title="BDS Fresher’s Party 2025 – Welcoming the New Smiles"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/dental/fp_4.jpg') }}"
                            data-lightbox="gallery-item" title="BDS Fresher’s Party 2025 – Welcoming the New Smiles"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/dental/fp_5.jpg') }}"
                            data-lightbox="gallery-item" title="BDS Fresher’s Party 2025 – Welcoming the New Smiles"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/dental/fp_6.jpg') }}"
                            data-lightbox="gallery-item" title="BDS Fresher’s Party 2025 – Welcoming the New Smiles"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/dental/gts_1.jpg') }}" data-lightbox="gallery-item"
                        class="text-decoration-none" title="Celebrating Talent & Culture – Gravitas 3.0 at Dental College">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/dental/gts_1.jpg') }}"
                                alt="Celebrating Talent & Culture – Gravitas 3.0 at Dental College">
                        </div>
                        <h5 class="text-center mt-2">Celebrating Talent & Culture – Gravitas 3.0 at Dental College</h5>
                    </a>
                    <div class="d-none">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/dental/gts_2.jpg') }}"
                            data-lightbox="gallery-item" title="Celebrating Talent & Culture – Gravitas 3.0 at Dental College"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/dental/gts_3.jpg') }}"
                            data-lightbox="gallery-item" title="Celebrating Talent & Culture – Gravitas 3.0 at Dental College"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/dental/gts_4.jpg') }}"
                            data-lightbox="gallery-item" title="Celebrating Talent & Culture – Gravitas 3.0 at Dental College"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/dental/gts_5.jpg') }}"
                            data-lightbox="gallery-item" title="Celebrating Talent & Culture – Gravitas 3.0 at Dental College"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/dental/gts_6.jpg') }}"
                            data-lightbox="gallery-item" title="Celebrating Talent & Culture – Gravitas 3.0 at Dental College"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/dental/gts_7.jpg') }}"
                            data-lightbox="gallery-item" title="Celebrating Talent & Culture – Gravitas 3.0 at Dental College"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/dental/gts_8.jpg') }}"
                            data-lightbox="gallery-item" title="Celebrating Talent & Culture – Gravitas 3.0 at Dental College"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/dental/gts_9.jpg') }}"
                            data-lightbox="gallery-item" title="Celebrating Talent & Culture – Gravitas 3.0 at Dental College"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/dental/gts_10.jpg') }}"
                            data-lightbox="gallery-item" title="Celebrating Talent & Culture – Gravitas 3.0 at Dental College"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/dental/gts_11.jpg') }}"
                            data-lightbox="gallery-item" title="Celebrating Talent & Culture – Gravitas 3.0 at Dental College"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/dental/gts_12.jpg') }}"
                            data-lightbox="gallery-item" title="Celebrating Talent & Culture – Gravitas 3.0 at Dental College"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/dental/hc.jpg') }}" data-lightbox="gallery-item"
                        class="text-decoration-none" title="Spreading Smiles & Colors – Holi at Dental College">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/dental/hc.jpg') }}"
                                alt="Spreading Smiles & Colors – Holi at Dental College">
                        </div>
                        <h5 class="text-center mt-2">Spreading Smiles & Colors – Holi at Dental College</h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/dental/icgw.jpg') }}" data-lightbox="gallery-item"
                        class="text-decoration-none" title="Shining Bright – Intercollegiate 25 Winner Highlights">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/dental/icgw.jpg') }}"
                                alt="Shining Bright – Intercollegiate 25 Winner Highlights">
                        </div>
                        <h5 class="text-center mt-2">Shining Bright – Intercollegiate 25 Winner Highlights</h5>
                    </a>
                </div>

                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/dental/od_bds.jpg') }}" data-lightbox="gallery-item"
                        class="text-decoration-none" title="Orientation Day 2025 – Welcoming the Future Dentists">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/dental/od_bds.jpg') }}"
                                alt="Orientation Day 2025 – Welcoming the Future Dentists">
                        </div>
                        <h5 class="text-center mt-2">Orientation Day 2025 – Welcoming the Future Dentists</h5>
                    </a>
                    <div class="d-none">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/dental/od_bds_2.jpg') }}"
                            data-lightbox="gallery-item" title="Orientation Day 2025 – Welcoming the Future Dentists"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/dental/sp.jpg') }}" data-lightbox="gallery-item"
                        class="text-decoration-none" title="Invoking Wisdom – Saraswati Pooja at TMU">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/dental/sp.jpg') }}"
                                alt="Invoking Wisdom – Saraswati Pooja at TMU">
                        </div>
                        <h5 class="text-center mt-2">Invoking Wisdom – Saraswati Pooja at TMU</h5>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/dental/27.jpg') }}" data-lightbox="gallery-item"
                        class="text-decoration-none" title="Cheers to New Chapters – Fresher’s Party Moments">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/dental/27.jpg') }}"
                                alt="Cheers to New Chapters – Fresher’s Party Moments">
                        </div>
                        <h5 class="text-center mt-2">Cheers to New Chapters – Fresher’s Party Moments</h5>
                    </a>
                    <div class="d-none">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/dental/28.jpg') }}"
                            data-lightbox="gallery-item" title="Cheers to New Chapters – Fresher’s Party Moments"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/dental/29.jpg') }}"
                            data-lightbox="gallery-item" title="Cheers to New Chapters – Fresher’s Party Moments"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/dental/30.jpg') }}"
                            data-lightbox="gallery-item" title="Cheers to New Chapters – Fresher’s Party Moments"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/dental/32.jpg') }}" data-lightbox="gallery-item"
                        class="text-decoration-none" title="Hands-On Learning – Dental Students in the Lab">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/dental/32.jpg') }}"
                                alt="Hands-On Learning – Dental Students in the Lab">
                        </div>
                        <h5 class="text-center mt-2">Hands-On Learning – Dental Students in the Lab</h5>
                    </a>
                    <div class="d-none">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/dental/33.jpg') }}"
                            data-lightbox="gallery-item" title="Hands-On Learning – Dental Students in the Lab"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/dental/34.jpg') }}"
                            data-lightbox="gallery-item" title="Hands-On Learning – Dental Students in the Lab"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/dental/35.jpg') }}"
                            data-lightbox="gallery-item" title="Hands-On Learning – Dental Students in the Lab"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/dental/31.jpg') }}"
                            data-lightbox="gallery-item" title="Hands-On Learning – Dental Students in the Lab"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/dental/1.jpg') }}" data-lightbox="gallery-item"
                        class="text-decoration-none" title="Gravitas 2.0 – Day 1 Cultural Fest Highlights">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/dental/1.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2">Gravitas 2.0 – Day 1 Cultural Fest Highlights</h5>
                        <div class="d-none">
                            <a href="{{ asset('/assets/img/gallery/collegegallery/dental/2.jpg') }}"
                                data-lightbox="gallery-item" title="Gravitas 2.0 – Day 1 Cultural Fest Highlights"></a>
                            <a href="{{ asset('/assets/img/gallery/collegegallery/dental/3.jpg') }}"
                                data-lightbox="gallery-item" title="Gravitas 2.0 – Day 1 Cultural Fest Highlights"></a>
                            <a href="{{ asset('/assets/img/gallery/collegegallery/dental/4.jpg') }}"
                                data-lightbox="gallery-item" title="Gravitas 2.0 – Day 1 Cultural Fest Highlights"></a>
                            <a href="{{ asset('/assets/img/gallery/collegegallery/dental/5.jpg') }}"
                                data-lightbox="gallery-item" title="Gravitas 2.0 – Day 1 Cultural Fest Highlights"></a>
                            <a href="{{ asset('/assets/img/gallery/collegegallery/dental/6.jpg') }}"
                                data-lightbox="gallery-item" title="Gravitas 2.0 – Day 1 Cultural Fest Highlights"></a>
                            <a href="{{ asset('/assets/img/gallery/collegegallery/dental/7.jpg') }}"
                                data-lightbox="gallery-item" title="Gravitas 2.0 – Day 1 Cultural Fest Highlights"></a>
                            <a href="{{ asset('/assets/img/gallery/collegegallery/dental/8.jpg') }}"
                                data-lightbox="gallery-item" title="Gravitas 2.0 – Day 1 Cultural Fest Highlights"></a>
                            <a href="{{ asset('/assets/img/gallery/collegegallery/dental/9.jpg') }}"
                                data-lightbox="gallery-item" title="Gravitas 2.0 – Day 1 Cultural Fest Highlights"></a>
                            <a href="{{ asset('/assets/img/gallery/collegegallery/dental/10.jpg') }}"
                                data-lightbox="gallery-item" title="Gravitas 2.0 – Day 1 Cultural Fest Highlights"></a>
                            <a href="{{ asset('/assets/img/gallery/collegegallery/dental/11.jpg') }}"
                                data-lightbox="gallery-item" title="Gravitas 2.0 – Day 1 Cultural Fest Highlights"></a>
                            <a href="{{ asset('/assets/img/gallery/collegegallery/dental/12.jpg') }}"
                                data-lightbox="gallery-item" title="Gravitas 2.0 – Day 1 Cultural Fest Highlights"></a>
                            <a href="{{ asset('/assets/img/gallery/collegegallery/dental/13.jpg') }}"
                                data-lightbox="gallery-item" title="Gravitas 2.0 – Day 1 Cultural Fest Highlights"></a>
                            <a href="{{ asset('/assets/img/gallery/collegegallery/dental/14.jpg') }}"
                                data-lightbox="gallery-item" title="Gravitas 2.0 – Day 1 Cultural Fest Highlights"></a>
                            <a href="{{ asset('/assets/img/gallery/collegegallery/dental/15.jpg') }}"
                                data-lightbox="gallery-item" title="Gravitas 2.0 – Day 1 Cultural Fest Highlights"></a>
                            <a href="{{ asset('/assets/img/gallery/collegegallery/dental/16.jpg') }}"
                                data-lightbox="gallery-item" title="Gravitas 2.0 – Day 1 Cultural Fest Highlights"></a>
                            <a href="{{ asset('/assets/img/gallery/collegegallery/dental/17.jpg') }}"
                                data-lightbox="gallery-item" title="Gravitas 2.0 – Day 1 Cultural Fest Highlights"></a>
                            <a href="{{ asset('/assets/img/gallery/collegegallery/dental/18.jpg') }}"
                                data-lightbox="gallery-item" title="Gravitas 2.0 – Day 1 Cultural Fest Highlights"></a>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/dental/19.jpg') }}" data-lightbox="gallery-item"
                        class="text-decoration-none" title="Gravitas 2.0 – Day 2 Cultural Extravaganza">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('/assets/img/gallery/collegegallery/dental/19.jpg') }}"
                                alt="">
                        </div>
                        <h5 class="text-center mt-2">Gravitas 2.0 – Day 2 Cultural Extravaganza</h5>
                        <div class="d-none">
                            <a href="{{ asset('/assets/img/gallery/collegegallery/dental/20.jpg') }}"
                                data-lightbox="gallery-item" title="Gravitas 2.0 –Day 2 Cultural Extravaganza"></a>
                            <a href="{{ asset('/assets/img/gallery/collegegallery/dental/21.jpg') }}"
                                data-lightbox="gallery-item" title="Gravitas 2.0 –Day 2 Cultural Extravaganza"></a>
                            <a href="{{ asset('/assets/img/gallery/collegegallery/dental/22.jpg') }}"
                                data-lightbox="gallery-item" title="Gravitas 2.0 –Day 2 Cultural Extravaganza"></a>
                            <a href="{{ asset('/assets/img/gallery/collegegallery/dental/23.jpg') }}"
                                data-lightbox="gallery-item" title="Gravitas 2.0 –Day 2 Cultural Extravaganza"></a>
                            <a href="{{ asset('/assets/img/gallery/collegegallery/dental/24.jpg') }}"
                                data-lightbox="gallery-item" title="Gravitas 2.0 –Day 2 Cultural Extravaganza"></a>
                            <a href="{{ asset('/assets/img/gallery/collegegallery/dental/25.jpg') }}"
                                data-lightbox="gallery-item" title="Gravitas 2.0 –Day 2 Cultural Extravaganza"></a>
                            <a href="{{ asset('/assets/img/gallery/collegegallery/dental/26.jpg') }}"
                                data-lightbox="gallery-item" title="Gravitas 2.0 –Day 2 Cultural Extravaganza"></a>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
