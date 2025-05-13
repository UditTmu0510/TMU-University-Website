@extends('layouts.university.news_single')
@section('content')

    <style>
        .grid-item {
            padding: 0;
            /* Remove any padding if you want the images to be closer together */
            margin-bottom: 20px;
            /* Adjust this value to increase row space */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Add shadow effect */
            border: 2px solid #FF7900;
            /* Add border with the specified color */
            border-radius: 5px;
            /* Optional: add border radius for better appearance */
            overflow: hidden;
            /* To ensure box-shadow is visible */
        }

        .row[data-lightbox="gallery"] {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            /* Adjust this value to reduce column space */
        }

        .col-4 {
            flex: 1 1 calc(33.333% - 10px);
            /* 3 items per row with space between */
        }

        .entry-content ul {
            padding-left: 0;
            /* Removes default padding */
            margin-left: 0;
            /* Removes default margin */
            list-style-position: inside;
            /* Moves the bullet inside the list item's padding */
        }

        .entry-content ol {
            padding-left: 0;
            /* Removes default padding */
            margin-left: 0;
            /* Removes default margin */
            list-style-position: inside;
            /* Moves the bullet inside the list item's padding */
        }

        .entry-content ul li {
            margin-bottom: 10px;
            /* Space between list items */
            padding-left: 30px;
            /* Align content with bullets */
            text-indent: -20px;
            /* Offset text indentation to align with bullet */
        }

        .entry-content ol li {
            margin-bottom: 10px;
            /* Space between list items */
            padding-left: 20px;
            /* Align content with bullets */
            text-indent: -15px;
            /* Offset text indentation to align with bullet */
        }



        @media (max-width: 768px) {

            /* Tablet and Mobile view */
            .col-4 {
                flex: 1 1 calc(50% - 10px);
                /* 2 items per row */
            }
        }
    </style>

    {{-- Insta Grid Styling code created by Udit Gupta 18-April-2025 starts here --}}
    <style>
        .insta-grid-container *:not(i) {
            font-family: 'Roboto', sans-serif;
        }

        .insta-grid-container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 5px 10px;
            border-bottom: 1px solid #ddd;
        }

        .insta-grid-header {
            display: flex;
            flex-direction: row;
            align-items: center;
            gap: 30px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .insta-grid-logo {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            padding: 2px;
            background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
        }

        .insta-grid-title {
            font-size: 1rem;
            font-weight: 700;
            margin-top: 0.75rem;
            padding-top: 0.85rem;
            margin-bottom: 10px;
        }

        .insta-grid-handle {
            font-size: 12px;
            color: gray;
            font-weight: 500;
            margin: 0;
        }

        .insta-grid-meta {
            font-size: 0.75rem;
            gap: 20px;
            margin-top: 5px;
            color: gray;
        }

        .insta-grid-meta span strong {
            display: block;
            font-weight: 700;
            color: black;
            font-size: 14px;
            margin-right: 2px;
        }

        .follow-btn {
            background-color: #0095f6;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 14px;
            cursor: pointer;
            padding: 8px 12px;
            transition: background-color 0.2s ease-in-out;
        }

        @media screen and (max-width: 768px) {
            .insta-grid-header {
                gap: 5px;
            }

            .insta-grid-logo {
                width: 45px;
                height: 45px;
            }

            .follow-btn {
                padding: 5px 10px;
            }
        }

        .follow-btn:hover {
            background-color: #1877f2;
        }

        .insta-post-wrapper {
            position: relative;
            overflow: hidden;
        }

        .insta-grid-img {
            transition: transform 0.3s ease-in-out;
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .insta-hover-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: all 0.3s ease-in-out;
            padding: 10px;
            text-align: center;
        }

        .insta-post-wrapper:hover .insta-hover-overlay {
            opacity: 1;
            transform: scale(1);
        }

        .likes-comments {
            display: flex;
            gap: 15px;
            font-size: 1rem;
            margin-bottom: 8px;
        }

        .caption {
            font-size: 0.8rem;
            line-height: 1.2;
        }


        @media (max-width: 768px) {
            .insta-grid-header {
                flex-direction: column;
                text-align: center;
            }

            .insta-grid-img {
                transition: transform 0.3s ease-in-out;
                width: 100%;
                height: 120px;
                object-fit: cover;
            }

            .classifier {
                flex-direction: row;
                align-items: center;
            }

            .insta-grid-meta {
                font-size: 0.85rem;
            }

            .insta-grid-meta span strong {
                font-size: 16px;
            }
        }

        @keyframes blinkColor {
            0% {
                color: red;
            }

            50% {
                color: blue;
            }

            100% {
                color: red;
            }
        }

        .blink-link {
            animation: blinkColor 1s infinite;
            text-decoration: none;
        }
    </style>


.

    {{-- Insta Grid Styling code created by Udit Gupta 18-April-2025 ends here --}}


    <style>
        /* Style for the container */
        .apply-now-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: linear-gradient(135deg, #001055 0%, #003087 100%);
            /* Gradient background */
            padding: 30px;
            border-radius: 15px;
            margin: 50px auto;
            margin-top: 80px;
            max-width: 1200px;
            position: relative;
            overflow: visible;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            /* Subtle shadow for depth */
            transition: transform 0.3s ease;
        }

        .apply-now-section:hover {
            transform: translateY(-5px);
            /* Slight lift on hover */
        }

        /* Style for the image */
        .apply-now-section img {
            width: 300px;
            position: absolute;
            right: 0px;
            /* Slightly outside the container for a modern look */
            bottom: 0px;
            z-index: 10;
            transition: transform 0.3s ease;
        }

        /* Style for the text content */
        .apply-now-content {
            color: white;
            max-width: 55%;
            z-index: 5;
        }

        .apply-now-content h2 {
            font-size: 24px;
            font-weight: 700;
            color: #fff;
            margin-bottom: 15px;
            letter-spacing: 1px;
            text-transform: uppercase;
            background: linear-gradient(to right, #ffffff, #d1d1d1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            /* Gradient text effect */
        }

        .apply-now-content p {
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 25px;
            opacity: 0.9;
            font-weight: 300;
        }

        /* Background design element */
        .background-design {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"%3E%3Ccircle cx="0" cy="0" r="150" fill="rgba(255, 255, 255, 0.05)" /%3E%3C/svg%3E') no-repeat top left;
            border-radius: 15px;
            z-index: 0;
            opacity: 0.3;
        }

        @media screen and (min-width:992px)
        {
            .bg-section{
                background: url({{ asset('assets/img/news/form-back.png') }}) no-repeat center center;
            }
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .apply-now-section {
                flex-direction: column;
                text-align: center;
                padding: 30px;
            }

            .apply-now-content {
                max-width: 100%;
                margin-bottom: 20px;
            }

            .apply-now-section img {
                display: none;
                /* Hide the image on mobile view */
            }

            .apply-now-content h2 {
                font-size: 28px;
            }

            .apply-now-content p {
                font-size: 16px;
            }
        }

        .ratio:before , ratio::before {
            padding-top:0;
        }
    </style>


<style>
    body {
        background-color: #f8f9fa; /* Your page's background */
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Your page's font */
        margin: 0; /* Ensure no default margin */
    }

    .tmu-video-section-container { /* Renamed for clarity if this is the outermost container for the section */
        padding: 60px 0;
        background-color: #ffffff; 
    }

    .tmu-video-section-title { /* Renamed for clarity */
        font-size: 2.5rem;
        font-weight: 700;
        color: #001f5b; /* Primary dark blue - ADJUST TO YOUR BRAND */
        margin-bottom: 40px;
        text-align: center;
        letter-spacing: -0.5px;
    }

    #tmuPlayerWrapper { /* Using ID for high specificity on the main wrapper */
        position: relative;
        width: 100%;
        max-width: 900px; 
        margin: 0 auto;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 31, 91, 0.15);
        background-color: #000000; /* Black background while video loads or if it fails */
    }

    #tmuPlayerWrapper .ratio-16x9 {
        border-radius: 15px; /* Ensure iframe respects rounded corners of wrapper */
    }

    #tmuPlayerWrapper iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0;
    }
    
    /* Click Interceptor: Covers entire video area, below controls */
    #tmuPlayerWrapper .tmu-video-click-interceptor {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%; 
        z-index: 1; /* Below custom controls and main play button */
        cursor: pointer;
    }

    #tmuPlayerWrapper .tmu-custom-controls {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        background: linear-gradient(to top, rgba(0, 15, 40, 0.9), rgba(0, 15, 40, 0.65));
        padding: 10px 15px;
        display: flex;
        align-items: center;
        z-index: 3; /* Above click interceptor and iframe content */
        opacity: 0;
        transition: opacity 0.3s ease-in-out;
        border-bottom-left-radius: 15px; /* Match wrapper */
        border-bottom-right-radius: 15px; /* Match wrapper */
    }

    #tmuPlayerWrapper:hover .tmu-custom-controls,
    #tmuPlayerWrapper.tmu-player-paused .tmu-custom-controls, /* Specific class when paused */
    #tmuPlayerWrapper.tmu-player-buffering .tmu-custom-controls { /* Specific class when buffering */
        opacity: 1;
    }

    #tmuPlayerWrapper .tmu-custom-controls .tmu-control-button { /* Specific class for control buttons */
        background: none;
        border: none;
        color: #ffffff;
        font-size: 1.3rem;
        margin-right: 15px;
        padding: 5px;
        line-height: 1;
        cursor: pointer;
        transition: color 0.2s ease, transform 0.1s ease;
    }
    #tmuPlayerWrapper .tmu-custom-controls .tmu-control-button:hover {
        color: #ff6600; /* Orange accent - ADJUST TO YOUR BRAND */
    }
    #tmuPlayerWrapper .tmu-custom-controls .tmu-control-button:active {
        transform: scale(0.9);
    }
    #tmuPlayerWrapper .tmu-custom-controls .tmu-control-button:focus {
        outline: none;
        box-shadow: none;
    }
    /* Remove margin from the last button */
    #tmuPlayerWrapper .tmu-custom-controls .tmu-control-button:last-of-type {
        margin-right: 0;
    }


    #tmuPlayerWrapper .tmu-progress-bar-container {
        flex-grow: 1;
        margin-right: 15px;
        height: 8px;
        display: flex;
        align-items: center;
    }

    #tmuPlayerWrapper .tmu-progress-bar {
        -webkit-appearance: none;
        appearance: none;
        width: 100%;
        height: 8px;
        background: rgba(255, 255, 255, 0.3);
        border-radius: 4px;
        outline: none;
        cursor: pointer;
        transition: box-shadow 0.2s ease;
    }
    #tmuPlayerWrapper .tmu-progress-bar:hover {
        box-shadow: 0 0 5px rgba(255, 102, 0, 0.5); /* Subtle glow on hover */
    }

    #tmuPlayerWrapper .tmu-progress-bar::-webkit-slider-thumb {
        -webkit-appearance: none;
        appearance: none;
        width: 16px;
        height: 16px;
        background: #ff6600; /* Orange accent */
        border-radius: 50%;
        cursor: pointer;
        margin-top: -4px; 
        box-shadow: 0 0 5px rgba(0,0,0,0.3);
        transition: transform 0.1s ease;
    }
    #tmuPlayerWrapper .tmu-progress-bar:active::-webkit-slider-thumb {
        transform: scale(1.2);
    }

    #tmuPlayerWrapper .tmu-progress-bar::-moz-range-thumb {
        width: 16px;
        height: 16px;
        background: #ff6600;
        border-radius: 50%;
        cursor: pointer;
        border: none;
        box-shadow: 0 0 5px rgba(0,0,0,0.3);
        transition: transform 0.1s ease;
    }
    #tmuPlayerWrapper .tmu-progress-bar:active::-moz-range-thumb {
        transform: scale(1.2);
    }

    #tmuPlayerWrapper .tmu-progress-bar::-moz-range-track {
        background: rgba(255, 255, 255, 0.3);
        height: 8px;
        border-radius: 4px;
    }
    #tmuPlayerWrapper .tmu-progress-bar::-moz-range-progress {
        background-color: #ff6600;
        height: 8px;
        border-radius: 4px;
    }

    #tmuPlayerWrapper .tmu-time-display {
        color: #ffffff;
        font-size: 0.85rem;
        min-width: 90px; 
        text-align: center;
        font-variant-numeric: tabular-nums; /* Ensures numbers don't jump around */
    }

    #tmuPlayerWrapper .tmu-main-play-button {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 4.5rem; /* Slightly smaller for modern feel */
        color: rgba(255, 255, 255, 0.85);
        background-color: rgba(0, 31, 91, 0.6); 
        border-radius: 50%;
        width: 90px; /* Adjusted size */
        height: 90px; /* Adjusted size */
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        z-index: 2; /* Above interceptor, same level as non-hovered controls */
        transition: background-color 0.3s ease, color 0.3s ease, transform 0.2s ease;
        border: 2px solid rgba(255,255,255,0.4);
    }
    #tmuPlayerWrapper .tmu-main-play-button:hover {
        color: #fff;
        background-color: rgba(255, 102, 0, 0.75); 
        border-color: rgba(255,255,255,0.7);
        transform: translate(-50%, -50%) scale(1.1); /* Slight zoom on hover */
    }

    /* Highly specific class to hide the main play button */
    #tmuPlayerWrapper .tmu-main-play-button.tmu-main-play-button--hidden {
        display: none !important; 
        opacity: 0;
        visibility: hidden;
        pointer-events: none;
    }

    @media (max-width: 768px) {
        .tmu-video-section-title {
            font-size: 2rem;
        }
        #tmuPlayerWrapper .tmu-custom-controls .tmu-control-button {
            font-size: 1.1rem;
            margin-right: 10px;
        }
        #tmuPlayerWrapper .tmu-time-display {
            font-size: 0.75rem;
            min-width: 75px;
        }
        #tmuPlayerWrapper .tmu-main-play-button {
            font-size: 3.5rem;
            width: 70px;
            height: 70px;
        }
    }
    @media (max-width: 480px) {
        #tmuPlayerWrapper .tmu-custom-controls {
            padding: 8px 10px;
        }
        #tmuPlayerWrapper .tmu-time-display {
            display: none; 
        }
         #tmuPlayerWrapper .tmu-progress-bar-container {
            margin-right: 10px;
        }
    }
    .fluid-width-video-wrapper {
    padding-top: 56.25% !important;
}
</style>
    <!-- Page Title
                          ============================================= -->
    <section class="news-page-title page-title bg-transparent">
        <div class="container">
            <div class="page-title-row">

                <div>
                    <h2
                        class="news-page-title-text text-uppercase tmu-text-primary tmu-page-heading text-center mb-1 mb-md-3">
                        <span>TMU </span><span> NEWS</span>
                    </h2>
                    <!-- <h2 class="news-page-title-text">TMU News</h2> -->
                </div>

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('tmuhome') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a
                                href="{{ route('all_news.post') }}">News</a></li>
                    </ol>
                </nav>

            </div>
        </div>
    </section><!-- .page-title end -->

    <!-- Content
                          ============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="container col-12 col-md-7">

                <div class="single-post mb-0">

                    <!-- Single Post
                              ============================================= -->
                    <div class="entry">

                        <!-- Entry Title
                               ============================================= -->
                        <div class="entry-title mb-3">
                            <h1 class="tmu-text-primary"><span>{!! html_entity_decode($news->event_title) !!}
                                </span><span></span></h1>
                        </div><!-- .entry-title end -->

                        <!-- Entry Meta
                               ============================================= -->
                        <div class="entry-meta  ">
                            <ul>
                                <li style="margin: 0 0 8px 0;"><i
                                        class="uil uil-schedule"></i>{{ \Carbon\Carbon::parse($news->event_date)->format('d-m-Y') }}
                                </li>
                                <li style="margin: 0 0 8px 0;">
                                    <i class="uil uil-folder-open"></i>
                                    <a href="#" class="category-link"
                                        data-category-id="{{ $categoryId }}">{{ $news->category }}</a>
                                </li>


                                <form id="categoryForm" method="POST" action="{{ route('all_news.post') }}"
                                    style="display: none;">
                                    @csrf
                                    <input type="hidden" name="filters_submitted" value="1">
                                    <input type="hidden" name="news_category" id="categoryInput">
                                </form>
                            </ul>
                        </div><!-- .entry-meta end -->

                        <!-- Entry Image
                               ============================================= -->
                        <div class="entry-image mb-5">
                            <a href="#">
                                <img src="{{ isset($news->ei1_path) && file_exists(public_path($news->ei1_path)) ? asset($news->ei1_path) : asset('uploads/events/past_event/default_banner_news.jpg') }}"
                                    alt="Blog Single">
                            </a>
                        </div><!-- .entry-image end -->

                        <!-- Entry Content
                               ============================================= -->
                        <div class="entry-content mt-0">

                            <!-- Post Single - Content End -->
                            @php
                            $content = nl2br(html_entity_decode($news->event_full_description));
                            $insertCode = '';
                        @endphp
                        
                        @if (!request()->ajax())
                            @php
                                $insertCode = '
                      <iframe width="405" height="228" src="https://www.youtube.com/embed/71Qw7YYS_nM" title="Admissions Open at Top Private University in India for 2025-26 | Teerthanker Mahaveer University" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen style="border-radius:20px;"></iframe>
                        <div class="container-fluid mt-4 p-0">
                            <div class="row d-flex align-items-center bg-section" style="min-height: 550px;">
                                <h2 class="tmu-text-primary text-center d-block d-md-none" style="font-size:1.7rem !important; line-height:1.5rem;">
                                    <span></span><span>Teerthanker Mahaveer University </span>
                                </h2>
                        
                                <div class="col-12 col-lg-6 d-flex justify-content-center">


                                </div>
                        
                                <div class="col-12 col-lg-6 d-flex justify-content-center bg-form-wrapper" style="background: transparent;">
                                    <div class="form-inner text-center">
                                        <h3 class="tmu-text-primary text-center d-none d-md-block" style="font-size:1.7rem !important; line-height:1.5rem; margin: 30px 0px 20px;">
                                            <span></span><span> <a href="https://admissions.tmu.ac.in" target="_blank" style="color:white;">Apply for Admission</a></span>
                                        </h3>
                                        <p class="text-center fs-16 fw-bold mt-3 mb-2 d-block d-md-none">
                                            <span></span><span> <a href="https://admissions.tmu.ac.in" target="_blank" class="blink-link">Click Here </a> To Apply for Admission</span>
                                        </p>
                                        <div class="npf_wgts" style="max-width: 600px; width: 100%;" data-height="560px" data-w="fced4875037a3071c2bc93dc1c15ae45"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <style>

                            @media (max-width: 768px) {
    iframe {
        max-width: 100% !important;
    }
}

                        @media (max-width: 991.98px) {
                            .bg-section {
                                background: none !important;
                                flex-direction: column;
                            }
                            .bg-form-wrapper {
                                justify-content: center !important;
                            }
                            .form-inner {
                                width: 100%;
                                max-width: 600px;
                            }
                        }


                        </style>';
                            @endphp
                        @endif
                        
                        @php
                        $count = 0;
                        $content = preg_replace_callback(
                            '/(<p\b[^>]*>.*?<\/p>)/i',
                            function ($matches) use (&$count, $insertCode) {
                                $count++;
                                return $count === 2 ? $matches[0] . $insertCode : $matches[0];
                            },
                            $content
                        );
                    
                        echo $content;
                    @endphp
                    

                        




                            @php
                                $additionalImages = 0;
                                if (!empty($news->ei2_path) && file_exists(public_path($news->ei2_path))) {
                                    $additionalImages++;
                                }
                                if (!empty($news->ei3_path) && file_exists(public_path($news->ei3_path))) {
                                    $additionalImages++;
                                }
                                if (!empty($news->ei4_path) && file_exists(public_path($news->ei4_path))) {
                                    $additionalImages++;
                                }
                                if (!empty($news->ei5_path) && file_exists(public_path($news->ei5_path))) {
                                    $additionalImages++;
                                }
                                if (!empty($news->ei6_path) && file_exists(public_path($news->ei6_path))) {
                                    $additionalImages++;
                                }
                            @endphp

                            @if ($additionalImages > 0)
                                <section id="content">
                                    <div class="content-wrap">
                                        <div class="container">
                                            <div class="row" data-lightbox="gallery">

                                                @if (!empty($news->ei1_path) && file_exists(public_path($news->ei1_path)))
                                                    <a class="grid-item col-4" href="{{ asset($news->ei1_path) }}"
                                                        data-lightbox="gallery-item"><img src="{{ asset($news->ei1_path) }}"
                                                            alt="Gallery Thumb 1"></a>
                                                @endif

                                                @if (!empty($news->ei2_path) && file_exists(public_path($news->ei2_path)))
                                                    <a class="grid-item col-4" href="{{ asset($news->ei2_path) }}"
                                                        data-lightbox="gallery-item"><img
                                                            src="{{ asset($news->ei2_path) }}" alt="Gallery Thumb 2"></a>
                                                @endif

                                                @if (!empty($news->ei3_path) && file_exists(public_path($news->ei3_path)))
                                                    <a class="grid-item col-4" href="{{ asset($news->ei3_path) }}"
                                                        data-lightbox="gallery-item"><img
                                                            src="{{ asset($news->ei3_path) }}" alt="Gallery Thumb 3"></a>
                                                @endif

                                                @if (!empty($news->ei4_path) && file_exists(public_path($news->ei4_path)))
                                                    <a class="grid-item col-4" href="{{ asset($news->ei4_path) }}"
                                                        data-lightbox="gallery-item"><img
                                                            src="{{ asset($news->ei4_path) }}" alt="Gallery Thumb 4"></a>
                                                @endif

                                                @if (!empty($news->ei5_path) && file_exists(public_path($news->ei5_path)))
                                                    <a class="grid-item col-4" href="{{ asset($news->ei5_path) }}"
                                                        data-lightbox="gallery-item"><img
                                                            src="{{ asset($news->ei5_path) }}" alt="Gallery Thumb 5"></a>
                                                @endif

                                                @if (!empty($news->ei6_path) && file_exists(public_path($news->ei6_path)))
                                                    <a class="grid-item col-4" href="{{ asset($news->ei6_path) }}"
                                                        data-lightbox="gallery-item"><img
                                                            src="{{ asset($news->ei6_path) }}" alt="Gallery Thumb 6"></a>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                </section>
                            @endif


                            <div class="apply-now-section">
                                <!-- Background Design -->
                                <div class="background-design"></div>

                                <!-- Content -->
                                <div class="apply-now-content">
                                    <h2>Admission Open</h2>
                                    <p>Empowering Minds, Transforming Futures <br> Begin Your Journey to Success Here.</p>
                                    <a href="https://admissions.tmu.ac.in/" class="tmu-btn btn-1 px-5 py-2">Apply
                                        Now</a>
                                </div>

                                <!-- Image -->
                                <img src="{{ asset('/assets/img/apply-button.png') }}" alt="Girl with books">
                            </div>

                            <h2 class="tmu-text-primary text-center mb-0"><span>Follow Us On</span><span> Instagram</span>
                            </h2>
                            <div class="insta-grid-container container">
                                <div class="insta-grid-header text-center mb-4">
                                    <div class="d-flex gap-3 justify-content-center align-items-center pe-4">
                                        <img src="{{ asset('/assets/img/insta-img/tmu-insta-logo.jpg') }}" alt="TMU Logo"
                                            class="insta-grid-logo">
                                        <h4 class="insta-grid-title text-start">
                                            Teerthanker Mahaveer <div class="d-none d-md-block"></div> University
                                            <p class="insta-grid-handle">@tmu_mbd</p>
                                        </h4>
                                    </div>
                                    <div class="d-flex classifier gap-3">
                                        <div class="insta-grid-meta d-flex justify-content-center gap-3 me-4 my-0 py-0">
                                            <span><strong>4K</strong> Posts</span>
                                            <span><strong>42.3K</strong> Followers</span>
                                            <span><strong>4</strong> Following</span>
                                        </div>
                                        <a href="https://www.instagram.com/tmu_mbd/?hl=en" target="_blank">
                                            <button class="follow-btn btn-4 mt-2">
                                                <i class="fab fa-instagram"></i>&nbsp;&nbsp; Follow
                                            </button>
                                        </a>
                                    </div>
                                </div>

                                <div class="row g-1 insta-grid-gallery ">
                                    <!-- Repeat this for 8 images -->
                                    <!-- 1 -->
                                    <div class="col-3">
                                        <a href="https://www.instagram.com/tmu_mbd/?hl=en" target="_blank"
                                            class="insta-post-wrapper d-block">
                                            <img src="{{ asset('assets/img/insta-img/13.jpg') }}"
                                                class="img-fluid insta-grid-img" alt="post">
                                            <div class="insta-hover-overlay">
                                                <div class="likes-comments">
                                                    <span><i class="fas fa-heart"></i> 1.2K</span>
                                                    <span><i class="fas fa-comment"></i> 89</span>
                                                </div>
                                                <div class="caption">Celebrating Colors, Craft, and Culture 🎨</div>
                                            </div>
                                        </a>
                                    </div>

                                    <!-- 2 -->
                                    <div class="col-3">
                                        <a href="https://www.instagram.com/tmu_mbd/?hl=en" target="_blank"
                                            class="insta-post-wrapper d-block">
                                            <img src="{{ asset('assets/img/insta-img/12.jpg') }}"
                                                class="img-fluid insta-grid-img" alt="post">
                                            <div class="insta-hover-overlay">
                                                <div class="likes-comments">
                                                    <span><i class="fas fa-heart"></i> 980</span>
                                                    <span><i class="fas fa-comment"></i> 45</span>
                                                </div>
                                                <div class="caption">Cheers to New Beginnings 📸</div>
                                            </div>
                                        </a>
                                    </div>

                                    <!-- 3 -->
                                    <div class="col-3">
                                        <a href="https://www.instagram.com/tmu_mbd/?hl=en" target="_blank"
                                            class="insta-post-wrapper d-block">
                                            <img src="{{ asset('assets/img/insta-img/11.jpg') }}"
                                                class="img-fluid insta-grid-img" alt="post">
                                            <div class="insta-hover-overlay">
                                                <div class="likes-comments">
                                                    <span><i class="fas fa-heart"></i> 1.5K</span>
                                                    <span><i class="fas fa-comment"></i> 123</span>
                                                </div>
                                                <div class="caption">Friends, Fun, and Futures 🎭</div>
                                            </div>
                                        </a>
                                    </div>

                                    <!-- 4 -->
                                    <div class="col-3">
                                        <a href="https://www.instagram.com/tmu_mbd/?hl=en" target="_blank"
                                            class="insta-post-wrapper d-block">
                                            <img src="{{ asset('assets/img/insta-img/10.jpg') }}"
                                                class="img-fluid insta-grid-img" alt="post">
                                            <div class="insta-hover-overlay">
                                                <div class="likes-comments">
                                                    <span><i class="fas fa-heart"></i> 1K</span>
                                                    <span><i class="fas fa-comment"></i> 60</span>
                                                </div>
                                                <div class="caption">TMU convocation ceremony 🎓</div>
                                            </div>
                                        </a>
                                    </div>

                                    <!-- 5 -->
                                    <div class="col-3">
                                        <a href="https://www.instagram.com/tmu_mbd/?hl=en" target="_blank"
                                            class="insta-post-wrapper d-block">
                                            <img src="{{ asset('assets/img/insta-img/9.jpg') }}"
                                                class="img-fluid insta-grid-img" alt="post">
                                            <div class="insta-hover-overlay">
                                                <div class="likes-comments">
                                                    <span><i class="fas fa-heart"></i> 860</span>
                                                    <span><i class="fas fa-comment"></i> 22</span>
                                                </div>
                                                <div class="caption">Celebrating Academic Excellence 📚</div>
                                            </div>
                                        </a>
                                    </div>

                                    <!-- 6 -->
                                    <div class="col-3">
                                        <a href="https://www.instagram.com/tmu_mbd/?hl=en" target="_blank"
                                            class="insta-post-wrapper d-block">
                                            <img src="{{ asset('assets/img/insta-img/8.jpg') }}"
                                                class="img-fluid insta-grid-img" alt="post">
                                            <div class="insta-hover-overlay">
                                                <div class="likes-comments">
                                                    <span><i class="fas fa-heart"></i> 720</span>
                                                    <span><i class="fas fa-comment"></i> 35</span>
                                                </div>
                                                <div class="caption">A Night of Rhymes and Reflections 🎤</div>
                                            </div>
                                        </a>
                                    </div>

                                    <!-- 7 -->
                                    <div class="col-3">
                                        <a href="https://www.instagram.com/tmu_mbd/?hl=en" target="_blank"
                                            class="insta-post-wrapper d-block">
                                            <img src="{{ asset('assets/img/insta-img/7.jpg') }}"
                                                class="img-fluid insta-grid-img" alt="post">
                                            <div class="insta-hover-overlay">
                                                <div class="likes-comments">
                                                    <span><i class="fas fa-heart"></i> 1.3K</span>
                                                    <span><i class="fas fa-comment"></i> 50</span>
                                                </div>
                                                <div class="caption">Rock On: Feel the Beat! 👏</div>
                                            </div>
                                        </a>
                                    </div>

                                    <!-- 8 -->
                                    <div class="col-3">
                                        <a href="https://www.instagram.com/tmu_mbd/?hl=en" target="_blank"
                                            class="insta-post-wrapper d-block">
                                            <img src="{{ asset('assets/img/insta-img/6.jpg') }}"
                                                class="img-fluid insta-grid-img" alt="post">
                                            <div class="insta-hover-overlay">
                                                <div class="likes-comments">
                                                    <span><i class="fas fa-heart"></i> 1.1K</span>
                                                    <span><i class="fas fa-comment"></i> 40</span>
                                                </div>
                                                <div class="caption">Sports meet memories 🏅</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Tag Cloud
                                ============================================= -->
                            {{-- <h3 class="mb-2">Categories</h3>
                            <div class="tagcloud mb-5">
                                <a href="#">general</a>
                                <a href="#">information</a>
                                <a href="#">media</a>
                                <a href="#">press</a>
                                <a href="#">gallery</a>
                                <a href="#">illustration</a>
                            </div><!-- .tagcloud end --> --}}

                            <div class="clear"></div>
                        </div>
                    </div><!-- .entry end -->

                    {{-- <h4 class="fs-4 fw-medium">Recommended for you</h4> --}}
                    {{-- <div class="related-posts row posts-md g-4">
                        <div class="entry col-12 col-md-6 col-lg-4">
                            <div class="grid-inner row align-items-center gx-4">
                                <div class="col-auto">
                                    <div class="entry-image">
                                        <a href="#"><img src="assets/img/3.jpg" alt="Blog Single"
                                                class="square square-lg"
                                                style="object-fit: cover; object-position: center;"></a>
                                    </div>
                                </div>
                                <div class="col">
                                    
                                    <div class="entry-title title-sm text-transform-none">
                                        <h4><a href="#">Best Ways to be more Creative</a></h4>
                                    </div>
                                    <div class="entry-meta font-secondary mt-2">
                                        <ul>
                                            <li>10 May 24</li>
                                            <li><a href="#"><i class="uil uil-comments-alt"></i> 12</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="entry col-12 col-md-6 col-lg-4">
                            <div class="grid-inner row align-items-center gx-4">
                                <div class="col-auto">
                                    <div class="entry-image">
                                        <a href="#"><img src="assets/img/4.jpg" alt="Blog Single"
                                                class="square square-lg"
                                                style="object-fit: cover; object-position: center;"></a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="entry-title title-sm text-transform-none">
                                        <h4><a href="#">5 Interesting Viral Videos</a></h4>
                                    </div>
                                    <div class="entry-meta font-secondary mt-2">
                                        <ul>
                                            <li>10 May 24</li>
                                            <li><a href="#"><i class="uil uil-comments-alt"></i> 422</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="entry col-12 col-md-6 col-lg-4">
                            <div class="grid-inner row align-items-center gx-4">
                                <div class="col-auto">
                                    <div class="entry-image">
                                        <a href="#"><img src="assets/img/8.jpg" alt="Blog Single"
                                                class="square square-lg"
                                                style="object-fit: cover; object-position: center;"></a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="entry-title title-sm text-transform-none">
                                        <h4><a href="#">10 Amazing Designer Outfits</a></h4>
                                    </div>
                                    <div class="entry-meta font-secondary mt-2">
                                        <ul>
                                            <li>10 May 24</li>
                                            <li><a href="#"><i class="uil uil-comments-alt"></i> 59</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    <!-- Comments
                              ============================================= -->
                    {{-- <div id="comments">

                        <h3 id="comments-title"><span>3</span> Comments</h3>

                        <!-- Comments List
							============================================= -->
                        <ol class="commentlist">

                            <li class="comment even thread-even depth-1" id="li-comment-1">

                                <div id="comment-1" class="comment-wrap">

                                    <div class="comment-meta">

                                        <div class="comment-author vcard">

                                            <span class="comment-avatar">
                                                <img alt='Image'
                                                    src='https://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60'
                                                    class='avatar avatar-60 photo avatar-default' height='60'
                                                    width='60'></span>

                                        </div>

                                    </div>

                                    <div class="comment-content">

                                        <div class="comment-author">John Doe<span><a href="#"
                                                    title="Permalink to this comment">April 24, 2012 at 10:46
                                                    am</a></span></div>

                                        <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id
                                            dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante
                                            venenatis dapibus posuere velit aliquet.</p>

                                        <a class='comment-reply-link' href='#'><i class="bi-reply-fill"></i></a>

                                    </div>

                                    <div class="clear"></div>

                                </div>


                                <ul class='children'>

                                    <li class="comment byuser comment-author-_smcl_admin odd alt depth-2"
                                        id="li-comment-3">

                                        <div id="comment-3" class="comment-wrap">

                                            <div class="comment-meta">

                                                <div class="comment-author vcard">

                                                    <span class="comment-avatar">
                                                        <img alt='Image'
                                                            src='https://1.gravatar.com/avatar/30110f1f3a4238c619bcceb10f4c4484?s=40&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D40&amp;r=G'
                                                            class='avatar avatar-40 photo' height='40'
                                                            width='40'></span>

                                                </div>

                                            </div>

                                            <div class="comment-content">

                                                <div class="comment-author"><a href='#' rel='external nofollow'
                                                        class='url'>SemiColon</a><span><a href="#"
                                                            title="Permalink to this comment">April 25, 2012 at 1:03
                                                            am</a></span></div>

                                                <p>Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

                                                <a class='comment-reply-link' href='#'><i class="bi-reply-fill"></i></a>

                                            </div>

                                            <div class="clear"></div>

                                        </div>

                                    </li>

                                </ul>

                            </li>

                            <li class="comment byuser comment-author-_smcl_admin even thread-odd thread-alt depth-1"
                                id="li-comment-2">

                                <div id="comment-2" class="comment-wrap">

                                    <div class="comment-meta">

                                        <div class="comment-author vcard">

                                            <span class="comment-avatar">
                                                <img alt='Image'
                                                    src='https://1.gravatar.com/avatar/30110f1f3a4238c619bcceb10f4c4484?s=60&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D60&amp;r=G'
                                                    class='avatar avatar-60 photo' height='60' width='60'></span>

                                        </div>

                                    </div>

                                    <div class="comment-content">

                                        <div class="comment-author"><a href='https://themeforest.net/user/semicolonweb'
                                                rel='external nofollow' class='url'>SemiColon</a><span><a href="#"
                                                    title="Permalink to this comment">April 25, 2012 at 1:03
                                                    am</a></span></div>

                                        <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

                                        <a class='comment-reply-link' href='#'><i class="bi-reply-fill"></i></a>

                                    </div>

                                    <div class="clear"></div>

                                </div>

                            </li>

                        </ol><!-- .commentlist end -->

                        <div class="clear"></div>

                        <!-- Comment Form
							============================================= -->
                        <div id="respond">

                            <h3>Leave a <span>Comment</span></h3>

                            <form class="row" action="#" method="post" id="commentform">
                                <div class="col-md-4 form-group">
                                    <label for="author">Name</label>
                                    <input type="text" name="author" id="author" value="" size="22" tabindex="1"
                                        class="form-control">
                                </div>

                                <div class="col-md-4 form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" id="email" value="" size="22" tabindex="2"
                                        class="form-control">
                                </div>

                                <div class="col-md-4 form-group">
                                    <label for="url">Website</label>
                                    <input type="text" name="url" id="url" value="" size="22" tabindex="3"
                                        class="form-control">
                                </div>

                                <div class="w-100"></div>

                                <div class="col-12 form-group">
                                    <label for="comment">Comment</label>
                                    <textarea name="comment" cols="58" rows="7" tabindex="4"
                                        class="form-control"></textarea>
                                </div>

                                <div class="col-12 form-group">
                                    <button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit"
                                        class="button button-3d m-0">Submit Comment</button>
                                </div>
                            </form>

                        </div><!-- #respond end -->

                    </div><!-- #comments end --> --}}

                </div>

            </div>
        </div>
    </section><!-- #content end -->

    </div>
    <script src="https://www.youtube.com/iframe_api"></script>
    <script>
        let player;
        const videoId = '71Qw7YYS_nM'; // Your YouTube Video ID

        const playerWrapper = document.getElementById('tmuPlayerWrapper');
        const playPauseBtn = document.getElementById('playPauseBtn');
        const playPauseIcon = playPauseBtn.querySelector('i');
        const mainPlayButton = document.getElementById('mainPlayButton');
        const mainPlayIcon = mainPlayButton.querySelector('i');
        const progressBar = document.getElementById('progressBar');
        const fullscreenBtn = document.getElementById('fullscreenBtn');
        const timeDisplay = document.getElementById('timeDisplay');
        const clickInterceptor = document.getElementById('clickInterceptor');

        function onYouTubeIframeAPIReady() {
            player = new YT.Player('youtubePlayer', {
                height: '100%', // These are relative to the parent .ratio div
                width: '100%',
                videoId: videoId,
                playerVars: {
                    'autoplay': 0,        // Don't autoplay
                    'controls': 0,        // Hide default YouTube controls
                    'rel': 0,             // Don't show related videos at the end
                    'showinfo': 0,        // Deprecated, but doesn't hurt
                    'modestbranding': 1,  // Minimal YouTube logo
                    'iv_load_policy': 3,  // Hide annotations
                    'fs': 0,              // Hide YouTube's fullscreen button (we make our own)
                    'disablekb': 1        // Disable keyboard controls (optional, if you want full custom control)
                },
                events: {
                    'onReady': onPlayerReady,
                    'onStateChange': onPlayerStateChange
                }
            });
        }

        function onPlayerReady(event) {
            // Player is ready
            updateProgressBar(); // Initialize progress bar
            updateTotalTime(); // Show total duration

            // Add class to wrapper to show controls when paused initially (if not autoplaying)
            playerWrapper.classList.add('paused');
        }

        let progressInterval;

        function onPlayerStateChange(event) {
            if (event.data == YT.PlayerState.PLAYING) {
                playPauseIcon.classList.remove('fa-play');
                playPauseIcon.classList.add('fa-pause');
                playPauseBtn.setAttribute('aria-label', 'Pause');
                mainPlayButton.classList.add('hidden'); // Hide main play button
                playerWrapper.classList.remove('paused');
                playerWrapper.classList.add('playing');
                progressInterval = setInterval(updateProgressBar, 250); // Update progress bar frequently
            } else if (event.data == YT.PlayerState.PAUSED) {
                playPauseIcon.classList.remove('fa-pause');
                playPauseIcon.classList.add('fa-play');
                playPauseBtn.setAttribute('aria-label', 'Play');
                mainPlayButton.classList.remove('hidden'); // Show main play button
                mainPlayIcon.classList.remove('fa-pause');
                mainPlayIcon.classList.add('fa-play');
                playerWrapper.classList.add('paused');
                playerWrapper.classList.remove('playing');
                clearInterval(progressInterval);
            } else if (event.data == YT.PlayerState.ENDED) {
                playPauseIcon.classList.remove('fa-pause');
                playPauseIcon.classList.add('fa-play');
                playPauseBtn.setAttribute('aria-label', 'Play');
                mainPlayButton.classList.remove('hidden');
                mainPlayIcon.classList.remove('fa-pause');
                mainPlayIcon.classList.add('fa-play');
                playerWrapper.classList.add('paused');
                playerWrapper.classList.remove('playing');
                clearInterval(progressInterval);
                progressBar.value = 0; // Reset progress bar
                player.seekTo(0, false); // Go to start but don't play
                player.pauseVideo(); // Ensure it's fully paused
                updateCurrentTime(0); // Reset current time display
            }
             updateTotalTime(); // Update total time as it might become available later
        }

        function togglePlayPause() {
            if (player.getPlayerState() == YT.PlayerState.PLAYING) {
                player.pauseVideo();
            } else {
                player.playVideo();
            }
        }

        function formatTime(timeInSeconds) {
            const minutes = Math.floor(timeInSeconds / 60);
            const seconds = Math.floor(timeInSeconds % 60);
            return `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
        }

        function updateProgressBar() {
            const currentTime = player.getCurrentTime();
            const duration = player.getDuration();
            if (duration > 0) {
                progressBar.value = (currentTime / duration) * 100;
                updateCurrentTime(currentTime);
            }
        }

        function updateTotalTime() {
            const duration = player.getDuration();
            if (duration > 0) {
                const currentTimeVal = player.getCurrentTime() || 0;
                timeDisplay.textContent = `${formatTime(currentTimeVal)} / ${formatTime(duration)}`;
            }
        }
        function updateCurrentTime(currentTime) {
            const duration = player.getDuration();
            if (duration > 0) {
                 timeDisplay.textContent = `${formatTime(currentTime)} / ${formatTime(duration)}`;
            } else {
                 timeDisplay.textContent = `${formatTime(currentTime)} / --:--`;
            }
        }


        playPauseBtn.addEventListener('click', togglePlayPause);
        mainPlayButton.addEventListener('click', togglePlayPause);
        clickInterceptor.addEventListener('click', function(event) {
    event.stopPropagation(); // Crucial: Prevents the click from bubbling to the iframe below.
    // event.preventDefault(); // Also consider this if your interceptor is an <a> or button element.
    togglePlayPause();       // Your existing function to play/pause the video.
});


        progressBar.addEventListener('input', function() {
            const duration = player.getDuration();
            if (duration > 0) {
                const newTime = duration * (progressBar.value / 100);
                player.seekTo(newTime, true); // true: allow seek ahead
                updateCurrentTime(newTime); // Update time display immediately
            }
        });
        // Update time display while scrubbing for better UX
        progressBar.addEventListener('mousemove', function(e) {
            if (e.buttons === 1) { // Check if mouse button is pressed
                const duration = player.getDuration();
                if (duration > 0) {
                    const rect = progressBar.getBoundingClientRect();
                    const percent = Math.max(0, Math.min(1, (e.clientX - rect.left) / rect.width));
                    const scrubTime = duration * percent;
                    updateCurrentTime(scrubTime);
                }
            }
        });


        fullscreenBtn.addEventListener('click', function() {
            const videoElementContainer = playerWrapper; // The element to make fullscreen

            if (!document.fullscreenElement &&    // Standard
                !document.mozFullScreenElement && // Firefox
                !document.webkitFullscreenElement && // Chrome, Safari and Opera
                !document.msFullscreenElement) {  // IE/Edge

                if (videoElementContainer.requestFullscreen) {
                    videoElementContainer.requestFullscreen();
                } else if (videoElementContainer.mozRequestFullScreen) { /* Firefox */
                    videoElementContainer.mozRequestFullScreen();
                } else if (videoElementContainer.webkitRequestFullscreen) { /* Chrome, Safari & Opera */
                    videoElementContainer.webkitRequestFullscreen();
                } else if (videoElementContainer.msRequestFullscreen) { /* IE/Edge */
                    videoElementContainer.msRequestFullscreen();
                }
                fullscreenBtn.innerHTML = '<i class="fas fa-compress"></i>';
                fullscreenBtn.setAttribute('aria-label', 'Exit Fullscreen');
            } else {
                if (document.exitFullscreen) {
                    document.exitFullscreen();
                } else if (document.mozCancelFullScreen) { /* Firefox */
                    document.mozCancelFullScreen();
                } else if (document.webkitExitFullscreen) { /* Chrome, Safari and Opera */
                    document.webkitExitFullscreen();
                } else if (document.msExitFullscreen) { /* IE/Edge */
                    document.msExitFullscreen();
                }
                fullscreenBtn.innerHTML = '<i class="fas fa-expand"></i>';
                fullscreenBtn.setAttribute('aria-label', 'Fullscreen');
            }
        });

        // Listen for fullscreen changes to update button
        document.addEventListener('fullscreenchange', handleFullscreenChange);
        document.addEventListener('webkitfullscreenchange', handleFullscreenChange);
        document.addEventListener('mozfullscreenchange', handleFullscreenChange);
        document.addEventListener('MSFullscreenChange', handleFullscreenChange);

        function handleFullscreenChange() {
            if (!document.fullscreenElement && !document.webkitIsFullScreen && !document.mozFullScreen && !document.msFullscreenElement) {
                fullscreenBtn.innerHTML = '<i class="fas fa-expand"></i>';
                fullscreenBtn.setAttribute('aria-label', 'Fullscreen');
            } else {
                fullscreenBtn.innerHTML = '<i class="fas fa-compress"></i>';
                fullscreenBtn.setAttribute('aria-label', 'Exit Fullscreen');
            }
        }

        // Optional: Show controls when mouse enters the player wrapper and player exists
        playerWrapper.addEventListener('mouseenter', () => {
            if (player && typeof player.getPlayerState === 'function') { // Check if player is initialized
                 playerWrapper.classList.add('hover'); // You can use this class for :hover styles too
            }
        });
        playerWrapper.addEventListener('mouseleave', () => {
            if (player && typeof player.getPlayerState === 'function') {
                 playerWrapper.classList.remove('hover');
            }
        });


    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://www.youtube.com/iframe_api"></script>
    <script>
        // --- YouTube Player Script (Wrapped in IIFE) ---
        (function() {
            let player;
            const videoId = '71Qw7YYS_nM'; // Your YouTube Video ID

            const playerWrapper = document.getElementById('tmuPlayerWrapper');
            const playPauseBtn = document.getElementById('tmuPlayPauseBtn');
            const playPauseIcon = playPauseBtn.querySelector('i');
            const mainPlayButton = document.getElementById('tmuMainPlayBtn');
            const mainPlayIcon = mainPlayButton.querySelector('i');
            const progressBar = document.getElementById('tmuProgressBar');
            const fullscreenBtn = document.getElementById('tmuFullscreenBtn');
            const timeDisplay = document.getElementById('tmuTimeDisplay');
            const clickInterceptor = document.getElementById('tmuClickInterceptor');

            // Ensure all elements are found
            if (!playerWrapper || !playPauseBtn || !mainPlayButton || !progressBar || !fullscreenBtn || !timeDisplay || !clickInterceptor) {
                console.error("TMU Video Player: One or more essential DOM elements not found. Check IDs.");
                return;
            }

            // This function is called by the YouTube API
            window.onYouTubeIframeAPIReady = function() {
                player = new YT.Player('youtubePlayerApiContainer', { // Target the new div ID
                    height: '100%',
                    width: '100%',
                    videoId: videoId,
                    playerVars: {
                        'autoplay': 0,
                        'controls': 0,
                        'rel': 0,
                        'showinfo': 0,
                        'modestbranding': 1,
                        'iv_load_policy': 3,
                        'fs': 0,
                        'disablekb': 1,
                        'origin': window.location.origin // Important for some API functionalities
                    },
                    events: {
                        'onReady': onPlayerReady,
                        'onStateChange': onPlayerStateChange
                    }
                });
            };

            function onPlayerReady(event) {
                updateProgressBar();
                updateTotalTime();
                playerWrapper.classList.add('tmu-player-paused'); // Initial state is paused
                mainPlayButton.classList.remove('tmu-main-play-button--hidden'); // Ensure main play button is visible initially
                mainPlayIcon.className = 'fas fa-play'; // Ensure icon is play
            }

            let progressInterval;

            function onPlayerStateChange(event) {
                playerWrapper.classList.remove('tmu-player-playing', 'tmu-player-paused', 'tmu-player-buffering', 'tmu-player-ended');

                if (event.data === YT.PlayerState.PLAYING) {
                    playPauseIcon.className = 'fas fa-pause';
                    playPauseBtn.setAttribute('aria-label', 'Pause');
                    mainPlayButton.classList.add('tmu-main-play-button--hidden');
                    playerWrapper.classList.add('tmu-player-playing');
                    progressInterval = setInterval(updateProgressBarAndTimes, 250);
                } else {
                    clearInterval(progressInterval); // Clear interval for any non-playing state
                    playPauseIcon.className = 'fas fa-play';
                    playPauseBtn.setAttribute('aria-label', 'Play');
                    mainPlayButton.classList.remove('tmu-main-play-button--hidden');
                    mainPlayIcon.className = 'fas fa-play'; // Ensure main button shows 'play'

                    if (event.data === YT.PlayerState.PAUSED) {
                        playerWrapper.classList.add('tmu-player-paused');
                    } else if (event.data === YT.PlayerState.ENDED) {
                        playerWrapper.classList.add('tmu-player-ended');
                        playerWrapper.classList.add('tmu-player-paused'); // Visually it's like paused
                        progressBar.value = 0;
                        player.seekTo(0, false);
                        // player.pauseVideo(); // API docs say it fires ENDED then PAUSED. This might be redundant or cause issues. Test.
                        updateCurrentTime(0);
                    } else if (event.data === YT.PlayerState.BUFFERING) {
                        playerWrapper.classList.add('tmu-player-buffering');
                        mainPlayButton.classList.add('tmu-main-play-button--hidden'); // Hide play button during buffer
                    }
                }
                updateTotalTime(); // Ensure total time is up-to-date
            }

            function togglePlayPause() {
                if (!player || typeof player.getPlayerState !== 'function') return;
                const state = player.getPlayerState();
                if (state === YT.PlayerState.PLAYING || state === YT.PlayerState.BUFFERING) {
                    player.pauseVideo();
                } else {
                    player.playVideo();
                }
            }

            function formatTime(timeInSeconds) {
                const minutes = Math.floor(timeInSeconds / 60);
                const seconds = Math.floor(timeInSeconds % 60);
                return `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
            }
            
            function updateProgressBarAndTimes() {
                if (!player || typeof player.getCurrentTime !== 'function' || typeof player.getDuration !== 'function') return;
                const currentTime = player.getCurrentTime();
                const duration = player.getDuration();
                if (duration > 0) {
                    progressBar.value = (currentTime / duration) * 100;
                    updateCurrentTime(currentTime);
                }
            }

            function updateTotalTime() {
                if (!player || typeof player.getDuration !== 'function') return;
                const duration = player.getDuration();
                if (duration > 0) {
                    const currentTimeVal = player.getCurrentTime() || 0;
                    timeDisplay.textContent = `${formatTime(currentTimeVal)} / ${formatTime(duration)}`;
                } else {
                     timeDisplay.textContent = `0:00 / --:--`;
                }
            }

            function updateCurrentTime(currentTime) {
                if (!player || typeof player.getDuration !== 'function') return;
                const duration = player.getDuration();
                timeDisplay.textContent = `${formatTime(currentTime)} / ${formatTime(duration > 0 ? duration : 0)}`;
            }

            playPauseBtn.addEventListener('click', togglePlayPause);
            mainPlayButton.addEventListener('click', togglePlayPause);
            clickInterceptor.addEventListener('click', togglePlayPause);

            progressBar.addEventListener('input', function() {
                if (!player || typeof player.getDuration !== 'function') return;
                const duration = player.getDuration();
                if (duration > 0) {
                    const newTime = duration * (progressBar.value / 100);
                    player.seekTo(newTime, true);
                    updateCurrentTime(newTime);
                }
            });
             progressBar.addEventListener('mousemove', function(e) {
                if (e.buttons === 1 && player && typeof player.getDuration === 'function') { 
                    const duration = player.getDuration();
                    if (duration > 0) {
                        const rect = progressBar.getBoundingClientRect();
                        const percent = Math.max(0, Math.min(1, (e.clientX - rect.left) / rect.width));
                        const scrubTime = duration * percent;
                        updateCurrentTime(scrubTime);
                    }
                }
            });


            fullscreenBtn.addEventListener('click', function() {
                const elem = playerWrapper;
                if (!document.fullscreenElement) {
                    if (elem.requestFullscreen) elem.requestFullscreen();
                    else if (elem.mozRequestFullScreen) elem.mozRequestFullScreen();
                    else if (elem.webkitRequestFullscreen) elem.webkitRequestFullscreen();
                    else if (elem.msRequestFullscreen) elem.msRequestFullscreen();
                } else {
                    if (document.exitFullscreen) document.exitFullscreen();
                    else if (document.mozCancelFullScreen) document.mozCancelFullScreen();
                    else if (document.webkitExitFullscreen) document.webkitExitFullscreen();
                    else if (document.msExitFullscreen) document.msExitFullscreen();
                }
            });

            function handleFullscreenChange() {
                const isFullscreen = !!(document.fullscreenElement || document.webkitIsFullScreen || document.mozFullScreenElement || document.msFullscreenElement);
                if (isFullscreen) {
                    fullscreenBtn.innerHTML = '<i class="fas fa-compress"></i>';
                    fullscreenBtn.setAttribute('aria-label', 'Exit Fullscreen');
                    playerWrapper.classList.add('tmu-player-fullscreen');
                } else {
                    fullscreenBtn.innerHTML = '<i class="fas fa-expand"></i>';
                    fullscreenBtn.setAttribute('aria-label', 'Fullscreen');
                    playerWrapper.classList.remove('tmu-player-fullscreen');
                }
            }

            document.addEventListener('fullscreenchange', handleFullscreenChange);
            document.addEventListener('webkitfullscreenchange', handleFullscreenChange);
            document.addEventListener('mozfullscreenchange', handleFullscreenChange);
            document.addEventListener('MSFullscreenChange', handleFullscreenChange);

        })(); // End of IIFE
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const pathList = [
                "/news/mp-board-result",
                "/news/mp-board-result-2025-live-updates-expected-dates-and-how-to-check-it",
                "/news/mpbse-admit-card-2025-mp-board-class-10th-and-12th-admit-card-and-result-date"
            ];
    
            const currentPath = window.location.pathname;
    
            if (pathList.includes(currentPath)) {
                const newVideoSrc = "https://www.youtube.com/embed/RrnioFbPzf8?si=1jSeMygS2-c_H2vj";
                const iframe = document.querySelector('iframe[src*="youtube.com/embed"]');
    
                if (iframe) {
                    iframe.src = newVideoSrc;
                }
            }
        });
    </script>
    
    <script>
        $(document).ready(function() {
            $('.category-link').on('click', function(e) {
                e.preventDefault();
                var categoryId = $(this).data('category-id');
                $('#categoryInput').val(categoryId);
                $('#categoryForm').submit();
            });
        });
    </script>
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {
            function loadNPFScript(retry = 0) {
                var script = document.createElement("script");
                script.type = "text/javascript";
                script.async = true;
                script.src = "https://widgets.nopaperforms.com/emwgts.js";

                script.onload = function() {
                    console.log("✅ NoPaperForms script loaded successfully");
                };

                script.onerror = function() {
                    console.warn("⚠️ NoPaperForms script failed to load.");
                    if (retry < 3) {
                        console.log(`🔄 Retrying (${retry + 1}/3)...`);
                        setTimeout(() => loadNPFScript(retry + 1), 2000); // Retry after 2s
                    }
                };

                document.body.appendChild(script);
            }

            loadNPFScript(); // Initial script load
        });
    </script>

    <script>
        window.addEventListener("error", function(e) {
            if (e.target.tagName === "SCRIPT" && e.target.src.includes("emwgts.js")) {
                console.warn("🚨 NoPaperForms script failed to load.");
            }
            e.preventDefault(); // Ignore errors from other scripts
        }, true);
    </script>
    <!-- Go To Top
                         ============================================= -->
       
    
@endsection
