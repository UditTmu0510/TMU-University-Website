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
                @foreach($testimonials as $testimonial)
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="media ">
                        <img src="{{asset($testimonial->thumbnail_path)}}"
                            class="mr-3" alt="">
                        <div class="media-body">
                            <div class="testimonial">
                                <p class="overview mb-3 fs-14"><b class="fs-16">{{$testimonial->student_name}}</b>
                                    <br>{{$testimonial['programme_name']['prog_name']}} ({{$testimonial->admitted_year}} - {{$testimonial->passout_year}})
                                    <br>
                                    <span>
                                        <a href="{{$testimonial->linkedin_url}}"
                                            class=" px-2 py-1 linkedin-text">Linkedin <i
                                                class="bi bi-linkedin"></i></a>
                                    </span>
                                </p>
                                <p class="testimonial-content47">{{ $testimonial->testimonial_text }}</p>
                            </div>
                        </div>
                        <div class="mx-auto my-0 d-flex align-items-center tmu-fs-14">
                            <button class="tmu-btn btn-3 py-2 d-block pe-3 " onclick="showTestimonialModal()">Read
                                More <i class="bi bi-chevron-down"></i></button>
                        </div>
                    </div>
                </div>
               
            @endforeach 
              
              
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