@extends('layouts.university.departments.sc_with_sidebar')
@section('content')

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

            <section>
                <div class="row bg-light pt-3">
                    <!-- Card 1 -->
                    <div class="col-12 col-md-6 col-lg-12 mb-4">
                        <div class="card h-100">
                            <div class="row g-0">
                                <!-- Image Top (Mobile/Tablet), Left (Desktop) -->
                                <div class="col-12 col-lg-2 order-0 order-lg-0 d-flex justify-content-center p-2">
                                    <img src="{{ asset('/assets/img/student_club/cc.jpg') }}"
                                        alt="TMU approved by UGC" class="img-fluid" style="max-height: 135px;">
                                </div>
                                <!-- Text -->
                                <div class="col-12 col-lg-10 order-1 order-lg-1 p-2">
                                    <div class="card-body text-center text-lg-start">
                                        <h3 class="tmu-text-primary mb-2"><span>Cultural</span><span> Club</span></h3>
                                        <p class="text-justify mb-1">The Cultural Club engages students from all colleges,
                                            encouraging active participation in various cultural events such as Rock-On,
                                            National Days, and more, fostering unity, creativity, and a vibrant campus
                                            environment through shared artistic expression.</p>
                                        <p class="text-justify mb-0"><span class="highlight p-0">Key Activities:</span> Cultural Events,
                                            National Day Celebrations.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-12 col-md-6 col-lg-12 mb-4">
                        <div class="card h-100">
                            <div class="row g-0">
                                <!-- Image Top (Mobile/Tablet), Right (Desktop) -->
                                <div class="col-12 col-lg-2 order-0 order-lg-1 d-flex justify-content-center p-2">
                                    <img src="{{ asset('/assets/img/student_club/mc.jpg') }}"
                                        alt="TMU approved by AICTE" class="img-fluid" style="max-height: 135px;">
                                </div>
                                <!-- Text -->
                                <div class="col-12 col-lg-10 order-1 order-lg-0 p-2">
                                    <div class="card-body text-center text-lg-start">
                                        <h3 class="tmu-text-primary mb-2"><span>Marketing </span><span> Club</span></h3>
                                        <p class="text-justify mb-1">Managed by students of the College of Management, this
                                            club organizes events such as case study competitions and the annual marketing
                                            fair, providing a platform for students to apply classroom concepts in
                                            real-world business scenarios and experiences.</p>
                                        <p class="text-justify mb-0"><span class="highlight p-0">Key Activities:</span> Case Study
                                            Competitions, Marketing Fair.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-12 mb-4">
                        <div class="card h-100">
                            <div class="row g-0">
                                <!-- Image Top (Mobile/Tablet), Left (Desktop) -->
                                <div class="col-12 col-lg-2 order-0 order-lg-0 d-flex justify-content-center p-2">
                                    <img src="{{ asset('/assets/img/student_club/sc.jpg') }}"
                                        alt="TMU approved by UGC" class="img-fluid" style="max-height: 135px;">
                                </div>
                                <!-- Text -->
                                <div class="col-12 col-lg-10 order-1 order-lg-1 p-2">
                                    <div class="card-body text-center text-lg-start">
                                        <h3 class="tmu-text-primary mb-2"><span>Singing </span><span> Club</span></h3>
                                        <p class="text-justify mb-1">The Singing Club nurtures musical talent by organizing
                                            solo and group performances, competitions, and musical nights, allowing students
                                            to explore their vocal abilities and express themselves through melody, rhythm,
                                            and diverse genres of music.</p>
                                        <p class="text-justify mb-0"><span class="highlight p-0">Key Activities:</span> Singing Competitions,
                                            Musical Nights.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-12 col-md-6 col-lg-12 mb-4">
                        <div class="card h-100">
                            <div class="row g-0">
                                <!-- Image Top (Mobile/Tablet), Right (Desktop) -->
                                <div class="col-12 col-lg-2 order-0 order-lg-1 d-flex justify-content-center p-2">
                                    <img src="{{ asset('/assets/img/student_club/dc.jpg') }}"
                                        alt="TMU approved by AICTE" class="img-fluid" style="max-height: 135px;">
                                </div>
                                <!-- Text -->
                                <div class="col-12 col-lg-10 order-1 order-lg-0 p-2">
                                    <div class="card-body text-center text-lg-start">
                                        <h3 class="tmu-text-primary mb-2"><span>Dance </span><span> Club</span></h3>
                                        <p class="text-justify mb-1">The Dance Club brings together dance enthusiasts to
                                            showcase talent through cultural events, flash mobs, and competitions, promoting
                                            physical expression, rhythm, and teamwork while celebrating various dance forms,
                                            both classical and contemporary.</p>
                                        <p class="text-justify mb-0"><span class="highlight p-0">Key Activities:</span> Dance Battles,
                                            Cultural Performances.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-12 mb-4">
                        <div class="card h-100">
                            <div class="row g-0">
                                <!-- Image Top (Mobile/Tablet), Left (Desktop) -->
                                <div class="col-12 col-lg-2 order-0 order-lg-0 d-flex justify-content-center p-2">
                                    <img src="{{ asset('/assets/img/student_club/hrc.jpg') }}"
                                        alt="TMU approved by UGC" class="img-fluid" style="max-height: 135px;">
                                </div>
                                <!-- Text -->
                                <div class="col-12 col-lg-10 order-1 order-lg-1 p-2">
                                    <div class="card-body text-center text-lg-start">
                                        <h3 class="tmu-text-primary mb-2"><span>Human Resource</span><span> Club</span></h3>
                                        <p class="text-justify mb-1">The HR Club conducts engaging activities such as
                                            role-play competitions, case study contests, and insightful talks on diverse HR
                                            topics, aiming to enhance students' understanding, practical skills, and
                                            interest in human resource management and workplace dynamics.</p>
                                        <p class="text-justify mb-0"><span class="highlight p-0">Key Activities:</span> Role Play
                                            Competitions, Case Studies, HR Talks.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-12 col-md-6 col-lg-12 mb-4">
                        <div class="card h-100">
                            <div class="row g-0">
                                <!-- Image Top (Mobile/Tablet), Right (Desktop) -->
                                <div class="col-12 col-lg-2 order-0 order-lg-1 d-flex justify-content-center p-2">
                                    <img src="{{ asset('/assets/img/student_club/pc.jpg') }}"
                                        alt="TMU approved by AICTE" class="img-fluid" style="max-height: 135px;">
                                </div>
                                <!-- Text -->
                                <div class="col-12 col-lg-10 order-1 order-lg-0 p-2">
                                    <div class="card-body text-center text-lg-start">
                                        <h3 class="tmu-text-primary mb-2"><span>Photography </span><span> Club</span></h3>
                                        <p class="text-justify mb-1">The Photography Club encourages creativity through
                                            photo walks, contests, and workshops, helping students enhance their photography
                                            skills while capturing campus life, events, and nature from unique perspectives
                                            and storytelling through visual art.</p>
                                        <p class="text-justify mb-0"><span class="highlight p-0">Key Activities:</span> Photo Walks,
                                            Photography Contests.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-12 mb-4">
                        <div class="card h-100">
                            <div class="row g-0">
                                <!-- Image Top (Mobile/Tablet), Left (Desktop) -->
                                <div class="col-12 col-lg-2 order-0 order-lg-0 d-flex justify-content-center p-2">
                                    <img src="{{ asset('/assets/img/student_club/sport.jpg') }}"
                                        alt="TMU approved by UGC" class="img-fluid" style="max-height: 135px;">
                                </div>
                                <!-- Text -->
                                <div class="col-12 col-lg-10 order-1 order-lg-1 p-2">
                                    <div class="card-body text-center text-lg-start">
                                        <h3 class="tmu-text-primary mb-2"><span>Sports</span><span> Club</span></h3>
                                        <p class="text-justify mb-1">The Sports Club promotes fitness and teamwork by
                                            organizing tournaments, matches, and sports meets, offering students
                                            opportunities to excel in games like cricket, football, badminton, and more,
                                            fostering a spirit of discipline and competition.</p>
                                        <p class="text-justify mb-0"><span class="highlight p-0">Key Activities:</span> Sports Tournaments,
                                            Team Matches.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-12 col-md-6 col-lg-12 mb-4">
                        <div class="card h-100">
                            <div class="row g-0">
                                <!-- Image Top (Mobile/Tablet), Right (Desktop) -->
                                <div class="col-12 col-lg-2 order-0 order-lg-1 d-flex justify-content-center p-2">
                                    <img src="{{ asset('/assets/img/student_club/yc-1.jpg') }}"
                                        alt="TMU approved by AICTE" class="img-fluid" style="max-height: 135px;">
                                </div>
                                <!-- Text -->
                                <div class="col-12 col-lg-10 order-1 order-lg-0 p-2">
                                    <div class="card-body text-center text-lg-start">
                                        <h3 class="tmu-text-primary mb-2"><span>Yoga </span><span> Club</span></h3>
                                        <p class="text-justify mb-1">The Yoga Club focuses on physical and mental
                                            well-being through regular yoga sessions, meditation camps, and awareness
                                            drives, helping students manage stress, improve flexibility, and lead a
                                            balanced, healthy lifestyle.</p>
                                        <p class="text-justify mb-0"><span class="highlight p-0">Key Activities:</span> Yoga Sessions,
                                            Meditation Camps.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-12 mb-4">
                        <div class="card h-100">
                            <div class="row g-0">
                                <!-- Image Top (Mobile/Tablet), Left (Desktop) -->
                                <div class="col-12 col-lg-2 order-0 order-lg-0 d-flex justify-content-center p-2">
                                    <img src="{{ asset('/assets/img/student_club/qc.jpg') }}"
                                        alt="TMU approved by UGC" class="img-fluid" style="max-height: 135px;">
                                </div>
                                <!-- Text -->
                                <div class="col-12 col-lg-10 order-1 order-lg-1 p-2">
                                    <div class="card-body text-center text-lg-start">
                                        <h3 class="tmu-text-primary mb-2"><span>Quiz</span><span> Club</span></h3>
                                        <p class="text-justify mb-1">The Quiz Club sharpens minds by hosting quiz
                                            competitions, trivia events, and knowledge-based games, encouraging students to
                                            expand their awareness in areas like current affairs, history, science, and
                                            general knowledge.</p>
                                        <p class="text-justify mb-0"><span class="highlight p-0">Key Activities:</span> Quiz Contests, Trivia
                                            Challenges.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    </div>
@endsection
