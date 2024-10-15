
@extends('layouts.university.main')
@section('content')

<style>
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
		transition: transform 250ms;
	}

	.blog-card:hover {
		transform: translateY(-5px);
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
</style>

<div class="container container-56789 my-4">

	<div class="row">
		<div class="col-12">
			<h2 class="fw-bolder fs-4">Blogs in {{ ucfirst($category) }}</h2>
		</div>
	</div>
	<div class="row justify-content-center">
		@foreach ($categoryBlogs as $item)
		<div class="col-sm-6 col-md-4 col-lg-3 col-xs-12 my-3 px-2 text-justify-centre mx-auto ">
			<a href="{{ url('blog/' . $item->n_slug) }}" class="text-decoration-none text-reset">
				<div class="blog-card text-justify-centre">
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
						<div class="blog-title">{{ Str::limit($item->post_title, 20) }}</div>
						<div class="blog-description">{{ Str::limit($item->post_description, 40) }}</div>
					</div>
				</div>
			</a>
		</div>
		@endforeach
	</div>
</div>

@endsection