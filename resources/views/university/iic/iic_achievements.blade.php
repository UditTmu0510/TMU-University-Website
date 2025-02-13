@extends('layouts.university.departments.iic_with_sidebar')
@section('content')


<div class="main-content">
    <div class="container">

        <div class="row mx-0">
            <h1 class="tmu-text-primary tmu-page-heading"><span>IIC </span><span>Achievements</span></h1>

            <div class="container">
                <div class="row">
                    <h3 class="mb-0 ms-2 tmu-text-primary pt-3"><span>University</span></h3>
                    <!-- <div class="col-6 col-lg-4 p-4" style="box-sizing:border-box;">
                        <img src="{{asset('/assets/img/department/iic/certificates/certificate1.jpg')}}" alt="">
                    </div>

                    <div class="col-6 col-lg-4 p-4" style="box-sizing:border-box;">
                        <img src="{{asset('/assets/img/department/iic/certificates/certificate5.jpg')}}" alt="">
                    </div>

                    <div class="col-6 col-lg-4 p-4" style="box-sizing:border-box;">
                        <img src="{{asset('/assets/img/department/iic/certificates/certificate6.jpg')}}" alt="">
                    </div>

                    <div class="col-6 col-lg-4 p-4" style="box-sizing:border-box;">
                        <img src="{{asset('/assets/img/department/iic/certificates/certificate7.jpg')}}" alt="">
                    </div>

                    <div class="col-6 col-lg-4 p-4" style="box-sizing:border-box;">
                        <img src="{{asset('/assets/img/department/iic/certificates/certificate8.jpg')}}" alt="">
                    </div> -->


                    <div class="row" data-lightbox="gallery">
                        <div class="col-6 col-lg-4 p-4" style="box-sizing:border-box;">
                            <a href="{{ asset('/assets/img/department/iic/certificates/certificate1.jpg') }}" data-lightbox="gallery-item">
                                <img src="{{ asset('/assets/img/department/iic/certificates/certificate1.jpg') }}" alt="">
                            </a>
                        </div>

                        <div class="col-6 col-lg-4 p-4" style="box-sizing:border-box;">
                            <a href="{{ asset('/assets/img/department/iic/certificates/certificate5.jpg') }}" data-lightbox="gallery-item">
                                <img src="{{ asset('/assets/img/department/iic/certificates/certificate5.jpg') }}" alt="">
                            </a>
                        </div>

                        <div class="col-6 col-lg-4 p-4" style="box-sizing:border-box;">
                            <a href="{{ asset('/assets/img/department/iic/certificates/certificate6.jpg') }}" data-lightbox="gallery-item">
                                <img src="{{ asset('/assets/img/department/iic/certificates/certificate6.jpg') }}" alt="">
                            </a>
                        </div>

                        <div class="col-6 col-lg-4 p-4" style="box-sizing:border-box;">
                            <a href="{{ asset('/assets/img/department/iic/certificates/certificate7.jpg') }}" data-lightbox="gallery-item">
                                <img src="{{ asset('/assets/img/department/iic/certificates/certificate7.jpg') }}" alt="">
                            </a>
                        </div>

                        <div class="col-6 col-lg-4 p-4" style="box-sizing:border-box;">
                            <a href="{{ asset('/assets/img/department/iic/certificates/certificate8.jpg') }}" data-lightbox="gallery-item">
                                <img src="{{ asset('/assets/img/department/iic/certificates/certificate8.jpg') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <h3 class="mb-0 ms-2 tmu-text-primary pt-3"><span>Faculty of</span> <span>Engineering</span></h3>
                    <!-- <div class="col-md-4 p-4" style="box-sizing:border-box;">
                        <img src="{{asset('/assets/img/department/iic/achievements/coe/amar.jpg')}}" alt="">
                    </div>

                    <div class="col-md-4 p-4" style="box-sizing:border-box;">
                        <img src="{{asset('/assets/img/department/iic/achievements/coe/arjav.jpg')}}" alt="">
                    </div>

                    <div class="col-md-4 p-4" style="box-sizing:border-box;">
                        <img src="{{asset('/assets/img/department/iic/achievements/coe/kunal.jpg')}}" alt="">
                    </div>

                    <div class="col-md-4 p-4" style="box-sizing:border-box;">
                        <img src="{{asset('/assets/img/department/iic/achievements/coe/nancy.jpg')}}" alt="">
                    </div>
                    <div class="col-md-4 p-4" style="box-sizing:border-box;">
                        <img src="{{asset('/assets/img/department/iic/achievements/coe/reetesh.jpg')}}" alt="">
                    </div>
                    <div class="col-md-4 p-4" style="box-sizing:border-box;">
                        <img src="{{asset('/assets/img/department/iic/achievements/coe/varnit.jpg')}}" alt="">
                    </div>
                    <div class="col-md-4 p-4" style="box-sizing:border-box;">
                        <img src="{{asset('/assets/img/department/iic/achievements/coe/mentor_certificate_1.jpg')}}" alt="">
                    </div>
                    <div class="col-md-4 p-4" style="box-sizing:border-box;">
                        <img src="{{asset('/assets/img/department/iic/achievements/coe/mentor_certificate_2.jpg')}}" alt="">
                    </div> -->

                    <div class="row" data-lightbox="gallery">
                        <div class="col-6 col-lg-4 col-lg-4 p-4" style="box-sizing:border-box;">
                            <div class="position-relative">
                                <img class="d-block w-100" src="{{ asset('/assets/img/department/iic/achievements/coe/amar.jpg') }}" alt="">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark justify-content-end align-items-end" data-hover-animate="fadeIn">
                                        <a href="{{ asset('/assets/img/department/iic/achievements/coe/amar.jpg') }}" class="overlay-trigger-icon size-sm bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item">
                                            <i class="uil uil-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-lg-4 col-lg-4 p-4" style="box-sizing:border-box;">
                            <div class="position-relative">
                                <img class="d-block w-100" src="{{ asset('/assets/img/department/iic/achievements/coe/arjav.jpg') }}" alt="">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark justify-content-end align-items-end" data-hover-animate="fadeIn">
                                        <a href="{{ asset('/assets/img/department/iic/achievements/coe/arjav.jpg') }}" class="overlay-trigger-icon size-sm bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item">
                                            <i class="uil uil-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-lg-4 col-lg-4 p-4" style="box-sizing:border-box;">
                            <div class="position-relative">
                                <img class="d-block w-100" src="{{ asset('/assets/img/department/iic/achievements/coe/kunal.jpg') }}" alt="">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark justify-content-end align-items-end" data-hover-animate="fadeIn">
                                        <a href="{{ asset('/assets/img/department/iic/achievements/coe/kunal.jpg') }}" class="overlay-trigger-icon size-sm bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item">
                                            <i class="uil uil-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-lg-4 col-lg-4 p-4" style="box-sizing:border-box;">
                            <div class="position-relative">
                                <img class="d-block w-100" src="{{ asset('/assets/img/department/iic/achievements/coe/nancy.jpg') }}" alt="">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark justify-content-end align-items-end" data-hover-animate="fadeIn">
                                        <a href="{{ asset('/assets/img/department/iic/achievements/coe/nancy.jpg') }}" class="overlay-trigger-icon size-sm bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item">
                                            <i class="uil uil-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-lg-4 col-lg-4 p-4" style="box-sizing:border-box;">
                            <div class="position-relative">
                                <img class="d-block w-100" src="{{ asset('/assets/img/department/iic/achievements/coe/reetesh.jpg') }}" alt="">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark justify-content-end align-items-end" data-hover-animate="fadeIn">
                                        <a href="{{ asset('/assets/img/department/iic/achievements/coe/reetesh.jpg') }}" class="overlay-trigger-icon size-sm bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item">
                                            <i class="uil uil-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-lg-4 col-lg-4 p-4" style="box-sizing:border-box;">
                            <div class="position-relative">
                                <img class="d-block w-100" src="{{ asset('/assets/img/department/iic/achievements/coe/varnit.jpg') }}" alt="">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark justify-content-end align-items-end" data-hover-animate="fadeIn">
                                        <a href="{{ asset('/assets/img/department/iic/achievements/coe/varnit.jpg') }}" class="overlay-trigger-icon size-sm bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item">
                                            <i class="uil uil-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-lg-4 col-lg-4 p-4" style="box-sizing:border-box;">
                            <div class="position-relative">
                                <img class="d-block w-100" src="{{ asset('/assets/img/department/iic/achievements/coe/mentor_certificate_1.jpg') }}" alt="">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark justify-content-end align-items-end" data-hover-animate="fadeIn">
                                        <a href="{{ asset('/assets/img/department/iic/achievements/coe/mentor_certificate_1.jpg') }}" class="overlay-trigger-icon size-sm bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item">
                                            <i class="uil uil-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-lg-4 col-lg-4 p-4" style="box-sizing:border-box;">
                            <div class="position-relative">
                                <img class="d-block w-100" src="{{ asset('/assets/img/department/iic/achievements/coe/mentor_certificate_2.jpg') }}" alt="">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark justify-content-end align-items-end" data-hover-animate="fadeIn">
                                        <a href="{{ asset('/assets/img/department/iic/achievements/coe/mentor_certificate_2.jpg') }}" class="overlay-trigger-icon size-sm bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item">
                                            <i class="uil uil-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>






                </div>
                <div class="row">
                    <h3 class="mb-0 ms-2 tmu-text-primary pt-3"><span>College of Computing</span> <span>Sciences & IT</span></h3>
                    <!-- <div class="col-6 col-lg-4 col-lg-4 p-4" style="box-sizing:border-box;">
                        <img src="{{asset('/assets/img/department/iic/achievements/ccsit/aarjav.jpg')}}" alt="">
                    </div>

                    <div class="col-6 col-lg-4 col-lg-4 p-4" style="box-sizing:border-box;">
                        <img src="{{asset('/assets/img/department/iic/achievements/ccsit/mohit.jpg')}}" alt="">
                    </div>

                    <div class="col-6 col-lg-4 col-lg-4 p-4" style="box-sizing:border-box;">
                        <img src="{{asset('/assets/img/department/iic/achievements/ccsit/naman.jpg')}}" alt="">
                    </div>

                    <div class="col-6 col-lg-4 col-lg-4 p-4" style="box-sizing:border-box;">
                        <img src="{{asset('/assets/img/department/iic/achievements/ccsit/prerna.jpg')}}" alt="">
                    </div>
                    <div class="col-6 col-lg-4 col-lg-4 p-4" style="box-sizing:border-box;">
                        <img src="{{asset('/assets/img/department/iic/achievements/ccsit/pushpane.jpg')}}" alt="">
                    </div>
                    <div class="col-6 col-lg-4 col-lg-4 p-4" style="box-sizing:border-box;">
                        <img src="{{asset('/assets/img/department/iic/achievements/ccsit/srishty.jpg')}}" alt="">
                    </div>
                    <div class="col-6 col-lg-4 col-lg-4 p-4" style="box-sizing:border-box;">
                        <img src="{{asset('/assets/img/department/iic/achievements/ccsit/mentor_certificate_1.jpg')}}" alt="">
                    </div>
                    <div class="col-6 col-lg-4 col-lg-4 p-4" style="box-sizing:border-box;">
                        <img src="{{asset('/assets/img/department/iic/achievements/ccsit/mentor_certificate_2.jpg')}}" alt="">
                    </div> -->


                    <div class="row" data-lightbox="gallery">
                        <div class="col-6 col-lg-4 col-lg-4 p-4" style="box-sizing:border-box;">
                            <div class="position-relative">
                                <img class="d-block w-100" src="{{ asset('/assets/img/department/iic/achievements/ccsit/aarjav.jpg') }}" alt="">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark justify-content-end align-items-end" data-hover-animate="fadeIn">
                                        <a href="{{ asset('/assets/img/department/iic/achievements/ccsit/aarjav.jpg') }}" class="overlay-trigger-icon size-sm bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item">
                                            <i class="uil uil-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-lg-4 col-lg-4 p-4" style="box-sizing:border-box;">
                            <div class="position-relative">
                                <img class="d-block w-100" src="{{ asset('/assets/img/department/iic/achievements/ccsit/mohit.jpg') }}" alt="">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark justify-content-end align-items-end" data-hover-animate="fadeIn">
                                        <a href="{{ asset('/assets/img/department/iic/achievements/ccsit/mohit.jpg') }}" class="overlay-trigger-icon size-sm bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item">
                                            <i class="uil uil-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-lg-4 col-lg-4 p-4" style="box-sizing:border-box;">
                            <div class="position-relative">
                                <img class="d-block w-100" src="{{ asset('/assets/img/department/iic/achievements/ccsit/naman.jpg') }}" alt="">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark justify-content-end align-items-end" data-hover-animate="fadeIn">
                                        <a href="{{ asset('/assets/img/department/iic/achievements/ccsit/naman.jpg') }}" class="overlay-trigger-icon size-sm bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item">
                                            <i class="uil uil-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-lg-4 col-lg-4 p-4" style="box-sizing:border-box;">
                            <div class="position-relative">
                                <img class="d-block w-100" src="{{ asset('/assets/img/department/iic/achievements/ccsit/prerna.jpg') }}" alt="">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark justify-content-end align-items-end" data-hover-animate="fadeIn">
                                        <a href="{{ asset('/assets/img/department/iic/achievements/ccsit/prerna.jpg') }}" class="overlay-trigger-icon size-sm bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item">
                                            <i class="uil uil-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-lg-4 col-lg-4 p-4" style="box-sizing:border-box;">
                            <div class="position-relative">
                                <img class="d-block w-100" src="{{ asset('/assets/img/department/iic/achievements/ccsit/pushpane.jpg') }}" alt="">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark justify-content-end align-items-end" data-hover-animate="fadeIn">
                                        <a href="{{ asset('/assets/img/department/iic/achievements/ccsit/pushpane.jpg') }}" class="overlay-trigger-icon size-sm bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item">
                                            <i class="uil uil-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-lg-4 col-lg-4 p-4" style="box-sizing:border-box;">
                            <div class="position-relative">
                                <img class="d-block w-100" src="{{ asset('/assets/img/department/iic/achievements/ccsit/srishty.jpg') }}" alt="">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark justify-content-end align-items-end" data-hover-animate="fadeIn">
                                        <a href="{{ asset('/assets/img/department/iic/achievements/ccsit/srishty.jpg') }}" class="overlay-trigger-icon size-sm bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item">
                                            <i class="uil uil-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-lg-4 col-lg-4 p-4" style="box-sizing:border-box;">
                            <div class="position-relative">
                                <img class="d-block w-100" src="{{ asset('/assets/img/department/iic/achievements/ccsit/mentor_certificate_1.jpg') }}" alt="">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark justify-content-end align-items-end" data-hover-animate="fadeIn">
                                        <a href="{{ asset('/assets/img/department/iic/achievements/ccsit/mentor_certificate_1.jpg') }}" class="overlay-trigger-icon size-sm bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item">
                                            <i class="uil uil-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-lg-4 col-lg-4 p-4" style="box-sizing:border-box;">
                            <div class="position-relative">
                                <img class="d-block w-100" src="{{ asset('/assets/img/department/iic/achievements/ccsit/mentor_certificate_2.jpg') }}" alt="">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark justify-content-end align-items-end" data-hover-animate="fadeIn">
                                        <a href="{{ asset('/assets/img/department/iic/achievements/ccsit/mentor_certificate_2.jpg') }}" class="overlay-trigger-icon size-sm bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item">
                                            <i class="uil uil-plus"></i>
                                        </a>
                                    </div>
                                </div>
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
