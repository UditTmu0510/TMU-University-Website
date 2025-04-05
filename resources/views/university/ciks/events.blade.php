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
    }

    .club-container {
        background: #ececec;
    }

    .club-card-t2 {
        display: flex;
        justify-content: space-between;
        gap: 15px;
    }

    .club-text-t2 {
        flex-grow: 1;
    }

    /* Styling for bold h4 */
    .club-text-t2 h4 {
        font-weight: bold;
        font-size: 1.5rem;
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
    <section class="club-introduction pb-2">
        <h1 class="mb-2 tmu-text-primary tmu-page-heading"><span>CIKS</span><span class="d-block d-sm-inline">
                Events</span></h1>
    </section>

    <div class="container club-container py-3">

        <div class="row mb-4">
            <div class="col-md-12">
                <div class="club-card-t2 flex-row-reverse">
                    <img src="{{ asset('assets/img/ciks/events/NC-2.jpg') }}" alt="1st National Conclave on Strengthening Indian Knowledge System in HEIs Through Curriculum"
                        class="club-img-t2">
                    <div class="club-text-t2">
                        <h4>1st National Conclave on Strengthening Indian Knowledge System in HEIs Through Curriculum</h4>
                        <p class="text-justify">Ist National Conclave was organized by CIKS on ‘Enhancing Indian Knowledge System Effectiveness in HEIs through Curriculum’ on 21st February, 2025. The conclave was presided by Honorable Vice Chancellor, Prof. V.K. Jain. Following experts across the nation shared their insights on the theme.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Event 1 -->
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="club-card-t2">
                    <img src="{{ asset('assets/img/ciks/events/NC-1.jpg') }}" alt="Discussion on Human Values & Ethics from Indian Knowledge System for Youth Empowerment"
                        class="club-img-t2">
                    <div class="club-text-t2">
                        <h4>Discussion on Human Values & Ethics from Indian Knowledge System for Youth Empowerment</h4>
                        <p class="text-justify">The event was organized by CIKS on October 17th, 2023, in the University Committee Room. Professor Chair Dr. Anupam Jain was the Keynote speaker of the day, who explained the role of Indian Knowledge System in the modern scientific world.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Event 2 -->
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="club-card-t2 flex-row-reverse">
                    <img src="{{ asset('assets/img/ciks/events/manthan.jpg') }}" alt="Brainstorming on new dimensions of IKS study in TMU"
                        class="club-img-t2">
                    <div class="club-text-t2">
                        <h4>Brainstorming on new dimensions of IKS study in TMU</h4>
                        <p class="text-justify">A discussion session on ‘Enhancing Efficacy of IKS Through Curriculum’ was held on 24th of January, 2025. The discussion was presided by Honorable Vice Chancellor, Prof. V.K. Jain. An emphasis was given on Project based learning. It was also suggested to develop awareness through the learning of regional culture.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-12">
                <div class="club-card-t2">
                    <img src="{{ asset('assets/img/ciks/1.jpg') }}" alt="FDP: Scientific Knowledge in IKS"
                        class="club-img-t2">
                    <div class="club-text-t2">
                        <h4>FDP: Scientific Knowledge in IKS</h4>
                        <p class="text-justify">The event was organized by CIKS on October 17th, 2023, in the University Committee Room. Professor Chair Dr. Anupam Jain was the Keynote speaker of the day, who explained the role of Indian Knowledge System in the modern scientific world.</p>
                        <div class="club-details">
                            <ul>
                                <li><strong>Key Moments:</strong> Dr. Anupam Jain provided invaluable insights and encouraged participants to induce inclination towards Bhartiya Gyan Parampara.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Event 2 -->
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="club-card-t2 flex-row-reverse">
                    <img src="{{ asset('assets/img/ciks/2.jpg') }}" alt="Expert Talk: Ahimsa & its Relevance in Day-to-Day Life"
                        class="club-img-t2">
                    <div class="club-text-t2">
                        <h4>Expert Talk: Ahimsa & its Relevance in Day-to-Day Life</h4>
                        <p class="text-justify">The event was organized by CIKS on April 12th, 2024, in the University Auditorium. The keynote speaker, Dr. Dharam Chand Jain, emphasized nonviolence and explained various forms of violence, particularly verbal violence.</p>
                        <div class="club-details">
                            <ul>
                                <li><strong>Key Moments:</strong> Dr. Jain highlighted the significance of nonviolence in leading a peaceful life and stressed avoiding violence through words.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Event 3 -->
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="club-card-t2">
                    <img src="{{ asset('assets/img/ciks/3.jpg') }}" alt="National Seminar: Amrit Vachnam"
                        class="club-img-t2">
                    <div class="club-text-t2">
                        <h4>National Seminar: Amrit Vachnam</h4>
                        <p class="text-justify">A national seminar, ‘Amrit Vachnam’ was held on May 1st, 2024, in the University Auditorium. The event was graced by distinguished speakers, including Prof. Mahavir Agarwal and Prof. P.N. Mishra, who emphasized the importance of purity in thoughts and actions.</p>
                        <div class="club-details">
                            <ul>
                                <li><strong>Key Moments:</strong> Honorable Vice Chancellor, TMU, Prof. V.K. Jain highlighted the significance of purity in life and education.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Event 4 -->
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="club-card-t2 flex-row-reverse">
                    <img src="{{ asset('assets/img/ciks/4.jpg') }}" alt="FDP: Sanskriti" class="club-img-t2">
                    <div class="club-text-t2">
                        <h4>FDP: Sanskriti</h4>
                        <p class="text-justify">Held on July 13th, 2024, in the Conference Room of CTLD, TMU. Professor Anupam Jain emphasized the importance of staying connected with 'Sanskriti' and the role of value-based education.</p>
                        <div class="club-details">
                            <ul>
                                <li><strong>Key Moments:</strong> Participants gained insights into respecting and preserving culture as responsible citizens.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Event 5 -->
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="club-card-t2">
                    <img src="{{ asset('assets/img/ciks/5.jpg') }}" alt="Orientation Program: Why IKS?" class="club-img-t2">
                    <div class="club-text-t2">
                        <h4>Orientation Program: Why IKS?</h4>
                        <p class="text-justify">This orientation program introduced new students to the Indian Knowledge System. Dr. Alka Agarwal, Coordinator CIKS, delivered insightful sessions on August 23rd and 24th, 2024.</p>
                        <div class="club-details">
                            <ul>
                                <li><strong>Key Moments:</strong> Students learned about the relevance of IKS in daily life and its contributions to society.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Event 6 -->
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="club-card-t2 flex-row-reverse">
                    <img src="{{ asset('assets/img/ciks/6.jpg') }}" alt="Expert Talk: Gyan Ganga" class="club-img-t2">
                    <div class="club-text-t2">
                        <h4>Expert Talk: Gyan Ganga</h4>
                        <p class="text-justify">On November 28th, 2024, Professor Navneet Arora from IIT Roorkee delivered a session on "Achieving Excellence Through Self-Exploration" in the University Auditorium.</p>
                        <div class="club-details">
                            <ul>
                                <li><strong>Key Moments:</strong> The session inspired students to explore their potential and strive for excellence.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>

@endsection