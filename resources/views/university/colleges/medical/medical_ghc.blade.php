@extends('layouts.university.colleges.medical_with_sidebar')
@section('content')


<div class="main-content">
    <div class="container">
        <h1 class="tmu-text-primary tmu-page-heading"><span>Gender Harassment </span><span>
                Committee</span>
        </h1>

        <div class="row">
            <div class="table-responsive mb-4">
                <table class="table table-bordered table-striped table-condensed mb-none">
                    <thead>
                        <tr>
                            <th class="text-center">Sl. No.</th>
                            <th>Designation</th>
                            <th>Name</th>
                            <th>Contact No.</th>
                            <th>E-Mail ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>Chairman</td>
                            <td>Dr. Manpreet Kaur Tehalia, Prof. &amp; HOD OBG</td>
                            <td>+91-8867033222</td>
                            <td>dr_mjtehalia@yahoo.co.in</td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td>Member Secretary</td>
                            <td>Dr. Prerana Gupta, Prof. Psychiatry</td>
                            <td>+91-8979304127</td>
                            <td>preranagupta1978@gmail.com</td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td>Member</td>
                            <td>Dr. Rupa R. Singh Bhandari, Prof. & HOD Paediatrics</td>
                            <td>+91-8506064271</td>
                            <td> drruparsingh.medical@tmu.ac.in</td>
                        </tr>
                        <tr>
                            <td class="text-center">4</td>
                            <td>Member</td>
                            <td>Dr. Deepika Puri, Prof. Physiology</td>
                            <td>+91-9927007999</td>
                            <td>Deepikapuri999@outlook.com</td>
                        </tr>
                        <tr>
                            <td class="text-center">5</td>
                            <td>Member</td>
                            <td>Hon’ble D.K. Jain, Retired Additional District Judge</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="row mb-4">
                <hr class="horizontal-line">
                <button class="careers-accordion">HANDBOOK on Sexual Harassment of Woman at Workplace
                    <span class="icon">+</span></button>
                <div class="panel active">
                    <div class="col-md-12">
                        <div class="container d-none d-sm-block">
                            <div style="text-align:center">
                                <iframe src="{{asset('assets/pdf/medical/Handbook_onsexual_harassment.pdf')}}"
                                    frameborder="0" height="800px" width="100%"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="container d-block d-sm-none mb-3">
                        <div style="text-align:center" class="">
                            <a href="{{asset('assets/pdf/medical/Handbook_onsexual_harassment.pdf')}}"
                                class="tmu-btn btn-4" download>Download PDF</a>
                        </div>
                    </div>
                </div>
                <hr class="horizontal-line">
                <button class="careers-accordion">SOP For ICC TMMC&RC <span class="icon">+</span></button>
                <div class="panel">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="container d-none d-sm-block">
                                <div style="text-align:center">
                                    <iframe src="{{asset('/assets/pdf/medical/SOP_FOR_ICC_TMMC&RC.pdf')}}" frameborder="0"
                                        height="800px" width="100%"></iframe>
                                </div>
                            </div>
                            <div class="container d-block d-sm-none mb-3">
                                <div style="text-align:center">
                                    <a href="{{asset('/assets/pdf/medical/SOP_FOR_ICC_TMMC&RC.pdf')}}"
                                        class="tmu-btn btn-4" download>Download PDF</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="horizontal-line">
            </div>
        </div>
    </div>
</div>
</div>

@endsection