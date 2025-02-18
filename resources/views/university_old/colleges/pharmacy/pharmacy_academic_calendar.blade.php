@extends('layouts.university.colleges.pharmacy_with_sidebar')
@section('content')


<div class="main-content">
    <div class="container d-none d-sm-block">
        <h1 class="tmu-text-primary tmu-page-heading pt-md-5"><span>Academic </span><span> Calendar</span></h1>
        <div style="text-align:center">
            <iframe src="https://www.tmu.ac.in/academic_calendars/pharmacy2023-24.pdf" frameborder="0" height="800px" width="100%"></iframe>
        </div>
    </div>
    <div class="container d-block d-sm-none mb-3">
        <div style="text-align:center">
            <a href="https://www.tmu.ac.in/academic_calendars/pharmacy2023-24.pdf" class="tmu-btn btn-4" download>Download PDF</a>

        </div>
    </div>
</div>
</div>
<!-- Bootstrap JS and dependencies -->

@endsection