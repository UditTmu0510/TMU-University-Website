@extends('layouts.university.colleges.paramedical_with_sidebar')
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
                <header class="section-header text-center wow zoomIn">
                    <h1 class="tmu-text-primary tmu-page-heading"><span>From the Desk of </span><span>Principal</span></h1>
                </header>
                <div class="principal-card23">
                    <i class="ph-bold ph-quotes principal-quote-icon23"></i>
                    <div class="row">
                        <div class="col-md-10 mx-auto text-center">
                            <div class="d-flex justify-content-between">


                                <div class="principal-image-wrapper23">
                                    <img src="{{asset('/assets/img/principal/paramedical/navneet.jpg')}}" alt="Principal" class="principal-image23" style="object-position: top;">
                                    <div class="principal-image-decoration23"></div>
                                </div>
                                <div class="principal-info23">
                                    <h4 class="principal-name23">Prof (Dr) Navneet Kumar</h4>
                                    <p class="principal-position23">
                                        <!-- <i class="ph-bold ph-briefcase me-2"></i> -->
                                        Principal
                                    </p>
                                </div>
                            </div>
                            <p class="principal-text23 text-justify">
                                Paramedical Sciences is an integral part of the health care system. Our college is equipped with efficient training faculties to make the students reach a level of competency that is par with the best in the region. Currently, our college offers four different streams of Paramedical Sciences, which form the backbone of medical sciences.
                                <br>
                                <br>
                                We strongly believe that imparting good education is about good faculty, eager students and an open learning environment. We are highly focused on each of these areas. We believe that education is not just about teaching the curriculum, but also about developing human intellect and training students to handle unprecedented situations with confidence.
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