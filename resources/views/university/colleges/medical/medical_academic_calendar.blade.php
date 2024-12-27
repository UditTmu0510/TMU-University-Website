@extends('layouts.university.colleges.medical_with_sidebar')
@section('content')

<div class="main-content">
    <div class="container d-none d-sm-block">
        <div style="text-align:center">
            <h1 class="tmu-text-primary tmu-page-heading mt-md-5"><span>Academic </span><span> Calendar 2024 - 25</span></h1>
            <iframe src="{{asset('/assets/pdf/medical/academic_calendar/medical_AC_2024_25.pdf')}}" frameborder="0" height="800px" width="100%"></iframe>
        </div>


        <div style="text-align:center">
            <h3 class="tmu-text-primary mt-md-5"><span>MD/MS Academic </span><span> Calendar 2023</span></h3>
            <iframe src="{{asset('/assets/pdf/medical/academic_calendar/3-MD-MS-AC-2023.pdf')}}" frameborder="0" height="800px" width="100%"></iframe>
        </div>

        <div style="text-align:center">
            <h3 class="tmu-text-primary mt-md-5"><span>MD/MS Academic </span><span> Calendar 2022 </span></h3>
            <iframe src="{{asset('/assets/pdf/medical/academic_calendar/2-MD-MS-AC-2022.pdf')}}" frameborder="0" height="800px" width="100%"></iframe>
        </div>

        <div style="text-align:center">
            <h3 class="tmu-text-primary mt-md-5"><span>MD/MS Academic </span><span> Calendar 2021 </span></h3>
            <iframe src="{{asset('/assets/pdf/medical/academic_calendar/1-MD-MS-AC-2021.pdf')}}" frameborder="0" height="800px" width="100%"></iframe>
        </div>

    </div>
    <div class="container d-block d-sm-none mb-3">
        <div class="container mb-4 mt-4">
            <h1 class="tmu-text-primary tmu-page-heading mt-md-5"><span>Academic </span><span> Calendar</span></h1>
            <hr class="horizontal-line">
            <button class="careers-accordion">Academic Calendar for the Session (2024-25) <span class="icon">+</span></button>
            <div class="panel active">
                <div class="iqac-container">
                    <div class="iqac-card">
                        <div class="card-pdf">
                            <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                            <p class="description">Academic Calendar</p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/medical/academic_calendar/medical_AC_2024_25.pdf')}}" target="_blank" download>Download PDF</a>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="horizontal-line">
            <button class="careers-accordion">MD/MS Academic Calendar for 2023 Batch for (2023-26)<span class="icon">+</span></button>
            <div class="panel">
                <div class="iqac-container">
                    <div class="iqac-card">
                        <div class="card-pdf">
                            <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                            <p class="description">Academic Calendar</p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/medical/academic_calendar/3-MD-MS-AC-2023.pdf')}}" target="_blank" download>Download PDF</a>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="horizontal-line">
            <button class="careers-accordion">MD/MS Academic Calendar for 2022 Batch (2022-25)<span class="icon">+</span></button>
            <div class="panel">
                <div class="iqac-container">
                    <div class="iqac-card">
                        <div class="card-pdf">
                            <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                            <p class="description">Academic Calendar</p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/medical/academic_calendar/2-MD-MS-AC-2022.pdf')}}" target="_blank" download>Download PDF</a>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="horizontal-line">
            <button class="careers-accordion">MD/MS Academic Calendar for 2021 Batch (2022-24) <span class="icon">+</span></button>
            <div class="panel">
                <div class="iqac-container">
                    <div class="iqac-card">
                        <div class="card-pdf">
                            <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                            <p class="description">Academic Calendar</p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/medical/academic_calendar/1-MD-MS-AC-2021.pdf')}}" target="_blank" download>Download PDF</a>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="horizontal-line">
        </div>
    </div>
</div>
</div>


@endsection