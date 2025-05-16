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

        .careers-accordion h2 {
            font-size: 16px;
            line-height: 24px;
            font-weight: 600;
            padding: 0px;
            margin: 0px;
            text-transform: capitalize;
            color: #000;
        }

        .careers-accordion:hover h2,
        .careers-accordion.clicked h2 {
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


    <div class="container">
        <div class="row">
            <div class="justitfy-content-center">
                @if ($programme->usp_section_flag == 'Y' && !empty($programme->about_prog))
                    <!-- Scholarship code start -->
                    <div class="container mt-2">
                        <div class="row ">
                            <div class="col-xl-10 col-lg-10 text-center d-none d-sm-block mx-auto">
                                <h2 class="tmu-text-primary fs-26 mb-0 pb-0 text-center"><span>About</span>
                                    <span>{{ $programme->prog_name }}</span>
                                </h2>
                            </div>
                        </div>
                        {!! $programme->about_prog !!}


                    </div>
                @endif

            </div>

        </div>
    </div>

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

    <div class="video-wrapper">
        <div id="player" data-plyr-provider="youtube" data-plyr-embed-id="71Qw7YYS_nM"></div>
        <button class="custom-play-button" id="customPlayBtn" aria-label="Play/Pause Vide">
            <i class="fas fa-play" id="playIcon"></i>
        </button>
    </div>

    <div class="container mt-4">
        <div class="row d-flex">
            <div class="col-md-8">
                <img src="{{ asset('assets/img/programmes_offered/form-side-banner.png') }}" alt="" class="w-100">
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
        <!-- Fee Structure code start -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10 text-center mt-4">
                    <h2 class="tmu-text-primary fs-26 mb-2 pb-0 text-center">
                        <span>{{ str_ireplace(['programme', 'at tmu'], '', $programme->prog_name) }}
                        </span><span>Fees</span>
                    </h2>

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
                <h2 class="tmu-text-primary fs-26 lh-sm mt-4 mb-3 pb-0 text-center">
                    <span>{{ str_ireplace('programme', '', $programme->prog_name) }}</span><span> Programme Overview
                    </span>
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
