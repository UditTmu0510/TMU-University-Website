@extends('layouts.university.departments.quicklinks_with_sidebar')
@section('content')




<div class="main-content">
    <div class="container d-none d-sm-block">
        <div style="text-align:center">
            <h1 class="mb-2 tmu-text-primary tmu-page-heading"><span>Admissions - </span><span class="d-block d-sm-inline">Leaflet</span></h1>
            <iframe src="{{asset('/assets/pdf/FEE-STRUCTURE.pdf')}}" frameborder="0" height="800px" width="100%"></iframe>
        </div>
    </div>
    <div class="container d-block d-sm-none mb-3">
        <div style="text-align:center">
            <h1 class="mb-4 tmu-text-primary tmu-page-heading"><span>Admissions - </span><span >Leaflet</span></h1>
            <a href="{{asset('/assets/pdf/FEE-STRUCTURE.pdf')}}" class="tmu-btn btn-4 mt-4" download><i class="fa fa-download me-2"></i>Download PDF</a>
        </div>
    </div>
</div>
</div>

@endsection