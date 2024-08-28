@extends('layouts.university.colleges.physical_education_with_sidebar')
@section('content')

<div class="main-content mt-3 mt-sm-0 pt-2 pt-sm-5">
        <div class="container">
            <div class="row">
                    <div class="main-content mt-3 mt-sm-0 pt-2 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center gutter-10" data-lightbox="gallery">
			<div class="col-md-3 col-sm-6  ">
                            <div class="position-relative">
                                <img class="d-block w-100" src="{{asset('/assets/img/gallery/collegegallery/physical_education/1.jpg')}}"
                                    alt="Gallery Thumb 2">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark justify-content-end align-items-end"
                                        data-hover-animate="fadeIn">
                                        <a href="{{asset('/assets/img/gallery/collegegallery/physical_education/1.jpg')}}"
                                            class="overlay-trigger-icon size-sm bg-light text-dark"
                                            data-hover-animate="fadeInDownSmall"
                                            data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"
                                            data-lightbox="gallery-item"><i
                                                class="uil uil-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6  ">
                            <div class="position-relative">
                                <img class="d-block w-100" src="{{asset('/assets/img/gallery/collegegallery/physical_education/2.jpg')}}"
                                    alt="Gallery Thumb 2">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark justify-content-end align-items-end"
                                        data-hover-animate="fadeIn">
                                        <a href="{{asset('/assets/img/gallery/collegegallery/physical_education/2.jpg')}}"
                                            class="overlay-trigger-icon size-sm bg-light text-dark"
                                            data-hover-animate="fadeInDownSmall"
                                            data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"
                                            data-lightbox="gallery-item"><i
                                                class="uil uil-plus"></i></a>
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
<!-- Bootstrap JS and dependencies -->
@endsection