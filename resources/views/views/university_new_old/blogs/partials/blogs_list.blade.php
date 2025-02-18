<div class="row g-4 mb-5" id="news_results">
    @foreach ($blog_post as $item)
        @php
            $string = nl2br(html_entity_decode($item->post_description));
            $length = 374;
            $final_string = strlen($string) <= $length ? $string : substr($string, 0, strrpos(substr($string, 0, $length), ' ')) . '...';
        @endphp

        <article class="entry event col-12 mb-4">
            <div class="grid-inner bg-white row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
                <div class="col-md-4 mb-md-0">
                    <a href="#" class="entry-image mb-0 h-100">
                        <img src="{{ asset($item->monaco_image_path) }}" alt="Inventore voluptates velit totam ipsa tenetur" class="rounded-2 w-100 object-cover">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content justify-content-start align-items-start">
                                <div class="badge px-3 py-2 fs-12 rounded-pill">{{ $item->category }}</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-8 p-4">
                    <div class="entry-title nott">
                        <h3 class="fs-24"><a href="{{ url('blog/' . $item->n_slug) }}">{{ $item->post_title }}</a></h3>
                    </div>
                    <div class="entry-meta mt-3">
                        <ul>
                            <li><i class="uil uil-schedule"></i> {{ $item->posted_at }}</li>
                            <li><i class="uil uil-user"></i> admin</li>
                            <li><i class="uil uil-folder-open"></i> <a href="#">{{ $item->category }}</a></li>
                        </ul>
                    </div>
                    <div class="entry-content my-3">
                        <p class="mb-0 text-justify">{{ $final_string }}</p>
                    </div>
                    <a href="{{ url('blog/' . $item->n_slug) }}" class="tmu-btn btn-1 m-0 py-1 px-2">Read More</a>
                </div>
            </div>
        </article>
    @endforeach
</div>

<!-- Pager -->
{{ $blog_post->links('vendor.pagination.blogs') }}
