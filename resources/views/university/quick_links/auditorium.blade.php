@extends('layouts.university.main')
@section('content')





<section id="content">
  <div class="content-wrap py-0">

    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <!-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button> -->
        <!-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button> -->
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{asset('/assets/img/infrastructure/auditorium/Banner.webp')}}" class="d-block w-100" alt="...">
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
      <h1 Class="tmu-text-primary tmu-page-heading tmu-page-heading-left mb-2 mt-5"><span>Auditorium</span></h1>
      <div class="row justify-content-center">
        <div class="col-lg-12 text-justify mb-2 mt-3">
          <p class="text-justify mb-2 mt-1">
            The TMU Auditorium stands as a beacon of innovation and culture, offering a state-of-the-art facility that enhances the overall campus experience. Centrally air-conditioned and with a seating capacity of 550, the auditorium is equipped with cutting-edge acoustics, advanced sound systems, and digital projection technologies, ensuring a world-class audio-visual experience for every event. This versatile space is a hub for a wide variety of activities, ranging from academic seminars and conferences to vibrant cultural programs, theatrical performances, and student festivals. It serves as a platform for students to showcase their talents, engage in intellectual debates, and collaborate with peers from other universities across the country.
          </p>

          <p class="text-justify mb-2 mt-1">
            The auditorium is not only a venue for student-led activities but also plays host to high-profile corporate events, exhibitions, and intercollegiate competitions. With its modern infrastructure and spacious seating, the auditorium offers an ideal setting for events of all sizes. The collaborative atmosphere fostered here encourages learning, creativity, and growth, making it a cornerstone of the TMU campus. Whether it's a thought-provoking lecture, a lively cultural show, or an inspiring competition, the TMU Auditorium brings together the university community and provides memorable experiences for all who attend.
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
            <img src="{{asset('/assets/img/infrastructure/auditorium/1.webp')}}" class="img-fluid" alt="Image 1">
          </div>
          <div class="col-md-4 img-grid p-2">
            <img src="{{asset('/assets/img/infrastructure/auditorium/2.webp')}}" class="img-fluid" alt="Image 1">
          </div>
          <div class="col-md-4 img-grid p-2">
            <img src="{{asset('/assets/img/infrastructure/auditorium/3.webp')}}" class="img-fluid" alt="Image 1">
          </div>
          <div class="col-md-4 img-grid p-2">
            <img src="{{asset('/assets/img/infrastructure/auditorium/4.webp')}}" class="img-fluid" alt="Image 1">
          </div>
          <div class="col-md-4 img-grid p-2">
            <img src="{{asset('/assets/img/infrastructure/auditorium/5.webp')}}" class="img-fluid" alt="Image 1">
          </div>
          <div class="col-md-4 img-grid p-2">
            <img src="{{asset('/assets/img/infrastructure/auditorium/6.webp')}}" class="img-fluid" alt="Image 1">
          </div>

        </div>
      </div>
      <!-- Grid row -->
    </div>
  </div>
</section>
@endsection