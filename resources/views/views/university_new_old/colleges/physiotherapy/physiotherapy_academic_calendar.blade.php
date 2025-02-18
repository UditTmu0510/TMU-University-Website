@extends('layouts.university.colleges.physiotherapy_with_sidebar')
@section('content')

<div class="main-content">
    <div class="container d-none d-sm-block">
        <div style="text-align:center">
            <h1 class="tmu-text-primary tmu-page-heading pt-md-5"><span>Academic </span><span> Calendar</span> </h1>
            <iframe src="{{asset('/assets/pdf/academic_calendar/physiotherapy/University-Academic-Calendar-2023-24.pdf')}}" frameborder="0" height="800px" width="100%"></iframe>
        </div>
    </div>
    <div class="container d-block d-sm-none mb-3">
        <div style="text-align:center">
            <h1 class="tmu-text-primary tmu-page-heading pt-md-5"><span>Academic </span><span> Calendar</span> </h1>
            <a href="{{asset('/assets/pdf/academic_calendar/physiotherapy/University-Academic-Calendar-2023-24.pdf')}}" class="tmu-btn btn-4" download>Download PDF</a>

        </div>
    </div>
</div>
</div>
<!-- Bootstrap JS and dependencies -->

@endsection