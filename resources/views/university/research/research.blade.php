@extends('layouts.university.departments.research_cell_with_sidebar')
@section('content')


<link rel="stylesheet" href="{{asset('/assets/css/journal.css')}}">



<div class="main-content">
    <div class="coontainer">
        <div class="container">
            <section class="about-section bg-light mt-4">
                <div class="container">
                    <div class="text-content p-3">
                        <h1 class="tmu-text-primary tmu-page-heading"><span>Welcome to TMU </span><span> Research
                                Cell</span></h1>
                        <p class="about-p mb-4 text-justify">In order to promote a responsive and conducive academic
                            environment on the campus, each College/Independent Teaching Department shall establish a
                            '<span class="highlight">Students' Grievance Redressal Cell</span>'. The ‘Cell’ shall
                            provide a friendly mechanism to the students to report their grievances and the faster
                            disposal of the same. It shall also provide a platform to the students to come forward with
                            constructive suggestions for more efficient and effective teaching-learning atmosphere</p>
                    </div>
                </div>
            </section>
        </div>

        <div class="container mt-2 p-3">
            <div class="box d-none d-sm-block md-block">
                <p class="about-p mb-2 text-justify">The University publishes the following journals on periodic basis:</p>
                <div class="container">
                    <div class="book">

                        <div class="front">
                            <div class="cover">
                                <a href="https://upgrade.tmu.ac.in/assets/pdf/jnrl/viewpoint_jan_july_2021_1.pdf" target="_blank"><img
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
                                <a href="https://www.tmu.ac.in/img/research/pharmacoaerena.jpg" target="_blank"><img
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
                                <a href="https://www.tmu.ac.in/tmu/publication" target="_blank"><img
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
                                <a href="https://www.tmu.ac.in/tmu/publication" target="_blank"><img
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
            <p class="about-p mb-2 text-justify p-3">The University publishes the following journals on periodic basis:</p>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <div class="book-wrapper">
                            <div class="book-items">
                                <div class="main-book-wrap">
                                    <div class="book-cover">
                                        <div class="book-inside"></div>
                                        <div class="book-image">
                                            <img src="https://www.tmu.ac.in/img/research/s&treview.jpg" />
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
                                            <img src="https://upgrade.tmu.ac.in/assets/img/jnrl/10.jpg" />
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
                                            <img src="https://www.tmu.ac.in/img/research/s&treview.jpg" />
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
                                            <img src="https://upgrade.tmu.ac.in/assets/img/jnrl/11.jpg" />
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
                                            <img src="https://upgrade.tmu.ac.in/assets/img/jnrl/12.jpg" />
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
                                            <img src="https://www.tmu.ac.in/img/research/ijrtcsit.jpg" />
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
        <div class="row mt-3 p-3">
            <p>Students and faculty members are encouraged to contribute towards research and participate in national and
                international conferences and seminars. The faculty members publish quality research papers which go a long way
                in contributing towards the promotion of research in varied disciplines.</p>
        </div>
    </div>
</div>
</div>


@endsection