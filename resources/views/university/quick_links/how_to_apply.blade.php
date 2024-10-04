@extends('layouts.university.departments.quicklinks_with_sidebar')
@section('content')

<style>
  .tab-content {
    max-height: fit-content !important;
  }
</style>



<section id="content" class="w-100 mb-4">
  <div class="content-wrap py-0">

    <h1 class="tmu-text-primary tmu-page-heading mt-md-5"><span> How to </span><span> Apply</span></h1>


    <div class="container py-2 px-lg-5">


      <ul class="nav nav-tabs justify-content-center py-2 gap-2 gap-md-5" id="myTabs" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#Tab1" type="button" role="tab" aria-controls="Tab1" aria-selected="true"><i class="fas fa-lightbulb"></i> Online Mode</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#Tab2" type="button" role="tab" aria-controls="Tab2" aria-selected="false"><i class="fas fa-briefcase"></i> Offline Mode</button>
        </li>
      </ul>
      <div class="tab-content second px-md-5" id="myTabContent">
        <div class="tab-pane fade show active" id="Tab1" role="tabpanel" aria-labelledby="tab1-tab">
          <div class="d-flex align-items-center flex-column">
            <h3 style="color:#000;" class="mb-0 ms-0">For Online Application follow the Steps below</h3>
            <i class="fa fa-hand-o-down my-2 d-block mx-auto w-fit-content" style="font-size:24px"></i>
          </div>
          <div class="img-thumbnail d-flex justify-content-center">
            <img class="img-responsive w-md-50 " src="https://www.tmu.ac.in/img/admissions/admission2.png" alt="">
          </div>
        </div>
        <div class="tab-pane fade" id="Tab2" role="tabpanel" aria-labelledby="tab2-tab">
          <div class="d-flex align-items-center flex-column">
            <h3 style="color:#000;" class="mb-0">For Manual Submission follow the Steps below</h3>
            <i class="fa fa-hand-o-down my-2 d-block mx-auto w-fit-content" style="font-size:24px"></i>
          </div>
          <div class="img-thumbnail d-flex justify-content-center">
            <img class="img-responsive w-md-50" src="https://www.tmu.ac.in/img/admissions/admission1.webp" alt="">
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
</div>
@endsection