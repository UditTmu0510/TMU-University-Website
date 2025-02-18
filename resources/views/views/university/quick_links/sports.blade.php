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
          <img src="{{asset('/assets/img/infrastructure/sports/Banner.webp')}}" class="d-block w-100" alt="...">
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
      <h1 Class="tmu-text-primary tmu-page-heading tmu-page-heading-left mb-2 mt-5"><span>Sports</span></h1>
      <div class="row justify-content-center">
        <div class="col-lg-12 text-justify mb-2 mt-3">
          <p class="text-justify mb-2 mt-1">
          <b class="fs-16"> Sports Facilities at TMU</b><br>
TMU offers a wide range of sports facilities that cater to both outdoor and indoor sports enthusiasts. The campus is equipped with top-notch infrastructure, including a cricket stadium with international-standard turf wickets, a football field that has hosted prestigious tournaments, and dedicated areas for sports like kho-kho, hockey, kabaddi, and athletics. For indoor sports, the university provides excellent facilities for table tennis, basketball, badminton, squash, and more, within its state-of-the-art indoor sports complex.
</p>
<p class="text-justify mb-2 mt-1">
<b class="fs-16"> Sports Science and Health Support</b><br>
In addition to traditional sports facilities, TMU enhances athletic performance through specialized sports labs and a physiotherapy clinic. These labs cover areas such as human performance, anatomy, sports psychology, and rehabilitation, ensuring athletes receive scientific support for peak performance. The physiotherapy clinic offers services like osteopathy and sports massages, helping to manage pain, prevent injury, and improve overall performance for athletes.
</p>
<p class="text-justify mb-2 mt-1">
<b class="fs-16"> Support for Athletes</b><br>
TMU is committed to supporting its athletes through a dedicated dietary policy and scholarship programs. Special diet plans are provided to ensure that athletes receive the nutrition they need based on the demands of their specific sport. Additionally, the university offers sports scholarships to encourage talented individuals and raise the standard of sports across its programs. TMU regularly hosts important sporting events, giving students ample opportunities to compete, learn, and grow in a competitive environment.
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
                <img src="{{asset('/assets/img/infrastructure/sports/1.webp')}}" class="img-fluid" alt="Image 1">
            </div>
            <div class="col-md-4 img-grid p-2">
                <img src="{{asset('/assets/img/infrastructure/sports/2.webp')}}" class="img-fluid" alt="Image 1">
            </div>
            <div class="col-md-4 img-grid p-2">
                <img src="{{asset('/assets/img/infrastructure/sports/3.webp')}}" class="img-fluid" alt="Image 1">
            </div>
            <div class="col-md-4 img-grid p-2">
                <img src="{{asset('/assets/img/infrastructure/sports/4.webp')}}" class="img-fluid" alt="Image 1">
            </div>
            <div class="col-md-4 img-grid p-2">
                <img src="{{asset('/assets/img/infrastructure/sports/5.webp')}}" class="img-fluid" alt="Image 1">
            </div>
            <div class="col-md-4 img-grid p-2">
                <img src="{{asset('/assets/img/infrastructure/sports/6.webp')}}" class="img-fluid" alt="Image 1">
            </div>
            <div class="col-md-4 img-grid p-2">
                <img src="{{asset('/assets/img/infrastructure/sports/7.webp')}}" class="img-fluid" alt="Image 1">
            </div>
            <div class="col-md-4 img-grid p-2">
                <img src="{{asset('/assets/img/infrastructure/sports/8.webp')}}" class="img-fluid" alt="Image 1">
            </div>
            <div class="col-md-4 img-grid p-2">
                <img src="{{asset('/assets/img/infrastructure/sports/9.webp')}}" class="img-fluid" alt="Image 1">
            </div>
            
            
        </div>
    </div>
      <!-- Grid row -->
    </div>
  </div>
</section>
@endsection
