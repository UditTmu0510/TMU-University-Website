@extends('layouts.university.colleges.education_with_sidebar')
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
                            <div class="timeline-date">2003</div>
                            <p>Founded in 2003, the Faculty of Education provides comprehensive programmes such as B.Ed., M.Ed., and Ph.D., contributing to the advancement of educational practices.</p>
                        </div>
                    </div>
                    <div class="timeline-item right wow slideInRight">
                        <div class="timeline-text">
                            <div class="timeline-date">Computer Laboratories</div>
                            <p>The Faculty of Education offers specialized labs:
                                Computer Lab , Science Lab, Psychology Lab</p>
                        </div>
                    </div>
                    <div class="timeline-item left wow slideInLeft">
                        <div class="timeline-text">
                            <div class="timeline-date">Professional Membership</div>
                            <p>The Faculty of Education is a member of the Indian Association of Teacher Educators (IATE).</p>
                        </div>
                    </div>
                    <div class="timeline-item right wow slideInRight">
                        <div class="timeline-text">
                            <div class="timeline-date">Books, Journals & Magazines</div>
                            <p>The Faculty of Education library houses 69885 books and subscribes to 18 National journals and 06 Magazines.</p>
                        </div>
                    </div>
                    <div class="timeline-item left wow slideInLeft">
                        <div class="timeline-text">
                            <div class="timeline-date">E-Journals & E-Books</div>
                            <p> The Faculty of Education provides access to e-journals and e-books through the EBSCO's Academic Search and the DELNET Database.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Job Experience End -->
    </div>
</div>
</div>

<!-- Bootstrap JS and dependencies -->
@endsection