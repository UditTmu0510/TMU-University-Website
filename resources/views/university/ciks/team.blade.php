@extends('layouts.university.departments.ciks_with_sidebar')
@section('content')

<div class="main-content">
    <div class="container">

        <h1 class="tmu-text-primary tmu-page-heading pt-md-5"><span>Our</span><span> Team</span></h1>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
                <div class="col-sm-6 col-lg-4 col-xl-4 col-md-6 col-xs-12">
                    <div class="card card-animation admin-cards">
                        <img src="{{asset('/assets/img/journal/user.jpg')}}" class="card-img-top" alt="Dr. Anupam Jain">
                        <div class="card-body text-center">
                            <h5 class="card-title tmu-text-primary fw-bold"><span>Dr. Anupam Jain</span><span></span></h5>
                            <p class="card-text tmu-text-primary fs-14 fw-bold "><span></span><span>Professor Chair, CIKS</span></p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 col-xl-4 col-md-6 col-xs-12">
                    <div class="card card-animation admin-cards">
                        <img src="{{asset('/assets/img/ciks/team/1.jpg')}}" class="card-img-top" alt="Dr. Alka Agarwal">
                        <div class="card-body text-center">
                            <h5 class="card-title tmu-text-primary fw-bold"><span>Dr. Alka Agarwal</span><span></span></h5>
                            <p class="card-text tmu-text-primary fs-14 fw-bold "><span></span><span>Centre Coordinator</span></p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 col-xl-4 col-md-6 col-xs-12">
                    <div class="card card-animation admin-cards">
                        <img src="{{asset('/assets/img/journal/user.jpg')}}" class="card-img-top" alt="Dr. Vivek Pathak">
                        <div class="card-body text-center">
                            <h5 class="card-title tmu-text-primary fw-bold"><span>Dr. Vivek Pathak</span><span></span></h5>
                            <p class="card-text tmu-text-primary fs-14 fw-bold"><span></span><span>Assistant Professor</span></p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 col-xl-4 col-md-6 col-xs-12">
                    <div class="card card-animation admin-cards">
                        <img src="{{asset('/assets/img/journal/user.jpg')}}" class="card-img-top" alt="Dr. Amisha Singh">
                        <div class="card-body text-center">
                            <h5 class="card-title tmu-text-primary fw-bold"><span>Dr. Amisha Singh</span><span></span></h5>
                            <p class="card-text tmu-text-primary fs-14 fw-bold "><span></span><span>Assistant Professor</span></p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 col-xl-4 col-md-6 col-xs-12">
                    <div class="card card-animation admin-cards">
                        <img src="{{asset('/assets/img/journal/user.jpg')}}" class="card-img-top" alt="Mrs. Jyoti Sharma">
                        <div class="card-body text-center">
                            <h5 class="card-title tmu-text-primary fw-bold"><span>Mrs. Jyoti Sharma</span><span></span></h5>
                            <p class="card-text tmu-text-primary fs-14 fw-bold"><span></span><span>Office Assistant </span></p>
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