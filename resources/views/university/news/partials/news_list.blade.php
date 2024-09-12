<div class="row g-4 mb-5" id="news_results">
    @foreach ($news_post as $item)
    @php
        // Decode HTML entities
        $decodedString = html_entity_decode($item->event_full_description);

        // Strip HTML tags and convert new lines to spaces
        $plainText = strip_tags($decodedString);
        $plainText = str_replace('&nbsp;', ' ', $plainText); // Replace &nbsp; with a regular space

        // Define the length for truncation
        $length = 250;

        // Truncate the string while preserving whole words
        if (strlen($plainText) > $length) {
            $truncatedString = substr($plainText, 0, $length);
            $truncatedString = substr($truncatedString, 0, strrpos($truncatedString, ' ')) . '...';
        } else {
            $truncatedString = $plainText;
        }
    @endphp

    <article class="entry event col-12 mb-4">
        <div class="grid-inner bg-white row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
            <div class="col-md-4 mb-md-0">
                <a href="#" class="entry-image mb-0 h-100">
                    <img src="{{ asset($item->ti_path) }}" alt="News Image" class="rounded-2 h-100 object-cover">
                    <div class="bg-overlay">
                        <div class="bg-overlay-content justify-content-start align-items-start">
                            <div class="badge px-3 py-2 fs-12 rounded-pill">{{ $item->category }}</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-8 p-4">

                <div class="entry-title nott">
                    <h3><a href="{{ url('news/' . $item->n_slug) }}">{{ $item->event_title }}</a></h3>
                </div>
                <div class="entry-meta mt-3">
                    <ul>
                        <li><i class="uil uil-schedule"></i> {{ $item->event_date }}</li>
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