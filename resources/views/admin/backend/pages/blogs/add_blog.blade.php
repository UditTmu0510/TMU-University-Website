@extends('layouts.adminlayout_new')
@section('content')
<div class="pagetitle">
  <h1>Add Blog</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Blogs</a></li>
      {{-- <li class="breadcrumb-item">Permission</li> --}}
      <li class="breadcrumb-item active">Add Blog</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
  <div class="row">
    <div class="col-lg-12">
      @if(session('success'))
      <div class="alert alert-success">
        {{session('success')}}
      </div>
      @endif

      @if(session('error'))
      <div class="alert alert-danger">
        {{session('error')}}
      </div>
      @endif

      <div class="card">
        <div class="card-body">
          {{-- <h5 class="card-title">Group Name</h5> --}}

          <!-- Multi Columns Form -->
          <form method="POST" action="{{route('store.blog')}}" enctype="multipart/form-data">
            @csrf
            <div class="row" style="margin-top:30px;">

              <div class="col-md-4">
                <label for="post_title" class="form-label">Blog Title</label>
                <input type="text" name="post_title" id="post_title" class="form-control" required />
              </div>
              

              <div class="col-md-4">
                <label for="post_description" class="form-label">Blog Description</label>
                <input type="text" name="post_description" id="post_description" class="form-control" required />
              </div>


              <div class="col-md-3">
                <label for="n_slug" class="form-label">Blog Slug</label>
                <input type="text" name="n_slug" id="n_slug" class="form-control" required />
                <div id="result" style="color:black;"></div>
              </div>


            </div>



            <div class="row mt-3">
              <div class="col-md-12">
                <label for="area" class="form-label">Post Blog</label>
                <textarea rows="4" cols="50" name="area" id="area"></textarea><span class="highlight"></span> <span class="bar"></span>
              </div>
            </div>


            <div class="row mt-3">
              <div class="col-md-3">
                <label for="post_path" class="col-form-label">Title Image</label>
                <div class="col-sm-10">
                  <input type="file" class="form-control dropify" name="post_path" id="post_path" required />
                </div>
              </div>

              <div class="col-md-3">
                <label for="alt_tag_main_image" class="col-form-label">Title Image Tag</label>
                <input type="text" name="alt_tag_main_image" class="form-control" id="alt_tag_main_image" required />
              </div>

              <div class="col-md-3">
                <label for="post_thumb_path" class="col-form-label">Thumbnail Image</label>
                <div class="col-sm-10">
                  <input type="file" class="form-control dropify" name="post_thumb_path" id="post_thumb_path" required />
                </div>
              </div>


              <div class="col-md-3">
                <label for="thumbnail_alt_tag" class="col-form-label">Thumbnail Image Tag</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="thumbnail_alt_tag" id="thumbnail_alt_tag" required />
                </div>
              </div>



            </div>



            <div class="row mt-3">
              <div class="col-md-3">
                <label for="monaco_path" class="col-form-label">Monaco Image</label>
                <div class="col-sm-10">
                  <input type="file" class="form-control dropify" name="monaco_image_path" id="monaco_path" required />
                </div>
              </div>

              <div class="col-md-3">
                <label for="alt_tag_monaco_image" class="col-form-label">Monaco Image Tag</label>
                <input type="text" name="monaco_image_alt_tag" class="form-control" id="alt_tag_monaco_image" required />
              </div>




            </div>





            <div class="row mt-3">


              <div class="col-md-4">
                <label for="posted_at" class="col-form-label">Post Date</label>
                <input type="date" name="posted_at" id="posted_at" class="form-control" required />

              </div>

              <div class="col-md-4">
                <label for="category" class="form-label">Blog Category</label>
                <select class="form-select" name="category_id" id="category_id" aria-label="Default select example" required>
                  <option value="">Select Category</option>
                  @foreach ($blogs_cat as $blog_cat)
                  <option value="{{$blog_cat->category_id}}">{{$blog_cat->category_name}}</option>
                  @endforeach
                </select>
              </div>


              <div class="col-md-4">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" name="status" id="status" aria-label="Default select example" required>
                  <option> Select Status </option>
                  <option value="1">Active</option>
                  <option value="0">Deactive</option>
                </select>
              </div>

            </div>












            <div class="text-center"><br />
              <input type="submit" class="btn btn-primary" value="Save" id="myButton" />

            </div>
          </form><!-- End Multi Columns Form -->

        </div>
      </div>
    </div>
  </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script type="text/javascript">
  $(document).ready(function() {
    $('#n_slug').on('keyup', function() {
      var value = $(this).val();

      // Make an Ajax request to the CheckValue controller
      $.ajax({
        type: 'POST',
        url: '{{ route("search_blog_slug") }}',
        data: {
          _token: '{{ csrf_token() }}', // CSRF token included in the request
          value: value
        },
        dataType: 'json',
        success: function(data) {
          if (data.exists) {
            $('#result').text('URL Already Exists.');
            var myButton = $("#myButton");
            myButton.hide();
          } else {
            $('#result').text('New URL');
            var myButton = $("#myButton");
            myButton.show();
          }
        },
        error: function(xhr, status, error) {
          console.log('An error occurred: ' + error); // Error handling
        }
      });
    });
  });
</script>

@endsection