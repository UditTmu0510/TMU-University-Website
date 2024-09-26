@extends('layouts.university.colleges.agriculture_with_sidebar')
@section('content')


<link rel="stylesheet" href="{{asset('/assets/css/journal.css')}}">

<div class="main-content">
    <div class="container">
        <div class="box d-none d-sm-block">
            <h1 class="tmu-text-primary tmu-page-heading"><span>Annual </span><span> Magazine</span></h1>
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <div class="book">
                            <div class="front">
                                <div class="cover">
                                    <a href="https://www.tmu.ac.in/pdf/agriculture/ED_5.pdf"
                                        target="_blank"><img
                                            src="{{asset('assets/img/magazines/agriculture/1.webp')}}"
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
                                    <a href="https://www.tmu.ac.in/pdf/agriculture/ED_4.pdf"
                                        target="_blank"><img
                                            src="{{asset('assets/img/magazines/agriculture/2.webp')}}"
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
                                    <a href="https://www.tmu.ac.in/pdf/agriculture/ED_3.pdf"
                                        target="_blank"><img
                                            src="{{asset('assets/img/magazines/agriculture/3.webp')}}"
                                            alt="Book Cover Image"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="book">
                            <div class="front">
                                <div class="cover">
                                    <a href="https://www.tmu.ac.in/pdf/agriculture/ED_2.pdf"
                                        target="_blank"><img
                                            src="{{asset('assets/img/magazines/agriculture/4.webp')}}"
                                            alt="Book Cover Image"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="book">
                            <div class="front">
                                <div class="cover">
                                    <a href="https://www.tmu.ac.in/pdf/agriculture/ED_1.pdf"
                                        target="_blank"><img
                                            src="{{asset('assets/img/magazines/agriculture/5.webp')}}"
                                            alt="Book Cover Image"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="d-block d-sm-none">
            <h3 class="hm mb-0 pb-0">Annual <span style="color:#ff7b00">Report</span></h3>

            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <div class="book-wrapper">
                            <div class="book-items">
                                <div class="main-book-wrap">
                                    <div class="book-cover">
                                        <div class="book-inside"></div>
                                        <div class="book-image">
                                            <img src="{{asset('assets/img/magazines/agriculture/1.webp')}}" />
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
                                            <img src="{{asset('assets/img/magazines/agriculture/2.webp')}}" />
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
                                            <img src="{{asset('assets/img/magazines/agriculture/3.webp')}}" />
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
                                            <img src="{{asset('assets/img/magazines/agriculture/4.webp')}}" />
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
                                            <img src="{{asset('assets/img/magazines/agriculture/5.webp')}}" />
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
</div>
<!-- Bootstrap JS and dependencies -->
@endsection