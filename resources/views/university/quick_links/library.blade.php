@extends('layouts.university.main')
@section('content')

<!-- <link rel="stylesheet" href="{{asset('/assets/css/tmu-testimonial.css')}}"> -->
<!-- <link rel="stylesheet" href="{{asset('/assets/css/tmimt.css')}}"> -->
<!-- <link rel="stylesheet" href="{{asset('/assets/css/college.css')}}"> -->





<section id="content">
  <div class="content-wrap py-0">

 <div class="container-fluid  my-0 px-2">
      <div class="row ps-4">
        <div class="col-md-6 pt-0 pt-md-4 ps-md-5 mb-4">
          <h1 class=" mt-5 mb-5 d-none d-md-block " style="font-weight:700!important; font-size:48px!important;">Welcome to Teerthanker Mahaveer <br> <span>Central Library and Knowledge Resourse Centre  </span></h1>
          <h1 class=" mt-5 mb-3 d-block d-md-none" style="color:#001055; text-transform: capitalize; font-weight:700!important; font-size:24px">Welcome to Teerthanker Mahaveer <br> <span>Central Library and Knowledge Resourse Centre  </span></h1>

        </div>
        <div class="col-12 col-md-6">
          <div class="pe-lg-4 position-relative p-0">
            <div style="z-index: 2;">
              <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/iXHRmCyHszY?si=BcZ5NOfT-V8ECc6z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="z-index: 2; margin:0;"></iframe> -->
              <img src="{{asset('assets/img/banner/library/library.webp')}}" alt="" class="p-0 m-0">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container my-3 d-none d-md-block">
            <div class="row justify-content-center">
                <div class="col-6 col-lg-3 px-1">
                    <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                        <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                            <span>302890</span>
                            <br>
                            <span class="d-block pt-1">Books</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 px-1">
                    <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                        <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                            <span>11768</span>
                            <br>
                            <span class="d-block pt-1">E-Books</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 px-1">
                    <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                        <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                            <span>343</span>
                            <br>
                            <span class="d-block pt-1">Journals</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 px-1">
                    <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                        <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                            <span>8825</span>
                            <br>
                            <span class="d-block pt-1">E-Journals</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-2 d-block d-md-none">
            <div id="under-banner-carouselExample" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#under-banner-carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#under-banner-carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-6">
                                <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                                    <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                                        <span>302890</span>
                                        <br>
                                        <span class="d-block pt-1">Books</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                                    <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                                        <span>11768</span>
                                        <br>
                                        <span class="d-block pt-1">E-Books</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-6">
                                <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                                    <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                                        <span>343</span>
                                        <br>
                                        <span class="d-block pt-1">Journals</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card text-center py-3 rounded-0 fw-semibold text-uppercase ls-1">
                                    <div class="card-body gap-4 text-tmu-primary under-banner-cards">
                                        <span>8825</span>
                                        <br>
                                        <span class="d-block pt-1">E-Journals</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="box-container">
            <div class="box">
            <h2 class="college-main-heading d-none d-md-block">Welcome to Central Library</h2>
            <h3 class="tmu-text-primary d-block d-md-none"><span>Welcome to the  </span><span> Central Library</span></h3>
                <div class="row">
                    <div class="col-12 px-2 px-md-5"> 
                        <p style="text-align: justify;">The Knowledge Resource Centre (KRC) of Teerthanker Mahaveer University consists of a Central Library with four major branches situated in different Academic Blocks. These are well established modern libraries catering to the information needs of the academic community. For a closer view of advances in technology, new discoveries in the fields of medical and engineering, These libraries have more than two lakh books on varied subjects and have subscription to print version of 289 national and international journals besides access to a host of e-journals. The University has subscribed the EBSCOhost, lexis Nexis and DELNET database providing access to full text research articles and sector specific reports in different disciplines.</p>
                        <div class="read-more-content mt-0">
                            <p style="text-align: justify;"> The Central Library is fully automated with KOHA open source library management software which connects all computers of the library and the different departments, colleges, and faculty of the University. Books are issued through bar-coded membership cards to the students and faculty members of the University from the circulation section. The books and other reading materials are issued to the students for reading room study from the issue counter. The Catalogue of the Central Library is available on internet/intranet for search. The CCTV cameras are installed to ensure safety of the Library materials. The Central Library is also equipped with Fire Alarm Control Panel and manually operated fire extinguishers. Approx. 1200 students, teachers and other members visit the Library almost every day. A register is maintained in the library and the visitor must show his valid identity card at the entrance.</p>
                        </div>
                        <a href="javascript:void(0);" class="tmu-btn btn-1 py-2 mt-4 read-more ms-2 mt-2" title="Read More">Read More</a>

                    </div>

                </div>
            </div>
        </div>
    

    <div class="container">
      <h2 Class="tmu-text-primary mb-2 mt-5"><span>Library </span></h2>
      <div class="row justify-content-center">
        <div class="col-lg-12 text-justify mb-2 mt-3">
          <p class="text-justify mb-2 mt-1">
          The Library Collection also includes a large section of expensive encyclopedias, reference books and a large number of text books related to the courses being run in the University. Besides this, the students/ faculty/ staff can access the resources of National Digital Library of India (NDL) which consist of > 7 lakh books, 3 lakh research papers, 95.000 + theses. Can be accessed at https://ndl.iitkgp.ac.in/
          </p>
        </div>
      </div>
    </div>

    <div class="container my-5 py-2">
            <ul class="nav nav-tabs justify-content-center py-2 gap-2 gap-md-5" id="myTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#Tab1" type="button" role="tab" aria-controls="Tab1" aria-selected="true"><i class="fas fa-lightbulb"></i> Key Highlights</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#Tab2" type="button" role="tab" aria-controls="Tab2" aria-selected="false"><i class="fas fa-briefcase"></i> Placement/Internship</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#Tab3" type="button" role="tab" aria-controls="Tab3" aria-selected="false"><i class="fas fa-book"></i> Curriculum</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#Tab4" type="button" role="tab" aria-controls="Tab4" aria-selected="false"><i class="fas fa-building"></i> Infrastructure</button>
                </li>
            </ul>
            <div class="tab-content second ps-5 px-md-5" id="myTabContent">
                <div class="tab-pane fade show active" id="Tab1" role="tabpanel" aria-labelledby="tab1-tab">
                    <h3>Key Highlights</h3>
                   
                    
                </div>
                <div class="tab-pane fade" id="Tab2" role="tabpanel" aria-labelledby="tab2-tab">
                    <h3>Placement/Internship</h3>
                    
                </div>
                <div class="tab-pane fade" id="Tab3" role="tabpanel" aria-labelledby="tab3-tab">
                    <h3>Curriculum</h3>
                    
                </div>
                <div class="tab-pane fade" id="Tab4" role="tabpanel" aria-labelledby="tab4-tab">
                    <h3>Infrastructure</h3>
                    
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
                <img src="{{asset('/assets/img/infrastructure/library/1.webp')}}" class="img-fluid" alt="Image 1">
            </div>
            <div class="col-md-4 img-grid p-2">
                <img src="{{asset('/assets/img/infrastructure/library/2.webp')}}" class="img-fluid" alt="Image 1">
            </div>
            <div class="col-md-4 img-grid p-2">
                <img src="{{asset('/assets/img/infrastructure/library/3.webp')}}" class="img-fluid" alt="Image 1">
            </div>
            <div class="col-md-4 img-grid p-2">
                <img src="{{asset('/assets/img/infrastructure/library/4.webp')}}" class="img-fluid" alt="Image 1">
            </div>
            <div class="col-md-4 img-grid p-2">
                <img src="{{asset('/assets/img/infrastructure/library/5.webp')}}" class="img-fluid" alt="Image 1">
            </div>
            <div class="col-md-4 img-grid p-2">
                <img src="{{asset('/assets/img/infrastructure/library/6.webp')}}" class="img-fluid" alt="Image 1">
            </div>
            <div class="col-md-4 img-grid p-2">
                <img src="{{asset('/assets/img/infrastructure/library/8.webp')}}" class="img-fluid" alt="Image 1">
            </div>

            
        </div>
    </div>
      <!-- Grid row -->
    </div>
  </div>
</section>
@endsection
