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
            height: 4em;
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



<div class="row g-4 mb-5" id="news_results">
    @foreach ($news_post as $item)
    @php
    // Decode HTML entities
    $decodedString = html_entity_decode($item->event_full_description);

    // Strip HTML tags and convert new lines to spaces
    $plainText = strip_tags($decodedString);
    $plainText = str_replace('&nbsp;', ' ', $plainText); // Replace &nbsp; with a regular space

    // Define the length for truncation
    $length = 280;

    // Truncate the string while preserving whole words
    if (strlen($plainText) > $length) {
    $truncatedString = substr($plainText, 0, $length);
    $truncatedString = substr($truncatedString, 0, strrpos($truncatedString, ' ')) . '...';
    } else {
    $truncatedString = $plainText;
    }
    @endphp

    <article class="entry event col-12 col-md-6 col-lg-12 mb-4">
        <div class="grid-inner bg-white row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
            <div class="col-12 col-lg-4 col-xl-3 mb-md-0">
                <a href="{{ url('news/' . $item->n_slug) }}" class="entry-image mb-0 w-100 h-100">
                    <img src="{{ file_exists(public_path($item->ti_path)) ? asset($item->ti_path) : asset('uploads/events/past_event/default_thumbnail_news.jpg') }}"
                        alt="News Image"
                        class="rounded-2 object-cover align-items-center">

                    <div class="bg-overlay">
                        <div class="bg-overlay-content justify-content-start align-items-start w-100">
                            <div class="badge px-3 py-2 fs-12 rounded-pill">{{ $item->category }}</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-lg-8 col-xl-9 ps-4 pt-1">
                <div class="entry-title nott">
                    <h3><a href="{{ url('news/' . $item->n_slug) }}">{!! html_entity_decode($item->event_title) !!}
                    </a></h3>
                </div>
                <div class="entry-meta mt-3">
                    <ul>
                        <li><i class="uil uil-schedule"></i> {{ \Carbon\Carbon::parse($item->event_date)->format('d-m-Y') }}</li>
                        <li><a href="#"><i class="uil uil-user"></i> admin</a></li>
                        <li><i class="uil uil-folder-open"></i> <a href="#">{{ $item->category }}</a></li>
                    </ul>
                </div>
                <div class="entry-content my-3">
                    <p class="mb-0 text-justify">{{ $truncatedString }}</p>
                </div>
                <a href="{{ url('news/' . $item->n_slug) }}" class="tmu-btn btn-1 m-0 py-1 px-2">Read More</a>
            </div>
        </div>
    </article>
    @endforeach
</div>

<!-- Pagination -->
{{ $news_post->links('vendor.pagination.custom') }}