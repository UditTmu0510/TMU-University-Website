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


	.h1{
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
        -webkit-line-clamp: 2; /* Limit the title to 2 lines */
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        line-clamp: 2; /* For non-webkit browsers */
        height: 3em; /* Set a fixed height, adjust as necessary */
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



<div class="container mt-5 pb-3">

	<!-- @if ($allBlogs->count() > 0)
	<div class="container">
		<div class="row p-2 mb-3 snipcss0-0-0-1 snipcss-o1qON style-pe7mR" id="style-pe7mR">
			<div class="fw-bolder fs-5 snipcss0-1-1-2 pt-2">All Blogs</div>
			<div class="col-md-12 d-md-flex snipcss0-1-1-3">
				@foreach ($allBlogs->take(4) as $item)
				<div class="col-12 col-md-3 my-3 px-2 snipcss0-2-3-4">
					<div id="blog_box" class="shadow bg-white overflow-hidden rounded-box p-0 snipcss0-3-4-5">
						<a href="{{ url('blog/' . $item->n_slug) }}" class="text-decoration-none text-reset snipcss0-4-5-6">
							<div class="snipcss0-5-6-7">
								<?php
								$imagePath = (!empty($item->monaco_image_path) && $item->monaco_image_path !== '0')
									? $item->monaco_image_path
									: $item->post_path;
								?>

								<img src="{{ asset($imagePath) }}"
									alt="{{ $item->post_title }}"
									class="snipcss0-6-7-8 style-gikwI"
									id="style-gikwI">

							</div>
							<div class="mt-2 mx-3 snipcss0-5-6-9">
								<div class="fw-bolder fs-6 lh-sm mb-2 snipcss0-6-9-10">{{ Str::limit($item->post_title, 20) }}</div>
								<div class="fs-6 lh-sm snipcss0-6-9-11">{{ Str::limit($item->post_description, 40) }}</div>
							</div>
						</a>
					</div>
				</div>
				@endforeach
			</div>
			@if ($allBlogs->count() > 4)
			<div class="text-center col-12 col-md-12 snipcss0-1-1-36 my-4">
				<a href="{{ route('blogs.active') }}" class="tmu-btn btn-1 px-3 py-2 fs-12"> View All </a>
			</div>
			@endif
		</div>
	</div>
	@endif -->

	@if ($allBlogs->count() > 0)
	<div class="container container-56789 my-4">
		<div class="row p-2 mb-3 snipcss0-0-0-1 snipcss-o1qON style-pe7mR" id="style-pe7mR">
			<div class="fw-bolder fs-5 snipcss0-1-1-2 pt-2 text-center text-sm-start ">All Blogs</div>
			<div class="row justify-content-center">
				@foreach ($allBlogs->take(4) as $item)
				<div class="col-sm-6 col-md-4 col-lg-3 col-xs-12 my-3 px-2 text-justify-centre mx-auto ">
					<div id="blog_box" class="shadow bg-white overflow-hidden rounded-box p-0 snipcss0-3-4-5">
						<a href="{{ url('blog/' . $item->n_slug) }}" class="text-decoration-none text-reset">
							<div class="text-justify-centre">
								@if($item->monaco_image_path != 0 && $item->monaco_image_path != null)
								<!-- Image fills the container when using monaco_image_path -->
								<img src="{{ asset($item->monaco_image_path) }}" alt="{{ $item->post_title }}" />
								@else
								<!-- Background blur effect for post_path -->
								<div class="image-container889">
									<div class="blurred-background" style="background-image: url('{{ asset($item->post_path) }}');"></div>
									<img src="{{ asset($item->post_path) }}" alt="{{ $item->post_title }}" />
								</div>
								@endif

								<div class="blog-content">
									<div class="blog-title">{{ $item->post_title }}</div>
									<div class="blog-description">{{ Str::limit($item->post_description, 40) }}</div>
								</div>
							</div>
						</a>
					</div>
				</div>
				@endforeach
			</div>
			@if ($allBlogs->count() > 4)
			<div class="text-center col-12 col-md-12 snipcss0-1-1-36 my-4">
				<a href="{{ route('blogs.active') }}" class="tmu-btn btn-1 px-3 py-2 fs-12"> View All </a>
			</div>
			@endif
		</div>
	</div>
	@endif



	{{-- Loop for each category in groupedBlogs --}}
@php
    $category_slug = '';
@endphp

@foreach ($groupedBlogs as $category => $blogs)
    @if ($blogs->isNotEmpty())
        @php
            // Retrieve the category slug from the first blog in the category group
            $category_slug = $blogs->first()->category_name->category_slug ?? '#';
        @endphp

        <div class="container container-56789 my-4">
            <div class="row p-2 mb-3 snipcss0-0-0-1 snipcss-o1qON style-pe7mR" id="style-pe7mR">
                <div class="fw-bolder fs-4 snipcss0-1-1-2 pt-2 text-center text-sm-start">{{ $category }}</div>
                <div class="row ">
                    @foreach ($blogs->take(4) as $item)
                        <div class="col-sm-6 col-md-4 col-lg-3 col-xs-12 my-3 px-2 text-justify-centre mx-auto ">
                            <div id="blog_box" class="shadow bg-white overflow-hidden rounded-box p-0 snipcss0-3-4-5">
                                <a href="{{ url('blog/' . $item->n_slug) }}" class="text-decoration-none text-reset">
                                    <div class="blog-card text-justify-centre">
                                        
                                        @if($item->monaco_image_path != 0 && $item->monaco_image_path != null)
                                            <!-- Display image if monaco_image_path is available -->
                                            <img src="{{ asset($item->monaco_image_path) }}" alt="{{ $item->post_title }}" />
                                        @else
                                            <!-- Display background blur effect if monaco_image_path is not available -->
                                            <div class="image-container889">
                                                <div class="blurred-background" style="background-image: url('{{ asset($item->post_path) }}');"></div>
                                                <img src="{{ asset($item->post_path) }}" alt="{{ $item->post_title }}" />
                                            </div>
                                        @endif

                                        <div class="blog-content">
                                            <div class="blog-title">{{ Str::limit($item->post_title, 38) }}</div>
                                            <div class="blog-description">{{ Str::limit($item->post_description, 40) }}</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>

                @if ($blogs->count() > 4)
                    <div class="text-center col-12 col-md-12 snipcss0-1-1-36 my-4">
                        <a href="{{ url($category_slug) }}" class="tmu-btn btn-1 px-3 py-2 fs-12"> View All </a>
                    </div>
                @endif
            </div>
        </div>
    @endif
@endforeach



	{{-- Loop for each category in groupedBlogs --}}
	<!-- @foreach ($groupedBlogs as $category => $blogs)
	@if ($blogs->isNotEmpty())
	<div class="container">
		<div class="row p-2 mb-3 snipcss0-0-0-1 snipcss-o1qON style-pe7mR" id="style-pe7mR">
			<div class="fw-bolder fs-5 snipcss0-1-1-2 pt-2">{{ $category }}</div>
			<div class="col-md-12 d-md-flex snipcss0-1-1-3">
				@foreach ($blogs->take(4) as $item)
				<div class="col-12 col-md-3 my-3 px-2 snipcss0-2-3-4">
					<div id="blog_box" class="shadow bg-white overflow-hidden rounded-box p-0 snipcss0-3-4-5">
						<a href="{{ url('blog/' . $item->n_slug) }}" class="text-decoration-none text-reset snipcss0-4-5-6">
							<div class="snipcss0-5-6-7">
								<img src="{{ asset($item->monaco_image_path != 0 ? $item->monaco_image_path : $item->post_path) }}"
									alt="{{ $item->post_title }}"
									class="snipcss0-6-7-8 style-gikwI"
									id="style-gikwI">
							</div>
							<div class="mt-2 mx-3 snipcss0-5-6-9">
								<div class="fw-bolder fs-6 lh-sm mb-2 snipcss0-6-9-10">{{ Str::limit($item->post_title, 20) }}</div>
								<div class="fs-6 lh-sm snipcss0-6-9-11">{{ Str::limit($item->post_description, 40) }}</div>
							</div>
						</a>
					</div>
				</div>
				@endforeach
			</div>
			@if ($blogs->count() > 4)
			<div class="text-center col-12 col-md-12 snipcss0-1-1-36 my-4">
				<a href="{{ url('/blog/category/' . Str::slug($category)) }}" class="tmu-btn btn-1 px-3 py-2 fs-12"> View All </a>
			</div>
			@endif
		</div>
	</div>
	@endif
	@endforeach -->




</div>
</div>

@endsection