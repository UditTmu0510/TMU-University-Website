@extends('layouts.university.colleges.engineering_with_sidebar')
@section('content')
<div class="main-content">
    <div class="container">

        <div class="text-content">
            <h1 class="tmu-text-primary tmu-page-heading pt-md-5"><span>Placement </span><span> Calendar</span></h1>
        </div>
        <p class="text-justify mb-4">Training & Placement Cell of Faculty of Engineering endeavor to follow set of Training & Placement norm round the year. A Placement calendar provides hands of placement activities information accompanied with the academics.</p>
        <div class="container d-none d-sm-block">
            <div style="text-align:center">
                <iframe src="{{asset('/assets/pdf/placement_calendar/engineering/Placement-Calendar-Session 2024-25.pdf')}}" frameborder="0" height="800px" width="100%"></iframe>
            </div>
        </div>
        <div class="container d-block d-sm-none mb-3">
            <div class="iqac-container">
                <div class="iqac-card">
                    <div class="card-pdf">
                        <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                        <p class="description">Placement Calendar (2024-25)</p>
                        <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                            href="{{asset('/assets/pdf/placement_calendar/engineering/Placement-Calendar-Session 2024-25.pdf')}}" download>Download PDF</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection