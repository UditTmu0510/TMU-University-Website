@extends('layouts.university.colleges.medical_with_sidebar')
@section('content')

<div class="main-content">
    <div class="container d-none d-sm-block">
        <div style="text-align:center">
            <h1 class="tmu-text-primary tmu-page-heading mt-md-5"><span>Academic </span><span> Calendar 2024 - 25</span></h1>
            <iframe src="{{asset('/assets/pdf/medical/academic_calendar/medical_AC_2024_25.pdf')}}" frameborder="0" height="800px" width="100%"></iframe>
        </div>


        <div style="text-align:center">
            <h2 class="tmu-text-primary tmu-page-heading mt-md-5"><span>MD/MS Academic </span><span> Calendar 2023</span></h2>
            <iframe src="{{asset('/assets/pdf/medical/academic_calendar/3-MD-MS-AC-2023.pdf')}}" frameborder="0" height="800px" width="100%"></iframe>
        </div>

        <div style="text-align:center">
            <h2 class="tmu-text-primary tmu-page-heading mt-md-5"><span>MD/MS Academic </span><span> Calendar 2022 </span></h2>
            <iframe src="{{asset('/assets/pdf/medical/academic_calendar/2-MD-MS-AC-2022.pdf')}}" frameborder="0" height="800px" width="100%"></iframe>
        </div>

        <div style="text-align:center">
            <h2 class="tmu-text-primary tmu-page-heading mt-md-5"><span>MD/MS Academic </span><span> Calendar 2021 </span></h2>
            <iframe src="{{asset('/assets/pdf/medical/academic_calendar/1-MD-MS-AC-2021.pdf')}}" frameborder="0" height="800px" width="100%"></iframe>
        </div>

    </div>
    <div class="container d-block d-sm-none mb-3">

        <div class="row">
            <div class="text-center">
                <h1 class="tmu-text-primary tmu-page-heading mt-md-5"><span>Academic </span><span> Calendar</span></h1>
                <a href="{{asset('/assets/pdf/medical/academic_calendar/medical_AC_2024_25.pdf')}}" class="tmu-btn btn-4 mb-4 mt-3" download>Download PDF</a>
            </div>
        </div>

        <div class="row mt-5">
            <div class="text-center mb-3">
                <h2 class="tmu-text-primary mt-md-5"><span>MD/MS Academic </span><span> Calendar 2023</span></h2>
                <a href="{{asset('/assets/pdf/medical/academic_calendar/3-MD-MS-AC-2023.pdf')}}" class="tmu-btn btn-4 mb-4 mt-3" download>Download PDF</a>
            </div>
        </div>

        <div class="row mt-5">
            <div class="text-center mb-3">
                <h2 class="tmu-text-primary mt-md-5"><span>MD/MS Academic </span><span> Calendar 2022 </span></h2>
                <a href="{{asset('/assets/pdf/medical/academic_calendar/2-MD-MS-AC-2022.pdf')}}" class="tmu-btn btn-4 mb-4 mt-3" download>Download PDF</a>
            </div>
        </div>

        <div class="row mt-5">
            <div class="text-center">
                <h2 class="tmu-text-primary mt-md-5"><span>MD/MS Academic </span><span> Calendar 2021 </span></h2>
                <a href="{{asset('/assets/pdf/medical/academic_calendar/1-MD-MS-AC-2021.pdf')}}" class="tmu-btn btn-4 mb-4 mt-3" download>Download PDF</a>
            </div>
        </div>
    </div>

</div>
</div>


@endsection