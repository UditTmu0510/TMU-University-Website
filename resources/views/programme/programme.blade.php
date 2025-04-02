@extends('layouts.programme')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/course.css') }}">
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

    .fs-26 {
        font-size: 26px;
    }

    @media screen and (max-width: 576px) {
        .fs-26 {
            font-size: 24px;
        }
    }

    .cropped-image {
        width: 100%;
        aspect-ratio: 386 / 277;
        /* Maintains the desired ratio */
        object-fit: cover;
        /* Ensures cropping without distortion */
        object-position: top;
        /* Focuses on the upper part */
    }

    @media (max-width: 576px) {

        /* Bootstrap 'sm' breakpoint */
        #slider {
            display: none !important;
        }
    }

    .careers-accordion 
    h2{
        font-size: 16px;
        line-height: 24px;
        font-weight: 600;
        padding: 0px;
        margin: 0px;
        text-transform: capitalize;
        color: #000;
    }

    .careers-accordion:hover h2,.careers-accordion.clicked h2{
    color: #fff !important;
}

</style>

<!-- <div class="container">
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
                </div> -->
<!-- Slider
                  ============================================= -->
@php
$programme_banner_path = $programme->programme_banner_path;
$programme_brochure_path = $programme->programme_brochure_path;
$prog_duration_with_intersnhip = $programme->prog_duration_with_intersnhip;
$prog_duration_without_intersnhip = $programme->prog_duration_without_intersnhip;
$prog_duration_type_without_internship = $programme->prog_duration_type_without_internship;
$prog_duration_type_with_internship = $programme->prog_duration_type_with_internship;

@endphp

@if (!empty($programme_banner_path) && $programme->video_section_flag == 'Y')
<div id="slider" class="slideshow-container  d-none d-sm-block"
    style="position: relative; width: 100%; aspect-ratio: 3173 / 1354; overflow: hidden;">
    <img class="d-none d-sm-block" src="{{ asset($programme->programme_banner_path) }}" alt="Programme Banner"
        style="width: 100%; height: 100%; object-fit: cover; display: block;">

    <div class="text d-none d-sm-block"
        style="color: #000000;">
        <h1>{{ $programme->prog_name }}</h1>
        @if ($prog_duration_without_intersnhip || $prog_duration_with_intersnhip)
        <p class="mb-3">Duration :
            @if ($prog_duration_without_intersnhip)
            {{ $prog_duration_without_intersnhip }} {{ $prog_duration_type_without_internship }}
            @endif
            @if ($prog_duration_without_intersnhip && $prog_duration_with_intersnhip)
            +
            @endif
            @if ($prog_duration_with_intersnhip)
            {{ $prog_duration_with_intersnhip }} {{ $prog_duration_type_with_internship }} (Internship)
            @endif
        </p>
        @endif

        <p class="mb-3">Build Your Future with {{ $programme->prog_name }}</p>

        @if (!in_array($programme->cd_id, [2, 3]) && $programme->apply_now_button_flag !== 'N')
        <a href="https://admissions.tmu.ac.in/" class="tmu-btn btn-4 px-3 py-1 px-lg-5 py-lg-2 ms-5">Apply
            Now</a>
        @endif
    </div>
</div>


@endif

@if (!empty($programme_brochure_path) && $programme->video_section_flag == 'Y')
<!-- <div class="banner d-block d-sm-none" style="max-height: 85.1vh; background-image: url({{ asset($programme_brochure_path) }});">
                        <div class="ban-text">
                            <div class="col-xs-6 ban-text">
                                <h1 class="display-4 fw-bolder ls-n-1 text-light fs-5 mb-3 mt-3 text-center">
                                    Build Your Future with {{ $programme->prog_name }}
                                </h1>
                                <a class="my-button-blk tmu-btn btn-1 px-5 py-2 d-block mx-auto w-fit-content" href="https://admissions.tmu.ac.in/">Apply Now</a>
                            </div>
                        </div>
                    </div> -->
<div class="banner d-block d-sm-none">
    <!-- Image Div -->
    <div class="ban-image">
        <img src="{{ asset($programme_brochure_path) }}" alt="Programme Brochure"
            class="cropped-image img-fluid w-100">
    </div>

    <!-- Text and Button Div -->
    <div class="ban-text text-center p-3 mb-2" style="background-color: rgba(0, 15, 84);">

        <h1 class="display-4 fw-bolder ls-n-1 text-light  mb-3 mt-3" style="font-size:1.7rem">
            {{ $programme->prog_name }}
        </h1>
        @if ($prog_duration_without_intersnhip || $prog_duration_with_intersnhip)
        <p class="mb-3" style="color:white;">Duration :
            @if ($prog_duration_without_intersnhip)
            {{ $prog_duration_without_intersnhip }} {{ $prog_duration_type_without_internship }}
            @endif
            @if ($prog_duration_without_intersnhip && $prog_duration_with_intersnhip)
            +
            @endif
            @if ($prog_duration_with_intersnhip)
            {{ $prog_duration_with_intersnhip }} {{ $prog_duration_type_with_internship }} (Internship)
            @endif
        </p>
        @endif

        <h2 class="display-4 fw-bolder ls-n-1 text-light mb-3 mt-3" style="font-size:1rem;">
            Build Your Future with {{ $programme->prog_name }}
        </h2>

        <!-- <h2 class="display-4 fw-bolder ls-n-1 text-light mb-3 mt-3" style="font-size:1rem;">
                            Build Your Future with {{ $programme->prog_name }}
                        </h2> -->
        @if (in_array($programme->cd_id, [2, 3]) || $programme->apply_now_button_flag == 'N')
        <!-- If cd_id is 2 or 3, disable the button -->
        @else
        <!-- If cd_id is NOT 2 or 3, show the active button -->
        <a class="my-button-blk tmu-btn btn-1 px-5 py-2 d-block mx-auto w-fit-content"
            href="https://admissions.tmu.ac.in/">Apply Now</a>
        @endif

    </div>
