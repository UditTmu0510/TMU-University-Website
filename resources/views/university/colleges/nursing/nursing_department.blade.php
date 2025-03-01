@extends('layouts.university.colleges.nursing_with_sidebar')
@section('content')

        <div class="main-content">
                    <div class="container">
                        <h1 class="tmu-text-primary tmu-page-heading pt-md-5"><span> Departments </span><span></span></h1>
                        <div class="row col-mb-15">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <!-- Card -->
                                <div class="card shadow-sm college_departments ">
                                    <img src="{{asset('/assets/img/college_departments/nursing/1.jpg')}}" class="card-img-top"
                                        alt="...">
                                    <div class="card-body">

                                        <h4 class="mb-2">Department of Obstetrics & Gynaecological Nursing</h4>
                                    </div>
                                    <div
                                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                        <div>
                                        </div>
                                        <a href="{{route('nursing_gynaeo')}}" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                                            More</a>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="card shadow-sm college_departments">
                                    <img src="{{asset('/assets/img/college_departments/nursing/2.jpg')}}" class="card-img-top"
                                        alt="...">
                                    <div class="card-body">

                                        <h4 class="mb-2">Department of Medical Surgical Nursing
                                        </h4>
                                    </div>
                                    <div
                                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                        <div>
                                        </div>
                                        <a href="{{route('nursing.medical.surgical')}}" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                                            More</a>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="card shadow-sm college_departments">
                                    <img src="{{asset('/assets/img/college_departments/nursing/3.jpg')}}" class="card-img-top"
                                        alt="...">
                                    <div class="card-body">

                                        <h4 class="mb-2">Department of Community Health Nursing</h4>
                                    </div>
                                    <div
                                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                        <div>
                                        </div>
                                        <a href="{{route('nursing.community.health')}}" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                                            More</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="card shadow-sm college_departments">
                                    <img src="{{asset('/assets/img/college_departments/nursing/4.jpg')}}" class="card-img-top"
                                        alt="...">
                                    <div class="card-body">

                                        <h4 class="mb-2">Department of Paediatric <br> Nursing</h4>
                                    </div>
                                    <div
                                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                        <div>
                                        </div>
                                        <a href="{{route('nursing.paediatric')}}" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                                            More</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="card shadow-sm college_departments">
                                    <img src="{{asset('/assets/img/college_departments/nursing/5.jpg')}}" class="card-img-top"
                                        alt="...">
                                    <div class="card-body">

                                        <h4 class="mb-2">Department of Psychiatric Nursing</h4>
                                    </div>
                                    <div
                                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                        <div>
                                        </div>
                                        <a href="{{route('nursing.psychiatric')}}" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                                            More</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="card shadow-sm college_departments">
                                    <img src="{{asset('/assets/img/college_departments/nursing/6.jpg')}}" class="card-img-top"
                                        alt="...">
                                    <div class="card-body">

                                        <h4 class="mb-2">Department of Fundamental of Nursing</h4>
                                    </div>
                                    <div
                                        class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                                        <div>
                                        </div>
                                        <a href="{{route('nursing.fundamentals')}}" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
<!-- Bootstrap JS and dependencies -->

 
@endsection