@extends('layouts.main')
@section('content')

<!-- Content
		============================================= -->
<section id="content">
    <div class="content-wrap pb-0">
        <div class="container-fluid my-0  px-1 px-md-5">
            <div class="col-md-12 col-lg-12 mt-3 mt-sm-0">

                <h1 class="text-uppercase tmu-text-primary tmu-page-heading text-center mb-1 mb-md-3"><span>TMU </span><span> Blogs</span></h1>
                <!-- <hr> -->
                <!-- Write content for right side here  -->

                <!-- Content
                        ============================================= -->



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
                                                            <!-- Default option -->
                                                            <option value="" {{ request('blogs_category') == '' ? 'selected' : '' }}>Select Category</option>

                                                            <!-- Dynamically generated options -->
                                                            @foreach ($blog_categories as $blog_category)
                                                            <option value="{{ $blog_category->category_name }}" {{ request('blogs_category') == $blog_category->category_name ? 'selected' : '' }}>
                                                                {{ $blog_category->category_name }}
                                                            </option>
                                                            @endforeach
                                                        </select>

                                                    </div>



                                                    <div class="col-md-4 mb-3">
                                                        <label for="from_date" class="form-label" style="font-weight:bold; font-size:16px;">From</label>
                                                        <div class="input-group">
                                                            <input type="date" id="from_date" name="from_date" class="form-control" value="{{ request('from_date') }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 mb-3">
                                                        <label for="to_date" class="form-label" style="font-weight:bold; font-size:16px;">To</label>
                                                        <div class="input-group">
                                                            <input type="date" id="to_date" name="to_date" class="form-control" value="{{ request('to_date') }}">
                                                        </div>
                                                    </div>
                                                    <div style="clear: both; margin-top: 10px;"></div> <!-- This will clear floats and add space -->

                                                    <div class="col-md-4 mb-3">
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
            </div>
</section>



<!-- #content end -->

<!-- Content 2nd starts
                ============================================= -->
<section id="content bg-dark" style="background: #f5f5f5;">
    <div class="container">
        <div class="content-wrap" id="blogContent">
            @include('university.blogs.partials.blogs_list')
        </div>
    </div>
</section><!-- #content2nd  end -->



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script>
    function applyFilters() {
        var form = $('#filterForm');
        var data = form.serialize(); // Serialize form data

        $.ajax({
            url: "{{ route('all_blogs.post') }}",
            method: "POST",
            data: data,
            success: function(response) {
                $('#blogContent').html(response); // Update the blog list section with the response
            },
            error: function(xhr) {
                console.log(xhr.responseText); // Display error in console
            }
        });
    }

    function clearFilters() {
        var form = $('#filterForm');
        form[0].reset(); // Reset the form fields
        $.ajax({
            url: "{{ route('all_blogs.post') }}",
            method: "POST",
            data: {
                clear_filters: 1,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                $('#blogContent').html(response); // Update the blog list section with the response
            },
            error: function(xhr) {
                console.log(xhr.responseText); // Display error in console
            }
        });
    }

    // Handling pagination clicks
    $(document).on('click', '.pagination a', function(e) {
        e.preventDefault();
        var url = $(this).attr('href');

        $.ajax({
            url: url,
            success: function(response) {
                $('#blogContent').html(response); // Update the blog list section with the response
                $('html, body').animate({
                scrollTop: $('#blogContent').offset().top
            }, 'smooth');
            }
        });
    });
</script>


@endsection