@extends('layouts.university.main')
@section('content')





<section id="content">
  <div class="content-wrap py-0">

    
  <div class="container-fluid  my-0 px-2">
			<div class="row ps-4">
				<div class="col-md-6 pt-0 pt-md-4 ps-md-5 mb-4">
					<h1 class=" mt-5 mb-5 d-none d-md-block " style="font-weight:700!important; font-size:48px!important;" >Welcome to <br> <span >Teerthanker Mahaveer Jinalaya </span></h1>
					<h1 class=" mt-5 mb-3 d-block d-md-none" style="color:#001055; text-transform: capitalize; font-weight:700!important; font-size:24px">Welcome to <span >Teerthanker Mahaveer Jinalaya </span></h1>
					
				</div>
				<div class="col-12 col-md-6">
					<div class="pe-lg-4 position-relative p-0">
						<div style="z-index: 2;">
							<!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/iXHRmCyHszY?si=BcZ5NOfT-V8ECc6z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="z-index: 2; margin:0;"></iframe> -->
							<img src="{{asset('assets/img/banner/jain_studies/jain_studies.webp')}}" alt="" class="p-0 m-0">
						</div>
					</div>
				</div>
			</div>
		</div>
  

    <div class="container">
      <h2 Class="tmu-text-primary mb-2 mt-5"><span> Jinalaya</span></h2>
      <div class="row justify-content-center">
        <div class="col-lg-12 text-justify mb-2 mt-3">
          <p class="text-justify mb-2 mt-1">
          The TMU Jinalaya is a serene and spiritually enriching temple on campus, dedicated to promoting peace and inner reflection. Surrounded by tranquil gardens, it offers a quiet space for meditation and worship, welcoming all who seek solace and spiritual growth. The Jinalaya is a symbol of the university’s commitment to holistic development, blending education with spiritual well-being.        
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
                <img src="{{asset('/assets/img/infrastructure/jinalaya/1.webp')}}" class="img-fluid" alt="Image 1">
            </div>
            <div class="col-md-4 img-grid p-2">
                <img src="{{asset('/assets/img/infrastructure/jinalaya/2.webp')}}" class="img-fluid" alt="Image 1">
            </div>
            <div class="col-md-4 img-grid p-2">
                <img src="{{asset('/assets/img/infrastructure/jinalaya/3.webp')}}" class="img-fluid" alt="Image 1">
            </div>
            <div class="col-md-4 img-grid p-2">
                <img src="{{asset('/assets/img/infrastructure/jinalaya/4.webp')}}" class="img-fluid" alt="Image 1">
            </div>
            <div class="col-md-4 img-grid p-2">
                <img src="{{asset('/assets/img/infrastructure/jinalaya/5.webp')}}" class="img-fluid" alt="Image 1">
            </div>
            <div class="col-md-4 img-grid p-2">
                <img src="{{asset('/assets/img/infrastructure/jinalaya/6.webp')}}" class="img-fluid" alt="Image 1">
            </div>
            
            
        </div>
    </div>
      <!-- Grid row -->
    </div>
  </div>
</section>
@endsection
