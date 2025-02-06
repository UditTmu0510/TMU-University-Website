@extends('layouts.university.colleges.engineering_with_sidebar')
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
            <div class="col-lg-10">
                <div class="principal-card23">
                    <i class="ph-bold ph-quotes principal-quote-icon23"></i>
                    <div class="row">
                        <div class="col-md-10 mx-auto text-center">
                            <div class="d-flex justify-content-between">

                           
                            <div class="principal-image-wrapper23">
                                <img src="{{asset('/assets/img/principal/pharmacy/3.png')}}" alt="Principal" class="principal-image23" style="object-position: top;">
                                <div class="principal-image-decoration23"></div>
                            </div>
                            <div class="principal-info23">
                                <h4 class="principal-name23">Prof. Anurag Verma</h4>
                                <p class="principal-position23">
                                    <!-- <i class="ph-bold ph-briefcase me-2"></i> -->
                                    Principal
                                </p>
                            </div>
                        </div>
                            <p class="principal-text23 text-justify">
                                Pharmacy is an essential pillar of healthcare. Our college offers extensive training to ensure students achieve competency at par with the best in the region. We currently offer four streams that form the backbone of medical sciences, shaping skilled professionals to meet industry demands.
                                <br>
                                <br>
                                Pharmacy is a noble profession, with pharmacists playing a vital role in healthcare. Our college is committed to imparting cutting-edge knowledge, skills, and training, preparing future pharmacists to excel in industries, academia, and patient care. Our curriculum includes case studies, industrial visits, and summer training to provide students with real-world exposure.
                                <br>
                                <br>
                                We believe good education stems from dedicated faculty, eager students, and an open learning environment. Our focus extends beyond academics to nurturing human intellect and developing life skills. Through personalized learning, faculty engagement, and numerous student activities, we empower students to tackle challenges with confidence.
                                <br>
                                <br>
                                At the College of Pharmacy, we encourage students to think creatively and express their ideas freely. Student-led clubs and forums provide opportunities for growth and collaboration. The time spent here fosters lifelong friendships, sharpens critical thinking, and equips students with the tools to succeed in the professional world.
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