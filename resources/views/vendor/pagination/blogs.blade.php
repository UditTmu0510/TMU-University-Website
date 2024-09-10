@if ($paginator->hasPages())
<ul class="pagination pagination-circle justify-content-center">
    @php
        $queryParams = session()->only(['blogs_category', 'from_date', 'to_date']);
    @endphp

    @if ($paginator->onFirstPage())
        <li class="page-item disabled">
            <a class="page-link" href="#" aria-label="@lang('pagination.previous')">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
    @else
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->previousPageUrl() . '&' . http_build_query($queryParams) }}" aria-label="@lang('pagination.previous')">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
    @endif

    {{-- Pagination Elements --}}
    @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
            <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li class="page-item active"><a class="page-link" href="#">{{ $page }}</a></li>
                @else
                    <li class="page-item"><a class="page-link" href="{{ $url . '&' . http_build_query($queryParams) }}">{{ $page }}</a></li>
                @endif
            @endforeach
        @endif
    @endforeach

    @if ($paginator->hasMorePages())
        <li>
            <a href="{{ $paginator->nextPageUrl() . '&' . http_build_query($queryParams) }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->nextPageUrl() . '&' . http_build_query($queryParams) }}" aria-label="@lang('pagination.next')">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    @else
        <li class="page-item disabled">
            <a class="page-link" href="#" aria-label="@lang('pagination.next')">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    @endif
</ul>
@endif
