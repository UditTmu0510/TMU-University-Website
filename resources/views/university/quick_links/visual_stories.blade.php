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

	.blog-card {
		display: flex;
		flex-direction: column;
		width: 100%;
		max-width: 100%;
		background-color: white;
		border-radius: 10px;
		overflow: hidden;
		box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
	}


	.h1 {
		font-size: 50px;
	}

	.image-container889,
	.blog-card img {
		width: 100%;
		height: 70%;
		object-fit: cover;
	}

	.blog-content {
		padding: 10px;
		height: 30%;
		display: flex;
		flex-direction: column;
		justify-content: space-between;
	}

	.blog-title {
		font-weight: bold;
		font-size: 1rem;
		margin-bottom: 5px;
	}

	.blog-description {
		font-size: 0.9rem;
		color: #666;
	}

	/* Background blur for post_path */
	.image-container889 {
		height: 100%;
		width: auto;
		object-fit: cover;
		overflow: hidden;
		position: relative;
	}

	.image-container889::before {
		content: "";
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background-position: center;
		background-size: cover;
		filter: blur(80px);
		z-index: 1;
		opacity: 0.7;
	}

	.image-container889 img {
		position: relative;
		z-index: 2;
		max-width: 100%;
		height: auto;
	}

	.blog-card img,
	.image-container889 {
		aspect-ratio: 1.36;
		width: 100%;
		object-fit: contain;
	}

	.image-container889 {
		background-size: cover;
		background-position: center;
		background-repeat: no-repeat;
		height: 70%;
		overflow: hidden;
		position: relative;
	}

	.blurred-background {
		position: absolute;
		width: 100%;
		height: 100%;
		top: 0;
		left: 0;
		background-size: cover;
		background-position: center;
		filter: blur(5px);
		opacity: 0.6;
		z-index: 1;
	}

	.rounded-box {
		border-radius: 15px;
		transition: transform 250ms;
	}

	@media (prefers-reduced-motion: no-preference) {
		:root {
			scroll-behavior: smooth;
		}
	}


	@media (min-width: 576px) {
		.blog-title {
			display: -webkit-box;
			-webkit-line-clamp: 2;
			-webkit-box-orient: vertical;
			overflow: hidden;
			text-overflow: ellipsis;
			line-clamp: 2;
			height: 3em;
		}
	}

	#blog_box {
		cursor: pointer;
	}

	.rounded-box:hover {
		transform: translateY(-2px);
	}

	.text-reset {
		color: inherit !important;
	}

	#blog_box img {
		width: 100%;
	}

	#style-pe7mR.style-pe7mR {
		background-color: #fff;
		border-radius: 15px;
	}
</style>
@php
    // Sample data 
    $storyTitles = [
        "Best Pilot Training Institutes in India",
        "Average student creating Big: Untold facts",
        "Top 10 countries for Medical Students: Education, Research and Career",
        "Top Study Destinations for Medical Students in 2025: Break and Matriculate"
    ];
    // Using descriptive seeds for picsum.photos to get varied, somewhat relevant images
    $storyImageSeeds = [
        "airplane_cockpit", "student_robotics_project", "medical_research_lab", "university_library_study"
    ];
@endphp


<style>
    /* Custom Styles for Visual Stories Section */
    .visual-stories-page-title-icon {
        display: inline-block;
        width: 0.8em;
        height: 0.8em;
        background-color: #212529; /* Dark square icon */
        margin-right: 0.4em;
        vertical-align: -0.1em; /* Align with text */
    }

    .visual-stories-section-wrapper {
        background-color: #e9f5fe; /* Light blue background for the section */
        border-radius: 12px;
        /* container-fluid behavior within the parent .container */
        width: 100%;
        margin-left: auto;
        margin-right: auto;
    }

    .visual-story-card-item a {
        display: block;
        border-radius: 10px; /* Rounded corners for the card */
        overflow: hidden;
        position: relative;
        height: 400px; /* Adjust height as per your design preference for portrait feel */
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
        background-color: rgba(255, 255, 255, 0.85); /* Slightly opaque white background */
        color: #333; /* Dark icon for contrast */
        width: 32px;
        height: 32px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px; /* Icon size */
        box-shadow: 0 1px 3px rgba(0,0,0,0.2);
    }

    .story-bottom-content {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 12px 15px 15px;
        /* Gradient to make text readable */
        background: linear-gradient(to top, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0.75) 50%, rgba(0,0,0,0) 100%);
    }

    .story-progress-segments {
        display: flex;
        gap: 3px;
        margin-bottom: 10px; /* Space between progress indicators and title */
        height: 3px; /* Height of each segment line */
    }

    .story-progress-segments .segment {
        flex-grow: 1; /* Distribute width equally */
        height: 100%;
        background-color: rgba(255, 255, 255, 0.5); /* Semi-transparent white */
        border-radius: 3px;
    }

    .story-card-title {
        font-size: 0.95rem; /* Adjust for optimal readability */
        font-weight: 600; /* Make title stand out */
        line-height: 1.3;
        margin: 0;
        color: #fff; /* White text color */
    }

    /* Custom "View All" button style */
    .btn-view-all-stories {
        display: inline-block;
        background-color: #0d6efd; /* Bootstrap primary blue or your theme color */
        color: white;
        border: none;
        border-radius: 20px; /* Pill shape */
        padding: 10px 25px; /* Comfortable padding */
        font-size: 0.9rem;
        font-weight: 500;
        text-decoration: none;
        transition: background-color 0.2s ease;
    }

    .btn-view-all-stories:hover {
        background-color: #0b5ed7; /* Darker shade on hover */
        color: white;
    }
</style>

<!-- Main Page Title for Visual Stories -->
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="fw-bolder text-start mt-5 mb-4" style="font-size:2.2rem;">
                <span class="visual-stories-page-title-icon"></span>Visual Stories
            </h1>
        </div>
    </div>
</div>

<div class="container pb-3">
    <!-- Visual Stories Section -->
    <div class="visual-stories-section-wrapper py-4 px-lg-4 px-md-3 px-2 my-4">
        <div class="row">
            <div class="col-12">
                <h2 class="fw-bolder fs-4 mb-3 text-start">Latest webstories</h2>
            </div>
        </div>
        <div class="row justify-content-start"> 
            @for ($i = 0; $i < count($storyTitles); $i++)
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 my-3 px-2"> 
                <div class="visual-story-card-item">
                    <a href="/your-story-viewer-page.html?storyId={{ $i + 1 }}"
                       style="background-image: url('https://picsum.photos/seed/{{ $storyImageSeeds[$i] }}/400/600');">
                        <div class="story-icon-badge">
                            <i class="fas fa-clone"></i>
                        </div>
                        <div class="story-bottom-content">
                            <div class="story-progress-segments">
                                @for ($s = 0; $s < 5; $s++)
                                <span class="segment"></span>
                                @endfor
                            </div>
                            <h5 class="story-card-title">{{ $storyTitles[$i] }}</h5>
                        </div>
                    </a>
                </div>
            </div>
            @endfor
        </div>
        <div class="text-center col-12 my-4 pt-2">
            <a href="#" class="btn-view-all-stories">View All</a>
        </div>
    </div>
</div>
@endsection
