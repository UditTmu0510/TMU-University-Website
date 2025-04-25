@extends('layouts.university.colleges.ccsit_with_sidebar')
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
                <a href="{{asset('/assets/img/gallery/collegegallery/ccsit/48.jpg')}}" data-lightbox="gallery-item" class="text-decoration-none" title="Multiply Your Creativity – Workshop Highlights">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/ccsit/48.jpg')}}" alt="International Seminar">
                    </div>
                    <h5 class="text-center mt-2">Multiply Your Creativity – Workshop Highlights</h5>
                    <div class="d-none">
                        <a href="{{asset('/assets/img/gallery/collegegallery/ccsit/49.jpg')}}" data-lightbox="gallery-item" title="Multiply Your Creativity – Workshop Highlights"></a>
                        <a href="{{asset('/assets/img/gallery/collegegallery/ccsit/50.jpg')}}" data-lightbox="gallery-item" title="Multiply Your Creativity – Workshop Highlights"></a>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{asset('/assets/img/gallery/collegegallery/ccsit/38.jpg')}}" data-lightbox="gallery-item" class="text-decoration-none" title="Step into Success: Samarthya Bodh 3.0 Placement Prep">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/ccsit/38.jpg')}}" alt="International Seminar">
                    </div>
                    <h5 class="text-center mt-2">Step into Success: Samarthya Bodh 3.0 Placement Prep</h5>
                    <div class="d-none">
                        <a href="{{asset('/assets/img/gallery/collegegallery/ccsit/40.jpg')}}" data-lightbox="gallery-item" title="Step into Success: Samarthya Bodh 3.0 Placement Prep"></a>
                        <a href="{{asset('/assets/img/gallery/collegegallery/ccsit/39.jpg')}}" data-lightbox="gallery-item" title="Step into Success: Samarthya Bodh 3.0 Placement Prep"></a>
                        <a href="{{asset('/assets/img/gallery/collegegallery/ccsit/41.jpg')}}" data-lightbox="gallery-item" title="Step into Success: Samarthya Bodh 3.0 Placement Prep"></a>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{asset('/assets/img/gallery/collegegallery/ccsit/24.jpg')}}" data-lightbox="gallery-item" class="text-decoration-none" title="Splash of Colors, Splash of Happiness – Holi Fest 2025">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/ccsit/24.jpg')}}" alt="International Seminar">
                    </div>
                    <h5 class="text-center mt-2">Splash of Colors, Splash of Happiness – Holi Fest 2025</h5>
                    <div class="d-none">
                        <a href="{{asset('/assets/img/gallery/collegegallery/ccsit/25.jpg')}}" data-lightbox="gallery-item" title="Splash of Colors, Splash of Happiness – Holi Fest 2025"></a>
                        <a href="{{asset('/assets/img/gallery/collegegallery/ccsit/7.jpg')}}" data-lightbox="gallery-item" title="Splash of Colors, Splash of Happiness – Holi Fest 2025"></a>
                        <a href="{{asset('/assets/img/gallery/collegegallery/ccsit/22.jpg')}}" data-lightbox="gallery-item" title="Splash of Colors, Splash of Happiness – Holi Fest 2025"></a>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{asset('/assets/img/gallery/collegegallery/ccsit/42.jpg')}}" data-lightbox="gallery-item" class="text-decoration-none" title="Exchanging Ideas, Inspiring Futures – NCMD 2025 Moments">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/ccsit/42.jpg')}}" alt="">
                    </div>
                    <h5 class="text-center mt-2">Exchanging Ideas, Inspiring Futures – NCMD 2025 Moments</h5>
                    <div class="d-none">
                        <a href="{{asset('/assets/img/gallery/collegegallery/ccsit/42.jpg')}}" data-lightbox="gallery-item" title="Exchanging Ideas, Inspiring Futures – NCMD 2025 Moments"></a>
                        <a href="{{asset('/assets/img/gallery/collegegallery/ccsit/43.jpg')}}" data-lightbox="gallery-item" title="Exchanging Ideas, Inspiring Futures – NCMD 2025 Moments"></a>
                        <a href="{{asset('/assets/img/gallery/collegegallery/ccsit/44.jpg')}}" data-lightbox="gallery-item" title="Exchanging Ideas, Inspiring Futures – NCMD 2025 Moments"></a>
                        <a href="{{asset('/assets/img/gallery/collegegallery/ccsit/47.jpg')}}" data-lightbox="gallery-item" title="Exchanging Ideas, Inspiring Futures – NCMD 2025 Moments"></a>
                        <a href="{{asset('/assets/img/gallery/collegegallery/ccsit/45.jpg')}}" data-lightbox="gallery-item" title="Exchanging Ideas, Inspiring Futures – NCMD 2025 Moments"></a>
                        <a href="{{asset('/assets/img/gallery/collegegallery/ccsit/46.jpg')}}" data-lightbox="gallery-item" title="Exchanging Ideas, Inspiring Futures – NCMD 2025 Moments"></a>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{asset('/assets/img/gallery/collegegallery/ccsit/31.jpg')}}" data-lightbox="gallery-item" class="text-decoration-none" title="Conference Cultural Eve: A Night of Celebration & Talent">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/ccsit/31.jpg')}}" alt="">
                    </div>
                    <h5 class="text-center mt-2">Conference Cultural Eve: A Night of Celebration & Talent</h5>
                    <div class="d-none">
                        <a href="{{asset('/assets/img/gallery/collegegallery/ccsit/32.jpg')}}" data-lightbox="gallery-item" title="Conference Cultural Eve: A Night of Celebration & Talent"></a>
                        <a href="{{asset('/assets/img/gallery/collegegallery/ccsit/33.jpg')}}" data-lightbox="gallery-item" title="Conference Cultural Eve: A Night of Celebration & Talent"></a>
                        <a href="{{asset('/assets/img/gallery/collegegallery/ccsit/29.jpg')}}" data-lightbox="gallery-item" title="Conference Cultural Eve: A Night of Celebration & Talent"></a>
                        <a href="{{asset('/assets/img/gallery/collegegallery/ccsit/30.jpg')}}" data-lightbox="gallery-item" title="Conference Cultural Eve: A Night of Celebration & Talent"></a>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{asset('/assets/img/gallery/collegegallery/ccsit/26.jpg')}}" data-lightbox="gallery-item" class="text-decoration-none" title="Global Minds, Smarter Solutions: SMART 2024 Moments">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/ccsit/26.jpg')}}" alt="">
                    </div>
                    <h5 class="text-center mt-2">Global Minds, Smarter Solutions: SMART 2024 Moments</h5>
                    <div class="d-none">
                        <a href="{{asset('/assets/img/gallery/collegegallery/ccsit/27.jpg')}}" data-lightbox="gallery-item" title="Global Minds, Smarter Solutions: SMART 2024 Moments"></a>
                        <a href="{{asset('/assets/img/gallery/collegegallery/ccsit/34.jpg')}}" data-lightbox="gallery-item" title="Global Minds, Smarter Solutions: SMART 2024 Moments"></a>
                        <a href="{{asset('/assets/img/gallery/collegegallery/ccsit/35.jpg')}}" data-lightbox="gallery-item" title="Global Minds, Smarter Solutions: SMART 2024 Moments"></a>
                        <a href="{{asset('/assets/img/gallery/collegegallery/ccsit/36.jpg')}}" data-lightbox="gallery-item" title="Global Minds, Smarter Solutions: SMART 2024 Moments"></a>
                    </div>
                </a>
            </div>

            <div class="col-md-3 col-sm-6">
                <a href="{{asset('/assets/img/gallery/collegegallery/ccsit/2.jpg')}}" data-lightbox="gallery-item" class="text-decoration-none" title="Exploring Knowledge: From Classrooms to Labs">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/ccsit/2.jpg')}}" alt="">
                    </div>
                    <h5 class="text-center mt-2">Exploring Knowledge: From Classrooms to Labs</h5>
                    <div class="d-none">
                        <a href="{{asset('/assets/img/gallery/collegegallery/ccsit/3.jpg')}}" data-lightbox="gallery-item" title="Exploring Knowledge: From Classrooms to Labs"></a>
                        <a href="{{asset('/assets/img/gallery/collegegallery/ccsit/4.jpg')}}" data-lightbox="gallery-item" title="Exploring Knowledge: From Classrooms to Labs"></a>
                    </div>
                </a>
            </div>

            <div class="col-md-3 col-sm-6">
                <a href="{{asset('/assets/img/gallery/collegegallery/ccsit/9.jpg')}}" data-lightbox="gallery-item" class="text-decoration-none" title="Cultural Program">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/ccsit/9.jpg')}}" alt="">
                    </div>
                    <h5 class="text-center mt-2">Cultural Program</h5>
                    <div class="d-none">
                        <a href="{{asset('/assets/img/gallery/collegegallery/ccsit/8.jpg')}}" data-lightbox="gallery-item" title="Cultural Program"></a>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{asset('/assets/img/gallery/collegegallery/ccsit/5.jpg')}}" data-lightbox="gallery-item" class="text-decoration-none" title="Industrial Visit at IBM Pvt.Ltd.">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/ccsit/5.jpg')}}" alt="">
                    </div>
                    <h5 class="text-center mt-2">Industrial Visit at IBM Pvt.Ltd.</h5>
                    <div class="d-none">
                        <a href="{{asset('/assets/img/gallery/collegegallery/ccsit/18.webp')}}" data-lightbox="gallery-item" title="Industrial Visit at IBM Pvt.Ltd."></a>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{asset('/assets/img/gallery/collegegallery/ccsit/13.webp')}}" data-lightbox="gallery-item" class="text-decoration-none" title="Womens Day Celebration">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/ccsit/13.webp')}}" alt="">
                    </div>
                    <h5 class="text-center mt-2">Womens Day Celebration</h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{asset('/assets/img/gallery/collegegallery/ccsit/1.jpg')}}" data-lightbox="gallery-item" class="text-decoration-none" title="Fresher's Party">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/ccsit/1.jpg')}}" alt="">
                    </div>
                    <h5 class="text-center mt-2">Fresher's Party</h5>
                </a>
            </div>

            <div class="col-md-3 col-sm-6">
                <a href="{{asset('/assets/img/gallery/collegegallery/ccsit/11.jpg')}}" data-lightbox="gallery-item" class="text-decoration-none" title="IBM Career Education Certification Programme">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/ccsit/11.jpg')}}" alt="">
                    </div>
                    <h5 class="text-center mt-2">IBM Career Education Certification Programme</h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{asset('/assets/img/gallery/collegegallery/ccsit/21.jpg')}}" data-lightbox="gallery-item" class="text-decoration-none" title="Code. Create. Conquer: Internal Hackathon Moments">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/ccsit/21.jpg')}}" alt="">
                    </div>
                    <h5 class="text-center mt-2">Code. Create. Conquer: Internal Hackathon Moments</h5>
                    <div class="d-none">
                        <a href="{{asset('/assets/img/gallery/collegegallery/ccsit/10.jpg')}}" data-lightbox="gallery-item" title="Code. Create. Conquer: Internal Hackathon Moments"></a>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{asset('/assets/img/gallery/collegegallery/ccsit/16.webp')}}" data-lightbox="gallery-item" class="text-decoration-none" title="Real-World Exposure: Students at Rubicon Pvt. Ltd.">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/ccsit/16.webp')}}" alt="">
                    </div>
                    <h5 class="text-center mt-2">Real-World Exposure: Students at Rubicon Pvt. Ltd.</h5>
                </a>
            </div>

            <div class="col-md-3 col-sm-6">
                <a href="{{asset('/assets/img/gallery/collegegallery/ccsit/17.webp')}}" data-lightbox="gallery-item" class="text-decoration-none" title="World Wildlife Day: A Tribute to Nature’s Diversity">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/ccsit/17.webp')}}" alt="">
                    </div>
                    <h5 class="text-center mt-2">World Wildlife Day: A Tribute to Nature’s Diversity</h5>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{asset('/assets/img/gallery/collegegallery/ccsit/19.jpg')}}" data-lightbox="gallery-item" class="text-decoration-none" title="Fresher's party">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/ccsit/19.jpg')}}" alt="">
                    </div>
                    <h5 class="text-center mt-2">Fresher's Party</h5>
                    <div class="d-none">
                        <a href="{{asset('/assets/img/gallery/collegegallery/ccsit/20.jpg')}}" data-lightbox="gallery-item" title="Fresher's party"></a>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="{{asset('/assets/img/gallery/collegegallery/ccsit/14.webp')}}" data-lightbox="gallery-item" class="text-decoration-none" title="Glimpse of Certificate Distribution">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/ccsit/14.webp')}}" alt="">
                    </div>
                    <h5 class="text-center mt-2">Glimpse of Certificate Distribution</h5>
                </a>
            </div>


        </div>
    </div>
</div>
</div>

@endsection