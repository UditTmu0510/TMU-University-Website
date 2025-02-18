@extends('layouts.university.departments.rdc_with_sidebar')
@section('content')


<div class="main-content">
  <div class="container">
    <!-- Write content for right side here  -->
    <div class="row mx-0">
      <h1 class=" tmu-text-primary tmu-page-heading mb-0 pt-md-5 pb-4"><span>TMU Research:  </span><span> Faculty Profiles & Expertise</span></h1>
      <div class="col-sm-6 col-lg-4 col-xl-4 col-md-6 col-xs-12">
        <div class="card card-animation">
          <img src="{{asset('assets/img/department/rdc/souvik_sur.jpg')}}" class="card-img-top" alt="Image 1" >
          <div class="card-body text-center"> <!-- Added 'text-center' class -->
            <h5 class="card-title tmu-color fw-bold">Dr. Souvik Sur</h5>
            <p class="card-text tmu-color-blue">Assistant Professor</p>
            <p class="card-text fs-14 tmu-color-blue">souviks.rdc@tmu.ac.in</p>
            <p class="card-text fs-14 tmu-color-blue">+91-9051498210</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>


@endsection