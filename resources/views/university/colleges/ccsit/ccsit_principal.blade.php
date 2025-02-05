@extends('layouts.university.colleges.engineering_with_sidebar')
@section('content')

<style>
    @media (max-width: 767.98px) {
        .quote-box {
            width: 100%;
            background-color: transparent;
            box-shadow: none;
            padding: 0;
        }
    }
</style>

<link rel="stylesheet" href="https://unpkg.com/@phosphor-icons/web@2.0.3/src/bold/style.css" />
    <style>
        :root {
            --card-bg: linear-gradient(145deg, #ffffff, #f8f9fa);
            --text-color: #2d3436;
            --subtext-color: #636e72;
            --card-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .principal-card23 {
            background: var(--card-bg);
            border-radius: 24px;
            padding: 3.5rem;
            position: relative;
            overflow: hidden;
            box-shadow: var(--card-shadow);
        }

        .principal-quote-icon23 {
            position: absolute;
            top: 2rem;
            left: 2rem;
            opacity: 0.1;
            font-size: 3rem;
        }

        .principal-image-wrapper23 {
            position: relative;
            max-width: 140px;
            max-height: 140px;
            margin: 0 0 2rem;
        }

        .principal-image23 {
            width: 100%;
            height: 100%;
            border-radius: 20px;
            object-fit: cover;
        }

        .principal-image-decoration23 {
            position: absolute;
            width: 100%;
            height: 100%;
            border: 2px solid #001055;
            border-radius: 20px;
            top: 10px;
            left: 10px;
            z-index: -1;
        }

        .principal-text23 {
            font-size: 0.85rem;
            line-height: 1.4;
            font-weight: 300;
            margin-bottom: 2rem;
            position: relative;
            z-index: 1;
            color: var(--text-color);
        }

        .principal-info23 {
            position: relative;
            padding-top: 1.5rem;
            margin-top: 1.5rem;
            /* display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: flex-end;
            padding-bottom:  */
        }

        .principal-info23::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0%;
            /* transform: translateX(-50%); */
            width: 60px;
            height: 3px;
            border-radius: 2px;
            background-color: #FF7900;
        }

        .principal-name23 {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--text-color);
        }

        .principal-position23 {
            font-size: 1rem;
            color: var(--subtext-color);
        }

        @media (max-width: 768px) {
            .principal-card23 {
                padding: 2.5rem;
            }
            
            .principal-image-wrapper23 {
                width: 120px;
                height: 120px;
            }
        }

        @media (max-width: 576px) {
            .principal-card23 {
                padding: 2rem;
            }
            
            .principal-image-wrapper23 {
                width: 200px;
                height: 200px;
            }
        }
    </style>

<div class="main-content mt-3 mt-sm-0 pt-2 pt-sm-5">
    <div class="container">
        <div class="">
            <h1 class="tmu-text-primary tmu-page-heading"><span>Message from the </span><span>Dean's Desk</span></h1>
            <div class="quote-box mx-auto">
                <div class="profile-image mb-2">
                    <img src="{{asset('/assets/img/principal/CCSIT/ccsit_principal.jpg')}}" alt="Profile Image">
                </div>
                <div class="quote-text mt-4 mt-md-0">
                    <p class="text-justify text-dark fs-14 mb-2"><i class="bi bi-quote" style="font-size:30px; color: #737373;"></i>Thriving Towards Brilliance Through Resilience...</p>
                    <p class="text-justify text-dark fs-14 mb-2">I wish to welcome all new students to Faculty of Engineering at Teerthanker Mahaveer University, Moradabad, India.</p>
                    <p class="text-justify text-dark fs-14 mb-2">Our aim at the Faculty of Engineering is to educate and create 'technocrats' with solid academic base and attainment of value-added skills to face local, national and international industrial domain.</p>
                    <p class="text-justify text-dark fs-14 mb-2">Technical education is at the cross road and for your better competence we continuously upgrade Infrastructure, Computational facilities and Laboratories to provide hands on exposure. In addition, we are in collaboration with industries to help and provide the required training to the Campus for making you job ready. </p>
                    <p class="text-justify text-dark fs-14 mb-2"> Training programs with IL&FS Skills, Bharat seats, CIDC, Amtek Auto, Auto CAD are in place. We also look forward to have Volvo, Bosch, iMove and Siemens to run joint programs and also create state of art Labs in the Campus for creating industry ready manpower.</p>
                    <p class="text-justify text-dark fs-14 mb-2">To improve your exposure in Research & Innovation we are also planning an Incubation Centre and are recruiting faculty from the best of Institutes to create the ambience. I welcome you all again and hope your stay would be a learning experience which will facilitate you to be the future technocrats of this country.</p>
                    <p class="mt-3">- (Dr.) R. K. Dwivedi</p>
                    <p>Dean</p>
                </div>
            </div>
        </div>

    </div>

    <div class="container py-5">
        <div class="row justify-content-center">
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
                                <h4 class="principal-name23">(Dr.) R. K. Dwivedi</h4>
                                <p class="principal-position23">
                                    <!-- <i class="ph-bold ph-briefcase me-2"></i> -->
                                    Principal
                                </p>
                            </div>
                        </div>
                            <p class="principal-text23 text-justify">
                                I wish to welcome all new students to Faculty of Engineering at Teerthanker Mahaveer University, Moradabad, India.
                                <br>
                                <br>
                                Our aim at the Faculty of Engineering is to educate and create 'technocrats' with solid academic base and attainment of value-added skills to face local, national and international industrial domain.
                                <br>
                                <br>
                                Technical education is at the cross road and for your better competence we continuously upgrade Infrastructure, Computational facilities and Laboratories to provide hands on exposure. In addition, we are in collaboration with industries to help and provide the required training to the Campus for making you job ready.
                                <br>
                                <br>
                                Training programs with IL&FS Skills, Bharat seats, CIDC, Amtek Auto, Auto CAD are in place. We also look forward to have Volvo, Bosch, iMove and Siemens to run joint programs and also create state of art Labs in the Campus for creating industry ready manpower.
                                <br>
                                <br>
                                To improve your exposure in Research & Innovation we are also planning an Incubation Centre and are recruiting faculty from the best of Institutes to create the ambience. I welcome you all again and hope your stay would be a learning experience which will facilitate you to be the future technocrats of this country.
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