@extends('layouts.programme')
@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/course.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/programme.css') }}">

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

    <div class="text d-none d-sm-block" style="color: #000000;">
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
            @php
                $btnClass = $programme->apply_now_button_color === 'B' ? 'btn-4' : 'btn-1';
            @endphp
            <a href="https://admissions.tmu.ac.in/"
                class="tmu-btn {{ $btnClass }} px-3 py-1 px-lg-5 py-lg-2 ms-4">
                Apply Now
            </a>
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


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    {{-- Main container for the new "About Program" section --}}
    <div class="enhanced-about-program-section">
        <div class="container"> {{-- Assuming 'container' is your site's standard Bootstrap-like container --}}
            <div class="row justify-content-center"> {{-- Centering the content block --}}
                <div class="col-lg-10 col-md-12"> {{-- Controlling max width on larger screens --}}

                    @if ($programme->usp_section_flag == 'Y' && !empty($programme->about_prog))
                        <div class="enhanced-about-content-wrapper">
                            <div class="ss-header text-center mb-0">
                                <h2 class="ss-section-main-title">
                                    <span class="ss-title-prefix">About</span>
                                    {{ $programme->prog_name ?? 'Our Program' }}
                                </h2>
                            </div>
                            <div class="enhanced-about-header">
                                <p class="section-tagline">
                                    Discover how the {{ $programme->prog_name }} program at TMU can shape your future and
                                    empower you to make a meaningful impact in your chosen field.
                                </p>
                            </div>

                            {{-- Dynamic Program Description Area --}}
                            <div class="enhanced-about-prose">
                                {!! $programme->about_prog !!}
                            </div>

                           

                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>

{{-- Section: Refined Specializations/Programs Showcase --}}
@php
// Placeholder data for standalone testing. Remove when integrating.
if (!isset($programme)) {
    $programme = (object)['prog_name' => 'Agricultural Sciences'];
}
if (!isset($specializations)) {
    $specializations = [
        [
            'image_path' => 'https://images.pexels.com/photos/2132126/pexels-photo-2132126.jpeg?auto=compress&cs=tinysrgb&w=400',
            'title' => 'BSc (Hons.) Agriculture (ICAR-Accredited)',
            'page_link' => '#'
        ],
        [
            'image_path' => 'https://images.pexels.com/photos/416676/pexels-photo-416676.jpeg?auto=compress&cs=tinysrgb&w=400',
            'title' => 'MSc - Agronomy & Crop Science Innovations',
            'page_link' => '#'
        ],
        [
            'image_path' => 'https://images.pexels.com/photos/2804047/pexels-photo-2804047.jpeg?auto=compress&cs=tinysrgb&w=400',
            'title' => 'MSc Plant Pathology & Protection',
            'page_link' => '#'
        ],
        [
            'image_path' => 'https://images.pexels.com/photos/7004606/pexels-photo-7004606.jpeg?auto=compress&cs=tinysrgb&w=400',
            'title' => 'MSc Soil Science & Land Management',
            'page_link' => '#'
        ],
        [
            'image_path' => 'https://images.pexels.com/photos/1002703/pexels-photo-1002703.jpeg?auto=compress&cs=tinysrgb&w=400',
            'title' => 'PhD in Agricultural Biotechnology Research',
            'page_link' => '#'
        ]
    ];
}
@endphp

<section class="specializations-showcase-section refined-program-cards">
    <div class="container">
        <div class="ss-header text-center">
            <h2 class="ss-section-main-title">
                <span class="ss-title-prefix">Explore Our Specialized</span>
                {{ $programme->prog_name ?? 'Program Offerings' }}
            </h2>
        </div>

        @if (!empty($specializations))
            {{-- Wrapper for horizontal scroll on mobile --}}
            <div class="rpc-cards-mobile-scroll-wrapper">
                <div class="row row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-4 justify-content-center rpc-cards-row">
                    @foreach ($specializations as $index => $spec)
                        <div class="col d-flex align-items-stretch rpc-card-col">
                            <div class="rpc-card" data-aos="fade-up" data-aos-delay="{{ $index * 50 }}">
                                <div class="rpc-card-image-wrapper">
                                    <img src="{{ $spec['image_path'] ?? 'https://via.placeholder.com/400x250/e0e0e0/999999?text=Program+Image' }}" alt="{{ $spec['title'] }} image" class="rpc-card-img">
                                </div>
                                <div class="rpc-card-content">
                                    <h4 class="rpc-card-title">{{ $spec['title'] }}</h4>
                                    <a href="{{ $spec['page_link'] ?? '#' }}" class="rpc-card-cta-button">
                                        View More
                                    </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center p-5 bg-light rounded shadow-sm">
                <i class="fas fa-graduation-cap fa-3x text-muted mb-3"></i>
                <h4 class="text-muted">Program Details Coming Soon</h4>
                <p>Information about our specialized programs will be available shortly.</p>
            </div>
        @endif
    </div>
</section>

    <style>
        .framer {
            border-radius: 20px;
            width: 60vw;
            margin: auto;
            height: 54vh;
        }

        @media screen and (max-width:992px) {
            .framer {
                height: 24vh;
            }
        }

        @media screen and (max-width:992px) {
            .framer {
                width: 90vw;
                height: 28vh;
            }

        }
    </style>

    <style>
        .video-wrapper {
            position: relative;
            max-width: 960px;
            margin: 0 auto;
            aspect-ratio: 16/9;
        }

        .custom-play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 10;
            font-size: 3rem;
            background-color: rgba(0, 0, 0, 0.6);
            border: none;
            color: white;
            border-radius: 50%;
            width: 80px;
            height: 80px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: opacity 0.3s ease;
        }

        .custom-play-button:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }



        .player-wrapper {
            max-width: 960px;
            margin: 50px auto;
            aspect-ratio: 16 / 9;
            background: #000;
        }

        .plyr {
            border-radius: 20px;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('assets/css/custom-player.css') }}" />

    <div class="video-wrapper mt-3">
        <div id="player" data-plyr-provider="youtube" data-plyr-embed-id="71Qw7YYS_nM"></div>
        <button class="custom-play-button" id="customPlayBtn" aria-label="Play/Pause Vide">
            <i class="fas fa-play" id="playIcon"></i>
        </button>
    </div>

    <div class="container mt-4">
        <div class="row d-flex">
            <div class="col-md-8">
                <img src="{{ asset('assets/img/programmes_offered/form-side-banner.png') }}" alt=""
                    class="w-100">
            </div>
            <div class="col-md-4 pt-5">
                <h2 class="tmu-text-primary text-center" style="font-size:1.7rem !important; line-height:1.5rem">
                    <span>Apply For Admissions</span><span></span>
                </h2>
                <div class="npf_wgts" data-height="600px" data-w="fced4875037a3071c2bc93dc1c15ae45"></div>
            </div>
        </div>
    </div>



    @if ($programme->fee_structure_section_flag == 'Y' && !empty($fee_details))
    <div class="enhanced-fees-section"> {{-- Main wrapper for this section --}}
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12"> {{-- Controls max width --}}
                    <div class="enhanced-fees-content-wrapper"> {{-- Card-like container --}}

                        {{-- Section Header --}}
                        <div class="enhanced-fees-header">
                            <h2 class="section-main-title">
                                <span class="title-suffix">FEES</span>
                            </h2>
                            <p class="section-tagline">
                                A transparent breakdown of the investment in your future.
                            </p>
                        </div>

                        {{-- Fees Table --}}
                        <div class="enhanced-fees-table-container"> {{-- This container will handle horizontal scroll on mobile --}}
                            <table class="enhanced-fees-table">
                                <thead>
                                    <tr>
                                        <th class="col-sno">S.No</th>
                                        <th class="col-details">Fee Details</th>
                                        <th class="col-amount">Amount</th>
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
                                            <td>{{ $fee_description }}</td>
                                            <td>
                                                Rs {{ number_format((float) $fee_amount, 0) }} /-
                                                <span class="payment-schedule">
                                                    (@if ($fee_payment_schedule == 'Semester')
                                                        per Semester
                                                    @elseif ($fee_payment_schedule == 'Year')
                                                        per Year
                                                    @elseif ($fee_payment_schedule == 'One Time')
                                                        One Time
                                                    @else
                                                        {{ $fee_payment_schedule }}
                                                    @endif)
                                                </span>
                                            </td>
                                        </tr>
                                        @php
                                            $i++;
                                        @endphp
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{-- Optional Fees Note Removed --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif



    @if ($programme->scholarship_section_flag == 'Y' && !empty($programme->scholarship_scheme))
        <!-- Scholarship code start -->
        <div class=" tmu-programme-scholarship px-4 px-md-none">
            <div class="row justify-content-center ">
                <div class="col-xl-10 col-lg-10 text-center d-none d-sm-block">
                    <div class="ss-header text-center">
                        <h2 class="ss-section-main-title">
                            <span class="ss-title-prefix">{{ $programme->prog_name ?? 'Our Program' }} </span>
                            Scholarships 2025
                        </h2>
                    </div>
                </div>


            </div>

            @php
                echo $programme->scholarship_scheme;
            @endphp

        </div>
    @endif



    <!-- Scholarship code end -->



    @if (
        $programme->eligibility_section_flag == 'Y' &&
            !empty($programme->eligibility) &&
            !empty($programme->criteria_merit)
    )
        <section class="enhanced-eligibility-section">
            <div class="container">
                {{-- Section Main Title --}}
                <div class="enhanced-eligibility-main-header">
                    <div class="ss-header text-center">
                        <h2 class="ss-section-main-title">
                            <span class="ss-title-prefix">{{ $programme->prog_name }}</span>
                            ELIGIBILITY & SELECTION
                        </h2>
                    </div>


                    <p class="section-tagline">
                        Your pathway to joining our esteemed program. Understand the criteria and process.
                    </p>
                </div>
    
                <div class="row align-items-stretch"> {{-- align-items-stretch helps cards have same height if needed --}}
                    {{-- Image Column --}}
                    <div class="col-lg-5 enhanced-eligibility-image-col">
                        {{-- Replace with a dynamic, high-quality, relevant image --}}
                        {{-- For a modern look, this image could be a background with text overlay or a framed image --}}
                        <div class="eligibility-image-placeholder">
                            {{-- Consider an SVG icon or a very clean graphic here if a photo isn't ideal --}}
                            {{-- For example, a large stylized checkmark or academic cap icon --}}
                            <img src="https://images.pexels.com/photos/5905709/pexels-photo-5905709.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Eligibility criteria illustration - students studying">
                            {{-- Placeholder: Students studying - choose a relevant, high-quality image --}}
                        </div>
                    </div>
    
                    {{-- Content Column --}}
                    <div class="col-lg-7 enhanced-eligibility-content-col">
                        <div class="eligibility-criteria-wrapper">
                            {{-- Eligibility Card --}}
                            <div class="criteria-card eligibility-card">
                                <div class="card-icon-header">
                                    <i class="bi bi-check2-circle card-icon"></i> {{-- Bootstrap Icon example --}}
                                    {{-- <i class="fas fa-user-check card-icon"></i> --}} {{-- Font Awesome Icon example --}}
                                    <h3 class="card-title">Eligibility Criteria</h3>
                                </div>
                                <div class="card-content">
                                    @php
                                        // Assuming $programme->eligibility contains plain text or simple HTML (like <p> or <ul>)
                                        // If it's just a string, wrap it in <p> for consistent styling.
                                        // For more complex HTML, ensure it's well-formed.
                                        echo '<div class="criteria-text">' . $programme->eligibility . '</div>';
                                    @endphp
                                </div>
                            </div>
    
                            {{-- Selection Process Card --}}
                            <div class="criteria-card selection-card">
                                 <div class="card-icon-header">
                                    <i class="bi bi-diagram-3 card-icon"></i> 
                                    <h3 class="card-title">Criteria of Merit</h3>
                                </div>
                                <div class="card-content">
                                     @php
                                        echo '<div class="criteria-text">' . $programme->criteria_merit . '</div>';
                                    @endphp
                                </div>
                            </div>
                        </div>
                        <div class="eligibility-cta-note">
                            <p>Have questions about the criteria or process? Our admissions team is here to help!</p>
                            <a href="https://admissions.tmu.ac.in/" target="_blank" class="cta-button primary-cta small-cta">Contact Admissions</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif


{{-- Assuming $recruiters and $programme are passed from the controller --}}
{{-- And you have placement stats like $placementAssistance, $companiesOnboarded --}}
@php
    // Placeholder data for standalone testing. Remove when integrating.
    if (!isset($programme)) {
        $programme = (object)['prog_name' => 'Your Program Name'];
    }
    if (!isset($recruiters)) {
        $recruiters = collect([ // Using a collection for ->isEmpty() and ->count()
            (object)['recruiter_image_path' => 'path/to/logo1.png', 'alt_tag' => 'Company A Logo'],
            (object)['recruiter_image_path' => 'path/to/logo2.png', 'alt_tag' => 'Company B Logo'],
            (object)['recruiter_image_path' => 'path/to/logo3.png', 'alt_tag' => 'Company C Logo'],
            (object)['recruiter_image_path' => 'path/to/logo4.png', 'alt_tag' => 'Company D Logo'],
            (object)['recruiter_image_path' => 'path/to/logo5.png', 'alt_tag' => 'Company E Logo'],
            (object)['recruiter_image_path' => 'path/to/logo6.png', 'alt_tag' => 'Company F Logo'],
        ]);
    }
    $placementAssistance = "100%";
    $companiesOnboarded = "200+";
    $highestPackage = "65 LPA";
@endphp

<section class="recruiters-light-section">
    <div class="container">
        {{-- Section Header --}}
        <div class="rl-header text-center">
            <h2 class="rl-section-main-title">
                <span class="rl-title-prefix">OUR ESTEEMED</span>
                <span class="rl-title-highlight">RECRUITING PARTNERS</span>
            </h2>
            <p class="rl-section-tagline">
                Connecting talent with industry leaders to foster successful careers and drive innovation.
            </p>
        </div>

        {{-- Placement Stats Bar (Light Theme) --}}
        <div class="rl-placement-stats-bar">
            <div class="rl-stat-item">
                <span class="rl-stat-figure">{{ $placementAssistance ?? '100%' }}</span>
                <span class="rl-stat-description">Placement Assistance</span>
            </div>
            <div class="rl-stat-item">
                <span class="rl-stat-figure">{{ $companiesOnboarded ?? '200+' }}</span>
                <span class="rl-stat-description">Companies Onboarded</span>
            </div>
            <div class="rl-stat-item">
                <span class="rl-stat-figure">{{ $highestPackage ?? 'Top Tier' }}</span>
                <span class="rl-stat-description">Highest Package Offered</span>
            </div>
            <div class="rl-cta-action d-none">
                <a href="#career-opportunities" class="rl-cta-button">
                    Explore Career Opportunities<i class="fas fa-arrow-right ms-1"></i>
                </a>
            </div>
        </div>

        {{-- Recruiters Logo Grid --}}
        @if ($recruiters->count() > 0)
            <div class="rl-logo-grid">
                @foreach ($recruiters as $recruiter)
                    <div class="rl-logo-item-wrapper" data-aos="zoom-in" data-aos-delay="{{ ($loop->index % 4) * 100 }}">
                        <div class="rl-logo-card">
                            <img src="{{ asset($recruiter->recruiter_image_path) }}" alt="{{ $recruiter->alt_tag ?: 'Recruiter Logo' }}" title="{{ $recruiter->alt_tag ?: 'Our Valued Recruiter' }}">
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center text-muted-light p-4">Our network of esteemed recruiters is continuously growing. Stay tuned for updates.</p>
        @endif
    </div>
</section>


{{-- Section: Sculpted Curriculum Flow with Collapsible Courses --}}
@php
    // Placeholder data for standalone testing. Remove when integrating.
    if (!isset($programme)) {
        $programme = (object)['prog_name' => 'B.Pharm.'];
    }
    if (!isset($curriculumData)) {
        $curriculumData = [
            [
                'semester_name' => 'Semester I',
                'id' => 'sculpted-sem-i',
                'overview' => 'Laying the groundwork with fundamental scientific principles and an introduction to pharmaceutical sciences.',
                'courses' => [
                    ['code' => 'BP101T', 'title' => 'Human Anatomy and Physiology I', 'credits' => 4],
                    ['code' => 'BP102T', 'title' => 'Pharmaceutical Analysis I', 'credits' => 4],
                    ['code' => 'BP103T', 'title' => 'Pharmaceutics I', 'credits' => 4],
                    ['code' => 'BP104T', 'title' => 'Pharmaceutical Inorganic Chemistry', 'credits' => 4],
                ]
            ],
            [
                'semester_name' => 'Semester II',
                'id' => 'sculpted-sem-ii',
                'overview' => 'Continuing the exploration of core pharmaceutical subjects and introductory biochemistry.',
                'courses' => [
                    ['code' => 'BP201T', 'title' => 'Human Anatomy and Physiology II', 'credits' => 4],
                    ['code' => 'BP202T', 'title' => 'Pharmaceutical Organic Chemistry I', 'credits' => 4],
                    ['code' => 'BP203T', 'title' => 'Biochemistry', 'credits' => 4],
                    ['code' => 'BP204T', 'title' => 'Pathophysiology', 'credits' => 4],
                ]
            ],
            [
                'semester_name' => 'Year II (Sem III & IV)',
                'id' => 'sculpted-year-ii',
                'overview' => 'Advancing into complex organic chemistry, physical pharmaceutics, and microbiology.',
                'courses' => [
                    ['code' => 'BP301T', 'title' => 'Pharmaceutical Organic Chemistry II', 'credits' => 4],
                    ['code' => 'BP302T', 'title' => 'Physical Pharmaceutics I', 'credits' => 4],
                    ['code' => 'BP303T', 'title' => 'Pharmaceutical Microbiology', 'credits' => 4],
                    ['code' => 'BP304T', 'title' => 'Pharmaceutical Engineering', 'credits' => 4],
                ]
            ]
        ];
    }
@endphp

<section class="sculpted-curriculum-section d-none">
    <div class="container">
        <div class="career-showcase-header text-center mb-4">
            <h2 class="career-showcase-main-title">
                <span class="career-showcase-title-prefix">Programmme Curriculum</span>
                 {{ $programme->prog_name ?? 'This Program' }}
            </h2>
        </div>

        @if (!empty($curriculumData))
            <div class="sc-semesters-container" id="curriculumAccordionParent"> {{-- Added ID for data-bs-parent --}}
                @foreach ($curriculumData as $index => $semester)
                    <div class="sc-semester-module" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="{{ $index * 50 }}">
                        {{-- MODIFIED: Semester header is now a button for collapse --}}
                        <button
                            class="sc-semester-header-trigger"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapse-{{ $semester['id'] }}"
                            aria-expanded="{{ $loop->first ? 'true' : 'false' }}"
                            aria-controls="collapse-{{ $semester['id'] }}"
                        >
                            <div class="sc-semester-header-content">
                                <span class="sc-semester-icon-accent">
                                    <i class="fas fa-bookmark"></i>
                                </span>
                                <h3 class="sc-semester-name">{{ $semester['semester_name'] }}</h3>
                                <span class="sc-semester-course-count">{{ count($semester['courses']) }} Courses</span>
                                <span class="sc-collapse-indicator">
                                    <i class="fas fa-chevron-down"></i>
                                </span>
                            </div>
                        </button>

                        {{-- MODIFIED: Semester content is now collapsible --}}
                        <div
                            class="collapse @if($loop->first) show @endif sc-semester-content-collapsible"
                            id="collapse-{{ $semester['id'] }}"
                            data-bs-parent="#curriculumAccordionParent" {{-- Ensures only one is open at a time --}}
                        >
                            <div class="sc-semester-content">
                                @if(!empty($semester['overview']))
                                    <p class="sc-semester-overview">{{ $semester['overview'] }}</p>
                                @endif
                                @if (!empty($semester['courses']))
                                    <div class="sc-courses-list">
                                        @foreach ($semester['courses'] as $course)
                                            <div class="sc-course-entry">
                                                <span class="sc-course-title">{{ $course['title'] }}</span>
                                                <div class="sc-course-meta">
                                                    <span class="sc-course-code">{{ $course['code'] }}</span>
                                                    <span class="sc-course-credits">{{ $course['credits'] }} Credits</span>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @else
                                    <p class="sc-no-courses text-muted">Course details for this module are being refined.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
             <div class="text-center p-5 my-5">
                <i class="fas fa-feather-alt fa-3x mb-3" style="color: #d0d0d0 !important;"></i>
                <h4 style="font-family: 'Poppins', sans-serif; color: #777 !important; font-weight:300;">Curriculum Design in Progress</h4>
                <p style="color: #999 !important; font-size: 0.95rem;">The detailed learning journey will be unveiled shortly.</p>
            </div>
        @endif
    </div>
</section>

{{-- Assuming $careerTitles and $programme are passed from the controller --}}

<?php

$careerTitles = [
    'Management Consultant',
    'Marketing Manager',
    'Operations Manager',
    'Financial Analyst',
    'Human Resources Manager',
    'Business Development Manager',
    'Product Manager',
    'Supply Chain Manager',
    'Chief Executive Officer (CEO)',
    'Entrepreneur / Founder',
    'Strategy Director',
    'Healthcare Administrator'
];


?>

<section class="career-showcase-section py-5 d-none" id="career-opportunities">
    <div class="container">
        {{-- Reusing the Header Style You Liked --}}
        <div class="career-showcase-header text-center mb-4">
            <h2 class="career-showcase-main-title">
                <span class="career-showcase-title-prefix">YOUR CAREER PATHWAYS</span>
                Career Opportunities After {{ $programme->prog_name ?? 'This Program' }}
            </h2>
        </div>

        {{-- New Content Layout Inspired by Your Image --}}
        <div class="career-showcase-content mt-4 mt-lg-5">
            <div class="row align-items-center g-4 g-lg-5">
                <div class="col-md-5 text-center text-md-start">
                    <div class="career-showcase-image-wrapper">
                        {{--
                            Replace with your actual image.
                            Recommended image size: at least 600px wide, consider aspect ratio around 4:3 or 5:4
                        --}}
                        <img src="https://images.pexels.com/photos/3184418/pexels-photo-3184418.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                             alt="Dynamic career paths and success in {{ $programme->prog_name ?? 'Finance' }}"
                             class="img-fluid rounded shadow-lg">
                             {{-- BS5 classes: img-fluid, rounded, shadow-lg --}}
                    </div>
                </div>
                <div class="col-md-7">
                    <p class="career-showcase-intro-text mb-3">
                        Here are several prominent career paths you can pursue after earning your {{ $programme->prog_name ?? 'degree' }}:
                    </p>
                    @if (!empty($careerTitles))
                        <ul class="career-showcase-list list-unstyled">
                            @foreach ($careerTitles as $title)
                                <li>
                                    <i class="fas fa-check-circle text-tmu-orange me-2"></i>{{ $title }}
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p>Career path information will be updated soon.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

    @if ($programme->faq_section_flag == 'Y')
        <section class="my-5">
            <div class="container">
                <div class="ss-header text-center">
                    <h2 class="ss-section-main-title">
                        {{-- <span class="ss-title-prefix">Programme Overview</span> --}}
                        Programme Overview
                    </h2>
                </div>




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

    <script type="text/javascript">
        var s = document.createElement("script");
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://widgets.nopaperforms.com/emwgts.js";
        document.body.appendChild(s);
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const urlPath = window.location.pathname.toLowerCase();

            // Check for MDS programme in URL
            if (urlPath.includes('/programme/mds')) {
                const rows = document.querySelectorAll('table tbody tr');

                rows.forEach(row => {
                    const cells = row.querySelectorAll('td.fee_details_fetch');

                    if (cells.length >= 2) {
                        const feeTypeText = cells[0].innerText.trim().toLowerCase(); // "Examination Fee"
                        const amountCell = cells[1];

                        if (feeTypeText.includes('examination fee') && amountCell.innerHTML.includes(
                                'per Year')) {
                            amountCell.innerHTML = amountCell.innerHTML.replace(/per Year/i,
                                'Whole Programme');
                        }
                    }
                });
            }
        });
    </script>


    <!-- Plyr JS -->
    <script src="{{ asset('assets/js/customplayer.js') }}"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const player = new Plyr('#player', {
                controls: [
                    'play',
                    'progress',
                    'current-time',
                    'duration',
                    'mute',
                    'volume',
                    'fullscreen'
                ],
                youtube: {
                    noCookie: true,
                    modestbranding: 1,
                    rel: 0,
                    showinfo: 0,
                    cc_load_policy: 0
                }
            });

            const customPlayBtn = document.getElementById('customPlayBtn');
            const playIcon = document.getElementById('playIcon');

            player.on('ready', () => {
                customPlayBtn.addEventListener('click', () => {
                    if (player.playing) {
                        player.pause();
                    } else {
                        player.play();
                    }
                });

                player.on('play', () => {
                    customPlayBtn.style.display = 'none';
                });

                player.on('pause', () => {
                    customPlayBtn.style.display = 'flex';
                });
            });
        });
    </script>



@endsection
