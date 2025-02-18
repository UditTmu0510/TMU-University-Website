@extends('layouts.university.colleges.agriculture_with_sidebar')
@section('content')

<link rel="stylesheet" href="{{asset('/assets/css/tmu-timeline.css')}}">


<div class="main-content">
    <div class="container">
        <!-- Experience Start -->
        <div class="experience" id="experience">
            <div class="container">
                <header class="section-header text-center wow zoomIn">
                    <h1 class="tmu-text-primary tmu-page-heading mb-sm-5 mt-md-4"><span>College </span><span>
                            Highlights</span></h1>
                </header>
                <div class="timeline ">
                    <div class="timeline-item left wow slideInLeft">
                        <div class="timeline-text">
                            <div class="timeline-date">2014</div>
                            <p> Inaugurated in 2014, the College focuses on core areas of agriculture and
                                environmental studies, aligning with the recommendations of the Vth Deans Committee
                                of ICAR.</p>
                        </div>
                    </div>

                    <div class="timeline-item right wow slideInRight">
                        <div class="timeline-text">
                            <div class="timeline-date">Faculty Strength</div>
                            <p> The TMU’s College of Agriculture Sciences boasts a robust faculty strength of 45
                                (Forty and Five) highly
                                qualified and experienced members.</p>
                        </div>
                    </div>
                    <div class="timeline-item left wow slideInRight">
                        <div class="timeline-text">
                            <div class="timeline-date">Guest Faculty </div>
                            <p>The TMU College of Agriculture Sciences has four (4) guest faculty members.</p>
                        </div>
                    </div>
                    <div class="timeline-item right wow slideInLeft mb-0">
                        <div class="timeline-text">
                            <div class="timeline-date">Labs</div>
                            <p>The TMU College of Agriculture Sciences has the following labs: (i) Pre-Clinical
                                Labs: 4, (ii) Ceramic & Casting Labs: 4 </p>
                        </div>
                    </div>

                    <div class="timeline-item left wow slideInRight">
                        <div class="timeline-text">
                            <div class="timeline-date">Books & Journals</div>
                            <p>The TMU College of Agricultural Science's library includes 9,596 books, 268 Refernce
                                books 16 Journal and subscribes to 16 journals and 15 magazines.</p>
                        </div>
                    </div>
                    <div class="timeline-item right wow slideInLeft">
                        <div class="timeline-text">
                            <div class="timeline-date">E-Journals & E-Books</div>
                            <p> The TMU College of Agriculture Sciences provides access to e-journals and e-books
                                through the EBSCO Database, DELNET, and Clinical Key.</p>
                        </div>
                    </div>
                </div>
               
            </div>
            <!-- Job Experience End -->
        </div>
    </div>
</div>
</div>

<!-- Bootstrap JS and dependencies -->
@endsection