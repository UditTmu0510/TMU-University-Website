@extends('layouts.university.colleges.agriculture_with_sidebar')
@section('content')


<div class="main-content">
    <div class="container ">
        <div style="text-align:center">
            <h1 class="tmu-text-primary tmu-page-heading mt-md-5"><span>Academic</span><span> Calendar</span></h1>
            <iframe src="{{asset('assets/pdf/academic_calendars/TMDC&CRC-Academic-Calendar-23-24.pdf')}}" frameborder="0" height="800px" width="100%" class="d-none d-sm-block"></iframe>
            <a href="{{asset('assets/pdf/academic_calendars/TMDC&CRC-Academic-Calendar-23-24.pdf')}}" class="tmu-btn btn-4 d-block d-sm-none" download>Download PDF</a>
        </div>
    </div>
</div>
</div>
<!-- Bootstrap JS and dependencies -->
@endsection