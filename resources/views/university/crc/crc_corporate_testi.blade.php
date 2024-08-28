@extends('layouts.university.departments.crc_with_sidebar')
@section('content')

<link rel="stylesheet" href="{{asset('/assets/css/tmu-testimonial.css')}}">
<link rel="stylesheet" href="{{asset('/assets/css/tmimt.css')}}">
<link rel="stylesheet" href="{{asset('/assets/css/college.css')}}">


<div class="main-content">
    <div class="container">
        <!-- <h3 class="mb-2 pb-0"><b>University Administration</b> </h3> -->
        <div class="container">
            <h1 class="tmu-text-primary tmu-page-heading"><span> Corporate </span><span> Testimonials </span></h1>

            <div class="container tmu-testimonial mt-5 mb-3">
                <div class="row">
                    <div class="oc-item text-start col-lg-4 col-md-6 col-sm-6 mb-3">
                        <div class="media ">
                            <img src="https://www.tmu.ac.in/img/placement/corporate/ishant_raheja_mando_softech.jpg" class="mr-3"
                                alt="">
                            <div class="media-body">
                                <div class="testimonial">
                                    <p class="overview mb-3"><b>Ishant Raheja</b><br> <span class="tmu-color-blue">HR-Lead, <br> HL
                                            MANDO SOFTECH PVT.
                                            LTD.</span></p>
                                    <p>It’s been a very good experience on my visit to Teerthanker Mahaveer
                                        University. Dedicated faculty & staff, well-disciplined students,
                                        must say intelligent minds. They produce quality students for our
                                        industry every year. Keep up the hard work. Stay Associated!</p>
                                </div>
                            </div>
                            <button class="tmu-btn btn-3 py-2 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14"
                                onclick="showTestimonialModal()">Read More <i class="bi bi-chevron-down ps-2"></i></button>
                        </div>
                    </div>

                    <div class="oc-item text-start col-lg-4 col-md-6 col-sm-6 mb-3">
                        <div class="media">
                            <img src="https://www.tmu.ac.in/img/placement/corporate/deen_d_maxhealthcare.jpg" class="mr-3" alt="">
                            <div class="media-body">
                                <div class="testimonial">
                                    <p class="overview mb-3"><b>Deen D</b><br> <span class="tmu-color-blue">Sr. HR Manager, <br> MAX
                                            HEALTHCARE</span></p>
                                    <p>Students at Teerthanker Mahaveer University are hard-working and
                                        shown the huge interest in the opportunity provided at our platform,
                                        we wish them to keep learning and growing." <br> "Management and
                                        Corporate Resource Centre is quite supportive in organising the
                                        smooth drive; we love to come back to Teerthanker Mahaveer
                                        University to pick great talents.</p>
                                </div>
                                <button class="tmu-btn btn-3 py-2 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14"
                                    onclick="showTestimonialModal()">Read More <i class="bi bi-chevron-down ps-2"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="oc-item text-start col-lg-4 col-md-6 col-sm-6 mb-3">
                        <div class="media">
                            <img src="https://www.tmu.ac.in/img/placement/corporate/Aditya_Kumar_vivo.jpg" class="mr-3" alt="">
                            <div class="media-body">
                                <div class="testimonial">
                                    <p class="overview mb-3"><b>Aditya Kumar</b><br> <span class="tmu-color-blue">HR Manager, <br> VIVO
                                            INDIA </span></p>
                                    <p>It is a wonderful experience coming to Teerthanker Mahaveer
                                        University; students are very talented and creative. We are thankful
                                        to Placement Cell and Management of TMU for inviting us in our hunt
                                        for finding creative talent for VIVO India.</p>
                                </div>
                                <button class="tmu-btn btn-3 py-2 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14"
                                    onclick="showTestimonialModal()">Read More <i class="bi bi-chevron-down ps-2"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="oc-item text-start col-lg-4 col-md-6 col-sm-6 mb-3">
                        <div class="media ">
                            <img src="https://www.tmu.ac.in/img/placement/corporate/bali_singh_eco_energies.jpg" class="mr-3"
                                alt="">
                            <div class="media-body">
                                <div class="testimonial">
                                    <p class="overview mb-3"><b>BALI SINGH</b><br> <span class="tmu-color-blue">Managing Director, <br>
                                            ECO-ENERGIES PVT.
                                            LTD.</span></p>
                                    <p>We were highly impressed with the professionalism exhibited by TMU
                                        faculty and the students during the entire process of Campus
                                        Placement. The overall mental caliber of students has been very good
                                        with excellent potential to develop the business leaders. The
                                        maturity of the students, knowledge, confidence and overall
                                        personality has been excellent and surpassed our expectations.</p>
                                </div>
                            </div>
                            <button class="tmu-btn btn-3 py-2 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14"
                                onclick="showTestimonialModal()">Read More <i class="bi bi-chevron-down ps-2"></i></button>

                        </div>
                    </div>

                    <div class="oc-item text-start col-lg-4 col-md-6 col-sm-6 mb-3">
                        <div class="media">
                            <img src="https://www.tmu.ac.in/img/placement/corporate/saumya_srivastava_remotestate.jpg" class="mr-3"
                                alt="">
                            <div class="media-body">
                                <div class="testimonial">
                                    <p class="overview mb-3"><b>Deen D</b><br> <span class="tmu-color-blue">Head- HR, <br>
                                            REMOTESTATE</span></p>
                                    <p>I find that Teerthanker Mahaveer University students are adaptable
                                        and are eager to adjust to the environment, the company appreciate
                                        all the effort the University takes to make the students ready for
                                        the corporate world. Our regular interactions with the Placement
                                        Officer and feedback sessions have always helped in bridging the gap
                                        between our firm and TMU. Look forward to continuing our
                                        relationship with them for long.</p>
                                </div>
                                <button class="tmu-btn btn-3 py-2 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14"
                                    onclick="showTestimonialModal()">Read More <i class="bi bi-chevron-down ps-2"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="oc-item text-start col-lg-4 col-md-6 col-sm-6 mb-3">
                        <div class="media">
                            <img src="https://www.tmu.ac.in/img/placement/corporate/team-1.jpg" class="mr-3" alt="">
                            <div class="media-body">
                                <div class="testimonial">
                                    <p class="overview mb-3"><b>Mr. Manish Kumar Tewari</b><br> <span class="tmu-color-blue">Manager,
                                            <br> ICICI Prudential
                                            Ltd.</span></p>
                                    <p>It was a pleasure interacting with the students and faculty. There
                                        was lot of josh & enthusiasm among the students for placements. Wish
                                        to take the relationship further……. All the Best to the Institution!
                                    </p>
                                </div>
                                <button class="tmu-btn btn-3 py-2 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14"
                                    onclick="showTestimonialModal()">Read More <i class="bi bi-chevron-down ps-2"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="oc-item text-start col-lg-4 col-md-6 col-sm-6 mb-3">
                        <div class="media">
                            <img src="https://www.tmu.ac.in/img/placement/corporate/team-1.jpg" class="mr-3" alt="">
                            <div class="media-body">
                                <div class="testimonial">
                                    <p class="overview mb-3"><b>Ms. Megha Agarwal</b><br> <span class="tmu-color-blue">Senior Manager
                                            Recruitments, <br>
                                            Naukri.com (Info Edge India Limited)</span></p>
                                    <p> TMIMT shows excellent way to make new generation learners about
                                        different fields of their interest. Every year we have recruited
                                        students of TMIMT and found excellent employees from its pool. I
                                        wish all the very best to the entire management team of TMU for
                                        their future ventures.</p>
                                </div>
                                <button class="tmu-btn btn-3 py-2 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14"
                                    onclick="showTestimonialModal()">Read More <i class="bi bi-chevron-down ps-2"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="oc-item text-start col-lg-4 col-md-6 col-sm-6 mb-3">
                        <div class="media">
                            <img src="https://www.tmu.ac.in/img/placement/corporate/team-1.jpg" class="mr-3" alt="">
                            <div class="media-body">
                                <div class="testimonial">
                                    <p class="overview mb-3"><b>Mr. Akhilesh Sharma</b><br> <span class="tmu-color-blue">IFBI, <br> NIIT
                                            Ltd. New Delhi </span>
                                    </p>
                                    <p> I was really GREAT to visit TMU, Moradabad. I am feeling awesome to
                                        see the efforts of TMIMT TMU doing to the student community in this
                                        region. HATS OFF. Keep up the good work, would certainly love to
                                        visit and interact with students again Thank you so much for
                                        inviting us.</p>
                                </div>
                                <button class="tmu-btn btn-3 py-2 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14"
                                    onclick="showTestimonialModal()">Read More <i class="bi bi-chevron-down ps-2"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="oc-item text-start col-lg-4 col-md-6 col-sm-6 mb-3">
                        <div class="media">
                            <img src="https://www.tmu.ac.in/img/placement/corporate/team-1.jpg" class="mr-3" alt="">
                            <div class="media-body">
                                <div class="testimonial">
                                    <p class="overview mb-3"><b>Mr. Gaurav Gupta</b><br> <span class="tmu-color-blue">Corporate HR, <br>
                                            Transport Corporation
                                            of India Ltd.</span>
                                    </p>
                                    <p> It was a good experience altogether we hired maximum no. of students
                                        from the college looking forward for next year Placement. TMIMT has
                                        groomed its student as per our hiring criteria.</p>
                                </div>
                                <button class="tmu-btn btn-3 py-2 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14"
                                    onclick="showTestimonialModal()">Read More <i class="bi bi-chevron-down ps-2"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="oc-item text-start col-lg-4 col-md-6 col-sm-6 mb-3">
                        <div class="media">
                            <img src="https://www.tmu.ac.in/img/placement/corporate/team-1.jpg" class="mr-3" alt="">
                            <div class="media-body">
                                <div class="testimonial">
                                    <p class="overview mb-3"><b>Ms. Smita Dubey</b><br> <span class="tmu-color-blue">HR Recruitment,
                                            <br> Justdail Ltd.
                                        </span>
                                    </p>
                                    <p> Indeed it was a pleasure to interact with young management
                                        professionals. We have hired very good students who are performing
                                        excellent and delivering delight. Good hospitality.</p>
                                </div>
                                <button class="tmu-btn btn-3 py-2 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14"
                                    onclick="showTestimonialModal()">Read More <i class="bi bi-chevron-down ps-2"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="testimonialModal" class="tmu-modal">
                    <div class="overlay" onclick="closeTestimonialModal()"></div>
                    <div class="tmu-modal-box">
                        <div class="close-btn" onclick="closeTestimonialModal()">x</div>
                        <div class="tmu-testimonial bg-light">
                            <div class="media">
                                <img src="https://www.tmu.ac.in/monaco/assets/image/testimonials/abdul_india_mart_mba.webp"
                                    class="mr-3" alt="">
                                <div class="media-body">
                                    <div class="testimonial">
                                        <p class="overview mb-3 testimonial-user-name"><b>Abdul Malik
                                                Khan</b>, MBA</p>
                                        <p class="testimonial-content">TMU, for me, is not just an MBA
                                            destination, it's the crucible where my leadership skills
                                            were forged. Beyond textbooks and case studies, TMU offered
                                            a dynamic learning
                                            environment where theories met practical challenges. It's a
                                            journey where I honed the
                                            skills that set me apart in the dynamic landscape of
                                            business
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
    </div>
</div>
</div>

<script src="{{asset('/assets/js/tmimt.js')}}"></script>

@endsection