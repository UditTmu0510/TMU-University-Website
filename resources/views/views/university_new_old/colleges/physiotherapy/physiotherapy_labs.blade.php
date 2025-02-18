@extends('layouts.university.colleges.physiotherapy_with_sidebar')
@section('content')

<div class="main-content">
    <div class="container">
        <h1 class="tmu-text-primary tmu-page-heading pt-md-5"><span>Laboratories </span><span> Fcailities</span>
        </h1>
        <div class="row col-mb-15">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <!-- Card -->
                <div class="card shadow-sm college_departments mb-4">
                    <img src="{{asset('/assets/img/labs/physiotherapy/electrotherapy/1.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">

                        <h4 class="mb-2">Electrotherapy Lab</h4>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                        <div>
                        </div>
                        <a href="{{route('physiotherapy.electro.lab')}}" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                            More</a>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card shadow-sm college_departments mb-4">
                    <img src="{{asset('/assets/img/labs/physiotherapy/exercise_therapy/1.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="mb-2">Execercise Therapy Lab</h4>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                        <div>
                        </div>
                        <a href="{{route('physio.exercise.lab')}}" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                            More</a>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card shadow-sm college_departments mb-4">
                    <img src="{{asset('/assets/img/labs/physiotherapy/research/1.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">

                        <h4 class="mb-2">Research Lab</h4>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                        <div>
                        </div>
                        <a href="{{route('physio.research.lab')}}" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
                            More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card shadow-sm college_departments mb-4">
                    <img src="{{asset('/assets/img/labs/physiotherapy/opd/1.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">

                        <h4 class="mb-2">Physiotherapy OPD.</h4>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center bg-white py-3">
                        <div>
                        </div>
                        <a href="{{route('physio.opd')}}" class="tmu-btn btn-4 m-0 py-1 px-2" style="font-size:12px">View
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