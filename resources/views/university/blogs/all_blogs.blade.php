@extends('layouts.main')
@section('content')

<!-- Content ============================================= -->
<section id="content">
    <div class="content-wrap pb-0">
        <div class="container-fluid my-0 px-1 px-md-5">
            <div class="col-md-12 col-lg-12 mt-3 mt-sm-0">

                <h1 class="text-uppercase tmu-text-primary tmu-page-heading text-center mb-1 mb-md-3"><span>TMU </span><span> Blogs</span></h1>

                <!-- Filter Form Section ============================================= -->
                <section id="content">
                    <div class="content-wrap">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <form id="filterForm" method="POST" action="{{ route('all_blogs.post') }}">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-4 mb-3">
                                                        <label for="blogs_category" class="form-label fw-bold fs-16">Blogs Category</label>
                                                        <select class="form-select" name="blogs_category" id="blogs_category">
                                                            <option value="" {{ request('blogs_category') == '' ? 'selected' : '' }}>Select Category</option>
                                                            @foreach ($blog_categories as $blog_category)
                                                            <option value="{{ $blog_category->category_name }}" {{ request('blogs_category') == $blog_category->category_name ? 'selected' : '' }}>
                                                                {{ $blog_category->category_name }}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="col-md-4 mb-3">
                                                        <label for="from_date" class="form-label fw-bold fs-16">From</label>
                                                        <input type="date" name="from_date" id="from_date" class="form-control" value="{{ request('from_date') }}">
                                                    </div>

                                                    <div class="col-md-4 mb-3">
                                                        <label for="to_date" class="form-label fw-bold fs-16">To</label>
                                                        <input type="date" name="to_date" id="to_date" class="form-control" value="{{ request('to_date') }}">
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
                    </div>
                </section>

                <!-- Blog Content Section ============================================= -->
                <section id="content" style="background: #f5f5f5;">
                    <div class="container">
                        <div class="content-wrap" id="blogContent">
                            @include('university.blogs.partials.blogs_list')
                        </div>
                    </div>
                </section>

                <!-- JS for AJAX Filters and Pagination -->
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script>
                    $(document).ready(function() {
                        // Handle form submission with AJAX
                        $('#filterForm').on('submit', function(e) {
                            e.preventDefault(); // Prevent the default form submission

                            var form = $(this);
                            var formData = form.serialize(); // Serialize form data

                            $.ajax({
                                url: form.attr('action'),
                                method: "POST",
                                data: formData,
                                success: function(response) {
                                    $('#blogContent').html(response); // Update the blog content section with the returned HTML
                                    $('html, body').animate({
                                        scrollTop: $('#blogContent').offset().top
                                    }, 'smooth'); // Smooth scroll to the blog content section
                                },
                                error: function(xhr) {
                                    console.log(xhr.responseText); // Log any error for debugging
                                }
                            });
                        });

                        // Handle "Clear Filters" button click
                        window.clearFilters = function() {
                            // Reset the form fields to their default values
                            $('#filterForm')[0].reset();

                            $.ajax({
                                url: "{{ route('all_blogs.post') }}",
                                method: "POST",
                                data: {
                                    clear_filters: 1,
                                    _token: '{{ csrf_token() }}'
                                },
                                success: function(response) {
                                    $('#blogContent').html(response); // Update the blog content section with the returned HTML
                                    $('#blogs_category').val('');
                                    $('#from_date').val('');
                                    $('#to_date').val('');
                                },
                                error: function(xhr) {
                                    console.log(xhr.responseText); // Log any error for debugging
                                }
                            });
                        };

                        // Handle pagination with AJAX
                        $(document).on('click', '.pagination a', function(e) {
                            e.preventDefault(); // Prevent the default link behavior
                            var url = $(this).attr('href'); // Get the URL from the pagination link

                            $.ajax({
                                url: url,
                                success: function(response) {
                                    $('#blogContent').html(response); // Update the blog content section with the new page
                                    $('html, body').animate({
                                        scrollTop: $('#blogContent').offset().top
                                    }, 'smooth'); // Smooth scroll to the blog content section
                                },
                                error: function(xhr) {
                                    console.log(xhr.responseText); // Log any error for debugging
                                }
                            });
                        });
                    });
                </script>

            </div>
        </div>
    </div>
</section>
@endsection
