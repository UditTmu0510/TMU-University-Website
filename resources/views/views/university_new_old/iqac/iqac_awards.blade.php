@extends('layouts.university.departments.iqac_with_sidebar')
@section('content')


<div class="main-content">
    <div class="container">
        <h1 class="tmu-text-primary tmu-page-heading mb-2 pt-md-5"><span> IQAC </span><span> Achievements </span></h1>
        <div class="col-md-12 high-pack">
            <div class="row impe-plac-row mb-4">
                <div class="col-lg-6 col-md-12 col-sm-6 text-center mb-0">
                    <div class="border-box-iqac">
                        <a class="colmd-4" href="{{asset('/assets/img/department/iqac/certificate/iqac_awards_2.webp')}}" data-lightbox="image" title=""
                            data-zoom="true">
                            <div class="grid-inner mb-2">
                                <img src="{{asset('/assets/img/department/iqac/certificate/iqac_awards_2.webp')}}" height="600" width="400" alt="Single Image">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark">
                                        <i class="uil uil-plus h4 mb-0" data-hover-animate="fadeIn"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <h3 class="tmu-text-primary mb-1"><span>Certificate of </span><span> Accreditation</span>
                        </h3>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-6 text-center mb-0">
                    <div class="border-box-iqac">
                        <a class="colmd-4" href="{{asset('/assets/img/department/iqac/certificate/iqac_awards_1.webp')}}" data-lightbox="image" title=""
                            data-zoom="true">
                            <div class="grid-inner mb-2">
                                <img src="{{asset('/assets/img/department/iqac/certificate/iqac_awards_1.webp')}}" height="600" width="400" alt="Single Image">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark">
                                        <i class="uil uil-plus h4 mb-0" data-hover-animate="fadeIn"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <h3 class="tmu-text-primary mb-1"><span>Certificate of </span><span> QMS</span></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


@endsection