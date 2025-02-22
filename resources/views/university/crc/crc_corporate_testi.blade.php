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
                        <div class="media">
                            <img src="{{asset('/assets/img/testimonials/department/crc/corporate/saumya_srivastava_remotestate.jpg')}}" class="mr-3"
                                alt="">
                            <div class="media-body">
                                <div class="testimonial">
                                    <p class="overview mb-3"><b>Saumya Srivastava</b><br> <span class="tmu-color-blue">Head- HR, <br>
                                            REMOTESTATE</span></p>
                                    <p class="testimonial-content47">I find that Teerthanker Mahaveer University students are adaptable
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
                            <img src="{{asset('/assets/img/testimonials/department/crc/corporate/2.jpg')}}" class="mr-3" alt="">
                            <div class="media-body">
                                <div class="testimonial">
                                    <p class="overview mb-3"><b>Sumit Chauhan</b><br>
                                        <span class="tmu-color-blue">CEO,<br> Datopic Technologies Pvt Ltd</span>
                                    </p>
                                    <p class="testimonial-content47">
                                    I would like to express my sincere congratulations and gratitude for the outstanding work carried out by the students of Teerthanker Mahaveer University. The students demonstrated exceptional dedication and diligence, completing their tasks well within the given timeframe. Their strong analytical and technical abilities, combined with excellent presentation and interpersonal skills, make them valuable assets to any organization.
                                    </p>
                                </div>
                                <button class="tmu-btn btn-3 py-2 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14"
                                    onclick="showTestimonialModal()">Read More <i class="bi bi-chevron-down ps-2"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="oc-item text-start col-lg-4 col-md-6 col-sm-6 mb-3">
                        <div class="media">
                            <img src="{{asset('/assets/img/testimonials/department/crc/corporate/1.jpg')}}" class="mr-3" alt="">
                            <div class="media-body">
                                <div class="testimonial">
                                    <p class="overview mb-3"><b>Saurabh Singh</b><br>
                                        <span class="tmu-color-blue">Marketing Specialist & Communication,<br> Coca Cola India Pvt Ltd</span>
                                    </p>
                                    <p class="testimonial-content47">
                                    I would like to extend my sincere congratulation & appreciation on the excellent work done by the students of Teerthanker Mahaveer University. The candidates were very sincere and hard working and achieved their deliverables well within time. Their analytical and technical skills couples with good presentation and soft skills make them a great asset for any organization.
                                    </p>
                                </div>
                                <button class="tmu-btn btn-3 py-2 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14"
                                    onclick="showTestimonialModal()">Read More <i class="bi bi-chevron-down ps-2"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="oc-item text-start col-lg-4 col-md-6 col-sm-6 mb-3">
                        <div class="media">
                            <img src="{{asset('/assets/img/testimonials/department/crc/corporate/8.jpg')}}" class="mr-3" alt="">
                            <div class="media-body">
                                <div class="testimonial">
                                    <p class="overview mb-3"><b>Aditya Kumar</b><br>
                                        <span class="tmu-color-blue">HR Manager,<br> Vivo India</span>
                                    </p>
                                    <p class="testimonial-content47">
                                    It is a wonderful experience coming to Teerthanker Mahaveer University; students are very talented and creative. We are thankful to Placement Cell and Management of TMU for inviting us in our hunt for finding creative talent for VIVO India.
                                    </p>
                                </div>
                                <button class="tmu-btn btn-3 py-2 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14"
                                    onclick="showTestimonialModal()">Read More <i class="bi bi-chevron-down ps-2"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="oc-item text-start col-lg-4 col-md-6 col-sm-6 mb-3">
                        <div class="media">
                            <img src="{{asset('/assets/img/testimonials/department/crc/corporate/6.jpg')}}" class="mr-3" alt="">
                            <div class="media-body">
                                <div class="testimonial">
                                    <p class="overview mb-3"><b>Deen Dayal</b><br>
                                        <span class="tmu-color-blue">Sr. HR Manager,<br> Max Hospital</span>
                                    </p>
                                    <p class="testimonial-content47">
                                    Students at Teerthanker Mahaveer University are hardworking and shown the huge interest in the opportunity provided at our platform, we wish them to keep learning and growing. Management and Corporate Resource Centre is supportive in organizing the smooth drive; we love to come back to Teerthanker Mahaveer University to pick great talents.
                                    </p>
                                </div>
                                <button class="tmu-btn btn-3 py-2 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14"
                                    onclick="showTestimonialModal()">Read More <i class="bi bi-chevron-down ps-2"></i></button>
                            </div>
                        </div>
                    </div>


                    <div class="oc-item text-start col-lg-4 col-md-6 col-sm-6 mb-3">
                        <div class="media">
                            <img src="{{asset('/assets/img/testimonials/department/crc/corporate/4.jpg')}}" class="mr-3" alt="">
                            <div class="media-body">
                                <div class="testimonial">
                                    <p class="overview mb-3"><b>Swati Sharma</b><br>
                                        <span class="tmu-color-blue">Talent Lead Consultant,<br> Knoldus Inc.</span>
                                    </p>
                                    <p class="testimonial-content47">
                                    Recruiting from Teerthanker Mahaveer University was a very pleasant experience. The candidates were knowledgeable and spirited. The problem-solving techniques implemented by them was outstanding. I am sure these guys would do very well in the industry.'
                                    </p>
                                </div>
                                <button class="tmu-btn btn-3 py-2 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14"
                                    onclick="showTestimonialModal()">Read More <i class="bi bi-chevron-down ps-2"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="oc-item text-start col-lg-4 col-md-6 col-sm-6 mb-3">
                        <div class="media">
                            <img src="{{asset('/assets/img/testimonials/department/crc/corporate/9.jpg')}}" class="mr-3" alt="">
                            <div class="media-body">
                                <div class="testimonial">
                                    <p class="overview mb-3"><b>Prabhanjan Prasoon</b><br>
                                        <span class="tmu-color-blue">Head - Talent Acquisition (IT & Enablement),<br> SopraSteria</span>
                                    </p>
                                    <p class="testimonial-content47">
                                    We have been recruiting from Teerthanker Mahaveer University form couple of years now and the students at this University match with the very best in India. This is clearly seen in the nos. we interview and those who are finally selected. Their calibre is also amply demonstrated by high quality of delivery by those who have been selected with SopraSteria.
                                    </p>
                                </div>
                                <button class="tmu-btn btn-3 py-2 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14"
                                    onclick="showTestimonialModal()">Read More <i class="bi bi-chevron-down ps-2"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="oc-item text-start col-lg-4 col-md-6 col-sm-6 mb-3">
                        <div class="media">
                            <img src="{{asset('/assets/img/testimonials/department/crc/corporate/7.jpg')}}" class="mr-3" alt="">
                            <div class="media-body">
                                <div class="testimonial">
                                    <p class="overview mb-3"><b>Ishant Raheja</b><br>
                                        <span class="tmu-color-blue">HR Lead,<br> Hl Mando Softech Pvt. Ltd.</span>
                                    </p>
                                    <p class="testimonial-content47">
                                        It’s been a very good experience on my visit to Teerthanker Mahaveer University. Dedicated faculty & staff, well-disciplined students, must say intelligent minds. They produce quality students for our industry every year. Keep up the hard work. Stay Associated!
                                    </p>
                                </div>
                                <button class="tmu-btn btn-3 py-2 d-block mx-auto my-0 d-flex align-items-center tmu-fs-14"
                                    onclick="showTestimonialModal()">Read More <i class="bi bi-chevron-down ps-2"></i></button>
                            </div>
                        </div>
                    </div>

                    

                    <div class="oc-item text-start col-lg-4 col-md-6 col-sm-6 mb-3">
                        <div class="media">
                            <img src="{{asset('/assets/img/testimonials/department/crc/corporate/3.jpg')}}" class="mr-3" alt="">
                            <div class="media-body">
                                <div class="testimonial">
                                    <p class="overview mb-3"><b>Bali Singh</b><br>
                                        <span class="tmu-color-blue">Managing Director,<br> ECO-Energies Pvt. Ltd.</span>
                                    </p>
                                    <p class="testimonial-content47">
                                    We were highly impressed with the professionalism exhibited by TMU faculty and the students during the entire process of Campus Placement. The overall mental caliber of students has been very good with excellent potential to develop the business leaders. The maturity of the students, knowledge, confidence and overall personality has been excellent and surpassed our expectations.
                                    </p>
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
                        <div class="tmu-testimonial bg-light" style="max-height: 80vh; overflow-y: auto;">
                            <div class="media">
                                <img src="{{asset('/assets/img/testimonials/department/crc/corporate/team-2.jpg')}}"
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