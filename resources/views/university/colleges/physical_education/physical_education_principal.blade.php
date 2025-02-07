@extends('layouts.university.colleges.physical_education_with_sidebar')
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
                                <img src="{{asset('/assets/img/principal/physical_education/physicaleducation_principal.jpg')}}" alt="Principal" class="principal-image23" style="object-position: top;">
                                <div class="principal-image-decoration23"></div>
                            </div>
                            <div class="principal-info23">
                                <h4 class="principal-name23">Prof. Manu Mishra</h4>
                                <p class="principal-position23">
                                    <!-- <i class="ph-bold ph-briefcase me-2"></i> -->
                                    Principal
                                </p>
                            </div>
                        </div>
                           
                            <p class="text-justify text-dark fs-14 mb-2"> <i class="bi bi-quote" style="font-size:30px; color: #737373;"></i> Wherever the art of medicine is loved, there is also a love of humanity.</p>
                            <p class="principal-text23 text-justify">Physical Education aims to provide learning experiences to every age group, enabling them to develop the knowledge, motivation, and competence to live physically active lives. We aim to develop the wholesome personality of the students. After completing their courses at our College, students can choose from various career options in sports academies, health clubs, and sports marketing. Also, there are opportunities as a commentator, sports trainer, school/college teacher, and many more.
                            <br><br>Here, at our College, we have ample scope and tremendous opportunities to develop a good human being, a good leader, as well as a creative professional because the purpose is not to complete the decided curriculum only but to guide every aspect of students’ grooming in a professional/practical manner.
                            <br><br>If they rectify their mistakes here only by practising them repeatedly, they will inculcate a habit of ensuring quality in whatever they do in their professional and personal life. Also, through this rigorous hands-on experience, their confidence level automatically boosts up.
                            <br><br>Then they are ready to take up a significant role in building a Healthy India and a Healthy World. We welcome you to the <span class="highlight fs-14 p-0">College of Physical Education</span> and wish you the best in great learning for a healthy and rewarding life.</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection