@extends('layouts.university.departments.ciks_with_sidebar')
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
        width: 300px;
        height: 300px;
        object-fit: cover;
        border-radius: 10px;
    }

    .club-text-t2 {
        padding-left: 20px;
        padding-right: 20px;
        flex-grow: 1;
    }

    .club-container {
        background: #ececec;
    }

    .club-card-t2 {
        justify-content: space-between;
        gap: 15px;
    }

    .club-text-t2 h4 {
        font-weight: bold;
        font-size: 1.5rem;
    }
    .read-more-new{
        color:#ff7900;
    }

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
        'img' => 'assets/img/ciks/upcoming/NC_2.jpg',
        'title' => 'Discussion on Human Values & Ethics from Indian Knowledge System for Youth Empowerment',
        'summary' => 'A discussion session on ‘Revisiting Human Values and Professional Ethics from Indian Knowledge System’ was held on 24th of February, 2025 to decide the main objectives and expected outcomes of the event....',
        'details' => '<p class="text-justify">A discussion session on ‘Revisiting Human Values and Professional Ethics from Indian Knowledge System’ was held on 24th of February, 2025 to decide the main objectives and expected outcomes of the event. The discussion was presided over by Honorable Vice Chancellor, Prof. V.K. Jain. Following educationists across the nation shared their valuable thoughts through the online event.</p>
        <ul class="m-ol-list ps-5 text-justify mb-0"><li>Prof. V.K. Jain, Vice Chancellor, TMU</li><li>Dr. P.N. Mishra, Founder Director, Center for E-Business and Founder Director, Center of Excellence in E-Management.</li><li>Dr. Renu Jain, Former Vice Chancellor, Devi Ahilya Vishvavidyalaya, Indore</li><li>Dr. Nanditesh Nilay, an author, speaker, columnist</li><li>Dr. H.D. Charan, Chairman National Committee on Human Values & Ethics, Chairman BOG, SOPI</li><li>Dr. Anekant Jain, Professor Jain Philosophy SLBSNSU, New Delhi</li><li>Dr. V.K. Singh, Dean Faculty of Management Studies, Gurukul Kangri, Haridwar</li><li>Prof. Anupam Jain, Professor Chair, CIKS, TMU</li></ul>
        <p class="mt-1 text-justify"><strong>Key Points:</strong> Experts stressed youth value education for nation-building, urging productive use of time and resources.</p>',
        'reverse' => false
        ],
        [
        'id' => 'modalNC1',
        'img' => 'assets/img/ciks/upcoming/NC_1.jpg',
        'title' => '1st National Conclave on Strengthening Indian Knowledge System in HEIs Through Curriculum',
        'summary' => 'Ist National Conclave was organized by CIKS on ‘Enhancing Indian Knowledge System Effectiveness in HEIs through Curriculum’ on 21st February, 2025. The conclave was presided by Honorable Vice...',
        'details' => '<p class="text-justify">Ist National Conclave was organized by CIKS on ‘Enhancing Indian Knowledge System Effectiveness in HEIs through Curriculum’ on 21st February, 2025. The conclave was presided by Honorable Vice Chancellor, Prof. V.K. Jain. Following experts across the nation shared their insights on the theme.</p>
        <ul class="m-ol-list ps-5 text-justify mb-0"><li>Prof. K.K. Aggarwal, President, SAU, New Delhi</li><li>Prof. Sandeep Sancheti, Former Chairperson, AIU</li><li>Prof. R.K. Mittal, Founder Vice Chancellor, TMU, UGC Member & Professor GGIPU</li><li>Prof. R.L. Raina, Vice Chancellor, Jaipur National University</li><li>Prof. Ajay Kumar Jain, Director, MDI, Murshidabad</li><li>Prof. Anupam Jain, Professor Chair, CIKS, TMU</li><li>Experts emphasized on all-inclusive education and community engagement for proper expansion of Indian Knowledge system.</li></ul>
        <p class="mt-1 text-justify"><strong>Key Points:</strong> Experts called for inclusive education and community engagement to strengthen the Indian Knowledge System in HEIs.</p>',
        'reverse' => true
        ],
        [
        'id' => 'modalManthan',
        'img' => 'assets/img/ciks/events/manthan.jpg',
        'title' => 'Brainstorming "Manthan" on new dimensions of IKS study in TMU',
        'summary' => 'A discussion session on ‘Enhancing Efficacy of IKS Through Curriculum’ was held on 24th of January, 2025. The discussion was presided by Honorable Vice Chancellor, Prof. V.K. Jain....',
        'details' => '<p class="text-justify">A discussion session on ‘Enhancing Efficacy of IKS Through Curriculum’ was held on 24th of January, 2025. The discussion was presided by Honorable Vice Chancellor, Prof. V.K. Jain. An emphasis was given on Project based learning. It was also suggested to develop awareness through the learning of regional culture.</p>
        <p class="mt-1 text-justify"><strong>Key Points:</strong> Discussion stressed project-based learning and regional culture awareness to enhance Indian Knowledge System efficacy.</p>',
        'reverse' => false
        ],
        [
        'id' => 'modalGyanGanga',
        'img' => 'assets/img/ciks/6.jpg',
        'title' => 'Expert Talk: Gyan Ganga',
        'summary' => 'On November 28th, 2024, Professor Navneet Arora from IIT Roorkee delivered a session on "Achieving Excellence Through Self-Exploration"....',
        'details' => '<p class="text-justify">On November 28th, 2024, Professor Navneet Arora from IIT Roorkee delivered a session on "Achieving Excellence Through Self-Exploration" in the University Auditorium.</p>
        <p class="mt-1 text-justify"><strong>Key Points:</strong> The session inspired students to explore their potential and strive for excellence.</p>',
        'reverse' => true
        ],
        [
        'id' => 'modalIKSOrientation',
        'img' => 'assets/img/ciks/5.jpg',
        'title' => 'Orientation Program: Why IKS?',
        'summary' => 'This orientation program introduced new students to the Indian Knowledge System. Dr. Alka Agarwal, Coordinator CIKS, delivered insightful sessions...',
        'details' => '<p class="text-justify">This orientation program introduced new students to the Indian Knowledge System. Dr. Alka Agarwal, Coordinator CIKS, delivered insightful sessions on August 23rd and 24th, 2024.</p>
        <p class="mt-1 text-justify"><strong>Key Points:</strong> Students learned about the relevance of IKS in daily life and its contributions to society.</p>',
        'reverse' => false
        ],
        [
        'id' => 'modalSanskriti',
        'img' => 'assets/img/ciks/4.jpg',
        'title' => 'FDP: Sanskriti',
        'summary' => 'Held on July 13th, 2024, in the Conference Room of CTLD, TMU. Professor Anupam Jain emphasized the importance of staying connected...',
        'details' => '<p class="text-justify">Held on July 13th, 2024, in the Conference Room of CTLD, TMU. Professor Anupam Jain emphasized the importance of staying connected with "Sanskriti" and the role of value-based education.</p>
        <p class="mt-1 text-justify"><strong>Key Points:</strong> Participants gained insights into respecting and preserving culture as responsible citizens.</p>',
        'reverse' => true
        ],
        [
        'id' => 'modalAmritVachnam',
        'img' => 'assets/img/ciks/3.jpg',
        'title' => 'National Seminar: Amrit Vachnam',
        'summary' => 'A national seminar, ‘Amrit Vachnam’ was held on May 1st, 2024, in the University Auditorium. The event was graced by distinguished speakers, including Prof. Mahavir Agarwal and...',
        'details' => '<p class="text-justify">A national seminar, ‘Amrit Vachnam’ was held on May 1st, 2024, in the University Auditorium. The event was graced by distinguished speakers, including Prof. Mahavir Agarwal and Prof. P.N. Mishra, who emphasized the importance of purity in thoughts and actions.</p>
        <p class="mt-1 text-justify"><strong>Key Points:</strong> Honorable Vice Chancellor, TMU, Prof. V.K. Jain highlighted the significance of purity in life and education.</p>',
        'reverse' => false
        ],
        [
        'id' => 'modalAhimsa',
        'img' => 'assets/img/ciks/2.jpg',
        'title' => 'Expert Talk: Ahimsa & its Relevance in Day-to-Day Life',
        'summary' => 'The event was organized by CIKS on April 12th, 2024, in the University Auditorium. The keynote speaker, Dr. Dharam Chand Jain, emphasized nonviolence...',
        'details' => '<p class="text-justify">The event was organized by CIKS on April 12th, 2024, in the University Auditorium. The keynote speaker, Dr. Dharam Chand Jain, emphasized nonviolence and explained various forms of violence, particularly verbal violence.</p>
        <p class="mt-1 text-justify"><strong>Key Points:</strong> Dr. Jain highlighted the significance of nonviolence in leading a peaceful life and stressed avoiding violence through words.</p>',
        'reverse' => true
        ],
        [
        'id' => 'modalFDPScientific',
        'img' => 'assets/img/ciks/1.jpg',
        'title' => 'FDP: Scientific Knowledge in IKS',
        'summary' => 'The event was organized by CIKS on October 17th, 2023, in the University Committee Room. Professor Chair Dr. Anupam Jain was the Keynote speaker of the day...',
        'details' => '<p class="text-justify">The event was organized by CIKS on October 17th, 2023, in the University Committee Room. Professor Chair Dr. Anupam Jain was the Keynote speaker of the day, who explained the role of Indian Knowledge System in the modern scientific world.</p>
        <p class="mt-1 text-justify"><strong>Key Points:</strong> Dr. Anupam Jain provided invaluable insights and encouraged participants to induce inclination towards Bhartiya Gyan Parampara.</p>',
        'reverse' => false
        ]
        ];
        @endphp

        @foreach($events as $event)
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="club-card-t2 {{ $event['reverse'] ? 'flex-row-reverse' : '' }}">
                    <img src="{{ asset($event['img']) }}" alt="{{ $event['title'] }}" class="club-img-t2">
                    <div class="club-text-t2">
                        <h4>{{ $event['title'] }}</h4>
                        <p class="text-justify">{!! html_entity_decode($event['summary']) !!}
                        </p>
                        <div class="mt-1 text-justify read-more-new" data-bs-toggle="modal" data-bs-target="#{{ $event['id'] }}">
                            Read More
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="{{ $event['id'] }}" tabindex="-1" aria-labelledby="{{ $event['id'] }}Label" aria-hidden="true">
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

<!-- Bootstrap JS (for modal functionality) -->
<!-- <script>
document.addEventListener('DOMContentLoaded', function () {
    const modals = document.querySelectorAll('.modal');

    modals.forEach(modal => {
        modal.addEventListener('hidden.bs.modal', function () {
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
    document.addEventListener('DOMContentLoaded', function () {
        const modals = document.querySelectorAll('.modal');

        modals.forEach(modal => {
            modal.addEventListener('hidden.bs.modal', function () {
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