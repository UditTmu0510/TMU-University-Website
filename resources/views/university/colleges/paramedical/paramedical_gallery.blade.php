@extends('layouts.university.colleges.paramedical_with_sidebar')
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
            <div class="row justify-content-center gutter-10" data-lightbox="gallery">
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/mlt-od-1.jpg') }}"
                        data-lightbox="gallery-item" class="text-decoration-none" title="Honouring Science & Art – MLT Odyssey 2025 Highlights">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/paramedical/mlt-od-1.jpg') }}"
                                alt="Honouring Science & Art – MLT Odyssey 2025 Highlights">
                        </div>
                        <h5 class="text-center mt-2">Honouring Science & Art – MLT Odyssey 2025 Highlights</h5>
                    </a>
                    <div class="d-none">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/mlt-od-3.jpg') }}"
                            data-lightbox="gallery-item" title="Honouring Science & Art – MLT Odyssey 2025 Highlights"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/mlt-od-4.jpg') }}"
                            data-lightbox="gallery-item" title="Honouring Science & Art – MLT Odyssey 2025 Highlights"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/mlt-od-5.jpg') }}"
                            data-lightbox="gallery-item" title="Honouring Science & Art – MLT Odyssey 2025 Highlights"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/mlt-od-2.jpg') }}"
                            data-lightbox="gallery-item" title="Honouring Science & Art – MLT Odyssey 2025 Highlights"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/mlt-od-6.jpg') }}"
                            data-lightbox="gallery-item" title="Honouring Science & Art – MLT Odyssey 2025 Highlights"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/mlt-od-7.jpg') }}"
                            data-lightbox="gallery-item" title="Honouring Science & Art – MLT Odyssey 2025 Highlights"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/iit-rr-1.jpg') }}"
                        data-lightbox="gallery-item" class="text-decoration-none" title="Educational visit to IIT Roorkee">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/paramedical/iit-rr-1.jpg') }}"
                                alt="Educational visit to IIT Roorkee">
                        </div>
                        <h5 class="text-center mt-2">Educational visit to IIT Roorkee</h5>
                    </a>
                    <div class="d-none">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/iit-rr-3.jpg') }}"
                            data-lightbox="gallery-item" title="Educational visit to IIT Roorkee"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/iit-rr-4.jpg') }}"
                            data-lightbox="gallery-item" title="Educational visit to IIT Roorkee"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/iit-rr-5.jpg') }}"
                            data-lightbox="gallery-item" title="Educational visit to IIT Roorkee"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/fsbc-2.jpg') }}"
                        data-lightbox="gallery-item" class="text-decoration-none"
                        title="Expert talk on Forensic Ballistics and Cyber ​Forensics">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/paramedical/fsbc-2.jpg') }}"
                                alt="Expert talk on Forensic Ballistics and Cyber ​Forensics">
                        </div>
                        <h5 class="text-center mt-2">Expert talk on Forensic Ballistics and Cyber ​Forensics</h5>
                    </a>
                    <div class="d-none">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/fsbc-1.jpg') }}"
                            data-lightbox="gallery-item"
                            title="Expert talk on Forensic Ballistics and Cyber ​Forensics"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/fsbc-3.jpg') }}"
                            data-lightbox="gallery-item"
                            title="Expert talk on Forensic Ballistics and Cyber ​Forensics"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/optom-2.jpg') }}"
                        data-lightbox="gallery-item" class="text-decoration-none" title="World Optometry Day - 2025">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/paramedical/optom-2.jpg') }}"
                                alt="World Optometry Day - 2025">
                        </div>
                        <h5 class="text-center mt-2">World Optometry Day - 2025</h5>
                    </a>
                    <div class="d-none">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/optom-1.jpg') }}"
                            data-lightbox="gallery-item" title="World Optometry Day - 2025"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/optom-3.jpg') }}"
                            data-lightbox="gallery-item" title="World Optometry Day - 2025"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/wpse-1.jpg') }}"
                        data-lightbox="gallery-item" class="text-decoration-none"
                        title="Hands-on Workshop on Spectacle Lens Fitting & Entrepreneurship">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/paramedical/wpse-1.jpg') }}"
                                alt="Hands-on Workshop on Spectacle Lens Fitting & Entrepreneurship">
                        </div>
                        <h5 class="text-center mt-2">Hands-on Workshop on Spectacle Lens Fitting & Entrepreneurship</h5>
                    </a>
                    <div class="d-none">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/wpse-2.jpg') }}"
                            data-lightbox="gallery-item"
                            title="Hands-on Workshop on Spectacle Lens Fitting & Entrepreneurship"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/wpse-3.jpg') }}"
                            data-lightbox="gallery-item"
                            title="Hands-on Workshop on Spectacle Lens Fitting & Entrepreneurship"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/wpse-4.jpg') }}"
                            data-lightbox="gallery-item"
                            title="Hands-on Workshop on Spectacle Lens Fitting & Entrepreneurship"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/wpse-5.jpg') }}"
                            data-lightbox="gallery-item"
                            title="Hands-on Workshop on Spectacle Lens Fitting & Entrepreneurship"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/pc-1.jpg') }}"
                        data-lightbox="gallery-item" class="text-decoration-none"
                        title="key strategies for excellence in patient care">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/paramedical/pc-1.jpg') }}"
                                alt="key strategies for excellence in patient care">
                        </div>
                        <h5 class="text-center mt-2">Guest lecture on key strategies for excellence in patient care</h5>
                    </a>
                    <div class="d-none">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/pc-2.jpg') }}"
                            data-lightbox="gallery-item" title="key strategies for excellence in patient care"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/pc-3.jpg') }}"
                            data-lightbox="gallery-item" title="key strategies for excellence in patient care"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/pc-4.jpg') }}"
                            data-lightbox="gallery-item" title="key strategies for excellence in patient care"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/mlt-gl-1.jpg') }}"
                        data-lightbox="gallery-item" class="text-decoration-none"
                        title="Emerging Trends & Innovations in Cancer Diagnostics">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/paramedical/mlt-gl-1.jpg') }}"
                                alt="Gallery Thumb 2">
                        </div>
                        <h5 class="text-center mt-2">Guest Lecture: Emerging Trends & Innovations in Cancer Diagnostics
                        </h5>
                    </a>
                    <div class="d-none">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/mlt-gl-2.jpg') }}"
                            data-lightbox="gallery-item" title="Emerging Trends & Innovations in Cancer Diagnostics"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/mlt-gl-3.jpg') }}"
                            data-lightbox="gallery-item" title="Emerging Trends & Innovations in Cancer Diagnostics"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/mlt-gl-4.jpg') }}"
                            data-lightbox="gallery-item" title="Emerging Trends & Innovations in Cancer Diagnostics"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/gl-opt-1.jpg') }}"
                        data-lightbox="gallery-item" class="text-decoration-none"
                        title="Lens Fitting: Merging Expertise with Startup Strategies">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/paramedical/gl-opt-1.jpg') }}"
                                alt="Gallery Thumb 2">
                        </div>
                        <h5 class="text-center mt-2">Lens Fitting: Merging Expertise with Startup Strategies</h5>
                    </a>
                    <div class="d-none">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/gl-opt-2.jpg') }}"
                            data-lightbox="gallery-item"
                            title="Lens Fitting: Merging Expertise with Startup Strategies"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/gl-opt-3.jpg') }}"
                            data-lightbox="gallery-item"
                            title="Lens Fitting: Merging Expertise with Startup Strategies"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/gl-opt-4.jpg') }}"
                            data-lightbox="gallery-item"
                            title="Lens Fitting: Merging Expertise with Startup Strategies"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/PDFP-1.jpg') }}"
                        data-lightbox="gallery-item" class="text-decoration-none" title="Paramedical Diploma Program">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/paramedical/PDFP-1.jpg') }}"
                                alt="Gallery Thumb 2">
                        </div>
                        <h5 class="text-center mt-2">Frehser's Party</h5>
                    </a>
                    <div class="d-none">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/PDFP-2.jpg') }}"
                            data-lightbox="gallery-item" title="Paramedical Diploma Program"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/PDFP-3.jpg') }}"
                            data-lightbox="gallery-item" title="Paramedical Diploma Program"></a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/NDTL-2.jpg') }}"
                        data-lightbox="gallery-item" class="text-decoration-none"
                        title="National Dope Testing Laboratory">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/paramedical/NDTL-2.jpg') }}"
                                alt="Gallery Thumb 2">
                        </div>
                        <h5 class="text-center mt-2">Forensic Science Dept. Industrial Visit</h5>
                    </a>
                    <div class="d-none">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/NDTL-1.jpg') }}"
                            data-lightbox="gallery-item" title="National Dope Testing Laboratory"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/NDTL.jpg') }}"
                            data-lightbox="gallery-item" title="National Dope Testing Laboratory"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/NDTL-3.jpg') }}"
                            data-lightbox="gallery-item" title="National Dope Testing Laboratory"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/NDTL-4.jpg') }}"
                            data-lightbox="gallery-item" title="National Dope Testing Laboratory"></a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/YD-1.jpg') }}"
                        data-lightbox="gallery-item" class="text-decoration-none" title="International Yog Day">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/paramedical/YD-1.jpg') }}"
                                alt="Gallery Thumb 2">
                        </div>
                        <h5 class="text-center mt-2">International Yog Day</h5>
                    </a>
                    <div class="d-none">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/YD-2.jpg') }}"
                            data-lightbox="gallery-item" title="International Yog Day"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/YD-3.jpg') }}"
                            data-lightbox="gallery-item" title="International Yog Day"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/YD-4.jpg') }}"
                            data-lightbox="gallery-item" title="International Yog Day"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/YD-5.jpg') }}"
                            data-lightbox="gallery-item" title="International Yog Day"></a>

                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/FP-1.jpg') }}"
                        data-lightbox="gallery-item" class="text-decoration-none" title="Fresher Party">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/paramedical/FP-1.jpg') }}"
                                alt="Gallery Thumb 2">
                        </div>
                        <h5 class="text-center mt-2">Frehser's Party</h5>
                    </a>
                    <div class="d-none">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/FP-2.jpg') }}"
                            data-lightbox="gallery-item" title="Fresher Party"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/FP-3.jpg') }}"
                            data-lightbox="gallery-item" title="Fresher Party"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/FP-4.jpg') }}"
                            data-lightbox="gallery-item" title="Fresher Party"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/FP-5.jpg') }}"
                            data-lightbox="gallery-item" title="Fresher Party"></a>

                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/GL-1.jpg') }}"
                        data-lightbox="gallery-item" class="text-decoration-none"
                        title="Guest Lecture on Cutting-Edge Techniques in Nuclear Medicine">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/paramedical/GL-1.jpg') }}"
                                alt="Gallery Thumb 2">
                        </div>
                        <h5 class="text-center mt-2">Guest Lecture on Cutting-Edge Techniques in Nuclear Medicine</h5>
                    </a>
                    <div class="d-none">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/GL-2.jpg') }}"
                            data-lightbox="gallery-item"
                            title="Guest Lecture on Cutting-Edge Techniques in Nuclear Medicine"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/GL-3.jpg') }}"
                            data-lightbox="gallery-item"
                            title="Guest Lecture on Cutting-Edge Techniques in Nuclear Medicine"></a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/WSD-5.jpg') }}"
                        data-lightbox="gallery-item" class="text-decoration-none" title="World Sight Day">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/paramedical/WSD-5.jpg') }}"
                                alt="Gallery Thumb 2">
                        </div>
                        <h5 class="text-center mt-2">World Sight Day - 2024</h5>
                    </a>
                    <div class="d-none">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/WSD-2.jpg') }}"
                            data-lightbox="gallery-item" title="World Sight Day - 2024"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/WSD-3.jpg') }}"
                            data-lightbox="gallery-item" title="World Sight Day - 2024"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/WSD-4.jpg') }}"
                            data-lightbox="gallery-item" title="World Sight Day - 2024"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/WSD-1.jpg') }}"
                            data-lightbox="gallery-item" title="World Sight Day - 2024"></a>

                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/PPM-1.jpg') }}"
                        data-lightbox="gallery-item" class="text-decoration-none" title="Lenskart Placements Drive">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/paramedical/PPM-1.jpg') }}"
                                alt="Gallery Thumb 2">
                        </div>
                        <h5 class="text-center mt-2">Lenskart Placements Drive</h5>
                    </a>
                    <div class="d-none">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/PPM-2.jpg') }}"
                            data-lightbox="gallery-item" title="Lenskart Placements Drive"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/PPM-3.jpg') }}"
                            data-lightbox="gallery-item" title="Lenskart Placements Drive"></a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/od-1.jpg') }}"
                        data-lightbox="gallery-item" class="text-decoration-none" title="World Optometry Day - 2024">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/paramedical/od-1.jpg') }}"
                                alt="Gallery Thumb 2">
                        </div>
                        <h5 class="text-center mt-2">World Optometry Day - 2024</h5>
                    </a>
                    <div class="d-none">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/od-2.jpg') }}"
                            data-lightbox="gallery-item" title="World Optometry Day - 2024"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/od-3.jpg') }}"
                            data-lightbox="gallery-item" title="World Optometry Day - 2024"></a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/BBE-5.jpg') }}"
                        data-lightbox="gallery-item" class="text-decoration-none" title="Blossom Bash">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/paramedical/BBE-5.jpg') }}"
                                alt="Gallery Thumb 2">
                        </div>
                        <h5 class="text-center mt-2">Blossom Bash Event</h5>
                    </a>
                    <div class="d-none">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/BBE-1.jpg') }}"
                            data-lightbox="gallery-item" title="Blossom Bash"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/BBE-2.jpg') }}"
                            data-lightbox="gallery-item" title="Blossom Bash"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/BBE-3.jpg') }}"
                            data-lightbox="gallery-item" title="Blossom Bash"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/BBE-4.jpg') }}"
                            data-lightbox="gallery-item" title="Blossom Bash"></a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/31.jpg') }}"
                        data-lightbox="gallery-item" class="text-decoration-none" title="Hands-on Learning">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/paramedical/31.jpg') }}"
                                alt="Gallery Thumb 2">
                        </div>
                        <h5 class="text-center mt-2">Hands-on Learning</h5>
                    </a>
                    <div class="d-none">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/LAB-1.png') }}"
                            data-lightbox="gallery-item" title="Hands-on Learning"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/LAB-2.jpg') }}"
                            data-lightbox="gallery-item" title="Hands-on Learning"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/LAB-3.jpg') }}"
                            data-lightbox="gallery-item" title="Hands-on Learning"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/LAB-4.jpg') }}"
                            data-lightbox="gallery-item" title="Hands-on Learning"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/SD-1.webp') }}"
                        data-lightbox="gallery-item" class="text-decoration-none" title="World Sight Day - 2023">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/paramedical/SD-1.webp') }}"
                                alt="Gallery Thumb 2">
                        </div>
                        <h5 class="text-center mt-2">World Sight Day - 2023</h5>
                    </a>
                    <div class="d-none">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/SD-2.webp') }}"
                            data-lightbox="gallery-item" title="World Sight Day - 2023"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/SD-3.webp') }}"
                            data-lightbox="gallery-item" title="World Sight Day - 2023"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/WRIT-1.webp') }}"
                        data-lightbox="gallery-item" class="text-decoration-none" title="Workshop, RIT Department">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/paramedical/WRIT-1.webp') }}"
                                alt="Gallery Thumb 2">
                        </div>
                        <h5 class="text-center mt-2">Workshop, RIT Department</h5>
                    </a>
                    <div class="d-none">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/WRIT-2.webp') }}"
                            data-lightbox="gallery-item" title="Workshop, RIT Department"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/WRIT-3.webp') }}"
                            data-lightbox="gallery-item" title="Workshop, RIT Department"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/HPV-1.webp') }}"
                        data-lightbox="gallery-item" class="text-decoration-none" title="Guest Lecture on HPV Vaccine">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/paramedical/HPV-1.webp') }}"
                                alt="Gallery Thumb 2">
                        </div>
                        <h5 class="text-center mt-2">Guest Lecture on HPV Vaccine</h5>
                    </a>
                    <div class="d-none">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/HPV-2.webp') }}"
                            data-lightbox="gallery-item" title="Guest Lecture on HPV Vaccine"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/HPV-3.webp') }}"
                            data-lightbox="gallery-item" title="Guest Lecture on HPV Vaccine"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/RD-1.webp') }}"
                        data-lightbox="gallery-item" class="text-decoration-none" title="World Radiography Day - 2023">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/paramedical/RD-1.webp') }}"
                                alt="Gallery Thumb 2">
                        </div>
                        <h5 class="text-center mt-2">World Radiography Day - 2023</h5>
                    </a>
                    <div class="d-none">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/RD-2.webp') }}"
                            data-lightbox="gallery-item" title="World Radiography Day - 2023"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/RD-3.webp') }}"
                            data-lightbox="gallery-item" title="World Radiography Day - 2023"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/CPR1.webp') }}"
                        data-lightbox="gallery-item" class="text-decoration-none" title="First Aid CPR Workshop">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/paramedical/CPR1.webp') }}"
                                alt="Gallery Thumb 2">
                        </div>
                        <h5 class="text-center mt-2">First Aid CPR Workshop</h5>
                    </a>
                    <div class="d-none">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/CPR-2.webp') }}"
                            data-lightbox="gallery-item" title="First Aid CPR Workshop"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/CPR-3.webp') }}"
                            data-lightbox="gallery-item" title="First Aid CPR Workshop"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/LD-2.webp') }}"
                        data-lightbox="gallery-item" class="text-decoration-none" title="World Laboratory Day">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/paramedical/LD-2.webp') }}"
                                alt="Gallery Thumb 2">
                        </div>
                        <h5 class="text-center mt-2">World Laboratory Day</h5>
                    </a>
                    <div class="d-none">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/LD-1.webp') }}"
                            data-lightbox="gallery-item" title="World Laboratory Day"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/LD-3.webp') }}"
                            data-lightbox="gallery-item" title="World Laboratory Day"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/LD-4.webp') }}"
                            data-lightbox="gallery-item" title="World Laboratory Day"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/LD-5.webp') }}"
                            data-lightbox="gallery-item" title="World Laboratory Day"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/LD-6.webp') }}"
                            data-lightbox="gallery-item" title="World Laboratory Day"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/hd-1.webp') }}"
                        data-lightbox="gallery-item" class="text-decoration-none" title="Hindi Diwas Celebration">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/paramedical/hd-1.webp') }}"
                                alt="Gallery Thumb 2">
                        </div>
                        <h5 class="text-center mt-2">Hindi Diwas Celebration</h5>
                    </a>
                    <div class="d-none">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/hd-2.webp') }}"
                            data-lightbox="gallery-item" title="Hindi Diwas Celebration"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/hd-3.webp') }}"
                            data-lightbox="gallery-item" title="Hindi Diwas Celebration"></a>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/mhd-1.jpg') }}"
                        data-lightbox="gallery-item" class="text-decoration-none"
                        title="Guest Lecture on Mental Health Day">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/paramedical/mhd-1.jpg') }}"
                                alt="Gallery Thumb 2">
                        </div>
                        <h5 class="text-center mt-2">Guest Lecture on Mental Health Day</h5>
                    </a>
                    <div class="d-none">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/mhd-2.jpg') }}"
                            data-lightbox="gallery-item" title="Guest Lecture on Mental Health Day"></a>
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/mhd-3.jpg') }}"
                            data-lightbox="gallery-item" title="Guest Lecture on Mental Health Day"></a>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/mou-1.jpg') }}"
                        data-lightbox="gallery-item" class="text-decoration-none"
                        title="TMU Signs MoU with Atharva Laboratories">
                        <div class="position-relative">
                            <img class="img-fluid"
                                src="{{ asset('/assets/img/gallery/collegegallery/paramedical/mou-1.jpg') }}"
                                alt="Gallery Thumb 2">
                        </div>
                        <h5 class="text-center mt-2">TMU Signs MoU with Atharva Laboratories</h5>
                    </a>
                    <div class="d-none">
                        <a href="{{ asset('/assets/img/gallery/collegegallery/paramedical/mou-2.jpg') }}"
                            data-lightbox="gallery-item" title="TMU Signs MoU with Atharva Laboratories"></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <!-- Bootstrap JS and dependencies -->
@endsection
