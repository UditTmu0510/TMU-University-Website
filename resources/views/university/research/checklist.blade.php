@extends('layouts.university.departments.research_cell_with_sidebar')
@section('content')



<div class="main-content">
  <div class="container">
    <div class="row mx-0">
      <h1 class="tmu-text-primary tmu-page-heading pt-md-5"><span>Code of </span><span> Ethics</span></h1>
      <div class="container my-2 py-2">
        <ul class="nav nav-tabs justify-content-center py-2 gap-2 gap-md-5" id="myTabs" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#Tab1" type="button"
              role="tab" aria-controls="Tab1" aria-selected="true"> Research Ethics Course</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#Tab2" type="button"
              role="tab" aria-controls="Tab2" aria-selected="false"> Ethics
              Committee </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#Tab3" type="button"
              role="tab" aria-controls="Tab3" aria-selected="false">Publication
              Guidance Committee </button>
          </li>
        </ul>
        <div class="tab-content second ps-5 px-md-5" id="myTabContent">
          <div class="tab-pane fade show active" id="Tab1" role="tabpanel" aria-labelledby="tab1-tab">
            <div class="container d-none d-sm-block">
              <div style="text-align:center">
                <iframe src="https://www.tmu.ac.in/pdf/code_of_ethics/publication_ethics_course.pdf" frameborder="0"
                  height="800px" width="100%"></iframe>
              </div>
            </div>
            <div class="container d-block d-sm-none mb-3">
              <div style="text-align:center">
                <a href="https://www.tmu.ac.in/pdf/code_of_ethics/publication_ethics_course.pdf" class="tmu-btn btn-4"
                  download>Download PDF</a>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="Tab2" role="tabpanel" aria-labelledby="tab2-tab">
            <div class="container d-none d-sm-block">
              <div style="text-align:center">
                <iframe src="https://www.tmu.ac.in/pdf/code_of_ethics/research_ethics_committee.pdf" frameborder="0"
                  height="800px" width="100%"></iframe>
              </div>
            </div>
            <div class="container d-block d-sm-none mb-3">
              <div style="text-align:center">
                <a href="https://www.tmu.ac.in/pdf/code_of_ethics/research_ethics_committee.pdf" class="tmu-btn btn-4"
                  download>Download PDF</a>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="Tab3" role="tabpanel" aria-labelledby="tab3-tab">
            <div class="container d-none d-sm-block">
              <div style="text-align:center">
                <iframe src="https://www.tmu.ac.in/pdf/code_of_ethics/publication_guidence_committee.pdf"
                  frameborder="0" height="800px" width="100%"></iframe>
              </div>
            </div>
            <div class="container d-block d-sm-none mb-3">
              <div style="text-align:center">
                <a href="https://www.tmu.ac.in/pdf/code_of_ethics/publication_guidence_committee.pdf"
                  class="tmu-btn btn-4" download>Download PDF</a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>


@endsection