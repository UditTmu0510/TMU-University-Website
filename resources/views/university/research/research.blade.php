@extends('layouts.university.departments.research_cell_with_sidebar')
@section('content')


<link rel="stylesheet" href="{{asset('/assets/css/journal.css')}}">

<style>
    @media screen and (min-width: 1000px) {
        .container {
            max-width: 75vw !important;
        }
    }
</style>

<div class="main-content">
    <div class="coontainer">
        <div class="container">
            <section class="about-section bg-light mt-4">
                <div class="container">
                    <div class="text-content p-3">
                        <h1 class="tmu-text-primary tmu-page-heading"><span>Welcome to TMU </span><span> Research
                                Cell</span></h1>
                        <p class="about-p mb-4 text-justify">Teerthanker Mahaveer University's Research and Development Centre serves as a multidisciplinary centre committed to research, education, and collaboration with industry and society. By integrating science, engineering, and technology with sustainable practices, the centre aims to create innovative and holistic solutions for global issues.
The centre’s mission is to enhance foundational and advanced research by uniting faculty, scientists, and students across disciplines such as Chemical Sciences, Physical Sciences, Biological Sciences, Nanoscience, Nanotechnology, Pharmacy, Medical, and health sectors. <br> Its objectives include conducting multidisciplinary research, sharing knowledge with the public, and promoting ethical research practices.
The centre has made significant contributions through its research publications in leading journals and continues to expand its work in areas like Synthetic Organic Chemistry, Green Chemistry and Engineering, Nucleic Acid Chemistry, Cheminformatics, Nuclear and Particle Physics and Astrophysics. Additionally, the centre emphasises the ethical conduct of research and encourages women researchers to apply for scholarships. Collaboration with international universities and industries, along with student exchange programmes, further strengthens its global reach.</p>
                    </div>
                </div>
            </section>
        </div>

        <div class="container mt-2 p-3">
            <div class="box d-none d-sm-block md-block">
                <p class="about-p mb-2 text-justify">The University publishes the following <a href="{{route('tmu.publication')}}">journals</a> on periodic basis:</p>
                <div class="container">
                    <div class="book">

                        <div class="front">
                            <div class="cover">
                                <a href="{{asset('/assets/pdf/journals/viewpoint_jan_july_2021_1.pdf')}}" target="_blank"><img
                                        src="{{asset('/assets/img/magazines/research/8.jpg')}}" alt="Book Cover Image"></a>

                            </div>
                        </div>
                        <div class="left-side">
                            <h2 class="journals">
                                <span>Journals</span>
                            </h2>
                        </div>

                    </div>
                    <div class="book">
                        <div class="front">
                            <div class="cover">
                                <a href="{{route('tmu.publication')}}" target="_blank"><img
                                        src="{{asset('/assets/img/magazines/research/10.jpg')}}" alt="Book Cover Image"></a>
                                <!-- <p class="num-up">84</p>
                        <p class="num-down">1</p>
                        <p class="author">George Orwell</p> -->
                            </div>
                        </div>
                        <div class="left-side">
                            <h2 class="journals">
                                <span>Journals</span>
                            </h2>
                        </div>

                    </div>
                    <div class="book">
                        <div class="front">
                            <div class="cover">
                                <a href="{{route('tmu.publication')}}" target="_blank"><img
                                        src="{{asset('/assets/img/magazines/research/s&treview.jpg')}}" alt="Book Cover Image"
                                        style="width:200px; height:275px;"></a>

                            </div>
                        </div>
                        <div class="left-side">
                            <h2 class="journals">
                                <span>Journals</span>
                            </h2>
                        </div>
                    </div>
                    <div class="book">
                        <div class="front">
                            <div class="cover">
                                <a href="https://tmujdent.co.in/archive.php" target="_blank"><img
                                        src="{{asset('/assets/img/magazines/research/11.jpg')}}" alt="Book Cover Image"
                                        style="height:275px;"></a>

                            </div>
                        </div>
                        <div class="left-side">
                            <h2 class="journals">
                                <span>Journals</span>
                            </h2>
                        </div>
                    </div>
                    <div class="book">
                        <div class="front">
                            <div class="cover">
                                <a href="https://journals.lww.com/amit/pages/default.aspx" target="_blank"><img
                                        src="{{asset('/assets/img/magazines/research/12.jpg')}}" alt="Book Cover Image"
                                        style="height:275px;"></a>

                            </div>
                        </div>
                        <div class="left-side">
                            <h2 class="journals">
                                <span>Journals</span>
                            </h2>
                        </div>
                    </div>
                    <div class="book">
                        <div class="front">
                            <div class="cover">
                                <a href="{{route('tmu.publication')}}" target="_blank"><img
                                        src="{{asset('/assets/img/magazines/research/ijrtcsit.jpg')}}" alt="Book Cover Image"
                                        style="width:200px; height:275px;"></a>

                            </div>
                        </div>
                        <div class="left-side">
                            <h2 class="journals">
                                <span>Journals</span>
                            </h2>
                        </div>
                    </div>
                    <!-- Repeat the above book structure for additional books -->
                    <!-- ... -->
                </div>

            </div>

        </div>

        <section class="d-block d-sm-none">
            <p class="about-p mb-2 text-justify p-3">The University publishes the following <a href="{{route('tmu.publication')}}">journals</a> on periodic basis:</p>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <div class="book-wrapper">
                            <div class="book-items">
                                <div class="main-book-wrap">
                                    <div class="book-cover">
                                        <div class="book-inside"></div>
                                        <a href="{{asset('/assets/pdf/journals/viewpoint_jan_july_2021_1.pdf')}}" target="_blank">
                                            <div class="book-image">
                                                <img src="{{asset('/assets/img/magazines/research/8.jpg')}}" />
                                                <div class="effect"></div>
                                                <div class="light"></div>
                                            </div>
                                        </a>
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
                                        <a href="{{route('tmu.publication')}}" target="_blank">
                                            <div class="book-image">
                                                <img src="{{asset('/assets/img/magazines/research/10.jpg')}}" />
                                                <div class="effect"></div>
                                                <div class="light"></div>
                                            </div>
                                        </a>
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
                                        <a href="{{route('tmu.publication')}}" target="_blank">
                                            <div class="book-image">
                                                <img src="{{asset('/assets/img/magazines/research/s&treview.jpg')}}" />
                                                <div class="effect"></div>
                                                <div class="light"></div>
                                            </div>
                                        </a>
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
                                        <a href="https://tmujdent.co.in/archive.php" target="_blank">
                                            <div class="book-image">
                                                <img src="{{asset('/assets/img/magazines/research/11.jpg')}}" />
                                                <div class="effect"></div>
                                                <div class="light"></div>
                                            </div>
                                        </a>
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
                                        <a href="https://journals.lww.com/amit/pages/default.aspx" target="_blank">
                                            <div class="book-image">
                                                <img src="{{asset('/assets/img/magazines/research/12.jpg')}}" />
                                                <div class="effect"></div>
                                                <div class="light"></div>
                                            </div>
                                        </a>
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
                                        <a href="{{route('tmu.publication')}}" target="_blank">
                                            <div class="book-image">
                                                <img src="{{ asset('/assets/img/magazines/research/ijrtcsit.jpg') }}" alt="Research Magazine" />
                                                <div class="effect"></div>
                                                <div class="light"></div>
                                            </div>
                                        </a>

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