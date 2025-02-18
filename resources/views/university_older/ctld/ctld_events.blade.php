@extends('layouts.university.departments.ctld_with_sidebar')
@section('content')


<style>
    .entry-title h3 {
        font-size: 24px !important;
        padding: 0;

    }

    .entry.event {
        margin-bottom: 1.5rem;
        /* Add margin between entries */
    }

    @media (min-width: 992px) {

        /* Bootstrap lg breakpoint */
        .entry.event {
            display: flex;
            /* Use flexbox for side-by-side layout */
        }

        .entry-image {
            flex: 0 0 30%;
            /* Adjust width for image section */
        }

        .entry-image img {
            width: 100%;
            /* Ensure the image takes full width of the container */
            height: auto;
            /* Maintain aspect ratio */
        }

        .entry-content {
            flex: 1;
            /* Allow the content to take the remaining space */
            padding-left: 20px;
            /* Optional: spacing between image and content */
        }
    }

    .entry-image {
        display: block;
        /* Ensure anchor takes up the full width */
        height: 100%;
        /* Ensure anchor takes up the full height */
    }

    .entry-image img {
        width: 100%;
        /* Image should fill the anchor */
        height: auto;
        /* Maintain aspect ratio */
    }

    .bg-overlay {
        position: absolute;
        /* Positioning for overlay */
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        display: flex;
        /* Use flexbox for centering content */
        align-items: center;
        justify-content: center;
    }

    .bg-overlay-content {
        position: relative;
        /* Ensure it stays within overlay */
        z-index: 1;
        /* Position above overlay */
    }

    @media (min-width: 768px) and (max-width: 992px) {

        /* Only apply this style for screens between 768px and 992px */
        .entry-title h3 {
            overflow: hidden;
            /* Hide overflow content */
            display: -webkit-box;
            /* Use flexbox */
            -webkit-box-orient: vertical;
            /* Vertical orientation for box */
            -webkit-line-clamp: 3;
            /* Limit to 3 lines */
            line-clamp: 3;
            /* Limit to 3 lines (for non-webkit browsers) */
            height: 4.2em;
            /* Adjust according to your font-size */
        }

        .entry-content p {
            overflow: hidden;
            /* Hide overflow content */
            display: -webkit-box;
            /* Use flexbox */
            -webkit-box-orient: vertical;
            /* Vertical orientation for box */
            -webkit-line-clamp: 6;
            /* Limit to 3 lines */
            line-clamp: 3;
            /* Limit to 3 lines (for non-webkit browsers) */
            height: 8em;
            /* Adjust according to your font-size */
        }
    }
</style>



<!-- Content
    ============================================= -->

<div class="main-content">
    <div class="container">
        <section class="events_ctld">
            <h1 class="tmu-text-primary tmu-page-heading mb-3 mt-md-4"><span>CTLD Events: </span><span>Professional Development at TMU</span></h1>
            <section id="content bg-dark" style="background: #f5f5f5;">
                <div class="container">
                    <div class="content-wrap">
                        <div class="row g-4 mb-5" id="news_results">
                            @foreach ($events as $item)
                            @php
                            // Remove HTML elements and decode special characters
                            $string = strip_tags(html_entity_decode($item->event_full_description));

                            $length = 200;
                            $final_string;

                            // Apply string limit
                            if (strlen($string) <= $length) {
                                $final_string=$string;
                                } else {
                                $truncated=substr($string, 0, $length);
                                $last_space=strrpos($truncated, ' ' );

                                if ($last_space !==false) {
                                $final_string=substr($truncated, 0, $last_space);
                                }
                                }

                                // Append ellipsis
                                $final_string=$final_string . '...' ;
                                @endphp
                        

                                <article class="entry event col-12 col-md-6 col-xl-12 mb-4">
                                <div class="grid-inner bg-white row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
                                    <div class="col-12  col-xl-4 mb-md-0">
                                        <a href="{{url('news/'.$item->n_slug)}}" class="entry-image mb-0 w-100 h-100">
                                            <img src="{{asset($item->ti_path)}}" alt="Inventore voluptates velit totam ipsa tenetur" class="object-cover align-items-center">

                                        </a>
                                    </div>
                                    <div class="col-12  col-xl-8 ps-4 pt-1">
                                        <div class="entry-title nott">
                                            <h3><a href="{{url('news/'.$item->n_slug)}}">{{$item->event_title}}</a></h3>
                                        </div>
                                        <div class="entry-meta mt-3">
                                            <ul>
                                                <li style="margin: 0 0 8px 0;"><i class="uil uil-schedule"></i> {{$item->event_date}}</li>
                                                <!-- <li style="margin: 0 0 8px 0;"><a href="#"><i class="uil uil-user"></i> admin</a></li> -->
                                                <li style="margin: 0 0 8px 0;"><i class="uil uil-folder-open"></i> <a href="#">{{$item->category}}</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="entry-content my-3">
                                            <p class="mb-0 text-justify">@php echo $final_string @endphp</p>
                                        </div>

                                        <a href="{{url('news/'.$item->n_slug)}}" class="tmu-btn btn-1 m-0 py-1 px-2">Read More</a>
                                    </div>
                                </div>
                                </article>

                                @endforeach



                        </div>

                        <!-- Pager
                            ============================================= -->

                        {{$events->links('vendor.pagination.custom')}}



                        <!-- .pager end -->
                    </div>
                </div>
            </section>
        </section>
    </div>
</div>
</div>

@endsection