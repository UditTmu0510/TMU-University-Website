@extends('layouts.university.colleges.medical_with_sidebar')
@section('content')

<div class="main-content">
    <div class="container">
      <div class="row mx-0">
        <h1 class="tmu-text-primary tmu-page-heading pt-md-5"><span>Result </span><span> </span></h1>

        <h3 class="tmu-text-primary mb-2 mt-2"><span> Medical College Undergraduate </span><span> MBBS Programme Results </span></h3>
        <div class="container my-2 py-2">
          <ul class="nav nav-tabs justify-content-center py-2 gap-2 gap-md-5" id="myTabs" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#Tab1" type="button"
                role="tab" aria-controls="Tab1" aria-selected="true"> 1st Prof 2023-24 Batch</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#Tab2" type="button"
                role="tab" aria-controls="Tab2" aria-selected="false"> 1st Prof 2022 23 Batch</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#Tab3" type="button"
                role="tab" aria-controls="Tab3" aria-selected="false"> 2nd Prof 2021 22 Batch</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#Tab4" type="button"
                role="tab" aria-controls="Tab4" aria-selected="false">
                3rd Phase Part-1 2020-21-Batch</button>
            </li>
          </ul>
          <div class="tab-content second ps-5 px-md-5" id="myTabContent">
            <div class="tab-pane fade show active" id="Tab1" role="tabpanel" aria-labelledby="tab1-tab">
              <div class="container d-none d-sm-block">
                <div style="text-align:center">
                  <iframe src="{{asset('/assets/pdf/medical/result/Result_MBBS_1st_Prof_2023_24_Batch.pdf')}}"
                    frameborder="0" height="1000px" width="100%"></iframe>
                </div>
              </div>
              <div class="container d-block d-sm-none mb-3">
                <div style="text-align:center">
                  <a href="{{asset('/assets/pdf/medical/result/Result_MBBS_1st_Prof_2023_24_Batch.pdf')}}"
                    class="tmu-btn btn-4 mt-5 mt-5" download>Download PDF</a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="Tab2" role="tabpanel" aria-labelledby="tab2-tab">
              <div class="container d-none d-sm-block">
                <div style="text-align:center">
                  <iframe src="{{asset('/assets/pdf/medical/result/MBBS_1_Prof_2022_23_Batch.pdf')}}" frameborder="0" height="1000px"
                    width="100%"></iframe>
                </div>
              </div>
              <div class="container d-block d-sm-none mb-3">
                <div style="text-align:center">
                  <a href="{{asset('/assets/pdf/medical/result/MBBS_1_Prof_2022_23_Batch.pdf')}}" class="tmu-btn btn-4 mt-5"
                    download>Download PDF</a>
                </div>
              </div>

            </div>
            <div class="tab-pane fade" id="Tab3" role="tabpanel" aria-labelledby="tab3-tab">
              <div class="container d-none d-sm-block">
                <div style="text-align:center">
                  <iframe src="{{asset('/assets/pdf/medical/result/MBBS-2nd-Prof-2021-22-Batch-2024.pdf')}}" frameborder="0" height="1000px"
                    width="100%"></iframe>
                </div>
              </div>
              <div class="container d-block d-sm-none mb-3">
                <div style="text-align:center">
                  <a href="{{asset('/assets/pdf/medical/result/MBBS-2nd-Prof-2021-22-Batch-2024.pdf')}}" class="tmu-btn btn-4 mt-5"
                    download>Download PDF</a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="Tab4" role="tabpanel" aria-labelledby="tab4-tab">
              <div class="container d-none d-sm-block">
                <div style="text-align:center">
                  <iframe src="{{asset('/assets/pdf/medical/result/MBBS-3rd-Phase-Part-I-2020-21-Batch.pdf')}}" frameborder="0" height="1000px"
                    width="100%"></iframe>
                </div>
              </div>
              <div class="container d-block d-sm-none mb-3">
                <div style="text-align:center">
                  <a href="{{asset('/assets/pdf/medical/result/MBBS-3rd-Phase-Part-I-2020-21-Batch.pdf')}}" class="tmu-btn btn-4 mt-5" download>Download
                    PDF</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- container ends -->
      </div>


        <h3 class="tmu-text-primary mb-2 mt-2 ps-4"><span> Medical College  </span><span> Postgraduate Results </span></h3>
        <div class="container my-2 py-2">
          <ul class="nav nav-tabs justify-content-center py-2 gap-2 gap-md-5" id="myTabs" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#Tab1" type="button"
                role="tab" aria-controls="Tab1" aria-selected="true"> 2024 </button>
            </li>

          </ul>
          <div class="tab-content second ps-5 px-md-5" id="myTabContent">
            <div class="tab-pane fade show active" id="Tab1" role="tabpanel" aria-labelledby="tab1-tab">
              <div class="container d-none d-sm-block">
                <div style="text-align:center">
                  <iframe src="{{asset('/assets/pdf/medical/result/PG_Result_Session_2023-24.pdf')}}"
                    frameborder="0" height="1000px" width="100%"></iframe>
                </div>
              </div>
              <div class="container d-block d-sm-none mb-3">
                <div style="text-align:center">
                  <a href="{{asset('/assets/pdf/medical/result/PG_Result_Session_2023-24.pdf')}}"
                    class="tmu-btn btn-4 mt-5 mt-5" download>Download PDF</a>
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