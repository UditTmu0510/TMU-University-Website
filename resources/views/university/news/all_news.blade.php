@extends('layouts.university.main')
@section('content')

<!-- Content ============================================= -->
<section id="content">
    <div class="content-wrap pb-0">
        <div class="container-fluid my-0 px-1 px-md-5">
            <div class="col-md-12 col-lg-12 mt-3 mt-sm-0">
                <h1 class="text-uppercase tmu-text-primary tmu-page-heading text-center mb-1 mb-md-3">
                    <span>TMU</span> <span>News</span>
                </h1>

                <!-- Filter Form Section -->
                <section>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">

                                        @php
                                            $selectedCategory = request()->has('news_category') && request('news_category') !== ''
                                                ? request('news_category')
                                                : (session()->has('news_category') ? session('news_category') : '');

                                            $selectedCollege = request()->has('college_name') && request('college_name') !== ''
                                                ? request('college_name')
                                                : (session()->has('college_name') ? session('college_name') : '');

                                            $fromDate = request()->has('from_date') && request('from_date') !== ''
                                                ? request('from_date')
                                                : (session()->has('from_date') ? session('from_date') : '');

                                            $toDate = request()->has('to_date') && request('to_date') !== ''
                                                ? request('to_date')
                                                : (session()->has('to_date') ? session('to_date') : '');
                                        @endphp

                                        <form id="filterForm" method="POST" action="{{ route('all_news.post') }}">
                                            @csrf
                                            <input type="hidden" name="filters_submitted" value="1">

                                            <div class="row">
                                                <!-- Category -->
                                                <div class="col-md-3 mb-3">
                                                    <label for="news_category" class="form-label fw-bold fs-16">News Category</label>
                                                    <select class="form-select" name="news_category" id="news_category">
                                                        <option value="">Select Category</option>
                                                        @foreach ($news_categories as $news_category)
                                                            <option value="{{ $news_category->id }}"
                                                                {{ $selectedCategory == $news_category->id || $selectedCategory == $news_category->category_name ? 'selected' : '' }}>
                                                                {{ $news_category->category_name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <!-- College -->
                                                <div class="col-md-3 mb-3">
                                                    <label for="college_name" class="form-label fw-bold fs-16">University / College / Department</label>
                                                    <select class="form-select" name="college_name" id="college_name">
                                                        <option value="">Select College</option>
                                                        @foreach ($colleges as $college)
                                                            <option value="{{ $college->cd_id }}"
                                                                {{ $selectedCollege == $college->cd_id ? 'selected' : '' }}>
                                                                {{ $college->cd_name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <!-- From Date -->
                                                <div class="col-md-3 mb-3">
                                                    <label for="from_date" class="form-label fw-bold fs-16">From</label>
                                                    <input type="date" name="from_date" id="from_date" class="form-control" value="{{ $fromDate }}">
                                                </div>

                                                <!-- To Date -->
                                                <div class="col-md-3 mb-3">
                                                    <label for="to_date" class="form-label fw-bold fs-16">To</label>
                                                    <input type="date" name="to_date" id="to_date" class="form-control" value="{{ $toDate }}">
                                                </div>
                                            </div>

                                            <div class="row mt-2">
                                                <div class="col-md-12">
                                                    <button type="submit" class="tmu-btn btn-2 m-0 py-1 px-2 fs-12">Apply Filters</button>
                                                    <button type="button" class="tmu-btn btn-2 m-0 py-1 px-2 fs-12" onclick="clearFilters();">Clear Filters</button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- News Content Section -->
                <section style="background: #f5f5f5;">
                    <div class="container">
                        <div class="content-wrap" id="newsContent">
                            @include('university.news.partials.news_list')
                        </div>
                    </div>
                </section>

                <!-- JS for AJAX Filters and Pagination -->
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script>
                    $(document).ready(function () {
                        // Handle form submission with AJAX
                        $('#filterForm').on('submit', function (e) {
                            e.preventDefault();
                            var formData = $(this).serialize();
                            $('#loading').show();
                            $.post("{{ route('all_news.post') }}", formData, function (response) {
                                $('#newsContent').html(response);
                                $('html, body').animate({ scrollTop: $('#newsContent').offset().top }, 'smooth');
                            }).always(() => $('#loading').hide());
                        });

                        // Clear filters - reload page with cleared session
                        window.clearFilters = function () {
                            window.location.href = "{{ route('all_news') }}?clear_filters=1";
                        };

                        // Handle pagination with AJAX
                        $(document).on('click', '.pagination a', function (e) {
                            e.preventDefault();
                            var url = $(this).attr('href');
                            $('#loading').show();
                            $.get(url, function (response) {
                                $('#newsContent').html(response);
                                $('html, body').animate({ scrollTop: $('#newsContent').offset().top }, 'smooth');
                            }).always(() => $('#loading').hide());
                        });
                    });
                </script>

            </div>
        </div>
    </div>
</section>

@endsection
