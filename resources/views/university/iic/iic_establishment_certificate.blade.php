@extends('layouts.university.departments.iic_with_sidebar')
@section('content')

<div class="main-content">
    <div class="container">

        <div class="row mx-0">
            <h1 class="tmu-text-primary tmu-page-heading pt-md-5"><span>IIC Establishment</span> <span>Certificate</span></h1>

            <div class="container">
                <div class="row">
                    <h3 class="mb-0 ms-2 tmu-text-primary"><span>University</span></h3>
                    <div class="p-3" style="box-sizing:border-box;">
                        <img src="{{asset('/assets/img/department/iic/certificates/certificate1.jpg')}}" class="w-md-50"
                            alt="">
                    </div>
                </div>
                <div class="row pt-3">
                    <h3 class="mb-0 ms-2 tmu-text-primary"><span>Faculty of</span> <span>Engineering</span></h3>
                    <div class="col-md-6 p-3" style="box-sizing:border-box;">
                        <img src="{{asset('/assets/img/department/iic/certificates/engineering_certificate1.jpg')}}" alt="">
                    </div>

                    <div class="col-md-6 p-3" style="box-sizing:border-box;">
                        <img src="{{asset('/assets/img/department/iic/certificates/engineering_certificate1.jpg')}}" alt="">
                    </div>
                </div>

                <div class="row pt-3">
                    <h3 class="mb-0 ms-2 tmu-text-primary"><span>Medical College </span><span>& Research Centre</span></h3>
                    <div class="col-md-6 p-3" style="box-sizing:border-box;">
                        <img src="{{asset('/assets/img/department/iic/certificates/medical_certificate1.jpg')}}" alt="">
                    </div>

                    <div class="col-md-6 p-3" style="box-sizing:border-box;">
                        <img src="{{asset('/assets/img/department/iic/certificates/medical_certificate1.jpg')}}" alt="">
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
</div>

@endsection