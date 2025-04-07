@extends('layouts.university.departments.ciks_with_sidebar')
@section('content')

<style>
    body {
        font-family: 'Poppins', sans-serif;
    }

    /* .tabs .btn {
        border-radius: 1rem;
        padding: 0.5rem 0.8rem;
        font-weight: 400;
        border-color: #001055;
        font-size: 1rem;
    }

    .tabs .btn:hover {
        background-color: #001055;
        color: #fff;

    }

    .tabs .btn.active {
        background-color: #001055;
        color: #fff;
    } */

    .event-card {
        border: 1px solid #e0e0e0;
        padding: 1rem;
        margin-bottom: 1.5rem;
        border-radius: 1rem;

    }

    .event-card .event-img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .event-type {
        background-color: #f0f0f0;
        font-size: 0.75rem;
        padding: 0.2rem 0.8rem;
        display: inline-block;
        margin-bottom: 0.5rem;
    }

    @media (min-width: 768px) {
        .event-card-horizontal {
            display: flex;
            align-items: stretch;
        }

        .event-card-horizontal .event-img {
            width: 250px;
            height: auto;
            border-radius: 0.88rem;
        }

        .event-card-horizontal .event-body {
            padding: 1rem;
            font-family: 'poppins!important';
        }
    }

    @media (max-width: 991.98px) {
        .event-card-horizontal {
            flex-direction: column !important;
            /* Stack image above text */
            align-items: stretch;
        }

        .event-card-horizontal .event-img {
            width: 100% !important;
            height: auto;
            object-fit: cover;
            border-radius: 0.5rem 0.5rem 0 0;
        }

        .event-card-horizontal .event-body {
            padding: 1rem;
        }
    }
</style>

<div class="main-content">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="tmu-page-heading tmu-text-primary mb-2 mt-2"><span>Upcoming</span><span> Events</span></h2>
        </div>


        <!-- Tabs -->
        <!-- <div class="tabs d-flex justify-content-center gap-2 mb-4">
            <button class="btn tab-btn-sm btn-outline active" data-tab="all">All Events</button>
            <button class="btn tab-btn-sm btn-outline" data-tab="nearest">Recent</button>
            <button class="btn tab-btn-sm btn-outline" data-tab="latest">Upcoming</button>
        </div> -->

        <!-- Tab Content -->
        <div id="tab-all" class="tab-content-item">
            <div class="row">
                <!-- Event Card 1 -->
                <div class="col-lg-12 col-md-6">
                    <div class="event-card event-card-horizontal">
                        <img src="{{ asset('assets/img/ciks/upcoming/NC_3.jpg')}}" class="event-img" alt="Event Image">
                        <div class="event-body flex-grow-1">
                            <span class="event-type">Workshop/Seminar</span>
                            <h5 class="fw-bold text-justify mb-1"> National Conclave 3rd on "Managing Self and Organizations Through Indian Knowledge System".</h5>
                            <p class="text-muted">Explore self-leadership and organizational growth through timeless wisdom of the Indian Knowledge System.</p>
                            <p class="mb-1"><strong>Mode:</strong> Online</p>
                            <p><strong>Date/Time</strong> Mon, 28 Apr 2025 at 03:00PM–05:00PM</p>
                        </div>
                    </div>
                </div>
                <!-- Event Card 2 -->
                <div class="col-lg-12 col-md-6">
                    <div class="event-card event-card-horizontal">
                        <img src="{{ asset('assets/img/ciks/upcoming/NC_2.jpg')}}" class="event-img" alt="Event Image">
                        <div class="event-body flex-grow-1">
                            <span class="event-type">Workshop/Seminar</span>
                            <h5 class="fw-bold text-justify mb-1"> National Conclave 2nd on "Resolving Huaman Values and Professional Ethics From Indian Knowledge System".</h5>
                            <p class="text-muted">Exploring Human Values & Ethics through the Lens of the Indian Knowledge System in a Virtual Conclave.</p>
                            <p class="mb-1"><strong>Mode:</strong> Online</p>
                            <p><strong>Date/Time</strong> Thr, 20 Mar 2025 at 03:00PM–05:00PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div id="tab-nearest" class="tab-content-item d-none"> -->
        <div class="row">
            <div class="col-lg-12 col-md-6">
                <div class="event-card event-card-horizontal">
                    <img src="{{ asset('assets/img/ciks/upcoming/NC_1.jpg')}}" class="event-img" alt="Event Image">
                    <div class="event-body flex-grow-1">
                        <span class="event-type">Workshop/Seminar</span>
                        <h5 class="fw-bold text-justify mb-1"> National Conclave 1st on "Enhancing Indian Knowledge System Effectiveness in HEIs through Curriculum".</h5>
                        <p class="text-muted">Strengthening IKS in Higher Education by Integrating Its Core Values into Curriculum Frameworks.</p>
                        <p class="mb-1"><strong>Mode:</strong> Online</p>
                        <p><strong>Date/Time</strong> Fri, 21 Feb 2025 at 03:00PM–05:00PM</p>
                    </div>
                </div>
            </div>
            <!-- </div> -->

            <!-- <div id="tab-latest" class="tab-content-item d-none"> -->
            <div class="col-lg-12 col-md-6">
                <div class="event-card event-card-horizontal">
                    <img src="{{ asset('assets/img/ciks/upcoming/manthan.jpg')}}" class="event-img" alt="Event Image">
                    <div class="event-body flex-grow-1">
                        <span class="event-type">Workshop/Seminar</span>
                        <h5 class="fw-bold text-justify mb-1"> Brainstorming on new dimensions of IKS study in TMU </h5>
                        <p class="text-muted">Exploring Innovative Perspectives to Expand the Scope of Indian Knowledge System Studies at TMU.</p>
                        <p class="mb-1"><strong>Mode:</strong> Online</p>
                        <p><strong>Date/Time</strong> Mon, 20 Jan 2025 at 03:00PM–05:00PM</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- </div> -->
    </div>
</div>

</div>



<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom Tab Script -->
<script>
    const tabButtons = document.querySelectorAll('.tabs .btn');
    const tabContents = document.querySelectorAll('.tab-content-item');

    tabButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            const tabId = btn.getAttribute('data-tab');

            tabButtons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            tabContents.forEach(content => {
                if (content.id === `tab-${tabId}`) {
                    content.classList.remove('d-none');
                } else {
                    content.classList.add('d-none');
                }
            });
        });
    });
</script>
@endsection