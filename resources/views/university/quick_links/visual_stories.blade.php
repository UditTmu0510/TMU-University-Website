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
		/* Ensures 70% height for the image container */
		object-fit: cover;
		/* Ensures the image fills the space without distortion */
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
		/* Set this to match the height of the img elements */
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
		/* Background will cover the container */
		background-position: center;
		/* Center the background image */
		background-repeat: no-repeat;
		/* Prevent repetition */
		height: 70%;
		/* Match the height to 70% like the img */
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
			/* Limit the title to 2 lines */
			-webkit-box-orient: vertical;
			overflow: hidden;
			text-overflow: ellipsis;
			line-clamp: 2;
			/* For non-webkit browsers */
			height: 3em;
			/* Set a fixed height, adjust as necessary */
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

<div class="row">
	<div class="col-12">
		<h1 class="fw-bolder tmu-text-primary text-center mt-5" style="font-size:2.5rem"><span>All</span><span> Blogs</span></h1>
	</div>
</div>

<div class="container pb-3">

	<!-- All Blogs Section -->
	<div class="container container-56789 my-4">
		<div class="row p-2 mb-3 style-pe7mR">
			<div class="fw-bolder fs-5 pt-2 text-center text-sm-start">All Blogs</div>
			<div class="row justify-content-center">
				@for ($i = 1; $i <= 4; $i++)
				<div class="col-sm-6 col-md-4 col-lg-3 col-xs-12 my-3 px-2 text-justify-centre mx-auto ">
					<div id="blog_box" class="shadow bg-white overflow-hidden rounded-box p-0">
						<a href="#" class="text-decoration-none text-reset">
							<div class="text-justify-centre">
								<img src="https://picsum.photos/seed/blog{{ $i }}/300/200" alt="Sample Blog Title {{ $i }}" />
								<div class="blog-content">
									<div class="blog-title">Sample Blog Title {{ $i }}</div>
									<div class="blog-description">This is a dummy description for blog {{ $i }}.</div>
								</div>
							</div>
						</a>
					</div>
				</div>
				@endfor
			</div>
			<div class="text-center col-12 col-md-12 my-4">
				<a href="#" class="tmu-btn btn-1 px-3 py-2 fs-12"> View All </a>
			</div>
		</div>
	</div>

	<!-- Dummy Category Sections -->
	@php
	$categories = ['Technology', 'Health', 'Education'];
	@endphp

	@foreach ($categories as $index => $category)
	<div class="container container-56789 my-4">
		<div class="row p-2 mb-3 style-pe7mR">
			<div class="fw-bolder fs-4 pt-2 text-center text-sm-start">{{ $category }}</div>
			<div class="row">
				@for ($j = 1; $j <= 3; $j++)
				<div class="col-sm-6 col-md-4 col-lg-3 col-xs-12 my-3 px-2 text-justify-centre mx-auto ">
					<div id="blog_box" class="shadow bg-white overflow-hidden rounded-box p-0">
						<a href="#" class="text-decoration-none text-reset">
							<div class="blog-card text-justify-centre">
								<div class="image-container889">
									<div class="blurred-background" style="background-image: url('https://picsum.photos/seed/{{ $category }}{{ $j }}/300/200');"></div>
									<img src="https://picsum.photos/seed/{{ $category }}{{ $j }}/300/200" alt="Dummy {{ $category }} Blog {{ $j }}" />
								</div>
								<div class="blog-content">
									<div class="blog-title">Dummy {{ $category }} Blog {{ $j }}</div>
									<div class="blog-description">Short dummy description for {{ $category }} blog {{ $j }}.</div>
								</div>
							</div>
						</a>
					</div>
				</div>
				@endfor
			</div>
			<div class="text-center col-12 col-md-12 my-4">
				<a href="#" class="tmu-btn btn-1 px-3 py-2 fs-12"> View All </a>
			</div>
		</div>
	</div>
	@endforeach

</div>
@endsection
