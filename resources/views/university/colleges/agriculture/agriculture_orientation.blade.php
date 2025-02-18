@extends('layouts.university.colleges.agriculture_with_sidebar')
@section('content')

<div class="main-content">
    <div class="container d-none d-sm-block">
        <div style="text-align:center">
            <h1 class="tmu-text-primary tmu-page-heading mt-md-5"><span>Orientation Programme for the </span><span> Academic Session <br> 2024-25</span></h1>
            <iframe src="{{asset('/assets/pdf/time_table/agriculture_op.pdf')}}" frameborder="0" height="800px" width="100%"></iframe>
        </div>
    </div>
    <div class="container d-block d-sm-none mb-3">
            <h1 class="tmu-text-primary tmu-page-heading mt-md-5"><span>Orientation Programme for the </span><span> Academic Session <br> 2024-25</span></h1>
        <div class="iqac-container">
            <div class="iqac-card">
                <div class="card-pdf">
                    <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                    <p class="description">Orientation Programme</p>
                    <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                        href="{{asset('/assets/pdf/time_table/agriculture_op.pdf')}}" download>Download PDF</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Bootstrap JS and dependencies -->

@endsection