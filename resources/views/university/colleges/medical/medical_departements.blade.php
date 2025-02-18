@extends('layouts.university.colleges.medical_with_sidebar')
@section('content')

<div class="main-content">
    <div class="container">
        <h1 class="tmu-text-primary tmu-page-heading pt-md-5"><span> Deaprtments</span><span> </span></h1>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 mb-3 ">
                <!-- Card -->
                <div class="card shadow-sm ">
                    <img src="{{asset('/assets/img/college_departments/medical/23.jpg')}}" class="card-img-top"
                        alt="...">
                    <div class="card-body">

                        <h4 class="mb-2">ANATOMY</h4>
                    </div>
                    <div
                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                        <div>
                        </div>
                        <a href="{{ route('medical.anatomy') }}" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                            More</a>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
                <!-- Card -->
                <div class="card shadow-sm">
                    <img src="{{asset('/assets/img/college_departments/medical/22.jpg')}}" class="card-img-top"
                        alt="...">
                    <div class="card-body">

                        <h4 class="mb-2">PHYSIOLOGY
                        </h4>
                    </div>
                    <div
                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                        <div>
                        </div>
                        <a href="{{ route('medical.physiology') }}" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                            More</a>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
                <!-- Card -->
                <div class="card shadow-sm">
                    <img src="{{asset('/assets/img/college_departments/medical/9.jpg')}}" class="card-img-top"
                        alt="...">
                    <div class="card-body">

                        <h4 class="mb-2">BIOCHEMISTRY</h4>
                    </div>
                    <div
                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                        <div>
                        </div>
                        <a href="{{ route('medical.biochemistry') }}" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                            More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
                <!-- Card -->
                <div class="card shadow-sm">
                    <img src="{{asset('/assets/img/college_departments/medical/15.jpg')}}" class="card-img-top"
                        alt="...">
                    <div class="card-body">

                        <h4 class="mb-2">PATHOLOGY</h4>
                    </div>
                    <div
                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                        <div>
                        </div>
                        <a href="{{ route('medical.pathology') }}" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                            More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
                <!-- Card -->
                <div class="card shadow-sm">
                    <img src="{{asset('/assets/img/college_departments/medical/10.jpg')}}" class="card-img-top"
                        alt="...">
                    <div class="card-body">

                        <h4 class="mb-2">MICROBIOLOGY</h4>
                    </div>
                    <div
                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                        <div>
                        </div>
                        <a href="{{ route('medical.microbiology') }}" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                            More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
                <!-- Card -->
                <div class="card shadow-sm">
                    <img src="{{asset('/assets/img/college_departments/medical/11.jpg')}}" class="card-img-top"
                        alt="...">
                    <div class="card-body">

                        <h4 class="mb-2">PHARMACOLOGY</h4>
                    </div>
                    <div
                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                        <div>
                        </div>
                        <a href="{{ route('medical.pharmacology') }}" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                            More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
                <!-- Card -->
                <div class="card shadow-sm">
                    <img src="{{asset('/assets/img/college_departments/medical/28.jpg')}}" class="card-img-top"
                        alt="...">
                    <div class="card-body">

                        <h4 class="mb-2">FORENSIC MEDICINE</h4>
                    </div>
                    <div
                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                        <div>
                        </div>
                        <a href="{{ route('medical.forensic.medicine') }}" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                            More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
                <!-- Card -->
                <div class="card shadow-sm">
                    <img src="{{asset('/assets/img/college_departments/medical/3.jpg')}}" class="card-img-top"
                        alt="...">
                    <div class="card-body">

                        <h4 class="mb-2">COMMUNITY MEDICINE</h4>
                    </div>
                    <div
                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                        <div>
                        </div>
                        <a href="{{ route('medical.community.medicine') }}" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                            More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
                <!-- Card -->
                <div class="card shadow-sm">
                    <img src="{{asset('/assets/img/college_departments/medical/21.jpg')}}" class="card-img-top"
                        alt="...">
                    <div class="card-body">

                        <h4 class="mb-2">GENERAL MEDICINE</h4>
                    </div>
                    <div
                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                        <div>
                        </div>
                        <a href="{{ route('medical.general.medicine') }}" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                            More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
                <!-- Card -->
                <div class="card shadow-sm">
                    <img src="{{asset('/assets/img/college_departments/medical/14.jpg')}}" class="card-img-top"
                        alt="...">
                    <div class="card-body">

                        <h4 class="mb-2">PULMONARY MEDICINE</h4>
                    </div>
                    <div
                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                        <div>
                        </div>
                        <a href="{{ route('medical.pulmonary.medicine') }}" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                            More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
                <!-- Card -->
                <div class="card shadow-sm">
                    <img src="{{asset('/assets/img/college_departments/medical/6.jpg')}}" class="card-img-top"
                        alt="...">
                    <div class="card-body">

                        <h4 class="mb-2">PSYCHIATRY</h4>
                    </div>
                    <div
                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                        <div>
                        </div>
                        <a href="{{ route('medical.psychiatry') }}" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                            More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
                <!-- Card -->
                <div class="card shadow-sm">
                    <img src="{{asset('/assets/img/college_departments/medical/2.jpg')}}" class="card-img-top"
                        alt="...">
                    <div class="card-body">

                        <h4 class="mb-2">DERMATOLOGY</h4>
                    </div>
                    <div
                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                        <div>
                        </div>
                        <a href="{{ route('medical.dermatology') }}" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                            More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
                <!-- Card -->
                <div class="card shadow-sm">
                    <img src="{{asset('/assets/img/college_departments/medical/4.jpg')}}" class="card-img-top"
                        alt="...">
                    <div class="card-body">

                        <h4 class="mb-2">PAEDIATRICS</h4>
                    </div>
                    <div
                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                        <div>
                        </div>
                        <a href="{{ route('medical.paediatrics') }}" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                            More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
                <!-- Card -->
                <div class="card shadow-sm">
                    <img src="{{asset('/assets/img/college_departments/medical/7.jpg')}}" class="card-img-top"
                        alt="...">
                    <div class="card-body">

                        <h4 class="mb-2">Anaesthesiology</h4>
                    </div>
                    <div
                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                        <div>
                        </div>
                        <a href="{{ route('medical.anesthesiology') }}" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                            More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
                <!-- Card -->
                <div class="card shadow-sm">
                    <img src="{{asset('/assets/img/college_departments/medical/27.jpg')}}" class="card-img-top"
                        alt="...">
                    <div class="card-body">

                        <h4 class="mb-2">RADIOLOGY</h4>
                    </div>
                    <div
                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                        <div>
                        </div>
                        <a href="{{ route('medical.radiology') }}" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                            More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
                <!-- Card -->
                <div class="card shadow-sm">
                    <img src="{{asset('/assets/img/college_departments/medical/17.jpg')}}" class="card-img-top"
                        alt="...">
                    <div class="card-body">

                        <h4 class="mb-2">GENERAL SURGERY</h4>
                    </div>
                    <div
                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                        <div>
                        </div>
                        <a href="{{ route('medical.general.surgery') }}" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                            More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
                <!-- Card -->
                <div class="card shadow-sm">
                    <img src="{{asset('/assets/img/college_departments/medical/19.jpg')}}" class="card-img-top"
                        alt="...">
                    <div class="card-body">

                        <h4 class="mb-2">ORTHOPAEDICS</h4>
                    </div>
                    <div
                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                        <div>
                        </div>
                        <a href="{{ route('medical.orthopaedics') }}" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                            More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
                <!-- Card -->
                <div class="card shadow-sm">
                    <img src="{{asset('/assets/img/college_departments/medical/16.jpg')}}" class="card-img-top"
                        alt="...">
                    <div class="card-body">

                        <h4 class="mb-2">ENT</h4>
                    </div>
                    <div
                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                        <div>
                        </div>
                        <a href="{{ route('medical.ent') }}" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                            More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
                <!-- Card -->
                <div class="card shadow-sm">
                    <img src="{{asset('/assets/img/college_departments/medical/18.jpg')}}" class="card-img-top"
                        alt="...">
                    <div class="card-body">

                        <h4 class="mb-2">OPHTHALMOLOGY</h4>
                    </div>
                    <div
                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                        <div>
                        </div>
                        <a href="{{ route('medical.ophthalmology') }}" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                            More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
                <!-- Card -->
                <div class="card shadow-sm">
                    <img src="{{asset('/assets/img/college_departments/medical/29.jpg')}}" class="card-img-top"
                        alt="...">
                    <div class="card-body">

                        <h4 class="mb-2">OBSTETRICS & GYNAECOLOGY</h4>
                    </div>
                    <div
                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                        <div>
                        </div>
                        <a href="{{ route('medical.obstetrics.gynaecology') }}" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                            More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection