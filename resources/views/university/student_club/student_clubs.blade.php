@extends('layouts.university.departments.sc_with_sidebar')
@section('content')
    <style>
        /* Club Details */
        .club-details {
            margin-top: 20px;
            text-align: left;
            color: rgb(0, 0, 0);
        }

        .club-details ul {
            list-style-type: none;
            padding: 0;
        }

        .club-details li {
            margin: 5px 0;
        }


        /* Club Section Styling */
        .club-card-t2 {
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            display: flex;
            align-items: center;
        }

        .club-img-t2 {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 10px;
        }

        .club-text-t2 {
            padding-left: 20px;
            padding-right: 20px;
        }

        .club-container {
            background: #ececec;
        }

        .club-card-t2 {
            display: flex;
            justify-content: space-between;
            /* align-items: start; */
            gap: 15px;
            /* Ensures consistent spacing */
        }

        .club-text-t2 {
            flex-grow: 1;
            /* Allows text block to expand and use available space */
        }

        /* Responsive: Ensure images are on top on small screens */
        @media (max-width: 768px) {
            .club-card-t2 {
                flex-direction: column !important;
                text-align: center;
            }

            .club-text-t2 {
                padding-left: 0;
                padding-top: 15px;
            }
        }
    </style>


    <div class="main-content">
        <div class="container">

            <section class="club-introduction pb-2">
                <h1 class="mb-2 tmu-text-primary tmu-page-heading mt-md-3"><span>Student Clubs at</span><span
                        class="d-block d-sm-inline"> TMU</span></h1>
                <p class="text-justify">Over a span of eight years, the University has seen the Student Clubs playing a
                    pivotal
                    role in the development of its students. Since these clubs are managed by the students, the level of
                    commitment and sense of responsibility is quite high amongst its stakeholders, thus ensuring their
                    all-round
                    development. The prominent clubs of the University are:</p>
            </section>

            <div class="container club-container py-3">

                <!-- Entrepreneurship Club -->
                <div class="row mb-4">
                    <div class="col-md-12">
                        <div class="club-card-t2">
                            <img src="{{ asset('assets/img/student_club/enterprenuer.jpg') }}" alt="Entrepreneurship Club"
                                class="club-img-t2">
                            <div class="club-text-t2">
                                <h4>Entrepreneurship Club</h4>
                                <p class="text-justify">The club promotes a culture of ideas, innovation, and
                                    entrepreneurial
                                    intentions among students. Run by students of management and engineering, the club
                                    invites
                                    renowned entrepreneurs to the University and organizes talks and interactions with them.
                                </p>
                                <div class="club-details">
                                    <ul>
                                        <li><strong>Key Activities:</strong> Talks, Workshops, Networking Events</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sports Club -->
                <div class="row mb-4">
                    <div class="col-md-12">
                        <div class="club-card-t2">
                            <img src="{{ asset('assets/img/student_club/sport.jpg') }}" alt="Sports Club"
                                class="club-img-t2">
                            <div class="club-text-t2">
                                <h4>Sports Club</h4>
                                <p class="text-justify">The Sports Club selects the best sportspeople for various sports
                                    under
                                    the guidance of their College Sports Coordinator.</p>
                                <div class="club-details">
                                    <ul>
                                        <li><strong>Key Activities:</strong> Sports Selection, Competitions, Fitness
                                            Programs
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cultural Club -->
                <div class="row mb-4">
                    <div class="col-md-12">
                        <div class="club-card-t2 flex-row-reverse">
                            <img src="{{ asset('assets/img/student_club/cultural.jpg') }}" alt="Cultural Club"
                                class="club-img-t2">
                            <div class="club-text-t2 ">
                                <h4>Cultural Club</h4>
                                <p class="text-justify">The Cultural Club involves students from all the Colleges and
                                    solicits
                                    participation in cultural events like Rock-On and National Days.</p>
                                <div class="club-details">
                                    <ul>
                                        <li><strong>Key Activities:</strong> Cultural Events, National Day Celebrations</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Marketing Club -->
                <div class="row mb-4">
                    <div class="col-md-12">
                        <div class="club-card-t2">
                            <img src="{{ asset('assets/img/student_club/marketing.jpg') }}" alt="Marketing Club"
                                class="club-img-t2">
                            <div class="club-text-t2">
                                <h4>Marketing Club</h4>
                                <p class="text-justify">This club, managed by College of Management students, organizes
                                    activities like case study competitions and the annual marketing fair, allowing students
                                    to apply classroom knowledge.</p>
                                <div class="club-details">
                                    <ul>
                                        <li><strong>Key Activities:</strong> Case Study Competitions, Marketing Fair</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Human Resource Club -->
                <div class="row mb-4">
                    <div class="col-md-12">
                        <div class="club-card-t2 flex-row-reverse">
                            <img src="{{ asset('assets/img/student_club/hr.jpg') }}" alt="Human Resource Club"
                                class="club-img-t2">
                            <div class="club-text-t2 ">
                                <h4>Human Resource Club</h4>
                                <p class="text-justify">The HR Club organizes activities like role-play competitions, case
                                    study
                                    competitions, and talks on various HR issues.</p>
                                <div class="club-details">
                                    <ul>
                                        <li><strong>Key Activities:</strong> Role Play Competitions, Case Studies, HR Talks
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Naukri Club -->
                <div class="row mb-4">
                    <div class="col-md-12">
                        <div class="club-card-t2">
                            <img src="{{ asset('assets/img/student_club/naukri.jpg') }}" alt="Naukri Club"
                                class="club-img-t2">
                            <div class="club-text-t2">
                                <h4>Naukri Club</h4>
                                <p class="text-justify">This club disseminates information about job opportunities available
                                    to
                                    students via a dedicated notice board.</p>
                                <div class="club-details">
                                    <ul>
                                        <li><strong>Key Activities:</strong> Job Information Dissemination</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
