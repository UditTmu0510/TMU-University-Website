@extends('layouts.university.colleges.tmimt_with_sidebar')
@section('content')
<style>
    .team-desc>.team-title>* {
        font-family: 'poppins' !important;
    }

    .container .container-jnrl{
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
                            <a href="{{asset('/assets/pdf/Magzine/TMIMT/Magazine_jan_July_2024.pdf')}}"
                                target="_blank"><img
                                    src="{{asset('/assets/img/magazines/management/jan-june.jpg')}}" style="height: 100%; "
                                    alt="Book Cover Image"></a>
                        </div>
                    </div>
                    <div class="left-side">
                        <h2>
                            <span>Event Magazine</span>
                        </h2>
                    </div>
                </div>
                <div class="book">
                    <div class="front">
                        <div class="cover">
                            <a href="{{asset('/assets/pdf/Magzine/TMIMT/magazine_january_june_2023.pdf')}}"
                                target="_blank"><img
                                    src="{{asset('/assets/img/magazines/management/jan23-ju23.jpg')}}" style="height: 100%; "
                                    alt="Book Cover Image"></a>
                        </div>
                    </div>
                    <div class="left-side">
                        <h2>
                            <span>Event Magazine</span>
                        </h2>
                    </div>
                </div>


                <div class="book">
                    <div class="front">
                        <div class="cover">
                            <a href="{{asset('/assets/pdf/Magzine/TMIMT/magazine_june_december_2022.pdf')}}"
                                target="_blank"><img
                                    src="{{asset('/assets/img/magazines/management/jun22-dec22.jpg')}}" style="height: 100%; "
                                    alt="Book Cover Image"></a>
                        </div>
                    </div>
                    <div class="left-side">
                        <h2>
                            <span>Event Magazine</span>
                        </h2>
                    </div>
                </div>


                <div class="book">
                    <div class="front">
                        <div class="cover">
                            <a href="{{asset('/assets/pdf/Magzine/TMIMT/magazine_january_may_2022.pdf')}}"
                                target="_blank"><img
                                    src="{{asset('/assets/img/magazines/management/may21-dec21.jpg')}}" style="height: 100%; "
                                    alt="Book Cover Image"></a>
                        </div>
                    </div>
                    <div class="left-side">
                        <h2>
                            <span>Event Magazine</span>
                        </h2>
                    </div>
                </div>


                <div class="book">
                    <div class="front">
                        <div class="cover">
                            <a href="{{asset('/assets/pdf/Magzine/TMIMT/magazine_may_december_2021.pdf')}}"
                                target="_blank"><img
                                    src="{{asset('/assets/img/magazines/management/may21-dec21.jpg')}}" style="height: 100%; "
                                    alt="Book Cover Image"></a>
                        </div>
                    </div>
                    <div class="left-side">
                        <h2>
                            <span>Event Magazine</span>
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
                            <a href="{{asset('/assets/pdf/Magzine/TMIMT/event-may-april-2021.pdf')}}"
                                target="_blank"><img
                                    src="{{asset('/assets/img/magazines/management/may20-apr21.webp')}}"  style="height: 100%; "
                                    alt="Book Cover Image"></a>
                        </div>
                    </div>
                    <div class="left-side">
                        <h2>
                            <span>Event Magazine</span>
                        </h2>
                    </div>
                </div>

                <div class="book">
                    <div class="front">
                        <div class="cover">
                            <a href="{{asset('/assets/pdf/Magzine/TMIMT/event-january-june-2020.pdf')}}" 
                                target="_blank"><img
                                    src="{{asset('/assets/img/magazines/management/jan20.webp')}}" style="height: 100%; "
                                    alt="Book Cover Image"></a>
                        </div>
                    </div>
                    <div class="left-side">
                        <h2>
                            <span>Event Magazine</span>
                        </h2>
                    </div>
                </div>


                <div class="book">
                    <div class="front">
                        <div class="cover">
                            <a href="{{asset('/assets/pdf/Magzine/TMIMT/event-august-december-2019.pdf')}}"
                                target="_blank"><img
                                    src="{{asset('/assets/img/magazines/management/aug19-dec19.webp')}}" style="height: 100%; "
                                    alt="Book Cover Image"></a>
                        </div>
                    </div>
                    <div class="left-side">
                        <h2>
                            <span>Event Magazine</span>
                        </h2>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <section class="d-block d-sm-none">
        <h3 class="hm mb-0 pb-0">Event <span style="color:#ff7b00"> Magzine</span></h3>

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-inner">

                <div class="carousel-item active">
                    <a href="{{asset('/assets/pdf/Magzine/TMIMT/Magazine_jan_July_2024.pdf')}}"
                        target="_blank">
                        <div class="book-wrapper">
                            <div class="book-items">
                                <div class="main-book-wrap">
                                    <div class="book-cover">
                                        <div class="book-inside"></div>
                                        <div class="book-image">
                                            <img src="{{asset('/assets/img/magazines/management/jan-june.jpg')}}" />
                                            <div class="effect"></div>
                                            <div class="light"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="{{asset('/assets/pdf/Magzine/TMIMT/magazine_january_june_2023.pdf')}}"
                        target="_blank">
                        <div class="book-wrapper">
                            <div class="book-items">
                                <div class="main-book-wrap">
                                    <div class="book-cover">
                                        <div class="book-inside"></div>
                                        <div class="book-image">
                                            <img src="{{asset('/assets/img/magazines/management/jan23-ju23.jpg')}}" />
                                            <div class="effect"></div>
                                            <div class="light"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="{{asset('/assets/pdf/Magzine/TMIMT/magazine_june_december_2022.pdf')}}"
                        target="_blank">
                        <div class="book-wrapper">
                            <div class="book-items">
                                <div class="main-book-wrap">
                                    <div class="book-cover">
                                        <div class="book-inside"></div>
                                        <div class="book-image">
                                            <img src="{{asset('/assets/img/magazines/management/jun22-dec22.jpg')}}" />
                                            <div class="effect"></div>
                                            <div class="light"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="carousel-item ">
                    <a href="{{asset('/assets/pdf/Magzine/TMIMT/magazine_january_may_2022.pdf')}}"
                        target="_blank">
                        <div class="book-wrapper">
                            <div class="book-items">
                                <div class="main-book-wrap">
                                    <div class="book-cover">
                                        <div class="book-inside"></div>
                                        <div class="book-image">
                                            <img src="{{asset('/assets/img/magazines/management/may21-dec21.jpg')}}" />
                                            <div class="effect"></div>
                                            <div class="light"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="carousel-item">
                <a href="{{asset('/assets/pdf/Magzine/TMIMT/magazine_may_december_2021.pdf')}}"
                target="_blank">
                    <div class="book-wrapper">
                        <div class="book-items">
                            <div class="main-book-wrap">
                                <div class="book-cover">
                                    <div class="book-inside"></div>
                                    <div class="book-image">
                                        <img src="{{asset('/assets/img/magazines/management/may21-dec21.jpg')}}" />
                                        <div class="effect"></div>
                                        <div class="light"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                </div>
                <div class="carousel-item ">
                    
                    <div class="book-wrapper">
                    <a href="{{asset('/assets/pdf/Magzine/TMIMT/event-may-april-2021.pdf')}}"
                    target="_blank">
                        <div class="book-items">
                            <div class="main-book-wrap">
                                <div class="book-cover">
                                    <div class="book-inside"></div>
                                    <div class="book-image">
                                        <img src="{{asset('/assets/img/magazines/management/may20-apr21.webp')}}" />
                                        <div class="effect"></div>
                                        <div class="light"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                </div>
                <div class="carousel-item ">
                <a href="{{asset('/assets/pdf/Magzine/TMIMT/event-january-june-2020.pdf')}}"
                target="_blank">
                    <div class="book-wrapper">
                        <div class="book-items">
                            <div class="main-book-wrap">
                                <div class="book-cover">
                                    <div class="book-inside"></div>
                                    <div class="book-image">
                                        <img src="{{asset('/assets/img/magazines/management/jan20.webp')}}" />
                                        <div class="effect"></div>
                                        <div class="light"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                </div>
                <div class="carousel-item ">
                <a href="{{asset('/assets/pdf/Magzine/TMIMT/event-august-december-2019.pdf')}}"
                target="_blank">
                    <div class="book-wrapper">
                        <div class="book-items">
                            <div class="main-book-wrap">
                                <div class="book-cover">
                                    <div class="book-inside"></div>
                                    <div class="book-image">
                                        <img src="{{asset('/assets/img/magazines/management/aug19-dec19.webp')}}" />
                                        <div class="effect"></div>
                                        <div class="light"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
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