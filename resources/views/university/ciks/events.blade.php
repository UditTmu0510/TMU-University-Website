@extends('layouts.university.departments.ciks_with_sidebar')
@section('content')
    <style>
        .club-container {
            background: #ececec;
        }

        .club-card-t2 {
            display: flex;
            flex-direction: column;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            height: 100%;
        }

        .club-img-t2 {
            width: 100%;
            height: auto;
            aspect-ratio: 4 / 3;
            /* fixed height for all images */
            object-fit: cover;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            flex-shrink: 0;
        }

        /* Make all text containers equal height by giving them min-height */
        .club-text-t2 {
            flex-grow: 1;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 150px;
            /* 💡 tweak this value if needed */
        }

        .read-more-new {
            color: #ff7900;
            cursor: pointer;
            font-weight: 500;
            margin-top: 10px;
            align-self: flex-start;
        }
        .blog-title {
            font-weight: bold;
            font-size: 1rem;
            margin-bottom: 5px;
        }

        .blog-description {
            font-size: 0.9rem;
            color: #666;
        }
    </style>


    <!-- <style>
        .container-56789 {
            padding: 18px;
        }

        .blog-card {
            display: flex;
            flex-direction: column;
            width: 100%;
            max-width: 100%;
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 250ms;
        }

        .blog-card:hover {
            transform: translateY(-5px);
        }

        .image-container889,
        .blog-card img {
            width: 100%;
            height: 70%;
            /* Ensures 70% height for the image container */
            object-fit: cover;
            /* Ensures the image fills the space without distortion */
        }

        .blog-content {
            padding: 10px;
            height: 30%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        

        /* Background blur for post_path */
        .image-container889 {
            height: 100%;
            /* Set this to match the height of the img elements */
            width: auto;
            object-fit: cover;
            overflow: hidden;
            position: relative;
        }

        .image-container889::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-position: center;
            background-size: cover;
            filter: blur(80px);
            z-index: 1;
            opacity: 0.7;
        }

        .image-container889 img {
            position: relative;
            z-index: 2;
            max-width: 100%;
            height: auto;
        }

        .blog-card img,
        .image-container889 {
            aspect-ratio: 1.36;
            width: 100%;
            object-fit: contain;
        }

        .image-container889 {
            background-size: cover;
            /* Background will cover the container */
            background-position: center;
            /* Center the background image */
            background-repeat: no-repeat;
            /* Prevent repetition */
            height: 70%;
            /* Match the height to 70% like the img */
            overflow: hidden;
            position: relative;
        }

        .blurred-background {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-size: cover;
            background-position: center;
            filter: blur(2px);
            opacity: 0.6;
            z-index: 1;
        }
    </style> -->



    <div class="main-content">
        <section class="club-introduction pb-2">
            <h1 class="mb-2 tmu-text-primary tmu-page-heading">
                <span>CIKS</span><span class="d-block d-sm-inline"> Events</span>
            </h1>
        </section>

        <div class="container club-container py-3">

            @php
                $events = [
                    [
                        'id' => 'modalNC2',
                        'img' => 'assets/img/ciks/NC_2.jpg',
                        'title' =>
                            'Revisiting Human Values and Professional Ethics from indian Knowledge System',
                        'summary' =>
                            'A discussion session on ‘Revisiting Human Values and Professional Ethics from Indian Knowledge System’ was held on 24th of February, 2025 to decide the main objectives and expected outcomes of the event....',
                        'details' => '<p class="text-justify">A discussion session on ‘Revisiting Human Values and Professional Ethics from Indian Knowledge System’ was held on 24th of February, 2025 to decide the main objectives and expected outcomes of the event. The discussion was presided over by Honorable Vice Chancellor, Prof. V.K. Jain. Following educationists across the nation shared their valuable thoughts through the online event.</p>
        <ul class="m-ol-list ps-5 text-justify mb-0"><li>Prof. V.K. Jain, Vice Chancellor, TMU</li><li>Dr. P.N. Mishra, Founder Director, Center for E-Business and Founder Director, Center of Excellence in E-Management.</li><li>Dr. Renu Jain, Former Vice Chancellor, Devi Ahilya Vishvavidyalaya, Indore</li><li>Dr. Nanditesh Nilay, an author, speaker, columnist</li><li>Dr. H.D. Charan, Chairman National Committee on Human Values & Ethics, Chairman BOG, SOPI</li><li>Dr. Anekant Jain, Professor Jain Philosophy SLBSNSU, New Delhi</li><li>Dr. V.K. Singh, Dean Faculty of Management Studies, Gurukul Kangri, Haridwar</li><li>Prof. Anupam Jain, Professor Chair, CIKS, TMU</li></ul>
        <p class="mt-1 text-justify"><strong>Key Points:</strong> Experts stressed youth value education for nation-building, urging productive use of time and resources.</p>',
                        'reverse' => false,
                    ],
                    [
                        'id' => 'modalNC1',
                        'img' => 'assets/img/ciks/NC_1.jpg',
                        'title' =>
                            '"Enhancing Indian Knowledge System Effectiveness in HEIs through Curriculum',
                        'summary' =>
                            'Ist National Conclave was organized by CIKS on ‘Enhancing Indian Knowledge System Effectiveness in HEIs through Curriculum’ on 21st February, 2025. The conclave was presided by Honorable Vice...',
                        'details' => '<p class="text-justify">Ist National Conclave was organized by CIKS on ‘Enhancing Indian Knowledge System Effectiveness in HEIs through Curriculum’ on 21st February, 2025. The conclave was presided by Honorable Vice Chancellor, Prof. V.K. Jain. Following experts across the nation shared their insights on the theme.</p>
        <ul class="m-ol-list ps-5 text-justify mb-0"><li>Prof. K.K. Aggarwal, President, SAU, New Delhi</li><li>Prof. Sandeep Sancheti, Former Chairperson, AIU</li><li>Prof. R.K. Mittal, Founder Vice Chancellor, TMU, UGC Member & Professor GGIPU</li><li>Prof. R.L. Raina, Vice Chancellor, Jaipur National University</li><li>Prof. Ajay Kumar Jain, Director, MDI, Murshidabad</li><li>Prof. Anupam Jain, Professor Chair, CIKS, TMU</li><li>Experts emphasized on all-inclusive education and community engagement for proper expansion of Indian Knowledge system.</li></ul>
        <p class="mt-1 text-justify"><strong>Key Points:</strong> Experts called for inclusive education and community engagement to strengthen the Indian Knowledge System in HEIs.</p>',
                        'reverse' => true,
                    ],
                    [
                        'id' => 'modalManthan',
                        'img' => 'assets/img/ciks/manthan.jpg',
                        'title' => 'Brainstorming "Manthan" on new dimensions of IKS study in TMU',
                        'summary' =>
                            'A discussion session on ‘Enhancing Efficacy of IKS Through Curriculum’ was held on 24th of January, 2025. The discussion was presided by Honorable Vice Chancellor, Prof. V.K. Jain....',
                        'details' => '<p class="text-justify">A discussion session on ‘Enhancing Efficacy of IKS Through Curriculum’ was held on 24th of January, 2025. The discussion was presided by Honorable Vice Chancellor, Prof. V.K. Jain. An emphasis was given on Project based learning. It was also suggested to develop awareness through the learning of regional culture.</p>
        <p class="mt-1 text-justify"><strong>Key Points:</strong> Discussion stressed project-based learning and regional culture awareness to enhance Indian Knowledge System efficacy.</p>',
                        'reverse' => false,
                    ],
                    [
                        'id' => 'modalGyanGanga',
                        'img' => 'assets/img/ciks/gyan-ganga.jpg',
                        'title' => 'Expert Talk: Gyan Ganga – Achieving Excellence Through Self-Exploration',
                        'summary' =>
                            'On November 28th, 2024, Professor Navneet Arora from IIT Roorkee delivered a session on "Achieving Excellence Through Self-Exploration"....',
                        'details' => '<p class="text-justify">On November 28th, 2024, Professor Navneet Arora from IIT Roorkee delivered a session on "Achieving Excellence Through Self-Exploration" in the University Auditorium.</p>
        <p class="mt-1 text-justify"><strong>Key Points:</strong> The session inspired students to explore their potential and strive for excellence.</p>',
                        'reverse' => true,
                    ],
                    [
                        'id' => 'modalIKSOrientation',
                        'img' => 'assets/img/ciks/orientation.jpg',
                        'title' => 'Orientation Session on the Indian Knowledge System, Led by Dr. Alka Agarwal',
                        'summary' =>
                            'This orientation program introduced new students to the Indian Knowledge System. Dr. Alka Agarwal, Coordinator CIKS, delivered insightful sessions...',
                        'details' => '<p class="text-justify">This orientation program introduced new students to the Indian Knowledge System. Dr. Alka Agarwal, Coordinator CIKS, delivered insightful sessions on August 23rd and 24th, 2024.</p>
        <p class="mt-1 text-justify"><strong>Key Points:</strong> Students learned about the relevance of IKS in daily life and its contributions to society.</p>',
                        'reverse' => false,
                    ],
                    [
                        'id' => 'modalSanskriti',
                        'img' => 'assets/img/ciks/sanskriti.jpg',
                        'title' => 'FDP Sanskriti: Embracing Excellence Through Cultural Connection',
                        'summary' =>
                            'Held on July 13th, 2024, in the Conference Room of CTLD, TMU. Professor Anupam Jain emphasized the importance of staying connected...',
                        'details' => '<p class="text-justify">Held on July 13th, 2024, in the Conference Room of CTLD, TMU. Professor Anupam Jain emphasized the importance of staying connected with "Sanskriti" and the role of value-based education.</p>
        <p class="mt-1 text-justify"><strong>Key Points:</strong> Participants gained insights into respecting and preserving culture as responsible citizens.</p>',
                        'reverse' => true,
                    ],
                    [
                        'id' => 'modalAmritVachnam',
                        'img' => 'assets/img/ciks/amrit-vachnam.jpg',
                        'title' => 'National Seminar ‘Amrit Vachnam’ – Emphasizing Purity in Thoughts and Actions',
                        'summary' =>
                            'A national seminar, ‘Amrit Vachnam’ was held on May 1st, 2024, in the University Auditorium. The event was graced by distinguished speakers, including Prof. Mahavir Agarwal and...',
                        'details' => '<p class="text-justify">A national seminar, ‘Amrit Vachnam’ was held on May 1st, 2024, in the University Auditorium. The event was graced by distinguished speakers, including Prof. Mahavir Agarwal and Prof. P.N. Mishra, who emphasized the importance of purity in thoughts and actions.</p>
        <p class="mt-1 text-justify"><strong>Key Points:</strong> Honorable Vice Chancellor, TMU, Prof. V.K. Jain highlighted the significance of purity in life and education.</p>',
                        'reverse' => false,
                    ],
                    [
                        'id' => 'modalAhimsa',
                        'img' => 'assets/img/ciks/ahimsa.jpg',
                        'title' => 'Expert Talk: Ahimsa & its Relevance in Day-to-Day Life',
                        'summary' =>
                            'The event was organized by CIKS on April 12th, 2024, in the University Auditorium. The keynote speaker, Dr. Dharam Chand Jain, emphasized nonviolence...',
                        'details' => '<p class="text-justify">The event was organized by CIKS on April 12th, 2024, in the University Auditorium. The keynote speaker, Dr. Dharam Chand Jain, emphasized nonviolence and explained various forms of violence, particularly verbal violence.</p>
        <p class="mt-1 text-justify"><strong>Key Points:</strong> Dr. Jain highlighted the significance of nonviolence in leading a peaceful life and stressed avoiding violence through words.</p>',
                        'reverse' => true,
                    ],
                    [
                        'id' => 'modalFDPScientific',
                        'img' => 'assets/img/ciks/FDP.jpg',
                        'title' => 'FDP: Exploring Scientific Knowledge in the Indian Knowledge System',
                        'summary' =>
                            'The event was organized by CIKS on October 17th, 2023, in the University Committee Room. Professor Chair Dr. Anupam Jain was the Keynote speaker of the day...',
                        'details' => '<p class="text-justify">The event was organized by CIKS on October 17th, 2023, in the University Committee Room. Professor Chair Dr. Anupam Jain was the Keynote speaker of the day, who explained the role of Indian Knowledge System in the modern scientific world.</p>
        <p class="mt-1 text-justify"><strong>Key Points:</strong> Dr. Anupam Jain provided invaluable insights and encouraged participants to induce inclination towards Bhartiya Gyan Parampara.</p>',
                        'reverse' => false,
                    ],
                ];
            @endphp

            <div class="row g-4 align-items-stretch">
                @foreach ($events as $event)
                    <div class="col-sm-12 col-md-6 col-lg-4 d-flex">
                        <div class="club-card-t2 h-100">
                            <img src="{{ asset($event['img']) }}" alt="{{ $event['title'] }}" class="club-img-t2">
                            <div class="club-text-t2">
                                <div class="blog-title">{{ Str::limit($event['title'], 50) }}</div>
                                <div class="blog-description text-justify">
                                    {!! Str::limit(strip_tags(html_entity_decode($event['summary'])), 115) !!}
                                </div>
                                <div class="read-more-new" data-bs-toggle="modal" data-bs-target="#{{ $event['id'] }}">
                                    Read More
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="{{ $event['id'] }}" tabindex="-1"
                        aria-labelledby="{{ $event['id'] }}Label" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title fw-bold" id="{{ $event['id'] }}Label">{{ $event['title'] }}</h5>
                                    <div class="btn-close" data-bs-dismiss="modal" aria-label="Close"></div>
                                </div>
                                <div class="modal-body">
                                    {!! $event['details'] !!}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>


        </div>
    </div>
    </div>

    <!-- Bootstrap JS (for modal functionality) -->
    <!-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            const modals = document.querySelectorAll('.modal');

            modals.forEach(modal => {
                modal.addEventListener('hidden.bs.modal', function() {
                    // Use a small delay to ensure Bootstrap finishes its internal cleanup
                    setTimeout(() => {
                        // Check if any modals are still open
                        if (!document.querySelector('.modal.show')) {
                            document.body.classList.remove('modal-open');
                            document.body.style.overflow = 'auto'; // Allow scrolling again
                            document.body.style.paddingRight = '';
                        }
                    }, 100);
                });
            });
        });
    </script> -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const modals = document.querySelectorAll('.modal');

            modals.forEach(modal => {
                modal.addEventListener('hidden.bs.modal', function() {
                    // Remove modal-open class and reset styles
                    document.body.classList.remove('modal-open');
                    document.body.style.overflow = 'auto';
                    document.body.style.paddingRight = '';

                    // Remove any lingering backdrops
                    const backdrops = document.querySelectorAll('.modal-backdrop');
                    backdrops.forEach(b => b.remove());
                });
            });
        });
    </script>
    <script>
        // Force cleanup 500ms after modal is closed (failsafe)
        document.querySelectorAll('[data-bs-dismiss="modal"], .btn-close').forEach(btn => {
            btn.addEventListener('click', () => {
                setTimeout(() => {
                    document.body.classList.remove('modal-open');
                    document.body.style.overflow = 'auto';
                    document.body.style.paddingRight = '';

                    document.querySelectorAll('.modal-backdrop').forEach(b => b.remove());
                }, 500); // Wait for modal transition to complete
            });
        });
    </script>
@endsection