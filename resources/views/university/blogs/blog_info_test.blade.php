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

        #blogs69 h3,
        #blogs69 h2,
        #blogs69 strong {
            font-weight: 600 !important;
        }

        html {
            scroll-behavior: smooth;
        }

        #blogs69 h2,
        #blogs69 h4 {
            scroll-margin-top: 80px;
            padding-top: 5px;
            /* Adjust the margin as per your desired distance */
        }

        #blogs69 h3 {
            scroll-margin-top: 80px;
            padding-top: 3px;
            padding-bottom: 3px;
            margin-top: 0px !important;
        }

        #blogs69 p {
            padding-bottom: 10px;
        }

        /* Table of Contents styles */
        .toc {
            border: 1px solid #ccc;
            padding: 15px;
            margin-bottom: 20px;
            background-color: #f9f9f9;
        }

        .toc h2,
        .toc h3,
        .toc h4 {
            margin: 0;
            /* Remove all margins for uniformity */
        }

        .toc h2 {
            margin-top: 20px;
            /* Add a top margin specifically for H2 */
            margin-bottom: 10px;
            /* Space below H2 */
        }

        .toc h3 {
            color: #001055;
            /* Specific color for TOC subheadings */
            margin-bottom: 10px;
            /* Ensure consistent spacing below H3 */
        }

        .toc ul {
            list-style: none;
            /* Remove default bullets */
            padding-left: 0;
            /* Remove padding for the main list */
        }

        .toc li {
            margin: 5px 0;
            /* Space between TOC items */
        }

        /* Additional space for the main TOC items */
        .toc>ul>li {
            margin-bottom: 10px;
            /* Space after each H2 */
        }

        /* Nested TOC styles */
        .toc-subheading {
            margin-left: 20px;
            /* Indent subheadings */
        }

        /* Ensure the TOC list has disc bullets */
        #tocList {
            list-style-type: disc;
            /* Use disc bullets */
            padding-left: 20px;
            /* Control indentation */
        }

        #tocList ul {
            list-style-type: disc;
            /* Disc bullets for nested lists */
            padding-left: 20px;
            /* Further indent nested lists */
        }



        #tocList ul>li {
            margin: 5px 0;
            /* Space between nested TOC items */
            list-style-position: outside;
            /* Bullet outside text for nested items */
        }

        /* Style the anchor links in the TOC */
        #tocList a {
            text-decoration: none;
            /* Remove underline from links */
            font-size: 16px;
            /* Set font size */
            line-height: 1.5;
            /* Control line height */
            color: #001055;
            /* Set text color */
            padding-left: 5px;
            /* Space between bullet and text */
        }

        #tocList a:hover {
            color: #ff7900;
            /* Change color on hover */
        }

        /* Ensure default color for visited links */
        #tocList a {
            color: #001055;
            /* Original link color */
            text-decoration: none;
        }

        /* Ensure visited links don't change color */
        #tocList a:visited {
            color: #001055;
            /* Same as the original color */
        }


        .collapsed {
            display: none;
        }

        .nav {
            display: flex;
            /* Use flexbox for layout */
            justify-content: flex-start;
            /* Space the items evenly */
            flex-wrap: nowrap;
            /* Prevent wrapping to a new line */
            max-width: 100%;
        }

        .nav-item {
            flex: 1;
            /* Allow each tab to take equal space */
            text-align: center;
            /* Center align the text in each tab */
        }

        .padding4567 {
            padding-left: 8px;
            /* Set your desired left padding */
            padding-right: 8px;
            /* Set your desired right padding */
            margin: 0px;
        }

        .main-layout {
            padding: 24px 24px 80px;
            margin-left: 20px;
            max-width: 1200px;
            background-color: #f9f9f9;
        }

        @media (min-width: 987px) {
            .custom-row2557 {
                --bs-gutter-x: 2rem;
                /* Equivalent to gx-5 in Bootstrap */
            }
        }
    </style>

    <style>
        .entry-title h1 {
            font-size: 1.875rem !important;
            margin-top: 15px !important;
            margin-bottom: 20px !important;
            color: #000 !important;
            line-height: 2.25rem;
            /* Adjusted for readability */
            font-weight: 600 !important;
            text-transform: none;
        }

        #blogs69 h3 {
            font-size: 1.25rem !important;
            margin-top: 8px !important;
            margin-bottom: 10px !important;
            color: #434343 !important;
            text-transform: capitalize !important;
            line-height: 1.75rem;
            /* Slightly increased */
        }

        #blogs69 h2 {
            font-size: 1.5rem !important;
            margin-top: 10px !important;
            margin-bottom: 10px !important;
            color: #000 !important;
            line-height: 2.25rem;
            /* Adjusted for better readability */
            font-weight: 700 !important;
            text-transform: none;
        }

        #blogs69 h4 {
            font-size: 18px !important;
            margin-top: 6px !important;
            margin-bottom: 6px !important;
            color: #000 !important;
            text-transform: capitalize !important;
            line-height: 1.3rem;
            /* Increased from 1rem */
        }

        #blogs69 p {
            font-size: 1rem !important;
            margin-bottom: 6px !important;
            color: #000 !important;
            text-align: justify;
        }

        #blogs69 ul {
            font-size: 1rem !important;
            margin-bottom: 10px !important;
            color: #000 !important;
            list-style-type: disc !important;
            padding-left: 20px !important;

        }

        #ug747e47 h2 {
            font-size: 3rem !important;
            margin-top: 15px !important;
            margin-bottom: 20px !important;
            line-height: 2.2rem;
            /* Increased to match heading size */
            font-weight: 700 !important;
            text-transform: none;
        }

        .widget_container.label_no {
            background-color: #001055 !important;
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
      padding: 20px 10px;
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
      padding-top:1.5rem;
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

    .tmu-btn {
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
      .tmu-btn {
        padding: 5px 10px;
      }
    }

    .tmu-btn:hover {
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
      background: rgba(0,0,0,0.5);
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
    }
</style>

  {{-- Insta Grid Styling code created by Udit Gupta 18-April-2025 ends here --}}

    <!-- Page Title -->
    <section class="news-page-title page-title bg-transparent">
        <div class="container">
            <div class="page-title-row">

                <div id="ug747e47">
                    <h2
                        class="news-page-title-text text-uppercase tmu-text-primary tmu-page-heading text-center mb-1 mb-md-3 pt-3">
                        <span>TMU </span><span> Blogs</span>
                    </h2>
                    <!-- <h2 class="news-page-title-text">TMU Blog</h2> -->
                </div>

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('tmuhome') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('all_blogs') }}">Blogs</a>
                        </li>
                    </ol>
                </nav>

            </div>
        </div>
    </section><!-- .page-title end -->

    <!-- Content -->
    <section id="content">

        <div class="container" style="max-width:90%!important;">
            <div class="row custom-row2557">

                <main class="col-lg-9 pt-4">
                    <div class="single-post mb-0">
                        <!-- Single Post -->
                        <div class="entry">

                            <!-- Entry Title -->
                            <div class="entry-title mb-3">
                                <h1 class="tmu-text-primary "><span>{{ $blog->post_title }}</span><span></span></h1>
                            </div><!-- .entry-title end -->

                            <!-- Entry Meta -->
                            <div class="entry-meta  ">
                                <ul>
                                    <li style="margin: 0 0 8px 0;"><i
                                            class="uil uil-schedule"></i>{{ \Carbon\Carbon::parse($blog->posted_at)->format('d-m-Y') }}
                                    </li>
                                    <li style="margin: 0 0 8px 0;">
                                        <i class="uil uil-folder-open"></i>
                                        <!-- Link to trigger the form submission -->
                                        <a href="{{ url('blog/category/' . \Illuminate\Support\Str::slug($categoryName)) }}"
                                            class="category-link">{{ $categoryName }}</a>
                                    </li>

                                </ul>
                            </div><!-- .entry-meta end -->

                            <!-- Entry Image -->
                            <div class="entry-image mb-5">
                                <a href="#"><img src="{{ asset($blog->post_path) }}" width="80vw"
                                        alt="Blog Single"></a>
                            </div><!-- .entry-image end -->


                            <!-- Post Single - Content End -->

                            <!-- Table of Contents (TOC) -->
                            <div class="container">
                                <div class="row g-3">
                                    <!-- Table of Contents (TOC) -->
                                    <div class="col-md-5">
                                        <div class="toc">
                                            <h3>Table of Contents</h3>
                                            <ul id="tocList"></ul> <!-- TOC will be populated here by JavaScript -->
                                        </div>
                                    </div>

                                    <!-- Form Widget (Only visible if screen width > 767px) -->
                                    {{-- <div class="col-md-7">
                                        @if (!request()->ajax())
                                            <script>
                                                if (window.innerWidth > 767) {
                                                    document.write(`
                                                        <h2 class="tmu-text-primary text-center" style="font-size:1.7rem !important; line-height:1.5rem">
                                                            <span>Apply For Admissions</span><span></span>
                                                        </h2>
                                                        <div class="npf_wgts" data-height="520px" data-w="fced4875037a3071c2bc93dc1c15ae45" style="margin-bottom: 20px;"></div>
                                                    `);
                                                }
                                            </script>
                                        @endif
                                    </div> --}}
                                </div>
                            </div>

                            @if (!request()->ajax())
                                <script>
                                    if (window.innerWidth <= 767) {
                                        document.write(
                                            '<h2 class="tmu-text-primary" style="font-size:1.875rem !important; line-height:1.5rem"><span>Apply For Admissions</span><span></span></h2><div class="npf_wgts" data-height="520px" data-w="fced4875037a3071c2bc93dc1c15ae45"></div>'
                                        );
                                    }
                                </script>
                            @endif


                            <!-- Entry Content -->
                            <div class="entry-content mt-0">

                                <div id="blogs69">



                                    @php
                                        $content = nl2br(html_entity_decode($blog->full_post));
                                        $insertCode = '';

                                        if (!request()->ajax()) {
                                            $insertCode =
                                                '<div class="container-fluid mt-4 p-0">
<div class="row d-flex align-items-center bg-section" style="min-height: 550px; background: url(\'' .asset('uploads/blogs/banner_blog_npf.png') .'\') no-repeat left center / cover;">
<div class="col-12 col-lg-6 ms-auto  d-flex justify-content-center bg-form-wrapper" style="background: transparent;">
<div class="form-inner text-center">
<h2 class="tmu-text-primary text-center" style="font-size:1.7rem !important; line-height:1.5rem">
<span></span><span>Apply For Admissions</span>
</h2>
<div class="npf_wgts" style="max-width: 600px; width: 100%;" data-height="560px" data-w="fced4875037a3071c2bc93dc1c15ae45"></div>
</div>
</div>
</div>
</div>

<style>
@media (max-width: 991.98px) {
.bg-section {
background: none !important;
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
                                        }

                                        $count = 0;
                                        $content = preg_replace_callback(
                                            '/(<h2\b[^>]*>.*?<\/h2>)/i',
                                            function ($matches) use (&$count, $insertCode) {
                                                $count++;
                                                return $count === 2 ? $insertCode . $matches[0] : $matches[0];
                                            },
                                            $content,
                                        );

                                        echo $content;
                                    @endphp
                                </div>


                                <div class="card border-default my-4" style="background-color: #001055;">
                                    <div class="card-body p-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6 class="fs-5 fw-semibold mb-0" style="color: #FF7900;">Share:</h6>
                                            <div class="d-flex">
                                                <a href="https://www.facebook.com/tmumbd/"
                                                    class="social-icon si-small text-white border-transparent rounded-circle bg-facebook"
                                                    title="Facebook">
                                                    <i class="fa-brands fa-facebook-f"></i>
                                                    <i class="fa-brands fa-facebook-f"></i>
                                                </a>

                                                <a href="https://x.com/Tmumbd"
                                                    class="social-icon si-small text-white border-transparent rounded-circle bg-twitter"
                                                    title="Twitter">
                                                    <i class="fa-brands fa-twitter"></i>
                                                    <i class="fa-brands fa-twitter"></i>
                                                </a>

                                                <a href="https://www.linkedin.com/school/tmuuni/"
                                                    class="social-icon si-small text-white border-transparent rounded-circle bg-linkedin"
                                                    title="Whatsapp">
                                                    <i class="fa-brands fa-linkedin"></i>
                                                    <i class="fa-brands fa-linkedin"></i>
                                                </a>

                                                <a href="https://www.instagram.com/tmu_mbd/"
                                                    class="social-icon si-small text-white border-transparent rounded-circle bg-instagram "
                                                    title="Mail">
                                                    <i class="fa-brands fa-instagram"></i>
                                                    <i class="fa-brands fa-instagram"></i>
                                                </a>

                                                <a href="https://www.youtube.com/channel/UCSdJPj_8DCXkGY6SOmo_0ow"
                                                    class="social-icon si-small text-white border-transparent rounded-circle bg-youtube me-0"
                                                    title="Mail">
                                                    <i class="fa-brands fa-youtube"></i>
                                                    <i class="fa-brands fa-youtube"></i>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row text-center text-md-start justify-content-between my-3">
                                    @if ($nextPost)
                                        <div class="col-md-auto">
                                            <a href="{{ url('blog/' . $nextPost->n_slug) }}"
                                                class="d-inline-flex align-items-center" style="color: #FF7900;">
                                                <i class="uil uil-angle-left-b fs-3 me-1"></i>
                                                <span>
                                                    {{ implode(' ', array_slice(explode(' ', $nextPost->post_title), 0, 5)) }}
                                                </span>
                                            </a>
                                        </div>
                                    @endif

                                    @if ($previousPost)
                                        <div class="col-md-auto ms-auto">
                                            <a href="{{ url('blog/' . $previousPost->n_slug) }}"
                                                class="d-inline-flex align-items-center" style="color: #FF7900;">
                                                <span>
                                                    {{ implode(' ', array_slice(explode(' ', $previousPost->post_title), 0, 5)) }}
                                                </span>
                                                <i class="uil uil-angle-right-b fs-3 ms-1"></i>
                                            </a>
                                        </div>
                                    @endif
                                </div>



                                <div class="clear"></div>
                            </div>
                        </div><!-- .entry end -->
                    </div>
                </main>
                <aside class="sidebar col-lg-3 mt-4 mb-2">
                    <div class="sidebar-widgets-wrap pt-lg-3">



                        <div class="widget">
                            <h4 class="text-uppercase tmu-text-primary text-start mb-1 mb-md-3 pt-3"
                                style="font-size:24px!important;">
                                <span>Related </span><span> Blogs</span>
                            </h4>
                            <div class="posts-sm" id="related-post-list-sidebar">
                                @foreach ($relatedPosts as $post)
                                    <div class="entry mb-3 d-flex align-items-center flex-nowrap">
                                        <!-- Right Content: Image -->
                                        <div class="entry-image me-2 ">
                                            <a href="{{ url('blog/' . $post->n_slug) }}">
                                                <img src="{{ asset($post->post_thumb_path) }}" alt="Image"
                                                    style="width: 50px; height: 50px; object-fit: cover;">
                                            </a>
                                        </div>

                                        <!-- Left Content: Title and Date -->
                                        <div class="entry-content pe-3 ">
                                            <!-- Blog Title -->
                                            <h5 class="mb-1 text-break" style="font-size: 16px;">
                                                <a href="{{ url('blog/' . $post->n_slug) }}" class="text-dark">
                                                    {{ Str::limit($post->post_title, 50) }}
                                                </a>
                                            </h5>
                                            <!-- Blog Date -->
                                            <small class="text-muted" style="font-size: 14px;">
                                                {{ $post->posted_at->format('jS F Y') }}
                                            </small>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="widget">
                            <h4>Categories</h4>
                            <div class="tagcloud">
                                @foreach ($blog_categories as $blog_category)
                                    @if (!empty($blog_category->category_name))
                                        <a href="{{ url($blog_category->category_slug) }}" class="category-link"
                                            data-category="{{ $blog_category->category_name }}">
                                            {{ $blog_category->category_name }}
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                        </div>




                    </div>
                </aside><!-- .sidebar end -->
            </div>
        </div>

    </section><!-- #content end -->
    <section id="content" class="col-lg-9 main-layout">
        <div class="single-post mb-0">
            <div class="entry">
                <div class="entry-content mt-0">
                    <!-- <div class="card border-default mb-2">
                                        <div class="card-body p-4">
                                            <div class="row">
                                                <div class="col-md-3 d-none d-sm-block d-flex justify-content-center" id="tmu-admin">
                                                    <img src="{{ asset('/assets/img/tmu-logo1.jpg') }}" alt="Author Image" style="background-size: cover; max-height: 160px; margin-bottom: 0;">
                                                </div>

                                                <div class="col-md-9">
                                                    <div class="d-flex align-items-start mb-2">
                                                        <div>
                                                            <h5 class="text-medium fw-semibold mb-0"><a href="{{ route('all_blogs') }}" class="text-dark">TMU Admin</a></h5>

                                                        </div>

                                                    </div>
                                                    <p class="mb-3">A blog (shortening of "weblog") is an online journal or informational website displaying information in the reverse chronological order, with the latest posts appearing first.
                                                        It is a platform where a writer or even a group of writers share their views on an individual subject.</p>
                                                    <a href="{{ route('all_blogs') }}" class="more-link" style="color: #FF7900!important; border-color: #FF7900;">More Posts by TMU Blogs</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->

                    <div class="card border-default mb-2">
                        <div class="card-body p-4">
                            <div class="row">
                                <!-- Logo Column for Large Screens -->
                                <div class="col-lg-3 col-md-4 d-none d-md-block justify-content-center" id="tmu-admin">
                                    <img src="{{ asset('/assets/img/tmu-logo1.jpg') }}" alt="Author Image"
                                        style="background-size: cover; max-height: 160px; margin-bottom: 0;">
                                </div>

                                <!-- Text Column -->
                                <div class="col-lg-9 col-md-8 col-12">
                                    <div class="d-flex align-items-start mb-2">
                                        <div>
                                            <h5 class="text-medium fw-semibold mb-0"><a href="{{ route('all_blogs') }}"
                                                    class="text-dark">TMU Admin</a></h5>
                                        </div>
                                    </div>
                                    <p class="mb-3">A blog (shortening of "weblog") is an online journal or informational
                                        website displaying information in the reverse chronological order, with the latest
                                        posts appearing first. It is a platform where a writer or even a group of writers
                                        share their views on an individual subject.</p>
                                    <a href="{{ route('all_blogs') }}" class="more-link"
                                        style="color: #FF7900!important; border-color: #FF7900;">More Posts by TMU
                                        Blogs</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container my-4">
                        <h4 class="text-uppercase tmu-text-primary text-start mb-1 mb-md-3 pt-3 fw-bold"
                            style="font-size:24px!important;">
                            <span>Recent </span><span> Blogs</span>
                        </h4>

                        <!-- Carousel for small screens (below 768px) -->
                        <div class="owl-carousel d-block d-md-none pt-3" id="recent-blogs-carousel">
                            @foreach ($recentPosts as $post)
                                <div class="item">
                                    <a href="{{ url('blog/' . $post->n_slug) }}" class="text-decoration-none">
                                        <div class="card h-100"
                                            style="background: transparent; box-shadow: none; border: none; overflow: hidden; border-radius: 20px;">
                                            <!-- Blog Image -->
                                            <div class="position-relative  text-center">
                                                <img src="{{ asset($post->monaco_image_path) }}" class="card-img-top"
                                                    alt="Blog Image"
                                                    style="width: 85%; height: auto; object-fit: cover; border-radius: 20px; display: block; margin: 0 auto;">
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="card-body text-center">
                                                <!-- Post Date and Category -->
                                                <small class="text-muted d-block mb-1">
                                                    {{ $post->posted_at->format('M j') }} |
                                                    {{ $post->category_name->category_name ?? 'Uncategorized' }}
                                                </small>

                                                <!-- Post Title -->
                                                <h6 class="card-title mb-0" style="font-size: 1rem;">
                                                    {{ Str::limit($post->post_title, 50) }}
                                                </h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>

                        <!-- Grid for larger screens (above 768px) -->
                        <div class="row g-4 d-none d-md-flex">
                            @foreach ($recentPosts as $post)
                                <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                                    <a href="{{ url('blog/' . $post->n_slug) }}" class="text-decoration-none">
                                        <div class="card h-100"
                                            style="background: transparent; box-shadow: none; border: none; overflow: hidden; border-radius: 20px;">
                                            <!-- Blog Image -->
                                            <div class="position-relative ">
                                                <img src="{{ asset($post->monaco_image_path) }}" class="card-img-top"
                                                    alt="Blog Image"
                                                    style="width: 100%; height: auto; object-fit: cover; border-radius: 20px;">
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="card-body text-center">
                                                <!-- Post Date and Category -->
                                                <small class="text-muted d-block mb-1">
                                                    {{ $post->posted_at->format('M j') }} |
                                                    {{ $post->category ?? 'Uncategorized' }}
                                                </small>

                                                <!-- Post Title -->
                                                <h6 class="card-title mb-0" style="font-size: 1rem;">
                                                    {{ Str::limit($post->post_title, 50) }}
                                                </h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>






                    <div id="comments">

                        <h3 id="comments-title" style="color: #FF7900;"><span>{{ $topLevelCommentsCount }}</span>
                            Comments</h3>

                        <!-- Comments List -->
                        <ol class="commentlist">
                            @foreach ($comments as $comment)
                                @if ($comment->parent_id === null)
                                    <!-- Check if the comment is a top-level comment -->
                                    <li class="comment even thread-even depth-1" id="li-comment-{{ $comment->id }}">
                                        <div id="comment-{{ $comment->id }}" class="comment-wrap">
                                            <div class="comment-meta">
                                                <div class="comment-author vcard">
                                                    <span class="comment-avatar">
                                                        <img src="{{ asset('assets/img/icons/profile_blog_comment.svg') }}"
                                                            class="avatar avatar-60 photo avatar-default" height="60"
                                                            width="60"
                                                            style="filter: invert(56%) sepia(100%) saturate(1000%) hue-rotate(-20deg) brightness(95%) contrast(91%);">

                                                    </span>
                                                </div>
                                            </div>
                                            <div class="comment-content">
                                                <div class="comment-author">
                                                    {{ $comment->name }}<span>{{ $comment->created_at->format('F j, Y \a\t g:i a') }}</span>
                                                </div>
                                                <p>{{ $comment->comment_content }}</p>
                                                <a class='comment-reply-link' href='#'><i
                                                        class="bi-reply-fill"></i></a>
                                            </div>
                                            <div class="clear"></div>
                                        </div>

                                        <!-- Direct Replies -->
                                        @if (count($comment->children) > 0)
                                            <ul class='children'>
                                                @foreach ($comment->children as $child)
                                                    <li class="comment byuser comment-author-{{ $child->id }} odd alt depth-2"
                                                        id="li-comment-{{ $child->id }}">
                                                        <div id="comment-{{ $child->id }}" class="comment-wrap">
                                                            <div class="comment-meta">
                                                                <div class="comment-author vcard">
                                                                    <span class="comment-avatar">
                                                                        <img alt='Image'
                                                                            src="{{ asset('assets/img/icons/profile_blog_comment.svg') }}"
                                                                            class='avatar avatar-40 photo' height='40'
                                                                            width='40'>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="comment-content">
                                                                <div class="comment-author">
                                                                    {{ $child->name }}<span>{{ $child->created_at->format('F j, Y \a\t g:i a') }}</span>
                                                                </div>
                                                                <p>{{ $child->comment_content }}</p>
                                                            </div>
                                                            <div class="clear"></div>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endif
                            @endforeach
                        </ol><!-- .commentlist end -->

                        <div class="clear"></div>

                        <!-- Comment Form -->
                        <div class="col-12 mb-5">
                            <div class="card border-0">
                                <div class="card-body bg-light p-5">
                                    <h2 class="mb-0 fw-bold font-body">Voice your perspective!</h2>
                                    <p class="text-muted">Share your viewpoint concisely, conveying wisdom in minimal
                                        words.</p>

                                    <div class="form-widget">
                                        <div id="success-message" class="alert alert-success" style="display: none;">
                                        </div>

                                        <form class="mb-0" id="comment-form" name="comment-form" method="post">
                                            @csrf
                                            <input type="hidden" name="post_id" value="{{ $blog->id }}">
                                            <input type="hidden" name="parent_id" value="0">

                                            <div class="form-process" style="display: none;">
                                                <div class="css3-spinner">
                                                    <div class="css3-spinner-scaler"></div>
                                                </div>
                                            </div>

                                            <div class="row align-items-center">
                                                <div class="col-md-4 form-group">
                                                    <label for="template-contactform-name">Full Name
                                                        <small>*</small></label>
                                                    <input type="text" id="template-contactform-name"
                                                        name="template-contactform-name" class="form-control required"
                                                        required>
                                                </div>

                                                <div class="col-md-4 form-group">
                                                    <label for="template-contactform-email">Email <small>*</small></label>
                                                    <input type="email" id="template-contactform-email"
                                                        name="template-contactform-email"
                                                        class="required email form-control" required>
                                                </div>

                                                <div class="col-md-4 form-group">
                                                    <label for="template-contactform-phone">Phone</label>
                                                    <input type="text" id="template-contactform-phone"
                                                        name="template-contactform-phone" class="form-control">
                                                </div>

                                                <div class="w-100"></div>

                                                <div class="col-12 form-group">
                                                    <label for="template-contactform-message">Message
                                                        <small>*</small></label>
                                                    <textarea class="required form-control" id="template-contactform-message" name="template-contactform-message"
                                                        rows="6" cols="30" required></textarea>
                                                </div>

                                                <div class="col-sm-6">
                                                    <button class="tmu-btn btn-1 d-block w-fit-content mt-3 fade-animation"
                                                        type="submit">Send Message</button>
                                                </div>

                                                {{-- <div class="col-sm-6 d-flex justify-content-sm-end mt-3 mt-sm-0">
                                                    <a href="https://www.facebook.com/tmumbd/"
                                                        class="social-icon border-transparent border-default si-small h-bg-facebook">
                                                        <i class="fa-brands fa-facebook"></i>
                                                    </a>

                                                    <a href="https://www.instagram.com/tmu_mbd/"
                                                        class="social-icon border-transparent border-default si-small h-bg-instagram">
                                                        <i class="fa-brands fa-instagram"></i>
                                                    </a>

                                                    <a href="https://x.com/Tmumbd"
                                                        class="social-icon border-transparent border-default si-small h-bg-twitter">
                                                        <i class="fa-brands fa-twitter"></i>
                                                    </a>
                                                </div> --}}
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <h2 class="tmu-text-primary text-center mb-1"><span>Follow Us On</span><span> Instagram</span></h2>
                        <div class="insta-grid-container container">
                            <div class="insta-grid-header text-center mb-4">
                                <div class="d-flex gap-3 justify-content-center align-items-center pe-4">
                                    <img src="{{ asset('assets/img/insta-img/tmu-insta-logo.jpg')}}" alt="TMU Logo" class="insta-grid-logo">
                                    <h4 class="insta-grid-title text-start">
                                        Teerthanker Mahaveer <div class="d-none d-md-block"></div> University
                                        <p class="insta-grid-handle">@tmu_mbd</p>
                                    </h4>
                                </div>
                                <div class="insta-grid-meta d-flex justify-content-center gap-3 me-4">
                                    <span><strong>4K</strong> Posts</span>
                                    <span><strong>42.3K</strong> Followers</span>
                                    <span><strong>4</strong> Following</span>
                                </div>
                                <a href="https://www.instagram.com/tmu_mbd/?hl=en" target="_blank">
                                    <button class="tmu-btn btn-4 mt-2">
                                        <i class="fab fa-instagram"></i>&nbsp;&nbsp; Follow
                                    </button>
                                </a>
                            </div>

                            <div class="row g-1 insta-grid-gallery">
                                <!-- Repeat this for 8 images -->
                                <!-- 1 -->
                                <div class="col-4 col-md-3">
                                    <a href="https://www.instagram.com/tmu_mbd/?hl=en" target="_blank"
                                        class="insta-post-wrapper d-block">
                                        <img src="{{asset ('assets/img/insta-img/13.jpg')}}" class="img-fluid insta-grid-img" alt="post">
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
                                <div class="col-4 col-md-3">
                                    <a href="https://www.instagram.com/tmu_mbd/?hl=en" target="_blank"
                                        class="insta-post-wrapper d-block">
                                        <img src="{{asset ('assets/img/insta-img/12.jpg')}}" class="img-fluid insta-grid-img"
                                            alt="post">
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
                                <div class="col-4 col-md-3">
                                    <a href="https://www.instagram.com/tmu_mbd/?hl=en" target="_blank"
                                        class="insta-post-wrapper d-block">
                                        <img src="{{asset ('assets/img/insta-img/11.jpg')}}" class="img-fluid insta-grid-img"
                                            alt="post">
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
                                <div class="col-4 col-md-3">
                                    <a href="https://www.instagram.com/tmu_mbd/?hl=en" target="_blank"
                                        class="insta-post-wrapper d-block">
                                        <img src="{{asset ('assets/img/insta-img/10.jpg')}}" class="img-fluid insta-grid-img"
                                            alt="post">
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
                                <div class="col-4 col-md-3">
                                    <a href="https://www.instagram.com/tmu_mbd/?hl=en" target="_blank"
                                        class="insta-post-wrapper d-block">
                                        <img src="{{asset ('assets/img/insta-img/9.jpg')}}" class="img-fluid insta-grid-img" alt="post">
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
                                <div class="col-4 col-md-3">
                                    <a href="https://www.instagram.com/tmu_mbd/?hl=en" target="_blank"
                                        class="insta-post-wrapper d-block">
                                        <img src="{{asset ('assets/img/insta-img/8.jpg')}}" class="img-fluid insta-grid-img" alt="post">
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
                                <div class="col-4 col-md-3 d-none d-lg-block">
                                    <a href="https://www.instagram.com/tmu_mbd/?hl=en" target="_blank"
                                        class="insta-post-wrapper d-block">
                                        <img src="{{asset ('assets/img/insta-img/7.jpg')}}" class="img-fluid insta-grid-img" alt="post">
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
                                <div class="col-4 col-md-3 d-none d-lg-block">
                                    <a href="https://www.instagram.com/tmu_mbd/?hl=en" target="_blank"
                                        class="insta-post-wrapper d-block">
                                        <img src="{{asset ('assets/img/insta-img/6.jpg')}}" class="img-fluid insta-grid-img" alt="post">
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
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- #wrapper end -->

    <!-- Go To Top -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const content = document.getElementById('blogs69');
            const tocList = document.getElementById('tocList');
            const collapseAfter = 12; // Number of items after which to collapse
            let currentParent = tocList; // Initial TOC parent to which headings are appended
            let lastH2 = null; // To keep track of the last added h2
            let lastH3 = null; // To keep track of the last added h3

            if (content && tocList) {
                const headings = content.querySelectorAll('h2, h3, h4');

                headings.forEach((heading, index) => {
                    if (heading.textContent.trim() === '') return; // Skip empty headings

                    const level = parseInt(heading.tagName.charAt(1)); // Get heading level (2, 3, or 4)
                    const anchor = document.createElement('a');
                    const headingId = `heading-${index}`;
                    heading.id = headingId; // Assign a unique ID
                    anchor.href = `#${headingId}`;
                    anchor.textContent = heading.textContent;

                    const listItem = document.createElement('li');
                    listItem.appendChild(anchor);

                    if (level === 2) {
                        // If it's an h2, append directly to the main TOC list
                        tocList.appendChild(listItem);
                        currentParent = listItem; // Update currentParent to this h2 for nesting h3 and h4
                        lastH2 = listItem; // Store the reference to the last h2 added
                        lastH3 = null; // Reset h3, because we are starting fresh under a new h2
                    } else if (level === 3) {
                        if (!lastH2) {
                            // If there is no h2 yet, treat this as a top-level heading (though it's an h3)
                            tocList.appendChild(listItem);
                            currentParent = listItem; // h3 becomes the main item until h2 is found
                        } else {
                            // If it's an h3 and there's an h2, append it as a child of the last h2
                            let nestedList = currentParent.querySelector('ul');
                            if (!nestedList) {
                                nestedList = document.createElement('ul');
                                currentParent.appendChild(nestedList); // Create a nested list under the h2
                            }
                            nestedList.appendChild(listItem);
                            lastH3 = listItem; // Store the reference to the last h3 added
                        }
                    } else if (level === 4) {
                        if (!lastH3) {
                            // If there's no h3, append directly to the main toc or h2
                            if (!lastH2) {
                                tocList.appendChild(listItem); // If no h2 or h3, append directly
                            } else {
                                let nestedList = currentParent.querySelector('ul');
                                if (!nestedList) {
                                    nestedList = document.createElement('ul');
                                    currentParent.appendChild(
                                        nestedList); // Create a nested list under the h2
                                }
                                nestedList.appendChild(listItem); // Add h4 under h2 if no h3 is found
                            }
                        } else {
                            // If it's an h4, and we have an h3, append it under the last h3
                            let nestedList = lastH3.querySelector('ul');
                            if (!nestedList) {
                                nestedList = document.createElement('ul');
                                lastH3.appendChild(nestedList); // Create a nested list under the last h3
                            }
                            nestedList.appendChild(listItem);
                        }
                    }

                    // Collapse list items after a certain number
                    if (index >= collapseAfter) {
                        listItem.classList.add('collapsed');
                        listItem.style.display = 'none';
                    }

                    // Remove link focus color after click
                    anchor.addEventListener('click', function() {
                        setTimeout(() => {
                            anchor.blur();
                        }, 100); // Slight delay to allow the click action to complete
                    });
                });

                // Add "Show More" button if needed
                if (headings.length > collapseAfter) {
                    const showMoreBtn = document.createElement('button');
                    showMoreBtn.textContent = 'Show More';
                    showMoreBtn.classList.add('tmu-btn', 'btn-1', 'read-more', 'ms-2', 'mt-2', 'py-1', 'px-3',
                        'fs-12');
                    tocList.appendChild(showMoreBtn);

                    showMoreBtn.addEventListener('click', function() {
                        const collapsedItems = tocList.querySelectorAll('.collapsed');
                        collapsedItems.forEach(item => {
                            item.style.display = item.style.display === 'none' ? 'list-item' :
                                'none';
                        });
                        showMoreBtn.textContent = showMoreBtn.textContent === 'Show More' ? 'Show Less' :
                            'Show More';
                    });
                }
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#recent-blogs-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                dots: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    575: {
                        items: 1
                    }
                }
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('comment-form');
            const spinner = document.querySelector('.form-process');
            const successMessage = document.getElementById('success-message');
            const submitButton = form.querySelector('button[type="submit"]');

            form.addEventListener('submit', function(event) {
                event.preventDefault(); // Prevent default form submission
                spinner.style.display = 'block'; // Show the spinner
                submitButton.disabled = true; // Disable the button to prevent double submission

                // Create a FormData object
                const formData = new FormData(form);
                const url = "{{ route('blog.comments', $blog->id) }}";

                // Send the AJAX request
                fetch(url, {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                    })
                    .then(response => response.json())
                    .then(data => {
                        spinner.style.display = 'none'; // Hide the spinner
                        if (data.success) {
                            successMessage.textContent = data.message;
                            successMessage.style.display = 'block'; // Show success message
                            form.reset(); // Reset the form
                        }
                    })
                    .catch(error => {
                        spinner.style.display = 'none'; // Hide the spinner
                        console.error('Error:', error);
                    })
                    .finally(() => {
                        submitButton.disabled =
                            false; // Re-enable the button after the request is complete
                    });
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





    <!-- if (headings.length > collapseAfter) {
                                    const showMoreBtn = document.createElement('button');
                                    showMoreBtn.textContent = 'Show More';
                                    showMoreBtn.classList.add('tmu-btn', 'btn-1', 'read-more', 'ms-2', 'mt-2', 'py-1', 'px-3', 'fs-12');
                                    tocList.appendChild(showMoreBtn);

                                    showMoreBtn.addEventListener('click', function() {
                                        const collapsedItems = tocList.querySelectorAll('.collapsed');
                                        collapsedItems.forEach(item => {
                                            item.style.display = item.style.display === 'none' ? 'list-item' : 'none';
                                        });
                                        showMoreBtn.textContent = showMoreBtn.textContent === 'Show More' ? 'Show Less' : 'Show More';
                                    });
                                } -->


@endsection
