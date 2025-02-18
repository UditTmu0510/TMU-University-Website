@extends('layouts.adminlayout_new')
@section('content')
<style>
.color-table.success-table thead th {
    background-color: #00c292;
    color: #fff;
}
</style>
<div class="pagetitle">
    <h1>Add Meta</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Metas</a></li>
        {{-- <li class="breadcrumb-item">Permission</li> --}}
        <li class="breadcrumb-item active">Add Meta</li>
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
      <form  method="POST" action="{{route('add.meta')}}" enctype="multipart/form-data" >
        @csrf
        <div class="row" style="margin-top:30px;">
            <div class="col-md-3">
                <label for="page_url" class="form-label" style="font-size:13px;">Page URL</label>
                    <input type="text" name="page_url" id="page_url" class="form-control" required />
                    <div id="result" style="color:black;"></div>
              </div>

        <div class="col-md-3">
            <label for="page_name" class="form-label" style="font-size:13px;">Page Name</label>
            <input type="text" name="page_name" id="page_name" class="form-control" required />
        </div>

        <div class="col-md-3">
            <label for="meta_title" class="form-label" style="font-size:13px;">Meta Title</label>
            <input type="text" name="meta_title" id="meta_title" class="form-control" required />
          </div>

     

         
      <div class="col-md-3">
        <label for="meta_description" class="col-form-label">Meta Description</label>
        <input type="text" name="meta_description" id="meta_description" class="form-control" required />
      </div>

{{-- 
          <div class="col-md-2">
            <label for="prog_duration_with_intersnhip" class="form-label" style="font-size:13px;">Duration + Internship</label>
            <input type="text" name="prog_duration_with_intersnhip" id="prog_duration_with_intersnhip" class="form-control" required />
          </div> --}}


    </div>

              

        <div class="row mt-3">
            <div class="col-md-3">
                <label for="meta_keywords" class="col-form-label">Meta Keywords</label>
                <input type="text" name="meta_keywords" id="meta_keywords" class="form-control" required />
              </div>

              <div class="col-md-3">
                <label for="og_title" class="col-form-label">OG Title</label>
                <input type="text" name="og_title" id="og_title" class="form-control" />
              </div>

              <div class="col-md-3">
                <label for="og_site_name" class="col-form-label">OG SiteName</label>
                <input type="text" name="og_site_name" id="og_site_name" class="form-control" />
              </div>

              <div class="col-md-3">
                <label for="og_url" class="col-form-label">OG URL</label>
                <input type="text" name="og_url" id="og_url" class="form-control"/>
              </div>




</div> 


<div class="row mt-3">

    
    <div class="col-md-3">
        <label for="og_description" class="col-form-label">OG Description</label>
        <input type="text" name="og_description" id="og_description" class="form-control"  />
      </div>

    <div class="col-md-3">
        <label for="og_type" class="col-form-label">OG Type</label>
        <input type="text" name="og_type" id="og_type" class="form-control" />
      </div>

      <div class="col-md-3">
        <label for="og_image" class="col-form-label">OG Image</label>
        <input type="text" name="og_image" id="og_image" class="form-control" />
      </div>


      <div class="col-md-3">
        <label for="canonical_tag" class="col-form-label">Canonical Tag</label>
        <input type="text" name="canonical_tag" id="canonical_tag" class="form-control" />
      </div>


</div> 


<div class="row mt-3">

    
    <div class="col-md-3">
        <label for="image_alt_tag" class="col-form-label">Image Alt tag</label>
        <input type="text" name="image_alt_tag" id="image_alt_tag" class="form-control"/>
      </div>

    <div class="col-md-3">
        <label for="sitemap_url" class="col-form-label">Sitemap URL</label>
        <input type="text" name="sitemap_url" id="sitemap_url" class="form-control" />
      </div>

      <div class="col-md-3">
        <label for="disp_attribute_1" class="col-form-label">Display Attribute 1</label>
        <input type="text" name="disp_attribute_1" id="disp_attribute_1" class="form-control"/>
      </div>


      <div class="col-md-3">
        <label for="disp_attribute_2" class="col-form-label">Display Attribute 2</label>
        <input type="text" name="disp_attribute_2" id="disp_attribute_2" class="form-control"/>
      </div>


</div>

<div class="row mt-3">

    
    <div class="col-md-3">
        <label for="no_index_status" class="form-label">No Index Status</label>
        <select class="form-select" name="no_index_status" id = "no_index_status" aria-label="Default select example" required>
            <option>No Index Page</option>
            <option value="Y">Yes</option>
            <option value="N">No</option>
          </select>
        
      </div>

      <div class="col-md-3">
        <label for="status" class="form-label">Status</label>
        <select class="form-select" name="status" id = "status" aria-label="Default select example" required>
            <option>Select Status</option>
            <option value="Y">Yes</option>
            <option value="N">No</option>
          </select>
        
      </div>

      <div class="col-md-3">
        <label for="priority" class="col-form-label">Priority</label>
        <input type="text" name="priority" id="priority" class="form-control" value="{{$priority}}" required ReadOnly/>
      </div>


</div> 

        <div class="text-center"><br/>
          <input type="submit" class="btn btn-primary" value="Add Meta" id="myButton"  />
      
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
      $('#page_url').on('keyup', function() {
          var value = $(this).val();
          
          $.ajax({
              type: 'POST',
              url: '{{ route("search_meta_slug") }}',
              data: { 
                  _token: '{{ csrf_token() }}', 
                  value: value 
              },
              dataType: 'json',
              success: function(data) {
                  console.log('Response:', data);
                  if (data.exists) {
                      $('#result').text('URL Already Exists.');
                      $('#myButton').hide();
                  } else {
                      $('#result').text('New URL');
                      $('#myButton').show();
                  }
              },
              error: function(xhr, status, error) {
        console.log(xhr.responseText);  // Log the response text to see the actual error message
        console.log('Status:', status);
        console.log('Error:', error);
    }
          });
      });
  });
</script>


@endsection

