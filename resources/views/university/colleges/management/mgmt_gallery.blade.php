@extends('layouts.university.colleges.tmimt_with_sidebar')
@section('content')

<style>
    .mfp-title {
        position: absolute;
        left: 50%;
        bottom: 0;
        /* Position the caption at the bottom of the lightbox */
        transform: translateX(-50%);
        width: auto;
        /* Adjust width to avoid going too close to edges */
        text-align: center;
        line-height: 1.65;
        color: var(--cnvs-mfp-caption-title-color);
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
        .mfp-title {
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
                <a href="{{asset('/assets/img/gallery/collegegallery/tmimt/22.jpg')}}" data-lightbox="gallery-item" class="text-decoration-none" title="Alfaaz: An Open Mic Event">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/tmimt/22.jpg')}}" alt="Alfaaz: An Open Mic Event">
                    </div>
                    <h5 class="text-center mt-2">Alfaaz: An Open Mic Event</h5>
                </a>
                <div class="d-none">
                    <a href="{{asset('/assets/img/gallery/collegegallery/tmimt/23.jpg')}}" data-lightbox="gallery-item" title="Alfaaz: AnOpen Mic Event"></a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{asset('/assets/img/gallery/collegegallery/tmimt/1.webp')}}" data-lightbox="gallery-item" class="text-decoration-none" title="Learning Together: A Glimpse into Our Classrooms">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/tmimt/1.webp')}}" alt="Learning Together: A Glimpse into Our Classrooms">
                    </div>
                    <h5 class="text-center mt-2">Learning Together: A Glimpse into Our Classrooms</h5>
                    <div class="d-none">
                        <a href="{{asset('/assets/img/gallery/collegegallery/tmimt/2.webp')}}" data-lightbox="gallery-item" title="Learning Together: A Glimpse into Our Classrooms"></a>
                        <a href="{{asset('/assets/img/gallery/collegegallery/tmimt/3.webp')}}" data-lightbox="gallery-item" title="Learning Together: A Glimpse into Our Classrooms"></a>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{asset('/assets/img/gallery/collegegallery/tmimt/7.jpg')}}" data-lightbox="gallery-item" class="text-decoration-none" title="Exploring Industry Insights at T.T.Limited">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/tmimt/7.jpg')}}" alt="Exploring Industry Insights at T.T.Limited">
                    </div>
                    <h5 class="text-center mt-2">Exploring Industry Insights at T.T.Limited</h5>
                    <div class="d-none">
                        <a href="{{asset('/assets/img/gallery/collegegallery/tmimt/14.jpg')}}" data-lightbox="gallery-item" title="Exploring Industry Insights at T.T.Limited"></a>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{asset('/assets/img/gallery/collegegallery/tmimt/8.jpg')}}" data-lightbox="gallery-item" class="text-decoration-none" title="Management Students Embrace the Spirit of Hindi Diwas on Hindi Diwas Event">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/tmimt/8.jpg')}}" alt="Management Students Embrace the Spirit of Hindi Diwas on Hindi Diwas Event">
                    </div>
                    <h5 class="text-center mt-2">Management Students Embrace the Spirit of Hindi Diwas</h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{asset('/assets/img/gallery/collegegallery/tmimt/9.jpg')}}" data-lightbox="gallery-item" class="text-decoration-none" title="PPT Presentation Competition">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/tmimt/9.jpg')}}" alt="Gallery Thumb 2">
                    </div>
                    <h5 class="text-center mt-2">Leadership Through Presentation: PPT Competition Highlights</h5>
                    <div class="d-none">
                        <a href="{{asset('/assets/img/gallery/collegegallery/tmimt/17.jpg')}}" data-lightbox="gallery-item" title="Leadership Through Presentation: PPT Competition Highlights"></a>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{asset('/assets/img/gallery/collegegallery/tmimt/10.jpg')}}" data-lightbox="gallery-item" class="text-decoration-none" title="Cultural Event">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/tmimt/10.jpg')}}" alt="Gallery Thumb 2">
                    </div>
                    <h5 class="text-center mt-2">Cultural Event</h5>
                    <div class="d-none">
                        <a href="{{asset('/assets/img/gallery/collegegallery/tmimt/18.jpg')}}" data-lightbox="gallery-item" title="Leadership Through Presentation: PPT Competition Highlights"></a>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{asset('/assets/img/gallery/collegegallery/tmimt/11.jpg')}}" data-lightbox="gallery-item" class="text-decoration-none" title="Placement Drive">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/tmimt/11.jpg')}}" alt="Gallery Thumb 2">
                    </div>
                    <h5 class="text-center mt-2">Placement Drive </h5>
                    <div class="d-none">
                        <a href="{{asset('/assets/img/gallery/collegegallery/tmimt/12.jpg')}}" data-lightbox="gallery-item" title="Placement Drive"></a>
                    </div>
                </a>
            </div>

            <div class="col-md-3 col-sm-6">
                <a href="{{asset('/assets/img/gallery/collegegallery/tmimt/13.jpg')}}" data-lightbox="gallery-item" class="text-decoration-none" title="Guest Lecture">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/tmimt/13.jpg')}}" alt="Guest Lecture">
                    </div>
                    <h5 class="text-center mt-2">Guest Lecture </h5>
                </a>
            </div>

            <div class="col-md-3 col-sm-6">
                <a href="{{asset('/assets/img/gallery/collegegallery/tmimt/15.jpg')}}" data-lightbox="gallery-item" class="text-decoration-none" title="Industrial Visit ">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/tmimt/15.jpg')}}" alt="Gallery Thumb 2">
                    </div>
                    <h5 class="text-center mt-2">Industrial Visit </h5>
                    <div class="d-none">
                        <a href="{{asset('/assets/img/gallery/collegegallery/tmimt/16.jpg')}}" data-lightbox="gallery-item" title="Industrial Visit"></a>
                    </div>
                </a>
            </div>

            
            <div class="col-md-3 col-sm-6">
                <a href="{{asset('/assets/img/gallery/collegegallery/tmimt/19.jpg')}}" data-lightbox="gallery-item" class="text-decoration-none" title="Towards a Cleaner, Greener Tomorrow – A Campus Initiative">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/tmimt/19.jpg')}}" alt="Gallery Thumb 2">
                    </div>
                    <h5 class="text-center mt-2">Towards a Cleaner, Greener Tomorrow – A Campus Initiative</h5>
                </a>
            </div>
            
            <div class="col-md-3 col-sm-6">
                <a href="{{asset('/assets/img/gallery/collegegallery/tmimt/24.jpg')}}" data-lightbox="gallery-item" class="text-decoration-none" title="Industrial Visit at Coca Cola ">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/tmimt/24.jpg')}}" alt="Gallery Thumb 2">
                    </div>
                    <h5 class="text-center mt-2">Exploring Industry Insights at Coca-Cola </h5>
                    <div class="d-none">
                        <a href="{{asset('/assets/img/gallery/collegegallery/tmimt/25.jpg')}}" data-lightbox="gallery-item" title="Exploring Industry Insights at Coca-Cola"></a>
                        <a href="{{asset('/assets/img/gallery/collegegallery/tmimt/26.jpg')}}" data-lightbox="gallery-item" title="Exploring Industry Insights at Coca-Cola"></a>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
</div>

@endsection