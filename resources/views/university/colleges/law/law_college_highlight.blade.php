@extends('layouts.university.colleges.law_with_sidebar')
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
                            <div class="timeline-date">2010</div>
                            <p>Established in 2010, the College attracts bright minds aspiring to contribute meaningfully to the legal profession, offering integrated LL.B. programmes and a Ph.D. in law.</p>
                        </div>
                    </div>
                    <div class="timeline-item right wow slideInRight">
                        <div class="timeline-text">
                            <div class="timeline-date">Computer Laboratories</div>
                            <p>The College of Law & Legal Studies features one computer laboratory equipped with 56
                                computers and
                                peripherals.</p>
                        </div>
                    </div>
                    <div class="timeline-item left wow slideInLeft">
                        <div class="timeline-text">
                            <div class="timeline-date">Advance Learning Centre</div>
                            <p>The College of Law & Legal Studies offers an Advance Learning Centre, which includes a Legal Aid Clinic and an IP Facilitation Center.</p>
                        </div>
                    </div>
                    <div class="timeline-item right wow slideInRight">
                        <div class="timeline-text">
                            <div class="timeline-date">Moot Court </div>
                            <p>The College of Law & Legal Studies has one (01) Moot Court.</p>
                        </div>
                    </div>
                    <div class="timeline-item left wow slideInLeft mb-0">
                        <div class="timeline-text">
                            <div class="timeline-date">Seminar Hall</div>
                            <p>The College of Law & Legal Studies has one (01) Seminar Hall.</p>
                        </div>
                    </div>
                </div>

                <div class="read-more-content">
                    <div class="timeline mt-0">
                        <div class="timeline-item right wow slideInRight">
                            <div class="timeline-text">
                                <div class="timeline-date">Books & Journals</div>
                                <p>The College of Law & Legal Studies' library holds a collection of 5,585 books and subscribes to 5 journals and reports.</p>
                            </div>
                        </div>
                        <div class="timeline-item left wow slideInLeft">
                            <div class="timeline-text">
                                <div class="timeline-date">E-Journals & E-Books</div>
                                <p> The College of Law & Legal Studies provides access to e-journals and e-books through the Lexis Nexis Database, EBSCO's Academic Search Elite Database, and the DELNET Database</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="javascript:void(0);" class="tmu-btn btn-1 py-2 mt-md-5 read-more d-block mx-auto"
                    style="width:fit-content" title="Read More">Read More</a>
            </div>
        </div>
        <!-- Job Experience End -->
    </div>
</div>
</div>

<!-- Bootstrap JS and dependencies -->
@endsection