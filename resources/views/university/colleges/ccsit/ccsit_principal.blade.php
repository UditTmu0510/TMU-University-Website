@extends('layouts.university.colleges.ccsit_with_sidebar')
@section('content')

<link rel="stylesheet" href="https://unpkg.com/@phosphor-icons/web@2.0.3/src/bold/style.css" />
    <style>
        :root {
            --card-bg: linear-gradient(145deg, #ffffff, #f8f9fa);
            --text-color: #2d3436;
            --subtext-color: #636e72;
            --card-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
    </style>

<div class="main-content mt-3 mt-sm-0 pt-2 pt-sm-5">
    <div class="container py-5">
        <div class="row justify-content-center">
        <h1 class="tmu-page-heading tmu-text-primary"><span>From the desk of </span><span>Dean</span></h1>
            <div class="col-lg-10">
                <div class="principal-card23">
                    <i class="ph-bold ph-quotes principal-quote-icon23"></i>
                    <div class="row">
                        <div class="col-md-10 mx-auto text-center">
                            <div class="d-flex justify-content-between">

                           
                            <div class="principal-image-wrapper23">
                                <img src="{{asset('/assets/img/principal/CCSIT/ccsit_principal.jpg')}}" alt="Principal" class="principal-image23" style="object-position: top;">
                                <div class="principal-image-decoration23"></div>
                            </div>
                            <div class="principal-info23">
                                <h4 class="principal-name23">Prof. (Dr.) R. K. Dwivedi</h4>
                                <p class="principal-position23">
                                    <!-- <i class="ph-bold ph-briefcase me-2"></i> -->
                                    Dean, Faculty of Engineering
                                </p>
                            </div>
                        </div>
                            <p class="principal-text23 text-justify">
                                I wish to welcome all new students to the Faculty of Engineering at Teerthanker Mahaveer University, Moradabad, India.
                                <br>
                                <br>
                                Our aim at the Faculty of Engineering is to educate and create 'technocrats' with solid academic base and attainment of value-added skills to face local, national and international industrial domain.
                                <br>
                                <br>
                                Technical education is at a crossroads, and to enhance your competence, we continuously upgrade infrastructure, computational facilities, and laboratories to provide hands-on exposure. In addition, we are in collaboration with industries to help and provide the required training to the Campus for making you job-ready.
                                <br>
                                <br>
                                Training programs with IL&FS Skills, Bharat Seats, CIDC, Amtek Auto, AutoCAD are in place. We also look forward to having Volvo, Bosch, iMove, and Siemens run joint programmes and create state-of-the-art labs on the campus for developing industry-ready manpower.
                                <br>
                                <br>
                                To improve your exposure in Research & Innovation we are also planning an Incubation Centre and are recruiting faculty from the best Institutes to create the ambience. I welcome you all again and hope your stay would be a learning experience which will facilitate you to be the future technocrats of this country.
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection