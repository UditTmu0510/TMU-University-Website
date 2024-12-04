@extends('layouts.university.colleges.ccsit_with_sidebar')
@section('content')

<style>
    .team-desc>.team-title>* {
        font-family: 'poppins' !important;
    }

    .container .container-jnrl {
        z-index: 1;
        perspective: 3000px;
        display: flex;
    }

    .book {
        position: relative;
        display: block;
        width: 150px;
        height: 275px;
        margin: 3% 10px;
        border-radius: 2px 4px 4px 2px;
        background: linear-gradient(45deg, #001055 0%, #001055 100%);
        font-family: acumin-pro, sans-serif;
        font-weight: 400;
        color: #001055;
        transform-style: preserve-3d;
        transition: transform 0.5s;
        transform: rotateY(40deg);
        z-index: 1;
    }

    .book:hover {
        transform: rotateY(0deg);
        z-index: 12;
        transition: scale 0.5s;
        scale: 1.1;
    }

    .book>div,
    .front>div {
        display: block;
        position: absolute;
    }

    .front {
        transform-style: preserve-3d;
        transform-origin: 0% 50%;
        transition: transform 0.5s;
        transform: translate3d(0, 0, 10px);
        z-index: 10;
    }

    .front>div {
        width: 200px;
        height: 275px;
    }

    .left-side {
        width: 20px;
        left: -10px;
        height: 275px;
        background-color: #001055;
        transform: rotate3d(0, 1, 0, -90deg);
    }

    .cover svg {
        position: absolute;
        top: 50%;
        left: 45%;
        margin-top: -50px;
        margin-left: -55px;
        width: 150px;
    }

    #eye-right {
        padding-left: 85px;
    }

    .cover .num-up {
        position: absolute;
        top: 32px;
        left: 27px;
        letter-spacing: 25px;
        transform: rotate(-90deg);
    }

    .cover .num-down {
        position: relative;
        top: 33px;
        left: -47px;
        transform: rotate(-90deg);
    }

    .author {
        font-family: acumin-pro, sans-serif;
        font-weight: 400;
        position: absolute;
        top: 237px;
        left: 25px;
        opacity: 0.8;
    }

    .front>div {
        border-radius: 0 3px 3px 0;
        box-shadow: inset 2px 0 5px rgba(0, 0, 0, 0.1);
    }

    .front:after {
        content: '';
        position: absolute;
        top: 1px;
        bottom: 1px;
        left: -1px;
        width: 1px;
    }

    .cover:after {
        content: '';
        position: absolute;
        top: 0;
        left: 5px;
        bottom: 0;
        width: 1px;
        background: rgba(0, 0, 0, 0.1);
        box-shadow: 1px 0 2px rgba(255, 255, 255, 0.1);
    }

    .left-side h2 {
        width: 250px;
        height: 20px;
        color: #2b2b2b;
        font-size: 7.5px;
        line-height: 20px;
        padding-right: 5px;
        text-align: right;
        transform-origin: 0 0;
        transform: rotate(90deg) translateY(-20px);
    }

    .cover {
        background: linear-gradient(45deg, #DAD5DC 0%, #f2ebf4 100%);
    }

    .left-side h2 span:first-child {
        font-weight: 400;
        font-size: 12px;
        padding-right: 10px;
        z-index: 11;
    }

    .left-side h2 span:last-child {
        font-family: acumin-pro, sans-serif;
    }

    /* Bookshelf style */
    .bookshelf {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 1100px;
        height: 50px;
        background-image: url('assets/img/annual_report/table.png');
        /* Replace 'path/to/your/bookshelf-image.jpg' with the actual path to your bookshelf image */
        background-size: cover;
        background-position: center;
    }

    .hm {
        font-size: 24px;
        color: #001055;
        margin: 30px;
        font-weight: 700;
    }

    .box {
        background-color: #EFEFEF;
        max-width: 1300px;
    }
</style>

<link rel="stylesheet" href="{{asset('/assets/css/journal.css')}}">
<style>
    .bookshelf {
        width: 100%
    }
</style>

<div class="main-content">
    <div class="container">
        <div class="box d-none d-sm-block">
            <h1 class="tmu-text-primary tmu-page-heading pt-md-5"><span>Event </span><span> Magazines</span></h1>
            <div class="container container-jnrl">
                <div class="bookshelf"></div>


                <div class="book">
                    <div class="front">
                        <div class="cover">
                            <a href="{{asset('/assets/pdf/ccsit/event-magazine/v09-issue-3.pdf')}}" target="_blank"><img
                                    src="{{asset('/assets/img/magazines/CCSIT/1.webp')}}"
                                    alt="Book Cover Image"></a>
                        </div>
                    </div>
                    <div class="left-side">
                        <h2>
                            <span>Computing Vision </span>
                        </h2>
                    </div>
                </div>


                <div class="book">
                    <div class="front">
                        <div class="cover">
                            <a href="{{asset('/assets/pdf/ccsit/event-magazine/V09-issue-2.pdf')}}" target="_blank"><img
                                    src="{{asset('/assets/img/magazines/CCSIT/2.webp')}}"
                                    alt="Book Cover Image"></a>
                        </div>
                    </div>
                    <div class="left-side">
                        <h2>
                            <span>Computing Vision</span>
                        </h2>
                    </div>
                </div>


                <div class="book">
                    <div class="front">
                        <div class="cover">
                            <a href="{{asset('/assets/pdf/ccsit/event-magazine/35.pdf')}}" target="_blank"><img
                                    src="{{asset('/assets/img/magazines/CCSIT/3.webp')}}"
                                    alt="Book Cover Image"></a>
                        </div>
                    </div>
                    <div class="left-side">
                        <h2>
                            <span>Computing Vision</span>
                        </h2>
                    </div>
                </div>


                <div class="book">
                    <div class="front">
                        <div class="cover">
                            <a href="{{asset('/assets/pdf/ccsit/event-magazine/34.pdf')}}" target="_blank"><img
                                    src="{{asset('/assets/img/magazines/CCSIT/4.webp')}}"
                                    alt="Book Cover Image"></a>
                        </div>
                    </div>
                    <div class="left-side">
                        <h2>
                            <span>Computing Vision</span>
                        </h2>
                    </div>
                </div>


                <div class="book">
                    <div class="front">
                        <div class="cover">
                            <a href="{{asset('/assets/pdf/ccsit/event-magazine/v08-iIssue-3.pdf')}}" target="_blank"><img
                                    src="{{asset('/assets/img/magazines/CCSIT/5.webp')}}"
                                    alt="Book Cover Image"></a>
                        </div>
                    </div>
                    <div class="left-side">
                        <h2>
                            <span>Computing Vision</span>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="box d-none d-sm-block">
            <div class="container container-jnrl">
                <div class="bookshelf"></div>

                <div class="book">
                    <div class="front">
                        <div class="cover">
                            <a href="{{asset('/assets/pdf/ccsit/event-magazine/33.pdf')}}" target="_blank"><img
                                    src="{{asset('/assets/img/magazines/CCSIT/6.webp')}}"
                                    alt="Book Cover Image"></a>
                        </div>
                    </div>
                    <div class="left-side">
                        <h2>
                            <span>Computing Vision</span>
                        </h2>
                    </div>
                </div>

                <div class="book">
                    <div class="front">
                        <div class="cover">
                            <a href="{{asset('/assets/pdf/ccsit/event-magazine/31.pdf')}}" target="_blank"><img
                                    src="{{asset('/assets/img/magazines/CCSIT/7.webp')}}"
                                    alt="Book Cover Image"></a>
                        </div>
                    </div>
                    <div class="left-side">
                        <h2>
                            <span>Computing Vision</span>
                        </h2>
                    </div>
                </div>

                <div class="book">
                    <div class="front">
                        <div class="cover">
                            <a href="{{asset('/assets/pdf/ccsit/event-magazine/31.pdf')}}" target="_blank"><img
                                    src="{{asset('/assets/img/magazines/CCSIT/8.webp')}}"
                                    alt="Book Cover Image"></a>
                        </div>
                    </div>
                    <div class="left-side">
                        <h2>
                            <span>Computing Vision</span>
                        </h2>
                    </div>
                </div>


                <div class="book">
                    <div class="front">
                        <div class="cover">
                            <a href="{{asset('/assets/pdf/ccsit/event-magazine/30.pdf')}}" target="_blank"><img
                                    src="{{asset('/assets/img/magazines/CCSIT/9.webp')}}"
                                    alt="Book Cover Image"></a>
                        </div>
                    </div>
                    <div class="left-side">
                        <h2>
                            <span>Computing Vision</span>
                        </h2>
                    </div>
                </div>

                <div class="book">
                    <div class="front">
                        <div class="cover">
                            <a href="{{asset('/assets/pdf/ccsit/event-magazine/29.pdf')}}" target="_blank"><img
                                    src="{{asset('/assets/img/magazines/CCSIT/10.webp')}}"
                                    alt="Book Cover Image"></a>
                        </div>
                    </div>
                    <div class="left-side">
                        <h2>
                            <span>Computing Vision</span>
                        </h2>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="box d-none d-sm-block">
            <div class="container container-jnrl">
                <div class="bookshelf"></div>

                <div class="book">
                    <div class="front">
                        <div class="cover">
                            <a href="{{asset('/assets/pdf/ccsit/event-magazine/28.pdf')}}" target="_blank"><img
                                    src="{{asset('/assets/img/magazines/CCSIT/11.webp')}}"
                                    alt="Book Cover Image"></a>
                        </div>
                    </div>
                    <div class="left-side">
                        <h2>
                            <span>Computing Vision</span>
                        </h2>
                    </div>
                </div>

                <div class="book">
                    <div class="front">
                        <div class="cover">
                            <a href="{{asset('/assets/pdf/ccsit/event-magazine/26.pdf')}}" target="_blank"><img
                                    src="{{asset('/assets/img/magazines/CCSIT/12.webp')}}"
                                    alt="Book Cover Image"></a>
                        </div>
                    </div>
                    <div class="left-side">
                        <h2>
                            <span>Computing Vision</span>
                        </h2>
                    </div>
                </div>


                <div class="book">
                    <div class="front">
                        <div class="cover">
                            <a href="{{asset('/assets/pdf/ccsit/event-magazine/26.pdf')}}" target="_blank"><img
                                    src="{{asset('/assets/img/magazines/CCSIT/13.webp')}}"
                                    alt="Book Cover Image"></a>
                        </div>
                    </div>
                    <div class="left-side">
                        <h2>
                            <span>Computing Vision</span>
                        </h2>
                    </div>
                </div>

                <div class="book">
                    <div class="front">
                        <div class="cover">
                            <a href="{{asset('/assets/pdf/ccsit/event-magazine/25.pdf')}}" target="_blank"><img
                                    src="{{asset('/assets/img/magazines/CCSIT/14.webp')}}"
                                    alt="Book Cover Image"></a>
                        </div>
                    </div>
                    <div class="left-side">
                        <h2>
                            <span>Computing Vision</span>
                        </h2>
                    </div>
                </div>

                <div class="book">
                    <div class="front">
                        <div class="cover">
                            <a href="{{asset('/assets/pdf/ccsit/event-magazine/24.pdf')}}" target="_blank"><img
                                    src="{{asset('/assets/img/magazines/CCSIT/15.webp')}}"
                                    alt="Book Cover Image"></a>
                        </div>
                    </div>
                    <div class="left-side">
                        <h2>
                            <span>Computing Vision</span>
                        </h2>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="box d-none d-sm-block">
            <div class="container container-jnrl">
                <div class="bookshelf"></div>

                <div class="book">
                    <div class="front">
                        <div class="cover">
                            <a href="{{asset('/assets/pdf/ccsit/event-magazine/23.pdf')}}" target="_blank"><img
                                                src="{{asset('/assets/img/magazines/CCSIT/16.webp')}}"
                                                alt="Book Cover Image"></a>
                        </div>
                    </div>
                    <div class="left-side">
                        <h2>
                            <span>Computing Vision</span>
                        </h2>
                    </div>
                </div>

                <div class="book">
                    <div class="front">
                        <div class="cover">
                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/22.pdf')}}" target="_blank"><img
                                                src="{{asset('/assets/img/magazines/CCSIT/17.webp')}}"
                                                alt="Book Cover Image"></a>
                        </div>
                    </div>
                    <div class="left-side">
                        <h2>
                            <span>Computing Vision</span>
                        </h2>
                    </div>
                </div>


                <div class="book">
                    <div class="front">
                        <div class="cover">
                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/21.pdf')}}" target="_blank"><img
                                                src="{{asset('/assets/img/magazines/CCSIT/18.webp')}}"
                                                alt="Book Cover Image"></a>
                        </div>
                    </div>
                    <div class="left-side">
                        <h2>
                            <span>Computing Vision</span>
                        </h2>
                    </div>
                </div>

                <div class="book">
                    <div class="front">
                        <div class="cover">
                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/20.pdf')}}" target="_blank"><img
                                                src="{{asset('/assets/img/magazines/CCSIT/19.webp')}}"
                                                alt="Book Cover Image"></a>
                        </div>
                    </div>
                    <div class="left-side">
                        <h2>
                            <span>Computing Vision</span>
                        </h2>
                    </div>
                </div>

                <div class="book">
                    <div class="front">
                        <div class="cover">
                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/19.pdf')}}" target="_blank"><img
                                                src="{{asset('/assets/img/magazines/CCSIT/20.webp')}}"
                                                alt="Book Cover Image"></a>
                        </div>
                    </div>
                    <div class="left-side">
                        <h2>
                            <span>Computing Vision</span>
                        </h2>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="box d-none d-sm-block">
            <div class="container container-jnrl">
                <div class="bookshelf"></div>

                <div class="book">
                    <div class="front">
                        <div class="cover">
                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/18.pdf')}}" target="_blank"><img
                                                src="{{asset('/assets/img/magazines/CCSIT/21.webp')}}"
                                                alt="Book Cover Image"></a>
                        </div>
                    </div>
                    <div class="left-side">
                        <h2>
                            <span>Computing Vision</span>
                        </h2>
                    </div>
                </div>

                <div class="book">
                    <div class="front">
                        <div class="cover">
                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/17.pdf')}}" target="_blank"><img
                                                src="{{asset('/assets/img/magazines/CCSIT/22.webp')}}"
                                                alt="Book Cover Image"></a>
                        </div>
                    </div>
                    <div class="left-side">
                        <h2>
                            <span>Computing Vision</span>
                        </h2>
                    </div>
                </div>


                <div class="book">
                    <div class="front">
                        <div class="cover">
                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/16.pdf')}}" target="_blank"><img
                                                src="{{asset('/assets/img/magazines/CCSIT/23.webp')}}"
                                                alt="Book Cover Image"></a>
                        </div>
                    </div>
                    <div class="left-side">
                        <h2>
                            <span>Computing Vision</span>
                        </h2>
                    </div>
                </div>

                <div class="book">
                    <div class="front">
                        <div class="cover">
                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/15.pdf')}}" target="_blank"><img
                                                src="{{asset('/assets/img/magazines/CCSIT/24.webp')}}"
                                                alt="Book Cover Image"></a>
                        </div>
                    </div>
                    <div class="left-side">
                        <h2>
                            <span>Computing Vision</span>
                        </h2>
                    </div>
                </div>

                <div class="book">
                    <div class="front">
                        <div class="cover">
                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/14.pdf')}}" target="_blank"><img
                                                src="{{asset('/assets/img/magazines/CCSIT/25.webp')}}"
                                                alt="Book Cover Image"></a>
                        </div>
                    </div>
                    <div class="left-side">
                        <h2>
                            <span>Computing Vision</span>
                        </h2>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="box d-none d-sm-block">
            <div class="container container-jnrl">
                <div class="bookshelf"></div>

                <div class="book">
                    <div class="front">
                        <div class="cover">
                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/13.pdf')}}" target="_blank"><img
                                                src="{{asset('/assets/img/magazines/CCSIT/26.webp')}}"
                                                alt="Book Cover Image"></a>
                        </div>
                    </div>
                    <div class="left-side">
                        <h2>
                            <span>Computing Vision</span>
                        </h2>
                    </div>
                </div>

                <div class="book">
                    <div class="front">
                        <div class="cover">
                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/12.pdf')}}" target="_blank"><img
                                                src="{{asset('/assets/img/magazines/CCSIT/27.webp')}}"
                                                alt="Book Cover Image"></a>
                        </div>
                    </div>
                    <div class="left-side">
                        <h2>
                            <span>Computing Vision</span>
                        </h2>
                    </div>
                </div>


                <div class="book">
                    <div class="front">
                        <div class="cover">
                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/11.pdf')}}" target="_blank"><img
                                                src="{{asset('/assets/img/magazines/CCSIT/28.webp')}}"
                                                alt="Book Cover Image"></a>
                        </div>
                    </div>
                    <div class="left-side">
                        <h2>
                            <span>Computing Vision</span>
                        </h2>
                    </div>
                </div>

                <div class="book">
                    <div class="front">
                        <div class="cover">
                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/10.pdf')}}" target="_blank"><img
                                                src="{{asset('/assets/img/magazines/CCSIT/29.webp')}}"
                                                alt="Book Cover Image"></a>
                        </div>
                    </div>
                    <div class="left-side">
                        <h2>
                            <span>Computing Vision</span>
                        </h2>
                    </div>
                </div>

                <div class="book">
                    <div class="front">
                        <div class="cover">
                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/9.pdf')}}" target="_blank"><img
                                                src="{{asset('/assets/img/magazines/CCSIT/30.webp')}}"
                                                alt="Book Cover Image"></a>
                        </div>
                    </div>
                    <div class="left-side">
                        <h2>
                            <span>Computing Vision</span>
                        </h2>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="box d-none d-sm-block">
            <div class="container container-jnrl">
                <div class="bookshelf"></div>

                <div class="book">
                    <div class="front">
                        <div class="cover">
                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/8.pdf')}}" target="_blank"><img
                                                src="{{asset('/assets/img/magazines/CCSIT/31.webp')}}"
                                                alt="Book Cover Image"></a>
                        </div>
                    </div>
                    <div class="left-side">
                        <h2>
                            <span>Computing Vision</span>
                        </h2>
                    </div>
                </div>

                <div class="book">
                    <div class="front">
                        <div class="cover">
                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/7.pdf')}}" target="_blank"><img
                                                src="{{asset('/assets/img/magazines/CCSIT/32.webp')}}"
                                                alt="Book Cover Image"></a>
                        </div>
                    </div>
                    <div class="left-side">
                        <h2>
                            <span>Computing Vision</span>
                        </h2>
                    </div>
                </div>


                <div class="book">
                    <div class="front">
                        <div class="cover">
                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/6.pdf')}}" target="_blank"><img
                                                src="{{asset('/assets/img/magazines/CCSIT/33.webp')}}"
                                                alt="Book Cover Image"></a>
                        </div>
                    </div>
                    <div class="left-side">
                        <h2>
                            <span>Computing Vision</span>
                        </h2>
                    </div>
                </div>

                <div class="book">
                    <div class="front">
                        <div class="cover">
                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/5.pdf')}}" target="_blank"><img
                                                src="{{asset('/assets/img/magazines/CCSIT/34.webp')}}"
                                                alt="Book Cover Image"></a>
                        </div>
                    </div>
                    <div class="left-side">
                        <h2>
                            <span>Computing Vision</span>
                        </h2>
                    </div>
                </div>

                <div class="book">
                    <div class="front">
                        <div class="cover">
                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/4.pdf')}}" target="_blank"><img
                                                src="{{asset('/assets/img/magazines/CCSIT/35.webp')}}"
                                                alt="Book Cover Image"></a>
                        </div>
                    </div>
                    <div class="left-side">
                        <h2>
                            <span>Computing Vision</span>
                        </h2>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="box d-none d-sm-block">
            <div class="container container-jnrl">
                <div class="bookshelf"></div>

                <div class="book">
                    <div class="front">
                        <div class="cover">
                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/3.pdf')}}" target="_blank"><img
                                                src="{{asset('/assets/img/magazines/CCSIT/36.webp')}}"
                                                alt="Book Cover Image"></a>
                        </div>
                    </div>
                    <div class="left-side">
                        <h2>
                            <span>Computing Vision</span>
                        </h2>
                    </div>
                </div>

                <div class="book">
                    <div class="front">
                        <div class="cover">
                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/2.pdf')}}" target="_blank"><img
                                                src="{{asset('/assets/img/magazines/CCSIT/37.webp')}}"
                                                alt="Book Cover Image"></a>
                        </div>
                    </div>
                    <div class="left-side">
                        <h2>
                            <span>Computing Vision</span>
                        </h2>
                    </div>
                </div>


                <div class="book">
                    <div class="front">
                        <div class="cover">
                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/1.pdf')}}" target="_blank"><img
                                                src="{{asset('/assets/img/magazines/CCSIT/38.webp')}}"
                                                alt="Book Cover Image"></a>
                        </div>
                    </div>
                    <div class="left-side">
                        <h2>
                            <span>Computing Vision</span>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="d-block d-sm-none">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="book-wrapper">
                        <div class="book-items">
                            <div class="main-book-wrap">
                                <div class="book-cover">
                                    <div class="book-inside"></div>
                                    <div class="book-image">
                                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/v09-issue-3.pdf')}}" target="_blank">
                                            <img src="{{asset('/assets/img/magazines/CCSIT/1.webp')}}" />
                                        </a>

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
                                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/V09-issue-2.pdf')}}" target="_blank">
                                            <img src="{{asset('/assets/img/magazines/CCSIT/2.webp')}}" />
                                        </a>

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
                                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/35.pdf')}}" target="_blank">
                                            <img src="{{asset('/assets/img/magazines/CCSIT/3.webp')}}" />

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
                                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/34.pdf')}}" target="_blank">
                                            <img src="{{asset('/assets/img/magazines/CCSIT/4.webp')}}" />
                                        </a>

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
                                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/v08-iIssue-3.pdf')}}" target="_blank">
                                            <img src="{{asset('/assets/img/magazines/CCSIT/5.webp')}}" />
                                        </a>

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
                                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/33.pdf')}}" target="_blank">
                                            <img src="{{asset('/assets/img/magazines/CCSIT/6.webp')}}" />
                                        </a>

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
                                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/32.pdf')}}" target="_blank">
                                            <img src="{{asset('/assets/img/magazines/CCSIT/7.webp')}}" />
                                        </a>

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
                                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/31.pdf')}}" target="_blank">
                                            <img src="{{asset('/assets/img/magazines/CCSIT/8.webp')}}" />
                                        </a>

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
                                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/30.pdf')}}" target="_blank">
                                            <img src="{{asset('/assets/img/magazines/CCSIT/9.webp')}}" />
                                        </a>

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
                                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/29.pdf')}}" target="_blank">
                                            <img src="{{asset('/assets/img/magazines/CCSIT/10.webp')}}" />
                                        </a>

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
                                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/28.pdf')}}" target="_blank">
                                            <img src="{{asset('/assets/img/magazines/CCSIT/11.webp')}}" />
                                        </a>

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
                                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/26.pdf')}}" target="_blank">
                                            <img src="{{asset('/assets/img/magazines/CCSIT/12.webp')}}" />
                                        </a>

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
                                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/26.pdf')}}" target="_blank">
                                            <img src="{{asset('/assets/img/magazines/CCSIT/13.webp')}}" />
                                        </a>

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
                                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/25.pdf')}}" target="_blank">
                                            <img src="{{asset('/assets/img/magazines/CCSIT/14.webp')}}" />
                                        </a>

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
                                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/23.pdf')}}" target="_blank">
                                            <img src="{{asset('/assets/img/magazines/CCSIT/15.webp')}}" />
                                        </a>

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
                                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/24.pdf')}}" target="_blank">
                                            <img src="{{asset('/assets/img/magazines/CCSIT/16.webp')}}" />
                                        </a>

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
                                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/22.pdf')}}" target="_blank">
                                            <img src="{{asset('/assets/img/magazines/CCSIT/17.webp')}}" />
                                        </a>

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
                                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/21.pdf')}}" target="_blank">
                                            <img src="{{asset('/assets/img/magazines/CCSIT/18.webp')}}" />
                                        </a>

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
                                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/20.pdf')}}" target="_blank">
                                            <img src="{{asset('/assets/img/magazines/CCSIT/19.webp')}}" />
                                        </a>

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
                                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/19.pdf')}}" target="_blank">
                                            <img src="{{asset('/assets/img/magazines/CCSIT/20.webp')}}" />
                                        </a>

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
                                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/18.pdf')}}" target="_blank">
                                            <img src="{{asset('/assets/img/magazines/CCSIT/21.webp')}}" />
                                        </a>

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
                                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/17.pdf')}}" target="_blank">
                                            <img src="{{asset('/assets/img/magazines/CCSIT/22.webp')}}" />
                                        </a>

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
                                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/16.pdf')}}" target="_blank">
                                            <img src="{{asset('/assets/img/magazines/CCSIT/23.webp')}}" />
                                        </a>

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
                                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/15.pdf')}}" target="_blank">
                                            <img src="{{asset('/assets/img/magazines/CCSIT/24.webp')}}" />
                                        </a>

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
                                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/14.pdf')}}" target="_blank">
                                            <img src="{{asset('/assets/img/magazines/CCSIT/25.webp')}}" />
                                        </a>

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
                                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/13.pdf')}}" target="_blank">
                                            <img src="{{asset('/assets/img/magazines/CCSIT/26.webp')}}" />
                                        </a>

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
                                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/12.pdf')}}" target="_blank">
                                            <img src="{{asset('/assets/img/magazines/CCSIT/27.webp')}}" />
                                        </a>

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
                                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/11.pdf')}}" target="_blank">
                                            <img src="{{asset('/assets/img/magazines/CCSIT/28.webp')}}" />
                                        </a>

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
                                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/10.pdf')}}" target="_blank">
                                            <img src="{{asset('/assets/img/magazines/CCSIT/29.webp')}}" />
                                        </a>

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
                                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/9.pdf')}}" target="_blank">
                                            <img src="{{asset('/assets/img/magazines/CCSIT/30.webp')}}" />
                                        </a>

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
                                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/8.pdf')}}" target="_blank">
                                            <img src="{{asset('/assets/img/magazines/CCSIT/31.webp')}}" />
                                        </a>

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
                                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/7.pdf')}}" target="_blank">
                                            <img src="{{asset('/assets/img/magazines/CCSIT/32.webp')}}" />
                                        </a>

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
                                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/6.pdf')}}" target="_blank">
                                            <img src="{{asset('/assets/img/magazines/CCSIT/33.webp')}}" />
                                        </a>

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
                                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/5.pdf')}}" target="_blank">
                                            <img src="{{asset('/assets/img/magazines/CCSIT/34.webp')}}" />
                                        </a>

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
                                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/4.pdf')}}" target="_blank">
                                            <img src="{{asset('/assets/img/magazines/CCSIT/35.webp')}}" />
                                        </a>

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
                                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/3.pdf')}}" target="_blank">
                                            <img src="{{asset('/assets/img/magazines/CCSIT/36.webp')}}" />
                                        </a>

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
                                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/2.pdf')}}" target="_blank">
                                            <img src="{{asset('/assets/img/magazines/CCSIT/37.webp')}}" />
                                        </a>

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
                                        <a href="{{asset('/assets/pdf/ccsit/event-magazine/1.pdf')}}" target="_blank">
                                            <img src="{{asset('/assets/img/magazines/CCSIT/38.webp')}}" />
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <button class="carousel-control-prev" type="button"
                data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button"
                data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </section>

</div>
</div>
</div>

@endsection