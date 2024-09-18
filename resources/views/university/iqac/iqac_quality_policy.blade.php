@extends('layouts.university.departments.iqac_with_sidebar')
@section('content')


<div class="main-content">
  <div class="container">
    <div class="row mx-0">
      <div class="container d-none d-sm-block">
        <div style="text-align:center">
          <h1 class="tmu-text-primary tmu-page-heading mb-0 pt-md-5"><span>Quality Policy of</span> <span> the
              University</span></h1>
          <iframe src="{{asset('/assets/pdf/quality_policy.pdf')}}" frameborder="0" height="800px" width="100%"
            class="mt-3"></iframe>
        </div>
      </div>
      <div class="container d-block d-sm-none mb-3">
        <div style="text-align:center">
          <h1 class="tmu-text-primary tmu-page-heading mb-5 pt-md-5"><span>Quality Policy of</span> <span> the
              University</span></h1>
          <a href="{{asset('/assets/pdf/quality_policy.pdf')}}" class="tmu-btn btn-4 pt-md-4" download>Download PDF</a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>


@endsection