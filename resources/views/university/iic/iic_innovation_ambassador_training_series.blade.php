@extends('layouts.university.departments.iic_with_sidebar')
@section('content')

<div class="main-content">
    <div class="container">

        <div class="row mx-0">
            <h1 class="tmu-text-primary tmu-page-heading pt-md-5"><span>Ambassador</span> <span>Training Series</span></h1>

            <div class="container">
                <div class="row">
                    <h3 class="mb-0 ms-2 tmu-text-primary"><span>Faculty of </span> <span> Engineering</span></h3>
                    <div class="col-md-4 p-4" style="box-sizing:border-box;">
                        <img src="{{asset('/assets/img/department/iic/ambassador_certificates/ajay_rastogi.jpg')}}" alt="">
                    </div>

                    <div class="col-md-4 p-4" style="box-sizing:border-box;">
                        <img src="{{asset('/assets/img/department/iic/ambassador_certificates/gulista_khan.jpg')}}" alt="">
                    </div>

                    <div class="col-md-4 p-4" style="box-sizing:border-box;">
                        <img src="{{asset('/assets/img/department/iic/ambassador_certificates/pradeep_kr_verma.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection