@extends('layouts.university.main')
@section('content')



<section id="content">
  <div class="content-wrap py-0">

    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{asset('/assets/img/infrastructure/banking_facility/Banner.webp')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{asset('/assets/img/infrastructure/banking_facility/Banner2.webp')}}" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="container">
      <h1 Class="tmu-text-primary tmu-page-heading tmu-page-heading-left mb-2 mt-5"><span>Banking </span><span> Facility</span></h1>
      <div class="row justify-content-center">
        <div class="col-lg-12 text-justify mb-2 mt-3">
          <p class="text-justify mb-2 mt-1">
          TMU’s campus banking facility is designed to offer hassle-free financial services to students, faculty, and visitors. With a full-service branch located on campus, individuals can handle their day-to-day banking needs. The facility also features round-the-clock ATMs, ensuring access to cash and essential banking services at any time. The convenience of on-site banking allows everyone to stay focused on their studies or work without the distraction of off-campus errands.
          </p>
        </div>
      </div>
    </div>

    <div class="container mb-4">
      <div class="mb-3 mt-2">
        <!-- <h3 class="tmu-text-primary ps-2"><span>Gallery </span></h3> -->
      </div>
      <div class="container mt-2 px-0">
        <!-- Image Grid for Desktop and Tablet -->
        <div class="d-flex flex-wrap">

          <div class="col-md-4 img-grid p-2">
            <img src="{{asset('/assets/img/infrastructure/banking_facility/1.webp')}}" class="img-fluid" alt="Image 1">
          </div>
          <div class="col-md-4 img-grid p-2">
            <img src="{{asset('/assets/img/infrastructure/banking_facility/2.webp')}}" class="img-fluid" alt="Image 1">
          </div>
          <div class="col-md-4 img-grid p-2">
            <img src="{{asset('/assets/img/infrastructure/banking_facility/3.webp')}}" class="img-fluid" alt="Image 1">
          </div>

        </div>
      </div>
      <!-- Grid row -->
    </div>
  </div>
</section>
@endsection