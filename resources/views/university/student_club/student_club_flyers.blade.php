@extends('layouts.university.departments.quicklinks_with_sidebar')
@section('content')
    <!-- Lightbox2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" rel="stylesheet" />
    <!-- Lightbox2 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>

    <style>
        .team-desc>.team-title>* {
            font-family: 'poppins' !important;
        }

        .container .container-jrnl {
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
            height: 283px;
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
            /* Replace 'path/to/your/bookshelf-image.jpeg' with the actual path to your bookshelf image */
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
            width: 90vw;
            max-width: 1200px;
        }

        @media screen and (min-width: 901px) {
            .box {
                width: 70vw;
            }

        }

        a img {
            border: none;
            width: 100%;
            height: 100%;
            object-fit: cover;
            overflow: hidden;
        }
    </style>


    <link rel="stylesheet" href="{{ asset('/assets/css/journal.css') }}">


    <div class="main-content">
        <div class="container justify-content-center">
            <div class="row justify-content-center">
                <div class="box d-none d-sm-block justify-content-center">
                    <h1 class="tmu-text-primary tmu-page-heading mb-2 mt-2"><span>Student Club </span><span> Flyers</span>
                    </h1>
                    <div class="container container-jrnl">

                        <div class="book">
                            <div class="front">
                                <div class="cover">
                                    <a href="{{ asset('/assets/img/student_club/flyers/A1.jpeg') }}"
                                        data-lightbox="journal-gallery" data-title="Advertisement and Design Club">
                                        <img src="{{ asset('/assets/img/student_club/flyers/A1.jpeg') }}"
                                            alt="Advertisement and Design Club">
                                    </a>
                                </div>
                            </div>
                            <div class="left-side">
                                <h2><span>Events Flyers</span></h2>
                            </div>
                        </div>

                        <div class="book">
                            <div class="front">
                                <div class="cover">
                                    <a href="{{ asset('/assets/img/student_club/flyers/A2.jpeg') }}"
                                        data-lightbox="journal-gallery" data-title="Advertisement and Design Club">
                                        <img src="{{ asset('/assets/img/student_club/flyers/A2.jpeg') }}"
                                            alt="Advertisement and Design Club">
                                    </a>
                                </div>
                            </div>
                            <div class="left-side">
                                <h2><span>Events Flyers</span></h2>
                            </div>
                        </div>

                        <div class="book">
                            <div class="front">
                                <div class="cover">
                                    <a href="{{ asset('/assets/img/student_club/flyers/A3.jpeg') }}"
                                        data-lightbox="journal-gallery" data-title="Advertisement and Design Club">
                                        <img src="{{ asset('/assets/img/student_club/flyers/A3.jpeg') }}"
                                            alt="Advertisement and Design Club">
                                    </a>
                                </div>
                            </div>
                            <div class="left-side">
                                <h2><span>Events Flyers</span></h2>
                            </div>
                        </div>

                        <div class="book">
                            <div class="front">
                                <div class="cover">
                                    <a href="{{ asset('/assets/img/student_club/flyers/D1.jpeg') }}"
                                        data-lightbox="journal-gallery" data-title="Dance Club">
                                        <img src="{{ asset('/assets/img/student_club/flyers/D1.jpeg') }}" alt="Dance Club">
                                    </a>
                                </div>
                            </div>
                            <div class="left-side">
                                <h2><span>Events Flyers</span></h2>
                            </div>
                        </div>

                        <div class="book">
                            <div class="front">
                                <div class="cover">
                                    <a href="{{ asset('/assets/img/student_club/flyers/D2.jpeg') }}"
                                        data-lightbox="journal-gallery" data-title="Dance Club">
                                        <img src="{{ asset('/assets/img/student_club/flyers/D2.jpeg') }}" alt="Dance Club">
                                    </a>
                                </div>
                            </div>
                            <div class="left-side">
                                <h2><span>Events Flyers</span></h2>
                            </div>
                        </div>



                    </div>
                    <div class="container container-jrnl">

                        <div class="book">
                            <div class="front">
                                <div class="cover">
                                    <a href="{{ asset('/assets/img/student_club/flyers/D3.jpeg') }}"
                                        data-lightbox="journal-gallery" data-title="Dance Club">
                                        <img src="{{ asset('/assets/img/student_club/flyers/D3.jpeg') }}" alt="Dance Club">
                                    </a>
                                </div>
                            </div>
                            <div class="left-side">
                                <h2><span>Events Flyers</span></h2>
                            </div>
                        </div>

                        <div class="book">
                            <div class="front">
                                <div class="cover">
                                    <a href="{{ asset('/assets/img/student_club/flyers/DE1.jpeg') }}"
                                        data-lightbox="journal-gallery" data-title="Debate Club">
                                        <img src="{{ asset('/assets/img/student_club/flyers/DE1.jpeg') }}"
                                            alt="Debate Club">
                                    </a>
                                </div>
                            </div>
                            <div class="left-side">
                                <h2><span>Events Flyers</span></h2>
                            </div>
                        </div>

                        <div class="book">
                            <div class="front">
                                <div class="cover">
                                    <a href="{{ asset('/assets/img/student_club/flyers/DE2.jpeg') }}"
                                        data-lightbox="journal-gallery" data-title="Debate Club">
                                        <img src="{{ asset('/assets/img/student_club/flyers/DE2.jpeg') }}"
                                            alt="Debate Club">
                                    </a>
                                </div>
                            </div>
                            <div class="left-side">
                                <h2><span>Events Flyers</span></h2>
                            </div>
                        </div>

                        <div class="book">
                            <div class="front">
                                <div class="cover">
                                    <a href="{{ asset('/assets/img/student_club/flyers/Dr2.jpeg') }}"
                                        data-lightbox="journal-gallery" data-title="Drawing Club">
                                        <img src="{{ asset('/assets/img/student_club/flyers/Dr2.jpeg') }}"
                                            alt="Drawing Club">
                                    </a>
                                </div>
                            </div>
                            <div class="left-side">
                                <h2><span>Events Flyers</span></h2>
                            </div>
                        </div>

                        <div class="book">
                            <div class="front">
                                <div class="cover">
                                    <a href="{{ asset('/assets/img/student_club/flyers/Dr1.jpeg') }}"
                                        data-lightbox="journal-gallery" data-title="Drawing Club">
                                        <img src="{{ asset('/assets/img/student_club/flyers/Dr1.jpeg') }}"
                                            alt="Drawing Club">
                                    </a>
                                </div>
                            </div>
                            <div class="left-side">
                                <h2><span>Events Flyers</span></h2>
                            </div>
                        </div>



                    </div>
                    <div class="container container-jrnl">

                        <div class="book">
                            <div class="front">
                                <div class="cover">
                                    <a href="{{ asset('/assets/img/student_club/flyers/E1.jpeg') }}"
                                        data-lightbox="journal-gallery" data-title="Environment Club">
                                        <img src="{{ asset('/assets/img/student_club/flyers/E1.jpeg') }}"
                                            alt="Environment Club">
                                    </a>
                                </div>
                            </div>
                            <div class="left-side">
                                <h2><span>Events Flyers</span></h2>
                            </div>
                        </div>

                        <div class="book">
                            <div class="front">
                                <div class="cover">
                                    <a href="{{ asset('/assets/img/student_club/flyers/E2.jpeg') }}"
                                        data-lightbox="journal-gallery" data-title="Environment Club">
                                        <img src="{{ asset('/assets/img/student_club/flyers/E2.jpeg') }}"
                                            alt="Environment Club">
                                    </a>
                                </div>
                            </div>
                            <div class="left-side">
                                <h2><span>Events Flyers</span></h2>
                            </div>
                        </div>

                        <div class="book">
                            <div class="front">
                                <div class="cover">
                                    <a href="{{ asset('/assets/img/student_club/flyers/F1.jpeg') }}"
                                        data-lightbox="journal-gallery" data-title="Fashion Club">
                                        <img src="{{ asset('/assets/img/student_club/flyers/F1.jpeg') }}"
                                            alt="Fashion Club">
                                    </a>
                                </div>
                            </div>
                            <div class="left-side">
                                <h2><span>Events Flyers</span></h2>
                            </div>
                        </div>

                        <div class="book">
                            <div class="front">
                                <div class="cover">
                                    <a href="{{ asset('/assets/img/student_club/flyers/F2.jpeg') }}"
                                        data-lightbox="journal-gallery" data-title="Fashion Club">
                                        <img src="{{ asset('/assets/img/student_club/flyers/F2.jpeg') }}"
                                            alt="Fashion Club">
                                    </a>
                                </div>
                            </div>
                            <div class="left-side">
                                <h2><span>Events Flyers</span></h2>
                            </div>
                        </div>

                        <div class="book">
                            <div class="front">
                                <div class="cover">
                                    <a href="{{ asset('/assets/img/student_club/flyers/M1.jpeg') }}"
                                        data-lightbox="journal-gallery" data-title="Music Club">
                                        <img src="{{ asset('/assets/img/student_club/flyers/M1.jpeg') }}"
                                            alt="Music Club">
                                    </a>
                                </div>
                            </div>
                            <div class="left-side">
                                <h2><span>Events Flyers</span></h2>
                            </div>
                        </div>



                    </div>
                    <div class="container container-jrnl">

                        <div class="book">
                            <div class="front">
                                <div class="cover">
                                    <a href="{{ asset('/assets/img/student_club/flyers/P1.jpeg') }}"
                                        data-lightbox="journal-gallery" data-title="Photography Club">
                                        <img src="{{ asset('/assets/img/student_club/flyers/P1.jpeg') }}"
                                            alt="Photography Club">
                                    </a>
                                </div>
                            </div>
                            <div class="left-side">
                                <h2><span>Events Flyers</span></h2>
                            </div>
                        </div>

                        <div class="book">
                            <div class="front">
                                <div class="cover">
                                    <a href="{{ asset('/assets/img/student_club/flyers/P2.jpeg') }}"
                                        data-lightbox="journal-gallery" data-title="Photography Club">
                                        <img src="{{ asset('/assets/img/student_club/flyers/P2.jpeg') }}"
                                            alt="Photography Club">
                                    </a>
                                </div>
                            </div>
                            <div class="left-side">
                                <h2><span>Events Flyers</span></h2>
                            </div>
                        </div>

                        <div class="book">
                            <div class="front">
                                <div class="cover">
                                    <a href="{{ asset('/assets/img/student_club/flyers/P3.jpeg') }}"
                                        data-lightbox="journal-gallery" data-title="Photography Club">
                                        <img src="{{ asset('/assets/img/student_club/flyers/P3.jpeg') }}"
                                            alt="Photography Club">
                                    </a>
                                </div>
                            </div>
                            <div class="left-side">
                                <h2><span>Events Flyers</span></h2>
                            </div>
                        </div>

                        <div class="book">
                            <div class="front">
                                <div class="cover">
                                    <a href="{{ asset('/assets/img/student_club/flyers/PO1.jpeg') }}"
                                        data-lightbox="journal-gallery" data-title="Poetry Club">
                                        <img src="{{ asset('/assets/img/student_club/flyers/PO1.jpeg') }}"
                                            alt="Poetry Club">
                                    </a>
                                </div>
                            </div>
                            <div class="left-side">
                                <h2><span>Events Flyers</span></h2>
                            </div>
                        </div>

                        <div class="book">
                            <div class="front">
                                <div class="cover">
                                    <a href="{{ asset('/assets/img/student_club/flyers/PO2.jpeg') }}"
                                        data-lightbox="journal-gallery" data-title="Poetry Club">
                                        <img src="{{ asset('/assets/img/student_club/flyers/PO2.jpeg') }}"
                                            alt="Poetry Club">
                                    </a>
                                </div>
                            </div>
                            <div class="left-side">
                                <h2><span>Events Flyers</span></h2>
                            </div>
                        </div>

                    </div>
                    <div class="container container-jrnl">

                        <div class="book">
                            <div class="front">
                                <div class="cover">
                                    <a href="{{ asset('/assets/img/student_club/flyers/PO3.jpeg') }}"
                                        data-lightbox="journal-gallery" data-title="Poetry Club">
                                        <img src="{{ asset('/assets/img/student_club/flyers/PO3.jpeg') }}"
                                            alt="Poetry Club">
                                    </a>
                                </div>
                            </div>
                            <div class="left-side">
                                <h2><span>Events Flyers</span></h2>
                            </div>
                        </div>

                        <div class="book">
                            <div class="front">
                                <div class="cover">
                                    <a href="{{ asset('/assets/img/student_club/flyers/Pu1.jpeg') }}"
                                        data-lightbox="journal-gallery" data-title="Public Speaking Club">
                                        <img src="{{ asset('/assets/img/student_club/flyers/Pu1.jpeg') }}"
                                            alt="Public Speaking Club">
                                    </a>
                                </div>
                            </div>
                            <div class="left-side">
                                <h2><span>Events Flyers</span></h2>
                            </div>
                        </div>

                        <div class="book">
                            <div class="front">
                                <div class="cover">
                                    <a href="{{ asset('/assets/img/student_club/flyers/Pu2.jpeg') }}"
                                        data-lightbox="journal-gallery" data-title="TPublic Speaking Club">
                                        <img src="{{ asset('/assets/img/student_club/flyers/Pu2.jpeg') }}"
                                            alt="TPublic Speaking Club">
                                    </a>
                                </div>
                            </div>
                            <div class="left-side">
                                <h2><span>Events Flyers</span></h2>
                            </div>
                        </div>

                        <div class="book">
                            <div class="front">
                                <div class="cover">
                                    <a href="{{ asset('/assets/img/student_club/flyers/Pu3.jpeg') }}"
                                        data-lightbox="journal-gallery" data-title="Public Speaking Club">
                                        <img src="{{ asset('/assets/img/student_club/flyers/Pu3.jpeg') }}"
                                            alt="Public Speaking Club">
                                    </a>
                                </div>
                            </div>
                            <div class="left-side">
                                <h2><span>Events Flyers</span></h2>
                            </div>
                        </div>

                        <div class="book">
                            <div class="front">
                                <div class="cover">
                                    <a href="{{ asset('/assets/img/student_club/flyers/Q1.jpeg') }}"
                                        data-lightbox="journal-gallery" data-title="Quiz Club">
                                        <img src="{{ asset('/assets/img/student_club/flyers/Q1.jpeg') }}"
                                            alt="Quiz Club">
                                    </a>
                                </div>
                            </div>
                            <div class="left-side">
                                <h2><span>Events Flyers</span></h2>
                            </div>
                        </div>



                    </div>
                    <div class="container container-jrnl">

                        <div class="book">
                            <div class="front">
                                <div class="cover">
                                    <a href="{{ asset('/assets/img/student_club/flyers/Q2.jpeg') }}"
                                        data-lightbox="journal-gallery" data-title="Quiz Club">
                                        <img src="{{ asset('/assets/img/student_club/flyers/Q2.jpeg') }}"
                                            alt="Quiz Club">
                                    </a>
                                </div>
                            </div>
                            <div class="left-side">
                                <h2><span>Events Flyers</span></h2>
                            </div>
                        </div>

                        <div class="book">
                            <div class="front">
                                <div class="cover">
                                    <a href="{{ asset('/assets/img/student_club/flyers/R2.jpeg') }}"
                                        data-lightbox="journal-gallery" data-title="Reading & Writing Club">
                                        <img src="{{ asset('/assets/img/student_club/flyers/R2.jpeg') }}"
                                            alt="Reading & Writing Club">
                                    </a>
                                </div>
                            </div>
                            <div class="left-side">
                                <h2><span>Events Flyers</span></h2>
                            </div>
                        </div>

                        <div class="book">
                            <div class="front">
                                <div class="cover">
                                    <a href="{{ asset('/assets/img/student_club/flyers/R1.jpeg') }}"
                                        data-lightbox="journal-gallery" data-title="Reading & Writing Club">
                                        <img src="{{ asset('/assets/img/student_club/flyers/R1.jpeg') }}"
                                            alt="Reading & Writing Club">
                                    </a>
                                </div>
                            </div>
                            <div class="left-side">
                                <h2><span>Events Flyers</span></h2>
                            </div>
                        </div>

                        <div class="book">
                            <div class="front">
                                <div class="cover">
                                    <a href="{{ asset('/assets/img/student_club/flyers/RS1.jpg') }}"
                                        data-lightbox="journal-gallery" data-title="Road Safety Club">
                                        <img src="{{ asset('/assets/img/student_club/flyers/RS1.jpg') }}"
                                            alt="Road Safety Club">
                                    </a>
                                </div>
                            </div>
                            <div class="left-side">
                                <h2><span>Events Flyers</span></h2>
                            </div>
                        </div>

                        <div class="book">
                            <div class="front">
                                <div class="cover">
                                    <a href="{{ asset('/assets/img/student_club/flyers/RS2.jpeg') }}"
                                        data-lightbox="journal-gallery" data-title="Road Safety Club">
                                        <img src="{{ asset('/assets/img/student_club/flyers/RS2.jpeg') }}"
                                            alt="Road Safety Club">
                                    </a>
                                </div>
                            </div>
                            <div class="left-side">
                                <h2><span>Events Flyers</span></h2>
                            </div>
                        </div>

                    </div>
                    <div class="container container-jrnl">

                        <div class="book">
                            <div class="front">
                                <div class="cover">
                                    <a href="{{ asset('/assets/img/student_club/flyers/RS3.jpeg') }}"
                                        data-lightbox="journal-gallery" data-title="Road Safety Club">
                                        <img src="{{ asset('/assets/img/student_club/flyers/RS3.jpeg') }}"
                                            alt="Road Safety Club">
                                    </a>
                                </div>
                            </div>
                            <div class="left-side">
                                <h2><span>Events Flyers</span></h2>
                            </div>
                        </div>

                        <div class="book">
                            <div class="front">
                                <div class="cover">
                                    <a href="{{ asset('/assets/img/student_club/flyers/RS4.jpeg') }}"
                                        data-lightbox="journal-gallery" data-title="Road Safety Club">
                                        <img src="{{ asset('/assets/img/student_club/flyers/RS4.jpeg') }}"
                                            alt="Road Safety Club">
                                    </a>
                                </div>
                            </div>
                            <div class="left-side">
                                <h2><span>Events Flyers</span></h2>
                            </div>
                        </div>

                        <div class="book">
                            <div class="front">
                                <div class="cover">
                                    <a href="{{ asset('/assets/img/student_club/flyers/T2.jpg') }}"
                                        data-lightbox="journal-gallery" data-title="Theatre Club">
                                        <img src="{{ asset('/assets/img/student_club/flyers/T2.jpg') }}"
                                            alt="Theatre Club">
                                    </a>
                                </div>
                            </div>
                            <div class="left-side">
                                <h2><span>Events Flyers</span></h2>
                            </div>
                        </div>

                        <div class="book">
                            <div class="front">
                                <div class="cover">
                                    <a href="{{ asset('/assets/img/student_club/flyers/T1.jpg') }}"
                                        data-lightbox="journal-gallery" data-title="Theatre Club">
                                        <img src="{{ asset('/assets/img/student_club/flyers/T1.jpg') }}"
                                            alt="Theatre Club">
                                    </a>
                                </div>
                            </div>
                            <div class="left-side">
                                <h2><span>Events Flyers</span></h2>
                            </div>
                        </div>

                        <div class="book">
                            <div class="front">
                                <div class="cover">
                                    <a href="{{ asset('/assets/img/student_club/flyers/V1.jpeg') }}"
                                        data-lightbox="journal-gallery" data-title="Videography Club">
                                        <img src="{{ asset('/assets/img/student_club/flyers/V1.jpeg') }}"
                                            alt="Videography Club">
                                    </a>
                                </div>
                            </div>
                            <div class="left-side">
                                <h2><span>Events Flyers</span></h2>
                            </div>
                        </div>

                    </div>

                    <div class="container container-jrnl">

                        <div class="book">
                            <div class="front">
                                <div class="cover">
                                    <a href="{{ asset('/assets/img/student_club/flyers/V2.jpeg') }}"
                                        data-lightbox="journal-gallery" data-title="Videography Club">
                                        <img src="{{ asset('/assets/img/student_club/flyers/V2.jpeg') }}"
                                            alt="Videography Club">
                                    </a>
                                </div>
                            </div>
                            <div class="left-side">
                                <h2><span>Events Flyers</span></h2>
                            </div>
                        </div>

                        <div class="book">
                            <div class="front">
                                <div class="cover">
                                    <a href="{{ asset('/assets/img/student_club/flyers/V3.jpeg') }}"
                                        data-lightbox="journal-gallery" data-title="Videography Club">
                                        <img src="{{ asset('/assets/img/student_club/flyers/V3.jpeg') }}"
                                            alt="Videography Club">
                                    </a>
                                </div>
                            </div>
                            <div class="left-side">
                                <h2><span>Events Flyers</span></h2>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <section class="d-block d-sm-none">
                <h1 class="tmu-text-primary tmu-page-heading mb-2 mt-2"><span>Student Club </span><span> Flyers</span></h1>
                <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <div class="book-wrapper">
                                <div class="book-items">
                                    <div class="main-book-wrap">
                                        <a href="{{ asset('/assets/img/student_club/flyers/A1.jpeg') }}"
                                            data-lightbox="journal-gallery" data-title="Advertisement and Design Club">
                                            <div class="book-cover">
                                                <div class="book-inside"></div>
                                                <div class="book-image">
                                                    <img src="{{ asset('/assets/img/student_club/flyers/A1.jpeg') }}" />
                                                    <div class="effect"></div>
                                                    <div class="light"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item ">
                            <div class="book-wrapper">
                                <div class="book-items">
                                    <div class="main-book-wrap">
                                        <a href="{{ asset('/assets/img/student_club/flyers/A2.jpeg') }}"
                                            data-lightbox="journal-gallery" data-title="Advertisement and Design Club">
                                            <div class="book-cover">
                                                <div class="book-inside"></div>
                                                <div class="book-image">
                                                    <img src="{{ asset('/assets/img/student_club/flyers/A2.jpeg') }}" />
                                                    <div class="effect"></div>
                                                    <div class="light"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item ">
                            <div class="book-wrapper">
                                <div class="book-items">
                                    <div class="main-book-wrap">
                                        <a href="{{ asset('/assets/img/student_club/flyers/A3.jpeg') }}"
                                            data-lightbox="journal-gallery" data-title="Advertisement and Design Club">
                                            <div class="book-cover">
                                                <div class="book-inside"></div>
                                                <div class="book-image">
                                                    <img src="{{ asset('/assets/img/student_club/flyers/A3.jpeg') }}" />
                                                    <div class="effect"></div>
                                                    <div class="light"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item ">
                            <div class="book-wrapper">
                                <div class="book-items">
                                    <div class="main-book-wrap">
                                        <a href="{{ asset('/assets/img/student_club/flyers/D1.jpeg') }}"
                                            data-lightbox="journal-gallery" data-title="Dance Club">
                                            <div class="book-cover">
                                                <div class="book-inside"></div>
                                                <div class="book-image">
                                                    <img src="{{ asset('/assets/img/student_club/flyers/D1.jpeg') }}" />
                                                    <div class="effect"></div>
                                                    <div class="light"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item ">
                            <div class="book-wrapper">
                                <div class="book-items">
                                    <div class="main-book-wrap">
                                        <a href="{{ asset('/assets/img/student_club/flyers/D2.jpeg') }}"
                                            data-lightbox="journal-gallery" data-title="Dance Club">
                                            <div class="book-cover">
                                                <div class="book-inside"></div>
                                                <div class="book-image">
                                                    <img src="{{ asset('/assets/img/student_club/flyers/D2.jpeg') }}" />
                                                    <div class="effect"></div>
                                                    <div class="light"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item ">
                            <div class="book-wrapper">
                                <div class="book-items">
                                    <div class="main-book-wrap">
                                        <a href="{{ asset('/assets/img/student_club/flyers/D3.jpeg') }}"
                                            data-lightbox="journal-gallery" data-title="Dance Club">
                                            <div class="book-cover">
                                                <div class="book-inside"></div>
                                                <div class="book-image">
                                                    <img src="{{ asset('/assets/img/student_club/flyers/D3.jpeg') }}" />
                                                    <div class="effect"></div>
                                                    <div class="light"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item ">
                            <div class="book-wrapper">
                                <div class="book-items">
                                    <div class="main-book-wrap">
                                        <a href="{{ asset('/assets/img/student_club/flyers/DE1.jpeg') }}"
                                            data-lightbox="journal-gallery" data-title="Debate Club">
                                            <div class="book-cover">
                                                <div class="book-inside"></div>
                                                <div class="book-image">
                                                    <img src="{{ asset('/assets/img/student_club/flyers/DE1.jpeg') }}" />
                                                    <div class="effect"></div>
                                                    <div class="light"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item ">
                            <div class="book-wrapper">
                                <div class="book-items">
                                    <div class="main-book-wrap">
                                        <a href="{{ asset('/assets/img/student_club/flyers/DE2.jpeg') }}"
                                            data-lightbox="journal-gallery" data-title="Debate Club">
                                            <div class="book-cover">
                                                <div class="book-inside"></div>
                                                <div class="book-image">
                                                    <img src="{{ asset('/assets/img/student_club/flyers/DE2.jpeg') }}" />
                                                    <div class="effect"></div>
                                                    <div class="light"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item ">
                            <div class="book-wrapper">
                                <div class="book-items">
                                    <div class="main-book-wrap">
                                        <a href="{{ asset('/assets/img/student_club/flyers/E1.jpeg') }}"
                                            data-lightbox="journal-gallery" data-title="Environment Club">
                                            <div class="book-cover">
                                                <div class="book-inside"></div>
                                                <div class="book-image">
                                                    <img src="{{ asset('/assets/img/student_club/flyers/E1.jpeg') }}" />
                                                    <div class="effect"></div>
                                                    <div class="light"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item ">
                            <div class="book-wrapper">
                                <div class="book-items">
                                    <div class="main-book-wrap">
                                        <a href="{{ asset('/assets/img/student_club/flyers/E2.jpeg') }}"
                                            data-lightbox="journal-gallery" data-title="Environment Club">
                                            <div class="book-cover">
                                                <div class="book-inside"></div>
                                                <div class="book-image">
                                                    <img src="{{ asset('/assets/img/student_club/flyers/E2.jpeg') }}" />
                                                    <div class="effect"></div>
                                                    <div class="light"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item ">
                            <div class="book-wrapper">
                                <div class="book-items">
                                    <div class="main-book-wrap">
                                        <a href="{{ asset('/assets/img/student_club/flyers/F1.jpeg') }}"
                                            data-lightbox="journal-gallery" data-title="Fashion Club">
                                            <div class="book-cover">
                                                <div class="book-inside"></div>
                                                <div class="book-image">
                                                    <img src="{{ asset('/assets/img/student_club/flyers/F1.jpeg') }}" />
                                                    <div class="effect"></div>
                                                    <div class="light"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item ">
                            <div class="book-wrapper">
                                <div class="book-items">
                                    <div class="main-book-wrap">
                                        <a href="{{ asset('/assets/img/student_club/flyers/F2.jpeg') }}"
                                            data-lightbox="journal-gallery" data-title="Fashion Club">
                                            <div class="book-cover">
                                                <div class="book-inside"></div>
                                                <div class="book-image">
                                                    <img src="{{ asset('/assets/img/student_club/flyers/F2.jpeg') }}" />
                                                    <div class="effect"></div>
                                                    <div class="light"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="book-wrapper">
                                <div class="book-items">
                                    <div class="main-book-wrap">
                                        <a href="{{ asset('/assets/img/student_club/flyers/M1.jpeg') }}"
                                            data-lightbox="journal-gallery" data-title="Music Club">
                                            <div class="book-cover">
                                                <div class="book-inside"></div>
                                                <div class="book-image">
                                                    <img src="{{ asset('/assets/img/student_club/flyers/M1.jpeg') }}" />
                                                    <div class="effect"></div>
                                                    <div class="light"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="book-wrapper">
                                <div class="book-items">
                                    <div class="main-book-wrap">
                                        <a href="{{ asset('/assets/img/student_club/flyers/P1.jpeg') }}"
                                            data-lightbox="journal-gallery" data-title="Photography Club">
                                            <div class="book-cover">
                                                <div class="book-inside"></div>
                                                <div class="book-image">
                                                    <img src="{{ asset('/assets/img/student_club/flyers/P1.jpeg') }}" />
                                                    <div class="effect"></div>
                                                    <div class="light"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="book-wrapper">
                                <div class="book-items">
                                    <div class="main-book-wrap">
                                        <a href="{{ asset('/assets/img/student_club/flyers/P2.jpeg') }}"
                                            data-lightbox="journal-gallery" data-title="Photography Club">
                                            <div class="book-cover">
                                                <div class="book-inside"></div>
                                                <div class="book-image">
                                                    <img src="{{ asset('/assets/img/student_club/flyers/P2.jpeg') }}" />
                                                    <div class="effect"></div>
                                                    <div class="light"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="book-wrapper">
                                <div class="book-items">
                                    <div class="main-book-wrap">
                                        <a href="{{ asset('/assets/img/student_club/flyers/P3.jpeg') }}"
                                            data-lightbox="journal-gallery" data-title="Photography Club">
                                            <div class="book-cover">
                                                <div class="book-inside"></div>
                                                <div class="book-image">
                                                    <img src="{{ asset('/assets/img/student_club/flyers/P3.jpeg') }}" />
                                                    <div class="effect"></div>
                                                    <div class="light"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="book-wrapper">
                                <div class="book-items">
                                    <div class="main-book-wrap">
                                        <a href="{{ asset('/assets/img/student_club/flyers/PO1.jpeg') }}"
                                            data-lightbox="journal-gallery" data-title="Poetry Club">
                                            <div class="book-cover">
                                                <div class="book-inside"></div>
                                                <div class="book-image">
                                                    <img src="{{ asset('/assets/img/student_club/flyers/PO1.jpeg') }}" />
                                                    <div class="effect"></div>
                                                    <div class="light"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="book-wrapper">
                                <div class="book-items">
                                    <div class="main-book-wrap">
                                        <a href="{{ asset('/assets/img/student_club/flyers/PO2.jpeg') }}"
                                            data-lightbox="journal-gallery" data-title="Poetry Club">
                                            <div class="book-cover">
                                                <div class="book-inside"></div>
                                                <div class="book-image">
                                                    <img src="{{ asset('/assets/img/student_club/flyers/PO2.jpeg') }}" />
                                                    <div class="effect"></div>
                                                    <div class="light"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="book-wrapper">
                                <div class="book-items">
                                    <div class="main-book-wrap">
                                        <a href="{{ asset('/assets/img/student_club/flyers/PO3.jpeg') }}"
                                            data-lightbox="journal-gallery" data-title="Poetry Club">
                                            <div class="book-cover">
                                                <div class="book-inside"></div>
                                                <div class="book-image">
                                                    <img src="{{ asset('/assets/img/student_club/flyers/PO3.jpeg') }}" />
                                                    <div class="effect"></div>
                                                    <div class="light"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="book-wrapper">
                                <div class="book-items">
                                    <div class="main-book-wrap">
                                        <a href="{{ asset('/assets/img/student_club/flyers/Pu1.jpeg') }}"
                                            data-lightbox="journal-gallery" data-title="Public Speaking Club">
                                            <div class="book-cover">
                                                <div class="book-inside"></div>
                                                <div class="book-image">
                                                    <img src="{{ asset('/assets/img/student_club/flyers/Pu1.jpeg') }}" />
                                                    <div class="effect"></div>
                                                    <div class="light"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="book-wrapper">
                                <div class="book-items">
                                    <div class="main-book-wrap">
                                        <a href="{{ asset('/assets/img/student_club/flyers/Pu2.jpeg') }}"
                                            data-lightbox="journal-gallery" data-title="Public Speaking">
                                            <div class="book-cover">
                                                <div class="book-inside"></div>
                                                <div class="book-image">
                                                    <img src="{{ asset('/assets/img/student_club/flyers/Pu2.jpeg') }}" />
                                                    <div class="effect"></div>
                                                    <div class="light"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="book-wrapper">
                                <div class="book-items">
                                    <div class="main-book-wrap">
                                        <a href="{{ asset('/assets/img/student_club/flyers/Pu3.jpeg') }}"
                                            data-lightbox="journal-gallery" data-title="Public Speaking Club">
                                            <div class="book-cover">
                                                <div class="book-inside"></div>
                                                <div class="book-image">
                                                    <img src="{{ asset('/assets/img/student_club/flyers/Pu3.jpeg') }}" />
                                                    <div class="effect"></div>
                                                    <div class="light"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="book-wrapper">
                                <div class="book-items">
                                    <div class="main-book-wrap">
                                        <a href="{{ asset('/assets/img/student_club/flyers/Q1.jpeg') }}"
                                            data-lightbox="journal-gallery" data-title="Quiz Club">
                                            <div class="book-cover">
                                                <div class="book-inside"></div>
                                                <div class="book-image">
                                                    <img src="{{ asset('/assets/img/student_club/flyers/Q1.jpeg') }}" />
                                                    <div class="effect"></div>
                                                    <div class="light"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="book-wrapper">
                                <div class="book-items">
                                    <div class="main-book-wrap">
                                        <a href="{{ asset('/assets/img/student_club/flyers/Q2.jpeg') }}"
                                            data-lightbox="journal-gallery" data-title="Quiz Club">
                                            <div class="book-cover">
                                                <div class="book-inside"></div>
                                                <div class="book-image">
                                                    <img src="{{ asset('/assets/img/student_club/flyers/Q2.jpeg') }}" />
                                                    <div class="effect"></div>
                                                    <div class="light"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="book-wrapper">
                                <div class="book-items">
                                    <div class="main-book-wrap">
                                        <a href="{{ asset('/assets/img/student_club/flyers/R1.jpeg') }}"
                                            data-lightbox="journal-gallery" data-title="Reading and Writing Club">
                                            <div class="book-cover">
                                                <div class="book-inside"></div>
                                                <div class="book-image">
                                                    <img src="{{ asset('/assets/img/student_club/flyers/R1.jpeg') }}" />
                                                    <div class="effect"></div>
                                                    <div class="light"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="book-wrapper">
                                <div class="book-items">
                                    <div class="main-book-wrap">
                                        <a href="{{ asset('/assets/img/student_club/flyers/R2.jpeg') }}"
                                            data-lightbox="journal-gallery" data-title="Reading and Writing Club">
                                            <div class="book-cover">
                                                <div class="book-inside"></div>
                                                <div class="book-image">
                                                    <img src="{{ asset('/assets/img/student_club/flyers/R2.jpeg') }}" />
                                                    <div class="effect"></div>
                                                    <div class="light"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="book-wrapper">
                                <div class="book-items">
                                    <div class="main-book-wrap">
                                        <a href="{{ asset('/assets/img/student_club/flyers/RS1.jpg') }}"
                                            data-lightbox="journal-gallery" data-title="Road Safety Club">
                                            <div class="book-cover">
                                                <div class="book-inside"></div>
                                                <div class="book-image">
                                                    <img src="{{ asset('/assets/img/student_club/flyers/RS1.jpg') }}" />
                                                    <div class="effect"></div>
                                                    <div class="light"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="book-wrapper">
                                <div class="book-items">
                                    <div class="main-book-wrap">
                                        <a href="{{ asset('/assets/img/student_club/flyers/RS2.jpeg') }}"
                                            data-lightbox="journal-gallery" data-title="Road Safety Club">
                                            <div class="book-cover">
                                                <div class="book-inside"></div>
                                                <div class="book-image">
                                                    <img src="{{ asset('/assets/img/student_club/flyers/RS2.jpeg') }}" />
                                                    <div class="effect"></div>
                                                    <div class="light"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="book-wrapper">
                                <div class="book-items">
                                    <div class="main-book-wrap">
                                        <a href="{{ asset('/assets/img/student_club/flyers/RS3.jpeg') }}"
                                            data-lightbox="journal-gallery" data-title="Road Safety Club">
                                            <div class="book-cover">
                                                <div class="book-inside"></div>
                                                <div class="book-image">
                                                    <img src="{{ asset('/assets/img/student_club/flyers/RS3.jpeg') }}" />
                                                    <div class="effect"></div>
                                                    <div class="light"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="book-wrapper">
                                <div class="book-items">
                                    <div class="main-book-wrap">
                                        <a href="{{ asset('/assets/img/student_club/flyers/RS4.jpeg') }}"
                                            data-lightbox="journal-gallery" data-title="Road Safety Club">
                                            <div class="book-cover">
                                                <div class="book-inside"></div>
                                                <div class="book-image">
                                                    <img src="{{ asset('/assets/img/student_club/flyers/RS4.jpeg') }}" />
                                                    <div class="effect"></div>
                                                    <div class="light"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="book-wrapper">
                                <div class="book-items">
                                    <div class="main-book-wrap">
                                        <a href="{{ asset('/assets/img/student_club/flyers/T1.jpg') }}"
                                            data-lightbox="journal-gallery" data-title="Theatre Club">
                                            <div class="book-cover">
                                                <div class="book-inside"></div>
                                                <div class="book-image">
                                                    <img src="{{ asset('/assets/img/student_club/flyers/T1.jpg') }}" />
                                                    <div class="effect"></div>
                                                    <div class="light"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="book-wrapper">
                                <div class="book-items">
                                    <div class="main-book-wrap">
                                        <a href="{{ asset('/assets/img/student_club/flyers/T2.jpg') }}"
                                            data-lightbox="journal-gallery" data-title="Theatre Club">
                                            <div class="book-cover">
                                                <div class="book-inside"></div>
                                                <div class="book-image">
                                                    <img src="{{ asset('/assets/img/student_club/flyers/T2.jpg') }}" />
                                                    <div class="effect"></div>
                                                    <div class="light"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="book-wrapper">
                                <div class="book-items">
                                    <div class="main-book-wrap">
                                        <a href="{{ asset('/assets/img/student_club/flyers/V1.jpeg') }}"
                                            data-lightbox="journal-gallery" data-title="Videography Club">
                                            <div class="book-cover">
                                                <div class="book-inside"></div>
                                                <div class="book-image">
                                                    <img src="{{ asset('/assets/img/student_club/flyers/V1.jpeg') }}" />
                                                    <div class="effect"></div>
                                                    <div class="light"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="book-wrapper">
                                <div class="book-items">
                                    <div class="main-book-wrap">
                                        <a href="{{ asset('/assets/img/student_club/flyers/V2.jpeg') }}"
                                            data-lightbox="journal-gallery" data-title="Videography Club">
                                            <div class="book-cover">
                                                <div class="book-inside"></div>
                                                <div class="book-image">
                                                    <img src="{{ asset('/assets/img/student_club/flyers/V2.jpeg') }}" />
                                                    <div class="effect"></div>
                                                    <div class="light"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="book-wrapper">
                                <div class="book-items">
                                    <div class="main-book-wrap">
                                        <a href="{{ asset('/assets/img/student_club/flyers/V3.jpeg') }}"
                                            data-lightbox="journal-gallery" data-title="Videography Club">
                                            <div class="book-cover">
                                                <div class="book-inside"></div>
                                                <div class="book-image">
                                                    <img src="{{ asset('/assets/img/student_club/flyers/V3.jpeg') }}" />
                                                    <div class="effect"></div>
                                                    <div class="light"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </section>
        </div>
    </div>
    </div>

    <script>
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true,
            'fitImagesInViewport': true,
            'positionFromTop': 50,
            'disableScrolling': true,
            'showImageNumberLabel': false
        });
    </script>
@endsection
