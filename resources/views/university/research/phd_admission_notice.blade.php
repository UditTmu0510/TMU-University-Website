@extends('layouts.university.departments.research_cell_with_sidebar')
@section('content')


<div class="main-content">
    <div class="container">

        <div class="row mx-0">
            <h1 class="tmu-text-primary tmu-page-heading pt-md-5">
                <span>Admission Notice for </span>
                <span style="text-transform:none;">Ph.D. Programme</span>
            </h1>

            <div class="col-md-6 mb-3">
                <div class="card">
                    <a href="{{route('phd.ordinance')}}" class="d-block w-100">
                        <img src="{{ asset('assets/img/research/admission-notice/PhD_JULY_ADVT_2025.jpg') }}"
                            class="card-img-top img-fluid" alt="PhD July Admission 2025"
                           style="height: 100%; object-fit: cover;" alt="...">
                    </a>
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <!-- <div class="card">
                    <a href="#" class="d-block w-100">
                        <img src="{{ asset('assets/img/research/admission-notice/Ph.D-ADVT-2025-law.jpg') }}"
                            class="card-img-top img-fluid" alt="PhD Law Admission 2025"
                           style="height: 100%; object-fit: cover;" alt="...">
                    </a>
                </div> -->
            </div>

            <!-- <div class="col-md-6 mb-3">
                <div class="card">
                    <a href="#" class="d-block w-100">
                        <img src="{{ asset('assets/img/research/admission-notice/PhD-ADVT-2025-decemebr.jpg') }}"
                            class="card-img-top img-fluid" alt="PhD December Admission 2025"
                           style="height: 100%; object-fit: cover;" alt="...">
                    </a>
                </div>
            </div> -->
        </div>


    </div>
</div>
</div>


@endsection