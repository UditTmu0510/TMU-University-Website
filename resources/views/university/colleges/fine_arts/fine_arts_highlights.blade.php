@extends('layouts.university.colleges.fine_arts_with_sidebar')
@section('content')

<link rel="stylesheet" href="{{asset('/assets/css/tmu-timeline.css')}}">

<div class="main-content">
    <div class="container">
        <!-- Experience Start -->
        <div class="experience" id="experience">
            <div class="container">
                <header class="section-header text-center wow zoomIn">
                    <h1 class="tmu-text-primary tmu-page-heading"><span>College </span><span> Highlights</span></h1>
                </header>
                <div class="timeline ">
                    <div class="timeline-item left wow slideInLeft">
                        <div class="timeline-text">
                            <div class="timeline-date">2011</div>
                            <p>Established in 2011, the College offers programmes in Fine Arts, building on historical perspectives, and nurturing creativity in students.</p>
                        </div>
                    </div>
                    <div class="timeline-item right wow slideInRight">
                        <div class="timeline-text">
                            <div class="timeline-date">Studio</div>
                            <p>The College of Fine Arts features a dedicated photography studio, providing students with the facilities to practice and refine their photography skills.</p>
                        </div>
                    </div>
                    <div class="timeline-item left wow slideInLeft">
                        <div class="timeline-text">
                            <div class="timeline-date">Labs</div>
                            <p>The College of Fine Arts offers three specialised labs: an Art & Graphics Lab, a Clay Modeling Lab, and a Print Making Lab. These labs provide students with the resources and environment to explore various artistic techniques and media.</p>
                        </div>
                    </div>
                    <div class="timeline-item right wow slideInRight">
                        <div class="timeline-text">
                            <div class="timeline-date">Computer Laboratories</div>
                            <p>The College of Fine Arts has 12 computer laboratories, each equipped with 40 computers and peripherals, providing students with the technology and tools necessary for digital art and design projects.</p>
                        </div>
                    </div>
                    <div class="timeline-item left wow slideInLeft">
                        <div class="timeline-text">
                            <div class="timeline-date">Books</div>
                            <p> The College of Fine Arts has a collection of 251 books, offering valuable resources for students' artistic and academic pursuits.</p>
                        </div>
                    </div>
                    <div class="timeline-item right wow slideInRight">
                        <div class="timeline-text">
                            <div class="timeline-date">E-Journals & E-Books</div>
                            <p>The College of Fine Arts provides access to a wealth of digital resources through the EBSCO and DELNET databases.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Job Experience End -->
    </div>
</div>
</div>

@endsection