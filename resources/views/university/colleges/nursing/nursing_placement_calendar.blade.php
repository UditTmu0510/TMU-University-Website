@extends('layouts.university.colleges.nursing_with_sidebar')
@section('content')
<div class="main-content">
    <div class="container d-none d-sm-block">
        <div style="text-align:center">
            <h1 class="tmu-text-primary tmu-page-heading mt-md-5"><span>Placement </span><span> Calendar</span></h1>
            <iframe src="{{asset('/assets/pdf/placement_calendar/nursing/Nursing-placement-calendar-2024-25.pdf')}}" frameborder="0" height="800px" width="100%"></iframe>
        </div>
    </div>
    <div class="container d-block d-sm-none mb-3">
        <div style="text-align:center">
            <h1 class="tmu-text-primary tmu-page-heading mt-md-5"><span>Placement </span><span> Calendar</span></h1>
        </div>

        <div class="iqac-container">
            <div class="iqac-card">
                <div class="card-pdf">
                    <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                    <p class="description">Placement Calendar (Academic Session 2024-25)</p>
                    <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                        href="{{asset('/assets/pdf/placement_calendar/nursing/Nursing-placement-calendar-2024-25.pdf')}}" download>Download PDF</a>
                </div>
            </div>
        </div>
    </div>
</div> 
</div> 

@endsection