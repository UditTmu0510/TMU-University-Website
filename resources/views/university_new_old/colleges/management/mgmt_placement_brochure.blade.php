@extends('layouts.university.colleges.tmimt_with_sidebar')
@section('content')
<link rel="stylesheet" href="{{asset('/assets/css/journal.css')}}">

<div class="main-content">
    <div class="container">
        <div class="box d-none d-sm-block">
            <h1 class="tmu-text-primary tmu-page-heading pt-md-5"><span>Placement </span><span> Brochure</span></h1>
            <div class="container">
                <div class="row">
                    <div class="bookshelf"></div>
                    <div class="col-md-2">
                        <div class="book">
                            <div class="front">
                                <div class="cover">
                                    <a href="https://www.tmu.ac.in/pdf/placement_brochure/TMIMT/placement_brochure_2022_23.pdf"
                                        target="_blank"><img
                                            src="{{asset('/assets/img/placement_brochure/management/brochure_22_23.jpg')}}"
                                            alt="Book Cover Image"></a>
                                </div>
                            </div>
                            <div class="left-side_ctld">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="book">
                            <div class="front">
                                <div class="cover">
                                    <a href="https://www.tmu.ac.in/pdf/placement_brochure/TMIMT/placement-brochure-2021-22.pdf"
                                        target="_blank"><img
                                            src="{{asset('/assets/img/placement_brochure/management/brochure_21_22.webp')}}"
                                            alt="Book Cover Image"></a>
                                </div>
                            </div>
                            <div class="left-side_ctld">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="book">
                            <div class="front">
                                <div class="cover">
                                    <a href="https://www.tmu.ac.in/pdf/placement_brochure/TMIMT/placement-brochure-2020-21.pdf"
                                        target="_blank"><img
                                            src="{{asset('/assets/img/placement_brochure/management/brochure_20_21.webp')}}"
                                            alt="Book Cover Image"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="book">
                            <div class="front">
                                <div class="cover">
                                    <a href="https://www.tmu.ac.in/pdf/placement_brochure/TMIMT/placement-brochure-2019-20.pdf"
                                        target="_blank"><img
                                            src="{{asset('/assets/img/placement_brochure/management/brochure_19_20.webp')}}"
                                            alt="Book Cover Image"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="book">
                            <div class="front">
                                <div class="cover">
                                    <a href="https://www.tmu.ac.in/pdf/placement_brochure/TMIMT/placement-brochure-2018-19.pdf"
                                        target="_blank"><img
                                            src="{{asset('/assets/img/placement_brochure/management/brochure_18_19.webp')}}"
                                            alt="Book Cover Image"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="box d-none d-sm-block">
            <div class="container">
                <div class="row">
                    <div class="bookshelf"></div>
                    <div class="col-md-2">
                        <div class="book">
                            <div class="front">
                                <div class="cover">
                                    <a href="https://www.tmu.ac.in/pdf/placement_brochure/TMIMT/placement-brochure-2017-18.pdf"
                                        target="_blank"><img
                                            src="{{asset('/assets/img/placement_brochure/management/brochure_17_18.webp')}}"
                                            alt="Book Cover Image"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="book">
                            <div class="front">
                                <div class="cover">
                                    <a href="https://www.tmu.ac.in/pdf/placement_brochure/TMIMT/placement-brochure-2016-17.pdf"
                                        target="_blank"><img
                                            src="{{asset('/assets/img/placement_brochure/management/brochure_16_17.webp')}}"
                                            alt="Book Cover Image"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="d-block d-sm-none">
        <h3 class="hm mb-0 pb-0">Placement <span style="color:#ff7b00"> Brochure</span></h3>

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-inner">

                <div class="carousel-item active">
                    <div class="book-wrapper">
                        <div class="book-items">
                            <div class="main-book-wrap">
                                <div class="book-cover">
                                    <div class="book-inside"></div>
                                    <div class="book-image">
                                        <img src="{{asset('/assets/img/placement_brochure/management/brochure_22_23.jpg')}}" />
                                        <div class="effect"></div>
                                        <div class="light"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="book-wrapper">
                        <div class="book-items">
                            <div class="main-book-wrap">
                                <div class="book-cover">
                                    <div class="book-inside"></div>
                                    <div class="book-image">
                                        <img src="{{asset('/assets/img/placement_brochure/management/brochure_21_22.webp')}}" />
                                        <div class="effect"></div>
                                        <div class="light"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="book-wrapper">
                        <div class="book-items">
                            <div class="main-book-wrap">
                                <div class="book-cover">
                                    <div class="book-inside"></div>
                                    <div class="book-image">
                                        <img src="{{asset('/assets/img/placement_brochure/management/brochure_20_21.webp')}}" />
                                        <div class="effect"></div>
                                        <div class="light"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="book-wrapper">
                        <div class="book-items">
                            <div class="main-book-wrap">
                                <div class="book-cover">
                                    <div class="book-inside"></div>
                                    <div class="book-image">
                                        <img src="{{asset('/assets/img/placement_brochure/management/brochure_19_20.webp')}}" />
                                        <div class="effect"></div>
                                        <div class="light"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="book-wrapper">
                        <div class="book-items">
                            <div class="main-book-wrap">
                                <div class="book-cover">
                                    <div class="book-inside"></div>
                                    <div class="book-image">
                                        <img src="{{asset('/assets/img/placement_brochure/management/brochure_18_19.webp')}}" />
                                        <div class="effect"></div>
                                        <div class="light"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="book-wrapper">
                        <div class="book-items">
                            <div class="main-book-wrap">
                                <div class="book-cover">
                                    <div class="book-inside"></div>
                                    <div class="book-image">
                                        <img src="{{asset('/assets/img/placement_brochure/management/brochure_17_18.webp')}}" />
                                        <div class="effect"></div>
                                        <div class="light"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="book-wrapper">
                        <div class="book-items">
                            <div class="main-book-wrap">
                                <div class="book-cover">
                                    <div class="book-inside"></div>
                                    <div class="book-image">
                                        <img src="{{asset('/assets/img/placement_brochure/management/brochure_16_17.webp')}}" />
                                        <div class="effect"></div>
                                        <div class="light"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </section>

</div>
</div>


@endsection