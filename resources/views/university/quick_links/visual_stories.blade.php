@extends('layouts.university.main')
@section('content')

<style>
    :root {
        --bs-white-rgb: 255, 255, 255;
        --bs-font-sans-serif: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        --bs-body-font-family: var(--bs-font-sans-serif);
        --bs-body-font-size: 1rem;
        --bs-body-font-weight: 400;
        --bs-body-line-height: 1.5;
        --bs-body-color: #212529;
        --bs-body-bg: #00000010;
    }

    .container-56789 {
        padding: 18px;
    }

    /* Updated Visual Stories Section Styles */
    .visual-stories-section-wrapper {
        background-color: #e9f5fe; /* Light blue background */
        border-radius: 12px;
        width: 100%;
        margin-left: auto;
        margin-right: auto;
        padding: 1rem;
    }

    .visual-stories-heading {
        position: absolute;
        background-color: #e9f5fe; /* Light gray background for heading */
        padding: 0.2rem 1rem;
        border-radius: 8px;
        display: inline-block;
        margin-bottom: 1.5rem;
    }

    .visual-stories-heading h2 {
        font-size: 1.5rem;
        line-height: 2rem;
        font-weight: 600;
        margin: 0;
        color: #212529;
    }

    .visual-stories-container {
        display: flex;
        flex-wrap: nowrap; /* Allow horizontal scrolling on mobile */
        overflow-x: auto; /* Enable horizontal scrolling */
        gap: 1rem; /* Space between cards */
        /* padding-bottom: 1rem; */
        -webkit-overflow-scrolling: touch; /* Smooth scrolling on iOS */
        scrollbar-width: none; /* Hide scrollbar in Firefox */
    }

    .visual-stories-container::-webkit-scrollbar {
        display: none; /* Hide scrollbar in Chrome/Safari */
    }

    .visual-story-card-item {
        flex: 0 0 auto; /* Prevent cards from shrinking */
        width: 260px; /* Fixed width for cards */
    }

    .visual-story-card-item a {
        display: block;
        border-radius: 12px; /* Rounded corners */
        overflow: hidden;
        position: relative;
        height: 400px; /* Portrait height */
        background-size: cover;
        background-position: center;
        text-decoration: none;
        color: white;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .visual-story-card-item a:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0,0,0,0.15);
    }

    .story-icon-badge {
        position: absolute;
        top: 12px;
        right: 12px;
        background-color: rgba(255, 255, 255, 0.85);
        color: #333;
        width: 32px;
        height: 32px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        box-shadow: 0 1px 3px rgba(0,0,0,0.2);
    }

    .story-bottom-content {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 12px 15px 15px;
        background: linear-gradient(to top, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0.75) 50%, rgba(0,0,0,0) 100%);
    }

    .story-card-title {
        font-size: 0.95rem;
        font-weight: 600;
        line-height: 1.3;
        margin: 0;
        color: #fff;
    }

    /* View All Button Style */
    .btn-view-all-stories {
        display: flex;
        align-items: center;
        color: #0d6efd;
        font-size: 0.9rem;
        font-weight: 500;
        text-decoration: none;
        transition: color 0.2s ease;
    }

    .btn-view-all-stories:hover {
        color: #0b5ed7;
    }

    .btn-view-all-stories i {
        margin-left: 0.3rem;
        font-size: 0.8rem;
    }

    /* Responsive Adjustments */
    @media (min-width: 768px) {
        .visual-stories-container {
            flex-wrap: wrap; /* Wrap cards on larger screens */
            overflow-x: hidden; /* Disable horizontal scrolling */
        }

        .visual-story-card-item {
            width: calc(33.333% - 0.67rem); /* 3 cards per row on medium screens */
        }
    }

    @media (min-width: 992px) {
        .visual-story-card-item {
            width: calc(25% - 0.75rem); /* 4 cards per row on large screens */
        }
    }
</style>

@php
    // Sample data 
    $storyTitles = [
        "What Is the New IIM MBA Programme in Dubai?",
        "Top Countries for Medical Students to Achieve Their Dreams",
        "Best Cities in Australia for Student Life",
        "Emerging Study Destinations in Europe for 2025: Discover Top Picks"
    ];
    $storyImageSeeds = [
        "university_campus", "medical_student", "australian_city", "european_study"
    ];
    // Placeholder story IDs (replace with actual $stories data if available)
    $storyIds = [1, 2, 3, 4]; // Example IDs
@endphp

<!-- Main Page Title -->
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="fw-bolder text-start mt-5 mb-4" style="font-size:2.2rem;">
                <span class="visual-stories-page-title-icon"></span>Study Abroad
            </h1>
        </div>
    </div>
</div>

<!-- Visual Stories Section -->
<div class="container pb-3">
    <div class="row">
        <div class="col-12">
            <div class="visual-stories-heading">
                <h2>Latest webstories</h2>
            </div>
        </div>
    </div>
    <div class="visual-stories-section-wrapper my-4">
        <div class="visual-stories-container">
            @foreach ($storyTitles as $i => $title)
            <div class="visual-story-card-item">
                <a href="{{ route('visual.story', $storyIds[$i]) }}" style="background-image: url('https://picsum.photos/seed/{{ $storyImageSeeds[$i] }}/300/400');">
                    <div class="story-icon-badge">
                        <i class="fas fa-clone"></i>
                    </div>
                    <div class="story-bottom-content">
                        <h5 class="story-card-title">{{ $title }}</h5>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-end mt-3">
            <a href="#" class="btn-view-all-stories">See more <i class="fas fa-arrow-right"></i></a>
        </div>
    </div>
</div>

@endsection