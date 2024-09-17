@extends('layouts.university.departments.cbcs_with_sidebar')
@section('content')

<div class="main-content">
    <div class="container d-none d-sm-block">
        <div style="text-align:center">
            <h1 class="tmu-text-primary tmu-page-heading"><span>Open Elective Courses under CBCS
                </span><span> - Faculty of Education</span></h1>
            <iframe src="{{asset('assets/pdf/cbcs/cbcs_education.pdf')}}" frameborder="0" height="800px" width="100%"></iframe>
        </div>
    </div>
    <div class="container d-block d-sm-none mb-3">
        <div style="text-align:center">
            <h1 class="tmu-text-primary tmu-page-heading"><span>Open Elective Courses under CBCS
                </span><span> - Faculty of Education</span></h1>
            <a href="{{asset('assets/pdf/cbcs/cbcs_education.pdf')}}" class="tmu-btn btn-4" download>Download PDF</a>
        </div>
    </div>
</div>
</div>
@endsection