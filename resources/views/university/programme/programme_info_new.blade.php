@extends('layouts.programme')
@section('content')
<link rel="stylesheet" href="{{asset('assets/css/course.css')}}">
<style>
    .t2 {
        font-size: 0px;
        font-weight: 0;
        line-height: 0px;
        text-align: center;
        visibility: hidden;
    }

    @media screen and (max-width: 770px) {
        .t2 {
            font-size: 26px;
            font-weight: 600;
            line-height: 35px;
            visibility: hidden;
        }
    }

    .t3 {
        font-size: 24px;
        font-weight: 500;
        line-height: 35px;
        color: #ff8c00;
        margin-bottom: 5px;
    }

    @media screen and (max-width: 770px) {
        .t3 {
            font-size: 18px;
            font-weight: 400;
            line-height: 30px;
        }
    }
</style>
<div class="container">
    <div class="sidebar-contact">
        <div class="toggle-side">
            <p class="vericaltext fs-16">Enquire now</p>
        </div>
        <h2 class="fs-24 tmu-text-primary mb-1"><span>Contact </span><span> Us</span></h2>
        <div class="scroll">
            <form>
                <input type="text" name="" placeholder="Name">
                <input type="email" name="" placeholder="Email">
                <input type="rel" name="" placeholder="Phone Number">
                <textarea placeholder="Message here.."></textarea>
                <input type="submit" name="" value="Send" class="tmu-btn btn-1 pt-1">
            </form>
        </div>
    </div>
</div>

<!-- Slider
		============================================= -->
@php
$programme_banner_path = $programme->programme_banner_path;
$programme_brochure_path = $programme->programme_brochure_path;
@endphp


@if((!(empty($programme_banner_path))) && ($programme->video_section_flag == 'Y'))
    <div id="slider" class="slideshow-container">
        <img class="d-none d-sm-block" src="{{ asset($programme->programme_banner_path) }}" style="width:100%">
        <div class="text d-none d-sm-block" style="color: #000000;">
            <h1>{{ $programme->prog_name }}</h1>
            <p class="mb-3">Build Your Future with {{ $programme->prog_name }}</p>

            @if(in_array($programme->cd_id, [2, 3]))
                <!-- If cd_id is 2 or 3, disable the button -->
                
            @else
                <!-- If cd_id is NOT 2 or 3, show the active button -->
                <a href="https://admissions.tmu.ac.in/" class="tmu-btn btn-4 px-5 py-2 ms-5">Apply Now</a>
            @endif
        </div>
    </div>
@endif

@if(!empty($programme_brochure_path) && $programme->video_section_flag == 'Y')
<div class="banner d-block d-sm-none" style="max-height: 85.1vh; background-image: url({{asset($programme_brochure_path)}});">
    <div class="ban-text">
        <div class="col-xs-6 ban-text">
            <h1 class="display-4 fw-bolder ls-n-1 text-light fs-5 mb-3 mt-3 text-center">
                Build Your Future with {{ $programme->prog_name }}
            </h1>
            <a class="my-button-blk tmu-btn btn-1 px-5 py-2 d-block mx-auto w-fit-content" href="https://admissions.tmu.ac.in/">Apply Now</a>
        </div>
    </div>
</div>
@endif


@if(($programme->usp_section_flag == 'Y') && !(empty($programme->about_prog)))
<!-- Scholarship code start -->
<div class="container mt-2">
    <div class="row justify-content-center ">
        <div class="col-xl-10 col-lg-10 text-center d-none d-sm-block">
            <h2 class="tmu-text-primary"><span>About</span> <span>{{$programme->prog_name}}</span></h2>
        </div>

    </div>


    {!!$programme->about_prog !!}


</div>
@endif

@if(($programme->fee_structure_section_flag == 'Y') && (!(empty($fee_details))))
<!-- Fee Structure code start -->
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-xl-10 col-lg-10 text-center mt-4">
            <h2 class="tmu-text-primary"><span>Fee Structure for </span><span>{{$programme->prog_name}}</span></h2>

        </div>
    </div>
    <center>
        <div class="table-wrapper ">
            <table>
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Fee Details</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>

                    @php
                    $i = 1;
                    @endphp
                    @foreach ($fee_details as $fee_detail)
                    @php

                    $fee_description = $fee_detail->fee_description;
                    $fee_amount = $fee_detail->fee_amount;
                    $fee_payment_schedule = $fee_detail->fee_payment_schedule;
                    @endphp
                    <tr>
                        <td>{{$i}}</td>
                        <td class="fee_details_fetch">
                            <span>
                                <span class="fi fi-af"></span>
                            </span>
                            <span>{{$fee_description}}</span>
                        </td>
                        <td class="fee_details_fetch">Rs {{$fee_amount}} /- (
                            @if($fee_payment_schedule == 'Semester')
                            per Semester
                            @elseif ($fee_payment_schedule == 'Year')
                            per Year
                            @elseif ($fee_payment_schedule == 'One Time')
                            One Time
                            @else
                            Unknown Payment Schedule
                            @endif
                            )</td>
                    </tr>
                    @php
                    $i++;
                    @endphp
                    @endforeach

                </tbody>
            </table>
        </div>
    </center>
