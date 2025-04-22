@extends('layouts.university.colleges.physiotherapy_with_sidebar')
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
        <div class="row">
            <div class="main-content mt-3 mt-sm-0 pt-2 pt-sm-5">
                <div class="container">
                    <div class="row justify-content-center gutter-10" data-lightbox="gallery">
                        <div class="col-md-3 col-sm-6">
                            <a href="{{asset('/assets/img/gallery/collegegallery/physiotherapy/33.jpg')}}" data-lightbox="gallery-item" class="text-decoration-none" title="Cutting-Edge Oncorehabilitation Strategies – Guest Lecture Highlights">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/physiotherapy/33.jpg')}}" alt="Guest Lecture Highlights">
                                </div>
                                <h5 class="text-center mt-2"></h5>
                                <div class="d-none">
                                <a href="{{asset('/assets/img/gallery/collegegallery/physiotherapy/34.jpg')}}" data-lightbox="gallery-item" title="Cutting-Edge Oncorehabilitation Strategies – Guest Lecture Highlights"></a>
                                <a href="{{asset('/assets/img/gallery/collegegallery/physiotherapy/35.jpg')}}" data-lightbox="gallery-item" title="Cutting-Edge Oncorehabilitation Strategies – Guest Lecture Highlights"></a>
                                <a href="{{asset('/assets/img/gallery/collegegallery/physiotherapy/36.jpg')}}" data-lightbox="gallery-item" title="Cutting-Edge Oncorehabilitation Strategies – Guest Lecture Highlights"></a>
                                <a href="{{asset('/assets/img/gallery/collegegallery/physiotherapy/37.jpg')}}" data-lightbox="gallery-item" title="Cutting-Edge Oncorehabilitation Strategies – Guest Lecture Highlights"></a>
                                <a href="{{asset('/assets/img/gallery/collegegallery/physiotherapy/38.jpg')}}" data-lightbox="gallery-item" title="Cutting-Edge Oncorehabilitation Strategies – Guest Lecture Highlights"></a>
                            </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="{{asset('/assets/img/gallery/collegegallery/physiotherapy/28.jpg')}}" data-lightbox="gallery-item" class="text-decoration-none" title="Celebrating Strength & Spirit – Women’s Day">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/physiotherapy/28.jpg')}}" alt="Women’s Day">
                                </div>
                                <h5 class="text-center mt-2"></h5>
                                <div class="d-none">
                                <a href="{{asset('/assets/img/gallery/collegegallery/physiotherapy/29.jpg')}}" data-lightbox="gallery-item" title="Celebrating Strength & Spirit – Women’s Day"></a>
                                <a href="{{asset('/assets/img/gallery/collegegallery/physiotherapy/30.jpg')}}" data-lightbox="gallery-item" title="Celebrating Strength & Spirit – Women’s Day"></a>
                                <a href="{{asset('/assets/img/gallery/collegegallery/physiotherapy/31.jpg')}}" data-lightbox="gallery-item" title="Celebrating Strength & Spirit – Women’s Day"></a>
                                <a href="{{asset('/assets/img/gallery/collegegallery/physiotherapy/32.jpg')}}" data-lightbox="gallery-item" title="Celebrating Strength & Spirit – Women’s Day"></a>
                            </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <a href="{{asset('/assets/img/gallery/collegegallery/physiotherapy/25.jpg')}}" data-lightbox="gallery-item" class="text-decoration-none" title="">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/physiotherapy/25.jpg')}}" alt="">
                                </div>
                                <h5 class="text-center mt-2"></h5>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="{{asset('/assets/img/gallery/collegegallery/physiotherapy/26.jpg')}}" data-lightbox="gallery-item" class="text-decoration-none" title="">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/physiotherapy/26.jpg')}}" alt="">
                                </div>
                                <h5 class="text-center mt-2"></h5>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="{{asset('/assets/img/gallery/collegegallery/physiotherapy/27.jpg')}}" data-lightbox="gallery-item" class="text-decoration-none" title="">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/physiotherapy/27.jpg')}}" alt="">
                                </div>
                                <h5 class="text-center mt-2"></h5>
                            </a>
                        </div>
                        
                        <div class="col-md-3 col-sm-6">
                            <a href="{{asset('/assets/img/gallery/collegegallery/physiotherapy/2.jpg')}}" data-lightbox="gallery-item" class="text-decoration-none" title="">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/physiotherapy/2.jpg')}}" alt="">
                                </div>
                                <h5 class="text-center mt-2"></h5>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="{{asset('/assets/img/gallery/collegegallery/physiotherapy/3.jpg')}}" data-lightbox="gallery-item" class="text-decoration-none" title="">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/physiotherapy/3.jpg')}}" alt="">
                                </div>
                                <h5 class="text-center mt-2"></h5>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="{{asset('/assets/img/gallery/collegegallery/physiotherapy/4.jpg')}}" data-lightbox="gallery-item" class="text-decoration-none" title="">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/physiotherapy/4.jpg')}}" alt="">
                                </div>
                                <h5 class="text-center mt-2"></h5>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="{{asset('/assets/img/gallery/collegegallery/physiotherapy/5.jpg')}}" data-lightbox="gallery-item" class="text-decoration-none" title="">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/physiotherapy/5.jpg')}}" alt="">
                                </div>
                                <h5 class="text-center mt-2"></h5>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="{{asset('/assets/img/gallery/collegegallery/physiotherapy/6.jpg')}}" data-lightbox="gallery-item" class="text-decoration-none" title="">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/physiotherapy/6.jpg')}}" alt="">
                                </div>
                                <h5 class="text-center mt-2"></h5>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="{{asset('/assets/img/gallery/collegegallery/physiotherapy/7.jpg')}}" data-lightbox="gallery-item" class="text-decoration-none" title="">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/physiotherapy/7.jpg')}}" alt="">
                                </div>
                                <h5 class="text-center mt-2"></h5>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="{{asset('/assets/img/gallery/collegegallery/physiotherapy/8.webp')}}" data-lightbox="gallery-item" class="text-decoration-none" title="">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/physiotherapy/8.webp')}}" alt="">
                                </div>
                                <h5 class="text-center mt-2"></h5>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="{{asset('/assets/img/gallery/collegegallery/physiotherapy/9.webp')}}" data-lightbox="gallery-item" class="text-decoration-none" title="">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/physiotherapy/9.webp')}}" alt="">
                                </div>
                                <h5 class="text-center mt-2"></h5>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="{{asset('/assets/img/gallery/collegegallery/physiotherapy/10.webp')}}" data-lightbox="gallery-item" class="text-decoration-none" title="">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/physiotherapy/10.webp')}}" alt="">
                                </div>
                                <h5 class="text-center mt-2"></h5>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="{{asset('/assets/img/gallery/collegegallery/physiotherapy/11.webp')}}" data-lightbox="gallery-item" class="text-decoration-none" title="">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/physiotherapy/11.webp')}}" alt="">
                                </div>
                                <h5 class="text-center mt-2"></h5>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="{{asset('/assets/img/gallery/collegegallery/physiotherapy/12.webp')}}" data-lightbox="gallery-item" class="text-decoration-none" title="">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/physiotherapy/12.webp')}}" alt="">
                                </div>
                                <h5 class="text-center mt-2"></h5>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="{{asset('/assets/img/gallery/collegegallery/physiotherapy/13.webp')}}" data-lightbox="gallery-item" class="text-decoration-none" title="">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/physiotherapy/13.webp')}}" alt="">
                                </div>
                                <h5 class="text-center mt-2"></h5>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="{{asset('/assets/img/gallery/collegegallery/physiotherapy/14.webp')}}" data-lightbox="gallery-item" class="text-decoration-none" title="">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/physiotherapy/14.webp')}}" alt="">
                                </div>
                                <h5 class="text-center mt-2"></h5>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="{{asset('/assets/img/gallery/collegegallery/physiotherapy/15.webp')}}" data-lightbox="gallery-item" class="text-decoration-none" title="">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/physiotherapy/15.webp')}}" alt="">
                                </div>
                                <h5 class="text-center mt-2"></h5>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="{{asset('/assets/img/gallery/collegegallery/physiotherapy/16.webp')}}" data-lightbox="gallery-item" class="text-decoration-none" title="">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/physiotherapy/16.webp')}}" alt="">
                                </div>
                                <h5 class="text-center mt-2"></h5>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="{{asset('/assets/img/gallery/collegegallery/physiotherapy/17.webp')}}" data-lightbox="gallery-item" class="text-decoration-none" title="">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/physiotherapy/17.webp')}}" alt="">
                                </div>
                                <h5 class="text-center mt-2"></h5>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="{{asset('/assets/img/gallery/collegegallery/physiotherapy/18.webp')}}" data-lightbox="gallery-item" class="text-decoration-none" title="">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/physiotherapy/18.webp')}}" alt="">
                                </div>
                                <h5 class="text-center mt-2"></h5>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="{{asset('/assets/img/gallery/collegegallery/physiotherapy/19.jpg')}}" data-lightbox="gallery-item" class="text-decoration-none" title="">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/physiotherapy/19.jpg')}}" alt="">
                                </div>
                                <h5 class="text-center mt-2"></h5>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="{{asset('/assets/img/gallery/collegegallery/physiotherapy/20.jpg')}}" data-lightbox="gallery-item" class="text-decoration-none" title="">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/physiotherapy/20.jpg')}}" alt="">
                                </div>
                                <h5 class="text-center mt-2"></h5>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="{{asset('/assets/img/gallery/collegegallery/physiotherapy/21.jpg')}}" data-lightbox="gallery-item" class="text-decoration-none" title="">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/physiotherapy/21.jpg')}}" alt="">
                                </div>
                                <h5 class="text-center mt-2"></h5>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="{{asset('/assets/img/gallery/collegegallery/physiotherapy/22.jpg')}}" data-lightbox="gallery-item" class="text-decoration-none" title="">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/physiotherapy/22.jpg')}}" alt="">
                                </div>
                                <h5 class="text-center mt-2"></h5>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="{{asset('/assets/img/gallery/collegegallery/physiotherapy/23.jpg')}}" data-lightbox="gallery-item" class="text-decoration-none" title="">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/physiotherapy/23.jpg')}}" alt="">
                                </div>
                                <h5 class="text-center mt-2"></h5>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="{{asset('/assets/img/gallery/collegegallery/physiotherapy/24.jpg')}}" data-lightbox="gallery-item" class="text-decoration-none" title="">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{asset('/assets/img/gallery/collegegallery/physiotherapy/24.jpg')}}" alt="">
                                </div>
                                <h5 class="text-center mt-2"></h5>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


@endsection