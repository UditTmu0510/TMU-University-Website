@extends('layouts.university.departments.research_cell_with_sidebar')
@section('content')



<div class="main-content">
  <div class="container">
    <div class="row mx-0 mb-3">
      <div class="container d-none d-sm-block">
        <div style="text-align:center">
          <h1 class="tmu-text-primary tmu-page-heading pt-md-5" style="text-transform:none;"><span>INTAKE FOR JULY 2025  </span> <span> CYCLE OF Ph.D. PROGRAMME</span> </h1>
          <iframe src="{{asset('/assets/pdf/research/intake/INTAKE_TRAT_JULY_2025.pdf')}}" frameborder="0" height="800px" width="100%"></iframe>
        </div>
      </div>
      <div class="container d-block d-sm-none mb-3">
        <div style="text-align:center">
          <h1 class="tmu-text-primary tmu-page-heading pt-md-5" style="text-transform:none;"><span>INTAKE FOR JULY 2025  </span> <span> CYCLE OF Ph.D. PROGRAMME</span> </h1>
        </div>
        <div class="iqac-container">
            <div class="iqac-card">
                <div class="card-pdf">
                    <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                    <p class="description">Ph.D. Intake 2025</p>
                    <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                        href="{{asset('/assets/pdf/research/intake/INTAKE_TRAT_JULY_2025.pdf')}}" download>Download PDF</a>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>





@endsection