</div>

@endif


<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">

@if ($programme->usp_section_flag == 'Y' && !empty($programme->about_prog))
<!-- Scholarship code start -->
<div class="container mt-2">
    <div class="row justify-content-center ">
        <div class="col-xl-10 col-lg-10 text-center d-none d-sm-block">
            <h2 class="tmu-text-primary fs-26 mb-0 pb-0"><span>About</span>
                <span>{{ $programme->prog_name }}</span>
            </h2>
        </div>

    </div>


    {!! $programme->about_prog !!}


</div>
@endif

@if ($programme->fee_structure_section_flag == 'Y' && !empty($fee_details))
<!-- Fee Structure code start -->
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-xl-10 col-lg-10 text-center mt-4">
            <h2 class="tmu-text-primary fs-26 mb-0 pb-0"><span>Fee Structure for
                </span><span>{{ $programme->prog_name }}</span></h2>

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
                        <td>{{ $i }}</td>
                        <td class="fee_details_fetch">
                            <span>
                                <span class="fi fi-af"></span>
                            </span>
                            <span>{{ $fee_description }}</span>
                        </td>
                        <td class="fee_details_fetch">Rs {{ $fee_amount }} /- (
                            @if ($fee_payment_schedule == 'Semester')
                            per Semester
                            @elseif ($fee_payment_schedule == 'Year')
                            per Year
                            @elseif ($fee_payment_schedule == 'One Time')
                            One Time
                            @else
                            Unknown Payment Schedule
                            @endif
                            )
                        </td>
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

        </div>
        <div class="col-md-4">
            <div class="npf_wgts" data-height="400px" data-w="fced4875037a3071c2bc93dc1c15ae45"></div>
        </div>
    </div>
</div>



@if ($programme->scholarship_section_flag == 'Y' && !empty($programme->scholarship_scheme))
<!-- Scholarship code start -->
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-xl-10 col-lg-10 text-center d-none d-sm-block">
            <h2 class="tmu-text-primary fs-26 mb-0 pb-0"><span>{{ $programme->prog_name }}</span> <span>
                    Scholarships 2025 </span></h2>
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
@if (
$programme->eligibility_section_flag == 'Y' &&
!empty($programme->eligibility) &&
!empty($programme->criteria_merit))
<section>

    <div class="container" style="margin-top: 12px; margin-bottom: 8px;">


        <div class="row align-items-lg-center min-vh-lg-100">
            <div class="col-lg-6">
                <img src="{{ asset('eligiblity.jpg') }}" alt="Girl in a jacket" class="mx-auto d-block">
            </div>

            <div class="col-lg-6 align-self-center">
                <h2 class="tmu-text-primary mb-3 fs-26 lh-sm mt-4 mb-0 pb-0">
                    <span>{{ $programme->prog_name }}</span><span> Eligibility Criteria & Selection Process </span>
                </h2>
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


@if ($programme->our_recruiters_section_flag == 'Y')
<section>
    <div class="container-fluid mt-5 ">
        <h2 class="tmu-text-primary text-center fs-26 mb-0 pb-0">
            <span></span><span> Recruiters</span>
        </h2>
        <div class="marquee my-5 py-5 pt-4">


            <section class="marquee-content more-content">
                @foreach ($recruiters as $recruiter)
                <div class="marquee-block">
                    <a href="#"><img src="{{ asset($recruiter->recruiter_image_path) }}"
                            alt="{{ $recruiter->alt_tag }}"></a>
                </div>
                @endforeach
            </section>
            <section class="marquee-content more-content">
                @foreach ($recruiters as $recruiter)
                <div class="marquee-block">
                    <a href="#"><img src="{{ asset($recruiter->recruiter_image_path) }}"
                            alt="{{ $recruiter->alt_tag }}"></a>
                </div>
                @endforeach
            </section>
        </div>
    </div>
</section>
@endif
<!-- Section for recruiter end -->



@if ($programme->faq_section_flag == 'Y')
<section class="my-5">
    <div class="container">
        <h2 class="tmu-text-primary mb-3 fs-26 lh-sm mt-4 mb-0 pb-0 text-center">
            <span>{{ str_ireplace('programme', '', $programme->prog_name) }}</span><span> Programme Overview </span>
        </h2>




        <div class="row mx-0">
    @foreach ($faqs as $index => $faq)
    <button class="careers-accordion {{ $index == 0 ? 'active' : '' }}">
        <h2><i class="fa-solid fa-sm fakash"></i>&nbsp;&nbsp;{{ $faq->faq_question }}</h2>
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
    <button class="careers-accordion"><span> <i class="fa-solid fa-sm fakash"></i>&nbsp;&nbsp;{{ $faq->faq_question }}</span> <span class="icon">+</span></button>
                            <div class="panel {{ $index == 0 ? 'active' : '' }}"> @php echo $faq->faq_answer @endphp</div>
                            <hr class="horizontal-line">
    @endforeach
                        </div> -->
    </div>
</section>
@endif
<!-- Section for FAQ end -->

&lt;script type="text/javascript"&gt; var s=document.createElement("script"); s.type="text/javascript"; s.async=true; s.src="https://widgets.nopaperforms.com/emwgts.js"; document.body.appendChild(s); &lt;/script&gt;

@endsection