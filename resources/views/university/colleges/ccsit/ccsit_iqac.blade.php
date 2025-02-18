@extends('layouts.university.colleges.ccsit_with_sidebar')
@section('content')
<div class="main-content">
    <div class="container">
        <h1 class="tmu-text-primary tmu-page-heading pt-md-5"><span>Minutes of Meeting </span><span>of IQAC</span>
        </h1>
        <div class="container">
            <div class="iqac-container">
                <div class="iqac-card">
                    <div class="card-pdf">
                        <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                        <p class="description">Minutes of the Meeting of the IQAC held on February 4, 2023</p>
                        <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                            href="{{asset('assets/pdf/iqac_minutes/mom_IQAC_04_02_2023.pdf')}}">View
                            PDF</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


@endsection