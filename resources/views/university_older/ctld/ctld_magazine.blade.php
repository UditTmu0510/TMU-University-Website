@extends('layouts.university.departments.ctld_with_sidebar')
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
        max-width: 1200px;
    }
    .cover {
        width: 100%;    /* Ensures the div is responsive */
        height: 100%;   /* You can adjust this based on the desired height */
        overflow: hidden;
    }

    .cover img {
        width: 100%;
        height: 100%;
        object-fit: cover; /* Makes the image cover the div, maintaining aspect ratio */
    }
</style>

<link rel="stylesheet" href="{{asset('/assets/css/journal.css')}}">
<style>
    .bookshelf {
        width: 100%
    }
</style>


<div class="main-content">
    <div class="container ps-3">
        <div class="box d-none d-sm-block">
            <h1 class="tmu-text-primary tmu-page-heading"><span>Annual </span><span> Magazine</span></h1>
            <div class="container container-jnrl">
                <div class="bookshelf"></div>


                <div class="book">
                    <div class="front">
                        <div class="cover">
                        <a href="{{asset('assets/pdf/ctld_magazine/jigyasa_magazine_final.pdf')}}"
                                target="_blank"><img
                                    src="{{asset('/assets/img/magazines/ctld/1.jpg')}}"
                                    alt="Book Cover Image"></a>
                        </div>
                    </div>
                    <div class="left-side">
                        <h2>
                            <span>Annual Magazine</span>
                        </h2>
                    </div>
                </div>


                <div class="book">
                    <div class="front">
                        <div class="cover">
                        <a href="{{asset('assets/pdf/ctld_magazine/Jigyasa_final_magazine_2023.pdf')}}"
                                    target="_blank"><img
                                        src="{{asset('/assets/img/magazines/ctld/2.jpg')}}"
                                        alt="Book Cover Image"></a>
                        </div>
                    </div>
                    <div class="left-side">
                        <h2>
                            <span>Annual Magazine</span>
                        </h2>
                    </div>
                </div>


                <div class="book">
                    <div class="front">
                        <div class="cover">
                            <a href="{{asset('assets/pdf/ctld_magazine/Jigyasa_3.O.pdf')}}"
                                    target="_blank"><img
                                        src="{{asset('/assets/img/magazines/ctld/3.jpg')}}"
                                        alt="Book Cover Image"></a>
                        </div>
                    </div>
                    <div class="left-side">
                        <h2>
                            <span>Annual Magazine</span>
                        </h2>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <section class="d-block d-sm-none">
        <h2 class="hm mb-0 pb-0 tmu-text-primary text-center "><span>Annual </span><span>Report</span></h2>

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-inner">

                <div class="carousel-item active">
                    <div class="book-wrapper">
                        <div class="book-items">
                            <div class="main-book-wrap">
                                <div class="book-cover">
                                    <div class="book-inside"></div>
                                    <div class="book-image">
                                        <a href="{{asset('assets/pdf/ctld_magazine/jigyasa_magazine_final.pdf')}}"
                                            target="_blank"><img src="{{asset('/assets/img/magazines/ctld/1.jpg')}}" /></a>
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
                                        <a href="{{asset('assets/pdf/ctld_magazine/Jigyasa_final_magazine_2023.pdf')}}"
                                            target="_blank"><img src="{{asset('/assets/img/magazines/ctld/2.jpg')}}" /></a>
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
                                        <a href="{{asset('assets/pdf/ctld_magazine/Jigyasa_3.O.pdf')}}"
                                            target="_blank"><img src="{{asset('/assets/img/magazines/ctld/3.jpg')}}" /></a>

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


@endsection