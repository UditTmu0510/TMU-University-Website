@extends('layouts.university.departments.rdc_with_sidebar')
@section('content')



<div class="main-content">
  <div class="container">
    <!-- Write content for right side here  -->

    <div class="row justify-content-center text-center">
      <h1 class=" tmu-text-primary tmu-page-heading mb-4 pt-md-5"><span> RDC </span><span>
          Infrastructure</span></h1>
      <div class="row gutter-30 col-mb-5 mb-5 justify-content-center text-center">

        <div class="col-sm-6 col-md-4">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="{{asset('/assets/img/department/rdc/1.jpg')}}" class="col-4"
                alt="">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4 class="fs-14">Day Care Centre</h4><span class="fst-normal fs-12 mb-2"><i
                    class="fa-solid fa-location-dot"></i> TMU Campus</span>
                <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 download-btn" href="{{asset('/assets/img/department/rdc/rdc_infra1.jpg')}}"> Download Geo Tag Image</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="{{asset('/assets/img/department/rdc/3.jpg')}}" class="col-4"
                alt="">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4 class="fs-14">Day Care Centre</h4><span class="fst-normal fs-12 mb-2"><i
                    class="fa-solid fa-location-dot"></i> TMU Campus</span>
                <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 download-btn" href="{{asset('/assets/img/department/rdc/rdc_infra3.jpg')}}"> Download Geo Tag Image</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4">
          <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
            <div class="team-image">
              <img src="{{asset('/assets/img/department/rdc/2.jpg')}}" class="col-4"
                alt="">
            </div>
            <div class="team-desc p-2">
              <div class="team-title pt-0">
                <h4 class="fs-14">Day Care Centre</h4><span class="fst-normal fs-12 mb-2"><i
                    class="fa-solid fa-location-dot"></i> TMU Campus</span>
                <div class="tmu-btn btn-2 m-0 py-1 px-2 fs-12 download-btn" href="{{asset('/assets/img/department/rdc/rdc_infra2.jpg')}}"> Download Geo Tag Image</div>
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