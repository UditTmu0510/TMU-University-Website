@extends('layouts.university.departments.research_cell_with_sidebar')
@section('content')


<div class="main-content">
  <div class="container">

    <div class="row mx-0">
      <h1 class="tmu-text-primary tmu-page-heading pt-md-5"><span>Phd</span><span> Results</span></h1>

      <div class="container my-2 py-2">
        <ul class="nav nav-tabs justify-content-center py-2 gap-2 gap-md-5" id="myTabs" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#Tab1" type="button"
              role="tab" aria-controls="Tab1" aria-selected="true"> TRAT</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#Tab2" type="button"
              role="tab" aria-controls="Tab2" aria-selected="false">Course Work </button>
          </li>
        </ul>
        <div class="tab-content second ps-3" id="myTabContent">
          <div class="tab-pane fade show active" id="Tab1" role="tabpanel" aria-labelledby="tab1-tab">
            <div class="container d-none d-sm-block">
              <div style="text-align:center">
                <h3 class="tmu-text-primary ">January 2025 TRAT Final Result </h3>
                <iframe src="{{asset('/assets/pdf/research/result/TRAT-January-2025-Final-Result.pdf')}}"
                  frameborder="0" height="800px" width="100%"></iframe>
              </div>
            </div>
            <div class="container d-block d-sm-none mb-3">
              <div style="text-align:center">
                <h3 class="tmu-text-primary ">January 2025 TRAT Final Result</h3>
                <div class="iqac-container">
                  <div class="iqac-card">
                    <div class="card-pdf">
                      <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                      <p class="description">Final Result</p>
                      <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                        href="{{asset('/assets/pdf/research/result/TRAT-January-2025-Final-Result.pdf')}}" download>Download PDF</a>
                    </div>
                  </div>
                </div>

              </div>
            </div>

          </div>
          <div class="tab-pane fade" id="Tab2" role="tabpanel" aria-labelledby="tab2-tab">
            <div class="container d-none d-sm-block">
              <div style="text-align:center">
                <h3 class="tmu-text-primary ">Ph. D. Course Work January 2025 & Re-appeared</h3>
                <iframe src="{{asset('/assets/pdf/research/result/Coursework_Result_January_2025.pdf')}}"
                  frameborder="0" height="800px" width="100%"></iframe>
              </div>
            </div>
            <div class="container d-block d-sm-none mb-3">
              <div style="text-align:center">
                <h3 class="tmu-text-primary">Ph. D. Course Work January 2025 & Re-appeared</h3>
                <div class="iqac-container">
                  <div class="iqac-card">
                    <div class="card-pdf">
                      <img src="{{asset('/assets/img/icons/sheet.svg')}}" alt="PDF Icon" class="pdf-icon">
                      <p class="description">Ph.D. Coursework & Re-appear Result</p>
                      <a class="tmu-btn btn-2 m-0 py-1 px-2 fs-12"
                        href="{{asset('/assets/pdf/research/result/Coursework_Result_January_2025.pdf')}}" download>Download PDF</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>



        </div>
      </div>
      <!-- container ends -->
    </div>
  </div>
</div>
</div>


@endsection