</div>

<!-- Fee Structure code end -->
@endif




@if(($programme->scholarship_section_flag == 'Y') && !(empty($programme->scholarship_scheme)))
<!-- Scholarship code start -->
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-xl-10 col-lg-10 text-center d-none d-sm-block">
            <h2 class="tmu-text-primary"><span>{{$programme->prog_name}}</span> <span> Scholarships 2024 </span></h2>
        </div>

    </div>
    @php
    echo $programme->scholarship_scheme;
    @endphp

</div>
@endif



<!-- Scholarship code end -->



<!-- Eligiblity code start
		============================================= -->
@if(($programme->eligibility_section_flag == 'Y') && !empty($programme->eligibility) && !empty($programme->criteria_merit))
<section>

    <div class="container" style="margin-top: 12px; margin-bottom: 8px;">


        <div class="row align-items-lg-center min-vh-lg-100">
            <div class="col-lg-6">
                <img src="{{asset('eligiblity.jpg')}}" alt="Girl in a jacket" class="mx-auto d-block">
            </div>

            <div class="col-lg-6 align-self-center">
                <h2 class="tmu-text-primary mb-3 fs-24 lh-sm mt-4"> <span>{{$programme->prog_name}}</span><span> Eligibility Criteria & Selection Process </span></h2>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="feature-box fbox-plain fbox-sm flex-column">
                            <div class="fbox-content">
                                <h3 class="text-transform-none ls-0 fw-bold">Eligibility</h3>
                                @php
                                echo $programme->eligibility;
                                @endphp
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="feature-box fbox-plain fbox-sm flex-column">
                            <div class="fbox-content">
                                <h3 class="text-transform-none ls-0 fw-bold">Selection</h3>
                                @php
                                echo $programme->criteria_merit;
                                @endphp
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section><!-- Eligiblity code end -->
@endif

<!-- Section for recruiters begin  -->


@if(($programme->our_recruiters_section_flag == 'Y'))
<section>
    <div class="container-fluid mt-5 ">
        <h2 class="tmu-text-primary text-center">
            <span></span><span> Recruiters</span>
        </h2>
        <div class="marquee my-5 py-5 pt-4">


            <section class="marquee-content more-content">
                @foreach($recruiters as $recruiter)
                <div class="marquee-block">
                    <a href="#"><img src="{{asset($recruiter->recruiter_image_path)}}" alt="{{$recruiter->alt_tag}}"></a>
                </div>
                @endforeach
            </section>
            <section class="marquee-content more-content">
                @foreach($recruiters as $recruiter)
                <div class="marquee-block">
                    <a href="#"><img src="{{asset($recruiter->recruiter_image_path)}}" alt="{{$recruiter->alt_tag}}"></a>
                </div>
                @endforeach
            </section>
        </div>
    </div>
</section>
@endif
<!-- Section for recruiter end -->


