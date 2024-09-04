@extends('layouts.university.departments.crc_with_sidebar')
@section('content')

<link rel="stylesheet" href="{{asset('/assets/css/tmu-testimonial.css')}}">
<link rel="stylesheet" href="{{asset('/assets/css/tmimt.css')}}">
<link rel="stylesheet" href="{{asset('/assets/css/college.css')}}">


<div class="main-content">
    <div class="container">
        <div class="container-xl tmu-testimonial">
            <h1 class="tmu-text-primary mb-0 tmu-page-heading">
                <span>Students</span><span>Testimonial</span>
            </h1>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="media ">
                        <img src="{{asset('/assets/img/testimonials/department/crc/students/Pranshi_Sharma.jpg')}}"
                            class="mr-3" alt="">
                        <div class="media-body">
                            <div class="testimonial">
                                <p class="overview mb-3 fs-14"><b class="fs-16">Dr. Pranshi Sharma</b>
                                    <br>MBA (2023 - 2024), <br> Data Engineer at Aventra Group
                                    <br>
                                    <span>
                                        <a href="https://www.linkedin.com/in/udit-gupta-ug0510/"
                                            class=" px-2 py-1 linkedin-text">Linkedin <i
                                                class="bi bi-linkedin"></i></a>
                                    </span>
                                </p>
                                <p>For decades I have been trying to enhance my personality but as a doctor I found it difficult at certain levels to make time to work upon myself. CTLD (Centre for Teaching Learning &development) programme helped me to overcome with my weak areas. It helped me to enhance my communication skills, mental ability, confidence. In addition to this our trainer Mr.Sagar Pratap Singh and Mr. Avinash Yadav worked hard with us to acknowledge ourselves and develop various qualities that includes leadership qualities, decision making skills, etc. The programme helped to know how to work in a competitive environment and how to deal with certain situations while maintaining a positive attitude. I am highly obliged to be a part of such course.</p>
                            </div>
                        </div>
                        <div class="mx-auto my-0 d-flex align-items-center tmu-fs-14">
                            <button class="tmu-btn btn-3 py-2 d-block pe-3 " onclick="showTestimonialModal()">Read
                                More <i class="bi bi-chevron-down"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="media ">
                        <img src="{{asset('/assets/img/testimonials/department/crc/students/Purnima_Varshney.jpg')}}"
                            class="mr-3" alt="">
                        <div class="media-body">
                            <div class="testimonial">
                                <p class="overview mb-3 fs-14"><b class="fs-16">Purnima Varshney</b>
                                    <br>MCA (2020 - 2022), <br> Quality Analyst at Cloud Analogy
                                    <br>
                                    <span>
                                        <a href="https://www.linkedin.com/in/udit-gupta-ug0510/"
                                            class=" px-2 py-1 linkedin-text">Linkedin <i
                                                class="bi bi-linkedin"></i></a>
                                    </span>
                                </p>
                                <p>I would like to thank the CTLD department. With the efforts and dedication of the trainers here, I have achieved big success for me today. The confidence that I have built up today is only because of the wonderful teachers who have been a part of this journey.After getting training from the CTLD department, I felt a lot of improvement in my skills. I would like to thankJasmine mam, Dilip Dutt Varshney, and Sagar Pratap sir,They guided and supported me on every stage and also taught me how to be confident in my professional life. I also want to express my gratitude to Er. Vikash Ranjan , He taught me the numerical ability and just because of him I felt confident in all the competitive exams. I am extremely obliged to be trained by the CTLD department. They are available every time to help students. CTLD department also organizesmany activities like Bootcamp, Brain Manthan, Vocabaddictsevents for students and provide knowledge in some special manner. Just because of CTLD department effortsnow I am placed in a reputed company Cloud Analogy as aQuality Analyst with a good package of 3 LPA. So once again thank you so much to all the trainers of the CTLD department. Km. Purnima Varshney Placed in Cloud Analogy As a Quality Analyst
                                </p>
                            </div>
                        </div>
                        <div class="mx-auto my-0 d-flex align-items-center tmu-fs-14">
                            <button class="tmu-btn btn-3 py-2 d-block pe-3 " onclick="showTestimonialModal()">Read
                                More <i class="bi bi-chevron-down"></i></button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="media ">
                        <img src="{{asset('/assets/img/testimonials/department/crc/students/Sumbul_Fatema.jpg')}}"
                            class="mr-3" alt="">
                        <div class="media-body">
                            <div class="testimonial">
                                <p class="overview mb-3 fs-14"><b class="fs-16">Sumbul Fatema</b>
                                    <br>BPT (2020 - 2024), <br>Data Engineer at Aventra Group
                                    <br>
                                    <span>
                                        <a href="https://www.linkedin.com/in/udit-gupta-ug0510/"
                                            class=" px-2 py-1 linkedin-text">Linkedin <i
                                                class="bi bi-linkedin"></i></a>
                                    </span>
                                </p>
                                <p>The Teerthanker Mahaveer University has provided me the opportunity to fulfill my career aspirations and dreams. The CTLD program has pushed me to grow as a leader and mentor. I am very thankful to our CTLD mentor Mr. Atul Dayal sir who has teaches us how to tackle any problem that we can faces in modern day and during in workspace. My experience at Teerthanker Mahaveer University ,CTLD department went so well that I am currently looking into obtaining more knowledge about program managing self to enhance my career further. He teaches many things most important how to deal with problems and most how to present yourself in front of others .
                                </p>
                            </div>
                        </div>
                        <div class="mx-auto my-0 d-flex align-items-center tmu-fs-14">
                            <button class="tmu-btn btn-3 py-2 d-block pe-3 " onclick="showTestimonialModal()">Read
                                More <i class="bi bi-chevron-down"></i></button>
                        </div>


                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="media ">
                        <img src="{{asset('/assets/img/testimonials/department/crc/students/Abeer_Masroor.jpg')}}"
                            class="mr-3" alt="">
                        <div class="media-body">
                            <div class="testimonial">
                                <p class="overview mb-3 fs-14"><b class="fs-16">Abeer Masroor</b>
                                    <br>BCA (2018 - 2021), <br> Data Engineer at Aventra Group
                                    <br>
                                    <span>
                                        <a href="https://www.linkedin.com/in/udit-gupta-ug0510/"
                                            class=" px-2 py-1 linkedin-text">Linkedin <i
                                                class="bi bi-linkedin"></i></a>
                                    </span>
                                </p>
                                <p>Teerthanker Mahaveer University is a place that gave wings to my dreams. At the very outset I would like to express my heartiest thanks to the CTLD (Centre for Teaching, Learning and Development) department for polishing and showcasing my skills during my final year of BCA. It gave me a platform to push myself as well to understand my potentials that was hidden inside me. The classes really proved to be very effective in such a way that it has provided me an opportunity to learn, grow and to boost up my confidence. The pre-placement activities were highly productive as it gave me a clear vision for facing interviews. Whole heartedly I would also like to thank all the teachers of CTLD department for guiding and supporting me throughout the interview process. The faculty is really very kind and approachable when any need arises. I got trained in such a way that I'm placed in one of the reputed company with a handsome package. Once again thank you so much to the whole team of CTLD department for making me believe that I have enough potential and capabilities to come out with flying colors.
                                </p>
                            </div>
                        </div>
                        <div class="mx-auto my-0 d-flex align-items-center tmu-fs-14">
                            <button class="tmu-btn btn-3 py-2 d-block pe-3 " onclick="showTestimonialModal()">Read
                                More <i class="bi bi-chevron-down"></i></button>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial Modal -->
    <div id="testimonialModal" class="tmu-modal">
        <div class="overlay" onclick="closeTestimonialModal()"></div>
        <div class="tmu-modal-box">
            <div class="close-btn" onclick="closeTestimonialModal()">x</div>
            <div class="tmu-testimonial bg-light">

                <div class="media ">
                    <img src="{{asset('/assets/img/testimonials/department/crc/students/abdul_india_mart_mba.jpg')}}"
                        class="mr-3" alt="">
                    <div class="media-body">
                        <div class="testimonial">
                            <p class="overview mb-3 testimonial-user-name"><b>Abdul Malik
                                    Khan</b>, MBA</p>
                            <p class="testimonial-content">TMU, for me, is not just an MBA
                                destination, it's the crucible where my leadership skills
                                were forged. Beyond textbooks and case studies, TMU offered a
                                dynamic learning
                                environment where theories met practical challenges. It's a
                                journey where I honed the
                                skills that set me apart in the dynamic landscape of business
                                and management.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script src="{{asset('/assets/js/tmimt.js')}}"></script>


@endsection