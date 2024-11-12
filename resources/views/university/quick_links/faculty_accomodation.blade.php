@extends('layouts.university.main')
@section('content')





<section id="content">
  <div class="content-wrap py-0">

    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <!-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button> -->
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{asset('/assets/img/infrastructure/faculty_accomodation/Banner.webp')}}" class="d-block w-100" alt="...">
        </div>
        <!-- <div class="carousel-item">
          <img src="{{asset('/assets/img/infrastructure/banking_facility/Banner2.webp')}}" class="d-block w-100" alt="...">
        </div> -->
      </div>
      <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button> -->
    </div>

    <div class="container">
      <h2 Class="tmu-text-primary mb-2 mt-5"><span>Faculty </span><span> Accomodation</span></h2>
      <div class="row justify-content-center">
        <div class="col-lg-12 text-justify mb-2 mt-3">
          <p class="text-justify mb-2 mt-1">
          We prioritise the comfort and convenience of our faculty members. To ensure this, our exclusive faculty accommodation offers a peaceful living environment, designed to foster relaxation and productivity. Our accommodations have spacious, well-furnished apartments that are fully equipped with modern amenities, making them the ideal home away from home. Furthermore, we ensure 24/7 security, regular maintenance, and dedicated support staff.
          </p>
          <!-- <p class="text-justify mb-2 mt-1">
            Faculty members can enjoy a range of integrated common facilities, including sports complexes, a well-equipped hospital, an expansive library, and reliable transport services. The accommodations are backed by power backup, ensuring uninterrupted living conditions. Additionally, community halls and lush gardens provide spaces for relaxation, social interaction, and community gatherings. The serene environment fosters a perfect balance between work and personal life, making TMU faculty accommodation an ideal place for both professional growth and well-being.
          </p> -->

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
            <img src="{{asset('/assets/img/infrastructure/faculty_accomodation/1.webp')}}" class="img-fluid" alt="Image 1">
          </div>
          <div class="col-md-4 img-grid p-2">
            <img src="{{asset('/assets/img/infrastructure/faculty_accomodation/2.webp')}}" class="img-fluid" alt="Image 1">
          </div>
          <div class="col-md-4 img-grid p-2">
            <img src="{{asset('/assets/img/infrastructure/faculty_accomodation/3.webp')}}" class="img-fluid" alt="Image 1">
          </div>

        </div>
      </div>
      <!-- Grid row -->
    </div>
  </div>
</section>
@endsection