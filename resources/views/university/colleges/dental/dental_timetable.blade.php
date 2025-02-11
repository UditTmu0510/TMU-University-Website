@extends('layouts.university.colleges.dental_with_sidebar')
@section('content')

<div class="main-content">
    <div class="container d-none d-sm-block">
        <div style="text-align:center">
            <h1 class="tmu-text-primary tmu-page-heading mt-md-5"><span>Time Table </span><span> 2024-25</span></h1>
            <iframe src="{{asset('/assets/pdf/time_table/dental/dental_BDS_TT_24_25.pdf')}}" frameborder="0" height="800px" width="100%"></iframe>
        </div>


        <div style="text-align:center">
            <h2 class="tmu-text-primary mt-md-5"><span>Time Table </span><span> 2023-24</span></h2>
            <iframe src="{{asset('/assets/pdf/time_table/dental/Dental_TT_23_24.pdf')}}" frameborder="0" height="800px" width="100%"></iframe>
        </div>
    </div>
    <div class="container d-block d-sm-none mb-3">
        <div class="container mb-4 mt-4">
            <h1 class="tmu-text-primary tmu-page-heading mt-md-5"><span>Time  </span><span>Table </span></h1>
            <hr class="horizontal-line">
            <button class="careers-accordion">Time Table for the Session (2024-25) <span class="icon">+</span></button>
            <div class="panel active">
                <div class="iqac-container">
                    <div class="iqac-card">
                        <div class="card-pdf">
                            <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                            <p class="description">Time Table</p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/time_table/dental/dental_BDS_TT_24_25.pdf')}}" target="_blank" download>Download PDF</a>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="horizontal-line">
            <button class="careers-accordion">Time Table for the Session (2023-24)<span class="icon">+</span></button>
            <div class="panel">
                <div class="iqac-container">
                    <div class="iqac-card">
                        <div class="card-pdf">
                            <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                            <p class="description">Time Table</p>
                            <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('/assets/pdf/time_table/dental/Dental_TT_23_24.pdf')}}" target="_blank" download>Download PDF</a>
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

