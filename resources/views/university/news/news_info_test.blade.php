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
                            <h1 class="tmu-text-primary"><span>{{ html_entity_decode($news->event_title) }}
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
                                        data-category="{{ $news->category }}">{{ $news->category }}</a>
                                </li>


                                <form id="categoryForm" method="POST" action="{{ route('all_news.post') }}"
                                    style="display: none;">
                                    @csrf
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
                            <p style="text-align:justify">
                                @php
                                    $content = nl2br(html_entity_decode($news->event_full_description));
                                    $insertCode = '';

                                    if (!request()->ajax()) {
                                        $insertCode =
                                            '<div class="container-fluid mt-4 p-0">
    <div class="row d-flex align-items-center bg-section" 
        style="min-height: 550px; 
               background: url(\'' .
                                            asset('uploads/blogs/banner_blog_npf.png') .
                                            '\') no-repeat left center / cover;">

        <div class="col-12 col-md-6 ms-auto pt-5 d-flex justify-content-center bg-form-wrapper" style="background: transparent;">
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
                            </p>


                            <section id="content">
                                <div class="content-wrap">
                                    <div class="container">
                                        <div class="row " data-lightbox="gallery">
                                            @if (!empty($news->ei1_path) && file_exists(public_path($news->ei1_path)))
                                                <a class="grid-item col-4" href="{{ asset($news->ei1_path) }}"
                                                    data-lightbox="gallery-item"><img src="{{ asset($news->ei1_path) }}"
                                                        alt="Gallery Thumb 1"></a>
                                            @endif

                                            @if (!empty($news->ei2_path) && file_exists(public_path($news->ei2_path)))
                                                <a class="grid-item col-4" href="{{ asset($news->ei2_path) }}"
                                                    data-lightbox="gallery-item"><img src="{{ asset($news->ei2_path) }}"
                                                        alt="Gallery Thumb 2"></a>
                                            @endif

                                            @if (!empty($news->ei3_path) && file_exists(public_path($news->ei3_path)))
                                                <a class="grid-item col-4" href="{{ asset($news->ei3_path) }}"
                                                    data-lightbox="gallery-item"><img src="{{ asset($news->ei3_path) }}"
                                                        alt="Gallery Thumb 3"></a>
                                            @endif

                                            @if (!empty($news->ei4_path) && file_exists(public_path($news->ei4_path)))
                                                <a class="grid-item col-4" href="{{ asset($news->ei4_path) }}"
                                                    data-lightbox="gallery-item"><img src="{{ asset($news->ei4_path) }}"
                                                        alt="Gallery Thumb 4"></a>
                                            @endif

                                            @if (!empty($news->ei5_path) && file_exists(public_path($news->ei5_path)))
                                                <a class="grid-item col-4" href="{{ asset($news->ei5_path) }}"
                                                    data-lightbox="gallery-item"><img src="{{ asset($news->ei5_path) }}"
                                                        alt="Gallery Thumb 5"></a>
                                            @endif

                                            @if (!empty($news->ei6_path) && file_exists(public_path($news->ei6_path)))
                                                <a class="grid-item col-4" href="{{ asset($news->ei6_path) }}"
                                                    data-lightbox="gallery-item"><img src="{{ asset($news->ei6_path) }}"
                                                        alt="Gallery Thumb 6"></a>
                                            @endif


                                        </div>

                                    </div>
                                </div>
                            </section>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.category-link').on('click', function(e) {
                e.preventDefault(); // Prevent default link behavior

                var category = $(this).data('category'); // Get category from data attribute
                $('#categoryInput').val(category); // Set category value in hidden form
                $('#categoryForm').submit(); // Submit the hidden form
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
