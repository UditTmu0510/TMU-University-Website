@extends('layouts.university.departments.research_cell_with_sidebar')
@section('content')



<div class="main-content">
  <div class="container">
    <div class="row mx-0">
      <h1 class="tmu-text-primary tmu-page-heading pt-md-5"><span>Research </span><span> Policy</span></h1>

      <div class="container my-2 py-2">
        <ul class="nav nav-tabs justify-content-center py-2 gap-2 gap-md-5" id="myTabs" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#Tab1" type="button"
              role="tab" aria-controls="Tab1" aria-selected="true"> Consultancy & <br> Research Project</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#Tab2" type="button"
              role="tab" aria-controls="Tab2" aria-selected="false"> Seed Money
              <br> Grant Scheme</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#Tab3" type="button"
              role="tab" aria-controls="Tab3" aria-selected="false"> Financial
              Assistance <br> for result</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#Tab4" type="button"
              role="tab" aria-controls="Tab4" aria-selected="false">
              Intellectual Property <br> Rights Policy</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#Tab5" type="button"
              role="tab" aria-controls="Tab4" aria-selected="false"> Vice
              Chancellor's <br> Innovation Fund</button>
          </li>
        </ul>
        <div class="tab-content second ps-5 px-md-5" id="myTabContent">
          <div class="tab-pane fade show active" id="Tab1" role="tabpanel" aria-labelledby="tab1-tab">
            <div class="container d-none d-sm-block">
              <div style="text-align:center">
                <iframe src="{{asset('/assets/pdf/research/consultancy_research_project_policy.pdf')}}"
                  frameborder="0" height="1000px" width="100%"></iframe>
              </div>
            </div>
            <div class="container d-block d-sm-none mb-3">
              <div style="text-align:center">
                <a href="{{asset('/assets/pdf/research/consultancy_research_project_policy.pdf')}}"
                  class="tmu-btn btn-4 mt-5 mt-5" download>Download PDF</a>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="Tab2" role="tabpanel" aria-labelledby="tab2-tab">
            <div class="container d-none d-sm-block">
              <div style="text-align:center">
                <iframe src="{{asset('/assets/pdf/research/seed_money_policy.pdf')}}" frameborder="0" height="1000px"
                  width="100%"></iframe>
              </div>
            </div>
            <div class="container d-block d-sm-none mb-3">
              <div style="text-align:center">
                <a href="{{asset('/assets/pdf/research/seed_money_policy.pdf')}}" class="tmu-btn btn-4 mt-5"
                  download>Download PDF</a>
              </div>
            </div>

          </div>
          <div class="tab-pane fade" id="Tab3" role="tabpanel" aria-labelledby="tab3-tab">
            <div class="container py-4">
              <div class="row g-4">
                <h3 class="m-1">Incentive given to Faculty Members</h3>
                <div class="col-12 col-md-6">
                  <div class="card shadow-sm">
                    <img src="{{ asset('assets/img/department/research/research_policy/research_incentive1.jpeg') }}" class="card-img-top" alt="Image 1">
                  </div>
                </div>
                <!-- Card 2 -->
                <div class="col-12 col-md-6">
                  <div class="card shadow-sm">
                    <img src="{{ asset('assets/img/department/research/research_policy/research_incentive1.jpeg') }}" class="card-img-top" alt="Image 2">
                  </div>
                </div>
              </div>
            </div>
            <div class="container d-none d-sm-block">
              <div style="text-align:center">
                <iframe src="{{asset('/assets/pdf/research/incentive_policy.pdf')}}" frameborder="0" height="1000px"
                  width="100%"></iframe>
              </div>
            </div>
            <div class="container d-block d-sm-none mb-3">
              <div style="text-align:center">
                <a href="{{asset('/assets/pdf/research/incentive_policy.pdf')}}" class="tmu-btn btn-4 mt-5"
                  download>Download PDF</a>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="Tab4" role="tabpanel" aria-labelledby="tab4-tab">
            <div class="container d-none d-sm-block">
              <div style="text-align:center">
                <iframe src="{{asset('/assets/pdf/research/ipr_policy.pdf')}}" frameborder="0" height="1000px"
                  width="100%"></iframe>
              </div>
            </div>
            <div class="container d-block d-sm-none mb-3">
              <div style="text-align:center">
                <a href="{{asset('/assets/pdf/research/ipr_policy.pdf')}}" class="tmu-btn btn-4 mt-5" download>Download
                  PDF</a>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="Tab5" role="tabpanel" aria-labelledby="tab4-tab">
            <div class="container d-none d-sm-block">
              <div style="text-align:center">
                <iframe src="{{asset('/assets/pdf/research/innovation_fund.pdf')}}" frameborder="0" height="1000px"
                  width="100%"></iframe>
              </div>
            </div>
            <div class="container d-block d-sm-none mb-3">
              <div style="text-align:center">
                <a href="{{asset('/assets/pdf/research/innovation_fund.pdf')}}" class="tmu-btn btn-4 mt-5"
                  download>Download PDF</a>
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