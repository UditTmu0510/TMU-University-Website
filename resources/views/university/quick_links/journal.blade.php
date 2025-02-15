@extends('layouts.university.departments.quicklinks_with_sidebar')
@section('content')

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
        width: 90vw;
        max-width: 1200px;
    }

    @media screen and (min-width: 901px) {
        .box {
            width: 70vw;
        }

    }
</style>


<link rel="stylesheet" href="{{asset('/assets/css/journal.css')}}">
<style>
    .bookshelf {
        width: 100%
    }
</style>

<!-- Content
		============================================= -->
<div class="main-content">
    <div class="container justify-content-center">

        <div class="row justify-content-center">

            <div class="box d-none d-sm-block justify-content-center">
                <h1 class="tmu-text-primary tmu-page-heading mb-2 mt-2"><span>Annual</span><span> Report</span></h1>
                <div class="container container-jrnl">

                    <div class="bookshelf"></div>
                    <div class="book">

                        <div class="front">
                            <div class="cover">
                                <a href="{{asset('/assets/pdf/annual_report/annual_report_21_22.pdf')}}" target="_blank"><img src="{{asset('/assets/img/publication/annual_report/1.jpg')}}" alt="Book Cover Image"></a>

                            </div>
                        </div>
                        <div class="left-side">
                            <h2>
                                <span>Annual Report</span>
                            </h2>
                        </div>

                    </div>
                    <div class="book">
                        <div class="front">
                            <div class="cover">
                                <a href="{{asset('/assets/pdf/annual_report/annual_report_20_21.pdf')}}" target="_blank"><img src="{{asset('/assets/img/publication/annual_report/2.jpg')}}" alt="Book Cover Image"></a>
                                <!-- <p class="num-up">84</p>
                        <p class="num-down">1</p>
                        <p class="author">George Orwell</p> -->
                            </div>
                        </div>
                        <div class="left-side">
                            <h2>
                                <span>Annual Report</span>
                            </h2>
                        </div>

                    </div>
                    <div class="book">
                        <div class="front">
                            <div class="cover">
                                <a href="{{asset('/assets/pdf/annual_report/annual_report_19_20.pdf')}}" target="_blank"><img src="{{asset('/assets/img/publication/annual_report/3.jpg')}}" alt="Book Cover Image"></a>

                            </div>
                        </div>
                        <div class="left-side">
                            <h2>
                                <span>Annual Report</span>
                            </h2>
                        </div>
                    </div>
                    <div class="book">
                        <div class="front">
                            <div class="cover">
                                <a href="{{asset('/assets/pdf/annual_report/annual_report_18_19.pdf')}}" target="_blank"><img src="{{asset('/assets/img/publication/annual_report/4.jpg')}}" alt="Book Cover Image"></a>

                            </div>
                        </div>
                        <div class="left-side">
                            <h2>
                                <span>Annual Report</span>
                            </h2>
                        </div>
                    </div>
                    <div class="book">
                        <div class="front">
                            <div class="cover">
                                <a href="{{asset('/assets/pdf/annual_report/annual_report_17_18.pdf')}}" target="_blank"><img src="{{asset('/assets/img/publication/annual_report/5.jpg')}}" alt="Book Cover Image"></a>

                            </div>
                        </div>
                        <div class="left-side">
                            <h2>
                                <span>Annual Report</span>
                            </h2>
                        </div>
                    </div>
                    <!-- Repeat the above book structure for additional books -->
                    <!-- ... -->
                </div>

                <div class="container container-jrnl">
                    <div class="bookshelf"></div>

                    <div class="book">
                        <div class="front">
                            <div class="cover">
                                <a href="{{asset('/assets/pdf/annual_report/annual_report_16_17.pdf')}}" target="_blank"><img src="{{asset('/assets/img/publication/annual_report/6.jpg')}}" alt="Book Cover Image"></a>

                            </div>
                        </div>
                        <div class="left-side">
                            <h2>
                                <span>Annual Report</span>
                            </h2>
                        </div>
                    </div>

                    <div class="book">
                        <div class="front">
                            <div class="cover">
                                <a href="{{asset('/assets/pdf/annual_report/annual_report_15_16.pdf')}}" target="_blank"><img src="{{asset('/assets/img/publication/annual_report/7.jpg')}}" alt="Book Cover Image"></a>

                            </div>
                        </div>
                        <div class="left-side">
                            <h2>
                                <span>Annual Report</span>

                            </h2>
                        </div>
                    </div>
                    <div class="book">
                        <div class="front">
                            <div class="cover">
                                <a href="{{asset('/assets/pdf/annual_report/annual_report_14_15.pdf')}}" target="_blank"><img src="{{asset('/assets/img/publication/annual_report/8.jpg')}}" alt="Book Cover Image"></a>

                            </div>
                        </div>
                        <div class="left-side">
                            <h2>
                                <span>Annual Report</span>

                            </h2>
                        </div>
                    </div>
                    <div class="book">
                        <div class="front">
                            <div class="cover">
                                <a href="{{asset('/assets/pdf/annual_report/annual_report_13_14.pdf')}}" target="_blank"><img src="{{asset('/assets/img/publication/annual_report/9.jpg')}}" alt="Book Cover Image"></a>

                            </div>
                        </div>
                        <div class="left-side">
                            <h2>
                                <span>Annual Report</span>

                            </h2>
                        </div>
                    </div>
                    <div class="book">
                        <div class="front">
                            <div class="cover">
                                <a href="{{asset('/assets/pdf/annual_report/annual_report_11_12.pdf')}}" target="_blank"><img src="{{asset('/assets/img/publication/annual_report/10.jpg')}}" alt="Book Cover Image"></a>

                            </div>
                        </div>
                        <div class="left-side">
                            <h2>
                                <span>Annual Report</span>

                            </h2>
                        </div>
                    </div>

                </div>
                <div class="container container-jrnl">
                    <div class="bookshelf"></div>
                    <div class="book">
                        <div class="front">
                            <div class="cover">
                                <a href="{{asset('/assets/pdf/annual_report/annual_report_10_11.pdf')}}" target="_blank"><img src="{{asset('/assets/img/publication/annual_report/11.jpg')}}" alt="Book Cover Image"></a>

                            </div>
                        </div>
                        <div class="left-side">
                            <h2>
                                <span>Annual Report</span>

                            </h2>
                        </div>
                    </div>
                    <div class="book">
                        <div class="front">
                            <div class="cover">
                                <a href="{{asset('/assets/pdf/annual_report/annual_report_09_10.pdf')}}" target="_blank"><img src="{{asset('/assets/img/publication/annual_report/12.jpg')}}" alt="Book Cover Image"></a>

                            </div>
                        </div>
                        <div class="left-side">
                            <h2>
                                <span>Annual Report</span>

                            </h2>
                        </div>
                    </div>
                    <div class="book">
                        <div class="front">
                            <div class="cover">
                                <a href="{{asset('/assets/pdf/annual_report/annual_report_08_09.pdf')}}" target="_blank"><img src="{{asset('/assets/img/publication/annual_report/13.jpg')}}" alt="Book Cover Image"></a>

                            </div>
                        </div>
                        <div class="left-side">
                            <h2>
                                <span>Annual Report</span>

                            </h2>
                        </div>
                    </div>


                </div>

                <h2 class="tmu-text-primary mb-2 mt-5"><span>Journals</span><span></span></h2>



                <div class="container container-jrnl">
                    <div class="bookshelf"></div>
                    <div class="book">
                        <div class="front">
                            <div class="cover">
                                <a href="{{asset('/assets/pdf/journals/TJBAC_vol_1_for_Upload.pdf')}}" target="_blank"><img src="{{asset('/assets/img/publication/jnrl/1.jpg')}}" alt="Book Cover Image"></a>

                            </div>
                        </div>
                        <div class="left-side">
                            <h2>
                                <span>Journals</span>

                            </h2>
                        </div>
                    </div>
                    <div class="book">
                        <div class="front">
                            <div class="cover">
                                <a href="{{asset('/assets/pdf/journals/TJBAC_vol_2_2022.pdf')}}" target="_blank"><img src="{{asset('/assets/img/publication/jnrl/2.jpg')}}" alt="Book Cover Image"></a>

                            </div>
                        </div>
                        <div class="left-side">
                            <h2>
                                <span>Journals</span>

                            </h2>
                        </div>
                    </div>
                    <div class="book">
                        <div class="front">
                            <div class="cover">
                                <a href="{{asset('/assets/pdf/journals/TJBAC-Vol.-3,-2023-Final_compressed.pdf')}}" target="_blank"><img src="{{asset('/assets/img/publication/jnrl/3.jpg')}}" alt="Book Cover Image"></a>

                            </div>
                        </div>
                        <div class="left-side">
                            <h2>
                                <span>Journals</span>

                            </h2>
                        </div>
                    </div>
                    <div class="book">
                        <div class="front">
                            <div class="cover">
                                <a href="{{asset('/assets/pdf/journals/S & T_2020.pdf')}}" target="_blank"><img src="{{asset('/assets/img/publication/jnrl/4.jpg')}}" alt="Book Cover Image"></a>

                            </div>
                        </div>
                        <div class="left-side">
                            <h2>
                                <span>Journals</span>

                            </h2>
                        </div>
                    </div>
                    <div class="book">
                        <div class="front">
                            <div class="cover">
                                <a href="{{asset('/assets/pdf/journals/S & T_2021.pdf')}}" target="_blank"><img src="{{asset('/assets/img/publication/jnrl/5.jpg')}}" alt="Book Cover Image"></a>

                            </div>
                        </div>
                        <div class="left-side">
                            <h2>
                                <span>Journals</span>

                            </h2>
                        </div>
                    </div>
                    <div class="book">
                        <div class="front">
                            <div class="cover">
                                <a href="{{asset('/assets/pdf/journals/S&T_journal,Issue_july_2022to_June_2023.pdf')}}" target="_blank"><img src="{{asset('/assets/img/publication/jnrl/6.jpg')}}" alt="Book Cover Image"></a>

                            </div>
                        </div>
                        <div class="left-side">
                            <h2>
                                <span>Journals</span>

                            </h2>
                        </div>
                    </div>
                </div>
                <div class="container container-jrnl">
                    <div class="bookshelf"></div>
                    <div class="book">
                        <div class="front">
                            <div class="cover">
                                <a href="{{asset('/assets/pdf/journals/s_and_t_final_merged.pdf')}}" target="_blank"><img src="{{asset('/assets/img/publication/jnrl/7.jpg')}}" alt="Book Cover Image"></a>

                            </div>
                        </div>
                        <div class="left-side">
                            <h2>
                                <span>Journals</span>

                            </h2>
                        </div>
                    </div>
                    <div class="book">
                        <div class="front">
                            <div class="cover">
                                <a href="{{asset('/assets/pdf/journals/viewpoint_jan_july_2021_1.pdf')}}" target="_blank"><img src="{{asset('/assets/img/publication/jnrl/8.jpg')}}" alt="Book Cover Image"></a>

                            </div>
                        </div>
                        <div class="left-side">
                            <h2>
                                <span>Journals</span>

                            </h2>
                        </div>
                    </div>
                    <div class="book">
                        <div class="front">
                            <div class="cover">
                                <a href="{{asset('/assets/pdf/journals/viewpoint_July_Dec_2021_2.pdf')}}" target="_blank"><img src="{{asset('/assets/img/publication/jnrl/9.jpg')}}" alt="Book Cover Image"></a>
                            </div>
                        </div>
                        <div class="left-side">
                            <h2>
                                <span>Journals</span>
                            </h2>
                        </div>
                    </div>
                    <div class="book">
                        <div class="front">
                            <div class="cover">
                                <a href="#" target="_blank"><img src="{{asset('/assets/img/publication/jnrl/10.jpg')}}" alt="Book Cover Image"></a>

                            </div>
                        </div>
                        <div class="left-side">
                            <h2>
                                <span>Journals</span>
                            </h2>
                        </div>
                    </div>
                    <div class="book">
                        <div class="front">
                            <div class="cover">
                                <a href="https://tmujdent.co.in/archive.php" target="_blank"><img src="{{asset('/assets/img/publication/jnrl/11.jpg')}}" alt="Book Cover Image"></a>

                            </div>
                        </div>
                        <div class="left-side">
                            <h2>
                                <span>Journals</span>
                            </h2>
                        </div>
                    </div>
                    <div class="book">
                        <div class="front">
                            <div class="cover">
                                <a href="https://journals.lww.com/amit/pages/default.aspx" target="_blank"><img src="{{asset('/assets/img/publication/jnrl/12.jpg')}}" alt="Book Cover Image"></a>

                            </div>
                        </div>
                        <div class="left-side">
                            <h2>
                                <span>Journals</span>

                            </h2>
                        </div>
                    </div>
                </div>

                <h2 class="tmu-text-primary mb-2 mt-5"><span>Conference</span><span> Proceedings</span></h2>

                <div class="container container-jrnl">
                    <div class="bookshelf"></div>
                    <div class="book">
                        <div class="front">
                            <div class="cover">
                                <a href="{{asset('/assets/pdf/journals/ncmi-20.pdf')}}" target="_blank"><img src="{{asset('/assets/img/publication/confe_pro/1.jpg')}}" alt="Book Cover Image"></a>

                            </div>
                        </div>
                        <div class="left-side">
                            <h2>
                                <span>conference proceedings</span>

                            </h2>
                        </div>
                    </div>
                    <div class="book">
                        <div class="front">
                            <div class="cover">
                                <a href="{{asset('/assets/pdf/journals/Proceedings-NCMD-2020.pdf')}}" target="_blank"><img src="{{asset('/assets/img/publication/confe_pro/2.jpg')}}" alt="Book Cover Image"></a>

                            </div>
                        </div>
                        <div class="left-side">
                            <h2>
                                <span>conference proceedings</span>

                            </h2>
                        </div>
                    </div>
                    <div class="book">
                        <div class="front">
                            <div class="cover">
                                <a href="{{asset('/assets/pdf/journals/sustainable_development.pdf')}}" target="_blank"><img src="{{asset('/assets/img/publication/confe_pro/3.jpg')}}" alt="Book Cover Image"></a>

                            </div>
                        </div>
                        <div class="left-side">
                            <h2>
                                <span>conference proceedings</span>

                            </h2>
                        </div>
                    </div>
                    <div class="book">
                        <div class="front">
                            <div class="cover">
                                <a href="{{asset('/assets/pdf/journals/resurging-india-myths-and-realities.pdf')}}" target="_blank"><img src="{{asset('/assets/img/publication/confe_pro/4.jpg')}}" alt="Book Cover Image"></a>

                            </div>
                        </div>
                        <div class="left-side">
                            <h2>
                                <span>conference proceedings</span>

                            </h2>
                        </div>
                    </div>
                    <div class="book">
                        <div class="front">
                            <div class="cover">
                                <a href="{{asset('/assets/pdf/journals/rmtsi.pdf')}}" target="_blank"><img src="{{asset('/assets/img/publication/confe_pro/5.jpg')}}" alt="Book Cover Image"></a>

                            </div>
                        </div>
                        <div class="left-side">
                            <h2>
                                <span>conference proceedings</span>

                            </h2>
                        </div>
                    </div>
                    <div class="book">
                        <div class="front">
                            <div class="cover">
                                <a href="{{asset('/assets/pdf/journals/Proceddings_RTGAST-2021 for Website.pdf')}}" target="_blank"><img src="{{asset('/assets/img/publication/confe_pro/6.jpg')}}" alt="Book Cover Image"></a>

                            </div>
                        </div>
                        <div class="left-side">
                            <h2>
                                <span>conference proceedings</span>

                            </h2>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <!-- #content end -->


        <section class="d-block d-sm-none">
            <h2 class="tmu-text-primary mb-3 mt-3 text-center"><span>Annual</span><span> Reports</span></h2>

            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <div class="book-wrapper">
                            <div class="book-items">
                                <div class="main-book-wrap">
                                    <a href="{{asset('/assets/pdf/annual_report/annual_report_21_22.pdf')}}" target="_blank">
                                        <div class="book-cover">
                                            <div class="book-inside"></div>
                                            <div class="book-image">
                                                <img src="{{asset('/assets/img/publication/annual_report/1.jpg')}}" />
                                                <div class="effect"></div>
                                                <div class="light"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="book-wrapper">
                            <div class="book-items">
                                <div class="main-book-wrap">
                                    <a href="{{asset('/assets/pdf/annual_report/annual_report_20_21.pdf')}}" target="_blank">
                                        <div class="book-cover">
                                            <div class="book-inside"></div>
                                            <div class="book-image">
                                                <img src="{{asset('/assets/img/publication/annual_report/2.jpg')}}" />
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
                                    <a href="{{asset('/assets/pdf/annual_report/annual_report_19_20.pdf')}}" target="_blank">
                                        <div class="book-cover">
                                            <div class="book-inside"></div>
                                            <div class="book-image">
                                                <img src="{{asset('/assets/img/publication/annual_report/3.jpg')}}" />
                                                <div class="effect"></div>
                                                <div class="light"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="book-wrapper">
                            <div class="book-items">
                                <div class="main-book-wrap">
                                    <a href="{{asset('/assets/pdf/annual_report/annual_report_18_19.pdf')}}" target="_blank">
                                        <div class="book-cover">
                                            <div class="book-inside"></div>
                                            <div class="book-image">
                                                <img src="{{asset('/assets/img/publication/annual_report/4.jpg')}}" />
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
                                    <a href="{{asset('/assets/pdf/annual_report/annual_report_17_18.pdf')}}" target="_blank">
                                        <div class="book-cover">
                                            <div class="book-inside"></div>
                                            <div class="book-image">
                                                <img src="{{asset('/assets/img/publication/annual_report/5.jpg')}}" />
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
                                    <a href="{{asset('/assets/pdf/annual_report/annual_report_16_17.pdf')}}" target="_blank">
                                        <div class="book-cover">
                                            <div class="book-inside"></div>
                                            <div class="book-image">
                                                <img src="{{asset('/assets/img/publication/annual_report/6.jpg')}}" />
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
                                    <a href="{{asset('/assets/pdf/annual_report/annual_report_15_16.pdf')}}" target="_blank">
                                        <div class="book-cover">
                                            <div class="book-inside"></div>
                                            <div class="book-image">
                                                <img src="{{asset('/assets/img/publication/annual_report/7.jpg')}}" />
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
                                    <a href="{{asset('/assets/pdf/annual_report/annual_report_14_15.pdf')}}" target="_blank">
                                        <div class="book-cover">
                                            <div class="book-inside"></div>
                                            <div class="book-image">
                                                <img src="{{asset('/assets/img/publication/annual_report/8.jpg')}}" />
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
                                    <a href="{{asset('/assets/pdf/annual_report/annual_report_13_14.pdf')}}" target="_blank">
                                        <div class="book-cover">
                                            <div class="book-inside"></div>
                                            <div class="book-image">
                                                <img src="{{asset('/assets/img/publication/annual_report/9.jpg')}}" />
                                                <div class="effect"></div>
                                                <div class="light"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="book-wrapper">
                            <div class="book-items">
                                <div class="main-book-wrap">
                                    <a href="{{asset('/assets/pdf/annual_report/annual_report_11_12.pdf')}}" target="_blank">
                                        <div class="book-cover">
                                            <div class="book-inside"></div>
                                            <div class="book-image">
                                                <img src="{{asset('/assets/img/publication/annual_report/10.jpg')}}" />
                                                <div class="effect"></div>
                                                <div class="light"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="book-wrapper">
                            <div class="book-items">
                                <div class="main-book-wrap">
                                    <a href="{{asset('/assets/pdf/annual_report/annual_report_10_11.pdf')}}" target="_blank">
                                        <div class="book-cover">
                                            <div class="book-inside"></div>
                                            <div class="book-image">
                                                <img src="{{asset('/assets/img/publication/annual_report/11.jpg')}}" />
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
                                    <a href="{{asset('/assets/pdf/annual_report/annual_report_09_10.pdf')}}" target="_blank">
                                        <div class="book-cover">
                                            <div class="book-inside"></div>
                                            <div class="book-image">
                                                <img src="{{asset('/assets/img/publication/annual_report/12.jpg')}}" />
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
                                    <a href="{{asset('/assets/pdf/annual_report/annual_report_08_09.pdf')}}" target="_blank">
                                        <div class="book-cover">
                                            <div class="book-inside"></div>
                                            <div class="book-image">
                                                <img src="{{asset('/assets/img/publication/annual_report/13.jpg')}}" />
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
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>



            <h2 class="tmu-text-primary mb-3 mt-5 text-center"><span>Journals</span><span></span></h2>

            <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="book-wrapper">
                            <div class="book-items">
                                <div class="main-book-wrap">
                                    <div class="book-cover">
                                        <div class="book-inside"></div>
                                        <div class="book-image">
                                            <img src="{{asset('/assets/img/publication/jnrl/1.jpg')}}" />
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
                                            <img src="{{asset('/assets/img/publication/jnrl/2.jpg')}}" />
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
                                            <img src="{{asset('/assets/img/publication/jnrl/3.jpg')}}" />
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
                                            <img src="{{asset('/assets/img/publication/jnrl/4.jpg')}}" />
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
                                            <img src="{{asset('/assets/img/publication/jnrl/5.jpg')}}" />
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
                                            <img src="{{asset('/assets/img/publication/jnrl/6.jpg')}}" />
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
                                            <img src="{{asset('/assets/img/publication/jnrl/7.jpg')}}" />
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
                                            <img src="{{asset('/assets/img/publication/jnrl/8.jpg')}}" />
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
                                            <img src="{{asset('/assets/img/publication/jnrl/9.jpg')}}" />
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
                                            <img src="{{asset('/assets/img/publication/jnrl/10.jpg')}}" />
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
                                            <img src="{{asset('/assets/img/publication/jnrl/11.jpg')}}" />
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
                                            <img src="{{asset('/assets/img/publication/jnrl/12.jpg')}}" />
                                            <div class="effect"></div>
                                            <div class="light"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>


            <h2 class="tmu-text-primary mb-3 mt-5 text-center"><span>Conference</span><span> Proceedings</span></h2>

            <div id="carouselExampleIndicators3" class="carousel slide" data-bs-ride="carousel">

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="book-wrapper">
                            <div class="book-items">
                                <div class="main-book-wrap">
                                    <div class="book-cover">
                                        <div class="book-inside"></div>
                                        <div class="book-image">
                                            <img src="{{asset('/assets/img/publication/confe_pro/1.jpg')}}" />
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
                                            <img src="{{asset('/assets/img/publication/confe_pro/2.jpg')}}" />
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
                                            <img src="{{asset('/assets/img/publication/confe_pro/3.jpg')}}" />
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
                                            <img src="{{asset('/assets/img/publication/confe_pro/4.jpg')}}" />
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
                                            <img src="{{asset('/assets/img/publication/confe_pro/5.jpg')}}" />
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
                                            <img src="{{asset('/assets/img/publication/confe_pro/6.jpg')}}" />
                                            <div class="effect"></div>
                                            <div class="light"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>



    </div>
</div>
</div>




<script>
    function openBook(book) {
        const bookInner = book.querySelector('.book-inner');
        bookInner.style.transform = 'rotateY(0)';
        const pages = book.querySelector('.pages');
        pages.style.display = 'block';
    }

    function closeBook(book) {
        const bookInner = book.querySelector('.book-inner');
        bookInner.style.transform = 'rotateY(45deg)';
        const pages = book.querySelector('.pages');
        pages.style.display = 'none';
    }
</script>




@endsection