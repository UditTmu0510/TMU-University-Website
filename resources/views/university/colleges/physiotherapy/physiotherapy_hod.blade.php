@extends('layouts.university.colleges.physiotherapy_with_sidebar')
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
                                <img src="{{asset('/assets/img/principal/physiotherapy/physiotherapy_principal.jpg')}}" alt="Principal" class="principal-image23" style="object-position: top;">
                                <div class="principal-image-decoration23"></div>
                            </div>
                            <div class="principal-info23">
                                <h4 class="principal-name23">Prof.Shivanee M. Kaul</h4>
                                <p class="principal-position23">
                                    <!-- <i class="ph-bold ph-briefcase me-2"></i> -->
                                    Head of the Department
                                </p>
                            </div>
                        </div>
                            <p class="principal-text23 text-justify">
                                Welcome to the Department of Physiotherapy, a department that focuses on opportunity and achievement, a place where students are encouraged and supported to excel. As rightly said by Albert Einstein, "Education is not learning of facts but training of mind to think". Keeping this very fact in mind the department with the support of its able faculty members, visionary management and excellent and extensive infrastructure entrenches perseverance and a never-say-die spirit from academics to co-curricular activities in the heart of every student to not only make them good physiotherapists but brilliant human beings.
                                <br>
                                <br>
                                Physiotherapists are key players in the healthcare system today. They help in restoring and improving movements, keeping patients healthy, fit and active thereby improving the quality of life. They also play an important role in avoiding surgery and long-term use of medications.
                                <br>
                                <br>
                                Besides the classroom learning and clinical training at the 900+ bedded Teerthanker Mahaveer Hospital and Research Centre, our outreach programmes such as physiotherapy camps in the rural areas serving the poor and weaker sections of society,
                                <br>
                                <br>
                                consultancy services to the industries, awareness programmes for society etc. gives the required exposure to the students. The vision and mission of our university have added a thrust to research and the department is well on the way to making its mark as a world-class college of learning, research and quality patient care.
                                Do join us on this journey towards excellence.
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