<!-- Section for FAQ start -->
<!-- <div class="section my-0 bg-transparent">
    <div class="container" style="margin-top: 15px; margin-bottom: 12px;">
        <div class="row justify-content-center gy-5" style="--bs-gutter-x: 60px">
            <div class="col-lg-12 mt-lg-5.5">
                <div class="row justify-content-center ">
                    <div class="col-xl-10 col-lg-10 text-center">
                        <h2 class="tmu-text-primary"><span>B.Tech CSE </span><span> Frequently Asked Questions </span></h2>

                    </div>
                </div>
                <div class="px-lg-6 p-5 rounded" style="background: linear-gradient( to bottom left, rgba(255, 224, 54, .15), rgba(216, 220, 232, .3) 70% );">
                    <div class="toggle toggle-lg py-4 border-bottom mb-0">
                        <div class="toggle-header align-items-center">
                            <div class="toggle-icon">
                                <i class="toggle-closed bi-check-lg"></i>
                                <i class="toggle-open bi-check-lg"></i>
                            </div>
                            <div class="toggle-title fw-semibold">
                                What is the Master's in Data Science with TMU?
                            </div>
                            <div class="toggle-icon">
                                <i class="toggle-closed bi bi-plus-circle fs-4 op-05"></i>
                                <i class="toggle-open bi bi-dash-circle fs-4"></i>
                            </div>
                        </div>
                        <div class="toggle-content fs-6">The Master's degree is an engaging yet rigorous 18-month online program designed specifically for working professionals to develop practical knowledge and skills, establish a professional network, and accelerate entry into data science careers.
                        </div>
                    </div>

                    <div class="toggle toggle-lg py-4 border-bottom mb-0">
                        <div class="toggle-header align-items-center">
                            <div class="toggle-icon">
                                <i class="toggle-closed bi-credit-card"></i>
                                <i class="toggle-open bi-credit-card"></i>
                            </div>
                            <div class="toggle-title fw-semibold">
                                What should I expect from the Master's Degree in Data Science?
                            </div>
                            <div class="toggle-icon">
                                <i class="toggle-closed bi bi-plus-circle fs-4 op-05"></i>
                                <i class="toggle-open bi bi-dash-circle fs-4"></i>
                            </div>
                        </div>
                        <div class="toggle-content fs-6">Expect to carry out several industry-relevant projects simulated as per the actual workplace, making you a skilled data science professional at par with leading industry standards.</div>
                    </div>

                    <div class="toggle toggle-lg py-4 border-bottom mb-0">
                        <div class="toggle-header align-items-center">
                            <div class="toggle-title fw-semibold">
                                What should I NOT expect from the Master's Degree in Data Science?
                            </div>
                            <div class="toggle-icon">
                                <i class="toggle-closed bi bi-plus-circle fs-4 op-05"></i>
                                <i class="toggle-open bi bi-dash-circle fs-4"></i>
                            </div>
                        </div>
                        <div class="toggle-content fs-6">The program is NOT going to be easy. It will be requiring at least 15 hours of time commitment per week, applying new concepts and executing industry relevant projects.</div>
                    </div>

                    <div class="toggle toggle-lg py-4 mb-0">
                        <div class="toggle-header align-items-center">
                            <div class="toggle-title fw-semibold">
                                Which topics are going to be covered as part of the program?
                            </div>
                            <div class="toggle-icon">
                                <i class="toggle-closed bi bi-plus-circle fs-4 op-05"></i>
                                <i class="toggle-open bi bi-dash-circle fs-4"></i>
                            </div>
                        </div>
                        <div class="toggle-content fs-6">The program is designed for working professionals looking for a transition or growth into the data domain. Considering the requirements of different data roles in the industry, the curriculum is divided into five tracks. These five tracks will have a common curriculum running for approximately 5-6 months that everyone will go through after which they have to do one specialization course and a capstone project in the remaining 6-7 months. The topics that are going to be covered as a part of the common curriculum and each of the five specializations are as follows:Common Curriculum: Basics of SQL, Python, Statistics and EDA, Basic Machine Learning Models Deep Learning Specialization: Advanced Machine Learning, Neural NetworksNatural Language Processing Specialization: Advanced Machine Learning, Natural Language ProcessingBusiness Analytics: Advanced Machine Learning, Storytelling and Advanced Business Problem SolvingBusiness Intelligence/Data Analytics: Advanced SQL and NoSQL Databases, Storytelling with Advanced VisualizationData Engineering: Data Modelling and Data Warehousing, Building Data Pipelines, Data Streaming and Processing</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

@if($programme->faq_section_flag == 'Y')
<section class="my-5">
    <div class="container">
        <h2 class="tmu-text-primary text-center"><span> Frequently </span><span> Asked Questions</span></h2>


        <div class="row mx-0">
        @foreach ($faqs as $index => $faq)
        <button class="careers-accordion {{ $index == 0 ? 'active' : '' }}">
            <span>
                <i class="fa-solid fa-sm fakash"></i>&nbsp;&nbsp;{{$faq->faq_question}}
            </span>
            <span class="icon">+</span>
        </button>
        <div class="panel {{ $index == 0 ? 'active' : '' }} text-justify">
            @php echo $faq->faq_answer @endphp
        </div>
        <hr class="horizontal-line">
        @endforeach
        </div>

        <!-- <div class="row mx-0">
            @foreach ($faqs as $faq)
            <button class="careers-accordion"><span> <i class="fa-solid fa-sm fakash"></i>&nbsp;&nbsp;{{$faq->faq_question}}</span> <span class="icon">+</span></button>
            <div class="panel {{ $index == 0 ? 'active' : '' }}"> @php echo $faq->faq_answer @endphp</div>
            <hr class="horizontal-line">
            @endforeach
        </div> -->
    </div>
</section>
@endif
<!-- Section for FAQ end -->
@endsection