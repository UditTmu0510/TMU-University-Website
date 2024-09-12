@extends('layouts.university.main')
@section('content')





<section id="content">
  <div class="content-wrap py-0">

    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{asset('/assets/img/2.jpg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="{{asset('/assets/img/2.jpg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="{{asset('/assets/img/2.jpg')}}" class="d-block w-100" alt="...">
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
      <h2 Class="tmu-text-primary mb-2 mt-5"><span>Campus </span><span> View</span></h2>
      <div class="row justify-content-center">
        <div class="col-lg-12 text-justify mb-2 mt-3">
          <p class="text-justify mb-2 mt-1">TMU University offers a unique dining experience that caters to
            the diverse gastronomic preferences of its staff and students with a wide variety of booths and
            culinary options. The campus's thriving culinary scene includes over 20 different vendors,
            ensuring that there is something for everyone.</p>
          <p class="text-justify mb-2 mt-1">Students and staff at TMU University can enjoy a wide range of
            delectable cuisines. The food court offers an array of dishes, ranging from classic Western fare
            like spaghetti, sandwiches, and pizza to traditional Indian cuisine such as biryanis, dosas, and
            chaats. Additionally, there are street food stands serving mouthwatering snacks and drinks,
            adding to the vibrant campus life.</p>
          <p class="text-justify mb-2 mt-1">The university's dedication to providing a satisfying culinary
            experience is evident in its focus on quality and flavor. TMU University's culinary scene,
            featuring numerous vendors and a diverse menu, significantly enhances campus life and ensures
            that the gastronomic tastes of its community are well-catered for.</p>
        </div>
      </div>
    </div>

    <div class="container mb-4">
      <div class="mb-3 mt-2">
        <h3 class="tmu-text-primary ps-2"><span>Cafeteria at </span><span> TMU University</span></h3>
      </div>
      <div class="container mt-2 px-0">
        <!-- Image Grid for Desktop and Tablet -->
        <div class="d-flex flex-wrap">
            <div class="col-md-4 img-grid p-2">
                <img src="https://via.placeholder.com/600x400" class="img-fluid" alt="Image 1">
            </div>
            <div class="col-md-4 img-grid p-2">
                <img src="https://via.placeholder.com/600x400" class="img-fluid" alt="Image 1">
            </div>
            <div class="col-md-4 img-grid p-2">
                <img src="https://via.placeholder.com/600x400" class="img-fluid" alt="Image 1">
            </div>
            <div class="col-md-4 img-grid p-2">
                <img src="https://via.placeholder.com/600x400" class="img-fluid" alt="Image 1">
            </div>
            <div class="col-md-4 img-grid p-2">
                <img src="https://via.placeholder.com/600x400" class="img-fluid" alt="Image 1">
            </div>
            <div class="col-md-4 img-grid p-2">
                <img src="https://via.placeholder.com/600x400" class="img-fluid" alt="Image 1">
            </div>
            
        </div>
    </div>
      <!-- Grid row -->
    </div>
  </div>
</section>
@endsection
