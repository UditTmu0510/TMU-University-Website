@extends('layouts.university.departments.alumni_with_sidebar')
@section('content')


<div class="main-content">
    <div class="container">
        <h1 class="tmu-text-primary tmu-page-heading"><span>TMU Alumni</span><span> Association Certificate</span></h1>
        <div class="col-md-12 high-pack">
            <div class="row impe-plac-row mb-4 "><center>
                <div class="col-lg-6 col-md-12 col-sm-6 text-center mb-0">
                    <div class="border-box-iqac text-center">
                        <a class="colmd-4" href="{{asset('/assets/img/department/alumni/certificate/certificate.jpg')}}" data-lightbox="image" title=""
                            data-zoom="true">
                            <div class="grid-inner mb-2">
                                <img src="{{asset('/assets/img/department/alumni/certificate/certificate.jpg')}}" height="600" width="400" alt="Single Image">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark">
                                        <i class="uil uil-plus h4 mb-0" data-hover-animate="fadeIn"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <h3 class="tmu-text-primary mb-1"><span>Certificate of </span><span> Accreditation</span>
                        </h3>
                    </div></center>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
@endsection