@extends('layouts.university.departments.research_cell_with_sidebar')
@section('content')


<link rel="stylesheet" href="{{asset('/assets/css/journal.css')}}">


<div class="main-content">
    <div class="container">
        <div class="container">
            <section class="about-section bg-light mt-4">
                <div class="container">
                    <div class="text-content p-3">
                        <h1 class="tmu-text-primary tmu-page-heading"><span>Welcome to TMU </span><span> Research
                                Cell</span></h1>
                        <p class="about-p mb-4 text-justify">As an educational institution, the University encourages students and scholars to expand human knowledge through analysis, innovation, and insight. </p>
                        <p class="about-p mt-3 text-justify">To lend a helping hand to the scholar burning the midnight oil, the University subscribes the following database providing access to thousands of journals in different disciplines for full text research articles and sector specific reports.</p>

                    </div>
                </div>
                <div class="row p-3">
                    <div class="col-md-4 col-sm-4 mb-1">
                        <a href="https://www.ebsco.com/" target="_blank"><img src="https://www.tmu.ac.in/img/research/EBSCOhost_Flat.png" alt="Material Design for Bootstrap - example photo" class="img-fluid img-thumbnail z-depth-1-half"></a>
                    </div>
                    <div class="col-md-4 col-sm-4 mb-1">
                        <a href="https://www.elsevier.com/en-in" target="_blank"><img src="https://www.tmu.ac.in/img/research/Untitled-630x325.png" alt="Material Design for Bootstrap - example photo" class="img-fluid img-thumbnail z-depth-1-half"></a>
                    </div>
                    <div class="col-md-4 col-sm-4 mb-1">
                        <a href="http://delnet.in/" target="_blank"><img src="https://www.tmu.ac.in/img/research/delnet.jpg" alt="Material Design for Bootstrap - example photo" class="img-fluid img-thumbnail z-depth-1-half"></a>
                    </div>
                </div>
                <div class="container">
                    <div class="text-content p-3">
                        <p class="about-p mb-4 text-justify">The University collaborates with national and international institutions for teaching, research and exchange of faculty and students to contribute to cutting-edge research and evolve new standards. Another project, “UKIERI”, had been undertaken to improve teaching pedagogy and IT enabled teaching in the College of Nursing in collaboration with Napier University, U. K.</p>
                        <p class="about-p mt-3 text-justify">A number of projects sponsored and funded by external agencies are in progress. Projects sponsored by the Ministry of Labor and Employment, Government of India, a project with the Consultancy Development Center, and a project under the aegis of UNICEF, are underway.</p>

                    </div>
                </div>
            </section>
        </div>

        <div class="container mt-2 p-3">
            <div class="box d-none d-sm-block md-block" style="width:100%;">
                <p class="about-p mb-2 text-justify">The University publishes the following <a href="{{route('tmu.publication')}}">journals</a> on periodic basis:</p>
                <div class="container123">
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
                <p class="about-p mb-2 text-justify p-3">Students and faculty members are encouraged to contribute towards research and participate in national and international conferences and seminars. The faculty members publish quality research papers which go a long way in contributing towards the promotion of research in varied disciplines.</p>
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
            <p class="about-p mb-2 text-justify p-3">Students and faculty members are encouraged to contribute towards research and participate in national and international conferences and seminars. The faculty members publish quality research papers which go a long way in contributing towards the promotion of research in varied disciplines.</p>
        </section>
    </div>
</div>
</div>


@endsection