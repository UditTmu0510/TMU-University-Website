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

<!-- Page Title -->
<section class="news-page-title page-title bg-transparent">
    <div class="container">
        <div class="page-title-row">

            <div>
                <h1 class="news-page-title-text text-uppercase tmu-text-primary tmu-page-heading text-center mb-1 mb-md-3"><span>TMU </span><span> Blogs</span></h1>
                <!-- <h2 class="news-page-title-text">TMU Blog</h2> -->
            </div>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('tmuhome')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{route('all_blogs')}}">Blogs</a></li>
                </ol>
            </nav>

        </div>
    </div>
</section><!-- .page-title end -->

<!-- Content -->
<section id="content">
    <div class="content-wrap">
        <div class="container">
            <div class="row gx-5 col-mb-80">

                <main class="col-lg-9">
                    <div class="single-post mb-0">
                        <!-- Single Post -->
                        <div class="entry">

                            <!-- Entry Title -->
                            <div class="entry-title mb-3">
                                <h2 class="tmu-text-primary"><span>{{$blog->post_title}}</span><span></span></h2>
                            </div><!-- .entry-title end -->

                            <!-- Entry Meta -->
                            <div class="entry-meta  ">
                                <ul>
                                    <li style="margin: 0 0 8px 0;"><i class="uil uil-schedule"></i>{{$blog->posted_at}}</li>
                                    <li style="margin: 0 0 8px 0;">
                                        <i class="uil uil-folder-open"></i>
                                        <!-- Link to trigger the form submission -->
                                        <a href="#" class="category-link" data-category="{{ $blog->category }}">{{ $blog->category }}</a>
                                    </li>

                                    <!-- Hidden Form for Category Filtering -->
                                    <form id="categoryForm" method="POST" action="{{ route('all_blogs.post') }}" style="display: none;">
                                        @csrf
                                        <input type="hidden" name="blogs_category" id="categoryInput">
                                    </form>

                                </ul>
                            </div><!-- .entry-meta end -->

                            <!-- Entry Image -->
                            <div class="entry-image mb-5">
                                <a href="#"><img src="{{asset($blog->post_path)}}" alt="Blog Single"></a>
                            </div><!-- .entry-image end -->

                            <!-- Entry Content -->
                            <div class="entry-content mt-0">

                                <!-- Post Single - Content End -->
                                <p style="text-align:justify">
                                    @php
                                    echo nl2br(html_entity_decode($blog->full_post));
                                    @endphp
                                </p>




                                <!-- <section id="content">
                                    <div class="content-wrap">
                                        <div class="container">
                                            <div class="row " data-lightbox="gallery">
                                                @if(!empty($blog->ei1_path))
                                                <a class="grid-item col-4" href="{{asset($blog->ei1_path)}}" data-lightbox="gallery-item"><img src="{{asset($blog->ei1_path)}}" alt="Gallery Thumb 1"></a>
                                                @endif

                                                @if(!empty($blog->ei2_path))
                                                <a class="grid-item col-4" href="{{asset($blog->ei2_path)}}" data-lightbox="gallery-item"><img src="{{asset($blog->ei2_path)}}" alt="Gallery Thumb 2"></a>
                                                @endif

                                                @if(!empty($blog->ei3_path))
                                                <a class="grid-item col-4" href="{{asset($blog->ei3_path)}}" data-lightbox="gallery-item"><img src="{{asset($blog->ei3_path)}}" alt="Gallery Thumb 3"></a>
                                                @endif

                                                @if(!empty($blog->ei4_path))
                                                <a class="grid-item col-4" href="{{asset($blog->ei4_path)}}" data-lightbox="gallery-item"><img src="{{asset($blog->ei4_path)}}" alt="Gallery Thumb 4"></a>
                                                @endif

                                                @if(!empty($blog->ei5_path))
                                                <a class="grid-item col-4" href="{{asset($blog->ei5_path)}}" data-lightbox="gallery-item"><img src="{{asset($blog->ei5_path)}}" alt="Gallery Thumb 5"></a>
                                                @endif

                                                @if(!empty($blog->ei6_path))
                                                <a class="grid-item col-4" href="{{asset($blog->ei6_path)}}" data-lightbox="gallery-item"><img src="{{asset($blog->ei6_path)}}" alt="Gallery Thumb 6"></a>
                                                @endif

                                            </div>

                                            <div class="divider"><i class="bi-circle-fill"></i></div>
                                        </div>
                                    </div>
                                </section> -->

                                <div class="card border-default my-4" style="background-color: #001055;">
                                    <div class="card-body p-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6 class="fs-5 fw-semibold mb-0" style="color: #FF7900;">Share:</h6>
                                            <div class="d-flex">
                                                <a href="https://www.facebook.com/tmumbd/" class="social-icon si-small text-white border-transparent rounded-circle bg-facebook" title="Facebook">
                                                    <i class="fa-brands fa-facebook-f"></i>
                                                    <i class="fa-brands fa-facebook-f"></i>
                                                </a>

                                                <a href="https://x.com/Tmumbd" class="social-icon si-small text-white border-transparent rounded-circle bg-twitter" title="Twitter">
                                                    <i class="fa-brands fa-twitter"></i>
                                                    <i class="fa-brands fa-twitter"></i>
                                                </a>

                                                <a href="https://www.linkedin.com/school/tmuuni/" class="social-icon si-small text-white border-transparent rounded-circle bg-linkedin" title="Whatsapp">
                                                    <i class="fa-brands fa-linkedin"></i>
                                                    <i class="fa-brands fa-linkedin"></i>
                                                </a>

                                                <a href="https://www.instagram.com/tmu_mbd/" class="social-icon si-small text-white border-transparent rounded-circle bg-instagram " title="Mail">
                                                    <i class="fa-brands fa-instagram"></i>
                                                    <i class="fa-brands fa-instagram"></i>
                                                </a>

                                                <a href="https://www.youtube.com/channel/UCSdJPj_8DCXkGY6SOmo_0ow" class="social-icon si-small text-white border-transparent rounded-circle bg-youtube me-0" title="Mail">
                                                    <i class="fa-brands fa-youtube"></i>
                                                    <i class="fa-brands fa-youtube"></i>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row text-center text-md-start justify-content-between my-3">
                                    @if($nextPost)
                                    <div class="col-md-auto">
                                        <a href="{{ url('blog/' . $nextPost->n_slug) }}" class="d-inline-flex align-items-center" style="color: #FF7900;">
                                            <i class="uil uil-angle-left-b fs-3 me-1"></i>
                                            <span>
                                                {{ implode(' ', array_slice(explode(' ', $nextPost->post_title), 0, 5)) }}
                                            </span>
                                        </a>
                                    </div>
                                    @endif

                                    @if($previousPost)
                                    <div class="col-md-auto ms-auto">
                                        <a href="{{ url('blog/' . $previousPost->n_slug) }}" class="d-inline-flex align-items-center" style="color: #FF7900;">
                                            <span>
                                                {{ implode(' ', array_slice(explode(' ', $previousPost->post_title), 0, 5)) }}
                                            </span>
                                            <i class="uil uil-angle-right-b fs-3 ms-1"></i>
                                        </a>
                                    </div>
                                    @endif
                                </div>


                                <div class="card border-default mb-6">
                                    <div class="card-body p-4">
                                        <div class="row">
                                            <div class="col-md-3 d-none d-sm-block" id="tmu-admin">
                                                <img src="images/tmu-logo.png" alt="Author Image" style="background-size: cover; height:24vh; margin-bottom:0rem;">
                                            </div>
                                            <div class="col-md-9">
                                                <div class="d-flex align-items-start mb-2">
                                                    <div>
                                                        <h5 class="text-medium fw-semibold mb-0"><a href="{{route('all_blogs')}}" class="text-dark">TMU Admin</a></h5>

                                                    </div>

                                                </div>
                                                <p class="mb-3">A blog (shortening of "weblog") is an online journal or informational website displaying information in the reverse chronological order, with the latest posts appearing first.
                                                    It is a platform where a writer or even a group of writers share their views on an individual subject.</p>
                                                <a href="{{route('all_blogs')}}" class="more-link" style="color: #FF7900!important; border-color: #FF7900;">More Posts by TMU Blogs</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="comments">

                                    <h3 id="comments-title" style="color: #FF7900;"><span>{{ $topLevelCommentsCount }}</span> Comments</h3>

                                    <!-- Comments List -->
                                    <ol class="commentlist">
                                        @foreach ($comments as $comment)
                                        @if ($comment->parent_id === null) <!-- Check if the comment is a top-level comment -->
                                        <li class="comment even thread-even depth-1" id="li-comment-{{ $comment->id }}">
                                            <div id="comment-{{ $comment->id }}" class="comment-wrap">
                                                <div class="comment-meta">
                                                    <div class="comment-author vcard">
                                                        <span class="comment-avatar">
                                                            <img alt='Image' src='https://www.gravatar.com/avatar/{{ md5(strtolower(trim($comment->email))) }}?s=60' class='avatar avatar-60 photo avatar-default' height='60' width='60'>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="comment-content">
                                                    <div class="comment-author">
                                                        {{ $comment->name }}<span>{{ $comment->created_at->format('F j, Y \a\t g:i a') }}</span>
                                                    </div>
                                                    <p>{{ $comment->comment_content }}</p>
                                                    <a class='comment-reply-link' href='#'><i class="bi-reply-fill"></i></a>
                                                </div>
                                                <div class="clear"></div>
                                            </div>

                                            <!-- Direct Replies -->
                                            @if (count($comment->children) > 0)
                                            <ul class='children'>
                                                @foreach ($comment->children as $child)
                                                <li class="comment byuser comment-author-{{ $child->id }} odd alt depth-2" id="li-comment-{{ $child->id }}">
                                                    <div id="comment-{{ $child->id }}" class="comment-wrap">
                                                        <div class="comment-meta">
                                                            <div class="comment-author vcard">
                                                                <span class="comment-avatar">
                                                                    <img alt='Image' src='https://www.gravatar.com/avatar/{{ md5(strtolower(trim($child->email))) }}?s=40' class='avatar avatar-40 photo' height='40' width='40'>
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
                                    <div class="col-12">
                                        <div class="card border-0">
                                            <div class="card-body bg-light p-5">
                                                <h2 class="mb-0 fw-bold font-body">Voice your perspective!</h2>
                                                <p class="text-muted">Share your viewpoint concisely, conveying wisdom in minimal words.</p>

                                                <div class="form-widget">

                                                    <div class="form-result"></div>

                                                    <form class="mb-0" id="template-contactform" name="template-contactform" action="include/form.php" method="post">

                                                        <div class="form-process">
                                                            <div class="css3-spinner">
                                                                <div class="css3-spinner-scaler"></div>
                                                            </div>
                                                        </div>

                                                        <div class="row align-items-center">
                                                            <div class="col-md-4 form-group">
                                                                <label for="template-contactform-name">Full Name <small>*</small></label>
                                                                <input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="form-control required">
                                                            </div>

                                                            <div class="col-md-4 form-group">
                                                                <label for="template-contactform-email">Email <small>*</small></label>
                                                                <input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email form-control">
                                                            </div>

                                                            <div class="col-md-4 form-group">
                                                                <label for="template-contactform-phone">Phone</label>
                                                                <input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="form-control">
                                                            </div>

                                                            <div class="w-100"></div>

                                                            <div class="col-12 form-group">
                                                                <label for="template-contactform-message">Message <small>*</small></label>
                                                                <textarea class="required form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
                                                            </div>

                                                            <div class="col-12 form-group d-none">
                                                                <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="form-control">
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <button class="btn btn-shadow ms-4 bottom-left" style="--border-color: transparent; --bg-color: #001055;" type="submit" value="submit">Send Message</button>
                                                            </div>
                                                            <div class="col-sm-6 d-flex justify-content-sm-end mt-3 mt-sm-0">
                                                                <a href="https://www.facebook.com/tmumbd/" class="social-icon border-transparent border-default si-small h-bg-facebook">
                                                                    <i class="fa-brands fa-facebook"></i>
                                                                    <i class="fa-brands fa-facebook"></i>
                                                                </a>

                                                                <a href="https://www.instagram.com/tmu_mbd/" class="social-icon border-transparent border-default si-small h-bg-instagram">
                                                                    <i class="fa-brands fa-instagram"></i>
                                                                    <i class="fa-brands fa-instagram"></i>
                                                                </a>

                                                                <a href="https://x.com/Tmumbd" class="social-icon border-transparent border-default si-small h-bg-twitter">
                                                                    <i class="fa-brands fa-twitter"></i>
                                                                    <i class="fa-brands fa-twitter"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div><!-- .entry end -->
                    </div>
                </main>
                <aside class="sidebar col-lg-3">
                    <div class="sidebar-widgets-wrap">

                        <div class="widget">
                            <ul class="nav canvas-tabs tabs size-sm mb-3" id="canvas-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link bi-hand-thumbs-up active" id="canvas-tab-1" data-bs-toggle="pill" data-bs-target="#tab-1" type="button" role="tab" aria-controls="canvas-tab-1" aria-selected="true"> Popular</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link bi-arrow-clockwise" id="canvas-tab-2" data-bs-toggle="pill" data-bs-target="#tab-2" type="button" role="tab" aria-controls="canvas-tab-2" aria-selected="false">Recent</button>
                                </li>
                            </ul>

                            <div id="canvas-TabContent" class="tab-content">
                                <div class="tab-pane show active" id="tab-1" role="tabpanel" aria-labelledby="canvas-tab-1" tabindex="0">
                                    <div class="posts-sm row col-mb-30" id="popular-post-list-sidebar">
                                        @foreach($popularPosts as $post)
                                        <div class="entry col-12">
                                            <div class="grid-inner row g-0">
                                                <div class="col-auto">
                                                    <div class="entry-image">
                                                        <a href="{{url('blog/'.$post->n_slug)}}"><img class="rounded-circle" src="{{asset($post->post_thumb_path)}}" alt="Image"></a>
                                                    </div>
                                                </div>
                                                <div class="col ps-3">
                                                    <div class="entry-title">
                                                        <h4><a href="{{url('blog/'.$post->n_slug)}}">{{ $post->post_title }}</a></h4>
                                                    </div>
                                                    <div class="entry-meta">
                                                        <span style="color:#adb5bd!important; " class="fs-14">
                                                            {{ $post->posted_at->format('jS F Y') }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-2" role="tabpanel" aria-labelledby="canvas-tab-2" tabindex="0">
                                    <div class="posts-sm row col-mb-30" id="recent-post-list-sidebar">
                                        @foreach($recentPosts as $post)
                                        <div class="entry col-12">
                                            <div class="grid-inner row g-0">
                                                <div class="col-auto">
                                                    <div class="entry-image">
                                                        <a href="{{url('blog/'.$post->n_slug)}}"><img class="rounded-circle" src="{{asset($post->post_thumb_path)}}" alt="Image"></a>
                                                    </div>
                                                </div>

                                                <div class="col ps-3">
                                                    <div class="entry-title">
                                                        <h4><a href="{{url('blog/'.$post->n_slug)}}">{{ $post->post_title }}</a></h4>
                                                    </div>
                                                    <div class="entry-meta">
                                                        <span style="color:#adb5bd!important; " class="fs-14">
                                                            {{ $post->posted_at->format('jS F Y') }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget">
                            <h4>Categories</h4>
                            <div class="tagcloud">
                                @foreach ($blog_categories as $blog_category)
                                <a href="#" class="category-link" data-category="{{ $blog_category->category_name }}">{{ $blog_category->category_name }}</a>
                                @endforeach
                            </div>
                        </div>

                        <!-- Hidden Form for Category Filtering -->
                        <form id="categoryForm" method="POST" action="{{ route('all_blogs.post') }}" style="display: none;">
                            @csrf
                            <input type="hidden" name="blogs_category" id="categoryInput">
                        </form>


                    </div>
                </aside><!-- .sidebar end -->
            </div>
        </div>
    </div>
</section><!-- #content end -->

<!-- #wrapper end -->

<!-- Go To Top -->

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

@endsection