@extends('layouts.university.colleges.engineering_with_sidebar')
@section('content')
<div class="main-content">
    <div class="container d-none d-sm-block">
        <div style="text-align:center">
            <h1 class="tmu-text-primary tmu-page-heading mt-md-5"><span>Project </span><span> Guidelines</span></h1>
            <iframe src="{{asset('assets/pdf/ccsit/new/G001-TMU-Project-Guidelines-v5.2.pdf')}}" frameborder="0" height="800px" width="100%"></iframe>
        </div>
    </div>
    <div class="container d-block d-sm-none mb-3">
        <div style="text-align:center">
            <h1 class="tmu-text-primary tmu-page-heading mt-md-5"><span>Project </span><span> Guidelines</span></h1>
            <div class="iqac-container">
                <div class="iqac-card">
                    <div class="card-pdf">
                        <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                        <p class="description">Course Project Guidelines<br></p>
                        <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" href="{{asset('assets/pdf/ccsit/new/G001-TMU-Project-Guidelines-v5.2.pdf')}}">Download PDF</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection